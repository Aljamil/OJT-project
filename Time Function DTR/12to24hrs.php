



<!-- DAY1 -->
<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}


$('#inam1').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam1').val(value);
            document.getElementById("inam1").value = value;
        }
          
        })
        .keydown();
       
$('#outam1').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam1').val(value);
            document.getElementById("outam1").value = value;
        }
        })
        .keydown();
    

$('#inpm1').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm1').val(value);
            document.getElementById("inpm1").value = value;
        }
        })
        .keydown();


$('#inot1').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot1').val(value);
            document.getElementById("inot1").value = value;
        }
        })
        .keydown();

$('#outpm1').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm1').val(value);
            document.getElementById("outpm1").value = value;
        }
        })
        .keydown();

$('#outot1').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot1').val(value);
            document.getElementById("outot1").value = value;
        }
        })
        .keydown();

$('#opening1').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening1').val(value);
            document.getElementById("opening1").value = value;
        }
        })
        .keydown();

$('#closing1').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing1').val(value);
            document.getElementById("closing1").value = value;
        }
        })
        .keydown();
</script>


<!-- DAY 2 -->
<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam2').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam2').val(value);
            document.getElementById("inam2").value = value;
        }
          
        })
        .keydown();


$('#outam2').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam2').val(value);
            document.getElementById("outam2").value = value;
        }
        })
        .keydown();


$('#inpm2').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm2').val(value);
            document.getElementById("inpm2").value = value;
        }
        })
        .keydown();


$('#inot2').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot2').val(value);
            document.getElementById("inot2").value = value;
        }
        })
        .keydown();

$('#outpm2').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm2').val(value);
            document.getElementById("outpm2").value = value;
        }
        })
        .keydown();

$('#outot2').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot2').val(value);
            document.getElementById("outot2").value = value;
        }
        })
        .keydown();

$('#opening2').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening2').val(value);
            document.getElementById("opening2").value = value;
        }
        })
        .keydown();

$('#closing2').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing2').val(value);
            document.getElementById("closing2").value = value;
        }
        })
        .keydown();
</script>

<!-- DAY 3 -->
<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam3').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam3').val(value);
            document.getElementById("inam3").value = value;
        }
          
        })
        .keydown();


$('#outam3').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam3').val(value);
            document.getElementById("outam3").value = value;
        }
        })
        .keydown();


$('#inpm3').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm3').val(value);
            document.getElementById("inpm3").value = value;
        }
        })
        .keydown();


$('#inot3').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot3').val(value);
            document.getElementById("inot3").value = value;
        }
        })
        .keydown();

$('#outpm3').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm3').val(value);
            document.getElementById("outpm3").value = value;
        }
        })
        .keydown();

$('#outot3').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot3').val(value);
            document.getElementById("outot3").value = value;
        }
        })
        .keydown();

$('#opening3').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening3').val(value);
            document.getElementById("opening3").value = value;
        }
        })
        .keydown();

$('#closing3').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing3').val(value);
            document.getElementById("closing3").value = value;
        }
        })
        .keydown();
</script>


<!-- DAY 4 -->
<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam4').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam4').val(value);
            document.getElementById("inam4").value = value;
        }
          
        })
        .keydown();


$('#outam4').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam4').val(value);
            document.getElementById("outam4").value = value;
        }
        })
        .keydown();


$('#inpm4').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm4').val(value);
            document.getElementById("inpm4").value = value;
        }
        })
        .keydown();


$('#inot4').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot4').val(value);
            document.getElementById("inot4").value = value;
        }
        })
        .keydown();

$('#outpm4').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm4').val(value);
            document.getElementById("outpm4").value = value;
        }
        })
        .keydown();

$('#outot4').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot4').val(value);
            document.getElementById("outot4").value = value;
        }
        })
        .keydown();

$('#opening4').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening4').val(value);
            document.getElementById("opening4").value = value;
        }
        })
        .keydown();

$('#closing4').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing4').val(value);
            document.getElementById("closing4").value = value;
        }
        })
        .keydown();
</script>

<!-- DAY 5 -->
<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam5').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam5').val(value);
            document.getElementById("inam5").value = value;
        }
          
        })
        .keydown();


$('#outam5').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam5').val(value);
            document.getElementById("outam5").value = value;
        }
        })
        .keydown();


$('#inpm5').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm5').val(value);
            document.getElementById("inpm5").value = value;
        }
        })
        .keydown();


$('#inot5').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot5').val(value);
            document.getElementById("inot5").value = value;
        }
        })
        .keydown();

$('#outpm5').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm5').val(value);
            document.getElementById("outpm5").value = value;
        }
        })
        .keydown();

$('#outot5').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot5').val(value);
            document.getElementById("outot5").value = value;
        }
        })
        .keydown();

$('#opening5').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening5').val(value);
            document.getElementById("opening5").value = value;
        }
        })
        .keydown();

$('#closing5').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing5').val(value);
            document.getElementById("closing5").value = value;
        }
        })
        .keydown();
</script>

<!-- DAY 6 -->
<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam6').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam6').val(value);
            document.getElementById("inam6").value = value;
        }
          
        })
        .keydown();


