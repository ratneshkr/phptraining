<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
<div class="container">
<form method="post" action="response.php" autocomplete="on"> 

    <input type="text" name="customerName" value="" placeholder="Customer Name"/><br>
    <input type="text" name="customerPhone" value=""  placeholder="Customer Phone"/><br>
    <input type="text" name="customerEmail" value=""  placeholder="Customer Email"/><br>
    
    <select name="item">
           <option value="Egg">Egg 
           <option value="Tomato">Tomato 
           <option value="Potato">Potato 
    </select>
    Price Per Unit: <span><b>Rs. 9</b></span>
    Unit: <span><b>Kg</b></span><br/>
    Purchase Unit: <input type="number" id="unit"/>
    <br/>

<input type="text" name="customerInvoice" value=""  placeholder="Invoice Amt"/><br>
    
<input type="submit" value="Save" name="submit"/>
</form>


</div>