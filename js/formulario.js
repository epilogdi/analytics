function populateCategories(){
  var categories="<option value='TODAS' selected>Todas</option>";
  $.each( estructuraJerarquica.filter(x => x.dataset == dataset), function( key, value ) {       
    categories+=`<option value='${value.name}'>${value.name}</option>`           
  });
  $("form").find(".selectCategorias").html(categories)
}


function changeCategory(esto){
  var categoria=$("form").find(".selectCategorias").val()
  var subcategories="<option value='TODAS' selected>Todas</option>";
  $.each(estructuraJerarquica.filter(x => x.dataset == dataset).find(x => x.name === categoria).subcategories, function( key, value ) {           
    subcategories+=`<option value='${value.name}'>${value.name}</option>`          
  });
  $(esto).closest("form").find(".selectSubcategorias").html(subcategories)
}

function changeSubcategory(esto){
  var categoria=$("form").find(".selectCategorias").val()
  var subcategoria=$("form").find(".selectSubcategorias").val()
  var skus="<option value='TODAS' selected>Todas</option>";
  $.each(estructuraJerarquica.filter(x => x.dataset == dataset).find(x => x.name === categoria).subcategories.find(x => x.name === subcategoria).skus, function( key, value ) {           
    skus+=`<option value='${value.name}'>${value.name}</option>`          
  });
  $(esto).closest("form").find(".selectSkus").html(skus)
}
