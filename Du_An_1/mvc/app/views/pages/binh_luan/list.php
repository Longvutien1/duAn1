<h2 class="text-center p-3 mb-8 text-xl" style="background-color:#3F3F3F ; color: #fff; border-radius: 8px;"> QUẢN LÝ BÌNH LUẬN</h2>
<div class="my-8 text-center">
    <div class="w3-container">
        <div class="w3-bar">
            <ul>
                <?php if ($page > 1) {
                ?>
                    <li class="inline-block"> <a href="?page=<?php echo $page - 1 ?><?php echo isset($search) ? "&search=$search" : '' ?>" class='w3-button'>&laquo;</a> </li>
                <?php } ?>

                <?php
                for ($i = 1; $i <= $so_trang; $i++) { ?>
                    <li class="inline-block" <?php echo $i == $page ? 'style="background-color: #3F3F3F;color:#fff; border-radius: 8px;"' : '' ?>><a href="?page=<?php echo $i ?><?php echo isset($search) ? "&search=$search" : '' ?>" class='w3-button'><?php echo $i ?></a> </li>
                <?php } ?>

                <?php if ($page < $so_trang) {
                ?>
                    <li class="inline-block"><a href="?page=<?php echo $page + 1 ?><?php echo isset($search) ? "&search=$search" : '' ?>" class='w3-button'>&raquo;</a></li>
                <?php } ?>

            </ul>

        </div>

    </div>

</div>
<div style="float:right; margin-bottom: 8px;">
    <?php
    if (isset($_POST['all_product'])) {
        unset($_GET['search']);
    }
    ?>
    <form action="" method="GET">
        <input class="w-52 h-8 p-4 font-bold border rounded-md" name="search" type="text" placeholder="Search" value="<?php if (isset($_GET['search'])) {
                                                                                                                            echo $_GET['search'];
                                                                                                                        } ?>">
        <input style="background: #3F3F3F; color: #fff;" class="p-1 px-3 rounded-md" type="submit" value="Submit">
    </form>
    <!-- end search -->

</div>
<form action="" method="POST">
    <table>
        <thead>
            <tr>
                <th>MÃ BL</th>
                <th>TÊN HÀNG HÓA</th>
                <th>SỐ BÌNH LUẬN</th>
                <th>MỚI NHẤT</th>
                <th>CŨ NHẤT</th>
                <th>QUẢN LÍ</th>
            </tr>

        </thead>
        <tbody>
            <?php

            // kiểm tra search
            if (isset($_GET['search']) && !empty($_GET['search'])) {

                $result = BinhLuan::search_product($_GET['search']);
                // var_dump($result);
                if ($result) {
                    echo "<h3 class='mt-2' style='color: green;font-weight: 600;'> Tìm thấy " . count($result) . " sản phẩm </h3>";
                } else {
                    echo "<h3 class='mt-2' style='color:red;font-weight: 600;'> Không tìm thấy sản phẩm nào !</h3>";
                }
            } else {

                $result = BinhLuan::list_binh_luan();
            }

            if (!empty($result)) {
                foreach ($result as $u) :
            ?>
                    <tr>
                        <td><?php echo $u['ma_bl'] ?></td>
                        <td>
                            <?php
                            
                            $result_product_name = BinhLuan::list_product_by_id($u['ma_sp']);
                            if (!empty($result_product_name)) {
                                foreach ($result_product_name as $value) {
                                    echo $value['ten_sp'];
                                }
                            }
                            ?>
                        </td>
                        <td><?php echo $u['so_bl'] ?></td>
                        <td><?php echo $u['bl_moi_nhat'] ?></td>
                        <td><?php echo $u['bl_cu_nhat'] ?></td>
                        <td>
                            <a href="?act=chi_tiet&ma_bl=<?php echo $u['ma_bl'] ?>&ma_sp=<?php echo $u['ma_sp'] ?>"><i class="fas fa-address-book"></i></a>
                        </td>
                    </tr>
            <?php endforeach;
            } ?>

        </tbody>

    </table>
</form>
<div class="mt-4">
    <?php if (isset($_GET['search']) && !empty($_GET['search'])) { ?>
        <form action="" method="POST">
            <button type="submit" name="all_product" class="p-1 px-3 rounded-md" style="background: #3F3F3F; color: #fff;">Tất cả sản phẩm</button>
        </form>
    <?php } ?>
</div>
<!--end all sản phẩm  -->