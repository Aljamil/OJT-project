

<script text="javascript">

var inAm = '<?php echo $In1; ?>';
var inPm = '<?php echo $Resume1; ?>';

function late() {
	alert(inAm + " " + inPm);
}


var late1 = function() {

	var in1 = $('#inam1').val();
	var in2 = $('#inpm1').val();

         var time1 = inAm.split(':'), time2 = $('#inam1').val().split(':');
         var hours1 = parseFloat(time1[0], 10), 
             hours2 = parseFloat(time2[0], 10),
             mins1 = parseFloat(time1[1], 10),
             mins2 = parseFloat(time2[1], 10);
         var hoursA = hours2 - hours1, minsA = 0;
         if(hoursA < 0) hoursA = 24 + hoursA;
         if(mins2 >= mins1) {
             minsA = mins2 - mins1;
         }
         else {
             minsA = (mins2 + 60) - mins1;
             hoursA--;
         }
         minsA = minsA; // take percentage in 60
         hoursA += minsA;
         hoursA = hoursA.toFixed(2);
     	


         var time3 = inPm.split(':'), time4 = $('#inpm1').val().split(':');
         var hours3 = parseFloat(time3[0], 10), 
             hours4 = parseFloat(time4[0], 10),
             mins3 = parseFloat(time3[1], 10),
             mins4 = parseFloat(time4[1], 10);
         var hoursB = hours4 - hours3, minsB = 0;
         if(hoursB < 0) hoursB = 24 + hoursB;
         if(mins4 >= mins3) {
             minsB = mins4 - mins3;
         }
         else {
             minsB = (mins4 + 60) - mins3;
             hoursB--;
         }
         minsB = minsB; // take percentage in 60
         hoursB += minsB;
         hoursB = hoursB.toFixed(2);
 

         if((in1 != '') && (in2 != '') ) {
         	var sum = parseFloat(hoursA) + parseFloat(hoursB);
            if(sum > 0.00){
                $('#lt1').val(sum.toFixed(2));
                var test = (sum.toFixed(2)).toString();
                $('#lt1').css("color","red");
            }
            else{
                $('#lt1').val(sum.toFixed(2));
                $('#lt1').css("color","black");
            }
         }

         else if((in1 != '') || (in2 == '') && (inPm == '')) {
         	//$('#lateam1').val(hoursA);
         	//$('#latepm1').val(0.0);
         	$('#lt1').val(parseFloat(hoursA + 0.0));



         }

         else if((in1 == '') || (in2 != '')  && (inAm == '')){
         	//$('#lateam1').val(0.0);
         	//$('#latepm1').val(hoursB);
         	$('#lt1').val(parseFloat(hoursB + 0.0));

         }

         else{
         	//$('#lateam1').val(0.0);
         	//$('#latepm1').val(0.0);
         	$('#lt1').val(0.0);

         }
        
     };

     $("#inam1").keydown( function() {
     	late1();
     });

     $("#inpm1").keydown( function () {
     	late1();
     });

</script>

<!-- Day 2 -->
<script text="javascript">

var inAm = '<?php echo $In1; ?>';
var inPm = '<?php echo $Resume1; ?>';


var late2 = function() {

	var in1 = $('#inam2').val();
	var in2 = $('#inpm2').val();


         var time1 = inAm.split(':'), time2 = $('#inam2').val().split(':');
         var hours1 = parseFloat(time1[0], 10), 
             hours2 = parseFloat(time2[0], 10),
             mins1 = parseFloat(time1[1], 10),
             mins2 = parseFloat(time2[1], 10);
         var hoursA = hours2 - hours1, minsA = 0;
         if(hoursA < 0) hoursA = 24 + hoursA;
         if(mins2 >= mins1) {
             minsA = mins2 - mins1;
         }
         else {
             minsA = (mins2 + 60) - mins1;
             hoursA--;
         }
         minsA = minsA; // take percentage in 60
         hoursA += minsA;
         hoursA = hoursA.toFixed(2);
		

		
         var time3 = inPm.split(':'), time4 = $('#inpm2').val().split(':');
         var hours3 = parseFloat(time3[0], 10), 
             hours4 = parseFloat(time4[0], 10),
             mins3 = parseFloat(time3[1], 10),
             mins4 = parseFloat(time4[1], 10);
         var hoursB = hours4 - hours3, minsB = 0;
         if(hoursB < 0) hoursB = 24 + hoursB;
         if(mins4 >= mins3) {
             minsB = mins4 - mins3;
         }
         else {
             minsB = (mins4 + 60) - mins3;
             hoursB--;
         }
         minsB = minsB; // take percentage in 60
         hoursB += minsB;
         hoursB = hoursB.toFixed(2);
     	

         if((in1 != '') && (in2 != '') ) {
         	var sum = parseFloat(hoursA) + parseFloat(hoursB);
         	//$('#lateam2').val(hoursA);
         	//$('#latepm2').val(hoursB);
         	$('#lt2').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (inPm == '')) {
         	//$('#lateam2').val(hoursA);
         	//$('#latepm2').val(0.0);
         	$('#lt2').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (inAm == '')){
         	//$('#lateam2').val(0.0);
         	//$('#latepm2').val(hoursB);
         	$('#lt2').val(parseFloat(hoursB + 0.0));

         }

         else{
         	//$('#lateam2').val(0.0);
         	//$('#latepm2').val(0.0);
         	$('#lt2').val(0.0);

         }
        
     };

     $("#inam2").keydown( function() {
     	late2();
     });

     $("#inpm2").keydown( function () {
     	late2();
     });

</script>

<!-- Day 3 -->
<script text="javascript">

var inAm = '<?php echo $In1; ?>';
var inPm = '<?php echo $Resume1; ?>';


var late3 = function() {

	var in1 = $('#inam3').val();
	var in2 = $('#inpm3').val();

	
         var time1 = inAm.split(':'), time2 = $('#inam3').val().split(':');
         var hours1 = parseFloat(time1[0], 10), 
             hours2 = parseFloat(time2[0], 10),
             mins1 = parseFloat(time1[1], 10),
             mins2 = parseFloat(time2[1], 10);
         var hoursA = hours2 - hours1, minsA = 0;
         if(hoursA < 0) hoursA = 24 + hoursA;
         if(mins2 >= mins1) {
             minsA = mins2 - mins1;
         }
         else {
             minsA = (mins2 + 60) - mins1;
             hoursA--;
         }
         minsA = minsA; // take percentage in 60
         hoursA += minsA;
         hoursA = hoursA.toFixed(2);
		

		
         var time3 = inPm.split(':'), time4 = $('#inpm3').val().split(':');
         var hours3 = parseFloat(time3[0], 10), 
             hours4 = parseFloat(time4[0], 10),
             mins3 = parseFloat(time3[1], 10),
             mins4 = parseFloat(time4[1], 10);
         var hoursB = hours4 - hours3, minsB = 0;
         if(hoursB < 0) hoursB = 24 + hoursB;
         if(mins4 >= mins3) {
             minsB = mins4 - mins3;
         }
         else {
             minsB = (mins4 + 60) - mins3;
             hoursB--;
         }
         minsB = minsB; // take percentage in 60
         hoursB += minsB;
         hoursB = hoursB.toFixed(2);
     	

         if((in1 != '') && (in2 != '') ) {
         	var sum = parseFloat(hoursA) + parseFloat(hoursB);
         	//$('#lateam3').val(hoursA);
         	//$('#latepm3').val(hoursB);
         	$('#lt3').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (inPm == '')) {
         	//$('#lateam3').val(hoursA);
         	//$('#latepm3').val(0.0);
         	$('#lt3').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (inAm == '')){
         	//$('#lateam3').val(0.0);
         	//$('#latepm3').val(hoursB);
         	$('#lt3').val(parseFloat(hoursB + 0.0));

         }

         else{
         	//$('#lateam3').val(0.0);
         	//$('#latepm3').val(0.0);
         	$('#lt3').val(0.0);

         }
        
     };

     $("#inam3").keydown( function() {
     	late3();
     });

     $("#inpm3").keydown( function () {
     	late3();
     });

</script>

<!-- Day 4 -->
<script text="javascript">

var inAm = '<?php echo $In1; ?>';
var inPm = '<?php echo $Resume1; ?>';


var late4 = function() {

	var in1 = $('#inam4').val();
	var in2 = $('#inpm4').val();

	
         var time1 = inAm.split(':'), time2 = $('#inam4').val().split(':');
         var hours1 = parseFloat(time1[0], 10), 
             hours2 = parseFloat(time2[0], 10),
             mins1 = parseFloat(time1[1], 10),
             mins2 = parseFloat(time2[1], 10);
         var hoursA = hours2 - hours1, minsA = 0;
         if(hoursA < 0) hoursA = 24 + hoursA;
         if(mins2 >= mins1) {
             minsA = mins2 - mins1;
         }
         else {
             minsA = (mins2 + 60) - mins1;
             hoursA--;
         }
         minsA = minsA; // take percentage in 60
         hoursA += minsA;
         hoursA = hoursA.toFixed(2);
		

		
         var time3 = inPm.split(':'), time4 = $('#inpm4').val().split(':');
         var hours3 = parseFloat(time3[0], 10), 
             hours4 = parseFloat(time4[0], 10),
             mins3 = parseFloat(time3[1], 10),
             mins4 = parseFloat(time4[1], 10);
         var hoursB = hours4 - hours3, minsB = 0;
         if(hoursB < 0) hoursB = 24 + hoursB;
         if(mins4 >= mins3) {
             minsB = mins4 - mins3;
         }
         else {
             minsB = (mins4 + 60) - mins3;
             hoursB--;
         }
         minsB = minsB; // take percentage in 60
         hoursB += minsB;
         hoursB = hoursB.toFixed(2);
     	

         if((in1 != '') && (in2 != '') ) {
         	var sum = parseFloat(hoursA) + parseFloat(hoursB);
         	//$('#lateam4').val(hoursA);
         	//$('#latepm4').val(hoursB);
         	$('#lt4').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (inPm == '')) {
         	//$('#lateam4').val(hoursA);
         	//$('#latepm4').val(0.0);
         	$('#lt4').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (inAm == '')){
         	//$('#lateam4').val(0.0);
         	//$('#latepm4').val(hoursB);
         	$('#lt4').val(parseFloat(hoursB + 0.0));

         }

         else{
         	//$('#lateam4').val(0.0);
         	//$('#latepm4').val(0.0);
         	$('#lt4').val(0.0);

         }
        
     };

     $("#inam4").keydown( function() {
     	late4();
     });

     $("#inpm4").keydown( function () {
     	late4();
     });

