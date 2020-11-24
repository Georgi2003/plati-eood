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
@include('links');

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
<div id="modal01" class="w3-modal" onclick="this.style.display='none'">
  <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
  <div class="w3-modal-content w3-animate-zoom">
    <img id="img01" style="width:100%">
  </div>
</div>

<script src="{{ asset('js/img.js') }}"></script>
<script src="{{ asset('js/KaskoRequests/tabs.js') }}"></script>
<br>
</x-app-layout>