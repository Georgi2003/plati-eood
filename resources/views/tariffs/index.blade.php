<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			Тарифи
		</h2>
	</x-slot>

	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
	@include('links');

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

							<select id="insuranceCompany" name="insuranceCompany">
								<option value="0">Изберете застраховател</option>
								@foreach($allInsuranceCompany as $insuranceCompany)
								<option value="{{ $insuranceCompany->id }}">{{ $insuranceCompany->name }}</option>
								@endforeach
							</select>


							<input id="submit" type="submit" value="Качи файл">
						</form>
					</div>
				</div>
			</div>
			<table id="example" class="display nowrap" style="border:1px">
				<thead>
					<tr>
						<th>№</th>
						<th>Застрахователна компания</th>
						<th>Цена</th>
						<th>Брой вноски</th>
						<th>Вид МПС</th>
						<th>Мощност</th>
						<th>Обем на двигателя</th>
						<th>Регистрационен №</th>
						<th>Година на производство</th>
					</tr>
				</thead>

				<tbody id="todos-list">
					@foreach($allInsuranceCompanyPrice as $insuranceCompanyPrice)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{ $insuranceCompanyPrice->insuranceCompany->name }}</td>
						<td>{{ $insuranceCompanyPrice->price }}</td>
						<td>{{ $insuranceCompanyPrice->vehicle_type }}</td>
						<td>{{ $insuranceCompanyPrice->payments_count }}</td>
						<td>До {{ $insuranceCompanyPrice->kW }}kW ({{ $insuranceCompanyPrice->horse_power }}к. с.)</td>
						<td>{{ $insuranceCompanyPrice->volume }}</td>
						<td>{{ $insuranceCompanyPrice->vehicle_registration_code }}</td>
						<td>{{ $insuranceCompanyPrice->year_production }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>

		<script>
			$(document).ready( function () {
				$("#formAdd").hide();
				$("#spanFile").hide();
				$("#spanInsuranceCompany").hide();

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
					dom: 'Bfrtip',
					buttons: [
					'copy',
					{
						extend: 'excel',
						messageTop: 'Тарифи'
					},
					{
						extend: 'pdf',
						messageBottom: null
					},
					{
						extend: 'print',
						messageTop: function () {
							return '<b>Тарифи</b>(Печат на оригинала)';
						},
						messageBottom: null
					}
					],
					rowReorder: {
						selector: 'td:nth-child(2)'
					},
					responsive: true
				});
			});
		</script>
		<br>
	</x-app-layout>
