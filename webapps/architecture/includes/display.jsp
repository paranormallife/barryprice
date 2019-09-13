<% 	if (intSection==1)
	{%>
	<table width="535" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td width="115" valign="top"><%@ include file="sub_nav_studio.jsp" %></td>
			<td valign="top" width="25"><img src="images/studio-bracket.gif" width="19" height="224" alt="" border="0"></td>
			<td align="left" valign="top">
<%	} 
	else 
	{
		if (intSection==2)
		{%><table border="0" align="center" cellpadding="0" cellspacing="0" width="535">
		<tr>
			<td valign="top" align="right"><%@ include file="sub_nav_approach.jsp" %></td>
			<td valign="top" align="left" width="25"><%if (intSubSection==1){%><img src="images/studio-bracket.gif" width="19" height="224" alt="" border="0"><%}%><%if (intSubSection==2) {%><img src="images/studio-bracket2.gif" width="26" height="148" alt="" border="0"><%}%><%if (intSubSection==3) {%><img src="images/studio-bracket3.gif" width="26" height="148" alt="" border="0"><%}%></td>
			<td align="left" valign="top">
		<%} 
		else
		{
			if (intSection==3)
			{%><table width="620" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td valign="top" align="right" rowspan="2"><%@ include file="sub_nav_style.jsp" %></td>
			<td align="left" valign="top" rowspan="2"><%if (intSubSection==1){%><img src="images/studio-bracket4.gif" width="19" height="224" alt="" border="0"><%}%><%if (intSubSection==2 || intSubSection==3) {%><img src="images/studio-bracket.gif" width="19" height="224" alt="" border="0"><%}%><br clear="all"><img src="images/spacer.gif" width="50" height="1" alt="" border="0"></td>
			<td align="left" valign="top">
			<%}
			else
			{%><!--Interior Tables-->
	<table width="535" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td valign="top" rowspan="2"><!--Left Column-->
				<table cellpadding="0" cellspacing="0" border="0">
					<tr>
						<td><%if (intSubSection !=1){%><a href="<%=intSection%>_1_<%=strSectionName%>.jsp" target="_self" onmouseover="document.one.src='images/int_one_on_45x30.gif';" onmouseout="document.one.src='images/int_one_off_45x30.gif';"><%}%><img name="one" src="images/int_one_<% if(intSubSection==1) {out.print("on");} else {%>off<%}%>_45x30.gif" width="45" height="30" border="0" alt="1"></a></td>
						<td rowspan="9" valign="top" align="left"><img src="images/int_bracket.gif" width="45" height="435" border="0" alt=""></td>
					</tr>
					<tr>
						<td><%if (intSubSection !=2){%><a href="<%=intSection%>_2_<%=strSectionName%>.jsp" target="_self" onmouseover="document.two.src='images/int_two_on_45x30.gif';" onmouseout="document.two.src='images/int_two_off_45x30.gif';"><%}%><img name="two" src="images/int_two_<% if(intSubSection==2) {out.print("on");} else {%>off<%}%>_45x30.gif" width="45" height="30" border="0" alt="2"></a></td>
					</tr>
					<tr>
						<td><%if (intSubSection !=3){%><a href="<%=intSection%>_3_<%=strSectionName%>.jsp" target="_self" onmouseover="document.three.src='images/int_three_on_45x36.gif';" onmouseout="document.three.src='images/int_three_off_45x36.gif';"><%}%><img name="three" src="images/int_three_<% if(intSubSection==3) {out.print("on");} else {%>off<%}%>_45x36.gif" width="45" height="36" border="0" alt="3"></a></td>
					</tr>
					<tr>
						<td><%if (intSubSection !=4){%><a href="<%=intSection%>_4_<%=strSectionName%>.jsp" target="_self" onmouseover="document.four.src='images/int_four_on_45x24.gif';" onmouseout="document.four.src='images/int_four_off_45x24.gif';"><%}%><img name="four" src="images/int_four_<% if(intSubSection==4) {out.print("on");} else {%>off<%}%>_45x24.gif" width="45" height="24" border="0" alt="4"></a></td>
					</tr>
					<tr>
						<td><%if (intSubSection !=5){%><a href="<%=intSection%>_5_<%=strSectionName%>.jsp" target="_self" onmouseover="document.five.src='images/int_five_on_45x31.gif';" onmouseout="document.five.src='images/int_five_off_45x31.gif';"><%}%><img name="five" src="images/int_five_<% if(intSubSection==5) {out.print("on");} else {%>off<%}%>_45x31.gif" width="45" height="31" border="0" alt="5"></a></td>
					</tr>
					<tr>
						<td><%if (intSubSection !=6){%><a href="<%=intSection%>_6_<%=strSectionName%>.jsp" target="_self" onmouseover="document.six.src='images/int_six_on_45x34.gif';" onmouseout="document.six.src='images/int_six_off_45x34.gif';"><%}%><img name="six" src="images/int_six_<% if(intSubSection==6) {out.print("on");} else {%>off<%}%>_45x34.gif" width="45" height="34" border="0" alt="6"></a></td>
					</tr>
					<tr>
						<td><%if (intSubSection !=7){%><a href="<%=intSection%>_7_<%=strSectionName%>.jsp" target="_self" onmouseover="document.seven.src='images/int_seven_on_45x24.gif';" onmouseout="document.seven.src='images/int_seven_off_45x24.gif';"><%}%><img name="seven" src="images/int_seven_<% if(intSubSection==7) {out.print("on");} else {%>off<%}%>_45x24.gif" width="45" height="24" border="0" alt="7"></a></td>
					</tr>
					<tr>
						<td><%if (intSection==9){%><img src="images/spacer.gif" width="45" height="35" border="0" alt=""><%} else {%><%if (intSubSection !=8){%><a href="<%=intSection%>_8_<%=strSectionName%>.jsp" target="_self" onmouseover="document.eight.src='images/int_eight_on_45x35.gif';" onmouseout="document.eight.src='images/int_eight_off_45x35.gif';"><%}%><img name="eight" src="images/int_eight_<% if(intSubSection==8) {out.print("on");} else {%>off<%}%>_45x35.gif" width="45" height="35" border="0" alt="8"></a><%}%></td>
					</tr>
					<tr>
						<td><img src="images/spacer.gif" width="1" height="150" border="0" alt=""></td>
					</tr>
				</table>
			</td>
			<td>&nbsp;</td>
			<td align="left" valign="top"><% if (intSection==4)
												{
												if (intSubSection==8)
													{%>&nbsp;<%
													}
												else
													{%><img src="images/int_enlarge_107x15.gif" width="107" height="15" border="0" alt="Click to enlarge"><%}
												}
											if (intSection==5)
												{%><img src="images/int_enlarge_107x15.gif" width="107" height="15" border="0" alt="Click to enlarge"><%}
											if (intSection==6)
												{%><img src="images/int_enlarge_107x15.gif" width="107" height="15" border="0" alt="Click to enlarge"><%}
											if (intSection==7)
												{
												if (intSubSection==3 || intSubSection==6)
													{%>&nbsp;<%
													}
												else
													{%><img src="images/int_enlarge_107x15.gif" width="107" height="15" border="0" alt="Click to enlarge"><%}
												}
											if (intSection==8)
												{%><img src="images/int_enlarge_107x15.gif" width="107" height="15" border="0" alt="Click to enlarge"><%}
											if (intSection==9)
												{%><img src="images/int_enlarge_107x15.gif" width="107" height="15" border="0" alt="Click to enlarge"><%}
											if (intSection==10)
												{
												if (intSubSection==2 || intSubSection==5 || intSubSection==8)
													{%>&nbsp;<%
													}
												else
													{%><img src="images/int_enlarge_107x15.gif" width="107" height="15" border="0" alt="Click to enlarge"><%}
												}%></td>
		</tr>
		<tr>
			<td valign="top"><!--Main Picture-->
				<table cellpadding="0" cellspacing="0" border="0">
					<tr>
						<td><img name="mainpic" src="images/<%=intSection%>_<%=intSubSection%>_1.jpg" width="333" height="420" border="0" alt=""></td>
					</tr>
				</table>
			</td>
			<td align="left" valign="top"><!--Right Column-->
				<table cellpadding="0" cellspacing="0" border="0">
					<tr>
						<td><% if (intSection==4)
									{
										if (intSubSection==8)
										{%>&nbsp;<%
										}
										else
										{%><a href="javascript:doPic('images/<%=intSection%>_<%=intSubSection%>_1.jpg');"><img src="images/<%=intSection%>_<%=intSubSection%>_1_thumb.jpg" border="0" alt=""></a><%
										}
									}
								if (intSection==5)
									{%><a href="javascript:doPic('images/<%=intSection%>_<%=intSubSection%>_1.jpg');"><img src="images/<%=intSection%>_<%=intSubSection%>_1_thumb.jpg" border="0" alt=""></a><%
									}
								if (intSection==6)
									{%><a href="javascript:doPic('images/<%=intSection%>_<%=intSubSection%>_1.jpg');"><img src="images/<%=intSection%>_<%=intSubSection%>_1_thumb.jpg" border="0" alt=""></a><%
									}
								if (intSection==7)
									{
										if (intSubSection==3 || intSubSection==6)
											{%>&nbsp;<%
											}
										else
											{%><a href="javascript:doPic('images/<%=intSection%>_<%=intSubSection%>_1.jpg');"><img src="images/<%=intSection%>_<%=intSubSection%>_1_thumb.jpg" border="0" alt=""></a><%
											}
									}
								if (intSection==8)
									{%><a href="javascript:doPic('images/<%=intSection%>_<%=intSubSection%>_1.jpg');"><img src="images/<%=intSection%>_<%=intSubSection%>_1_thumb.jpg" border="0" alt=""></a><%
									}
								if (intSection==9)
									{%><a href="javascript:doPic('images/<%=intSection%>_<%=intSubSection%>_1.jpg');"><img src="images/<%=intSection%>_<%=intSubSection%>_1_thumb.jpg" border="0" alt=""></a><%
									}
								if (intSection==10)
									{
										if (intSubSection==2 || intSubSection==8)
											{%>&nbsp;<%
											}
										else
											{%><a href="javascript:doPic('images/<%=intSection%>_<%=intSubSection%>_1.jpg');"><img src="images/<%=intSection%>_<%=intSubSection%>_1_thumb.jpg" border="0" alt=""></a><%
											}
									}%></td>
					</tr>
					<tr>
						<td><img src="images/spacer.gif" width="1" height="3" border="0" alt=""></td>
					</tr>
					<tr>
						<td><% if (intSection==4)
								{
								if (intSubSection==8)
									{%>&nbsp;<%
									}
									else
										{%><a href="javascript:doPic('images/<%=intSection%>_<%=intSubSection%>_2.jpg');"><img src="images/<%=intSection%>_<%=intSubSection%>_2_thumb.jpg" border="0" alt=""></a><%
										} 
								}
							if (intSection==5)
								{%><a href="javascript:doPic('images/<%=intSection%>_<%=intSubSection%>_2.jpg');"><img src="images/<%=intSection%>_<%=intSubSection%>_2_thumb.jpg" border="0" alt=""></a><%
								}
							if (intSection==6)
								{%><a href="javascript:doPic('images/<%=intSection%>_<%=intSubSection%>_2.jpg');"><img src="images/<%=intSection%>_<%=intSubSection%>_2_thumb.jpg" border="0" alt=""></a><%
								}
							if (intSection==7)
								{
									if (intSubSection==3 || intSubSection==6)
										{%>&nbsp;<%
										}
									else
										{%><a href="javascript:doPic('images/<%=intSection%>_<%=intSubSection%>_2.jpg');"><img src="images/<%=intSection%>_<%=intSubSection%>_2_thumb.jpg" border="0" alt=""></a><%
										} 
								}
							if (intSection==8)
								{%><a href="javascript:doPic('images/<%=intSection%>_<%=intSubSection%>_2.jpg');"><img src="images/<%=intSection%>_<%=intSubSection%>_2_thumb.jpg" border="0" alt=""></a><%
								}
							if (intSection==9)
								{%><a href="javascript:doPic('images/<%=intSection%>_<%=intSubSection%>_2.jpg');"><img src="images/<%=intSection%>_<%=intSubSection%>_2_thumb.jpg" border="0" alt=""></a><%
								}
							if (intSection==10)
								{
									if (intSubSection==2 || intSubSection==8)
										{%>&nbsp;<%
										}
									else
										{%><a href="javascript:doPic('images/<%=intSection%>_<%=intSubSection%>_2.jpg');"><img src="images/<%=intSection%>_<%=intSubSection%>_2_thumb.jpg" border="0" alt=""></a><%
										}
							}%></td>
					</tr>
					<tr>
						<td><img src="images/spacer.gif" width="1" height="3" border="0" alt=""></td>
					</tr>
					<tr>
						<td><%	 
							if (intSection==4)
								{
									if (intSubSection==3 || intSubSection==4 || intSubSection==8 || intSubSection==8)
									{%>&nbsp;<%} 
									else
									{%><a href="javascript:doPic('images/<%=intSection%>_<%=intSubSection%>_3.jpg');"><img src="images/<%=intSection%>_<%=intSubSection%>_3_thumb.jpg" border="0" alt=""></a><%
									}
								}
							if (intSection==5)
								{
									if (intSubSection==5)
									{%>&nbsp;<%} 
									else
									{%><a href="javascript:doPic('images/<%=intSection%>_<%=intSubSection%>_3.jpg');"><img src="images/<%=intSection%>_<%=intSubSection%>_3_thumb.jpg" border="0" alt=""></a><%
									}
								}
							if (intSection==6)
								{
									if (intSubSection==3 || intSubSection==4 || intSubSection==5)
									{%>&nbsp;<%}
									else
									{%><a href="javascript:doPic('images/<%=intSection%>_<%=intSubSection%>_3.jpg');"><img src="images/<%=intSection%>_<%=intSubSection%>_3_thumb.jpg" border="0" alt=""></a><%
									}
								}
							if (intSection==7)
								{
									if (intSubSection==1 || intSubSection==2 || intSubSection==3 || intSubSection==6 || intSubSection==7 || intSubSection==8)
									{%>&nbsp;<%}
									else
									{%><a href="javascript:doPic('images/<%=intSection%>_<%=intSubSection%>_3.jpg');"><img src="images/<%=intSection%>_<%=intSubSection%>_3_thumb.jpg" border="0" alt=""></a><%
									}
								}
							if (intSection==8)
								{
									if (intSubSection==3 || intSubSection==7)
									{%>&nbsp;<%}
									else
									{%><a href="javascript:doPic('images/<%=intSection%>_<%=intSubSection%>_3.jpg');"><img src="images/<%=intSection%>_<%=intSubSection%>_3_thumb.jpg" border="0" alt=""></a><%
									}
								}
							if (intSection==9)
								{
									if (intSubSection==1 || intSubSection==2 || intSubSection==6 || intSubSection==7)
									{%>&nbsp;<%}
									else
									{%><a href="javascript:doPic('images/<%=intSection%>_<%=intSubSection%>_3.jpg');"><img src="images/<%=intSection%>_<%=intSubSection%>_3_thumb.jpg" border="0" alt=""></a><%
									}
								}
							if (intSection==10)
								{
									if (intSubSection==2 || intSubSection==3 || intSubSection==5 || intSubSection==7 || intSubSection==8)
									{%>&nbsp;<%}
									else
									{%><a href="javascript:doPic('images/<%=intSection%>_<%=intSubSection%>_3.jpg');"><img src="images/<%=intSection%>_<%=intSubSection%>_3_thumb.jpg" border="0" alt=""></a><%
									}
								}%></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td align="left" valign="top" class="bodytext"><%@ include file="comments.jsp" %></td>
			<td>&nbsp;
<!--/Interior Tables--><%} } }%>