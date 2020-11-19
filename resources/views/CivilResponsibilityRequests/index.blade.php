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
            <a class="nav-link active" data-toggle="tab" href="#unassigned">Неназначени</a>
        </li>
        @if(Auth::user()->isSuperAdmin())
          <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#offerMade">Обработени</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#dealMade">Завършени</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#archive">Архивирани</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#all">Всички</a>
          </li>
        @endif
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div id="unassigned" class="container tab-pane active"><br>
            <h3>Неназначени</h3>
            @include('CivilResponsibilityRequests.tabs.table', [
              'tableName' => 'unassignedRquest',
              'civilResponsibilityRequest' => $unassigned,
            ])
        </div>
        @if(Auth::user()->isSuperAdmin())
        <div id="offerMade" class="container tab-pane fade"><br>
            <h3>Обработени</h3>
            @include('CivilResponsibilityRequests.tabs.table', [
              'tableName' => 'processedRquest',
              'civilResponsibilityRequest' => $processed,
            ])
        </div>
        <div id="dealMade" class="container tab-pane fade"><br>
          <h3>Завършени</h3>
        </div>
        <div id="archive" class="container tab-pane fade"><br>
            <h3>Архивирани</h3>
        </div>
        <div id="all" class="container tab-pane fade"><br>
            <h3>Всички</h3>
        </div>
        @endif
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
        $('#unassignedRquest').DataTable({
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        });

        $('#processedRquest').DataTable({
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        });
    });
</script>
<br>
</x-app-layout>
