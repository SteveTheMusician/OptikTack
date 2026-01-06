//scrolling effekte
var Scrollposition;
jQuery(window).bind('scroll', function SC() {
	Scrollposition = jQuery(window).scrollTop();
	if (Scrollposition <= 10) {
		$('.menu_logo').css('opacity', '1');
	} else {
		$('.menu_logo').css('opacity', '0');
		$(".burgermenu_line").addClass("bml_color_scroll");
	}
	if (Scrollposition <= 720) {
		$(".burgermenu_line").removeClass("bml_color_scroll");
	} else {
		$(".burgermenu_line").addClass("bml_color_scroll");
	}
	if (Scrollposition <= 320) {
		$(".block_1").addClass("outofviewleft");
	} else {
		$(".block_1").removeClass("outofviewleft");
	}
	if (Scrollposition <= 1620) {
		$(".mailbox").addClass("outofviewright");
	} else {
		$(".mailbox").removeClass("outofviewright");
	}
});
//burger-menu
function bmenu() {
	$(".burgermenu_line").removeClass("bml_color_scroll_open");
	var menuicon0 = document.getElementById("bml_0");
	var menuicon1 = document.getElementById("bml_1");
	var menuicon2 = document.getElementById("bml_2");
	var sidem = document.getElementById("sidemenu");
	var bmlfield = document.getElementById("burgermenu_field");
	var bmenueffecx = document.getElementById("bmenueffect");
	var bodyX = document.getElementById("body");
	var mmenu = document.getElementById("mmenu");
	var menover = document.getElementById("menuoverlay");
	if (sidem.style.opacity === "1") {
		//1 =mLeft 4 mtop 10 2 = mLeft 3 mtop -1//
		$('html').css("overflow", "");
		sidem.style.opacity = "0";
		sidem.style.width = "0%";
		bmlfield.classList.add("bmactive_re");
		bmlfield.classList.remove("bmactive");
		menover.style.opacity = "0";
		setTimeout(function() {
			menover.style.display = "none";
		}, 310);
		setTimeout(function() {
			bmlfield.classList.remove("bmactive_re");
		}, 810)
		$(".burgermenu_line").removeClass("bml_color_open");
	} else {
		sidem.style.opacity = "1";
		sidem.style.width = "33%";
		bmlfield.classList.add("bmactive");
		bmlfield.classList.remove("bmactive_re");
		menover.style.display = "block";
		setTimeout(function() {
			menover.style.opacity = "1";
		}, 10);
		$('html').css("overflow", "hidden");
		$(".menuleiste").addClass("menuleistetransparent");
		if (Scrollposition <= 720) {
			$(".burgermenu_line").removeClass("bml_color_scroll_open");
			$(".burgermenu_line").addClass("bml_color_open");
		} else {
			$(".burgermenu_line").addClass("bml_color_scroll_open");
			$(".burgermenu_line").removeClass("bml_color_open");
		}
	}
}
//textslide effects
function textslider(id) {
	var idd = "#" + id;
	$(idd).addClass("dotclicked");
	$('a').not(idd).removeClass('dotclicked');
	setTimeout(function() {
		$('.titlebig').removeClass('tibi_anim_slide');
		$('.subtext1').removeClass('tism_anim_slide');
		$('.subtext2').removeClass('tism_anim2_slide');
		$('.titlebig').removeClass('tibi_anim');
		$('.subtext1').removeClass('tism_anim');
		$('.subtext2').removeClass('tism_anim2');
	}, 50);
	setTimeout(function() {
		$('.titlebig').addClass('tibi_anim_slide');
		$('.subtext1').addClass('tism_anim_slide');
		$('.subtext2').addClass('tism_anim2_slide');
	}, 100);
	$('.sliderbox').addClass('slideblur');
	setTimeout(function() {
		$('.sliderbox').removeClass('slideblur');
	}, 300);
	var xhref = document.getElementById(id).getAttribute('href');
	location.href = xhref;
	return false;
}
//textslider TEXTE
function text1() {
	var ueberschrift = document.getElementById('titelbig');
	var subtext1 = document.getElementById('subtext1');
	var subtext2 = document.getElementById('subtext2');
	setTimeout(function() {
		ueberschrift.innerHTML = "Mit<br>Optik Tack";
		subtext1.innerHTML = "Modisch";
		subtext2.innerHTML = "auf Zack";
		subtext1.style.fontSize = "";
		subtext1.style.letterSpacing = "";
		subtext2.style.fontSize = "";
		subtext2.style.lineheight = "";
		subtext2.style.letterSpacing = "";
		subtext2.style.marginLeft = "";
		ueberschrift.style.fontSize = "";
		ueberschrift.style.lineHeight = "";
		$('.titelbox_render').css('height', '');
		$('.titlesmall').css('margin-top', '');
		$('.titelbox_render').css('padding-top', '');
		$('.titelbox_render').css('height', '');
	}, 550);
}
function text2() {
	var ueberschrift = document.getElementById('titelbig');
	var subtext1 = document.getElementById('subtext1');
	var subtext2 = document.getElementById('subtext2');
	setTimeout(function() {
		ueberschrift.innerHTML = "Optik Tack";
		subtext1.innerHTML = "Ein Tick mehr<br>Durchblick ";
		subtext2.innerHTML = "als andereswo";
		subtext1.style.fontSize = "46px";
		subtext2.style.fontSize = "46px";
		subtext1.style.letterSpacing = "6.2px";
		subtext2.style.lineheight = "1";
		subtext2.style.letterSpacing = "6.5px";
		subtext2.style.marginLeft = "";
		ueberschrift.style.fontSize = "";
		ueberschrift.style.lineHeight = "";
		$('.titelbox_render').css('height', '70px');
		$('.titelbox_render').css('padding-top', '22px');
		$('.titelbox_render').css('height', '100px');
		$('.titlesmall').css('margin-top', '100px');
	}, 550);
}
function text3() {
	var ueberschrift = document.getElementById('titelbig');
	var subtext1 = document.getElementById('subtext1');
	var subtext2 = document.getElementById('subtext2');
	setTimeout(function() {
		ueberschrift.innerHTML = "Tragen Sie's";
		subtext1.innerHTML = "mit (Modischer)";
		subtext2.innerHTML = "Fassung!";
		subtext1.style.fontSize = "48px";
		subtext1.style.letterSpacing = "5.2px";
		subtext2.style.fontSize = "";
		subtext2.style.lineheight = "";
		subtext2.style.letterSpacing = "";
		subtext2.style.marginLeft = "";
		ueberschrift.style.fontSize = "";
		ueberschrift.style.lineHeight = "";
		$('.titelbox_render').css('height', '');
		$('.titlesmall').css('margin-top', '');
		$('.titelbox_render').css('padding-top', '');
		$('.titelbox_render').css('height', '');
	}, 550);
}
function text4() {
	var ueberschrift = document.getElementById('titelbig');
	var subtext1 = document.getElementById('subtext1');
	var subtext2 = document.getElementById('subtext2');
	setTimeout(function() {
		ueberschrift.innerHTML = "Klare Sicht";
		subtext1.innerHTML = "und gute Laune";
		subtext2.innerHTML = "Optik Tack";
		subtext1.style.fontSize = "48px";
		subtext1.style.letterSpacing = "4.2px";
		subtext2.style.fontSize = "";
		subtext2.style.lineheight = "";
		subtext2.style.letterSpacing = "";
		subtext2.style.marginLeft = "";
		ueberschrift.style.fontSize = "";
		ueberschrift.style.lineHeight = "";
		$('.titelbox_render').css('height', '');
		$('.titlesmall').css('margin-top', '');
		$('.titelbox_render').css('padding-top', '');
		$('.titelbox_render').css('height', '');
	}, 550);
}
function text5() {
	var ueberschrift = document.getElementById('titelbig');
	var subtext1 = document.getElementById('subtext1');
	var subtext2 = document.getElementById('subtext2');
	setTimeout(function() {
		ueberschrift.innerHTML = "Mit Kind<br>und Kegel";
		subtext1.innerHTML = "";
		subtext2.innerHTML = "zu Optik Tack";
		subtext1.style.fontSize = "48px";
		subtext1.style.letterSpacing = "";
		subtext2.style.fontSize = "";
		subtext2.style.lineheight = "1";
		subtext2.style.letterSpacing = "5.2px";
		subtext2.style.marginLeft = "8px";
		ueberschrift.style.fontSize = "";
		ueberschrift.style.lineHeight = "";
		$('.titelbox_render').css('height', '');
		$('.titlesmall').css('margin-top', '200px');
		$('.titelbox_render').css('padding-top', '50px');
		$('.titelbox_render').css('height', '');
	}, 550);
}
function text6() {
	var ueberschrift = document.getElementById('titelbig');
	var subtext1 = document.getElementById('subtext1');
	var subtext2 = document.getElementById('subtext2');
	setTimeout(function() {
		ueberschrift.innerHTML = "Schutz<br>und Schönheit";
		subtext1.innerHTML = "Sonnenbrillen";
		subtext2.innerHTML = "von Optik Tack";
		subtext1.style.fontSize = "48px";
		subtext1.style.letterSpacing = "5.2px";
		subtext2.style.fontSize = "46px";
		subtext2.style.lineheight = "";
		subtext2.style.letterSpacing = "7.2px";
		subtext2.style.marginLeft = "";
		ueberschrift.style.fontSize = "46px";
		ueberschrift.style.lineHeight = "48px";
		$('.titelbox_render').css('height', '100px');
		$('.titlesmall').css('margin-top', '');
		$('.titelbox_render').css('padding-top', '40px');
		$('.titelbox_render').css('height', '');
	}, 550);
}
var selchild = 0;
var stop = 0;
function autoslide() {
	let slidertimeout
	if (stop == 0) {
		slidertimeout = setTimeout(function() {
			selchild += 1;
			$clickss = $('center#dotcenter').children().eq(selchild);
			$clickb = $clickss.attr("id");
			setTimeout(function() {
				document.getElementById($clickb).click();
			}, 200);
			if ($clickss.length) {
				autoslide();
			} else {
				selchild = 0;
				$clickss = $('center#dotcenter').children().eq(selchild);
				$clickss.click();
				//var sldnum = selchild = 1;
				//var locationhref = "#slider"+sldnum;
				//location.href=locationhref;
			}
			return false;
			//document.getElementById("dot2").click();
		}, 4000);
	} else {
		clearTimeout(slidertimeout);
	}
}
//animation stop function
function stopanim() {
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
$(window).on('resize scroll', function() {
	if ($('#start').inview()) {
		//stop slide animation
		stop += 1;
		autoslide()
		//downarrow auto anim
		$('.cubearrowholder').css('transform', 'matrix(1,0,0,1,4,-39) scale(1)');
		$('.cubearrowholder').css('opacity', '1');
		$('.dwa_line').css('transform', 'scaleY(0.8)');
	} else {
		//downarrow auto anim
		$('.cubearrowholder').css('transform', '');
		$('.cubearrowholder').css('opacity', '');
		$('.dwa_line').css('transform', '');
	}
	if ($('#aktionenbox').inview()) {} else {}
});
           var wait = 0;
var sliderbg = 1;
function autoslideaktionen() {
	var sliderakt = document.getElementById("slideraktionen");
	sliderakt.scrollLeft = 0;
	if (wait == 0) {
		setTimeout(function() {
			wait += 1;
			autoslideaktionen();
		}, 3600)
	} else {
		var Slide = function() {
			$('.aktionabschnitt_bg').removeClass('akbg' + sliderbg);
			var i;
			var slide = document.querySelectorAll(".aktionsliderimage");
			for (i = 1; i < slide.length; i++) {}
			count++;
			if (count > slide.length) {
				var sliderakt = document.getElementById("slideraktionen");
				sliderakt.scrollLeft = 0;
				sliderbg = 0;
				count = 1;
			}
			//slide[count-1].setAttribute("style","display:block;left:900px;");
			var nid = slide[count - 1].getAttribute("id");
			var sliderakt = document.getElementById("slideraktionen");
			sliderakt.scrollLeft += 850;
			sliderbg += 1;
			$('.aktionabschnitt_bg').addClass('akbg' + sliderbg);
			setTimeout(Slide, 3600);
		}
		var count = 1;
		Slide();
	}
}
   $(document).ready(function() {
	$(".scrolled").on('click', function(event) {
		if (this.hash !== "") {
			event.preventDefault();
			var hash = this.hash;
			$('html, body').animate({
				scrollTop: $(hash).offset().top
			}, 800, function() {
				window.location.hash = hash;
			});
		}
	});
});
//loadingscript
window.addEventListener("load", function() {
	var loader = document.getElementById("loader");
	setTimeout(function() {
		document.body.removeChild(loader)
	}, 10);
});
// defaultmouse -----------------------------------
var curs = document.getElementById('cursorcontainer');
var br1 = document.getElementById('brillenlinie1');
var br2 = document.getElementById('brillenlinie2');
var sl1 = document.getElementById('brslider');
var sv = document.getElementById('svgp');
var tscroll = document.getElementById('tscroll');
var ttbox = document.getElementById('titletextbox');
const curso = curs;
document.addEventListener('mousemove', e => {
	curso.setAttribute("style", "top: " + (e.pageY - 1) + "px; left: " + (e.pageX - 1) + "px;")
	var x = e.clientX;
	var y = e.clientY;
	//header move
	var x2 = x / 100;
	var y2 = y / 100;
	var xx2 = x2 - 6.28;
	var x3 = "-" + x2;
	var x4 = x / 1000;
	var y4 = y / 120;
	br1.style.transform = "matrix(1,0,0,1,0," + y2 + ")";
	br2.style.transform = "matrix(1,0,0,1,0," + y2 + ")";
	sl1.style.marginTop = "-" + y4 + "px";
	tscroll.style.transform = "matrix(1,0,0,1,0," + y4 + ")";
	$(".cursored").hover(function() {
		$("#cursor").css({
			"width": "50px",
			"height": "50px",
			"opacity": "0.9"
		});
		setTimeout(function() {}, 200);
		$("#cursorcontainer").css({
			"width": "50px",
			"height": "50px"
		});
	}, function() {
		$("#cursor").css({
			"width": "",
			"height": "",
			"backdrop-filter": "",
			"opacity": ""
		});
		$("#cursorcontainer").css({
			"width": "",
			"height": ""
		});
	});
});
document.addEventListener('click', () => {
	$("#cursor").addClass("curclick");
	setTimeout(() => {
		$("#cursor").removeClass("curclick");
	}, 100);
	setTimeout(() => {
		$("#cursor").css("transition", "");
	}, 200);
});
function parallax() {
	var yPos = 0 - window.pageYOffset / 6;
	ttbox.style.transform = "matrix(1,0,0,1,0," + yPos + ")";
	sl1.style.transform = "matrix(1,0,0,1,0," + yPos + ")";
}
window.addEventListener("scroll", function() {
	parallax();
});
document.addEventListener('DOMContentLoaded', function(){
	autoslide(); autoslideaktionen()
})
