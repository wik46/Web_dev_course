<!DOCTYPE html>
<html>
    <head>
        <title>Mathematics Index</title>
    </head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- CDN for Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- ********************************** -->

    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">

    <script src="js/drawing.js"></script> 
    <link rel="stylesheet" href="css/math.css">
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
            width: 80%;
            height: 550px;
            margin-left: auto;
            margin-right: auto;
        }
        .first_canvas{
            border: 1px solid black;
            background-color: black;
            width: 90%;
            height: 100%;
        }
        .side_block{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php 
      include("nav.html");
    ?>
    <br>
  

    <!-- **************************************************************** -->
    <!-- History -->
    <!-- **************************************************************** -->

    <div class="container-fluid">  
      <hr>
        <h3>History and Famous Mathematicians</h3>
        <p>This will be a section where we explore the history of Mathematics and the people behind it.</p>
        <hr>
        <div class="row">
            <div class="col-3 ">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link" >Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>
            </div>
            <div class="col-3 ">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>
            </div>
            <div class="col-3 ">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>
            </div>
        </div>
    </div>
    <br>
    <!-- **************************************************************** -->
    <!-- Tools -->
    <!-- **************************************************************** -->
    <div class="container-fluid">  
      <hr>
      <h3>Tools</h3>
      <p>Here you will find <strong>Visualization Tools</strong> and <strong>Computional Tools</strong>.</p>
      <hr>
      <div class="row">
          <!-- Card 1-->
          <div class="col-3 ">
            <div class="card" >
              <img src="images/circ_card_photo.png" alt="circ_card_photo" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Circular Motion</h5>
                <h6 class="card-subtitle mb-2 text-muted"></h6>
                <p class="card-text"></p>
                <a href="circular_motion.php" class="btn btn-outline-success btn-sm" data-toggle="tooltip" data-placement="left" 
                title="This is a basic program that shows a point moving on a co-ordinate axis."
                >Open Tool</a>
              </div>
            </div>
          </div>
          <!-- ******** -->
          <div class="col-3 ">
            <div class="card" >
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>
          </div>
          <div class="col-3" >
            <div class="card" >
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>
          </div>
          <div class="col-3 " >
            <div class="card" >
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>
          </div>
      </div>
  </div>
  <br>
 
    <!-- **************************************************************** -->
    <!-- Branches  -->
    <!-- **************************************************************** -->
    <div class="container-fluid">  
      <hr>
      <h3>Branches of Mathematics</h3>
      <p>This area looks at the different <strong>branches</strong> of Mathematics.</p>
      <hr>
      <div class="row">
          <div class="col-3 " >
            <div class="card">
              <img src="images/linAlg_card.png" alt="circ_card_photo" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Linear Algebra</h5>
                <h6 class="card-subtitle mb-2 text-muted">Introduction</h6>
                <p class="card-text"></p>
                <a href="/vector_spaces.php" class="btn btn-outline-success btn-sm mb-1" data-toggle="tooltip" 
                title="Axioms, span, subspaces, basis, transformations, matrices, and more."
                >Vector Spaces</a>
                <button href="#" class="btn btn-outline-success btn-sm mb-1" data-toggle="tooltip" 
                title="3 types of solutions,  finding solutions, ..."
                >Systems of Equations</button>
                <button href="#" class="btn btn-outline-success btn-sm mb-1" data-toggle="tooltip" 
                title="Answering the question of: What is the determinant?"
                >Determinants</button>
                <button href="#" class="btn btn-outline-success btn-sm mb-1" data-toggle="tooltip" 
                title="The study of Eigenvalues and Eigenvectors."
                >Spectral Theory</button>
                <button href="#" class="btn btn-outline-success btn-sm mb-1" data-toggle="tooltip" 
                title="Still"
                >Inner Product Spaces</button>
                <button href="#" class="btn btn-outline-success btn-sm mb-1" data-toggle="tooltip" 
                title="Still needed"
                >???</button>
              </div>
            </div>
          </div>
          <div class="col-3 ">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>
          </div>
          <div class="col-3 ">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Discrete Mathematics</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">
                  <!-- Logic -->                  
                  <button href="#" class="btn btn-outline-success btn-sm mb-1" data-toggle="tooltip" 
                  title="A kind introduction to Sentential Logic, Set Theory, and Qunatificational Logic"
                  >Logic and Other</button>
                  <!-- Proofs -->                  
                  <button href="#" class="btn btn-outline-success btn-sm mb-1" data-toggle="tooltip" 
                  title="An introduction to the basic structures used to proof Mathematical statements"
                  >Basic Proof Structures</button>
                  <!-- Relations -->                  
                  <button href="#" class="btn btn-outline-success btn-sm mb-1" data-toggle="tooltip" 
                  title="An introduction to some fundamental Mathematical objects."
                  >Relations</button>
                  <!-- Functions -->                  
                  <button href="#" class="btn btn-outline-success btn-sm mb-1" data-toggle="tooltip" 
                  title="Functions as used in higher, more abstract Mathematics."
                  >Functions</button>
                  <!-- Principle of Mathematical Induction -->                  
                  <button href="#" class="btn btn-outline-success btn-sm mb-1" data-toggle="tooltip" 
                  title="A guide to one of the most powerful proof techniques in Mathematics and Computer Science."
                  >Mathematical Induction</button>
                </p>
              </div>
            </div>
          </div>
          <div class="col-3 ">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Trigonometry</h5>
                <h6 class="card-subtitle mb-2 text-muted">Introduction</h6>
                <p class="card-text">
                  <!-- Basics -->                  
                  <a href="trig_basics.php" class="btn btn-outline-success btn-sm mb-1" data-toggle="tooltip" 
                  title="A general discussion of how to think of Trigonometry and how to apply it."
                  >Basics</a>
                  <!-- Triangles -->
                  <button href="#" class="btn btn-outline-success btn-sm mb-1" data-toggle="tooltip" 
                  title="Motivtions using triangles."
                  >Triangle Viewpoint</button>
                  <!-- Circles -->
                  <button href="#" class="btn btn-outline-success btn-sm mb-1" data-toggle="tooltip" 
                  title="Motivtions using circles."
                  >Unit Circle Viewpoint</button>
                </p>

              </div>
            </div>
          </div>
      </div>
  </div>
  <br>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <script type="text/JavaScript">
      // Enable Tooltips
      $(function () {
          $('[data-toggle="tooltip"]').tooltip();
      });
    </script>
</body>
</html>
