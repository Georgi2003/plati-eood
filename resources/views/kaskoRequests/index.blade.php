<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Лесно каско
        </h2>
    </x-slot>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
  
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
<script>
    $(document).ready( function () {
        $('#newRquest').DataTable();
        $('#offerMadeRquest').DataTable();
        $('#dealMadeRquest').DataTable();
        $('#archiveRquest').DataTable();
    });
</script>
</x-app-layout>
