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

       <title>Email</title>

   </head>

   <?php 
   
        print_r($_GET);
        // Code to send an email
        $to = $_GET["to_input"];
        $from = $_GET["from_input"];
        $subject = $_GET["subject_input"];
        $message = wordwrap($_GET["body_input"], 70, "\r\n");
        $headers = "From:   ".$from;

        // Sending the mail.
        $result_message = "";
        $mail_success = mail($to, $subject, $message, $headers);
        echo $mail_success;
        if($mail_success){
            $result_message = "Mail successfully sent from ".$from." to ".$to;
        }else{
            $result_message = "Mail unsuccessful from ".$from." to ".$to;
        }

   
   ?>
   <body>
        <div class="container container_border">
            <div class="row">
                <div class="col">
                    <h1 id="main_heading">Sending Emails from Server</h1>
                    <p>Remember that you need an email service installed on your computer.</p>
                </div>
            </div>
        </div>
        <hr>
        <ul id="extra_info">
            <li>We us the server to sen the email.</li>
            <li>Animations also use callback functions.</li>
        </ul>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form>
                        <div class="from-group">
                            <label for="exampleInputEmail">To</label>
                            <input class="form-control" type="email" name="to_input" placeholder="Email">
                            <small class="form-text form-muted" id="emailHelp">
                                Enter the person you wish to send the email to.
                            </small>
                        </div>
                        <div class="from-group">
                            <label for="exampleInputEmail">From</label>
                            <input class="form-control" type="email" name="from_input" placeholder="Email">
                            <small class="form-text form-muted" id="emailHelp2">
                                Enter your email address.
                            </small>
                        </div>
                        <div class="from-group">
                            <label for="exampleInputEmail">Subject</label>
                            <input class="form-control" type="text" name="subject_input" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <label for="body_text_area">Body</label>
                            <textarea class="form-control" name="body_input" id="body_text_area" rows="3"></textarea>
                        </div>
                        <br>
                        <button class="btn btn-outline-secondary btn-sm" type="submit" id="bt1">
                            Send Email
                        </button>
                        
                    </form>
                </div>
            </div>
        </div>
        <hr>
        <!-- *************************************************************** -->
        <div class="container container_border">
            <div class="row">
                <div class="col">
                    <h3>Results from user Input</h3>
                </div>
            </div>

            <!-- #################### START OF THE CANVAS 1 #################### -->
            <div class="row">
                <div class="col-lg-3 canvas2" id="main_canvas">
                    <h3>To</h3>
                    <p><?php echo $_GET["to_input"] ?></p>
                </div>
                <div class="col-lg-3 canvas2" id="main_canvas1">
                    <h3>From</h3>
                    <p><?php echo $_GET["from_input"] ?></p>
                </div>
                <div class="col-lg-3 canvas2" id="main_canvas2">
                    <h3>Subject</h3>
                    <p><?php echo $_GET["subject_input"] ?></p>
                </div>
                <div class="col-lg-3 canvas2" id="main_canvas3">
                    <h3>Body</h3>
                    <p><?php echo $_GET["body_input"] ?></p>
                </div>
            </div>
            <div class="alert alert-primary" role="alert">
            <p><?php echo $result_message ?></p>
            </div>
            <!-- #################### END OF THE CANVAS 1 #################### -->
        </div>


   </body><!-- Optional JavaScript; choose one of the two! -->
        <!-- Part 2/2: Bootstrap Bundle with Popper -->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    
</html>