<div class="modal fade" id="modalEstado" tabindex="-1">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="espacioChart container">
          <div class="row">
            <div class="col-md-12">
              <iframe src="https://resources.epilog-di.com/graficas/tiendas.php?dataset=<?php echo $dataset;?>"></iframe>
            </div>
            <div class="col-md-12">
              <iframe id="iframeEstado" src="https://resources.epilog-di.com/graficas/estados.php?dataset=<?php echo $dataset;?>"></iframe>
            </div>            
          </div>            
        </div> 
        <hr>
        <div class="container">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <button class="nav-link active" data-toggle="tab" data-target="#cat1">Históricos</button>
            </li>
            <li class="nav-item">
              <button class="nav-link" data-toggle="tab" data-target="#cat2">Acumulados (Bar Chart)</button>
            </li>
            <!--<li class="nav-item hide">
<button class="nav-link" data-toggle="tab" data-target="#cat3">Bubble</button>
</li>-->
            <!--<li class="nav-item hide">
<button class="nav-link" data-toggle="tab" data-target="#cat4">Sunburst</button>
</li>-->
            <!--<li class="nav-item hide">
<button class="nav-link" data-toggle="tab" data-target="#cat5">Globe</button>
</li>-->
            <!--<li class="nav-item hide">
<button class="nav-link" data-toggle="tab" data-target="#cat6">Line</button>
</li>-->
            <li class="nav-item">
              <button class="nav-link" data-toggle="tab" data-target="#cat7">Acumulados (Pie Chart)</button>
            </li>
            <!--<li class="nav-item hide">
<button class="nav-link" data-toggle="tab" data-target="#cat8">3d Scater</button>
</li>-->
            <li class="nav-item">
              <button class="nav-link" data-toggle="tab" data-target="#cat9a">Segmentados (Tiendas)</button>
            </li>
            <li class="nav-item">
              <button class="nav-link" data-toggle="tab" data-target="#cat9b">Segmentados (Productos)</button>
            </li>
            <!--<li class="nav-item hide">
<button class="nav-link" data-toggle="tab" data-target="#cat10">Stream</button>
</li>-->
            <!--<li class="nav-item hide">
<button class="nav-link" data-toggle="tab" data-target="#cat11">Wheel</button>
</li>-->
            <li class="nav-item">
              <button class="nav-link" data-toggle="tab" data-target="#cat12">Comparativos</button>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade show active espacioChart" id="cat1"> 
              <iframe src="https://resources.epilog-di.com/graficas/area.php?dataset=<?php echo $dataset;?>"></iframe>
            </div>
            <div class="tab-pane fade espacioChart" id="cat2">
              <iframe src="https://resources.epilog-di.com/graficas/bar.php?dataset=<?php echo $dataset;?>"></iframe>
            </div>
            <!--<div class="tab-pane fade espacioChart" id="cat3">                  
<iframe src="https://resources.epilog-di.com/graficas/bubble.php?dataset=<?php echo $dataset;?>"></iframe>
</div>-->
            <!--<div class="tab-pane fade espacioChart" id="cat4">                  
<iframe src="https://resources.epilog-di.com/graficas/cake.php?dataset=<?php echo $dataset;?>"></iframe>
</div>-->
            <!--<div class="tab-pane fade espacioChart" id="cat5">                  
<iframe src="https://resources.epilog-di.com/graficas/globe.php?dataset=<?php echo $dataset;?>"></iframe>
</div>-->
            <!--<div class="tab-pane fade espacioChart" id="cat6">                  
<iframe src="https://resources.epilog-di.com/graficas/line.php?dataset=<?php echo $dataset;?>"></iframe>
</div>-->
            <div class="tab-pane fade espacioChart" id="cat7">
              <iframe src="https://resources.epilog-di.com/graficas/pie.php?dataset=<?php echo $dataset;?>"></iframe>
            </div>
            <!--<div class="tab-pane fade espacioChart" id="cat8">
<iframe src="https://resources.epilog-di.com/graficas/scater.php?dataset=<?php echo $dataset;?>"></iframe>
</div>-->
            <div class="tab-pane fade espacioChart" id="cat9a">                  
              <iframe src="https://resources.epilog-di.com/graficas/spiderA.php?dataset=<?php echo $dataset;?>"></iframe>
            </div>
            <div class="tab-pane fade espacioChart" id="cat9b">                  
              <iframe src="https://resources.epilog-di.com/graficas/spiderB.php?dataset=<?php echo $dataset;?>"></iframe>
            </div>
            <!--<div class="tab-pane fade espacioChart" id="cat10">                  
<iframe src="https://resources.epilog-di.com/graficas/stream.php?dataset=<?php echo $dataset;?>"></iframe>
</div>-->
            <!--<div class="tab-pane fade espacioChart" id="cat11">                  
<iframe src="https://resources.epilog-di.com/graficas/wheel.php?dataset=<?php echo $dataset;?>"></iframe>
</div>-->
            <div class="tab-pane fade espacioChart" id="cat12">                  
              <iframe src="https://resources.epilog-di.com/graficas/bubbleTienda.php?dataset=<?php echo $dataset;?>"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>