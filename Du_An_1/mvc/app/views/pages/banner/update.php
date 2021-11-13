<h2 class="text-center p-3 mb-8 text-xl" style="background-color:#3F3F3F ; color: #fff; border-radius: 8px; padding: 8px;"> UPDATE BANNER</h2>
<form action="?act=btn_update" method="POST" enctype="multipart/form-data">
    <div class="mb-4">
        <p>Mã Banner</p>
        <input type="text" name="ma_banner" style="background-color: #D1D1D1; border:1px solid black; width: 100%;height: 30px; padding: 8px;" placeholder="Auto Number" readonly value="<?php if (isset($ma_banner)) {
                                                                                                                                                                                                echo $ma_banner;
                                                                                                                                                                                            } ?>">
    </div>
    <div class="mb-4">
        <p>Hình ảnh</p>
        <input type="file" name="productImage" style="border:1px solid black; width: 100%;height: 30px;">
        <img src="../../../../../../Du_An_1/mvc/storage/image/<?php if (isset($hinh)) {
                                                                    echo $hinh;
                                                                } ?>" alt="" width="120">
    </div>
    <p style="color: red;">
        <?php
        if ($error != "") {
            echo $error;
        }
        ?>
    </p>

    <div class="mb-4">
        <p>Status</p>
       
        <div class="p-1 border text-left border-black mb-8">
            <input type="radio" name="status" id="" value="Sử dụng" <?php
                                                                            if (isset($status)) {
                                                                                if ($status == 1) {
                                                                                    echo "checked='checked'";
                                                                                }
                                                                            }
                                                                            ?>>
            <label for="Sử dụng">Sử dụng</label>
            <input class="ml-4" type="radio" name="status" id="" value="Không sử dụng" <?php
                                                                                            if (isset($status)) {
                                                                                                if ($status == 0) {
                                                                                                    echo "checked='checked'";
                                                                                                }
                                                                                            }
                                                                                            ?>>
            <label for="Không sử dụng">Không sử dụng</label>
        </div>
        <div class="mb-4">
            <button name="btn_update" class="px-4 py-1 border border-black mr-3">Update</button>
            <button name="btn_rs" class="px-4 py-1 border border-black mr-3">Nhập lại</button>
            <a href="?act=list" style="border-radius: 4px; border: 1px solid #3f3f3f; padding: 4px 16px; text-decoration: none;" class=" py-1 px-4 ">Danh sách</a>
        </div>
</form>