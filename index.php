<!DOCTYPE HTML>

<!-- Designed and created by Empty Soul (S.Pietrowski)-->

<html class="html" lang="de">

<head>



<title>Optik Tack</title>

	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0" >


	<!-- beschreibung der webseite für google -->
	<meta name="description" content="Optik Tack - ein Tick mehr Durchblick als anderswo">


<link href="data/style.css" rel="stylesheet" type="text/css" media="screen" >



<!-- favicon -->

<link rel="icon" type="image/ico" href="data/logo/favicon.ico">




<!-- javascript api -->
<!-- Query v3.3.1 | (c) JS Foundation and other contributors | jquery.org/license -->

<script type="text/javascript" src="data/jquery-3.3.1.min.js"></script>

<!-- ------------ -->


<script>

//scrolling effekte

var Scrollposition;

jQuery(window).bind( 'scroll', function SC() {

Scrollposition = jQuery(window).scrollTop();


if ( Scrollposition <= 10)
{

$('.menu_logo').css('opacity','1');



}else{
$('.menu_logo').css('opacity','0');


$( ".burgermenu_line" ).addClass( "bml_color_scroll" );

}


if ( Scrollposition <= 720)
{

$( ".burgermenu_line" ).removeClass( "bml_color_scroll" );



}else{

$( ".burgermenu_line" ).addClass( "bml_color_scroll" );



}


if ( Scrollposition <=320)
{

$( ".block_1" ).addClass( "outofviewleft" );


}else{
$( ".block_1" ).removeClass( "outofviewleft" );



}


if ( Scrollposition <=1620)
{

$( ".mailbox" ).addClass( "outofviewright" );


}else{
$( ".mailbox" ).removeClass( "outofviewright" );



}



});



</script>





<script>

//burger-menu



function bmenu()
{


$( ".burgermenu_line" ).removeClass( "bml_color_scroll_open" );

var menuicon0 = document.getElementById("bml_0");
 var menuicon1 = document.getElementById("bml_1");
var menuicon2 = document.getElementById("bml_2");


var sidem = document.getElementById("sidemenu");


var bmlfield = document.getElementById("burgermenu_field");



var bmenueffecx = document.getElementById("bmenueffect");
var bodyX = document.getElementById("body");


var mmenu = document.getElementById("mmenu");

var menover = document.getElementById("menuoverlay");

if (sidem.style.opacity ==="1") {




//1 =mLeft 4 mtop 10 2 = mLeft 3 mtop -1//



$('html').css("overflow","");





sidem.style.opacity = "0";
sidem.style.width = "0%";


bmlfield.classList.add("bmactive_re");
bmlfield.classList.remove("bmactive");


menover.style.opacity = "0";
setTimeout(function(){menover.style.display = "none"; },310);

setTimeout(function(){bmlfield.classList.remove("bmactive_re");},810)



$( ".burgermenu_line" ).removeClass( "bml_color_open" );




}else{



sidem.style.opacity = "1";
sidem.style.width = "33%";


bmlfield.classList.add("bmactive");

bmlfield.classList.remove("bmactive_re");

menover.style.display = "block";

setTimeout(function(){menover.style.opacity = "1"; },10);



$('html').css("overflow","hidden");










$( ".menuleiste" ).addClass( "menuleistetransparent" );

if ( Scrollposition <= 720)
{
$( ".burgermenu_line" ).removeClass( "bml_color_scroll_open" );
$( ".burgermenu_line" ).addClass( "bml_color_open" );
}else{
	$( ".burgermenu_line" ).addClass( "bml_color_scroll_open" );
$( ".burgermenu_line" ).removeClass( "bml_color_open" );


}






}

}






//textslide effects

function textslider(id)
{






	var idd = "#"+id;

	$(idd).addClass("dotclicked");
$('a').not(idd).removeClass('dotclicked');

setTimeout(function(){
	$('.titlebig').removeClass('tibi_anim_slide');
	$('.subtext1').removeClass('tism_anim_slide');
	$('.subtext2').removeClass('tism_anim2_slide');

	$('.titlebig').removeClass('tibi_anim');
	$('.subtext1').removeClass('tism_anim');
	$('.subtext2').removeClass('tism_anim2');







},50);


	setTimeout(function(){
		$('.titlebig').addClass('tibi_anim_slide');
		$('.subtext1').addClass('tism_anim_slide');
		$('.subtext2').addClass('tism_anim2_slide');


	},100);




		$('.sliderbox').addClass('slideblur');

setTimeout(function(){
	$('.sliderbox').removeClass('slideblur');
},300);



var xhref = document.getElementById(id).getAttribute('href');

location.href = xhref;

return false;
}


//textslider TEXTE

function text1()
{
var ueberschrift = document.getElementById('titelbig');
var subtext1 = document.getElementById('subtext1');
var subtext2 = document.getElementById('subtext2');




setTimeout(function(){



	ueberschrift.innerHTML ="Mit<br>Optik Tack";
	subtext1.innerHTML ="Modisch";
	subtext2.innerHTML ="auf Zack";

subtext1.style.fontSize = "";
subtext1.style.letterSpacing = "";
subtext2.style.fontSize = "";
subtext2.style.lineheight = "";

subtext2.style.letterSpacing = "";

subtext2.style.marginLeft = "";
ueberschrift.style.fontSize = "";

ueberschrift.style.lineHeight = "";


$('.titelbox_render').css('height','');
$('.titlesmall').css('margin-top','');
$('.titelbox_render').css('padding-top','');
$('.titelbox_render').css('height','');
},550);

}