$('#outam6').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam6').val(value);
            document.getElementById("outam6").value = value;
        }
        })
        .keydown();


$('#inpm6').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm6').val(value);
            document.getElementById("inpm6").value = value;
        }
        })
        .keydown();


$('#inot6').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot6').val(value);
            document.getElementById("inot6").value = value;
        }
        })
        .keydown();

$('#outpm6').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm6').val(value);
            document.getElementById("outpm6").value = value;
        }
        })
        .keydown();

$('#outot6').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot6').val(value);
            document.getElementById("outot6").value = value;
        }
        })
        .keydown();

$('#opening6').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening6').val(value);
            document.getElementById("opening6").value = value;
        }
        })
        .keydown();

$('#closing6').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing6').val(value);
            document.getElementById("closing6").value = value;
        }
        })
        .keydown();
</script>

<!-- DAY 7 -->
<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam7').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam7').val(value);
            document.getElementById("inam7").value = value;
        }
          
        })
        .keydown();


$('#outam7').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam7').val(value);
            document.getElementById("outam7").value = value;
        }
        })
        .keydown();


$('#inpm7').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm7').val(value);
            document.getElementById("inpm7").value = value;
        }
        })
        .keydown();


$('#inot7').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot7').val(value);
            document.getElementById("inot7").value = value;
        }
        })
        .keydown();

$('#outpm7').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm7').val(value);
            document.getElementById("outpm7").value = value;
        }
        })
        .keydown();

$('#outot7').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot7').val(value);
            document.getElementById("outot7").value = value;
        }
        })
        .keydown();

$('#opening7').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening7').val(value);
            document.getElementById("opening7").value = value;
        }
        })
        .keydown();

$('#closing7').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing7').val(value);
            document.getElementById("closing7").value = value;
        }
        })
        .keydown();
</script>

<!-- DAY 8 -->
<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam8').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam8').val(value);
            document.getElementById("inam8").value = value;
        }
          
        })
        .keydown();


$('#outam8').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam8').val(value);
            document.getElementById("outam8").value = value;
        }
        })
        .keydown();


$('#inpm8').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm8').val(value);
            document.getElementById("inpm8").value = value;
        }
        })
        .keydown();


$('#inot8').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot8').val(value);
            document.getElementById("inot8").value = value;
        }
        })
        .keydown();

$('#outpm8').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm8').val(value);
            document.getElementById("outpm8").value = value;
        }
        })
        .keydown();

$('#outot8').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot8').val(value);
            document.getElementById("outot8").value = value;
        }
        })
        .keydown();

$('#opening8').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening8').val(value);
            document.getElementById("opening8").value = value;
        }
        })
        .keydown();

$('#closing8').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing8').val(value);
            document.getElementById("closing8").value = value;
        }
        })
        .keydown();
</script>

<!-- DAY 9 -->
<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam9').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam9').val(value);
            document.getElementById("inam9").value = value;
        }
          
        })
        .keydown();


$('#outam9').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam9').val(value);
            document.getElementById("outam9").value = value;
        }
        })
        .keydown();


$('#inpm9').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm9').val(value);
            document.getElementById("inpm9").value = value;
        }
        })
        .keydown();


$('#inot9').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot9').val(value);
            document.getElementById("inot9").value = value;
        }
        })
        .keydown();

$('#outpm9').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm9').val(value);
            document.getElementById("outpm9").value = value;
        }
        })
        .keydown();

$('#outot9').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot9').val(value);
            document.getElementById("outot9").value = value;
        }
        })
        .keydown();

$('#opening9').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening9').val(value);
            document.getElementById("opening9").value = value;
        }
        })
        .keydown();

$('#closing9').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing9').val(value);
            document.getElementById("closing9").value = value;
        }
        })
        .keydown();
</script>

<!-- DAY 10 -->
<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam10').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam10').val(value);
            document.getElementById("inam10").value = value;
        }
          
        })
        .keydown();


$('#outam10').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam10').val(value);
            document.getElementById("outam10").value = value;
        }
        })
        .keydown();


$('#inpm10').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm10').val(value);
            document.getElementById("inpm10").value = value;
        }
        })
        .keydown();


$('#inot10').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot10').val(value);
            document.getElementById("inot10").value = value;
        }
        })
        .keydown();

$('#outpm10').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm10').val(value);
            document.getElementById("outpm10").value = value;
        }
        })
        .keydown();

$('#outot10').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot10').val(value);
            document.getElementById("outot10").value = value;
        }
        })
        .keydown();

$('#opening10').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening10').val(value);
            document.getElementById("opening10").value = value;
        }
        })
        .keydown();

$('#closing10').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing10').val(value);
            document.getElementById("closing10").value = value;
        }
        })
        .keydown();
</script>

<!-- DAY 11 -->

<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam11').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam11').val(value);
            document.getElementById("inam11").value = value;
        }
          
        })
        .keydown();


$('#outam11').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam11').val(value);
            document.getElementById("outam11").value = value;
        }
        })
        .keydown();


