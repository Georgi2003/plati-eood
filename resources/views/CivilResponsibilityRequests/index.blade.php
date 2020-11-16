<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Лесно каско
        </h2>
    </x-slot>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

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
            <h3>Неназначени</h3>
            @include('CivilResponsibilityRequests.tabs.unassigned')
        </div>
        <div id="offerMade" class="container tab-pane fade"><br>
            <h3>Направена оферта</h3>
        </div>
        <div id="dealMade" class="container tab-pane fade"><br>
          <h3>Сключена сделка</h3>
      </div>
      <div id="archive" class="container tab-pane fade"><br>
          <h3>Архивирани</h3>
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
        $('#newRquest').DataTable();
    });
</script>
</x-app-layout>
