
<!-- Day 1 -->
<script>
var updateAbs1 = function(){
    var input1 = $('#inam1').val();
    var input2 = $('#inpm1').val();

    var res1 = '<?php echo $In1; ?>';
    var res2 = '<?php echo $Resume1; ?>';
    var abs = 1.0;

    if((input1 == '') && (input2 == '')){
        abs = parseFloat(abs);
    }
    
    else if ((input1 != '') && (input2 == '') ){
        abs = parseFloat(abs - 0.5);
    }


    else if((input1 == '') && (input2 != '') ){
        abs = parseFloat(abs - 0.5);
    }

    else{
        abs = parseFloat(abs - 1.0);
    }


     if ( (res2 == '') && (input1 != '')){
        abs = parseFloat(0.0);
        }


     if((res1 == '') && (input2 != '')) {
        abs = parseFloat(0.0);
        }

    $('#abs1').val(abs.toFixed(2));

}

$('#inam1').keydown(function (){
    updateAbs1();
});

$('#inpm1').keydown( function() {
    updateAbs1();
});

</script>


<!-- Day 2 -->
<script>
var updateAbs2 = function(){
    var input1 = $('#inam2').val();
    var input2 = $('#inpm2').val();

    var res1 = '<?php echo $In1; ?>';
    var res2 = '<?php echo $Resume1; ?>';
    var abs = 1.0;

    if((input1 == '') && (input2 == '')){
        abs = parseFloat(abs);
    }
    
    else if ((input1 != '') && (input2 == '') ){
        abs = parseFloat(abs - 0.5);
    }


    else if((input1 == '') && (input2 != '') ){
        abs = parseFloat(abs - 0.5);
    }

    else{
        abs = parseFloat(abs - 1.0);
    }


     if ( (res2 == '') && (input1 != '')){
        abs = parseFloat(0.0);
    }


     if((res1 == '') && (input2 != '')) {
        abs = parseFloat(0.0);
    }

    $('#abs2').val(abs.toFixed(2));

}

$('#inam2').keydown(function (){
    updateAbs2();
});

$('#inpm2').keydown( function() {
    updateAbs2();
});

</script>

<!-- Day 3 -->
<script>
var updateAbs3 = function(){
    var input1 = $('#inam3').val();
    var input2 = $('#inpm3').val();

    var res1 = '<?php echo $In1; ?>';
    var res2 = '<?php echo $Resume1; ?>';
    var abs = 1.0;

    if((input1 == '') && (input2 == '')){
        abs = parseFloat(abs);
    }
    
    else if ((input1 != '') && (input2 == '') ){
        abs = parseFloat(abs - 0.5);
    }


    else if((input1 == '') && (input2 != '') ){
        abs = parseFloat(abs - 0.5);
    }

    else{
        abs = parseFloat(abs - 1.0);
    }


     if ( (res2 == '') && (input1 != '')){
        abs = parseFloat(0.0);
    }


     if((res1 == '') && (input2 != '')) {
        abs = parseFloat(0.0);
    }

    $('#abs3').val(abs.toFixed(2));

}

$('#inam3').keydown(function (){
    updateAbs3();
});

$('#inpm3').keydown( function() {
    updateAbs3();
});

</script>

<!-- Day 4 -->
<script>
var updateAbs4 = function(){
    var input1 = $('#inam4').val();
    var input2 = $('#inpm4').val();

    var res1 = '<?php echo $In1; ?>';
    var res2 = '<?php echo $Resume1; ?>';
    var abs = 1.0;

    if((input1 == '') && (input2 == '')){
        abs = parseFloat(abs);
    }
    
    else if ((input1 != '') && (input2 == '') ){
        abs = parseFloat(abs - 0.5);
    }


    else if((input1 == '') && (input2 != '') ){
        abs = parseFloat(abs - 0.5);
    }

    else{
        abs = parseFloat(abs - 1.0);
    }


     if ( (res2 == '') && (input1 != '')){
        abs = parseFloat(0.0);
    }


     if((res1 == '') && (input2 != '')) {
        abs = parseFloat(0.0);
    }

    $('#abs4').val(abs.toFixed(2));

}

