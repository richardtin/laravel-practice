<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Practice - Maker.js</title>

    <script src="http://microsoft.github.io/maker.js/target/js/browser.maker.js" type="text/javascript"></script>

    <style>
        svg {
            height: 200px;
            width: 100%;
        }
        .house {
            height: 200px;
            width: 100%;
        }
        .box {
            height: 100px;
            width: 100%;
        }
    </style>
    <script type="text/javascript">
//render a simple house using ConnectTheDots and Square

var makerjs = require('makerjs');

// Example: house with windows
var points = [
  [100, 0], [100, 100], [0, 175], [-100, 100], [-100, 0],
  [-20, 0], [-20, 80], [20, 80], [20, 0]
];

var house = new makerjs.models.ConnectTheDots(true, points);

var window1 = new makerjs.models.Square(40);
window1.origin = [40, 40];

var window2 = new makerjs.models.Square(40);
window2.origin = [-80, 40];

var houseWithWindows = {
  models: { "myHouse": house, "window1": window1, "window2": window2 }
}

var svg = makerjs.exporter.toSVG(houseWithWindows);

document.writeln(svg);

// Example: polygon rimbox
var arc = makerjs.paths.Arc;
var line = makerjs.paths.Line;
var point = makerjs.point;
var PolygonRimboxInside = (function () {
    function PolygonRimboxInside(angle, radius, holeRadius, rimThickness) {
        var rim = Math.min(rimThickness, holeRadius);
        var innerFilletCenter = point.rotate([radius + 2 * holeRadius + rim, 0], 90 + angle, [radius, 0]);
        var innerFilletTop = new arc(innerFilletCenter, holeRadius, 270 + angle, angle);
        var innerFilletTopPoints = point.fromArc(innerFilletTop);
        var innerFilletBottomPoint = [innerFilletTopPoints[1][0], -innerFilletTopPoints[1][1]];
        this.paths = {
            innerFilletTop: innerFilletTop,
            innerFilletBottom: makerjs.path.mirror(innerFilletTop, false, true),
            innerLine: new line(innerFilletTopPoints[1], point.rotate(innerFilletBottomPoint, angle * 2, [0, 0])),
            innerFillet: new arc([radius, 0], holeRadius + rim, 90 + angle, 270 - angle)
        };
    }
    return PolygonRimboxInside;
})();
var PolygonRimboxOutside = (function () {
    function PolygonRimboxOutside(angle, radius, holeRadius, rimThickness) {
        var outerFillet = new arc([radius, 0], holeRadius + rimThickness, -angle, angle);
        var outerFilletPoints = point.fromArc(outerFillet);
        var endPoint = point.rotate(outerFilletPoints[0], angle * 2, [0, 0]);
        this.paths = {
            outerFillet: outerFillet,
            outerLine: new line(outerFilletPoints[1], endPoint)
        };
    }
    return PolygonRimboxOutside;
})();
var PolygonRimbox = (function () {
    function PolygonRimbox(sides, radius, holeRadius, rimThickness, solid) {
        if (arguments.length == 0) {
            var defaultValues = makerjs.kit.getParameterValues(PolygonRimbox);
            sides = defaultValues.shift();
            radius = defaultValues.shift();
            holeRadius = defaultValues.shift();
            rimThickness = defaultValues.shift();
        }
        var mm = makerjs.models;
        this.models = {
            bolts: new mm.BoltCircle(radius, holeRadius, sides),
            inner: { models: {} },
            outer: { models: {} }
        };
        var angle = 180 / sides;
        var a2 = angle * 2;
        for (var i = 0; i < sides; i++) {
            var inside = makerjs.model.rotate(new PolygonRimboxInside(angle, radius, holeRadius, rimThickness), a2 * i, [0, 0]);
            var outside = makerjs.model.rotate(new PolygonRimboxOutside(angle, radius, holeRadius, rimThickness), a2 * i, [0, 0]);
            this.models['inner'].models['side' + i] = inside;
            this.models['outer'].models['side' + i] = outside;
        }
        if (solid) {
            delete this.models['inner'];
        }
    }
    return PolygonRimbox;
})();

var box1 = new PolygonRimbox(6, 50, 3, 2, false);
var box2 = new PolygonRimbox(8, 50, 3, 2, false);
box2.origin = [120, 0];
var rimbox = {
    models: { "box1": box1, "box2": box2 }
};
var svg1 = makerjs.exporter.toSVG(rimbox);
document.write(svg1);

    </script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<center><h1>Maker.js Test</h1></center>
<canvas class="house"></canvas>
<canvas class="box"></canvas>

</body>

</html>
