<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="en-US">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2018.1.0.386"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
  <script type="text/javascript">
   // Update the 'nojs'/'js' class on the html node
document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

// Check that all required assets are uploaded and up-to-date
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.watch.js", "require.js", "employee_time.css"], "outOfDate":[]};
</script>
  
  <title>employee_time</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=133766301"/>
  <link rel="stylesheet" type="text/css" href="css/employee_time.css?crc=92693933" id="pagesheet"/>
    <!--HTML Widget code-->
  

<link type="text/css" rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"/>

<style>

.button{
  cursor: pointer;
}
/* .st-content {
	overflow-y: scroll;
	background: #f3efe0;
}
*/
 .st-content,
 .st-content-inner {
	position: relative;
}

 .st-container {
	position: relative;
	overflow: hidden;
}

 .st-pusher {
	position: relative;
	left: 0;
	z-index: 99;
	height: 100%;
	-webkit-transition: -webkit-transform 0.5s;
	transition: transform 0.5s;
}

 .st-pusher::after {
	position: absolute;
	top: 0;
	right: 0;
	width: 0;
	height: 0;
	/*background: rgba(0,0,0,0.2);*/
	content: '';
	opacity: 0;
	-webkit-transition: opacity 0.5s, width 0.1s 0.5s, height 0.1s 0.5s;
	transition: opacity 0.5s, width 0.1s 0.5s, height 0.1s 0.5s;
}

 .st-menu-open .st-pusher::after {
	width: 100%;
	height: 100%;
	opacity: 1;
	-webkit-transition: opacity 0.5s;
	transition: opacity 0.5s;
}

 .st-menu {
	position: absolute;
	top: 0;
	left: 0px;
	z-index: 100;
	visibility: hidden;
	width: 300px;
	height: 100%;
	background: #9A5252;
	-webkit-transition: all 0.5s;
	transition: all 0.5s;
    overflow-y: scroll;
}

 .st-menu::after {
	position: absolute;
	top: 0;
	right: 0;
	width: 100%;
	height: 100%;
	background: rgba(0,0,0,0.2);
	content: '';
	opacity: 1;
	-webkit-transition: opacity 0.5s;
	transition: opacity 0.5s;
}

 .st-menu-open .st-menu::after {
	width: 0;
	height: 0;
	opacity: 0;
	-webkit-transition: opacity 0.5s, width 0.1s 0.5s, height 0.1s 0.5s;
	transition: opacity 0.5s, width 0.1s 0.5s, height 0.1s 0.5s;
}

/* content style */

 .st-menu ul {
	margin: 0;
	padding: 0;
	list-style: none;
	text-align:left;
}

 .st-menu span.closeBtn{

 	padding:10px 15px;
 	color:rgba(0,0,0,0.5);
 	font-weight:bold;
 	float:right;
 	cursor:pointer;
 	font-size: {param_close_size}px;
 	font-family: trebuchet;
 }
 .st-menu span.closeBtn:hover{
 	color:rgba(255,255,255,0.5);
 }
 .st-menu h2 {
	margin: 0;
	padding: 1em 0.5em;
	color: #000000;
	text-shadow: 0 0 1px rgba(0,0,0,0.1);
	font-weight: 300;
	font-size: 30px;
	font-family:'Arial';
}

 .st-menu ul li a {
	display: block;
	padding: 15px;
	outline: none;
	box-shadow: inset 0 -1px rgba(0,0,0,0.2);
	color: #F3EFE0;
	text-shadow: 0 0 1px rgba(255,255,255,0.1);
	letter-spacing: 1px;
	font-weight: 400;
	font-size:15px;
	-webkit-transition: background 0.3s, box-shadow 0.3s;
	transition: background 0.3s, box-shadow 0.3s;
	text-decoration:none;
	font-family:"Arial";
}

 .st-menu ul li:first-child a {
	box-shadow: inset 0 -1px rgba(0,0,0,0.2), inset 0 1px rgba(0,0,0,0.2);
}

 .st-menu ul li a:hover {
	background: rgba(0,0,0,0.2);
	box-shadow: inset 0 -1px rgba(0,0,0,0);
	color: #9E9999;
}

/* Individual effects */

