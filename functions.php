<?php
function exerciseOne() {
drawArmrise(); drawPushup(); drawArmrise(); drawRun();
}
function exerciseTwo() {
drawPushup(); drawArmrise(); drawRun();
}
function exerciseThree() {
drawSitup(); drawBenchpress(); drawSitup(); drawArmrise();
}
function exerciseFour() {
drawBenchpress(); drawRun(); drawArmrise(); drawSitup(); drawBenchpress();
}
function drawSitup() {
?> <img src="run.jpg" alt="run" style="width:420px">
<?php ;}
function drawPushup() {
?> <img src="benchpress.jpg" alt="benchpress" style="width:420px">
<?php ;}
function drawBenchpress() {
?> <img src="pushup.jpg" alt="pushup" style="width:420px">
<?php ;}
function drawArmrise() {
?> <img src="armraise.jpg" alt="armraise" style="width:420px">
<?php ; }
function drawRun() {
?> <img src="situp.png" alt="situp" style="width:420px">
<?php ; }
