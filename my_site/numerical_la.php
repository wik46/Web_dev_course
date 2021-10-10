<!DOCTYPE html>
<html>
    <head>
        <title>Numerical Linear Algebra</title>
    </head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- CDN for Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- ********************************** -->
    <!-- CDN for MathJax to use latex. -->
    <script type="text/javascript" id="MathJax-script" async
      src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js">
    </script>
    <script>
      MathJax = {
        tex: {
          inlineMath: [['$', '$'], ['\\(', '\\)']]
        }
      };
      </script>
     <!-- ********************************** -->
     <!-- Some additional fonts. -->
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <!-- ********************************** -->
    <script src="js/drawing.js"></script> 
    <link rel="stylesheet" href="/my_site/css/math.css" >
    <style type="text/css">
        body, h1, p, ul{
            margin:0px;
            padding:0px;
            font-family: 'Nanum Gothic', sans-serif;
            text-align: center;
            background-color: #F5F5F7 ;
        }

        div.block{
            border: 1px solid black;
            /*width: 80%;*/
            height: 200px;
            margin-left: auto;
            margin-right: auto;
        }

        .heading{
          font-family: 'Palette Mosaic', cursive;
          margin: 1px;
          position:relative;
        } 
        .btn-def{
          
          margin-top: 5px;
        }

        #vs_par{
          margin:5px;
        }
        #li_text{
          position: relative;
          top:20px;
        }
    </style>
