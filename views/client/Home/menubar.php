<script>
    function info(n){
       var showinfo=document.getElementById("showinfo");
       if(n!=1){showinfo.style.display="none";}
       else{
           showinfo.style.display="block";  
       }
    }
    function outinfo(){
        var showinfo=document.getElementById("showinfo");
        showinfo.style.display="none";
    }
</script>
<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container col-md-12">
            
            <nav class="navbar navbar-expand-lg navbar-light bg-light col-md-12">
                <a class="navbar-brand" href="?">
                    <img style="width: 90px;margin-top: -10px;" src="<?php echo LOCATION_URL_PUBLIC."/style/template/img/logo.png";  ?>">
                </a>
                <a class="navbar-brand" href="#">Navbar w/ text</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Pricing</a>
                    </li>
                  </ul>
                  <span class="navbar-text">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                      </form>
                  </span>
                </div>
            </nav>
        </div>
        
        <!-- /.container -->
    </nav>
