<!DOCTYPE html>
<html>
    <head>
        <title>Vector Spaces</title>
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
        } 
        .btn-def{
          float:left;
          margin-top: 5px;
        }
        #vs_par{
          margin:5px;
        }
        #li_text{
          position: relative;
          top:10px;
        }
    </style>
</head>
<body>
    <?php 
      include("nav.html");
    ?>
    <br>
  
    <!-- **************************************************************** -->
    <!-- Vector Spaces -->
    <!-- **************************************************************** -->

    <div class="container-fluid">  
      <hr>
      <h1 class="heading" id="vs_heading">Vector Spaces</h1>
      <p id="vs_par">A vector space is a set of 'vectors' over a field, along with a way to add the vectors
        and multiply them with scalars.
      </p>
      <hr>
      <div class="row">
        <div class="col-1">
          <!-- Button trigger modal -->
          <button id="idea" type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal1"
          data-toggle="tooltip" title="This displays a rough visual of how you can think of a vector space."
          >
                Idea
          </button>
        </div>
        <div class="col-1">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary btn-sm" 
          data-toggle="tooltip" title="The set of continous functions over the complex numbers is a vectors space.">
                Example1
          </button>
        </div>
      </div>
      <hr>
      <h3 class="heading">Notions surrounding Vector Spaces</h3>
      <hr>
      <div class="row">

          <div class="col-4 block">
            <button id="li_def_b" type="button" class="btn btn-outline-secondary btn-sm btn-def"
            data-toggle="tooltip" title="The definition of linear independent vectors."
            
            >Def</button>
            <h4 class="heading">Linear Independence</h4>
            <span id="li_text" style="display: none;"> $\forall$ $\mathbb{Z}$ n > 1, n vectors are said to be linearly independent 
              $\Leftrightarrow$ cv<sub>1</sub>, cv<sub>n</sub>, ..., cv<sub>n</sub> = 0 has a unique solution
               where c<sub>1</sub> = cv<sub>n</sub> = ... = c<sub>n</sub> = 0, c<sub>i</sub> $\in$ $\mathbb{F}$. 
            </span>
          </div>
          <div class="col-4 block">
            <h4 class="heading">A set that Spans/ Generates</h4>
          </div>
          <div class="col-4 block">
            <h4 class="heading">A basis for a space.</h4>
          </div>
      </div>

        <!-- Modal 1-->
      <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
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
    $$\pi$$
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
          $("#modal_text").html("<img class='img-responsive' src='images/whatIsAVspace.png' style='max-height:550px;'/>");
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

    </script>
</body>
</html>