</script>

<!-- Day 5 -->
<script text="javascript">

var inAm = '<?php echo $In1; ?>';
var inPm = '<?php echo $Resume1; ?>';


var late5 = function() {

	var in1 = $('#inam5').val();
	var in2 = $('#inpm5').val();


         var time1 = inAm.split(':'), time2 = $('#inam5').val().split(':');
         var hours1 = parseFloat(time1[0], 10), 
             hours2 = parseFloat(time2[0], 10),
             mins1 = parseFloat(time1[1], 10),
             mins2 = parseFloat(time2[1], 10);
         var hoursA = hours2 - hours1, minsA = 0;
         if(hoursA < 0) hoursA = 24 + hoursA;
         if(mins2 >= mins1) {
             minsA = mins2 - mins1;
         }
         else {
             minsA = (mins2 + 60) - mins1;
             hoursA--;
         }
         minsA = minsA; // take percentage in 60
         hoursA += minsA;
         hoursA = hoursA.toFixed(2);
		

		
         var time3 = inPm.split(':'), time4 = $('#inpm5').val().split(':');
         var hours3 = parseFloat(time3[0], 10), 
             hours4 = parseFloat(time4[0], 10),
             mins3 = parseFloat(time3[1], 10),
             mins4 = parseFloat(time4[1], 10);
         var hoursB = hours4 - hours3, minsB = 0;
         if(hoursB < 0) hoursB = 24 + hoursB;
         if(mins4 >= mins3) {
             minsB = mins4 - mins3;
         }
         else {
             minsB = (mins4 + 60) - mins3;
             hoursB--;
         }
         minsB = minsB; // take percentage in 60
         hoursB += minsB;
         hoursB = hoursB.toFixed(2);
     	

         if((in1 != '') && (in2 != '') ) {
         	var sum = parseFloat(hoursA) + parseFloat(hoursB);
         	//$('#lateam5').val(hoursA);
         	//$('#latepm5').val(hoursB);
         	$('#lt5').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (inPm == '')) {
         	//$('#lateam5').val(hoursA);
         	//$('#latepm5').val(0.0);
         	$('#lt5').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (inAm == '')){
         	//$('#lateam5').val(0.0);
         	//$('#latepm5').val(hoursB);
         	$('#lt5').val(parseFloat(hoursB + 0.0));

         }

         else{
         	//$('#lateam5').val(0.0);
         	//$('#latepm5').val(0.0);
         	$('#lt5').val(0.0);

         }
        
     };

     $("#inam5").keydown( function() {
     	late5();
     });

     $("#inpm5").keydown( function () {
     	late5();
     });

</script>

<!-- Day 6 -->
<script text="javascript">

var inAm = '<?php echo $In1; ?>';
var inPm = '<?php echo $Resume1; ?>';


var late6 = function() {

	var in1 = $('#inam6').val();
	var in2 = $('#inpm6').val();


         var time1 = inAm.split(':'), time2 = $('#inam6').val().split(':');
         var hours1 = parseFloat(time1[0], 10), 
             hours2 = parseFloat(time2[0], 10),
             mins1 = parseFloat(time1[1], 10),
             mins2 = parseFloat(time2[1], 10);
         var hoursA = hours2 - hours1, minsA = 0;
         if(hoursA < 0) hoursA = 24 + hoursA;
         if(mins2 >= mins1) {
             minsA = mins2 - mins1;
         }
         else {
             minsA = (mins2 + 60) - mins1;
             hoursA--;
         }
         minsA = minsA; // take percentage in 60
         hoursA += minsA;
         hoursA = hoursA.toFixed(2);
		

		
         var time3 = inPm.split(':'), time4 = $('#inpm6').val().split(':');
         var hours3 = parseFloat(time3[0], 10), 
             hours4 = parseFloat(time4[0], 10),
             mins3 = parseFloat(time3[1], 10),
             mins4 = parseFloat(time4[1], 10);
         var hoursB = hours4 - hours3, minsB = 0;
         if(hoursB < 0) hoursB = 24 + hoursB;
         if(mins4 >= mins3) {
             minsB = mins4 - mins3;
         }
         else {
             minsB = (mins4 + 60) - mins3;
             hoursB--;
         }
         minsB = minsB; // take percentage in 60
         hoursB += minsB;
         hoursB = hoursB.toFixed(2);
     	

         if((in1 != '') && (in2 != '') ) {
         	var sum = parseFloat(hoursA) + parseFloat(hoursB);
         	//$('#lateam6').val(hoursA);
         	//$('#latepm6').val(hoursB);
         	$('#lt6').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (inPm == '')) {
         	//$('#lateam6').val(hoursA);
         	//$('#latepm6').val(0.0);
         	$('#lt6').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (inAm == '')){
         	//$('#lateam6').val(0.0);
         	//$('#latepm6').val(hoursB);
         	$('#lt6').val(parseFloat(hoursB + 0.0));

         }

         else{
         	//$('#lateam6').val(0.0);
         	//$('#latepm6').val(0.0);
         	$('#lt6').val(0.0);

         }
        
     };

     $("#inam6").keydown( function() {
     	late6();
     });

     $("#inpm6").keydown( function () {
     	late6();
     });

</script>

<!-- Day 7 -->
<script text="javascript">

var inAm = '<?php echo $In1; ?>';
var inPm = '<?php echo $Resume1; ?>';


var late7 = function() {

	var in1 = $('#inam7').val();
	var in2 = $('#inpm7').val();

	
         var time1 = inAm.split(':'), time2 = $('#inam7').val().split(':');
         var hours1 = parseFloat(time1[0], 10), 
             hours2 = parseFloat(time2[0], 10),
             mins1 = parseFloat(time1[1], 10),
             mins2 = parseFloat(time2[1], 10);
         var hoursA = hours2 - hours1, minsA = 0;
         if(hoursA < 0) hoursA = 24 + hoursA;
         if(mins2 >= mins1) {
             minsA = mins2 - mins1;
         }
         else {
             minsA = (mins2 + 60) - mins1;
             hoursA--;
         }
         minsA = minsA; // take percentage in 60
         hoursA += minsA;
         hoursA = hoursA.toFixed(2);
		

		
         var time3 = inPm.split(':'), time4 = $('#inpm7').val().split(':');
         var hours3 = parseFloat(time3[0], 10), 
             hours4 = parseFloat(time4[0], 10),
             mins3 = parseFloat(time3[1], 10),
             mins4 = parseFloat(time4[1], 10);
         var hoursB = hours4 - hours3, minsB = 0;
         if(hoursB < 0) hoursB = 24 + hoursB;
         if(mins4 >= mins3) {
             minsB = mins4 - mins3;
         }
         else {
             minsB = (mins4 + 60) - mins3;
             hoursB--;
         }
         minsB = minsB; // take percentage in 60
         hoursB += minsB;
         hoursB = hoursB.toFixed(2);
     	

         if((in1 != '') && (in2 != '') ) {
         	var sum = parseFloat(hoursA) + parseFloat(hoursB);
         	//$('#lateam7').val(hoursA);
         	//$('#latepm7').val(hoursB);
         	$('#lt7').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (inPm == '')) {
         	//$('#lateam7').val(hoursA);
         	//$('#latepm7').val(0.0);
         	$('#lt7').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (inAm == '')){
         	//$('#lateam7').val(0.0);
         	//$('#latepm7').val(hoursB);
         	$('#lt7').val(parseFloat(hoursB + 0.0));

         }

         else{
         	//$('#lateam7').val(0.0);
         	//$('#latepm7').val(0.0);
         	$('#lt7').val(0.0);

         }
        
     };

     $("#inam7").keydown( function() {
     	late7();
     });

     $("#inpm7").keydown( function () {
     	late7();
     });

</script>

<!-- Day 8 -->
<script text="javascript">

var inAm = '<?php echo $In1; ?>';
var inPm = '<?php echo $Resume1; ?>';


var late8 = function() {

	var in1 = $('#inam8').val();
	var in2 = $('#inpm8').val();

	
         var time1 = inAm.split(':'), time2 = $('#inam8').val().split(':');
         var hours1 = parseFloat(time1[0], 10), 
             hours2 = parseFloat(time2[0], 10),
             mins1 = parseFloat(time1[1], 10),
             mins2 = parseFloat(time2[1], 10);
         var hoursA = hours2 - hours1, minsA = 0;
         if(hoursA < 0) hoursA = 24 + hoursA;
         if(mins2 >= mins1) {
             minsA = mins2 - mins1;
         }
         else {
             minsA = (mins2 + 60) - mins1;
             hoursA--;
         }
         minsA = minsA; // take percentage in 60
         hoursA += minsA;
         hoursA = hoursA.toFixed(2);
		

		
         var time3 = inPm.split(':'), time4 = $('#inpm8').val().split(':');
         var hours3 = parseFloat(time3[0], 10), 
             hours4 = parseFloat(time4[0], 10),
             mins3 = parseFloat(time3[1], 10),
             mins4 = parseFloat(time4[1], 10);
         var hoursB = hours4 - hours3, minsB = 0;
         if(hoursB < 0) hoursB = 24 + hoursB;
         if(mins4 >= mins3) {
             minsB = mins4 - mins3;
         }
         else {
             minsB = (mins4 + 60) - mins3;
             hoursB--;
         }
         minsB = minsB; // take percentage in 60
         hoursB += minsB;
         hoursB = hoursB.toFixed(2);
     	

         if((in1 != '') && (in2 != '') ) {
         	var sum = parseFloat(hoursA) + parseFloat(hoursB);
         	//$('#lateam8').val(hoursA);
         	//$('#latepm8').val(hoursB);
         	$('#lt8').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (inPm == '')) {
         	//$('#lateam8').val(hoursA);
         	//$('#latepm8').val(0.0);
         	$('#lt8').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (inAm == '')){
         	//$('#lateam8').val(0.0);
         	//$('#latepm8').val(hoursB);
         	$('#lt8').val(parseFloat(hoursB + 0.0));

         }

         else{
         	//$('#lateam8').val(0.0);
         	//$('#latepm8').val(0.0);
         	$('#lt8').val(0.0);

         }
        
     };

     $("#inam8").keydown( function() {
     	late8();
     });

     $("#inpm8").keydown( function () {
     	late8();
     });

