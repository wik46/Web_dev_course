<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- ********************************** -->
       <!-- Part 1/2: Bootstrap -->
       <!-- Required meta tags -->
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <!-- Bootstrap CSS -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
       <!-- ********************************** -->

       <!-- CDN for Jquery -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <!-- ********************************** -->
        <!-- My drawing functions -->
        <script src="js/drawing.js"></script>
       <!-- Adding my stylesheet.-->
       <link rel="stylesheet" type="text/css" href="css/style6.css">

       <title>Weather App</title>

   </head>

    <body style="background-image: url('');">
        <?php 
            include("nav.html");
        ?>
        <br>
        <div class="container container_border" style="background-color:lightgrey;">
            <div class="row">
                <div class="col-12">
                    <h1 id="main_heading" >Weather App</h1>
                </div>
            </div>
        </div>

        <hr>
        <div class="container" >
            <div class="row">
                <div class="col">
                    <form action="#"> <!-- This action can be the page to where the form should go.-->
                        <input type="text" name="city_name" placeholder="enter city name">
                        <input type="submit" value="find city">
                    </form>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col">
                    <button class="btn btn-secondary btn-sm" type="button" id="bt1">
                        Display Canvas
                    </button>

                    
                </div>
            </div>
        </div>
        <hr>
        <!-- *************************************************************** -->
        <div class="container container_border" style="background-color:lightgrey;">
            <div class="row">
                <div class="col">
                    <h3>Example 1: Weather Report</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-2 container_border" id="stat1">
                    <h5>width</h5>
                </div>
                <div class="col-2 container_border" id="stat2">
                    <h5>height</h5>
                </div>
                <div class="col-2 container_border" id="stat3">
                    <h5>TBA</h5>
                </div>
                <div class="col-2 container_border" id="stat4">
                    <h5>TBA</h5>
                </div>
                <div class="col-2 container_border" id="stat5">
                    <h5>TBA</h5>
                </div>
                <div class="col-2 container_border" id="stat6">
                    <h5>TBA</h5>
                </div>
            </div>
            <!-- #################### START OF THE CANVAS 1 #################### -->
            <div class="row">
                <div class="col-lg-12 canvas2" id="main_canvas">
                    
                    <?php 
                        $s_div = '<div class="alert alert-success" role="alert">';
                        $f_div = '<div class="alert alert-danger" role="alert">';
                        if($_GET["city_name"]){
                            // You need to remove spaces before searching.
                            $city_name = str_replace(" ", "", $_GET["city_name"]);
                            $url = "https://www.weather-forecast.com/locations/".$city_name."/forecasts/latest";
                            echo $url;
                            $content = file_get_contents($url);

                            if($content){
                                $weather_data_split1 = explode('Weather Today</h2> (1&ndash;3 days)</div><p class="b-forecast__table-description-content">',$content);
                                $weather_data_split2 = explode("<td", $weather_data_split1[1]);
                                echo $s_div;

                                echo $weather_data_split2[0];
                            }else{
                                echo $f_div;
                                echo "Please Enter a Valid City Name";
                            }
                        }else{
                            echo $f_div;
                            echo "Please Enter a City Name";
                        }
                    ?>
                    </div>
                </div>
            </div>
            <!-- #################### END OF THE CANVAS 1 #################### -->

            <div class="container">
                <div class="row">
                    <h2>User Data entered</h2>
                    <div class="col">
                             <?php 
                                if($_GET["city_name"]){
                                    echo $_GET["city_name"];
                                }
                             ?>       
                    </div>
                </div>

            </div>
        </div>

        <?php 
            // Example of hot to get the source code from a url.
            //  $url = "http://example.com";
            //  $new_content = file_get_contents($url);
            // echo $new_content;
        ?>
    

        <script type="text/JavaScript">
            // Case 1: Load Successful
            if (typeof(jQuery) != "undefined"){
                // ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
                // Variables for example1
                // ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
                // Initial values.
                var disp_canvas = true;
                var disp_circle = true;
                var circle_large = false;
                // Storing original information.
                var original_stat1 = $("#stat1").html();
                var original_stat2 = $("#stat2").html();
                // ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

                // ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
                // Variables for example2
                // ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
                // Initial Values.
                var disp_canvas2 = true;
                // Storing original information.
                var original_stat21 = $("#stat21").html();
                var original_stat22 = $("#stat22").html();

                // 1. Adding or removing canvas when button is clicked. 
                $("#bt1").click(
                    function(){
                        if(disp_canvas){
                            $("#main_canvas").fadeOut(
                                function(){
                                    disp_canvas = false;
                                }
                            );
                            
                        }else{
                            $("#main_canvas").fadeIn(
                                function(){
                                    disp_canvas = true;
                                }
                            ); 
                        }
                    }
                );
                // 2.1. Adding or removing canvas when button is clicked. 
                $("#bt21").click(
                    function(){
                        if(disp_canvas2){
                            $("#main_canvas2").fadeOut(
                                function(){
                                    disp_canvas2 = false;
                                }
                            );
                            
                        }else{
                            $("#main_canvas2").fadeIn(
                                function(){
                                    disp_canvas2 = true;
                                }
                            ); 
                        }
                    }
                );
                
                // 4. Functionality to hover over the width and height to get the width and height
                // of the "canvas".

                // example 1: version
                // a. hover over width.
                $("#stat1").mouseover(
                    function(){
                        // When the mouse hovers over.
                        $(this).html($("#main_canvas").css("width"));
                    }
                ).mouseout(
                    function(){
                        // When the mouse exits.
                        $(this).html(original_stat1);
                    }
                );
                // Example 2: version
                $("#stat21").mouseover(
                    function(){
                        // When the mouse hovers over.
                        $(this).html($("#main_canvas2").css("width"));
                    }
                ).mouseout(
                    function(){
                        // When the mouse exits.
                        $(this).html(original_stat21);
                    }
                );
                // b. hover over height.        
                // example 1: version
                $("#stat2").mouseover(
                    function(){
                        // When the mouse hovers over.
                        $(this).html($("#main_canvas").css("height"));
                    }
                ).mouseout(
                    function(){
                        // When the mouse exits.
                        $(this).html(original_stat2);
                    }
                );
                // example 2: version
                $("#stat22").mouseover(
                    function(){
                        // When the mouse hovers over.
                        $(this).html($("#main_canvas2").css("height"));
                    }
                ).mouseout(
                    function(){
                        // When the mouse exits.
                        $(this).html(original_stat22);
                    }
                );
                
                

            // Case 2: Load Unsuccessful.
            }else{
                alert(typeof(jQuery) + ": Jquery did not load correctly, please inform owner of the site.");
            }
        </script>
        <!-- Optional JavaScript; choose one of the two! -->
        <!-- Part 2/2: Bootstrap Bundle with Popper -->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    
    </body>
</html>