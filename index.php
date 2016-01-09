<?php

include("mdetect.php");

//Instantiate the object to do our testing with.

$uagent_obj = new uagent_info();

//Detect methods return 1 for true, 0 for false

$isIphoneIpod = $uagent_obj->DetectIphoneOrIpod(); //Check for both!

$isAndroid = $uagent_obj->DetectAndroid();

$isTierIphone = $uagent_obj->DetectTierIphone();

$isTierTablet = $uagent_obj->DetectTierTablet();

$isWebOS = $uagent_obj->DetectPalmWebOS();

$isTierRichCss = $uagent_obj->DetectTierRichCss();

$isTierGenericMobile = $uagent_obj->DetectTierOtherPhones();


if ($isIphoneIpod == 1) { header('Location: http://m.northfieldcabinetshop.com'); }

else if ($isAndroid == 1) {header('Location: http://m.northfieldcabinetshop.com'); }

else if ($isTierIphone == 1) {header('Location: http://m.northfieldcabinetshop.com'); }

else if ($isTierTablet == 1) {header('Location: http://m.northfieldcabinetshop.com'); }

else if ($isWebOS == 1) {header('Location: http://m.northfieldcabinetshop.com'); }

else if ($isTierRichCss == 1) {header('Location: http://m.northfieldcabinetshop.com'); }

else if ($isTierGenericMobile == 1) {header('Location: http://m.northfieldcabinetshop.com'); }

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Northfield Cabinet Shop Home</title>

<meta name="description" Content="Northfield Cabinet Shop has been building custom cabinetry for over 60 years. Each project is uniquely designed, hand-crafted, and finely tailored to fit your individual needs.">

<meta name="keywords" Content="custom, woodwork, cabinets, cabinetry, custom cabinety, building, designed, tailored custom woodwork, Conover, Eagle River, Wisconsin, kitchen, cabinet, vanity, pine, alder, knotty, hand-crafted, crafted, built-in, unit, drawer, detail, shop, gallery, hand-made, distressed, hand-distressed, painted, stained, glazed.">

<link href="css/northfield_style.css" rel="stylesheet" type="text/css"></link>
<link href="fonts/Orator/orator.css" rel="stylesheet" type="text/css"></link>

<script type="text/javascript" src="scripts/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="scripts/nav.js"></script>
<script type="text/javascript" src="scripts/fadeslideshow.js"></script>



<script type="text/javascript">
/***********************************************
* Ultimate Fade In Slideshow v2.0- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/
var mygallery=new fadeSlideShow({
	wrapperid: "fadeshow1", //ID of blank DIV on page to house Slideshow
	dimensions: [700, 525], //width/height of gallery in pixels. Should reflect dimensions of largest image
	imagearray: [
		["img/indexphotos/1.jpg", "hardin.html", "", "Kitchen with knotty pine panel doors and drawers framed by natural lyptus"],
		["img/indexphotos/2.jpg",  "musky.html", "", "Cookline and sink with raised bar top"],
		["img/indexphotos/3.jpg",  "homan.html", "", "Bathroom vanity with marble top" ],
		["img/indexphotos/4.jpg",  "threelakes.html", "", "Painted hardwood cabinets with beadboard backsplash"],
		["img/indexphotos/5.jpg",  "dam.html", "", "Kitchen with knotty alder and natural finish"],
		["img/indexphotos/6.jpg",  "mamie.html", "", "Kitchen island with distressed pine top"] //<--no trailing comma after very last image element!
	],
	displaymode: {type:'auto', pause:3000, cycles:0, wraparound:false},
	persist: false, //remember last viewed slide and recall within same session?
	fadeduration: 1000, //transition duration (milliseconds)
	descreveal: "ondemand",
	togglerid: ""
})

</script>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-32805123-1']);
  _gaq.push(['_setDomainName', 'northfieldcabinetshop.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body class="gradient" onload="openSubMenu(); closeubMenu()">
<div id="wrapper">

<div id="header" class="clearfix"> 
<div id="logo">
   	<a href="index.php"><img src="img/NCS_Logo.gif" width="269" height="187" alt="northfield cabinet logo"></a>
</div> <!--end logo div-->

<div id="nav">
	<ul class="myMenu">
		<li><a href="about.html">About</a></li>
    	<li><a href="gallery.html">Gallery</a>
        	<ul>
            	<li><a href="dam.html">Dam Lake</a></li>
                <li><a href="threelakes.html">Three Lakes</a></li>
                <li><a href="homan.html">Homan Lake</a></li>
                <li><a href="musky.html">Musky Island</a></li>
                <li><a href="hardin.html">Hardin Lake</a></li>
                <li><a href="mamie.html">Mamie Lake</a></li>
           </ul>
         </li>
        <li><a href="contact.html">Contact</a></li>
    </ul>
</div> <!--end of nav-->

<div id="tree">
    <img src="img/right_tree.gif" width="200" height="200" alt="golden tree">
</div> <!--end tree div-->
</div> <!--end of header -->
	


<div id="main">

<div class="mainimg">
	<div id="fadeshow1"></div>
</div> <!--end of mainimg-->
    
<div class="maintext">
    <p>Northfield Cabinet Shop is a family-owned business located in northern Wisconsin that has been providing quality custom cabinetry for over 60 years. Our projects are uniquely designed, hand-crafted, and finely tailored to fit your individual needs.   <em>Nothing</em> is pre-fabricated.  We'll work with you from start to finish to create pieces that will set your home apart and last a lifetime.  Check out our <a href="gallery.html">gallery</a> for examples of our finished work, and find us on <a href="http://www.facebook.com/pages/Northfield-Cabinet-Shop/149174731883170" target="_blank">Facebook</a> to see our projects-in-progress. </p>
    
</div> <!--end of maintext-->
</div> <!--end of main-->


<div id="footer">
	<ul class="clearfix">
    	<li>4780 Old Hwy 45, Conover, WI 54519 </li>
        <li>//</li>
        <li>(715) 547-6262 </li>
        <li>//</li>
        <li><a href="http://www.facebook.com/pages/Northfield-Cabinet-Shop/149174731883170" target="_blank"><img src="facebook/facebook_icon.gif"></a></li>
    </ul>

</div> <!--end of footer-->


</div> <!--end wrapper div -->


</body>
</html>
