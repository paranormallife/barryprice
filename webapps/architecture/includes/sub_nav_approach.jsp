<table align="right" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td align="left" valign="top"><% if(intSubSection !=1) {%><a href="2_1_approach.jsp" target="_self" onmouseover="document.intro.src='images/approach-intro-on-134x32.gif';" onmouseout="document.intro.src='images/approach-intro-off-134x32.gif';"><%}%><img name="intro" src="images/approach-intro-<% if(intSubSection == 1) {out.print("on");} else {%>off<%}%>-134x32.gif" width="134" height="32" border="0" alt="Intro"></a></td>
	</tr>
	<tr>
		<td align="left" valign="top"><% if(intSubSection !=2 || intSubSection ==2 && intSubSubSection !=0) {%><a href="2_2_design_media.jsp" target="_self" onmouseover="document.media.src='images/approach-media-on-134x19.gif';" onmouseout="document.media.src='images/approach-media-off-134x19.gif';"><%}%><img name="media" src="images/approach-media-<% if(intSubSection == 2) {out.print("on");} else {%>off<%}%>-134x19.gif" width="134" height="19" border="0" alt="Design Media"></a></td>
	</tr>
	<tr>
		<td align="left" valign="top"><% if(intSubSubSection !=1) {%><a href="2_2_1_sketches.jsp" target="_self" onmouseover="document.sketches.src='images/approach-sketches-on-134x17.gif';" onmouseout="document.sketches.src='images/approach-sketches-off-134x17.gif';"><%}%><img name="sketches" src="images/approach-sketches-<% if(intSubSection == 2 && intSubSubSection == 1) {out.print("on");} else {%>off<%}%>-134x17.gif" width="134" height="17" border="0" alt="Sketches"></a></td>
	</tr>
	<tr>
		<td align="left" valign="top"><% if(intSubSubSection !=2) {%><a href="2_2_2_computer_models.jsp" target="_self" onmouseover="document.computer.src='images/approach-computer-on-134x16.gif';" onmouseout="document.computer.src='images/approach-computer-off-134x16.gif';"><%}%><img name="computer" src="images/approach-computer-<% if(intSubSection == 2 && intSubSubSection == 2) {out.print("on");} else {%>off<%}%>-134x16.gif" width="134" height="16" border="0" alt="Computer Models"></a></td>
	</tr>
	<tr>
		<td align="left" valign="top"><% if(intSubSubSection !=3) {%><a href="2_2_3_study_models.jsp" target="_self" onmouseover="document.study.src='images/approach-study-on-134x16.gif';" onmouseout="document.study.src='images/approach-study-off-134x16.gif';"><%}%><img name="study" src="images/approach-study-<% if(intSubSection == 2 && intSubSubSection == 3) {out.print("on");} else {%>off<%}%>-134x16.gif" width="134" height="16" border="0" alt="Study Models"></a></td>
	</tr>
	<tr>
		<td align="left" valign="top"><% if(intSubSection !=3) {%><a href="2_3_commentary.jsp" target="_self" onmouseover="document.commentary.src='images/approach-comm-on-134x31.gif';" onmouseout="document.commentary.src='images/approach-comm-off-134x31.gif';"><%}%><img name="commentary" src="images/approach-comm-<% if(intSubSection == 3) {out.print("on");} else {%>off<%}%>-134x31.gif" width="134" height="31" border="0" alt="Commentary"></a></td>
	</tr>
</table>