$(document).ready( function () {
	$('#unassignedRquest').DataTable({
		dom: 'Bfrtip',
		buttons: [
		'copy',
		{
			extend: 'excel',
			messageTop: 'Неназначени заявки за Гражданска отговорност'
		},
		{
			extend: 'pdf',
			messageBottom: null
		},
		{
			extend: 'print',
			messageTop: function () {
				return '<u>Неназначени заявки</u> за <b><i>Гражданска отговорност</i></b>(Печат на оригинала)';
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
			messageTop: 'Обработени заявки за Гражданска отговорност'
		},
		{
			extend: 'pdf',
			messageBottom: null
		},
		{
			extend: 'print',
			messageTop: function () {
				return '<u>Обработени заявки</u> за <b><i>Гражданска отговорност</i></b>(Печат на оригинала)';
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
			messageTop: 'Завършени заявки за Гражданска отговорност'
		},
		{
			extend: 'pdf',
			messageBottom: null
		},
		{
			extend: 'print',
			messageTop: function () {
				return '<u>Завършени заявки</u> за <b><i>Гражданска отговорност</i></b>(Печат на оригинала)';
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
			messageTop: '<u>Архивирани заявки за Гражданска отговорност'
		},
		{
			extend: 'pdf',
			messageBottom: null
		},
		{
			extend: 'print',
			messageTop: function () {
				return '<u>Архивирани заявки</u> за <b><i>Гражданска отговорност</i></b>(Печат на оригинала)';
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
			messageTop: 'Всички заявки за Гражданска отговорност'
		},
		{
			extend: 'pdf',
			messageBottom: null
		},
		{
			extend: 'print',
			messageTop: function () {
				return '<u>Всички заявки</u> за <b><i>Гражданска отговорност</i></b>(Печат на оригинала)';
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
