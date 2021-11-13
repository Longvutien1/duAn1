<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://cdn.tiny.cloud/1/hqu7rkbua1f9yiw4o0umokh5blx2hry628dd0p6banxt3z84/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <link rel="stylesheet" href="../../../../Du_An_1/mvc/storage/css/all.min.css">

    <link rel="stylesheet" href="../../../../Du_An_1/mvc/storage/fileCss/home.css">
    <link rel="stylesheet" href="../../../../Du_An_1/mvc/storage/fileCss/chi_tiet_sp.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet prefetch" href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css">
</head>
<style>
    table {
        border: 1px solid #E8E8E8;
        border-collapse: collapse;
        width: 100%;
        text-align: left;
        font-weight: 900;
        padding: 10px;
    }

    th {
        border: 1px solid #E8E8E8;
        background-color: #E8E8E8;
        padding: 5px 10px;
    }
</style>

<body style="background-color: #FAF8F5; font-family:'Cormorant Garamond',sans-serif ;">
    <header>
        <?php require_once './app/views/blocks/header.php'; ?>
    </header>

    <body>
        <!-- <img src="../../../../Du_An_1/mvc/storage/image/messi.jpg" alt="" style="width: 400px;"> -->
        <section class=" w-10/12 mx-auto mt-16">

            <div class="product">
                <div class="image">
                    <div class="imgbig">
                        <!-- <img src="../../../../Du_An_1/mvc/storage/image/messi.jpg" alt="" > -->
                        <img class="imgtotal" src="../../../../Du_An_1/mvc/storage/image/<?= $hinh ?>" alt="" width="800">
                    </div>
                    <div class="imgsmall">
                        <div style="margin-bottom: 5px;">
                            <img class="imgcon" src="../../../../Du_An_1/mvc/storage/image/<?= $hinh ?>" alt="">
                        </div>
                        <div style="margin-bottom: 5px;">
                            <img class="imgcon" src="../../../../Du_An_1/mvc/storage/image/<?= $hinh ?>" alt="">
                        </div>

                    </div>
                </div>
                <div class="infor">
                    <div class="title">
                        <p class="text-4xl" style="color: #F4A851;"><?= $ten_sp ?></p>
                        <div class="stars">
                            <form action="">
                                <input class="star star-5" id="star-5" type="radio" name="star" />
                                <label class="star star-5" for="star-5"></label>
                                <input class="star star-4" id="star-4" type="radio" name="star" />
                                <label class="star star-4" for="star-4"></label>
                                <input class="star star-3" id="star-3" type="radio" name="star" />
                                <label class="star star-3" for="star-3"></label>
                                <input class="star star-2" id="star-2" type="radio" name="star" />
                                <label class="star star-2" for="star-2"></label>
                                <input class="star star-1" id="star-1" type="radio" name="star" />
                                <label class="star star-1" for="star-1"></label>
                            </form>
                        </div>
                    </div>
                    <div class="price">
                        <span style="font-size: 24px;margin: 0 10px 0 0;color: #F4A851;">$<?= $gia ?></span>
                        <strike style="font-size: 24px;">$<?= $giamgia ?></strike>
                    </div>
                    <div class="infor_pr"><?= $mota ?> </div>
                    <div class="quantity">
                        <div class="buttons_added">
                            <form action="" method="post">
                                <Label>Số Lượng:  </Label>
                                <input class="w-8 text-center" style="background: #F4A851;" onclick="var result = document.getElementById('quantity'); var qty = result.value; if( !isNaN(qty) &  qty > 1 ) result.value--;return false;" type='button' value='-' />
                                <input class="w-10 text-center" id='quantity' min='1' name='quantity' type='text' value='1' />
                                <input class="w-8 text-center" style="background: #F4A851;" onclick="var result = document.getElementById('quantity'); var qty = result.value; if( !isNaN(qty)) result.value++;return false;" type='button' value='+' />
                                <a href="detail?act=add_to_cart&id_addtoCart=<?php echo $u['ma_sp'] ?>" class="py-1 px-4 ml-4 " style="width: 130px;border: 1px solid #3f3f3f;">Thêm giỏ hàng</a>
                            </form>
                        </div>
                    </div>
                    <div class="tags">
                        <span>Mã hàng: <?= $ma_sp ?></span><br>
                        <span>Loại: <?= $ten_loai ?></span><br>
                        <span>Tags: ...</span>
                    </div>
                    <div class="share">
                        <form action="" method="POST">
                            <label>Chia sẻ: </label>
                            <a href="http://"><i class="fab fa-facebook-square"></i></a>
                            <a href="http://"><i class="fab fa-twitter"></i></a>
                            <a href="http://"><i class="fab fa-pinterest"></i></a>
                            <a href="http://"><i class="fab fa-instagram"></i></a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="story">
                <div class="title-str">
                    <a href=""><strike>
                            <h2>Mô Tả</h2>
                        </strike></a>
                    <a href="">
                        <h2>Thông Tin Sản Phẩm</h2>
                    </a>
                    <a href="">
                        <h2>Nhận Xét</h2>
                    </a>
                </div>
                <div class="text-str">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium reprehenderit, quaerat fuga facere
                    dolor molestiae laborum quis eligendi doloremque repudiandae! Velit atque dolorum ab excepturi nisi
                    ullam ut
                    necessitatibus placeat, quas eaque quo ipsa maxime quaerat inventore exercitationem, nihil nostrum
                    temporibus optio cum saepe quibusdam iusto impedit ea mollitia! Accusamus nisi sint eum temporibus natus
                    dolorum delectus laudantium accusantium sapiente, officia ex doloremque, voluptatem placeat quas. Quo
                    eligendi enim error, neque aliquam quia facere atque laudantium amet officia cupiditate quidem a earum
                    at
                    deserunt odit nam ut molestias nihil! Repudiandae numquam quidem quod magnam suscipit assumenda soluta
                    ratione fuga provident.
                </div>
            </div>
            <!-- end -->
            <div class="mt-8">

                <table>
                    <thead>
                        <tr>
                            <th>BÌNH LUẬN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <ul style="list-style: disc;  padding: 10px 30px;">
                                    <li>
                                        <div style="display: flex; justify-content: space-between;">
                                            <span><?php if (isset($noidung)) echo $noidung ?></span>
                                            <div>
                                                <span><?php if (isset($hoten)) echo $hoten ?></span>
                                                <span class="ml-3 font-normal"><?php if (isset($ngay_bl)) echo $ngay_bl ?></span>
                                            </div>
                                        </div>

                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>

                        <th>
                            <?php
                            if (isset($_SESSION['id_kh'])) {

                            ?>
                                <form action="" method="POST">
                                    <input type="text" name="binhluan" class="w-full p-1 outline-none">
                                </form>
                            <?php
                            } else {
                                echo " <p style='color: red;'>Đăng nhập để bình luận về sản phẩm này</p>";
                            }
                            ?>
                        </th>

                    </tfoot>
                </table>


            </div>
            <!-- end bình luận -->
            <div class="relate">
                <p class="text-4xl">Sản phẩm cùng loại</p>
                <div class="slider_detail grid grid-cols-4 gap-8 ">
                    <?php

                    if (!empty($result_list_hh)) {
                        foreach ($result_list_hh as $u) :
                    ?>
                            <div class="col-span-1">
                                <div>

                                    <div class="img_hover">
                                        <a href="detail?ma_sp=<?php echo $u['ma_sp'] ?>">
                                            <img class="anh1" src="../../../../Du_An_1/mvc/storage/image/<?php echo $u['hinh'] ?>" alt="" style="max-width: 100%;height: 380px; width: 100%;">
                                            <img class="anh2" src="../../../../Du_An_1/mvc/storage/image/messi.jpg" alt="" style="max-width: 100%;height: 380px;width: 100%;">
                                        </a>
                                    </div>


                                    <div class="flex justify-between ">
                                        <div>
                                            <p class="text-3xl ">Yello tea</p>
                                            <span class="text-2xl " style="color: #F4A851; font-weight: 600;">$21.00</span>
                                        </div>
                                        <div>
                                            <a href="cart?act=add_to_cart&id_addtoCart=<?php echo $u['ma_sp'] ?>" class="add_cart text-xl">Add to cart</a>
                                        </div>
                                    </div>
                                </div>



                            </div>
                    <?php endforeach;
                    } ?>

                </div>
            </div>

        </section>




    </body>

    <footer>
        <?php require_once './app/views/blocks/footer.php'; ?>
    </footer>




    <script>
        //mỗi slide có 1 chỉ số riêng của nó ,để đơn giản chúng ta sẽ gán chỉ số mảng cho các slide
        var slideIndex = 0;
        var slideArray = [];
        // mảng lưu trữ các slide của chúng ta
        var currentSlideIndex = 0;
        //hàm dưới đây sẽ giúp ta tạo ra các đối tượng slide
        // bao gồm: tiêu đề, mô tả , ảnh, đường dẫn khi nhấp vào button trên slide, và id của mỗi slide
        function Slide(title, subtitle, img, textSpan) {
            this.title = title;
            this.subtitle = subtitle;
            this.img = img;
            this.textSpan = textSpan;
            //    chúng ta cần một id để nhắm mục tiêu sau này bằng cách sử dụng getElementById
            this.id2 = "slide" + slideIndex;
            //tăng dần id lên
            slideIndex++;
            // add slide to array
            slideArray.push(this);
        }


        //tạo các đối tượng slide

        var clientsSay = new Slide(
            "CLIENTS SAY",
            "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the when an unknown printer took a galley of type.",
            "../../../../Du_An_1/mvc/storage/image/logo_banner2.jpg",
            "Andrela"

        );

        var longChanh = new Slide(
            "Vũ Tiến Long",
            "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the when an unknown printer took a galley of type.",
            "../../../../Du_An_1/mvc/storage/image/logo_banner2.jpg",
            "Andrela"

        );

        // Từ mảng slide đã tạo, ta tiến hành đưa nó vào source HTML
        function buildSiver() {
            //  Tạo một biến để giữ tất cả HTML của chúng ta
            var myHtml = "";
            // bắt đầu thêm

            for (var j = 0; j < slideArray.length; j++) {
                myHtml +=
                    "<div id='" + slideArray[j].id2 + "' class='singleSlide'>" +
                    "<div class='slideOverlay' style= '  padding-top: 23px;'>" +
                    "<h1 style='padding: 30px;font-weight: 600;font-size: 55px; '>" +
                    slideArray[j].title +
                    "</h1>" +
                    "<h6 style = ' width: 783px;margin: auto;font-size: 14px; '>" +
                    slideArray[j].subtitle +
                    "</h6>" +
                    "<img  src='" +
                    slideArray[j].img +
                    "'  style=' margin: auto;  padding: 21px; border-radius: 100%'>" +
                    "<span>" +
                    slideArray[j].textSpan +
                    "</span>" +
                    "</div>" +
                    "</div>";

            }

            // Đưa HTML chúng ta vừa tạo vào id #mySlider
            document.getElementById("mySlider").innerHTML = myHtml;

            // Đồng thời hiển thị slide đầu tiên
            document.getElementById("slide" + currentSlideIndex).style.left = 0;
        }

        buildSiver();

        // Xử lý bấm nút chuyển slide trước đó
        function prevSlide() {
            // Tìm slide trước đó
            var nextSlideIndex;
            // Nếu chỉ số slide là 0, về slide cuối
            if (currentSlideIndex == 0) {
                nextSlideIndex = slideArray.length - 1;
            } else {
                // Nếu không thì giảm chỉ số đi 1
                nextSlideIndex = currentSlideIndex - 1;
            }

            // Ẩn slide hiện tại, hiện slide "currentSlideIndex"
            document.getElementById("slide" + nextSlideIndex).style.left = "-100%";
            document.getElementById("slide" + currentSlideIndex).style.left = 0;

            // Thêm class để chuyển slide có animation đã định nghĩa ở bước 3
            document
                .getElementById("slide" + nextSlideIndex)
                .setAttribute("class", "singleSlide slideInLeft");
            document
                .getElementById("slide" + currentSlideIndex)
                .setAttribute("class", "singleSlide slideOutRight");

            // Cập nhật giá trị slide hiện tại
            currentSlideIndex = nextSlideIndex;
        }

        // Xử lý bấm nút chuyển slide tiếp theo
        // Cách xử lý tương tự như prevSlide đã trình bày ở trên
        function nextSlide() {
            var nextSlideIndex;
            if (currentSlideIndex == slideArray.length - 1) {
                nextSlideIndex = 0;
            } else {
                nextSlideIndex = currentSlideIndex + 1;
            }

            document.getElementById("slide" + nextSlideIndex).style.left = "100%";
            document.getElementById("slide" + currentSlideIndex).style.left = 0;

            document
                .getElementById("slide" + nextSlideIndex)
                .setAttribute("class", "singleSlide slideInRight");
            document
                .getElementById("slide" + currentSlideIndex)
                .setAttribute("class", "singleSlide slideOutLeft");

            currentSlideIndex = nextSlideIndex;
        }
    </script>
    <!--slick slider -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $('.slider_detail').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            lazyLoad: 'ondemand',
            autoplaySpeed: 2000,
            prevArrow: '<button type="button" class="slick-prev"><span class="text-2xl">&#10094;</span></button>',
            nextArrow: '<button type="button" class="slick-next"><span class="text-2xl">&#10095;</span></button>',
            responsive: [{

                    breakpoint: 1025,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });

        $('.slider_banner').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            prevArrow: '<button type="button" class="slick-prev" style="left: 3%; top: 50%;"> <span class="prev">&#10094;</span>  </button>',
            nextArrow: '<button type="button" class="slick-next"style=" right: 5%; top: 50%;" ><span class="prev">&#10095;</span> </button>',

        });
    </script>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>
</body>

</html>