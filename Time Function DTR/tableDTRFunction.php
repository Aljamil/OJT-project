<script>
    $("#calendar").datepicker({  
        todayHighlight: true,
        autoclose: true
    }).datepicker('update', new Date());;
    </script>
    
    
    <script>  
    $('#month').datepicker({
        format: "mm",
        viewMode: "months", 
        minViewMode: "months",
        autoclose: true
      });
    </script>



<script>  
    $('#month').datepicker({
        format: "mm",
        viewMode: "months", 
        minViewMode: "months",
        autoclose: true
      });
    </script>

    <script>  
    $('#monthp').datepicker({
        format: "mm",
        viewMode: "months", 
        minViewMode: "months",
        autoclose: true
      });
    </script>

    <script>
    $('#year').datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
        autoclose: true
      });
    </script>

    <script>
    $('#yearp').datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
        autoclose: true
      });
    </script>


    <script>
        $('#date').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
             todayHighlight: true
    }).datepicker('update', new Date());;
    </script>

    <script type="text/javascript">
    $("#time").click(function(){
    $('#time').timepicker("open");
    });
    </script>

    <script>
        $('#dtr').DataTable({
                  select: true,
                  responsive: true,
                  bPaginate: false,
                  bFilter: false,
                  bInfo: false
        });
    </script>

<!--
    <script>

    function clearFields(){
        employid.value = " ";
        employe.value = " ";
        timeshift.value= " ";

        $("#dtr tbody tr").remove(); 

        $('#postb').attr('disabled', 'disabled')
        $('#refreshb').attr('disabled', 'disabled');
        $('#saveb').attr('disabled', 'disabled')
        $('#removeb').attr('disabled', 'disabled');
        $('#printb').attr('disabled', 'disabled')
        $('#refreshb').attr('disabled', 'disabled');
    }


    </script>
-->
    <script>
    function reLoad(){
        location.reload();
    }
    </script>

        <script >

    function inputEnable(){
        for(var i = 1; i < 42; i++){
            $('#inam' + i.toString()).prop('readonly',false);
            $('#outam' + i.toString()).prop('readonly',false);
            $('#inpm' + i.toString()).prop('readonly',false);
            $('#inot' + i.toString()).prop('readonly',false);
            $('#outpm' + i.toString()).prop('readonly',false);
            $('#outot' + i.toString()).prop('readonly',false);
            $('#opening' + i.toString()).prop('readonly',false);
            $('#closing' + i.toString()).prop('readonly',false);
            $('#ot' + i.toString()).prop('readonly',false);
            $('#shift' + i.toString()).prop('disabled',false);
        }

        $('#unpostb').attr('disabled', 'disabled');
        $('#postb').removeAttr('disabled')
        $('#refreshb').removeAttr('disabled');


    }

    </script>

    <script >

    function inputDisable(){
        for(var i = 1; i < 42; i++){
            $('#inam' + i.toString()).prop('readonly',true);
            $('#outam' + i.toString()).prop('readonly',true);
            $('#inpm' + i.toString()).prop('readonly',true);
            $('#inot' + i.toString()).prop('readonly',true);
            $('#outpm' + i.toString()).prop('readonly',true);
            $('#outot' + i.toString()).prop('readonly',true);
            $('#opening' + i.toString()).prop('readonly',true);
            $('#closing' + i.toString()).prop('readonly',true);
            $('#ot' + i.toString()).prop('readonly',true);
            $('#shift' + i.toString()).prop('disabled',true);
        }
        $('#unpostb').removeAttr('disabled');
        $('#postb').attr('disabled', 'disabled')
        $('#refreshb').attr('disabled', 'disabled');
    }

    </script>


    <script>

    $('#createDTR').click(function (){
        //$('#searchb').find(":submit").prop("disabled", true);
        $('#periodb').attr('disabled', 'disabled')
        $('#savebb').attr('disabled', 'disabled');
    });


/*
            function new() {
                $('#periodb').attr('disabled', 'disabled')
                $('#savebb').attr('disabled', 'disabled');
            }
            */
    </script>


    

     <script>
        $('#finding').DataTable({
                  select: true,
                  responsive: true,
        });
    </script>

     <script>
    $(document).ready(function() {
    var table = $('#dtr').DataTable();
 
    $('#dtr tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );
 
    $('#yestoRemove').click( function () {
        table.row('.selected').remove().draw( false );
    } );
    } );
    </script>


<script>
    $(document).on("keypress", ":input:not(textarea)", function(event) {
    if (event.keyCode == 13) {
        event.preventDefault();
    }
    });
</script>


<script>
$("#finding tr").click(function(){
   $(this).addClass('selected').siblings().removeClass('selected');    
   var value=$(this).find('td:nth-child(2)').html();
   var value1=$(this).find('td:nth-child(1)').html();
    document.getElementById("namej").value = value1 + ' ' + value;    
});
</script>

<script>
$("#finding tr").click(function(){
   $(this).addClass('selected').siblings().removeClass('selected');    
   var value=$(this).find('td:nth-child(1)').html();
    document.getElementById("idE").value = value;    
});
</script>


<script>
$('.inputs').keydown(function (e) {
         if (e.which === 13) {
             var index = $('.inputs').index(this) + 1;
             $('.inputs').eq(index).focus();
         }
     });
</script>


<script>
function edit() {
        var id = document.getElementByName('employid')[id].value;
        var employ = document.getElementByName('employe')[id].value;
        var timeshift = document.getElementByName('timeshift')[id].value;
        document.getElementById('employid').value = id;
        document.getElementById('employe').value = employ;
        document.getElementById('timeshift').value = timeshift;
    }
</script>
