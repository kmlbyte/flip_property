<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Flip 3D Animation</title>
<style>
.flip3d {
	width:400;
	height:400;
	float:left;
	position:relative;

}
#first{
	margin-left:30px;
}
#second{
	margin-left:600px;
}
.flip3d>.front {
	position:absolute;
	transform:perspective(600px) rotateY(0deg);
	-webkit-transform:perspective(600px) rotateY(0deg);
	backface-visibility:hidden;
	-webkit-backface-visibility:hidden;
	transition:transform 2s linear 0s;
	-webkit-transition:transform 2s linear 0s;
  -moz-transition:transform 2s linear 0s;
}
.flip3d>.back {
	position: absolute;
	transform:perspective(600px) rotateY(180deg);
	-webkit-transform:perspective(600px) rotateY(180deg);
	backface-visibility:hidden;
	-webkit-backface-visibility:hidden;
	transition:transform 2s linear 0s;
	-webkit-transition:transform 2s linear 0s;
	-moz-transition:transform 2s linear 0s;

}
.flip3d:hover>.front{
	transform:perspective(600px) rotateY(-180deg);
	-webkit-transform:perspective(600px) rotateY(-180deg);
}
.flip3d:hover>.back{
	transform:perspective(600px) rotateY(0deg);
	-webkit-transform:perspective(600px) rotateY(0deg);
}
</style>
</head>
<body>
<div class="flip3d" id="first">
<div class="back">
<img src="backimg.png" width="400" height="400" />
</div>
<div class="front">
<img src="frontimg.png" width="400" height="400" />
</div>
</div>

<div class="flip3d" id="second">
<div class="back">
<img src="sad.gif" width="400" height="400" />
</div>
<div class="front">
<img src="smile.gif" width="400" height="400" />
</div>
</div>

</body>
</html>