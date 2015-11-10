<h2>Acțiuni</h2>
<form class="my_form" ng-submit="saveTerrain()">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#lista">Lista</a></li>
    <li><a data-toggle="tab" href="#data">Data</a></li>
    <li><a data-toggle="tab" href="#proiect">Proiect</a></li>
    <li><a data-toggle="tab" href="#salvare">Salvare</a></li>
  </ul>
  <div class="tab-content">
    <div id="lista" class="tab-pane fade in active">
      <h3>Lista</h3>
      @include('list.partials.tab-1')
    </div>
    <div id="data" class="tab-pane fade">
      <h3>Data</h3>
      @include('list.partials.tab-2')
    </div>
    <div id="proiect" class="tab-pane fade">
      <h3>Proiect</h3>
      @include('list.partials.tab-3')
    </div>
    <div id="salvare" class="tab-pane fade">
      <h3>Salvare</h3>
      @include('list.partials.tab-4')
    </div>
  </div>

</form>