<%
String strComments = "";
switch (intSection)
{
	case 4:
	//New Building
		switch (intSubSection) {
			case 1:
			// 4_1
				strComments = "All photos by Kenneth Cooke.";
			break;
			case 2:
			// 4_2
				strComments = "All photos by Chris Kendall.";
			break;
			case 3:
			// 4_3
				strComments = "All photos by Chris Kendall.";
			break;
			case 4:
			// 4_4
				strComments = "All photos by Chris Kendall.";
			break;
			case 5:
			// 4_5
				strComments = "All photos by Florian Holzherr.";
			break;
			case 6:
			// 4_6
				strComments = "All photos by Chris Kendall.";
			break;
			case 7:
			// 4_7
				strComments = "Top photo by Chris Kendall.";
			break;
			case 8:
			// 4_8
				strComments = "Photo by Chris Kendall.";
			break;
		}
	break;
	case 5:
	//Additions
		switch (intSubSection) {
			case 1:
			// 5_1
				strComments = "All photos by Florian Holzherr.";
			break;
			case 2:
			// 5_2
				strComments = "All photos by Florian Holzherr.";
			break;
			case 3:
			// 5_3
				strComments = "All photos by Chris Kendall.";
			break;
			case 4:
			// 5_4
				strComments = "All photos by Chris Kendall.";
			break;
			case 5:
			// 5_5
				strComments = "All photos by Chris Kendall.";
			break;
			case 6:
			// 5_6
				strComments = "Top photo by Charles Miller, middle photo by Kelly Bugden.";
			break;
			case 7:
			// 5_7
				strComments = "";
			break;
			case 8:
			// 5_8
				strComments = "All photos by Chris Kendall.";
			break;
		}
	break;
	case 6:
	//Interiors
		switch (intSubSection) {
			case 1:
			// 6_1
				strComments = "Top photo by Chris Kendall.";
			break;
			case 2:
			// 6_2
				strComments = "All photos by Fion Reilly.";
			break;
			case 3:
			// 6_3
				strComments = "Top photo by Chris Kendall, bottom photo by Kelly Bugden.";
			break;
			case 4:
			// 6_4
				strComments = "Top photo by Kelly Bugden.";
			break;
			case 5:
			// 6_5
				strComments = "All photos by Chris Kendall.";
			break;
			case 6:
			// 6_6
				strComments = "Top and middle photos by Chris Kendall.";
			break;
			case 7:
			// 6_7
				strComments = "All photos by Chris Kendall.";
			break;
			case 8:
			// 6_8
				strComments = "All photos by Chris Kendall.";
			break;
		}
	break;
	case 7:
	//Kitchens
		switch (intSubSection) {
			case 1:
			// 7_1
				strComments = "All photos by Chris Kendall.";
			break;
			case 2:
			// 7_2
				strComments = "All photos by Florian Holzherr.";
			break;
			case 3:
			// 7_3
				strComments = "Photo by Chris Kendall.";
			break;
			case 4:
			// 7_4
				strComments = "All photos courtesy Crown Point Cabinetry.";
			break;
			case 5:
			// 7_5
				strComments = "";
			break;
			case 6:
			// 7_6
				strComments = "Photo by Chris Kendall.";
			break;
			case 7:
			// 7_7
				strComments = "All photos by Fion Reilly.";
			break;
			case 8:
			// 7_8
				strComments = "";
			break;
		}
	break;
	case 8:
	//Baths
		switch (intSubSection) {
			case 1:
			// 8_1
				strComments = "";
			break;
			case 2:
			// 8_2
				strComments = "Top and middle photos by Chris Kendall.";
			break;
			case 3:
			// 8_3
				strComments = "Top photo by Chris Kendall.";
			break;
			case 4:
			// 8_4
				strComments = "Top and middle photos by Chris Kendall.";
			break;
			case 5:
			// 8_5
				strComments = "";
			break;
			case 6:
			// 8_6
				strComments = "";
			break;
			case 7:
			// 8_7
				strComments = "Bottom photo by Fion Reilly.";
			break;
			case 8:
			// 8_8
				strComments = "";
			break;
		}
	break;
	case 9:
	//Details
		switch (intSubSection) {
			case 1:
			// 9_1
				strComments = "All photos by Chris Kendall.";
			break;
			case 2:
			// 9_2
				strComments = "All photos by Chris Kendall.";
			break;
			case 3:
			// 9_3
				strComments = "";
			break;
			case 4:
			// 9_4
				strComments = "All photos by Chris Kendall.";
			break;
			case 5:
			// 9_5
				strComments = "Bottom photo by Chris Kendall.";
			break;
			case 6:
			// 9_6
				strComments = "Top photo by Chris Kendall.";
			break;
			case 7:
			// 9_7
				strComments = "";
			break;
		}
	break;
	case 10:
	//Grounds
		switch (intSubSection) {
			case 1:
			// 10_1
				strComments = "All photos by Florian Holzherr.";
			break;
			case 2:
			// 10_2
				strComments = "Photo by Florian Holzherr.";
			break;
			case 3:
			// 10_3
				strComments = "";
			break;
			case 4:
			// 10_4
				strComments = "";
			break;
			case 5:
			// 10_5
				strComments = "Top photo by Chris Kendall.";
			break;
			case 6:
			// 10_6
				strComments = "";
			break;
			case 7:
			// 10_7
				strComments = "";
			break;
			case 8:
			// 10_8
				strComments = "";
			break;
		}
	break;
}
%>
<!--Comments-->
<%=strComments%>
<!--/Comments-->