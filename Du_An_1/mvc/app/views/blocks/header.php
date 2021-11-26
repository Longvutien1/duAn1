<header>
    <div class=" w-10/12 mx-auto">
        <div class="grid grid-cols-12 text-center gap-8 my-2     ">
            
            <div class="logo col-span-2 my-auto py-2">
                <a href="../../../../Du_An_1/mvc/"> <img src="../../../../../Du_An_1/mvc/storage/image/logo.png" alt="" width="70"></a>
            </div>

            <nav class="col-span-7 my-auto text-center">
                <ul>
                    <li class="hoverVang inline-block px-4 py-2"><a href="../../../../Du_An_1/mvc/" class="text-xl ">Trang chủ</a></li>
                    <li class="hoverVang inline-block px-4 py-2"><a href="../../../../Du_An_1/mvc/shop" class="text-xl">Cửa hàng</a></li>
                    <li class="hoverVang inline-block px-4 py-2"><a href="../../../../Du_An_1/mvc/gioi_thieu" class="text-xl">Giới thiệu</a></li>
                    <li class="hoverVang inline-block px-4 py-2"><a href="../../../../Du_An_1/mvc/tim_cua_hang" class="text-xl">Liên hệ</a></li>
                    <li class="hoverVang inline-block px-4 py-2"><a href="" class="text-xl">Góp ý</a></li>
                    <?php if (isset($_SESSION['admin'])) {
                    ?>
                        <li class="hoverVang inline-block px-4 py-2"><a href="../../../../Du_An_1/mvc/admin" class="text-xl">Admin</a></li>
                    <?php
                    } ?>


                </ul>
            </nav>

            <div class="col-span-3 my-auto text-right ">
                <ul style="margin: 0;padding: 0;">
                    <input type="checkbox" id="check_search" >
                    <div class="icon1  inline-block" id="icon1" >
                        <li id="icon_search"><label for="check_search"><i class="fas fa-search text-lg aaa12 hoverVang"></i></label></li>
                        
                        <div id="search_form">
                            <input type="search" id="search" placeholder="Search here...">
                            <label for="search"><i class="fas fa-search text-lg hoverVang"></i></label>
                        </div>
                    </div>
                    <a href="cart?act=cart">
                        <li class="hoverVang inline-block p-7 px-4"><i class="fas fa-cart-plus text-lg"></i><span><?php if (isset($_SESSION['count_product'])) {
                                                                                                                        echo $_SESSION['count_product'];
                                                                                                                    } ?></span></li>
                    </a>
                    <?php
                    if (isset($_SESSION['name'])) {
                    ?>
                        <li class="userHover inline-block"><span><i class="far fa-user mr-2"></i><?= $_SESSION['name'] ?></span>
                            <div class="menuUser">
                                <ul>
                                    <a href="login?act=myAccount">
                                        <li class="px-3 py-1 float-left hoverVang">Tài khoản của tôi</li>
                                    </a>
                                    <a href="login?act=logout">
                                        <li class="px-3 py-1 float-left  hoverVang">Đăng xuất</li>
                                    </a>
                                </ul>
                            </div>
                        </li>
                    <?php
                    } else {
                    ?>
                        <a href="login?act=login" class="hoverVang">
                            Đăng nhập
                        </a>
                        <span> / </span>
                        <a href="login?act=register" class="hoverVang">
                            Đăng kí
                        </a>
                    <?php }
                    ?>


                </ul>

            </div>
        </div>

    </div>

</header>

