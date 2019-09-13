<table cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td><% if(intSubSection !=1){%><a href="1_1_studio.jsp" target="_self" onmouseover="document.barry.src='images/studio-barry-on.gif';" onmouseout="document.barry.src='images/studio-barry-off.gif';"><%}%><img name="barry" src="images/studio-barry-<% if(intSubSection == 1) {out.print("on");} else {%>off<%}%>.gif" border="0" alt="Barry Price"></a></td>
	</tr>
	<tr>
		<td>
			<table cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td><% if(intSubSection ==1 && intSubSubSection ==0){%><%}else{%><a href="1_1_studio.jsp" target="_self" onmouseover="document.education.src='images/studio-education-on.gif';" onmouseout="document.education.src='images/studio-education-off.gif';"><%}%><img name="education" src="images/studio-education-<% if(intSubSection == 1 && intSubSubSection == 0) {out.print("on");} else {%>off<%}%>.gif" border="0" alt="Barry Price - education"></a></td>
				</tr>
				<tr>
					<td><% if(intSubSubSection !=1){%><a href="1_1_1_practice.jsp" target="_self" onmouseover="document.practice.src='images/studio-practice-on.gif';" onmouseout="document.practice.src='images/studio-practice-off.gif';"><%}%><img name="practice" src="images/studio-practice-<% if(intSubSection == 1 && intSubSubSection == 1) {out.print("on");} else {%>off<%}%>.gif" border="0" alt="practice"></a></td>
				</tr>
				<tr>
					<td><% if(intSubSubSection !=2){%><a href="1_1_2_teaching.jsp" target="_self" onmouseover="document.teaching.src='images/studio-teaching-on.gif';" onmouseout="document.teaching.src='images/studio-teaching-off.gif';"><%}%><img name="teaching" src="images/studio-teaching-<% if(intSubSection == 1 && intSubSubSection == 2) {out.print("on");} else {%>off<%}%>.gif" border="0" alt="teaching"></a></td>
				</tr>
				<tr>
					<td><% if(intSubSubSection !=3){%><a href="1_1_3_registration.jsp" target="_self" onmouseover="document.registration.src='images/studio-registration-on.gif';" onmouseout="document.registration.src='images/studio-registration-off.gif';"><%}%><img name="registration" src="images/studio-registration-<% if(intSubSection == 1 && intSubSubSection == 3) {out.print("on");} else {%>off<%}%>.gif" border="0" alt="registration"></a></td>
				</tr>
				<tr>
					<td><% if(intSubSubSection !=4){%><a href="1_1_4_awards.jsp" target="_self" onmouseover="document.awards.src='images/studio-awards-on.gif';" onmouseout="document.awards.src='images/studio-awards-off.gif';"><%}%><img name="awards" src="images/studio-awards-<% if(intSubSection == 1 && intSubSubSection == 4) {out.print("on");} else {%>off<%}%>.gif" border="0" alt="awards"></a></td>
				</tr>
				<tr>
					<td><% if(intSubSubSection !=5){%><a href="1_1_5_publications.jsp" target="_self" onmouseover="document.publications.src='images/studio-publications-on.gif';" onmouseout="document.publications.src='images/studio-publications-off.gif';"><%}%><img name="publications" src="images/studio-publications-<% if(intSubSection == 1 && intSubSubSection == 5) {out.print("on");} else {%>off<%}%>.gif" border="0" alt="publications"></a></td>
				</tr>
				<tr>
					<td><% if(intSubSubSection !=6){%><a href="1_1_6_exhibits.jsp" target="_self" onmouseover="document.exhibits.src='images/studio-exhibits-on.gif';" onmouseout="document.exhibits.src='images/studio-exhibits-off.gif';"><%}%><img name="exhibits" src="images/studio-exhibits-<% if(intSubSection == 1 && intSubSubSection == 6) {out.print("on");} else {%>off<%}%>.gif" border="0" alt="exhibits"></a></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td><% if(intSubSection !=2) {%><a href="1_2_staff.jsp" target="_self" onmouseover="document.staff.src='images/studio-staff-on.gif';" onmouseout="document.staff.src='images/studio-staff-off.gif';"><%}%><img name="staff" src="images/studio-staff-<% if(intSubSection ==2){out.print("on");} else {%>off<%}%>.gif" border="0" alt="Staff"></a></td>
	</tr>
	<tr>
		<td><% if(intSubSection !=3) {%><a href="1_3_office.jsp" target="_self" onmouseover="document.office.src='images/studio-office-on.gif';" onmouseout="document.office.src='images/studio-office-off.gif';"><%}%><img name="office" src="images/studio-office-<% if(intSubSection ==3){out.print("on");} else {%>off<%}%>.gif" border="0" alt="Office"></a></td>
	</tr>
</table>
	