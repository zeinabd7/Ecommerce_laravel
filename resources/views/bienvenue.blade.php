<!DOCTYPE html>
<html lang="en">
<head>
  <title>E-Commerce</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/site.css">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<style >
  .carousel-caption {
    text-align: left;
    top: 20px ;
  }
  .carousel-control {
    width: 0px;
  }
  .img-responsive{
    height: 250px;
  }
  .carousel-inner{
      height:400px;
    }
  
</style>
<nav class="navbar navbar-inverse contain_navbar" >
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Accueil</a></li>
        <li><a href="#">A propos</a></li>
                <li><a href="#">Contact</a></li>

      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid contain_header">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">

      <div class="item active">
        <img src="https://article.images.consumerreports.org/w_1199,c_lfill,ar_32:11/prod/content/dam/CRO%20Images%202017/Magazine-Articles/December/CR-Magazine-Hero-December-2017-shopping-cart-price-1017" alt="dakar" style="width:100%;">
        <div class="carousel-caption" >
          <h1>Bienvenue sur le nouveau site de vetements en lignes...</h1>
          <p></p>
        </div>
      </div>

      <div class="item">
        <img src="https://article.images.consumerreports.org/w_1199,c_lfill,ar_32:11/prod/content/dam/CRO%20Images%202017/Magazine-Articles/December/CR-Magazine-Hero-December-2017-shopping-cart-price-1017" alt="dkr" style="width:100%;">
        <div class="carousel-caption">
          <h1>De nombreuses catégories disponible pour plaire a tout le monde</h1>
        </div>
      </div>
    
      <div class="item">
        <img src="https://article.images.consumerreports.org/w_1199,c_lfill,ar_32:11/prod/content/dam/CRO%20Images%202017/Magazine-Articles/December/CR-Magazine-Hero-December-2017-shopping-cart-price-1017" alt="dk" style="width:100%;">
          <div class="carousel-caption">
          <h1>Avec nous, achetez sans soucis!!</h1>
        </div>
        </div>
      </div>
  
    </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Sacs</div>
        <div class="panel-body"><img src="http://www.toutpratique.com/img/cms/comment-ranger-les-sacs-rangement-des-sacs-astuces-pour-ranger-ses-sacs-comment-ranger-sacs-a-main.jpg" class="img-responsive" style="width:100% " alt="Image"/></div>
        <div class="panel-footer">
          <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. "</p>
          <a href="{{asset('list')}}"><button value="submit" class="btn btn-primary" >Voir details</button></a>
        </div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">Bijoux</div>
        <div class="panel-body"><img src="http://www.bijoux-de-lamu.com/images/bijoux-fantaisie-de-marque-en-argent_1.jpg" class="img-responsive" style="width:100%" alt="Image"/></div>
        <div class="panel-footer">
          <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          <a href="{{asset('list')}}"><button value="submit" class="btn btn-primary" >Voir details</button></a>
        </div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">Chaussures</div>
        <div class="panel-body"><img src="https://www.ma-grande-taille.com/wp-content/uploads/2015/03/chaussures-pieds-sensibles-pediconfort-daxon.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
          <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          <a href="{{asset('list')}}"><button value="submit" class="btn btn-primary" >Voir details</button></a>
        </div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Maquillage</div>
        <div class="panel-body"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0P7NYtqi_Xiryg7XYNoW8ZrfU5zrtqGqIQo0uKtBVRj-5EkHx" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
          <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <a href="{{asset('list')}}"><button value="submit" class="btn btn-primary" >Voir details</button></a>
        </div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">Vetements</div>
        <div class="panel-body"><img src="http://maesoftness.com/wp-content/uploads/2017/07/Collage-robes-2.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
          <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          <a href="{{asset('list')}}"><button value="submit" class="btn btn-primary" >Voir details</button></a>
        </div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">Echarpes</div>
        <div class="panel-body"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJf-_sIn8bgWEgD0NHQyKFIf_VPkySJNW8MSEzomO9epTFmbiTaw" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
          <p >"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <a href="{{asset('list')}}"><button value="submit" class="btn btn-primary" >Voir details</button></a>
        </div>
      </div>
    </div>
  </div>
</div><br><br>


<footer class="footer-distributed">


      <div class="footer-left col-md-12 ">
        <div >
          <i class="fa fa-map-marker"></i>
          <p class="heading"><span>Avenue Cheikh Anta Diop</span> Dakar, Senegal</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>+221 33528789</p>
        </div>

      </div>
      <div class="footer-center col-sm-4 ">
        
      </div>

      <div class="footer-right ">
        <p class="footer-company-about">
          <span>A Propos</span>
          Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
        </p>

        <div class="footer-icons">

          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-github"></i></a>

        </div>

      </div>

    </footer>
</body>
</html>