$('#inam4').keydown(function (){
    updateAbs4();
});

$('#inpm4').keydown( function() {
    updateAbs4();
});

</script>

<!-- Day 5 -->
<script>
var updateAbs5 = function(){
    var input1 = $('#inam5').val();
    var input2 = $('#inpm5').val();

    var res1 = '<?php echo $In1; ?>';
    var res2 = '<?php echo $Resume1; ?>';
    var abs = 1.0;

    if((input1 == '') && (input2 == '')){
        abs = parseFloat(abs);
    }
    
    else if ((input1 != '') && (input2 == '') ){
        abs = parseFloat(abs - 0.5);
    }


    else if((input1 == '') && (input2 != '') ){
        abs = parseFloat(abs - 0.5);
    }

    else{
        abs = parseFloat(abs - 1.0);
    }


     if ( (res2 == '') && (input1 != '')){
        abs = parseFloat(0.0);
    }


     if((res1 == '') && (input2 != '')) {
        abs = parseFloat(0.0);
    }

    $('#abs5').val(abs.toFixed(2));

}

$('#inam5').keydown(function (){
    updateAbs5();
});

$('#inpm5').keydown( function() {
    updateAbs5();
});

</script>

<!-- Day 6 -->
<script>
var updateAbs6 = function(){
    var input1 = $('#inam6').val();
    var input2 = $('#inpm6').val();

    var res1 = '<?php echo $In1; ?>';
    var res2 = '<?php echo $Resume1; ?>';
    var abs = 1.0;

    if((input1 == '') && (input2 == '')){
        abs = parseFloat(abs);
    }
    
    else if ((input1 != '') && (input2 == '') ){
        abs = parseFloat(abs - 0.5);
    }


    else if((input1 == '') && (input2 != '') ){
        abs = parseFloat(abs - 0.5);
    }

    else{
        abs = parseFloat(abs - 1.0);
    }


     if ( (res2 == '') && (input1 != '')){
        abs = parseFloat(0.0);
    }


     if((res1 == '') && (input2 != '')) {
        abs = parseFloat(0.0);
    }

    $('#abs6').val(abs.toFixed(2));

}

$('#inam6').keydown(function (){
    updateAbs6();
});

$('#inpm6').keydown( function() {
    updateAbs6();
});

</script>

<!-- Day 7 -->
<script>
var updateAbs7 = function(){
    var input1 = $('#inam7').val();
    var input2 = $('#inpm7').val();

    var res1 = '<?php echo $In1; ?>';
    var res2 = '<?php echo $Resume1; ?>';
    var abs = 1.0;

    if((input1 == '') && (input2 == '')){
        abs = parseFloat(abs);
    }
    
    else if ((input1 != '') && (input2 == '') ){
        abs = parseFloat(abs - 0.5);
    }


    else if((input1 == '') && (input2 != '') ){
        abs = parseFloat(abs - 0.5);
    }

    else{
        abs = parseFloat(abs - 1.0);
    }


     if ( (res2 == '') && (input1 != '')){
        abs = parseFloat(0.0);
    }


     if((res1 == '') && (input2 != '')) {
        abs = parseFloat(0.0);
    }

    $('#abs7').val(abs.toFixed(2));

}

$('#inam7').keydown(function (){
    updateAbs7();
});

$('#inpm7').keydown( function() {
    updateAbs7();
});

</script>

<!-- Day 8 -->
<script>
var updateAbs8 = function(){
    var input1 = $('#inam8').val();
    var input2 = $('#inpm8').val();

    var res1 = '<?php echo $In1; ?>';
    var res2 = '<?php echo $Resume1; ?>';
    var abs = 1.0;

    if((input1 == '') && (input2 == '')){
        abs = parseFloat(abs);
    }
    
    else if ((input1 != '') && (input2 == '') ){
        abs = parseFloat(abs - 0.5);
    }


    else if((input1 == '') && (input2 != '') ){
        abs = parseFloat(abs - 0.5);
    }

    else{
        abs = parseFloat(abs - 1.0);
    }


     if ( (res2 == '') && (input1 != '')){
        abs = parseFloat(0.0);
    }


     if((res1 == '') && (input2 != '')) {
        abs = parseFloat(0.0);
    }

    $('#abs8').val(abs.toFixed(2));

}