</script>

<!-- Day 9 -->
<script text="javascript">

var inAm = '<?php echo $In1; ?>';
var inPm = '<?php echo $Resume1; ?>';


var late9 = function() {

	var in1 = $('#inam9').val();
	var in2 = $('#inpm9').val();

	
         var time1 = inAm.split(':'), time2 = $('#inam9').val().split(':');
         var hours1 = parseFloat(time1[0], 10), 
             hours2 = parseFloat(time2[0], 10),
             mins1 = parseFloat(time1[1], 10),
             mins2 = parseFloat(time2[1], 10);
         var hoursA = hours2 - hours1, minsA = 0;
         if(hoursA < 0) hoursA = 24 + hoursA;
         if(mins2 >= mins1) {
             minsA = mins2 - mins1;
         }
         else {
             minsA = (mins2 + 60) - mins1;
             hoursA--;
         }
         minsA = minsA; // take percentage in 60
         hoursA += minsA;
         hoursA = hoursA.toFixed(2);
		

		
         var time3 = inPm.split(':'), time4 = $('#inpm9').val().split(':');
         var hours3 = parseFloat(time3[0], 10), 
             hours4 = parseFloat(time4[0], 10),
             mins3 = parseFloat(time3[1], 10),
             mins4 = parseFloat(time4[1], 10);
         var hoursB = hours4 - hours3, minsB = 0;
         if(hoursB < 0) hoursB = 24 + hoursB;
         if(mins4 >= mins3) {
             minsB = mins4 - mins3;
         }
         else {
             minsB = (mins4 + 60) - mins3;
             hoursB--;
         }
         minsB = minsB; // take percentage in 60
         hoursB += minsB;
         hoursB = hoursB.toFixed(2);
     	

         if((in1 != '') && (in2 != '') ) {
         	var sum = parseFloat(hoursA) + parseFloat(hoursB);
         	//$('#lateam9').val(hoursA);
         	//$('#latepm9').val(hoursB);
         	$('#lt9').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (inPm == '')) {
         	//$('#lateam9').val(hoursA);
         	//$('#latepm9').val(0.0);
         	$('#lt9').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (inAm == '')){
         	//$('#lateam9').val(0.0);
         	//$('#latepm9').val(hoursB);
         	$('#lt9').val(parseFloat(hoursB + 0.0));

         }

         else{
         	//$('#lateam9').val(0.0);
         	//$('#latepm9').val(0.0);
         	$('#lt9').val(0.0);

         }
        
     };

     $("#inam9").keydown( function() {
     	late9();
     });

     $("#inpm9").keydown( function () {
     	late9();
     });

</script>

<!-- Day 10 -->
<script text="javascript">

var inAm = '<?php echo $In1; ?>';
var inPm = '<?php echo $Resume1; ?>';


var late10 = function() {

	var in1 = $('#inam10').val();
	var in2 = $('#inpm10').val();

         var time1 = inAm.split(':'), time2 = $('#inam10').val().split(':');
         var hours1 = parseFloat(time1[0], 10), 
             hours2 = parseFloat(time2[0], 10),
             mins1 = parseFloat(time1[1], 10),
             mins2 = parseFloat(time2[1], 10);
         var hoursA = hours2 - hours1, minsA = 0;
         if(hoursA < 0) hoursA = 24 + hoursA;
         if(mins2 >= mins1) {
             minsA = mins2 - mins1;
         }
         else {
             minsA = (mins2 + 60) - mins1;
             hoursA--;
         }
         minsA = minsA; // take percentage in 60
         hoursA += minsA;
         hoursA = hoursA.toFixed(2);
		

         var time3 = inPm.split(':'), time4 = $('#inpm10').val().split(':');
         var hours3 = parseFloat(time3[0], 10), 
             hours4 = parseFloat(time4[0], 10),
             mins3 = parseFloat(time3[1], 10),
             mins4 = parseFloat(time4[1], 10);
         var hoursB = hours4 - hours3, minsB = 0;
         if(hoursB < 0) hoursB = 24 + hoursB;
         if(mins4 >= mins3) {
             minsB = mins4 - mins3;
         }
         else {
             minsB = (mins4 + 60) - mins3;
             hoursB--;
         }
         minsB = minsB; // take percentage in 60
         hoursB += minsB;
         hoursB = hoursB.toFixed(2);
     	

         if((in1 != '') && (in2 != '') ) {
         	var sum = parseFloat(hoursA) + parseFloat(hoursB);
         	//$('#lateam10').val(hoursA);
         	//$('#latepm10').val(hoursB);
         	$('#lt10').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (inPm == '')) {
         	//$('#lateam10').val(hoursA);
         	//$('#latepm10').val(0.0);
         	$('#lt10').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (inAm == '')){
         	//$('#lateam10').val(0.0);
         	//$('#latepm10').val(hoursB);
         	$('#lt10').val(parseFloat(hoursB + 0.0));

         }

         else{
         	//$('#lateam10').val(0.0);
         	//$('#latepm10').val(0.0);
         	$('#lt10').val(0.0);

         }
        
     };

     $("#inam10").keydown( function() {
     	late10();
     });

     $("#inpm10").keydown( function () {
     	late10();
     });

</script>

<!-- Day 11 -->
<script text="javascript">

var inAm = '<?php echo $In1; ?>';
var inPm = '<?php echo $Resume1; ?>';


var late11 = function() {

	var in1 = $('#inam11').val();
	var in2 = $('#inpm11').val();

	
         var time1 = inAm.split(':'), time2 = $('#inam11').val().split(':');
         var hours1 = parseFloat(time1[0], 10), 
             hours2 = parseFloat(time2[0], 10),
             mins1 = parseFloat(time1[1], 10),
             mins2 = parseFloat(time2[1], 10);
         var hoursA = hours2 - hours1, minsA = 0;
         if(hoursA < 0) hoursA = 24 + hoursA;
         if(mins2 >= mins1) {
             minsA = mins2 - mins1;
         }
         else {
             minsA = (mins2 + 60) - mins1;
             hoursA--;
         }
         minsA = minsA; // take percentage in 60
         hoursA += minsA;
         hoursA = hoursA.toFixed(2);
		

		
         var time3 = inPm.split(':'), time4 = $('#inpm11').val().split(':');
         var hours3 = parseFloat(time3[0], 10), 
             hours4 = parseFloat(time4[0], 10),
             mins3 = parseFloat(time3[1], 10),
             mins4 = parseFloat(time4[1], 10);
         var hoursB = hours4 - hours3, minsB = 0;
         if(hoursB < 0) hoursB = 24 + hoursB;
         if(mins4 >= mins3) {
             minsB = mins4 - mins3;
         }
         else {
             minsB = (mins4 + 60) - mins3;
             hoursB--;
         }
         minsB = minsB; // take percentage in 60
         hoursB += minsB;
         hoursB = hoursB.toFixed(2);
     	

         if((in1 != '') && (in2 != '') ) {
         	var sum = parseFloat(hoursA) + parseFloat(hoursB);
         	//$('#lateam11').val(hoursA);
         	//$('#latepm11').val(hoursB);
         	$('#lt11').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (inPm == '')) {
         	//$('#lateam11').val(hoursA);
         	//$('#latepm11').val(0.0);
         	$('#lt11').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (inAm == '')){
         	//$('#lateam11').val(0.0);
         	//$('#latepm11').val(hoursB);
         	$('#lt11').val(parseFloat(hoursB + 0.0));

         }

         else{
         	//$('#lateam11').val(0.0);
         	//$('#latepm11').val(0.0);
         	$('#lt11').val(0.0);

         }
        
     };

     $("#inam11").keydown( function() {
     	late11();
     });

     $("#inpm11").keydown( function () {
     	late11();
     });

</script>

<!-- Day 12 -->
<script text="javascript">

var inAm = '<?php echo $In1; ?>';
var inPm = '<?php echo $Resume1; ?>';


