<!doctype html>
<html>
	<head>
                <link rel = "icon" href =  "Logo\newLogo.jpg " 
        type = "image/x-icon">
		<title>TATA</title> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
*{margin: 0; padding: 0;}
body{background-color: white;}
.container
{
	width: 100%;
	height: 100%;
}
.trans
{
	transition: all 1s ease;
	-moz-transition: all 1s ease;
	-ms-transition: all 1s ease;
	-o-transition: all 1s ease;
	-webkit-transition: all 1s ease;
}
.top
{
	display: flex;
	width: 90vw;
	height: 130vh;
	margin-top: 10vh;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10vh;
}
.top ul
{
	list-style: none;
	width: 100%;
	height: 100%;
	z-index: 1;
	box-sizing: border-box;
}
.top ul li
{
	position: relative;
	float: left;
	width: 25%;
	height: 25%;
	overflow: hidden;
}

.top ul li::before
{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-color:pink; 
	content: '';
	color: white;
	opacity: 0.4;
	text-align: center;
	box-sizing: border-box;
	pointer-events: none;
	transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	-webkit-transition: all 0.5s ease;
}
.top ul li:hover::before
{
	opacity: 0;
	background-color: rgba(0,0,0,0.90);
}
.top ul li img
{
	width: 100%;
	height: auto;
	overflow: hidden;
}
.lightbox
{
	position: fixed;
	width: 100%;
	height: 100%;
	text-align: center;
	top: 0;
	left: 0;
	background-color: rgba(0,0,0,0.75);
	z-index: 999;
	opacity: 0;
	pointer-events: none;
}
.lightbox img
{
	max-width: 90%;
	max-height: 80%;
	position: relative;
	top: -100%;
	/* Transition */
	transition: all 1s ease;
	-moz-transition: all 1s ease;
	-ms-transition: all 1s ease;
	-o-transition: all 1s ease;
	-webkit-transition: all 1s ease;
}
.lightbox:target
{
	outline: none;
	top: 0;
	opacity: 1;
	pointer-events: auto;
	transition: all 1.2s ease;
	-moz-transition: all 1.2s ease;
	-ms-transition: all 1.2s ease;
	-o-transition: all 1.2s ease;
	-webkit-transition: all 1.2s ease;
}
.lightbox:target img
{
	top: 0;
	top: 50%;
	transform: translateY(-50%);
	-moz-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	-o-transform: translateY(-50%);
	-webkit-transform: translateY(-50%);
}


