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
});