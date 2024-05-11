<div class="modal fade" id="modalEcommerce" tabindex="-1">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Canal E-commerce</h5>
        <button class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <button class="nav-link active" data-toggle="tab" data-target="#catxxx0">Funnel de Ventas</button>
            </li>
            <li class="nav-item">
              <button class="nav-link" data-toggle="tab" data-target="#catxxx1">Históricos</button>
            </li>
            <li class="nav-item">
              <button class="nav-link" data-toggle="tab" data-target="#catxxx2">Acumulados (Bar Chart)</button>
            </li>
            <li class="nav-item">
              <button class="nav-link" data-toggle="tab" data-target="#catxxx7">Acumulados (Pie Chart)</button>
            </li>            
            <li class="nav-item">
              <button class="nav-link" data-toggle="tab" data-target="#catxxx11">Demográficos</button>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade show active espacioChart" id="catxxx0"> 
              <iframe src="https://resources.epilog-di.com/graficas/funnel.php?dataset=<?php echo $dataset;?>&type=virtual"></iframe>
            </div>
            <div class="tab-pane fade espacioChart" id="catxxx1"> 
              <iframe src="https://resources.epilog-di.com/graficas/area.php?dataset=<?php echo $dataset;?>"></iframe>
            </div>
            <div class="tab-pane fade espacioChart" id="catxxx2">
              <iframe src="https://resources.epilog-di.com/graficas/bar.php?dataset=<?php echo $dataset;?>"></iframe>
            </div>           
            <div class="tab-pane fade espacioChart" id="catxxx7">
              <iframe src="https://resources.epilog-di.com/graficas/pie.php?dataset=<?php echo $dataset;?>"></iframe>
            </div>
            <div class="tab-pane fade espacioChart" id="catxxx11">                  
              <iframe src="https://resources.epilog-di.com/graficas/genero.php?dataset=<?php echo $dataset;?>"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
