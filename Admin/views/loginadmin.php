<title></title>
<body>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link href="./style/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../style/css/form-elements.css">
    <link rel="stylesheet" href="../style/css/style.css">
    
  
    <div class="top-content" >
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login to Admin page</h3>
                                                <p style="color: red"><?php if(isset($notis)) echo $notis?></p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" method="post" class="form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="user" placeholder="Username..." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="pass" placeholder="Password..." class="form-password form-control" id="form-password">
			                        </div>
                                    <select style=" width: 25%" name="bophan">
                                        <option value="admin">Admin</option>
                                        <?php
                                        foreach ($bp as $rowbp) {?>
                                        <option value="<?=$rowbp['bp_id'] ?>"><?=$rowbp['bp_tenbophan'] ?></option>
                                       <?php } ?>
                                    </select><a href=""></a>
                                    <button type="submit" name="submit" class="btn">Log in</button>
			                    </form>
                                
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

 <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Phạm Quang Toàn</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>


    <!-- /.container -->

    <!-- jQuery -->
    <script src="../style/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../style/js/bootstrap.min.js"></script>


