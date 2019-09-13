<%--
	Project:					Barry Price Architecture Phase 2
	Initial Creation date:		01/07/04						
	By:							RobotKarma						
	Purpose or description:		index.jsp						
--%>
<% 
// Sets section and subsection of this page
int intSection = 0;
int intSubSection = 0;
int intSubSubSection = 0; 
%>
<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<!--Adjust version number with each migration-->
<!--Version 1.0.0-->
	<!--Outputs data provided from meta include as properly formatted meta tags in header-->
	<%@ include file="architecture3/includes/meta_tags.jsp" %>
	<!--Checks for PC or Mac OS, sets variable strStyleSheet to the file name for the appropriate style sheet-->
	<%@ include file="architecture3/includes/browser_detect.jsp" %>
	<link rel="stylesheet" type="text/css" href="<%=strStyleSheet%>" />
	<script src="includes/globalScripts.js" type="text/javascript"></script>
</head>
<body bgcolor="#ffffff">
	<table border="0" cellpadding="0" cellspacing="0" align="center">
		<tr>
			<td width="55" height="28"><img src="architecture3/images/spacer.gif" width="55" height="28" border="0" alt=""></td>
			<td width="13" height="28"><img src="architecture3/images/spacer.gif" width="13" height="28" border="0" alt=""></td>
			<td width="103" height="28"><img src="architecture3/images/spacer.gif" width="103" height="28" border="0" alt=""></td>
			<td width="96" height="28"><img src="architecture3/images/spacer.gif" width="96" height="28" border="0" alt=""></td>
			<td width="80" height="28"><img src="architecture3/images/spacer.gif" width="80" height="28" border="0" alt=""></td>
			<td width="9" height="28"><img src="architecture3/images/spacer.gif" width="9" height="28" border="0" alt=""></td>
			<td width="85" height="28"><img src="architecture3/images/spacer.gif" width="85" height="28" border="0" alt=""></td>
			<td width="24" height="28"><img src="architecture3/images/spacer.gif" width="24" height="28" border="0" alt=""></td>
			<td width="37" height="28"><img src="architecture3/images/spacer.gif" width="37" height="28" border="0" alt=""></td>
			<td width="24" height="28"><img src="architecture3/images/spacer.gif" width="24" height="28" border="0" alt=""></td>
			<td width="51" height="28"><img src="architecture3/images/spacer.gif" width="51" height="28" border="0" alt=""></td>
			<td width="29" height="28"><img src="architecture3/images/spacer.gif" width="29" height="28" border="0" alt=""></td>
			<td width="45" height="28"><img src="architecture3/images/spacer.gif" width="45" height="28" border="0" alt=""></td>
			<td width="53" height="28"><img src="architecture3/images/spacer.gif" width="53" height="28" border="0" alt=""></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td width="9" colspan="3"><img src="architecture3/images/barry-price-117x27.gif" width="117" height="27" border="0" alt="Barry Price"></td>
			<td colspan="5"><img src="architecture3/images/architecture-186x27.gif" width="186" height="27" border="0" alt="Architecture"></td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td rowspan="3">&nbsp;</td>
			<td colspan="7" align="center" valign="top" rowspan="3">
				<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" WIDTH=407 HEIGHT=195>
					<PARAM NAME=movie VALUE="architecture3/flash/homeAnim.swf">
					<PARAM NAME=quality VALUE=high> <PARAM NAME=bgcolor VALUE=#ffffff>
					<EMBED src="architecture3/flash/homeAnim.swf" quality=high bgcolor=#ffffff  WIDTH=407 HEIGHT=195 TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></EMBED>
				</OBJECT><!--<img src="architecture3/images/the-clubhouse-408x196.jpg" width="408" height="196" border="0" alt=""Featured Design - The Clubhouse">--></td>
			<td colspan="5" align="left" valign="top"><img src="architecture3/images/barry-price-186x117.jpg" width="186" height="117" border="0" alt=""Barry Price"></td>
			<td>&nbsp;</td>
		</tr>
		<!--Sub Navigation-->
		<tr>
			<td colspan="2" align="left" valign="top"><a href="architecture3/1_1_studio.jsp" target="_self" onmouseover="document.studio.src='architecture3/images/home-studio-on-61x27.gif';" onmouseout="document.studio.src='architecture3/images/home-studio-off-61x27.gif';"><img name="studio" src="architecture3/images/home-studio-off-61x27.gif" width="61" height="27" border="0" alt=""Studio"></a></td>
			<td colspan="2" align="left" valign="top"><a href="architecture3/2_1_approach.jsp" target="_self" onmouseover="document.approach.src='architecture3/images/home-approach-on-80x27.gif';" onmouseout="document.approach.src='architecture3/images/home-approach-off-80x27.gif';"><img name="approach" src="architecture3/images/home-approach-off-80x27.gif" width="80" height="27" border="0" alt=""Approach"></a></td>
			<td align="left" valign="top"><a href="architecture3/3_1_style.jsp" target="_self" onmouseover="document.style.src='architecture3/images/home-style-on-45x27.gif';" onmouseout="document.style.src='architecture3/images/home-style-off-45x27.gif';"><img name="style" src="architecture3/images/home-style-off-45x27.gif" width="45" height="27" border="0" alt=""Style"></a></td>
			<td>&nbsp;</td>
		</tr>