$('#inpm11').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm11').val(value);
            document.getElementById("inpm11").value = value;
        }
        })
        .keydown();


$('#inot11').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot11').val(value);
            document.getElementById("inot11").value = value;
        }
        })
        .keydown();

$('#outpm11').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm11').val(value);
            document.getElementById("outpm11").value = value;
        }
        })
        .keydown();

$('#outot11').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot11').val(value);
            document.getElementById("outot11").value = value;
        }
        })
        .keydown();

$('#opening11').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening11').val(value);
            document.getElementById("opening11").value = value;
        }
        })
        .keydown();

$('#closing11').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing11').val(value);
            document.getElementById("closing11").value = value;
        }
        })
        .keydown();
</script>

<!-- DAY 12 -->

<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam12').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam12').val(value);
            document.getElementById("inam12").value = value;
        }
          
        })
        .keydown();


$('#outam12').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam12').val(value);
            document.getElementById("outam12").value = value;
        }
        })
        .keydown();


$('#inpm12').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm12').val(value);
            document.getElementById("inpm12").value = value;
        }
        })
        .keydown();


$('#inot12').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot12').val(value);
            document.getElementById("inot12").value = value;
        }
        })
        .keydown();

$('#outpm12').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm12').val(value);
            document.getElementById("outpm12").value = value;
        }
        })
        .keydown();

$('#outot12').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot12').val(value);
            document.getElementById("outot12").value = value;
        }
        })
        .keydown();

$('#opening12').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening12').val(value);
            document.getElementById("opening12").value = value;
        }
        })
        .keydown();

$('#closing12').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing12').val(value);
            document.getElementById("closing12").value = value;
        }
        })
        .keydown();
</script>

<!-- DAY 13 -->
<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam13').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam13').val(value);
            document.getElementById("inam13").value = value;
        }
          
        })
        .keydown();


$('#outam13').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam13').val(value);
            document.getElementById("outam13").value = value;
        }
        })
        .keydown();


$('#inpm13').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm13').val(value);
            document.getElementById("inpm13").value = value;
        }
        })
        .keydown();


$('#inot13').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot13').val(value);
            document.getElementById("inot13").value = value;
        }
        })
        .keydown();

$('#outpm13').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm13').val(value);
            document.getElementById("outpm13").value = value;
        }
        })
        .keydown();

$('#outot13').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot13').val(value);
            document.getElementById("outot13").value = value;
        }
        })
        .keydown();

$('#opening13').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening13').val(value);
            document.getElementById("opening13").value = value;
        }
        })
        .keydown();

$('#closing13').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing13').val(value);
            document.getElementById("closing13").value = value;
        }
        })
        .keydown();
</script>

<!-- DAY 14 -->
<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam14').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam14').val(value);
            document.getElementById("inam14").value = value;
        }
          
        })
        .keydown();


$('#outam14').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam14').val(value);
            document.getElementById("outam14").value = value;
        }
        })
        .keydown();


$('#inpm14').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm14').val(value);
            document.getElementById("inpm14").value = value;
        }
        })
        .keydown();


$('#inot14').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot14').val(value);
            document.getElementById("inot14").value = value;
        }
        })
        .keydown();

$('#outpm14').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm14').val(value);
            document.getElementById("outpm14").value = value;
        }
        })
        .keydown();

$('#outot14').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot14').val(value);
            document.getElementById("outot14").value = value;
        }
        })
        .keydown();

$('#opening14').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening14').val(value);
            document.getElementById("opening14").value = value;
        }
        })
        .keydown();

$('#closing14').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing14').val(value);
            document.getElementById("closing14").value = value;
        }
        })
        .keydown();
</script>

<!-- DAY 15 -->
<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam15').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam15').val(value);
            document.getElementById("inam15").value = value;
        }
          
        })
        .keydown();


$('#outam15').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam15').val(value);
            document.getElementById("outam15").value = value;
        }
        })
        .keydown();


$('#inpm15').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm15').val(value);
            document.getElementById("inpm15").value = value;
        }
        })
        .keydown();


$('#inot15').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot15').val(value);
            document.getElementById("inot15").value = value;
        }
        })
        .keydown();

$('#outpm15').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm15').val(value);
            document.getElementById("outpm15").value = value;
        }
        })
        .keydown();

$('#outot15').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot15').val(value);
            document.getElementById("outot15").value = value;
        }
        })
        .keydown();

$('#opening15').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening15').val(value);
            document.getElementById("opening15").value = value;
        }
        })
        .keydown();

$('#closing15').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing15').val(value);
            document.getElementById("closing15").value = value;
        }
        })
        .keydown();
</script>



<!-- DAY 16 -->
<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam16').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam16').val(value);
            document.getElementById("inam16").value = value;
        }
          
        })
        .keydown();


$('#outam16').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam16').val(value);
            document.getElementById("outam16").value = value;
        }
        })
        .keydown();


$('#inpm16').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm16').val(value);
            document.getElementById("inpm16").value = value;
        }
        })
        .keydown();


$('#inot16').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot16').val(value);
            document.getElementById("inot16").value = value;
        }
        })
        .keydown();

