<!DOCTYPE html>
<html>
    <head>
        <title>Circular Motion</title>
    </head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/math.css">
    <script src="js/drawing.js"></script> 
    <!-- CDN for Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- ********************************** -->


</head>
<body>
    <?php 
      include("nav.html");
    ?>
    <br>
    <hr>
    <!-- **************************************************************** -->
    <!-- Functions -->
    <!-- **************************************************************** -->

    <div class="container-fluid">  
        <h3 >Circular Motion</h3>
        <p>The movements of these points are governed by sine and cosine functions.</p>
        <hr>
        <div class="row">
            <div class="col-lg-9">
                <canvas class="first_canvas" id="can1">
                </canvas>
            </div>
            <div id="control_output" class="col-lg-3 side_block">
                <br>
                <div class="row">
                  <div class="col-12">
                    <p style="font-size: 80%;">Speed</p>
                    <input type="range" min="-2" max="2" step="0.001" id="speed_slider">
                    <p id="current_speed"></p>
                  </div>
                 </div> 
                  <!-- Start of 4 buttons on the side. -->
                 
                  
                  <div class="row">
                    <div class="col-md-3">
                      <button id="stop_button" class="btn btn-outline-secondary btn-sm " type="button"
                              value=0>
                        <span style="font-size: 80%;">Stop</span>
                      </button>
                    </div>
                
                    <div class="col-md-3">
                      <button id="return_circle_button" class="btn btn-outline-secondary btn-sm" type="button">
                        <span style="font-size: 80%;">Circle</span>
                      </button>
                    </div>
                    <div class="col-md-3"> 
                    
                      <button id="draw_circle" class="btn btn-outline-secondary btn-sm" type="button" value="false">&#X25CB;</button>
                    </div>
                    <div class="col-md-3 ">
                      <button id="draw_triangle" class="btn btn-outline-secondary btn-sm" type="button" value="false">&#X25FF;</button>
                    </div>
                  </div>
                
             
                <!-- End of 4 buttons on the side. -->
                <hr>
                
                  <div class="row">
                    <p style="font-size: 80%;">X-Distance</p>
                    <input type="range" min="1" max="width/1.1" step="0.001" value="50.5" id="offset_x_slider">
                    <p id="current_offset_x"></p>
                  </div>
                  <hr>
                  <div class="row">
                    <p style="font-size: 80%;">Y-Distance</p>
                    <input type="range" min="1" max="72" step="0.001" value="50.5" id="offset_y_slider">
                    <p id="current_offset_y"></p>
                  </div>
                
                <hr>
                <!-- ********************************** -->
                
                <div id="the_point_position" class="row" style="visibility: hidden;">
                  <div class="col-md-3">
                    <strong>x</strong>
                    <div class="g_values">
                      <p id="x_dist"></p>
                    </div>
                  </div>
                  <div class="col-md-3"> 
                    <strong>y</strong>
                      
                      <div class="g_values">
                        <p id="y_dist"></p>
                      </div>
                  </div>
                  <div class="col-md-3">
                    <strong>r</strong>
                    <div class="g_values">
                      <p id="r_dist"></p>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <strong>&#x3B8;</strong>
                    <div class="g_values">
                      <p id="t_angl"></p>
                    </div>
                  </div>
                </div>
                
                <!-- --------------------------------------- -->
            </div>
        </div>
    </div>
    <br>
    <!-- **************************************************************** -->

     
  
    <script type="text/JavaScript">
        // When the window opens.
        window.onload = function(){
            var can1 = document.getElementById('can1'),
                // this is the object we graph all the graphics on.
                context = can1.getContext("2d"),
                width = can1.width,
                height = can1.height;
            // Filling the the 10x10 area white.
            context.fillStyle = "#FFFFFF";    
            // Draw co-ordinate axis.
            draw_coordinate_axis(context, width, height ,"#FFFFFF");

            // ================================
            // Initial Values.
            // ================================Mathematics/circular_motion
            const init_offset = 50.5;
            var centre_x = width/2,
                centre_y = height/2,
                offset_x = init_offset,
                offset_y = init_offset,
                speed = 0.05,
                angle = 0;
            var x_pos = centre_x + 50, 
                y_pos = centre_y;
            // this is used to determine when to display the circular path and triangle.
            var display_cicular_path = false,
                display_triangle = false;

            // ================================
            //context.beginPath(); 
            // This set constants for the point.
            const radius = 1;
            const start_angle = 0, end_angle = Math.PI * 2;

            // =======================================================
            // Start of Circle Path
            update_circ_motion();           
            // =======================================================
            // function name: update_circ_motion()
            // Description: This function is used to make points move.
            // Inspiraation: Coding Math YouTube channel.
            // Link: https://www.youtube.com/user/codingmath
            // Last modified: Aug 5, 2021
            // =======================================================
            function update_circ_motion(){
                // ================================================================
                // Updating graphs based on user input.
                // ================================================================
                // Only display the running values when the user hovers over it.
                $('#can1').mouseover(
                  function(){
                    $('#the_point_position').attr("style","visibility: visible;");
                  }
                ).mouseout(
                  function(){
                    $('#the_point_position').attr("style","visibility: hidden;");
                  }
                );
                $("#control_output").mouseover(
                  function(){
                    $('#the_point_position').attr("style","visibility: visible;");
                  }
                ).mouseout(Mathematics/circular_motion
                  function(){
                    $('#the_point_position').attr("style","visibility: hidden;");
                  }
                );
                
                // Updating the speed based on the slider.
                speed = parseFloat(document.getElementById('speed_slider').value);
                document.getElementById('current_speed').innerHTML = speed;
                // Updating the x-distance based on the slider.
                offset_x = parseFloat(document.getElementById('offset_x_slider').value);
                document.getElementById('current_offset_x').innerHTML = offset_x;
                // Updating the y-distance based on the slider.
                offset_y = parseFloat(document.getElementById('offset_y_slider').value);
                document.getElementById('current_offset_y').innerHTML = offset_y;
                // Setting speed to zero when clicked.
                document.getElementById('stop_button').onclick = function(){
                  document.getElementById('speed_slider').value = 0;
                  speed = 0;
                  document.getElementById('current_speed').innerHTML = speed;
                };
                // Returning the offsets so that point moves in circle.
                document.getElementById('return_circle_button').onclick = function(){
                  // Value of the slider.
                  document.getElementById('offset_x_slider').value = init_offset;
                  // Value of number on screen.
                  document.getElementById('current_offset_x').innerHTML = init_offset;
                  // Value used by point.
                  offset_x = init_offset;
                  // Value of the slider.
                  document.getElementById('offset_y_slider').value = init_offset;
                  // Value of number on screen.
                  document.getElementById('current_offset_y').innerHTML = init_offset;
                  // Value used by point.
                  offset_y = init_offset;
                };
                // Setting value true/false if circular path must be displayed.
                // * Used jquery for practise.
                document.getElementById('draw_circle').onclick = function(){
                    console.log("[First] " + $("#draw_circle").attr("value"));
                    var draw = $("#draw_circle").attr("value");
                    if(draw == "false"){
                      $("#draw_circle").attr("value","true");
                      display_cicular_path = true;
                    }else if(draw == "true"){
                      $("#draw_circle").attr("value","false");
                      display_cicular_path = false;
                    }
                    console.log("[last] " + $("#draw_circle").attr("value"));
                  }
                  
          
                // Setting value true/false if triangle must be displayed.
                document.getElementById('draw_triangle').onclick = function(){
                    //console.log(typeof $("#draw_triangle").attr("value"));
                    var draw = $("#draw_triangle").attr("value");
                    if(draw == "false"){
                      $("#draw_triangle").attr("value","true");
                      display_triangle = true;
                    }else if(draw == "true"){
                      $("#draw_triangle").attr("value","false");
                      display_triangle = false;
                    }
                  }  

                // ================================================================

                // ================================================================
                // Start of drawing.
                // ================================================================
                x = centre_x + Math.cos(angle) * offset_x;
                y = centre_y + Math.sin(angle) * offset_y;
                // update the angle according to the speed.
                // Anti-ClockWize.
                angle -= speed;
                // ClockWize;
                //angle -= speed;

                // Displaying the values of where the point is.
                var x_distance = x - centre_x, y_distance = -(y - centre_y),
                    r_distance = Math.sqrt(x_distance*x_distance + y_distance*y_distance),
                    t_angle = Math.acos(x_distance/ r_distance);
                document.getElementById('x_dist').innerHTML = (x_distance).toFixed(5);
                // Canvas is reversed from the mathematical way to think about an axis.
                document.getElementById('y_dist').innerHTML = (y_distance).toFixed(5);
                document.getElementById('r_dist').innerHTML = (r_distance).toFixed(5);
                document.getElementById('t_angl').innerHTML = (t_angle).toFixed(5);

                context.fillStyle = "red";
                context.clearRect(0,0, width, height);
                // Drawing all the static content.
                // 1. Draw co-ordinate axis.
                draw_coordinate_axis(context, width, height ,"#FFFFFF");
                // 2. The option to trace out the path that the point moves along.
                if(display_cicular_path){
                  context.beginPath();
                  context.ellipse(centre_x, centre_y, offset_x, offset_y, start_angle, end_angle, false);
                  context.stroke();
                }
                // 3. The option to draw a triangle.
                if(display_triangle){
                  context.beginPath();
                  // radial length.
                  context.moveTo(centre_x, centre_y);
                  context.lineTo(x, y);
                  // x-distance.
                  context.moveTo(centre_x, centre_y);
                  context.lineTo(x, height/2);
                  // y-distance.
                  context.moveTo(x, height/2);
                  context.lineTo(x, y);

                  context.stroke();
                }

                context.beginPath();
                // Drawing the point.
                context.arc(x, y, radius, start_angle, end_angle, false);
                context.fill();

                
                // End of animation.
                requestAnimationFrame(update_circ_motion);
            };
        }
    </script>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html>