<!--hide this script from non-javascript-enabled browsers
//
browserName = navigator.appName;
browserVer = parseInt(navigator.appVersion);

ns3up = (browserName == "Netscape" && browserVer >= 3);
ie4up = (browserName.indexOf("Microsoft") >= 0 && browserVer >= 4);

function doPic(imgName) {
if (ns3up || ie4up) {
imgOn = ("" + imgName);
document.mainpic.src = imgOn;
   }
}

// stop hiding -->