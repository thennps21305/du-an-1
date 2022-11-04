<link rel="stylesheet" href="../../content/css/shop.css">

<?php 
include "../layout/banner.php";?>
<section class="content">
          
      
<?php
   $sp= load_sp_db();
?>

<div class="hot-sale">
                    <h2>SẢN PHẨM BÁN CHẠY</h2>
                    <i class="fa-solid fa-minus" style="color: #277BC0;"></i><i class="fa-solid fa-minus" style="color: #277BC0;"></i><i class="fa-solid fa-minus" style="color: #277BC0;"></i>
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
                 <a href="../hanghoa/chitietsp.php?ma_hh=<?=$hh['ma_hh']?>" class="sp">
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
        </section>