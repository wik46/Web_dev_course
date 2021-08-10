<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="cache-control" content="max-age=0" />
  <meta http-equiv="cache-control" content="no-cache" />
  <meta http-equiv="expires" content="0" />
  <meta http-equiv="pragma" content="no-cache" />
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <title>PHP INTRO 2</title>
  <style>


  html
  {
    font-size: 62.5%;
    text-align:center;
  }

  body
  {
    margin: 0;
    padding: 0;
    font-size: 1.6rem;
    color: #353535;
    background: linear-gradient(to bottom, #ccc, #fff 30%);
    background-repeat: no-repeat;

    text-transform: uppercase;
  }


  h1
  {
    margin: 20rem 0 1rem;
    font-size: 3rem;
  }

  h3
  {
    /*font-weight: normal;*/
    font-size: 1.4rem;
  }
  div{
      border: 1px solid black;
  }
  </style>
</head>
<?php
  // ================================================================================================================= 
  echo "<h2 style='text-align=center '>This array is found using the $_GET array.</h2>";

  print_r($_GET);
  echo "<hr>";
  echo "<br>data received from the form.<br>";
  echo "<div>Hi ".$_GET['name'].", I can't believe you are a ".$_GET['age']." year old who likes ".$_GET['animal']."s</div>";

?>


<body>
  <h1>Intro to PHP 2</h1>
  <h3>Get, Post</h3>
  <hr>
  <h3>See how to get user input from server </h3>
  <p>Type this into the url after the "/" : ?name=any_name&age=any_age&country=usa</p>

  <hr>
  <h3> User ineraction using FORMS and GET </h3>
  <div>
      <form>
        <p>Please enter your name: <input type="text" name="name"></p>
        <p>Enter your age: <input type="number" name="age"></p>
        <p>Enter your favorite animal: <input type="text" name="animal"></p> <!-- Npte that the names are the keys for $_GET-->
        <p><input type="submit" name="s_button" value="submit"></p>
       </form>  
  </div>
</body>


</html>
