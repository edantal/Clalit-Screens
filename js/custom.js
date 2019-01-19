$(document).ready(function() {
	banner1 = 'http://clalit-info.co.il/campaigns/campaigns/2016/0716_screens/images/posters/banner1.jpg';
	banner2 = 'http://clalit-info.co.il/campaigns/campaigns/2016/0716_screens/images/posters/banner2.jpg';
	banner3 = 'http://clalit-info.co.il/campaigns/campaigns/2016/0716_screens/images/posters/banner3.jpg';
	banner4 = 'http://clalit-info.co.il/campaigns/campaigns/2016/0716_screens/images/posters/banner4.jpg';
	signup_banner = 'http://clalit-info.co.il/campaigns/campaigns/2016/0716_screens/images/posters/signup_banner.jpg';
	signup_prnt = 'http://clalit-info.co.il/campaigns/campaigns/2016/0716_screens/images/signup.jpg';
	
	sticker1 = 'http://clalit-info.co.il/campaigns/campaigns/2016/0716_screens/stickers/sticker1.php';
	sticker2 = 'http://clalit-info.co.il/campaigns/campaigns/2016/0716_screens/stickers/sticker2.php';
	sticker3 = 'http://clalit-info.co.il/campaigns/campaigns/2016/0716_screens/stickers/sticker3.php';
	sticker4 = 'http://clalit-info.co.il/campaigns/campaigns/2016/0716_screens/stickers/sticker4.php';
	signup_sticker = 'http://clalit-info.co.il/campaigns/campaigns/2016/0716_screens/stickers/signup.php';
	
	shareLnk = 'http://clalit-info.co.il/campaigns/campaigns/2016/0716_screens/';
	signupLnk = 'http://clalit-info.co.il/campaigns/campaigns/2016/0716_screens/images/signup.pdf';
	fbTitle = 'כללית מציגה: המלצות לבריאות הילדים בעידן הדיגיטלי';
	waTitle = 'כל מה שאתם צריכים לדעת כדי לשמור על אורח חיים בריא בעידן הדיגיטלי';
	waSignupTitle = 'אמנה משפחתית';
	descTxt = ' ';
	
	activateBtns();
});

function activateBtns() {
	/* --------------------------------------------------------------- NAV --------------------------------------------------------------- */
	$('header nav ul li:nth-child(1)').on('click', function() {
		//switchPage('#section1', this, 0);
		var btn1_url = "http://www.clalit.co.il/he/your_health/kids/Pages/health_in_the_digital_age.aspx";
		window.open(btn1_url, '_blank');
	});
	$('header nav ul li:nth-child(2)').on('click', function() {
		switchPage('#section2', this, 0);
	});
	$('header nav ul li:nth-child(3)').on('click', function() {
		switchPage('#section3', this, 0);
	});
	$('header nav ul li:nth-child(4)').on('click', function() {
		switchPage('aside#green-box', this, 0);
	});
	
	/* --------------------------------------------------------------- Banners Popup --------------------------------------------------------------- */
	$('aside#blue-box').on('click', function() {
		togglePopup(true, 'div.details#banner-popup');
		switchPage('#popups', this, 0);
	});
	$('div.details#banner-popup .close-btn').on('click', function() {
		togglePopup(false, '');
	});
	
	/* --------------------------------------------------------------- Rules Popup --------------------------------------------------------------- */
	$('aside#green-box').on('click', function() {
		togglePopup(true, 'div.details#rules-popup');
		switchPage('#popups', this, 0);
	});
	$('div.details#rules-popup .close-btn').on('click', function() {
		togglePopup(false, '');
	});
	
	/* --------------------------------------------------------------- Signup Popup --------------------------------------------------------------- */
	$('section#section2 .btn').on('click', function() {
		togglePopup(true, 'div.details#signup-popup');
		switchPage('#popups', this, 0);
	});
	$('div.details#signup-popup .close-btn').on('click', function() {
		togglePopup(false, '');
	});
	
	/* --------------------------------------------------------------- Facebook Banners Share --------------------------------------------------------------- */
	$('div.details#banner-popup .share-banner:nth-child(1) .facebook').on('click', function() {
		fbShare( fbTitle, shareLnk, banner1, fbTitle, descTxt );
	});
	$('div.details#banner-popup .share-banner:nth-child(2) .facebook').on('click', function() {
		fbShare( fbTitle, shareLnk, banner2, fbTitle, descTxt );
	});
	$('div.details#banner-popup .share-banner:nth-child(3) .facebook').on('click', function() {
		fbShare( fbTitle, shareLnk, banner3, fbTitle, descTxt );
	});
	$('div.details#banner-popup .share-banner:nth-child(4) .facebook').on('click', function() {
		fbShare( fbTitle, shareLnk, banner4, fbTitle, descTxt );
	});
	$('div.details#signup-popup .share-icons.facebook').on('click', function() {
		fbShare( fbTitle, signupLnk, signup_banner, fbTitle, descTxt );
	});
	
	/* --------------------------------------------------------------- Whatsapp Banners Share --------------------------------------------------------------- */
	$('div.details#banner-popup .share-banner:nth-child(1) .whatsapp').on('click', function() {
		waShare( waTitle, sticker1 );
	});
	$('div.details#banner-popup .share-banner:nth-child(2) .whatsapp').on('click', function() {
		waShare( waTitle, sticker2 );
	});
	$('div.details#banner-popup .share-banner:nth-child(3) .whatsapp').on('click', function() {
		waShare( waTitle, sticker3 );
	});
	$('div.details#banner-popup .share-banner:nth-child(4) .whatsapp').on('click', function() {
		waShare( waTitle, sticker4 );
	});
	$('div.details#signup-popup .share-icons.whatsapp').on('click', function() {
		waShare( waSignupTitle, signup_sticker );
	});
	
	/* --------------------------------------------------------------- Print Banners --------------------------------------------------------------- */
	$('div.details#banner-popup .share-banner:nth-child(1) .print').on('click', function() {
		imgPrint(banner1);
	});
	$('div.details#banner-popup .share-banner:nth-child(2) .print').on('click', function() {
		imgPrint(banner2);
	});
	$('div.details#banner-popup .share-banner:nth-child(3) .print').on('click', function() {
		imgPrint(banner3);
	});
	$('div.details#banner-popup .share-banner:nth-child(4) .print').on('click', function() {
		imgPrint(banner4);
	});
	$('div.details#signup-popup .share-icons.print').on('click', function() {
		/*imgPrint(signup_prnt);*/
		window.open(signupLnk, '_blank');
		
	});
}

