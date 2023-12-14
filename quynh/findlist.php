<?php  

    include './view/header.php';
    // require_once "./php/DanhMuc.php";

    
    
   
    

?>



<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Danh mục </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/ticker-style.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
   </head>

   <body>

    
    <main>
    <!-- Trending Area Start -->
    <div class="trending-area fix">
        <div class="container">
            <div class="trending-main">
          

            <div class="row">
       <div class="col-lg-20">




<h1> 
<?php echo $user_name = $_POST["DM"]; ?> 
</h1>  
<?php $GetNew = DM::GetNew();$dem = $_SESSION['dem'];  ?>



<div class="trending-bottom">
                            <div class="row">




                              
                               
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                    <form action="detail.php" method="post"> 


                                        <div class="trend-bottom-img mb-30">
                                            <button type="submit" style="background-color:white; border:white;padding:0">
                                                <img src="<?php $a=0; if($a<$dem){ $b="a".$a;  echo $_SESSION['a0'];}else{return 0;};  ?>" alt="">
                                            </button>
                                        </div>
                                        <div class="trend-bottom-cap">                                          
                                            <h6> 
                                                    <input type="hidden"  name="news_id" value="<?php $x=0; if($x<$dem){$y="t".$x; echo $_SESSION['t0'];}else{return 0;}  ?> " >
                                                    </input>                                       
                                                     <?php $i=0; if($i<$dem){ echo $_SESSION['0'];$i++; $a++;$x++;}else{return 0;} ?>                                                                                          
                                            </h6>
                                            
                                        </div>


                                        
                                    </form>
                                    </div>
                                </div>


                                                               
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                    <form action="detail.php" method="post"> 
                                        <div class="trend-bottom-img mb-30">
                                            <button type="submit" style="background-color:white; border:white;padding:0">
                                                <img src="<?php  if($a<$dem){ $b="a".$a;  echo $_SESSION[$b];}else{return 0;};  ?>" alt="">
                                            </button>
                                        </div>
                                        <div class="trend-bottom-cap">                                          
                                            <h6> 
                                                    <input type="hidden"  name="news_id" value="<?php if($x<$dem){$y="t".$x; echo $_SESSION[$y];}else{return 0;}  ?> " >
                                                    </input>                                       
                                                     <?php  if($i<$dem){ echo $_SESSION[$i];$i++; $a++;$x++;}else{return 0;} ?>                                                                                          
                                            </h6>
                                            
                                        </div>
                                    </form>
                                    </div>
                                </div>


                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                    <form action="detail.php" method="post"> 
                                        <div class="trend-bottom-img mb-30">
                                            <button type="submit" style="background-color:white; border:white;padding:0">
                                                <img src="<?php  if($a<$dem){ $b="a".$a;  echo $_SESSION[$b];}  ?>" alt="">
                                            </button>
                                        </div>
                                        <div class="trend-bottom-cap">                                          
                                            <h6> 
                                                    <input type="hidden"  name="news_id" value="<?php if($x<$dem){$y="t".$x; echo $_SESSION[$y];}  ?> " >
                                                    </input>                                       
                                                     <?php  if($i<$dem){ echo $_SESSION[$i];$i++; $a++;$x++;} ?>                                                                                          
                                            </h6>
                                            
                                        </div>
                                    </form>
                                    </div>
                                </div>

                                
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                    <form action="detail.php" method="post"> 
                                        <div class="trend-bottom-img mb-30">
                                            <button type="submit" style="background-color:white; border:white;padding:0">
                                                <img src="<?php  if($a<$dem){ $b="a".$a;  echo $_SESSION[$b];}  ?>" alt="">
                                            </button>
                                        </div>
                                        <div class="trend-bottom-cap">                                          
                                            <h6> 
                                                    <input type="hidden"  name="news_id" value="<?php if($x<$dem){$y="t".$x; echo $_SESSION[$y];}  ?> " >
                                                    </input>                                       
                                                     <?php  if($i<$dem){ echo $_SESSION[$i];$i++; $a++;$x++;} ?>                                                                                          
                                            </h6>
                                            
                                        </div>
                                    </form>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                    <form action="detail.php" method="post"> 
                                        <div class="trend-bottom-img mb-30">
                                            <button type="submit" style="background-color:white; border:white;padding:0">
                                                <img src="<?php  if($a<$dem){ $b="a".$a;  echo $_SESSION[$b];}  ?>" alt="">
                                            </button>
                                        </div>
                                        <div class="trend-bottom-cap">                                          
                                            <h6> 
                                                    <input type="hidden"  name="news_id" value="<?php if($x<$dem){$y="t".$x; echo $_SESSION[$y];}  ?> " >
                                                    </input>                                       
                                                     <?php  if($i<$dem){ echo $_SESSION[$i];$i++; $a++;$x++;} ?>                                                                                          
                                            </h6>
                                            
                                        </div>
                                    </form>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                    <form action="detail.php" method="post"> 
                                        <div class="trend-bottom-img mb-30">
                                            <button type="submit" style="background-color:white; border:white;padding:0">
                                                <img src="<?php  if($a<$dem){ $b="a".$a;  echo $_SESSION[$b];}  ?>" alt="">
                                            </button>
                                        </div>
                                        <div class="trend-bottom-cap">                                          
                                            <h6> 
                                                    <input type="hidden"  name="news_id" value="<?php if($x<$dem){$y="t".$x; echo $_SESSION[$y];}  ?> " >
                                                    </input>                                       
                                                     <?php  if($i<$dem){ echo $_SESSION[$i];$i++; $a++;$x++;} ?>                                                                                          
                                            </h6>
                                            
                                        </div>
                                    </form>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                    <form action="detail.php" method="post"> 
                                        <div class="trend-bottom-img mb-30">
                                            <button type="submit" style="background-color:white; border:white;padding:0">
                                                <img src="<?php  if($a<$dem){ $b="a".$a;  echo $_SESSION[$b];}  ?>" alt="">
                                            </button>
                                        </div>
                                        <div class="trend-bottom-cap">                                          
                                            <h6> 
                                                    <input type="hidden"  name="news_id" value="<?php if($x<$dem){$y="t".$x; echo $_SESSION[$y];}  ?> " >
                                                    </input>                                       
                                                     <?php  if($i<$dem){ echo $_SESSION[$i];$i++; $a++;$x++;} ?>                                                                                          
                                            </h6>
                                            
                                        </div>
                                    </form>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                    <form action="detail.php" method="post"> 
                                        <div class="trend-bottom-img mb-30">
                                            <button type="submit" style="background-color:white; border:white;padding:0">
                                                <img src="<?php  if($a<$dem){ $b="a".$a;  echo $_SESSION[$b];}  ?>" alt="">
                                            </button>
                                        </div>
                                        <div class="trend-bottom-cap">                                          
                                            <h6> 
                                                    <input type="hidden"  name="news_id" value="<?php if($x<$dem){$y="t".$x; echo $_SESSION[$y];}  ?> " >
                                                    </input>                                       
                                                     <?php  if($i<$dem){ echo $_SESSION[$i];$i++; $a++;$x++;} ?>                                                                                          
                                            </h6>
                                            
                                        </div>
                                    </form>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                    <form action="detail.php" method="post"> 
                                        <div class="trend-bottom-img mb-30">
                                            <button type="submit" style="background-color:white; border:white;padding:0">
                                                <img src="<?php  if($a<$dem){ $b="a".$a;  echo $_SESSION[$b];}  ?>" alt="">
                                            </button>
                                        </div>
                                        <div class="trend-bottom-cap">                                          
                                            <h6> 
                                                    <input type="hidden"  name="news_id" value="<?php if($x<$dem){$y="t".$x; echo $_SESSION[$y];}  ?> " >
                                                    </input>                                       
                                                     <?php  if($i<$dem){ echo $_SESSION[$i];$i++; $a++;$x++;} ?>                                                                                          
                                            </h6>
                                            
                                        </div>
                                    </form>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                    <form action="detail.php" method="post"> 
                                        <div class="trend-bottom-img mb-30">
                                            <button type="submit" style="background-color:white; border:white;padding:0">
                                                <img src="<?php  if($a<$dem){ $b="a".$a;  echo $_SESSION[$b];}  ?>" alt="">
                                            </button>
                                        </div>
                                        <div class="trend-bottom-cap">                                          
                                            <h6> 
                                                    <input type="hidden"  name="news_id" value="<?php if($x<$dem){$y="t".$x; echo $_SESSION[$y];}  ?> " >
                                                    </input>                                       
                                                     <?php  if($i<$dem){ echo $_SESSION[$i];$i++; $a++;$x++;} ?>                                                                                          
                                            </h6>
                                            
                                        </div>
                                    </form>
                                    </div>
                                </div>

                                
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                    <form action="detail.php" method="post"> 
                                        <div class="trend-bottom-img mb-30">
                                            <button type="submit" style="background-color:white; border:white;padding:0">
                                                <img src="<?php  if($a<$dem){ $b="a".$a;  echo $_SESSION[$b];}  ?>" alt="">
                                            </button>
                                        </div>
                                        <div class="trend-bottom-cap">                                          
                                            <h6> 
                                                    <input type="hidden"  name="news_id" value="<?php if($x<$dem){$y="t".$x; echo $_SESSION[$y];}  ?> " >
                                                    </input>                                       
                                                     <?php  if($i<$dem){ echo $_SESSION[$i];$i++; $a++;$x++;} ?>                                                                                          
                                            </h6>
                                            
                                        </div>
                                    </form>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                    <form action="detail.php" method="post"> 
                                        <div class="trend-bottom-img mb-30">
                                            <button type="submit" style="background-color:white; border:white;padding:0">
                                                <img src="<?php  if($a<$dem){ $b="a".$a;  echo $_SESSION[$b];}  ?>" alt="">
                                            </button>
                                        </div>
                                        <div class="trend-bottom-cap">                                          
                                            <h6> 
                                                    <input type="hidden"  name="news_id" value="<?php if($x<$dem){$y="t".$x; echo $_SESSION[$y];}  ?> " >
                                                    </input>                                       
                                                     <?php  if($i<$dem){ echo $_SESSION[$i];$i++; $a++;$x++;} ?>                                                                                          
                                            </h6>
                                            
                                        </div>
                                    </form>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                    <form action="detail.php" method="post"> 
                                        <div class="trend-bottom-img mb-30">
                                            <button type="submit" style="background-color:white; border:white;padding:0">
                                                <img src="<?php  if($a<$dem){ $b="a".$a;  echo $_SESSION[$b];}  ?>" alt="">
                                            </button>
                                        </div>
                                        <div class="trend-bottom-cap">                                          
                                            <h6> 
                                                    <input type="hidden"  name="news_id" value="<?php if($x<$dem){$y="t".$x; echo $_SESSION[$y];}  ?> " >
                                                    </input>                                       
                                                     <?php  if($i<$dem){ echo $_SESSION[$i];$i++; $a++;$x++;} ?>                                                                                          
                                            </h6>
                                            
                                        </div>
                                    </form>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                    <form action="detail.php" method="post"> 
                                        <div class="trend-bottom-img mb-30">
                                            <button type="submit" style="background-color:white; border:white;padding:0">
                                                <img src="<?php  if($a<$dem){ $b="a".$a;  echo $_SESSION[$b];}  ?>" alt="">
                                            </button>
                                        </div>
                                        <div class="trend-bottom-cap">                                          
                                            <h6> 
                                                    <input type="hidden"  name="news_id" value="<?php if($x<$dem){$y="t".$x; echo $_SESSION[$y];}  ?> " >
                                                    </input>                                       
                                                     <?php  if($i<$dem){ echo $_SESSION[$i];$i++; $a++;$x++;} ?>                                                                                          
                                            </h6>
                                            
                                        </div>
                                    </form>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                    <form action="detail.php" method="post"> 
                                        <div class="trend-bottom-img mb-30">
                                            <button type="submit" style="background-color:white; border:white;padding:0">
                                                <img src="<?php  if($a<$dem){ $b="a".$a;  echo $_SESSION[$b];}  ?>" alt="">
                                            </button>
                                        </div>
                                        <div class="trend-bottom-cap">                                          
                                            <h6> 
                                                    <input type="hidden"  name="news_id" value="<?php if($x<$dem){$y="t".$x; echo $_SESSION[$y];}  ?> " >
                                                    </input>                                       
                                                     <?php  if($i<$dem){ echo $_SESSION[$i];$i++; $a++;$x++;} ?>                                                                                          
                                            </h6>
                                            
                                        </div>
                                    </form>
                                    </div>
                                </div>

                                

                                

                                

                             

                               




                                
                          



                   




</div>
</div>
</div>
</div>








                   
</div>
</div>
</div>
</div>
                   


<?php  

    include './view/footer.php';
    // require_once "./php/DanhMuc.php";
    // $GetNew = DM::GetNew();
   
    // $dem = $_SESSION['dem'];
   
?>






   
    </body>
</html>