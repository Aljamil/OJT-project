

<!-- Day 1 -->
<script type="text/javascript">
    var varjs1 = '<?php echo $Break1; ?>';
    var varjs2 = '<?php echo $Out1; ?>';

    var ud1 = function() {
         var out1 = $('#outam1').val();
         var out2 = $('#outpm1').val();

         if(varjs1 >= out1){
         var time1 = $('#outam1').val().split(':'), time2 = varjs1.split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
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
        }
         
        if(varjs2 >= out2){
         var time3 = $('#outpm1').val().split(':'), time4 = varjs2.split(':');
         var hours3 = parseInt(time3[0], 10), 
             hours4 = parseInt(time4[0], 10),
             mins3 = parseInt(time3[1], 10),
             mins4 = parseInt(time4[1], 10);
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
        
        
        if((out1 != '') && (out2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#ut1').val(sum.toFixed(2));
         }

         else if((out1 != '') || (out2 == '') ) {
            $('#ut1').val(parseFloat(hoursA + 0.0));

         }

         else if((out1 == '') || (out2 != '') ){
            $('#ut1').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#ut1').val(0.0);

         }
       

     }

     $("#outam1").keydown(function () {
         ud1();
     });

     $("#outpm1").keydown(function () {
         ud1();
     });

</script>


<!-- Day 2 -->
<script type="text/javascript">
    var varjs1 = '<?php echo $Break1; ?>';
    var varjs2 = '<?php echo $Out1; ?>';

    var ud2 = function() {
         var out1 = $('#outam2').val();
         var out2 = $('#outpm2').val();

         if(varjs1 >= out1){
         var time1 = $('#outam2').val().split(':'), time2 = varjs1.split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
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
         }

         if(varjs2 >= out2){
         var time3 = $('#outpm2').val().split(':'), time4 = varjs2.split(':');
         var hours3 = parseInt(time3[0], 10), 
             hours4 = parseInt(time4[0], 10),
             mins3 = parseInt(time3[1], 10),
             mins4 = parseInt(time4[1], 10);
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
        
        if((out1 != '') && (out2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#ut2').val(sum.toFixed(2));
         }

         else if((out1 != '') || (out2 == '') ) {
            $('#ut2').val(parseFloat(hoursA + 0.0));

         }

         else if((out1 == '') || (out2 != '') ){
            $('#ut2').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#ut2').val(0.0);

         }
       

     }

     $("#outam2").keydown(function () {
         ud2();
     });

     $("#outpm2").keydown(function () {
         ud2();
     });

</script>


<!-- Day 3 -->
<script type="text/javascript">
    var varjs1 = '<?php echo $Break1; ?>';
    var varjs2 = '<?php echo $Out1; ?>';

    var ud3 = function() {
         var out1 = $('#outam3').val();
         var out2 = $('#outpm3').val();

         if(varjs1 >= out1){
         var time1 = $('#outam3').val().split(':'), time2 = varjs1.split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
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
         }

         if(varjs2 >= out2){
         var time3 = $('#outpm3').val().split(':'), time4 = varjs2.split(':');
         var hours3 = parseInt(time3[0], 10), 
             hours4 = parseInt(time4[0], 10),
             mins3 = parseInt(time3[1], 10),
             mins4 = parseInt(time4[1], 10);
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
        
        if((out1 != '') && (out2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#ut3').val(sum.toFixed(2));
         }

         else if((out1 != '') || (out2 == '') ) {
            $('#ut3').val(parseFloat(hoursA + 0.0));

         }

         else if((out1 == '') || (out2 != '') ){
            $('#ut3').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#ut3').val(0.0);

         }
       

     }

     $("#outam3").keydown(function () {
         ud3();
     });

     $("#outpm3").keydown(function () {
         ud3();
     });

</script>

<!-- Day 4 -->
<script type="text/javascript">
    var varjs1 = '<?php echo $Break1; ?>';
    var varjs2 = '<?php echo $Out1; ?>';

    var ud4 = function() {
         var out1 = $('#outam4').val();
         var out2 = $('#outpm4').val();

         if(varjs1 >= out1){
         var time1 = $('#outam4').val().split(':'), time2 = varjs1.split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
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
         }

         if(varjs2 >= out2){
         var time3 = $('#outpm4').val().split(':'), time4 = varjs2.split(':');
         var hours3 = parseInt(time3[0], 10), 
             hours4 = parseInt(time4[0], 10),
             mins3 = parseInt(time3[1], 10),
             mins4 = parseInt(time4[1], 10);
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
        
        if((out1 != '') && (out2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#ut4').val(sum.toFixed(2));
         }

         else if((out1 != '') || (out2 == '') ) {
            $('#ut4').val(parseFloat(hoursA + 0.0));

         }

         else if((out1 == '') || (out2 != '') ){
            $('#ut4').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#ut4').val(0.0);

         }
       

     }

     $("#outam4").keydown(function () {
         ud4();
     });

     $("#outpm4").keydown(function () {
         ud4();
     });

</script>

<!-- Day 5 -->
<script type="text/javascript">
    var varjs1 = '<?php echo $Break1; ?>';
    var varjs2 = '<?php echo $Out1; ?>';

    var ud5 = function() {
         var out1 = $('#outam5').val();
         var out2 = $('#outpm5').val();

         if(varjs1 >= out1){
         var time1 = $('#outam5').val().split(':'), time2 = varjs1.split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
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
         }

         if(varjs2 >= out2){
         var time3 = $('#outpm5').val().split(':'), time4 = varjs2.split(':');
         var hours3 = parseInt(time3[0], 10), 
             hours4 = parseInt(time4[0], 10),
             mins3 = parseInt(time3[1], 10),
             mins4 = parseInt(time4[1], 10);
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
        
        if((out1 != '') && (out2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#ut5').val(sum.toFixed(2));
         }

         else if((out1 != '') || (out2 == '') ) {
            $('#ut5').val(parseFloat(hoursA + 0.0));

         }

         else if((out1 == '') || (out2 != '') ){
            $('#ut5').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#ut5').val(0.0);

         }
       

     }

     $("#outam5").keydown(function () {
         ud5();
     });

     $("#outpm5").keydown(function () {
         ud5();
     });

</script>

<!-- Day 6 -->
<script type="text/javascript">
    var varjs1 = '<?php echo $Break1; ?>';
    var varjs2 = '<?php echo $Out1; ?>';

    var ud6 = function() {
         var out1 = $('#outam6').val();
         var out2 = $('#outpm6').val();

         if(varjs1 >= out1){
         var time1 = $('#outam6').val().split(':'), time2 = varjs1.split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
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
         }

         if(varjs2 >= out2){
         var time3 = $('#outpm6').val().split(':'), time4 = varjs2.split(':');
         var hours3 = parseInt(time3[0], 10), 
             hours4 = parseInt(time4[0], 10),
             mins3 = parseInt(time3[1], 10),
             mins4 = parseInt(time4[1], 10);
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
        
        if((out1 != '') && (out2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#ut6').val(sum.toFixed(2));
         }

         else if((out1 != '') || (out2 == '') ) {
            $('#ut6').val(parseFloat(hoursA + 0.0));

         }

         else if((out1 == '') || (out2 != '') ){
            $('#ut6').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#ut6').val(0.0);

         }
       

     }

     $("#outam6").keydown(function () {
         ud6();
     });

     $("#outpm6").keydown(function () {
         ud6();
     });

</script>

<!-- Day 7 -->
<script type="text/javascript">
    var varjs1 = '<?php echo $Break1; ?>';
    var varjs2 = '<?php echo $Out1; ?>';

    var ud7 = function() {
         var out1 = $('#outam7').val();
         var out2 = $('#outpm7').val();

         if(varjs1 >= out1){
         var time1 = $('#outam7').val().split(':'), time2 = varjs1.split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
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
         }

         if(varjs2 >= out2){
         var time3 = $('#outpm7').val().split(':'), time4 = varjs2.split(':');
         var hours3 = parseInt(time3[0], 10), 
             hours4 = parseInt(time4[0], 10),
             mins3 = parseInt(time3[1], 10),
             mins4 = parseInt(time4[1], 10);
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
        
        if((out1 != '') && (out2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#ut7').val(sum.toFixed(2));
         }

         else if((out1 != '') || (out2 == '') ) {
            $('#ut7').val(parseFloat(hoursA + 0.0));

         }

         else if((out1 == '') || (out2 != '') ){
            $('#ut7').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#ut7').val(0.0);

         }
       

     }

     $("#outam7").keydown(function () {
         ud7();
     });

     $("#outpm7").keydown(function () {
         ud7();
     });

</script>

<!-- Day 8 -->
<script type="text/javascript">
    var varjs1 = '<?php echo $Break1; ?>';
    var varjs2 = '<?php echo $Out1; ?>';

    var ud8 = function() {
         var out1 = $('#outam8').val();
         var out2 = $('#outpm8').val();

         if(varjs1 >= out1){
         var time1 = $('#outam8').val().split(':'), time2 = varjs1.split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
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
         }

         if(varjs2 >= out2){
         var time3 = $('#outpm8').val().split(':'), time4 = varjs2.split(':');
         var hours3 = parseInt(time3[0], 10), 
             hours4 = parseInt(time4[0], 10),
             mins3 = parseInt(time3[1], 10),
             mins4 = parseInt(time4[1], 10);
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
        
        if((out1 != '') && (out2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#ut8').val(sum.toFixed(2));
         }

         else if((out1 != '') || (out2 == '') ) {
            $('#ut8').val(parseFloat(hoursA + 0.0));

         }

         else if((out1 == '') || (out2 != '') ){
            $('#ut8').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#ut8').val(0.0);

         }
       

     }

     $("#outam8").keydown(function () {
         ud8();
     });

     $("#outpm8").keydown(function () {
         ud8();
     });

</script>

<!-- Day 9 -->
<script type="text/javascript">
    var varjs1 = '<?php echo $Break1; ?>';
    var varjs2 = '<?php echo $Out1; ?>';

    var ud9 = function() {
         var out1 = $('#outam9').val();
         var out2 = $('#outpm9').val();

         if(varjs1 >= out1){
         var time1 = $('#outam9').val().split(':'), time2 = varjs1.split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
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
         }

         if(varjs2 >= out2){
         var time3 = $('#outpm9').val().split(':'), time4 = varjs2.split(':');
         var hours3 = parseInt(time3[0], 10), 
             hours4 = parseInt(time4[0], 10),
             mins3 = parseInt(time3[1], 10),
             mins4 = parseInt(time4[1], 10);
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
        
        if((out1 != '') && (out2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#ut9').val(sum.toFixed(2));
         }

         else if((out1 != '') || (out2 == '') ) {
            $('#ut9').val(parseFloat(hoursA + 0.0));

         }

         else if((out1 == '') || (out2 != '') ){
            $('#ut9').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#ut9').val(0.0);

         }
       

     }

     $("#outam9").keydown(function () {
         ud9();
     });

     $("#outpm9").keydown(function () {
         ud9();
     });

</script>

<!-- Day 10 -->
<script type="text/javascript">
    var varjs1 = '<?php echo $Break1; ?>';
    var varjs2 = '<?php echo $Out1; ?>';

    var ud10 = function() {
         var out1 = $('#outam10').val();
         var out2 = $('#outpm10').val();

         if(varjs1 >= out1){
         var time1 = $('#outam10').val().split(':'), time2 = varjs1.split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
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
         }

         if(varjs2 >= out2){
         var time3 = $('#outpm10').val().split(':'), time4 = varjs2.split(':');
         var hours3 = parseInt(time3[0], 10), 
             hours4 = parseInt(time4[0], 10),
             mins3 = parseInt(time3[1], 10),
             mins4 = parseInt(time4[1], 10);
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
        
        if((out1 != '') && (out2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#ut10').val(sum.toFixed(2));
         }

         else if((out1 != '') || (out2 == '') ) {
            $('#ut10').val(parseFloat(hoursA + 0.0));

         }

         else if((out1 == '') || (out2 != '') ){
            $('#ut10').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#ut10').val(0.0);

         }
       

     }

     $("#outam10").keydown(function () {
         ud10();
     });

     $("#outpm10").keydown(function () {
         ud10();
     });

</script>

<!-- Day 11 -->
<script type="text/javascript">
    var varjs1 = '<?php echo $Break1; ?>';
    var varjs2 = '<?php echo $Out1; ?>';

    var ud11 = function() {
         var out1 = $('#outam11').val();
         var out2 = $('#outpm11').val();

         if(varjs1 >= out1){
         var time1 = $('#outam11').val().split(':'), time2 = varjs1.split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
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
         }

         if(varjs2 >= out2){
         var time3 = $('#outpm11').val().split(':'), time4 = varjs2.split(':');
         var hours3 = parseInt(time3[0], 10), 
             hours4 = parseInt(time4[0], 10),
             mins3 = parseInt(time3[1], 10),
             mins4 = parseInt(time4[1], 10);
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
        
        if((out1 != '') && (out2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#ut11').val(sum.toFixed(2));
         }

         else if((out1 != '') || (out2 == '') ) {
            $('#ut11').val(parseFloat(hoursA + 0.0));

         }

         else if((out1 == '') || (out2 != '') ){
            $('#ut11').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#ut11').val(0.0);

         }
       

     }

     $("#outam11").keydown(function () {
         ud11();
     });

     $("#outpm11").keydown(function () {
         ud11();
     });

</script>

<!-- Day 12 -->
<script type="text/javascript">
    var varjs1 = '<?php echo $Break1; ?>';
    var varjs2 = '<?php echo $Out1; ?>';

    var ud12 = function() {
         var out1 = $('#outam12').val();
         var out2 = $('#outpm12').val();

         if(varjs1 >= out1){
         var time1 = $('#outam12').val().split(':'), time2 = varjs1.split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
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
         }

         if(varjs2 >= out2){
         var time3 = $('#outpm12').val().split(':'), time4 = varjs2.split(':');
         var hours3 = parseInt(time3[0], 10), 
             hours4 = parseInt(time4[0], 10),
             mins3 = parseInt(time3[1], 10),
             mins4 = parseInt(time4[1], 10);
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
        
        if((out1 != '') && (out2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#ut12').val(sum.toFixed(2));
         }

         else if((out1 != '') || (out2 == '') ) {
            $('#ut12').val(parseFloat(hoursA + 0.0));

         }

         else if((out1 == '') || (out2 != '') ){
            $('#ut12').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#ut12').val(0.0);

         }
       

     }

     $("#outam12").keydown(function () {
         ud12();
     });

     $("#outpm12").keydown(function () {
         ud12();
     });

</script>

<!-- Day 13 -->
<script type="text/javascript">
    var varjs1 = '<?php echo $Break1; ?>';
    var varjs2 = '<?php echo $Out1; ?>';

    var ud13 = function() {
         var out1 = $('#outam13').val();
         var out2 = $('#outpm13').val();

         if(varjs1 >= out1){
         var time1 = $('#outam13').val().split(':'), time2 = varjs1.split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
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
         }

         if(varjs2 >= out2){
         var time3 = $('#outpm13').val().split(':'), time4 = varjs2.split(':');
         var hours3 = parseInt(time3[0], 10), 
             hours4 = parseInt(time4[0], 10),
             mins3 = parseInt(time3[1], 10),
             mins4 = parseInt(time4[1], 10);
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
        
        if((out1 != '') && (out2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#ut13').val(sum.toFixed(2));
         }

         else if((out1 != '') || (out2 == '') ) {
            $('#ut13').val(parseFloat(hoursA + 0.0));

         }

         else if((out1 == '') || (out2 != '') ){
            $('#ut13').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#ut13').val(0.0);

         }
       

     }

     $("#outam13").keydown(function () {
         ud13();
     });

     $("#outpm13").keydown(function () {
         ud13();
     });

</script>

<!-- Day 14 -->
<script type="text/javascript">
    var varjs1 = '<?php echo $Break1; ?>';
    var varjs2 = '<?php echo $Out1; ?>';

    var ud14 = function() {
         var out1 = $('#outam14').val();
         var out2 = $('#outpm14').val();

         if(varjs1 >= out1){
         var time1 = $('#outam14').val().split(':'), time2 = varjs1.split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
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
         }

         if(varjs2 >= out2){
         var time3 = $('#outpm14').val().split(':'), time4 = varjs2.split(':');
         var hours3 = parseInt(time3[0], 10), 
             hours4 = parseInt(time4[0], 10),
             mins3 = parseInt(time3[1], 10),
             mins4 = parseInt(time4[1], 10);
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
        
        if((out1 != '') && (out2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#ut14').val(sum.toFixed(2));
         }

         else if((out1 != '') || (out2 == '') ) {
            $('#ut14').val(parseFloat(hoursA + 0.0));

         }

         else if((out1 == '') || (out2 != '') ){
            $('#ut14').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#ut14').val(0.0);

         }
       

     }

     $("#outam14").keydown(function () {
         ud14();
     });

     $("#outpm14").keydown(function () {
         ud14();
     });

</script>

<!-- Day 15 -->
<script type="text/javascript">
    var varjs1 = '<?php echo $Break1; ?>';
    var varjs2 = '<?php echo $Out1; ?>';

    var ud15 = function() {
         var out1 = $('#outam15').val();
         var out2 = $('#outpm15').val();

         if(varjs1 >= out1){
         var time1 = $('#outam15').val().split(':'), time2 = varjs1.split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
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
         }

         if(varjs2 >= out2){
         var time3 = $('#outpm15').val().split(':'), time4 = varjs2.split(':');
         var hours3 = parseInt(time3[0], 10), 
             hours4 = parseInt(time4[0], 10),
             mins3 = parseInt(time3[1], 10),
             mins4 = parseInt(time4[1], 10);
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
        
        if((out1 != '') && (out2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#ut15').val(sum.toFixed(2));
         }

         else if((out1 != '') || (out2 == '') ) {
            $('#ut15').val(parseFloat(hoursA + 0.0));

         }

         else if((out1 == '') || (out2 != '') ){
            $('#ut15').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#ut15').val(0.0);

         }
       

     }

     $("#outam15").keydown(function () {
         ud15();
     });

     $("#outpm15").keydown(function () {
         ud15();
     });

</script>

<!-- Day 16 -->
<script type="text/javascript">
    var varjs1 = '<?php echo $Break1; ?>';
    var varjs2 = '<?php echo $Out1; ?>';

    var ud16 = function() {
         var out1 = $('#outam16').val();
         var out2 = $('#outpm16').val();

         if(varjs1 >= out1){
         var time1 = $('#outam16').val().split(':'), time2 = varjs1.split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
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
         }

         if(varjs2 >= out2){
         var time3 = $('#outpm16').val().split(':'), time4 = varjs2.split(':');
         var hours3 = parseInt(time3[0], 10), 
             hours4 = parseInt(time4[0], 10),
             mins3 = parseInt(time3[1], 10),
             mins4 = parseInt(time4[1], 10);
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
        
        if((out1 != '') && (out2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#ut16').val(sum.toFixed(2));
         }

         else if((out1 != '') || (out2 == '') ) {
            $('#ut16').val(parseFloat(hoursA + 0.0));

         }

         else if((out1 == '') || (out2 != '') ){
            $('#ut16').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#ut16').val(0.0);

         }
       

     }

     $("#outam16").keydown(function () {
         ud16();
     });

     $("#outpm16").keydown(function () {
         ud16();
     });

</script>

<!-- Day 17 -->
<script type="text/javascript">
    var varjs1 = '<?php echo $Break1; ?>';
    var varjs2 = '<?php echo $Out1; ?>';

    var ud17 = function() {
         var out1 = $('#outam17').val();
         var out2 = $('#outpm17').val();

         if(varjs1 >= out1){
         var time1 = $('#outam17').val().split(':'), time2 = varjs1.split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
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
         }

         if(varjs2 >= out2){
         var time3 = $('#outpm17').val().split(':'), time4 = varjs2.split(':');
         var hours3 = parseInt(time3[0], 10), 
             hours4 = parseInt(time4[0], 10),
             mins3 = parseInt(time3[1], 10),
             mins4 = parseInt(time4[1], 10);
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
        
        if((out1 != '') && (out2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#ut17').val(sum.toFixed(2));
         }

         else if((out1 != '') || (out2 == '') ) {
            $('#ut17').val(parseFloat(hoursA + 0.0));

         }

         else if((out1 == '') || (out2 != '') ){
            $('#ut17').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#ut17').val(0.0);

         }
       

     }

     $("#outam17").keydown(function () {
         ud17();
     });

     $("#outpm17").keydown(function () {
         ud17();
     });

</script>

<!-- Day 18 -->
<script type="text/javascript">
    var varjs1 = '<?php echo $Break1; ?>';
    var varjs2 = '<?php echo $Out1; ?>';

    var ud18 = function() {
         var out1 = $('#outam18').val();
         var out2 = $('#outpm18').val();

         if(varjs1 >= out1){
         var time1 = $('#outam18').val().split(':'), time2 = varjs1.split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
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
         }

         if(varjs2 >= out2){
         var time3 = $('#outpm18').val().split(':'), time4 = varjs2.split(':');
         var hours3 = parseInt(time3[0], 10), 
             hours4 = parseInt(time4[0], 10),
             mins3 = parseInt(time3[1], 10),
             mins4 = parseInt(time4[1], 10);
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
        
        if((out1 != '') && (out2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#ut18').val(sum.toFixed(2));
         }

         else if((out1 != '') || (out2 == '') ) {
            $('#ut18').val(parseFloat(hoursA + 0.0));

         }

         else if((out1 == '') || (out2 != '') ){
            $('#ut18').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#ut18').val(0.0);

         }
       

     }

     $("#outam18").keydown(function () {
         ud18();
     });

     $("#outpm18").keydown(function () {
         ud18();
     });

</script>

<!-- Day 19 -->
<script type="text/javascript">
    var varjs1 = '<?php echo $Break1; ?>';
    var varjs2 = '<?php echo $Out1; ?>';

    var ud19 = function() {
         var out1 = $('#outam19').val();
         var out2 = $('#outpm19').val();

         if(varjs1 >= out1){
         var time1 = $('#outam19').val().split(':'), time2 = varjs1.split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
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
         }

         if(varjs2 >= out2){
         var time3 = $('#outpm19').val().split(':'), time4 = varjs2.split(':');
         var hours3 = parseInt(time3[0], 10), 
             hours4 = parseInt(time4[0], 10),
             mins3 = parseInt(time3[1], 10),
             mins4 = parseInt(time4[1], 10);
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
        
        if((out1 != '') && (out2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#ut19').val(sum.toFixed(2));
         }

         else if((out1 != '') || (out2 == '') ) {
            $('#ut19').val(parseFloat(hoursA + 0.0));

         }

         else if((out1 == '') || (out2 != '') ){
            $('#ut19').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#ut19').val(0.0);

         }
       

     }

     $("#outam19").keydown(function () {
         ud19();
     });

     $("#outpm19").keydown(function () {
         ud19();
     });

</script>

<!-- Day 20 -->
<script type="text/javascript">
    var varjs1 = '<?php echo $Break1; ?>';
    var varjs2 = '<?php echo $Out1; ?>';

    var ud20 = function() {
         var out1 = $('#outam20').val();
         var out2 = $('#outpm20').val();

         if(varjs1 >= out1){
         var time1 = $('#outam20').val().split(':'), time2 = varjs1.split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
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
         }

         if(varjs2 >= out2){
         var time3 = $('#outpm20').val().split(':'), time4 = varjs2.split(':');
         var hours3 = parseInt(time3[0], 10), 
             hours4 = parseInt(time4[0], 10),
             mins3 = parseInt(time3[1], 10),
             mins4 = parseInt(time4[1], 10);
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
        
        if((out1 != '') && (out2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#ut20').val(sum.toFixed(2));
         }

         else if((out1 != '') || (out2 == '') ) {
            $('#ut20').val(parseFloat(hoursA + 0.0));

         }

         else if((out1 == '') || (out2 != '') ){
            $('#ut20').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#ut20').val(0.0);

         }
       

     }

     $("#outam20").keydown(function () {
         ud20();
     });

     $("#outpm20").keydown(function () {
         ud20();
     });

</script>

<!-- Day 21 -->
<script type="text/javascript">
    var varjs1 = '<?php echo $Break1; ?>';
    var varjs2 = '<?php echo $Out1; ?>';

    var ud21 = function() {
         var out1 = $('#outam21').val();
         var out2 = $('#outpm21').val();

         if(varjs1 >= out1){
         var time1 = $('#outam21').val().split(':'), time2 = varjs1.split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
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
         }

         if(varjs2 >= out2){
         var time3 = $('#outpm21').val().split(':'), time4 = varjs2.split(':');
         var hours3 = parseInt(time3[0], 10), 
             hours4 = parseInt(time4[0], 10),
             mins3 = parseInt(time3[1], 10),
             mins4 = parseInt(time4[1], 10);
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
        
        if((out1 != '') && (out2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#ut21').val(sum.toFixed(2));
         }

         else if((out1 != '') || (out2 == '') ) {
            $('#ut21').val(parseFloat(hoursA + 0.0));

         }

         else if((out1 == '') || (out2 != '') ){
            $('#ut21').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#ut21').val(0.0);

         }
       

     }

     $("#outam21").keydown(function () {
         ud21();
     });

     $("#outpm21").keydown(function () {
         ud21();
     });

</script>

<!-- Day 22 -->
<script type="text/javascript">
    var varjs1 = '<?php echo $Break1; ?>';
    var varjs2 = '<?php echo $Out1; ?>';

    var ud22 = function() {
         var out1 = $('#outam22').val();
         var out2 = $('#outpm22').val();

         if(varjs1 >= out1){
         var time1 = $('#outam22').val().split(':'), time2 = varjs1.split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
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
         }

         if(varjs2 >= out2){
         var time3 = $('#outpm22').val().split(':'), time4 = varjs2.split(':');
         var hours3 = parseInt(time3[0], 10), 
             hours4 = parseInt(time4[0], 10),
             mins3 = parseInt(time3[1], 10),
             mins4 = parseInt(time4[1], 10);
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
        
        if((out1 != '') && (out2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#ut22').val(sum.toFixed(2));
         }

         else if((out1 != '') || (out2 == '') ) {
            $('#ut22').val(parseFloat(hoursA + 0.0));

         }

         else if((out1 == '') || (out2 != '') ){
            $('#ut22').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#ut22').val(0.0);

         }
       

     }

     $("#outam22").keydown(function () {
         ud22();
     });

     $("#outpm22").keydown(function () {
         ud22();
     });

</script>

<!-- Day 23 -->
<script type="text/javascript">
    var varjs1 = '<?php echo $Break1; ?>';
    var varjs2 = '<?php echo $Out1; ?>';

    var ud23 = function() {
         var out1 = $('#outam23').val();
         var out2 = $('#outpm23').val();

         if(varjs1 >= out1){
         var time1 = $('#outam23').val().split(':'), time2 = varjs1.split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
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
         }

         if(varjs2 >= out2){
         var time3 = $('#outpm23').val().split(':'), time4 = varjs2.split(':');
         var hours3 = parseInt(time3[0], 10), 
             hours4 = parseInt(time4[0], 10),
             mins3 = parseInt(time3[1], 10),
             mins4 = parseInt(time4[1], 10);
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
        
        if((out1 != '') && (out2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#ut23').val(sum.toFixed(2));
         }

         else if((out1 != '') || (out2 == '') ) {
            $('#ut23').val(parseFloat(hoursA + 0.0));

         }

         else if((out1 == '') || (out2 != '') ){
            $('#ut23').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#ut23').val(0.0);

         }
       

     }

     $("#outam23").keydown(function () {
         ud23();
     });

     $("#outpm23").keydown(function () {
         ud23();
     });

</script>

<!-- Day 24 -->
<script type="text/javascript">
    var varjs1 = '<?php echo $Break1; ?>';
    var varjs2 = '<?php echo $Out1; ?>';

    var ud24 = function() {
         var out1 = $('#outam24').val();
         var out2 = $('#outpm24').val();

         if(varjs1 >= out1){
         var time1 = $('#outam24').val().split(':'), time2 = varjs1.split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
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
         }

         if(varjs2 >= out2){
         var time3 = $('#outpm24').val().split(':'), time4 = varjs2.split(':');
         var hours3 = parseInt(time3[0], 10), 
             hours4 = parseInt(time4[0], 10),
             mins3 = parseInt(time3[1], 10),
             mins4 = parseInt(time4[1], 10);
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
        
        if((out1 != '') && (out2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#ut24').val(sum.toFixed(2));
         }

         else if((out1 != '') || (out2 == '') ) {
            $('#ut24').val(parseFloat(hoursA + 0.0));

         }

         else if((out1 == '') || (out2 != '') ){
            $('#ut24').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#ut24').val(0.0);

         }
       

     }

     $("#outam24").keydown(function () {
         ud24();
     });

     $("#outpm24").keydown(function () {
         ud24();
     });

</script>

<!-- Day 25 -->
<script type="text/javascript">
    var varjs1 = '<?php echo $Break1; ?>';
    var varjs2 = '<?php echo $Out1; ?>';

    var ud25 = function() {
         var out1 = $('#outam25').val();
         var out2 = $('#outpm25').val();

         if(varjs1 >= out1){
         var time1 = $('#outam25').val().split(':'), time2 = varjs1.split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
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
         }

         if(varjs2 >= out2){
         var time3 = $('#outpm25').val().split(':'), time4 = varjs2.split(':');
         var hours3 = parseInt(time3[0], 10), 
             hours4 = parseInt(time4[0], 10),
             mins3 = parseInt(time3[1], 10),
             mins4 = parseInt(time4[1], 10);
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
        
        if((out1 != '') && (out2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#ut25').val(sum.toFixed(2));
         }

         else if((out1 != '') || (out2 == '') ) {
            $('#ut25').val(parseFloat(hoursA + 0.0));

         }

         else if((out1 == '') || (out2 != '') ){
            $('#ut25').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#ut25').val(0.0);

         }
       

     }

     $("#outam25").keydown(function () {
         ud25();
     });

     $("#outpm25").keydown(function () {
         ud25();
     });

</script>

<!-- Day 26 -->
<script type="text/javascript">
    var varjs1 = '<?php echo $Break1; ?>';
    var varjs2 = '<?php echo $Out1; ?>';

    var ud26 = function() {
         var out1 = $('#outam26').val();
         var out2 = $('#outpm26').val();

         if(varjs1 >= out1){
         var time1 = $('#outam26').val().split(':'), time2 = varjs1.split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
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
         }

         if(varjs2 >= out2){
         var time3 = $('#outpm26').val().split(':'), time4 = varjs2.split(':');
         var hours3 = parseInt(time3[0], 10), 
             hours4 = parseInt(time4[0], 10),
             mins3 = parseInt(time3[1], 10),
             mins4 = parseInt(time4[1], 10);
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
        
        if((out1 != '') && (out2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#ut26').val(sum.toFixed(2));
         }

         else if((out1 != '') || (out2 == '') ) {
            $('#ut26').val(parseFloat(hoursA + 0.0));

         }

         else if((out1 == '') || (out2 != '') ){
            $('#ut26').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#ut26').val(0.0);

         }
       

     }

     $("#outam26").keydown(function () {
         ud26();
     });

     $("#outpm26").keydown(function () {
         ud26();
     });

</script>

<!-- Day 27 -->
<script type="text/javascript">
    var varjs1 = '<?php echo $Break1; ?>';
    var varjs2 = '<?php echo $Out1; ?>';

    var ud27 = function() {
         var out1 = $('#outam27').val();
         var out2 = $('#outpm27').val();

         if(varjs1 >= out1){
         var time1 = $('#outam27').val().split(':'), time2 = varjs1.split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
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
         }

         if(varjs2 >= out2){
         var time3 = $('#outpm27').val().split(':'), time4 = varjs2.split(':');
         var hours3 = parseInt(time3[0], 10), 
             hours4 = parseInt(time4[0], 10),
             mins3 = parseInt(time3[1], 10),
             mins4 = parseInt(time4[1], 10);
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
        
        if((out1 != '') && (out2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#ut27').val(sum.toFixed(2));
         }

         else if((out1 != '') || (out2 == '') ) {
            $('#ut27').val(parseFloat(hoursA + 0.0));

         }

         else if((out1 == '') || (out2 != '') ){
            $('#ut27').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#ut27').val(0.0);

         }
       

     }

     $("#outam27").keydown(function () {
         ud27();
     });

     $("#outpm27").keydown(function () {
         ud27();
     });

</script>

<!-- Day 28 -->
<script type="text/javascript">
    var varjs1 = '<?php echo $Break1; ?>';
    var varjs2 = '<?php echo $Out1; ?>';

    var ud28 = function() {
         var out1 = $('#outam28').val();
         var out2 = $('#outpm28').val();

         if(varjs1 >= out1){
         var time1 = $('#outam28').val().split(':'), time2 = varjs1.split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
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
         }

         if(varjs2 >= out2){
         var time3 = $('#outpm28').val().split(':'), time4 = varjs2.split(':');
         var hours3 = parseInt(time3[0], 10), 
             hours4 = parseInt(time4[0], 10),
             mins3 = parseInt(time3[1], 10),
             mins4 = parseInt(time4[1], 10);
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
        
        if((out1 != '') && (out2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#ut28').val(sum.toFixed(2));
         }

         else if((out1 != '') || (out2 == '') ) {
            $('#ut28').val(parseFloat(hoursA + 0.0));

         }

         else if((out1 == '') || (out2 != '') ){
            $('#ut28').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#ut28').val(0.0);

         }
       

     }

     $("#outam28").keydown(function () {
         ud28();
     });

     $("#outpm28").keydown(function () {
         ud28();
     });

</script>

<!-- Day 29 -->
<script type="text/javascript">
    var varjs1 = '<?php echo $Break1; ?>';
    var varjs2 = '<?php echo $Out1; ?>';

    var ud29 = function() {
         var out1 = $('#outam29').val();
         var out2 = $('#outpm29').val();

         if(varjs1 >= out1){
         var time1 = $('#outam29').val().split(':'), time2 = varjs1.split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
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
         }

         if(varjs2 >= out2){
         var time3 = $('#outpm29').val().split(':'), time4 = varjs2.split(':');
         var hours3 = parseInt(time3[0], 10), 
             hours4 = parseInt(time4[0], 10),
             mins3 = parseInt(time3[1], 10),
             mins4 = parseInt(time4[1], 10);
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
        
        if((out1 != '') && (out2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#ut29').val(sum.toFixed(2));
         }

         else if((out1 != '') || (out2 == '') ) {
            $('#ut29').val(parseFloat(hoursA + 0.0));

         }

         else if((out1 == '') || (out2 != '') ){
            $('#ut29').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#ut29').val(0.0);

         }
       

     }

     $("#outam29").keydown(function () {
         ud29();
     });

     $("#outpm29").keydown(function () {
         ud29();
     });

</script>

<!-- Day 30 -->
<script type="text/javascript">
    var varjs1 = '<?php echo $Break1; ?>';
    var varjs2 = '<?php echo $Out1; ?>';

    var ud30 = function() {
         var out1 = $('#outam30').val();
         var out2 = $('#outpm30').val();

         if(varjs1 >= out1){
         var time1 = $('#outam30').val().split(':'), time2 = varjs1.split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
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
         }

         if(varjs2 >= out2){
         var time3 = $('#outpm30').val().split(':'), time4 = varjs2.split(':');
         var hours3 = parseInt(time3[0], 10), 
             hours4 = parseInt(time4[0], 10),
             mins3 = parseInt(time3[1], 10),
             mins4 = parseInt(time4[1], 10);
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
        
        if((out1 != '') && (out2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#ut30').val(sum.toFixed(2));
         }

         else if((out1 != '') || (out2 == '') ) {
            $('#ut30').val(parseFloat(hoursA + 0.0));

         }

         else if((out1 == '') || (out2 != '') ){
            $('#ut30').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#ut30').val(0.0);

         }
       

     }

     $("#outam30").keydown(function () {
         ud30();
     });

     $("#outpm30").keydown(function () {
         ud30();
     });

</script>

<!-- Day 31 -->
<script type="text/javascript">
    var varjs1 = '<?php echo $Break1; ?>';
    var varjs2 = '<?php echo $Out1; ?>';

    var ud31 = function() {
         var out1 = $('#outam31').val();
         var out2 = $('#outpm31').val();

         if(varjs1 >= out1){
         var time1 = $('#outam31').val().split(':'), time2 = varjs1.split(':');
         var hours1 = parseInt(time1[0], 10), 
             hours2 = parseInt(time2[0], 10),
             mins1 = parseInt(time1[1], 10),
             mins2 = parseInt(time2[1], 10);
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
         }

         if(varjs2 >= out2){
         var time3 = $('#outpm31').val().split(':'), time4 = varjs2.split(':');
         var hours3 = parseInt(time3[0], 10), 
             hours4 = parseInt(time4[0], 10),
             mins3 = parseInt(time3[1], 10),
             mins4 = parseInt(time4[1], 10);
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
        
        if((out1 != '') && (out2 != '') ) {
            var sum = parseFloat(hoursA) + parseFloat(hoursB);
            $('#ut31').val(sum.toFixed(2));
         }

         else if((out1 != '') || (out2 == '') ) {
            $('#ut31').val(parseFloat(hoursA + 0.0));

         }

         else if((out1 == '') || (out2 != '') ){
            $('#ut31').val(parseFloat(hoursB + 0.0));

         }

         else{
            $('#ut31').val(0.0);

         }
       

     }

     $("#outam31").keydown(function () {
         ud31();
     });

     $("#outpm31").keydown(function () {
         ud31();
     });

</script>