<!--End Sub Nav-->
		<tr>
			<td colspan="6" height="52">&nbsp;</td>
		</tr>
		<!--Main Navigation-->
		<tr>
			<td>&nbsp;</td>
			<td align="left" valign="top" colspan="2"><a href="architecture3/4_1_new_buildings.jsp" target="_self" onmouseover="document.buildings.src='architecture3/images/home-buildings-on-116x28.gif';" onmouseout="document.buildings.src='architecture3/images/home-buildings-off-116x28.gif';"><img name="buildings" src="architecture3/images/home-buildings-off-116x28.gif" width="116" height="28" border="0" alt=""New Buildings"></a></td>
			<td align="left" valign="top"><a href="architecture3/5_1_additions.jsp" target="_self" onmouseover="document.additions.src='architecture3/images/home-additions-on-96x28.gif';" onmouseout="document.additions.src='architecture3/images/home-additions-off-96x28.gif';"><img name="additions" src="architecture3/images/home-additions-off-96x28.gif" width="96" height="28" border="0" alt=""Additions"></a></td>
			<td align="left" valign="top" colspan="2"><a href="architecture3/6_1_interiors.jsp" target="_self" onmouseover="document.interiors.src='architecture3/images/home-interiors-on-89x28.gif';" onmouseout="document.interiors.src='architecture3/images/home-interiors-off-89x28.gif';"><img name="interiors" src="architecture3/images/home-interiors-off-89x28.gif" width="89" height="28" border="0" alt=""Interiors"></a></td>
			<td align="left" valign="top"><a href="architecture3/7_1_kitchens.jsp" target="_self" onmouseover="document.kitchens.src='architecture3/images/home-kitchens-on-85x28.gif';" onmouseout="document.kitchens.src='architecture3/images/home-kitchens-off-85x28.gif';"><img name="kitchens" src="architecture3/images/home-kitchens-off-85x28.gif" width="85" height="28" border="0" alt=""Kitchens"></a></td>
			<td align="left" valign="top" colspan="2"><a href="architecture3/8_1_baths.jsp" target="_self" onmouseover="document.baths.src='architecture3/images/home-baths-on-61x28.gif';" onmouseout="document.baths.src='architecture3/images/home-baths-off-61x28.gif';"><img name="baths" src="architecture3/images/home-baths-off-61x28.gif" width="61" height="28" border="0" alt=""Baths"></a></td>
			<td align="left" valign="top" colspan="2"><a href="architecture3/9_1_details.jsp" target="_self" onmouseover="document.details.src='architecture3/images/home-details-on-75x28.gif';" onmouseout="document.details.src='architecture3/images/home-details-off-75x28.gif';"><img name="details" src="architecture3/images/home-details-off-75x28.gif" width="75" height="28" border="0" alt=""Details"></a></td>
			<td align="left" valign="top" colspan="2"><a href="architecture3/10_1_grounds.jsp" target="_self" onmouseover="document.grounds.src='architecture3/images/home-grounds-on-74x28.gif';" onmouseout="document.grounds.src='architecture3/images/home-grounds-off-74x28.gif';"><img name="grounds" src="architecture3/images/home-grounds-off-74x28.gif" width="74" height="28" border="0" alt=""Grounds"></a></td>
			<td>&nbsp;</td>
		</tr>
<!--End Main Nav-->
<%@ include file="architecture3/includes/footer_home.jsp" %>
