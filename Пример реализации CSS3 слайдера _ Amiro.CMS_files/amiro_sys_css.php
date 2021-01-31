/*
 * Date created: 2021-01-13 04:40:50
 */
/*
 * ATTENTION! This file is automatically created from several CSS files.
 * Find file path and name in the comments in the beginning of the each code block
 */


/*
 * FILE START: _mod_files/_css/common.css
 */

/* COMMON STYLES */
/* Don't delete existing styles, only modify its or add new ones! */

/* COMMON */
html {height:100%;min-height:100%}
body{height:100%;min-height:100%}

body {background-color:#ffffff;margin:0;padding:0;}
body, table, tr, td, p, input, select, textarea {color:#3F3F3F;font-family:Tahoma,Arial; font-size:13px; } 

A {color:#385B9C; text-decoration:underline; opacity:0.85;}
A:hover{color:#385B9C;text-decoration:underline; opacity:1; /*filter: alpha(opacity=60)*/}
A:vlink;A:link {color:#385B9C;}
A:visited {color:#385B9C; opacity:0.85;}
a:active, a:focus, img { outline: 0; }

a img {text-decoration:none; /*opacity:0.85; display:block; filter:alpha(opacity=75);*/}
a:hover img{/*filter:alpha(opacity=100);*/}

a.text_link img {opacity:0.85;}
a:hover.text_link img {opacity:1;}

.punktir, a.punktir:hover, a.punktir:visited {border-bottom: 1px dashed #385B9C; text-decoration:none;}

HR {background-color:#E8E8E8; height:1px; color:#E8E8E8; border:none;}

BLOCKQUOTE {margin-top:5px;margin-bottom:5px;margin-left:16px;margin-right:0px}

.photo{
	-moz-box-shadow: 0px 0px 10px 3px #ccc;
	-webkit-box-shadow: 0px 0px 10px 3px #ccc;
	box-shadow: 0px 0px 10px 3px #ccc;
}

.frame-shadow{
    display:inline-block;
	-moz-box-shadow: 0px 0px 10px 5px #ccc;
	-webkit-box-shadow: 0px 0px 10px 5px #ccc;
	box-shadow: 0px 0px 10px 5px #ccc;
}

.frame-shadow:hover{
	-moz-box-shadow: 0px 0px 10px 3px #C7E2FF;
	-webkit-box-shadow: 0px 0px 10px 3px #C7E2FF;
	box-shadow: 0px 0px 10px 3px #C7E2FF;
}

.frame-shadow IMG{
	cursor:pointer!important;
}
ul, ol {padding-top:5px; padding-bottom:5px; padding-left:0px; margin:0px 0px 10px 15px;}
li {padding-top:5px; padding-bottom:5px; padding-left:0px; margin:0px 0px 0px 10px;}
ul li{  
    list-style-type: none;
    background: url("_img/sqw.gif") no-repeat left 14px;    
    padding-left: 16px;
}

ul.compact {padding:0px; margin:0px;}
ul.compact li {padding:7px 0px 0px 10px; margin:0px;}

ul.compressed li {
	padding:3px 0px 0px 10px;
	margin:0px;
	background: url("_img/sqw.gif") no-repeat left 10px; 
	}


.text_small ul,.text_small ol,.text_small li{margin:0;}

.small, .small a { font-size: 10px!important; }
.top_tool_bar, .bottom_line {background-color:#48899B}

img{border:0px;}

div.logopart {
    border: 1px dotted #BCBCBC;
    display: table-cell;
    height: 80px;
    text-align: center;
    vertical-align: middle;
    width: 187px;}

.functions div{
    float: left;
    margin-right: 34px;
    width: 202px;
	line-height: 1.7;
}

.functions img{
    margin-bottom: 8px;
}
.functions{
    margin: 23px 0 36px;
    overflow: hidden;
	
}


h1, h1 a, h1 a:visited, h1 a:hover {color:#000;font-size:26px;font-weight:normal; margin-bottom:5px; margin-top:5px;}
.h1, .h1 a, .h1 a:visited, .h1 a:hover {color:#000;font-size:18px;font-weight:bold; margin-bottom:5px; margin-top:5px;}

h2, .h2 {color:#000;font-size:24px;font-weight:normal;margin-bottom:5px;margin-top:30px;}
h2 a, h2 a:vlink, h2 a:visited, h2 a:hover, .h2 a, .h2 a:vlink, .h2 a:visited, .h2 a:hover {color:#385B9C;font-size:24px;font-weight:normal; margin-bottom:5px; margin-top:30px;}

h3, .h3 {color:#000;font-size:22px;font-weight:normal;margin-bottom:10px;margin-top:30px;}
h3 a, h3 a:vlink, h3 a:visited, h3 a:hover, .h3 a, .h3 a:vlink, .h3 a:visited, .h3 a:hover{color:#385B9C;font-size:22px;font-weight:normal;margin-bottom:10px;margin-top:30px;}

h4, .h4 {color:#000;font-size:18px;font-weight:normal;margin-bottom:7px;margin-top:15px;}
H4 a, h4 a:hover, h4 a:visited, .h4 a, .h4 a:hover, .h4 a:visited {color:#385B9C;font-size:18px;font-weight:normal;margin-bottom:7px;margin-top:15px;}
H4.main, H4.main a, h4.main a:hover, h4.main a:visited {color:#000; margin-top:0px;}

h5, .h5 {color:#000;font-size:16px;font-weight:normal;margin-bottom:5px;margin-top:5px;}
h5 a, h5 a:hover, h5 a:visited, .h5 a, .h5 a:hover, .h5 a:visited {color:#385B9C;font-size:16px;font-weight:normal; margin-bottom:5px; margin-top:5px;}

h1 b,h2 b,h3 b,h4 b,h5 b,h6 b{font-weight:normal;}

P.page_note {
        text-align: left;
	margin-left: 35%;
	font-family: Courier;
	line-height: 16px ! important;
	font-size: 14px ! important;
}

.video_main {
	position:relative;
	width:436px;
	height:224px;
	background: url("/_mod_files/ce_images/video-main.png") no-repeat;
	overflow:hidden;
	cursor:pointer;
	opacity:0.85;
}

.video_main:hover {
	opacity:1;
}

.video_main * {
	cursor:pointer;
	/*opacity:0.85;*/
}

.text_button, .text_button:hover {
	text-decoration:none;
}

.img_right{
    border: 1px solid #E2E2E2;
    float: right;
    margin: 0 0 0 20px;
}

.img_left{
    border: 1px solid #E2E2E2;
    float: left;
    margin: 0 20px 0 0;
}

.clear { clear: both; height: 0px; overflow: hidden; }


/* END COMMON */

/* FORM */
FORM        {  margin: 0px; }
INPUT       { FONT-SIZE:12px; }

INPUT.txt, INPUT.field, INPUT.filter_field { BORDER: #9c9c9c 1px solid;height:20px;padding:0;margin:0; }
INPUT.txt1{width:104px; BORDER: #9c9c9c 1px solid; height:20px;}
INPUT.txt_noborder   { BORDER: #FFFFFF 0px solid; }
INPUT.check { /*BORDER: 0px;*/ }
INPUT.btn, INPUT.but   { 
		background: url("_img/btn_middle.png") no-repeat 0 0;
		width:160px;
		height:33px;
		padding:0;
		border:none;
		color:#fff;
		cursor:pointer;behavior:url(_img/iepngfix.htc);
}

INPUT.btn_buy {
background: url("_img/faq_bgr.png") no-repeat scroll 0 0 transparent;
margin-top: 14px;
text-align: center;
width: 173px;
height:33px;
padding:0;
border:none;
color:#fff;
cursor:pointer;behavior:url(_img/iepngfix.htc);
font-size:15px;
}


SELECT.sel  { FONT-SIZE:11; BORDER: #9B9B9B 1px solid; }
CHECKBOX.chb{ FONT-SIZE:11; BORDER: #9B9B9B 1px solid; }
TEXTAREA.ta { FONT-SIZE:11; BORDER: #9B9B9B 1px solid; }
/* END FORMS */

/* TABLE */
TABLE.tbl {}
TABLE.tbl table{ border: 0px }
TABLE.tbl TD {border:0px}
TABLE.tbl TH {
		color:#ffffff;
		BORDER-RIGHT: #fff 1px solid; 
		background:#52B1E0;
		font-size:13px;
		padding:4px 8px 2px 10px;
		/*text-align:center;*/
}

TABLE.tbl TH a{color:#ffffff; font-size:13px;}
TABLE.tbl TH a:hover{color:#ffffff; font-size:13px;}
TABLE.tbl TH.al {color:#000000;border:0px; background-color:#89C6D7;font-size:12px;padding:5px 8px 5px 8px; text-align:right; font-weight:normal;}
TABLE.tbl TD {
	/*border-right:1px #5BA4D4 solid;*/
	border-bottom:1px #e0e0e0 solid;
	font-size:12px;
	padding:7px 8px 12px 0px;
	color:#000;
}

.forum_message_tbl img {max-width: 730px;}

/*
TABLE.tbl TR:nth-child(even){
	background-color:#f0f0f0;
}
*/

TABLE.thin TD {
	padding:2px 8px 5px 0px;
}

TABLE.host TH {
	text-align: left;
	font-size: 20px;
	font-weight:normal;
}

TABLE.host TD {
	padding:2px 8px 5px 10px;
}


TABLE.small TD, TABLE.small SPAN, TABLE.small a {
	font-size:12px;
}


TABLE.tbl TD#sub_td {background:#3B93CC;color:#ffffff;font-size:11px; border-right:#89C0E4 0px solid;border-top:#E6F4FF 1px solid;text-align:center;padding:2px 4px 2px 4px}

TABLE.tbl TD#sub_td1 {background:#368AC2;color:#ffffff;font-size:11px; border-right:#89C0E4 0px solid;/*border-top:#E6F4FF 1px solid;*/border-bottom:none;text-align:center;padding:2px 4px 2px 4px}

TABLE.tbl TH#compare {color:#ffffff;/*BORDER-RIGHT: #E6F4FF 1px solid; */background:#5BA4D4; font-size:12px;padding:5px 8px 5px 8px}

TABLE.tbl TH#compare1 {color:#ffffff;BORDER-RIGHT: #E6F4FF 1px solid; background:#71B3DF; font-size:13px;padding:5px 8px 5px 8px}

TABLE.tbl TH#compare2 {color:#ffffff;BORDER-RIGHT: #E6F4FF 0px solid; background:#64ABDA; font-size:13px;padding:5px 8px 5px 8px}

TABLE.compare TH  {color:#ffffff;font-weight:normal;padding:2px 4px 2px 4px}

/*TABLE.compare TD:nth-child(even)  {background-color:#f4f4f4;}*/

TABLE.compare TR:nth-child(even)  {background-color:#F6F7FA;}


TABLE.compare TH a, TABLE.compare TH a:hover, TABLE.compare TH a:visited {font-size:14px;}

TABLE.compare TD {border:0px;}

table.tbl td#compare{padding-left:8px;}

TABLE.tbl TD#sub_td a, TABLE.tbl TD#sub_td1 a {font-size:11px;}


TABLE.review TR:first-of-type TD{
	padding:0px;
}

TABLE.review TD{
	padding:5px; 
	text-align:center;
}
TABLE.review TD:first-of-type{
	text-align:left;
}

TABLE.review TR:nth-child(even)  {
	/*background-color:#F6F7FA;*/
}

/* END TABLE */

/* ToolTip */

div.AMIToolTip{ 
	position: absolute; 
	padding: 5px 10px; 
	border: 2px solid #fff; 
	background: #ffef8f; 
	margin:10px;
	border-radius: 5px;
	box-shadow: 1px 1px 5px 0px gray;

}

.tooltip_word{
	border-bottom: 1px dashed; 
	color: #385b9c;
	cursor: help;
}

/* MY SWAP */

a.swaphead:link, a.swaphead:hover, a.swaphead:visited, a.swaphead:active  {
		font-size: 14px;
        text-decoration: none !important;
        border-bottom: dashed 1px;
        line-height: 20px;
}
a.swaphead_s:link, a.swaphead_s:hover, a.swaphead_s:visited, a.swaphead_s:active  {
		font-size: 14px;
		color: #646464;
        text-decoration: none !important;
        border-bottom: none;
        line-height: 20px;
		cursor: default;
}
.swapbody {
        color:#676767;
        font-family:Arial; 
        font-size:12px;
}
.swaptable {
        border-color:#bcb7b3;
        border-style=solid;
        border-width:1px;
}

/* END MY SWAP */

/* MY QUOTES */

.quotes {border:1px solid #f4be92; padding: 15px 20px; margin: 1.5em 0 1.5em 2em; background-color: #fdeada; color: black; position: relative; //width: 99%;}
.quotes .quote-tl, .quotes .quote-tr, .quotes .quote-br, .quotes .quote-bl {position: absolute; width: 20px; height: 20px;}
.quotes .quote-tl {width: 43px; height: 41px; top: -1; left: -24px; background: url('/_mod_files/ce_images/icons/quote-tl.gif') 0 0 no-repeat;}
.quotes .quote-tr {top: -1; right: -1; background: url('/_mod_files/ce_images/icons/quote-tr.gif') 0 0 no-repeat;}
.quotes .quote-br {bottom: -1; _bottom: -2px !important; right: -1; background: url('/_mod_files/ce_images/icons/quote-br.gif') 0 0 no-repeat;}
.quotes .quote-bl {bottom: -1; _bottom: -2px !important; left: -1; background: url('/_mod_files/ce_images/icons/quote-bl.gif') 0 0 no-repeat;}
.quotes .quote-tr, .quotes .quote-br {right: expression( this.parentNode && this.parentNode.offsetWidth % 2 ? -2 : -1 );}
.quotes .quote-br, .quotes .quote-bl {bottom: expression( this.parentNode && this.parentNode.offsetHeight % 2 ? -2 : -1 );}

/* END MY QUOTES */


/* CURRENT DESIGN STYLES START  */

#logo_n{
	background: none;
	behavior:url(_img/iepngfix.htc);
	padding-top:30px;
	padding-bottom:30px;
	height:69px;
}


#logo_n .dez_logo{
	margin:0px 0px 0px 0px;
	display:block;
	width:208px;
	height:68px;
/*
	opacity:0.85;
*/
	opacity:1;
    filter: none;
	cursor:pointer;
}

/*
#logo_n .dez_logo {
    cursor: pointer;
    display: block;
    filter: none;
    height: 108px;
    margin: -22px 0 0 38px;
    width: 208px;
}
#logo_n .dez_logo {
    cursor: pointer;
    display: block;
    filter: none;
    height: 208px;
    margin: -67px 0 0 38px;
    width: 208px;
}
*/
#logo_n .dez_logo:hover{
	opacity:1;
}
/*a .dez_logo{
	margin:0px 0px 0px 38px;
	display:block;
	width:208px;
	height:69px;
	opacity:1 !important;
        filter: none;
}*/
/*.dez_logo:hover{opacity:1 !important;}*/

.dez_partners{
	float:right;
	right:66px;
	padding-right:10px;
	position:relative;
	background: url(_img/arrow_down.gif) no-repeat right 12px;
	z-index:100;
}

.dez_partners a, .dez_partners a:hover, .dez_partners a:visited{font-size:17px;color:#fff;text-decoration:none;}
.dez_partners a:hover{/*filter:progid:DXImageTransform.Microsoft.Alpha(opacity=60);*/}
.demo-sites .dez_partners { background: none; position: relative; top: -8px; right: 70px; }
.demo-sites a {border-bottom: 1px #FFF solid;}
.dez_phone{
	color:#000;
	font-size:14px;
	padding-top: 25px;
	width:199px;
	position:relative;
}
.dez_phone .main_phone {
    font-size: 32px;
    white-space: nowrap;
}

.dez_phone a{
	color:#424749;
	text-decoration:none;
}

.dez_phone a.dez_contact, .dez_phone a.dez_contact:hover, .dez_phone a.dez_contact:visited{
	color:#424749;
	font-size:12px;
	position:absolute;
	display:block;
	right:3px;bottom:1px;
	text-decoration:underline;
}
.cabinet{margin: 9px 10px 7px 0px; text-align:right;}

.cabinet a:link, .cabinet a:hover, .cabinet a:visited{color:#000;font-size:12px;}



a.green_btn {
    float: right;
    margin: 10px 0px 0px 10px;
    background: #4ec54e;
    color: #FFF;
    font-size: 16px;
    text-decoration: none;
    padding: 10px;
}

a.red_btn {
    float: right;
    margin: 10px 0px 0px 10px;
    background: #fff;
    color: #666;
    border: 2px #E92C2C solid;
    font-size: 16px;
    text-decoration: none;
    padding: 8px;
}

a.blue_btn {
    float: right;
    margin: 10px 0px 0px 10px;
    background: #fff;
    color: #666;
    border: 2px #49ADDC solid;
    font-size: 16px;
    text-decoration: none;
    padding: 8px;
}

a.gray_btn {
    float: right;
    margin: 10px 0px 0px 10px;
    background: #fff;
    color: #666;
    border: 2px #aaa solid;
    font-size: 16px;
    text-decoration: none;
    padding: 8px;
}



/*a#demo:link, a#demo:hover, a#demo:visited{
	display:block;
	font-size:14px;
	color:#fff;
	padding:6px 0px 0px 34px;
	float:left;
	text-decoration:none;
}*/



/*a#downld:link, a#downld:hover, a#downld:visited{
	display:block;
	font-size:14px;
	color:#fff;
	padding:6px 27px 0px 0px;
	text-decoration:none;
	float:right;
}*/

#wing {
	font-size:16px;
	color:#000;
	padding:0px;
	width:230px;
	margin-bottom:36px;
	padding-left:5px;
	margin-top:-28px;

}
#wing div{
	font-size:12px;
	padding:5px 0 0 0;
	line-height:1.3;
}
.dens {
	font-size:12px !important;
	line-height:1.3 !important;
}
.search_word{
    width: 90px;
    background: #FFF;
    border-radius: 20px;
	height:22px;
	behavior:url(_img/iepngfix.htc);
	line-height:1;
}
.search_word div{padding:3px 0px 0px 11px;line-height:1 !important;}
.search_word div input{
	border:0px;
	padding:0px;
	margin-top:0px;
	color:#9A9A9A;
	font-size:16px !important;
	width: 70px;
	line-height:1 !important;
	margin-top:-3px;
	background:transparent;
}

.numerator{
	font-size:20px !important;
	font-style:italic;
	background:url(_img/numerator_bgr.gif) no-repeat 0 6px;
	width:29px;
	height:24px;
	color:#fff;
	vertical-align:top;
	margin:0 5px 0 0;
	line-height:1.5 !important;
}
.numerator span{padding:0 0 0 4px;}

.dez_MainLeft{padding:23px 20px 15px 34px;}
/*
.dez_ТasksТypes a, .dez_ТasksТypes a:hover, .dez_ТasksТypes a:visited{
	color:#191919;
	font-size:18px;
	line-height:1;
	display:block;
}

*/
a.small_tag_list:link,a.small_tag_list:hover,a.small_tag_list:visited{
	/*color:#2378A4;
	font-size:16px;
	text-decoration:none;*/
}

.small_list_cloud{/*padding:0 20px 0 34px;*/}

.SmallListCloudMain{padding:0 20px 0 34px;}
.SmallListCloudMain a, .SmallListCloudMain a:hover, .SmallListCloudMain a:visited{
  color: #2378A4;
    font-size: 16px;
    text-decoration: none;

}

.AdviceCentre{
	width:247px;
	background:#fff url(_img/advice_centre_bgr.gif) repeat-x 0 0;
	border:1px dashed #AEAEAE;
	/*margin:41px 0 4px 7px;*/
margin: 32px 0 4px 7px;
}
.AdviceCentre .AdviceCentreInt{padding:14px 47px 20px 27px;}
.AdviceCentreInt a, .AdviceCentreInt a:hover, .AdviceCentreInt a:visited{
	color:#000;
	font-size:18px;
	display:block;
	padding:0 0 11px 0;
	line-height:1;
}
.AdviceCentre span{
	color:#050505;
	font-size:12px;
	line-height:1.5;
}
.faq_link{
	padding:0;
	text-align:center;
	margin:12px 0 0 0;
	width:173px;
	height:33px;
	background: url(_img/faq_bgr.png) no-repeat 0 0;
	behavior:url(_img/iepngfix.htc);
}
.faq_link a, .faq_link a:hover, .faq_link a:visited{
	display:block;
	color:#fff;
	font-size:14px;
	padding:6px 0 0 0;
}

.saas_link{
	padding:0;
	text-align:center;
	margin:12px 0 0 0;
	width:173px;
	height:33px;
	background: url(_img/faq_bgr.png) no-repeat 0 0;
	behavior:url(_img/iepngfix.htc);
}
.saas_link a, .saas_link a:hover, .saas_link a:visited{
	display:block;
	color:#fff;
	font-size:14px;
	padding:6px 0 0 0;
}

.small_opinions{padding:0 16px 0 34px;}
.opinion_name{
	color:#386E9C;
	font-size:14px;
	font-family:Arial;
	padding:0 0 6px 0;
	line-height:1;
}
.opinion_text{
	color:#000;
	line-height:1.3;
	padding:9px 0 3px 0;
}
.more_opinions{padding:0 0 0 34px;}
.more_opinions a, .more_opinions a:hover, .more_opinions a:visited{color:#418AB1;}

.left_area{
	width:170px;
	float:left;
	position:relative;
}
.right_area{
	padding:0 0 0 40px;
	position:relative;
	float:left;
	display:block;
}
.right_area_int{width:190px;}

.packet_name{float:left;line-height:1; padding-top:5px;}
.packet_name a, .packet_name a:hover, .packet_name a:visited{font-size:16px;}
.packet_price{
	font-size:14px;
	color:#000;
	padding-top:7px;
position: relative;
}

.right_area span{color:#000;line-height:1.4;}

.dez_version{margin:24px 0 3px 0;}
.dez_version a,.dez_version a:hover,.dez_version a:visited{color:#000000;font-size:18px;}

.compare_packets{
	background:url(_img/icon_compare.gif) no-repeat 0 13px;
	padding-top:12px;
	float:left;
	height:27px;
	margin-right:75px;
}
.compare_packets a,.compare_packets a:hover,.compare_packets a:visited{
	/*color:#116D9D;*/
	display:block;
	padding: 0 0 0 21px; 
	line-height:1;
	font-size:13px;
}
.demo_packets{
	background:url(_img/icon_demo.gif) no-repeat 0 14px;
	padding-top:12px;
	height:28px;
	float:left;
	margin-right:55px;
}
.demo_packets a, .demo_packets a:hover, .demo_packets a:visited{
	/*color:#116D9D;*/
	display:block;
	padding:0 0 0 17px;
	line-height:1;
	font-size:13px;
}
.dnl_packets{
	float:left;
	background:url(_img/icon_dnl.gif) no-repeat 0 12px;
	padding-top:12px;
}
.dnl_packets a, .dnl_packets a:hover, .dnl_packets a:visited{
	/*color:#116D9D;*/
	display:block;
	padding:0 0 0 16px;
	line-height:1.1;
	font-size:13px;
}
.icons_div{clear: both; position: relative;overflow:hidden;height:27px;}

.underst_amiro{
	color:#000;
	font-size:26px !important;
	margin:32px 0 10px 0;
}

.left_area_down{
	float:left;
	position:relative;
	margin-top:43px;
	width:177px;
}
.right_area_down{
	padding: 0 0 20px 0px;
	position:relative;
	float:left;
	display:block;
	margin-top:43px;
}
.right_area_down span{line-height:1.2;color:#000;}
.right_area_down_int{width:200px;}
.right_area_down_int h4, right_area_down_int a:hover, right_area_down_int a:visited{margin-bottom:5px;}
.advantages a,.advantages a:hover, .advantages a:visited{
	display:block;
	padding:0 0 0 0px;
	line-height:1.3;
	font-size:13px;
}
.n1{background:url(_mod_files/ce_images/icons/advantages01.png) no-repeat 0 5px;background-size: 35px 35px;padding:0px 0 0 45px;height:50px;margin-top:15px;}
.n1 a, .n1 a:hover, .n1 a:visited{padding-top:5px;}
.n2{background:url(_mod_files/ce_images/icons/advantages02.png) no-repeat 0 3px;background-size: 35px 35px;padding:0 0 0 45px;height:50px;}
.n3{background:url(_mod_files/ce_images/icons/advantages03.png) no-repeat 0 0;background-size: 35px 35px;padding:0 0 0 45px;height:50px;}
.n4{background:url(_mod_files/ce_images/icons/advantages05.png) no-repeat 0 0;background-size: 35px 35px;padding:0px 0 0 45px;height:50px;}
.n4 a, .n4 a:hover, .n4 a:visited{padding-top:6px;}
.n5{background:url(_mod_files/ce_images/icons/advantages04.png) no-repeat 0 4px;background-size: 35px 35px;padding:0 0 0 44px;height:50px;}

.portfolio{padding:29px 0 16px 0;}
.portfolio a,.portfolio a:hover, .portfolio a:visited{font-size:18px;color:#000;}

.left_area_middle{float:left;position:relative;}

.left_area_middle span{
	line-height:1.5;
	color:#000;
	font-size:13px;
}
.right_area_middle{
	padding:0 0 0 27px;
	position:relative;
	float:left;
}
.right_area_middle_int{width:180px;}
.left_area_middle h4,.right_area_middle_int h4{margin-bottom:18px;}

.list_links_doc{padding:12px 0 0 0;}
.list_links_doc a,.list_links_doc a:hover,.list_links_doc a:visited{line-height:2;font-size:13px;}
.small_news_rss{
	float:right;
	height:16px;
	margin:-31px 0px 0 0;
	width:16px;
}
.div_icons_subscr{text-align: left; margin-top: 34px;}

.subscr_mail{
	background:url(_img/subscr_bgr.gif) no-repeat 0 0;
	width:101px;
	height:22px;
	border:none;
	line-height:1;
}
.subscr_mail div{padding:3px 0 0 7px;line-height:1;}

.subscr_mail div input {
	border:0px;
	color:#999999;
	font-size:12px;
	padding:0;
	width:83px;
	line-height:1;
}
.br_products{font-size:0 !important;line-height:0 !important;clear:both;}

.SiteRental{
	background:#fff url(_img/site_rental_bgr.gif) repeat-x 0 0;
	border:1px dashed #AEAEAE;
	width:189px;
	margin:43px 0 28px 0;
	color:#080808;
	font-size:14px;
}
.SiteRentalInt{padding:6px 10px 9px 10px;}
.SiteRentalInt a{
	color:#080808;
	display:block;
	font-size:18px;
	padding:0 0 2px;
}
.SiteRentalPrice{
	color:#DB2C10;
	font-size:14px;
	padding:5px 0 0 0;
	line-height:1;
	display: inline;
}

#QuickRequestForm{/*width:33px;*/
	position:fixed;
	top:195px;
	background:url(_img/dotted_right_block.png) no-repeat left 0px;
	behavior:url(_img/iepngfix.htc);
	height:379px;
	padding-top:157px;
	visibility:hidden;z-index:4;
}
#QuickRequest{padding:0;
	/*float:right;*/
	width:33px;
	height:222px;
	background:url(_img/quick_request.png) no-repeat 0 0;
	behavior:url(_img/iepngfix.htc);
}
#QuickRequest img{cursor:pointer; padding: 50px 0 40px 7px;opacity:0.85}
#QuickRequest img:hover{opacity:1;/*filter: alpha(opacity=75)*/}
#QuickRequestFull{padding:0;
	background:#519FDE url(_img/QuickRequestFull_bgr.png) repeat-x 0 0;
	/*behavior:url(_img/iepngfix.htc);*/
	/*float:left;*/
	width:197px;
	height:222px;
	line-height:1;
}
.QuickRequestHide{text-align:right;}
.QuickRequestHide a, .QuickRequestHide a:hover, .QuickRequestHide a:visited{
	color:#fff;
	text-decoration:none;
	font-family:Trebuchet MS,Tahoma;
}
DIV.QuickRequestField{
	color:#fff;
	/*font-family:Trebuchet MS,Tahoma;*/
	padding:0px 0 0 8px;
	line-height:1.3!important;
	font-size:13px!important;
}
.Center{padding:6px 0 5px 8px;margin:0;}
.QuickRequestField input,.QuickRequestField textarea{
	height:20px;
	width:169px;
	border:1px solid #9A9A9A;
	background:#fff;
	color:#9A9A9A;
	font-size:12px;
	padding:0;
}
.QuickRequestField textarea{height:59px;}
.buttonOk{text-align:right;padding:5px 17px 0 0;}
.buttonOk input{
	background:url(_img/QuickRequestFull_button.png) no-repeat 0 0;
	behavior:url(_img/iepngfix.htc);
	border:none;
	font-family:Trebuchet MS,Tahoma;
	color:#fff;
	text-transform:uppercase;
	width:30px;
	height:24px;
	padding:0px;
	cursor:pointer;
        opacity:1;
/*filter: alpha(opacity=75);
filter:progid:DXImageTransform.Microsoft.Alpha(opacity=100);*/
}
.buttonOk input:hover {opacity:0.85;
/*filter:progid:DXImageTransform.Microsoft.Alpha(opacity=100);
filter: alpha(opacity=100)*/}

.sm_search_int{padding:0 0 35px 0px;    margin: -40px 0px 0px 0px;}


.sm_tree{line-height:1.3;}

.sm_tree .sm_level_1 a,.sm_tree .sm_level_1 a:hover,.sm_tree .sm_level_1 a:visited{
	color:#D92E09;
	font-size:14px;
	margin: 5px 0px;
	display:inline-block;
}

.sm_level_2{padding:2px 9px 3px 11px;}
.sm_level_3{padding:2px 9px 3px 22px;}

.sm_tree .sm_level_2 a,.sm_tree .sm_level_2 a:hover,.sm_tree .sm_level_2 a:visited{
	color:#126E9D;
	/*display:block;*/
	/*padding:2px 9px 3px 7px;*/
}
.sm_level_2 a:hover{/*background:#C8E4FF;*/}

.sm_tree .sm_level_3 a,.sm_tree .sm_level_3 a:hover,.sm_tree .sm_level_3 a:visited{
	color:#126E9D;
	/*padding:2px 9px 3px 7px;*/
font-size:12px;
}
.sm_level_3 a:hover{/*background:#C8E4FF;*/}

.sm_level_2 .sm_tree_item_selected,.sm_level_3 .sm_tree_item_selected{
	/*background:#C8E4FF;*/
	/*padding:2px 9px 3px 7px;*/
	/*color:#126E9D;
	font-weight:bold!;*/

}
.sm_level_1 .sm_tree_item_selected{
	/*font-weight:bold;*/
	color:#000;
	text-decoration:none;
	/*background:url(_img/red_arrow.gif) no-repeat 100% 6px;*/
	padding-right:10px;
	font-size:14px;
	margin: 5px 0px;
	display:inline-block;

}
#path_doc{
	padding:6px 0 29px 0;
	color:#000;
	font-size: 13px !important;
}
#path_doc a,#path_doc a:hover,#path_doc a:visited{
	font-size:11px;
	color:#000;
	/*text-transform:lowercase;*/
}

.pages_name{padding-bottom:20px;}

.points{background:url(_img/sqw.gif) no-repeat 0 7px;padding-left:9px;color:#1C1C1C;}
.bdr_plugin{border:1px dashed #777777;}

.four_icons {margin-top:-15px;}
.four_icons a {text-decoration:none; }

.news_headh4, .news_headh4 a, .news_headh4 a:hover, .news_headh4 a:visited{
  font-size: 18px !important;
    font-weight: normal;
    margin-bottom: 7px;
    margin-top: 0;
}
.news_headh4 span{padding-right:20px;}
.news_headh4 {margin-top:10px;}
.news_date {margin:-34px 0px 10px 0px; color:#666;}

.icon_map{
    margin-left: 900px;
    margin-top: 9px;
	position: absolute; 
	}

.icon_map a:before {
  text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    content: "\f0e8";
    font: 18px/1 FontAwesome;
}

.icon_map a:link, .icon_map a:hover, .icon_map a:visited {
	text-decoration: none;
  color: #FFF;
}

.icons_right {font-size:0px;}

.GreyBlock{
	background: url("_img/site_rental_bgr.gif") repeat-x scroll 0 0 #FFFFFF;
	border: 1px dashed #AEAEAE;
	color: #080808;
	font-size: 14px;  
	margin:10px 0;  
}
.GreyBlockInt{  padding: 10px;}
 
.GreyBlockInt a,.GreyBlockInt a:hover,.GreyBlockInt a:visited{
	/*color: #080808;
	display: block;
	font-size: 18px;
	padding: 0 0 2px;*/
}
.text_small, A.text_small:hover, A.text_small:visited  {
	font-size: 13px !important;
	line-height: 1.3 !important;
}

.text_small_11, A.text_small_11:hover, A.text_small_11:visited  {
	font-size: 11px !important;
	line-height: 1.2 !important;
}

.pages_print_version{padding:35px 0 25px 0;}
.pages_print_version table, .pages_print_version td{line-height:1 !important;}

input.btn_verylong{
	background: url("_img/btn_verylong.png") no-repeat 0 0;
	width:220px;
	height:33px;
	padding:0;
	border:none;
	color:#fff;
	cursor:pointer;behavior:url(_img/iepngfix.htc);
}
input.btn_long{
	background: url("_img/btn_long.png") no-repeat 0 0;
	width:173px;
	height:33px;
	padding:0;
	border:none;
	color:#fff;
	cursor:pointer;
        behavior:url(_img/iepngfix.htc);
}
input.btn_middle{
	background: url("_img/btn_middle.png") no-repeat 0 0;
	width:145px;
	height:33px;
	padding:0;
	border:none;
	color:#fff;
	cursor:pointer;
        behavior:url(_img/iepngfix.htc);
}
input.btn_short{
	background: #49addc;
	width:110px;
	height:33px;
	padding:0;
	border:none;
	color:#fff;
	cursor:pointer;
        behavior:url(_img/iepngfix.htc);
        margin-left: 7px;
}

input.btn_green_long{
	background: url("_img/btn_green_long.png") no-repeat 0 0;
	width:173px;
	height:33px;
	padding:0;
	border:none;
	color:#fff;
	cursor:pointer;
        behavior:url(_img/iepngfix.htc);
}
input.btn_green_middle{
	background: url("_img/btn_green_middle.png") no-repeat 0 0;
	width:145px;
	height:33px;
	padding:0;
	border:none;
	color:#fff;
	cursor:pointer;
        behavior:url(_img/iepngfix.htc);
}
input.btn_green_short{
	background: url("_img/btn_green_short.png") no-repeat 0 0;
	width:110px;
	height:33px;
	padding:0;
	border:none;
	color:#fff;
	cursor:pointer;
        behavior:url(_img/iepngfix.htc);
}

input.btn_verylong_green{
	background: #82c545;
	width:220px;
	height:33px;
	padding:0;
	border:none;
	color:#fff;
	cursor:pointer;behavior:url(_img/iepngfix.htc);
}

input.midfont{
	font-size:14px;
}

input.btn,input.btn_short,input.btn_middle,input.btn_long,input.btn_verylong,input.btn_enter, input.btn_verylong_green, input.btn_green{opacity:0.85}

input.btn:hover,input.btn_short:hover,input.btn_middle:hover,input.btn_long:hover,input.btn_verylong:hover,input.btn_enter:hover, input.btn_verylong_green:hover, input.btn_green:hover{opacity:1}

.forum_pager,.forum_pager td{font-size: 12px !important; }

.forum_pager .pager_pages {text-align:left; margin:10px;}

.pager_pages {
	margin:20px;
}

a.new_topic:link,a.new_topic:hover,a.new_topic:visited {
    display:inline-block;
    background: url("_img/btn_verylong.png") no-repeat 0 0;
    border: medium none;
    color: #FFFFFF;
    cursor: pointer;
    height: 33px;
    padding: 7px 0 0 0;
    width: 220px;
    font-size:12px;
    text-decoration:none;
    text-align:center;
    vertical-align: middle;behavior:url(_img/iepngfix.htc);
}

.flt_caption{width:130px;float:left;}

.box {
        width:177px;
	background-position:center center;
	background-repeat:no-repeat;
	display:inline-block;
	border: 1px solid #999;
	overflow:hidden;
        margin-right:20px;
	/*-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	behavior: url(_img/border-radius.htc); */
	opacity:1;/*filter:alpha(opacity=75);*/
	-moz-box-shadow: 0px 0px 10px 3px #ccc;
	-webkit-box-shadow: 0px 0px 10px 3px #ccc;
	box-shadow: 0px 0px 10px 3px #ccc;
}
.box:hover{opacity:0.85;/*filter:alpha(opacity=100);*/}
.box img,.box img:hover {/*filter:alpha(opacity=0);*/opacity:0 !important; width: 167px;margin-left:5px}
 
.listnews_announce{}
.listnews_announce img{display:inline-block;}
.listnews_announce b {font-weight:normal}
.listnews_announce p {margin: 0px}

.sm_search_wide{padding:21px 0 39px 12px;}
.wide_spec_h{padding:23px 0 0 0;}
.wide_h{padding-left:30px;width:970px;}

.videos th,.videos th a{
    background: #52B1E0;
    border-right: 1px solid #FFFFFF;
    color: #FFFFFF;
    font-size: 13px;
    padding: 4px 8px 2px 10px;
    text-align: left;
}
.videos td{padding:5px 0px;}

a.swaphead_video:link,a.swaphead_video:hover,a.swaphead_video:visited{
    border-bottom: 1px dashed;
    color: #177B2F;
    font-size: 14px;
    line-height: 20px;
    text-decoration: none;
}
.compare_red{height: 18px;
    margin-left: 705px;
    margin-top: -49px;
    position: absolute;
}
.compare_red a, .compare_red a:hover, .compare_red a:visited{
	background:url(_img/comp_red.png) no-repeat 0 2px;
	behavior:url(_img/iepngfix.htc);
	padding-left:20px;
	color:#1393D0;
	font-size:12px;
	padding-bottom:2px;
}

.forLI{position: absolute;left:0;top:0;}

/*Блок разворачивающегося контента*/
.normal, .opened{ color: #385B9C; cursor: pointer; }

.normal .a{display: inline}

.normal .b{display: none}

.opened .a{display: none}

.opened .b{display: inline}

.content{ height: 0px; overflow: hidden; color: #000000; }
/* --Блок разворачивающегося контента*/

#tree_sm .sm_level_1 a,#tree_sm .sm_level_1 a:hover,#tree_sm .sm_level_1 a:visited{color:#D92E09;}

#tree_sm .sm_level_2 a,#tree_sm .sm_level_2 a:hover,#tree_sm .sm_level_2 a:visited{color: #126E9D;font-size:12px;}

#tree_sm .sm_level_3{}
#tree_sm .sm_level_3 a,#tree_sm .sm_level_3 a:hover,#tree_sm .sm_level_3 a:visited{
	color: #126E9D;
	font-size:12px;
	background: url("_img/sqw.gif") no-repeat left center;
	padding-left:10px;
}

#tree_sm .sm_level_4,#tree_sm .sm_level_4 a,#tree_sm .sm_level_4 a:hover,#tree_sm .sm_level_4 a:visited{color: #126E9D;font-size:12px;}

.attention, .Attention{
background:url(_mod_files/ce_images/icons/lamp-ico-grad.png) no-repeat 0 0;
padding-left:55px;
margin-bottom:20px;
}


.novice{
background:url(_mod_files/ce_images/icons/sign-chainik.gif) no-repeat right top;
padding-right:70px;
margin-bottom:20px;
}

/* END CURRENT DESIGN STYLES START  */


/* TOP MENU */
.top_menu, .top_menu a, .top_menu a:hover, .top_menu a:visited {font-size:13px;color:#ffffff;text-decoration:none;}
/* END TOP MENU */

/* BOTTOM MENU */
.bottom_menu{margin-bottom:34px;}
.bottom_menu TD, .bottom_menu a, .bottom_menu a:hover, .bottom_menu a:visited{font-size:12px; line-height:1;}
/* END BOTTOM MENU */

/* MAIN MENU */
#m_menu{
  float: none;
  width: 920px;
  height: 37px;
  background: #49ADDC;
margin-left: 10px;
  padding: 0px;
}
.point{
	background: url(_img/arrow_down.gif) no-repeat right 20px;
	padding-right:10px;
}
.point_act{
	background: url(_img/black_arrow_d.gif) no-repeat right 20px;
	padding-right:10px;
}
/*.point_act a{color:#000 !important;}*/

a.have_sub:link, a.have_sub:hover, a.have_sub:visited{
	/*background: url(_img/black_arrow.gif) no-repeat right 22px !important;*/
	/*padding-right:10px !important;*/
}


a.y_sub:link,a.y_sub:hover,a.y_sub:visited{
cursor:default;
opacity:1;
/*background: url(_img/black_arrow.gif) no-repeat right 12px !important;*/
}

a.y_subs{background: url(_img/black_arrow.gif) no-repeat 222px 11px/* !important*/;}

a.y_subs:link, a.y_subs:hover, a.y_subs:visited{
cursor:default;
/*color:#000;
opacity:1;
filter: alpha(opacity=100);*/
text-decoration:none;
background: url(_img/black_arrow.gif) no-repeat 222px 11px !important;
}

a.y_subs:hover{
	background-color:#D8EDFE !important;
}

.main_menu { 
  background: none;
  float: right;
  margin-right: 50px;
}
.main_menu TD{line-height:1}

.main_menu A,.main_menu A:hover,.main_menu A:visited {
	color:#ffffff;
	font-weight:normal;
	text-decoration:none; 
	font-size:16px;
	/*background:url(_img/underl.gif) repeat-x left 28px;*/
	line-height:1.4;
	display:block;
	float:left;
	padding:8px 0 0 10px;
	width:100%;
}

.main_menu a.item_active,.main_menu a.item_active:link, .main_menu a.item_active:hover, .main_menu a.item_active:visited{
		color:#000;
		/*background:url(_img/underl_act.gif) repeat-x left 28px;*/
}
.submenu { 
		position:absolute; 
		left: 0; 
		top:0; 
		display:none; 
		z-index: 5;
		/*width:250px;*/
}


.pd_menu {
		background:#A0D5FF /*#abd9fe url(_img/sub_menu_bgr.gif) no-repeat right top*/;
		white-space: normal;
		padding:5px 10px 6px 10px;
		overflow:hidden;
		border:2px #fff solid;
}

#sub_menu_291344 .pd_menu {
		background: url(_img/partners_sub_bg.png) no-repeat left top;
		width: 194px;
		height: 196px;
		border:0px;
		white-space: normal;
		padding:65px 5px 10px 20px;
		overflow:hidden;
		margin-top:-59px;
		margin-left:-52px;
		position:relative;
}

#sub_menu_291344 DIV{
		/*float:none;*/
}

#sub_menu_291344 .pd_menu a, #sub_menu_291344 .pd_menu a:hover, #sub_menu_291344 .pd_menu a:visited{
	color:#fff;
	text-decoration:none; 
	display:inline;
	padding:2px 0px 1px 0px; 
	line-height:1;
	float:none;
		font-size:14px;
}

#sub_menu_291344 .submenu_item{
	padding:4px 0px 4px 0px; 
}

#sub_menu_291344 .submenu_item_lev2{
	padding-bottom:5px;
}
#sub_menu_291344 .submenu_item_lev2 DIV{
	padding: 2px 0px 0px 10px;
}

#sub_menu_291344 .submenu_item_lev2 a, #sub_menu_291344 .submenu_item_lev2 a:hover, #sub_menu_291344 .submenu_item_lev2 a:visited{
	font-size:12px;
}

#sub_menu_291344 .pd_menu a:hover, #sub_menu_291344 .pd_menu a.sub_active:hover, #sub_menu_291344 .pd_menu a.have_sub:hover {
	background: none;
}

#sub_menu_291344 .pd_menu a:hover{
	opacity:0.85;
	text-decoration:underline; 
}


.pd_menu td {color:#000;}
.pd_menu a,.pd_menu a:hover,.pd_menu a:visited {
		font-size:13px;
		font-weight: normal; 
		text-decoration:none; 
		color:#000; 
		display: block; 
		zoom: 1; 
		padding:3px 4px 2px 4px;
		white-space: normal;
		clear:both;
		width:96%;
}

.pd_menu a.sub_active, .pd_menu a.sub_active:hover, .pd_menu a.sub_active:visited{
		color:#066B90; 
		text-decoration:none;
}

.pd_menu a:hover, .pd_menu a.sub_active:hover, .pd_menu a.have_sub:hover {
	background-color:#D8EDFE;
	text-decoration:none;
	opacity:1;
	/*
    -moz-border-radius-bottom-right: 4px;
    -moz-border-radius-topleft: 4px;
    border-bottom-right-radius: 4px;
    border-top-left-radius: 4px;
	*/
}

.submenu_item { 
		width:230px; 
}

.submenu_item div { padding: 0px; }

div.submenu_item:hover {cursor: hand;}

.white_spl{
border-bottom:1px solid #E3F1FE;
height:5px;
clear:both;
margin:5px 4px;
}


/* END MAIN MENU */


/* ESHOP */
.price_details {color:#DE2418;font-size:12px;font-weight:bold}
.old_price_details {color:#e00000;text-decoration:line-through;font-size:12px;font-weight:bold}
.discount_details {color:#e00000;font-size:11px;font-weight:bold}

.price {color:#33626F;font-size:12px;font-weight:bold}
.old_price {color:#e00000;text-decoration:line-through;font-size:12px;font-weight:bold}
.discount {color:#e00000;font-size:11px;font-weight:bold}

.price_small {color:#ff5c08;font-size:12px;font-weight:bold}
.old_price_small {color:#e00000;text-decoration:line-through;font-size:11px;font-weight:bold}
.discount_small {color:#e00000;font-size:11px;font-weight:bold}

.eshop_image {
	margin-top:0px;
	margin-right:0px;
}
.eshop_image_click {margin-top:3px;margin-right:5px;border: 0px #33626F solid;}

.views_browse {border-top: 1px #e0e0e0 solid;border-right: 1px #e0e0e0 solid;}
.views_browse TD {border-bottom: 1px #e0e0e0 solid;border-left: 1px #e0e0e0 solid;}

.filter_box {}
.filter_box td {font-size:10px;}
.filter_box .txt {width:100px}
.search_box {}

.currency_block {font-size:9px; color:#000000; font-weight:bold;}

.row1 {}
.row2 {}
/* END ESHOP */

/* VOTES */
.vote_res_small_on {background-color:#33626f;border-top:1px #33626f solid;border-bottom:1px #33626f solid;}
.vote_res_on {background-color:#33626f;border-top:1px #33626f solid;border-bottom:1px #33626f solid;}
.vote_res_small_off {border-top:1px #33626f solid;border-bottom:1px #33626f solid;}
.vote_res_off {border-top:1px #33626f solid;border-bottom:1px #33626f solid;}
/* END VOTES */


/*
TABLE.tbl {border-left-width:2px;border-right-width:2px;border-bottom-width:1px}
TABLE.tbl TD {border-bottom-width:1px;font-size:11px;padding:5px 8px 5px 8px;border-right-width:1px}
TABLE.tbl TH {border-right-width:1px;font-size:11px;padding:5px 8px 5px 8px;border-top-width:1px;border-bottom-width:1px;}
TABLE.tbl TH.al {border:0px; font-size:11px;padding:5px 8px 5px 8px; text-align:right; font-weight:normal;}
*/

div.round1 {
	width: 100%;
	border: 1px solid #bebebe;
}
.round1_body {
padding: 0 11px 0 11px;
zoom: 1;
}

div.tl, div.tr, div.bl, div.br {
	height: 5px;
	position: relative;
}

div.tl {
	/*background: url(_img/body_1.gif) top left no-repeat;*/
	top: -1px;
	left: -1px;
	text-align: left;
}
div.tr {
	/*background: url(_img/body_2.gif) top right no-repeat;*/
	top: -1px;
	right: -1px;
	float: right;
}

div.bl {
	/*background: url(_img/body_4.gif) bottom left no-repeat;*/
	bottom: -2px;
	left: -1px;
	text-align: left;
}

div.br {
	/*background: url(_img/body_3.gif) bottom right no-repeat;*/
	bottom: -2px;
	right: -1px;
	float: right;
}

div.round1 div.round1_content {
    position: relative; width: auto; padding: 10px;
}

* HTML div.round1 div.round1_content {
    width: 100%;
}

._clear { clear: both; }

.ot5 {
	margin:0; padding: 0; 
	height: 5px;
	line-height: 5px;
}

* html .ot5 { margin-bottom: -2px; }


/* LEFT MENU ----------------*/
.sm_menu_left { margin: 0; padding: 0; }

/* left menu level 1 */
ul.sm_l0, ul.sm_l0 li {
	list-style-type: none;
	margin: 0; padding: 0;
}

ul.sm_l0 li { 
	margin-bottom: 20px;
	line-height: 20px;
	padding-left: 33px;
	background: url('_img/arrow.gif') 0px 0px no-repeat; 
}

ul.sm_l0 li a:visited, ul.sm_l0 li a:active, ul.sm_l0 li a:link, ul.sm_l0 li a:hover  {
	font-size:16px;
	color:#d51a13;
	font-family: Arial, "Geneva CY", Sans-Serif;
	font-weight: bold;
	text-decoration: none;
}
ul.sm_l0 li a:hover  { text-decoration: underline; }


/* left menu level 2 */
ul.sm_l1, ul.sm_l1 li {
	list-style-type: none;
	margin: 0; padding: 0;
}

ul.sm_l1 { position: relative; left: -33px; }

ul.sm_l1 li { 
	margin-top: 8px;
	line-height: 15px;
	padding-left: 26px; 
	background: url('_img/arrow_1.gif') 6px 0px no-repeat; 
}

ul.sm_l1 li a:visited, ul.sm_l1 li a:active, ul.sm_l1 li a:link, ul.sm_l1 li a:hover  {
	font-size:11px;
	color:#676767;
	font-family: Tahoma, Arial, "Geneva CY", Sans-Serif;
	font-weight: normal;
	text-decoration: none;
}

ul.sm_l1 li a:hover  { text-decoration: underline; }

/* left menu level 3 */
ul.sm_l2, ul.sm_l2 li {
	list-style-type: none;
	margin: 0; padding: 0;
}

ul.sm_l2 li { 
	margin-top: 4px;
	line-height: 13px;
	padding-left: 10px; 
	background: url('_img/arrow_2.gif') 2px 3px no-repeat; 
}

ul.sm_l2 li a:visited, ul.sm_l2 li a:active, ul.sm_l2 li a:link, ul.sm_l2 li a:hover  {
	font-size:9px;
	color:#676767;
	font-family: Tahoma, Arial, "Geneva CY", Sans-Serif;
	font-weight: normal;
	text-decoration: none;
}

ul.sm_l2 li a:hover  { text-decoration: underline; }

/*---------------- END LEFT MENU*/

/* LEFT MENU FOR INTERNAL PAGES */

.sm1_menu_left { margin: 0; padding: 0; }

/* left menu level 1 */
ul.sm1_l00, ul.sm1_l00 li {
	list-style-type: none;
	margin: 0; padding: 0;
}

ul.sm1_l00 li { 
	margin-bottom: 20px;
	line-height: 20px;
	/*padding-left: 33px;*/
	/*background: url('_img/arrow.gif') 0px 0px no-repeat; */
}

ul.sm1_l00 li a:visited, ul.sm1_l00 li a:active, ul.sm1_l00 li a:link, ul.sm1_l00 li a:hover  {
	font-size:16px;
	color:#d51a13;
	font-family: Arial, "Geneva CY", Sans-Serif;
	font-weight: bold;
	text-decoration: none;
}
ul.sm1_l00 li a:hover  { text-decoration: underline; }


/* left menu level 2 */
ul.sm1_l0, ul.sm1_l0 li {
	list-style-type: none;
	margin: 0; padding: 0;
}

ul.sm1_l0 { position: relative; /*left: -33px;*/ }

ul.sm1_l0 li { 
	margin-top: 8px;
	line-height: 15px;
	padding-left: 16px; 
	background: url('_img/sqw.gif') 6px 4px no-repeat; 
}

ul.sm1_l0 li a:visited, ul.sm1_l0 li a:active, ul.sm1_l0 li a:link, ul.sm1_l0 li a:hover  {
	font-size:12px;
	color:#1C1C1C;
	font-family: Tahoma, Arial, "Geneva CY", Sans-Serif;
	font-weight: normal;
	text-decoration: none;
}

ul.sm1_l0 li a:hover  { text-decoration: underline; }

/* left menu level 3 */
ul.sm1_l1, ul.sm1_l1 li {
	list-style-type: none;
	margin: 0; padding: 0;
}

ul.sm1_l1 li { 
	margin-top: 4px;
	line-height: 13px;
	padding-left: 10px; 
	background: url('_img/arrow_2.gif') 2px 3px no-repeat; 
}

ul.sm1_l1 li a:visited, ul.sm1_l1 li a:active, ul.sm1_l1 li a:link, ul.sm1_l1 li a:hover  {
	font-size:9px;
	color:#676767;
	font-family: Tahoma, Arial, "Geneva CY", Sans-Serif;
	font-weight: normal;
	text-decoration: none;
}

ul.sm1_l1 li a:hover  { text-decoration: underline; }

ul.sm1_l2, ul.sm1_l2 li  { display: none; }

/* END LEFT MENU FOR INTERNAL PAGES */

/* 4 HEAD ----------------------- */
#ai_home, #ai_letter, #ai_map { margin: 0; padding: 0; }
#ai_home, #ai_letter { margin-right: 20px; }
#ai_letter { margin-right: 20px; }

#camera_ih {
	padding-left: 37px;
	height: 32px; 
	background: url(_img/camera_3.gif) top left no-repeat;
	cursor: pointer;
}

#camera_ih:hover {
	background: url(_img/camera.gif) top left no-repeat;
}

#demo_ih {
	padding-left: 37px;
	height: 32px; 
	background: url(_img/demo_1.gif) top left no-repeat;
	cursor: pointer;
}

#demo_ih:hover {
	background: url(_img/demo.gif) top left no-repeat;
}

#site_ih {
	padding-left: 37px;
	height: 32px; 
	background: url(_img/site_1.gif) top left no-repeat;
	cursor: pointer;
}

#site_ih:hover {
	background: url(_img/site.gif) top left no-repeat;
}

#pack_ih {
	padding-left: 37px;
	height: 32px; 
	background: url(_img/pack_1.gif) top left no-repeat;
	cursor: pointer;
}

#pack_ih:hover {
	background: url(_img/pack.gif) top left no-repeat;
}

a.akcii:visited, a.akcii:active, a.akcii:link, a.akcii:hover  {
	font-weight: bold; font-size: 14px;
	text-transform: uppercase;
	color: #fff;
	text-decoration: none;
	
}

a.akcii img { margin-left: 5px; }

.contact {
	float: left;
	padding-right: 15px; padding-left: 15px;
	text-align: left;
	color: #fff;
}

.contact a:visited, .contact a:active, .contact a:link, .contact a:hover  {
	font-weight: bold; font-size: 12px;
	color: #fff;
	text-decoration: none;
}

.contact a:hover  {
	font-weight: bold; font-size: 12px;
	color: #fff;
	text-decoration: underline;
}

.contact a img { margin-left: 5px; }

a.a_icons:visited, a.a_icons:active, a.a_icons:link, a.a_icons:hover  {
	font-weight: bold; font-size: 11px;
	COLOR: #313131;
	text-decoration: none;
	
}

/*----------------пїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅ пїЅпїЅпїЅпїЅпїЅ*/

/*пїЅпїЅпїЅ пїЅпїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅпїЅпїЅпїЅпїЅ----------------*/

#partner {
	position: relative;
	margin: 3px 3px -2px 3px;
	cursor: pointer;
}

#partner_stat {
	margin-left: 5px;
	width: 122px;
}
#partner_stat a:visited, #partner_stat a:active, #partner_stat a:link, #partner_stat a:hover  {
	FONT-SIZE: 9px; COLOR: #676767; TEXT-DECORATION: none; 
}

#partner_part1 { position: absolute; top: 0px; right: 0px;}

#partner_podrobnee { position: relative; margin-top: 10px; height: 28px; background-color: #f8f6f2; line-height: 28px; padding-left: 2px; }

#partner_man { position: absolute; bottom: 1px; right: 9px; }

.dec { margin-left: 3px; COLOR: #f2f2f2; }


.blueblock_round {
	width: 190px;
	position: relative;
	height: 7px;
	background: url('_img/blue_block_head.gif') top left no-repeat;
}

* html .blueblock_round {
	width: 188px;
}

.blueblock_round div {
	position: absolute;
	right: 0px;
	width: 4px; height: 7px;
	background: url('_img/blue_block_head.gif') top right no-repeat;
}

.blueblock_head {
	width: 188px;
	background-color: #2db3e4;
	text-align: center;
	padding-bottom: 4px;
	border-left: solid #8cd6f0 1px;
	border-right: solid #8cd6f0 1px;
}

#templ, #news_spec { width: 190px; }

/*round2*/
div.round2 {
	width: 188px;
	border: 1px solid #bebebe;
	border-top: 0px;
}

* html div.round2 {
	width: 188px;
}

div.round2 div.round2_content {
	position: relative;
	top: 2px;
	padding-top: 2px;
	border-top: solid #e9e9e9 1px;
	text-align: center;
	margin-left: 3px; margin-right: 3px;
}

div.round2 div.round2_content2, div.round2 div.round2_content3 {
	position: relative;
	top: 2px;
	padding-top: 2px;
	border-top: solid #e9e9e9 1px;
	/*text-align: center;*/
	margin-left: 3px; margin-right: 3px;
}

div.round2_content4 {
	position: relative;
	top: 2px;
        border-top: solid #e9e9e9 1px;
	/*text-align: center;*/
	margin-left: 3px; margin-right: 3px;
}

div.round2 div.round2_content div, div.round2 div.round2_content2 div, div.round2 div.round2_content3 div  {
	background-color: #ffffff;
	padding-bottom: 5px;
	padding-top: 5px;
}

div.round2 div.round2_content2 div  {
	padding-top: 13px;
	padding-left: 8px; 
	padding-right: 8px;
	padding-bottom: 13px;
}

div.round2 div.round2_content3 div {}

.news_small_row {line-height:1.2;
	/*margin-left: 8px; 
	margin-right: 8px;*/
}


/*--*/


/* STICKERS */

.stickers { }
.stickers td { vertical-align: top; text-align: left; }
.stickers .small_row { border: 0px; }
.stickers .small_row_dashed { border: dashed #ccc 1px; }

.stickers .small_header { padding-bottom:10px;}
.stickers .small_header_opinion { height: 16px; color:#BE0400; padding-top:10px; padding-bottom:15px;}
.stickers .small_header a { text-decoration: none; border-bottom: dashed 1px;}

.stickers .small_announce { font-size:10px; //padding:0px; margin:0px;}
.stickers .small_announce_opinion { }
.st_an { font-size:11px; //padding:0px; margin:0px;}
.header_link { font-size:11px;}

.stickers .small_Hsplitter img { width: 20px; height: 1px; }
.stickers .small_Vsplitter_opinion img { width: 1px; height: 20px; }
.stickers .small_Vsplitter img { width: 1px; height: 2px; }

/* END STICKERS */

/* STICKERS IN MAIN */
.st_stickers .st_small_header a, .st_stickers .st_small_header a:hover, .st_stickers .st_small_header a:visited{
	color:#D72D14;
	font-size:18px;
	line-height:1;

}
.st_stickers .st_small_header a { text-decoration: none; border-bottom: dashed 1px;}
.st_stickers .st_small_header { padding-bottom:16px;padding-top:3px;}
.st_stickers {    margin: 19px 0 10px;    vertical-align: top;}
.st_stickers .small_announce { font-size:12px;color:#000;line-height:1.3;/*margin-top:-8px;*/ }
.st_header_link { font-size:12px;display:block;padding-bottom:15px;}

/* END STICKERS IN MAIN*/

.forum_urgent_item_row {
  background: #eeeeee;
}

/* For the sliders */

div.blockDetails{
    height: 1px;
    overflow: hidden;
    background: #eee;
}

.brief_form {}
.brief_form .txt { width: 250px; }
#domain, #domain2 { width: 135px;}
.brief_form .ta { width: 250px; height: 50px; }
.brief_form .cb {}
.brief_form .stxt { width: 100px !important; }
.brief_form .txt, .brief_form ta, .brief_form select {/*font-size:14px;*/color:#747474;border:1px solid #9c9c9c;height:20px;}
.brief_form label {font-size:12px;}
.brief_form .caption{}

.brief_form .small_note {font-size:10px;color:#888}
.brief_form .small_note a,
.brief_form .small_note a:visited,
.brief_form .small_note a:hover {font-size:10px;}

.tbl_brief .field{width:250px;}	
.tbl_brief {padding-left:20px;margin-left:0px;/*border-left:10px solid #d0ffd0;*/background:url("_img/dotted_tbl.gif") repeat-y scroll 0 0;}
.tbl_brief td  {color:#000;vertical-align: top; padding: 0px 5px 6px 12px;/*font-size:14px;*/}

.portfolio_img {
	border: 1px #aaa solid;
}

.portfolio_preview {
   position: relative;
   /*border: solid red 1px;*/
   height: 330px;
   padding: 0px 20px;
}

.portfolio_preview td {
   padding: 3px;
}

.portfolio_preview_inner {
   position: relative;
   /*border: solid red 1px;*/
   height: 330px;
   overflow: hidden;
   /*border-left: solid #fff 10px;
   border-right: solid #fff 10px;*/
}

.portfolio_preview_inner2 {
   position: absolute;
   background: #fff;
}

#tl3_left, #tl3_right {
   display: block;
   position: absolute;
   width: 20px; height: 330px;
   overflow: hidden;
   text-decoration: none !important;
}

#tl3_left {
   top: 0px; left: 0px;
   background: #2DB3E4 url(_img/porft_arr_left.png) 2px 50% no-repeat;
}

#tl3_right {
   top: 0px; right: 0px;
   background: #2DB3E4 url(_img/porft_arr_right.png) 4px 50% no-repeat;
}

.portfolio_lenta {
	/*border-top: solid red 1px;
	border-right: solid red 1px;*/
}

.portfolio_lenta td {
	padding: 0px 10px;
	/*border-bottom: solid red 1px;
	border-left: solid red 1px;*/
}

/* MODULES PHOTOALBUM */

.photoalbum { width: 100%; }

.photoalbum_path { margin-bottom: 10px; font-size: 12px; }
.photoalbum_path A { font-size: 12px !important; }

.photoalbum .cat_body { margin: 0px 0px 10px 0px; }

/* categories */

.photoalbum .urgent_cat_list { margin-bottom: 30px; }
.photoalbum .urgent_cat_list td { background: #eee; }
.photoalbum .cat_list { width: 100%; }

.photoalbum .urgent_cat_row { padding: 10px 15px; }
.photoalbum .cat_row { width: 25%; padding: 10px 15px;}

.photoalbum .cat_row a.name:link, .photoalbum .cat_row a.name:visited,
.photoalbum .cat_row a.name:active, .photoalbum .cat_row a.name:hover,
.photoalbum .urgent_cat_row a.name:link, .photoalbum .urgent_cat_row a.name:visited,
.photoalbum .urgent_cat_row a.name:active, .photoalbum .urgent_cat_row a.name:hover {
	display: block;
	font-size: 18px;
	margin-bottom: 10px;
}

.photoalbum .cat_row a.small_picture_wrapper, .photoalbum .urgent_cat_row a.small_picture_wrapper {
	border: solid #fff 1px;
	display: block;
	margin: 2px 0px 2px 0px;
}

.photoalbum .cat_row .announce, .photoalbum .urgent_cat_row  .announce { padding: 0px 0px 10px 0px; }

.photoalbum .cat_row .rating, .photoalbum .urgent_cat_row .rating {
	clear: both; margin: 0px 0px 10px 0px;
}

.photoalbum .cat_row .num_photos, .photoalbum .urgent_cat_row .num_photos {
	clear: both;
	font-size: 11px;
	font-style: italic;
}

/* items */

.photoalbum .urgent_item_list { margin-bottom: 30px; }
.photoalbum .item_list, .photoalbum .browse_item_list {  }

.photoalbum .browse_item_list { margin: 30px auto 0px; }
.photoalbum .browse_item_list .active { background: #eee; }

.photoalbum .urgent_item_row { vertical-align: top; background: #eee; padding: 10px 15px; }
.photoalbum .item_row { width: 25%; vertical-align: top;  padding: 10px 15px; }
.photoalbum .browse_item_row { vertical-align: top; width: 30%; padding: 10px 15px; }

.photoalbum .item_row a.header:link, .photoalbum .item_row a.header:visited,
.photoalbum .item_row a.header:active, .photoalbum .item_row a.header:hover,
.photoalbum .browse_item_row a.header:link, .photoalbum .browse_item_row a.header:visited,
.photoalbum .browse_item_row a.header:active, .photoalbum .browse_item_row a.header:hover,
.photoalbum .urgent_item_row a.header:link, .photoalbum .urgent_item_row a.header:visited,
.photoalbum .urgent_item_row a.header:active, .photoalbum .urgent_item_row a.header:hover  {
	display: block;
	font-size: 18px;
	margin-bottom: 10px;
}

.photoalbum .item_row a.small_picture_wrapper, .photoalbum .urgent_item_row a.small_picture_wrapper,
.photoalbum .browse_item_row a.small_picture_wrapper {
	display: block !important;
	margin: 2px 0px 2px 0px  !important;;
}

.photoalbum .urgent_item_row .announce, .photoalbum .item_row .announce,
.photoalbum .browse_item_row .announce { margin: 0px 0px 10px 0px; }

.photoalbum .urgent_item_row .forum, .photoalbum .item_row .forum,
.photoalbum .browse_item_row .forum {	padding: 10px 0px 0px 0px; }

.photoalbum .item_hSplitter img { width: 10px; }
.photoalbum .item_vSplitter img { height: 20px; }

/* item details */

.photoalbum .sibl_pages { text-align: right; }

.photo_info {
	position: relative;
	margin: 0 auto;
	margin-top: 25px;
}

.photoalbum .item_details .header { font-size: 18px; padding: 0px 0px 10px 0px; }

.photoalbum .item_details a.enlarge {
	display: block;
	text-align: center;
	margin: 5px 0px 0px 0px;
}

.photoalbum .body { margin: 20px 0px; }

.photoalbum .item_details .forum { padding: 10px 0px 0px 0px; }
.photoalbum .item_details .rating {  }


/* small */

.photoalbum_small_list {  }
.photoalbum_small_list .small_row { }

.photoalbum_small_list a.header:link, .photoalbum_small_list a.header:visited,
.photoalbum_small_list a.header:active, .photoalbum_small_list a.header:hover {
	display: block;
	font-size: 18px;
	margin-bottom: 10px;
}

.photoalbum_small_list a.small_picture_wrapper { display: block; }

.photoalbum_small_list  .announce { margin: 10px 0px }
.photoalbum_small_list  .rating {  }
.photoalbum_small_list  .forum { margin: 2px 0px 2px 0px; }

.photoalbum_small_list .small_Vsplitter img { height: 20px; }
.photoalbum_small_list .small_Hsplitter img { width: 10px; }

/* MODULES END PHOTOALBUM */

/* PORTFOLIO-ANOUNCE HOME */

.po_list_small_special_row { }
.po_list_small_special_row a.name:link, .po_list_small_special_row a.name:active,
.po_list_small_special_row a.name:visited, .po_list_small_special_row a.name:hover { 
     display: block; 
     margin-bottom: 4px;
     font-size: 11px; 
}
.po_list_small_special_row .small_picture_wrapper { padding-right: 2px;padding-left: 2px; }
.po_list_small_special_row .announce {  }
.po_list_small_special_row .spec_announce { margin-top: 10px; font-size: 10px; }
.po_list_small_special_row .custom_fiels { margin-top: 10px; }
.po_list_small_special_row .rating { font-size: 10px; margin-top: 15px; }

/* PORTFOLIO-ANOUNCE END HOME */

/* SYSTEM */
table#sign{width:100%;}
table#sign td{text-align:right;font-family:Verdana; font-size:10px; color:#ffffff;background-color:#C80000;padding-bottom:3px;padding-right:2px;display:none;}
table#sign A, table#sign A:hover, table#sign A:visited {color:#ffffff;text-decoration:underline; font-size:10px;}

#stat {display:none;}
#sp {display:none;}

/*AlertWindow*/

.AlertWindow, #status_message {
    position:fixed;
    top:200px;
    left:200px;
    padding:20px;
    font-size:14px;
    display:'inline-block';
    visibility:hidden;
    border:2px #fff solid;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    border-radius: 10px;
    -moz-box-shadow: 0px 0px 10px 3px #ccc;
    -webkit-box-shadow: 0px 0px 10px 3px #ccc;
    box-shadow: 0px 0px 10px 3px #ccc;
    z-index:10000;
}

div.AlertWindow {overflow: hidden; cursor: move;}
div.AlertWindow  .popupClose{ position: absolute; display: block; right: 5px; top: 3px; width: 21px; height: 21px; background: url("/_img/close_alert.gif"); cursor: pointer; }
div.AlertWindow .popupHeader{ display: block; width:100%; height: 0px; }
div.AlertWindow .popupHeaderText {display: none}
div.AlertWindow .popupContent {padding: 0px;}



.status_error {background:#ffef8f; color: #F00000;} 
.status_info {background:#ffef8f; color: #009AF0;} 
.status_normal {background:#b0efff;} 
.status_notice, .AlertWindow.error {background:#ffef8f;} 

.local_status_error  {color:#800000;}
.local_status_notice  {color:#008000;}
.local_status_normal {color:#008000;}

/* END SYSTEM */


/* Text editor styles { */
div.amiroTEdDiv{
}
div.amiroTEdDivEditor{
    display: block;
}
div.amiroTEdDivPreview{
    border: 1px solid black;
    display: none;
    overflow: auto;
    padding: 3px;
}
img.amiroTEdCtrl{
    border: 0px;
    cursor: pointer;
}
select.amiroTEdCtrl, input.amiroTEdCtrlButton{
    margin-bottom: 4px;
    width: auto;
}
img.amiroTEdSep{
    border: 0px;
}
img.amiroTEdSmile{
    border: 0px;
    cursor: pointer;
}
select.amiroTEdCtrl, input.amiroTEdCtrlButton, textarea.amiroTEdCtrl{
    font-family: Arial;
    font-size: 10px;
    font-weight: normal;
    font-variant: normal;
    text-decoration: none;
    color: #000000;
}
div.amiroTEdDivResize{
    height: 4px;
    margin-top: 1px;
    background-color: #d4d0c8;
    background-repeat: no-repeat;
    background-position: 50% 0%;
    border-bottom: 1px solid #808080;
    margin-bottom: 1px;
    cursor: s-resize;
}
span.amiroTEdMore{
    cursor: pointer;
    height: 25px;
    font-family: Arial;
    font-size: 16px;
    font-weight: bold;
    font-variant: normal;
    text-decoration: underline;
    color: #000000;
}
BLOCKQUOTE.edQuote {
    border: 1px dotted gray;
    background: url("/_mod_files/ce_images/blog/openquote1.gif") no-repeat #f9f9f9;
    padding: 5px 5px 5px 30px;
    overflow: auto;
margin-top: 15px;
}

PRE.edCode, PRE.EdCode{
    margin:5px 0px 5px 16px;
    /*width: 660px;*/
width: 600px;
    overflow: auto;
    border: 1px dotted gray;
    padding: 5px;
    max-height: 500px;

}

/* To change control width uncomment and change next values */
div.amiroTEdDivPreview, div.amiroTEdDiv, textarea.amiroTEdCtrl, div.amiroTEdDivResize{
    /*width: 600px !important;*/
}
textarea.amiroTEdCtrl{
    /*height: 250px !important;*/
    font-size: 14px;
}
/* } Text editor styles */

.blog IMG {border:#ff0000 0px solid;}

textarea.inp-h{
    display: none;
}
.quest a,.quest a:hover,.quest a:visited{
	text-decoration:none !important;
	border-bottom:1px dotted #385B9C;
	color:#385B9C;
}
.quest_h4{
	color:#000000;
	font-size:13px;
	font-weight:bold;
	margin-top:5px;
}


/* Suggestions control */

div.suggestionDiv{ position: absolute; padding-top: 2px; border: 1px solid #848484; background: #fff; overflow: hidden; display: none; z-index: 100; }
div.suggestionRow, div.suggestionRowSelected{ padding: 1px 3px 0px 3px; cursor: default; white-space: nowrap; font-family: Arial; font-size: 11px; cursor: pointer; }
div.suggestionRow a, div.suggestionRowSelected a{ padding-left: 6px; font-size: 11px !important; }
div.suggestionRowSelected{ background: #5fabfe; color: #fff; }
div.suggestionRowSelected a{ color: #fff !important; }
div.suggestionRowExact{ font-weight: bold; }
div.suggestionRowAllResults{ margin: 6px 0px 0px 0px; }
div.suggestionResult, div.suggestionResultFirst{ margin: 8px 3px 3px 3px; padding-top: 6px; border-top: 1px solid #848484; text-align: left; font-weight: bold; font-size: 11px; }
div.suggestionResultFirst{ margin-top: 0px; padding-top: 1px; border-top: 0px; }
div.suggestionRow a.suggestionAllResults, div.suggestionRowSelected a.suggestionAllResults{ padding-left: 0px; font-weight: bold; font-size: 11px; }

div.suggestionMinWidth{ line-height: 0px; height: 0px; }

/* MediaBox control */

.MediaBox_shadow{ position: fixed; display: none; top: 0px; left: 0px; width: 100%; height: 100%; background: #000; z-index: 100000; }
* html .MediaBox_shadow{ position: absolute; filter: alpha(opacity=30)}
.MediaBox{ position: fixed;  display: none; background: #fff; z-index: 100001; }
* html .MediaBox{ position: absolute; }
.MediaBox_shadowL, .MediaBox_shadowR, .MediaBox_shadowT, .MediaBox_shadowB, .MediaBox_shadowLT, .MediaBox_shadowRT, .MediaBox_shadowLB, .MediaBox_shadowRB{ position: absolute; overflow: hidden; }
.MediaBox_shadowL, .MediaBox_shadowR{ width: 15px; height: 100%; background: url(/_img/ami_jsapi/shade-v.png) repeat-y; }
.MediaBox_shadowL{ left: -15px; top: 0px; }
.MediaBox_shadowR{ right: -15px; top: 0px; background-position: -15px 0px; }
.MediaBox_shadowT, .MediaBox_shadowB{ width: 100%; height: 15px; background: url(/_img/ami_jsapi/shade-h.png) repeat-x; }
.MediaBox_shadowT{ left: 0px; top: -15px; }
.MediaBox_shadowB{ left: 0px; bottom: -15px; background-position: 0px -15px; }
.MediaBox_shadowLT, .MediaBox_shadowRT, .MediaBox_shadowLB, .MediaBox_shadowRB{ width: 15px; height: 15px; background: url(/_img/ami_jsapi/shade-c.png) no-repeat; }
.MediaBox_shadowLT{ left: -15px; top: -15px; }
.MediaBox_shadowRT{ right: -15px; top: -15px; background-position: -15px 0px; }
.MediaBox_shadowLB{ left: -15px; bottom: -15px; background-position: 0px -15px; }
.MediaBox_shadowRB{ right: -15px; bottom: -15px; background-position: -15px -15px; }
.MediaBox_speckLT{ position: absolute; width: 0px; height: 0px; }
.MediaBox_speckRB{ position: absolute; width: 0px; height: 0px; }
.MediaBox_close{ position: absolute; width: 39px; height: 39px; right: -20px; top: -20px; background: url(/_img/ami_jsapi/close.png); cursor: pointer; }
.MediaBox_loader{ position: absolute; width: 32px; height: 32px; left: 50%; top: 50%; margin: -16px 0px 0px -16px; background: url(/_img/ami_jsapi/loader.gif); }
.MediaBox_container{ margin: 10px 10px; }
.MediaBox_image_resizeable_plus{ cursor: url(/_img/ami_jsapi/pointer_plus.png), pointer; }
.MediaBox_image_resizeable_minus{ cursor: url(/_img/ami_jsapi/pointer_minus.png), pointer; }
/* Black version */
.MediaBoxBlack{ background: #000; }
.MediaBoxBlack .MediaBox_shadowL, .MediaBoxBlack .MediaBox_shadowR{ background-image: url(/_img/ami_jsapi/glass-frame-v.png); }
.MediaBoxBlack .MediaBox_shadowT, .MediaBoxBlack .MediaBox_shadowB{ background-image: url(/_img/ami_jsapi/glass-frame-h.png); }
.MediaBoxBlack .MediaBox_shadowLT, .MediaBoxBlack .MediaBox_shadowRT, .MediaBoxBlack .MediaBox_shadowLB, .MediaBoxBlack .MediaBox_shadowRB{ background-image: url(/_img/ami_jsapi/glass-frame-c.png); }
.MediaBoxBlack .MediaBox_speckLT{ background-image: url(/_img/ami_jsapi/glass-frame-c2lt.png); }
.MediaBoxBlack .MediaBox_speckRB{ background-image: url(/_img/ami_jsapi/glass-frame-c2rb.png); }
.MediaBoxBlack .MediaBox_close{ right: -25px; top: -25px; background-image: url(/_img/ami_jsapi/glass-frame-close.png); }
.MediaBoxBlack .MediaBox_loader{ background-image: url(/_img/ami_jsapi/loader-black.gif); }
.MediaBoxBlack .MediaBox_container{ margin: 0px 0px; }
.MediaBoxBlack .MediaBox_counter {color:#fff;}
.MediaBoxBlack .MediaBox_header {color:#fff;}
.MediaBoxBlack .MediaBox_description {color:#fff;}

.annon_files { padding-left:30px!important}
.annon_files, .annon_files p {font-size: 12px!important}



/* OLD STYLES */
/*
.annon_files, .annon_files p {color:#ffffff; font-style: italic;}
.annon_files a,.annon_files a:hover,.annon_files a:visited { font-weight:bold}

*/
A.dec{color:#BE0400;font-family:Arial; font-size:12px;text-decoration:none;}
A.dec:hover{color:#BE0400;text-decoration:underline;}
A.dec:vlink;A.dec:link{ color:#BE0400; }
A.dec:visited{color:#BE0400;}

.btn_free,.btn_free:visited{color:#FFFFFF;text-decoration:none;}
.btn_free:hover{color:#ffe243;text-decoration:none;}

#list ul{
margin:0;
padding:0 0 0 10px;
list-style-type:none;
text-align:left;
}

#list ul li {
font-family:Arial, Helvetica, sans-serif;
font-size:11px;
color:#BE0400;
padding:0 0 0 10px;
}
#list ul li a{
font-family:Arial, Helvetica, sans-serif;
font-size:11px;
color:#BE0400;
}

.tr_hover {}
.tr_hover TD {cursor:default;}
.tr_hover .td_hover_img {opacity:0.5;}
.tr_hover:hover .td_hover_img {opacity:1;}

a#order:link, a#order:hover, a#order:visited{
display:block;
font-size:14px;
color:#fff;
padding:6px 0px 0px 30px;
float:left;
text-decoration:none;
}
.separ {margin-top: 20px; margin-bottom: 20px;}

.img_magnify { /*cursor: url(/_img/ami_jsapi/pointer_plus.png), pointer;*/ }

.head1, .head1 a, .head1 a:visited {color:#FF5300;font-size:17px;font-weight:bold; margin-bottom:0px; margin-top:5px;}
.head2, .head2 a, .head2 a:visited{color:#da251d;font-size:14px;font-weight:bold; margin-bottom:5px; margin-top:5px;}
.head2 a:vlink, .head2 a:link, .head2 a:hover{color:#da251d;font-size:14px;font-weight:bold; margin-bottom:5px; margin-top:5px;}
h1.micro, h1.micro a, h1.micro a:visited {color:#FF5300;font-size:14px;font-weight:bold; margin-bottom:5px; margin-top:5px;}
h2.micro, h2.micro a, h2.micro a:visited {color:#da251d;font-size:13px;font-weight:bold; margin-bottom:5px; margin-top:5px;}


#portfolio_tree a:visited {color:#FF5300}



/* SITE MAP, SECTION MAP */
#tree { font-size:10px; }
#tree IMG { BORDER: 0px; }
#tree DIV {font-size:10px;}
#tree DIV A{font-size:10px;}
#tree DIV A:hover {font-size:10px;}
.tree_item_selected {color:#BB0400 }

#tree DIV.sm_level_0 {font-size:14px; font-weight:bold;}
#tree DIV.sm_level_0 A {color:#3B8FC7; font-size:14px; font-weight:bold;text-decoration:none;}
#tree DIV.sm_level_0 A:hover{font-size:14px; font-weight:bold;text-decoration:underline;}
#tree DIV.sm_level_0 A:visited {font-size:14px; font-weight:bold;}
#tree DIV.sm_level_1{font-size:12px; font-weight:bold;margin-bottom:}
#tree DIV.sm_level_1 A {color:#3B8FC7;font-size:12px; font-weight:bold;text-decoration:none;}
#tree DIV.sm_level_1 A:hover {font-size:12px; font-weight:bold;text-decoration:underline;}
#tree DIV.sm_level_1 A:visited {font-size:12px; font-weight:bold;}
#tree DIV.sm_level_2 {font-size:11px; font-weight:normal;}
#tree DIV.sm_level_2 A {color:#3B8FC7; font-size:11px; font-weight:normal;text-decoration:none;}
#tree DIV.sm_level_2 A:hover {font-size:11px; font-weight:normal;text-decoration:underline;}
#tree DIV.sm_level_2 A:visited {font-size:11px; font-weight:normal;}
#tree DIV.sm_level_3 {font-size:10px; font-weight:normal;}
#tree DIV.sm_level_3 A {color:#3B8FC7; font-size:10px; font-weight:normal;text-decoration:none;}
#tree DIV.sm_level_3 A:hover {font-size:10px; font-weight:normal;text-decoration:underline;}
#tree DIV.sm_level_3 A:visited {font-size:10px; font-weight:normal;}

#tree td.sm_level_0 {font-size:14px; font-weight:bold;}
#tree td.sm_level_0 A {color:#3B8FC7; font-size:14px; font-weight:bold;text-decoration:none;}
#tree td.sm_level_0 A:hover{font-size:14px; font-weight:bold;text-decoration:underline;}
#tree td.sm_level_0 A:visited {font-size:14px; font-weight:bold;}
#tree td.sm_level_1{font-size:12px; font-weight:bold;}
#tree td.sm_level_1 A {color:#3B8FC7;font-size:12px; font-weight:bold;text-decoration:none;}
#tree td.sm_level_1 A:hover {font-size:12px; font-weight:bold;text-decoration:underline;}
#tree td.sm_level_1 A:visited {font-size:12px; font-weight:bold;}
#tree td.sm_level_2 {font-size:11px; font-weight:normal;}
#tree td.sm_level_2 A {color:#3B8FC7; font-size:11px; font-weight:normal;text-decoration:none;}
#tree td.sm_level_2 A:hover {font-size:11px; font-weight:normal;text-decoration:underline;}
#tree td.sm_level_2 A:visited {font-size:11px; font-weight:normal;}
#tree td.sm_level_3 {font-size:10px; font-weight:normal;}
#tree td.sm_level_3 A {color:#3B8FC7; font-size:10px; font-weight:normal;text-decoration:none;}
#tree td.sm_level_3 A:hover {font-size:10px; font-weight:normal;text-decoration:underline;}
#tree td.sm_level_3 A:visited {font-size:10px; font-weight:normal;}
/* END SITE MAP, SECTION MAP */

.zam, .zam li{margin-top:0px;margin-bottom:0px; padding-top:0px; padding-bottom:0px;}


/**/
.autowords{border-bottom:1px dotted #3F3F3F;cursor:pointer;font-size:12px;}

.dottext{ color: #385B9C;border-bottom:1px dashed}

.dashed_btn{ color: #385B9C;border-bottom:1px dashed;cursor:pointer;}
.dashed_btn, .dashed_btn:hover, .dashed_btn:visited  {text-decoration:none}

.question{    
    font-weight: bold;
    margin-bottom: 10px;
    margin-top: 5px;
color:#385B9C;
}
.question a,.question a:hover, .question a:visited{    
text-decoration:none;
border-bottom:1px dotted;

}
.three_ls{
padding:0 0 0 4px;
}
.three_ls img{margin:2px 10px 0 10px;float:left;}

.three_ls a, .three_ls a:hover, .three_ls a:visited{
color:#000;
font-size:12px;
display:block;
/*padding-top:5px;*/
float:left;
}
.white_spl_sm{
border-bottom:1px solid #e0e0e0;
height:5px;
clear:both;
margin:5px 0;}




/* SH ADD */

/* Blue table with the editorial */

.btab_top {
border-top: 5px solid rgb(27, 157, 232);
}

.btab_cont {
background-image: url("/_mod_files/ce_images/first-site-bgrd.gif"); 
border-bottom: 1px solid rgb(235, 235, 235); 
border-left: 1px solid rgb(235, 235, 235); 
padding-bottom: 10px; 
padding-left: 5px; 
padding-right: 5px; 
background-repeat: repeat-x; 
border-right: 1px solid rgb(235, 235, 235);
}

.btab_head {
z-index: 0; 
background-position: 0% 0%; 
color: rgb(27, 157, 232); 
font-size: 17px;
}

.btab_mhead {
z-index: 0; 
background-position: 0% 0%; 
color: rgb(27, 157, 232); 
font-size: 13px;
}

.btab_price {
text-align: right; 
color: rgb(27, 157, 232);
}

.btab_big_price, .btab_big_price a, .btab_big_price a:hover, .btab_big_price a:visited {
font-size:18px;
text-align: right;
display: inline-block;
}

.btab_big_name, .btab_big_name a, .btab_big_name a:visited, .btab_big_name a:hover{
font-size:18px;
}

.btab_sale {
z-index: 0; 
background-position: 0% 0%; 
font-size: 24px;
}

.btab_hlink { 
font-family: tahoma; 
color: #D72D14;; 
font-size: 22px; 
text-decoration: underline;
}

.dtab_cont {
border: rgb(35,172,255) 1px dotted; 
}

.dtab_head {
background-image: url(/_mod_files/ce_images/bgrd-tablehead.gif); 
z-index: 0; 
text-align: center; 
line-height: 1.0!important; 
background-repeat: repeat-x; 
background-position: 0% 0%; 
color: #fff; 
font-size: 14px; 
font-weight: normal;
border-bottom:0px;
}




/*kb*/

.amiro_partner_status_img{
	float: right;
	box-shadow: 0px 0px 10px 1px #ccc;
	border-radius: 5px;

}

.contentIsExtCustom49 {
    line-height: 1.9 !important;
    padding-top: 15px;
    text-align: center;
    width:680px; 
}
.contentIsExtCustom49 label{cursor:pointer;}
.contentIsExtCustom49 a, .contentIsExtCustom49 a:hover, .contentIsExtCustom49 a:visited {
    padding: 5px;
}
.contentIsExtCustom49 a:hover{background:#e1e1e1; text-decoration:none;}

#linkKbFilter {
    font-size: 120% !important;
    padding-bottom: 10px;
    text-align: center;
	color:#008000;
}
#contentKbFilter{
    line-height: 1.9 !important;
    text-align: center;
	word-wrap: break-word;
    width:680px; 
}
#contentKbFilter a, #contentKbFilter a:hover, #contentKbFilter a:visited{padding: 5px;}
#contentKbFilter a:hover{background:#e1e1e1; text-decoration:none;}
.FilterByRegion {padding: 15px 0;}
/*a.checkedCustom_49,a.checkedCustom_49:hover,a.checkedCustom_49:visited{background:#e1e1e1; text-decoration:none;}*/

.checkedCustom_49{background:#C7E2FF;padding: 5px;color: #385B9C;cursor:pointer;border-radius:10px;display: inline-block;}
.Custom_49{padding: 5px;color: #385B9C;cursor:pointer;border-radius:10px;display: inline-block;}
.Custom_49:hover{background:#f1f1f1; cursor:pointer;border-radius:10px;}

/*end kb*/

/*pager*/

a.pager_sibl:link, a.pager_sibl:active, a.pager_sibl:visited, a.pager_sibl:hover, a.pager_fin:link, a.pager_fin:active, a.pager_fin:visited, a.pager_fin:hover {
        text-decoration: none;
}
a.pager_sibl:hover, a.pager_fin:hover{text-decoration: underline;}

a.pager_block:link, a.pager_block:active, a.pager_block:visited, a.pager_block:hover, .pager_active, .pager_dotdot {
    background-color: #F8F8F8;
    margin-right: 3px;
    padding: 4px 8px;
    text-align: center;
    text-decoration: none;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
}
a.pager_block:hover{
	background:#C7E2FF;
	color:#000;
	}

.pager_active {
    background-color: #C7E2FF;
    color: #385B9C; 
    font-size: 14px;
	font-weight:bold;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	cursor:default;
}
/*end pager*/

.ftextProject{width:132px;float:left;padding:2px 0px;}

.rewiew img{opacity:0.9;}


.sm_ref_prtf{line-height:1.4;}
.sm_ref_prtf a,.sm_ref_prtf a:hover,.sm_ref_prtf a:visited{text-decoration:none;font-size:14px;}
.MediaBox_loader{ position: absolute; width: 32px; height: 32px; left: 50%; top: 50%; margin: -16px 0px 0px -16px; background: url(/_img/ami_jsapi/loader.gif); z-index: 100002; }
.MediaBox_group{ margin: 10px; margin-bottom: 0px; font-style: italic; }
.MediaBox_header{ margin: 10px; margin-bottom: 0px; font-weight: bold; text-align:center;}
.MediaBox_url{ margin: 10px; margin-bottom: 0px; text-align:center; font-weight: bold;}
.MediaBox_description{ padding: 10px; padding-bottom: 0px; }
.MediaBox_imageArea{ position: relative; }
.MediaBox_previous{ position: absolute; left: -28px; top: 50%; width: 32px; height: 63px; margin-top: -32px; background: url(/_img/ami_jsapi/mb-prev.png); cursor: pointer; }
.MediaBox_next{ position: absolute; right: -28px; top: 50%; width: 32px; height: 63px; margin-top: -32px; background: url(/_img/ami_jsapi/mb-next.png); cursor: pointer; }
.MediaBox_container{ position: relative; margin: 10px 10px 0px 10px; text-align: center; }
.MediaBox_zoom{ margin: 10px; margin-bottom: 0px; text-align: right; font-style: italic; }
.MediaBox_zoom a{ font-style: italic; }
#MediaBox_sliderPrevious{ float: left; width: 10px; height: 20px; margin: 40px 0px 0px 10px; background: #00f; cursor: pointer; }
#MediaBox_sliderNext{ float: right; width: 10px; height: 20px; margin: 40px 10px 0px 0px; background: #00f; cursor: pointer; }
.MediaBox .disabled{ background: #ccf !important; cursor: default !important; }
.MediaBox_slider{ position: relative; overflow: hidden; height: 80px; margin: 10px 30px 0px 30px; white-space: nowrap; }
.MediaBox_sliderImage{ max-height: 80px; height: expression(this.scrollHeight > 80 ? "80px" : "auto"); cursor: pointer; }
.MediaBox_sliderDelimeter{ display: -moz-inline-stack; display: inline-block; zoom: 1; *display: inline; width: 10px; }
.MediaBox_counter{ margin: 10px; margin-bottom: 0px; text-align: right; font-style: italic; }

img[data-ami-mbpopup] {cursor: url(/_img/ami_jsapi/pointer_plus.png), pointer;}
img[data-ami-mbpopup] {opacity:0.85}
img[data-ami-mbpopup]:hover {opacity:1; cursor: url(/_img/ami_jsapi/pointer_plus.png);}

/*portfolio*/

.portfolio_image {
	border:3px #fff solid;
	-moz-box-shadow: 0px 0px 10px 3px #ccc;
	-webkit-box-shadow: 0px 0px 10px 3px #ccc;
	box-shadow: 0px 0px 10px 3px #ccc;
}

.portfolio_image:hover {
	-moz-box-shadow: 0px 0px 10px 3px #C7E2FF;
	-webkit-box-shadow: 0px 0px 10px 3px #C7E2FF;
	box-shadow: 0px 0px 10px 3px #C7E2FF;
}

/*end portfolio*/

/*ruble*/
span.ruble {font-family:Times New Roman;}
span.dot { position:absolute; left: -10000px; }
span.hyphen:after { content: '\2014'; }
span.hyphen { font-size:55%; position:relative;  margin-right: -1.9ex; behavior: expression(this.innerHTML = '—'); }
/*end ruble*/


div.amiListProgress{ display: none; position: absolute; min-height: 32px; background: #fff; opacity: 0.6; }
div.amiListProgress img{ position: absolute; left: 50%; top: 50%; margin: -16px 0px 0px -16px;}
div.ami_resp_prev, div.ami_resp_next, div.ami_resp_reload, div.ami_resp_play_pause{ display: -moz-inline-stack; display: inline-block; zoom: 1; *display: inline; width: 16px; height: 16px; background: url(/_mod_files/ce_images/ajax_resp_icons.png) no-repeat; cursor: pointer; }
div.ami_resp_prev{}
div.ami_resp_next{ background-position: -16px 0px; }
div.ami_resp_reload{ background-position: -64px 0px; }
div.ami_resp_play_pause{ background-position: -48px 0px; }
div.ami_resp_pause{ background-position: -32px 0px; }
div.ami_resp_play_pause_disabled{ display: none; }
div.ami_resp_prev_disabled, div.ami_resp_next_disabled{ cursor: default; filter: alpha(opacity=30); opacity: 0.3; -moz-opacity: 0.3; }
div.ami_resp_navi{
	text-align:right;
	padding-bottom:4px;
	height:16px;
}



/* articles { */

div.ami_resp_outer_articles {
    display: block;
    border: 1px dashed #777;
    padding: 10px;
    margin: 5px;
}

div.ami_resp_inner_articles {
}

div.ami_resp_row_articles {
    padding-top: 5px;
}

div.ami_resp_row_fdate_articles, div.ami_resp_row_header_articles {
    display: inline;
}

div.ami_resp_row_fdate_articles {
    font-weight: bold;
    padding-right: 5px;
}

div.ami_resp_row_announce_articles {
}

/* } articles */
/* blog { */

div.ami_resp_outer_blog {
    display: block;
    border: 1px dashed #777;
    padding: 10px;
    margin: 5px;
}

div.ami_resp_inner_blog {
}

div.ami_resp_row_blog {
    padding-bottom: 10px;
}

div.ami_resp_row_fdate_blog, div.ami_resp_row_header_blog {
    display: inline;
}

div.ami_resp_row_fdate_blog {
    font-weight: bold;
    padding-right: 5px;
}

div.ami_resp_row_announce_blog {
}

/* } blog */
/* eshop_item { */

div.ami_resp_outer_eshop_item {
    display: block;
    border: 1px dashed #777;
    padding: 10px;
    margin: 5px;
}

div.ami_resp_inner_eshop_item {
}

div.ami_resp_row_eshop_item {
    padding-top: 5px;
}

div.ami_resp_row_fdate_eshop_item, div.ami_resp_row_header_eshop_item {
    display: inline;
}

div.ami_resp_row_fdate_eshop_item {
    font-weight: bold;
    padding-right: 5px;
}

div.ami_resp_row_announce_eshop_item {
}

/* } eshop_item */
/* files { */

div.ami_resp_outer_files {
    display: block;
    border: 1px dashed #777;
    padding: 10px;
    margin: 5px;
}

div.ami_resp_inner_files {
}

div.ami_resp_row_files {
    padding-top: 5px;
}

div.ami_resp_row_fdate_files, div.ami_resp_row_header_files {
    display: inline;
}

div.ami_resp_row_fdate_files {
    font-weight: bold;
    padding-right: 5px;
}

div.ami_resp_row_announce_files {
}

/* } files */
/* kb_item { */

div.ami_resp_outer_kb_item {
    display: block;
    border: 1px dashed #777;
    padding: 10px;
    margin: 5px;
}

div.ami_resp_inner_kb_item {
}

div.ami_resp_row_kb_item {
    padding-top: 5px;
}

div.ami_resp_row_fdate_kb_item, div.ami_resp_row_header_kb_item {
    display: inline;
}

div.ami_resp_row_fdate_kb_item {
    font-weight: bold;
    padding-right: 5px;
}

div.ami_resp_row_announce_kb_item {
}

/* } kb_item */
/* news { */

div.ami_resp_outer_news {
/*     margin: -24px 5px 0px 5px;*/
	padding:0px;
	margin:0px;
}

div.ami_resp_outer_news .ami_resp_reload {
	display: none;
}


div.ami_resp_inner_news {
}

div.ami_resp_row_news {
    padding-bottom: 10px;
}

div.ami_resp_row_news a, div.ami_resp_row_blog a  {
    text-decoration:none;
	border-bottom:1px solid;
	line-height:16px;
}

div.ami_resp_row_news a:hover,  div.ami_resp_row_blog a:hover{
	border-bottom:1px solid #fff;
}

div.ami_resp_row_fdate_news, div.ami_resp_row_header_news {
    display: inline;
}

div.ami_resp_row_fdate_news {
    padding-right: 5px;
}

div.ami_resp_row_announce_news {
}


/* } news */
/* photoalbum { */

div.ami_resp_outer_photoalbum {
    display: block;
    border: 1px dashed #777;
    padding: 10px;
    margin: 5px;
}

div.ami_resp_inner_photoalbum {
}

div.ami_resp_row_photoalbum {
    padding-top: 5px;
}

div.ami_resp_row_fdate_photoalbum, div.ami_resp_row_header_photoalbum {
    display: inline;
}

div.ami_resp_row_fdate_photoalbum {
    font-weight: bold;
    padding-right: 5px;
}

div.ami_resp_row_announce_photoalbum {
}

/* } photoalbum */
/* portfolio_item { */

div.ami_resp_outer_portfolio_item {
    margin: 0px 5px 0px 5px;
	padding-top:0px;
	padding-bottom:0px;
}

div.ami_resp_outer_portfolio_item .ami_resp_reload{
	display: none;
}

div.ami_resp_inner_portfolio_item {
}

div.ami_resp_row_portfolio_item {
    padding-top: 5px;
	text-align:center;
	font-size:11px;
}

div.ami_resp_row_imageblock_portfolio_item{
	position: relative;
	border:1px #ccc solid;
/*	border-radius:12px; */
	margin:10px 0px 10px 0px;
	padding:0px;
	display: -moz-inline-stack;
	display: inline-block;
	zoom: 1;
	*display: inline;
}


div.ami_resp_row_portfolio_item img{
	margin:0px;
	width: 200px;
}

div.ami_resp_row_partner_portfolio_item{
	text-align:left;
}


div.ami_resp_row_fdate_portfolio_item, div.ami_resp_row_header_portfolio_item {
    display: inline;
}

div.ami_resp_row_header_portfolio_item{
	font-size: 12px; 
}

div.ami_resp_row_fdate_portfolio_item {
    padding-right: 5px;
}

div.ami_resp_row_announce_portfolio_item {
}

/* } portfolio_item */
/* stickers { */

div.ami_resp_outer_stickers {
    margin: -0px 5px 0px 5px;
	padding-top:0px;
	padding-bottom:0px;
}

div.ami_resp_outer_stickers .ami_resp_reload {
	display: none;
}

div.ami_resp_inner_stickers {
}

div.ami_resp_row_stickers {
}

div.ami_resp_row_fdate_stickers, div.ami_resp_row_header_stickers {
    display: inline;
}

div.ami_resp_row_header_stickers {
	display:inline;
	border-bottom: 1px dashed;
	line-height: 17px;
	color:#BE0400;
	cursor: pointer;
}

div.ami_resp_row_fdate_stickers {
    padding-right: 5px;
}

div.ami_resp_row_announce_stickers {
	padding-top: 10px;
	font-size: 11px; 
}

/* stickers */






input.btn_enter {
    background-color: transparent;
    background-image: url("/_mod_files/ce_images/blog/btn_enter.png");
    background-repeat: no-repeat;
    border: medium none;
    color: #FFFFFF;
    cursor: pointer;
    height: 24px;
    margin-left: 10px;
    margin-top: 9px;
    width: 80px;
}

.citate {
opacity: 0.5;
}

#cocial img {
margin-right: 5px;
}

#tgg a {
color: #777;
}


#top_left_index {
background-image: url("//www.amiro.ru/_img/top_left_index.jpg");
background-repeat: no-repeat;
background-size: 50% 289px;
}

#top_right_index {
background-image: url("//www.amiro.ru/_img/top_right_index.jpg");
background-position: 100% 0%;
background-repeat: no-repeat;
background-size: 50% 289px;
}


#top_left {
background-image: url("//www.amiro.ru/_img/top_left.jpg");
background-repeat: no-repeat;
background-size: 50% 215px;
}

#top_right {
background-image: url("//www.amiro.ru/_img/top_right.jpg");
background-position: 100% 0%;
background-repeat: no-repeat;
background-size: 50% 215px;
}

#bot_left {
background-image: url("//www.amiro.ru/_img/bot_left.jpg");
background-repeat: no-repeat;
background-size: 50% 179px;
background-position: 0% 100%;
}

#bot_right {
background-image: url("//www.amiro.ru/_img/bot_right.jpg");
background-repeat: no-repeat;
background-size: 50% 179px;
background-position: 100% 100%;
}

#menu_blog {
color: #000;
}

#menu_blog img {
width: 12px;
}

#menu_blog a {
color: #000;
}

#login_enter {
cursor: pointer; 
font-size: 11px;
border-bottom: 1px dashed; 
color: #009000;
opacity:0.85;
}

#quick_login_block DIV{
	font-size: 12px!important;
}

#login_enter:hover {
	opacity: 1;
}

.ico img {
width: 13px;
}

.ico_f img {
    float: left;
    margin-right: 5px;
    margin-top: 4px;
    width: 13px;
}

/* Imagetape gadget */

.it_main_image IMG{width: 400px; max-height: 300px;}
.image_item_nopopup {border: 1px solid #ffffff; float:left; margin:2px; padding: 3px; cursor:pointer;}
.image_item_nopopup_selected {border: 1px solid #cccccc; float:left; margin:2px; padding: 3px; cursor:pointer;}
.imagetape_fullinfo {cursor: pointer; margin-right: 10px;padding: 3px 6px;border: 1px solid #ccc;position: relative;}
.imagetape_fullinfo_select {cursor: pointer; margin-right: 10px;padding: 3px 6px;border: 1px solid #000;position: relative;background: #555;color: #fff;}
.header_fullinfo {font-size: 14px;font-weight: bold;padding-bottom: 10px;}
.description_fullinfo {padding-right: 10px;padding-bottom: 10px;}
.left_imagetape_fullinfo {float: left;}
.right_imagetape_fullinfo {float: right; margin-bottom:30px;}
.bottom_imagetape_fullinfo {width: 100%; text-align:center;}
.block_imagetape_fullinfo {background: #FFFFFF; float: left; padding-bottom: 40px; width: 600px;}
.block_imagetape_fullinfo IMG {height:300px; max-width:350px;}
.imagetapeControl {cursor: pointer;}
.imagetapeControl.left {background:url('/_img/imagetape-prev.png') 50% 50% no-repeat transparent;float:left;width: 30px;}
.imagetapeControl.right {background:url('/_img/imagetape-next.png') 50% 50% no-repeat transparent;float:left;width: 30px;}
.imagetapeControl.up {background:url('/_img/imagetape-up.png') 50% 50% no-repeat transparent;clear:both;height: 30px;}
.imagetapeControl.down {background:url('/_img/imagetape-down.png') 50% 50% no-repeat transparent;clear:both;height: 30px;}
.imagetapeControl.disabled {cursor: default !important;filter: alpha(opacity=50);opacity: 0.5;-moz-opacity: 50%;}

.tag_count_1 {font-size: 13px}
.tag_count_2 {font-size: 19px}
.tag_count_3 {font-size: 22px}
.tag_count_4 {font-size: 25px}
.tag_count_5 {font-size: 28px}
.tag_count_6 {font-size: 31px}

.int_body_padding {padding-bottom: 230px;}
.lay_body_width {width:688px;}
.int_layout_footer {float: left; margin-top: -180px; width: 100%; height: 180px; position: relative}
.lay_f4_padding {padding-top: 90px; width: 1000px}
.lay_f1_top {height: 177px;}

/* Contact Form */

#contact_form { min-width: 281px; position: fixed; left: -400px; box-shadow: #666 0px 0px 10px 3px; border-radius: 17px; z-index: 2000; }
input.btn_middle_green_submit { background: url("_img/btn_middle_green_submit.png") no-repeat; border: medium none; color: white; cursor: pointer; height: 33px; padding: 0; width: 130px; opacity: 0.85; }
input.btn_middle_green_submit:hover { opacity: 1; }
div.AMIToolTip { z-index: 3000; }
.txt_contact_form {padding: 5px 0px;}
.textarea_contact_form { height: 65px; width: 296px; min-height: 65px; min-width: 299px; }
.txt_contact_form { font-size: 13px; margin-bottom: -3px; color: #fff; }
#open_close_contact { float: right; font-size: 13px; margin-right: 0px; text-align: center; }
#left_form_top, #center_form_top, #right_form_top { height: 20px; }

#left_form_top {background: url("/_img/contact_form/top_left_bg.png") no-repeat; width: 33px}
#center_form_top {background: url("/_img/contact_form/top_center_bg.png") repeat-x; padding-top: 8px;}
#right_form_top {background: url("/_img/contact_form/top_right_bg.png") no-repeat;) no-repeat; width: 33px}
#center_form_top a {color: #FFFFFF; text-decoration: none;}

#left_form_center {background: url(/_img/contact_form/center_center_left.png) repeat-y; height: 42px; width: 33px}
#center_form_center {background:url(/_img/contact_form/center_bot_center.png) repeat; height: 42px; padding: 25px;}
#right_form_center {background: url(/_img/contact_form/center_center_right.png) repeat-y; height: 42px; width: 33px}

#left_form_bot {background: url(/_img/contact_form/bot_left.png) no-repeat bottom; height: 13px; width: 33px;}
#center_form_bot {background: url(/_img/contact_form/bot_center.png) repeat-x bottom; height: 13px;}
#right_form_bot {background: url(/_img/contact_form/bot_right.png) no-repeat bottom; height: 13px; width: 33px;}

.txt_input {height: 13px;}

#zapros { height: 127px; position: relative; z-index: 2000; }
#zapros img {opacity:0.85}
#zapros img:hover {opacity: 1}
INPUT.btn_green { background: url("_img/btn_middle_gray.png") no-repeat; border: medium none; color: #FFFFFF; cursor: pointer; height: 33px; padding: 0; width: 130px; }

#clButton {opacity:0.9}
#clButton:hover {opacity:1}
#__clAltAlt { display: none; }



.user_menu TD {
	padding: 3px 0px;
}

pre.artem_php_code {
font-family: monospace;
border:1px #007F00 dotted;
background-color: #DDE4DD;
padding: 5px;
margin: 15px 0px;
background-position: 0% 0%;
}



.f_center {float:none;text-align:center}
.f_clear {clear:both;height:1px}
.f_left {float:left;text-align:left}
.f_right {float:right;text-align:left}
.more {text-decoration:none;color:#bf130a;font-weight:bold}
TD.type B {font-weight:normal;}
/* categories */
.categoryList ul {margin:0;padding:0}
.categoryList ul li {margin:0;padding:0 0 2px 0;line-height:16px;background:none}
/* search form */
#shop_search_form {margin:10px 0;padding:0}
#shop_search_form table {border:0}
/*#shop_search_form td, #shop_search_form select, #shop_search_form input {font-size:14px!important}*/
#shop_search_form select {border:1px solid #7F9DB9;height:20px;margin:0;padding:0}
#shop_search_form #author {width:109px}
#shop_search_form #category {width:252px}
#shop_search_form #keyword {width:96px;border:1px solid #7F9DB9;height:16px;text-align:center}
#shop_search_form #price_1_val, #shop_search_form #price_2_val {width:40px;border:1px solid #7F9DB9;height:16px;text-align:center}
#shop_search_form .button_2 {background:url(_img/search.png) no-repeat 0 0;width:100px;height:33px;padding:0;border:none;color:#fff;cursor:pointer;behavior:url(_img/iepngfix.htc)}

.sm_tree_market div {margin: 10px 0px;}
.sm_tree_market a {color: #D92E09; font-size: 14px;}
.sm_tree_market_selected {color: #000; font-size: 14px;}
.order-name-history-market__row {
    min-height: 50px;
}


/* User menu */

#lay_body .componentList td {font-size: 12px;}
.user_menu ul li {background: none;}
.listColumn_date_created {width: 140px;}

/* .user_menu_index {float: left; } */
.user_menu_index {display: inline:}
.user_profile {font-weight: bold; cursor: pointer;}
.user_menu li {color: #ccc; cursor: default;}
.user_menu_img {cursor: pointer; padding-left: 5px;}
ul.user_menu  {list-style-type: none; border: 1px solid #000000; padding: 0px; margin: 15px 0px 0px 0px; border: 1px solid #ccc; visibility: hidden; position: absolute; background: #fff;}
ul.user_menu li {padding: 0px; margin: 10px;}
.member_user_menu {position: relative;}
.user_profile_on {font-weight: bold; cursor: pointer; color: #000;}
.user_menu {z-index: 1000; padding-top: 10px; box-shadow: 0px 1px 5px #ccc; border: 1px solid #000000; top:-21px; left: -11px; border: 1px solid #ccc; visibility: hidden; position: absolute; background: #fff; //padding-top: 20px;}
.user_menu_discussion {top: -24px; //top: -21px;}
.user_menu ul {list-style-type: none; margin: 0px; padding: 0px;}
.user_menu ul li {padding: 0px; margin: 10px;}
.top_user_block {padding:3px; background-color:#f5f5f5; float: left;}

div.AlertWindow {overflow: hidden; cursor: move;}
div.AlertWindow  .popupClose{ position: absolute; display: block; right: 5px; top: 3px; width: 21px; height: 21px; background: url("/_img/close_alert.gif"); cursor: pointer; }
div.AlertWindow .popupHeader{ display: block; width:100%; height: 0px; }
div.AlertWindow .popupHeaderText {display: none}
div.AlertWindow .popupContent {padding: 0px;}


/* My messages */

/*
#my_messages {display: inline-block; text-align: center; background: url(/_img/messages.png) no-repeat; padding-top: 5px; width: 35px; height: 20px; position: relative; //height: 25px;}
#my_messages a {color: #000; background: #fff; opacity: 0.75; border-radius: 4px; text-decoration: none; font-size: 10px; font-family: Tahoma, Arial; font-weight: bold;}
#member_info {float: left; margin-right: 10px; margin-top: 5px}
*/

#my_messages {line-height: 1; top: -2px; //top: 0px; position: relative; background: url(/_img/messages_front.png) no-repeat; width: 29px; height: 18px; text-align: center; display: inline-block;}
#my_messages a {text-decoration: none; font-size: 10px; color: #000; position: relative; top: -1px; *top: 3px;}

/* Ami Popup */

div.popupWindowShadow{
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    border: 0px;
    background: #fff;
    background: #000000;
    -moz-opacity: 0.3;
    filter:alpha(opacity=30);
    opacity: 0.3;
    z-index:10;
}

div.amiPopup {
    display: none;
    position: fixed;
    background: white;
    overflow: hidden;
    border: 1px solid #888888;
    box-shadow: 0px 0px 15px 3px #000;
}

div.amiPopup .popupClose{
    position: absolute;
    display: block;
    right: 5px;
    top: 1px;
    width: 26px;
    height: 26px;
    background: url("/_img/amiPopup_close_btn.gif");
    cursor: pointer;
}

div.amiPopup .popupHeader{
    cursor:move;
    padding-top: 4px;
    position: relative;
    display: block;
    top: 0px;
    left: 0px;
    width:100%;
    height: 25px;
    color: black;
    background-color: #EEE;
    border-top: 1px #fff solid;
}

div.amiPopup .popupHeaderText{
    margin: 3px 0px 0px 14px;
    font-weight: bold;
}

.popupContent {
    padding: 5px 10px 10px 14px;
}

/* Eshop_item_row */

.compare_script_bottom a {display: inline-block;padding-right: 20px;padding-top: 20px;}
.items_sort a {cursor: pointer;}
.items_sort a:hover {color: #8B8B8B;}

.grid_on {color: #000;}
.grid_off {color: #8B8B8B;}

#grid {display: table; width: 100%;}
#grid .div_table {display: table; width: 100%;}
#grid .div_tr {display: table-row}
#grid .div_td {display: table-cell; vertical-align: top;}

#grid .custom_fiels, .announce {display: none}
#grid .eshop_cat_item_Vsplitter, .eshop_cat_cat_item_Vsplitter {background: none}
#grid .eshop_list_item_row {width: 50%;}

.list_on, .sort_on {color: #000;}
.list_off, .sort_off {color: #8B8B8B;}

#list .item_small_picture {width: 80px; border: 1px solid #CCCCCC;}
#list .name {font-size: 14px;margin-left: 100px;position: absolute;}
#list .custom_fiels {margin-left: 100px; width: 245px;}
#list .prices {margin-left: 100px;}
#list .eshop_cat_item_Hsplitter {background: none; height: 40px;}
#list .eshop_cat_item_Vsplitter {background: none; border-bottom: 0px; height: 20px;}
#list .addtocomparsion {margin-left: 95px;}
#list .announce {display: block; margin-left: 100px; margin-top: -70px;}
#list .rating {margin-top: 20px; margin-left: 100px;}
#list .small_picture_wrapper {width: 80px; height: 80px;}
#list .forum  {margin-left: 100px;}

.eshop_agreement {text-align: center}
.eshop_agreement_button {display: inline-block;}

.filter_box input.btn {margin-top: 15px;}
.forum {margin: 10px 0px}
.currency_list {font-size:9px; color:#000000; font-weight:bold;}
#flt_search_subcat, .check { zoom:0.8}
#left_btn {margin-top: 10px}
#propery_table {margin: 10px 0px;}

.spec_eshop_tree_links_img { width: 90%; margin: 0 auto;}
.spec_eshop_tree_links_img .lev1 { }
.spec_eshop_tree_links_img .lev2 { }
.spec_eshop_tree_links_img .item_normal { }
.spec_eshop_tree_links_img .item_selected { }
.spec_eshop_tree_links_img .lev1 a:link,
.spec_eshop_tree_links_img .lev1 a:visited,
.spec_eshop_tree_links_img .lev1 a:active,
.spec_eshop_tree_links_img .lev1 a:hover { font: bold 14px arial, tahoma, verdana;    text-transform: uppercase; }
.spec_eshop_tree_links_img .lev2 a:link,
.spec_eshop_tree_links_img .lev2 a:visited,
.spec_eshop_tree_links_img .lev2 a:active,
.spec_eshop_tree_links_img .lev2 a:hover { font: normal 10px arial, tahoma, verdana; }
.spec_eshop_tree_links_img .item_small_picture { float: left; margin-right: 20px; }

/* Spec eshop cart popup */

#spec_eshop_cart_popup_link{
    display:none;
}

#cartPopupWindow #spec_eshop_cart_popup_link{
    display:block;
}

/* 6.0 styles (Status Block) */

.status-block {
    display:block;
    background: #F0F0F0;
    border-radius:10px;
    -moz-border-radius: 10px 10px 10px 10px;
    -webkit-border-radius: 10px;
    margin:5px 0px 5px 2px;
    font-weight: normal;
    position:relative;
}

.status-icon{
    position:absolute;
    top:0px;
    left:3px;
    width:32px;
    height:32px;
}

.status-msgs{padding:15px;}
.block-container { padding:10px 10px 10px 30px;}
.status-red{color: #bc4702;}
.status-black{color: #333;}
.status-none{color: #004080;}

#ya_del {
    float: left;
    left: 167px;
    margin-top: 20px;
    position: absolute;
}
/*
#ya_del {
    float: left;
    left: 167px;
    position: relative;
    top: -35px;
}
*/
div.edParagraph {border:0pt none; font-family:inherit; font-size: 100%; font-style:inherit; font-weight:inherit; margin: 0px 0px 15px 0px; padding:0pt; vertical-align:baseline;}

.forum_podcust, .forum_podcust a, .forum_podcust b {font-size: 13px !important; font-weight: normal; color: #666;}


.member_forum_watch_menu {display: inline-block; position: relative;}

/* User Rating extension */

.amiUserRatingControls {
    float: right;
    padding-left: 10px;
	padding-top: 3px;
}
.amiUserRatingControls .amiUserRatingDec, .amiUserRatingControls .amiUserRatingInc {
    width: 16px;
    height: 16px;
    float: left;
    cursor: pointer;
}

.amiUserRatingControls .amiItemRatingValue .user_rating_minus {color: red;}
.amiUserRatingControls .amiItemRatingValue .user_rating_null {color: #ccc;}

.amiUserRatingControls .amiUserRatingDec {background: url(_img/rating/hands.png) no-repeat -18px 1px; opacity: 0.25}
.amiUserRatingControls .amiUserRatingDec:hover {opacity: 1}

.amiUserRatingControls .amiUserRatingInc {background: url(_img/rating/hands.png) no-repeat 0 0; opacity: 0.25}
.amiUserRatingControls .amiUserRatingInc:hover {opacity: 1}

.amiUserRatingControls .amiItemRatingValue {
    color: green;
    float: left;
    font-size: 12px;
    font-weight: bold;
    padding-top: 2px;
    text-align: center;
    width: 25px;
}

.amiUserRatingControls .user_rating_count {color: #ccc; padding: 0 3px;}

.amiUserRatingMemberBg{
    margin-top: 8px;
    width: 102px;
    height: 16px;
}
.amiUserRatingMemberBg .amiUserRatingMemberBgLeft, .amiUserRatingMemberBg .amiUserRatingMemberBgRight {
    /*background: url(_img/rating/stars/user_stars.gif) no-repeat;
    height: 13px;
    width: 75px;*/
	width: 59px;
	background: url(_img/rating/stars/users_stars_gray.png) no-repeat;
	height: 10px;
    float: left;
}

.amiUserRatingMemberBg .amiUserRatingMemberBgRight .amiUserRatingMemberPositive {
	/*background: url(_img/rating/stars/starsgreen5.gif) no-repeat;
	height: 13px;*/
	background: url(_img/rating/stars/users_stars_green.png) no-repeat;
	height: 10px;
    float: left;
}

.amiUserRatingControls .thanks_user, .amiUserRatingControls .thanks_user:hover {
margin-top: -3px;
border: 1px solid #CCCCCC;
border-radius: 5px 5px 5px 5px;
padding: 2px 15px;
width: auto;
color: #000000;
background: #efeaea; /* Old browsers */
background: -moz-linear-gradient(top,  #efeaea 0%, #eaeaea 50%, #cecece 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#efeaea), color-stop(50%,#eaeaea), color-stop(100%,#cecece)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #efeaea 0%,#eaeaea 50%,#cecece 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #efeaea 0%,#eaeaea 50%,#cecece 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #efeaea 0%,#eaeaea 50%,#cecece 100%); /* IE10+ */
background: linear-gradient(top,  #efeaea 0%,#eaeaea 50%,#cecece 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#efeaea', endColorstr='#cecece',GradientType=0 ); /* IE6-9 */
opacity: 0.7;
}

.amiUserRatingControls .thanks_user:hover {opacity: 1;}

.amiUserRatingMemberBg .amiUserRatingMemberBgLeft {
    border-right: 1px solid black;
	display: none;
}
.amiUserRatingMemberBg .amiUserRatingMemberBgRight {
    border-left: 1px solid white;
}
.amiUserRatingMemberBg .amiUserRatingMemberBgLeft .amiUserRatingMemberNegative{
    background-color: red;
    float: right;
    height: 16px;
}

.amiUserRatingMemberBg .amiUserRatingMemberTitle{
    font-size: 10px;
}

.amiUserRatingControls div {
    line-height: 1.2 !important;
    font-size: 12px !important;
}

#cart_img
{
	float: left;
	margin-right: 5px;
}
.spec_eshop_cart
{
	min-height: 55px;
}
.spec_eshop_cart::after
{
	content: "";
	display: table;
	clear: both;
}

/* ____ */

/* global start | default */

.global_cols_ {width: auto;} /* problems with _col variable? */
.global_cols_0 {width: auto;}
.global_cols_1 {width: 100%;}
.global_cols_2 {width: 50%;}
.global_cols_3 {width: 33.33%;}
.global_cols_4 {width: 25%;}
.global_cols_5 {width: 20%;}
.global_cols_6 {width: 16.666%;}
.global_cols_7 {width: 14.285%;}
.global_cols_8 {width: 12.5%;}
.global_cols_9 {width: 11.111%;}
.global_cols_10 {width: 10%;}
.global_cols_11 {width: 9.09%;}
.global_cols_12 {width: 8.333%;}
.global_cols_13 {width: 7.692%;}
.global_cols_14 {width: 7.142%;}
.global_cols_15 {width: 6.666%;}
.global_cols_16 {width: 6.25%;}
.global_cols_17 {width: 5.882%;}
.global_cols_18 {width: 5.555%;}
.global_cols_19 {width: 5.263%;}
.global_cols_20 {width: 5%;}

* html .global_cols_0 {width: auto;} * html .global_cols_1 {width: 100%;}
* html .global_cols_2 {width: 47%;} * html .global_cols_3 {width: 30%;}
* html .global_cols_4 {width: 23%;} * html .global_cols_5 {width: 18%;}
* html .global_cols_6 {width: 15%;} * html .global_cols_7 {width: 13%;}
* html .global_cols_8 {width: 11%;} * html .global_cols_9 {width: 10%;}
* html .global_cols_10 {width: 9%;} * html .global_cols_11 {width: 8%;}
*+html .global_cols_0 {width: auto;} *+html .global_cols_1 {width: 100%;}
*+html .global_cols_2 {width: 47%;} *+html .global_cols_3 {width: 30%;}
*+html .global_cols_4 {width: 23%;} *+html .global_cols_5 {width: 18%;}
*+html .global_cols_6 {width: 15%;} *+html .global_cols_7 {width: 13%;}
*+html .global_cols_8 {width: 11%;} *+html .global_cols_9 {width: 10%;}
*+html .global_cols_10 {width: 9%;} *+html .global_cols_11 {width: 8%;}

/* global end */

/* form start | default */

.form /* BLOCK | div that contains form(s) */
{
	overflow: hidden;
	margin: 5px 0px;
	padding: 10px;	
	border-bottom: 1px solid dad9d3;
	border-radius: 5px;
	background: transparent;
	color: #000;
	font-family: arial, tahoma;
	font-size: 12px;
}
.form .form
{
	display: block;
	position: static;
	left: 0px;
	top: 0px;
	width: auto;
	margin: 0px;
	padding: 0px;
	border: 0px;
	background: none;
}
.form__title /* title of .form block */
{
	width: auto;
	margin: 0px;
	text-transform: uppercase;
	font-size: 13px;
	font-weight: 700;
}

.form__caption /* caption of (each) form */
{
	margin: 0px 0px 10px 0px;
	color: #848484;
	font-size: 12px;
	font-weight: 700;
}
.form__search-line
{
	width: 70%;
	height: 25px;
	margin: 0px 10px 0px 0px;
	padding: 0px 5px;
	border: 1px solid #c0c4cc;
	border-radius: 5px;
	box-shadow: 0 1px 1px #ddd inset;
	color: #848484;
	vertical-align: middle;
}
.form__under-search-line /* e.g. hints like "type word and press button" or links to "advanced search" */
{
	display: none;
}
.form__field-list
{
	margin: 0px;
	padding: 0px;
	text-align: justify;
}
.form__field-sublist /* same as .form__field-list but can be as item wrapper, or subitem wrapper */
{
	display: inline-block;
	margin: 0px;
	padding: 0px;
	text-align: justify;
}
.form__field /* the item wrapper of field-list */
{
	display: inline-block;
	position: relative;
	overflow: hidden;
	margin: 5px 20px 5px 0px;
	vertical-align: top;
}
.form__field-caption
{
	margin: 3px 0px;
	padding: 0px;
	color: #646464;
	font-size: 12px;
	font-weight: 700;
}
.form__fieldset  /* fieldset tag - may serve as item of field-list inside .form__field */
{
	position: relative;
	display: block;
	overflow: hidden;
	margin: 0px 0px;
	padding: 0px;
	border:0px;
	color: #848484;
}
.form__select
{
	margin: 0px;
}
.form__option {} /* option tag cant be styled in most of major browsers by now (2012) */
.form__checkbox
{
	margin: 0px 3px 0px 0px;
	vertical-align: middle;
}
.form__checkbox-label /* use input inside label or attr for */
{
	position: relative;
	display: inline-block;
	margin-right: 10px;
	background: none; /* for IE */
	font-size: 13px;
	vertical-align: baseline;
	color: #848484;
}
.form__checkbox-label:first-of-type /* 'all' field */
{
	/*display: none;*/
}
.form__additional-flag .form__checkbox-label:first-of-type
{
	display: block;
}
.form__checkbox-label:hover
{
	color: #000;
}
.form__checkbox-label-text
{
	vertical-align: middle;
}
.form__label-img /* icon inside checkbox-label or radio-label. not recommended for use */
{
	margin-right: 3px;
	vertical-align: middle;
}
.form__radio
{
	margin: 0px 3px 0px 0px;
	vertical-align: middle;
}
.form__radio-label
{
	display: block;
	margin-right: 10px;
	vertical-align: baseline;
	font-size: 13px;
	color: #848484;
}
.form__radio-label:hover
{
	color: #000;
}
.form__radio-label-text
{
	vertical-align: middle;
}
.form__radio-dot /* dot for cool animation effect of radios. not used by default */
{
	display: none;
}
.form__textfield /* input type text */
{
	height: 18px;
	padding: 0px 3px;
	border: 1px solid #c0c4cc;
	border-radius: 5px;
	box-shadow: 0 1px 1px #ddd inset;
	color: #848484;
}
.form__submit /* input type submit */
{
	width: 109px;
	height: 27px;
	margin: 0px;
	padding: 0px;
	border: 1px solid #ccc;
	border-radius: 3px;
	color: #848484;
	font-weight: 700;
	cursor: pointer;
	background: #ffffff; /* Old browsers */
	background: -moz-linear-gradient(top,  #ffffff 0%, #e5e5e5 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#e5e5e5)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #ffffff 0%,#e5e5e5 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #ffffff 0%,#e5e5e5 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #ffffff 0%,#e5e5e5 100%); /* IE10+ */
	background: linear-gradient(top,  #ffffff 0%,#e5e5e5 100%); /* W3C */
	vertical-align: middle;
	box-shadow: none;
}
.form__submit:hover, .form__checkbox-img:hover ~ .form__submit
{
	background: #ffffff; /* Old browsers */
	background: -moz-linear-gradient(top,  #ffffff 0%, #f3f3f3 50%, #ededed 51%, #ffffff 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(50%,#f3f3f3), color-stop(51%,#ededed), color-stop(100%,#ffffff)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #ffffff 0%,#f3f3f3 50%,#ededed 51%,#ffffff 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #ffffff 0%,#f3f3f3 50%,#ededed 51%,#ffffff 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #ffffff 0%,#f3f3f3 50%,#ededed 51%,#ffffff 100%); /* IE10+ */
	background: linear-gradient(top,  #ffffff 0%,#f3f3f3 50%,#ededed 51%,#ffffff 100%); /* W3C */
}
.form__additional-flag
{
	margin: 5px 1px;
}
.form__v-splitter
{
	display: block;
	width: auto;
	height: 2px;
	margin: 0px 10px;
	background: transparent;
}
.form__h-splitter
{
	display: inline-block;
	visibility: hidden;
	width: 2px;
	height: 30px;
	background: transparent;
	vertical-align: middle;
}
.form__v-flag-splitter
{
	display: inline-block;
	box-sizing: border-box;
	width: 95%;
	height: 2px;
	margin-left: 10px;
	background: #fff;
}
.form__h-flag-splitter
{
	display: inline-block;
	width: 2px;
	height: 30px;
	background: #fff;
	vertical-align: middle;
}

.form_type_filter /* MODIFIER | filter form on catalog page */
{
	clear: both;
	background: #f9f6eb;
}

/* form | custom */

.form
{
	background: #f9f6eb; /* Old browsers */
	background: -moz-linear-gradient(top,  #f9f6eb 0%, #edeadf 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f9f6eb), color-stop(100%,#edeadf)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #f9f6eb 0%,#edeadf 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #f9f6eb 0%,#edeadf 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #f9f6eb 0%,#edeadf 100%); /* IE10+ */
	background: linear-gradient(top,  #f9f6eb 0%,#edeadf 100%); /* W3C */
}
.form__search-line:hover
{
	border: 1px solid #999;
}
.form__field-list
{

}
.form__field-sublist
{
	vertical-align: top;
}
.form__field-list > .form__field-sublist
{
	display: block;
}
.form__field-list > .form__field-sublist:after
{
	content: "";
	display: inline-block;
	width: 100%;
	height: 0px;
}
.form__field
{
	vertical-align: top;
}
.form__fieldset
{
	margin-top: 10px;
	min-width: 140px;
}
.form__select-wrapper
{
	position: relative;
	overflow: hidden;
	width: 140px;
	height: 20px;
	margin: 10px 0px;
	padding: 0px;
	border: 1px solid #c0c4cc;
	border-radius: 5px;
	background: #fff;
	background-position: 120px 0px, 0px 0px;
}
.form__select-wrapper:hover
{
	border: 1px solid #999;
}
.form__select-wrapper:before
{
	content: "\25bc";
	position: absolute;
	display: block;
	right: 5px;
	top: 0px;
	color: #ccc;
	font-size: 16px;
	
	transform: scale(1, 0.5);
	-moz-transform: scale(1, 0.5);
	-webkit-transform: scale(1, 0.5);
	-o-transform: scale(1, 0.5);
	-ms-transform: scale(1, 0.5);
}
.form__select-wrapper:hover:before
{
	color: #bbb;
}
.form__select
{
	position: absolute;
	left: 0px;
	top: 0px;
	width: 160px;
	height: 20px;
	padding: 0px 0px;
	border: 0px;
	border-radius: 5px;
	background: transparent;
	background-color: rgba(0,0,0,0); /* Opera background transparent */
	-webkit-appearance: none; /* Chrome background transparent */
}
.form__select:hover
{
	border: 0px;
}
.form__multiselect
{
	width: 140px;
	border: 0px;
}
.form__option
{
	height: 20px;
}
.form__option:hover
{
	background: #eef;
}

.form__multiselect-wrapper
{
	width: auto;
	height: auto;
	margin-top: 10px;
	background: #fff;
	border: 0px;
	border-radius: 0px;
}
.form__checkbox:nth-of-type(n)
{
	position: absolute;
	left: -9999px;
}
.form__checkbox-label
{
	display: inline-block;
	height: 20px;
	margin-bottom: 5px;
	padding: 0px;
	line-height: 20px;
}
.form__checkbox-label-text
{
	display: inline-block;
	vertical-align: baseline;
	cursor: default;
}
.form__checkbox:nth-of-type(n) +.form__checkbox-label:before, .form__checkbox:nth-of-type(n) +.form__checkbox-label-text:before
{
	content: "";
	display: inline-block;
	width: 12px;
	height: 12px;
	margin: 0px 5px 4px 0px;
	border: 2px solid #ccc;
	background: #f2f0e6;
	vertical-align: middle;
	z-index: 5;
}
.form__checkbox:nth-of-type(n) +.form__checkbox-label:hover:before, .form__checkbox:nth-of-type(n) +.form__checkbox-label-text:hover:before
{
	border: 2px solid #999;

}
.form__checkbox-label:nth-of-type(n):after, .form__checkbox-label-text:nth-of-type(n):after
{
	content: "\2713";
	position: absolute;
	top: -3px;
	left: 1px;
	display: none;
	width: 20px;
	height: 20px;
	background-position: 0px 0px;
	background-color: transparent;
	color: #0b0;
	font-size: 23px;
	font-smooth: always; /* CSS3 */
	text-align: center;
	opa city: 0.0;
	transition: all 0.1s ease-in;
	-moz-transition: all 0.1s ease-in;
	-webkit-transition: all 0.1s ease-in;
	-o-transition: all 0.1s ease-in;
}

.form__checkbox:checked + .form__checkbox-label:after, .form__checkbox:checked + .form__checkbox-label-text:after
{
	display: block;
}
.form__label-img
{
	vertical-align: top;
}
.form__radio /* for ie */
{
	float: left;
	clear: both;
}
.form__radio-label /* for ie */
{
	float: left;
}
.form__radio:nth-of-type(n)
{
	float: none;
}
.form__radio-label:nth-of-type(n)
{
	position: relative;
	display: block;
	float: none;
	height: 20px;
	margin-bottom: 5px;
	padding: 0px 0px 0px 25px;
	line-height: 20px;
	color: #848484;
}
.form__radio-label:hover
{ 
	color: #000;
}
.form__radio-label:nth-of-type(n):before
{
	content: "";
	position: absolute;
	display: block;
	left: 0px;
	top: 0px;
	width: 16px;
	height: 16px;
	border: 2px solid #ccc;
	border-radius: 10px;
	z-index: 1;
}
.form__radio-label:nth-of-type(n):hover:before
{
	border: 2px solid #999;
}
.form__radio-label-text
{
	vertical-align: baseline;
	cursor: default;
}
.form__radio-label-text:nth-of-type(n):after, .form__radio-label:nth-of-type(n):after
{
	content:"";
	position: absolute;
	display: block;
	left: 4px;
	top: 4px;
	width: 12px;
	height: 12px;
	border-radius: 6px;
	background: none repeat scroll 0 0 rgba(60, 230, 54, 1);
	box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3), 0 -1px 6px rgba(0, 0, 0, 0.5) inset;
	opacity: 0;
}
.form__radio:checked + .form__radio-label:after, .form__radio:checked ~ .form__radio-label-text:after
{
	opacity: 1.0;
}
.form__radio:nth-of-type(n)
{
	position: absolute;
	left: -9999px;
}


.form__textfield:hover
{
	border: 1px solid #999;
}
.form__textarea
{
	border: 1px solid #ccc;
}
.form__textarea:hover
{
	border: 1px solid #999;
}

.form_type_filter /* MODIFIER | form in catalog (not miniblock) */
{
}
.form_type_filter .form__field-list
{
}
.form_type_filter .form__search-line
{
	width: 78%;
}

.form_type_list
{
	background: transparent;
	border: 1px lightgray solid;
	padding: 15px;
	border-radius: 5px;
}
.form_type_list .form__radio:checked + .form__radio-label:after
{
	opacity: 0;
}
.form_type_list .form__radio-dot
{
	display: block;
	position: absolute;
	left: -20px;
	top: -20px;
	width: 20px;
	height: 20px;
	transition: all 0.2s ease-in;
	-moz-transition: all 0.2s ease-in;
	-webkit-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-in;
	z-index: 0;
}
.form_type_list .form__radio-dot:before
{
	content:"";
	position: absolute;
	display: block;
	left: 4px;
	top: 4px;
	width: 12px;
	height: 12px;
	border-radius: 6px;
	background: none repeat scroll 0 0 rgba(60, 230, 54, 1);
	box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3), 0 -1px 6px rgba(0, 0, 0, 0.5) inset;
}
.form_type_list .form__radio-dot:after
{
	content:"";
	position: absolute;
	display: block;
	left: 8px;
	top: 8px;
	width: 2px;
	height: 2px;
	background: #9f9;
}
.form_type_list .form__radio:nth-of-type(1):checked ~ .form__radio-dot {top: 0px;left: 0px;}
.form_type_list .form__radio:nth-of-type(2):checked ~ .form__radio-dot {top: 25px; left: 0px;}
.form_type_list .form__radio:nth-of-type(3):checked ~ .form__radio-dot {top: 50px; left: 0px;}
.form_type_list .form__radio:nth-of-type(4):checked ~ .form__radio-dot{top: 75px;left: 0px;}
.form_type_list .form__radio:nth-of-type(5):checked ~ .form__radio-dot{top: 100px;left: 0px;}
.form_type_list .form__radio:nth-of-type(6):checked ~ .form__radio-dot{top: 125px;left: 0px;}
.form_type_list .form__radio:nth-of-type(7):checked ~ .form__radio-dot{top: 150px;left: 0px;}
.form_type_list .form__radio:nth-of-type(8):checked ~ .form__radio-dot{top: 175px;left: 0px;}
.form_type_list .form__radio:nth-of-type(9):checked ~ .form__radio-dot{top: 200px;left: 0px;}
.form_type_list .form__radio:nth-of-type(10):checked ~ .form__radio-dot{top: 225px;left: 0px;}
.form_type_list .form__radio:nth-of-type(11):checked ~ .form__radio-dot{top: 250px;left: 0px;}
.form_type_list .form__radio:nth-of-type(12):checked ~ .form__radio-dot{top: 275px;left: 0px;}
.form_type_list .form__radio:nth-of-type(13):checked ~ .form__radio-dot{top: 300px;left: 0px;}
.form_type_list .form__radio:nth-of-type(14):checked ~ .form__radio-dot{top: 325px;left: 0px;}
.form_type_list .form__radio:nth-of-type(15):checked ~ .form__radio-dot{top: 350px;left: 0px;}
.form_type_list .form__radio:nth-of-type(16):checked ~ .form__radio-dot{top: 375px;left: 0px;}
.form_type_list .form__radio:nth-of-type(17):checked ~ .form__radio-dot{top: 400px;left: 0px;}
.form_type_list .form__radio:nth-of-type(18):checked ~ .form__radio-dot{top: 425px;left: 0px;}
.form_type_list .form__radio:nth-of-type(19):checked ~ .form__radio-dot{top: 450px;left: 0px;}
.form_type_list .form__radio:nth-of-type(20):checked ~ .form__radio-dot{top: 475px;left: 0px;}

.form_type_search
{
	overflow: hidden;
	float: left;
	width: 674px;
	height: 56px;
	margin: 0px;
	padding: 10px;
}
.form_type_search .form__title
{
	display: none;
}
.form_type_search .form__caption
{
	display: none;
}
.form_type_search .form__search-line
{
	height: 26px;
	width: 574px;
	padding: 0px 5px;
	vertical-align: top;
}
.form_type_search .form__submit
{
	width: 71px;
	height: 28px;
	border: 0px;
	background: url("_img/form__submit.png") no-repeat;
	color: transparent;
	font-size: 0px; /* ie8 does not support color transparent */
	cursor: pointer;
	vertical-align: top;
}
.form_type_search .form__submit:hover
{
	border: 0px;
}
.form_type_search .form__under-search-line
{
	display: block;
	width: 584px;
	height: 30px;
}
.form_type_search .form__hint
{
	display: block;
	float: left;
	margin: 3px 0px 0px 7px;
	color: #999;
	font-size: 13px;
	text-shadow: 1px 1px white;
}
.form_type_search .form__more
{
	display: block;
	float: right;
	margin: 3px 0px 0px 0px;
}

.form_type_kb-filter /* MODIFIER | for filter in knowledge base */
{
	background: none;
	margin: 0px;
	padding: 0px;
}

/* form end */

/* eshop-item-small start | default */

.eshop-item-small
{
	display: inline-block;
	*float: left;
	box-sizing: border-box;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	min-width: 200px;
	padding-top: 10px;
	text-align: center;
	vertical-align: top;
}
.eshop-item-small__content /* one item */
{
	display: inline-block;
	min-width: 190px;
	padding: 5px;
	word-spacing: normal;
	text-align: center;
	text-align-last: center;
	font-size: 12px;
}
.eshop-item-small__header
{
	color: black;
	text-align: center;
	min-height: 30px;
}
.eshop-item-small__category, .eshop-item-small__category:visited
{
	font-weight: normal;
	font-style: italic;
padding-right: 10px;
}
.eshop-item-small__title /* the name of the item, should to be in  tag */
{
	color: blue;
	text-decoration: underline;
	text-transform: uppercase;
	font-weight: 700;
}
.eshop-item-small__title:hover, .eshop-item-small__category:hover {text-decoration: none;}
.eshop-item-small__visual /* contains all the visual information about item, i.e. img */
{
	width: 100%;
	margin:0;
	padding:0;
	border:0;
	text-align: center;
}
.eshop-item-small__img /* picture of item */
{
	margin:0;
	padding:0;
	border:0;
}
.eshop-item-small__line
{
	text-align: center;
}
.eshop-item-small__price-tag, .eshop-item-small__additional-prices, .eshop-item-small__cart-box
{
	display: inline-block;
	vertical-align: middle;
	font-size: 12px;
}
.eshop-item-small__cart-quantity
{
	width: 30px;
	border: 1px solid #ccc;
	box-shadow: none;
	vertical-align: middle;
}
.eshop-item-small__price-tag
{
	min-width: 65px;
	min-height: 30px;
	margin: 3px 0px;
	padding: 0px 10px 0px 10px;
	text-align: center;
	background: #e0e0e0;
	border-radius: 10px 3px;
}
.eshop-item-small__actual-price
{
	display: inline-block;
	margin-top: 7px;
	
	color: black;
	font-size: 13px;
	font-weight: 700;
	border-radius: 5px;
	text-align: left;
}
.eshop-item-small__origin-price
{
	margin: 0px 0px -10px 0px;
	text-decoration: line-through;
}
.eshop-item-small__other-price
{
	display: inline-block;
	min-width: 65px;
	min-height: 30px;
	padding: 0px 10px 0px 10px;
	text-align: center;
	background: #e0e0e0;
	border-radius: 10px 3px;
	vertical-align: middle;
}
.eshop-item-small__other-price-caption
{
	margin: 3px 0px;
	font-size: 10px;
}
.eshop-item-small__other-price-original
{
	display: block;
	margin: 0px 0px -10px 0px;
	text-decoration: line-through;
}
.eshop-item-small__other-price-actual
{
	display: inline-block;
	margin-top: 7px;
	color: black;
	font-size: 13px;
	font-weight: 700;
	border-radius: 5px;
	text-align: left;
}
.eshop-item-small__additional-prices
{
	display: inline-block;
	margin-top: 6px;
}
.eshop-item-small__additional-prices-caption
{
	text-align: left;
}
.eshop-item-small__additional-prices-origin-price
{
	display: inline-block;
	margin-right: 20px;
	text-decoration: line-through;
	text-align: left;
}
.eshop-item-small__additional-prices-actual-price
{
	display: inline-block;
	font-weight: 700;
	text-align: left;
}
.eshop-item-small__add-to-cart-link
{
	display: inline-block;
	width: 71px;
	height: 18px;
	padding: 7px 0px 1px 0px;
	border: 1px solid grey;
	border-radius: 5px;
	background: rgb(255,255,255); /* Old browsers */
	background: -moz-linear-gradient(top,  rgba(255,255,255,1) 0%, rgba(229,229,229,1) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,1)), color-stop(100%,rgba(229,229,229,1))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(229,229,229,1) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(229,229,229,1) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(229,229,229,1) 100%); /* IE10+ */
	background: linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(229,229,229,1) 100%); /* W3C */
	
	color: #000;
	font-size: 10px;
	font-weight: 700;	
	text-align: center;
	cursor: pointer;
}
.eshop-item-small__add-to-cart-link:hover
{
	opacity: 0.75;
	text-decoration: none;
}
.eshop-item-small__comparison
{
	padding-bottom: 10px;
	text-align: center;
}
.eshop-item-small__rating {margin-top: 4px; font-size: 10px;}
.eshop-item-small__compare-link {font-size: 10px;}
.eshop-item-small__spec-announce {padding: 3px 0px; font-size: 12px;}
.eshop-item-small__digitals {font-size: 12px;}

/* CSS based list/table switcher - context dependence from eshop-item-list needed */
.eshop-item-list__switcher-radio-list:checked ~ .eshop-item-list__clipper > .eshop-item-list__container > .eshop-item-small
{
	display: block;
	width: auto;
	text-align: left;
}
.eshop-item-list__switcher-radio-list:checked ~ .eshop-item-list__clipper > .eshop-item-list__container > .eshop-item-small .eshop-item-small__header{text-align: left;}
.eshop-item-list__switcher-radio-list:checked ~ .eshop-item-list__clipper > .eshop-item-list__container > .eshop-item-small .eshop-item-small__visual{width: auto; text-align: left; float: left; margin-right: 30px; margin-bottom: 10px;}
.eshop-item-list__switcher-radio-list:checked ~ .eshop-item-list__clipper > .eshop-item-list__container > .eshop-item-small .eshop-item-small__comparison{text-align: left;}
.eshop-item-list__switcher-radio-list:checked ~ .eshop-item-list__clipper > .eshop-item-list__container > .eshop-item-small .eshop-item-small__line{text-align: left;}
.eshop-item-list__switcher-radio-list:checked ~ .eshop-item-list__clipper > .eshop-item-list__container > .eshop-item-small .eshop-item-small__spec-announce{display: block;}
.eshop-item-list__switcher-radio-list:checked ~ .eshop-item-list__clipper > .eshop-item-list__container > .eshop-item-small .eshop-item-small__content{text-align: left; max-width: 1000px;}
.eshop-item-list__switcher-radio-table:checked ~ .eshop-item-list__clipper > .eshop-item-list__container > .eshop-item-small {display: inline-block;} /* width must be there already */
.eshop-item-list__switcher-radio-table:checked ~ .eshop-item-list__clipper > .eshop-item-list__container > .eshop-item-small .eshop-item-small__spec-announce{display: none;}

.eshop-item-small_type_miniblock /* MODIFIER | for items in miniblock */
{	
}

.eshop-item-small_type_catalog /* MODIFIER | for items in search results and in category */
{	
}
.eshop-item-small_type_catalog .eshop-item-small__spec-announce
{
	text-align: left;
}
.eshop-item-small_type_catalog .eshop-item-small__custom-field-name
{
	display: inline-block;
}
.eshop-item-small_type_catalog .eshop-item-small__custom-field-value
{
	display: inline-block;
}

.eshop-item-small_type_linked /* MODIFIER | for linked items in detailed item page */
{
}

* html .eshop-item-small__price-tag {display: inline; width: 100px;} /* HACKS | */
*+html .eshop-item-small__price-tag {display: inline;}
* html .eshop-item-small__cart-box {display: inline;}
*+html .eshop-item-small__cart-box {display: inline;}
* html .eshop-item {display: inline; width: 210px;}
*+html .eshop-item {display: inline;}
* html .eshop-item-small__additional-prices {display: inline;}
*+html .eshop-item-small__additional-prices {display: inline;}
* html .eshop-item-small__cart-box {width: 80px; text-align: center;}
*+html .eshop-item-small__cart-box {width: 80px; text-align: center;}
* html .eshop-item-small__price-tag {height: 30px;}

/* eshop-item-small | custom */

.eshop-item-small
{
	line-height: normal;
}
.eshop-item-small__title
{
	color: #385b9c;
	text-transform: none;
	font-weight: 400;
}
.eshop-item-small__add-to-cart-link
{
	font-size: 12px !important;
	line-height: 12px !important;
}
.eshop-item-small__other-price-actual
{
	font-size: 13px !important;
	line-height: 16px !important;
}
.eshop-item-small__actual-price
{
	font-size: 13px !important;
	line-height: 16px !important;
}
.eshop-item-small__other-price-box
{
	display: none;
}
.eshop-item-small__other-price-caption
{
	display: none;
}
.eshop-item-small__cart-box
{
	display: none;
}
.eshop-item-small__custom-field-name
{
	font-size: 11px !important;
}
.eshop-item-small__custom-field-value
{
	font-size: 11px !important;
}

/* eshop-item-small end */

/* eshop-item-list start | default */

.eshop-item-list /* contains all blocks and elements of eshop-item-list */
{
	width: auto;
	position: relative;
	overflow: hidden;
	text-align: center;
}
.eshop-item-list__title
{
	text-align: left;
}
.eshop-item-list__content
{
	position: relative;
	overflow: hidden;
}
.eshop-item-list__clipper /* clipper block - mask for scroller */
{
	width: auto;
	position: relative;
	overflow: hidden;
}
.eshop-item-list__container /* contains all slides */
{
	position: relative;
	/*display: table; /* Safari 5 bug */
	display: block;
	width: auto;
	margin: 0px;
	padding: 0px;
	list-style-type: none;
	text-align: justify;
	word-spacing: -3px;
	font-size: 0px;
	transition: left 0.5s ease-out, top 0.5s ease-out;
	-moz-transition: left 0.5s ease-out, top 0.5s ease-out; /* Firefox 4 */
	-webkit-transition: left 0.5s ease-out, top 0.5s ease-out; /* Safari and Chrome */
	-o-transition: left 0.5s ease-out, top 0.5s ease-out; /* Opera */
}
.eshop-item-list__container:after /* for last line in not_ie browsers */
{
	content: "";
	width: 100%;
	height: 0px;
	display: inline-block;
	opacity: 0;
}
.eshop-item-list__caption::after
{
	content: "";
	display: block;
	width: 100%;
	height: 0px;
	clear: both;
}
.eshop-item-list__caption
{
	position: relative;
	margin-top: 10px;
	min-height: 30px;
}
.eshop-item-list__sorting
{
	display: inline-block;
	float: left;
    padding: 5px 15px;
	border: 1px solid #ccc;
    border-radius: 5px 5px 5px 5px;
}
.eshop-item-list__sort-over-text
{
	font-weight: bold;
}
.eshop-item-list__switcher {display: none;} /* CONTEXT | replaces js but has context selectors */
.eshop-item-list__switcher:nth-of-type(n)
{
	display: block;
	position: absolute;
	top: 0px;
	right: 0px;
	padding: 5px 15px;
	border: 1px solid #ccc;
	border-radius: 5px;
	font-size: 12px;
	font-weight: 400;
}
.eshop-item-list__switcher-radio-list {display: none;}
.eshop-item-list__switcher-radio-table {display: none;}
.eshop-item-list__switcher-label-list
{
	margin: 0px 10px;
	padding-left: 20px;
	background: url("_img/eshop-item-list__switcher-list.jpg") no-repeat;
	color: #4490b2;
	cursor: pointer;
	text-decoration: underline;
}
.eshop-item-list__switcher-label-table
{
	margin: 0px 10px;
	padding-left: 20px;
	background: url("_img/eshop-item-list__switcher-table.jpg") no-repeat;
	color: #4490b2;
	cursor: pointer;
	text-decoration: underline;	
}
.eshop-item-list__switcher-label-list:hover{text-decoration: underline;}
.eshop-item-list__switcher-label-table:hover{text-decoration: underline;}
.eshop-item-list__switcher-radio-list:checked ~ .eshop-item-list__caption .eshop-item-list__switcher .eshop-item-list__switcher-label-list /* list checked */
{
	color: #4490b2;
	text-decoration: underline;
	font-weight: 700;
}
.eshop-item-list__switcher-radio-table:checked ~ .eshop-item-list__caption .eshop-item-list__switcher .eshop-item-list__switcher-label-table
{
	color: #4490b2;
	text-decoration: underline;
	font-weight: 700;
}
/* see eshop-item-small block for CSS switcher detail */

.eshop-item-list__splitter
{
	display: inline-block;
	width:2px;
	height:2px;
	background: red;
	vertical-align: middle;
}

.eshop-item-list__compare
{
	text-align: left;
	margin-top: 20px;
}
.eshop-item-list__search-result
{
	margin: 10px 0px;
	text-align: left;
}

* html .eshop-item-list__caption {height: 40px; width: 100%;}
*+html .eshop-item-list__caption {height: 30px; width: 100%;}

.eshop-item-list_type_miniblock /* MODIFIER | for item list in miniblock */
{
}

.eshop-item-list_type_catalog /* MODIFIER | for item list in search results and items of category */
{
	clear: both;
min-height: 500px;
}

/* eshop-item-list | custom */

.eshop-item-list__switcher-label-list
{
	background: url("data:image/jpg;base64,/9j/4AAQSkZJRgABAgAAZABkAAD/7AARRHVja3kAAQAEAAAAPAAA/+4ADkFkb2JlAGTAAAAAAf/bAIQABgQEBAUEBgUFBgkGBQYJCwgGBggLDAoKCwoKDBAMDAwMDAwQDA4PEA8ODBMTFBQTExwbGxscHx8fHx8fHx8fHwEHBwcNDA0YEBAYGhURFRofHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8f/8AAEQgAEAAQAwERAAIRAQMRAf/EAFwAAAMBAAAAAAAAAAAAAAAAAAIDBAcBAQAAAAAAAAAAAAAAAAAAAAAQAAICAgEEAgMAAAAAAAAAAAECAwQRBQYAIRITMVEiMgcRAQAAAAAAAAAAAAAAAAAAAAD/2gAMAwEAAhEDEQA/ANv1ew1a2OWO/M5PCG2gsSSeqJdY3sZfUj2lkhIZgY8+OO2P3ySDdfveOvsK0cf9DW9K8qLHSNjTn3MzALHiKukh8j2wpz9dAembmUF3ksrcd1tYtbQ6mWOYQG9FkhprUsa2GDqmCMx5zlcYHmQvrbHnzW4Us6LWw1GcCxNHtJpJEQn8mWM0UDED4BcZ+x0H/9k=") no-repeat;
}
.eshop-item-list__switcher-label-table
{
	background: url("data:image/jpg;base64,/9j/4AAQSkZJRgABAgAAZABkAAD/7AARRHVja3kAAQAEAAAAPAAA/+4ADkFkb2JlAGTAAAAAAf/bAIQABgQEBAUEBgUFBgkGBQYJCwgGBggLDAoKCwoKDBAMDAwMDAwQDA4PEA8ODBMTFBQTExwbGxscHx8fHx8fHx8fHwEHBwcNDA0YEBAYGhURFRofHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8f/8AAEQgAEAAQAwERAAIRAQMRAf/EAGwAAQEBAAAAAAAAAAAAAAAAAAQDBwEAAgMAAAAAAAAAAAAAAAAAAQQDBQYQAAMAAgAFBQEAAAAAAAAAAAECAxEEACExcRJBYZEyBTQRAAEEAgICAwAAAAAAAAAAAAIAAREDUQRhcUESIbHR/9oADAMBAAIRAxEAPwDZ/P8AQ2NqktV5zSevOgLQm+SYTYksZOfs56t8etmA1BUJEMu/L5flZ+yzYPYMAP1YY8NhuFVdf9aNaPs2k8EWwKDXmhyNdnXDCEyD5c+o7Y58QHbSQwIwXb57TVFOyJyZ+w9NjpE0aCNnteVlZ9eUmQ6myWV0kiNkjXccmQ4w3bgHez1CPlv1GrVIdg7H+WKPpkrZ3pPG4lG5o6VE1GpsAktJkVf50xlvcDheU7D4X//Z") no-repeat;
}

/* eshop-item-list end */

/* slider-pad start | default */

.slider-pad
{
			user-select: none;
		 -o-user-select: none;
	   -moz-user-select: none;
	 -khtml-user-select: none;
	-webkit-user-select: none;
}
.slider-pad__arrow-left, .slider-pad__arrow-right, .slider-pad__arrow-up, .slider-pad__arrow-down
{
	position: absolute;
	display: block;
	visibility: hidden;
	font-size: 76px;
	cursor: pointer;
	opacity: 0.7;
	
			 transition: opacity 0.3s, background 0.3s;
		-moz-transition: opacity 0.3s, background 0.3s; /* Firefox 4 */
	 -webkit-transition: opacity 0.3s, background 0.3s; /* Safari and Chrome */
		  -o-transition: opacity 0.3s, background 0.3s; /* Opera */
	
	z-index: 2;
}
.slider-pad__arrow-left
{
	width: 15px;
	height: 60px;
	left: 0px;
	top: 0px;
	background: url(_img/slider-pad__arrow-left.png) no-repeat;
	background-position: left, center;
}
.slider-pad__arrow-right
{
	width: 15px;
	height: 60px;
	right: 0px;
	top: 0px;
	background: url(_img/slider-pad__arrow-right.png) no-repeat;
	background-position: right, center;
}
.slider-pad__arrow-up
{
	position: absolute;
	left: 0px;
	top: 0px;
	width: 60px;
	height: 15px;
	background: url(_img/slider-pad__arrow-up.png) no-repeat;
	background-position: center, top;
}
.slider-pad__arrow-down
{
	position: absolute;
	left: 0px;
	bottom: 0px;
	width: 60px;
	height: 15px;
	background: url(_img/slider-pad__arrow-down.png) no-repeat;
	background-position: center, bottom;
}
.slider-pad__arrow-left:hover, .slider-pad__arrow-right:hover, .slider-pad__arrow-up:hover, .slider-pad__arrow-down:hover {opacity: 1.0;}
.slider-pad__arrow-left {left: 0px;}
.slider-pad__arrow-right {right: 0px;}
.slider-pad__arrow-up {top: 0px;}
.slider-pad__arrow-down {bottom: 0px;}

.slider-pad__arrow_disabled, .slider-pad__arrow_disabled:hover {opacity: 0.2;}

/* slider-pad | custom */

.slider-pad{}
.slider-pad__arrow-left, .slider-pad__arrow-right, .slider-pad__arrow-up, .slider-pad__arrow-down
{
	position: absolute;
	display: block;
	visibility: hidden;
	font-size: 76px;
	cursor: pointer;
	
	transition: opacity 0.3s, background 0.3s;
	-moz-transition: opacity 0.3s, background 0.3s; /* Firefox 4 */
	-webkit-transition: opacity 0.3s, background 0.3s; /* Safari and Chrome */
	-o-transition: opacity 0.3s, background 0.3s; /* Opera */
	
	z-index: 2;
}
.slider-pad__arrow-left
{
	width: 19px;
	height: 36px;
	left: 0px;
	top: 0px;
	background: url(/_img/slider-pad__arrow-left.jpg) no-repeat;
	background-position: left, center;
}
.slider-pad__arrow-left::after
{
	content: "";
	display: block;
	position: absolute;
	left: 19px;
	top: -250px;
	width: 20px;
	height: 500px;

	background: -moz-linear-gradient(left,  rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(255,255,255,1)), color-stop(100%,rgba(255,255,255,0))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(left,  rgba(255,255,255,1) 0%,rgba(255,255,255,0) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(left,  rgba(255,255,255,1) 0%,rgba(255,255,255,0) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(left,  rgba(255,255,255,1) 0%,rgba(255,255,255,0) 100%); /* IE10+ */
	background: linear-gradient(left,  rgba(255,255,255,1) 0%,rgba(255,255,255,0) 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#00ffffff',GradientType=1 ); /* IE6-9 */
}
.slider-pad__arrow-right
{
	width: 19px;
	height: 38px;
	right: 0px;
	top: 0px;
	background: url(/_img/slider-pad__arrow-right.jpg) no-repeat center right;
	background-position: right, center;
}
.slider-pad__arrow-right::after
{
	content: "";
	display: block;
	position: absolute;
	right: 19px;
	top: -250px;
	width: 20px;
	height: 500px;

	background: -moz-linear-gradient(left,  rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(255,255,255,0)), color-stop(100%,rgba(255,255,255,1))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(left,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(left,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(left,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 100%); /* IE10+ */
	background: linear-gradient(left,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00ffffff', endColorstr='#ffffff',GradientType=1 ); /* IE6-9 */
}
.slider-pad__arrow-up
{
	position: absolute;
	left: 0px;
	top: 0px;
	width: 38px;
	height: 19px;
	background: url(/_img/slider-pad__arrow-up.jpg) no-repeat;
	background-position: center, top;
}
.slider-pad__arrow-up::after
{
	content: "";
	display: block;
	position: absolute;
	top: 19px;
	left: -1000px;
	width: 2000px;
	height: 19px;

	background: -moz-linear-gradient(top,  rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,1)), color-stop(100%,rgba(255,255,255,0))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(255,255,255,0) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(255,255,255,0) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(255,255,255,0) 100%); /* IE10+ */
	background: linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(255,255,255,0) 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#00ffffff',GradientType=0 ); /* IE6-9 */
}
.slider-pad__arrow-down
{
	position: absolute;
	left: 0px;
	bottom: 0px;
	width: 38px;
	height: 19px;
	background: url(/_img/slider-pad__arrow-down.jpg) no-repeat;
	background-position: center, bottom;
}
.slider-pad__arrow-down::after
{
	content: "";
	display: block;
	position: absolute;
	bottom: 19px;
	left: -1000px;
	width: 2000px;
	height: 19px;

	background: -moz-linear-gradient(top,  rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,0)), color-stop(100%,rgba(255,255,255,1))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 100%); /* IE10+ */
	background: linear-gradient(top,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00ffffff', endColorstr='#ffffff',GradientType=0 ); /* IE6-9 */
}
.slider-pad__arrow-left:hover, .slider-pad__arrow-right:hover, .slider-pad__arrow-up:hover, .slider-pad__arrow-down:hover {opacity: 1.0;}
.slider-pad__arrow-left {left: 0px;}
.slider-pad__arrow-right {right: 0px;}
.slider-pad__arrow-up {top: 0px;}
.slider-pad__arrow-down {bottom: 0px;}
.slider-pad__arrow_disabled
{
	opacity: 0.2;
}
.slider-pad__arrow_disabled:hover
{
	opacity: 0.4;
}

.slider-pad_type_mini /* MODIFIER | slider for items with 100*100 size or lower */
{
}
.slider-pad_type_mini .slider-pad__arrow-left
{
	width: 9px;
	height: 18px;
	background-image: url("data:image/gif;base64,R0lGODlhCQASAMQAAFxcXCsrK+Pj48jIyBYWFvLy8vv7+x4eHjExMUNDQ4ODg2FhYZ2dnbGxsTo6Otra2oqKipSUlNXV1aurq6CgoHV1dWlpaefn57e3t9DQ0CUlJcHBwVJSUv39/f7+/v///yH5BAAAAAAALAAAAAAJABIAAAVg4Cd63Tc4kPiVT0Bw6nc5hzN4osERCLZ+HgshQBl9FARN6sdIVgzATiO5KABFiEPissJ9KgcEo5uzHDSNq6jAOQQGKpwgUXt0cRLadoTbBA4AVjETGgcVcTgRgIgiGQIhADs=");
}
.slider-pad_type_mini .slider-pad__arrow-left::after
{
	left: 9px;
	top: -100px;
	width: 10px;
	height: 200px;
}
.slider-pad_type_mini .slider-pad__arrow-right
{
	width: 9px;
	height: 18px;
	background-image: url("data:image/gif;base64,R0lGODlhCQASAMQAAFxcXCsrK+Pj48jIyBYWFvLy8vv7+x4eHjExMUNDQ4ODg2FhYZ2dnbGxsTo6Otra2oqKipSUlNXV1aurq6CgoHV1dWlpaefn57e3t9DQ0CUlJcHBwVJSUv39/f7+/v///yH5BAAAAAAALAAAAAAJABIAAAVlIOQMX+d9KEcET4l+g3M414tiCMEZ6PlRAYLl1OmgIBqC4uMxfQyVJON1KiySjZ7xkjggtB8G4lDpfRqag4WHGgQOnILrIUsImB/uTML0FAAHARt9HxUHGhM2H4ARhCgCGT0+HyEAOw==");
}
.slider-pad_type_mini .slider-pad__arrow-right::after
{
	right: 9px;
	top: -100px;
	width: 10px;
	height: 200px;
}
.slider-pad_type_mini .slider-pad__arrow-up
{
	width: 9px;
	height: 18px;
	background-image: url("data:image/gif;base64,R0lGODlhEgAJAMQAANLS0iMjIy0tLURERHBwcNra2js7O2NjYx0dHRQUFDQ0NPT09OPj46+vr5+fn4uLi1NTU+Xl5cjIyPr6+lxcXHt7e7i4uE5OTsHBwenp6e/v7/v7+/z8/P39/f7+/v///yH5BAAAAAAALAAAAAASAAkAAAVn4Cd2Xvc1SjV9m+iK3lc6SYAQ2meacs89tYEAAWF8OK/W5FA7RByBwAAQIyEzF0SAsNA1hgqMZ+wpGBKCR6v1kRgCgkZMMhQ4dsdYYRB9fM4GFiM9MR8RFAgIAA8QEiM8LiYLBBQMIQA7");
}
.slider-pad_type_mini .slider-pad__arrow-up::after
{
	top: 9px;
	height: 10px;
}
.slider-pad_type_mini .slider-pad__arrow-down
{
	width: 9px;
	height: 18px;
	background-image: url("data:image/gif;base64,R0lGODlhEgAJAMQAABwcHPv7+yMjI0RERDk5OTExMWVlZfPz866uriwsLIqKinZ2duPj41JSUsrKyhMTE5+fn11dXejo6Obm5pubm7u7u3p6etfX14KCgrCwsL+/v5SUlPz8/P39/f7+/v///yH5BAAAAAAALAAAAAASAAkAAAVkIBMth2d+X/d5auc0igMAkaSuaLBWxEN8GwFgcEkZUZACIOFIIRICQpPz4QQUCV+R4/loCIJEpntYCBuSVJd6GQgEkIlB8DDoqMYuo7F0PzBqKCgmZHMzFIKJgicBFgUIKycoIQA7");
}
.slider-pad_type_mini .slider-pad__arrow-down::after
{
	bottom: 9px;
	height: 10px;
}

/* slider-pad end */

/* eshop-item-detailed start | default */

.eshop-item-detailed /* BLOCK | eshop item with detailed information - personal page of item */
{
	text-align: justify;
}
.eshop-item-detailed__title
{
	font-size: 20px;
}
.eshop-item-detailed__subtitle
{
	margin: 25px 0px;
	background: none;
	font-size: 16px;
	font-weight: 700;
	text-align: left;
}
.eshop-item-detailed__visual
{
	display: inline-block;
	*float: left;
	vertical-align: top;
	margin: 0px 10px 20px 0px;
}
.eshop-item-detailed__box
{
	display: inline-block;
}
.eshop-item-detailed__text-box
{
	display: block;
	min-width: 100px;
	max-width: 300px;
	margin: 0px 10px 0px 0px;
	vertical-align: top;
}
.eshop-item-detailed__custom-fields
{
	text-align: left;
}
.eshop-item-detailed__custom-field-name
{
	display: inline-block;
	font-weight: 700;
}
.eshop-item-detailed__custom-field-value
{
	display: inline-block;
}
.eshop-item-detailed__description
{
	margin: 10px 0px;
}
.eshop-item-detailed__choice-box
{
	display: inline-block;
	vertical-align: top;
}
.eshop-item-detailed__current-chosen-params-list
{
	margin-bottom: 10px;
}
.eshop-item-detailed__price-box
{
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}
.eshop-item-detailed__base-price
{
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}
.eshop-item-detailed__prices
{
	position: relative;
}
.eshop-item-detailed__price-tag
{
	display: inline-block;
	min-width: 65px;
	min-height: 30px;
	padding: 0px 10px 0px 10px;
	text-align: center;
	background: #e0e0e0;
	border-radius: 10px 3px;
	vertical-align: middle;
}
.eshop-item-detailed__origin-price
{
    color: #999;
    font-size: 12px;
    margin: 0 4px 0 0;
    text-decoration: line-through;
font-weight: normal;
}
.eshop-item-detailed__actual-price
{
	display: inline-block;
	margin-top: 7px;
	color: black;
	font-size: 13px;
	font-weight: 700;
	border-radius: 5px;
	text-align: left;
}
.eshop-item-detailed__other-price
{
	display: inline-block;
	min-width: 65px;
	min-height: 30px;
	padding: 0px 10px 0px 10px;
	text-align: center;
	background: #e0e0e0;
	border-radius: 10px 3px;
	vertical-align: middle;
}
.eshop-item-detailed__other-price-caption
{
	margin: 3px 0px;
	font-size: 10px;
}
.eshop-item-detailed__other-price-original
{
	display: block;
	margin: 0px 0px -10px 0px;
	text-decoration: line-through;
}
.eshop-item-detailed__other-price-actual
{
	display: inline-block;
	margin-top: 7px;
	color: black;
	font-size: 13px;
	font-weight: 700;
	border-radius: 5px;
	text-align: left;
}
.eshop-item-detailed__cart-box
{
	display: inline-block;
	vertical-align: middle;
}
.eshop-item-detailed__cart-quantity
{
	width: 30px;
	border: 1px solid #ccc;
	box-shadow: none;
	vertical-align: middle;
}
.eshop-item-detailed__add-to-cart-link
{
	display: inline-block;
	width: 71px;
	height: 18px;
	padding: 7px 0px 1px 0px;
	border: 1px solid grey;
	border-radius: 5px;
	background: rgb(255,255,255); /* Old browsers */
	background: -moz-linear-gradgradient(top,  rgba(255,255,255,1) 0%, rgba(229,229,229,1) 100%); /* FF3.6+ */
	background: 	-webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,1)), color-stop(100%,rgba(229,229,229,1))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(229,229,229,1) 100%); /* Chrome10+,Safari5.1+ */
	background: 	 -o-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(229,229,229,1) 100%); /* Opera 11.10+ */
	background: 	-ms-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(229,229,229,1) 100%); /* IE10+ */
	background: 		linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(229,229,229,1) 100%); /* W3C */
	
	color: #000;
	font-size: 10px;
	font-weight: 700;	
	text-align: center;
	cursor: pointer;
}
.eshop-item-detailed__add-to-cart-link:hover
{
	opacity: 0.75;
	text-decoration: none;
}
.eshop-item-detailed__subitems-variants
{
	margin-bottom: 10px;
}
.eshop-item-detailed__unavailable
{
	position: absolute;
	visibility: hidden;
	top: 0px;
	box-sizing: border-box;
	text-align: center;
	color: red;
	
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}
.eshop-item-detailed__popup-link
{
	display: block;
}
.eshop-item-detailed__img
{
}
.eshop-item-detailed__img-label
{
	display: block;
	text-align: center;
}
.eshop-item-detailed__digital-name
{
	font-weight: 700;
	display: inline-block;
}
.eshop-item-detailed__digital-size
{
	display: inline-block;
	font-style: italic;
}
.eshop-item-detailed__digital-desc
{
	margin-bottom: 5px;
}
.eshop-item-detailed__sku-name
{
	display: inline-block;
	font-weight: 700;
}
.eshop-item-detailed__sku-value
{
	display: inline-block;
}

/* eshop-item-detailed | custom */

.eshop-item-detailed__add-to-cart-link
{
	font-size: 10px !important;
	line-height: 12px !important;
}
.eshop-item-detailed__other-price-actual
{
	font-size: 13px !important;
	line-height: 16px !important;
}
.eshop-item-detailed__actual-price
{
	font-size: 13px;
	line-height: 16px;
}
.eshop-item-detailed__text-box
{
	display: inline-block;
	max-width: 300px;
}
.eshop-item-detailed__custom-field-name
{
	font-weight: 400;
}
.eshop-item-detailed__custom-field-value
{
	font-weight: 700;
}
.eshop-item-detailed__other-price-caption
{
	font-size: 11px !important;
	margin-top: 10px;
}

/* eshop-item-detailed end */

/* variants start | default */

.variants /* BLOCK | subitems radios */
{
	margin: 2px 0px;
	padding: 5px;
	border: 1px solid #ddd;
	border-radius: 5px;
	background: #f8f8f8; /* Old browsers */

	color: #555;
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;

}
.variants_notavail
{
	background: #fff0f0;

	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
	
	border: 1px solid #fcc;
}
.variants_notavail .variants__header:after
{
	content: attr(title);
	color: #999;
	font-size: 11px;
	margin-left: 6px;
	text-transform: lowercase;
}
.variants__header
{
	padding: 2px 10px;
}
.variants_disabled
{
	color: #ccc;
}
.variants__radio
{
	border: 0px;
}
.variants__label:hover
{
	color: #4490b2;
}
.variants__label_visited
{
	font-weight: 700;
}
.variants__label_value_notset
{
	font-style: italic;
}
.variants__order-num
{
	color: green;
	font-weight: 900;
}
.variants-reset
{
	border: 1px solid #eee;
	padding: 3px;
	background: #fff;
}

/* variants end */

/* price-properties start | default */

.price-properties  /* BLOCK | contains chosen properties of subitem */
{
	margin: 0px;
	color: #555;
}
.price-properties:after
{
	content: ".";
	display: block;
	height: 0;
	clear: both;
	visibility: hidden;
}
.price-properties__header /* "your choice is:" */
{
	font-weight: 700;
	margin-bottom: 10px;
}
.price-properties__property /* "color" */
{
	float: left;
	width: 49%;
	padding: 0px;
	color: #555;
	font-size: 12px;
}
.price-properties__value /* "green" */
{
	float: left;
	width: 49%;
	padding: 0px;
	color: #555;
	font-size: 12px;
}
.price-properties__value_disabled
{
	color: #ccc;
}

/* price-properties end */

/* pager start | default */

.pager
{
	float: none;
	clear: both;
	text-align: right;
}

/* pager end */

/* sorter start | default */

.sorter /* BLOCK | contains links like "sort by price" */
{
	float: left;
	padding: 5px 15px;
	border: 1px solid #ccc;
	border-radius: 5px;
	font-size: 12px;
}
.sorter__link
{
	font-size: 12px;
}
.sorter__item
{
	margin: 0px 4px;
	font-size: 12px;
}
.sorter__item_type_off
{
}
.sorter__item_type_asc
{
	padding-left: 12px;
	font-weight: 700;
	background: url("data:image/gif;base64,R0lGODlhCwALAIABAAAAAP///yH5BAEAAAEALAAAAAALAAsAAAIPjI+py43QgFyypoqd3qYAADs=") no-repeat;
	background-position: left center;
}
.sorter__item_type_desc
{
	padding-left: 12px;
	background: url("data:image/gif;base64,R0lGODlhCwALAIABAAAAAP///yH5BAEAAAEALAAAAAALAAsAAAIPjI+pyx0AI0hyqtis2/wUADs=") no-repeat;
	background-position: left center;
	font-weight: 700;
}

/* sorter | custom */

.sorter__link
{
	font-size: 14px;
}
.sorter__item
{
	font-size: 14px;
}

/* sorter end */

/* category-path start | default */

.category-path /* BLOCK | contains string of categories */
{
}
.category-path__link::after
{
	content: "";
	display: inline-block;
	width: 0px;
	height: 0px;
	border: 5px solid transparent;
	border-left: 5px solid #ccc;
	margin-left: 5px;
}

/* category-path | custom */

.category-path
{
	display: none;
}

/* category-path end */

/* eshop-cat-list start | default */

.eshop-cat-list /* BLOCK | list of categories with description */
{
	display: block;
	text-align: justify;
	word-spacing: -4px;
}

/* eshop-cat-list end */

/* eshop-cat-small start | default */

.eshop-cat-small /* BLOCK | category item */
{
	display: inline-block;
	margin-bottom: 15px;
	min-width: 130px;
	word-spacing: normal;
	word-spacing: 0;
	text-align: center;
	vertical-align: top;
}
.eshop-cat-small__content /* centered the content of item */
{
	min-width: 150px;
	text-align: left;
}
.eshop-cat-small__name
{
	font-weight: 700;
}
.eshop-cat-small__category-data
{
	display: inline-block;
	vertical-align: top;
	padding-right: 20px;
}
.eshop-cat-small__subcategory-list
{
	display: inline-block;
	min-width: 100px;
	margin-top: 12px;
	vertical-align: top;
}

/* eshop-cat-small | custom */

.eshop-cat-small__category-data
{
	margin: 7px 0px 15px 0px;
}
.eshop-cat-small__name
{
	font-size: 18px !important;
	font-weight: 400;
}

/* eshop-cat-small end */

/* eshop-cat-detailed start | default */

.eshop-cat-detailed__description
{
	display: block;
}
.eshop-cat-detailed__description::after
{
	content: "";
	display: block;
	width: 100%;
	height: 0px;
	clear: both;
}
.eshop-cat-detailed__splitter
{
	display: inline;
	width: 2px;
	height: 2px;
	background: #000;
}
.eshop-cat-detailed__description-image
{
	float: left;
}
.eshop-cat-detailed__description::after
{
	content: "";
	display: block;
	clear: both;
}

/* eshop-cat-detailed end */

/* rating start | default */

.rating /* BLOCK | rating */
{
	color: #323232;
	font-family:Tahoma;
}
.rating__submit
{
	height: 25px;
	margin-top: 10px;
	padding: 0;
	width: 75px;
	border: 1px solid #3e8702;
	border-radius: 3px;
	background: #72b51b;
	background:    -moz-linear-gradient(top, #8bbc21 0%, #72b51b 61%, #44890c 100%);
	background: -webkit-linear-gradient(top, #8bbc21 0%, #72b51b 61%, #44890c 100%);
	background: 	 -o-linear-gradient(top, #8bbc21 0%, #72b51b 61%, #44890c 100%);
	background: 		linear-gradient(top, #8bbc21 0%, #72b51b 61%, #44890c 100%);
	color: #fff;
	font-weight: bold;
	box-shadow: 0px 0px 2px #f0f0f0 inset;
	cursor: pointer;
}
.rating__select
{
	width: 157px;
	margin-top: 20px;
}
.rating__caption
{
	font-size: 14px;
}

.rating_type_item-detailed /* MODIFIER | rating for eshop-item-detailed */
{
	position:relative;
	margin-top: 15px;
	border-radius: 2px;
	padding: 0px;
	width: 167px;
	height: 107px;
}

.rating_type_item-small /* MODIFIER | rating for eshop-item-small */
{
}

/* rating | custom */

.rating__radio:nth-of-type(n)
{
	display: none;
}
.rating__radio-label
{
	display: inline-block;
	padding: 0px;
	margin: 0px -1px 0px 0px;
	border: 0px;
	background: transparent;
}
.rating__radio-text
{
	display: inline-block;
	
	padding: 4px 10px;
	border: 1px solid #000;
	border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
	border-radius: 0px;
	background-color: #f5f5f5;
    background-image: -moz-linear-gradient(center top , #fff, #e6e6e6);
	background-image: -webkit-linear-gradient(top , #fff, #e6e6e6);
	background-image: -o-linear-gradient(top , #fff, #e6e6e6);
	box-shadow: 0px 1px 0px rgba(255, 255, 255, 0.2) inset, 0px 1px 2px rgba(0, 0, 0, 0.05);
	text-shadow: 0px 1px 1px rgba(255, 255, 255, 0.75);
	font-size: 13px;
	line-height: 18px;
	vertical-align: middle;
	user-select: none;
	-moz-user-select: none;
	-webkit-user-select: none;
	-o-user-select: none;
}
.rating__radio-text:hover
{
	background-image: none;
	transition: background 0.1s linear 0s;
	-moz-transition: background 0.1s linear 0s;
	-webkit-transition: background 0.1s linear 0s;
	-o-transition: background 0.1s linear 0s;
}
.rating__radio-label:first-of-type .rating__radio-text
{
	border-radius: 4px 0px 0px 4px;
}
.rating__radio-label:last-of-type .rating__radio-text
{
	border-radius: 0px 4px 4px 0px;
}
.rating__radio:checked ~ .rating__radio-text
{
	background-image: none;
	box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.15) inset, 0px 1px 2px rgba(0, 0, 0, 0.05) inset;
}
.rating__radio-text_mark_0
{
	background: #f00;
}

/* rating end */

/* letters start | default */

.letters
{
	border: 1px solid #ccc;
	border-radius: 5px;
	padding: 5px 15px;
}
.letters__item
{
	display: inline-block;
	text-decoration: none;
	font-weight: 700;
}
.letters__item:hover
{
	text-decoration: underline;
}
.letters__item_type_noitems
{
	color: #ccc;
}
.letters__item_type_selected
{
	color: #000;
}
.letters__count
{
	color: #999;
	font-weight: 400;
	font-size: 10px;
}
.letters__splitter
{
	
}

/* letters end */

/* image-tape start | default */

.image-tape
{
	position: relative;
	overflow: hidden;
}
.image-tape__clipper
{
	position: relative;
	overflow: hidden;
}
.image-tape__container
{
	transition:			0.5s ease-out;
	-moz-transition:	0.5s ease-out;
	-webkit-transition: 0.5s ease-out;
	-o-transition: 		0.5s ease-out;
	text-align: justify;
}
.image-tape__item
{
	display: inline-block;
	padding: 0px;
	text-align: center;
}
.image-tape__img
{
	margin: 10px;
}

/* image-tape end */


/* new type_slideshow animation here. see imagetape_slideshow.tpl */

.image-tape{
	position:relative;
	overflow:hidden;
}
.image-tape__clipper{
	position:relative;
	overflow:hidden;
}
.image-tape__container{
	transition:			0.5s ease-out;
	-moz-transition:	0.5s ease-out;
	-webkit-transition:0.5s ease-out;
	-o-transition:		0.5s ease-out;
	text-align:justify;
}
.image-tape__item{
	display:inline-block;
	padding:0px;
	text-align:center;
}
.image-tape__img{
	margin:10px;
}

.image-tape__radio{
	display:none;
}
.image-tape__number{
	display:none;
}

.image-tape_type_slideshow /* MODIFIER */{
	position:relative;
	display:inline-block;
} 
.image-tape_type_slideshow .image-tape__img{
	margin:0px;
}
.image-tape_type_slideshow .image-tape__radio{
	display:none;
}
.image-tape_type_slideshow .image-tape__number{
	position:relative;
	/*bottom:10px;*/
	display:inline-block;
	z-index:2;
	width:26px;
	height:20px;
	
	border:1px solid #ccc;
	border-color:#e6e6e6 #e6e6e6 #bfbfbf;
	border-radius:4px;
	background:#f5f5f5;
	text-align:center;
	cursor:pointer;
	font:14px/20px arial, tahoma, verdana;
	color:#333;
	text-shadow:0 1px 1px rgba(255, 255, 255, 0.75);
}
.image-tape_type_slideshow .image-tape__number:hover{
	background:#e6e6e6;
}
.image-tape_type_slideshow .image-tape__number-list{
	position:absolute;
	bottom:15px;
	right:15px;
	z-index:11;
}
.image-tape_type_slideshow .image-tape__item{
	opacity:1.0;
	position:relative;
}
.image-tape_type_slideshow .image-tape__item ~ .image-tape__item{
	position:absolute;
	top:0px;
	left:0px;
	opacity:0.0;
}
.image-tape_type_slideshow .image-tape__radio:nth-of-type(1):checked ~ .image-tape__number-list .image-tape__number:nth-of-type(1),
.image-tape_type_slideshow .image-tape__radio:nth-of-type(2):checked ~ .image-tape__number-list .image-tape__number:nth-of-type(2),
.image-tape_type_slideshow .image-tape__radio:nth-of-type(3):checked ~ .image-tape__number-list .image-tape__number:nth-of-type(3),
.image-tape_type_slideshow .image-tape__radio:nth-of-type(4):checked ~ .image-tape__number-list .image-tape__number:nth-of-type(4),
.image-tape_type_slideshow .image-tape__radio:nth-of-type(5):checked ~ .image-tape__number-list .image-tape__number:nth-of-type(5){
	background:#333;
	color:#fff;
}
.image-tape_type_slideshow .image-tape__radio:checked ~ .image-tape__item{
	opacity:0.0;
}
.image-tape_type_slideshow .image-tape__radio:nth-of-type(1):checked ~ .image-tape__item:nth-of-type(1),
.image-tape_type_slideshow .image-tape__radio:nth-of-type(2):checked ~ .image-tape__item:nth-of-type(2),
.image-tape_type_slideshow .image-tape__radio:nth-of-type(3):checked ~ .image-tape__item:nth-of-type(3),
.image-tape_type_slideshow .image-tape__radio:nth-of-type(4):checked ~ .image-tape__item:nth-of-type(4),
.image-tape_type_slideshow .image-tape__radio:nth-of-type(5):checked ~ .image-tape__item:nth-of-type(5){
	opacity:1.0;
	z-index:6;
}
.image-tape_type_slideshow .image-tape__number-after{
	position:absolute;
	display:block;
	top:1px;
	left:0px;
	width:26px;
	height:20px;
	position:absolute;
	border-radius:4px;
	margin:0px;
	opacity:0.0;
	color:#fff;
	background:#333;
}

/* type_slideshow animation was here. see imagetape_slideshow.tpl */



/* eshop-cat-tree start | default */

.eshop-cat-tree
{
	clear: both;
	display: block;
	margin: 0px;
	padding: 0px;
	border: 1px solid rgba(0, 0, 0, 0.05);
	border-radius: 4px;
	list-style-type: none;
	list-style: none;
}
.eshop-cat-tree:after
{
	content: "";
	display: table;
	clear: both;
}
.eshop-cat-tree__item
{
	position: relative;
	display: block;
	line-height: 18px;
}
.eshop-cat-tree__item-link
{
	display: block;
	padding: 3px 15px;
	text-decoration: none;
}
.eshop-cat-tree__item-link:before
{
	content: "";
	display: inline-block;
	width: 7px;
	height: 5px;
	margin-right: 3px;
	vertical-align: middle;	
	background: url("data:image/gif;base64,R0lGODlhBwAFAIABADR9ov///yH5BAEAAAEALAAAAAAHAAUAAAIIjGEJq8v3VCoAOw==") no-repeat;
}
.eshop-cat-tree__item-link:hover
{
	background: #eee;
}
.eshop-cat-tree__item-link_type_selected, .eshop-cat-tree__item-link_type_selected:visited
{
	color: #fff;
	background: #08c;
	text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.2);
}
.eshop-cat-tree__item-link_type_selected:hover
{
	color: #fff;
	background: #08c;
	text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.2);
}
.eshop-cat-tree__item-name
{
	text-decoration: underline;
}
.eshop-cat-tree__item-link:hover .eshop-cat-tree__item-name
{
	text-decoration: none;
}
.eshop-cat-tree__small-picture
{
	display: none;
}

.eshop-cat-tree_level_1 /* MODIFIER | list level 1 */
{
	border: 0px;
	box-shadow: none;
}
.eshop-cat-tree_level_1 .eshop-cat-tree__item-link
{
	padding-left: 5px;
}

.eshop-cat-tree_level_2 /* MODIFIER | list level 2 */
{
	border: 0px;
	box-shadow: none;
}
.eshop-cat-tree_level_2 .eshop-cat-tree__item-link
{
	padding-left: 15px;
}

.eshop-cat-tree_level_3 /* MODIFIER | list level 3 */
{
	border: 0px;
	box-shadow: none;
}
.eshop-cat-tree_level_3 .eshop-cat-tree__item-link
{
	padding-left: 25px;
}

.eshop-cat-tree_level_4 /* MODIFIER | list level 4 */
{
	border: 0px;
	box-shadow: none;
}
.eshop-cat-tree_level_4 .eshop-cat-tree__item-link
{
	padding-left: 35px;
}

.eshop-cat-tree_type_horizontal /* MODIFIER | horizontal bar */
{
	border: 0px;
	box-shadow: none;
}
.eshop-cat-tree_type_horizontal .eshop-cat-tree
{
	border: 0px;
	box-shadow: none;
}
.eshop-cat-tree_type_horizontal .eshop-cat-tree__item
{
	disp lay: inline-block;
	float: left;
	padding: 0px;
	border: 1px solid rgba(0, 0, 0, 0.1);
	border-right: none;
	border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
	border-radius: 0px;
	background-color: #f5f5f5;
    background-image: -moz-linear-gradient(center top , #fff, #e6e6e6);
	background-image: -webkit-linear-gradient(top , #fff, #e6e6e6);
	background-image: -o-linear-gradient(top , #fff, #e6e6e6);
	text-shadow: 0px 1px 1px rgba(255, 255, 255, 0.75);
	font-size: 13px;
	line-height: 18px;
	vertical-align: middle;
}
.eshop-cat-tree_type_horizontal .eshop-cat-tree__item-link
{
	padding: 7px 20px;
	background: none;
}
.eshop-cat-tree_type_horizontal .eshop-cat-tree__item-link:before
{
	display: none;
}
.eshop-cat-tree_type_horizontal .eshop-cat-tree__item-link:hover
{
	background: #eee;
}
.eshop-cat-tree_type_horizontal .eshop-cat-tree__item:first-of-type
{
	border-radius: 4px 0px 0px 4px;
}
.eshop-cat-tree_type_horizontal .eshop-cat-tree__item:last-of-type
{
	border-radius: 0px 4px 4px 0px;
	border-right: 1px solid rgba(0, 0, 0, 0.1);
}
.eshop-cat-tree_type_horizontal .eshop-cat-tree_level_2
{
	position: absolute;
	left: 0px;
	top: 32px;
	width: 200px;
	z-index: 1;
	visibility: hidden;
	opacity: 0.0;
	background-color: #f5f5f5;
    background-image: -moz-linear-gradient(center top , #fff, #f3f3f3);
	background-image: -webkit-linear-gradient(top , #fff, #f3f3f3);
	background-image: -o-linear-gradient(top , #fff, #f3f3f3);
	transition: opacity 0.3s ease-out 0s;
	-moz-transition: opacity 0.3s ease-out 0s;
	-webkit-transition: opacity 0.3s ease-out 0s;
	-o-transition: opacity 0.3s ease-out 0s;
}
.eshop-cat-tree_type_horizontal .eshop-cat-tree__item:hover .eshop-cat-tree_level_2
{
	visibility: visible;
	opacity: 1.0;
}
.eshop-cat-tree_type_horizontal .eshop-cat-tree__item .eshop-cat-tree_level_2:hover
{
	visibility: visible;
	opacity: 1.0;
}
.eshop-cat-tree_type_horizontal .eshop-cat-tree_level_2 .eshop-cat-tree__item
{
	display: block;
	float: none;
	padding: 0px;
	border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
	border-radius: 0px;
	background: none;
	border: 0px;
	text-shadow: 0px 1px 1px rgba(255, 255, 255, 0.75);
	font-size: 13px;
	line-height: 18px;
	vertical-align: middle;
}
.eshop-cat-tree_type_horizontal .eshop-cat-tree_level_2 .eshop-cat-tree__item-link
{
	background: #f3f3ff;
}
.eshop-cat-tree_type_horizontal .eshop-cat-tree_level_2 .eshop-cat-tree__item-link:hover
{
	background: #ddf;
}
.eshop-cat-tree_type_horizontal .eshop-cat-tree_level_3 .eshop-cat-tree__item-link
{
	padding-left: 35px;
	background: none;
}
.eshop-cat-tree_type_horizontal .eshop-cat-tree_level_3 .eshop-cat-tree__item-link:hover
{
	background: #eee;
}
.eshop-cat-tree_type_horizontal .eshop-cat-tree_level_4 .eshop-cat-tree__item-link
{
	padding-left: 50px;
}

*+html .eshop-cat-tree_type_horizontal .eshop-cat-tree__item
{
	position: static;
}
*+html .eshop-cat-tree_type_horizontal .eshop-cat-tree__item:hover .eshop-cat-tree_level_2
{
	display: block;
}
*+html .eshop-cat-tree_type_horizontal .eshop-cat-tree__item .eshop-cat-tree_level_2:hover
{
	display: block;
}
*+html .eshop-cat-tree_type_horizontal .eshop-cat-tree_level_2 /* ie7 hack */
{
	display: none;
}
*+html .eshop-cat-tree_type_horizontal .eshop-cat-tree__item-link
{
	background: #eee;
}
*+html .eshop-cat-tree_type_horizontal .eshop-cat-tree_level_2
{
	top: auto;
	left: auto;
}

/* eshop-cat-tree | custom */

.eshop-cat-tree
{
	margin-top: 12px;
	padding: 10px;
	background: white url("data:image/gif;base64,R0lGODlhAQC9AMQAAPPz8+/v7/T09Pf39/Ly8vX19fHx8fj4+Pn5+fb29vDw8Orq6u7u7vv7+/z8/O3t7fr6+uzs7P39/evr6/7+/v///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAAAAAAALAAAAAABAL0AAAVO4CKO4mSeqBmtbPu8MMzMNB3ceKDs/G78QANhSCQAjkiAYMkUFJ7QQmJKnQ6u2MFhy90ivuAvZEwmN85otGPNZkve8LiEQq/b65W8Xh8CADs=") repeat-x 0px 0px;
	border: 1px dashed #aeaeae;
	border-radius: 0px;
}
.eshop-cat-tree .eshop-cat-tree
{
	background: none;
	border: none;
	margin-top: 0px;
	padding: 0px;
}
.eshop-cat-tree__item
{
	margin: 0px;
	padding: 0px;
	background: none;
}
.eshop-cat-tree__item-link:hover
{
	text-decoration: none;
}
.eshop-cat-tree__item-link_type_selected, .eshop-cat-tree__item-link_type_selected:visited, .eshop-cat-tree__item-link_type_selected:hover
{
	background: none;
	text-shadow: none;
	cursor: default;
}
.eshop-cat-tree__item-link_type_selected .eshop-cat-tree__item-link
{
	cursor: default;
}
.eshop-cat-tree__item-link_type_selected .eshop-cat-tree__item-name
{
	color: #000;
	text-decoration: none !important;
}
.eshop-cat-tree__item-link_type_selected .eshop-cat-tree__item-name:hover
{
	color: #000;
	text-decoration: underline;
}
.eshop-cat-tree__item-link:hover .eshop-cat-tree__item-name
{
	text-decoration: underline;
}
.eshop-cat-tree__item-link:before
{
	display: none;
}
.eshop-cat-tree__item-link:hover
{
	background: none;
}
.eshop-cat-tree__item-name
{
	color: #d92e09;
	font-size: 14px;
}
.eshop-cat-tree_level_1 .eshop-cat-tree__item-link
{
	padding: 6px 0px;
}
.eshop-cat-tree_level_2 .eshop-cat-tree__item-link
{
	padding: 6px 0px;
}
.eshop-cat-tree_level_3 .eshop-cat-tree__item-link
{
	padding: 6px 0px;
}
.eshop-cat-tree_level_4 .eshop-cat-tree__item-link
{
	padding: 6px 0px;
}

/* eshop-cat-tree end */

#ami_private_messages_popup .form {background: #fff;padding: 0;}
#ami_private_messages_popup textarea, #ami_private_messages_popup .amiroTEdDivPreview {width: 575px !important;}
#ami_private_messages_popup input {margin-right: 13px;}

/* Start hyper modules: news and articles */

.news_item-list__list, .articles_item-list__list, .articles_item-cat-list, .news_item-small, .articles_item-small {
    position: relative;
    width: 100%;
    font-size: 0;
}

.news_item-list__list div, .articles_item-list__list div, .articles_item-cat-list div, .news_item-small div, .articles_item-small div {
    font-size: 13px;
}

.news_item-list__cat-header h1, .news_item-detailed__header h1, .articles_item-list__cat-header h1, .articles_item-detailed__header h1 {
    margin-bottom: 20px;
    padding-bottom: 0;
}

.news_item-row, .articles_item-row, .articles_item-cat-row, .news_item-small-row, .articles_item-small-row {
    display: inline-block;
    vertical-align: top;
    margin-bottom: 35px;
}

span.news_item-row__fdate, span.articles_item-row__fdate, span.news_item-small__fdate, span.articles_item-small__fdate {
    float: left;
    font-size: 18px;
    padding-right: 7px;
    padding-top: 1px;
}

.articles_item-small-row .articles_item-small__fdate {
    padding-top: 3px;
}

div.news_item-row__header, div.articles_item-row__header, div.articles_item-small-row__cat_header, div.news_item-small-row__cat_header, div.news_item-small-row__header, div.articles_item-small-row__header {
    margin-bottom: 15px;
    padding-right: 30px;  
}

a.news_item-row__header-name, a.articles_item-row__header-name, a.articles_item-list__cat-header, .news_item-small-row__cat_header a, .articles_item-small-row__cat_header a, .news_item-small-row__header a, .articles_item-small-row__header a {
    font-size: 19px;
    text-decoration: underline;
}

a.news_item-row__header-name:hover, a.articles_item-row__header-name:hover, a.articles_item-list__cat-header:hover, .news_item-small-row__cat_header a:hover, .articles_item-small-row__cat_header a:hover, .news_item-small-row__header a:hover, .articles_item-small-row__header a:hover {
    text-decoration: none;
}

.news_item-row__img_small-img, .articles_item-row__img_small-img, .articles_item-row__cat_img_small-img, .articles_item-small-row__img, .news_item-small-row__img {
    border: 1px solid #CCCCCC;
    float: left;
    margin-right: 15px;
}

.news_item-row__announce, .articles_item-row__announce, .articles_item-cat-row__announce, .news_item-small-row__announce, .articles_item-small-row__announce, .articles_item-small-row__announce, .news_item-small-row__announce {
    margin-bottom: 10px;
    padding-right: 30px;
}

.news_item-detailed__item-details, .articles_item-detailed__item-details {
    display: inline-block;
    width: 100%;
}

.news_item-detailed__fdate, .articles_item-detailed__fdate, .news_item-small-row__cat_header, .articles_item-small-row__cat_header {
    margin-bottom: 15px;
    margin-right: 6px;
    display: inline-block;
}

.news_item-detailed__img, .articles_item-detailed__img {
    float: left;
    margin-right: 20px;
    text-align: center;
}

.news_item-detailed__img img, .articles_item-detailed__img img {
    border: 1px solid #CCCCCC;
}

.news_item-detailed__body, .articles_item-detailed__body, div.articles_item-cat-row__header {
    margin-bottom: 10px;   
}

.articles_item-list__item-list {
    display: inline-block;
    width: 100%;
}

.articles_item-list__cat-img {
    float: left;
    margin-bottom: 20px;
}

.articles_item-row__source, .articles_item-row__author, .articles_item-detailed__source, .articles_item-detailed__author {
    display: inline-block;
    margin-bottom: 5px;
    padding-right: 5px;
    font-size: 12px;
}

.articles_item-small-row__cat_header a, .articles_item-small-row__cat_header {
    color: #666;
}

.articles_item-small-row__cat_header span {
    font-size: 22px;
}

div.articles_item-cat-row__header {
    margin-bottom: 20px;
}

.news_item-detailed__img, .articles_item-list__cat-img, .articles_item-detailed__img {
    float: right;
    padding-left: 20px;
    margin-bottom: 20px;
}

.news_item-detailed__img  .image_click_news, .articles_item-list__cat-img .image_click_articles, .articles_item-detailed__img .image_click_articles {
    border: none;
}

.articles_item-row__cat_img_small-img, .articles_item-row__cat_img_small-img {
    margin-bottom: 20px;
}

.articles_item-detailed__ext_discussion, .news_item-detailed__ext_discussion, .articles_item-small-row__ext_rating, .news_item-small-row__ext_rating {
    clear: both;
}

.articles_item-small-row__img, .news_item-small-row__img {
    margin-bottom: 10px;
}

.captcha-block {
    margin: 0 auto;
    padding-left: 30px;
    width: 350px;
}

.captcha-block__title, .captcha-block img, .captcha-block__input-txt {
    float: left;
    margin: 10px 0;
}

.captcha-block__title {
    padding-top: 11px;
    padding-right: 15px;
}

.captcha-block img {
    margin-right: 10px;
}

.captcha-block__input-txt input {
    width: 110px;
    margin-top: 9px;
}

.articles_item-detailed__announce, .news_item-detailed__announce {
    padding-bottom: 15px;
}

.ext_common-cf, .ext_rating, .ext_tags, .ext_discussion, .pager_showall {
    padding-bottom: 5px;
}

.articles_item-detailed__social-buttons, .news_item-detailed__social-buttons {
     margin: 15px 0 5px -5px;
}

.pager_item_details .pager__content {
    float: left;
}

.pager__content span, .pager__content a, .pager__content span:hover, .pager__content a:hover {
    padding: 2px 7px;
}

.rating-stars__form {
    line-height: 1;   
}
body .rating-stars__form-block, .rating-stars__form-votes { 
    width: 100px;
    height: 21px;
    display: inline-block;
    vertical-align: top;
    margin: 0;
}
.rating-stars__rate-off {
    color: #ff0000;   
}
.rating-stars__rate-on {
    color: #27DB76;   
}
#lay_body .rating-stars__rate-block {
    font-size: 12px;   
    text-align: left;
    padding-top: 5px;
}
.rating__stars-form {
    padding: 10px 0;   
}

.item-row__rating .rating-stars__form-block, .item-row__rating .rating-stars__rate-block {display: none;}
.item-row__rating .rating__stars-form {
    padding: 0px 0px 0 10px;
    position: relative;
}

/* End hyper modules: news and articles */

.editions-checkbox {
    right: 3px;
    top: 2px;
    position: relative;   
}

.edition-announce {
border-left: 1px solid #D0D0D0;
vertical-align: top; 
text-align: left;
}

.edition-default {
    background: none;
    opacity: 1;
}

.edition-unselected {
    opacity: 0.5;
}

.edition-selected-hover {
background: rgba(188, 255, 186, 0.5);
opacity: 1;
cursor: pointer;
}

.edition-selected {
background: rgba(152, 253, 149, 0.5);
opacity: 1;
cursor: pointer;
}

.edition-compare {
background: rgba(248, 255, 161, 0.5);
}

.edition-selected.edition-selected-hover {
background: rgba(113, 255, 108, 0.5);
}

.edition-compare.edition-selected-hover {
background: rgba(244, 255, 107, 0.5);
}

.editions-title {
    display: none;
    position: fixed;
    z-index: 100;
    top: 0;
    width: 947px;
}

.hint {
    background: #FFEF8F;
    border-radius: 5px;
    text-align: left;
    box-shadow: #CCC 1px 4px 7px;
    padding: 7px 15px;
}

.portfolio-edition__content{
	position:relative;
	overflow:hidden;
}
.portfolio-edition__clipper{
	width:auto;
	position:relative;
	overflow:hidden;
}
.portfolio-edition__container{
	position:relative;
	display:block;
	width:auto;
	margin:0;
	padding:0;
	list-style-type:none;
	text-align:justify;
	word-spacing:-1px;
	font-size:1px;
	transition:left 0.5s ease-out,top 0.5s ease-out;
	-moz-transition:left 0.5s ease-out,top 0.5s ease-out;
	-webkit-transition:left 0.5s ease-out,top 0.5s ease-out;
	-o-transition:left 0.5s ease-out,top 0.5s ease-out;
}
.portfolio-edition__container:after{
	content:"";
	width:100%;
	height:0;
	display:inline-block;
	opacity:0;
}
.portfolio-edition__caption::after{
	content:"";
	display:block;
	width:100%;
	height:0;
	clear:both;
}

.poitfolio-edition__work {
    width: 200px;
}
/* Start hyper modules: news, articles, blog */

.news_item-list__list, .news_item-small, 
.articles_item-list__list, .articles_item-small, .articles_item-cat-list,
.blog_item-list__list, .blog_item-small, .blog_item-cat-list, {
    position: relative;
    width: 100%;
    font-size: 0;
}

.news_item-list__list div, .news_item-small div, 
.articles_item-small div, .articles_item-list__list div, .articles_item-cat-list div, 
.blog_item-small div, .blog_item-list__list div, .blog_item-cat-list div {
    font-size: 13px;
}

.news_item-list__cat-header h1, .news_item-detailed__header h1, 
.articles_item-list__cat-header h1, .articles_item-detailed__header h1,
.blog_item-list__cat-header h1, .blog_item-detailed__header h1 {
    margin-bottom: 20px;
    padding-bottom: 0;
}

.news_item-row, .news_item-small-row 
.articles_item-small-row, .articles_item-row, .articles_item-cat-row,
.blog_item-row, .blog_item-cat-row {
    display: inline-block;
    vertical-align: top;
    margin-bottom: 35px;
}

span.news_item-small__fdate, 
span.articles_item-small__fdate,
span.blog_item-small__fdate {
    float: left;
    font-size: 14px;
    padding-right: 7px;
    padding-top: 1px;
}

span.news_item-row__fdate,
span.articles_item-row__fdate,
span.blog_item-row__fdate {
    float: right;
    padding-right: 7px;
    position: relative;
    top: 6px;
}

span.news_item-row__ftime, 
span.articles_item-row__ftime, 
span.blog_item-row__ftime {
    float: right;
    position: relative;
    top: 6px;
}

span.news_item-detailed__ftime,
span.blog_item-detailed__ftime,
span.articles_item-detailed__ftime {
    float: right;
    padding-right: 7px;
    position: relative;
    top: 15px;
}

span.news_item-detailed__fdate,
span.blog_item-detailed__fdate,
span.articles_item-detailed__fdate {
    float: right;
    position: relative;
    top: 15px;
}

.news_item-detailed__header-name,
.blog_item-detailed__header-name,
.articles_item-detailed__header-name {
    float: left;
    width: 100%;
}

.news_item-detailed__description,
.blog_item-detailed__description,
.articles_item-detailed__description {
    clear: both;
}

span.articles_item-small-row__cat_header {margin-bottom: 3px;}

.articles_item-detailed__fdate-block .articles_item-detailed__fdate,
.articles_item-row__fdate-block .articles_item-row__fdate {
    float: none;
    top: 0;
    padding: 0;
    margin-right: 0;
}

.news_item-small-row__cat_header a, .news_item-small-row__header a,
.articles_item-small-row__cat_header a, .articles_item-small-row__header a,
.blog_item-small-row__cat_header a, .blog_item-small-row__header a {
    font-size: 15px;
    text-decoration: underline;
}

div.news_item-row__header, div.news_item-small-row__cat_header, div.news_item-small-row__header, 
div.articles_item-small-row__header, div.articles_item-row__header, div.articles_item-small-row__cat_header, 
div.blog_item-small-row__header, div.blog_item-row__header, div.blog_item-small-row__cat_header {
    margin-bottom: 15px;
    padding-right: 30px;  
}

a.news_item-row__header-name, 
a.articles_item-row__header-name, a.articles_item-list__cat-header,
a.blog_item-row__header-name, a.blog_item-list__cat-header {
    font-size: 20px;
    text-decoration: underline;
}

a.news_item-row__header-name:hover, .news_item-small-row__cat_header a:hover, .news_item-small-row__header a:hover,
a.articles_item-row__header-name:hover, a.articles_item-list__cat-header:hover, .articles_item-small-row__cat_header a:hover, .articles_item-small-row__header a:hover,
a.blog_item-row__header-name:hover, a.blog_item-list__cat-header:hover, .blog_item-small-row__cat_header a:hover, .blog_item-small-row__header a:hover {
    /*text-decoration: none;*/
}

.news_item-row__img_small-img, .news_item-small-row__img,
.articles_item-row__img_small-img, .articles_item-row__cat_img_small-img, .articles_item-small-row__img, 
.blog_item-row__img_small-img, .blog_item-row__cat_img_small-img, .blog_item-small-row__img {
    border: 1px solid #CCCCCC;
    float: left;
    margin-right: 15px;
}

.news_item-row__announce, .news_item-small-row__announce, .articles_item-small-row__announce, .news_item-small-row__announce,
.articles_item-row__announce, .articles_item-cat-row__announce, .articles_item-small-row__announce,
.blog_item-row__announce, .blog_item-cat-row__announce, .blog_item-small-row__announce {
    margin-bottom: 10px;
    padding-right: 30px;
}

.news_item-detailed__item-details, 
.articles_item-detailed__item-details,
.blog_item-detailed__item-details {
    display: inline-block;
    width: 100%;
}

.news_item-detailed__fdate, .news_item-small-row__cat_header, 
.articles_item-small-row__cat_header, .articles_item-detailed__fdate,
.blog_item-small-row__cat_header, .blog_item-detailed__fdate {
    margin-bottom: 15px;
    margin-right: 6px;
    display: inline-block;
}

.news_item-detailed__img, 
.articles_item-detailed__img,
.blog_item-detailed__img {
    float: left;
    margin-right: 20px;
    text-align: center;
}

.news_item-detailed__img img, 
.articles_item-detailed__img img,
.blog_item-detailed__img img {
    border: 1px solid #CCCCCC;
}

.news_item-detailed__body, 
.articles_item-detailed__body, div.articles_item-cat-row__header,
.blog_item-detailed__body, div.blog_item-cat-row__header {
    margin-bottom: 10px;   
}

.news_browse-item-row,
.articles_browse-item-row,
.blog_browse-item-row {
    display: inline-block;
    vertical-align: top;
    padding-bottom: 20px;
}

.news_browse-item-list,
.articles_browse-item-list,
.blog_browse-item-list {
    font-size: 0;
    padding-top: 20px;
}

.news_browse-item-list div,
.articles_browse-item-list div,
.blog_browse-item-list div {
    font-size: 12px;
}

.news_browse-item-list .news_item-row__header-name,
.articles_browse-item-list .articles_item-row__header-name,
.blog_browse-item-list .blog_item-row__header-name {
    font-size: 14px;
}

.news_browse-item-list .news_item-row__announce,
.articles_browse-item-list .articles_item-row__announce,
.blog_browse-item-list .blog_item-row__announce {
    margin-right: 30px;
    overflow: hidden;
    padding: 15px 0 0;
}

.news_browse-item-list__pager,
.articles_browse-item-list__pager,
.blog_browse-item-list__pager {
    padding: 15px 0;
}

.news_item-detailed__nav,
.articles_item-detailed__nav,
.blog_item-detailed__nav {
    padding: 20px 0;
    text-align: right;
}

.articles_item-list__item-list,
.blog_item-list__item-list {
    display: inline-block;
    width: 100%;
}

.articles_item-list__cat-img,
.blog_item-list__cat-img {
    float: left;
    margin-bottom: 20px;
}

.articles_item-row__source, .articles_item-row__author, .articles_item-detailed__source, .articles_item-detailed__author,
.blog_item-row__source, .blog_item-row__author, .blog_item-detailed__source, .blog_item-detailed__author {
    display: inline-block;
    margin-bottom: 5px;
    padding-right: 5px;
}

.articles_item-small-row__cat_header a, .articles_item-small-row__cat_header,
.blog_item-small-row__cat_header a, .blog_item-small-row__cat_header {
    color: #666;
}

.articles_item-small-row__cat_header span, .blog_item-small-row__cat_header span {
    display: inline-block;
    font-size: 22px;
    padding: 0 2px;
    position: relative;
    width: 20px;
}

div.articles_item-cat-row__header,
div.blog_item-cat-row__header {
    margin-bottom: 20px;
}

.news_item-detailed__img, 
.articles_item-list__cat-img, .articles_item-detailed__img,
.blog_item-list__cat-img, .blog_item-detailed__img {
    float: right;
    padding-left: 20px;
    margin-bottom: 20px;
}

.news_item-detailed__img .image_click_news, 
.articles_item-list__cat-img .image_click_articles, .articles_item-detailed__img .image_click_articles,
.blog_item-list__cat-img .image_click_articles, .blog_item-detailed__img .image_click_articles {
    border: none;
}

.photoalbum_control-panel__comments,
.news_control-panel__comments,
.articles_control-panel__comments,
.blog_control-panel__comments {
    width: 12px;
}

.photoalbum_item-small-row__control-panel,
.articles_item-small-row__control-panel,
.news_item-small-row__control-panel,
.blog_item-small-row__control-panel {
    float: left;
    padding-bottom: 20px;
    position: relative;
    width: 100%;
}

.photoalbum_item-small img,
.photoalbum_item-small-row__block {
    max-width: 200px;
    height: auto;
    margin: 0 auto;
}

.photoalbum_item-small-row__control-panel__discussion,
.articles_item-small-row__control-panel__discussion,
.news_item-small-row__control-panel__discussion,
.blog_item-small-row__control-panel__discussion,
.photoalbum_item-small-row__control-panel__votes-rate,
.articles_item-small-row__control-panel__votes-rate,
.news_item-small-row__control-panel__votes-rate,
.blog_item-small-row__control-panel__votes-rate {
    height: 12px;
    font-size: 11px !important;
    padding-left: 23px;
    padding-top: 4px;
    width: 12px;
    float: none;
    cursor: pointer;
}

.photoalbum_item-small-row__control-panel__discussion,
.photoalbum_item-small-row__control-panel__votes-rate {
    float: right;
}

.photoalbum_item-small-row__control-panel__discussion,
.articles_item-small-row__control-panel__discussion,
.news_item-small-row__control-panel__discussion,
.blog_item-small-row__control-panel__discussion {
    background: url("_img/comments_black__small.png") no-repeat 3px 4px;
}

.photoalbum_item-small-row__control-panel__votes-rate,
.articles_item-small-row__control-panel__votes-rate,
.news_item-small-row__control-panel__votes-rate,
.blog_item-small-row__control-panel__votes-rate {
    background: url("_img/like_hand_black__small.png") no-repeat 3px 4px;
}

.articles_item-row__cat_img_small-img, .articles_item-row__cat_img_small-img,
.blog_item-row__cat_img_small-img, .blog_item-row__cat_img_small-img {
    margin-bottom: 20px;
}

.news_item-detailed__ext_discussion, .news_item-small-row__ext_rating,
.articles_item-detailed__ext_discussion, .articles_item-small-row__ext_rating,
.blog_item-detailed__ext_discussion, .blog_item-small-row__ext_rating {
    clear: both;
}

.news_item-small-row__img,
.articles_item-small-row__img,
.blog_item-small-row__img {
    margin-bottom: 10px;
}

.captcha-block {
    margin: 0 auto;
    padding-left: 30px;
    width: 350px;
}

.captcha-block__title, .captcha-block img, .captcha-block__input-txt {
    float: left;
    margin: 10px 0;
}

.captcha-block__title {
    padding-top: 11px;
    padding-right: 15px;
}

.captcha-block img {
    margin-right: 10px;
}

.captcha-block__input-txt input {
    width: 110px;
    margin-top: 9px;
}

.news_item-detailed__announce,
.articles_item-detailed__announce,
.blog_item-detailed__announce {
    padding-bottom: 15px;
clear: both;
}

.ext_common-cf, .ext_rating, .ext_tags, .ext_discussion, .pager_showall {
    padding-bottom: 5px;
    float: right;
}

.ext_tags {
    float: left;
    padding: 0;
}

.ext_discussion.photoalbum_item-detailed__ext_discussion,
.blog_item-detailed__ext_discussion,
.articles_item-detailed__ext_discussion,
.news_item-detailed__ext_discussion {
    float: none;
}

.photoalbum_item-detailed__header-name,
.photoalbum_item-detailed__header-name {
    text-align: center;
}

.news_item-detailed__social-buttons,
.articles_item-detailed__social-buttons,
.blog_item-detailed__social-buttons {
     margin: 15px 0 5px -5px;
}

.articles_control-panel__comments,
.news_control-panel__comments,
.blog_control-panel__comments {
    background: url("_img/comments_black.png") no-repeat scroll 0 0 rgba(0, 0, 0, 0);
    display: block;
    height: 20px;
    margin: 0;
    opacity: 0.8;
    padding-left: 23px;
    float: right;
    text-decoration: none;
    line-height: 1;
}
.rss_extension {opacity: 0.8;}
.articles_control-panel__comments:hover,
.news_control-panel__comments:hover,
.blog_control-panel__comments:hover,
.rss_extension:hover  {
    opacity: 1;
    text-decoration: none !important;
}
.articles_control-panel__comments-count,
.news_control-panel__comments-count,
.blog_control-panel__comments-count  {
    position: relative; 
    top: 4px; 
    font-size: 11px !important; 
    text-decoration: none; 
    color: #000;
}
.articles_control-panel__comments:hover,
.news_control-panel__comments:hover,
.blog _control-panel__comments:hover {
    text-decoration: none !important;
}
.articles_social-btn,
.news_social-btn,
.blog_social-btn  {
    font-size: 0;
    height: 20px;
    float: right;
    margin: 0;
    padding-top: 3px;
    width: 25px;
    overflow: hidden;
padding-right: 9px;
}
.articles_item-detailed__item-details .b-share__link,
.articles_item-detailed__item-details .b-share .b-share-form-button i,
.news_item-detailed__item-details .b-share__link,
.news_item-detailed__item-details .b-share .b-share-form-button i,
.blog_item-detailed__item-details .b-share__link,
.blog_item-detailed__item-details .b-share .b-share-form-button i  {
    display: none !important;
}
/*
.articles_item-detailed__item-details .b-share, 
.articles_item-detailed__item-details .b-share__handle,
.articles .b-share-form-button,
.news_item-detailed__item-details .b-share,
.news_item-detailed__item-details .b-share__handle,
.news .b-share-form-button,
.blog_item-detailed__item-details .b-share,
.blog_item-detailed__item-details .b-share__handle,
.blog .b-share-form-button  {
    padding: 0 !important;
    margin: 0 !important;
}
*/
.articles_item-detailed__item-details .b-share .b-share-form-button,
.news_item-detailed__item-details .b-share .b-share-form-button,
.blog_item-detailed__item-details .b-share .b-share-form-button  {
    cursor: pointer; 
    width: 20px; 
    background: url("_img/social_btn_black.png") no-repeat left !important;
}

.pager_item_details .pager__content {
    float: left;
}

.pager__content span, .pager__content a, .pager__content span:hover, .pager__content a:hover {
    padding: 2px 7px;
}

div.sort {
    height: 40px;
}

div.sort_caption,
div.sort_field,
div.sort_field_caption,
div.sort_field_separator,
div.sort_dir {
    float: left;
}

div.sort_field_active {
}

div.sort_field_caption {
    padding-left: 6px;
}

div.sort_field_separator {
    padding-left: 6px;
    border-right: 1px dotted black;
}

div.sort_field_active div.sort_field_caption {
    font-weight: bold;
}

div.sort_dir {
    padding-left: 8px;
}

.articles_item-small a, .articles_item-small span, 
.news_item-small a, .news_item-small span, 
.blog_item-small a, .blog_item-small span, 
.photoalbum_item-small a, .photoalbum_item-small span {
    font-size: 12px;
}

/* End hyper modules: news, articles, blog */

/* Start module sort */

.sort-type {
    display: block;
    height: 40px;
    line-height: 1.8;
    width: 100%;
}
.sort-type__area {
    float: right;   
}
.sort-type__field, .sort-type__caption, .sort-type__selectarea {
    float: left;
}
.sort-type__field-caption {
    padding: 0;
    margin: 0 8px;
}
.sort-type__field-selected {
    font-weight: bold;
}
.sort-type__selectarea {
    margin-left: 5px;
}

/* End module sort */

/* Start Rating Stars Oneblock */

.rating-stars__form {
    line-height: 1;   
}
body .rating-stars__form-block, .rating-stars__form-votes { 
    width: 100px;
    height: 21px;
    display: inline-block;
    vertical-align: top;
    margin: 0;
}
.rating-stars__rate-off {
    color: #ff0000;   
}
.rating-stars__rate-on {
    color: #21C268;   
}
.rating-stars__rate-block {
    font-size: 12px;   
    text-align: left;
    padding-top: 5px;
}
.rating__stars-form {
    padding: 10px 0;   
}

/* End Rating Stars Oneblock */

/* Start Rating Like */

.rating__like-form {
    clear: both;
    height: 20px;
    line-height: 1;
    position: relative;
}

.rating-like__form-popup {
    background: none repeat scroll 0 0 #000000;
    border-radius: 5px 5px 5px 5px;
    box-shadow: 0 0 3px #FFFFFF;
    color: #FFFFFF;
    padding: 3px 10px;
    position: absolute;
    right: 0;
    top: -35px;
    width: 120px;
}

.rating-like__form-popup__txt {
    font-size: 11px !important;
}

.rating-like__form-popup .rating-like__form-popup__arrow {
    background: url(_img/icon-dec-sel.gif) no-repeat;
    display: block;
    height: 11px;
    position: absolute;
    right: 10px;
    bottom: -7px;
    width: 11px;
}
    
.like__ajax-loader {
    background: url(_img/ami_jsapi/loader-mini__white.gif) #fff center no-repeat;
    position: absolute;
    top: 3px;
    left: 3px;
    width: 15px;
    height: 15px;
    border-radius: 5px;
}
    
.amiphotoalbum .like__ajax-loader {
	background: url(_img/ami_jsapi/loader-mini__black.gif) center no-repeat;
}

.rating-like__form-block {
    cursor: pointer; 
    padding: 4px 2px;
    position: relative;
    left: -3px;
    top: -3px;
    border-radius: 3px;
    opacity: 0.8;
}
.rating-like__form-block__like-count {
    padding-left: 0;
    position: relative;
    top: 3px;
    font-size: 11px !important;
}
.rating-like__form-block:hover {opacity: 1;}
.rating-like__form-block__like, .rating-like__form-block__like-count, .rating-like__form-block {float: left;}
.rating-like__form-block__like {
    background: url("_img/rating/like/like_hand_black.png") no-repeat scroll left center transparent;
    font-size: 0 !important;
    height: 16px;
    padding-right: 20px;
}
.rating-like__form-block-off {opacity: 0.5;}
.rating-like__form-block-off:hover {background: none;cursor: default; opacity: 0.5;}
.rating-like__form-block,
.rating-like__form-block:hover,
.rating-like__form-block:hover .rating-like__form-block__like-count {
    color: #000; 
    background: none;
}

/* End Rating Like */

/* Start Rating Stars Oneblock */

.rating-stars__form {
    line-height: 1;   
}
body .rating-stars__form-block, .rating-stars__form-votes { 
    width: 100px;
    height: 21px;
    display: inline-block;
    vertical-align: top;
    margin: 0;
}
.rating-stars__rate-off {
    color: #ff0000;   
}
.rating-stars__rate-on {
    color: #21C268;   
}
.rating-stars__rate-block {
    font-size: 12px;   
    text-align: left;
    padding-top: 5px;
}
.rating__stars-form {
    padding: 10px 0;   
}
.rating-stars__rate-on {
    color: #21C268;
}

/* End Rating Stars Oneblock */

/* Start Photoalbum 6.0 */

.photoalbum_control-panel__comments {
    background: url("_img/comments_black.png") no-repeat;
    display: block;
    height: 20px;
    margin: 0;
    opacity: 0.8;
    padding-left: 20px;
    float: right;
    text-decoration: none;
    line-height: 1;
    padding-right: 3px;
} 
.photoalbum_control-panel__comments:hover  {
    opacity: 1;
    text-decoration: none !important;
}
.photoalbum_control-panel__comments-count  {
    position: relative; 
    top: 4px; 
    font-size: 11px !important; 
    text-decoration: none; 
    color: #000;
}

.browse-item-list {position: relative;}

.amiphotoalbum .amiphoto-hide, 
.amiphotoalbum.photoalbum_item .browse-item-list__hide, .browse-item-list__hide-block {
    z-index: 3; 
    position: absolute; 
    background: url(_img/ami_jsapi/loader.gif) no-repeat center 20% #FFFFFF; 
    width: 100%; 
    height: 100%; 
    top: 0; 
    left: 0;
}

.amiphotoalbum .photoalbum_item-detail__block .amiphoto-hide {
    background: url(_img/ami_jsapi/loader-black.gif) no-repeat center 20% #000; 
}

.amiphoto-block {
    font-size: 0;
    overflow: hidden;
    position: relative;
}

.amiphotoalbum .amiphoto-block__row-item {
    display: inline-block;
    font-size: 12px;
    vertical-align: top;
    overflow: hidden;
    position: relative;
} 
.amiphotoalbum .amiphoto-block__row-item__contant {
	display: block;
	overflow: hidden;
    border: 2px solid #fff;
}
.amiphotoalbum .amiphoto-block__row {
    width: 200%;
}
.amiphotoalbum .amiphoto-block__row-item__img {position: relative; cursor: pointer;}
.amiphotoalbum .photoalbum_item-detail__block .photoalbum_item-detailed__next-link__area, 
.amiphotoalbum .photoalbum_item-detail__block .photoalbum_item-detailed__prev-link__area {
    display: block;
    height: 53px;
    padding: 0;
    width: 32px;
    opacity: 0.6;
    position: absolute;
    top: 45%;
    cursor: pointer;
    display: block;
    z-index: 1;
}
.amiphotoalbum .photoalbum_item-detail__block .photoalbum_item-detail__fullscreen {width: 20px; background: url("_img/full_screen.png") no-repeat; position: absolute; width: 20px; height: 20px; cursor: pointer; right: 5px; top: 29px;}
.amiphotoalbum .photoalbum_item-detailed__next-link {display: block; left: -50px; position: absolute; top: 0; width: 50%; height: 100%;}
.amiphotoalbum .photoalbum_item-detailed__prev-link {display: block; right: -50px; position: absolute; top: 0; width: 50%; height: 100%;}
.amiphotoalbum .photoalbum_item-detailed__next-link__area {border-radius: 0 30px 30px 0; background: url("_img/slider-pad__arrow-left.jpg") no-repeat left 9px #FFFFFF;}
.amiphotoalbum .photoalbum_item-detailed__prev-link__area {right: 0; border-radius: 30px 0 0 30px; background: url("_img/slider-pad__arrow-right.jpg") no-repeat right 9px #FFFFFF; }
.amiphotoalbum .photoalbum_item-list__list, 
.amiphotoalbum .photoalbum_item-cat-list, 
.amiphotoalbum .photoalbum_browse-item-list__list, 
.amiphotoalbum .photoalbum_item-detail__block {
	font-size: 0;
}
.amiphotoalbum .photoalbum_item-list__list .amiphoto-block__row div, 
.amiphotoalbum .photoalbum_item-cat-list .amiphoto-block__row div, 
.amiphotoalbum .photoalbum_browse-item-list__list .amiphoto-block__row div {
	font-size: 12px;
}
.amiphotoalbum .photoalbum_item-detail__block div {font-size: 13px; text-align: left;}
.amiphotoalbum .photoalbum_item-detailed__item-details .photoalbum_control-panel__comments-count {color: #FFF;position: relative;top: 5px;font-size: 12px;}
.amiphotoalbum .photoalbum_item-detail__header span {font-size: 14px; display: block;}
.amiphotoalbum .photoalbum_item-detailed__item-details .photoalbum_item-detailed__ext_rating {float: left;}
.amiphotoalbum .photoalbum_item-detailed__item-details .rating__stars-form {padding: 0 10px 0 0;}
.amiphotoalbum .photoalbum_item-detailed__item-details .rating-stars__rate-block {display: none;}
.amiphotoalbum .photoalbum_item-detailed__item-details .photoalbum_social-btn {
    font-size: 0;
    height: 20px;
    float: left;
    padding: 0 0 0 3px;
    margin: 0;
}
.amiphotoalbum .photoalbum_item-detailed__item-details .b-share__link,
.amiphotoalbum .photoalbum_item-detailed__item-details .b-share .b-share-form-button i {
    display: none !important;
}
.amiphotoalbum .photoalbum_item-detailed__item-details .b-share, 
.amiphotoalbum .photoalbum_item-detailed__item-details .b-share__handle,
.amiphotoalbum .b-share-form-button {
    padding: 0 !important;
    margin: 0 !important;
}
.amiphotoalbum .photoalbum_item-detailed__item-details .b-share .b-share-form-button {cursor: pointer; width: 20px; background: url("_img/social_btn.png") no-repeat center !important;}
.amiphotoalbum .photoalbum_item-detail__header__txt-link {font-weight: normal; font-size: 16px; padding: 5px;position: relative; display: block;}
.amiphotoalbum .photoalbum_item-detail__header__txt-link a {font-weight: normal;}
.amiphotoalbum .photoalbum_item-row__item_cat_img-img, 
.amiphotoalbum .photoalbum_item-detail__item_cat_img-img {
	display: none;
}
.amiphotoalbum .photoalbum_item-list__cat-body {padding-bottom: 20px;}
.amiphotoalbum .fullscreen-img__on .photoalbum_item-detailed__next-link,
.amiphotoalbum .fullscreen-img__on .photoalbum_item-detailed__prev-link,
.amiphotoalbum .fullscreen-img__on .photoalbum_item-detail__announce-block {    
    -webkit-transition:all 0s ease-in-out;
    -moz-transition:all 0s ease-in-out;
    -o-transition:all 0s ease-in-out;
    transition:all 0s ease-in-out;
}
.amiphotoalbum .photoalbum_item-detailed__item-details {position: relative; z-index: 4;}
.amiphotoalbum .photoalbum_item-row__announce-block, 
.amiphotoalbum .photoalbum_item-row__header,
.amiphotoalbum .photoalbum_item-detail__announce-block, 
.amiphotoalbum .photoalbum_item-detail__header,
.amiphotoalbum .photoalbum_item-detailed__next-link, 
.amiphotoalbum .photoalbum_item-detailed__prev-link,
.amiphotoalbum .photoalbum_item-detailed__next-link__area, 
.amiphotoalbum .photoalbum_item-detailed__prev-link__area {
	-webkit-transition:all 0.5s ease-in-out;
    -moz-transition:all 0.5s ease-in-out;
    -o-transition:all 0.5s ease-in-out;
    transition:all 0.5s ease-in-out;
    overflow: hidden;
}
.amiphotoalbum .cat-row__images-block__slider {
	-webkit-transition:left 3s ease;
    -moz-transition:left 3s ease;
    -o-transition:left 3s ease;
    transition:left 3s ease;
    overflow: hidden;
}
.amiphotoalbum .cat-row__images-block__slider img {position: absolute; left: 50%; top: 0; opacity: 0; filter: alpha(opacity=0)}
.amiphotoalbum .cat-row__images-block__slider img.show {opacity: 1; filter: alpha(opacity=100)}
.amiphotoalbum .cat-row__images-block__slider {position: relative; width: 100%; height: 100%;background: #000; text-align: center;}
.amiphotoalbum .cat-row__images-block:hover .cat-row__images-block__slider {}
.amiphotoalbum .photoalbum_item-row__fdate {bottom: 0;position: absolute;right: 5px;top: 35px;}
.amiphotoalbum .photoalbum_item-detailed__fdate {
    padding: 2px 5px;
    position: absolute;
    right: 5px;
    top: 30px;
}
.amiphotoalbum .photoalbum_item-row__header-name-block {
    display: block;
    margin-right: 93px;
    overflow: hidden;
    position: relative;
    white-space: nowrap;
}
.photoalbum_item-detailed__path a, 
.photoalbum_item-list__cat-header h1 a, 
.photoalbum_item-list__cat-header h1, 
.photoalbum_item-list__cat-list h1, 
.photoalbum_item-detailed__path {
    color: #000 !important; 
    font-size: 19px; 
    font-weight: normal !important;
}
.amiphotoalbum .photoalbum_item-detailed__path {padding-bottom: 25px;}
.amiphotoalbum .photoalbum_item-detail__img {position: relative;}
.amiphotoalbum .photoalbum_item-cat-list .photoalbum_item-row__header {height: 57px;}
.amiphotoalbum .photoalbum_item-cat-list .photoalbum_item-row__header a {font-size: 15px;}
.amiphotoalbum .photoalbum_item-cat-list .photoalbum_item-row__announce-block {height: 25px;}
.amiphotoalbum .photoalbum_item-cat-list .photoalbum_item-row__block:hover .photoalbum_item-row__announce-block {height: 55px;}
.amiphotoalbum .photoalbum_item-row__block:hover .photoalbum_control-panel, 
.amiphotoalbum .photoalbum_item-detail__block:hover .photoalbum_control-panel {
    opacity: 1;
}
.amiphotoalbum .photoalbum_item-detail__block {background: #000; text-align: center;}
.amiphotoalbum .photoalbum_item-row__block, 
.amiphotoalbum .photoalbum_item-detail__block {
    position: relative;
    overflow: hidden;
}
.amiphotoalbum .photoalbum_item-detail__block {border: none;}
.amiphotoalbum .photoalbum_item-row__header, 
.amiphotoalbum .photoalbum_item-detail__header {
    top: 0; position: absolute; left: 0; height: 21px; overflow: hidden;
}
.amiphotoalbum .photoalbum_item-detail__header {height: 25px;}
.amiphotoalbum .photoalbum_item-row__announce-block {height: 28px; position: absolute; left: 0; bottom: 0;}
.amiphotoalbum .photoalbum_item-detail__announce-block .photoalbum_control-panel {top: 5px;}
.amiphotoalbum .photoalbum_item-detail__announce-block {height: 28px; position: absolute; left: 0; bottom: 0;}
.amiphotoalbum .photoalbum_item-row__announce {
    float: none;
    margin-right: 93px;
    overflow: hidden;
    padding-top: 5px;
    position: relative;
    width: auto;
}
.amiphotoalbum .photoalbum_item-row__block:hover .photoalbum_item-row__header,
.amiphotoalbum .photoalbum_item-detail__block:hover .photoalbum_item-detail__header {height: 57px;}
.amiphotoalbum .photoalbum_item-row__block:hover .photoalbum_item-row__announce-block {height: 60px;}
.amiphotoalbum .photoalbum_item-detail__block:hover .photoalbum_item-detail__announce-block {height: 80px;}
.amiphotoalbum .photoalbum_item-detail__block:hover .photoalbum_item-detailed__next-link {left: 0;}
.amiphotoalbum .photoalbum_item-detail__block:hover .photoalbum_item-detailed__prev-link {right: 0;}
.amiphotoalbum .photoalbum_item-detailed__next-link:hover .photoalbum_item-detailed__next-link__area, 
.amiphotoalbum .photoalbum_item-detailed__prev-link:hover .photoalbum_item-detailed__prev-link__area {
    opacity: 1;
}
.amiphotoalbum .photoalbum_item-row__num-items, 
.amiphotoalbum .photoalbum_item-detail__num-items {
    font-style: italic;
}
.amiphotoalbum .photoalbum_item-row__header span {font-size: 11px;display: block;}
.amiphotoalbum .photoalbum_item-row__header a, 
.amiphotoalbum .photoalbum_item-row__announce-block a {
    color: #fff; 
    font-size: 15px;
}
.amiphotoalbum .photoalbum_item-detail__header a {color: #fff; font-size: 14px;}
.amiphotoalbum .photoalbum_item-row, 
.amiphotoalbum .photoalbum_item-cat-row, 
.amiphotoalbum .photoalbum_item-detail {
    overflow: hidden; 
    display: inline-block;
    vertical-align: top;
    min-width: 100px;
}
.amiphotoalbum .browse-item-list .photoalbum_item-row {
    min-width: 150px;
}
.amiphotoalbum .photoalbum_item-row__header, 
.amiphotoalbum .photoalbum_item-row__announce-block,
.amiphotoalbum .photoalbum_item-detail__header, 
.amiphotoalbum .photoalbum_item-detail__announce-block {
    background: rgb(0, 0, 0);
    background: rgba(0, 0, 0, 0.5);
    width: 100%;
    color: #FFF;
}
.amiphotoalbum .photoalbum_item-row__header__txt, 
.amiphotoalbum .photoalbum_item-row__announce-block__txt,
.amiphotoalbum .photoalbum_item-detail__header__txt, 
.amiphotoalbum .photoalbum_item-detail__announce-block__txt {
	padding: 5px 5px;     
}
.amiphotoalbum .photoalbum_item-detail__announce-block__txt {
    display: block;
    margin-right: 140px;
    overflow: hidden;
    position: relative;
}
.amiphotoalbum .fullscreen-img__on .photoalbum_item-detail__block {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 5;
    height: 100% !important;
}
.amiphotoalbum .fullscreen-img__on .photoalbum_item-detailed__next-link {left: 0;}
.amiphotoalbum .fullscreen-img__on .photoalbum_item-detailed__prev-link {right: 0;}
.amiphotoalbum .fullscreen-img__on .photoalbum_item-detail__announce-block {height: 80px;}
.amiphotoalbum.photoalbum_item .browse-item-list {
    position: relative;
    /*height: 80px;*/
    overflow: hidden;
    width: auto;
    overflow: hidden;
    text-align: center;
    padding-top: 2px;
}
.amiphotoalbum.photoalbum_item .browse-item-list__content {
    position: relative;
    overflow: hidden;
}
.amiphotoalbum.photoalbum_item .browse-item-list__clipper {
    width: auto;
    position: relative;
    overflow: hidden;
    left: 0;
}
.amiphotoalbum.photoalbum_item .browse-item-list__container,
.browse-item-list__container {
    position: relative;
    display: block;
    width: auto;
    margin: 0;
    padding: 0;
    font-size: 0 !important;
    transition: left 0.5s ease-out,top 0.5s ease-out;
    -moz-transition: left 0.5s ease-out,top 0.5s ease-out;
    -webkit-transition: left 0.5s ease-out,top 0.5s ease-out;
    -o-transition: left 0.5s ease-out,top 0.5s ease-out;
}
.amiphotoalbum .browse-block__row-item__img {/*width: 50%;*/ cursor: pointer; }
.amiphotoalbum .photoalbum_item-row__browse {/*height: 80px; overflow: hidden; min-width: 100px;*/}
.amiphotoalbum.photoalbum_item .browse-item-list .slider-pad__arrow-left:after, 
.amiphotoalbum.photoalbum_item .browse-item-list .slider-pad__arrow-right:after {
    background: none;
}
.amiphotoalbum.photoalbum_item .browse-item-list .slider-pad__arrow-right, 
.amiphotoalbum.photoalbum_item .browse-item-list .slider-pad__arrow-left {
    width: 32px;
    height: 53px;
    /*top: 18%;
    margin: 0 !important;*/
}
.amiphotoalbum.photoalbum_item .browse-item-list .slider-pad__arrow-right {
    background: #FFF url(_img/slider-pad__arrow-right.jpg) no-repeat 10px 8px;
    border-radius: 30px 0 0 30px;
}
.amiphotoalbum.photoalbum_item .browse-item-list .slider-pad__arrow-left {
    background: #FFF url(_img/slider-pad__arrow-left.jpg) no-repeat left;
    border-radius: 0 30px 30px 0;
}

.amiphotoalbum.photoalbum_item-list__list .photoalbum_control-panel .rating-stars__form-block, 
.amiphotoalbum.photoalbum_item-list__list .photoalbum_control-panel .rating-stars__form-votes {
    width: 62px;
    height: 14px;
}
.amiphotoalbum .photoalbum_item-list__list .photoalbum_control-panel .rating__stars-form {padding: 0;}
.amiphotoalbum .photoalbum_item-list__list .photoalbum_control-panel .rating-stars__rate-block {display: none;}
.amiphotoalbum .photoalbum_item-list__list .photoalbum_control-panel .photoalbum_control-panel__comments-count {position: relative; top: 5px; font-size: 11px; color: #fff;}
.amiphotoalbum .photoalbum_item-list__list .photoalbum_control-panel .photoalbum_item-detailed__ext_rating {float: left;}
.amiphotoalbum .photoalbum_control-panel {
    bottom: -2px;
    opacity: 0.6;
    position: absolute;
    right: 5px;
    top: auto;
}
.amiphotoalbum .photoalbum_control-panel a {padding-bottom: 5px; text-decoration: none; display: block; margin-left: 5px; float: left; height: 20px; padding-left: 22px; cursor: pointer;}
.amiphotoalbum .photoalbum_control-panel a, 
.amiphotoalbum .photoalbum_item-detail__fullscreen {
    opacity: 0.8;
}
.amiphotoalbum .photoalbum_control-panel a:hover, 
.amiphotoalbum .photoalbum_item-detail__fullscreen:hover {text-decoration: none; opacity: 1;}
.amiphotoalbum .photoalbum_control-panel__rating {background: url(_img/photoalbum/rating.png) no-repeat;}
.amiphotoalbum .photoalbum_control-panel__comments {background: url(_img/comments.png) no-repeat; margin: 0 !important;}
.amiphotoalbum a.photoalbum_control-panel__fullscreen {padding-left: 0; width: 20px; background:  url(_img/full_screen.png) no-repeat;}
.amiphotoalbum .fullscreen-img__on a.photoalbum_control-panel__fullscreen {background:  url(_img/full_screen_in.png) no-repeat;}

.photoalbum_item #com_form_bot,
.articles_item #com_form_bot,
.news_item #com_form_bot,
.blog_item #com_form_bot {
    background: none; 
    border: none; 
    padding: 0;
}
.photoalbum_item textarea.amiroTEdCtrl,
.articles_item textarea.amiroTEdCtrl,
.news_item textarea.amiroTEdCtrl,
.blog_item textarea.amiroTEdCtrl {
    border: 1px solid #CCCCCC;
    height: 80px !important;
    padding: 5px;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
.photoalbum_item select.amiroTEdCtrl,
.articles_item select.amiroTEdCtrl,
.news_item select.amiroTEdCtrl,
.blog_item select.amiroTEdCtrl {
    border: 1px solid #CCCCCC;
    margin-top: 3px;
}
.photoalbum_item .amiroTEdDiv,
.articles_item .amiroTEdDiv,
.news_item .amiroTEdDiv,
.blog_item .amiroTEdDiv {
    width: 100% !important;
}
.photoalbum_item #com_form_bot #com_sub,
.articles_item #com_form_bot #com_sub,
.news_item #com_form_bot #com_sub,
.blog_item #com_form_bot #com_sub {
    margin: 0;
    position: relative;
    right: -2px;
    height: 25px;
}
.photoalbum_item #com_preview, 
.photoalbum_item #comment_forum p,
.articles_item #com_preview, 
.articles_item #comment_forum p,
.news_item #com_preview, 
.news_item #comment_forum p,
.blog_item #com_preview, 
.blog_item #comment_forum p {
    display: none;
}
.photoalbum_item #com_form_bot input, 
.photoalbum_item #com_form_bot select,
.articles_item #com_form_bot input, 
.articles_item #com_form_bot select,
.news_item #com_form_bot input, 
.news_item #com_form_bot select,
.blog_item #com_form_bot input, 
.blog_item #com_form_bot select {
    height: auto;
}
.photoalbum_item .discussion_extension__form .alt_header2,
.articles_item .discussion_extension__form .alt_header2,
.news_item .discussion_extension__form .alt_header2,
.blog_item .discussion_extension__form .alt_header2 {
    display: none;
}
.photoalbum_item .discussion_extension__list .alt_header2,
.articles_item .discussion_extension__list .alt_header2,
.news_item .discussion_extension__list .alt_header2,
.blog_item .discussion_extension__list .alt_header2 {
    text-align: center; 
    background: url("_mod_files/ce_images/template_images/line_new.jpg") repeat-x 0 37px; 
}
.photoalbum_item .discussion_extension__list .alt_header2 h2,
.articles_item .discussion_extension__list .alt_header2 h2,
.news_item .discussion_extension__list .alt_header2 h2,
.blog_item .discussion_extension__list .alt_header2 h2 {
    background: #fff !important;
    display: inline-block;
    font-weight: normal;
    padding: 12px 15px !important;
    font-size: 14px !important;
}

.news_item .sort-type,
.photoalbum_item .sort-type {
    display: none;
}

.amiphotoalbum .photoalbum_item-list__subitem-list {display: none;}
.amiphotoalbum a {text-decoration: underline;}
.amiphotoalbum a:hover {text-decoration: none;}
.amiphotoalbum .rating__like-form {
    clear: both;
    float: right;
}
.amiphotoalbum .rating-like__form-block {
    cursor: pointer; 
    padding: 4px 2px;
    position: relative;
    left: -8px;
    top: -3px;
    border-radius: 3px;
    opacity: 0.8;
}
.amiphotoalbum .rating-like__form-block__like-count {
    padding-left: 5px;
    position: relative;
    top: 4px;
    font-size: 11px !important;
}
.amiphotoalbum .rating-like__form-block:hover {opacity: 1;}
.amiphotoalbum .rating-like__form-block__like, .rating-like__form-block__like-count, .rating-like__form-block {float: left; font-family: arial, tahoma, verdana;}
.amiphotoalbum .rating-like__form-block__like {
    background: url("_img/rating/like/like_hand.png") no-repeat scroll left center transparent;
    font-size: 0 !important;
    height: 16px;
    padding-right: 20px;
}
.amiphotoalbum .rating-like__form-block-off {opacity: 0.8;}
.amiphotoalbum .rating-like__form-block-off:hover {background: none;cursor: default; opacity: 0.8;}
.amiphotoalbum .rating-like__form-block,
.amiphotoalbum .rating-like__form-block:hover,
.amiphotoalbum .rating-like__form-block:hover .rating-like__form-block__like-count {
    color: #fff; 
    background: none;
}

.photo-easy-skin .photoalbum_item-row,
.photo-easy-skin .photoalbum_item-cat-row {
    display: inline-block;
    vertical-align: top;
}
.photo-easy-skin .photoalbum_item-list__list__easy,
.photo-easy-skin .photoalbum_item-cat-list__easy {
    font-size: 0 !important;   
}
.photo-easy-skin .photoalbum_item-row div,
.photo-easy-skin .photoalbum_item-cat-row div,
.photo-easy-skin .photoalbum_item-detail__block div {
    font-size: 12px;   
}
.photo-easy-skin .photoalbum_item-detail__block div {
    font-size: 13px;   
}
.photo-easy-skin .photoalbum_item-row__img-area,
.photo-easy-skin .photoalbum_item-detail__img-area {
    display: block;
    margin: 0 auto;
}
.photo-easy-skin .photoalbum_item-row__announce {
    clear: both;
}
.photo-easy-skin .photoalbum_item-detail__image {
    clear: both;
    text-align: center;
}
.photo-easy-skin .photoalbum_item-detail__announce-block__txt {
    clear: both;
    text-align: left;
}
.photo-easy-skin .browse-item-list .photoalbum_item-row {
    min-width: 150px;
    /*height: 150px;*/
    overflow: hidden;
    text-align: center;
}
.photo-easy-skin .browse-item-list .browse-item-list__clipper,
.photo-easy-skin .browse-item-list .browse-item-list__content {
    position: relative;
    overflow: hidden;
    font-size: 0;
}
.photo-easy-skin .photoalbum_item-list__cat-header,
.photo-easy-skin .photoalbum_item-row__header-name {
    font-size: 17px;
}
.photo-easy-skin .photoalbum_item-cat-row__block-header,
.photo-easy-skin .photoalbum_item-row__block-header {
    padding-bottom: 15px;
    text-align: center;
}
.photo-easy-skin .photoalbum_item-cat-row__announce {
    padding: 20px 20px 0 0;
}
.photo-easy-skin .cat-row__images-block {
    display: block;
    text-align: center;
}
.photo-easy-skin .photoalbum_control-panel {
    display: block;
    padding: 10px 0;
}
.photo-easy-skin .photoalbum_item-list__cat-body,
.photo-easy-skin .photoalbum_item-row__block {
    padding: 0 15px 15px;
    display: block;
}
.photo-easy-skin .photoalbum_item-detail__announce-block__txt {
    padding-bottom: 25px;
}

.photo-easy-skin .photoalbum_item-detailed__nav {
    padding: 20px 0;
    text-align: right;
}

.photoalbum_item-small-row__img, .photoalbum_item-small-row__header {
    padding-bottom: 5px;
    text-align: center;
}

.rating__like-form {width: 35px;}

.amiphotoalbum .photoalbum_control-panel__comments,
.amiphotoalbum .rating__like-form {width: auto;}
.pager a {text-decoration: none !important;}

.blog_item-detailed__prev-next {text-align: center;}
.photoalbum_item-detailed__nav a {padding: 0 3px;}

/* End Photoalbum 6.0 */

/* Start added items to cart */

.eshop-item-detailed__price-wrapper,
.eshop-item-detailed__price-box {
    overflow: visible !important;
}

.eshop-item-small__added-items-prop {
    box-shadow: 0 0 10px -2px #000;
    border-radius: 5px;
    display: none;
    position: absolute;
    bottom: 110px;
    right: 0;
    width: 240px;
    background: #fff;
    padding: 10px 20px;
    z-index: 20;
    color: #000;
    font-weight: normal;
    cursor: pointer;
    font-size: 12px;
}
.added-items-prop-list {
    text-align: left;
    height: auto;
    bottom: auto;
    right: auto;
    width: 205px;
}
.eshop-item-small__added-items-prop__title {
    font-weight: bold;
    padding-bottom: 5px;
    margin-bottom: 5px;
    color: #333;
    font-size: 13px;
    border: 0;
}

#cart_items tr {
    -webkit-transition:background 1s ease-in-out;
    -moz-transition:background 1s ease-in-out;
    -o-transition:background 1s ease-in-out;
    transition:background 1s ease-in-out;
}

.cart_items__tr-select {
    background: #D4FDDA;
}

.cart_items__tr {
    background: #fff;
}

.eshop-item-detailed__box .eshop-item-tooltip {
    margin: 0;
    right: 0;
}

.eshop-item-tooltip {
	position: absolute;
    display: none;
    font-size: 11px !important;
    font-weight: normal;
    background: #D4FDDA;
	color: #5c5c5c;
	padding: 1px 0;
	border: 1px solid #e5e5e5;
	border-radius: 5px;
	box-shadow: 0px 2px 0px rgba(0,0,0,0.1);
	text-shadow: 1px 1px 0px rgba(255,255,255,0.4);
	text-align: center;
	font-size: 14px;
    z-index: 1;
    bottom: 30px;
    margin-left: -45px;
    left: 50%;
    cursor: default;
}

.eshop-item-tooltip-area {
    -webkit-transition:all 0.5s ease-in-out;
    -moz-transition:all 0.5s ease-in-out;
    -o-transition:all 0.5s ease-in-out;
    transition:all 0.5s ease-in-out;
    overflow: hidden;
    max-height: 14px;
    width: 90px;
}

.eshop-item-tooltip-title {
    display: block;
    padding: 0 10px;
    text-align: left;
}

.eshop-item-tooltip:hover .eshop-item-tooltip-area  {
    max-height: 100px;
    height: auto;
}

.eshop-item-detailed__prices .eshop-item-tooltip {
    left: auto;
}

.eshop-item-tooltip-prop #properties-items-popup {
    text-align: left;
    display: block;
    padding: 10px;
}

.eshop-item-tooltip-prop .eshop-item-tooltip__btn-cart {
    width: 90px;
}

.eshop-item-tooltip-prop:hover .eshop-item-tooltip-area {
    max-height: 200px;
    height: auto;
    width: 207px;
}

.eshop-item-tooltip-prop #properties-items-popup {
    overflow: hidden;
    width: 200px;
}

.eshop-item-tooltip__btn-cart,
.eshop-item-tooltip__btn-delete {
    cursor: pointer;
    display: block;
    border: 1px solid #DFDFDF;
	background:#FAFAFA;
	background:-moz-linear-gradient(top,#FAFAFA 45%,#e5e5e5 75%);
	background:-webkit-linear-gradient(top,#FAFAFA 45%,#e5e5e5 75%);
	background:-o-linear-gradient(top,#FAFAFA 45%,#e5e5e5 75%);
	background:-ms-linear-gradient(top,#FAFAFA 45%,#e5e5e5 75%);
	background:linear-gradient(top,#FAFAFA 45%,#e5e5e5 75%);
    margin: 4px 8px 2px 8px;
    border-radius: 3px;
}

.eshop-item-tooltip__btn-cart:hover,
.eshop-item-tooltip__btn-delete:hover {
	background:#FAFAFA;
	background:-moz-linear-gradient(top,#fefefe 45%,#f1f1f1 75%);
	background:-webkit-linear-gradient(top,#fefefe 45%,#f1f1f1 75%);
	background:-o-linear-gradient(top,#fefefe 45%,#f1f1f1 75%);
	background:-ms-linear-gradient(top,#fefefe 45%,#f1f1f1 75%);
	background:linear-gradient(top,#fefefe 45%,#f1f1f1 75%);
}

.eshop-item-tooltip:before {
    content: '';
    border-top: 6px solid #DDD;
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    position: absolute;
    left: 35px;
    bottom: -7px;
}
.eshop-item-tooltip:after {
    content: '';
    border-top: 5px solid #CFC;
    border-left: 8px solid transparent;
    border-right: 8px solid transparent;
    position: absolute;
    left: 37px;
    bottom: -5px;
}
/* End added items to cart */

/* Start search page */

.search-page__help {
    background: #F0F0F0;
    padding: 15px;
    border-radius: 10px;
    font-size:11px;
}

.search-page__title {font-weight: bold;}
.search-page__info li {padding: 5px 0;}

/* End search page */

.moneyback {
    background: url("_img/moneyback-stamp.png") no-repeat -24px;
    display: block;
    height: 112px;
    width: 140px;
    cursor: pointer;
    opacity: 0.7;
}

.moneyback:hover {
    opacity: 1;
}

.moneyback-compare {
    right: 0;
    top: -130px;
    position: absolute;
}

.moneyback-index {
    background: none;
    height: auto;
    left: 12px;
    margin: 0;
    position: absolute;
    text-align: center;
    top: 192px;
    width: 110px;
}

.moneyback-index img {
    width: 150px;
    position: relative;
    left: -20px;
}

.moneyback-edition {
    position: absolute;
    right: 40px;
    top: 275px;
    z-index: 1;
    background: none;
    border-radius: 70px;
    height: 110px;
}

.moneyback-edition__white, .moneyback-edition__img {
    position: absolute;
    display: block;
}

.moneyback-edition__white {
    width: 100px;
    height: 105px;
    background: #FFF;
    left: 18px;
    border-radius: 50px;
}

.moneyback-edition__img {
    background: url("_img/moneyback-stamp.png") no-repeat -24px;
    width: 140px;
    height: 110px;
}

/* Start Top Amiro Menu */

body {padding: 40px 0 0;}
.amiro_top_menu {
    position: relative;
        background: url(/_img/layout_top_int_menu.jpg) no-repeat center top;
	left: 0;
        top: 0;
    position: absolute;
    min-width: 100%;
    height: 40px;
    -webkit-box-shadow: 0px 2px 5px 0px rgba(50, 50, 50, 0.2);
    -moz-box-shadow: 0px 2px 5px 0px rgba(50, 50, 50, 0.2);
    box-shadow: 0px 2px 5px 0px rgba(50, 50, 50, 0.2);
        z-index: 100;
}

.amiro_top_menu .amiro_top_menu_splitter {
    background: #9fcdff;
    width: 1px;
    line-height: 40px;
}

.amiro_top_menu > ul {
    display: table;
    padding: 0px;
    margin: 0 auto;
    width: 920px;
    height: 40px;
}

.amiro_top_menu > ul > li a {
    padding: 0 20px;
    white-space: nowrap;
    display: block;
    color: #000;
    font-family: Tahoma, Arial;
    font-size: 16px;
    text-decoration: none;
    text-align: center;
    line-height: 40px;
}

#head_menu_home div {
    background: url("/_img/category/home_black2.png") no-repeat center;
    width: 20px;
}

.amiro_top_menu > ul a:hover {
    color: #FFF;
    background: #4aafdd;
    background: -moz-linear-gradient(top, #4aafdd 1%, #9dd4fd 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,#4aafdd), color-stop(100%,#9dd4fd));
    background: -webkit-linear-gradient(top, #4aafdd 1%,#9dd4fd 100%);
    background: -o-linear-gradient(top, #4aafdd 1%,#9dd4fd 100%);
    background: -ms-linear-gradient(top, #4aafdd 1%,#9dd4fd 100%);
    background: linear-gradient(to bottom, #4aafdd 1%,#9dd4fd 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4aafdd', endColorstr='#9dd4fd',GradientType=0 );
}

.amiro_top_menu li.amiro_top_menu_li_more,
.amiro_top_menu_li_more:hover .amiro_top_menu_more {
    display: block;
    position: relative;
}

.amiro_top_menu_ul_more {
    display: none;
}

.amiro_top_menu_li_more:hover .amiro_top_menu_ul_more {
    display: block;
}

.amiro_top_menu > ul > li {
    display: table-cell;
    padding: 0px;
    margin: 0px;
    background: none;
}

.amiro_top_menu > ul > li > ul {
    position: absolute;
    right: 0px;
}

.amiro_top_menu_more,
.amiro_top_menu a.amiro_top_menu_more:hover {
    color: #FFF !important;
    background: #bb130a;
    background: -moz-linear-gradient(top, #bb130a 0%, #eb4008 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#bb130a), color-stop(100%,#eb4008));
    background: -webkit-linear-gradient(top, #bb130a 0%,#eb4008 100%);
    background: -o-linear-gradient(top, #bb130a 0%,#eb4008 100%);
    background: -ms-linear-gradient(top, #bb130a 0%,#eb4008 100%);
    background: linear-gradient(to bottom, #bb130a 0%,#eb4008 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#bb130a', endColorstr='#eb4008',GradientType=0 );
}

.amiro_top_menu_more > img {
    /*margin: 5px 0px 2px 20px;*/
    position: absolute;
    top: 20px;
    right: 10px; 
}

.amiro_top_menu > ul > li > ul {
    z-index: 1000;
    background: #67bbe9;
    margin: 0px;
    padding: 20px 0 20px 0;
}

.amiro_top_menu > ul > li > ul a {
    line-height: 30px;
    padding: 0 30px 0 30px;
    text-align: left;
    color: #FFF;
}

.amiro_top_menu > ul > li > ul a:hover {
    background: #7cc5f0;
}

.amiro_top_menu > ul > li > ul > li {
    margin: 0px;
    padding: 0px;
    background: none;
}
ul.amiro_top_menu_ul_more .amiro_top_menu_splitter, .amiro_top_mobile_menu .amiro_top_menu_splitter{
width: 100%;
height: 1px;
background: #F0F0F0;
margin: 6px 0;
}

/* End Top Amiro Menu */



/* Start order history
 * @tpl eshop_order_history.tpl
 */

.eshop-order-history-detail__back {
    padding-top: 10px;
}

.eshop-order-history-list__id-status {
    display: none;
    color: #A6A6A6;
    font-size: 12px;
}

@media screen and (max-width: 750px) {
    .eshop-order-history-list__name,
    .eshop-order-history-list__owners,
    .eshop-order-history-list__comments,
    .eshop-order-history-list__status,
    .eshop-order-history-list__image,
    .eshop-order-history-list__per-discount,
    .eshop-order-history-list__abs-discount,
    .eshop-order-history-list__price {
        display: none;
    }

    .eshop-order-history-list__view {
        width: 54px;
    }

    .eshop-order-history-detail .eshop-order-history-list__name {
        display: table-cell;
    }
    
    div.eshop-order-history-list__id-status {
        display: block;
    }

    table.eshop-order-history-list td,
    table.eshop-order-history-list tr {
        font-size: 100%;
    }
}

/* End order history
 * @tpl eshop_order_history.tpl
 */

/* Start eshop properties table style
 * @tpl _eshop_item_list.tpl
 */
.ami-eshop-properties__wrapper-table .eshop-item-tooltip-prop {display: none !important;}
.ami-eshop-properties__wrapper-table .ami-eshop-properties__wrapper-table-tr__1 .eshop-item-tooltip-prop {display: block !important;}

.ami-eshop-properties__wrapper-table td,
.ami-eshop-properties__wrapper-table th {
    padding: 6px 12px;
    border: 1px solid #A7A7A7;
    vertical-align: middle;
}

.ami-eshop-properties__wrapper-table .eshop-item-detailed__actual-price {
    font-size: 16px;
}

.ami-eshop-properties__wrapper-table .eshop-item-detailed__price-tag {
    float: left;
    background: none;
    padding: 0;
    top: 6px;
    position: relative;
    min-height: 10px;
}

.ami-eshop-properties__wrapper-table .eshop-item-detailed__cart-box_base {
    padding: 2px 12px;
    float: right;
    margin-left: 10px;
}

.ami-eshop-properties__wrapper-table th {
	background:#fadf71;
	background-color:#fff376;
	background-repeat:repeat-x;
	background-image:-moz-linear-gradient(top,#fff376,#f9d968);
	background-image:-ms-linear-gradient(top,#fff376,#f9d968);
	background-image:-webkit-linear-gradient(top,#fff376,#f9d968);
	background-image:-o-linear-gradient(top,#fff376,#f9d968);
	background-image:linear-gradient(top,#fff376,#f9d968);
}
/* Start eshop properties table style
 * @tpl _eshop_item_list.tpl
 */

/*
 * FILE END: _mod_files/_css/common.css
 */

/*
 * FILE START: _mod_files/_css/ami_custom.css
 */

/* CUSTOM GLOBAL STYLES */

.doc_link_o {
    position: relative;
    z-index: 1;
}

/* test ver 2 */

.image-tape_type_slideshow .image-tape__item{
	transition:opacity 0.0s linear 0.2s;
	-moz-transition:opacity 0.0s linear 0.2s;
	-webkit-transition:opacity 0.0s linear 0.2s;
	-o-transition:opacity 0.0s linear 0.2s;
}
.image-tape_type_slideshow .image-tape__number{
	height:27px;
	border:0px;
	border-radius:0px;
	font:14px/29px arial,tahoma,verdana;
	transition:all 0.1s linear;
	-moz-transition:all 0.1s linear;
	-webkit-transition:all 0.1s linear;
	-o-transition:all 0.1s linear;
	background:transparent url(_img/image-tape__number.png) no-repeat;
}
.image-tape_type_slideshow .image-tape__number:hover{
	background:transparent url(_img/image-tape__number.png) no-repeat;
}
.image-tape_type_slideshow .image-tape__radio:nth-of-type(1):checked ~ .image-tape__item:nth-of-type(1),
.image-tape_type_slideshow .image-tape__radio:nth-of-type(2):checked ~ .image-tape__item:nth-of-type(2),
.image-tape_type_slideshow .image-tape__radio:nth-of-type(3):checked ~ .image-tape__item:nth-of-type(3),
.image-tape_type_slideshow .image-tape__radio:nth-of-type(4):checked ~ .image-tape__item:nth-of-type(4),
.image-tape_type_slideshow .image-tape__radio:nth-of-type(5):checked ~ .image-tape__item:nth-of-type(5){
	opacity:1.0;
	transition:opacity 0.2s linear;
	-moz-transition:opacity 0.2s linear;
	-webkit-transition:opacity 0.2s linear;
	-o-transition:opacity 0.2s linear;
	z-index:6;
}
.image-tape_type_slideshow .image-tape__radio:nth-of-type(1):checked ~ .image-tape__number-list .image-tape__number:nth-of-type(1),
.image-tape_type_slideshow .image-tape__radio:nth-of-type(2):checked ~ .image-tape__number-list .image-tape__number:nth-of-type(2),
.image-tape_type_slideshow .image-tape__radio:nth-of-type(3):checked ~ .image-tape__number-list .image-tape__number:nth-of-type(3),
.image-tape_type_slideshow .image-tape__radio:nth-of-type(4):checked ~ .image-tape__number-list .image-tape__number:nth-of-type(4),
.image-tape_type_slideshow .image-tape__radio:nth-of-type(5):checked ~ .image-tape__number-list .image-tape__number:nth-of-type(5){
	background:transparent url(_img/image-tape__number_sel.png);
	transition:opacity 0.2s linear;
	-moz-transition:opacity 0.2s linear;
	-webkit-transition:opacity 0.2s linear;
	-o-transition:opacity 0.2s linear;
}
.image-tape_type_slideshow .image-tape__number_state_checked,
.image-tape_type_slideshow .image-tape__number_state_checked:hover,
.image-tape_type_slideshow .image-tape__number-after{
	top:0px;
	height:27px;
	border-radius:0px;
	background:transparent url(_img/image-tape__number_sel.png);
}

.image-tape_type_slideshow .image-tape__number_state_checked{
	background:transparent;
}

.image-tape__number-after {
    line-height: 26px !important;
}




#free_design_close, #free_design, #paid_design_close, #paid_design {
	transition: 0.6s;
	-moz-transition: 0.6s;
	-webkit-transition: 0.6s;
	-o-transition: 0.6s;
}

#free_design, #paid_design {
	border: 1px solid #F5F5F5;
	border-radius: 10px;
	box-shadow: 0 0px 30px -3px gray;
	position: absolute;
	z-index: 1;
	background: #fff;
	overflow: auto;
}

#free_design {
	padding: 50px 15px 20px 20px;
	width: 710px;
	height: 400px;
	margin-left: -50px;
	margin-top: -131px;
}

#paid_design{
	padding: 50px 5px 5px 5px;
	overflow:hidden;
	width: 720px;
	height: 600px;
	margin-left: -70px;
	margin-top: -131px;
}

#paid_design IFRAME{
	width:100%;
	height:100%;
	border:0px;
}

#free_design_close, #paid_design_close {
	background: none repeat scroll 0 0 #FFFFFF;
	height: 35px;
	margin-top: -130px;
	padding-top: 15px;
	position: absolute;
	text-align: right;
	width: 710px;
	z-index: 2;
	margin-left: -50px;
}

#paid_design_close{
	width: 700px;
	margin-left: -50px;
}

#free_design_block_img img, #paid_design_block_img img {
	border: 1px solid #ccc;
	margin-top: 15px;
}


/* END Order Page Design Block */

/* Start Amiro Bottom Menu */
div#int_layout {background: #7AB3ED; height: auto;}
.sm_tree_bottom li {background: none; margin: 0; padding-left: 0;}
.sm_tree_bottom li a, .support_help span, .mobile_version a {color: #fff; opacity: 1;}
.sm_tree_bottom li a:hover, .support_help:hover, .mobile_version a:hover {opacity: 0.8;}
.sm_tree_bottom {float: left; padding: 103px 40px 20px 0; margin: 0;}
#lay_f4 {text-align: left; padding: 0; position: relative;}
#lay_f4 hr {margin: 10px 0 20px; background: #fff; clear: both;}
.copywrite_amiro {color: #fff; margin-bottom: 10px;margin-right: -150px;float: left;}
.mobile_version {height: 26px; float: right; margin-top: 10px;}
.mobile_version a {color: #fff;}

.social_button_bottom {
    float: right;
    margin-top: 7px;
    margin-right: 12px;
    width: 750px;
}

.telephone_block_bottom {
    right: 20px;
    position: absolute;
    top: 142px;
    z-index: 5;
}

.telephone_number_bottom, .support_help {color: #fff;}
.telephone_number_bottom {font-size: 40px;}
.support_help {margin-top: 10px;}
.support_help span {border-bottom: 1px dashed #fff; font-size: 41px; cursor: pointer;}
.sm_tree_bottom li:first-child {font-size: 18px;}

.int_layout_footer, #int_layout {
    float: left;
    height: auto;
    margin-top: 0;
    position: relative;
    width: 100%;
}
.bottom_tree_menu {
    padding: 50px 40px 20px 0;
    float: left;
}

.bottom_tree_menu .main-menu_type_dropdown .main-menu_level_1 {
    opacity: 1;
    visibility: visible;
}

.bottom_tree_menu .main-menu_type_dropdown .main-menu__item_level_0 > .main-menu__item-link {
    font-size: 18px;   
}

.bottom_tree_menu .main-menu_type_dropdown .main-menu__item_level_0 {
    background: none;
}

.bottom_tree_menu .main-menu_type_dropdown .main-menu_level_1 {
    background: none repeat scroll 0 0 transparent;
    border: medium none;
    padding: 0;
}

.bottom_tree_menu .main-menu_level_1 .main-menu__item-link:hover {
    background: none;   
}

.bottom_tree_menu a.main-menu__item-link:hover {
    opacity: 0.7;
    color: #fff;
    text-decoration: underline;
    padding: 5px 0;
}

.bottom_tree_menu a.main-menu__item-link {
    color: #fff;
    opacity: 1;
    text-decoration: underline;
    padding: 5px 0;
}

.bottom_tree_menu .main-menu_type_dropdown .main-menu_level_1, .bottom_tree_menu .main-menu_type_dropdown .main-menu__item_level_0 {
    width: 130px;
}

.main-menu__item {
    font-size: 12px;
    float: left;
    padding: 0;
    margin: 0;
    width: 100%;
}

.main-menu {
    list-style-type: none;
    list-style: none;
    font-family: Arial;
}

.main-menu_type_dropdown .main-menu__item_level_0 {
    background: url(//amiro.ru/_img/arrow_down.gif) no-repeat scroll right 13px;
    margin-right: 20px;
    padding: 0 12px 0 0;
    height: 30px;
}

.bot_block {
    overflow: hidden;
    width: 1000px;
}

.main-menu{
    display:block;
    margin:0;
    padding:0;
    list-style-type:none;
    list-style:none;
    font-family:Arial;
}

.main-menu__item-link{
	display:block;
	text-decoration:none;
}

.main-menu_type_dropdown .main-menu_level_1{
	position:absolute;
	z-index:1000;
	visibility:hidden;
	opacity:0.0;
	background: none repeat scroll 0 0 #A0D5FF;
    border: 2px solid #FFFFFF;
    overflow: hidden;
    padding: 5px 10px 6px;
    white-space: normal;
    margin-top: 11px;
}

.main-menu__item li.main-menu__item_level_1 {
    background: none;
    /*width: 148px;*/
    float: none;
    clear: both;
}
    
.bottom_tree_menu .main-menu_level_0 ul, .bottom_tree_menu .main-menu_type_dropdown .main-menu__item_level_0 {
    height: auto;
    position: relative;
}

.ue-tab-container {margin-top: 195px;}
#left_form_bot, #center_form_bot, #right_form_bot {height: 8px;}
#zapros {top: -5px;}

#vk_subscribe iframe {
border: 1px solid #ADBCCB;
height: 20px;
border-radius: 0 3px 3px 0;
}

.social_footer {
    display: block;
    padding: 0px;
    margin: 0px;
    text-align: center;
}

.social_footer li {
    display: inline-block;
    padding: 0px;
    margin: 0px;
    background: none;
}

.social_footer a {
    display: inline-block;
    margin: 0px 15px 0px 0px;
    background: #4267b2;
    height: 40px;
    width: 40px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
    line-height: 45px;
    text-align: center;
    vertical-align: middle;
}

.social_footer i {
    color: #fff;
    font-size: 20px;
}
/* End Amiro Bottom Menu */

/* Start NewPack Style */

.cms_module_fichs {margin: 0;}

.cms_module_fichs h3 {margin-top: 20px;}

.cms_module_fichs_block {
        border-right: 1px solid #ddd;
        float: left;
        margin-right: 20px;
        padding-right: 15px;
        width: 27%;
        margin-bottom: 30px;
}

.cms_module_fichs_block div {       
        font-size: 12px !important;
}

.cms_module_fichs_block a {
        font-size: 12px;
        display: block;
        line-height: 2;
}

.cms_module_block {}
.cms_module_info {width: 27%; float: left; margin-right: 35px;}
.cms_module_img {float: left; width: 50px; margin-right: 10px;}
.cms_module_img1 {float: left; width: 40px; margin-right: 10px;}
.cms_module_announce {width: 195px; float: left; margin-bottom: 15px; font-size: 12px;}
.cms_module_announce p {font-size: 12px !important;}
.cms_module_info h3 {font-size: 14px; margin: 0; font-weight: bold;}

/* End NewPack Style */

body #int_layout {float: none; overflow: hidden; clear: both;}
body #lay_f4 { width: 960px; padding: 20px;}




/* CUSTOM GLOBAL STYLES */

.site_type_area td {
  max-width: none !important;
}

td.width_row_builder_price_selected,
td.width_row_builder_price:hover {
	border: none !important;
}

.width_row_builder_price > div {
  height: 40px;
}

img.sm_block_min_img {
      border: 1px solid #E0E0E0;
}

img.sm_block_min_img:hover {
    box-shadow: 0 0 10px 0px #909090;
	border: 1px solid #fff;
}

td.width_row_builder_price_selected > img {
  box-shadow: 0 0 10px 3px #5ABCF7;
  border: 1px solid #FFF;
}

td.width_row_builder_price_selected > img:hover {
  box-shadow: 0 0 10px 3px #5ABCF7;
  border: 1px solid #FFF;
}

.items_block_price_builder img {
	max-width: 80px;
  	max-height:80px;
}

img.sm_block_min_img {
  border: 1px solid #E0E0E0;
  padding: 20px;
}

.sm_block_max_img {
  opacity: 1;
  box-shadow: 0 0 10px 3px #5ABCF7;
  border: 1px solid #FFF;
  padding: 20px;
}

.small {
  width: 164px;
  margin-top: -22px;
  margin-left: 10px;
  padding-bottom: 40px
}

.tbl_brief .small {
  margin-top: 0px;
}

table.user_form_ed {
  width: 480px;
}

.domain_form input {
    height: 30px;
    padding: 0px 0px 0px 5px;
    font-size: 14px;
    BORDER: #cccccc 1px solid;
}

.user_form_ed tr td:nth-of-type(2), .user_form_ed tr td:nth-of-type(2) input {
    width: 220px;
}

.design_type_img {
  height: 560px !important;
  overflow-y: scroll !important;
  border: 1px solid #CCC !important;
  border-right: 0px !important;
  background: #F0F0F0 !important;
  border-radius: 10px 0px 0px 10px !important;
  padding: 15px !important;
  box-shadow: 0px 1px 20px -5px #808080 inset !important;
}

.adaptive_lable {
  float: right;
  z-index: 100;
  position: relative;
  right: 10px;
  top: 5px;
  color: #AAA;
}

.domain_form {
  width: 500px;
  margin: 0 auto;
  border: 1px solid #CCC;
  /* background: #F0F0F0; */
  border-radius: 10px 10px 10px 10px;
  padding: 15px;
  /* box-shadow: 0px 1px 20px -5px #808080 inset; */
}

.design-search__value {
	width: 140px !important;
}

.domain_form h2 {
  color: #000 !important;
  font-size: 19px;
  margin: 0px;
  padding-bottom: 0px;
  padding-top: 15px;
}

.domain_form {
	  padding: 0px 0px 15px 15px;
}


/* NEW YEAR
#logo_n {
    background: url(_img/logo_bgr-ng.png) no-repeat left top;
}
    
.ng-banner {
    margin: 25px auto;
    width: 920px;
}
*/

#amiro-air {
	display: none;
}

#m_menu > A, #m_menu > A:visited {
    color: #ffffff;
    font-weight: normal;
    text-decoration: none;
    font-size: 16px;
    line-height: 2.4;
    display: inline;
    width: 100%;
  	cursor: pointer;
  	opacity: 0.85;
}

#m_menu > A:hover {
	opacity: 1;
}

#layout{background: none !important;}
#layout_intermaket{background: none !important;}

.main_menu > tbody > tr > td.point:nth-of-type(1),
.main_menu > tbody > tr > td.point:nth-of-type(3){
	background: none;
}

.blog_list_bottom {
	margin-top: -22px; 
    margin-bottom: 20px;
}

/*///// Amiro partners list /////*/
.amiro_partners_item_row {
  	position: relative;
    display: inline-block;
    width: 165px;
    height: 165px;
  	margin: 20px 25px;
    text-align: center;
    vertical-align: top;
    padding: 5px;
  	box-shadow: 0px 0px 1px 1px #eaeaea;
}

.amiro_partners_item_row .amiro_partner_status {
	position: absolute;
  	bottom: 5px;
  	right: 5px;
}

.amiro_partners_item_row .amiro_partner_status img {
	width: 30px;
  	height: 30px;
}

.amiro_partners_item_row > a:nth-of-type(1) {
  	display: inline-block;
 	width: 165px;	
	line-height: 1;
    position: absolute;
	top: 50%;
    left: 50%;
    transform: translateX(-50%) translateY(-50%);
}

.amiro_partners_item_row_info {
    position: absolute;
    bottom: 5px;
    left: 5px;
    width: 130px;
    font-size: 10px !important;
    color: #CCC;
    text-align: left;
}
/*///// Amiro partners list /////*/

.ami_links_cloud span {
	display: inline-block;
  	float: left;
  	width: 50%;
  	margin: 10px 0px;
  	text-transform: capitalize;
  	font-size: 18px;
  	color: #848484;
}

.ami_links_cloud span i {
	margin-right: 5px;
}

.m_menu-background {
    width: 100%;
    background: #49addc;
}

.m_menu-container {
    width: 920px;
    margin: 0 auto;
}

.small-search {
    padding-left: 0px !important;
}

/***Blue button in amiro header***/
.blue_btn {
    position: absolute;
    top: 45px;
    right: 0px;
    background: #fff;
    color: #666;
    border: 2px #49ADDC solid;
    font-size: 16px;
    text-decoration: none;
    padding: 8px;
    cursor: pointer;
    text-align: right;
    z-index: 50;
}

.blue_btn span i:first-child {
    margin: 0px 5px 0px 5px;
}

.blue_btn span i:last-child {
    margin: 0px 0px 0px 10px;
}

.blue_btn div {
    display: none;
}

.blue_btn div a {
    clear: both;
    float: left;
    margin: 10px 0px 5px 0px;
    text-decoration: none;
    white-space: nowrap;
}

.blue_btn div i {
    color:#888;
    margin: 0px 5px;
}
/***Blue button in amiro header***/

.create-site-link img {
	width: 100%;
  	max-width: 920px;
    margin: 25px 0px;
}

.eshop-item-detailed__digital-link {
    padding: 10px 30px;
    margin: 0px 20px 0px 0px;
    background: #61b316;
    color: #fff;
    text-decoration: none;
}

.eshop-item-detailed__digital-link:hover {
    color: #fff;
    text-decoration: none;
}

/* Cookie alert */
.cookie_alert {
    display: none;
    position: fixed;
    z-index: 999999;
    bottom: 0px;
    width: auto;
    padding: 10px 45px 10px 10px;
    background-color: rgba(38, 50, 56, .85);
    text-align: left;
}

.cookie_alert p {
    padding: 0px;
    margin: 0px;
    color: #fff;
    font-size: 12px;
    line-height: 12px;
}

.cookie_alert span {
    position: absolute;
    display: inline-block;
    cursor: pointer;
    right: 10px;
    top: 55%;
    transform: translateY(-55%);
    padding: 0px;
    font-size: 40px;
    font-family: times, arial;
    color: #fff;
}
/* Cookie alert */

/* News 760 */

.cbm_760 {
    text-align: center;
    margin: 20px auto;
    display: block;
    width: 660px;
    padding:10px;
    border: 1px solid;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    -moz-box-shadow: 0px 0px 5px rgba(0,0,0,0.45), 0px 1px 2px rgba(0,0,0,0.2);
    -webkit-box-shadow: 0px 0px 5px rgba(0,0,0,0.45), 0px 1px 2px rgba(0,0,0,0.2);
    box-shadow: 0px 0px 5px rgba(0,0,0,0.45), 0px 1px 2px rgba(0,0,0,0.2);    border-color: #fff;
    background-color: #dfdfdf;
    background: -moz-linear-gradient(top, #fff, #dfdfdf 50%, #cecece);
    background: -webkit-gradient(linear, left top, left bottom, from(#fff), color-stop(0.5, #dfdfdf), to(#cecece));
    filter: progid:DXImageTransform.Microsoft.gradient(StartColorStr='#FFFFFF', EndColorStr='#CECECE');
}
.cbm_760 img {
    width: 100%;
    margin-top: 15px;
    border: 1px solid #D0D0D0;
}

/* End News 760 */
/*
 * FILE END: _mod_files/_css/ami_custom.css
 */
