/**
 * Created by ferdin_k on 11/24/16.
 */

var delayBeforeScroll=500;
var speed=1;
var pauseIt=1;

var copySpeed=speed;
var pauseSpeed=(pauseIt==0)? copySpeed: 0;
var actualHeight='';

var cross_text;
var textHeight;

function scrollText() {
    if (parseInt(cross_text.style.top)>(actualHeight*(-1)+8))
        cross_text.style.top=parseInt(cross_text.style.top)-copySpeed+"px";
    else
        cross_text.style.top=parseInt(textHeight)+8+"px";
}

function initializeScrolling(){
    cross_text=document.getElementById("scroll");
    cross_text.style.top=0;
    textHeight=document.getElementById("scrollContainer").offsetHeight;
    actualHeight=cross_text.offsetHeight;
    if (window.opera || navigator.userAgent.indexOf("Netscape/7")!=-1) {
        cross_text.style.height=textHeight+"px";
        cross_text.style.overflow="scroll";
        return
    }
    setTimeout('lefttime=setInterval("scrollText()",30)', delayBeforeScroll)
}

if (window.addEventListener)
    window.addEventListener("load", initializeScrolling, false);
else if (window.attachEvent)
    window.attachEvent("onload", initializeScrolling);
else if (document.getElementById)
    window.onload=initializeScrolling;
