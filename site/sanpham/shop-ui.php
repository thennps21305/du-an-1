<head>
    <link rel="stylesheet" href="../../content/css/shop.css">
</head>
<div class="text-animation">
    <marquee>Quần áo bền vững<span style="color: #277BC0; font-size:33px"> được tuyển chọn</span> <span style="margin: 0 50px;"><i class="fa-solid fa-minus" style="color: #277BC0;"></i> <i class="fa-solid fa-minus" style="color: #277BC0;"></i> <i class="fa-solid fa-minus" style="color: #277BC0;"></i></span>Mua<span style="color: #277BC0; font-size:33px"> ít hơn</span> bằng cách <span style="color: #277BC0; font-size:33px">biết nhiều hơn</span></marquee>

</div>
<div class="hot-sale">
                    <h2><strong> <?php if(isset($tendm)){ print_r($tendm);}else{
                        echo "Sản phẩm";
                    } ?></strong></h2>
                </div>
                <div class="locsp">
            <div class="row-loc">
                    <span>A -> Z</span>
            </div>
            <div class="row-loc2">
                <form action="">
                    <select name="" id="">
                        <option value="0">Mặc định</option>
                        <option value="1">Thấp -> cao</option>
                        <option value="2">Cao -> thấp</option>
                        <option value="3">Nam</option>
                        <option value="4">Nữ</option>

                    </select>
                    <button type="submit">Lọc</button>
                </form>
            </div>
        </div>
<div id="sanpham" class="data ">   
     
        <?php 
        // chuyển đơn vị tiền tệ vnd
   if (!function_exists('currency_format')) {
    function currency_format($number, $suffix = 'đ') {
        if (!empty($number)) {
            return number_format($number, 0, ',', '.') . "{$suffix}";
        }
    }
}
// show sp từ db
        foreach ($sp as $hh) {  
             extract($hh);?>
      
            <div class="flex-row-sp">
                <div class="row-sp">      
                    <a href="../ct_san_pham/chi-tiet.php?ma_hh=<?=$hh['ma_hh']?>" class="sp">
                    <img src="<?=$img_path?><?php echo $hh['hinh']?>" height= "250" width="100%" >
                    <h5><?=$hh['ten_hh']?> </h5>
                    
                    <div class="gia"> <?=currency_format($hh['don_gia'])?></div>
                    <!-- <div class="btn">
        <button class="btn-order"><span>GIỎ HÀNG</span> </button>
                    </div> -->
             
                  </a>
                </div>
            </div>
<?php }?></div>
<div class="box-content-fot">
    <div class="text-content-fot">Lấy những thứ tốt  <i class="fa-solid fa-circle-check"></i></div>
    <div class="img-box">
        <img src="../../content/imgs/ct-fott.png" alt="" class="img-fot1">
    <img src="../../content/imgs/ct-fott2.png" alt=""  class="img-fot2">
    </div>
    
</div>