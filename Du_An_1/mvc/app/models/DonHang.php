<?php
// require_once './app/models/BaseModel.php';

class DonHang {
    

    function list_don_hang()
    {
       
        $limit = 10;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        
        $start = ($page - 1) * $limit;

        $sql = "SELECT * FROM donhang order by ma_don_hang desc limit $start, $limit";
        $row = pdo_query($sql);
        return $row;
    }

    function list_don_hang_thong_bao()
    {
        $sql = "SELECT * FROM thongbao a
        join donhang b on a.ma_don_hang = b.ma_don_hang
        join chitietdonhang c on b.ma_don_hang = c.ma_don_hang
        group by a.ma_thong_bao
        order by a.ma_thong_bao desc";
        $row = pdo_query($sql);
        return $row;
    }

    

    function don_hang_new()
    {

        $sql = "SELECT  ma_don_hang FROM donhang order by ma_don_hang desc ";
        $row = pdo_query_value($sql);
        return $row;
    }

    function add_don_hang( $ma_kh, $ngay_mua, $tong_tien)
    {
        $sql = "INSERT into donhang(ma_kh, ngay_mua, tong_tien) values(?,?,?)";
        $new_loai_hang = pdo_execute($sql, $ma_kh, $ngay_mua, $tong_tien);

        if ($new_loai_hang) {
            return "Thanh toán đơn hàng " . $new_loai_hang;
        } else {
            return "Thanh toán đơn hàng " . $new_loai_hang;
        }
    }

    function add_don_hang_chi_tiet($ma_don_hang, $ho_ten, $phone, $diachi, $diachi_cu_the, $loai_dia_Chi, $noi_nhan, $ten_sp, $phi_vc, $so_luong_sp, $hinh_sp, $gia_tien_sp, $ma_sp)
    {
        $sql = "INSERT into chitietdonhang(ma_don_hang, ho_ten, phone, diachi, diachi_cu_the, loai_dia_Chi, noi_nhan, ten_sp, phi_vc, so_luong_sp, hinh_sp, gia_tien_sp, ma_sp) values(?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $new_loai_hang = pdo_execute($sql,$ma_don_hang, $ho_ten, $phone, $diachi, $diachi_cu_the, $loai_dia_Chi, $noi_nhan, $ten_sp, $phi_vc, $so_luong_sp, $hinh_sp, $gia_tien_sp, $ma_sp);

        if ($new_loai_hang) {
            return "Thanh toán đơn hàng " . $new_loai_hang;
        } else {
            return "Thanh toán đơn hàng " . $new_loai_hang;
        }
    }

    // function update_loai_hang($ten_loai,$ma_loai){
    //     $sql = "UPDATE loaihang set ten_loai=? where ma_loai=?";
    //     $result = pdo_execute($sql, $ten_loai, $ma_loai);
    //     if ($result) {
    //         return "Update loại hàng " . $result;
    //     } else {
    //         return "Update loại hàng " . $result;
    //     }
    // }

    function list_don_hang_by_id($ma_don_hang)
    {
       
        $sql = "SELECT * FROM chitietdonhang a
        join donhang b on a.ma_don_hang = b.ma_don_hang 
        where a.ma_don_hang = ?
        order by a.ma_don_hang desc";
        $row = pdo_query($sql,$ma_don_hang);
        return $row;
    }

    function delete_don_hang($ma_don_hang){
        $sql = "DELETE FROM donhang where ma_don_hang='$ma_don_hang'";
        $result = pdo_execute($sql);

        if ($result) {
            return "Xóa đơn hàng " . $result;
        } else {
            return "Xóa đơn hàng " . $result;
        }
    }

    function list__count_don_hang()
    {
        $sql = "SELECT count(ma_don_hang) as 'count_don_hang' FROM donhang order by ma_don_hang desc";
        $value = pdo_query_value($sql);
        return $value;
    }

    //   duyệt đơn hàng
    function duyet_don_hang($ma_don_hang){
            $sql = "UPDATE donhang set duyet=1 where ma_don_hang=?";
            $result = pdo_execute($sql, $ma_don_hang );
            if ($result) {
                return "Update loại hàng " . $result;
            } else {
                return "Update loại hàng " . $result;
            }
    }

    //   giao hàng đơn hàng
    function giao_hang($ma_don_hang){
        $sql = "UPDATE donhang set giao_hang=1 where ma_don_hang=?";
        $result = pdo_execute($sql, $ma_don_hang);
        if ($result) {
            return "Update loại hàng " . $result;
        } else {
            return "Update loại hàng " . $result;
        }
    }   

    // thêm thông báo
    function add_thong_bao($thoi_gian, $ma_don_hang, $noi_dung)
    {
        $sql = "INSERT into thongbao(thoi_gian, ma_don_hang, noi_dung) values(?,?,?)";
        $new_loai_hang = pdo_execute($sql, $thoi_gian, $ma_don_hang, $noi_dung);

        if ($new_loai_hang) {
            return "Thêm thông báo " . $new_loai_hang;
        } else {
            return "Thêm thông báo " . $new_loai_hang;
        }
    }
       //   cập nhật trạng thái (đã xem / chưa xem)
       function da_xem_thong_bao($ma_thong_bao){
        $sql = "UPDATE thongbao set trang_thai=1 where ma_thong_bao=?";
        $result = pdo_execute($sql, $ma_thong_bao);
        
    }   

    // số thông báo chưa xem
    function so_thong_bao_chua_xem()
    {
        $sql = "SELECT * FROM thongbao 
        where trang_thai = 0
        order by ma_thong_bao desc";
        $row = pdo_query($sql);
        return $row;
    }
        

    //  // tìm sản phẩm
     public function search_product($search)
     {
         $limit = 5;
         $page = isset($_GET['page']) ? $_GET['page'] : 1;
         
         $start = ($page - 1) * $limit;
         $sql = "SELECT * FROM donhang where ten_sp LIKE '%$search%' order by ma_don_hang desc limit  $start, $limit";
         $row = pdo_query($sql);
         return $row;                                                                                                                            
     }



}