$('#inam8').keydown(function (){
    updateAbs8();
});

$('#inpm8').keydown( function() {
    updateAbs8();
});

</script>

<!-- Day 9 -->
<script>
var updateAbs9 = function(){
    var input1 = $('#inam9').val();
    var input2 = $('#inpm9').val();

    var res1 = '<?php echo $In1; ?>';
    var res2 = '<?php echo $Resume1; ?>';
    var abs = 1.0;

    if((input1 == '') && (input2 == '')){
        abs = parseFloat(abs);
    }
    
    else if ((input1 != '') && (input2 == '') ){
        abs = parseFloat(abs - 0.5);
    }


    else if((input1 == '') && (input2 != '') ){
        abs = parseFloat(abs - 0.5);
    }

    else{
        abs = parseFloat(abs - 1.0);
    }


     if ( (res2 == '') && (input1 != '')){
        abs = parseFloat(0.0);
    }


     if((res1 == '') && (input2 != '')) {
        abs = parseFloat(0.0);
    }

    $('#abs9').val(abs.toFixed(2));

}

$('#inam9').keydown(function (){
    updateAbs9();
});

$('#inpm9').keydown( function() {
    updateAbs9();
});

</script>

<!-- Day 10 -->
<script>
var updateAbs10 = function(){
    var input1 = $('#inam10').val();
    var input2 = $('#inpm10').val();

    var res1 = '<?php echo $In1; ?>';
    var res2 = '<?php echo $Resume1; ?>';
    var abs = 1.0;

    if((input1 == '') && (input2 == '')){
        abs = parseFloat(abs);
    }
    
    else if ((input1 != '') && (input2 == '') ){
        abs = parseFloat(abs - 0.5);
    }


    else if((input1 == '') && (input2 != '') ){
        abs = parseFloat(abs - 0.5);
    }

    else{
        abs = parseFloat(abs - 1.0);
    }


     if ( (res2 == '') && (input1 != '')){
        abs = parseFloat(0.0);
    }


     if((res1 == '') && (input2 != '')) {
        abs = parseFloat(0.0);
    }

    $('#abs10').val(abs.toFixed(2));

}

$('#inam10').keydown(function (){
    updateAbs10();
});

$('#inpm10').keydown( function() {
    updateAbs10();
});

</script>

<!-- Day 11 -->
<script>
var updateAbs11 = function(){
    var input1 = $('#inam11').val();
    var input2 = $('#inpm11').val();

    var res1 = '<?php echo $In1; ?>';
    var res2 = '<?php echo $Resume1; ?>';
    var abs = 1.0;

    if((input1 == '') && (input2 == '')){
        abs = parseFloat(abs);
    }
    
    else if ((input1 != '') && (input2 == '') ){
        abs = parseFloat(abs - 0.5);
    }


    else if((input1 == '') && (input2 != '') ){
        abs = parseFloat(abs - 0.5);
    }

    else{
        abs = parseFloat(abs - 1.0);
    }


     if ( (res2 == '') && (input1 != '')){
        abs = parseFloat(0.0);
    }


     if((res1 == '') && (input2 != '')) {
        abs = parseFloat(0.0);
    }

    $('#abs11').val(abs.toFixed(2));

}

$('#inam11').keydown(function (){
    updateAbs11();
});

$('#inpm11').keydown( function() {
    updateAbs11();
});

</script>

<!-- Day 12 -->
<script>
var updateAbs12 = function(){
    var input1 = $('#inam12').val();
    var input2 = $('#inpm12').val();

    var res1 = '<?php echo $In1; ?>';
    var res2 = '<?php echo $Resume1; ?>';
    var abs = 1.0;

    if((input1 == '') && (input2 == '')){
        abs = parseFloat(abs);
    }
    
    else if ((input1 != '') && (input2 == '') ){
        abs = parseFloat(abs - 0.5);
    }


    else if((input1 == '') && (input2 != '') ){
        abs = parseFloat(abs - 0.5);
    }

    else{
        abs = parseFloat(abs - 1.0);
    }


     if ( (res2 == '') && (input1 != '')){
        abs = parseFloat(0.0);
    }


     if((res1 == '') && (input2 != '')) {
        abs = parseFloat(0.0);
    }

    $('#abs12').val(abs.toFixed(2));

}