$('#outpm16').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm16').val(value);
            document.getElementById("outpm16").value = value;
        }
        })
        .keydown();

$('#outot16').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot16').val(value);
            document.getElementById("outot16").value = value;
        }
        })
        .keydown();

$('#opening16').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening16').val(value);
            document.getElementById("opening16").value = value;
        }
        })
        .keydown();

$('#closing16').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing16').val(value);
            document.getElementById("closing16").value = value;
        }
        })
        .keydown();
</script>


<!-- DAY 17 -->
<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam17').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam17').val(value);
            document.getElementById("inam17").value = value;
        }
          
        })
        .keydown();


$('#outam17').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam17').val(value);
            document.getElementById("outam17").value = value;
        }
        })
        .keydown();


$('#inpm17').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm17').val(value);
            document.getElementById("inpm17").value = value;
        }
        })
        .keydown();


$('#inot17').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot17').val(value);
            document.getElementById("inot17").value = value;
        }
        })
        .keydown();

$('#outpm17').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm17').val(value);
            document.getElementById("outpm17").value = value;
        }
        })
        .keydown();

$('#outot17').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot17').val(value);
            document.getElementById("outot17").value = value;
        }
        })
        .keydown();

$('#opening17').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening17').val(value);
            document.getElementById("opening17").value = value;
        }
        })
        .keydown();

$('#closing17').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing17').val(value);
            document.getElementById("closing17").value = value;
        }
        })
        .keydown();
</script>

<!-- DAY 18 -->
<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam18').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam18').val(value);
            document.getElementById("inam18").value = value;
        }
          
        })
        .keydown();


$('#outam18').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam18').val(value);
            document.getElementById("outam18").value = value;
        }
        })
        .keydown();


$('#inpm18').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm18').val(value);
            document.getElementById("inpm18").value = value;
        }
        })
        .keydown();


$('#inot18').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot18').val(value);
            document.getElementById("inot18").value = value;
        }
        })
        .keydown();

$('#outpm18').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm18').val(value);
            document.getElementById("outpm18").value = value;
        }
        })
        .keydown();

$('#outot18').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot18').val(value);
            document.getElementById("outot18").value = value;
        }
        })
        .keydown();

$('#opening18').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening18').val(value);
            document.getElementById("opening18").value = value;
        }
        })
        .keydown();

$('#closing18').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing18').val(value);
            document.getElementById("closing18").value = value;
        }
        })
        .keydown();
</script>

<!-- DAY 19 -->
<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam19').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam19').val(value);
            document.getElementById("inam19").value = value;
        }
          
        })
        .keydown();


$('#outam19').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam19').val(value);
            document.getElementById("outam19").value = value;
        }
        })
        .keydown();


$('#inpm19').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm19').val(value);
            document.getElementById("inpm19").value = value;
        }
        })
        .keydown();


$('#inot19').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot19').val(value);
            document.getElementById("inot19").value = value;
        }
        })
        .keydown();

$('#outpm19').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm19').val(value);
            document.getElementById("outpm19").value = value;
        }
        })
        .keydown();

$('#outot19').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot19').val(value);
            document.getElementById("outot19").value = value;
        }
        })
        .keydown();

$('#opening19').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening19').val(value);
            document.getElementById("opening19").value = value;
        }
        })
        .keydown();

$('#closing19').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing19').val(value);
            document.getElementById("closing19").value = value;
        }
        })
        .keydown();
</script>

<!-- DAY 20 -->

<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam20').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam20').val(value);
            document.getElementById("inam20").value = value;
        }
          
        })
        .keydown();


$('#outam20').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam20').val(value);
            document.getElementById("outam20").value = value;
        }
        })
        .keydown();


$('#inpm20').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm20').val(value);
            document.getElementById("inpm20").value = value;
        }
        })
        .keydown();


$('#inot20').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot20').val(value);
            document.getElementById("inot20").value = value;
        }
        })
        .keydown();

$('#outpm20').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm20').val(value);
            document.getElementById("outpm20").value = value;
        }
        })
        .keydown();

$('#outot20').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot20').val(value);
            document.getElementById("outot20").value = value;
        }
        })
        .keydown();

$('#opening20').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening20').val(value);
            document.getElementById("opening20").value = value;
        }
        })
        .keydown();

$('#closing20').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing20').val(value);
            document.getElementById("closing20").value = value;
        }
        })
        .keydown();
</script>

<!-- DAY 21 -->
<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam21').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam21').val(value);
            document.getElementById("inam21").value = value;
        }
          
        })
        .keydown();


$('#outam21').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam21').val(value);
            document.getElementById("outam21").value = value;
        }
        })
        .keydown();


$('#inpm21').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm21').val(value);
            document.getElementById("inpm21").value = value;
        }
        })
        .keydown();


$('#inot21').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot21').val(value);
            document.getElementById("inot21").value = value;
        }
        })
        .keydown();

$('#outpm21').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm21').val(value);
            document.getElementById("outpm21").value = value;
        }
        })
        .keydown();

$('#outot21').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot21').val(value);
            document.getElementById("outot21").value = value;
        }
        })
        .keydown();

