<?php

/* index.html.twig */
class __TwigTemplate_f28643849fbcb65e6a6af225235d93d6f246a5559db8e5a3f7b00d9434fe3007 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
  <!-- Required meta tags -->
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

  <!-- Bootstrap CSS -->
  <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css\" integrity=\"sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4\" crossorigin=\"anonymous\">

  <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.12/css/all.css\" integrity=\"sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9\" crossorigin=\"anonymous\">
  <title>";
        // line 12
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "</title>
  <style type=\"text/css\">
  body {
    background-color: #eee;
  }
  .theme-pink-bg {
    background-color: #e91e63;
  }
  .theme-pink-color {
    color: #e91e63;
  }

  .movie-nav {
    color: #fff;
  }
  .movie-nav .navbar-nav .nav-item .nav-link {
    color: #fff;
  }
  .movie-search {
    height: 10rem;

  }
  .banner-back {
    height: 20rem;
    width: 100%;
    bottom: 0;
    background: linear-gradient(to bottom, rgba(0,0,0,0), rgba(0,0,0,1));
  }

  .banner-left {
   bottom: 4rem;
   left: 7rem;
 }

 .banner-right {
  bottom: 4rem;
  right: 7rem;
  border: 1px solid #666;
  border-radius: 5px; 
  background-color: black;
  opacity: 0.8
}

.cate-menu a {
  color: #000;
  border-bottom: 1px solid;
  
}

/*.cate-menu .active {
  color: #e91e63;
  border-bottom: 2px solid #e91e63;
}
*/

.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
 background-color: #e91e63;
 color: #fff;
 border-radius: 5px 5px 0 0;

 }