var late12 = function() {

	var in1 = $('#inam12').val();
	var in2 = $('#inpm12').val();

	
         var time1 = inAm.split(':'), time2 = $('#inam12').val().split(':');
         var hours1 = parseFloat(time1[0], 10), 
             hours2 = parseFloat(time2[0], 10),
             mins1 = parseFloat(time1[1], 10),
             mins2 = parseFloat(time2[1], 10);
         var hoursA = hours2 - hours1, minsA = 0;
         if(hoursA < 0) hoursA = 24 + hoursA;
         if(mins2 >= mins1) {
             minsA = mins2 - mins1;
         }
         else {
             minsA = (mins2 + 60) - mins1;
             hoursA--;
         }
         minsA = minsA; // take percentage in 60
         hoursA += minsA;
         hoursA = hoursA.toFixed(2);
		

		
         var time3 = inPm.split(':'), time4 = $('#inpm12').val().split(':');
         var hours3 = parseFloat(time3[0], 10), 
             hours4 = parseFloat(time4[0], 10),
             mins3 = parseFloat(time3[1], 10),
             mins4 = parseFloat(time4[1], 10);
         var hoursB = hours4 - hours3, minsB = 0;
         if(hoursB < 0) hoursB = 24 + hoursB;
         if(mins4 >= mins3) {
             minsB = mins4 - mins3;
         }
         else {
             minsB = (mins4 + 60) - mins3;
             hoursB--;
         }
         minsB = minsB; // take percentage in 60
         hoursB += minsB;
         hoursB = hoursB.toFixed(2);
     	 

         if((in1 != '') && (in2 != '') ) {
         	var sum = parseFloat(hoursA) + parseFloat(hoursB);
         	//$('#lateam12').val(hoursA);
         	//$('#latepm12').val(hoursB);
         	$('#lt12').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (inPm == '')) {
         	//$('#lateam12').val(hoursA);
         	//$('#latepm12').val(0.0);
         	$('#lt12').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (inAm == '')){
         	//$('#lateam12').val(0.0);
         	//$('#latepm12').val(hoursB);
         	$('#lt12').val(parseFloat(hoursB + 0.0));

         }

         else{
         	//$('#lateam12').val(0.0);
         	//$('#latepm12').val(0.0);
         	$('#lt12').val(0.0);

         }
        
     };

     $("#inam12").keydown( function() {
     	late12();
     });

     $("#inpm12").keydown( function () {
     	late12();
     });

</script>

<!-- Day 13 -->
<script text="javascript">

var inAm = '<?php echo $In1; ?>';
var inPm = '<?php echo $Resume1; ?>';


var late13 = function() {

	var in1 = $('#inam13').val();
	var in2 = $('#inpm13').val();

	
         var time1 = inAm.split(':'), time2 = $('#inam13').val().split(':');
         var hours1 = parseFloat(time1[0], 10), 
             hours2 = parseFloat(time2[0], 10),
             mins1 = parseFloat(time1[1], 10),
             mins2 = parseFloat(time2[1], 10);
         var hoursA = hours2 - hours1, minsA = 0;
         if(hoursA < 0) hoursA = 24 + hoursA;
         if(mins2 >= mins1) {
             minsA = mins2 - mins1;
         }
         else {
             minsA = (mins2 + 60) - mins1;
             hoursA--;
         }
         minsA = minsA; // take percentage in 60
         hoursA += minsA;
         hoursA = hoursA.toFixed(2);
		

		
         var time3 = inPm.split(':'), time4 = $('#inpm13').val().split(':');
         var hours3 = parseFloat(time3[0], 10), 
             hours4 = parseFloat(time4[0], 10),
             mins3 = parseFloat(time3[1], 10),
             mins4 = parseFloat(time4[1], 10);
         var hoursB = hours4 - hours3, minsB = 0;
         if(hoursB < 0) hoursB = 24 + hoursB;
         if(mins4 >= mins3) {
             minsB = mins4 - mins3;
         }
         else {
             minsB = (mins4 + 60) - mins3;
             hoursB--;
         }
         minsB = minsB; // take percentage in 60
         hoursB += minsB;
         hoursB = hoursB.toFixed(2);
     	

         if((in1 != '') && (in2 != '') ) {
         	var sum = parseFloat(hoursA) + parseFloat(hoursB);
         	//$('#lateam13').val(hoursA);
         	//$('#latepm13').val(hoursB);
         	$('#lt13').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (inPm == '')) {
         	//$('#lateam13').val(hoursA);
         	//$('#latepm13').val(0.0);
         	$('#lt13').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (inAm == '')){
         	//$('#lateam13').val(0.0);
         	//$('#latepm13').val(hoursB);
         	$('#lt13').val(parseFloat(hoursB + 0.0));

         }

         else{
         	//$('#lateam13').val(0.0);
         	//$('#latepm13').val(0.0);
         	$('#lt13').val(0.0);

         }
        
     };

     $("#inam13").keydown( function() {
     	late13();
     });

     $("#inpm13").keydown( function () {
     	late13();
     });

</script>

<!-- Day 14 -->
<script text="javascript">

var inAm = '<?php echo $In1; ?>';
var inPm = '<?php echo $Resume1; ?>';


var late14 = function() {

	var in1 = $('#inam14').val();
	var in2 = $('#inpm14').val();

	
         var time1 = inAm.split(':'), time2 = $('#inam14').val().split(':');
         var hours1 = parseFloat(time1[0], 10), 
             hours2 = parseFloat(time2[0], 10),
             mins1 = parseFloat(time1[1], 10),
             mins2 = parseFloat(time2[1], 10);
         var hoursA = hours2 - hours1, minsA = 0;
         if(hoursA < 0) hoursA = 24 + hoursA;
         if(mins2 >= mins1) {
             minsA = mins2 - mins1;
         }
         else {
             minsA = (mins2 + 60) - mins1;
             hoursA--;
         }
         minsA = minsA; // take percentage in 60
         hoursA += minsA;
         hoursA = hoursA.toFixed(2);
		

	
         var time3 = inPm.split(':'), time4 = $('#inpm14').val().split(':');
         var hours3 = parseFloat(time3[0], 10), 
             hours4 = parseFloat(time4[0], 10),
             mins3 = parseFloat(time3[1], 10),
             mins4 = parseFloat(time4[1], 10);
         var hoursB = hours4 - hours3, minsB = 0;
         if(hoursB < 0) hoursB = 24 + hoursB;
         if(mins4 >= mins3) {
             minsB = mins4 - mins3;
         }
         else {
             minsB = (mins4 + 60) - mins3;
             hoursB--;
         }
         minsB = minsB; // take percentage in 60
         hoursB += minsB;
         hoursB = hoursB.toFixed(2);
     	

         if((in1 != '') && (in2 != '') ) {
         	var sum = parseFloat(hoursA) + parseFloat(hoursB);
         	//$('#lateam14').val(hoursA);
         	//$('#latepm14').val(hoursB);
         	$('#lt14').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (inPm == '')) {
         	//$('#lateam14').val(hoursA);
         	//$('#latepm14').val(0.0);
         	$('#lt14').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (inAm == '')){
         	//$('#lateam14').val(0.0);
         	//$('#latepm14').val(hoursB);
         	$('#lt14').val(parseFloat(hoursB + 0.0));

         }

         else{
         	//$('#lateam14').val(0.0);
         	//$('#latepm14').val(0.0);
         	$('#lt14').val(0.0);

         }
        
     };

     $("#inam14").keydown( function() {
     	late14();
     });

     $("#inpm14").keydown( function () {
     	late14();
     });

</script>

<!-- Day 15 -->
<script text="javascript">

var inAm = '<?php echo $In1; ?>';
var inPm = '<?php echo $Resume1; ?>';


var late15 = function() {

	var in1 = $('#inam15').val();
	var in2 = $('#inpm15').val();

	
         var time1 = inAm.split(':'), time2 = $('#inam15').val().split(':');
         var hours1 = parseFloat(time1[0], 10), 
             hours2 = parseFloat(time2[0], 10),
             mins1 = parseFloat(time1[1], 10),
             mins2 = parseFloat(time2[1], 10);
         var hoursA = hours2 - hours1, minsA = 0;
         if(hoursA < 0) hoursA = 24 + hoursA;
         if(mins2 >= mins1) {
             minsA = mins2 - mins1;
         }
         else {
             minsA = (mins2 + 60) - mins1;
             hoursA--;
         }
         minsA = minsA; // take percentage in 60
         hoursA += minsA;
         hoursA = hoursA.toFixed(2);
		

		
         var time3 = inPm.split(':'), time4 = $('#inpm15').val().split(':');
         var hours3 = parseFloat(time3[0], 10), 
             hours4 = parseFloat(time4[0], 10),
             mins3 = parseFloat(time3[1], 10),
             mins4 = parseFloat(time4[1], 10);
         var hoursB = hours4 - hours3, minsB = 0;
         if(hoursB < 0) hoursB = 24 + hoursB;
         if(mins4 >= mins3) {
             minsB = mins4 - mins3;
         }
         else {
             minsB = (mins4 + 60) - mins3;
             hoursB--;
         }
         minsB = minsB; // take percentage in 60
         hoursB += minsB;
         hoursB = hoursB.toFixed(2);
     	

         if((in1 != '') && (in2 != '') ) {
         	var sum = parseFloat(hoursA) + parseFloat(hoursB);
         	//$('#lateam15').val(hoursA);
         	//$('#latepm15').val(hoursB);
         	$('#lt15').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (inPm == '')) {
         	//$('#lateam15').val(hoursA);
         	//$('#latepm15').val(0.0);
         	$('#lt15').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (inAm == '')){
         	//$('#lateam15').val(0.0);
         	//$('#latepm15').val(hoursB);
         	$('#lt15').val(parseFloat(hoursB + 0.0));

         }

         else{
         	//$('#lateam15').val(0.0);
         	//$('#latepm15').val(0.0);
         	$('#lt15').val(0.0);

         }
        
     };

     $("#inam15").keydown( function() {
     	late15();
     });

     $("#inpm15").keydown( function () {
     	late15();
     });

</script>

<!-- Day 16 -->
<script text="javascript">

var inAm = '<?php echo $In1; ?>';
var inPm = '<?php echo $Resume1; ?>';


