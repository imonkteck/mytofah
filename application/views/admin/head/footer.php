</div>
<!-- contentpanel -->

</div>
<!-- mainpanel -->

</section>
<script src="<?php echo base_url();?>ui/lib/jquery/jquery.js"></script>
<script src="<?php echo base_url();?>ui/lib/jquery-ui/jquery-ui.js"></script>
<script src="<?php echo base_url();?>ui/lib/bootstrap/js/bootstrap.js"></script>
<script src="<?php echo base_url();?>ui/lib/select2/select2.js"></script>
<script src="<?php echo base_url();?>ui/lib/jquery-toggles/toggles.js"></script>
<script src="<?php echo base_url();?>ui/lib/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>ui/lib/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.js"></script>


<!--<script src="<?php echo base_url();?>ui/lib/wysihtml5x/wysihtml5x.js"></script>
<script src="<?php echo base_url();?>ui/lib/wysihtml5x/wysihtml5x-toolbar.js"></script>
<script src="<?php echo base_url();?>ui/lib/handlebars/handlebars.js"></script>-->

<script src="<?php echo base_url();?>ui/lib/summernote/summernote.js"></script>
<script src="<?php echo base_url();?>ui/lib/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.all.js"></script>


<script src="<?php echo base_url();?>ui/js/quirk.js"></script>


<?php /*?><script src="<?php echo base_url();?>ui/lib/morrisjs/morris.js"></script>
<script src="<?php echo base_url();?>ui/lib/raphael/raphael.js"></script><?php */?>
<!--<script src="<?php echo base_url();?>ui/lib/flot/jquery.flot.js"></script>
<script src="<?php echo base_url();?>ui/lib/flot/jquery.flot.resize.js"></script>
<script src="<?php echo base_url();?>ui/lib/flot-spline/jquery.flot.spline.js"></script>-->
<?php /*?><script src="<?php echo base_url();?>ui/lib/jquery-knob/jquery.knob.js"></script><?php */?>
<?php /*?><script src="<?php echo base_url();?>ui/js/quirk.js"></script>
<script src="<?php echo base_url();?>ui/js/dashboard.js"></script><?php */?>

<script>
$(document).ready(function() {
	

  'use strict';

  $('#dataTable1').DataTable();
  
  // Select2 Box
  
 // Select2 Box
   $('#select2').select2();

  var exRowTable = $('#exRowTable').DataTable({
    responsive: true,
    'fnDrawCallback': function(oSettings) {
      $('#exRowTable_paginate ul').addClass('pagination-active-success');
    },
    'ajax': 'ajax/objects.txt',
    'columns': [{
      'class': 'details-control',
      'orderable': false,
      'data': null,
      'defaultContent': ''
    },
    { 'data': 'name' },
    { 'data': 'position' },
    { 'data': 'office' },
    { 'data': 'start_date'},
    { 'data': 'salary' }
    ],
    'order': [[1, 'asc']]
  });

  // Add event listener for opening and closing details
  $('#exRowTable tbody').on('click', 'td.details-control', function () {
    var tr = $(this).closest('tr');
    var row = exRowTable.row( tr );

    if ( row.child.isShown() ) {
      // This row is already open - close it
      row.child.hide();
      tr.removeClass('shown');
    } else {
      // Open this row
      row.child( format(row.data()) ).show();
      tr.addClass('shown');
    }
  });

  function format (d) {
    // `d` is the original data object for the row
    return '<h4>'+d.name+'<small>'+d.position+'</small></h4>'+
    '<p class="nomargin">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>';
  }

  // Select2
 // $('select').select2({ minimumResultsForSearch: Infinity });
 
  // Summernote
  $('#summernote').summernote({
	  onKeyup: function(e) {
        $("#lawsContent").val($("#summernote").code());
      },
    height: 200,
	
  });
  
  
});
</script>
</body>
</html>