function text2()
{
var ueberschrift = document.getElementById('titelbig');
var subtext1 = document.getElementById('subtext1');
var subtext2 = document.getElementById('subtext2');

setTimeout(function(){

ueberschrift.innerHTML ="Optik Tack";
subtext1.innerHTML ="Ein Tick mehr<br>Durchblick ";
subtext2.innerHTML ="als andereswo";

subtext1.style.fontSize = "46px";
subtext2.style.fontSize = "46px";
subtext1.style.letterSpacing = "6.2px";
subtext2.style.lineheight = "1";

subtext2.style.letterSpacing = "6.5px";

subtext2.style.marginLeft = "";
ueberschrift.style.fontSize = "";

ueberschrift.style.lineHeight = "";


$('.titelbox_render').css('height','70px');
$('.titelbox_render').css('padding-top','22px');
$('.titelbox_render').css('height','100px');
$('.titlesmall').css('margin-top','100px');


},550);

}



function text3()
{
var ueberschrift = document.getElementById('titelbig');
var subtext1 = document.getElementById('subtext1');
var subtext2 = document.getElementById('subtext2');

setTimeout(function(){

	ueberschrift.innerHTML ="Tragen Sie's";
	subtext1.innerHTML ="mit (Modischer)";
	subtext2.innerHTML ="Fassung!";

subtext1.style.fontSize = "48px";
subtext1.style.letterSpacing = "5.2px";
subtext2.style.fontSize = "";
subtext2.style.lineheight = "";

subtext2.style.letterSpacing = "";

subtext2.style.marginLeft = "";
ueberschrift.style.fontSize = "";

ueberschrift.style.lineHeight = "";


$('.titelbox_render').css('height','');
$('.titlesmall').css('margin-top','');
$('.titelbox_render').css('padding-top','');
$('.titelbox_render').css('height','');
},550);

}



function text4()
{
var ueberschrift = document.getElementById('titelbig');
var subtext1 = document.getElementById('subtext1');
var subtext2 = document.getElementById('subtext2');

setTimeout(function(){

	ueberschrift.innerHTML ="Klare Sicht";
	subtext1.innerHTML ="und gute Laune";
	subtext2.innerHTML ="Optik Tack";

subtext1.style.fontSize = "48px";
subtext1.style.letterSpacing = "4.2px";
subtext2.style.fontSize = "";
subtext2.style.lineheight = "";

subtext2.style.letterSpacing = "";

subtext2.style.marginLeft = "";
ueberschrift.style.fontSize = "";

ueberschrift.style.lineHeight = "";


$('.titelbox_render').css('height','');
$('.titlesmall').css('margin-top','');
$('.titelbox_render').css('padding-top','');
$('.titelbox_render').css('height','');
},550);

}


function text5()
{
var ueberschrift = document.getElementById('titelbig');
var subtext1 = document.getElementById('subtext1');
var subtext2 = document.getElementById('subtext2');

setTimeout(function(){

	ueberschrift.innerHTML ="Mit Kind<br>und Kegel";
	subtext1.innerHTML ="";
	subtext2.innerHTML ="zu Optik Tack";

subtext1.style.fontSize = "48px";
subtext1.style.letterSpacing = "";
subtext2.style.fontSize = "";
subtext2.style.lineheight = "1";
subtext2.style.letterSpacing = "5.2px";

subtext2.style.marginLeft = "8px";
ueberschrift.style.fontSize = "";
		ueberschrift.style.lineHeight = "";

$('.titelbox_render').css('height','');
$('.titlesmall').css('margin-top','200px');
$('.titelbox_render').css('padding-top','50px');
$('.titelbox_render').css('height','');
},550);

}


function text6()
{
var ueberschrift = document.getElementById('titelbig');
var subtext1 = document.getElementById('subtext1');
var subtext2 = document.getElementById('subtext2');

setTimeout(function(){

	ueberschrift.innerHTML ="Schutz<br>und Schönheit";
	subtext1.innerHTML ="Sonnenbrillen";
	subtext2.innerHTML ="von Optik Tack";

	subtext1.style.fontSize = "48px";
	subtext1.style.letterSpacing = "5.2px";
	subtext2.style.fontSize = "46px";
	subtext2.style.lineheight = "";

	subtext2.style.letterSpacing = "7.2px";

	subtext2.style.marginLeft = "";

	ueberschrift.style.fontSize = "46px";

		ueberschrift.style.lineHeight = "48px";

	$('.titelbox_render').css('height','100px');
	$('.titlesmall').css('margin-top','');
	$('.titelbox_render').css('padding-top','40px');
	$('.titelbox_render').css('height','');
},550);

}




</script>


<script>




var selchild = 0;

var stop = 0;

function autoslide()
{




	if(stop == 0)
	{


slidertimeout = setTimeout(function(){





selchild += 1;




$clickss = $('center#dotcenter').children().eq(selchild);

$clickb = $clickss.attr("id");

setTimeout(function(){

	document.getElementById($clickb).click();
},200);








if($clickss.length)
{

autoslide();
}else {


selchild = 0;
$clickss = $('center#dotcenter').children().eq(selchild);

$clickss.click();


//var sldnum = selchild = 1;

//var locationhref = "#slider"+sldnum;

//location.href=locationhref;

}





return false;
//document.getElementById("dot2").click();

},4000);

} else {

clearTimeout(slidertimeout);

}

}


