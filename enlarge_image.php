<?php>

<script>type="text/javascript">



function getElementLeft(elm) 
{
    var x = 0;

    //set x to elm’s offsetLeft
    x = elm.offsetLeft;

    //set elm to its offsetParent
    elm = elm.offsetParent;

    //use while loop to check if elm is null
    // if not then add current elm’s offsetLeft to x
    //offsetTop to y and set elm to its offsetParent

    while(elm != null)
    {
        x = parseInt(x) + parseInt(elm.offsetLeft);
        elm = elm.offsetParent;
    }
    return x;
}

function getElementTop(elm) 
{
    var y = 0;

    //set x to elm’s offsetLeft
    y = elm.offsetTop;

    //set elm to its offsetParent
    elm = elm.offsetParent;

    //use while loop to check if elm is null
    // if not then add current elm’s offsetLeft to x
    //offsetTop to y and set elm to its offsetParent

    while(elm != null)
    {
        y = parseInt(y) + parseInt(elm.offsetTop);
        elm = elm.offsetParent;
    }

    return y;
}

function center(object)
 {
  object.style.marginLeft = parseInt(object.offsetWidth) + 'px';
  object.style.marginTop = parseInt(object.offsetWidth/8) + 'px';
  //object.style.marginLeft=(getElementLeft(obj)/2) +'px';
  //object.style.marginTop=(getElementTop(obj)/2) + 'px';
 }
 
function Large(obj)
{
	var imgbox=document.getElementById("imgbox");

    
		
    var img = document.createElement("img");
    img.src=obj.src;
	
    //img.style.width='300px';
    //img.style.height='300px';
    
    if(img.addEventListener){
        img.addEventListener('mouseout',Out,false);
		
    } else {
        img.attachEvent('onmouseout',Out);
		
    }             
    imgbox.innerHTML='';
    imgbox.appendChild(img);
	center(imgbox);
	imgbox.style.visibility='visible';
   //msgbox.style.display = "block";
	

}

function Out()
{
    document.getElementById("imgbox").style.visibility='hidden';
}

</script>
<?>