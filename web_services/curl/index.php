<!-- <form action="post">
  <input type="text" name="address">
  <input type="submit" name="acao" value="Enviar">
</form> -->

<?php
// A very simple PHP example that sends a HTTP POST to a remote site
//
$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, "http://localhost/dashboard/devWebComp/web_services/request.php");
curl_setopt($curl, CURLOPT_POST, 1);

curl_setopt(
  $curl,
  CURLOPT_POSTFIELDS,
  http_build_query(array('request' => 'name_return'))
);

// Receive server response ...
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($curl);

curl_close($curl);

$result = json_decode($server_output);
echo $result[1];

?>