//animation stop function

function stopanim()
{
stop += 1;
autoslide()


}


//animation stop by scrolling

$.fn.inview = function() {

var etop = $(this).offset().top;

var ebottom = etop + $(this).outerHeight();

var viewtop = $(window).scrollTop();

var viewbottom = viewtop + $(window).height();

return ebottom > viewtop && etop < viewbottom;
};


$(window).on('resize scroll', function()
{



if ($('#start').inview())
{

	//stop slide animation

	stop += 1;
	autoslide()

//downarrow auto anim

	$('.cubearrowholder').css('transform','matrix(1,0,0,1,4,-39) scale(1)');
	$('.cubearrowholder').css('opacity','1');
	$('.dwa_line').css('transform','scaleY(0.8)');
} else
{

//downarrow auto anim
	$('.cubearrowholder').css('transform','');
	$('.cubearrowholder').css('opacity','');
	$('.dwa_line').css('transform','');
}



if ($('#aktionenbox').inview())
{



}else{


}

});






</script>


<script>
	var wait = 0;
	var sliderbg = 1;
function autoslideaktionen()
{

	var sliderakt = document.getElementById("slideraktionen");
	sliderakt.scrollLeft = 0;


	 if(wait == 0){

setTimeout(function(){

	wait += 1;
autoslideaktionen();
},3600)

}else{



	var Slide = function ()
	{
		$('.aktionabschnitt_bg').removeClass('akbg'+sliderbg);
	var i;
	var slide = document.querySelectorAll(".aktionsliderimage");
	for (i = 1; i < slide.length; i++)
	{

	}
	count++;
	if (count > slide.length)
	{
		var sliderakt = document.getElementById("slideraktionen");
		sliderakt.scrollLeft = 0;
sliderbg = 0;

	count = 1;
	}
	//slide[count-1].setAttribute("style","display:block;left:900px;");
	var nid = slide[count-1].getAttribute("id");
	var sliderakt = document.getElementById("slideraktionen");
	sliderakt.scrollLeft += 850;

	sliderbg += 1;

$('.aktionabschnitt_bg').addClass('akbg'+sliderbg);

	setTimeout(Slide, 3600);
	}
	var count = 1;
	Slide();
	}




}




function mailsended()
{



setTimeout(function(){
location.href="#terminvereinbarung";

var msended = document.getElementById('mailbox_sended');
var mcont = document.getElementById('mailboxcontent');
var mrow = document.getElementById('mailbox_bottomrow');

mcont.style.display = "none";

mcont.style.display = "none";
mrow.style.display = "none";

msended.style.display = "flex";



},10);

setTimeout(function(){

window.location.href ="index.php";

},2000);






}

</script>

	<script>
	$(document).ready(function()
	{

	$(".scrolled").on('click', function(event) {

	if (this.hash !== "") {

	event.preventDefault();
	var hash = this.hash;
	$('html, body').animate({

	scrollTop: $(hash).offset().top

	}, 800, function()
	{
	window.location.hash = hash;
	});
	}
	});
	});
	</script>


<script>

//loadingscript
window.addEventListener("load", function(){
var loader = document.getElementById("loader");
setTimeout(function(){document.body.removeChild(loader)},10);});

</script>




</head>


<body onLoad="autoslide(); autoslideaktionen()" id="bbody">



<div class="loader" id="loader">

<div class="loadingbox">

<div class="loadinglogo">
</div>
<div class="loadingtext">
Willkommen...
</div>

</div>

</div>







<div class="menurow">

<div class="menumaxcontent">






