

<!-- Day 1 -->

<script>

var over1 = function() {

	if(($('#inot1').val() != '') && ($('#outot1').val() != '') ) {
         var time1 = $("#inot1").val().split(':'), time2 = $("#outot1").val().split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
         var hours = hours2 - hours1, mins = 0;
         if(hours < 0) hours = 24 + hours;
         if(mins2 >= mins1) {
             mins = mins2 - mins1;
         }
         else {
             mins = (mins2 + 60) - mins1;
             hours--;
         }
         mins = mins; // take percentage in 60
         hours += mins;
         hours = hours.toFixed(2);
         $('#ot1').val(hours);
        }

        else{
        	$('#ot1').val('');
        }
     }

   $('#inot1').keydown(function () {
         over1();
     });

   $('#outot1').keydown(function (){
   	  over1();
   });

</script>

<!-- Day 2 -->

<script>

var over2 = function() {

	if(($('#inot2').val() != '') && ($('#outot2').val() != '') ) {
         var time1 = $("#inot2").val().split(':'), time2 = $("#outot2").val().split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
         var hours = hours2 - hours1, mins = 0;
         if(hours < 0) hours = 24 + hours;
         if(mins2 >= mins1) {
             mins = mins2 - mins1;
         }
         else {
             mins = (mins2 + 60) - mins1;
             hours--;
         }
         mins = mins; // take percentage in 60
         hours += mins;
         hours = hours.toFixed(2);
         $('#ot2').val(hours);
        }

        else{
        	$('#ot2').val('');
        }
     }

   $('#inot2').keydown(function () {
         over2();
     });

   $('#outot2').keydown(function (){
   	  over2();
   });

</script>


<!-- Day 3 -->

<script>

var over3 = function() {

	if(($('#inot3').val() != '') && ($('#outot3').val() != '') ) {
         var time1 = $("#inot3").val().split(':'), time2 = $("#outot3").val().split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
         var hours = hours2 - hours1, mins = 0;
         if(hours < 0) hours = 24 + hours;
         if(mins2 >= mins1) {
             mins = mins2 - mins1;
         }
         else {
             mins = (mins2 + 60) - mins1;
             hours--;
         }
         mins = mins; // take percentage in 60
         hours += mins;
         hours = hours.toFixed(2);
         $('#ot3').val(hours);
        }

        else{
        	$('#ot3').val('');
        }
     }

   $('#inot3').keydown(function () {
         over3();
     });

   $('#outot3').keydown(function (){
   	  over3();
   });

</script>

<!-- Day 4 -->
<script>

var over4 = function() {

	if(($('#inot4').val() != '') && ($('#outot4').val() != '') ) {
         var time1 = $("#inot4").val().split(':'), time2 = $("#outot4").val().split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
         var hours = hours2 - hours1, mins = 0;
         if(hours < 0) hours = 24 + hours;
         if(mins2 >= mins1) {
             mins = mins2 - mins1;
         }
         else {
             mins = (mins2 + 60) - mins1;
             hours--;
         }
         mins = mins; // take percentage in 60
         hours += mins;
         hours = hours.toFixed(2);
         $('#ot4').val(hours);
        }

        else{
        	$('#ot4').val('');
        }
     }

   $('#inot4').keydown(function () {
         over4();
     });

   $('#outot4').keydown(function (){
   	  over4();
   });

</script>

<!-- Day 5 -->
<script>

var over5 = function() {

	if(($('#inot5').val() != '') && ($('#outot5').val() != '') ) {
         var time1 = $("#inot5").val().split(':'), time2 = $("#outot5").val().split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
         var hours = hours2 - hours1, mins = 0;
         if(hours < 0) hours = 24 + hours;
         if(mins2 >= mins1) {
             mins = mins2 - mins1;
         }
         else {
             mins = (mins2 + 60) - mins1;
             hours--;
         }
         mins = mins; // take percentage in 60
         hours += mins;
         hours = hours.toFixed(2);
         $('#ot5').val(hours);
        }

        else{
        	$('#ot5').val('');
        }
     }

   $('#inot5').keydown(function () {
         over5();
     });

   $('#outot5').keydown(function (){
   	  over5();
   });

</script>

