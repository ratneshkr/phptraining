<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<div class="container">
    <form method="post" action="response.php" autocomplete="on"> 

        <input type="text" name="customerName" value="" placeholder="Customer Name"/><br>
        <input type="text" name="customerPhone" value=""  placeholder="Customer Phone"/><br>
        <input type="text" name="customerEmail" value=""  placeholder="Customer Email"/><br>

        <select name="item" id="selectItem">
            <option >---Select---
            <option value="Egg">Egg 
            <option value="Tomato">Tomato 
            <option value="Potato">Potato 
        </select><br/>
        Price Per Unit: <span id="unitPrice"><b></b></span><br/>
        Unit: <span id="unit"><b></b></span><br/>
        Purchase Unit: <input type="number" id="purchase"/>
        <br/>

        <input type="text" name="customerInvoice" value="" id="invoiceAmt" placeholder="Invoice Amt"/><br>
        <input type="submit" value="Save" name="submit"/>
    </form>
    <p id="msg"></p>
</div>

<script>
        $(document).ready(function(){
           $("#selectItem").on('change',function(){
              switch(this.value){
                  case "Egg": 
                    $("#unit").html("Per Pc").css("font-weight","bold");
                    $("#unitPrice").html("12").css("font-weight","bold");
                  break;
                  
                  case "Tomato": 
                    $("#unit").html("Per Kg").css("font-weight","bold");
                    $("#unitPrice").html("12").css("font-weight","bold");
                  break;
                  
                  case "Potato": 
                    $("#unit").html("Per Kg").css("font-weight","bold");
                    $("#unitPrice").html("50").css("font-weight","bold");
                  break;
                    
            default:
                  $("#msg").html("Default Area");
              }
           });
           
           $("#purchase").on('change',function(){
              var unitPrice=parseInt($("#unitPrice").text());
              var purchaseUnit=parseInt(this.value);
              
              $("#invoiceAmt").val(unitPrice*purchaseUnit);
           });
        });
</script>