$('#inam12').keydown(function (){
    updateAbs12();
});

$('#inpm12').keydown( function() {
    updateAbs12();
});

</script>

<!-- Day 13 -->
<script>
var updateAbs13 = function(){
    var input1 = $('#inam13').val();
    var input2 = $('#inpm13').val();

    var res1 = '<?php echo $In1; ?>';
    var res2 = '<?php echo $Resume1; ?>';
    var abs = 1.0;

    if((input1 == '') && (input2 == '')){
        abs = parseFloat(abs);
    }
    
    else if ((input1 != '') && (input2 == '') ){
        abs = parseFloat(abs - 0.5);
    }


    else if((input1 == '') && (input2 != '') ){
        abs = parseFloat(abs - 0.5);
    }

    else{
        abs = parseFloat(abs - 1.0);
    }


     if ( (res2 == '') && (input1 != '')){
        abs = parseFloat(0.0);
    }


     if((res1 == '') && (input2 != '')) {
        abs = parseFloat(0.0);
    }

    $('#abs13').val(abs.toFixed(2));

}

$('#inam13').keydown(function (){
    updateAbs13();
});

$('#inpm13').keydown( function() {
    updateAbs13();
});

</script>

<!-- Day 14 -->
<script>
var updateAbs14 = function(){
    var input1 = $('#inam14').val();
    var input2 = $('#inpm14').val();

    var res1 = '<?php echo $In1; ?>';
    var res2 = '<?php echo $Resume1; ?>';
    var abs = 1.0;

    if((input1 == '') && (input2 == '')){
        abs = parseFloat(abs);
    }
    
    else if ((input1 != '') && (input2 == '') ){
        abs = parseFloat(abs - 0.5);
    }


    else if((input1 == '') && (input2 != '') ){
        abs = parseFloat(abs - 0.5);
    }

    else{
        abs = parseFloat(abs - 1.0);
    }


     if ( (res2 == '') && (input1 != '')){
        abs = parseFloat(0.0);
    }


     if((res1 == '') && (input2 != '')) {
        abs = parseFloat(0.0);
    }

    $('#abs14').val(abs.toFixed(2));

}

$('#inam14').keydown(function (){
    updateAbs14();
});

$('#inpm14').keydown( function() {
    updateAbs14();
});

</script>

<!-- Day 15 -->
<script>
var updateAbs15 = function(){
    var input1 = $('#inam15').val();
    var input2 = $('#inpm15').val();

    var res1 = '<?php echo $In1; ?>';
    var res2 = '<?php echo $Resume1; ?>';
    var abs = 1.0;

    if((input1 == '') && (input2 == '')){
        abs = parseFloat(abs);
    }
    
    else if ((input1 != '') && (input2 == '') ){
        abs = parseFloat(abs - 0.5);
    }


    else if((input1 == '') && (input2 != '') ){
        abs = parseFloat(abs - 0.5);
    }

    else{
        abs = parseFloat(abs - 1.0);
    }


     if ( (res2 == '') && (input1 != '')){
        abs = parseFloat(0.0);
    }


     if((res1 == '') && (input2 != '')) {
        abs = parseFloat(0.0);
    }

    $('#abs15').val(abs.toFixed(2));

}

$('#inam15').keydown(function (){
    updateAbs15();
});

$('#inpm15').keydown( function() {
    updateAbs15();
});

</script>

<!-- Day 16 -->
<script>
var updateAbs16 = function(){
    var input1 = $('#inam16').val();
    var input2 = $('#inpm16').val();

    var res1 = '<?php echo $In1; ?>';
    var res2 = '<?php echo $Resume1; ?>';
    var abs = 1.0;

    if((input1 == '') && (input2 == '')){
        abs = parseFloat(abs);
    }
    
    else if ((input1 != '') && (input2 == '') ){
        abs = parseFloat(abs - 0.5);
    }


    else if((input1 == '') && (input2 != '') ){
        abs = parseFloat(abs - 0.5);
    }

    else{
        abs = parseFloat(abs - 1.0);
    }


     if ( (res2 == '') && (input1 != '')){
        abs = parseFloat(0.0);
    }


     if((res1 == '') && (input2 != '')) {
        abs = parseFloat(0.0);
    }

    $('#abs16').val(abs.toFixed(2));

}