/* Effect 1: Slide in on top */
 .st-effect-1.st-menu {
	visibility: visible;
	-webkit-transform: translate3d(-100%, 0, 0);
	transform: translate3d(-100%, 0, 0);
}

 .st-effect-1.st-menu-open .st-effect-1.st-menu {
	visibility: visible;
	-webkit-transform: translate3d(0, 0, 0);
	transform: translate3d(0, 0, 0);
}

 .st-effect-1.st-menu::after {
	display: none;
}

/* Effect 2: Reveal */
 .st-effect-2.st-menu-open .st-pusher {
	-webkit-transform: translate3d(300px, 0, 0);
	transform: translate3d(300px, 0, 0);
}

 .st-effect-2.st-menu {
	z-index: 1;
}

 .st-effect-2.st-menu-open .st-effect-2.st-menu {
	visibility: visible;
	-webkit-transition: -webkit-transform 0.5s;
	transition: transform 0.5s;
}

 .st-effect-2.st-menu::after {
	display: none;
}

/* Effect 3: Push*/
 .st-effect-3.st-menu-open .st-pusher {
	-webkit-transform: translate3d(300px, 0, 0);
	transform: translate3d(300px, 0, 0);
}

 .st-effect-3.st-menu {
	-webkit-transform: translate3d(-100%, 0, 0);
	transform: translate3d(-100%, 0, 0);
}

 .st-effect-3.st-menu-open .st-effect-3.st-menu {
	visibility: visible;
	-webkit-transition: -webkit-transform 0.5s;
	transition: transform 0.5s;
}

 .st-effect-3.st-menu::after {
	display: none;
}

/* Effect 4: Slide along */
 .st-effect-4.st-menu-open .st-pusher {
	-webkit-transform: translate3d(300px, 0, 0);
	transform: translate3d(300px, 0, 0);
}

 .st-effect-4.st-menu {
	z-index: 1;
	-webkit-transform: translate3d(-50%, 0, 0);
	transform: translate3d(-50%, 0, 0);
}

 .st-effect-4.st-menu-open .st-effect-4.st-menu {
	visibility: visible;
	-webkit-transition: -webkit-transform 0.5s;
	transition: transform 0.5s;
	-webkit-transform: translate3d(0, 0, 0);
	transform: translate3d(0, 0, 0);
}

 .st-effect-4.st-menu::after {
	display: none;
}

/* Effect 5: Reverse slide out */
 .st-effect-5.st-menu-open .st-pusher {
	-webkit-transform: translate3d(300px, 0, 0);
	transform: translate3d(300px, 0, 0);
}

 .st-effect-5.st-menu {
	z-index: 1;
	-webkit-transform: translate3d(50%, 0, 0);
	transform: translate3d(50%, 0, 0);
}

 .st-effect-5.st-menu-open .st-effect-5.st-menu {
	visibility: visible;
	-webkit-transition: -webkit-transform 0.5s;
	transition: transform 0.5s;
	-webkit-transform: translate3d(0, 0, 0);
	transform: translate3d(0, 0, 0);
}

/* Effect 6: Rotate pusher */

 .st-effect-6.st-container {
	-webkit-perspective: 1500px;
	perspective: 1500px;
}

 .st-effect-6 .st-pusher {
	-webkit-transform-origin: 0% 50%;
	transform-origin: 0% 50%;
	-webkit-transform-style: preserve-3d;
	transform-style: preserve-3d;
}

 .st-effect-6.st-menu-open .st-pusher {
	-webkit-transform: translate3d(300px, 0, 0) rotateY(-15deg);
	transform: translate3d(300px, 0, 0) rotateY(-15deg);
}

 .st-effect-6.st-menu {
	-webkit-transform: translate3d(-100%, 0, 0);
	transform: translate3d(-100%, 0, 0);
	-webkit-transform-origin: 100% 50%;
	transform-origin: 100% 50%;
	-webkit-transform-style: preserve-3d;
	transform-style: preserve-3d;
}

 .st-effect-6.st-menu-open .st-effect-6.st-menu {
	visibility: visible;
	-webkit-transition: -webkit-transform 0.5s;
	transition: transform 0.5s;
	-webkit-transform: translate3d(-100%, 0, 0) rotateY(15deg);
	transform: translate3d(-100%, 0, 0) rotateY(15deg);
}

 .st-effect-6.st-menu::after {
	display: none;
}