<a href="#terminvereinbarung" class="cursored scrolled mlogohref"><div class="menu_logo " >


	<!-- Generator: Adobe Illustrator 24.1.3, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
	<svg version="1.1" class="cursored" id="logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 viewBox="0 0 87.4 66.6" style="enable-background:new 0 0 87.4 66.6;" xml:space="preserve">
	<g>
		<path d="M84.9,6.5C79.5,0.8,60.1,0.2,52,0.2c-3.9,0-6.5,0.1-7.7,0.2C42.9,0.5,9.6,2.6,2.2,11.5c-3.6,4.3-1.5,13.4,0,20.1
			c0.4,2,4.5,19.6,11.3,26.9c4.8,5.1,14.5,8,26.9,8c2.3,0,4.7-0.1,7.1-0.3c14.8-1.3,28.6-6.2,32.4-9c3.4-2.5,4.6-10.1,5.5-15.7
			c0.1-0.9,0.3-1.8,0.4-2.5C86.3,35.7,89.4,11.2,84.9,6.5 M84.9,38.8c-0.1,0.7-0.3,1.6-0.4,2.5c-0.8,5-2,11.9-4.9,14.1
			c-3.7,2.8-17.7,7.5-32.2,8.7c-2.4,0.2-4.7,0.3-7,0.3c-11.8,0-19.2-2.8-23.7-7.6c-5.3-5.7-9.4-18.5-11-25.5
			c-1.4-6.4-3.4-15.2-0.3-18.9C12.5,4,44,1.8,44.4,1.8c2.1-0.1,4.9-0.2,7.7-0.2c6.2,0,27.2,0.4,32.4,5.9C87.9,11.2,86,32.7,84.9,38.8
			"/>
	</g>
	<g>
		<path d="M34.3,12.7c2.5,0,4.2,0.4,4.9,1.3c0.7,0.8,1.1,2.7,1.1,5.6c0,3.2-0.4,5.2-1.1,6c-0.7,0.8-2.5,1.2-5.3,1.2
			c-2.5,0-4.2-0.4-4.9-1.2c-0.7-0.8-1.1-2.6-1.1-5.4c0-3.3,0.4-5.4,1.1-6.2C29.6,13.1,31.4,12.7,34.3,12.7 M34.1,15
			c-1.8,0-2.8,0.2-3.1,0.7c-0.3,0.5-0.4,2-0.4,4.7c0,2,0.2,3.2,0.5,3.6c0.4,0.4,1.4,0.6,3.1,0.6c1.6,0,2.6-0.2,2.9-0.7
			c0.3-0.5,0.5-1.9,0.5-4.2c0-2.3-0.2-3.7-0.5-4.1C36.8,15.2,35.8,15,34.1,15"/>
		<path d="M42.3,17h2.4l-0.1,1.4l0.1,0c0.6-1.1,1.6-1.6,3.2-1.6c1.4,0,2.4,0.4,2.9,1.1c0.5,0.7,0.8,2,0.8,3.8c0,1.9-0.3,3.3-0.8,4
			c-0.5,0.7-1.5,1.1-2.9,1.1c-1.5,0-2.5-0.5-3-1.5h0v5.6h-2.4V17z M46.9,18.7c-0.9,0-1.5,0.2-1.7,0.6c-0.3,0.4-0.4,1.3-0.4,2.5
			c0,1.3,0.1,2.1,0.4,2.5c0.3,0.4,0.9,0.6,1.8,0.6c0.9,0,1.5-0.2,1.8-0.6c0.3-0.4,0.4-1.2,0.4-2.5c0-1.3-0.1-2.2-0.4-2.6
			C48.5,18.9,47.9,18.7,46.9,18.7"/>
		<path d="M60.4,17v1.8h-3.8v4.9c0,0.9,0.3,1.4,1,1.4c0.8,0,1.1-0.5,1.1-1.6V23h2v0.5c0,0.4,0,0.8,0,1.2c-0.1,1.5-1.2,2.2-3.3,2.2
			c-2.1,0-3.1-1-3.1-2.9v-5.2H53V17h1.3v-2.2h2.3V17H60.4z"/>
		<path d="M64.9,14.8h-2.3v-1.9h2.3V14.8z M64.9,26.8h-2.3V17h2.3V26.8z"/>
		<polygon points="69.8,12.8 69.8,20.8 70.4,20.8 73,17 75.7,17 72.3,21.6 76.4,26.7 73.5,26.7 70.4,22.4 69.8,22.4 69.8,26.7
			67.4,26.7 67.4,12.8 	"/>
		<polygon points="32.2,37.6 32.2,49.1 29.5,49.1 29.5,37.6 25.5,37.6 25.5,35.2 36.3,35.2 36.3,37.6 	"/>
		<path d="M38.2,42.2h-2.4c0-1.2,0.3-1.9,0.8-2.3c0.5-0.4,1.6-0.6,3.2-0.6c1.8,0,2.9,0.2,3.6,0.7c0.6,0.5,0.9,1.4,0.9,2.8v6.4H42
			l0.1-1.3l-0.1,0c-0.4,1-1.5,1.5-3.1,1.5c-2.4,0-3.5-1-3.5-3c0-2,1.2-3,3.6-3c1.6,0,2.6,0.4,2.9,1.1h0v-1.6c0-0.8-0.1-1.3-0.4-1.5
			c-0.3-0.2-0.8-0.4-1.6-0.4C38.8,40.8,38.2,41.3,38.2,42.2 M39.7,44.7c-1.3,0-2,0.5-2,1.4c0,0.6,0.1,1,0.4,1.2
			c0.3,0.2,0.8,0.3,1.7,0.3c1.4,0,2.1-0.5,2.1-1.4C42,45.2,41.2,44.7,39.7,44.7"/>
		<path d="M52.7,45.4H55v0.3l-0.1,1.5c-0.3,1.3-1.7,2-4.2,2c-1.8,0-3.1-0.3-3.7-1c-0.6-0.7-0.9-2-0.9-4c0-2,0.3-3.3,0.9-4
			c0.6-0.7,1.8-1,3.5-1c1.7,0,2.8,0.2,3.4,0.7c0.6,0.5,0.9,1.4,0.9,2.8h-2.3c0-1.1-0.7-1.7-2-1.7c-0.9,0-1.5,0.2-1.8,0.5
			c-0.2,0.4-0.4,1.2-0.4,2.7c0,1.4,0.1,2.2,0.4,2.6c0.3,0.4,0.9,0.5,1.9,0.5c0.8,0,1.3-0.1,1.5-0.4C52.6,46.8,52.7,46.2,52.7,45.4"/>
		<polygon points="59,35.2 59,43.2 59.6,43.2 62.3,39.4 65,39.4 61.6,43.9 65.7,49.1 62.8,49.1 59.6,44.8 59,44.8 59,49.1 56.7,49.1
			56.7,35.2 	"/>
	</g>
	</svg>




</div></a>




<button onClick="javascript:bmenu();" class="burgermenu_field cursored" id="burgermenu_field" >

