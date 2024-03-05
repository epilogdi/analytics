<div class="modal fade" id="modalTiendas" tabindex="-1">
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
          </div>            
        </div> 
        <hr>
        <div class="container">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <button class="nav-link active" data-toggle="tab" data-target="#cat1x">Históricos</button>
            </li>
            <li class="nav-item">
              <button class="nav-link" data-toggle="tab" data-target="#cat2x">Acumulados (Bar Chart)</button>
            </li>
            <!--<li class="nav-item hide">
<button class="nav-link" data-toggle="tab" data-target="#cat3x">Bubble</button>
</li>-->
            <!--<li class="nav-item hide">
<button class="nav-link" data-toggle="tab" data-target="#cat4x">Sunburst</button>
</li>-->
            <!--<li class="nav-item hide">
<button class="nav-link" data-toggle="tab" data-target="#cat5x">Globe</button>
</li>-->
            <!--<li class="nav-item hide">
<button class="nav-link" data-toggle="tab" data-target="#cat6x">Line</button>
</li>-->
            <li class="nav-item">
              <button class="nav-link" data-toggle="tab" data-target="#cat7x">Acumulados (Pie Chart)</button>
            </li>
            <!--<li class="nav-item hide">
<button class="nav-link" data-toggle="tab" data-target="#cat8x">3d Scater</button>
</li>-->
            <li class="nav-item">
              <button class="nav-link" data-toggle="tab" data-target="#cat9ax">Segmentados (Tiendas)</button>
            </li>
            <li class="nav-item">
              <button class="nav-link" data-toggle="tab" data-target="#cat9bx">Segmentados (Productos)</button>
            </li>
            <!--<li class="nav-item hide">
<button class="nav-link" data-toggle="tab" data-target="#cat10x">Stream</button>
</li>-->
            <!--<li class="nav-item hide">
<button class="nav-link" data-toggle="tab" data-target="#cat11x">Wheel</button>
</li>-->
            <li class="nav-item">
              <button class="nav-link" data-toggle="tab" data-target="#cat12x">Comparativos</button>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade show active espacioChart" id="cat1x"> 
              <iframe src="https://resources.epilog-di.com/graficas/area.php?dataset=<?php echo $dataset;?>"></iframe>
            </div>
            <div class="tab-pane fade espacioChart" id="cat2x">
              <iframe src="https://resources.epilog-di.com/graficas/bar.php?dataset=<?php echo $dataset;?>"></iframe>
            </div>
            <!--<div class="tab-pane fade espacioChart" id="cat3x">                  
<iframe src="https://resources.epilog-di.com/graficas/bubble.php?dataset=<?php echo $dataset;?>"></iframe>
</div>-->
            <!--<div class="tab-pane fade espacioChart" id="cat4x">                  
<iframe src="https://resources.epilog-di.com/graficas/cake.php?dataset=<?php echo $dataset;?>"></iframe>
</div>-->
            <!--<div class="tab-pane fade espacioChart" id="cat5x">                  
<iframe src="https://resources.epilog-di.com/graficas/globe.php?dataset=<?php echo $dataset;?>"></iframe>
</div>-->
            <!--<div class="tab-pane fade espacioChart" id="cat6x">                  
<iframe src="https://resources.epilog-di.com/graficas/line.php?dataset=<?php echo $dataset;?>"></iframe>
</div>-->
            <div class="tab-pane fade espacioChart" id="cat7x">
              <iframe src="https://resources.epilog-di.com/graficas/pie.php?dataset=<?php echo $dataset;?>"></iframe>
            </div>
            <!--<div class="tab-pane fade espacioChart" id="cat8x">
<iframe src="https://resources.epilog-di.com/graficas/scater.php?dataset=<?php echo $dataset;?>"></iframe>
</div>-->
            <div class="tab-pane fade espacioChart" id="cat9ax">                  
              <iframe src="https://resources.epilog-di.com/graficas/spiderA.php?dataset=<?php echo $dataset;?>"></iframe>
            </div>
            <div class="tab-pane fade espacioChart" id="cat9bx">                  
              <iframe src="https://resources.epilog-di.com/graficas/spiderB.php?dataset=<?php echo $dataset;?>"></iframe>
            </div>
            <!--<div class="tab-pane fade espacioChart" id="cat10x">                  
<iframe src="https://resources.epilog-di.com/graficas/stream.php?dataset=<?php echo $dataset;?>"></iframe>
</div>-->
            <!--<div class="tab-pane fade espacioChart" id="cat11x">                  
<iframe src="https://resources.epilog-di.com/graficas/wheel.php?dataset=<?php echo $dataset;?>"></iframe>
</div>-->
            <div class="tab-pane fade espacioChart" id="cat12x">                  
              <iframe src="https://resources.epilog-di.com/graficas/bubbleTienda.php?dataset=<?php echo $dataset;?>"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>