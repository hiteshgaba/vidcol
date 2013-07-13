//function for making Lights off

function dimLights()
{
	document.getElementsByName('darkBackgroundLayer')[0].style.display='';
	document.getElementById('dim_l').style.display='none';
	document.getElementById('on_l').style.display='inline';
	return false;

}


//function for making Lights on

function onLights()
{	
	document.getElementsByName('darkBackgroundLayer')[0].style.display='none';
	document.getElementById('dim_l').style.display='inline';
	document.getElementById('on_l').style.display='none';
	return false;

}

var divA=document.getElementById("darkBackgroundLayer")
var divB=document.getElementById("non-dim")

divA.onclick=function(e){
//alert('outside')
onLights();
}

divB.onclick=function(e){
//alert('inside')
if (e && e.stopPropagation) //if stopPropagation method supported
e.stopPropagation()
else
event.cancelBubble=true
}