</style>
<body>
<a href="index.php"><i class="fa fa-home"  style="font-size:48px;color:red">HOME</i>
<div class="container" >
	<div class="top">
    	<ul>
		            <li><a href="#img_41"><img src="Finalimage/_images_altroz_download_1200x800_brochure-img-01_1200_800.jpg"></a></li>
            <li><a href="#img_42"><img src="Finalimage/_images_altroz_download_1200x800_brochure-img-02_1200_800.jpg"></a></li>
            <li><a href="#img_43"><img src="Finalimage/_images_altroz_download_1200x800_brochure-img-03_1200_800.jpg"></a></li>
            <li><a href="#img_44"><img src="Finalimage/_images_altroz_download_1200x800_brochure-img-04_1200_800.jpg"></a></li>
			<li><a href="#img_45"><img src="Finalimage/_images_altroz_download_1200x800_brochure-img-06_1200_800.jpg"></a></li>
			<li><a href="#img_46"><img src="Finalimage/_images_altroz_download_1200x800_brochure-img-07_1200_800.jpg"></a></li>
			<li><a href="#img_47"><img src="Finalimage/_images_altroz_download_1200x800_brochure-img-05_1200_800.jpg"></a></li>
			<li><a href="#img_48"><img src="Finalimage/_images_altroz_download_1200x800_brochure-img-15_1200_800.jpg"></a></li>
        	<li><a href="#img_1"><img src="Finalimage/bolt.jpg"></a></li>
            <li><a href="#img_2"><img src="Finalimage/tigor.jpg"></a></li>
            <li><a href="#img_3"><img src="Finalimage/altroz.jpg"></a></li>
            <li><a href="#img_4"><img src="Finalimage/harrier.jpg"></a></li>
            <li><a href="#img_5"><img src="Finalimage/hexa.jpg"></a></li>
            <li><a href="#img_6"><img src="Finalimage/nano.jpg"></a></li>
            <li><a href="#img_7"><img src="Finalimage/nexon.jpg"></a></li>
            <li><a href="#img_8"><img src="Finalimage/safari_strome.jpg"></a></li>
            <li><a href="#img_9"><img src="Finalimage/tiago.jpg"></a></li>
            <li><a href="#img_10"><img src="Finalimage/zest.jpg"></a></li>
            <li><a href="#img_11"><img src="Finalimage/nexon1.jpg"></a></li>
            <li><a href="#img_12"><img src="Finalimage/spotlight-poster.jpg"></a></li>
            <li><a href="#img_13"><img src="Finalimage/tiago-banner.jpg"></a></li>
            <li><a href="#img_14"><img src="Finalimage/Tata-Tigor-petrol-rear-quarter-dynamic-First-Drive-Review.jpg"></a></li>
            <li><a href="#img_15"><img src="Finalimage/tata-tiago-facelift-featured.jpg"></a></li>
            <li><a href="#img_16"><img src="Finalimage/tata-tiago-facelift-2020-2-1068x601.jpg"></a></li>
            <li><a href="#img_17"><img src="Finalimage/tiago-banner.jpg"></a></li>
            <li><a href="#img_18"><img src="Finalimage/tiago-thumb.jpg"></a></li>
            <li><a href="#img_19"><img src="Finalimage/tata-tiago-15255.jpg"></a></li>
            <li><a href="#img_20"><img src="Finalimage/tigor-banner.jpg"></a></li>
            <li><a href="#img_21"><img src="Finalimage/Tata-Tigor-Rea_20170807-080914_1.jpg"></a></li>
            <li><a href="#img_22"><img src="Finalimage/2018-tata-tigor-front-6290.jpg"></a></li>
            <li><a href="#img_23"><img src="Finalimage/5-29.jpg"></a></li>
            <li><a href="#img_24"><img src="Finalimage/47465_2018_Tata_Tigor.jpg"></a></li>
            <li><a href="#img_25"><img src="Finalimage/tata-tigor-1552.jpg"></a></li>
            <li><a href="#img_26"><img src="Finalimage/tata-tigor-amt-05.jpg"></a></li>
            <li><a href="#img_27"><img src="Finalimage/2020-tata-tiago-interior-brochure-leaked-feat.jpg"></a></li>
            <li><a href="#img_28"><img src="Finalimage/tigor-2020.jpg"></a></li>
            <li><a href="#img_29"><img src="Finalimage/flat-bottom-steering-wheel-1024x529.jpg"></a></li>
            <li><a href="#img_30"><img src="Finalimage/Tata-Tigor-Interior-151204.jpg"></a></li>
            <li><a href="#img_31"><img src="Finalimage/ikjvh3d8_tata-nexon-kraz-edition_625x300_05_September_18.jpg"></a></li>
            <li><a href="#img_32"><img src="Finalimage/maxresdefault (1).jpg"></a></li>
            <li><a href="#img_33"><img src="Finalimage/tata-harrier-779cc3af-500x375.jpg"></a></li>
            <li><a href="#img_34"><img src="Finalimage/autocar-show-2020-tata-nexon-first-drive-review.jpg"></a></li>
            <li><a href="#img_35"><img src="Finalimage/nexon-banner.jpg"></a></li>
            <li><a href="#img_36"><img src="Finalimage/Untitled-7.jpg"></a></li>
            <li><a href="#img_37"><img src="Finalimage/tata-nexon-altroz-feb-2020-sales.jpg"></a></li>
            <li><a href="#img_38"><img src="Finalimage/Tata-Nexon-EV-Press-Image-Interior-1920px.jpg"></a></li>
            <li><a href="#img_39"><img src="Finalimage/Tata-Nexon-Auto-Expo-2020.jpg"></a></li>
            <li><a href="#img_40"><img src="Finalimage/maxresdefault (3).jpg"></a></li>

            
            
        </ul>
        <a href="#_1" class="lightbox trans" id="img_1"><img src="Finalimage/bolt.jpg"></a>
        <a href="#_2" class="lightbox trans" id="img_2"><img src="Finalimage/tigor.jpg"></a>
        <a href="#_3" class="lightbox trans" id="img_3"><img src="Finalimage/altroz.jpg"></a>
        <a href="#_4" class="lightbox trans" id="img_4"><img src="Finalimage/harrier.jpg"></a>
        <a href="#_5" class="lightbox trans" id="img_5"><img src="Finalimage/hexa.jpg"></a>
        <a href="#_6" class="lightbox trans" id="img_6"><img src="Finalimage/nano.jpg"></a>
        <a href="#_7" class="lightbox trans" id="img_7"><img src="Finalimage/nexon.jpg"></a>
        <a href="#_8" class="lightbox trans" id="img_8"><img src="Finalimage/safari_strome.jpg"></a>
        <a href="#_9" class="lightbox trans" id="img_9"><img src="Finalimage/tiago.jpg"></a>
        <a href="#_10" class="lightbox trans" id="img_10"><img src="Finalimage/zest.jpg"></a>
        <a href="#_11" class="lightbox trans" id="img_11"><img src="Finalimage/nexon1.jpg"></a>
        <a href="#_12" class="lightbox trans" id="img_12"><img src="Finalimage/spotlight-poster.jpg"></a>
        <a href="#_13" class="lightbox trans" id="img_13"><img src="Finalimage/tiago-banner.jpg"></a>
        <a href="#_14" class="lightbox trans" id="img_14"><img src="Finalimage/Tata-Tigor-petrol-rear-quarter-dynamic-First-Drive-Review.jpg"></a>
        <a href="#_15" class="lightbox trans" id="img_15"><img src="Finalimage/tata-tiago-facelift-featured.jpg"></a>
        <a href="#_16" class="lightbox trans" id="img_16"><img src="Finalimage/tata-tiago-facelift-2020-2-1068x601.jpg"></a>
        <a href="#_17" class="lightbox trans" id="img_17"><img src="Finalimage/tiago-banner.jpg"></a>
        <a href="#_18" class="lightbox trans" id="img_18"><img src="Finalimage/tiago-thumb.jpg"></a>
        <a href="#_19" class="lightbox trans" id="img_19"><img src="Finalimage/tata-tiago-15255.jpg">
        <a href="#_20" class="lightbox trans" id="img_20"><img src="Finalimage/tigor-banner.jpg">
        <a href="#_21" class="lightbox trans" id="img_21"><img src="Finalimage/Tata-Tigor-Rea_20170807-080914_1.jpg">
        <a href="#_22" class="lightbox trans" id="img_22"><img src="Finalimage/2018-tata-tigor-front-6290.jpg">
        <a href="#_23" class="lightbox trans" id="img_23"><img src="Finalimage/5-29.jpg">
        <a href="#_24" class="lightbox trans" id="img_24"><img src="Finalimage/47465_2018_Tata_Tigor.jpg">
        <a href="#_25" class="lightbox trans" id="img_25"><img src="Finalimage/tata-tigor-1552.jpg">
        <a href="#_26" class="lightbox trans" id="img_26"><img src="Finalimage/tata-tigor-amt-05.jpg">
        <a href="#_27" class="lightbox trans" id="img_27"><img src="Finalimage/2020-tata-tiago-interior-brochure-leaked-feat.jpg">
        <a href="#_28" class="lightbox trans" id="img_28"><img src="Finalimage/tigor-2020.jpg">
        <a href="#_29" class="lightbox trans" id="img_29"><img src="Finalimage/flat-bottom-steering-wheel-1024x529.jpg">
        <a href="#_30" class="lightbox trans" id="img_30"><img src="Finalimage/Tata-Tigor-Interior-151204.jpg">
        <a href="#_31" class="lightbox trans" id="img_31"><img src="Finalimage/ikjvh3d8_tata-nexon-kraz-edition_625x300_05_September_18.jpg">
        <a href="#_32" class="lightbox trans" id="img_32"><img src="Finalimage/maxresdefault (1).jpg">
        <a href="#_33" class="lightbox trans" id="img_33"><img src="Finalimage/tata-harrier-779cc3af-500x375.jpg">
        <a href="#_34" class="lightbox trans" id="img_34"><img src="Finalimage/autocar-show-2020-tata-nexon-first-drive-review.jpg">
        <a href="#_35" class="lightbox trans" id="img_35"><img src="Finalimage/nexon-banner.jpg">
        <a href="#_36" class="lightbox trans" id="img_36"><img src="Finalimage/Untitled-7.jpg">
        <a href="#_37" class="lightbox trans" id="img_37"><img src="Finalimage/tata-nexon-altroz-feb-2020-sales.jpg">
        <a href="#_38" class="lightbox trans" id="img_38"><img src="Finalimage/Tata-Nexon-EV-Press-Image-Interior-1920px.jpg">
        <a href="#_39" class="lightbox trans" id="img_39"><img src="Finalimage/Tata-Nexon-Auto-Expo-2020.jpg">
        <a href="#_40" class="lightbox trans" id="img_40"><img src="Finalimage/maxresdefault (3).jpg">
        <a href="#_41" class="lightbox trans" id="img_41"><img src="Finalimage/_images_altroz_download_1200x800_brochure-img-01_1200_800.jpg">
        <a href="#_42" class="lightbox trans" id="img_42"><img src="Finalimage/_images_altroz_download_1200x800_brochure-img-02_1200_800.jpg">
        <a href="#_43" class="lightbox trans" id="img_43"><img src="Finalimage/_images_altroz_download_1200x800_brochure-img-03_1200_800.jpg">
        <a href="#_44" class="lightbox trans" id="img_44"><img src="Finalimage/_images_altroz_download_1200x800_brochure-img-04_1200_800.jpg">
        <a href="#_45" class="lightbox trans" id="img_45"><img src="Finalimage/_images_altroz_download_1200x800_brochure-img-06_1200_800.jpg">
        <a href="#_46" class="lightbox trans" id="img_46"><img src="Finalimage/_images_altroz_download_1200x800_brochure-img-07_1200_800.jpg">
        <a href="#_47" class="lightbox trans" id="img_47"><img src="Finalimage/_images_altroz_download_1200x800_brochure-img-05_1200_800.jpg">
        <a href="#_48" class="lightbox trans" id="img_48"><img src="Finalimage/_images_altroz_download_1200x800_brochure-img-15_1200_800.jpg">
		
    </div>-1068x601.jpg"></
</div>
</body>