$('#opening21').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening21').val(value);
            document.getElementById("opening21").value = value;
        }
        })
        .keydown();

$('#closing21').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing21').val(value);
            document.getElementById("closing21").value = value;
        }
        })
        .keydown();
</script>

<!-- DAY 22 -->
<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam22').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam22').val(value);
            document.getElementById("inam22").value = value;
        }
          
        })
        .keydown();


$('#outam22').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam22').val(value);
            document.getElementById("outam22").value = value;
        }
        })
        .keydown();


$('#inpm22').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm22').val(value);
            document.getElementById("inpm22").value = value;
        }
        })
        .keydown();


$('#inot22').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot22').val(value);
            document.getElementById("inot22").value = value;
        }
        })
        .keydown();

$('#outpm22').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm22').val(value);
            document.getElementById("outpm22").value = value;
        }
        })
        .keydown();

$('#outot22').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot22').val(value);
            document.getElementById("outot22").value = value;
        }
        })
        .keydown();

$('#opening22').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening22').val(value);
            document.getElementById("opening22").value = value;
        }
        })
        .keydown();

$('#closing22').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing22').val(value);
            document.getElementById("closing22").value = value;
        }
        })
        .keydown();
</script>

<!-- DAY 23 -->
<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam23').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam23').val(value);
            document.getElementById("inam23").value = value;
        }
          
        })
        .keydown();


$('#outam23').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam23').val(value);
            document.getElementById("outam23").value = value;
        }
        })
        .keydown();


$('#inpm23').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm23').val(value);
            document.getElementById("inpm23").value = value;
        }
        })
        .keydown();


$('#inot23').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot23').val(value);
            document.getElementById("inot23").value = value;
        }
        })
        .keydown();

$('#outpm23').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm23').val(value);
            document.getElementById("outpm23").value = value;
        }
        })
        .keydown();

$('#outot23').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot23').val(value);
            document.getElementById("outot23").value = value;
        }
        })
        .keydown();

$('#opening23').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening23').val(value);
            document.getElementById("opening23").value = value;
        }
        })
        .keydown();

$('#closing23').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing23').val(value);
            document.getElementById("closing23").value = value;
        }
        })
        .keydown();
</script>

<!-- DAY 24 -->
<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam24').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam24').val(value);
            document.getElementById("inam24").value = value;
        }
          
        })
        .keydown();


$('#outam24').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam24').val(value);
            document.getElementById("outam24").value = value;
        }
        })
        .keydown();


$('#inpm24').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm24').val(value);
            document.getElementById("inpm24").value = value;
        }
        })
        .keydown();


$('#inot24').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot24').val(value);
            document.getElementById("inot24").value = value;
        }
        })
        .keydown();

$('#outpm24').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm24').val(value);
            document.getElementById("outpm24").value = value;
        }
        })
        .keydown();

$('#outot24').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot24').val(value);
            document.getElementById("outot24").value = value;
        }
        })
        .keydown();

$('#opening24').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening24').val(value);
            document.getElementById("opening24").value = value;
        }
        })
        .keydown();

$('#closing24').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing24').val(value);
            document.getElementById("closing24").value = value;
        }
        })
        .keydown();
</script>

<!-- DAY 25 -->
<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam25').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam25').val(value);
            document.getElementById("inam25").value = value;
        }
          
        })
        .keydown();


$('#outam25').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam25').val(value);
            document.getElementById("outam25").value = value;
        }
        })
        .keydown();


$('#inpm25').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm25').val(value);
            document.getElementById("inpm25").value = value;
        }
        })
        .keydown();


$('#inot25').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot25').val(value);
            document.getElementById("inot25").value = value;
        }
        })
        .keydown();

$('#outpm25').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm25').val(value);
            document.getElementById("outpm25").value = value;
        }
        })
        .keydown();

$('#outot25').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot25').val(value);
            document.getElementById("outot25").value = value;
        }
        })
        .keydown();

$('#opening25').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening25').val(value);
            document.getElementById("opening25").value = value;
        }
        })
        .keydown();

$('#closing25').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing25').val(value);
            document.getElementById("closing25").value = value;
        }
        })
        .keydown();
</script>

<!-- DAY 26 -->
<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam26').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam26').val(value);
            document.getElementById("inam26").value = value;
        }
          
        })
        .keydown();


$('#outam26').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam26').val(value);
            document.getElementById("outam26").value = value;
        }
        })
        .keydown();


$('#inpm26').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm26').val(value);
            document.getElementById("inpm26").value = value;
        }
        })
        .keydown();


$('#inot26').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot26').val(value);
            document.getElementById("inot26").value = value;
        }
        })
        .keydown();

$('#outpm26').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm26').val(value);
            document.getElementById("outpm26").value = value;
        }
        })
        .keydown();

$('#outot26').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot26').val(value);
            document.getElementById("outot26").value = value;
        }
        })
        .keydown();

$('#opening26').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening26').val(value);
            document.getElementById("opening26").value = value;
        }
        })
        .keydown();

$('#closing26').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing26').val(value);
            document.getElementById("closing26").value = value;
        }
        })
        .keydown();
