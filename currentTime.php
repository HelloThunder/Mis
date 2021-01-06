<script type="text/javascript">
function display_c(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}

function display_ct() {
var x = new Date()
var x1=x.getMonth() + 1+ "/" + x.getDate() + "/" + (x.getYear()-100); 

var x2= x.getHours( )+ ":" +  x.getMinutes() + ":" +  x.getSeconds();
document.getElementById('time').innerHTML = x2;
document.getElementById('date').innerHTML = x1;
display_c();
 }
 </script>