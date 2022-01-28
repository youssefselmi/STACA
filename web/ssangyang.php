<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript">
    var width=100;
    var difference=2;
    intervalID=0;


    document.getElementById('img1').style.width=width;
    function increase{
    	intervalID=setInterval(zoomIn,20);
    }
    function decrease{
    	intervalID=setInterval(zoomOut,20);
    }


function zoomIn()
{

if(width<200)
{
width=width-difference;
 document.getElementById('img1').style.width=width;
 console.log(width);
 else{
  clearInterval(intervalID);
 }

}
function zoomOut()
{

if(width>100)
{
width=width+difference;
 document.getElementById('img1').style.width=width;
 console.log(width);
 else{
  clearInterval(intervalID);
 }

}
}
</script>
<body>
<img onmouseover="increase()"onmouseout="decrease()"id="img1"
img src="bmw.jpg" width="500"/>

</html>

