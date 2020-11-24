$(document).ready( function () {
	$('#unassignedRquest').DataTable({
		dom: 'Bfrtip',
		buttons: [
		'copy',
		{
			extend: 'excel',
			messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
		},
		{
			extend: 'pdf',
			messageBottom: null
		},
		{
			extend: 'print',
			messageTop: function () {                   
				return 'Печат на оригинала';
			},
			messageBottom: null
		}],
		rowReorder: {
			selector: 'td:nth-child(2)'
		},
		responsive: true
	});

	$('#processedRquest').DataTable({
		dom: 'Bfrtip',
		buttons: [
		'copy',
		{
			extend: 'excel',
			messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
		},
		{
			extend: 'pdf',
			messageBottom: null
		},
		{
			extend: 'print',
			messageTop: function () {                   
				return 'Печат на оригинала';
			},
			messageBottom: null
		}],
		rowReorder: {
			selector: 'td:nth-child(2)'
		},
		responsive: true
	});

	$('#completedRquest').DataTable({
		dom: 'Bfrtip',
		buttons: [
		'copy',
		{
			extend: 'excel',
			messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
		},
		{
			extend: 'pdf',
			messageBottom: null
		},
		{
			extend: 'print',
			messageTop: function () {                   
				return 'Печат на оригинала';
			},
			messageBottom: null
		}],
		rowReorder: {
			selector: 'td:nth-child(2)'
		},
		responsive: true
	});

	$('#archivedRquest').DataTable({
		dom: 'Bfrtip',
		buttons: [
		'copy',
		{
			extend: 'excel',
			messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
		},
		{
			extend: 'pdf',
			messageBottom: null
		},
		{
			extend: 'print',
			messageTop: function () {                   
				return 'Печат на оригинала';
			},
			messageBottom: null
		}],
		rowReorder: {
			selector: 'td:nth-child(2)'
		},
		responsive: true
	});

	$('#allRequest').DataTable({
		dom: 'Bfrtip',
		buttons: [
		'copy',
		{
			extend: 'excel',
			messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
		},
		{
			extend: 'pdf',
			messageBottom: null
		},
		{
			extend: 'print',
			messageTop: function () {                   
				return 'Печат на оригинала';
			},
			messageBottom: null
		}],
		rowReorder: {
			selector: 'td:nth-child(2)'
		},
		responsive: true
	});
	
	$(document).ready(function() {
	    $('a[data-toggle="tab"]').on( 'shown.bs.tab', function (e) {
	        // var target = $(e.target).attr("href"); // activated tab
	        // alert (target);
	        $($.fn.dataTable.tables(true)).css('width', '100%');
	        $($.fn.dataTable.tables(true)).DataTable().columns.adjust().draw();
	    } ); 
	});  
});