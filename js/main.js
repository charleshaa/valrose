;
(function() {

    'use strict';

    var isSafari = !!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/);
    var isIphone = !!navigator.userAgent.match(/iPhone/i);
    var size = function(ratio) {
        var h = $(window).height() * ratio;
        var w = $(window).width() * ratio;
        return {
            width: w,
            minHeight: h
        };
    };

    var resize = function(size, selector) {
        $(selector || '.toresize').css(size);
    }


    // iPad and iPod detection
    var isiPad = function() {
        return (navigator.platform.indexOf("iPad") != -1);
    };

    var isiPhone = function() {
        return (
            (navigator.platform.indexOf("iPhone") != -1) ||
            (navigator.platform.indexOf("iPod") != -1)
        );
    };

    var parallax = function() {
        if (!isSafari) {
            $(window).stellar({
                horizontalScrolling: false,
                hideDistantElements: false,
                responsive: true
            });
        }
    };


    function elementInViewport(el) {
        var top = el.offsetTop;
        var left = el.offsetLeft;
        var width = el.offsetWidth;
        var height = el.offsetHeight;

        while (el.offsetParent) {
            el = el.offsetParent;
            top += el.offsetTop;
            left += el.offsetLeft;
        }

        return (
            top >= window.pageYOffset &&
            left >= window.pageXOffset &&
            (top + height) <= (window.pageYOffset + window.innerHeight) &&
            (left + width) <= (window.pageXOffset + window.innerWidth)
        );
    };

    function elementInViewport2(el) {
        var top = el.offsetTop;
        var left = el.offsetLeft;
        var width = el.offsetWidth;
        var height = el.offsetHeight;

        while (el.offsetParent) {
            el = el.offsetParent;
            top += el.offsetTop;
            left += el.offsetLeft;
        }

        return (
            top < (window.pageYOffset + window.innerHeight) &&
            left < (window.pageXOffset + window.innerWidth) &&
            (top + height) > window.pageYOffset &&
            (left + width) > window.pageXOffset
        );
    }

    function goSmooth(element, speed) {
        $('html, body').animate({
            scrollTop: $(element).offset().top
        }, speed);
    }

    // Document on load.
    $(function() {
        parallax();
        resize(size(1), '.fullsize');
        $(window).on('resize', function() {
            resize(size(1), '.fullsize');
        });
        // setTimeout(function () {
        // 	$('#first').find('.svg-frame-cnt').addClass('in');
        // }, 500);

        $(window).on('scroll', function() {
            $('.insection').each(function() {
                if (elementInViewport2($(this).get(0)) && !$(this).hasClass('in')) {
                    $(this).addClass('in');
                }
            });
        });

        $('.scroll-to').on('click', function() {
            goSmooth($(this).attr('href'), 2000);
            return false;
        });

        var nowTemp = new Date(1480546800000);
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#arrival').datepicker({
            onRender: function(date) {
                return date.valueOf() < now.valueOf() ? 'disabled' : '';
            }
        }).on('changeDate', function(ev) {
            if (ev.date.valueOf() > checkout.date.valueOf()) {
                var newDate = new Date(ev.date)
                newDate.setDate(newDate.getDate() + 1);
                checkout.setValue(newDate);
            }
            checkin.hide();
            $('#departure')[0].focus();
        }).data('datepicker');
        var checkout = $('#departure').datepicker({
            onRender: function(date) {
                return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
            }
        }).on('changeDate', function(ev) {
            checkout.hide();
        }).data('datepicker');

        $('#date').datepicker({
            onRender: function(date) {
                return date.valueOf() < now.valueOf() ? 'disabled' : '';
            }
        });

        $('#hour').timepicki({
            step_size_minutes: 15,
            disable_keyboard_mobile: true,
            start_time: ["08", "00", "PM"]
        });


        $('ul.booking-tabs').on('shown.bs.tab', 'a', function(e) {
            var type = $(e.target).data('type');
            $('#restaurant-type').val(type);
        });

        $('.valform').submit(function(e) {
            e.preventDefault();
            console.log($(this).serializeArray());
            var paramObj = {};
            $.each($(this).serializeArray(), function(_, kv) {
                if (paramObj.hasOwnProperty(kv.name)) {
                    paramObj[kv.name] = $.makeArray(paramObj[kv.name]);
                    paramObj[kv.name].push(kv.value);
                } else {
                    paramObj[kv.name] = kv.value;
                }
            });
            $.post('book.php', paramObj, function(data) {
                console.log(data);
            });
            return false;
        });

        $(document).ajaxSuccess(function (e, xhr, opts, data) {
            console.log(data);
            console.log("Form submitted");
        });


    });


}());
