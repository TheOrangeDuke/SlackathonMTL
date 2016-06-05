<!DOCTYPE html>
<html>
<head>
<title>Innovation Drive</title>
<link rel="stylesheet" type="text/css" href="core/style.css">
<link rel="stylesheet" type="text/css" href="core/canvas.css">
<script src="core/insert.js" type="text/javascript"></script>
</head>

<?php
function getAll(){
  Flow flow = new Flow();
  $stuff = flow->getAll();
  return $stuff;
}

$stuff = getAll();
$stuff = json_decode($stuff);
$map = $stuff['ideaMap'];
?>

<body onload="load()">
<header>
  <h1>Lean Canvas</h1>
</header>
<div id="wrapper">
  <div id="canvas-wrapper">
    <div id="canvas-top">
      <div class="split-horizontal-fifth">
        <div class="split-vertical-half">
          <div class="canvas-container">
            <div class="canvas-title">Problem</div>
            <div id="get-prob" contenteditable="true" class="canvas-fill">
              <?php echo $map['PROBLEM']; ?>
            </div>
          </div>
        </div>
        <div class="split-vertical-half">
          <div class="canvas-container">
            <span class="canvas-title">Existing Alternatives</span>
            <div id="get-alt" contenteditable="true" class="canvas-fill"></div>
          </div>
        </div>
      </div>
      <div class="split-horizontal-fifth">
        <div class="split-vertical-half split-bottom-padding">
          <div class="canvas-container">
            <span class="canvas-title">Solution</span>
            <div id="get-sol" contenteditable="true" class="canvas-fill"></div>
          </div>
        </div>
        <div class="split-vertical-half">
          <div class="canvas-container">
            <span class="canvas-title">Key Metrics</span>
            <div id="get-met" contenteditable="true" class="canvas-fill"></div>
          </div>
        </div>
      </div>
      <div class="split-horizontal-fifth">
        <div class="split-vertical-half">
          <div class="canvas-container">
            <span class="canvas-title">Value Proposition</span>
            <div id="get-prop" contenteditable="true" class="canvas-fill"></div>
          </div>
        </div>
        <div class="split-vertical-half">
          <div class="canvas-container">
            <span class="canvas-title">High-Level Concept</span>
            <div id="get-con" contenteditable="true" class="canvas-fill"></div>
          </div>
        </div>
      </div>
      <div class="split-horizontal-fifth">
        <div class="split-vertical-half split-bottom-padding">
          <div class="canvas-container">
            <span class="canvas-title">Unfair Advantage</span>
            <div id="get-adv" contenteditable="true" class="canvas-fill"></div>
          </div>
        </div>
        <div class="split-vertical-half">
          <div class="canvas-container">
            <span class="canvas-title">Channels</span>
            <div id="get-chan" contenteditable="true" class="canvas-fill"></div>
          </div>
        </div>
      </div>
      <div class="split-horizontal-fifth">
        <div class="split-vertical-half">
          <div class="canvas-container">
            <span class="canvas-title">Customer Segments</span>
            <div id="get-seg" contenteditable="true" class="canvas-fill"></div>
          </div>
        </div>
        <div class="split-vertical-half">
          <div class="canvas-container">
            <span class="canvas-title">Early Adopters</span>
            <div id="get-adop" contenteditable="true" class="canvas-fill"></div>
          </div>
        </div>
      </div>
    </div>
    <div id="canvas-bottom">
      <div class="split-horizontal-half">
        <div class="canvas-container">
          <span class="canvas-title">Cost Structure</span>
          <div id="get-cost" contenteditable="true" class="canvas-fill"></div>
        </div>
      </div>
      <div class="split-horizontal-half">
        <div class="canvas-container">
          <span class="canvas-title">Revenue Streams</span>
          <div id="get-rev" contenteditable="true" class="canvas-fill"></div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
