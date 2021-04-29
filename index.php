<?php session_start();?>
<?php include('h.php');?>
<body>
 
  <div class="container">
    <?php include('navbar2.php');?>
    <img src="image1/cat.jpg" class="img-fluid" alt="Responsive image">

    <?php include('navbar.php');?>

    <div class="row">
        <div class="col-md-2">
            <?php include('menu.php');?>
            </div>

            <div class="col-md-10">
            <?php 
                $act = (isset($_GET['act']) ? $_GET['act'] : '') ;
                $q = (isset($_GET['q']) ? $_GET['q'] : '') ;
                    if($act == 'showbytype'){
                        include('show_product_type.php');
                    } 
                    elseif ($q!=''){
                        include('show_product_q.php');
                    }  
                    else {
                        include('show_product.php');
                    }
            ?>
            
            </div>
    </div>
    
    </div>    
  </div>
</body>
</html>