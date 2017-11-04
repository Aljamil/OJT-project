<!-- Day 1 -->
<script>
var updateAbsS1 = function(){
    var input1 = $('#inam1').val();
    var input2 = $('#inpm1').val();

    var res1 = $('#in1').val();
    var res2 = $('#resume1').val();
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

 $('#shift1').keydown( function () {
        updateAbsS1();
});

$('#shift1').change( function () {
    updateAbsS1();
});

</script>

<!-- Day 2 -->
<script>
var updateAbsS2 = function(){
    var input1 = $('#inam2').val();
    var input2 = $('#inpm2').val();

    var res1 = $('#in2').val();
    var res2 = $('#resume2').val();
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

 $('#shift2').keydown( function () {
        updateAbsS2();
});

$('#shift2').change( function () {
    updateAbsS2();
});

</script>

<!-- Day 3 -->
<script>
var updateAbsS3 = function(){
    var input1 = $('#inam3').val();
    var input2 = $('#inpm3').val();

    var res1 = $('#in3').val();
    var res2 = $('#resume3').val();
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

 $('#shift3').keydown( function () {
        updateAbsS3();
});

$('#shift3').change( function () {
    updateAbsS3();
});

</script>

<!-- Day 4 -->
<script>
var updateAbsS4 = function(){
    var input1 = $('#inam4').val();
    var input2 = $('#inpm4').val();

    var res1 = $('#in4').val();
    var res2 = $('#resume4').val();
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

 $('#shift4').keydown( function () {
        updateAbsS4();
});

$('#shift4').change( function () {
    updateAbsS4();
});

</script>

<!-- Day 5 -->
<script>
var updateAbsS5 = function(){
    var input1 = $('#inam5').val();
    var input2 = $('#inpm5').val();

    var res1 = $('#in5').val();
    var res2 = $('#resume5').val();
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

 $('#shift5').keydown( function () {
        updateAbsS5();
});

$('#shift5').change( function () {
    updateAbsS5();
});

</script>

<!-- Day 6 -->
<script>
var updateAbsS6 = function(){
    var input1 = $('#inam6').val();
    var input2 = $('#inpm6').val();

    var res1 = $('#in6').val();
    var res2 = $('#resume6').val();
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

 $('#shift6').keydown( function () {
        updateAbsS6();
});

$('#shift6').change( function () {
    updateAbsS6();
});

</script>

<!-- Day 7 -->
<script>
var updateAbsS7 = function(){
    var input1 = $('#inam7').val();
    var input2 = $('#inpm7').val();

    var res1 = $('#in7').val();
    var res2 = $('#resume7').val();
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

 $('#shift7').keydown( function () {
        updateAbsS7();
});

$('#shift7').change( function () {
    updateAbsS7();
});

</script>

<!-- Day 8 -->
<script>
var updateAbsS8 = function(){
    var input1 = $('#inam8').val();
    var input2 = $('#inpm8').val();

    var res1 = $('#in8').val();
    var res2 = $('#resume8').val();
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

 $('#shift8').keydown( function () {
        updateAbsS8();
});

$('#shift8').change( function () {
    updateAbsS8();
});

</script>

<!-- Day 9 -->
<script>
var updateAbsS9 = function(){
    var input1 = $('#inam9').val();
    var input2 = $('#inpm9').val();

    var res1 = $('#in9').val();
    var res2 = $('#resume9').val();
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

 $('#shift9').keydown( function () {
        updateAbsS9();
});

$('#shift9').change( function () {
    updateAbsS9();
});

</script>

<!-- Day 10 -->
<script>
var updateAbsS10 = function(){
    var input1 = $('#inam10').val();
    var input2 = $('#inpm10').val();

    var res1 = $('#in10').val();
    var res2 = $('#resume10').val();
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

 $('#shift10').keydown( function () {
        updateAbsS10();
});

$('#shift10').change( function () {
    updateAbsS10();
});

</script>

<!-- Day 11 -->
<script>
var updateAbsS11 = function(){
    var input1 = $('#inam11').val();
    var input2 = $('#inpm11').val();

    var res1 = $('#in11').val();
    var res2 = $('#resume11').val();
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

 $('#shift11').keydown( function () {
        updateAbsS11();
});

$('#shift11').change( function () {
    updateAbsS11();
});

</script>

<!-- Day 12 -->
<script>
var updateAbsS12 = function(){
    var input1 = $('#inam12').val();
    var input2 = $('#inpm12').val();

    var res1 = $('#in12').val();
    var res2 = $('#resume12').val();
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

 $('#shift12').keydown( function () {
        updateAbsS12();
});

$('#shift12').change( function () {
    updateAbsS12();
});

</script>

<!-- Day 13 -->
<script>
var updateAbsS13 = function(){
    var input1 = $('#inam13').val();
    var input2 = $('#inpm13').val();

    var res1 = $('#in13').val();
    var res2 = $('#resume13').val();
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

 $('#shift13').keydown( function () {
        updateAbsS13();
});

$('#shift13').change( function () {
    updateAbsS13();
});

</script>

<!-- Day 14 -->
<script>
var updateAbsS14 = function(){
    var input1 = $('#inam14').val();
    var input2 = $('#inpm14').val();

    var res1 = $('#in14').val();
    var res2 = $('#resume14').val();
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

 $('#shift14').keydown( function () {
        updateAbsS14();
});

$('#shift14').change( function () {
    updateAbsS14();
});

</script>

<!-- Day 15 -->
<script>
var updateAbsS15 = function(){
    var input1 = $('#inam15').val();
    var input2 = $('#inpm15').val();

    var res1 = $('#in15').val();
    var res2 = $('#resume15').val();
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

 $('#shift15').keydown( function () {
        updateAbsS15();
});

$('#shift15').change( function () {
    updateAbsS15();
});

</script>

<!-- Day 16 -->
<script>
var updateAbsS16 = function(){
    var input1 = $('#inam16').val();
    var input2 = $('#inpm16').val();

    var res1 = $('#in16').val();
    var res2 = $('#resume16').val();
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

 $('#shift16').keydown( function () {
        updateAbsS16();
});

$('#shift16').change( function () {
    updateAbsS16();
});

</script>

<!-- Day 17 -->
<script>
var updateAbsS17 = function(){
    var input1 = $('#inam17').val();
    var input2 = $('#inpm17').val();

    var res1 = $('#in17').val();
    var res2 = $('#resume17').val();
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

 $('#shift17').keydown( function () {
        updateAbsS17();
});

$('#shift17').change( function () {
    updateAbsS17();
});

</script>

<!-- Day 18 -->
<script>
var updateAbsS18 = function(){
    var input1 = $('#inam18').val();
    var input2 = $('#inpm18').val();

    var res1 = $('#in18').val();
    var res2 = $('#resume18').val();
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

 $('#shift18').keydown( function () {
        updateAbsS18();
});

$('#shift18').change( function () {
    updateAbsS18();
});

</script>

<!-- Day 19 -->
<script>
var updateAbsS19 = function(){
    var input1 = $('#inam19').val();
    var input2 = $('#inpm19').val();

    var res1 = $('#in19').val();
    var res2 = $('#resume19').val();
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

 $('#shift19').keydown( function () {
        updateAbsS19();
});

$('#shift19').change( function () {
    updateAbsS19();
});

</script>

<!-- Day 20 -->
<script>
var updateAbsS20 = function(){
    var input1 = $('#inam20').val();
    var input2 = $('#inpm20').val();

    var res1 = $('#in20').val();
    var res2 = $('#resume20').val();
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

 $('#shift20').keydown( function () {
        updateAbsS20();
});

$('#shift20').change( function () {
    updateAbsS20();
});

</script>

<!-- Day 21 -->
<script>
var updateAbsS21 = function(){
    var input1 = $('#inam21').val();
    var input2 = $('#inpm21').val();

    var res1 = $('#in21').val();
    var res2 = $('#resume21').val();
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

 $('#shift21').keydown( function () {
        updateAbsS21();
});

$('#shift21').change( function () {
    updateAbsS21();
});

</script>

<!-- Day 22 -->
<script>
var updateAbsS22 = function(){
    var input1 = $('#inam22').val();
    var input2 = $('#inpm22').val();

    var res1 = $('#in22').val();
    var res2 = $('#resume22').val();
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

 $('#shift22').keydown( function () {
        updateAbsS22();
});

$('#shift22').change( function () {
    updateAbsS22();
});

</script>

<!-- Day 23 -->

<script>
var updateAbsS23 = function(){
    var input1 = $('#inam23').val();
    var input2 = $('#inpm23').val();

    var res1 = $('#in23').val();
    var res2 = $('#resume23').val();
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

 $('#shift23').keydown( function () {
        updateAbsS23();
});

$('#shift23').change( function () {
    updateAbsS23();
});

</script>

<!-- Day 24 -->
<script>
var updateAbsS24 = function(){
    var input1 = $('#inam24').val();
    var input2 = $('#inpm24').val();

    var res1 = $('#in24').val();
    var res2 = $('#resume24').val();
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

 $('#shift24').keydown( function () {
        updateAbsS24();
});

$('#shift24').change( function () {
    updateAbsS24();
});

</script>

<!-- Day 25 -->
<script>
var updateAbsS25 = function(){
    var input1 = $('#inam25').val();
    var input2 = $('#inpm25').val();

    var res1 = $('#in25').val();
    var res2 = $('#resume25').val();
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

 $('#shift25').keydown( function () {
        updateAbsS25();
});

$('#shift25').change( function () {
    updateAbsS25();
});

</script>

<!-- Day 26 -->
<script>
var updateAbsS26 = function(){
    var input1 = $('#inam26').val();
    var input2 = $('#inpm26').val();

    var res1 = $('#in26').val();
    var res2 = $('#resume26').val();
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

 $('#shift26').keydown( function () {
        updateAbsS26();
});

$('#shift26').change( function () {
    updateAbsS26();
});

</script>

<!-- Day 27 -->
<script>
var updateAbsS27 = function(){
    var input1 = $('#inam27').val();
    var input2 = $('#inpm27').val();

    var res1 = $('#in27').val();
    var res2 = $('#resume27').val();
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

 $('#shift27').keydown( function () {
        updateAbsS27();
});

$('#shift27').change( function () {
    updateAbsS27();
});

</script>

<!-- Day 28 -->
<script>
var updateAbsS28 = function(){
    var input1 = $('#inam28').val();
    var input2 = $('#inpm28').val();

    var res1 = $('#in28').val();
    var res2 = $('#resume28').val();
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

 $('#shift28').keydown( function () {
        updateAbsS28();
});

$('#shift28').change( function () {
    updateAbsS28();
});

</script>

<!-- Day 29 -->
<script>
var updateAbsS29 = function(){
    var input1 = $('#inam29').val();
    var input2 = $('#inpm29').val();

    var res1 = $('#in29').val();
    var res2 = $('#resume29').val();
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

 $('#shift29').keydown( function () {
        updateAbsS29();
});

$('#shift29').change( function () {
    updateAbsS29();
});

</script>

<!-- Day 30 -->
<script>
var updateAbsS30 = function(){
    var input1 = $('#inam30').val();
    var input2 = $('#inpm30').val();

    var res1 = $('#in30').val();
    var res2 = $('#resume30').val();
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

 $('#shift30').keydown( function () {
        updateAbsS30();
});

$('#shift30').change( function () {
    updateAbsS30();
});

</script>

<!-- Day 31 -->
<script>
var updateAbsS31 = function(){
    var input1 = $('#inam31').val();
    var input2 = $('#inpm31').val();

    var res1 = $('#in31').val();
    var res2 = $('#resume31').val();
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

 $('#shift31').keydown( function () {
        updateAbsS31();
});

$('#shift31').change( function () {
    updateAbsS31();
});

</script>
