<?php
include "../Model/pdo.php";
include "../Model/brand.php";
include "../Model/size.php";
include "../Model/color.php";
include "../Model/sport.php";
include "../Model/catergory.php";
include "../Model/product.php";


include "header.php";
//controller
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
            //brand
        case 'listbrand':
            $listbrand = loadall_brand();
            include "brand/list.php";
            break;
        case 'addbrand':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $name_brand = $_POST['name_brand'];
                insert_brand($name_brand);
                $thongbao = "them thanh cong";
            }
            include "brand/add.php";
            break;
        case 'deletebrand':
            if (isset($_GET['id_brand']) && ($_GET['id_brand'] > 0)) {
                delete_brand($_GET['id_brand']);
            }
            $listbrand = loadall_brand();
            include "brand/list.php";
            break;

            //size 
        case 'listsize':
            $listsize = loadall_size();
            include "size/list.php";
            break;
        case 'addsize':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $name_size = $_POST['name_size'];
                insert_size($name_size);
                $thongbao = "them thanh cong";
            }
            include "size/add.php";
            break;
        case 'deletesize':
            if (isset($_GET['id_size']) && ($_GET['id_size'] > 0)) {
                delete_size($_GET['id_size']);
            }
            $listsize = loadall_size();
            include "size/list.php";
            break;

            //sport
        case 'listsport':
            $listsport = loadall_sport();
            include "sport/list.php";
            break;
        case 'addsport':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $name_sport = $_POST['name_sport'];
                insert_sport($name_sport);
                $thongbao = "them thanh cong";
            }
            include "sport/add.php";
            break;
        case 'deletesport':
            if (isset($_GET['id_sport']) && ($_GET['id_sport'] > 0)) {
                delete_sport($_GET['id_sport']);
            }
            $listsport = loadall_sport();
            include "sport/list.php";
            break;
            //color
        case 'listcolor':
            $listcolor = loadall_color();
            include "color/list.php";
            break;
        case 'addcolor':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $name_color = $_POST['name_color'];
                insert_color($name_color);
                $thongbao = "them thanh cong";
            }
            include "color/add.php";
            break;
        case 'deletecolor':
            if (isset($_GET['id_color']) && ($_GET['id_color'] > 0)) {
                delete_color($_GET['id_color']);
            }
            $listcolor = loadall_color();
            include "color/list.php";
            break;

            //catergory    
        case 'listcatergory':
            $listcatergory = loadall_catergory();
            include "catergory/list.php";
            break;
        case 'addcatergory':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $name_catergory = $_POST['name_catergory'];
                insert_catergory($name_catergory);
                $thongbao = "them thanh cong";
            }
            include "catergory/add.php";
            break;
        case 'deletecatergory':
            if (isset($_GET['id_catergory']) && ($_GET['id_catergory'] > 0)) {
                delete_catergory($_GET['id_catergory']);
            }
            $listcatergory = loadall_catergory();
            include "catergory/list.php";
            break;
            //product
        case 'listproduct':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $id_brand = $_POST['id_brand'];
            } else {
                $kyw = '';
                $id_brand = 0;
            }
            $listbrand = loadall_brand();
            $listproduct = loadall_product($kyw, $id_brand);
            include "product/list.php";
            break;

        case 'addproduct':
            if (isset($_POST['themsp']) && ($_POST['themsp'])) {


                $name_product = $_POST['name_product'];
                $id_brand = $_POST['id_brand'];
                $id_color = $_POST['id_color'];
                $id_sport = $_POST['id_sport'];
                $id_size = $_POST['id_size'];
                $id_catergory = $_POST['id_catergory'];
                $sale = $_POST['sale'];
                $price = $_POST['price'];
                $quanity = $_POST['quanity'];
                $date_product = $_POST['date_product'];
                $view = $_POST['view'];
                $description = $_POST['description'];




                // $file = $_FILES['img_product'];
                // $img_product = $file['name'];
                $target_dir = "../upload/";
                // ---------------- FUNCTION ------------------//
                $file_name = save_file('img_product', $target_dir);
                $img = $file_name ? $file_name : "no photo";

                // move_uploaded_file($file['tmp_name'], "../upload/" . $img_product);

                insert_product($name_product, $id_brand, $id_color, $id_sport, $id_size, $id_catergory, $img, $sale, $price, $quanity, $date_product, $view, $description);
                $thongbao = "them thanh cong";
            }
            $listbrand = loadall_brand();
            $listcolor = loadall_color();
            $listsport = loadall_sport();
            $listsize = loadall_size();
            $listcatergory = loadall_catergory();
            include "product/add.php";
            break;

        case 'deleteproduct':
            if (isset($_GET['id_product']) && ($_GET['id_product'] > 0)) {
                delete_product($_GET['id_product']);
            }
            $listbrand = loadall_brand();
            $listproduct = loadall_product('', 0);
            include "product/list.php";
            break;

            //comment    
        case 'listcomment':
            include "comment/list.php";
            break;


            //customer
        case 'listcustomer':
            include "Customer/list.php";
            break;

            //cart
        case 'listcart':
            include "cart/list.php";
            break;


            //order
        case 'listorder':
            include "order/list.php";
            break;

            //order
        case 'listorder_item':
            include "order_item/list.php";
            break;












        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}


include "footer.php";
