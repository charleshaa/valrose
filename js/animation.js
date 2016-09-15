window.requestAnimFrame = (function () {
    return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || function ( /* function */ callback, /* DOMElement */ element) {
        window.setTimeout(callback, 1000 / 60);
    };
})();

var firstCanvas = $('#first-canvas').get(0);
var firstContext = firstCanvas.getContext("2d");
// var secondCanvas = $('#second-canvas').get(0);
// var secondContext = secondCanvas.getContext("2d");

var firstWidth = firstCanvas.width;
var firstHeight = firstCanvas.height;

var frameTopCoords = [];
frameTopCoords.push({x:480,y:200});
frameTopCoords.push({x:480,y:120});
frameTopCoords.push({x:850,y:120});
frameTopCoords.push({x:850,y:180});

var frameBottomCoords = [];
frameBottomCoords.push({x:480,y:330});
frameBottomCoords.push({x:480,y:430});
frameBottomCoords.push({x:850,y:430});
frameBottomCoords.push({x:850,y:390});

function calcWaypoints(vertices){
    var waypoints=[];
    for(var i=1;i<vertices.length;i++){
        var pt0=vertices[i-1];
        var pt1=vertices[i];
        var dx=pt1.x-pt0.x;
        var dy=pt1.y-pt0.y;
        for(var j=0;j<100;j++){
            var x=parseInt(pt0.x+dx*j/100);
            var y=parseInt(pt0.y+dy*j/100);
            waypoints.push({x:x,y:y});
        }
    }
    return(waypoints);
}

var pointsTop = calcWaypoints(frameTopCoords);
var pointsBottom = calcWaypoints(frameBottomCoords);

var testCoords = [
    {x: 480, y: 330},
    {x: 850, y: 330}
];

var pointsTest = calcWaypoints(testCoords);

console.log(pointsTop);
var t = 1;




function animateFrame(ctx, points, callback){

    var speed = 3;

    if(t<points.length-1){ requestAnimationFrame(function(){animateFrame(ctx, points)}); }

    // draw a line segment from the last waypoint
    // to the current waypoint
    ctx.strokeStyle = '#ffffff';
    ctx.lineWidth = 2;
    ctx.beginPath();
    ctx.moveTo(points[t-1].x,points[t-1].y);
    ctx.lineTo(points[t].x,points[t].y);
    ctx.stroke();
    // increment "t" to get the next waypoint
    t = t + speed;

}



function drawFrame(c){
    // Clear canvas

    c.clearRect(0,0,firstWidth,firstHeight);

    c.beginPath();

    // Top line
    c.moveTo(480, 200);
    c.lineTo(480, 120);
    c.lineTo(850, 120);
    c.lineTo(850, 180);

    // Bottom line
    c.moveTo(480, 330);
    c.lineTo(480, 430);
    c.lineTo(850, 430);
    c.lineTo(850, 390);

    c.strokeStyle = "#ffffff";
    c.lineWidth = 4;
    c.stroke()
    c.closePath();

};


//animateFrame(firstContext, pointsTop);

drawFrame(firstContext);
