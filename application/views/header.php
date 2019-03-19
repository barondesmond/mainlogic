<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="en-US">
 <head>

  <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2018.1.0.386"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
  <script type="text/javascript">
   // Update the 'nojs'/'js' class on the html node
document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

// Check that all required assets are uploaded and up-to-date
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.watch.js", "require.js", "time_sheet.css"], "outOfDate":[]};
</script>
  
  <title>time_sheet</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="/css/site_global.css?crc=133766301"/>
  <link rel="stylesheet" type="text/css" href="/css/time_sheet.css?crc=466319910" id="pagesheet"/>
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
   <div class="clearfix grpelem" id="pu5429"><!-- column -->
    <div class="browser_width colelem" id="u5429-bw">
     <div class="clearfix" id="u5429"><!-- group -->
      <div class="Button rounded-corners button clearfix grpelem" id="buttonu5413" data-visibility="changed" style="visibility:hidden"><!-- container box -->
       <div class="rounded-corners colelem" id="u5415"><!-- simple frame --></div>
       <div class="rounded-corners colelem" id="u5414"><!-- simple frame --></div>
       <div class="rounded-corners colelem" id="u5416"><!-- simple frame --></div>
      </div>
      <div class="clearfix grpelem" id="u5430-4"><!-- content -->
       <p>CP</p>
      </div>
      <div class="clearfix grpelem" id="u6079"><!-- group -->
       <div class="clearfix grpelem" id="u6091-4"><!-- content -->
        <p>Baron001</p>
       </div>
      </div>
      <div class="clearfix grpelem" id="u6085"><!-- group -->
       <div class="clearfix grpelem" id="u6088-4"><!-- content -->
        <p>UPDATE</p>
       </div>
      </div>
      <div class="clearfix grpelem" id="u6082"><!-- group -->
       <div class="clearfix grpelem" id="u6094-4"><!-- content -->
        <p>Baron002</p>
       </div>
      </div>
     </div>
    </div>
    <div class="clearfix colelem" id="ppu5420"><!-- group -->
     <div class="clearfix grpelem" id="pu5420"><!-- column -->
      <div class="clearfix colelem" id="u5420"><!-- column -->
       <div class="clearfix colelem" id="pu5422"><!-- group -->
        <a class="nonblock nontext clearfix grpelem" id="u5422" href="review/"><!-- group --><img class="grpelem" id="u5428-4" alt="Time Sheet" src="/images/u5428-4.png?crc=4175918297" data-image-width="141"/><!-- rasterized frame --></a>
        <div class="clearfix grpelem" id="u5421"><!-- group -->
         <img class="grpelem" id="u5426-4" alt="Dispatch" src="/images/u5426-4.png?crc=43866679" data-image-width="109"/><!-- rasterized frame -->
        </div>
       </div>
       <div class="clearfix colelem" id="pu5423"><!-- group -->
        <div class="clearfix grpelem" id="u5423"><!-- group -->
         <img class="grpelem" id="u5424-4" alt="Accounting" src="/images/u5424-4.png?crc=163544750" data-image-width="141"/><!-- rasterized frame -->
        </div>
        <div class="clearfix grpelem" id="u5427"><!-- group -->
         <img class="grpelem" id="u5425-4" alt="Estimating" src="/images/u5425-4.png?crc=4282423050" data-image-width="126"/><!-- rasterized frame -->
        </div>
       </div>
      </div>
      <a class="nonblock nontext Button clearfix colelem" id="buttonu5417" href="/admin/" data-visibility="changed" style="visibility:hidden"><!-- container box --><div class="grpelem" id="u5418"><!-- state-based BG images --><img alt="Administration" src="/images/blank.gif?crc=4208392903"/><div class="fluid_height_spacer"></div></div></a>
      <div class="clip_frame colelem" id="u5409"><!-- image -->
       <img class="block" id="u5409_img" src="/images/400dpilogocropped455x100.png?crc=3930767816" alt="" data-heightwidthratio="0.22112211221122113" data-image-width="303" data-image-height="67"/>
      </div>
      <a class="nonblock nontext Button clearfix colelem" id="buttonu5411" href="index.html" data-visibility="changed" style="visibility:hidden"><!-- container box --><div class="grpelem" id="u5412"><!-- state-based BG images --><img alt="Logout" src="/images/blank.gif?crc=4208392903"/><div class="fluid_height_spacer"></div></div></a>
     </div>
     <div class="clearfix grpelem" id="u5432-4"><!-- content -->
    
    