<?php
/* curl name and password values to middle end
receive respond from middle end and pass over response over the index.html
*/
$url = 'grabtest.php';
$name = $_POST['username'];
$password = $_POST['password'];
$test = 'Hello';
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $test);

$output = curl_exec($ch);
curl_close($ch);

echo($output)
/*echo "Welcome ".$name;
echo "<br/>";
echo "Password".$password;
*/
?>