<!-- Day 6 -->
<script>


	if(($('#inot6').val() != '') && ($('#outot6').val() != '') ) {
         var time1 = $("#inot6").val().split(':'), time2 = $("#outot6").val().split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
         var hours = hours2 - hours1, mins = 0;
         if(hours < 0) hours = 24 + hours;
         if(mins2 >= mins1) {
             mins = mins2 - mins1;
         }
         else {
             mins = (mins2 + 60) - mins1;
             hours--;
         }
         mins = mins; // take percentage in 60
         hours += mins;
         hours = hours.toFixed(2);
         $('#ot6').val(hours);
        }

        else{
        	$('#ot6').val('');
        }
     }

   $('#inot6').keydown(function () {
         over6();
     });

   $('#outot6').keydown(function (){
   	  over6();
   });

</script>

<!-- Day 7 -->

<script>


var over7 = function() {

	if(($('#inot7').val() != '') && ($('#outot7').val() != '') ) {
         var time1 = $("#inot7").val().split(':'), time2 = $("#outot7").val().split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
         var hours = hours2 - hours1, mins = 0;
         if(hours < 0) hours = 24 + hours;
         if(mins2 >= mins1) {
             mins = mins2 - mins1;
         }
         else {
             mins = (mins2 + 60) - mins1;
             hours--;
         }
         mins = mins; // take percentage in 60
         hours += mins;
         hours = hours.toFixed(2);
         $('#ot7').val(hours);
        }

        else{
        	$('#ot7').val('');
        }
     }

   $('#inot7').keydown(function () {
         over7();
     });

   $('#outot7').keydown(function (){
   	  over7();
   });

</script>

<!-- Day 8 -->
<script>


var over8 = function() {

	if(($('#inot8').val() != '') && ($('#outot8').val() != '') ) {
         var time1 = $("#inot8").val().split(':'), time2 = $("#outot8").val().split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
         var hours = hours2 - hours1, mins = 0;
         if(hours < 0) hours = 24 + hours;
         if(mins2 >= mins1) {
             mins = mins2 - mins1;
         }
         else {
             mins = (mins2 + 60) - mins1;
             hours--;
         }
         mins = mins; // take percentage in 60
         hours += mins;
         hours = hours.toFixed(2);
         $('#ot8').val(hours);
        }

        else{
        	$('#ot8').val('');
        }
     }

   $('#inot8').keydown(function () {
         over8();
     });

   $('#outot8').keydown(function (){
   	  over8();
   });

</script>

<!-- Day 9 -->
<script>


var over9 = function() {

	if(($('#inot9').val() != '') && ($('#outot9').val() != '') ) {
         var time1 = $("#inot9").val().split(':'), time2 = $("#outot9").val().split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
         var hours = hours2 - hours1, mins = 0;
         if(hours < 0) hours = 24 + hours;
         if(mins2 >= mins1) {
             mins = mins2 - mins1;
         }
         else {
             mins = (mins2 + 60) - mins1;
             hours--;
         }
         mins = mins; // take percentage in 60
         hours += mins;
         hours = hours.toFixed(2);
         $('#ot9').val(hours);
        }

        else{
        	$('#ot9').val('');
        }
     }

   $('#inot9').keydown(function () {
         over9();
     });

   $('#outot9').keydown(function (){
   	  over9();
   });

</script>

<!-- Day 10 -->
<script>

var over10 = function() {

	if(($('#inot10').val() != '') && ($('#outot10').val() != '') ) {
         var time1 = $("#inot10").val().split(':'), time2 = $("#outot10").val().split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
         var hours = hours2 - hours1, mins = 0;
         if(hours < 0) hours = 24 + hours;
         if(mins2 >= mins1) {
             mins = mins2 - mins1;
         }
         else {
             mins = (mins2 + 60) - mins1;
             hours--;
         }
         mins = mins; // take percentage in 60
         hours += mins;
         hours = hours.toFixed(2);
         $('#ot10').val(hours);
        }

        else{
        	$('#ot10').val('');
        }
     }

   $('#inot10').keydown(function () {
         over10();
     });

   $('#outot10').keydown(function (){
   	  over10();
   });

</script>

<!-- Day 11 -->
<script>