/* Effect 7: 3D rotate in */

 .st-effect-7.st-container {
	-webkit-perspective: 1500px;
	perspective: 1500px;
	-webkit-perspective-origin: 0% 50%;
	perspective-origin: 0% 50%;
}

 .st-effect-7 .st-pusher {
	-webkit-transform-style: preserve-3d;
	transform-style: preserve-3d;
}

 .st-effect-7.st-menu-open .st-pusher {
	-webkit-transform: translate3d(300px, 0, 0);
	transform: translate3d(300px, 0, 0);
}

 .st-effect-7.st-menu {
	-webkit-transform: translate3d(-100%, 0, 0) rotateY(-90deg);
	transform: translate3d(-100%, 0, 0) rotateY(-90deg);
	-webkit-transform-origin: 100% 50%;
	transform-origin: 100% 50%;
	-webkit-transform-style: preserve-3d;
	transform-style: preserve-3d;
}

 .st-effect-7.st-menu-open .st-effect-7.st-menu {
	visibility: visible;
	-webkit-transition: -webkit-transform 0.5s;
	transition: transform 0.5s;
	-webkit-transform: translate3d(-100%, 0, 0) rotateY(0deg);
	transform: translate3d(-100%, 0, 0) rotateY(0deg);
}

/* Effect 8: 3D rotate out */

 .st-effect-8.st-container {
	-webkit-perspective: 1500px;
	perspective: 1500px;
	-webkit-perspective-origin: 0% 50%;
	perspective-origin: 0% 50%;
}

 .st-effect-8 .st-pusher {
	-webkit-transform-style: preserve-3d;
	transform-style: preserve-3d;
}

 .st-effect-8.st-menu-open .st-pusher {
	-webkit-transform: translate3d(300px, 0, 0);
	transform: translate3d(300px, 0, 0);
}

 .st-effect-8.st-menu {
	-webkit-transform: translate3d(-100%, 0, 0) rotateY(90deg);
	transform: translate3d(-100%, 0, 0) rotateY(90deg);
	-webkit-transform-origin: 100% 50%;
	transform-origin: 100% 50%;
	-webkit-transform-style: preserve-3d;
	transform-style: preserve-3d;
}

 .st-effect-8.st-menu-open .st-effect-8.st-menu {
	visibility: visible;
	-webkit-transition: -webkit-transform 0.5s;
	transition: transform 0.5s;
	-webkit-transform: translate3d(-100%, 0, 0) rotateY(0deg);
	transform: translate3d(-100%, 0, 0) rotateY(0deg);
}

 .st-effect-8.st-menu::after {
	display: none;
}

/* Effect 9: Scale down pusher */

 .st-effect-9.st-container {
	-webkit-perspective: 1500px;
	perspective: 1500px;
}

 .st-effect-9 .st-pusher {
	-webkit-transform-style: preserve-3d;
	transform-style: preserve-3d;
}

 .st-effect-9.st-menu-open .st-pusher {
	-webkit-transform: translate3d(0, 0, -300px);
	transform: translate3d(0, 0, -300px);
}

 .st-effect-9.st-menu {
	opacity: 1;
	-webkit-transform: translate3d(-100%, 0, 0);
	transform: translate3d(-100%, 0, 0);
}

 .st-effect-9.st-menu-open .st-effect-9.st-menu {
	visibility: visible;
	-webkit-transition: -webkit-transform 0.5s;
	transition: transform 0.5s;
	-webkit-transform: translate3d(0, 0, 0);
	transform: translate3d(0, 0, 0);
}

 .st-effect-9.st-menu::after {
	display: none;
}

/* Effect 10: Scale up */

 .st-effect-10.st-container {
	-webkit-perspective: 1500px;
	perspective: 1500px;
	-webkit-perspective-origin: 0% 50%;
	perspective-origin: 0% 50%;
}

 .st-effect-10.st-menu-open .st-pusher {
	-webkit-transform: translate3d(300px, 0, 0);
	transform: translate3d(300px, 0, 0);
}

 .st-effect-10.st-menu {
	z-index: 1;
	opacity: 1;
	-webkit-transform: translate3d(0, 0, -300px);
	transform: translate3d(0, 0, -300px);
}

 .st-effect-10.st-menu-open .st-effect-10.st-menu {
	visibility: visible;
	-webkit-transition: -webkit-transform 0.5s;
	transition: transform 0.5s;
	-webkit-transform: translate3d(0, 0, 0);
	transform: translate3d(0, 0, 0);
}