$('#inam16').keydown(function (){
    updateAbs16();
});

$('#inpm16').keydown( function() {
    updateAbs16();
});

</script>

<!-- Day 17 -->
<script>
var updateAbs17 = function(){
    var input1 = $('#inam17').val();
    var input2 = $('#inpm17').val();

    var res1 = '<?php echo $In1; ?>';
    var res2 = '<?php echo $Resume1; ?>';
    var abs = 1.0;

    if((input1 == '') && (input2 == '')){
        abs = parseFloat(abs);
    }
    
    else if ((input1 != '') && (input2 == '') ){
        abs = parseFloat(abs - 0.5);
    }


    else if((input1 == '') && (input2 != '') ){
        abs = parseFloat(abs - 0.5);
    }

    else{
        abs = parseFloat(abs - 1.0);
    }


     if ( (res2 == '') && (input1 != '')){
        abs = parseFloat(0.0);
    }


     if((res1 == '') && (input2 != '')) {
        abs = parseFloat(0.0);
    }

    $('#abs17').val(abs.toFixed(2));

}

$('#inam17').keydown(function (){
    updateAbs17();
});

$('#inpm17').keydown( function() {
    updateAbs17();
});

</script>

<!-- Day 18 -->
<script>
var updateAbs18 = function(){
    var input1 = $('#inam18').val();
    var input2 = $('#inpm18').val();

    var res1 = '<?php echo $In1; ?>';
    var res2 = '<?php echo $Resume1; ?>';
    var abs = 1.0;

    if((input1 == '') && (input2 == '')){
        abs = parseFloat(abs);
    }
    
    else if ((input1 != '') && (input2 == '') ){
        abs = parseFloat(abs - 0.5);
    }


    else if((input1 == '') && (input2 != '') ){
        abs = parseFloat(abs - 0.5);
    }

    else{
        abs = parseFloat(abs - 1.0);
    }


     if ( (res2 == '') && (input1 != '')){
        abs = parseFloat(0.0);
    }


     if((res1 == '') && (input2 != '')) {
        abs = parseFloat(0.0);
    }

    $('#abs18').val(abs.toFixed(2));

}

$('#inam18').keydown(function (){
    updateAbs18();
});

$('#inpm18').keydown( function() {
    updateAbs18();
});

</script>

<!-- Day 19 -->
<script>
var updateAbs19 = function(){
    var input1 = $('#inam19').val();
    var input2 = $('#inpm19').val();

    var res1 = '<?php echo $In1; ?>';
    var res2 = '<?php echo $Resume1; ?>';
    var abs = 1.0;

    if((input1 == '') && (input2 == '')){
        abs = parseFloat(abs);
    }
    
    else if ((input1 != '') && (input2 == '') ){
        abs = parseFloat(abs - 0.5);
    }


    else if((input1 == '') && (input2 != '') ){
        abs = parseFloat(abs - 0.5);
    }

    else{
        abs = parseFloat(abs - 1.0);
    }


     if ( (res2 == '') && (input1 != '')){
        abs = parseFloat(0.0);
    }


     if((res1 == '') && (input2 != '')) {
        abs = parseFloat(0.0);
    }

    $('#abs19').val(abs.toFixed(2));

}

$('#inam19').keydown(function (){
    updateAbs19();
});

$('#inpm19').keydown( function() {
    updateAbs19();
});

</script>

