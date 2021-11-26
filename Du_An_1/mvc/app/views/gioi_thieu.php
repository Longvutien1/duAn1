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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../../Du_An_1/mvc/storage/fileCss/tim_cua_hang.css">
    <style>
        body{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.banner{
    max-width: 100%;
}
.img-banner{
    background: url(../../../../../Du_An_1/mvc/storage/image/p2-img.jpg);
    max-width: 100%;
    color: #fff;
    height: 500px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 30px;
}
.intro{
    max-width: 980px;
    margin: 150px auto;
    font-size: 20px;
    line-height: 30px;
    
}
.text-intro{
    margin: 0 0 150px 0;
}
.standard{
    max-width: 1250px;
    margin: 50px auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
    font-size: 18px;
}
.stand1{
    margin: 0 15px 0 0;
}
.stand2{
    margin: 0 0 0 15px;
}
.supplier{
    display: flex;
    justify-content: center;
    margin: 100px 0;
}
.supplier  a{
    margin: 0 70px;
}
.img-footer{
    display: grid;
    grid-template-columns: 53% 30%;
    align-items: center;
}
.text-footer{
    margin: 0 0 0 40px;
}
.text-footer span{
    font-size: 18px;
}
.text-footer h1{
    font-size: 43px;
}
    </style>
</head>

<body>
    <header>
        <?php require_once './app/views/blocks/header.php'; ?>
    </header>
    <div class="container">
        <div class="banner">
            <div class="img-banner">
                <p class="text-5xl">Giới Thiệu</p>
            </div>
        </div>
        <div class="intro">
            <div class="text-intro">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum odio enim ipsa. Maxime magnam delectus
                itaque fugit possimus ipsa tempora reprehenderit numquam nemo nobis ducimus quasi repellat, magni
                quod,
                eveniet consequuntur provident facilis in reiciendis sapiente amet doloribus. Quidem, excepturi.
                Dolorum
                ipsum labore impedit ullam minima alias magni natus. Odio numquam enim a et necessitatibus? Quasi
                consequuntur dolor dolorum atque.
            </div>
            <div class="about-img">
                <img src="../../../../../Du_An_1/mvc/storage/image/about-img-1.jpg" alt="">
                <h3>LEO EGET BIBENDUM SODALES</h3>
            </div>
        </div>
        <div class="standard">
            <div class="stand1">
                <div class="stand-info">
                    <h1>100% Organic</h1>
                    <span>Theme natoque penatibus et magnis dis parturient montes, augue velit cursus. Nullam quis
                        ante...</span>
                </div>
                <div class="stand-info">
                    <h1>High Quality</h1>
                    <span>Theme natoque penatibus et magnis dis parturient montes, augue velit cursus. Nullam quis
                        ante...</span>
                </div>
            </div>
            <div class="stand2">
                <div class="stand-info">
                    <h1>Always Fresh</h1>
                    <span>Theme natoque penatibus et magnis dis parturient montes, augue velit cursus. Nullam quis
                        ante...</span>
                </div>
                <div class="stand-info">
                    <h1>Our Plantations</h1>
                    <span>Theme natoque penatibus et magnis dis parturient montes, augue velit cursus. Nullam quis
                        ante...</span>
                </div>
            </div>
        </div>
        <div class="supplier">
            
                <a href="#">
                    <img src="../../../../../Du_An_1/mvc/storage/image/clients-hover-img1.png" alt="">
                </a>
           
                <a href="#">
                    <img src="../../../../../Du_An_1/mvc/storage/image/clients-hover-img2.png" alt="">
                </a>
           
                <a href="#">
                    <img src="../../../../../Du_An_1/mvc/storage/image/clients-hover-img3.png" alt="">
                </a>
           
                <a href="#">
                    <img src="../../../../../Du_An_1/mvc/storage/image/clients-hover-img4.png" alt="">
                </a>
           
                <a href="#">
                    <img src="../../../../../Du_An_1/mvc/storage/image/clients-hover-img5.png" alt="">
                </a>
            </div>
        </div>
        <div class="img-footer">
            <div class="banner-footer">
                <img src="../../../../../Du_An_1/mvc/storage/image/home-2-img-1.jpg" alt="">
            </div>
            <div class="text-footer">
                <span>HOUSE OF TEA</span>
                <h1>Explore The Magic Of Tea. Drink Of Health</h1>
                <span>Theme natoque penatibus et magnis dis parturient lo ntes, aug uevelit cursus. Nullam quis ante.
                    Sed fringi lla mauris sit amet nibhdonec sodales sagittis mlga. Tellus eget, sem quam semper libero,
                    sit amet.</span>
            </div>
        </div>
    </div>
</body>
<footer>
    <?php require_once './app/views/blocks/footer.php'; ?>
</footer>

</html>