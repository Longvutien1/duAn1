<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bee Tea - Tìm cửa hàng</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://cdn.tiny.cloud/1/hqu7rkbua1f9yiw4o0umokh5blx2hry628dd0p6banxt3z84/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <link rel="stylesheet" href="../../../../Du_An_1/mvc/storage/css/all.min.css">
    <link rel="stylesheet" href="../../../../Du_An_1/mvc/storage/fileCss/home.css">
    <link rel="stylesheet" href="../../../../Du_An_1/mvc/storage/fileCss/shop.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400&display=swap" rel="stylesheet">


</head>

<body>
    <header>
        <?php require_once './app/views/blocks/header.php'; ?>
    </header>
    <div class="container">
        <section class="w-10/12 m-auto">
            <div id="fullProduct" class="grid grid-cols-7 gap-16 pt-5">
                <div id="BGproduct" class="col-span-5">
                    <H4 class="italic text-3xl text-center text-red-200">Sản Phẩm Của Chúng Tôi</H4>
                    <div id="product" class=" grid grid-cols-3 gap-8 mt-8 ">
                        <?php
                        if (!empty($products)) {
                            foreach ($products as $u) :

                        ?>
                                <div>

                                    <div class="img_hover">
                                        <a href="detail?act=chi_tiet_sp&ma_sp=<?php echo $u['ma_sp'] ?>">
                                        <img class="anh1" src="../../../../Du_An_1/mvc/storage/image/<?= $u['hinh'] ?>" alt="" style="max-width: 100%;height: 380px; width: 100%;">
                                        <img class="anh2" src="../../../../Du_An_1/mvc/storage/image/<?= $u['hinh2'] ?>" alt="" style="max-width: 100%;height: 380px;width: 100%;">
                                        </a>
                                    </div>

                                    <div class="flex justify-between ">
                                        <div>
                                            <a href="detail?act=chi_tiet_sp&ma_sp=<?php echo $u['ma_sp'] ?>"><p class="text-3xl "><?= $u['ten_sp'] ?></p></a>
                                            <span class="text-2xl " style="color: #F4A851; font-weight: 600;">$<?= $u['gia'] ?></span>
                                        </div>
                                        <div>
                                            <a href="cart?act=add_to_cart_shop&id_addtoCart=<?php echo $u['ma_sp'] ?>" class="add_cart text-xl">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                        <?php endforeach;
                        } ?>


                    </div>
                    <div class="mt-4">
                        <?php if (isset($_GET['submitSearch']) && !empty($_GET['search'])) { ?>
                            <form action="" method="POST">
                                <button type="submit" name="all_product" class="p-1 px-3 rounded-md" style="background: #3F3F3F; color: #fff;">Tất cả sản phẩm</button>
                            </form>
                        <?php } ?>
                    </div>
                    <!--end all sản phẩm  -->
                    <!-- end danh sách sản phẩm -->
                    <div class="my-8 text-center">

                        <div class="w3-container">
                            <div class="w3-bar">
                                <ul>
                                    <?php if ($page > 1) {
                                    ?>
                                        <li class="inline-block"> <a href="?page=<?php echo $page - 1 ?>" class='w3-button'>&laquo;</a> </li>
                                    <?php } ?>

                                    <?php
                                    for ($i = 1; $i <= $so_trang; $i++) { ?>
                                        <li class="inline-block" <?php echo $i == $page ? 'style="background-color: #3F3F3F;color:#fff; border-radius: 8px;"' : '' ?>><a href="?page=<?php echo $i ?><?php echo isset($search)  ? "&search=$search&submitSearch=Submit" : '' ?><?php echo isset($search_loai) ? "&search_loai=$search_loai" : '' ?><?php echo isset($name_category) ? "&name_category=$name_category" : '' ?><?php echo isset($name_product) ? "&name_product=$name_product" : '' ?>" class='w3-button'><?php echo $i ?></a> </li>
                                    <?php } ?>

                                    <?php if ($page < $so_trang) {
                                    ?>
                                        <li class="inline-block"><a href="?page=<?php echo $page + 1 ?>" class='w3-button'>&raquo;</a></li>
                                    <?php } ?>

                                </ul>

                            </div>

                        </div>

                    </div>
                </div>
                <div id="right" class="col-span-2">
                    <div class="mb-8">
                        <p class="text-3xl mb-2">Sreach</p>
                        <form action="" method="GET" class="w-full border flex justify-between">
                            <input class="w-10/12 p-1 outline-none " type="text" placeholder="Tìm kiếm" name="search">
                            <button class="w-2/12  mx-auto btn_search" type="submit" name="submitSearch"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <ul>
                        <li class="border text-white pl-4 text-xl py-2" style="background-color: #F4A851;color: #000;">CATEGORY</li>
                        <?php


                        // $result = $pdo_loai_hang->list_loai_hang();
                        if (!empty($list_loai_hang)) {
                            foreach ($list_loai_hang as $u) :
                        ?>
                                <li class="xam border px-4  py-2"><a href="?name_category=<?php echo $u['ten_loai'] ?>"><?php echo $u['ten_loai'] ?></a></li>
                        <?php endforeach;
                        } ?>

                        <li class="border px-4  py-2" style="background-color: #F4A851;color: #000;">
                            <form action="" method="GET">
                                <input class="w-full p-1 outline-none" type="text" name="search_loai" placeholder="Từ khóa tìm kiếm">
                            </form>
                        </li>
                    </ul>


                    <ul>
                        <li class="border text-white pl-4 text-xl py-2 mt-8" style="background-color: #F4A851;color: #000;">TOPS 10 FAVORITE</li>
                        <?php



                        // $result = $pdo_top10->select_hh_top_10();
                        if (!empty($sp_top_10)) {
                            foreach ($sp_top_10 as $u) :
                        ?>
                                <li class="border px-4  py-2 flex gap-4">
                                    <a href="detail?act=chi_tiet_sp&ma_sp=<?php echo $u['ma_sp'] ?>"><img src="../../../../Du_An_1/mvc/storage/image/<?php echo $u['hinh'] ?>" alt="" width="120"></a>

                                    <div>
                                        <a class="text-xl" href="detail?act=chi_tiet_sp&ma_sp=<?php echo $u['ma_sp'] ?>"><?php echo $u['ten_sp'] ?></a>
                                        <p class="text-gray-400 text-xl font-semibold line-through">$<?php echo $u['gia'] ?>.00</p>
                                        <p class="text-yellow-500 text-xl font-semibold">$
                                            <?php echo $u['gia'] - ($u['gia'] * $u['giamgia'] / 100) ?>
                                            .00</p>
                                    </div>
                                </li>
                        <?php endforeach;
                        } ?>

                        <li class="border px-4  py-2" style="background-color: #F4A851;">
                            <p class="p-3"></p>
                        </li>
                    </ul>



                </div>

            </div>
        </section>
    </div>
</body>
<footer>
    <?php require_once './app/views/blocks/footer.php'; ?>
</footer>

</html>