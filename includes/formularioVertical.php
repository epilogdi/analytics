<form class="container">
  <div class="row">
    <div class="form-group col-12">
      <label>Busca un Lugar</label>
      <input id="lugarBuscadoMapaPrincipal" type="text" class="form-control form-control-sm bg-light border-0 small" placeholder="Busca un lugar"/>
    </div>
    <div class="form-group col-12">
      <label>Tipo</label>
      <select class="form-control form-control-sm" onchange="getval(this);">
        <option value="" selected disabled>Seleccione una opción</option>
        <option value="puntos">Programa de Lealtad</option>
        <option value="ventas">Ventas</option>
        <option value="inventario">Inventario</option>
        <option value="rotacion">Rotación</option>
        <option value="devoluciones">Devoluciones</option>
        <option value="ticketPromedio">Ticket Promedio</option>
        <option value="nivelServicio">Nivel de Servicio</option>
      </select>
    </div>
    <div class="form-group col-12 soloSKU">
      <label>Categorías</label>
      <select class="form-control form-control-sm selectCategorias" onchange="changeCategory(this)">

      </select>
    </div>
    <div class="form-group col-12 soloSKU">
      <label>Subcategorías</label>
      <select class="form-control form-control-sm selectSubcategorias" onchange="changeSubcategory(this)">
      </select>
    </div>
    <div class="form-group col-12 soloSKU">
      <label>SKUs</label>
      <select class="form-control form-control-sm selectSkus">

      </select>
    </div>
    <div class="form-group col-6">
      <label>Desde</label>
      <input type="date" class="form-control form-control-sm"/>
    </div>
    <div class="form-group col-6">
      <label>Hasta</label>
      <input type="date" class="form-control form-control-sm"/>
    </div>
    <div class="form-group col-12">
      <button type="button" class="btn btn-primary btn-block" onclick="aleatorizarEstados()" id="aleatorizar">
        Filtrar
      </button>
    </div>
  </div>
</form>