<!-- Day 20 -->
<script>
var updateAbs20 = function(){
    var input1 = $('#inam20').val();
    var input2 = $('#inpm20').val();

    var res1 = '<?php echo $In1; ?>';
    var res2 = '<?php echo $Resume1; ?>';
    var abs = 1.0;

    if((input1 == '') && (input2 == '')){
        abs = parseFloat(abs);
    }
    
    else if ((input1 != '') && (input2 == '') ){
        abs = parseFloat(abs - 0.5);
    }


    else if((input1 == '') && (input2 != '') ){
        abs = parseFloat(abs - 0.5);
    }

    else{
        abs = parseFloat(abs - 1.0);
    }


     if ( (res2 == '') && (input1 != '')){
        abs = parseFloat(0.0);
    }


     if((res1 == '') && (input2 != '')) {
        abs = parseFloat(0.0);
    }

    $('#abs20').val(abs.toFixed(2));

}

$('#inam20').keydown(function (){
    updateAbs20();
});

$('#inpm20').keydown( function() {
    updateAbs20();
});

</script>

<!-- Day 21 -->

<script>
var updateAbs21 = function(){
    var input1 = $('#inam21').val();
    var input2 = $('#inpm21').val();

    var res1 = '<?php echo $In1; ?>';
    var res2 = '<?php echo $Resume1; ?>';
    var abs = 1.0;

    if((input1 == '') && (input2 == '')){
        abs = parseFloat(abs);
    }
    
    else if ((input1 != '') && (input2 == '') ){
        abs = parseFloat(abs - 0.5);
    }


    else if((input1 == '') && (input2 != '') ){
        abs = parseFloat(abs - 0.5);
    }

    else{
        abs = parseFloat(abs - 1.0);
    }


     if ( (res2 == '') && (input1 != '')){
        abs = parseFloat(0.0);
    }


     if((res1 == '') && (input2 != '')) {
        abs = parseFloat(0.0);
    }

    $('#abs21').val(abs.toFixed(2));

}

$('#inam21').keydown(function (){
    updateAbs21();
});

$('#inpm21').keydown( function() {
    updateAbs21();
});

</script>

<!-- Day 22 -->
<script>
var updateAbs22 = function(){
    var input1 = $('#inam22').val();
    var input2 = $('#inpm22').val();

    var res1 = '<?php echo $In1; ?>';
    var res2 = '<?php echo $Resume1; ?>';
    var abs = 1.0;

    if((input1 == '') && (input2 == '')){
        abs = parseFloat(abs);
    }
    
    else if ((input1 != '') && (input2 == '') ){
        abs = parseFloat(abs - 0.5);
    }


    else if((input1 == '') && (input2 != '') ){
        abs = parseFloat(abs - 0.5);
    }

    else{
        abs = parseFloat(abs - 1.0);
    }


     if ( (res2 == '') && (input1 != '')){
        abs = parseFloat(0.0);
    }


     if((res1 == '') && (input2 != '')) {
        abs = parseFloat(0.0);
    }

    $('#abs22').val(abs.toFixed(2));

}

$('#inam22').keydown(function (){
    updateAbs22();
});

$('#inpm22').keydown( function() {
    updateAbs22();
});

</script>

<!-- Day 23 -->
<script>
var updateAbs23 = function(){
    var input1 = $('#inam23').val();
    var input2 = $('#inpm23').val();

    var res1 = '<?php echo $In1; ?>';
    var res2 = '<?php echo $Resume1; ?>';
    var abs = 1.0;

    if((input1 == '') && (input2 == '')){
        abs = parseFloat(abs);
    }
    
    else if ((input1 != '') && (input2 == '') ){
        abs = parseFloat(abs - 0.5);
    }


    else if((input1 == '') && (input2 != '') ){
        abs = parseFloat(abs - 0.5);
    }

    else{
        abs = parseFloat(abs - 1.0);
    }


     if ( (res2 == '') && (input1 != '')){
        abs = parseFloat(0.0);
    }


     if((res1 == '') && (input2 != '')) {
        abs = parseFloat(0.0);
    }

    $('#abs23').val(abs.toFixed(2));

}

$('#inam23').keydown(function (){
    updateAbs23();
});

$('#inpm23').keydown( function() {
    updateAbs23();
});

</script>

