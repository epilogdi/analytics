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
              <iframe src="https://resources.epilog-di.com/graficas/bar.php?dataset=<?php echo $dataset;?>&theme=<?php echo $theme;?>"></iframe>
            </div>
            
          </div>            
        </div> 
        <hr>
      </div>
    </div>
  </div>
</div>