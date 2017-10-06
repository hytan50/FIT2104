type = ['','info','success','warning','danger'];

$(function() {

  // Bind all links which require confirmation (i.e. Delete)
  $("a.confirm-delete").click(function(evt) {
    if (window.confirm("Are you sure you want to delete this record?")) {
      return true;
    } else {
      return false;
    }
  });

  $("#sale_price").change(function(evt) {
    var costPrice = Number($("#cost_price").val());
    var salePrice = Number($("#sale_price").val());

    if (costPrice > salePrice) {
      $("#sale_price")[0].setCustomValidity("Sale price must be higher than cost price.");
    } else {
      $("#sale_price")[0].setCustomValidity("");
    }
  });

});