<!-- Day 24 -->
<script>
var updateAbs24 = function(){
    var input1 = $('#inam24').val();
    var input2 = $('#inpm24').val();

    var res1 = '<?php echo $In1; ?>';
    var res2 = '<?php echo $Resume1; ?>';
    var abs = 1.0;

    if((input1 == '') && (input2 == '')){
        abs = parseFloat(abs);
    }
    
    else if ((input1 != '') && (input2 == '') ){
        abs = parseFloat(abs - 0.5);
    }


    else if((input1 == '') && (input2 != '') ){
        abs = parseFloat(abs - 0.5);
    }

    else{
        abs = parseFloat(abs - 1.0);
    }


     if ( (res2 == '') && (input1 != '')){
        abs = parseFloat(0.0);
    }


     if((res1 == '') && (input2 != '')) {
        abs = parseFloat(0.0);
    }

    $('#abs24').val(abs.toFixed(2));

}

$('#inam24').keydown(function (){
    updateAbs24();
});

$('#inpm24').keydown( function() {
    updateAbs24();
});

</script>

<!-- Day 25 -->
<script>
var updateAbs25 = function(){
    var input1 = $('#inam25').val();
    var input2 = $('#inpm25').val();

    var res1 = '<?php echo $In1; ?>';
    var res2 = '<?php echo $Resume1; ?>';
    var abs = 1.0;

    if((input1 == '') && (input2 == '')){
        abs = parseFloat(abs);
    }
    
    else if ((input1 != '') && (input2 == '') ){
        abs = parseFloat(abs - 0.5);
    }


    else if((input1 == '') && (input2 != '') ){
        abs = parseFloat(abs - 0.5);
    }

    else{
        abs = parseFloat(abs - 1.0);
    }


     if ( (res2 == '') && (input1 != '')){
        abs = parseFloat(0.0);
    }


     if((res1 == '') && (input2 != '')) {
        abs = parseFloat(0.0);
    }

    $('#abs25').val(abs.toFixed(2));

}

$('#inam25').keydown(function (){
    updateAbs25();
});

$('#inpm25').keydown( function() {
    updateAbs25();
});

</script>

<!-- Day 26 -->
<script>
var updateAbs26 = function(){
    var input1 = $('#inam26').val();
    var input2 = $('#inpm26').val();

    var res1 = '<?php echo $In1; ?>';
    var res2 = '<?php echo $Resume1; ?>';
    var abs = 1.0;

    if((input1 == '') && (input2 == '')){
        abs = parseFloat(abs);
    }
    
    else if ((input1 != '') && (input2 == '') ){
        abs = parseFloat(abs - 0.5);
    }


    else if((input1 == '') && (input2 != '') ){
        abs = parseFloat(abs - 0.5);
    }

    else{
        abs = parseFloat(abs - 1.0);
    }


     if ( (res2 == '') && (input1 != '')){
        abs = parseFloat(0.0);
    }


     if((res1 == '') && (input2 != '')) {
        abs = parseFloat(0.0);
    }

    $('#abs26').val(abs.toFixed(2));

}

$('#inam26').keydown(function (){
    updateAbs26();
});

$('#inpm26').keydown( function() {
    updateAbs26();
});

</script>

<!-- Day 27 -->
<script>
var updateAbs27 = function(){
    var input1 = $('#inam27').val();
    var input2 = $('#inpm27').val();

    var res1 = '<?php echo $In1; ?>';
    var res2 = '<?php echo $Resume1; ?>';
    var abs = 1.0;

    if((input1 == '') && (input2 == '')){
        abs = parseFloat(abs);
    }
    
    else if ((input1 != '') && (input2 == '') ){
        abs = parseFloat(abs - 0.5);
    }


    else if((input1 == '') && (input2 != '') ){
        abs = parseFloat(abs - 0.5);
    }

    else{
        abs = parseFloat(abs - 1.0);
    }


     if ( (res2 == '') && (input1 != '')){
        abs = parseFloat(0.0);
    }


     if((res1 == '') && (input2 != '')) {
        abs = parseFloat(0.0);
    }

    $('#abs27').val(abs.toFixed(2));

}

$('#inam27').keydown(function (){
    updateAbs27();
});

$('#inpm27').keydown( function() {
    updateAbs27();
});

</script>

