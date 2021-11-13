<?php 


class ThongKe{

    // list thống kê
    function list_thong_ke(){
        $limit = 10;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $start = ($page - 1) * $limit;
        $sql = "SELECT a.ten_loai, count(b.ma_sp) as 'so_luong', MIN(b.gia) as 'gia_min', MAX(b.gia) as 'gia_max', AVG(b.gia) as 'gia_tb' from loaihang a
        left join sanpham b on b.maloai = a.ma_loai
        group by a.ten_loai
        order by a.ten_loai asc limit $start, $limit ";
        $row = pdo_query($sql);
        return $row;
    }

    function list__count_loai_hang()
    {
        $sql = "SELECT count(ma_loai) as 'count_loai' FROM loaihang order by ma_loai desc";
        $value = pdo_query_value($sql);
        return $value;
    }


}
