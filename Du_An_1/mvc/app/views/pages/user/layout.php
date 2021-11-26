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
    <div class="container" style="background-color: #EBEDF5;">
        <section class="w-10/12 m-auto p-8">
            <div class="row grid grid-cols-12">
                <div class="col col-span-2 ">
                    <div class="flex">
                        <span class="my-auto"><i class="far fa-user-circle text-5xl font-thin"></i></span>
                        <p class="ml-4"><?php if(isset($_SESSION['ho_ten'])) echo $_SESSION['ho_ten'];?></p>
                    </div>
                    <div class="flex mt-8">
                        <span><i class="far fa-user"></i></span>
                        <div class="ml-2">
                            <ul>
                                <li class="hoverVang"><a href="login?act=myAccount">Tài khoản của tôi</a></li>
                                <li class="hoverVang"><a href="">Hồ sơ</a></li>
                                <li class="hoverVang"><a href="">Địa chỉ</a></li>
                                <li class="hoverVang"><a href="login?act=changePassword">Đổi mật khẩu</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-3 flex">
                        
                        <div >
                            <ul>
                                <li class="hoverVang"><span><i class="far fa-calendar-minus"></i></span><a class="ml-2" href="">Đơn mua</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-3 flex">
                       
                        <div >
                            <ul>
                            <li class="hoverVang"><i class="far fa-bell"></i><a class="ml-2" href="">Thông báo</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col col-span-10 p-6" style="background-color: #fff; border: 1px solid #ddd;">
                   
                   <?php require_once $myPage ?>
                    
                </div>

            </div>

        </section>
    </div>
</body>
<footer>
    <?php require_once './app/views/blocks/footer.php'; ?>
</footer>

</html>