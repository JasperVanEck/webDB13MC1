<?php>

<script>


function enlarge(x)
{
x.style.height="400px";
x.style.width="400px";
var newwidth = (window.innerWidth / 2) - (x.innerWidth / 2);
var newheight = (window.innerHeight / 2) - (x.innerHeight / 2);
x.style.top = newheight;
x.style.left = newwidth;
x.style.display = "block";
}

function normalsize(x)
{
x.style.height="100px";
x.style.width="100px";
}
</script>


<?>