var over11 = function() {

	if(($('#inot11').val() != '') && ($('#outot11').val() != '') ) {
         var time1 = $("#inot11").val().split(':'), time2 = $("#outot11").val().split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
         var hours = hours2 - hours1, mins = 0;
         if(hours < 0) hours = 24 + hours;
         if(mins2 >= mins1) {
             mins = mins2 - mins1;
         }
         else {
             mins = (mins2 + 60) - mins1;
             hours--;
         }
         mins = mins; // take percentage in 60
         hours += mins;
         hours = hours.toFixed(2);
         $('#ot11').val(hours);
        }

        else{
        	$('#ot11').val('');
        }
     }

   $('#inot11').keydown(function () {
         over11();
     });

   $('#outot11').keydown(function (){
   	  over11();
   });

</script>

<!-- Day 12 -->
<script>

var over12 = function() {

	if(($('#inot12').val() != '') && ($('#outot12').val() != '') ) {
         var time1 = $("#inot12").val().split(':'), time2 = $("#outot12").val().split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
         var hours = hours2 - hours1, mins = 0;
         if(hours < 0) hours = 24 + hours;
         if(mins2 >= mins1) {
             mins = mins2 - mins1;
         }
         else {
             mins = (mins2 + 60) - mins1;
             hours--;
         }
         mins = mins; // take percentage in 60
         hours += mins;
         hours = hours.toFixed(2);
         $('#ot12').val(hours);
        }

        else{
        	$('#ot12').val('');
        }
     }

   $('#inot12').keydown(function () {
         over12();
     });

   $('#outot12').keydown(function (){
   	  over12();
   });

</script>

<!-- Day 13 -->
<script>



var over13 = function() {

	if(($('#inot13').val() != '') && ($('#outot13').val() != '') ) {
         var time1 = $("#inot13").val().split(':'), time2 = $("#outot13").val().split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
         var hours = hours2 - hours1, mins = 0;
         if(hours < 0) hours = 24 + hours;
         if(mins2 >= mins1) {
             mins = mins2 - mins1;
         }
         else {
             mins = (mins2 + 60) - mins1;
             hours--;
         }
         mins = mins; // take percentage in 60
         hours += mins;
         hours = hours.toFixed(2);
         $('#ot13').val(hours);
        }

        else{
        	$('#ot13').val('');
        }
     }

   $('#inot13').keydown(function () {
         over13();
     });

   $('#outot13').keydown(function (){
   	  over13();
   });

</script>

<!-- Day 14 -->
<script>



var over14 = function() {

	if(($('#inot14').val() != '') && ($('#outot14').val() != '') ) {
         var time1 = $("#inot14").val().split(':'), time2 = $("#outot14").val().split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
         var hours = hours2 - hours1, mins = 0;
         if(hours < 0) hours = 24 + hours;
         if(mins2 >= mins1) {
             mins = mins2 - mins1;
         }
         else {
             mins = (mins2 + 60) - mins1;
             hours--;
         }
         mins = mins; // take percentage in 60
         hours += mins;
         hours = hours.toFixed(2);
         $('#ot14').val(hours);
        }

        else{
        	$('#ot14').val('');
        }
     }

   $('#inot14').keydown(function () {
         over14();
     });

   $('#outot14').keydown(function (){
   	  over14();
   });

</script>

<!-- Day 15 -->
<script>
var over15 = function() {

	if(($('#inot15').val() != '') && ($('#outot15').val() != '')) {
         var time1 = $("#inot15").val().split(':'), time2 = $("#outot15").val().split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
         var hours = hours2 - hours1, mins = 0;
         if(hours < 0) hours = 24 + hours;
         if(mins2 >= mins1) {
             mins = mins2 - mins1;
         }
         else {
             mins = (mins2 + 60) - mins1;
             hours--;
         }
         mins = mins; // take percentage in 60
         hours += mins;
         hours = hours.toFixed(2);
         $('#ot15').val(hours);
        }

        else{
        	$('#ot15').val('');
        }
     }

   $('#inot15').keydown(function () {
         over15();
     });

   $('#outot15').keydown(function (){
   	  over15();
   });

</script>