<span class="cursored burgermenu_line bml_color" id="bml_0"></span>

</button>





</div>

</div>





<div class="sidemenu" id="sidemenu">

<div class="sidemenu_content">

<div class="sidemenu_buttoncontent">

<a href="#home" onClick="javascript:bmenu();" class="menulink cursored scrolled">Home</a>
<a href="#start" onClick="javascript:bmenu();" class="menulink cursored scrolled">Wir über uns</a>
<a href="#aktionen" onClick="javascript:bmenu();" class="menulink cursored scrolled">Aktionen</a>
<a href="#terminvereinbarung" onClick="javascript:bmenu();" class="menulink cursored scrolled">Terminvereinbarung</a>
<a href="#infos" onClick="javascript:bmenu();" class="menulink cursored scrolled">Infos</a>
</div>

</div>

</div>



<div class="menuoverlay" id="menuoverlay" onClick="javascript:bmenu();">

</div>



<!-- headarea ----------------------------------------------------- -->
<div class="header_white" id="home"></div>
<div class="headbackground"></div>
<div class="headbackground_curve"></div>

<div class="headarea">

<div class="content1260header">





<div class="social_media_area">


	<div class="sm_sidebox">

<!-- sm icon -->
<div class="socialmedia cursored" onClick="window.open('https://www.facebook.com')">



<svg id="facebook" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m15.997 3.985h2.191v-3.816c-.378-.052-1.678-.169-3.192-.169-3.159 0-5.323 1.987-5.323 5.639v3.361h-3.486v4.266h3.486v10.734h4.274v-10.733h3.345l.531-4.266h-3.877v-2.939c.001-1.233.333-2.077 2.051-2.077z"/></svg>



</div>



<!-- sm icon -->
<div class="socialmedia cursored" onClick="window.open('https://www.pinterest.de')">



<svg id="pinterest" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m12.326 0c-6.579.001-10.076 4.216-10.076 8.812 0 2.131 1.191 4.79 3.098 5.633.544.245.472-.054.94-1.844.037-.149.018-.278-.102-.417-2.726-3.153-.532-9.635 5.751-9.635 9.093 0 7.394 12.582 1.582 12.582-1.498 0-2.614-1.176-2.261-2.631.428-1.733 1.266-3.596 1.266-4.845 0-3.148-4.69-2.681-4.69 1.49 0 1.289.456 2.159.456 2.159s-1.509 6.096-1.789 7.235c-.474 1.928.064 5.049.111 5.318.029.148.195.195.288.073.149-.195 1.973-2.797 2.484-4.678.186-.685.949-3.465.949-3.465.503.908 1.953 1.668 3.498 1.668 4.596 0 7.918-4.04 7.918-9.053-.016-4.806-4.129-8.402-9.423-8.402z"/></svg>




</div>


<!-- sm icon -->
<div class="socialmedia cursored" onClick="window.open('https://www.instagram.com')">



	<!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
	<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
	<svg version="1.1" id="instagram" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 width="169.063px" height="169.063px" viewBox="0 0 169.063 169.063" style="enable-background:new 0 0 169.063 169.063; "
		 xml:space="preserve">
	<g>
		<path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
			c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
			c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
			c17.455,0,31.656,14.201,31.656,31.655V122.407z"/>
		<path d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
			C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
			c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z"/>
		<path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
			c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
			C135.661,29.421,132.821,28.251,129.921,28.251z"/>
	</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>



</div>


	</div>


</div>




<div class="header_mainarea">

<div class="contentleft50">


<div class="brillen_linie">

	<svg version="1.1" id="brillenlinie1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 viewBox="0 0 87.4 66.6" style="enable-background:new 0 0 87.4 66.6;" xml:space="preserve">
	<g>
		<path d="M84.9,6.5C79.5,0.8,60.1,0.2,52,0.2c-3.9,0-6.5,0.1-7.8,0.2C42.8,0.5,9.6,2.6,2.2,11.5c-3.6,4.3-1.5,13.4,0,20.1
			c0.4,2,4.5,19.6,11.3,26.9c4.8,5.1,14.5,8,26.9,8c2.3,0,4.7-0.1,7.1-0.3c14.8-1.3,28.6-6.2,32.4-9c3.4-2.5,4.6-10.1,5.5-15.7
			c0.1-0.9,0.3-1.8,0.4-2.5C86.3,35.7,89.4,11.2,84.9,6.5z M84.7,38.9c-0.1,0.7-0.3,1.5-0.4,2.5c-0.9,5.4-2,12.9-5.4,15.3
			c-3.8,2.8-17.2,7.5-31.7,8.8c-2.3,0.2-4.7,0.3-6.9,0.3c-12,0-21.6-2.9-26.2-7.8c-6.7-7.2-10.6-24.3-11-26.3
			c-1.5-6.5-3.5-15.5,0-19.7C10.4,3.4,42.8,1.3,44.2,1.2C45.4,1.1,48,1,51.8,1c7.9,0,26.8,0.6,32.1,6.2
			C88.3,11.8,85.3,35.7,84.7,38.9z"/>
	</g>
	</svg>


</div>