<!-- Day 28 -->
<script>
var updateAbs28 = function(){
    var input1 = $('#inam28').val();
    var input2 = $('#inpm28').val();

    var res1 = '<?php echo $In1; ?>';
    var res2 = '<?php echo $Resume1; ?>';
    var abs = 1.0;

    if((input1 == '') && (input2 == '')){
        abs = parseFloat(abs);
    }
    
    else if ((input1 != '') && (input2 == '') ){
        abs = parseFloat(abs - 0.5);
    }


    else if((input1 == '') && (input2 != '') ){
        abs = parseFloat(abs - 0.5);
    }

    else{
        abs = parseFloat(abs - 1.0);
    }


     if ( (res2 == '') && (input1 != '')){
        abs = parseFloat(0.0);
    }


     if((res1 == '') && (input2 != '')) {
        abs = parseFloat(0.0);
    }

    $('#abs28').val(abs.toFixed(2));

}

$('#inam28').keydown(function (){
    updateAbs28();
});

$('#inpm28').keydown( function() {
    updateAbs28();
});

</script>

<!-- Day 29 -->

<script>
var updateAbs29 = function(){
    var input1 = $('#inam29').val();
    var input2 = $('#inpm29').val();

    var res1 = '<?php echo $In1; ?>';
    var res2 = '<?php echo $Resume1; ?>';
    var abs = 1.0;

    if((input1 == '') && (input2 == '')){
        abs = parseFloat(abs);
    }
    
    else if ((input1 != '') && (input2 == '') ){
        abs = parseFloat(abs - 0.5);
    }


    else if((input1 == '') && (input2 != '') ){
        abs = parseFloat(abs - 0.5);
    }

    else{
        abs = parseFloat(abs - 1.0);
    }


     if ( (res2 == '') && (input1 != '')){
        abs = parseFloat(0.0);
    }


     if((res1 == '') && (input2 != '')) {
        abs = parseFloat(0.0);
    }

    $('#abs29').val(abs.toFixed(2));

}

$('#inam29').keydown(function (){
    updateAbs29();
});

$('#inpm29').keydown( function() {
    updateAbs29();
});

</script>

<!-- Day 30 -->
<script>
var updateAbs30 = function(){
    var input1 = $('#inam30').val();
    var input2 = $('#inpm30').val();

    var res1 = '<?php echo $In1; ?>';
    var res2 = '<?php echo $Resume1; ?>';
    var abs = 1.0;

    if((input1 == '') && (input2 == '')){
        abs = parseFloat(abs);
    }
    
    else if ((input1 != '') && (input2 == '') ){
        abs = parseFloat(abs - 0.5);
    }


    else if((input1 == '') && (input2 != '') ){
        abs = parseFloat(abs - 0.5);
    }

    else{
        abs = parseFloat(abs - 1.0);
    }


     if ( (res2 == '') && (input1 != '')){
        abs = parseFloat(0.0);
    }


     if((res1 == '') && (input2 != '')) {
        abs = parseFloat(0.0);
    }

    $('#abs30').val(abs.toFixed(2));

}

$('#inam30').keydown(function (){
    updateAbs30();
});

$('#inpm30').keydown( function() {
    updateAbs30();
});

</script>

<!-- Day 31 -->

<script>
var updateAbs31 = function(){
    var input1 = $('#inam31').val();
    var input2 = $('#inpm31').val();

    var res1 = '<?php echo $In1; ?>';
    var res2 = '<?php echo $Resume1; ?>';
    var abs = 1.0;

    if((input1 == '') && (input2 == '')){
        abs = parseFloat(abs);
    }
    
    else if ((input1 != '') && (input2 == '') ){
        abs = parseFloat(abs - 0.5);
    }


    else if((input1 == '') && (input2 != '') ){
        abs = parseFloat(abs - 0.5);
    }

    else{
        abs = parseFloat(abs - 1.0);
    }


     if ( (res2 == '') && (input1 != '')){
        abs = parseFloat(0.0);
    }


     if((res1 == '') && (input2 != '')) {
        abs = parseFloat(0.0);
    }

    $('#abs31').val(abs.toFixed(2));

}

$('#inam31').keydown(function (){
    updateAbs31();
});

$('#inpm31').keydown( function() {
    updateAbs31();
});

</script>




