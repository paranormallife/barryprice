<table align="right" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td align="right" valign="top"><% if(intSubSection !=1) {%><a href="3_1_style.jsp" target="_self" onmouseover="document.intro.src='images/style-intro-on-174x31.gif';" onmouseout="document.intro.src='images/style-intro-off-174x31.gif';"><%}%><img name="intro" src="images/style-intro-<% if(intSubSection == 1) {out.print("on");} else {%>off<%}%>-174x31.gif" width="174" height="31" border="0" alt="Intro"></a></td>
	</tr>
	<tr>
		<td align="right" valign="top"><% if(intSubSection !=2) {%><a href="3_2_featured_project.jsp" target="_self" onmouseover="document.feature.src='images/style-feature-on-174x32.gif';" onmouseout="document.feature.src='images/style-feature-off-174x32.gif';"><%}%><img name="feature" src="images/style-feature-<% if(intSubSection == 2) {out.print("on");} else {%>off<%}%>-174x32.gif" width="174" height="32" border="0" alt="Feature"></a></td>
	</tr>
	<tr>
		<td align="right" valign="top"><% if(intSubSection !=3) {%><a href="3_3_new_projects.jsp" target="_self" onmouseover="document.newprojects.src='images/style-new-projects-on-168x30.gif';" onmouseout="document.newprojects.src='images/style-new-projects-off-168x30.gif';"><%}%><img name="newprojects" src="images/style-new-projects-<% if(intSubSection == 3) {out.print("on");} else {%>off<%}%>-168x30.gif" width="168" height="30" border="0" alt="New Projects"></a></td>
	</tr>
	
</table>