<svg height="0" width="0">
            <defs>
                <clipPath id="svgp">
									<path class="maskpath" d="M84.9,6.5C79.5,0.8,60.1,0.2,52,0.2c-3.9,0-6.5,0.1-7.8,0.2C42.8,0.5,9.6,2.6,2.2,11.5
									 c-3.6,4.3-1.5,13.4,0,20.1c0.4,2,4.5,19.6,11.3,26.9c4.8,5.1,14.5,8,26.9,8c2.3,0,4.7-0.1,7.1-0.3c14.8-1.3,28.6-6.2,32.4-9
									 c3.4-2.5,4.6-10.1,5.5-15.7c0.1-0.9,0.3-1.8,0.4-2.5C86.3,35.7,89.4,11.2,84.9,6.5z"/>
                </clipPath>
            </defs>
        </svg>







<div class="brillenslider"  id="brslider">

<div class="sliderbox">

<div class="sliderimage" id="slider1">
<img src="data/images/slider/bild_01.jpg" class="slidimage">

</div>
<div class="sliderimage" id="slider2">
<img src="data/images/slider/bild_02.jpg" class="slidimage">

</div>

<div class="sliderimage" id="slider3">
<img src="data/images/slider/bild_03.jpg" class="slidimage">

</div>

<div class="sliderimage" id="slider4">
<img src="data/images/slider/bild_04.jpg" class="slidimage">

</div>

<div class="sliderimage" id="slider5">
<img src="data/images/slider/bild_05.jpg" class="slidimage">

</div>

<div class="sliderimage" id="slider6">
<img src="data/images/slider/bild_06.jpg" class="slidimage">

</div>

</div>

</div>





</div>


<div class="contentright50">


	<div class="brillen_linie2">

		<svg version="1.1" id="brillenlinie2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			 viewBox="0 0 87.4 66.6" style="enable-background:new 0 0 87.4 66.6;" xml:space="preserve">
		<g>
			<path d="M84.9,6.5C79.5,0.8,60.1,0.2,52,0.2c-3.9,0-6.5,0.1-7.8,0.2C42.8,0.5,9.6,2.6,2.2,11.5c-3.6,4.3-1.5,13.4,0,20.1
				c0.4,2,4.5,19.6,11.3,26.9c4.8,5.1,14.5,8,26.9,8c2.3,0,4.7-0.1,7.1-0.3c14.8-1.3,28.6-6.2,32.4-9c3.4-2.5,4.6-10.1,5.5-15.7
				c0.1-0.9,0.3-1.8,0.4-2.5C86.3,35.7,89.4,11.2,84.9,6.5z M84.7,38.9c-0.1,0.7-0.3,1.5-0.4,2.5c-0.9,5.4-2,12.9-5.4,15.3
				c-3.8,2.8-17.2,7.5-31.7,8.8c-2.3,0.2-4.7,0.3-6.9,0.3c-12,0-21.6-2.9-26.2-7.8c-6.7-7.2-10.6-24.3-11-26.3
				c-1.5-6.5-3.5-15.5,0-19.7C10.4,3.4,42.8,1.3,44.2,1.2C45.4,1.1,48,1,51.8,1c7.9,0,26.8,0.6,32.1,6.2
				C88.3,11.8,85.3,35.7,84.7,38.9z"/>
		</g>
		</svg>


	</div>


	<div class="titletextbox" id="titletextbox">

		<!-- slider TEXTE --------------- -->
<div class="titelbox_render">

		<div class="titlebig tibi_anim" id="titelbig">
Mit <br>
Optik Tack
		</div>
</div>


		<div class="titlesmall">

	<div class="subtext1 tism_anim" id="subtext1">Modisch</div>
	<div class="titelbox_render2" >
	<div class="subtext2 tism_anim2" id="subtext2">auf Zack</div>
</div>
		</div>

		<!-- ----------------------------- -->

	</div>

</div>


</div>



<div class="control_dot_area">

	<div class="sm_sidebox" id="sliderdotsbox">
<center id="dotcenter">
<a href="#slider1" class="sliderhref cursored dotclicked" onClick="textslider(id); text1()" id="dot1"><div class="sliderdots" ></div></a>
<a href="#slider2" class="sliderhref cursored" onClick="textslider(id); text2()" id="dot2"><div class="sliderdots" ></div></a>
<a href="#slider3" class="sliderhref cursored" onClick="textslider(id); text3()" id="dot3"><div class="sliderdots"></div></a>
<a href="#slider4" class="sliderhref cursored" onClick="textslider(id); text4()" id="dot4"><div class="sliderdots" ></div></a>
<a href="#slider5" class="sliderhref cursored" onClick="textslider(id); text5()" id="dot5"><div class="sliderdots" ></div></a>
<a href="#slider6" class="sliderhref cursored" onClick="textslider(id); text6()" id="dot6"><div class="sliderdots"></div></a>
</center>
</div>

</div>


<div class="scdowntext">
<div class="tscroll" id="tscroll">SCROLL</div>
<div class="tdown">DOWN</div>
</div>

<div class="downarrow_area">