<!-- Day 16 -->
<script>
var over16 = function() {

    if(($('#inot16').val() != '') && ($('#outot16').val() != '')) {
         var time1 = $("#inot16").val().split(':'), time2 = $("#outot16").val().split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
         var hours = hours2 - hours1, mins = 0;
         if(hours < 0) hours = 24 + hours;
         if(mins2 >= mins1) {
             mins = mins2 - mins1;
         }
         else {
             mins = (mins2 + 60) - mins1;
             hours--;
         }
         mins = mins; // take percentage in 60
         hours += mins;
         hours = hours.toFixed(2);
         $('#ot16').val(hours);
        }

        else{
            $('#ot16').val('');
        }
     }

   $('#inot16').keydown(function () {
         over16();
     });

   $('#outot16').keydown(function (){
      over16();
   });

</script>

<!-- Day 17 -->

<script>

var over17 = function() {

    if(($('#inot17').val() != '') && ($('#outot17').val() != '') ) {
         var time1 = $("#inot17").val().split(':'), time2 = $("#outot17").val().split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
         var hours = hours2 - hours1, mins = 0;
         if(hours < 0) hours = 24 + hours;
         if(mins2 >= mins1) {
             mins = mins2 - mins1;
         }
         else {
             mins = (mins2 + 60) - mins1;
             hours--;
         }
         mins = mins; // take percentage in 60
         hours += mins;
         hours = hours.toFixed(2);
         $('#ot17').val(hours);
        }

        else{
            $('#ot17').val('');
        }
     }

   $('#inot17').keydown(function () {
         over17();
     });

   $('#outot17').keydown(function (){
      over17();
   });

</script>

<!-- Day 18 -->
<script>

var over18 = function() {

    if(($('#inot18').val() != '') && ($('#outot18').val() != '') ) {
         var time1 = $("#inot18").val().split(':'), time2 = $("#outot18").val().split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
         var hours = hours2 - hours1, mins = 0;
         if(hours < 0) hours = 24 + hours;
         if(mins2 >= mins1) {
             mins = mins2 - mins1;
         }
         else {
             mins = (mins2 + 60) - mins1;
             hours--;
         }
         mins = mins; // take percentage in 60
         hours += mins;
         hours = hours.toFixed(2);
         $('#ot18').val(hours);
        }

        else{
            $('#ot18').val('');
        }
     }

   $('#inot18').keydown(function () {
         over18();
     });

   $('#outot18').keydown(function (){
      over18();
   });

</script>

<!-- Day 19 -->
<script>

var over19 = function() {

    if(($('#inot19').val() != '') && ($('#outot19').val() != '') ) {
         var time1 = $("#inot19").val().split(':'), time2 = $("#outot19").val().split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
         var hours = hours2 - hours1, mins = 0;
         if(hours < 0) hours = 24 + hours;
         if(mins2 >= mins1) {
             mins = mins2 - mins1;
         }
         else {
             mins = (mins2 + 60) - mins1;
             hours--;
         }
         mins = mins; // take percentage in 60
         hours += mins;
         hours = hours.toFixed(2);
         $('#ot19').val(hours);
        }

        else{
            $('#ot19').val('');
        }
     }

   $('#inot19').keydown(function () {
         over19();
     });

   $('#outot19').keydown(function (){
      over19();
   });

</script>

<!-- Day 20 -->
<script>

var over20 = function() {

    if(($('#inot20').val() != '') && ($('#outot20').val() != '') ) {
         var time1 = $("#inot20").val().split(':'), time2 = $("#outot20").val().split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
         var hours = hours2 - hours1, mins = 0;
         if(hours < 0) hours = 24 + hours;
         if(mins2 >= mins1) {
             mins = mins2 - mins1;
         }
         else {
             mins = (mins2 + 60) - mins1;
             hours--;
         }
         mins = mins; // take percentage in 60
         hours += mins;
         hours = hours.toFixed(2);
         $('#ot20').val(hours);
        }

        else{
            $('#ot20').val('');
        }
     }

   $('#inot20').keydown(function () {
         over20();
     });

   $('#outot20').keydown(function (){
      over20();
   });

</script>

<!-- Day 21 -->
<script>

var over21 = function() {

    if(($('#inot21').val() != '') && ($('#outot21').val() != '') ) {
         var time1 = $("#inot21").val().split(':'), time2 = $("#outot21").val().split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
         var hours = hours2 - hours1, mins = 0;
         if(hours < 0) hours = 24 + hours;
         if(mins2 >= mins1) {
             mins = mins2 - mins1;
         }
         else {
             mins = (mins2 + 60) - mins1;
             hours--;
         }
         mins = mins ; // take percentage in 60
         hours += mins;
         hours = hours.toFixed(2);
         $('#ot21').val(hours);
        }

        else{
            $('#ot21').val('');
        }
     }

   $('#inot21').keydown(function () {
         over21();
     });

   $('#outot21').keydown(function (){
      over21();
   });

