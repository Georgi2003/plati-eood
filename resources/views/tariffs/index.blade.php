<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			Управление на списък със застрахователни компании
		</h2>
	</x-slot>

	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>

	<div class="container">
		<div style=" margin: 50px;">
			<div class="d-flex bd-highlight mb-4">
				<div class="p-2 w-100 bd-highlight"></div>
				<div class="p-2 flex-shrink-0 bd-highlight">
					<button class="btn btn-success" id="btn-add">
                        Добави
                    </button>
                    <div id="formAdd">
	                    <form method="post" action="/tariffs" enctype="multipart/form-data">
							@csrf
							<span style="color: red" id="spanFile">Не сте прикачили файл!</span>
							<br>

							<input type="file" id="file" accept=".csv" name="file" required>
							
							<input id="submit" type="submit" value="Качи файл">
						</form>
					</div>
                </div>
			</div>
			<table id="example" class="display nowrap" style="border:1px">
				<thead>
					<tr>
						<th>№</th>
					</tr>
				</thead>

				<tbody id="todos-list">
					@foreach($allInsuranceCompanyPrice as $insuranceCompanyPrice)
						<tr>
							<td>{{ $loop->iteration }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>

	<script>
		$(document).ready( function () {
			$("#formAdd").hide();
			$("#spanFile").hide();

			$("#btn-add").click(function(){
			   	$("#btn-add").hide();
			   	$("#formAdd").show();
			});
		
			$("#submit").click(function(){
				if($("#file").val() == ''){
					$("#spanFile").show().fadeOut(5000);
				}
			});

			$('#example').DataTable({
				rowReorder: {
					selector: 'td:nth-child(2)'
				},
				responsive: true
			});
		});
	</script>
	<br>
</x-app-layout>