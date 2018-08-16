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
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="?">
                    <img style="width: 90px;margin-top: -10px;" src="<?php echo $_SERVER['REQUEST_URI']."/style/template/img/logo.png";  ?>">
                </a>
            </div>
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
