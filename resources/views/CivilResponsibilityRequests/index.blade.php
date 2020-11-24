<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Гражданска отговорност
  </h2>
</x-slot>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>

<link rel="stylesheet" href="{{ asset('css/img.css') }}">
@include('links');

<div class="container mt-3">
  <h2>Заявки за Гражданска отговорност</h2>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#unassigned">Неназначени</a>
    </li>
    @if(Auth::user()->isSuperAdmin() || Auth::user()->isAdmin())
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#processed">Обработени</a>
  </li>
  <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#completed">Завършени</a>
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
    @if(Auth::user()->isSuperAdmin() || Auth::user()->isAdmin())
    <div id="processed" class="container tab-pane fade"><br>
        <h3>Обработени</h3>
        @include('CivilResponsibilityRequests.tabs.table', [
        'tableName' => 'processedRquest',
        'civilResponsibilityRequest' => $processed,
        ])
    </div>
    <div id="completed" class="container tab-pane fade"><br>
      <h3>Завършени</h3>
      @include('CivilResponsibilityRequests.tabs.table', [
      'tableName' => 'completedRquest',
      'civilResponsibilityRequest' => $completed,
      ])
  </div>
  <div id="archive" class="container tab-pane fade"><br>
    <h3>Архивирани</h3>
    @include('CivilResponsibilityRequests.tabs.table', [
    'tableName' => 'archivedRquest',
    'civilResponsibilityRequest' => $archived,
    ])
</div>
<div id="all" class="container tab-pane fade"><br>
    <h3>Всички</h3>
    @include('CivilResponsibilityRequests.tabs.table', [
    'tableName' => 'allRequest',
    'civilResponsibilityRequest' => $allRequests,
    ])
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
<script src="{{ asset('js/CivilResponsibilityRequests/tabs.js') }}"></script>
<br>
</x-app-layout>
