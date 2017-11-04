<!-- Day 1 -->
<script type="text/javascript">
    var uds1 = function() {
         var out1 = $('#outam1').val();
         var out2 = $('#outpm1').val();

         var outs1 = $('#break1').val();
         var outs2 = $('#out1').val();


         var time1 = out1.split(':'), time2 = outs1.split(':');
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
        
         

         var time3 = out2.split(':'), time4 = outs2.split(':');
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

     $('#shift1').keydown( function () {
        uds1();
     });

     $('#shift1').change( function () {
        uds1();
     });


</script>

<!-- Day 2 -->
<script type="text/javascript">
    var uds2 = function() {
         var out1 = $('#outam2').val();
         var out2 = $('#outpm2').val();

         var outs1 = $('#break2').val();
         var outs2 = $('#out2').val();


         var time1 = out1.split(':'), time2 = outs1.split(':');
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
        
         

         var time3 = out2.split(':'), time4 = outs2.split(':');
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

     $('#shift2').keydown( function () {
        uds2();
     });

     $('#shift2').change( function () {
        uds2();
     });


</script>

<!-- Day 3 -->
<script type="text/javascript">
    var uds3 = function() {
         var out1 = $('#outam3').val();
         var out2 = $('#outpm3').val();

         var outs1 = $('#break3').val();
         var outs2 = $('#out3').val();


         var time1 = out1.split(':'), time2 = outs1.split(':');
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
        
         

         var time3 = out2.split(':'), time4 = outs2.split(':');
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

     $('#shift3').keydown( function () {
        uds3();
     });

     $('#shift3').change( function () {
        uds3();
     });


</script>

<!-- Day 4 -->
<script type="text/javascript">
    var uds4 = function() {
         var out1 = $('#outam4').val();
         var out2 = $('#outpm4').val();

         var outs1 = $('#break4').val();
         var outs2 = $('#out4').val();


         var time1 = out1.split(':'), time2 = outs1.split(':');
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
        
         

         var time3 = out2.split(':'), time4 = outs2.split(':');
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

     $('#shift4').keydown( function () {
        uds4();
     });

     $('#shift4').change( function () {
        uds4();
     });


</script>

<!-- Day 5 -->
<script type="text/javascript">
    var uds5 = function() {
         var out1 = $('#outam5').val();
         var out2 = $('#outpm5').val();

         var outs1 = $('#break5').val();
         var outs2 = $('#out5').val();


         var time1 = out1.split(':'), time2 = outs1.split(':');
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
        
         

         var time3 = out2.split(':'), time4 = outs2.split(':');
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

     $('#shift5').keydown( function () {
        uds5();
     });

     $('#shift5').change( function () {
        uds5();
     });


</script>

<!-- Day 6 -->
<script type="text/javascript">
    var uds6 = function() {
         var out1 = $('#outam6').val();
         var out2 = $('#outpm6').val();

         var outs1 = $('#break6').val();
         var outs2 = $('#out6').val();


         var time1 = out1.split(':'), time2 = outs1.split(':');
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
        
         

         var time3 = out2.split(':'), time4 = outs2.split(':');
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

     $('#shift6').keydown( function () {
        uds6();
     });

     $('#shift6').change( function () {
        uds6();
     });


</script>

<!-- Day 7 -->
<script type="text/javascript">
    var uds7 = function() {
         var out1 = $('#outam7').val();
         var out2 = $('#outpm7').val();

         var outs1 = $('#break7').val();
         var outs2 = $('#out7').val();


         var time1 = out1.split(':'), time2 = outs1.split(':');
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
        
         

         var time3 = out2.split(':'), time4 = outs2.split(':');
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

     $('#shift7').keydown( function () {
        uds7();
     });

     $('#shift7').change( function () {
        uds7();
     });


</script>

<!-- Day 8 -->
<script type="text/javascript">
    var uds8 = function() {
         var out1 = $('#outam8').val();
         var out2 = $('#outpm8').val();

         var outs1 = $('#break8').val();
         var outs2 = $('#out8').val();


         var time1 = out1.split(':'), time2 = outs1.split(':');
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
        
         

         var time3 = out2.split(':'), time4 = outs2.split(':');
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

     $('#shift8').keydown( function () {
        uds8();
     });

     $('#shift8').change( function () {
        uds8();
     });


</script>

<!-- Day 9 -->
<script type="text/javascript">
    var uds9 = function() {
         var out1 = $('#outam9').val();
         var out2 = $('#outpm9').val();

         var outs1 = $('#break9').val();
         var outs2 = $('#out9').val();


         var time1 = out1.split(':'), time2 = outs1.split(':');
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
        
         

         var time3 = out2.split(':'), time4 = outs2.split(':');
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

     $('#shift9').keydown( function () {
        uds9();
     });

     $('#shift9').change( function () {
        uds9();
     });


</script>
<!-- Day 10 -->
<script type="text/javascript">
    var uds10 = function() {
         var out1 = $('#outam10').val();
         var out2 = $('#outpm10').val();

         var outs1 = $('#break10').val();
         var outs2 = $('#out10').val();


         var time1 = out1.split(':'), time2 = outs1.split(':');
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
        
         

         var time3 = out2.split(':'), time4 = outs2.split(':');
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

     $('#shift10').keydown( function () {
        uds10();
     });

     $('#shift10').change( function () {
        uds10();
     });


</script>

<!-- Day 11 -->
<script type="text/javascript">
    var uds11 = function() {
         var out1 = $('#outam11').val();
         var out2 = $('#outpm11').val();

         var outs1 = $('#break11').val();
         var outs2 = $('#out11').val();


         var time1 = out1.split(':'), time2 = outs1.split(':');
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
        
         

         var time3 = out2.split(':'), time4 = outs2.split(':');
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

     $('#shift11').keydown( function () {
        uds11();
     });

     $('#shift11').change( function () {
        uds11();
     });


</script>

<!-- Day 12 -->
<script type="text/javascript">
    var uds12 = function() {
         var out1 = $('#outam12').val();
         var out2 = $('#outpm12').val();

         var outs1 = $('#break12').val();
         var outs2 = $('#out12').val();


         var time1 = out1.split(':'), time2 = outs1.split(':');
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
        
         

         var time3 = out2.split(':'), time4 = outs2.split(':');
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

     $('#shift12').keydown( function () {
        uds12();
     });

     $('#shift12').change( function () {
        uds12();
     });


</script>

<!-- Day 13 -->
<script type="text/javascript">
    var uds13 = function() {
         var out1 = $('#outam13').val();
         var out2 = $('#outpm13').val();

         var outs1 = $('#break13').val();
         var outs2 = $('#out13').val();


         var time1 = out1.split(':'), time2 = outs1.split(':');
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
        
         

         var time3 = out2.split(':'), time4 = outs2.split(':');
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

     $('#shift13').keydown( function () {
        uds13();
     });

     $('#shift13').change( function () {
        uds13();
     });


</script>

<!-- Day 14 -->
<script type="text/javascript">
    var uds14 = function() {
         var out1 = $('#outam14').val();
         var out2 = $('#outpm14').val();

         var outs1 = $('#break14').val();
         var outs2 = $('#out14').val();


         var time1 = out1.split(':'), time2 = outs1.split(':');
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
        
         

         var time3 = out2.split(':'), time4 = outs2.split(':');
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

     $('#shift14').keydown( function () {
        uds14();
     });

     $('#shift14').change( function () {
        uds14();
     });


</script>

<!-- Day 15 -->
<script type="text/javascript">
    var uds15 = function() {
         var out1 = $('#outam15').val();
         var out2 = $('#outpm15').val();

         var outs1 = $('#break15').val();
         var outs2 = $('#out15').val();


         var time1 = out1.split(':'), time2 = outs1.split(':');
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
        
         

         var time3 = out2.split(':'), time4 = outs2.split(':');
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

     $('#shift15').keydown( function () {
        uds15();
     });

     $('#shift15').change( function () {
        uds15();
     });


</script>

<!-- Day 16 -->
<script type="text/javascript">
    var uds16 = function() {
         var out1 = $('#outam16').val();
         var out2 = $('#outpm16').val();

         var outs1 = $('#break16').val();
         var outs2 = $('#out16').val();


         var time1 = out1.split(':'), time2 = outs1.split(':');
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
        
         

         var time3 = out2.split(':'), time4 = outs2.split(':');
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

     $('#shift16').keydown( function () {
        uds16();
     });

     $('#shift16').change( function () {
        uds16();
     });


</script>

<!-- Day 17 -->
<script type="text/javascript">
    var uds17 = function() {
         var out1 = $('#outam17').val();
         var out2 = $('#outpm17').val();

         var outs1 = $('#break17').val();
         var outs2 = $('#out17').val();


         var time1 = out1.split(':'), time2 = outs1.split(':');
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
        
         

         var time3 = out2.split(':'), time4 = outs2.split(':');
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

     $('#shift17').keydown( function () {
        uds17();
     });

     $('#shift17').change( function () {
        uds17();
     });


</script>

<!-- Day 18 -->
<script type="text/javascript">
    var uds18 = function() {
         var out1 = $('#outam18').val();
         var out2 = $('#outpm18').val();

         var outs1 = $('#break18').val();
         var outs2 = $('#out18').val();


         var time1 = out1.split(':'), time2 = outs1.split(':');
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
        
         

         var time3 = out2.split(':'), time4 = outs2.split(':');
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

     $('#shift18').keydown( function () {
        uds18();
     });

     $('#shift18').change( function () {
        uds18();
     });


</script>

<!-- Day 19 -->
<script type="text/javascript">
    var uds19 = function() {
         var out1 = $('#outam19').val();
         var out2 = $('#outpm19').val();

         var outs1 = $('#break19').val();
         var outs2 = $('#out19').val();


         var time1 = out1.split(':'), time2 = outs1.split(':');
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
        
         

         var time3 = out2.split(':'), time4 = outs2.split(':');
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

     $('#shift19').keydown( function () {
        uds19();
     });

     $('#shift19').change( function () {
        uds19();
     });


</script>

<!-- Day 20 -->
<script type="text/javascript">
    var uds20 = function() {
         var out1 = $('#outam20').val();
         var out2 = $('#outpm20').val();

         var outs1 = $('#break20').val();
         var outs2 = $('#out20').val();


         var time1 = out1.split(':'), time2 = outs1.split(':');
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
        
         

         var time3 = out2.split(':'), time4 = outs2.split(':');
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

     $('#shift20').keydown( function () {
        uds20();
     });

     $('#shift20').change( function () {
        uds20();
     });


</script>

<!-- Day 21 -->
<script type="text/javascript">
    var uds21 = function() {
         var out1 = $('#outam21').val();
         var out2 = $('#outpm21').val();

         var outs1 = $('#break21').val();
         var outs2 = $('#out21').val();


         var time1 = out1.split(':'), time2 = outs1.split(':');
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
        
         

         var time3 = out2.split(':'), time4 = outs2.split(':');
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

     $('#shift21').keydown( function () {
        uds21();
     });

     $('#shift21').change( function () {
        uds21();
     });


</script>

<!-- Day 22 -->
<script type="text/javascript">
    var uds22 = function() {
         var out1 = $('#outam22').val();
         var out2 = $('#outpm22').val();

         var outs1 = $('#break22').val();
         var outs2 = $('#out22').val();


         var time1 = out1.split(':'), time2 = outs1.split(':');
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
        
         

         var time3 = out2.split(':'), time4 = outs2.split(':');
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

     $('#shift22').keydown( function () {
        uds22();
     });

     $('#shift22').change( function () {
        uds22();
     });


</script>

<!-- Day 23 -->
<script type="text/javascript">
    var uds23 = function() {
         var out1 = $('#outam23').val();
         var out2 = $('#outpm23').val();

         var outs1 = $('#break23').val();
         var outs2 = $('#out23').val();


         var time1 = out1.split(':'), time2 = outs1.split(':');
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
        
         

         var time3 = out2.split(':'), time4 = outs2.split(':');
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

     $('#shift23').keydown( function () {
        uds23();
     });

     $('#shift23').change( function () {
        uds23();
     });


</script>

<!-- Day 24 -->
<script type="text/javascript">
    var uds24 = function() {
         var out1 = $('#outam24').val();
         var out2 = $('#outpm24').val();

         var outs1 = $('#break24').val();
         var outs2 = $('#out24').val();


         var time1 = out1.split(':'), time2 = outs1.split(':');
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
        
         

         var time3 = out2.split(':'), time4 = outs2.split(':');
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

     $('#shift24').keydown( function () {
        uds24();
     });

     $('#shift24').change( function () {
        uds24();
     });


</script>

<!-- Day 25 -->
<script type="text/javascript">
    var uds25 = function() {
         var out1 = $('#outam25').val();
         var out2 = $('#outpm25').val();

         var outs1 = $('#break25').val();
         var outs2 = $('#out25').val();


         var time1 = out1.split(':'), time2 = outs1.split(':');
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
        
         

         var time3 = out2.split(':'), time4 = outs2.split(':');
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

     $('#shift25').keydown( function () {
        uds25();
     });

     $('#shift25').change( function () {
        uds25();
     });


</script>

<!-- Day 26 -->
<script type="text/javascript">
    var uds26 = function() {
         var out1 = $('#outam26').val();
         var out2 = $('#outpm26').val();

         var outs1 = $('#break26').val();
         var outs2 = $('#out26').val();


         var time1 = out1.split(':'), time2 = outs1.split(':');
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
        
         

         var time3 = out2.split(':'), time4 = outs2.split(':');
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

     $('#shift26').keydown( function () {
        uds26();
     });

     $('#shift26').change( function () {
        uds26();
     });


</script>

<!-- Day 27 -->
<script type="text/javascript">
    var uds27 = function() {
         var out1 = $('#outam27').val();
         var out2 = $('#outpm27').val();

         var outs1 = $('#break27').val();
         var outs2 = $('#out27').val();


         var time1 = out1.split(':'), time2 = outs1.split(':');
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
        
         

         var time3 = out2.split(':'), time4 = outs2.split(':');
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

     $('#shift27').keydown( function () {
        uds27();
     });

     $('#shift27').change( function () {
        uds27();
     });


</script>

<!-- Day 28 -->
<script type="text/javascript">
    var uds28 = function() {
         var out1 = $('#outam28').val();
         var out2 = $('#outpm28').val();

         var outs1 = $('#break28').val();
         var outs2 = $('#out28').val();


         var time1 = out1.split(':'), time2 = outs1.split(':');
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
        
         

         var time3 = out2.split(':'), time4 = outs2.split(':');
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

     $('#shift28').keydown( function () {
        uds28();
     });

     $('#shift28').change( function () {
        uds28();
     });


</script>

<!-- Day 29 -->
<script type="text/javascript">
    var uds29 = function() {
         var out1 = $('#outam29').val();
         var out2 = $('#outpm29').val();

         var outs1 = $('#break29').val();
         var outs2 = $('#out29').val();


         var time1 = out1.split(':'), time2 = outs1.split(':');
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
        
         

         var time3 = out2.split(':'), time4 = outs2.split(':');
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

     $('#shift29').keydown( function () {
        uds29();
     });

     $('#shift29').change( function () {
        uds29();
     });


</script>

<!-- Day 30 -->
<script type="text/javascript">
    var uds30 = function() {
         var out1 = $('#outam30').val();
         var out2 = $('#outpm30').val();

         var outs1 = $('#break30').val();
         var outs2 = $('#out30').val();


         var time1 = out1.split(':'), time2 = outs1.split(':');
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
        
         

         var time3 = out2.split(':'), time4 = outs2.split(':');
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

     $('#shift30').keydown( function () {
        uds30();
     });

     $('#shift30').change( function () {
        uds30();
     });


</script>

<!-- Day 31 -->
<script type="text/javascript">
    var uds31 = function() {
         var out1 = $('#outam31').val();
         var out2 = $('#outpm31').val();

         var outs1 = $('#break31').val();
         var outs2 = $('#out31').val();


         var time1 = out1.split(':'), time2 = outs1.split(':');
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
        
         

         var time3 = out2.split(':'), time4 = outs2.split(':');
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

     $('#shift31').keydown( function () {
        uds31();
     });

     $('#shift31').change( function () {
        uds31();
     });


</script>