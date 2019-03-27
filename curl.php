<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Curl in PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <select name="choose">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
    </select>
    <button type="submit">Submit</button>
    </form>

</body>
</html>


<?php
if(isset($_REQUEST['choose'])){
$id=$_REQUEST['choose'];
$url="https://reqres.in/api/users/$id";
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);
$result = curl_exec($ch);
 
curl_close($ch);
 
$result = json_decode($result, true); // giving true to json_decode returns array
?>
<pre>
<?php
print_r($result);
}