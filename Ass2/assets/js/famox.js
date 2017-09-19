type = ['','info','success','warning','danger'];


famox = {

    validateForm: function(){
      var costPrice = document.getElementById("cost_price").value;
      var salePrice = document.getElementById("sale_price").value;
      if (isNaN(costPrice) || isNaN(salePrice)) {
        alert("Cost price and sale price must be valid numbers.");
        return false;
      } else if (Number(costPrice) > Number(salePrice)) {
        alert("Sale price must be higher than cost price.");
        return false;
      }
    }

}