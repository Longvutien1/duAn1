<header>
    <div class=" w-10/12 mx-auto">
        <div class="grid grid-cols-12 text-center gap-8 my-4    ">

            <div class="logo col-span-2 my-auto py-2">
               <a href="../../../../Du_An_1/mvc/"> <img src="../../../../../Du_An_1/mvc/storage/image/logo.png" alt="" width="80"></a>
            </div>

            <nav class="col-span-7 my-auto text-center">
                <ul>
                    <li class="hoverVang inline-block px-4 py-2"><a href="../../../../Du_An_1/mvc/" class="text-xl ">Trang chủ</a></li>    
                    <li class="hoverVang inline-block px-4 py-2"><a href="../../../../Du_An_1/mvc/shop" class="text-xl">Cửa hàng</a></li>
                    <li class="hoverVang inline-block px-4 py-2"><a href="" class="text-xl">Giới thiệu</a></li>
                    <li class="hoverVang inline-block px-4 py-2"><a href="../../../../Du_An_1/mvc/tim_cua_hang" class="text-xl">Liên hệ</a></li>
                    <li class="hoverVang inline-block px-4 py-2"><a href="" class="text-xl">Góp ý</a></li>
                    <li class="hoverVang inline-block px-4 py-2"><a href="../../../../Du_An_1/mvc/admin" class="text-xl">Admin</a></li>
                </ul>
            </nav>

            <div class="col-span-3 my-auto text-right">
                <ul style="margin: 0;padding: 0;">
                    <a href="cart?act=cart">
                        <li class="hoverVang inline-block p-7 px-8" ><i class="fas fa-cart-plus text-lg"></i><span><?php if (isset($_SESSION['count_product'])) {
                                                                                                                                                                echo $_SESSION['count_product'];
                                                                                                                       } ?></span></li>
                    </a>
                    <a href="index.php?tai_khoan">
                        <li class="hoverVang inline-block p-7 px-8" ><i class="fas fa-user text-lg"></i></li>
                    </a>

                </ul>
            </div>
        </div>

    </div>

</header>