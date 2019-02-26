<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  

<?php
    if(isset($_POST['submit']))
    {

        $customerName=$_POST['customerName'];
        $customerPhone=$_POST['customerPhone'];
        $customerEmail=$_POST['customerEmail'];
        $item=$_POST['item'];
        $customerInvoice=$_POST['customerInvoice'];
?>

    <table>
        <tr><td>Customer Name :</td><td>  <?php echo $customerName ?> </td></tr>
        <tr><td>Customer Phone:</td><td> <?php echo $customerPhone ?> </td></tr>
        <tr><td>Customer Email:</td><td> <?php echo $customerEmail ?> </td></tr>
        <tr><td>Item:</td><td>           <?php echo $item?></td></tr>
        <tr><td>Invoice Amount:</td><td> <?php echo $customerInvoice ?> </td></tr>
        
        <a href="#" onClick="javascript:window.print()">Print</a>
    </table>

<?php
    echo "<span style='color:red;'>". $customerName. "</span>";
    }
?>

