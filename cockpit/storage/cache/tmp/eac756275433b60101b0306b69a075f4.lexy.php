<script>

    setTimeout(function(){

        if (!window.FormData) return;

        var form        = document.getElementById("<?php echo  $options['id'] ; ?>"),
            msgsuccess  = form.getElementsByClassName("form-message-success").item(0),
            msgfail     = form.getElementsByClassName("form-message-fail").item(0),
            disableForm = function(status) {
                for(var i=0, max=form.elements.length;i<max;i++) form.elements[i].disabled = status;
            },
            success     = function(){
                if (msgsuccess) {
                    msgsuccess.style.display = 'block';
                } else {
                    alert("<?php echo $app("i18n")->get('Form submission was successfull.'); ?>");
                }

                disableForm(false);
            },
            fail        = function(){
                if (msgfail) {
                    msgfail.style.display = 'block';
                } else {
                    alert("<?php echo $app("i18n")->get('Form submission failed.'); ?>");
                }

                disableForm(false);
            };

        if (msgsuccess) msgsuccess.style.display = "none";
        if (msgfail)    msgfail.style.display = "none";

        form.addEventListener("submit", function(e) {

            e.preventDefault();

            if (msgsuccess) msgsuccess.style.display = "none";
            if (msgfail)    msgfail.style.display = "none";

            var xhr = new XMLHttpRequest(), data = new FormData(form);

            xhr.onload = function(){

                if (this.status == 200 && this.responseText!='false') {
                    success();
                    form.reset();
                } else {
                    fail();
                }
            };

            disableForm(true);

            xhr.open('POST', "<?php $app->route('/api/forms/submit/'.$name); ?>", true);
            xhr.send(data);

        }, false);

    }, 100);

</script>

<form id="<?php echo  $options["id"] ; ?>" name="<?php echo  $name ; ?>" class="<?php echo  $options["class"] ; ?>" action="<?php $app->route('/api/forms/submit/'.$name); ?>" method="post" onsubmit="return false;">
<input type="hidden" name="__csrf" value="<?php echo  $options["csrf"] ; ?>">
<?php if(isset($options["mailsubject"])) { ?>:
<input type="hidden" name="__mailsubject" value="<?php echo  $options["mailsubject"] ; ?>">
<?php } ?>