/* Effect 11: Scale and rotate pusher */

 .st-effect-11.st-container {
	-webkit-perspective: 1500px;
	perspective: 1500px;
}

 .st-effect-11 .st-pusher {
	-webkit-transform-style: preserve-3d;
	transform-style: preserve-3d;
}

 .st-effect-11.st-menu-open .st-pusher {
	-webkit-transform: translate3d(100px, 0, -600px) rotateY(-20deg);
	transform: translate3d(100px, 0, -600px) rotateY(-20deg);
}

 .st-effect-11.st-menu {
	opacity: 1;
	-webkit-transform: translate3d(-100%, 0, 0);
	transform: translate3d(-100%, 0, 0);
}

 .st-effect-11.st-menu-open .st-effect-11.st-menu {
	visibility: visible;
	-webkit-transition: -webkit-transform 0.5s;
	transition: transform 0.5s;
	-webkit-transform: translate3d(0, 0, 0);
	transform: translate3d(0, 0, 0);
}

 .st-effect-11.st-menu::after {
	display: none;
}

/* Effect 12: Open door */

 .st-effect-12.st-container {
	-webkit-perspective: 1500px;
	perspective: 1500px;
}

 .st-effect-12 .st-pusher {
	-webkit-transform-origin: 100% 50%;
	transform-origin: 100% 50%;
	-webkit-transform-style: preserve-3d;
	transform-style: preserve-3d;
}

 .st-effect-12.st-menu-open .st-pusher {
	-webkit-transform: rotateY(-10deg);
	transform: rotateY(-10deg);
}

 .st-effect-12.st-menu {
	opacity: 1;
	-webkit-transform: translate3d(-100%, 0, 0);
	transform: translate3d(-100%, 0, 0);
}

 .st-effect-12.st-menu-open .st-effect-12.st-menu {
	visibility: visible;
	-webkit-transition: -webkit-transform 0.5s;
	transition: transform 0.5s;
	-webkit-transform: translate3d(0, 0, 0);
	transform: translate3d(0, 0, 0);
}

 .st-effect-12.st-menu::after {
	display: none;
}

/* Effect 13: Fall down */

 .st-effect-13.st-container {
	-webkit-perspective: 1500px;
	perspective: 1500px;
	-webkit-perspective-origin: 0% 50%;
	perspective-origin: 0% 50%;
}

 .st-effect-13.st-menu-open .st-pusher {
	-webkit-transform: translate3d(300px, 0, 0);
	transform: translate3d(300px, 0, 0);
}

 .st-effect-13.st-menu {
	z-index: 1;
	opacity: 1;
	-webkit-transform: translate3d(0, -100%, 0);
	transform: translate3d(0, -100%, 0);
}

 .st-effect-13.st-menu-open .st-effect-13.st-menu {
	visibility: visible;
	-webkit-transition-timing-function: ease-in-out;
	transition-timing-function: ease-in-out;
	-webkit-transition-property: -webkit-transform;
	transition-property: transform;
	-webkit-transform: translate3d(0, 0, 0);
	transform: translate3d(0, 0, 0);
	-webkit-transition-speed: 0.2s;
	transition-speed: 0.2s;
}

/* Effect 14: Delayed 3D rotate */

 .st-effect-14.st-container {
	-webkit-perspective: 1500px;
	perspective: 1500px;
	-webkit-perspective-origin: 0% 50%;
	perspective-origin: 0% 50%;
}

 .st-effect-14 .st-pusher {
	-webkit-transform-style: preserve-3d;
	transform-style: preserve-3d;
}

 .st-effect-14.st-menu-open .st-pusher {
	-webkit-transform: translate3d(300px, 0, 0);
	transform: translate3d(300px, 0, 0);
}

 .st-effect-14.st-menu {
	-webkit-transform: translate3d(-100%, 0, 0) rotateY(90deg);
	transform: translate3d(-100%, 0, 0) rotateY(90deg);
	-webkit-transform-origin: 0% 50%;
	transform-origin: 0% 50%;
	-webkit-transform-style: preserve-3d;
	transform-style: preserve-3d;
}

 .st-effect-14.st-menu-open .st-effect-14.st-menu {
	visibility: visible;
	-webkit-transition-delay: 0.1s;
	transition-delay: 0.1s;
	-webkit-transition-timing-function: ease-in-out;
	transition-timing-function: ease-in-out;
	-webkit-transition-property: -webkit-transform;
	transition-property: transform;
	-webkit-transform: translate3d(-100%, 0, 0) rotateY(0deg);
	transform: translate3d(-100%, 0, 0) rotateY(0deg);
}

