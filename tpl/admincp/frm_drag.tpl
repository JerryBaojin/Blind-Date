<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<!--{$page_charset}-->" />
<title>drag</title>
<!--{include file="<!--{$cptplpath}-->headerjs.tpl"}-->
</head>
<style type="text/css">
body {
  margin: 0;
  padding: 0;
  background: #DFDFDF url(<!--{$cppath}-->images/body_bg.gif) repeat-y ;
  cursor: E-resize;
}
</style>
<script type="text/javascript" language="javascript">
var _CP_PATH_ = "<!--{$cppath}-->";
var pic = new Image();
pic.src= _CP_PATH_ + "images/bar_open.gif";
function toggleMenu() {
    frmBody = parent.document.getElementById('frame-body');
	imgArrow = document.getElementById('img');

	if (frmBody.cols == "0, 7, *"){
		frmBody.cols="170, 7, *";
		imgArrow.src = _CP_PATH_ + "images/bar_close.gif";
	}
	else {
		frmBody.cols="0, 7, *";
		imgArrow.src = _CP_PATH_ + "images/bar_open.gif";
	}
}
var orgX = 0;
document.onmousedown = function(e) {
	var evt = Utils.fixEvent(e);
	orgX = evt.clientX;
	if (Browser.isIE) document.getElementById('tbl').setCapture();
}
document.onmouseup = function(e) {
	var evt = Utils.fixEvent(e);

	frmBody = parent.document.getElementById('frame-body');
	frmWidth = frmBody.cols.substr(0, frmBody.cols.indexOf(','));
	frmWidth = (parseInt(frmWidth) + (evt.clientX - orgX));
	frmBody.cols = frmWidth + ", 7, *";
	if (Browser.isIE) document.releaseCapture();
}
var Browser = new Object();
Browser.isMozilla = (typeof document.implementation != 'undefined') && (typeof document.implementation.createDocument != 'undefined') && (typeof HTMLDocument != 'undefined');
Browser.isIE = window.ActiveXObject ? true : false;
Browser.isFirefox = (navigator.userAgent.toLowerCase().indexOf("firefox") != - 1);
Browser.isSafari = (navigator.userAgent.toLowerCase().indexOf("safari") != - 1);
Browser.isOpera = (navigator.userAgent.toLowerCase().indexOf("opera") != - 1);
var Utils = new Object();
Utils.fixEvent = function(e) {
  var evt = (typeof e == "undefined") ? window.event : e;
  return evt;
}
</script>
<body onselect="return false;">
<table height="100%" cellspacing="0" cellpadding="0" style="border-left:1px solid #BFBFBF;" id="tbl">
  <tr><td><a href="javascript:toggleMenu();" onfocus="this.blur();"><img src="<!--{$cppath}-->images/bar_close.gif" width="6" height="60" id="img" border="0" /></a></td></tr>
</table>
</body>
</html>