var late16 = function() {

	var in1 = $('#inam16').val();
	var in2 = $('#inpm16').val();

         var time1 = inAm.split(':'), time2 = $('#inam16').val().split(':');
         var hours1 = parseFloat(time1[0], 10), 
             hours2 = parseFloat(time2[0], 10),
             mins1 = parseFloat(time1[1], 10),
             mins2 = parseFloat(time2[1], 10);
         var hoursA = hours2 - hours1, minsA = 0;
         if(hoursA < 0) hoursA = 24 + hoursA;
         if(mins2 >= mins1) {
             minsA = mins2 - mins1;
         }
         else {
             minsA = (mins2 + 60) - mins1;
             hoursA--;
         }
         minsA = minsA; // take percentage in 60
         hoursA += minsA;
         hoursA = hoursA.toFixed(2);
		

         var time3 = inPm.split(':'), time4 = $('#inpm16').val().split(':');
         var hours3 = parseFloat(time3[0], 10), 
             hours4 = parseFloat(time4[0], 10),
             mins3 = parseFloat(time3[1], 10),
             mins4 = parseFloat(time4[1], 10);
         var hoursB = hours4 - hours3, minsB = 0;
         if(hoursB < 0) hoursB = 24 + hoursB;
         if(mins4 >= mins3) {
             minsB = mins4 - mins3;
         }
         else {
             minsB = (mins4 + 60) - mins3;
             hoursB--;
         }
         minsB = minsB; // take percentage in 60
         hoursB += minsB;
         hoursB = hoursB.toFixed(2);
     	

         if((in1 != '') && (in2 != '') ) {
         	var sum = parseFloat(hoursA) + parseFloat(hoursB);
         	//$('#lateam16').val(hoursA);
         	//$('#latepm16').val(hoursB);
         	$('#lt16').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (inPm == '')) {
         	//$('#lateam16').val(hoursA);
         	//$('#latepm16').val(0.0);
         	$('#lt16').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (inAm == '')){
         	//$('#lateam16').val(0.0);
         	//$('#latepm16').val(hoursB);
         	$('#lt16').val(parseFloat(hoursB + 0.0));

         }

         else{
         	//$('#lateam16').val(0.0);
         	//$('#latepm16').val(0.0);
         	$('#lt16').val(0.0);

         }
        
     };

     $("#inam16").keydown( function() {
     	late16();
     });

     $("#inpm16").keydown( function () {
     	late16();
     });

</script>

<!-- Day 17 -->
<script text="javascript">

var inAm = '<?php echo $In1; ?>';
var inPm = '<?php echo $Resume1; ?>';


var late17 = function() {

	var in1 = $('#inam17').val();
	var in2 = $('#inpm17').val();

         var time1 = inAm.split(':'), time2 = $('#inam17').val().split(':');
         var hours1 = parseFloat(time1[0], 10), 
             hours2 = parseFloat(time2[0], 10),
             mins1 = parseFloat(time1[1], 10),
             mins2 = parseFloat(time2[1], 10);
         var hoursA = hours2 - hours1, minsA = 0;
         if(hoursA < 0) hoursA = 24 + hoursA;
         if(mins2 >= mins1) {
             minsA = mins2 - mins1;
         }
         else {
             minsA = (mins2 + 60) - mins1;
             hoursA--;
         }
         minsA = minsA; // take percentage in 60
         hoursA += minsA;
         hoursA = hoursA.toFixed(2);
		

		
         var time3 = inPm.split(':'), time4 = $('#inpm17').val().split(':');
         var hours3 = parseFloat(time3[0], 10), 
             hours4 = parseFloat(time4[0], 10),
             mins3 = parseFloat(time3[1], 10),
             mins4 = parseFloat(time4[1], 10);
         var hoursB = hours4 - hours3, minsB = 0;
         if(hoursB < 0) hoursB = 24 + hoursB;
         if(mins4 >= mins3) {
             minsB = mins4 - mins3;
         }
         else {
             minsB = (mins4 + 60) - mins3;
             hoursB--;
         }
         minsB = minsB; // take percentage in 60
         hoursB += minsB;
         hoursB = hoursB.toFixed(2);
     	

         if((in1 != '') && (in2 != '') ) {
         	var sum = parseFloat(hoursA) + parseFloat(hoursB);
         	//$('#lateam17').val(hoursA);
         	//$('#latepm17').val(hoursB);
         	$('#lt17').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (inPm == '')) {
         	//$('#lateam17').val(hoursA);
         	//$('#latepm17').val(0.0);
         	$('#lt17').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (inAm == '')){
         	//$('#lateam17').val(0.0);
         	//$('#latepm17').val(hoursB);
         	$('#lt17').val(parseFloat(hoursB + 0.0));

         }

         else{
         	//$('#lateam17').val(0.0);
         	//$('#latepm17').val(0.0);
         	$('#lt17').val(0.0);

         }
        
     };

     $("#inam17").keydown( function() {
     	late17();
     });

     $("#inpm17").keydown( function () {
     	late17();
     });

</script>

<!-- Day 18 -->
<script text="javascript">

var inAm = '<?php echo $In1; ?>';
var inPm = '<?php echo $Resume1; ?>';


var late18 = function() {

	var in1 = $('#inam18').val();
	var in2 = $('#inpm18').val();

         var time1 = inAm.split(':'), time2 = $('#inam18').val().split(':');
         var hours1 = parseFloat(time1[0], 10), 
             hours2 = parseFloat(time2[0], 10),
             mins1 = parseFloat(time1[1], 10),
             mins2 = parseFloat(time2[1], 10);
         var hoursA = hours2 - hours1, minsA = 0;
         if(hoursA < 0) hoursA = 24 + hoursA;
         if(mins2 >= mins1) {
             minsA = mins2 - mins1;
         }
         else {
             minsA = (mins2 + 60) - mins1;
             hoursA--;
         }
         minsA = minsA; // take percentage in 60
         hoursA += minsA;
         hoursA = hoursA.toFixed(2);
		

		
         var time3 = inPm.split(':'), time4 = $('#inpm18').val().split(':');
         var hours3 = parseFloat(time3[0], 10), 
             hours4 = parseFloat(time4[0], 10),
             mins3 = parseFloat(time3[1], 10),
             mins4 = parseFloat(time4[1], 10);
         var hoursB = hours4 - hours3, minsB = 0;
         if(hoursB < 0) hoursB = 24 + hoursB;
         if(mins4 >= mins3) {
             minsB = mins4 - mins3;
         }
         else {
             minsB = (mins4 + 60) - mins3;
             hoursB--;
         }
         minsB = minsB; // take percentage in 60
         hoursB += minsB;
         hoursB = hoursB.toFixed(2);
     	

         if((in1 != '') && (in2 != '') ) {
         	var sum = parseFloat(hoursA) + parseFloat(hoursB);
         	//$('#lateam18').val(hoursA);
         	//$('#latepm18').val(hoursB);
         	$('#lt18').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (inPm == '')) {
         	//$('#lateam18').val(hoursA);
         	//$('#latepm18').val(0.0);
         	$('#lt18').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (inAm == '')){
         	//$('#lateam18').val(0.0);
         	//$('#latepm18').val(hoursB);
         	$('#lt18').val(parseFloat(hoursB + 0.0));

         }

         else{
         	//$('#lateam18').val(0.0);
         	//$('#latepm18').val(0.0);
         	$('#lt18').val(0.0);

         }
        
     };

     $("#inam18").keydown( function() {
     	late18();
     });

     $("#inpm18").keydown( function () {
     	late18();
     });

</script>

<!-- Day 19 -->
<script text="javascript">

var inAm = '<?php echo $In1; ?>';
var inPm = '<?php echo $Resume1; ?>';


var late19 = function() {

	var in1 = $('#inam19').val();
	var in2 = $('#inpm19').val();

         var time1 = inAm.split(':'), time2 = $('#inam19').val().split(':');
         var hours1 = parseFloat(time1[0], 10), 
             hours2 = parseFloat(time2[0], 10),
             mins1 = parseFloat(time1[1], 10),
             mins2 = parseFloat(time2[1], 10);
         var hoursA = hours2 - hours1, minsA = 0;
         if(hoursA < 0) hoursA = 24 + hoursA;
         if(mins2 >= mins1) {
             minsA = mins2 - mins1;
         }
         else {
             minsA = (mins2 + 60) - mins1;
             hoursA--;
         }
         minsA = minsA; // take percentage in 60
         hoursA += minsA;
         hoursA = hoursA.toFixed(2);
		

         var time3 = inPm.split(':'), time4 = $('#inpm19').val().split(':');
         var hours3 = parseFloat(time3[0], 10), 
             hours4 = parseFloat(time4[0], 10),
             mins3 = parseFloat(time3[1], 10),
             mins4 = parseFloat(time4[1], 10);
         var hoursB = hours4 - hours3, minsB = 0;
         if(hoursB < 0) hoursB = 24 + hoursB;
         if(mins4 >= mins3) {
             minsB = mins4 - mins3;
         }
         else {
             minsB = (mins4 + 60) - mins3;
             hoursB--;
         }
         minsB = minsB; // take percentage in 60
         hoursB += minsB;
         hoursB = hoursB.toFixed(2);
     	

         if((in1 != '') && (in2 != '') ) {
         	var sum = parseFloat(hoursA) + parseFloat(hoursB);
         	//$('#lateam19').val(hoursA);
         	//$('#latepm19').val(hoursB);
         	$('#lt19').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (inPm == '')) {
         	//$('#lateam19').val(hoursA);
         	//$('#latepm19').val(0.0);
         	$('#lt19').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (inAm == '')){
         	//$('#lateam19').val(0.0);
         	//$('#latepm19').val(hoursB);
         	$('#lt19').val(parseFloat(hoursB + 0.0));

         }

         else{
         	//$('#lateam19').val(0.0);
         	//$('#latepm19').val(0.0);
         	$('#lt19').val(0.0);

         }
        
     };

     $("#inam19").keydown( function() {
     	late19();
     });

     $("#inpm19").keydown( function () {
     	late19();
     });

</script>

<!-- Day 20 -->
<script text="javascript">

var inAm = '<?php echo $In1; ?>';
var inPm = '<?php echo $Resume1; ?>';