/* Fallback example for browsers that don't support 3D transforms (and no JS fallback) */
/* .no-csstransforms3d .st-pusher,
 .no-js .st-pusher {
	padding-left: 300px;
}*/



/* Clearfix hack by Nicolas Gallagher: http://nicolasgallagher.com/micro-clearfix-hack/ */
 .clearfix:before,
 .clearfix:after {
	display: table;
	content: " ";
}

 .clearfix:after {
	clear: both;
}


 .main {
	max-width: 69em;
	margin: 0 auto;
}

 .column {
	float: left;
	width: 100px;
	/*padding: 0 2em;
	min-height: 300px;
	position: relative;
	text-align: right;*/
}

 .column:nth-child(2) {
	box-shadow: -1px 0 0 rgba(0,0,0,0.1);
	text-align: left;
}


.column button {
	border: none;
	padding: 5px 10px;
	background: #{param_btn_color};
	color: #{param_btn_font_color};
	font-family: {param_btn_font};
	font-size: {param_btn_font_size}px;
	letter-spacing: 1px;
	text-transform: uppercase;
	cursor: pointer;
	display: inline-block;
	margin: 3px 2px;
	border-radius: 2px;
}

.column button:hover {
	background: #{param_btn_hover_color};
	color: #{param_btn_hover_font_color};
}

.st-menu .logo img{

	margin:5px 0 0 0;
	width:80px;
	height:80px;
 }
.st-menu .logo{
	clear:both;
}

.{param_menu_button_custom_class} {
	cursor: pointer;
}

.st-menu ul {
	margin: 0;
	padding: 0;
	list-style: none;
}

.st-menu h2 {
	margin: 0;
	padding: 1em;
	color: 000000;
	text-shadow: 0 0 1px rgba(0,0,0,0.1);
	font-weight: 300;
	font-size: 30px;
  font-family: Arial;
}

.st-menu ul li a {
	display: block;
	padding: 15px 1em 15px 1.2em;
	outline: none;
	box-shadow: inset 0 -1px rgba(0,0,0,0.2);
	color: F3EFE0;
	text-transform: uppercase;
	text-shadow: 0 0 1px rgba(255,255,255,0.1);
	letter-spacing: 1px;
	font-weight: 400;
	-webkit-transition: background 0.3s, box-shadow 0.3s;
	transition: background 0.3s, box-shadow 0.3s;
  text-align: left;
  font-family: Arial, sans-serif;
  font-size: 15px;
}

.st-menu ul li a:hover{
  color: 9E9999;
}

.st-menu ul li:first-child a {
	box-shadow: inset 0 -1px rgba(0,0,0,0.2), inset 0 1px rgba(0,0,0,0.2);
}

.st-menu ul li a:hover {
	background: rgba(0,0,0,0.2);
	box-shadow: inset 0 -1px rgba(0,0,0,0);
}

.menu-close i{
  color: #000000;
}

.menu-close{
  position: absolute;
  right: 15px;
  top: 30px;
  width: 20px;
  height: 20px;
  cursor: pointer;
}

.menu-close button{
  border: none;
  background-color: transparent;
  width: 100%;
  height: 100%;
  cursor: pointer;
  font-size: 20px;
  color: #000000;
}

.menu-close i{
  font-size: 20px;
}

.st-menu img{
  width: 80px;
  height: 80px;
  padding: 40px 0px 10px 40px;
}