</script>

<!-- DAY 27 -->
<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam27').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam27').val(value);
            document.getElementById("inam27").value = value;
        }
          
        })
        .keydown();


$('#outam27').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam27').val(value);
            document.getElementById("outam27").value = value;
        }
        })
        .keydown();


$('#inpm27').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm27').val(value);
            document.getElementById("inpm27").value = value;
        }
        })
        .keydown();


$('#inot27').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot27').val(value);
            document.getElementById("inot27").value = value;
        }
        })
        .keydown();

$('#outpm27').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm27').val(value);
            document.getElementById("outpm27").value = value;
        }
        })
        .keydown();

$('#outot27').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot27').val(value);
            document.getElementById("outot27").value = value;
        }
        })
        .keydown();

$('#opening27').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening27').val(value);
            document.getElementById("opening27").value = value;
        }
        })
        .keydown();

$('#closing27').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing27').val(value);
            document.getElementById("closing27").value = value;
        }
        })
        .keydown();
</script>

<!-- DAY 28 -->
<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam28').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam28').val(value);
            document.getElementById("inam28").value = value;
        }
          
        })
        .keydown();


$('#outam28').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam28').val(value);
            document.getElementById("outam28").value = value;
        }
        })
        .keydown();


$('#inpm28').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm28').val(value);
            document.getElementById("inpm28").value = value;
        }
        })
        .keydown();


$('#inot28').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot28').val(value);
            document.getElementById("inot28").value = value;
        }
        })
        .keydown();

$('#outpm28').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm28').val(value);
            document.getElementById("outpm28").value = value;
        }
        })
        .keydown();

$('#outot28').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot28').val(value);
            document.getElementById("outot28").value = value;
        }
        })
        .keydown();

$('#opening28').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening28').val(value);
            document.getElementById("opening28").value = value;
        }
        })
        .keydown();

$('#closing28').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing28').val(value);
            document.getElementById("closing28").value = value;
        }
        })
        .keydown();
</script>

<!-- DAY 29 -->
<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam29').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam29').val(value);
            document.getElementById("inam29").value = value;
        }
          
        })
        .keydown();


$('#outam29').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam29').val(value);
            document.getElementById("outam29").value = value;
        }
        })
        .keydown();


$('#inpm29').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm29').val(value);
            document.getElementById("inpm29").value = value;
        }
        })
        .keydown();


$('#inot29').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot29').val(value);
            document.getElementById("inot29").value = value;
        }
        })
        .keydown();

$('#outpm29').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm29').val(value);
            document.getElementById("outpm29").value = value;
        }
        })
        .keydown();

$('#outot29').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot29').val(value);
            document.getElementById("outot29").value = value;
        }
        })
        .keydown();

$('#opening29').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening29').val(value);
            document.getElementById("opening29").value = value;
        }
        })
        .keydown();

$('#closing29').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing29').val(value);
            document.getElementById("closing29").value = value;
        }
        })
        .keydown();
</script>

<!-- DAY 30 -->
<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam30').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam30').val(value);
            document.getElementById("inam30").value = value;
        }
          
        })
        .keydown();


$('#outam30').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam30').val(value);
            document.getElementById("outam30").value = value;
        }
        })
        .keydown();


$('#inpm30').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm30').val(value);
            document.getElementById("inpm30").value = value;
        }
        })
        .keydown();


$('#inot30').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot30').val(value);
            document.getElementById("inot30").value = value;
        }
        })
        .keydown();

$('#outpm30').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm30').val(value);
            document.getElementById("outpm30").value = value;
        }
        })
        .keydown();

$('#outot30').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot30').val(value);
            document.getElementById("outot30").value = value;
        }
        })
        .keydown();

$('#opening30').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening30').val(value);
            document.getElementById("opening30").value = value;
        }
        })
        .keydown();

$('#closing30').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing30').val(value);
            document.getElementById("closing30").value = value;
        }
        })
        .keydown();
</script>

<!-- DAY 31 -->
<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam31').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam31').val(value);
            document.getElementById("inam31").value = value;
        }
          
        })
        .keydown();


$('#outam31').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam31').val(value);
            document.getElementById("outam31").value = value;
        }
        })
        .keydown();


$('#inpm31').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm311').val(value);
            document.getElementById("inpm31").value = value;
        }
        })
        .keydown();


$('#inot31').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot31').val(value);
            document.getElementById("inot31").value = value;
        }
        })
        .keydown();

$('#outpm31').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm31').val(value);
            document.getElementById("outpm31").value = value;
        }
        })
        .keydown();

$('#outot31').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot31').val(value);
            document.getElementById("outot31").value = value;
        }
        })
        .keydown();

$('#opening31').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening31').val(value);
            document.getElementById("opening31").value = value;
        }
        })
        .keydown();

$('#closing31').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing31').val(value);
            document.getElementById("closing31").value = value;
        }
        })
        .keydown();
</script>

<!-- DAY 32 -->
<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam32').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam32').val(value);
            document.getElementById("inam32").value = value;
        }
          
        })
        .keydown();


