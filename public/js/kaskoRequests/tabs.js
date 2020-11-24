$(document).ready( function () {
	$('#newRequests').DataTable({
		dom: 'Bfrtip',
		buttons: [
		'copy',
		{
			extend: 'excel',
			messageTop: 'Нови заявки за Каско'
		},
		{
			extend: 'pdf',
			messageBottom: null
		},
		{
			extend: 'print',
			messageTop: function () {
				return '<u>Нови заявки</u> за <b><i>Каско</i></b>(Печат на оригинала)';
			},
			messageBottom: null
		}],
		rowReorder: {
			selector: 'td:nth-child(2)'
		},
		responsive: true
	});

	$('#offerMadeRequests').DataTable({
		dom: 'Bfrtip',
		buttons: [
		'copy',
		{
			extend: 'excel',
			messageTop: 'Направена оферта- Каско'
		},
		{
			extend: 'pdf',
			messageBottom: null
		},
		{
			extend: 'print',
			messageTop: function () {
				return '<u>Направена оферта</u>- <b><i>Каско</i></b>(Печат на оригинала)';
			},
			messageBottom: null
		}],
		rowReorder: {
			selector: 'td:nth-child(2)'
		},
		responsive: true,
	});

	$('#dealMadeRequests').DataTable({
		dom: 'Bfrtip',
		buttons: [
		'copy',
		{
			extend: 'excel',
			messageTop: 'Сключена сделка- Каско'
		},
		{
			extend: 'pdf',
			messageBottom: null
		},
		{
			extend: 'print',
			messageTop: function () {
				return '<u>Сключена сделка</u>- <b><i>Каско</i></b>(Печат на оригинала)';
			},
			messageBottom: null
		}],
		rowReorder: {
			selector: 'td:nth-child(2)'
		},
		responsive: true
	});

	$('#archiveRequests').DataTable({
		dom: 'Bfrtip',
		buttons: [
		'copy',
		{
			extend: 'excel',
			messageTop: 'Архивирани- Каско'
		},
		{
			extend: 'pdf',
			messageBottom: null
		},
		{
			extend: 'print',
			messageTop: function () {
				return '<u>Архивирани</u>- <b><i>Каско</i></b>(Печат на оригинала)';
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
	        $($.fn.dataTable.tables( true )).css('width', '100%');
	        $($.fn.dataTable.tables( true )).DataTable().columns.adjust().draw();
	    } );
	});
});
