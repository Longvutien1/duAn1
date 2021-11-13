<?php

class HomeController
{

    public function index()
    {
        $result = Product::select_hh_top_10();
        $banner = Banner::list_banner_by_status();
        $hh_by_loai = LoaiHang::list_hang_hoa_theo_loai_home();
        include_once './app/views/home.php';
    }

    public function detail()
    {
        extract($_REQUEST);

        // add to cart
        if (isset($_GET['act'])) {
            $act = $_GET['act'];

            switch ($act) {
                case 'add_to_cart':
                    include_once './app/views/pages/gio_hang/add_to_cart.php';

                    $ma_sp = $_GET['id_addtoCart'];
                    echo "<script> alert('Thêm vào giỏ hàng thành công !')</script>";
                    header("refresh:0.1;url=detail?act=chi_tiet_sp&ma_sp=$ma_sp");
                    break;
                case 'chi_tiet_sp':
                    // tăng số lượt xem
                    $ma_sp = $_GET['ma_sp'];
                    Product::tang_so_luot_Xem($_GET['ma_sp']);
                    $result = Product::list_hang_hoa_theo_id($_GET['ma_sp']);

                    foreach ($result as $u) {
                        extract($u);
                    }

                    // var_dump($_SESSION['name']);
                    if (isset($_POST['binhluan']) && !empty($_POST['binhluan'])) {
                        $binh_luan = $_POST['binhluan'];
                        $ma_kh = $_SESSION['id_kh'];

                        $ngay_bl = date_format(date_create(), 'Y-m-d');
                        $add_bl = $pdo_binh_luan->add_binh_luan($ma_kh, $_GET['ma_sp'], $_POST['binh_luan'], $ngay_bl);
                    }
                    $result_bl = BinhLuan::list_bl_by_ma_hh($_GET['ma_sp']);
                    if (!empty($result_bl)) {
                        foreach ($result_bl as $value) {
                            extract($value);
                        }
                    }
                    // sản phẩm cùng loại
                    $result_list_hh = Product::list_hang_hoa_theo_loai($maloai);

                    break;
                default:
                    # code...
                    break;
            }
        }
        include_once './app/views/chi_tiet_sp.php';
    }

    public function shop()
    {
        $list_loai_hang = LoaiHang::list_loai_hang();
        $sp_top_10 = Product::select_hh_top_10();


        // -----------------phân trang ----------------------------
        $tong_so_hh = Product::list__count_hang_hoa();
        // var_dump($tong_so_hh);
        $so_trang = ceil($tong_so_hh / 15);
        // var_dump($so_trang);

        $page = isset($_GET['page']) ? $_GET['page'] : 1;



        // -----------------hiển thị sản phẩm----------------------
        if (isset($_POST['all_product'])) {
            unset($_GET['search']);
            // unset($_GET('submitSearch'));
            header("refresh:0.5;url=shop");
            $products = Product::list_hang_hoa_shop();
        }
        // kiểm tra search
        if (isset($_GET['submitSearch']) && !empty($_GET['search'])) {
            $search = $_GET['search'];
            $products = Product::search_product($_GET['search']);
            if ($products) {
                echo "<h3 class=' m-1' style='color: green;font-weight: 600;'> Tìm thấy " . count($products) . " sản phẩm </h3>";
            } else {
                echo "<h3 class=' m-1' style='color:red;font-weight: 600;'> Không tìm thấy sản phẩm nào !</h3>";
            }
        } else if (isset($_GET['name_category'])) {
            $name_category = $_GET['name_category'];
            $products = Product::search_product_by_ten_loai($name_category);
        } else if (isset($_GET['search_loai'])) {
            $search_loai = $_GET['search_loai'];
            $products = Product::search_product_by_ten_loai($_GET['search_loai']);
        } else if (isset($_GET['name_product'])) {
            $name_product = $_GET['name_product'];
            $products = Product::list_product_by_ten_hh($_GET['name_product']);
        } else {
            $products = Product::list_hang_hoa_shop();
        }
        include_once "./app/views/shop.php";
    }




    public function tim_cua_hang()
    {
        include_once './app/views/tim_cua_hang.php';
    }


    public function cart()
    {

        $error = "";
        extract($_REQUEST);

        if (isset($_GET['act'])) {
            $act = $_GET['act'];

            switch ($act) {
                case 'add_to_cart':
                    include_once './app/views/pages/gio_hang/add_to_cart.php';
                    header("location:../mvc/");

                    break;
                case 'add_to_cart_shop':
                    include_once './app/views/pages/gio_hang/add_to_cart.php';
                    header("location:../mvc/shop");

                    break;
                case 'cart':

                    // session_destroy();
                    $id = isset($_GET['id_del']) ? (int)$_GET['id_del'] : '';
                    // var_dump($id);
                    if ($id) {
                        if (array_key_exists($id, $_SESSION['cart'])) {
                            unset($_SESSION['cart'][$id]);
                            $_SESSION['success_gio_hang'] = "Xóa sản phẩm thành công !";
                            header("refresh:0.2;url=../mvc/cart?act=cart");
                        }
                    }
                    include_once './app/views/cart.php';

                    break;
                default:
                    # code...
                    break;
            }
        }
    }
}
