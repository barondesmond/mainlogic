
   </div>
<div class="size_fluid_width grpelem" id="u2902" data-sizePolicy="fluidWidth" data-pintopage="page_fluidx"><!-- custom html -->
<?php echo 'whatever'; ?>
    

    	
   </div>
   <div class="verticalspacer" data-offset-top="960" data-content-above-spacer="960" data-content-below-spacer="39" data-sizePolicy="fixed" data-pintopage="page_fixedLeft">verticals?</div>
  </div>
  <div class="preload_images">
   <img class="preload" src="/images/u2906-r.png?crc=193805634" alt=""/>
   <img class="preload" src="/images/u2908-r.png?crc=4194255742" alt=""/>
  </div>
  <!-- JS includes -->
  <script type="text/javascript">
   if (document.location.protocol != 'https:') document.write('\x3Cscript src="http://musecdn2.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script type="text/javascript">
   window.jQuery || document.write('\x3Cscript src="/scripts/jquery-1.8.3.min.js?crc=209076791" type="text/javascript">\x3C/script>');
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
var muse_init=function(){require.config({baseUrl:"/"});require(["jquery","museutils","whatinput","jquery.watch"],function(c){var $ = c;$(document).ready(function(){try{
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
  <script src="/scripts/require.js?crc=7928878" type="text/javascript" async data-main="/scripts/museconfig.js?crc=310584261" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
  
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

  function push_element(){
    navMenu = [];
    var originalCount = navMenu.length;
    navMenu.push({label: "EMPLOYEE TIME", url: "/review/", target: "_self"});
    navMenu.push({label: "TIME SHEET", url: "review/timesheet/", target: "_self"});
    navMenu.push({label: "GPS REVIEW", url: "/gps/", target: "_self"});
    navMenu.push({label: "PTO BY EMPLOYEE", url: "/pto/", target: "_self"});
    navMenu.push({label: "EMPLOYEE REPORT", url: "/reports/", target: "_self"});
    navMenu.push({label: "NON-BILLABLE REPORT", url: "/nonbillable/", target: "_self"});
    navMenu.push({label: "RULES", url: "/rules/", target: "_self"});
    navMenu.push({label: "JOB ASSIGNMENT", url: "/jobs/", target: "_self"});
    navMenu.push({label: "LOGOUT", url: "/login/logout/", target: "_self"});
    navMenu.push({label: "", url: "http://", target: "_self"});
    navMenu.push({label: "", url: "http://", target: "_self"});
    navMenu.push({label: "", url: "http://", target: "_self"});
    navMenu.push({label: "", url: "http://", target: "_self"});
    navMenu.push({label: "", url: "http://", target: "_self"});
    navMenu.push({label: "", url: "http://", target: "_self"});
    navMenu.push({label: "", url: "http://", target: "_self"});
    navMenu = navMenu.splice(0,originalCount+8+0);
    return navMenu;
  }

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