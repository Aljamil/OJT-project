

<!-- Day 1 -->

<script text="javascript">
var lates1 = function() {

	var in1 = $('#inam1').val();
	var in2 = $('#inpm1').val();

    var ins1 = $('#in1').val();
    var ins2 = $('#resume1').val();


         var time1 = ins1.split(':'), time2 = in1.split(':');
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
     	
         var time3 = ins2.split(':'), time4 = in2.split(':');
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
         	$('#lt1').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (ins2 == '')) {
         	$('#lt1').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (ins1 == '')){
         	$('#lt1').val(parseFloat(hoursB + 0.0));

         }

         else{
         	$('#lt1').val(0.0);

         }
        
     };

     $('#shift1').keydown( function () {
        lates1();
     });

     $('#shift1').change( function () {
        lates1();
     });

</script>


<!-- Day 2 -->

<script text="javascript">
var lates2 = function() {

    var in1 = $('#inam2').val();
    var in2 = $('#inpm2').val();

    var ins1 = $('#in2').val();
    var ins2 = $('#resume2').val();


         var time1 = ins1.split(':'), time2 = in1.split(':');
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
        
    if(ins2 != ''){
         var time3 = ins2.split(':'), time4 = in2.split(':');
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
     }
 

         if((in1 != '') && (in2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#lt2').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (ins2 == '')) {
            $('#lt2').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (ins1 == '')){
            $('#lt2').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#lt2').val(0.0);

         }
        
     };

     $('#shift2').keydown( function () {
        lates2();
     });

     $('#shift2').change( function () {
        lates2();
     });

</script>


<!-- Day 3 -->

<script text="javascript">
var lates3 = function() {

    var in1 = $('#inam3').val();
    var in2 = $('#inpm3').val();

    var ins1 = $('#in3').val();
    var ins2 = $('#resume3').val();


         var time1 = ins1.split(':'), time2 = in1.split(':');
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
        
    if(ins2 != ''){
         var time3 = ins2.split(':'), time4 = in2.split(':');
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
     }
 

         if((in1 != '') && (in2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#lt3').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (ins2 == '')) {
            $('#lt3').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (ins1 == '')){
            $('#lt3').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#lt3').val(0.0);

         }
        
     };

     $('#shift3').keydown( function () {
        lates3();
     });

     $('#shift3').change( function () {
        lates3();
     });

</script>


<!-- Day 4 -->

<script text="javascript">
var lates4 = function() {

    var in1 = $('#inam4').val();
    var in2 = $('#inpm4').val();

    var ins1 = $('#in4').val();
    var ins2 = $('#resume4').val();


         var time1 = ins1.split(':'), time2 = in1.split(':');
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
        
    if(ins2 != ''){
         var time3 = ins2.split(':'), time4 = in2.split(':');
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
     }
 

         if((in1 != '') && (in2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#lt4').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (ins2 == '')) {
            $('#lt4').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (ins1 == '')){
            $('#lt4').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#lt4').val(0.0);

         }
        
     };

     $('#shift4').keydown( function () {
        lates4();
     });

     $('#shift4').change( function () {
        lates4();
     });

</script>

<!-- Day 5 -->
<script text="javascript">
var lates5 = function() {

    var in1 = $('#inam5').val();
    var in2 = $('#inpm5').val();

    var ins1 = $('#in5').val();
    var ins2 = $('#resume5').val();


         var time1 = ins1.split(':'), time2 = in1.split(':');
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
        
    if(ins2 != ''){
         var time3 = ins2.split(':'), time4 = in2.split(':');
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
     }
 

         if((in1 != '') && (in2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#lt5').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (ins2 == '')) {
            $('#lt5').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (ins1 == '')){
            $('#lt5').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#lt5').val(0.0);

         }
        
     };

     $('#shift5').keydown( function () {
        lates5();
     });

     $('#shift5').change( function () {
        lates5();
     });

</script>

<!-- Day 6 -->
<script text="javascript">
var lates6 = function() {

    var in1 = $('#inam6').val();
    var in2 = $('#inpm6').val();

    var ins1 = $('#in6').val();
    var ins2 = $('#resume6').val();


         var time1 = ins1.split(':'), time2 = in1.split(':');
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
        
    if(ins2 != ''){
         var time3 = ins2.split(':'), time4 = in2.split(':');
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
     }
 

         if((in1 != '') && (in2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#lt6').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (ins2 == '')) {
            $('#lt6').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (ins1 == '')){
            $('#lt6').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#lt6').val(0.0);

         }
        
     };

     $('#shift6').keydown( function () {
        lates6();
     });

     $('#shift6').change( function () {
        lates6();
     });

</script>

<!-- Day 7 -->
<script text="javascript">
var lates7 = function() {

    var in1 = $('#inam7').val();
    var in2 = $('#inpm7').val();

    var ins1 = $('#in7').val();
    var ins2 = $('#resume7').val();


         var time1 = ins1.split(':'), time2 = in1.split(':');
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
        
    if(ins2 != ''){
         var time3 = ins2.split(':'), time4 = in2.split(':');
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
     }
 

         if((in1 != '') && (in2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#lt7').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (ins2 == '')) {
            $('#lt7').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (ins1 == '')){
            $('#lt7').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#lt7').val(0.0);

         }
        
     };

     $('#shift7').keydown( function () {
        lates7();
     });

     $('#shift7').change( function () {
        lates7();
     });

</script>

<!-- Day 8 -->

<script text="javascript">
var lates8 = function() {

    var in1 = $('#inam8').val();
    var in2 = $('#inpm8').val();

    var ins1 = $('#in8').val();
    var ins2 = $('#resume8').val();


         var time1 = ins1.split(':'), time2 = in1.split(':');
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
        
    if(ins2 != ''){
         var time3 = ins2.split(':'), time4 = in2.split(':');
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
     }
 

         if((in1 != '') && (in2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#lt8').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (ins2 == '')) {
            $('#lt8').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (ins1 == '')){
            $('#lt8').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#lt8').val(0.0);

         }
        
     };

     $('#shift8').keydown( function () {
        lates8();
     });

     $('#shift8').change( function () {
        lates8();
     });

</script>

<!-- Day 9 -->
<script text="javascript">
var lates9 = function() {

    var in1 = $('#inam9').val();
    var in2 = $('#inpm9').val();

    var ins1 = $('#in9').val();
    var ins2 = $('#resume9').val();


         var time1 = ins1.split(':'), time2 = in1.split(':');
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
        
    if(ins2 != ''){
         var time3 = ins2.split(':'), time4 = in2.split(':');
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
     }
 

         if((in1 != '') && (in2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#lt9').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (ins2 == '')) {
            $('#lt9').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (ins1 == '')){
            $('#lt9').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#lt9').val(0.0);

         }
        
     };

     $('#shift9').keydown( function () {
        lates9();
     });

     $('#shift9').change( function () {
        lates9();
     });

</script>

<!-- Day 10 -->
<script text="javascript">
var lates10 = function() {

    var in1 = $('#inam10').val();
    var in2 = $('#inpm10').val();

    var ins1 = $('#in10').val();
    var ins2 = $('#resume10').val();


         var time1 = ins1.split(':'), time2 = in1.split(':');
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
        
    if(ins2 != ''){
         var time3 = ins2.split(':'), time4 = in2.split(':');
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
     }
 

         if((in1 != '') && (in2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#lt10').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (ins2 == '')) {
            $('#lt10').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (ins1 == '')){
            $('#lt10').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#lt10').val(0.0);

         }
        
     };

     $('#shift10').keydown( function () {
        lates10();
     });

     $('#shift10').change( function () {
        lates10();
     });

</script>

<!-- Day 11 -->

<script text="javascript">
var lates11 = function() {

    var in1 = $('#inam11').val();
    var in2 = $('#inpm11').val();

    var ins1 = $('#in11').val();
    var ins2 = $('#resume11').val();


         var time1 = ins1.split(':'), time2 = in1.split(':');
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
        
    if(ins2 != ''){
         var time3 = ins2.split(':'), time4 = in2.split(':');
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
     }
 

         if((in1 != '') && (in2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#lt11').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (ins2 == '')) {
            $('#lt11').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (ins1 == '')){
            $('#lt11').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#lt11').val(0.0);

         }
        
     };

     $('#shift11').keydown( function () {
        lates11();
     });

     $('#shift11').change( function () {
        lates11();
     });

</script>

<!-- Day 12 -->
<script text="javascript">
var lates12 = function() {

    var in1 = $('#inam12').val();
    var in2 = $('#inpm12').val();

    var ins1 = $('#in12').val();
    var ins2 = $('#resume12').val();


         var time1 = ins1.split(':'), time2 = in1.split(':');
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
        
    if(ins2 != ''){
         var time3 = ins2.split(':'), time4 = in2.split(':');
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
     }
 

         if((in1 != '') && (in2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#lt12').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (ins2 == '')) {
            $('#lt12').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (ins1 == '')){
            $('#lt12').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#lt12').val(0.0);

         }
        
     };

     $('#shift12').keydown( function () {
        lates12();
     });

     $('#shift12').change( function () {
        lates12();
     });

</script>

<!-- Day 13 -->
<script text="javascript">
var lates13 = function() {

    var in1 = $('#inam13').val();
    var in2 = $('#inpm13').val();

    var ins1 = $('#in13').val();
    var ins2 = $('#resume13').val();


         var time1 = ins1.split(':'), time2 = in1.split(':');
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
        
    if(ins2 != ''){
         var time3 = ins2.split(':'), time4 = in2.split(':');
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
     }
 

         if((in1 != '') && (in2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#lt13').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (ins2 == '')) {
            $('#lt13').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (ins1 == '')){
            $('#lt13').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#lt13').val(0.0);

         }
        
     };

     $('#shift13').keydown( function () {
        lates13();
     });

     $('#shift13').change( function () {
        lates13();
     });

</script>

<!-- Day 14 -->

<script text="javascript">
var lates14 = function() {

    var in1 = $('#inam14').val();
    var in2 = $('#inpm14').val();

    var ins1 = $('#in14').val();
    var ins2 = $('#resume14').val();


         var time1 = ins1.split(':'), time2 = in1.split(':');
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
        
    if(ins2 != ''){
         var time3 = ins2.split(':'), time4 = in2.split(':');
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
     }
 

         if((in1 != '') && (in2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#lt14').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (ins2 == '')) {
            $('#lt14').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (ins1 == '')){
            $('#lt14').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#lt14').val(0.0);

         }
        
     };

     $('#shift14').keydown( function () {
        lates14();
     });

     $('#shift14').change( function () {
        lates14();
     });

</script>

<!-- Day 15 -->

<script text="javascript">
var lates15 = function() {

    var in1 = $('#inam15').val();
    var in2 = $('#inpm15').val();

    var ins1 = $('#in15').val();
    var ins2 = $('#resume15').val();


         var time1 = ins1.split(':'), time2 = in1.split(':');
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
        
    if(ins2 != ''){
         var time3 = ins2.split(':'), time4 = in2.split(':');
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
     }
 

         if((in1 != '') && (in2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#lt15').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (ins2 == '')) {
            $('#lt15').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (ins1 == '')){
            $('#lt15').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#lt15').val(0.0);

         }
        
     };

     $('#shift15').keydown( function () {
        lates15();
     });

     $('#shift15').change( function () {
        lates15();
     });

</script>
<!-- Day 16 -->
<script text="javascript">
var lates16 = function() {

    var in1 = $('#inam16').val();
    var in2 = $('#inpm16').val();

    var ins1 = $('#in16').val();
    var ins2 = $('#resume16').val();


         var time1 = ins1.split(':'), time2 = in1.split(':');
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
        
    if(ins2 != ''){
         var time3 = ins2.split(':'), time4 = in2.split(':');
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
     }
 

         if((in1 != '') && (in2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#lt16').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (ins2 == '')) {
            $('#lt16').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (ins1 == '')){
            $('#lt16').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#lt16').val(0.0);

         }
        
     };

     $('#shift16').keydown( function () {
        lates16();
     });

     $('#shift16').change( function () {
        lates16();
     });

</script>

<!-- Day 17 -->
<script text="javascript">
var lates17 = function() {

    var in1 = $('#inam17').val();
    var in2 = $('#inpm17').val();

    var ins1 = $('#in17').val();
    var ins2 = $('#resume17').val();


         var time1 = ins1.split(':'), time2 = in1.split(':');
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
        
    if(ins2 != ''){
         var time3 = ins2.split(':'), time4 = in2.split(':');
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
     }
 

         if((in1 != '') && (in2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#lt17').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (ins2 == '')) {
            $('#lt17').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (ins1 == '')){
            $('#lt17').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#lt17').val(0.0);

         }
        
     };

     $('#shift17').keydown( function () {
        lates17();
     });

     $('#shift17').change( function () {
        lates17();
     });

</script>

<!-- Day 18 -->
<script text="javascript">
var lates18 = function() {

    var in1 = $('#inam18').val();
    var in2 = $('#inpm18').val();

    var ins1 = $('#in18').val();
    var ins2 = $('#resume18').val();


         var time1 = ins1.split(':'), time2 = in1.split(':');
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
        
    if(ins2 != ''){
         var time3 = ins2.split(':'), time4 = in2.split(':');
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
     }
 

         if((in1 != '') && (in2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#lt18').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (ins2 == '')) {
            $('#lt18').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (ins1 == '')){
            $('#lt18').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#lt18').val(0.0);

         }
        
     };

     $('#shift18').keydown( function () {
        lates18();
     });

     $('#shift18').change( function () {
        lates18();
     });

</script>

<!-- Day 19 -->
<script text="javascript">
var lates19 = function() {

    var in1 = $('#inam19').val();
    var in2 = $('#inpm19').val();

    var ins1 = $('#in19').val();
    var ins2 = $('#resume19').val();


         var time1 = ins1.split(':'), time2 = in1.split(':');
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
        
    if(ins2 != ''){
         var time3 = ins2.split(':'), time4 = in2.split(':');
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
     }
 

         if((in1 != '') && (in2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#lt19').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (ins2 == '')) {
            $('#lt19').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (ins1 == '')){
            $('#lt19').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#lt19').val(0.0);

         }
        
     };

     $('#shift19').keydown( function () {
        lates19();
     });

     $('#shift19').change( function () {
        lates19();
     });

</script>

<!-- Day 20 -->
<script text="javascript">
var lates20 = function() {

    var in1 = $('#inam20').val();
    var in2 = $('#inpm20').val();

    var ins1 = $('#in20').val();
    var ins2 = $('#resume20').val();


         var time1 = ins1.split(':'), time2 = in1.split(':');
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
        
    if(ins2 != ''){
         var time3 = ins2.split(':'), time4 = in2.split(':');
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
     }
 

         if((in1 != '') && (in2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#lt20').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (ins2 == '')) {
            $('#lt20').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (ins1 == '')){
            $('#lt20').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#lt20').val(0.0);

         }
        
     };

     $('#shift20').keydown( function () {
        lates20();
     });

     $('#shift20').change( function () {
        lates20();
     });

</script>

<!-- Day 21 -->
<script text="javascript">
var lates21 = function() {

    var in1 = $('#inam21').val();
    var in2 = $('#inpm21').val();

    var ins1 = $('#in21').val();
    var ins2 = $('#resume21').val();


         var time1 = ins1.split(':'), time2 = in1.split(':');
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
        
    if(ins2 != ''){
         var time3 = ins2.split(':'), time4 = in2.split(':');
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
     }
 

         if((in1 != '') && (in2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#lt21').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (ins2 == '')) {
            $('#lt21').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (ins1 == '')){
            $('#lt21').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#lt21').val(0.0);

         }
        
     };

     $('#shift21').keydown( function () {
        lates21();
     });

     $('#shift21').change( function () {
        lates21();
     });

</script>

<!-- Day 22 -->
<script text="javascript">
var lates22 = function() {

    var in1 = $('#inam22').val();
    var in2 = $('#inpm22').val();

    var ins1 = $('#in22').val();
    var ins2 = $('#resume22').val();


         var time1 = ins1.split(':'), time2 = in1.split(':');
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
        
    if(ins2 != ''){
         var time3 = ins2.split(':'), time4 = in2.split(':');
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
     }
 

         if((in1 != '') && (in2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#lt22').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (ins2 == '')) {
            $('#lt22').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (ins1 == '')){
            $('#lt22').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#lt22').val(0.0);

         }
        
     };

     $('#shift22').keydown( function () {
        lates22();
     });

     $('#shift22').change( function () {
        lates22();
     });

</script>

<!-- Day 23 -->
<script text="javascript">
var lates23 = function() {

    var in1 = $('#inam23').val();
    var in2 = $('#inpm23').val();

    var ins1 = $('#in23').val();
    var ins2 = $('#resume23').val();


         var time1 = ins1.split(':'), time2 = in1.split(':');
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
        
    if(ins2 != ''){
         var time3 = ins2.split(':'), time4 = in2.split(':');
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
     }
 

         if((in1 != '') && (in2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#lt23').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (ins2 == '')) {
            $('#lt23').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (ins1 == '')){
            $('#lt23').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#lt23').val(0.0);

         }
        
     };

     $('#shift23').keydown( function () {
        lates23();
     });

     $('#shift23').change( function () {
        lates23();
     });

</script>

<!-- Day 24 -->
<script text="javascript">
var lates24 = function() {

    var in1 = $('#inam24').val();
    var in2 = $('#inpm24').val();

    var ins1 = $('#in24').val();
    var ins2 = $('#resume24').val();


         var time1 = ins1.split(':'), time2 = in1.split(':');
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
        
    if(ins2 != ''){
         var time3 = ins2.split(':'), time4 = in2.split(':');
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
     }
 

         if((in1 != '') && (in2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#lt24').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (ins2 == '')) {
            $('#lt24').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (ins1 == '')){
            $('#lt24').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#lt24').val(0.0);

         }
        
     };

     $('#shift24').keydown( function () {
        lates24();
     });

     $('#shift24').change( function () {
        lates24();
     });

</script>

<!-- Day 25 -->
<script text="javascript">
var lates25 = function() {

    var in1 = $('#inam25').val();
    var in2 = $('#inpm25').val();

    var ins1 = $('#in25').val();
    var ins2 = $('#resume25').val();


         var time1 = ins1.split(':'), time2 = in1.split(':');
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
        
    if(ins2 != ''){
         var time3 = ins2.split(':'), time4 = in2.split(':');
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
     }
 

         if((in1 != '') && (in2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#lt25').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (ins2 == '')) {
            $('#lt25').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (ins1 == '')){
            $('#lt25').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#lt25').val(0.0);

         }
        
     };

     $('#shift25').keydown( function () {
        lates25();
     });

     $('#shift25').change( function () {
        lates25();
     });

</script>

<!-- Day 26 -->
<script text="javascript">
var lates26 = function() {

    var in1 = $('#inam26').val();
    var in2 = $('#inpm26').val();

    var ins1 = $('#in26').val();
    var ins2 = $('#resume26').val();


         var time1 = ins1.split(':'), time2 = in1.split(':');
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
        
    if(ins2 != ''){
         var time3 = ins2.split(':'), time4 = in2.split(':');
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
     }
 

         if((in1 != '') && (in2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#lt26').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (ins2 == '')) {
            $('#lt26').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (ins1 == '')){
            $('#lt26').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#lt26').val(0.0);

         }
        
     };

     $('#shift26').keydown( function () {
        lates26();
     });

     $('#shift26').change( function () {
        lates26();
     });

</script>

<!-- Day 27 -->
<script text="javascript">
var lates27 = function() {

    var in1 = $('#inam27').val();
    var in2 = $('#inpm27').val();

    var ins1 = $('#in27').val();
    var ins2 = $('#resume27').val();


         var time1 = ins1.split(':'), time2 = in1.split(':');
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
        
    if(ins2 != ''){
         var time3 = ins2.split(':'), time4 = in2.split(':');
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
     }
 

         if((in1 != '') && (in2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#lt27').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (ins2 == '')) {
            $('#lt27').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (ins1 == '')){
            $('#lt27').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#lt27').val(0.0);

         }
        
     };

     $('#shift27').keydown( function () {
        lates27();
     });

     $('#shift27').change( function () {
        lates27();
     });

</script>

<!-- Day 28 -->
<script text="javascript">
var lates28 = function() {

    var in1 = $('#inam28').val();
    var in2 = $('#inpm28').val();

    var ins1 = $('#in28').val();
    var ins2 = $('#resume28').val();


         var time1 = ins1.split(':'), time2 = in1.split(':');
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
        
    if(ins2 != ''){
         var time3 = ins2.split(':'), time4 = in2.split(':');
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
     }
 

         if((in1 != '') && (in2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#lt28').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (ins2 == '')) {
            $('#lt28').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (ins1 == '')){
            $('#lt28').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#lt28').val(0.0);

         }
        
     };

     $('#shift28').keydown( function () {
        lates28();
     });

     $('#shift28').change( function () {
        lates28();
     });

</script>

<!-- Day 29 -->

<script text="javascript">
var lates29 = function() {

    var in1 = $('#inam29').val();
    var in2 = $('#inpm29').val();

    var ins1 = $('#in29').val();
    var ins2 = $('#resume29').val();


         var time1 = ins1.split(':'), time2 = in1.split(':');
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
        
    if(ins2 != ''){
         var time3 = ins2.split(':'), time4 = in2.split(':');
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
     }
 

         if((in1 != '') && (in2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#lt29').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (ins2 == '')) {
            $('#lt29').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (ins1 == '')){
            $('#lt29').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#lt29').val(0.0);

         }
        
     };

     $('#shift29').keydown( function () {
        lates29();
     });

     $('#shift29').change( function () {
        lates29();
     });

</script>

<!-- Day 30 -->
<script text="javascript">
var lates30 = function() {

    var in1 = $('#inam30').val();
    var in2 = $('#inpm30').val();

    var ins1 = $('#in30').val();
    var ins2 = $('#resume30').val();


         var time1 = ins1.split(':'), time2 = in1.split(':');
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
        
    if(ins2 != ''){
         var time3 = ins2.split(':'), time4 = in2.split(':');
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
     }
 

         if((in1 != '') && (in2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#lt30').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (ins2 == '')) {
            $('#lt30').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (ins1 == '')){
            $('#lt30').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#lt30').val(0.0);

         }
        
     };

     $('#shift30').keydown( function () {
        lates30();
     });

     $('#shift30').change( function () {
        lates30();
     });

</script>

<!-- Day 31 -->
<script text="javascript">
var lates31 = function() {

    var in1 = $('#inam31').val();
    var in2 = $('#inpm31').val();

    var ins1 = $('#in31').val();
    var ins2 = $('#resume31').val();


         var time1 = ins1.split(':'), time2 = in1.split(':');
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
        
    if(ins2 != ''){
         var time3 = ins2.split(':'), time4 = in2.split(':');
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
     }
 

         if((in1 != '') && (in2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#lt31').val(sum.toFixed(2));
         }

         else if((in1 != '') || (in2 == '') && (ins2 == '')) {
            $('#lt31').val(parseFloat(hoursA + 0.0));

         }

         else if((in1 == '') || (in2 != '')  && (ins1 == '')){
            $('#lt31').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#lt31').val(0.0);

         }
        
     };

     $('#shift31').keydown( function () {
        lates31();
     });

     $('#shift31').change( function () {
        lates31();
     });

</script>
