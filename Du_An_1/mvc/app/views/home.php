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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
</head>

<body style="background-color: #FAF8F5; font-family:'Cormorant Garamond',sans-serif ;">
    <header>
        <?php require_once './app/views/blocks/header.php'; ?>
    </header>
    <div class="banner w-full">
        <div class="slider_banner" style="margin: 0; padding: 0;">
            <?php if (!empty($banner)) {
                foreach ($banner as $u) : ?>
                    <div>
                        <img src="../../../../Du_An_1/mvc/storage/image/<?= $u['hinh'] ?>" style="max-width: 100%; width:100%; height: 530px;">
                    </div>
            <?php endforeach;
            } ?>
        </div>

        <!-- <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div> -->
    </div>

    <body>

        <section class=" w-10/12 mx-auto mt-16">
            <div class="grid grid-cols-2 gap-8 ">
                <div>
                    <img src="../../../../Du_An_1/mvc/storage/image/Layer 1.png" alt="" sizes="  (max-width: 800px) 100vw, 800px" style="vertical-align: middle;">
                </div>
                <div>
                    <h1 class="title_h1">Lợi ích sức khỏe của việc uống trà xanh thường xuyên</h1>
                    <p class="text-xl">Trà xanh với chanh có thể là một bổ sung tuyệt vời cho một chế độ ăn uống giảm cân lành mạnh. Trên thực tế, nhiều nghiên cứu đã chỉ ra rằng trà xanh có thể hỗ trợ giảm cân và tăng cường đốt cháy chất béo. Bảo vệ chống lại bệnh tiểu đường.</p>
                    <button class="py-2 px-8  mt-8" style="color: #fff;  background-color: #F4A851; border: 1px solid #F4A851; ">VIEW MORE</button>
                </div>
            </div>
        </section>
        <section class=" w-10/12 mx-auto mt-16">
            <div class="flex justify-between">
                <div>
                    <h1 class="title_h1_2">Những sản phẩm hot</h1>
                </div>
            </div>
            <!-- end title  -->

            <div class="slider grid grid-cols-4 gap-8 ">
                <?php
                if (!empty($result)) {
                    foreach ($result as $u) :
                ?>
                        <div class="col-span-1">
                            <div>

                                <div class="img_hover">
                                    <a href="detail?act=chi_tiet_sp&ma_sp=<?php echo $u['ma_sp'] ?>">
                                        <img class="anh1" src="../../../../Du_An_1/mvc/storage/image/<?php echo $u['hinh'] ?>" alt="" style="max-width: 100%;height: 380px; width: 100%;">
                                        <img class="anh2" src="../../../../Du_An_1/mvc/storage/image/<?php echo $u['hinh2'] ?>" alt="" style="max-width: 100%;height: 380px;width: 100%;">
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

        </section>
        <!-- end product -->

        <section class="w-full mx-auto mt-16">
            <div class="flex justify-between ml-32">
                <div>
                    <h1 class="title_h1_2">Popular Offers</h1>
                    <ul>
                        <li class="py-2">
                            <p class="text-2xl">Oolong Tea ____________________________$19.00</p>
                            <p>Theme nullam quis ante velit</p>
                        </li>
                        <li class="py-2">
                            <p class="text-2xl">Oolong Tea ____________________________$19.00</p>
                            <p>Theme nullam quis ante velit</p>
                        </li>
                        <li class="py-2">
                            <p class="text-2xl">Oolong Tea ____________________________$19.00</p>
                            <p>Theme nullam quis ante velit</p>
                        </li>
                        <li class="py-2">
                            <p class="text-2xl">Oolong Tea ____________________________$19.00</p>
                            <p>Theme nullam quis ante velit</p>
                        </li>
                    </ul>
                </div>
                <div>
                    <img src="../../../../Du_An_1/mvc/storage/image/h1-img2-1.jpg" alt="" width="800">
                </div>
            </div>
        </section>
        <!-- end title 2 -->
        <section class=" w-10/12 mx-auto my-28">
            <h1 class="title_h1_2 text-center ">Discover The Magic Of Tea,</h1>
            <h1 class="title_h1_2 text-center " style="line-height: 0;"> Learn About Our Signature Flavors</h1>

        </section>

        <section class=" w-9/12 mx-auto my-16">
            <!-- <?php
                    foreach ($hh_by_loai as $u) {
                        var_dump($u['ma_loai']);
                    }
                    var_dump($hh_by_loai[0]['ten_loai']);
                    ?> -->

            <div class="grid grid-cols-12 gap-8 ">
                <div class="col-span-4 gap-8 item">
                    <a href="shop?name_category=<?= $hh_by_loai[0]['ten_loai'] ?>">
                        <img src="../../../../Du_An_1/mvc/storage/image/ef5514e8fc792258233cc4ffcddd1a2c.jpg" alt="" style="height: 530px;">
                        <div class="item-content">
                            <div class="line" style="position: relative;">
                                <p class="text-4xl font-bold" style="color: #fff; position: absolute; top: 50%; left: 40%;"><?= $hh_by_loai[0]['ten_loai'] ?></p>
                            </div> <!-- border -->
                        </div>
                    </a>
                </div>
                <!--End ảnh cột 1 -->
                <div class="col-span-4 gap-8 hidden sm:block">
                    <div class="div ">
                        <div class="item mb-8">
                            <a href="shop?name_category=<?= $hh_by_loai[1]['ten_loai'] ?>">
                                <img src="../../../../Du_An_1/mvc/storage/image/d3f64b56124da7b179ff88fda39c1f51.jpg" alt="" style="width: 100%;height: 250px;">
                                <div class="item-content">
                                    <div class="line">
                                        <p class="text-4xl font-bold" style="color: #fff; position: absolute; top: 40%; left: 35%;"><?= $hh_by_loai[1]['ten_loai'] ?></p>
                                    </div> <!-- border -->
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="shop?name_category=<?= $hh_by_loai[2]['ten_loai'] ?>">
                                <img src="../../../../Du_An_1/mvc/storage/image/645fb9c8a6690085b9e8cb30e9e836d1.jpg" alt="" style="width: 100%;height: 250px;">
                                <div class="item-content">
                                    <div class="line">
                                        <p class="text-4xl font-bold" style="color: #fff; position: absolute; top: 40%; left: 35%;"><?= $hh_by_loai[2]['ten_loai'] ?></p>
                                    </div> <!-- border -->
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!--End ảnh cột 2 -->
                <div class="col-span-4 gap-8 item">
                    <a href="shop?name_category=<?= $hh_by_loai[3]['ten_loai'] ?>">
                        <img src="../../../../Du_An_1/mvc/storage/image/ec54db152cf3978c64fe33a346188d19.jpg" alt="" style="height: 530px;">
                        <div class="item-content">
                            <div class="line">
                                <p class="text-4xl font-bold" style="color: #fff; position: absolute; top: 50%; left: 40%;"><?= $hh_by_loai[3]['ten_loai'] ?></p>
                            </div><!-- border -->
                        </div>
                    </a>
                </div>
                <!-- End ảnh cột 3 -->
            </div>
        </section>
        <!-- End-maketing -->

        <section class="w-9/12 mx-auto">
            <div class="text-center ">
                <video autobuffer autoplay loop muted style="object-fit: cover; background-size: cover; opacity: 1; margin: auto;  width: 100%;  display: block;" loop="" preload="auto">
                    <source src="https://chaai.qodeinteractive.com/wp-content/uploads/2021/08/video.mp4" type="video/mp4">

                </video>
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
        $('.slider').slick({
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