</script>

<!-- Day 22 -->

<script>

var over22 = function() {

    if(($('#inot22').val() != '') && ($('#outot22').val() != '') ) {
         var time1 = $("#inot22").val().split(':'), time2 = $("#outot22").val().split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
         var hours = hours2 - hours1, mins = 0;
         if(hours < 0) hours = 24 + hours;
         if(mins2 >= mins1) {
             mins = mins2 - mins1;
         }
         else {
             mins = (mins2 + 60) - mins1;
             hours--;
         }
         mins = mins; // take percentage in 60
         hours += mins;
         hours = hours.toFixed(2);
         $('#ot22').val(hours);
        }

        else{
            $('#ot22').val('');
        }
     }

   $('#inot22').keydown(function () {
         over22();
     });

   $('#outot22').keydown(function (){
      over22();
   });

</script>

<!-- Day 23 -->
<script>

var over23 = function() {

    if(($('#inot23').val() != '') && ($('#outot23').val() != '') ) {
         var time1 = $("#inot23").val().split(':'), time2 = $("#outot23").val().split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
         var hours = hours2 - hours1, mins = 0;
         if(hours < 0) hours = 24 + hours;
         if(mins2 >= mins1) {
             mins = mins2 - mins1;
         }
         else {
             mins = (mins2 + 60) - mins1;
             hours--;
         }
         mins = mins; // take percentage in 60
         hours += mins;
         hours = hours.toFixed(2);
         $('#ot23').val(hours);
        }

        else{
            $('#ot23').val('');
        }
     }

   $('#inot23').keydown(function () {
         over23();
     });

   $('#outot23').keydown(function (){
      over23();
   });

</script>

<!-- Day 24 -->
<script>

var over24 = function() {

    if(($('#inot24').val() != '') && ($('#outot24').val() != '') ) {
         var time1 = $("#inot24").val().split(':'), time2 = $("#outot24").val().split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
         var hours = hours2 - hours1, mins = 0;
         if(hours < 0) hours = 24 + hours;
         if(mins2 >= mins1) {
             mins = mins2 - mins1;
         }
         else {
             mins = (mins2 + 60) - mins1;
             hours--;
         }
         mins = mins; // take percentage in 60
         hours += mins;
         hours = hours.toFixed(2);
         $('#ot24').val(hours);
        }

        else{
            $('#ot24').val('');
        }
     }

   $('#inot24').keydown(function () {
         over24();
     });

   $('#outot24').keydown(function (){
      over24();
   });

</script>

<!-- Day 25 -->
<script>

var over25 = function() {

    if(($('#inot25').val() != '') && ($('#outot25').val() != '') ) {
         var time1 = $("#inot25").val().split(':'), time2 = $("#outot25").val().split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
         var hours = hours2 - hours1, mins = 0;
         if(hours < 0) hours = 24 + hours;
         if(mins2 >= mins1) {
             mins = mins2 - mins1;
         }
         else {
             mins = (mins2 + 60) - mins1;
             hours--;
         }
         mins = mins; // take percentage in 60
         hours += mins;
         hours = hours.toFixed(2);
         $('#ot25').val(hours);
        }

        else{
            $('#ot25').val('');
        }
     }

   $('#inot25').keydown(function () {
         over25();
     });

   $('#outot25').keydown(function (){
      over25();
   });

</script>

<!-- Day 26 -->
<script>

var over26 = function() {

    if(($('#inot26').val() != '') && ($('#outot26').val() != '') ) {
         var time1 = $("#inot26").val().split(':'), time2 = $("#outot26").val().split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
         var hours = hours2 - hours1, mins = 0;
         if(hours < 0) hours = 24 + hours;
         if(mins2 >= mins1) {
             mins = mins2 - mins1;
         }
         else {
             mins = (mins2 + 60) - mins1;
             hours--;
         }
         mins = mins; // take percentage in 60
         hours += mins;
         hours = hours.toFixed(2);
         $('#ot26').val(hours);
        }

        else{
            $('#ot26').val('');
        }
     }

   $('#inot26').keydown(function () {
         over26();
     });

   $('#outot26').keydown(function (){
      over26();
   });