</style>
</head>
<body>
  <!-- nav bar -->
  <nav class=\"navbar navbar-expand-lg navbar-light movie-nav theme-pink-bg\">
    <a class=\"navbar-brand text-white\" href=\"#\">ShineMovie</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <ul class=\"navbar-nav ml-auto\">
        <li class=\"nav-item active\">
          <a class=\"nav-link\" href=\"./movie.html\">Movies</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Ranking</a>
        </li>
        <li class=\"nav-item mr-5\">
          <a class=\"nav-link\" href=\"#\">Comment</a>
        </li>
      </ul>
      <ul class=\"navbar-nav mr-5\">
        <li>
          <i class=\"fas fa-user fa-lg\"></i>

        </li>
      </ul>
      <!--<form class=\"form-inline my-2 my-lg-0\">-->
        <!--<input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">-->
        <!--<button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>-->
        <!--</form>-->
      </div>
    </nav>



    <!-- search -->

    <div class=\"movie-search d-flex justify-content-center\">
      <form class=\"form-inline my-2 my-lg-0\">
        <input class=\"form-control rounded-0 border-white\" type=\"search\" placeholder=\"Search...\" aria-label=\"Search\" \">
        <button class=\"btn text-white rounded-0 theme-pink-bg\" type=\"submit\">
          <i class=\"fas fa-search fa-md\"></i>
        </button>
      </form>
    </div>

    <!-- banner -->
    <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
      <ol class=\"carousel-indicators\">
        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
      </ol>



      <div class=\"carousel-inner\">

        <div class=\"carousel-item active\">
          <!-- first slide -->
          <img class=\"d-block w-100\" src=\"./img/avengers.jpg\" alt=\"First slide\">
          <!-- Movie name -->
          
          <!-- leftside -->
          <div class=\" banner-left position-absolute text-white\">
           <h1 class=\"text-white\" style=\"text-transform: uppercase;\" >Avengers</h1>
           <p><span class=\"mr-4\">Fantasy Animation Family</span> | <span>Duration 2h</span></p>
           <button type=\"button\" class=\"btn btn-lg\" style=\"background-color:  #e91e63; color: #fff\">View Info</button>
         </div>

         <!-- right side -->
         <div class=\"banner-right position-absolute text-white p-1\">
           <p>Rating<span class=\"pl-2 text-secondary\">based on 3000 reviews</span></p>
           <p>3.4</p>
         </div> 
         
       </div>

       <!-- second slide -->
       <div class=\"carousel-item\">
         <img class=\"d-block w-100\" src=\"./img/deadpool.jpg\" alt=\"Second slide\">
       </div>

       <!-- third slide -->
       <div class=\"carousel-item\">
        <img class=\"d-block w-100\" src=\"./img/quietplace.jpg\" alt=\"Third slide\">
      </div>
    </div>


    <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Next</span>
    </a>
  </div>

  <!-- Genre -->
  <div class=\"container-fluid\">

    <!-- underline menu bar -->
   <!--  <div class=\"row my-3 mx-4 cate-menu\">
      <div class=\"col-12\">
        <div class=\"container-fluid\">
          <div class=\"row text-secondary\"  style=\"border-bottom: 1px solid #ccc; line-height: 2.4rem\">
            <div class=\"col-1 active\">All</div>
            <div class=\"col-1\">All</div>
            <div class=\"col-1\">All</div>
          </div>
        </div>
      </div>
    </div> -->


    <!-- Genre menu bar -->
    <nav class=\"cate-menu my-3 mx-4\">
      <div class=\"nav nav-tabs\" id=\"cate-tab\" role=\"tablist\">
        <a class=\"nav-item nav-link active\" id=\"nav-action-tab\" data-toggle=\"tab\" href=\"#nav-home\" role=\"tab\" aria-controls=\"nav-home\" aria-selected=\"true\">Action</a>
        <a class=\"nav-item nav-link\" id=\"nav-sciencefiction-tab\" data-toggle=\"tab\" href=\"#nav-profile\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Science Fiction</a>
        <a class=\"nav-item nav-link\" id=\"nav-comedy-tab\" data-toggle=\"tab\" href=\"#nav-contact\" role=\"tab\" aria-controls=\"nav-contact\" aria-selected=\"false\">Comedy</a>
        <a class=\"nav-item nav-link\" id=\"nav-romance-tab\" data-toggle=\"tab\" href=\"#nav-contact\" role=\"tab\" aria-controls=\"nav-contact\" aria-selected=\"false\">Romance</a>
        <a class=\"nav-item nav-link\" id=\"nav-fantasy-tab\" data-toggle=\"tab\" href=\"#nav-contact\" role=\"tab\" aria-controls=\"nav-contact\" aria-selected=\"false\">Fantasy</a>
        <a class=\"nav-item nav-link\" id=\"nav-crime-tab\" data-toggle=\"tab\" href=\"#nav-contact\" role=\"tab\" aria-controls=\"nav-contact\" aria-selected=\"false\">Crime</a>
      </div>
    </nav>
   <!--  <div class=\"tab-content\" id=\"nav-tabContent\">
      <div class=\"tab-pane fade show active\" id=\"nav-home\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">...</div>
      <div class=\"tab-pane fade\" id=\"nav-profile\" role=\"tabpanel\" aria-labelledby=\"nav-profile-tab\">...</div>
      <div class=\"tab-pane fade\" id=\"nav-contact\" role=\"tabpanel\" aria-labelledby=\"nav-contact-tab\">...</div>
    </div> -->


  

    <!-- card -->

    <div class=\"row mx-5 px-5\">
      <div class=\"col-4 col-md-3 my-2\">
        <div class=\"card\">
          <img class=\"card-img-top\" src=\"http://img.sj33.cn/uploads/allimg/201609/7-160926211351.jpg\" alt=\"Card image cap\">
          <div class=\"card-body\">
            <div class=\"float-right border border-danger rounded p-1 theme-pink-color bg-light\">
              4.0
            </div>
            <h5 class=\"card-title\">Arival</h5>
            <p class=\"card-text\">Action,Thriller,Sci-Fi</p>

          </div>
        </div>
      </div>

      <div class=\"col-4 col-md-3 my-2\">
        <div class=\"card\">
          <img class=\"card-img-top\" src=\"http://img.sj33.cn/uploads/allimg/201609/7-160926211351.jpg\" alt=\"Card image cap\">
          <div class=\"card-body\">
            <div class=\"float-right border border-danger rounded p-1 theme-pink-color bg-light\">
              4.0
            </div>
            <h5 class=\"card-title\">Arival</h5>
            <p class=\"card-text\">Action,Thriller,Sci-Fi</p>

          </div>
        </div>
      </div>

      <div class=\"col-4 col-md-3 my-2\">
        <div class=\"card\">
          <img class=\"card-img-top\" src=\"http://img.sj33.cn/uploads/allimg/201609/7-160926211351.jpg\" alt=\"Card image cap\">
          <div class=\"card-body\">
            <div class=\"float-right border border-danger rounded p-1 theme-pink-color bg-light\">
              4.0
            </div>
            <h5 class=\"card-title\">Arival</h5>
            <p class=\"card-text\">Action,Thriller,Sci-Fi</p>

          </div>
        </div>
      </div>

      <div class=\"col-4 col-md-3 my-2\">
        <div class=\"card\">
          <img class=\"card-img-top\" src=\"http://img.sj33.cn/uploads/allimg/201609/7-160926211351.jpg\" alt=\"Card image cap\">
          <div class=\"card-body\">
            <div class=\"float-right border border-danger rounded p-1 theme-pink-color bg-light\">
              4.0
            </div>
            <h5 class=\"card-title\">Arival</h5>
            <p class=\"card-text\">Action,Thriller,Sci-Fi</p>

          </div>
        </div>
      </div>

      <div class=\"col-4 col-md-3 my-2\">
        <div class=\"card\">
          <img class=\"card-img-top\" src=\"http://img.sj33.cn/uploads/allimg/201609/7-160926211351.jpg\" alt=\"Card image cap\">
          <div class=\"card-body\">
            <div class=\"float-right border border-danger rounded p-1 theme-pink-color bg-light\">
              4.0
            </div>
            <h5 class=\"card-title\">Arival</h5>
            <p class=\"card-text\">Action,Thriller,Sci-Fi</p>

          </div>
        </div>
      </div>

      <div class=\"col-4 col-md-3 my-2\">
        <div class=\"card\">
          <img class=\"card-img-top\" src=\"http://img.sj33.cn/uploads/allimg/201609/7-160926211351.jpg\" alt=\"Card image cap\">
          <div class=\"card-body\">
            <div class=\"float-right border border-danger rounded p-1 theme-pink-color bg-light\">
              4.0
            </div>
            <h5 class=\"card-title\">Arival</h5>
            <p class=\"card-text\">Action,Thriller,Sci-Fi</p>

          </div>
        </div>
      </div>

      <div class=\"col-4 col-md-3 my-2\">
        <div class=\"card\">
          <img class=\"card-img-top\" src=\"http://img.sj33.cn/uploads/allimg/201609/7-160926211351.jpg\" alt=\"Card image cap\">
          <div class=\"card-body\">
            <div class=\"float-right border border-danger rounded p-1 theme-pink-color bg-light\">
              4.0
            </div>
            <h5 class=\"card-title\">Arival</h5>
            <p class=\"card-text\">Action,Thriller,Sci-Fi</p>

          </div>
        </div>
      </div>

    </div>

    <hr>

    <footer class=\"container\">
      <p>Design by Jiayue Chen</p>
    </footer>



  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\" integrity=\"sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ\" crossorigin=\"anonymous\"></script>
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\" integrity=\"sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm\" crossorigin=\"anonymous\"></script>
  <script type=\"text/javascript\">
    \$(function(){
      \$('cate-tab div:first-child a' ).tab('show')
    })
  </script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 12,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html.twig", "/var/www/public/shinemovie/templates/index.html.twig");
    }
}