</style>



 </head>
 <body>

  <div class="clearfix borderbox" id="page"><!-- group -->
   <div class="clearfix grpelem" id="pu2914"><!-- column -->
    <div class="clearfix colelem" id="u2914"><!-- group -->
     <div class="Button rounded-corners button clearfix grpelem" id="buttonu2910" data-visibility="changed" style="visibility:hidden"><!-- container box -->
      <div class="rounded-corners colelem" id="u2911"><!-- simple frame --></div>
      <div class="rounded-corners colelem" id="u2913"><!-- simple frame --></div>
      <div class="rounded-corners colelem" id="u2912"><!-- simple frame --></div>
     </div>
     <div class="clearfix grpelem" id="u2909-4"><!-- content -->
      <p>CP</p>
     </div>
    </div>
    <div class="clearfix colelem" id="u4168"><!-- column -->
     <div class="clearfix colelem" id="pu4057"><!-- group -->
      <a class="nonblock nontext MuseLinkActive clearfix grpelem" id="u4057" href="employee_time.html"><!-- group --><img class="grpelem" id="u4150-4" alt="Time Sheet" src="images/u4150-4.png?crc=4175918297" data-image-width="141"/><!-- rasterized frame --></a>
      <div class="clearfix grpelem" id="u4060"><!-- group -->
       <img class="grpelem" id="u4162-4" alt="Dispatch" src="images/u4162-4.png?crc=43866679" data-image-width="109"/><!-- rasterized frame -->
      </div>
     </div>
     <div class="clearfix colelem" id="pu4063"><!-- group -->
      <div class="clearfix grpelem" id="u4063"><!-- group -->
       <img class="grpelem" id="u4159-4" alt="Accounting" src="images/u4159-4.png?crc=163544750" data-image-width="141"/><!-- rasterized frame -->
      </div>
      <div class="clearfix grpelem" id="u4066"><!-- group -->
       <img class="grpelem" id="u4163-4" alt="Estimating" src="images/u4163-4.png?crc=4282423050" data-image-width="126"/><!-- rasterized frame -->
      </div>
     </div>
    </div>
    <a class="nonblock nontext Button clearfix colelem" id="buttonu2905" href="admin.html" data-visibility="changed" style="visibility:hidden"><!-- container box --><div class="grpelem" id="u2906"><!-- state-based BG images --><img alt="Administration" src="images/blank.gif?crc=4208392903"/><div class="fluid_height_spacer"></div></div></a>
    <div class="clip_frame colelem" id="u2899"><!-- image -->
     <img class="block" id="u2899_img" src="images/400dpilogocropped455x100.png?crc=3930767816" alt="" data-heightwidthratio="0.22112211221122113" data-image-width="303" data-image-height="67"/>
    </div>
    <a class="nonblock nontext Button clearfix colelem" id="buttonu2907" href="index.html" data-visibility="changed" style="visibility:hidden"><!-- container box --><div class="grpelem" id="u2908"><!-- state-based BG images --><img alt="Logout" src="images/blank.gif?crc=4208392903"/><div class="fluid_height_spacer"></div></div></a>
   </div>
   <div class="clearfix" id="u2901-3"><!-- content -->
    <p>&nbsp;</p>
   </div>
   <div class="clearfix grpelem" id="pu5128-4"><!-- group -->
    <div class="clearfix grpelem" id="u5128-4"><!-- content -->
     <p>Employee_time</p>
    </div>
    <div class="size_fluid_width grpelem" id="u2902" data-sizePolicy="fluidWidth" data-pintopage="page_fluidx"><!-- custom html -->
     

    	
    </div>
   </div>
   <div class="verticalspacer" data-offset-top="1001" data-content-above-spacer="1001" data-content-below-spacer="0" data-sizePolicy="fixed" data-pintopage="page_fixedLeft"></div>
  </div>
  <div class="preload_images">
   <img class="preload" src="images/u2906-r.png?crc=193805634" alt=""/>
   <img class="preload" src="images/u2908-r.png?crc=4194255742" alt=""/>
  </div>
  <!-- JS includes -->
  <script type="text/javascript">
   if (document.location.protocol != 'https:') document.write('\x3Cscript src="http://musecdn2.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script type="text/javascript">
   window.jQuery || document.write('\x3Cscript src="scripts/jquery-1.8.3.min.js?crc=209076791" type="text/javascript">\x3C/script>');
</script>
  <!-- Other scripts -->
  <script type="text/javascript">
   // Decide whether to suppress missing file error or not based on preference setting
var suppressMissingFileError = false
</script>
  <script type="text/javascript">
   window.Muse.assets.check=function(c){if(!window.Muse.assets.checked){window.Muse.assets.checked=!0;var b={},d=function(a,b){if(window.getComputedStyle){var c=window.getComputedStyle(a,null);return c&&c.getPropertyValue(b)||c&&c[b]||""}if(document.documentElement.currentStyle)return(c=a.currentStyle)&&c[b]||a.style&&a.style[b]||"";return""},a=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),
16);return 0},f=function(f){for(var g=document.getElementsByTagName("link"),j=0;j<g.length;j++)if("text/css"==g[j].type){var l=(g[j].href||"").match(/\/?css\/([\w\-]+\.css)\?crc=(\d+)/);if(!l||!l[1]||!l[2])break;b[l[1]]=l[2]}g=document.createElement("div");g.className="version";g.style.cssText="display:none; width:1px; height:1px;";document.getElementsByTagName("body")[0].appendChild(g);for(j=0;j<Muse.assets.required.length;){var l=Muse.assets.required[j],k=l.match(/([\w\-\.]+)\.(\w+)$/),i=k&&k[1]?
k[1]:null,k=k&&k[2]?k[2]:null;switch(k.toLowerCase()){case "css":i=i.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");g.className+=" "+i;i=a(d(g,"color"));k=a(d(g,"backgroundColor"));i!=0||k!=0?(Muse.assets.required.splice(j,1),"undefined"!=typeof b[l]&&(i!=b[l]>>>24||k!=(b[l]&16777215))&&Muse.assets.outOfDate.push(l)):j++;g.className="version";break;case "js":j++;break;default:throw Error("Unsupported file type: "+k);}}c?c().jquery!="1.8.3"&&Muse.assets.outOfDate.push("jquery-1.8.3.min.js"):Muse.assets.required.push("jquery-1.8.3.min.js");
g.parentNode.removeChild(g);if(Muse.assets.outOfDate.length||Muse.assets.required.length)g="Some files on the server may be missing or incorrect. Clear browser cache and try again. If the problem persists please contact website author.",f&&Muse.assets.outOfDate.length&&(g+="\nOut of date: "+Muse.assets.outOfDate.join(",")),f&&Muse.assets.required.length&&(g+="\nMissing: "+Muse.assets.required.join(",")),suppressMissingFileError?(g+="\nUse SuppressMissingFileError key in AppPrefs.xml to show missing file error pop up.",console.log(g)):alert(g)};location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi)?
setTimeout(function(){f(!0)},5E3):f()}};
var muse_init=function(){require.config({baseUrl:""});require(["jquery","museutils","whatinput","jquery.watch"],function(c){var $ = c;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.makeButtonsVisibleAfterSettingMinWidth();/* body */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>
  <!-- RequireJS script -->
  <script src="scripts/require.js?crc=7928878" type="text/javascript" async data-main="scripts/museconfig.js?crc=310584261" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
  
  <!--HTML Widget code-->
  

<script type="text/javascript">
console.log("Sidebar Off Canvas Menu - Version 2.3 - MuseThemes.com");

var outPush = [1,2,4,5,9,10,11,12,13];
(function(){
  setTimeout(function() {
    var navMenu;
    if(!navMenu){
      navMenu = [];
    }
    navMenu=push_element();
    $(navMenu).each(function(){
      menu +='<li><a class="icon icon-data" target="'+this.target+'" href="'+this.url+'">'+this.label+'</a></li>';
    });
	  $('.st-menu ul').append(menu);
    //Nav Setup.
    if( $.inArray(2, outPush) > -1){
	  var nonPush = '<div id="st-container" class="st-container"><nav id="menu-content" class="st-menu st-effect-2" id="menu-1"><!-- sidebar content --></nav><!-- content push wrapper --><div class="st-pusher"><div class="st-content"><!-- this is the wrapper for the content --><div class="st-content-inner"><!-- extra div for emulating position:fixed of the menu --><!-- the content --></div><!-- /st-content-inner --></div><!-- /st-content --></div><!-- /st-pusher --></div><!-- /st-container -->'
      if($('.breakpoint').hasClass('active')){
        $('.active').prepend(nonPush);
        window.addEventListener("resize", handleBreakpoint)
      } else{
        $('body').prepend(nonPush);
      }
      $('#page').detach().appendTo(".st-content-inner");
    } else{
      var push = '<div id="st-container" class="st-container"><!-- content push wrapper --><div class="st-pusher"><nav class="st-menu st-effect-2" id="menu-1"><!-- sidebar content --></nav><div class="st-content"><!-- this is the wrapper for the content --><div class="st-content-inner"><!-- extra div for emulating position:fixed of the menu --><!-- the content --></div><!-- /st-content-inner --></div><!-- /st-content --></div><!-- /st-pusher --></div><!-- /st-container -->';
      if($('.breakpoint').hasClass('active')){
        $('.active').prepend(push);
        window.addEventListener("resize", handleBreakpoint);
      } else{
        $('body').prepend(push);
      }
      //$('.active').prepend(push);
      $('#page').detach().appendTo(".st-content-inner");
    }
    //menu items
    var content = '<div class="menu-close" id="test"><button onclick="toggleMenu()"> X </button></div><div id="sidebar-heading"></div><ul id="menu-content-list"></ul>';
    $(content).appendTo(".st-menu");
    var menu = '';
    push_element().map(function(item){
      menu += '<li><a class="icon icon-data" target="'+item.target+'" href="'+item.url+'">'+item.label+'</a></li>';
    });
    $(menu).appendTo("#menu-content-list");
    if('false' == 'true'){
      var logoImage = document.createElement("IMG");
      logoImage.src=" "
      $('.st-menu').prepend(logoImage);
    };

    if('true' == 'true'){
      var sidebarHeading = document.createElement("H2");
      sidebarHeading.innerHTML += 'TIME ENTRY';
      $('#sidebar-heading').append(sidebarHeading);
    }
  }, 500);  
})();

  function handleBreakpoint(){
    setTimeout(function() {
	  $('.st-container').detach().appendTo('.active');
      $('#page').detach().prependTo(".st-content-inner");
	}, 500);
  }

 <?php echo $push ?>

  $(document).ready(function(){
    $('.' + 'button').click(toggleMenu);
    var docHeight = $(document).height();
    $('#page').css({'height': docHeight + 'px'})
  });

  function toggleMenu(){
    if(!$('.st-container').hasClass('st-menu-open')){
      $('.st-container').addClass('st-menu-open st-effect-2');
    }
    else{
      $('.st-container').removeClass('st-menu-open');
    }
  };

</script>
<script type="text/javascript">


 var SidebarMenuEffects = (function() {

 	function hasParentClass( e, classname ) {
		if(e === document) return false;
		if( classie.has( e, classname ) ) {
			return true;
		}
		return e.parentNode && hasParentClass( e.parentNode, classname );
	}

	function mobilecheck() {
		var check = false;
		(function(a){if(/(android|ipad|playbook|silk|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))check = true})(navigator.userAgent||navigator.vendor||window.opera);
		return check;
	}

	function init() {

		var container = document.getElementById( 'st-container' ),
			buttons = Array.prototype.slice.call( document.querySelectorAll( '#st-trigger-effects > button' ) ),
			// event type (if mobile use touch events)
			eventtype = mobilecheck() ? 'touchstart' : 'click',
			resetMenu = function() {
				classie.remove( container, 'st-menu-open' );
			},
			bodyClickFn = function(evt) {
				if( !hasParentClass( evt.target, 'st-menu' ) ) {
					resetMenu();
					document.removeEventListener( eventtype, bodyClickFn );
				}
			};

		buttons.forEach( function( el, i ) {
			var effect = el.getAttribute( 'data-effect' );

			el.addEventListener( eventtype, function( ev ) {
				ev.stopPropagation();
				ev.preventDefault();
				container.className = 'st-container'; // clear
				classie.add( container, effect );
				setTimeout( function() {
					classie.add( container, 'st-menu-open' );
				}, 25 );
				document.addEventListener( eventtype, bodyClickFn );
			});
		} );
	}
	init();

	// Refresh the page when the breakpoint is changed
    var breakpoints = '';

	setTimeout(function () {
      $('.breakpoint').each(function () {
        var theElement = $(this);

        if (theElement.hasClass('active')) {
          breakpoints += -1;
        } else {
          breakpoints += theElement.index();
        }
      });
	}, 1000);

    if (!window.resizedFinished) {
      window.resizedFinished = {};
    }

	$(window).resize(function () {
      clearTimeout(window.resizedFinished['u2902']);
      window.resizedFinished['u2902'] = setTimeout(function () {
        var breakpoints2 = '';
        $('.breakpoint').each(function () {
          var theElement = $(this);

          if (theElement.hasClass('active')) {
            breakpoints2 += -1;
          } else {
            breakpoints2 += theElement.index();
          }
        });

        var checkBreakpoints = breakpoints === breakpoints2;
        if (!checkBreakpoints) {
          // change the initial value
          breakpoints = breakpoints2;
		  // refresh the page
		  location.reload(false);
        }
      }, 1100);
    });

})();

</script>
		
   </body>
</html>
