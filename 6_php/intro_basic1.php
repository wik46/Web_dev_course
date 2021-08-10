<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="cache-control" content="max-age=0" />
  <meta http-equiv="cache-control" content="no-cache" />
  <meta http-equiv="expires" content="0" />
  <meta http-equiv="pragma" content="no-cache" />
  <title>PHP INTRO 1</title>
  <style>


  html
  {
    font-size: 62.5%;
  }

  body
  {
    margin: 0;
    padding: 0;
    font-size: 1.6rem;
    color: #353535;
    background: linear-gradient(to bottom, #ccc, #fff 30%);
    background-repeat: no-repeat;
  }

  h1,h2,h3
  {
    font-family: 'Montserrat', sans-serif;
    text-align: center;
    margin: 0;
    padding: 0;
    text-transform: uppercase;
  }


  h1
  {
    margin: 20rem 0 1rem;
    font-size: 3rem;
  }

  h3
  {
    font-weight: normal;
    font-size: 1.4rem;
  }
  </style>
</head>
<body>
  <h1>Intro to PHP</h1>
  <h3>Variable, arrays, conditionals, loops</h3>
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</body>

<?php
  // ================================================================================================================= 
  // Variables
  echo "<hr><h2>Variables</h2>";
  $name = "Jacques";
  $surname = "van der Merwe";
  echo $name;
  echo "<br>";
  /* String Concatenation */
  echo $name." ".$surname;
  echo "The name used is inside a string: $name";
  /* You can put html inside strings.*/
  // -- another way to print.
  $str_with_html = "<p style='text-align: center;'>This is a sentence</p>";
  print_r($str_with_html);

  echo "<p>You can create a variable $name = 'Jacques', and another one $var = 'name'. Then echo $$var will ouput 'Jacques'</p> ";
  $name_of_var = "name";
  echo $$name_of_var;

  // ================================================================================================================= 
  // Arrays
  echo "<hr><h2>Arrays</h2>";
  $my_ar = array("Jake","John","Apple","Orange");
  // This is what happens if you only output and array.
  echo $my_ar;
  echo "<p>Use print_r to output an array and not echo.</p>";
  print_r($my_ar);

  // Length
  echo "<p>sizeof() is used to return the array length.</p>";
  echo "Array Length: ";
  echo sizeof($my_ar);

  // An array is more like a dictionary in php.
  $my_ar2 = array(
    "key1"=>"value1",
    "key2"=>"value2",
    "key3"=>"value3"
  );
  echo "<p>Another array's element: </p>";
  print_r($my_ar2);
  echo "<p>Value of key2: </p>";
  print_r($my_ar2["key2"]);

  // =================================================================================================================
  // Conditionals
  echo "<hr><h2>Conditionals</h2>";

  $user1 = array("name"=>"JohnS", "age"=>23);

  $user2 = array("name"=>"Jake", "age"=>17);
  $valid_age = 18;
  $valid_user = "John";
  // Is valid and is over 18
  if($user1["name"] == $valid_user && $user1["age"] >= $valid_age){
    echo "<p> $valid_user is valid and older that $valid_age.</p>";
  }elseif($user1["age"] < $valid_age){
    echo "<p> $valid_user is noT at least $valid_age.</p>";
  }else{
    echo "<p> He is not a valid user.</p>";
  } 
  // =================================================================================================================
  // Loops
  // =================================================================================================================
  echo "<hr><h2>Loops</h2>";

  // For-Loops
  echo "<h3>For-loops</h3>";
  // example 1
  for($i = 0; $i < 30; $i += 2){
    echo "Number is: ".$i."<br>";
  }
  echo "<br>";
  
  // Example 2
  $fruits = array("orange","apple","pear","grape","bannana");
  print_r(sizeof($fruits));
  echo "<br><br>";
  for($k = 0; $k < sizeof($fruits); $k++){
    echo ($k+1).".) ".$fruits[$k]."<br>";
    // Making them plurals.
    $fruits[$k] = $fruits[$k]."s";
  }
  // After making the fruits plurals.
  echo "<br>";
  echo "<p>after making them plurals<p>";
  for($k = 0; $k < sizeof($fruits); $k++){
    echo ($k+1).".) ".$fruits[$k]."<br>";

  }
  echo "<br><br>";
  echo "<h3>Foreach-loops</h3>";

  $my_ar3 = array(
    "key1"=>"value1",
    "key2"=>"value2",
    "key3"=>"value3"
  );
  // for-each loop.
  foreach($my_ar3 as $key => $value){
    echo "Array item ".$key." has the value ".$value."<br>";
  }
  // While-Loops
  echo "<br><br>";
  echo "<h3>While-loops</h3>";
  $i = 10;
  while($i > 0){
    echo "The value of i times ten is: ".($i*10)."<br>";
    $i--;
  }

?>
</html>

