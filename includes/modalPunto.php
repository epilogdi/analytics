<div class="modal fade" id="modalPunto" tabindex="-1">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Detalle del Punto</h5>
        <button class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="container">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <button class="nav-link active" data-toggle="tab" data-target="#catx1">Históricos</button>
            </li>
            <li class="nav-item">
              <button class="nav-link" data-toggle="tab" data-target="#catx2">Acumulados (Bar Chart)</button>
            </li>
            <!--<li class="nav-item hide">
              <button class="nav-link" data-toggle="tab" data-target="#catx3">Bubble</button>
            </li>-->
            <!--<li class="nav-item hide">
              <button class="nav-link" data-toggle="tab" data-target="#catx4">Sunburst</button>
            </li>-->
            <!--<li class="nav-item hide">
              <button class="nav-link" data-toggle="tab" data-target="#catx5">Globe</button>
            </li>-->
            <!--<li class="nav-item hide">
              <button class="nav-link" data-toggle="tab" data-target="#catx6">Line</button>
            </li>-->
            <li class="nav-item">
              <button class="nav-link" data-toggle="tab" data-target="#catx7">Acumulados (Pie Chart)</button>
            </li>
            <!--<li class="nav-item hide">
              <button class="nav-link" data-toggle="tab" data-target="#catx8">3d Scater</button>
            </li>-->
            <!--<li class="nav-item">
              <button class="nav-link" data-toggle="tab" data-target="#catx9">Segmentados por Categoría</button>
            </li>-->
            <!--<li class="nav-item hide">
              <button class="nav-link" data-toggle="tab" data-target="#catx10">Stream</button>
            </li>-->
            <!--<li class="nav-item hide">
              <button class="nav-link" data-toggle="tab" data-target="#catx11">Wheel</button>
            </li>-->
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade show active espacioChart" id="catx1"> 
              <iframe src="https://resources.epilog-di.com/graficas/area.php?dataset=<?php echo $dataset;?>"></iframe>
            </div>
            <div class="tab-pane fade espacioChart" id="catx2">
              <iframe src="https://resources.epilog-di.com/graficas/bar.php?dataset=<?php echo $dataset;?>"></iframe>
            </div>
            <!--<div class="tab-pane fade espacioChart" id="catx3">                  
              <iframe src="https://resources.epilog-di.com/graficas/bubble.php?dataset=<?php echo $dataset;?>"></iframe>
            </div>-->
            <!--<div class="tab-pane fade espacioChart" id="catx4">                  
              <iframe src="https://resources.epilog-di.com/graficas/cake.php?dataset=<?php echo $dataset;?>"></iframe>
            </div>-->
            <!--<div class="tab-pane fade espacioChart" id="catx5">                  
              <iframe src="https://resources.epilog-di.com/graficas/globe.php?dataset=<?php echo $dataset;?>"></iframe>
            </div>-->
            <!--<div class="tab-pane fade espacioChart" id="catx6">                  
              <iframe src="https://resources.epilog-di.com/graficas/line.php?dataset=<?php echo $dataset;?>"></iframe>
            </div>-->
            <div class="tab-pane fade espacioChart" id="catx7">
              <iframe src="https://resources.epilog-di.com/graficas/pie.php?dataset=<?php echo $dataset;?> "></iframe>
            </div>
            <!--<div class="tab-pane fade espacioChart" id="catx8">
              <iframe src="https://resources.epilog-di.com/graficas/scater.php?dataset=<?php echo $dataset;?>"></iframe>
            </div>-->
            <div class="tab-pane fade espacioChart" id="catx9a">                  
              <iframe src="https://resources.epilog-di.com/graficas/spiderA.php?dataset=<?php echo $dataset;?>"></iframe>
            </div>
            <div class="tab-pane fade espacioChart" id="catx9b">                  
              <iframe src="https://resources.epilog-di.com/graficas/spiderB.php?dataset=<?php echo $dataset;?>"></iframe>
            </div>
            <!--<div class="tab-pane fade espacioChart" id="catx10">                  
              <iframe src="https://resources.epilog-di.com/graficas/stream.php?dataset=<?php echo $dataset;?>"></iframe>
            </div>-->
            <!--<div class="tab-pane fade espacioChart" id="catx11">                  
              <iframe src="https://resources.epilog-di.com/graficas/wheel.php?dataset=<?php echo $dataset;?>"></iframe>
            </div>-->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>