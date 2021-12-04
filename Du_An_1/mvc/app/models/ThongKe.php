<?php


class ThongKe
{

    // list thống kê hàng hóa
    function list_thong_ke_so_luong_hang_hoa()
    {

        $sql = "SELECT a.ten_loai, count(b.ma_sp) as 'so_luong', MIN(b.gia) as 'gia_min', MAX(b.gia) as 'gia_max', AVG(b.gia) as 'gia_tb' from loaihang a
        left join sanpham b on b.maloai = a.ma_loai
        group by a.ten_loai
        order by a.ten_loai asc  ";
        $row = pdo_query($sql);
        return $row;
    }

    // list thống kê đơn hàng
    function list_thong_ke_so_luong_don_hang()
    {

        $sql = "SELECT c.ten_sp, count(a.ma_don_hang) as 'so_luong' from donhang a
         join chitietdonhang b on b.ma_don_hang = a.ma_don_hang
         join sanpham c on b.ma_sp = c.ma_sp
        group by   c.ten_sp
        order by a.ma_don_hang asc ";
        $row = pdo_query($sql);
        return $row;
    }

    // list thống kê khach_hang
    function list_thong_ke_kh_by_vai_tro()
    {

        $sql = "SELECT vaitro, count(ma_kh) as 'so_luong' from khachhang 
        
        group by vaitro ";
        $row = pdo_query($sql);
        return $row;
    }

    // list số sp bán được trong 1 tháng gần đây
    function so_sp_ban_in_1_month()
    {

        $sql = "SELECT b.ma_sp , c.ten_sp , sum(b.so_luong_sp) as 'so_luong'  from donhang a
        join chitietdonhang b on b.ma_don_hang = a.ma_don_hang
        join sanpham c on b.ma_sp = c.ma_sp
        where a.duyet = 1 and a.giao_hang = 1 and MONTH(a.ngay_mua) = 12
        -- MONTH(now()) - 1
        group by b.ma_sp
        order by a.ma_don_hang asc ";
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