<!-- OLD...........
	<a href="#start" class="kreisbutton cursored" id="kreisbutton">
	<div class="kreis" id="kreis" style="visibility: visible;">

	<div class="dwa_2_box">


	<svg version="1.1" id="downarrow_line" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 viewBox="0 0 1200 1200" style="enable-background:new 0 0 1200 1200;" xml:space="preserve">
	<g>
		<path d="M686,221.5v498.8l-56.2,163.5l-48.3-1.2l-73.3-170v-491c0-38.2,30.9-69.1,69-69H617C655.2,152.5,686,183.4,686,221.5z"/>
	</g>
	</svg>


	</div>


	  <svg version="1.1" id="downarrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	  	 viewBox="0 0 1200 1200" style="enable-background:new 0 0 1200 1200;" xml:space="preserve">
	  <g>
	  	<path d="M588.8,939.5L85.5,436.2c-27-27-27-70.7,0-97.6l28.1-28.1c27-27,70.7-27,97.6,0l377.5,377.5c7.1,7.1,18.6,7.1,25.6,0
	  		l379.5-379.5c27-27,70.7-27,97.6,0l28.1,28.1c27,27,27,70.7,0,97.6L614.4,939.5C607.3,946.6,595.8,946.6,588.8,939.5z"/>
	  </g>
	  </svg>






	</div>
	</a>
-->



<a href="#start" class="downarrowhref cursored scrolled" onclick="stopanim();"><div class="dwarrow_box"><div class="dwa_line"><!-- <div class="dwa_lineright"></div><div class="dwa_lineleft"></div>--> </div> <div class="cubearrowholder"><div class="dwcube_alternatearrow"></div></div></a>

</div>


</div>
</div>

</div>

<!-- header end----------------------------------------- -->

<main>
<center>

<div class="mainbody">
	<div class="tagger" id="start"></div>
<div class="content1260" style="padding-top:100px;">



<div class="block_1 outofviewleft">
	<div class="bubbletail">

	<svg version="1.1" id="bubbletailsvg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 viewBox="0 0 800 800" style="enable-background:new 0 0 800 800;" xml:space="preserve">
	<path d="M799.9,0c0,0,53.4,249-798,212.6c0,0,301.7,87.1,418.3,164.8C502.1,432,535.1,454.7,688.5,640h111.4V0z"/>
	</svg>

</div>
<div class="sprechblase">

<div class="b_ueb_block">Damit Ihre Optik stimmt
<br>
<font style="color:#a0a0a0; font-size: 16px; font-style: italic; ">Optik Tak</font>
</div>

<div class="b_textblock">

Bei Optik Tack in Aalen erwartet Sie exzellente Beratung in angenehmer Atmosphäre.<br>

Wir setzen all unsere handwerklich-technischen Fertigkeiten für Ihre Augen, fürs bessere Sehen ein.<br>

Und jenen Kundinnen und Kunden, die sich nur schlecht damit abfinden können, <br>

ab jetzt ständig eine Brille tragen zu müssen, sagen wir:<br>
<br>

Tragen Sie’s mit (modischer) Fassung!

</div>



</div>


</div>




</div>




<div class="block_2" id="aktionen">

<div class="aktionabschnitt_bg">


	<!-- --------------------------------- AKTION BLOCK --------------------- -->

	<div class="aktionenbox" id="aktionenbox">

	<!-- Feld LINKS -->

		<div class="aktionfeld_links">

	<div class="aktionsueberschrift">Sommer<br><div class="t_aktion">Aktion</div> </div>

		<div class="teilnahmebutton cursored"> Jetzt<div style="margin-left: 10px;"> teilnehmen</div></div>

	<div class="teilnahmeinfo">
	vom Montag, 6. Juli<br>
	bis Samstag, 25. Juli 2020
	</div>


		</div>




	<!-- Feld RECHTS -->


		<div class="aktionfeld_rechts">

			<div class="slider_aktionen" id="slideraktionen">

	<div class="aktionsliderimage" id="aktionsliderimage1">
	<img src="data/images/aktionen/aktion_001.jpg"/>
	</div>

	<div class="aktionsliderimage" id="aktionsliderimage2">
	<img src="data/images/aktionen/aktion_002.jpg"/>
	</div>


	<div class="aktionsliderimage" id="aktionsliderimage3">
	<img src="data/images/aktionen/aktion_003.jpg" />
	</div>


	<div class="aktionsliderimage" id="aktionsliderimage4">
	<img src="data/images/aktionen/aktion_004.jpg" />
	</div>



	<div class="aktionsliderimage" id="aktionsliderimage5">
	<img src="data/images/aktionen/aktion_005.jpg"/>
	</div>



	<div class="aktionsliderimage" id="aktionsliderimage6">
	<img src="data/images/aktionen/aktion_006.jpg"/>
	</div>




	</div>

		</div>





	</div>

</div>



	</div>



	<!-- ---------------------- BLOCK END ------------------ -->



<div class="block_3" id="terminvereinbarung">
<div class="ueberschrift_blocks">Vereinbaren Sie einen Termin mit uns</div>


<div class="mailbox outofviewright">

	<div class="mailbox_sended" id="mailbox_sended">
Wir melden uns umgehend mit einem Terminvorschlag.
</div>

<div class="mailboxcontent" id="mailboxcontent">

<form action="data/msend.php" method="post">

<div class="mailbox_left">

<input type="text" required class="inputtext inputtshort cursored" style="" placeholder="Name" name="name" pattern="[A-Za-z]+" minlength="3" title="Minimal 3 Letters (only A-z)" /> <input type="text" required class="inputtext inputtshort cursored" placeholder="Vorname" name="vorname" style="margin-Left: 46px;"  pattern="[A-Za-z]+" minlength="3" title="Minimal 3 Letters (only A-z)" />

<input type="email" required class="inputtext inputtlong cursored" placeholder="E-Mail" name="email" minlength="4"/>
<input type="number" required class="inputtext inputtlong cursored" placeholder="Telefon" name="telefon"/>