</script>

<!-- Day 27 -->
<script>

var over27 = function() {

    if(($('#inot27').val() != '') && ($('#outot27').val() != '') ) {
         var time1 = $("#inot27").val().split(':'), time2 = $("#outot27").val().split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
         var hours = hours2 - hours1, mins = 0;
         if(hours < 0) hours = 24 + hours;
         if(mins2 >= mins1) {
             mins = mins2 - mins1;
         }
         else {
             mins = (mins2 + 60) - mins1;
             hours--;
         }
         mins = mins; // take percentage in 60
         hours += mins;
         hours = hours.toFixed(2);
         $('#ot27').val(hours);
        }

        else{
            $('#ot27').val('');
        }
     }

   $('#inot27').keydown(function () {
         over27();
     });

   $('#outot27').keydown(function (){
      over27();
   });

</script>

<!-- Day 28 -->
<script>

var over28 = function() {

    if(($('#inot28').val() != '') && ($('#outot28').val() != '') ) {
         var time1 = $("#inot28").val().split(':'), time2 = $("#outot28").val().split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
         var hours = hours2 - hours1, mins = 0;
         if(hours < 0) hours = 24 + hours;
         if(mins2 >= mins1) {
             mins = mins2 - mins1;
         }
         else {
             mins = (mins2 + 60) - mins1;
             hours--;
         }
         mins = mins; // take percentage in 60
         hours += mins;
         hours = hours.toFixed(2);
         $('#ot28').val(hours);
        }

        else{
            $('#ot28').val('');
        }
     }

   $('#inot28').keydown(function () {
         over28();
     });

   $('#outot28').keydown(function (){
      over28();
   });

</script>

<!-- Day 29 -->
<script>

var over29 = function() {

    if(($('#inot29').val() != '') && ($('#outot29').val() != '') ) {
         var time1 = $("#inot29").val().split(':'), time2 = $("#outot29").val().split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
         var hours = hours2 - hours1, mins = 0;
         if(hours < 0) hours = 24 + hours;
         if(mins2 >= mins1) {
             mins = mins2 - mins1;
         }
         else {
             mins = (mins2 + 60) - mins1;
             hours--;
         }
         mins = mins; // take percentage in 60
         hours += mins;
         hours = hours.toFixed(2);
         $('#ot29').val(hours);
        }

        else{
            $('#ot29').val('');
        }
     }

   $('#inot29').keydown(function () {
         over29();
     });

   $('#outot29').keydown(function (){
      over29();
   });

</script>

<!-- Day 30 -->
<script>

var over30 = function() {

    if(($('#inot30').val() != '') && ($('#outot30').val() != '') ) {
         var time1 = $("#inot30").val().split(':'), time2 = $("#outot30").val().split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
         var hours = hours2 - hours1, mins = 0;
         if(hours < 0) hours = 24 + hours;
         if(mins2 >= mins1) {
             mins = mins2 - mins1;
         }
         else {
             mins = (mins2 + 60) - mins1;
             hours--;
         }
         mins = mins; // take percentage in 60
         hours += mins;
         hours = hours.toFixed(2);
         $('#ot30').val(hours);
        }

        else{
            $('#ot30').val('');
        }
     }

   $('#inot30').keydown(function () {
         over30();
     });

   $('#outot30').keydown(function (){
      over30();
   });

</script>

<!-- Day 31 -->
<script>

var over31 = function() {

    if(($('#inot31').val() != '') && ($('#outot31').val() != '') ) {
         var time1 = $("#inot31").val().split(':'), time2 = $("#outot31").val().split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
         var hours = hours2 - hours1, mins = 0;
         if(hours < 0) hours = 24 + hours;
         if(mins2 >= mins1) {
             mins = mins2 - mins1;
         }
         else {
             mins = (mins2 + 60) - mins1;
             hours--;
         }
         mins = mins; // take percentage in 60
         hours += mins;
         hours = hours.toFixed(2);
         $('#ot31').val(hours);
        }

        else{
            $('#ot31').val('');
        }
     }

   $('#inot31').keydown(function () {
         over31();
     });

   $('#outot31').keydown(function (){
      over31();
   });

</script>