var late20 = function() {

	var in1 = $('#inam20').val();
	var in2 = $('#inpm20').val();

         var time1 = inAm.split(':'), time2 = $('#inam20').val().split(':');
         var hours1 = parseFloat(time1[0], 10), 
             hours2 = parseFloat(time2[0], 10),
             mins1 = parseFloat(time1[1], 10),
             mins2 = parseFloat(time2[1], 10);
         var hoursA = hours2 - hours1, minsA = 0;
         if(hoursA < 0) hoursA = 24 + hoursA;
         if(mins2 >= mins1) {
             minsA = mins2 - mins1;
         }
         else {
             minsA = (mins2 + 60) - mins1;
             hoursA--;
         }
         minsA = minsA; // take percentage in 60
         hoursA += minsA;
         hoursA = hoursA.toFixed(2);
		

         var time3 = inPm.split(':'), time4 = $('#inpm20').val().split(':');
         var hours3 = parseFloat(time3[0], 10), 
             hours4 = parseFloat(time4[0], 10),
             mins3 = parseFloat(time3[1], 10),
             mins4 = parseFloat(time4[1], 10);
         var hoursB = hours4 - hours3, minsB = 0;
         if(hoursB < 0) hoursB = 24 + hoursB;
         if(mins4 >= mins3) {
             minsB = mins4 - mins3;
         }
         else {
             minsB = (mins4 + 60) - mins3;
             hoursB--;
         }
         minsB = minsB; // take percentage in 60
         hoursB += minsB;
         hoursB = hoursB.toFixed(2);
     	

         if((in1 != '') && (in2 != '') ) {
         	var sum = parseFloat(hoursA) + parseFloat(hoursB);
         	//$('#lateam20').val(hoursA);
         	//$('#latepm20').val(hoursB);
         	$('#lt20').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (inPm == '')) {
         	//$('#lateam20').val(hoursA);
         	//$('#latepm20').val(0.0);
         	$('#lt20').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (inAm == '')){
         	//$('#lateam20').val(0.0);
         	//$('#latepm20').val(hoursB);
         	$('#lt20').val(parseFloat(hoursB + 0.0));

         }

         else{
         	//$('#lateam20').val(0.0);
         	//$('#latepm20').val(0.0);
         	$('#lt20').val(0.0);

         }
        
     };

     $("#inam20").keydown( function() {
     	late20();
     });

     $("#inpm20").keydown( function () {
     	late20();
     });

</script>

<!-- Day 21 -->
<script text="javascript">

var inAm = '<?php echo $In1; ?>';
var inPm = '<?php echo $Resume1; ?>';


var late21 = function() {

	var in1 = $('#inam21').val();
	var in2 = $('#inpm21').val();


         var time1 = inAm.split(':'), time2 = $('#inam21').val().split(':');
         var hours1 = parseFloat(time1[0], 10), 
             hours2 = parseFloat(time2[0], 10),
             mins1 = parseFloat(time1[1], 10),
             mins2 = parseFloat(time2[1], 10);
         var hoursA = hours2 - hours1, minsA = 0;
         if(hoursA < 0) hoursA = 24 + hoursA;
         if(mins2 >= mins1) {
             minsA = mins2 - mins1;
         }
         else {
             minsA = (mins2 + 60) - mins1;
             hoursA--;
         }
         minsA = minsA; // take percentage in 60
         hoursA += minsA;
         hoursA = hoursA.toFixed(2);
		

         var time3 = inPm.split(':'), time4 = $('#inpm21').val().split(':');
         var hours3 = parseFloat(time3[0], 10), 
             hours4 = parseFloat(time4[0], 10),
             mins3 = parseFloat(time3[1], 10),
             mins4 = parseFloat(time4[1], 10);
         var hoursB = hours4 - hours3, minsB = 0;
         if(hoursB < 0) hoursB = 24 + hoursB;
         if(mins4 >= mins3) {
             minsB = mins4 - mins3;
         }
         else {
             minsB = (mins4 + 60) - mins3;
             hoursB--;
         }
         minsB = minsB; // take percentage in 60
         hoursB += minsB;
         hoursB = hoursB.toFixed(2);
     	

         if((in1 != '') && (in2 != '') ) {
         	var sum = parseFloat(hoursA) + parseFloat(hoursB);
         	//$('#lateam21').val(hoursA);
         	//$('#latepm21').val(hoursB);
         	$('#lt21').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (inPm == '')) {
         	//$('#lateam21').val(hoursA);
         	//$('#latepm21').val(0.0);
         	$('#lt21').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (inAm == '')){
         	//$('#lateam21').val(0.0);
         	//$('#latepm21').val(hoursB);
         	$('#lt21').val(parseFloat(hoursB + 0.0));

         }

         else{
         	//$('#lateam21').val(0.0);
         	//$('#latepm21').val(0.0);
         	$('#lt21').val(0.0);

         }
        
     };

     $("#inam21").keydown( function() {
     	late21();
     });

     $("#inpm21").keydown( function () {
     	late21();
     });

</script>

<!-- Day 22 -->
<script text="javascript">

var inAm = '<?php echo $In1; ?>';
var inPm = '<?php echo $Resume1; ?>';


var late22 = function() {

	var in1 = $('#inam22').val();
	var in2 = $('#inpm22').val();

         var time1 = inAm.split(':'), time2 = $('#inam22').val().split(':');
         var hours1 = parseFloat(time1[0], 10), 
             hours2 = parseFloat(time2[0], 10),
             mins1 = parseFloat(time1[1], 10),
             mins2 = parseFloat(time2[1], 10);
         var hoursA = hours2 - hours1, minsA = 0;
         if(hoursA < 0) hoursA = 24 + hoursA;
         if(mins2 >= mins1) {
             minsA = mins2 - mins1;
         }
         else {
             minsA = (mins2 + 60) - mins1;
             hoursA--;
         }
         minsA = minsA; // take percentage in 60
         hoursA += minsA;
         hoursA = hoursA.toFixed(2);
		

         var time3 = inPm.split(':'), time4 = $('#inpm22').val().split(':');
         var hours3 = parseFloat(time3[0], 10), 
             hours4 = parseFloat(time4[0], 10),
             mins3 = parseFloat(time3[1], 10),
             mins4 = parseFloat(time4[1], 10);
         var hoursB = hours4 - hours3, minsB = 0;
         if(hoursB < 0) hoursB = 24 + hoursB;
         if(mins4 >= mins3) {
             minsB = mins4 - mins3;
         }
         else {
             minsB = (mins4 + 60) - mins3;
             hoursB--;
         }
         minsB = minsB; // take percentage in 60
         hoursB += minsB;
         hoursB = hoursB.toFixed(2);
     	

         if((in1 != '') && (in2 != '') ) {
         	var sum = parseFloat(hoursA) + parseFloat(hoursB);
         	//$('#lateam22').val(hoursA);
         	//$('#latepm22').val(hoursB);
         	$('#lt22').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (inPm == '')) {
         	//$('#lateam22').val(hoursA);
         	//$('#latepm22').val(0.0);
         	$('#lt22').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (inAm == '')){
         	//$('#lateam22').val(0.0);
         	//$('#latepm22').val(hoursB);
         	$('#lt22').val(parseFloat(hoursB + 0.0));

         }

         else{
         	//$('#lateam22').val(0.0);
         	//$('#latepm22').val(0.0);
         	$('#lt22').val(0.0);

         }
        
     };

     $("#inam22").keydown( function() {
     	late22();
     });

     $("#inpm22").keydown( function () {
     	late22();
     });

</script>

<!-- Day 23 -->
<script text="javascript">

var inAm = '<?php echo $In1; ?>';
var inPm = '<?php echo $Resume1; ?>';


var late23 = function() {

	var in1 = $('#inam23').val();
	var in2 = $('#inpm23').val();

         var time1 = inAm.split(':'), time2 = $('#inam23').val().split(':');
         var hours1 = parseFloat(time1[0], 10), 
             hours2 = parseFloat(time2[0], 10),
             mins1 = parseFloat(time1[1], 10),
             mins2 = parseFloat(time2[1], 10);
         var hoursA = hours2 - hours1, minsA = 0;
         if(hoursA < 0) hoursA = 24 + hoursA;
         if(mins2 >= mins1) {
             minsA = mins2 - mins1;
         }
         else {
             minsA = (mins2 + 60) - mins1;
             hoursA--;
         }
         minsA = minsA; // take percentage in 60
         hoursA += minsA;
         hoursA = hoursA.toFixed(2);
		

         var time3 = inPm.split(':'), time4 = $('#inpm23').val().split(':');
         var hours3 = parseFloat(time3[0], 10), 
             hours4 = parseFloat(time4[0], 10),
             mins3 = parseFloat(time3[1], 10),
             mins4 = parseFloat(time4[1], 10);
         var hoursB = hours4 - hours3, minsB = 0;
         if(hoursB < 0) hoursB = 24 + hoursB;
         if(mins4 >= mins3) {
             minsB = mins4 - mins3;
         }
         else {
             minsB = (mins4 + 60) - mins3;
             hoursB--;
         }
         minsB = minsB; // take percentage in 60
         hoursB += minsB;
         hoursB = hoursB.toFixed(2);
     	

         if((in1 != '') && (in2 != '') ) {
         	var sum = parseFloat(hoursA) + parseFloat(hoursB);
         	//$('#lateam23').val(hoursA);
         	//$('#latepm23').val(hoursB);
         	$('#lt23').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (inPm == '')) {
         	//$('#lateam23').val(hoursA);
         	//$('#latepm23').val(0.0);
         	$('#lt23').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (inAm == '')){
         	//$('#lateam23').val(0.0);
         	//$('#latepm23').val(hoursB);
         	$('#lt23').val(parseFloat(hoursB + 0.0));

         }

         else{
         	//$('#lateam23').val(0.0);
         	//$('#latepm23').val(0.0);
         	$('#lt23').val(0.0);

         }
        
     };

     $("#inam23").keydown( function() {
     	late2();
     });

     $("#inpm23").keydown( function () {
     	late2();
     });

</script>

<!-- Day 24 -->
<script text="javascript">

var inAm = '<?php echo $In1; ?>';
var inPm = '<?php echo $Resume1; ?>';


