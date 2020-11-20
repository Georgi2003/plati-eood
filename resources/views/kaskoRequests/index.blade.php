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
    @include('kaskoRequests.tabs.table', [
    'tableName' => 'newRequests',
    'kaskoRequests' => $newKaskoRequests
    ])
</div>
<div id="offerMade" class="container tab-pane fade"><br>
    <h3>Направена оферта</h3>
    @include('kaskoRequests.tabs.table', [
    'tableName' => 'offerMadeRequests',
    'kaskoRequests' => $offeredKaskoRequests
    ])
</div>
<div id="dealMade" class="container tab-pane fade"><br>
    <h3>Сключена сделка</h3>
    @include('kaskoRequests.tabs.table', [
    'tableName' => 'dealMadeRequests',
    'kaskoRequests' => $dealMadeRequests
    ])
</div>
<div id="archive" class="container tab-pane fade"><br>
    <h3>Архивирани</h3>
    @include('kaskoRequests.tabs.table', [
    'tableName' => 'archiveRequests',
    'kaskoRequests' => $archiveRequests
    ])
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
       $('#newRequests').DataTable({
          rowReorder: {
             selector: 'td:nth-child(2)'
         },
         responsive: true
     });
       $('#offerMadeRequests').DataTable({
          rowReorder: {
             selector: 'td:nth-child(2)'
         },
         responsive: true
     });
       $('#dealMadeRequests').DataTable({
          rowReorder: {
             selector: 'td:nth-child(2)'
         },
         responsive: true
     });
       $('#archiveRequests').DataTable({
          rowReorder: {
             selector: 'td:nth-child(2)'
         },
         responsive: true
     });
   });
</script>
<br>
</x-app-layout>