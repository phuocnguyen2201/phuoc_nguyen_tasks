<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Exploring your future wonderful highly skilled freelancer.">
    <title><?php echo $title?></title>

    <link rel="icon" type="image/x-icon" href="./image/favicon_io/favicon.ico">

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./style/styles.css">
    <link rel="stylesheet" type="text/css" href="./style/header.css">
    <link rel="stylesheet" type="text/css" href="./style/styling-phuoc.css">
    <script src="https://kit.fontawesome.com/192e3b220b.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="main">
        <div class="header">        
            <div class="container-lg pt-3">
                <div class="row"> 
                    <nav class="menu">
                        <div class="logo">
                            <a href="/Portfolio_Project/"><img class="header-logo" alt="G6 Portfolio Logo" src="image/favicon_io/header-favicon-32x32.png"></a>
                        </div>
                        <input type="checkbox" id="check">
                        <label for="check" class="checkbtn">
                            <i class="fa-solid fa-bars"></i>
                        </label>
                        <ul role="menubar" class="nav-list">
                            <hr class="divider">
                              <li role="menuitem" class="has-children">
                                  <a href="/Portfolio_Project/">Home</a>
                              </li>
                              <li role="menuitem" class="has-children">
                                  <a href="/Portfolio_Project/about.html">About</a>
                              </li>
                              <li role="menuitem" class="has-children">
                                  <a href="/Portfolio_Project/team.html">Team</a>
                              </li>
                              <li role="menuitem" class="has-children">
                                  <a href="/Portfolio_Project/contact.html">Contact</a>
                              </li>
                            <hr class="divider">
                        </ul>
                    </nav>
                    
                </div>
        </div>
    </div>
    <div class="content">   
        <div class="container-lg py-5">
          <div class="row">
              <div class="col-lg-6 col-md-12 mb-4 mt-5">
                  <h1 class="title"><?php echo $excercise?></h1>
                  <p><?php echo $description?></p>
                  <a href="ex1.php"><button type="button" class="btn-normal">Excercise 1</button></a>
                  <a href="ex2.php"><button type="button" class="btn-normal">Excercise 2</button></a>
                  <a href="ex3.php"><button type="button" class="btn-normal">Excercise 3</button></a>
                  <a href="ex4.php"><button type="button" class="btn-normal">Excercise 4</button></a>
                  <a href="#"><button type="button" class="btn-normal">Excercise 5</button></a>
                  <a href="#"><button type="button" class="btn-normal">Excercise 6</button></a>
                  <a href="#"><button type="button" class="btn-normal">Excercise 7</button></a>
              </div>
              <div class="col-lg-6 col-md-12 mb-4">
                  <img class="img-thumbnail" alt="A man sitting on the rooftop and working with his laptop" src="image/avi-richards-Z3ownETsdNQ-unsplash.jpg">
              </div>
          </div>
    </div></div>