</head>
    <?php 
      include("nav.html");
    ?>
    <br>
  
    <!-- **************************************************************** -->
    <!-- Numerical Linear Algebra: In progress -->
    <!-- **************************************************************** -->

    <div class="container-fluid">  
      <hr>
      <h1 class="heading" id="vs_heading">Numerical Linear Algebra</h1>
      <p id="vs_par">This show various numerical methods for solving linear equations and more.
      </p>
      <hr>
      <div class="row">
        <div class="col-1">
          <!-- Button trigger modal -->
          <button id="intro" onclick="" type="button" class="btn btn-primary btn-sm" 
          data-toggle="tooltip" title="This contains proofs surrounding properties of non-singular matarices, different types of norms
          for vectors and matrices, and properties surround a unitary matix."
          >
                Intro
        </button>
        </div>

        <div class="col-1">
          <!-- Button trigger modal -->
          <button id="ex1" type="button" class="btn btn-primary btn-sm" 
          data-toggle="tooltip" title="Comming soon.">
                Example1
          </button>
        </div>
        <div class="col-1">
          <!-- Button trigger modal -->
          <button id="ex2" type="button" class="btn btn-primary btn-sm" 
          data-toggle="tooltip" title="Comming soon.">
                Example2
          </button>
        </div>
        <div class="col-1">
          <!-- Button trigger modal -->
          <button id="ex3" type="button" class="btn btn-primary btn-sm" 
          data-toggle="tooltip" title="Comming soon.">
                Example3
          </button>
        </div>
        <div class="col-1">
          <!-- Button trigger modal -->
          <button id="ex4" type="button" class="btn btn-primary btn-sm" 
          data-toggle="tooltip" title="Comming soon.">
                Example4
          </button>
        </div>

      </div>
      <hr>
      <h3 class="heading">Click on the intro button and see what happens.</h3>
      <hr>
      <!-- This is just to hide it and change it later. -->

      <!-- Intro pdf element-->
      <!-- Source to use when working locally: "/home/lodewyk/Documents/tutorials/software/Web_dev_course/my_site/images/intro.pdf"-->
      <div class="row" id="intro_pdf" style="display:none; " >
        <div id="canvas_container">
          <embed src="images/intro.pdf" type="application/pdf" width="100%" height="1000px" />
        </div>
    </div>

      <div style="display: none;">
      <div class="row">

          <div class="col-4 block">
            <h4 class="heading">Linear Independence</h4>
            <span>
            <button id="li_def_b" type="button" class="btn btn-outline-secondary btn-sm btn-def"
            data-toggle="tooltip" title="The definition of linear independent vectors."
            
            >Def</button>
            <button id="li_la_b" type="button" class="btn btn-outline-secondary btn-sm btn-def"
            data-toggle="tooltip" title="Explanation of linearly independent vectors."
            
            >Expl. of def</button>

          </span>
          <br>
            <span id="li_text" style="display: none;"> $\forall$ n > 1 $\in$ $\mathbb{Z}$ , n vectors are said to be linearly independent 
              $\Leftrightarrow$ cv<sub>1</sub>+ cv<sub>n</sub>+ ...+ cv<sub>n</sub> = 0 has a unique solution
               where c<sub>1</sub> = cv<sub>n</sub> = ... = c<sub>n</sub> = 0, c<sub>i</sub> $\in$ $\mathbb{F}$. 
            </span>
            <br>
            <span id="li_text2" style="display: none;">
              <ul>
                <h5>In lamens terms:</h3>
                <li><p>$\forall$ n $\geqslant$ 1 $\in$ $\mathbb{Z}$, we can talk about n linearly independent vectors. </p></li>
                <li><p>We have a notion of linearly independent vectors because we want to eliminate duplicate information.
                        See the euclidean space example ($\mathbb{R}$<sup>n</sup>).
                </p></li>
              </ul>
            </span>
          </div>
          <div class="col-4 block">
            <h4 class="heading">Span</h4>
          </div>
          <div class="col-4 block">
            <h4 class="heading">Linear Combination</h4>
          </div>
      </div>
      <br>
      <div class="row">

        <div class="col-4 block">

          <h4 class="heading">Basis</h4>
          <span>
            <button id="li_def_b4" type="button" class="btn btn-outline-secondary btn-sm btn-def"
            data-toggle="tooltip" title="The definition of a basis for a vector space."
            
            >Def</button>
            <button id="li_la_b4" type="button" class="btn btn-outline-secondary btn-sm btn-def"
            data-toggle="tooltip" title="Explanation of what a basis for a vector space is."
            
            >Expl. of def</button>
          </span>
          <br>
          <span id="li_text_basis" style="display: none;"> 
          </span>
        </div>
        
    </div>
    </div>
        <!-- Modal 1-->
      <div class="modal fade bd-example-modal-lg" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Example idea of a Vector Space</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" id="modal_text">
             
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    $$Comming$$ $$soon!$$
    <br>
 
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <script type="text/JavaScript">
      // Enable Modals
      
      // Enable Tooltips
      $(function () {
          $('[data-toggle="tooltip"]').tooltip();
      });
      // Display Photo.
      $("#idea").click(
        function(){
          $("#modal_text").html("<img class='img-responsive' src='images/whatIsAVspace.png' style='max-height:700px;'/>");
        }
      );
      // Display if hover over heading.
      var orig0 = $("#vs_par").html();
      $("#vs_heading").mouseover(
        function(){

          $("#vs_par").html("We only consider real and complex vector spaces in these examples for now. "+
          "When our field (the place where the scalars come from) is the set of real numbers then we have"+
          " a <strong>real</strong> vector space. When our field (the place where the scalars come from) is the set of complex"+ 
          " numbers then we have a <strong>complex</strong> vector space."
          );
        }
      ).mouseout(
        function(){
          $("#vs_par").html(orig0);
        }
      );
      // Definitions.
      var orig1 = $("#li_text").html();
      $("#li_def_b").mouseover(
        function(){

          $("#li_text").attr("style","display:inline");
        }
      ).mouseout(
        function(){
          $("#li_text").attr("style","display:none");
        }
      );

       // Lamens terms explanation.
       // We store the original text in the var to retrun after hover.
       var orig2 = $("#li_text2").html(); 
       $("#li_la_b").mouseover(
        function() {
          $("#li_text2").attr("style","display:inline;");
        }
       ).mouseout(
        function(){
          $("#li_text2").attr("style","display:none;")
        }
       );

        // Changing the display of the pdf viewer for intro buttin
        $('#intro').click(
            function (){

               
                if( $('#intro_pdf').css('display') == "none"){ 
                    alert("Click on the intro button again to hide the pdf viewer");
                     $('#intro_pdf').css("display","flex");
                }else{
                     $('#intro_pdf').css("display","none");    
                }    
                }
        );
    </script>
</body>
</html>
