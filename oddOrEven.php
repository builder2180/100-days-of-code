<!DOCTYPE html>
<!-- This script generates a random number and works out if it's odd or even before putting it into the correct array -->
<html>
<body>

<h1>Odd or Even</h1>

<script type="text/javascript"> 
var arrOdd = ["Odd: "];
var arrEven = ["Even: "];

function generate(){
var num=Math.floor((Math.random() * 100) + 1);
document.f1.t1.value=(num);

var remainder = num%2
var strOdd = " is an odd number. ";
var strEven = " is an even number. ";

if(remainder==1){
document.f1.t2.value=(strOdd);
arrOdd.push(num);
}else{
document.f1.t2.value=(strEven);
arrEven.push(num);
}

document.f1.t3.value=(arrOdd);
document.f1.t4.value=(arrEven);
}
</script>



<form name=f1>
Random number: 
<input type=text name=t1>
<input type=text name=t2><br />
<textarea name=t3 rows="10" cols="100"></textarea><br />
<textarea name=t4 rows="10" cols="100"></textarea><br />

<input type=button value='Display' onClick='generate()';>
</form>

</body>
</html>