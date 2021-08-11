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
  echo "<div style='border: 1px solid navy; background-color: lightgrey;'>";
  echo "<div>Hi ".$_GET['name'].", I can't believe you are a ".$_GET['age']." year old who likes ".$_GET['animal']."s</div>";
  echo "</div>";
  // ================================================================================================================= 
  echo "<h2 style='text-align=center '>Example 2: Is Prime results.</h2>";

  echo "<div style='border: 1px solid navy; background-color: lightgrey;'>";
  // LEVEL 1: TEST TO SEE IF USER ENTERED A NUMBER. ******************
  if(array_key_exists("is_prime_input",$_GET) && is_numeric($_GET["is_prime_input"])){ 
    //print_r($_GET["is_prime_input"]);
    $possible_prime = $_GET["is_prime_input"];
    
    // Start of algorithm to detect the prime.
    // LEVEL 2: TEST TO SEE IF THE NUMBER IS AT LEAST 2. ******************
    if($possible_prime < 2){
      echo "<p>The smallest possible prime is 2 so ".$possible_prime." can not be a prime number</p>";

    }elseif($possible_prime > 2){
      // Here we test if the candidate is a prime number.
      // The helper variable.
      // We can assume that the user entered a number greater than 2
      $helper = $possible_prime - 1;
      
      // LEVEL 3: TEST TO SEE IF THE NUMBER ONLY HAS DIVISORS 1 and ITSELF. ******************
      while($helper > 2){
        // Case 1: The number is not prime.
        if($possible_prime % $helper == 0){
          $helper = 0;
        }else{
          // Decrementing to test a new possible divisor.
          $helper--;
        }
      }

      // If the loop stopped with case one we know the number is prime, else it is not.
      if($helper == 0){
        echo $possible_prime." is not a prime number<br>";
      }else{
        echo $possible_prime." is a prime number<br>";
      }

    }else{
      echo $possible_prime." is a prime number<br>";
    }

  }else{
    echo "<p>No prime number input was entered.</p>";
  }
  echo "</div>";

  echo "<br><p>End of php code section</p><br>";
?>


<body>
  <p>This is the first line of html code after the php.</p>
  <h2>Intro to PHP 2</h2>
  <p>The $_GET array.</p>
  <hr>
  <h3>Things to notice</h3>
  <div style="border: 1px solid black">
    <ul>
        <li>Take a look at the url bar and everything after the ? character.</li>
        <li>The format is ?/key1=value1&key2=value2 ...</li>
        <li>We get this information from the forms.</li>
        <li>You can also type any name for the key and value in the url itself.</li>
        <li>All of this information is stored in the php $_GET array.</li>
        <p>Type this into the url after the "/" : ?name=any_name&age=any_age&country=usa</p>

    </ul>
  </div>
  
  <hr>
  <h3> Example 1: User ineraction using FORMS and GET </h3>
  <div>
      <form>
        <p>Please enter your name: <input type="text" name="name"></p>
        <p>Enter your age: <input type="number" name="age"></p>
        <p>Enter your favorite animal: <input type="text" name="animal"></p> <!-- Npte that the names are the keys for $_GET-->
        <p><input type="submit" name="s_button" value="submit"></p>
       </form>  
  </div>
  <hr>
  <h3> Example 2: Prime number example.</h3>
  <div style="border: 1px solid black">
    <form>
        <p>Please enter a whole number greater than 2 and I will tell you if it is prime.</p>
        <input type="number" name="is_prime_input"> <!-- The name="" specified here is the key in the $_GET array. -->
        <input type="submit" name="s_button" value="GO!" required>
    </form>
  </div>
</body>


</html>