$('#outam32').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam32').val(value);
            document.getElementById("outam32").value = value;
        }
        })
        .keydown();


$('#inpm32').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm32').val(value);
            document.getElementById("inpm32").value = value;
        }
        })
        .keydown();


$('#inot32').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot32').val(value);
            document.getElementById("inot32").value = value;
        }
        })
        .keydown();

$('#outpm32').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm32').val(value);
            document.getElementById("outpm32").value = value;
        }
        })
        .keydown();

$('#outot32').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot32').val(value);
            document.getElementById("outot322").value = value;
        }
        })
        .keydown();

$('#opening32').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening32').val(value);
            document.getElementById("opening32").value = value;
        }
        })
        .keydown();

$('#closing32').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing32').val(value);
            document.getElementById("closing32").value = value;
        }
        })
        .keydown();
</script>

<!-- DAY 33 -->
<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam33').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam33').val(value);
            document.getElementById("inam33").value = value;
        }
          
        })
        .keydown();


$('#outam33').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam33').val(value);
            document.getElementById("outam33").value = value;
        }
        })
        .keydown();


$('#inpm33').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm33').val(value);
            document.getElementById("inpm33").value = value;
        }
        })
        .keydown();


$('#inot33').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot33').val(value);
            document.getElementById("inot33").value = value;
        }
        })
        .keydown();

$('#outpm33').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm33').val(value);
            document.getElementById("outpm33").value = value;
        }
        })
        .keydown();

$('#outot33').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot33').val(value);
            document.getElementById("outot33").value = value;
        }
        })
        .keydown();

$('#opening33').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening33').val(value);
            document.getElementById("opening33").value = value;
        }
        })
        .keydown();

$('#closing33').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing33').val(value);
            document.getElementById("closing33").value = value;
        }
        })
        .keydown();
</script>

<!-- DAY 34 -->
<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam34').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam34').val(value);
            document.getElementById("inam34").value = value;
        }
          
        })
        .keydown();


$('#outam34').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam34').val(value);
            document.getElementById("outam34").value = value;
        }
        })
        .keydown();


$('#inpm34').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm34').val(value);
            document.getElementById("inpm34").value = value;
        }
        })
        .keydown();


$('#inot34').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot34').val(value);
            document.getElementById("inot34").value = value;
        }
        })
        .keydown();

$('#outpm34').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm34').val(value);
            document.getElementById("outpm34").value = value;
        }
        })
        .keydown();

$('#outot34').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot34').val(value);
            document.getElementById("outot34").value = value;
        }
        })
        .keydown();

$('#opening34').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening34').val(value);
            document.getElementById("opening34").value = value;
        }
        })
        .keydown();

$('#closing34').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing34').val(value);
            document.getElementById("closing34").value = value;
        }
        })
        .keydown();
</script>


<!-- DAY 35 -->
<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam35').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam35').val(value);
            document.getElementById("inam35").value = value;
        }
          
        })
        .keydown();


$('#outam35').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam35').val(value);
            document.getElementById("outam35").value = value;
        }
        })
        .keydown();


$('#inpm35').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm35').val(value);
            document.getElementById("inpm35").value = value;
        }
        })
        .keydown();


$('#inot35').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot35').val(value);
            document.getElementById("inot35").value = value;
        }
        })
        .keydown();

$('#outpm35').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm35').val(value);
            document.getElementById("outpm35").value = value;
        }
        })
        .keydown();

$('#outot35').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot35').val(value);
            document.getElementById("outot35").value = value;
        }
        })
        .keydown();

$('#opening35').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening35').val(value);
            document.getElementById("opening35").value = value;
        }
        })
        .keydown();

$('#closing35').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing35').val(value);
            document.getElementById("closing35").value = value;
        }
        })
        .keydown();
</script>


<!-- DAY 36 -->
<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam36').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam36').val(value);
            document.getElementById("inam36").value = value;
        }
          
        })
        .keydown();


$('#outam36').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam36').val(value);
            document.getElementById("outam36").value = value;
        }
        })
        .keydown();


$('#inpm36').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm36').val(value);
            document.getElementById("inpm36").value = value;
        }
        })
        .keydown();


$('#inot36').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot36').val(value);
            document.getElementById("inot36").value = value;
        }
        })
        .keydown();

$('#outpm36').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm36').val(value);
            document.getElementById("outpm36").value = value;
        }
        })
        .keydown();

$('#outot36').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot36').val(value);
            document.getElementById("outot36").value = value;
        }
        })
        .keydown();

$('#opening36').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening36').val(value);
            document.getElementById("opening36").value = value;
        }
        })
        .keydown();

$('#closing36').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing36').val(value);
            document.getElementById("closing36").value = value;
        }
        })
        .keydown();
</script>

<!-- DAY 37 -->
<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam37').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam37').val(value);
            document.getElementById("inam37").value = value;
        }
          
        })
        .keydown();


$('#outam37').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam37').val(value);
            document.getElementById("outam37").value = value;
        }
        })
        .keydown();


$('#inpm37').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm37').val(value);
            document.getElementById("inpm37").value = value;
        }
        })
        .keydown();