var late24 = function() {

	var in1 = $('#inam24').val();
	var in2 = $('#inpm24').val();

         var time1 = inAm.split(':'), time2 = $('#inam24').val().split(':');
         var hours1 = parseFloat(time1[0], 10), 
             hours2 = parseFloat(time2[0], 10),
             mins1 = parseFloat(time1[1], 10),
             mins2 = parseFloat(time2[1], 10);
         var hoursA = hours2 - hours1, minsA = 0;
         if(hoursA < 0) hoursA = 24 + hoursA;
         if(mins2 >= mins1) {
             minsA = mins2 - mins1;
         }
         else {
             minsA = (mins2 + 60) - mins1;
             hoursA--;
         }
         minsA = minsA; // take percentage in 60
         hoursA += minsA;
         hoursA = hoursA.toFixed(2);
		

         var time3 = inPm.split(':'), time4 = $('#inpm24').val().split(':');
         var hours3 = parseFloat(time3[0], 10), 
             hours4 = parseFloat(time4[0], 10),
             mins3 = parseFloat(time3[1], 10),
             mins4 = parseFloat(time4[1], 10);
         var hoursB = hours4 - hours3, minsB = 0;
         if(hoursB < 0) hoursB = 24 + hoursB;
         if(mins4 >= mins3) {
             minsB = mins4 - mins3;
         }
         else {
             minsB = (mins4 + 60) - mins3;
             hoursB--;
         }
         minsB = minsB; // take percentage in 60
         hoursB += minsB;
         hoursB = hoursB.toFixed(2);
     

         if((in1 != '') && (in2 != '') ) {
         	var sum = parseFloat(hoursA) + parseFloat(hoursB);
         	//$('#lateam24').val(hoursA);
         	//$('#latepm24').val(hoursB);
         	$('#lt24').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (inPm == '')) {
         	//$('#lateam24').val(hoursA);
         	//$('#latepm24').val(0.0);
         	$('#lt24').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (inAm == '')){
         	//$('#lateam24').val(0.0);
         	//$('#latepm24').val(hoursB);
         	$('#lt24').val(parseFloat(hoursB + 0.0));

         }

         else{
         	//$('#lateam24').val(0.0);
         	//$('#latepm24').val(0.0);
         	$('#lt24').val(0.0);

         }
        
     };

     $("#inam24").keydown( function() {
     	late24();
     });

     $("#inpm24").keydown( function () {
     	late24();
     });

</script>

<!-- Day 25 -->
<script text="javascript">

var inAm = '<?php echo $In1; ?>';
var inPm = '<?php echo $Resume1; ?>';


var late25 = function() {

	var in1 = $('#inam25').val();
	var in2 = $('#inpm25').val();

         var time1 = inAm.split(':'), time2 = $('#inam25').val().split(':');
         var hours1 = parseFloat(time1[0], 10), 
             hours2 = parseFloat(time2[0], 10),
             mins1 = parseFloat(time1[1], 10),
             mins2 = parseFloat(time2[1], 10);
         var hoursA = hours2 - hours1, minsA = 0;
         if(hoursA < 0) hoursA = 24 + hoursA;
         if(mins2 >= mins1) {
             minsA = mins2 - mins1;
         }
         else {
             minsA = (mins2 + 60) - mins1;
             hoursA--;
         }
         minsA = minsA; // take percentage in 60
         hoursA += minsA;
         hoursA = hoursA.toFixed(2);
		

         var time3 = inPm.split(':'), time4 = $('#inpm25').val().split(':');
         var hours3 = parseFloat(time3[0], 10), 
             hours4 = parseFloat(time4[0], 10),
             mins3 = parseFloat(time3[1], 10),
             mins4 = parseFloat(time4[1], 10);
         var hoursB = hours4 - hours3, minsB = 0;
         if(hoursB < 0) hoursB = 24 + hoursB;
         if(mins4 >= mins3) {
             minsB = mins4 - mins3;
         }
         else {
             minsB = (mins4 + 60) - mins3;
             hoursB--;
         }
         minsB = minsB; // take percentage in 60
         hoursB += minsB;
         hoursB = hoursB.toFixed(2);
     	

         if((in1 != '') && (in2 != '') ) {
         	var sum = parseFloat(hoursA) + parseFloat(hoursB);
         	//$('#lateam25').val(hoursA);
         	//$('#latepm25').val(hoursB);
         	$('#lt25').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (inPm == '')) {
         	//$('#lateam25').val(hoursA);
         	//$('#latepm25').val(0.0);
         	$('#lt25').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (inAm == '')){
         	//$('#lateam25').val(0.0);
         	//$('#latepm25').val(hoursB);
         	$('#lt25').val(parseFloat(hoursB + 0.0));

         }

         else{
         	//$('#lateam25').val(0.0);
         	//$('#latepm25').val(0.0);
         	$('#lt25').val(0.0);

         }
        
     };

     $("#inam25").keydown( function() {
     	late25();
     });

     $("#inpm25").keydown( function () {
     	late25();
     });

</script>

<!-- Day 26 -->
<script text="javascript">

var inAm = '<?php echo $In1; ?>';
var inPm = '<?php echo $Resume1; ?>';


var late26 = function() {

	var in1 = $('#inam26').val();
	var in2 = $('#inpm26').val();

         var time1 = inAm.split(':'), time2 = $('#inam26').val().split(':');
         var hours1 = parseFloat(time1[0], 10), 
             hours2 = parseFloat(time2[0], 10),
             mins1 = parseFloat(time1[1], 10),
             mins2 = parseFloat(time2[1], 10);
         var hoursA = hours2 - hours1, minsA = 0;
         if(hoursA < 0) hoursA = 24 + hoursA;
         if(mins2 >= mins1) {
             minsA = mins2 - mins1;
         }
         else {
             minsA = (mins2 + 60) - mins1;
             hoursA--;
         }
         minsA = minsA; // take percentage in 60
         hoursA += minsA;
         hoursA = hoursA.toFixed(2);
		

         var time3 = inPm.split(':'), time4 = $('#inpm26').val().split(':');
         var hours3 = parseFloat(time3[0], 10), 
             hours4 = parseFloat(time4[0], 10),
             mins3 = parseFloat(time3[1], 10),
             mins4 = parseFloat(time4[1], 10);
         var hoursB = hours4 - hours3, minsB = 0;
         if(hoursB < 0) hoursB = 24 + hoursB;
         if(mins4 >= mins3) {
             minsB = mins4 - mins3;
         }
         else {
             minsB = (mins4 + 60) - mins3;
             hoursB--;
         }
         minsB = minsB; // take percentage in 60
         hoursB += minsB;
         hoursB = hoursB.toFixed(2);
     

         if((in1 != '') && (in2 != '') ) {
         	var sum = parseFloat(hoursA) + parseFloat(hoursB);
         	//$('#lateam26').val(hoursA);
         	//$('#latepm26').val(hoursB);
         	$('#lt26').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (inPm == '')) {
         	//$('#lateam26').val(hoursA);
         	//$('#latepm26').val(0.0);
         	$('#lt26').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (inAm == '')){
         	//$('#lateam26').val(0.0);
         	//$('#latepm26').val(hoursB);
         	$('#lt26').val(parseFloat(hoursB + 0.0));

         }

         else{
         	//$('#lateam26').val(0.0);
         	//$('#latepm26').val(0.0);
         	$('#lt26').val(0.0);

         }
        
     };

     $("#inam26").keydown( function() {
     	late26();
     });

     $("#inpm26").keydown( function () {
     	late26();
     });

</script>

<!-- Day 27 -->
<script text="javascript">

var inAm = '<?php echo $In1; ?>';
var inPm = '<?php echo $Resume1; ?>';


var late27 = function() {

	var in1 = $('#inam27').val();
	var in2 = $('#inpm27').val();

         var time1 = inAm.split(':'), time2 = $('#inam27').val().split(':');
         var hours1 = parseFloat(time1[0], 10), 
             hours2 = parseFloat(time2[0], 10),
             mins1 = parseFloat(time1[1], 10),
             mins2 = parseFloat(time2[1], 10);
         var hoursA = hours2 - hours1, minsA = 0;
         if(hoursA < 0) hoursA = 24 + hoursA;
         if(mins2 >= mins1) {
             minsA = mins2 - mins1;
         }
         else {
             minsA = (mins2 + 60) - mins1;
             hoursA--;
         }
         minsA = minsA; // take percentage in 60
         hoursA += minsA;
         hoursA = hoursA.toFixed(2);
		

         var time3 = inPm.split(':'), time4 = $('#inpm27').val().split(':');
         var hours3 = parseFloat(time3[0], 10), 
             hours4 = parseFloat(time4[0], 10),
             mins3 = parseFloat(time3[1], 10),
             mins4 = parseFloat(time4[1], 10);
         var hoursB = hours4 - hours3, minsB = 0;
         if(hoursB < 0) hoursB = 24 + hoursB;
         if(mins4 >= mins3) {
             minsB = mins4 - mins3;
         }
         else {
             minsB = (mins4 + 60) - mins3;
             hoursB--;
         }
         minsB = minsB; // take percentage in 60
         hoursB += minsB;
         hoursB = hoursB.toFixed(2);
     	

         if((in1 != '') && (in2 != '') ) {
         	var sum = parseFloat(hoursA) + parseFloat(hoursB);
         	//$('#lateam27').val(hoursA);
         	//$('#latepm27').val(hoursB);
         	$('#lt27').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (inPm == '')) {
         	//$('#lateam27').val(hoursA);
         	//$('#latepm27').val(0.0);
         	$('#lt27').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (inAm == '')){
         	//$('#lateam27').val(0.0);
         	//$('#latepm27').val(hoursB);
         	$('#lt27').val(parseFloat(hoursB + 0.0));

         }

         else{
         	//$('#lateam27').val(0.0);
         	//$('#latepm27').val(0.0);
         	$('#lt27').val(0.0);

         }
        
     };

     $("#inam27").keydown( function() {
     	late27();
     });

     $("#inpm27").keydown( function () {
     	late27();
     });

</script>

<!-- Day 28 -->
<script text="javascript">

var inAm = '<?php echo $In1; ?>';
var inPm = '<?php echo $Resume1; ?>';


