<% 
// Browser Detect
String useragent = request.getHeader("User-Agent");
String user = useragent.toLowerCase();
String strStyleSheet = "";
// set style sheet
if(user.indexOf("msie") != -1) 
{
	strStyleSheet = "style.css";
} 
else
{
	if(user.indexOf("mac") != -1) 
	{
		strStyleSheet = "stylemacnetscape.css";
	}
	else
	{
		strStyleSheet = "style.css";
	}
}
%>