$('#inot37').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot37').val(value);
            document.getElementById("inot37").value = value;
        }
        })
        .keydown();

$('#outpm37').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm37').val(value);
            document.getElementById("outpm37").value = value;
        }
        })
        .keydown();

$('#outot37').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot37').val(value);
            document.getElementById("outot37").value = value;
        }
        })
        .keydown();

$('#opening37').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening37').val(value);
            document.getElementById("opening37").value = value;
        }
        })
        .keydown();

$('#closing37').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing37').val(value);
            document.getElementById("closing37").value = value;
        }
        })
        .keydown();
</script>

<!-- DAY 38 -->
<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam38').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam38').val(value);
            document.getElementById("inam38").value = value;
        }
          
        })
        .keydown();


$('#outam38').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam38').val(value);
            document.getElementById("outam38").value = value;
        }
        })
        .keydown();


$('#inpm38').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm38').val(value);
            document.getElementById("inpm38").value = value;
        }
        })
        .keydown();


$('#inot38').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot38').val(value);
            document.getElementById("inot38").value = value;
        }
        })
        .keydown();

$('#outpm38').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm38').val(value);
            document.getElementById("outpm38").value = value;
        }
        })
        .keydown();

$('#outot38').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot38').val(value);
            document.getElementById("outot38").value = value;
        }
        })
        .keydown();

$('#opening38').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening38').val(value);
            document.getElementById("opening38").value = value;
        }
        })
        .keydown();

$('#closing38').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing38').val(value);
            document.getElementById("closing38").value = value;
        }
        })
        .keydown();
</script>

<!-- DAY 39 -->
<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam39').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam39').val(value);
            document.getElementById("inam39").value = value;
        }
          
        })
        .keydown();


$('#outam39').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam39').val(value);
            document.getElementById("outam39").value = value;
        }
        })
        .keydown();


$('#inpm39').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm39').val(value);
            document.getElementById("inpm39").value = value;
        }
        })
        .keydown();


$('#inot39').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot39').val(value);
            document.getElementById("inot39").value = value;
        }
        })
        .keydown();

$('#outpm39').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm39').val(value);
            document.getElementById("outpm39").value = value;
        }
        })
        .keydown();

$('#outot39').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot39').val(value);
            document.getElementById("outot39").value = value;
        }
        })
        .keydown();

$('#opening39').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening39').val(value);
            document.getElementById("opening39").value = value;
        }
        })
        .keydown();

$('#closing39').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing39').val(value);
            document.getElementById("closing39").value = value;
        }
        })
        .keydown();
</script>

<!-- DAY 40 -->
<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam40').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam40').val(value);
            document.getElementById("inam40").value = value;
        }
          
        })
        .keydown();


$('#outam40').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam40').val(value);
            document.getElementById("outam40").value = value;
        }
        })
        .keydown();


$('#inpm40').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm40').val(value);
            document.getElementById("inpm40").value = value;
        }
        })
        .keydown();


$('#inot40').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot40').val(value);
            document.getElementById("inot40").value = value;
        }
        })
        .keydown();

$('#outpm40').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm40').val(value);
            document.getElementById("outpm40").value = value;
        }
        })
        .keydown();

$('#outot40').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot40').val(value);
            document.getElementById("outot40").value = value;
        }
        })
        .keydown();

$('#opening40').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening40').val(value);
            document.getElementById("opening40").value = value;
        }
        })
        .keydown();

$('#closing40').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing40').val(value);
            document.getElementById("closing40").value = value;
        }
        })
        .keydown();
</script>

<!-- DAY 41 -->
<script>
function convertTo24Hour(time) {
    var hours = parseInt(time.substr(0, 2));
    if(time.indexOf('am') != -1 && hours == 12) {
        time = time.replace('12', '0');
    }
    if(time.indexOf('pm')  != -1 && hours < 12) {
        time = time.replace(hours, (hours + 12));
    }
    if(hours == 24){
        time = time.replace('24', '0');
    }
    return time.replace(/(am|pm)/, '');
}

$('#inam41').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inam41').val(value);
            document.getElementById("inam41").value = value;
        }
          
        })
        .keydown();


$('#outam41').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outam41').val(value);
            document.getElementById("outam41").value = value;
        }
        })
        .keydown();


$('#inpm41').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inpm41').val(value);
            document.getElementById("inpm41").value = value;
        }
        })
        .keydown();


$('#inot41').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#inot41').val(value);
            document.getElementById("inot41").value = value;
        }
        })
        .keydown();

$('#outpm41').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outpm41').val(value);
            document.getElementById("outpm41").value = value;
        }
        })
        .keydown();

$('#outot41').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#outot41').val(value);
            document.getElementById("outot41").value = value;
        }
        })
        .keydown();

$('#opening41').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#opening41').val(value);
            document.getElementById("opening41").value = value;
        }
        })
        .keydown();

$('#closing41').keydown(function (e){
        var value = convertTo24Hour($(this).val().toLowerCase());
        if(e.which == 13){
            $('#closing41').val(value);
            document.getElementById("closing41").value = value;
        }
        })
        .keydown();
</script>

