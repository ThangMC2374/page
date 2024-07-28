<?php
$website_domain ="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$post_url = $_SERVER['REQUEST_URI'];
$domain = $_SERVER['HTTP_HOST'];
$hakibavuong = '';
function cache() { 
 return '?'.bin2hex(random_bytes(3));   
}
$changepages = basename($_SERVER['REQUEST_URI'], '.php');
$title = "dichvuvn - Trang website fake bill chuyển khoản miễn phí";
$description = "dichvuvn - Trang chủ fake bill Vietinbank, Mbbank, Momo, vietcombank, v.v.v";
$keyword = "dichvuvn.net, dichvuvn.net, fakebill dichvuvn.net, fakebill ngân hàng, dichvuvn fakebill, vuvanken. net, website fake bill";
$iconshortcut = "https://abctech.vn/wp-content/uploads/2017/06/logo-nen-xanh.jpg";
$imgreviews = "https://abctech.vn/wp-content/uploads/2017/06/logo-nen-xanh.jpg";
if ($changepages == 'fake-bill-vietinbank') {
    $title = "Fakebill - Ngân Hàng VietinBank";
    $description = "dichvuvn.net - Trang fake bill VietinBank chuyển khoản miễn phí";
    $imgreviews = "https://i.imgur.net/Gpi6GAL.png";
}elseif ($changepages == 'fake-bill-acb-bank') {
    $title = "Fakebill - Ngân Hàng ACB Bank";
    $description = "Fakebill - Trang fake bill ACB Bank chuyển khoản miễn phí";
    $imgreviews = "https://i.imgur.net/jmny07x.png";
}elseif ($changepages == 'fake-bill-mbbank') {
    $title = "Fakebill - Ngân Hàng MBBank";
    $description = "dichvuvn.net - Trang fake bill MBBank chuyển khoản miễn phí";
    $imgreviews = "https://i.imgur.net/U3dfbWY.png";
}elseif ($changepages == 'fake-bill-technetbank') {
    $title = "Fakebill - Ngân Hàng Technetbank";
    $description = "dichvuvn.net - Trang fake bill Technetbank chuyển khoản miễn phí";
    $imgreviews = "https://i.imgur.net/hfGMsUh.png";
}elseif ($changepages == 'fake-bill-vietcombank') {
    $title = "Fakebill - Ngân Hàng vietcombank";
    $description = "dichvuvn.net - Trang fake bill vietcombank chuyển khoản miễn phí";
    $imgreviews = "https://i.imgur.net/1cuWvw4.png";
}
$daysOfWeek = [
    'Sunday' => 'Chủ Nhật',
    'Monday' => 'Thứ Hai',
    'Tuesday' => 'Thứ Ba',
    'Wednesday' => 'Thứ Tư',
    'Thursday' => 'Thứ Năm',
    'Friday' => 'Thứ Sáu',
    'Saturday' => 'Thứ Bảy'
];
$timestamp = time();
date_default_timezone_set('Asia/Ho_Chi_Minh');
$now = date('H:i l d/m/Y', $timestamp);
$now = strtr($now, $daysOfWeek);
?>