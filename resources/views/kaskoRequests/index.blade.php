<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			Управление на списък със застрахователни компании
		</h2>
	</x-slot>
	
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>

	<link rel="stylesheet" href="{{ asset('css/img.css') }}">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>

    <div class="container mt-3">
      <h2>Заявки за Каско</h2>
      <br>
      <!-- Nav tabs -->
      <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#new">Нови</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#offerMade">Направена оферта</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#dealMade">Сключена сделка</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#archive">Архив</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div id="new" class="container tab-pane active"><br>
            <h3>Нови заявки</h3>
            @include('kaskoRequests.tabs.new')
        </div>
        <div id="offerMade" class="container tab-pane fade"><br>
            <h3>Направена оферта</h3>
            @include('kaskoRequests.tabs.offerMade')
        </div>
        <div id="dealMade" class="container tab-pane fade"><br>
          <h3>Сключена сделка</h3>
          @include('kaskoRequests.tabs.dealMade')
      </div>
      <div id="archive" class="container tab-pane fade"><br>
          <h3>Архивирани</h3>
          @include('kaskoRequests.tabs.archive')
      </div>
  </div>
</div>

<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
</div>

<script src="{{ asset('js/img.js') }}"></script>

	<script>
		$(document).ready( function () {
			$('#newRquest').DataTable({
				rowReorder: {
					selector: 'td:nth-child(2)'
				},
				responsive: true
			});
			$('#offerMadeRquest').DataTable({
				rowReorder: {
					selector: 'td:nth-child(2)'
				},
				responsive: true
			});
			$('#dealMadeRquest').DataTable({
				rowReorder: {
					selector: 'td:nth-child(2)'
				},
				responsive: true
			});
			$('#archiveRquest').DataTable({
				rowReorder: {
					selector: 'td:nth-child(2)'
				},
				responsive: true
			});
		});
	</script>
	<br>
</x-app-layout>