</div>


<div class="mailbox_right">

<textarea required class="mailtextarea cursored" name ="nachricht" placeholder="Ihr Anliegen in Kürze (Brille, Kontaktlinsen, optometrische Messung, usw.)" ></textarea>


</div>
</div>

<div class="mailbox_bottomrow" id="mailbox_bottomrow">

<input type="submit" class="basic_button cursored" value="senden"/>

</div>



</div>



</form>





</div>









<!-- ---------------------- BLOCK END ------------------ -->

<div class="block_4" id="infos">



<div class="infofeld">
<div class="infofeld_overlay">

	<div class="infofeld_content">

		<div class="infofeld_links">

			<div class="infotext_fett">Öffnungszeiten</div>
						<div class="infotext_small">Mo–Fr 9 Uhr bis 18 Uhr<br>
							Sa 9 Uhr bis 13.30 Uhr</div>

		</div>

		<div class="infofeld_rechts">

						<div class="infotext_fett">Hier finden Sie uns:</div>
									<div class="infotext_small">Mozartstraße 37,<br>73430 Aalen</div>
		</div>



	</div>


</div>

</div>


</div>


<!-- ---------------------- BLOCK END ------------------ -->



<div class="block_5" id="footer">

<div class="footercontent">

<div class="footerzeile1">

<div class="fzblock">
<div class="impressum">Impresum</div>
<br>
<br>
<b>Optik Tack GmbH</b>   <br>
Mozartstraße 37 <br>
73430 Aalen<br>
</div>



<div class="fzblock">
<br>
<br>
<br>
Tel.: <a href="tel:07361/123451" class="basic_href cursored">07361/123451</a><br>
<a href="mailto:info@optik-tack.de" class="basic_href cursored">info@optik-tack.de</a><br>
<a href="https://www.optik-tack.de" target="_blank" class="basic_href cursored">www.optik-tack.de</a><br>
</div>



<div class="fzblock">
<br>
<br>
<br>
<b>Geschäftsführer: Anton Tack</b><br>
Amtsgericht Aalen<br>
Handelsregister Nr. XXX000XXX,<br>
</div>



<div class="fzblock">
<br>
<br>
<br>
Finanzamt Aalen<br>
USt.IdNr.: DE10111011<br>
</div>



</div>

<div class="footerzeile2">
<div class="impressum">Datenschutz</div>

Datenschutzhinweise gemäß EU-Datenschutz-Grundverordnung (DSGVO)

</div>

</div>


</div>


<!-- ---------------------- BLOCK END ------------------ -->



</div>


</div>


	</div>

</div>


<!-- email php and page restart ----------------------------------------- -->

		<?php

		$url = $_SERVER['REQUEST_URI'];

		$parts = parse_url($url);
		$output = [];
		parse_str($parts['query'], $output);



	$urmail = $output['mail'];



	if( isset( $urmail ) ) {


	echo "<script> stopanim();</script>";

	echo "<script> mailsended();</script>";
	echo "<script> autoslideaktionen();</script>";

	} else {



	 }



		?>





</center>
</main>





	<div class="cursor" id="cursor">

			<div class="cursor2" id="cursor2">

			</div>
	</div>


	<script>


	// defaultmouse -----------------------------------

	var curs = document.getElementById('cursor');

var br1 = document.getElementById('brillenlinie1');
var br2 = document.getElementById('brillenlinie2');
var sl1 = document.getElementById('brslider');
var sv = document.getElementById('svgp');
var tscroll = document.getElementById('tscroll');
var ttbox = document.getElementById('titletextbox');



const curso = curs;

document.addEventListener('mousemove', e =>
{

curso.setAttribute("style", "top: "+(e.pageY - 1)+"px; left: "+(e.pageX - 1)+"px;")


var x = e.clientX;
var y = e.clientY;

	//curs.style.left = x + "px";
	 //curs.style.top = y + "px"





//header move

var x2 = x/100;
var y2 = y/100;

var xx2 = x2-6.28;

var x3 = "-"+x2;

var x4 = x/1000;
var y4 = y/120;



br1.style.transform = "matrix(1,0,0,1,0,"+y2+")";
br2.style.transform = "matrix(1,0,0,1,0,"+y2+")";
sl1.style.marginTop = "-"+y4+"px";

tscroll.style.transform = "matrix(1,0,0,1,0,"+y4+")";


$(".cursored").hover(function(){



$("#cursor2").css({"width":"50px", "height":"50px","opacity": "0.9"});

setTimeout(function(){

},200);

$("#cursor").css({"width":"50px", "height":"50px"});
},function(){
$("#cursor2").css({"width":"", "height":"","backdrop-filter":"","opacity": ""});

$("#cursor").css({"width":"", "height":""});

});





});






document.addEventListener('click', () => {


$("#cursor2").addClass("curclick");

setTimeout(() => {

$("#cursor2").removeClass("curclick");

}, 100);

setTimeout(() => {

$("#cursor2").css("transition","");

}, 200);

});

function parallax() {

var yPos = 0 - window.pageYOffset/6;

ttbox.style.transform = "matrix(1,0,0,1,0,"+ yPos +")" ;
sl1.style.transform = "matrix(1,0,0,1,0,"+ yPos +")" ;

}

window.addEventListener("scroll", function(){
parallax();
});





	</script>





</body>



</html>
