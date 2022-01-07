<?php
    if(isset($_POST['timkiem'])) {
        $tukhoa = $_POST['tukhoa'];
    }
    $sql_pro = "SELECT * FROM tbl_danhmuc,tbl_sanpham 
    WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc 
    AND tbl_sanpham.tensanpham LIKE '%".$tukhoa."%' ";
    $query_pro = mysqli_query($mysqli, $sql_pro);
?>
<h3>Tu khoa: <?= $_POST['tukhoa']?></h3>
<div class="home-product">
    <div class="grid__row list-product">
        <div class="grid__column-2-5">
        <?php
            while($row = mysqli_fetch_array($query_pro)){
        ?>
            <a onclick="renderProductDetail('${product.id}')" class="home-product-item" href="index.php?quanly=sanpham&id=<?=$row['id_sanpham']?>">
                <img src="admincp/modules/quanlysanpham/uploads/<?=$row['hinhanh']?>" alt="" class="home-product-item__img">
                <h4 class="home-product-item__name"><?=$row['tensanpham']?></h4>
                <div class="home-product-item__price">
                    <span class="home-product-item__price-old"><?=number_format((float)$row['giasanpham'],0,',','.').'vnd'?></span>
                    <span class="home-product-item__price-current"><?=number_format((float)$row['gia_discount'],0,',','.').'vnd'?></span>
                </div>
                <div class="home-product-item__action">
                    <span class="home-product-item__like home-product-item__like--liked">
                        <i class="home-product-item__like-icon-empty far fa-heart"></i>
                        <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                    </span>
                    <div class="home-product-item__rating">
                        <i class="home-product-item__star-gold fas fa-star"></i>
                        <i class="home-product-item__star-gold fas fa-star"></i>
                        <i class="home-product-item__star-gold fas fa-star"></i>
                        <i class="home-product-item__star-gold fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="home-product-item__sold">${product.rating} đã bán</div>
                </div>
                <div class="home-product-item__origin">
                    <span class="home-product-item__brand">Whoo</span>
                    <span class="home-product-item__origin-title">Hàn Quốc</span>
                </div>
                <div class="home-product-item__favourite">
                    <i class="fas fa-check"></i>
                    <span>Yêu thích</span>
                </div>
                <div class="home-product-item__sale-off">
                    <span class="home-product-item__sale-off-percent">${product.percentSale}%</span>
                    <span class="home-product-item__sale-off-lable">GIẢM</span>
                </div>
            </a>
        <?php
            }
        ?>
        </div>
    </div>
</div>
                