var late28 = function() {

	var in1 = $('#inam28').val();
	var in2 = $('#inpm28').val();

         var time1 = inAm.split(':'), time2 = $('#inam28').val().split(':');
         var hours1 = parseFloat(time1[0], 10), 
             hours2 = parseFloat(time2[0], 10),
             mins1 = parseFloat(time1[1], 10),
             mins2 = parseFloat(time2[1], 10);
         var hoursA = hours2 - hours1, minsA = 0;
         if(hoursA < 0) hoursA = 24 + hoursA;
         if(mins2 >= mins1) {
             minsA = mins2 - mins1;
         }
         else {
             minsA = (mins2 + 60) - mins1;
             hoursA--;
         }
         minsA = minsA; // take percentage in 60
         hoursA += minsA;
         hoursA = hoursA.toFixed(2);
		

		
         var time3 = inPm.split(':'), time4 = $('#inpm28').val().split(':');
         var hours3 = parseFloat(time3[0], 10), 
             hours4 = parseFloat(time4[0], 10),
             mins3 = parseFloat(time3[1], 10),
             mins4 = parseFloat(time4[1], 10);
         var hoursB = hours4 - hours3, minsB = 0;
         if(hoursB < 0) hoursB = 24 + hoursB;
         if(mins4 >= mins3) {
             minsB = mins4 - mins3;
         }
         else {
             minsB = (mins4 + 60) - mins3;
             hoursB--;
         }
         minsB = minsB; // take percentage in 60
         hoursB += minsB;
         hoursB = hoursB.toFixed(2);
     	

         if((in1 != '') && (in2 != '') ) {
         	var sum = parseFloat(hoursA) + parseFloat(hoursB);
         	//$('#lateam28').val(hoursA);
         	//$('#latepm28').val(hoursB);
         	$('#lt28').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (inPm == '')) {
         	//$('#lateam28').val(hoursA);
         	//$('#latepm28').val(0.0);
         	$('#lt28').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (inAm == '')){
         	//$('#lateam28').val(0.0);
         	//$('#latepm28').val(hoursB);
         	$('#lt28').val(parseFloat(hoursB + 0.0));

         }

         else{
         	//$('#lateam28').val(0.0);
         	//$('#latepm28').val(0.0);
         	$('#lt28').val(0.0);

         }
        
     };

     $("#inam28").keydown( function() {
     	late28();
     });

     $("#inpm28").keydown( function () {
     	late28();
     });

</script>

<!-- Day 29 -->
<script text="javascript">

var inAm = '<?php echo $In1; ?>';
var inPm = '<?php echo $Resume1; ?>';


var late29 = function() {

	var in1 = $('#inam29').val();
	var in2 = $('#inpm29').val();

        var time1 = inAm.split(':'), time2 = $('#inam29').val().split(':');
         var hours1 = parseFloat(time1[0], 10), 
             hours2 = parseFloat(time2[0], 10),
             mins1 = parseFloat(time1[1], 10),
             mins2 = parseFloat(time2[1], 10);
         var hoursA = hours2 - hours1, minsA = 0;
         if(hoursA < 0) hoursA = 24 + hoursA;
         if(mins2 >= mins1) {
             minsA = mins2 - mins1;
         }
         else {
             minsA = (mins2 + 60) - mins1;
             hoursA--;
         }
         minsA = minsA; // take percentage in 60
         hoursA += minsA;
         hoursA = hoursA.toFixed(2);
		

         var time3 = inPm.split(':'), time4 = $('#inpm29').val().split(':');
         var hours3 = parseFloat(time3[0], 10), 
             hours4 = parseFloat(time4[0], 10),
             mins3 = parseFloat(time3[1], 10),
             mins4 = parseFloat(time4[1], 10);
         var hoursB = hours4 - hours3, minsB = 0;
         if(hoursB < 0) hoursB = 24 + hoursB;
         if(mins4 >= mins3) {
             minsB = mins4 - mins3;
         }
         else {
             minsB = (mins4 + 60) - mins3;
             hoursB--;
         }
         minsB = minsB; // take percentage in 60
         hoursB += minsB;
         hoursB = hoursB.toFixed(2);
     	

         if((in1 != '') && (in2 != '') ) {
         	var sum = parseFloat(hoursA) + parseFloat(hoursB);
         	//$('#lateam29').val(hoursA);
         	//$('#latepm29').val(hoursB);
         	$('#lt29').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (inPm == '')) {
         	//$('#lateam29').val(hoursA);
         	//$('#latepm29').val(0.0);
         	$('#lt29').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (inAm == '')){
         	//$('#lateam29').val(0.0);
         	//$('#latepm29').val(hoursB);
         	$('#lt29').val(parseFloat(hoursB + 0.0));

         }

         else{
         	//$('#lateam29').val(0.0);
         	//$('#latepm29').val(0.0);
         	$('#lt29').val(0.0);

         }
        
     };

     $("#inam29").keydown( function() {
     	late29();
     });

     $("#inpm29").keydown( function () {
     	late29();
     });

</script>

<!-- Day 30 -->
<script text="javascript">

var inAm = '<?php echo $In1; ?>';
var inPm = '<?php echo $Resume1; ?>';


var late30 = function() {

	var in1 = $('#inam30').val();
	var in2 = $('#inpm30').val();

         var time1 = inAm.split(':'), time2 = $('#inam30').val().split(':');
         var hours1 = parseFloat(time1[0], 10), 
             hours2 = parseFloat(time2[0], 10),
             mins1 = parseFloat(time1[1], 10),
             mins2 = parseFloat(time2[1], 10);
         var hoursA = hours2 - hours1, minsA = 0;
         if(hoursA < 0) hoursA = 24 + hoursA;
         if(mins2 >= mins1) {
             minsA = mins2 - mins1;
         }
         else {
             minsA = (mins2 + 60) - mins1;
             hoursA--;
         }
         minsA = minsA; // take percentage in 60
         hoursA += minsA;
         hoursA = hoursA.toFixed(2);
		

         var time3 = inPm.split(':'), time4 = $('#inpm30').val().split(':');
         var hours3 = parseFloat(time3[0], 10), 
             hours4 = parseFloat(time4[0], 10),
             mins3 = parseFloat(time3[1], 10),
             mins4 = parseFloat(time4[1], 10);
         var hoursB = hours4 - hours3, minsB = 0;
         if(hoursB < 0) hoursB = 24 + hoursB;
         if(mins4 >= mins3) {
             minsB = mins4 - mins3;
         }
         else {
             minsB = (mins4 + 60) - mins3;
             hoursB--;
         }
         minsB = minsB; // take percentage in 60
         hoursB += minsB;
         hoursB = hoursB.toFixed(2);

         if((in1 != '') && (in2 != '') ) {
         	var sum = parseFloat(hoursA) + parseFloat(hoursB);
         	//$('#lateam30').val(hoursA);
         	//$('#latepm30').val(hoursB);
         	$('#lt30').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (inPm == '')) {
         	//$('#lateam30').val(hoursA);
         	//$('#latepm30').val(0.0);
         	$('#lt30').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (inAm == '')){
         	//$('#lateam30').val(0.0);
         	//$('#latepm30').val(hoursB);
         	$('#lt30').val(parseFloat(hoursB + 0.0));

         }

         else{
         	//$('#lateam30').val(0.0);
         	//$('#latepm30').val(0.0);
         	$('#lt30').val(0.0);

         }
        
     };

     $("#inam30").keydown( function() {
     	late30();
     });

     $("#inpm30").keydown( function () {
     	late30();
     });

</script>

<!-- Day 31 -->
<script text="javascript">

var inAm = '<?php echo $In1; ?>';
var inPm = '<?php echo $Resume1; ?>';


var late31 = function() {

	var in1 = $('#inam31').val();
	var in2 = $('#inpm31').val();

         var time1 = inAm.split(':'), time2 = $('#inam31').val().split(':');
         var hours1 = parseFloat(time1[0], 10), 
             hours2 = parseFloat(time2[0], 10),
             mins1 = parseFloat(time1[1], 10),
             mins2 = parseFloat(time2[1], 10);
         var hoursA = hours2 - hours1, minsA = 0;
         if(hoursA < 0) hoursA = 24 + hoursA;
         if(mins2 >= mins1) {
             minsA = mins2 - mins1;
         }
         else {
             minsA = (mins2 + 60) - mins1;
             hoursA--;
         }
         minsA = minsA; // take percentage in 60
         hoursA += minsA;
         hoursA = hoursA.toFixed(2);
		

         var time3 = inPm.split(':'), time4 = $('#inpm31').val().split(':');
         var hours3 = parseFloat(time3[0], 10), 
             hours4 = parseFloat(time4[0], 10),
             mins3 = parseFloat(time3[1], 10),
             mins4 = parseFloat(time4[1], 10);
         var hoursB = hours4 - hours3, minsB = 0;
         if(hoursB < 0) hoursB = 24 + hoursB;
         if(mins4 >= mins3) {
             minsB = mins4 - mins3;
         }
         else {
             minsB = (mins4 + 60) - mins3;
             hoursB--;
         }
         minsB = minsB; // take percentage in 60
         hoursB += minsB;
         hoursB = hoursB.toFixed(2);

         if((in1 != '') && (in2 != '') ) {
         	var sum = parseFloat(hoursA) + parseFloat(hoursB);
         	//$('#lateam31').val(hoursA);
         	//$('#latepm31').val(hoursB);
         	$('#lt31').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (inPm == '')) {
         	//$('#lateam31').val(hoursA);
         	//$('#latepm31').val(0.0);
         	$('#lt31').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (inAm == '')){
         	//$('#lateam31').val(0.0);
         	//$('#latepm31').val(hoursB);
         	$('#lt31').val(parseFloat(hoursB + 0.0));

         }

         else{
         	//$('#lateam31').val(0.0);
         	//$('#latepm31').val(0.0);
         	$('#lt31').val(0.0);

         }
        
     };

     $("#inam31").keydown( function() {
     	late31();
     });

     $("#inpm31").keydown( function () {
     	late31();
     });

</script>