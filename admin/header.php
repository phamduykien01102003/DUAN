<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<style>
    .boxcontainer{
        margin: 0 50px;;
    }

</style>
<body>
    <div class="boxcontainer">
    <h1 class="alert alert-danger"> quản trị web site </h1>
    <nav  class="navbar navbar-expand-lg bg-body-tertiary"  style="border: 1px solid red; border-radius: 4px;">
    <div class="container-fluid">
           <a class="navbar-brand" href="index.php">trang chủ</a>
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
            </button>
           <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
           <div class="navbar-nav">
              <a class="nav-link" href="index.php?act=listbrand" style="color:black;">brand </a>
              <a class="nav-link" href="index.php?act=listsize" style="color:black;" >size</a>
              <a class="nav-link" href="index.php?act=listsport" style="color:black;" >sport</a>
              <a class="nav-link" href="index.php?act=listcolor" style="color:black;" >color </a>
              <a class="nav-link" href="index.php?act=listcatergory" style="color:black;" >Catergory</a> 
              <a class="nav-link" href="index.php?act=listproduct" style="color:black;" >product</a>
              <a class="nav-link" href="index.php?act=listcustomer" style="color:black;" >Customer </a>
              <a class="nav-link" href="index.php?act=listorder_item" style="color:black;" >order_item </a>
              <a class="nav-link" href="index.php?act=listcart" style="color:black;" >cart</a>
              <a class="nav-link" href="index.php?act=listorder" style="color:black;" >order</a>
              <a class="nav-link" href="" style="color:black;" >thống kê</a>

           </div>
           </div>
           </div>
           
   </nav>
   <br>

 
  


    
 -->




 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
</head>
<style>
    
    .admin{
        display: grid;
        grid-template-columns: 20% 80%;
    }
    .box-1{
        padding-top: 40px;
        
     
        padding-right: 20px;

    }
    .s1{
        border-right: 1px solid grey;

    }
    .s2{
        padding: 50px;
    }
    a{
        color:black;
    }
    
</style>

<body>
    <div class="container">
        <div class="admin">
            <div class="box-1 s1">
                <div>
                    <img src="https://png.pngtree.com/png-vector/20230120/ourmid/pngtree-beauty-logo-design-png-image_6568470.png" alt="" style="height: 150px; width: 150px;">
                </div>
                <br>
                <br>
                <p class="fw-normal">Admin tool</p>
        
                <div class="list-group">
                    <a href="index.php" class="list-group-item list-group-item-action active" aria-current="true">
                       trang chủ 
                    </a>
                    
                    <a class="list-group-item list-group-item-action" href="index.php?act=listbrand" style="color:black;">brand </a>
                    <a class="list-group-item list-group-item-action" href="index.php?act=listsize" style="color:black;" >size</a>
                    <a class="list-group-item list-group-item-action" href="index.php?act=listsport" style="color:black;" >sport</a>
                    <a class="list-group-item list-group-item-action" href="index.php?act=listcolor" style="color:black;" >color </a>
                    <a class="list-group-item list-group-item-action" href="index.php?act=listcatergory" style="color:black;" >Catergory</a> 
                    <a class="list-group-item list-group-item-action" href="index.php?act=listproduct" style="color:black;" >product</a>
                    <a class="list-group-item list-group-item-action" href="index.php?act=listcustomer" style="color:black;" >Customer </a>
                    <a class="list-group-item list-group-item-action" href="index.php?act=listorder_item" style="color:black;" >order_item </a>
                    <a class="list-group-item list-group-item-action" href="index.php?act=listcart" style="color:black;" >cart</a>
                    <a class="list-group-item list-group-item-action" href="index.php?act=listorder" style="color:black;" >order</a>
                    <a class="list-group-item list-group-item-action" href="" style="color:black;" >thống kê</a>
                    

                    
                    </div>
                </div>
            <div class="box-1 s2">
                <h5>hi,phạm duy kiên </h5>
                <h1>welcome back </h1>
                <br>
                <br>
                <!-- <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="image/banner-thoi-trang.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="image/tieu-de-banner-thoi-trang.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="image/photoshop-.webp" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div> -->
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                            <img src="../image/banner-thoi-trang.jpg" class="d-block w-100" alt="..." style="height: 400px;">
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                            <img src="../image/tieu-de-banner-thoi-trang.jpg" class="d-block w-100" alt="..." style="height: 400px;">
                            </div>
                            <div class="carousel-item">
                            <img src="../image/photoshop-.webp" class="d-block w-100" alt="..." style="height: 400px;">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <br>
