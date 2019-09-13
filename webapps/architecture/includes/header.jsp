<%
String strSectionName = "";
switch (intSection)
{
	case 4:
	// New Buildings
		strSectionName = "new_buildings";
	break;
	case 5:
	// Additions
		strSectionName = "additions";
	break;
	case 6:
	// Interiors
		strSectionName = "interiors";
	break;
	case 7:
	// Kitchens
		strSectionName = "kitchens";
	break;
	case 8:
	// Baths
		strSectionName = "baths";
	break;
	case 9:
	// Details
		strSectionName = "details";
	break;
	case 10:
	// Grounds
		strSectionName = "grounds";
	break;
}
%>
<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<!--Adjust version number with each migration-->
<!--Version 1.0.0-->
	<!--Outputs data provided from meta include as properly formatted meta tags in header-->
	<%@ include file="meta_tags.jsp" %>
	<!--Checks for PC or Mac OS, sets variable strStyleSheet to the file name for the appropriate style sheet-->
	<%@ include file="browser_detect.jsp" %>
	<link rel="stylesheet" type="text/css" href="<%=strStyleSheet%>" />
	<script src="includes/globalScripts.js" type="text/javascript"></script>
</head>
<body bgcolor="#ffffff">
	<table width="700" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td width="32" height="26"><img src="images/spacer.gif" width="32" height="26" border="0" alt=""></td>
			<td width="135" height="26"><img src="images/spacer.gif" width="135" height="26" border="0" alt=""></td>
			<td width="96" height="26"><img src="images/spacer.gif" width="96" height="26" border="0" alt=""></td>
			<td width="92" height="26"><img src="images/spacer.gif" width="92" height="26" border="0" alt=""></td>
			<td width="63" height="26"><img src="images/spacer.gif" width="63" height="26" border="0" alt=""></td>
			<td width="23" height="26"><img src="images/spacer.gif" width="23" height="26" border="0" alt=""></td>
			<td width="24" height="26"><img src="images/spacer.gif" width="24" height="26" border="0" alt=""></td>
			<td width="37" height="26"><img src="images/spacer.gif" width="37" height="26" border="0" alt=""></td>
			<td width="24" height="26"><img src="images/spacer.gif" width="24" height="26" border="0" alt=""></td>
			<td width="49" height="26"><img src="images/spacer.gif" width="49" height="26" border="0" alt=""></td>
			<td width="34" height="26"><img src="images/spacer.gif" width="34" height="26" border="0" alt=""></td>
			<td width="57" height="26"><img src="images/spacer.gif" width="57" height="26" border="0" alt=""></td>
			<td width="35" height="26"><img src="images/spacer.gif" width="35" height="26" border="0" alt=""></td>
		</tr>
		<tr>
			<td></td>
			<td align="left" valign="top"><a href="../index.jsp"><img src="images/int-barry-price-135x27.gif" width="135" height="27" border="0" alt="Barry Price"></a></td>
			<td align="left" valign="top" colspan="2"><a href="../index.jsp"><img src="images/int-architecture-188x27.gif" width="188" height="27" border="0" alt="Architecture"></a></td>
			<td align="left" valign="top"><img src="images/int-line-63x27.gif" width="63" height="27" border="0" alt=""></td>
			<%@ include file="sub_nav.jsp" %>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<%@ include file="top_nav.jsp" %>
			<td></td>
		</tr>
		<tr>
			<td colspan="13"><img src="images/spacer.gif" width="700" height="15" border="0" alt=""></td>
		</tr>
		<tr>
			<td colspan="13" align="left" valign="top">