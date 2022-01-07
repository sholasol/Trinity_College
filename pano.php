<!DOCTYPE html>
<html>
<head>
<title>Trinity International College</title>
<meta name="description" content="A 360° tour of Trinity International College" />
<meta charset="utf-8">
<meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui" />
<style> @-ms-viewport { width: device-width; } </style>
<link rel="stylesheet" href="assets/css/reset.css">
<link rel="stylesheet" href="assets/css/pano-style.css">
</head>
<body class="multiple-scenes view-control-buttons">

<div id="pano"></div>

<div id="sceneList">
  <ul class="scenes">
    <a href="javascript:void(0)" class="scene" data-id="oriente-station">
      <li class="text">Oriente Station</li>
    </a>
    <a href="javascript:void(0)" class="scene" data-id="electricity-museum">
      <li class="text">Electricity Museum</li>
    </a>
    <a href="javascript:void(0)" class="scene" data-id="jeronimos">
      <li class="text">Jerónimos Monastery</li>
    </a>
  </ul>
</div>

<div id="titleBar">
  <h1 class="sceneName"></h1>
</div>

<a href="javascript:void(0)" id="autorotateToggle">
  <img class="icon off" src="assets/img/img/play.png">
  <img class="icon on" src="assets/img/img/pause.png">
</a>

<a href="javascript:void(0)" id="fullscreenToggle">
  <img class="icon off" src="assets/img/img/fullscreen.png">
  <img class="icon on" src="assets/img/img/windowed.png">
</a>

<a href="javascript:void(0)" id="sceneListToggle">
  <img class="icon off" src="assets/img/img/expand.png">
  <img class="icon on" src="assets/img/img/collapse.png">
</a>

<a href="javascript:void(0)" id="viewUp" class="viewControlButton viewControlButton-1">
  <img class="icon" src="assets/img/img/up.png">
</a>
<a href="javascript:void(0)" id="viewDown" class="viewControlButton viewControlButton-2">
  <img class="icon" src="assets/img/img/down.png">
</a>
<a href="javascript:void(0)" id="viewLeft" class="viewControlButton viewControlButton-3">
  <img class="icon" src="assets/img/img/left.png">
</a>
<a href="javascript:void(0)" id="viewRight" class="viewControlButton viewControlButton-4">
  <img class="icon" src="assets/img/img/right.png">
</a>
<a href="javascript:void(0)" id="viewIn" class="viewControlButton viewControlButton-5">
  <img class="icon" src="assets/img/img/plus.png">
</a>
<a href="javascript:void(0)" id="viewOut" class="viewControlButton viewControlButton-6">
  <img class="icon" src="assets/img/img/minus.png">
</a>

<script src="assets/js/screenfull.js" ></script>
<script src="assets/js/bowser.js" ></script>
<script src="assets/js/marzipano.js" ></script>

<script src="assets/js/data.js"></script>
<script src="assets/js/index.js"></script>

</body>
</html>