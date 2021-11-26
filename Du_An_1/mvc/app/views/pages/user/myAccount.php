<p class="text-2xl" style="color: #F4A851;">Hồ sơ của tôi</p>
<p class="mb-3">Quản lý thông tin hồ sơ để bảo mật tài khoản</p>
<hr>


<form action="" method="POST" class="grid grid-cols-12" enctype="multipart/form-data">
    <div class="mt-8 col-span-8 p-8 " style="border-right: 1px solid #ddd;">
        <div class="mb-4 flex">
            <p>Tên đăng nhập:</p>
            <input class="border ml-2 w-4/5  p-1" type="text" value="<?php if (isset($username)) echo $username; ?>" readonly>
        </div>

        <div class="mb-4">
            <label for="">Tên</label>
            <input class="border   w-4/5 p-1" type="text" name="hoten" style="margin-left: 70px;" value="<?php if (isset($hoten)) echo $hoten; ?>">
        </div>
        <div class="mb-4">
            <label for="">Email</label>
            <input class="border ml-16  w-4/5 p-1" name="email" type="email" value="<?php if (isset($email)) echo $email; ?>">
        </div>
        <div class="mb-4">
            <label for="">Số điện thoại</label>
            <input class="border ml-4 w-4/5  p-1" name="phone" type="text" value="<?php if (isset($phone)) echo $phone; ?>">
        </div>
        <div class="mb-4">
            <label for="">Địa chỉ</label>
            <input class="border p-1 w-4/5" type="text" name="diachi" style="margin-left: 50px;" value="<?php if (isset($diachi)) echo $diachi; ?>">
        </div>
        <div class="mb-4 flex">
            <label for="">Giới tính</label>
            <div style="margin-left: 40px;">
                <input type="radio" name="gioi_tinh" id="" value="Nam" <?php
                                                                        if (isset($gioi_tinh)) {
                                                                            if ($gioi_tinh == 1) {
                                                                                echo "checked='checked'";
                                                                            }
                                                                        }
                                                                        ?>>
                <label for="Nam">Nam</label>
                <input class="ml-4" type="radio" name="gioi_tinh" id="" value="Nữ" <?php
                                                                                    if (isset($gioi_tinh)) {
                                                                                        if ($gioi_tinh == 0) {
                                                                                            echo "checked='checked'";
                                                                                        }
                                                                                    }
                                                                                    ?>>
                <label for="Nữ">Nữ</label>
            </div>

        </div>
        <div>

            <button type="submit" name="btn_update_user" class="py-1 px-4 ml-24" style="background-color: #F4A851;">Lưu</button>
            <p style="color: red;"><?php if ($error != "") echo $error; ?></p>
        </div>
    </div>


    <div class="col-span-4 p-16">
        <img class="mb-4" src="../../../Du_An_1/mvc/storage/image/<?= $hinh ?>" alt="" width="130">
        <input type="file" name="hinh_anh" id="">
    </div>


</form>