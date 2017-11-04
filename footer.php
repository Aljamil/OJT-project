<!-- jQuery -->
<script src="../ojt/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../ojt/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../ojt/bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="../ojt/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="../ojt/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

<!-- Date Picker -->
<script src="../ojt/bower_components/bootstrap/dist/js/datepicker.js"> </script>
<!-- Time Picker -->
<script src="../ojt/bower_components/bootstrap/dist/js/bootstrap-timepicker.js"> </script>

<!-- Custom Theme JavaScript -->
<script src="../ojt/dist/js/sb-admin-2.js"></script>


<script>
	// Javascript to enable link to tab
	var url = document.location.toString();
	if (url.match('#')) {
		$('.nav-tabs a[href="#' + url.split('#')[1] + '"]').tab('show');
	} 

	// Change hash for page-reload
	$('.nav-tabs a').on('shown.bs.tab', function (e) {
		window.location.hash = e.target.hash;
	})
	
	<!-- Comment this part to enable right click -->

	/*$(function() {
		$(this).on("contextmenu", function(e) {
			e.preventDefault();
		});
	}); 
	*/
</script>

<script>  
    $('#month').datepicker({
        format: "mm",
        //altFormat: 'mm',
        viewMode: "months", 
        minViewMode: "months",
        autoclose: true
      });
    </script>

    <script>  
    $('#monthp').datepicker({
        format: "mm",
        //altFormat: 'mm',
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

	
<?php
	mysqli_close($connection); // Closing Connection
?>