<?php
    include_once "validation.php";




?>
<!doctype html>
<html lang="en">
  <head>
    <title>My account</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link rel="icon" type="image/x-icon" href="img/food-point-logo-symbol-and-icon-template-to-show-the-location-of-the-food-seller-vector.webp">
  </head>
  <body>
<header class="topnav">
<img width=" 5%" src='img/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg'>
</header>
  
  <nav>
    <ul>
        <li class="logo"><img width=" 30%" src="img/food-point-logo-symbol-and-icon-template-to-show-the-location-of-the-food-seller-vector.webp"></li>
        <li><a href="#"><i class="fa fa-home"></i>&nbsp; Account</a></li>
        <li><a href="#"><i class="fa fa-book"></i>&nbsp;  Shop</a></li>
        <li><a href="#"><i class="fa fa-book"></i>&nbsp;  Cart</a></li>
        <li><a href="#"><i class="fa fa-book"></i>&nbsp;  Order</a></li>
        <li><a href="#"><i class="fa fa-users"></i>&nbsp;  Dispath</a></li>
    </ul>
</nav>

<div class="wrapper">
    <div class="section">
        <div class="box-area">
        <img src='img/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg' alt=''>
          <h6> Fullname: <span class="text-danger"> <?php echo $_SESSION["fullname"];  ?> </span> </h6>
          <h6> Email: <span class="text-danger"> <?php echo $_SESSION["Email"];  ?> </span> </h6>
        </div>
        <?php
                                        $students = new  LoginInfo;
                                        $result = $students->select();
                                        if($result)
                                        {
                                            foreach($result as $row)
                                            {
                                                ?>
                                                    <?php $_SESSION["fullname"] = $row['fullname'] ?> <br />
                                                    <?php $_SESSION["Email"] = $row['email'] ?> <br />
                                                <?php

}
}
else
{
    echo "No Record Found";
}
?>
    </div>
</div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>


              <!-- <form action="" method="post" enctype="multipart/form-data" class='mt-5'>
        <input type="hidden" name="getuid" value="<?php echo $_SESSION['email'] ?>">
    <input type="hidden" name="date" value=" <?php echo date("Y-m-d h:i:sa") ?>">
                  <div class="input-group">
  <input type="file" name='image' class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
  <button class="btn btn-outline-secondary" type="submit" name='upload' id="inputGroupFileAddon04">Upload..</button>
</div>
        </form>  -->
</body>
</html>