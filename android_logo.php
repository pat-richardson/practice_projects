<?php

/* 5-5-15
 * practice project from thecodeplater.com
 */

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JS Bin</title>
</head>
<body>
  
  <div class="android">
    <div class="head">
      <div class="l_ant"></div>
      <div class="r_ant"></div>
      <div class="l_eye"></div>
      <div class="r_eye"></div>
    </div>
    <div class="body">
      <div class="l_arm"></div>
      <div class="r_arm"></div>
      <div class="l_leg"></div>
      <div class="r_leg"></div>
    </div>
  </div>

</body>
</html>
<style> 
div {
  margin: 0;
  padding: 0;
}

div div {
  background: #A4CA39;
  position: relative;
}

.android {
  height: 404px;
  width: 334px;
  margin: 0 auto;
}

.head {
  width: 220px; 
  height: 100px;
  top: 32px;
  
  border-radius: 110px 110px 0 0;
  -moz-border-radius: 110px 110px 0 0;
  -webkit-border-radius: 110px 110px 0 0;
}

.l_eye, .r_eye {
  background: #fff;
  width: 20px;
  height: 20px;
  position: absolute;
  top: 42px;
  
  border-radius: 10px;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
}

.l_eye {
  left: 50px;
}

.r_eye {
  right: 50px;
}

.l_ant, .r_ant {
  width: 6px;
  height: 50px;
  position: absolute;
  top: -34px;
  
  border-radius: 3px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
}

.l_ant {
  left: 50px;
  transform: rotate(-30deg);
  -webkit-transform: rotate(-30deg);
  -moz-transform: rotate(-30deg);
}

.r_ant {
  right: 50px;
  transform: rotate(30deg);
  -webkit-transform: rotate(30deg);
  -moz-transform: rotate(30deg);
}

.body {
  width: 220px;
  height: 184px;
  top: 40px;
  
  border-radius: 0 0 25px 25px;
  -webkit-border-radius: 0 0 25px 25px;
  -mox-border-radius: 0 0 25px 25px;
}

.l_arm, .r_arm, .l_leg, .r_leg {
  width: 50px;
  position: absolute;
  -webkit-transition: all 0.1s ease-in;
  
}

.l_arm, .r_arm {
  height: 150px;
  border-radius: 25px;
  -webkit-border-radius: 25px;
  -moz-border-radius: 25px;
}

.l_leg, .r_leg {
  height: 80px;
  top: 182px;
  border-radius: 0 0 25px 25px;
  -webkit-border-radius: 0 0 25px 25px;
  -moz-border-radius: 0 0 25px 25px;
}


.l_arm {
  left: -58px;
}

.r_arm {
  right: -58px;
}

.l_leg {
  left: 45px;
}

.r_leg {
  right: 45px;
}

.head:hover {
  -webkit-transform: rotate(-5deg) translate(-4px, -8px);
  -moz-transform: rotate(-5deg) translate(-4px, -8px);
  -transform: rotate(-5deg) translate(-4px, -8px);
}

.l_arm:hover {
  -webkit-transform: rotate(15deg) translate(-14px, 0);
  -moz-transform: rotate(15deg) translate(-14px, 0);
  -transform: rotate(15deg) translate(-14px, 0);
}

.r_arm:hover {
  -webkit-transform: rotate(-30deg) translate(30px, 0);
  -moz-transform: rotate(-30deg) translate(30px, 0);
  -transform: rotate(-30deg) translate(30px, 0);
}    
</style>