/* --------------------------------------------------------------- FUNCTIONS --------------------------------------------------------------- */
// Popup
function togglePopup(isActive, popup) {
	if(isActive) {
		$('#popups').css({ 'display':'block' }).animate({ 'opacity':1 }, 666, 'easeOutQuart', function() {
			$(popup).css({ 'display':'block' }).animate({ 'opacity':1 }, 666, 'easeOutQuart', function() {
				//$('body').css({ 'height':'100%', 'overflow':'hidden' });
			});
		});
	}
	else {
		//$('body').css({ 'height':'auto', 'overflow':'auto' });
		$('#popups').animate({ 'opacity':0 }, 500, 'easeOutQuart', function() {
			$('#popups').css({ 'display':'none' });
			$('div.details').css({ 'display':'none', 'opacity':0 });
		});
	}
}

// Scroll
function switchPage(pg, act, offsetX) {
	$('body').scrollTo(pg, 1000, { offset:{ top:offsetX } });
	//$('header nav ul li').removeClass('active');
	//$(act).addClass('active');
}

// Share
function sourcePrint(source) {
	return "<html><head><script>function step1(){\n" +
		"setTimeout('step2()', 10);}\n" +
		"function step2(){window.print();window.close()}\n" +
		"</scri" + "pt></head><body onload='step1()'>\n" +
		"<img src='" + source + "' /></body></html>";
}
function imgPrint(source) {
	Pagelink = "about:blank";
	var pwa = window.open(Pagelink, "_new");
	pwa.document.open();
	pwa.document.write(sourcePrint(source));
	pwa.document.close();
}

function fbShare(shareName, shareLink, shareImg, shareCaption, shareDesc) {
	FB.ui({
		method: 'feed',
		name: shareName,
		link: shareLink,
		picture: shareImg,
		caption: shareCaption,
		description: shareDesc,
		message: ''
	});
}

function waShare(shareTitle, shareLink) {
	if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		var article = shareTitle;
		var weburl = shareLink;
		var whats_app_message = encodeURIComponent(article)+" - "+encodeURIComponent(weburl);
		var whatsapp_url = "whatsapp://send?text="+whats_app_message;
		window.location.href= whatsapp_url;
	}else{
		alert('You are not using mobile device');
	}
}