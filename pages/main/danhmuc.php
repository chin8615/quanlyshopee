<?php
    $sql_trang = mysqli_query($mysqli,"SELECT * FROM tbl_sanpham");
    $row_count = mysqli_num_rows($sql_trang);
    $trang = ceil($row_count/3);
    
    if(isset($_GET['trang'])) {
        $current_page =$_GET['trang'];
        settype($current_page,"int");
    }else {
        $current_page = 1;
    }
    if($current_page === 1) {
        $begin = 0;
    }else {
        $begin = ($current_page *3) - 3;
    }
    $sql_danhmuc = "SELECT * FROM tbl_danhmuc,tbl_sanpham 
    WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc 
    ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $begin,3";
    $query_product = mysqli_query($mysqli, $sql_danhmuc);
    $sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
    $query_cate = mysqli_query($mysqli, $sql_cate);
    $row_title = mysqli_fetch_array($query_cate);
?>
<h3>DANH MUC SAN PHAM:<?=$row_title['tendanhmuc']?></h3>
<div class="home-product">
    <div class="row sm-gutter list-product">
        <?php
            while($row_product = mysqli_fetch_array($query_product)){
                $giam = round(($row_product['giasanpham']-$row_product['gia_discount'])*(100/$row_product['giasanpham']),2);
        ?>
        <div class="col l-2-4 m-3 c-6">
        
            <a onclick="renderProductDetail('${product.id}')" class="home-product-item" href="index.php?quanly=sanpham&id=<?=$row_product['id_sanpham']?>">
                <img src="admincp/modules/quanlysanpham/uploads/<?=$row_product['hinhanh']?>" alt="" class="home-product-item__img">
                <h4 class="home-product-item__name"><?=$row_product['tensanpham']?></h4>
                <div class="home-product-item__price">
                    <span class="home-product-item__price-old"><?=number_format((float)$row_product['giasanpham'],0,',','.').'vnd'?></span>
                    <span class="home-product-item__price-current"><?=number_format((float)$row_product['gia_discount'],0,',','.').'vnd'?></span>
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
                    <div class="home-product-item__sold">88 đã bán</div>
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
                    <span class="home-product-item__sale-off-percent"><?=$giam?>%</span>
                    <span class="home-product-item__sale-off-lable">GIẢM</span>
                </div>
            </a>
        </div>
        <?php
            }
        ?>
    </div>
</div>
<ul class="pagination home-product-pagination">
    <?php
        if($current_page>1){
            echo '
            <li class="pagination-item">
                <a href="index.php?trang='.($current_page-1).'" class="pagination-item__link">
                    <i class="pagination-item__icon fas fa-angle-left"></i>
                </a>
            </li>
            ';
        }
        $isFirst = $isLast = false;
        $available = [1, $trang-1, $trang,$trang+1];
        for($i=1;$i<=$trang;$i++){
            // if(!in_array($i+1,$available)) {
            //     if(!$isFirst && $trang >3){
            //         echo '
            //             <li class="pagination-item">
            //                 <a href="" class="pagination-item__link">...</a>
            //             </li>
            //         ';
            //         $isFirst=true;
            //         continue;
            //     }
            //     if(!$isLast && $i > $trang){
            //         echo '
            //             <li class="pagination-item">
            //                 <a href="" class="pagination-item__link">...</a>
            //             </li>
            //         ';
            //         $isLast=true;
            //     }
            // }

            if($i == $current_page) {
                echo '
                    <li class="pagination-item pagination-item--active">
                    <a href="" class="pagination-item__link">'."$i".'</a>
                    </li>
                ';
            }
            else {
                echo '
                <li class="pagination-item">
                    <a href="index.php?trang='.$i.'" class="pagination-item__link">'."$i".'</a>
                </li>
                
            
                ';
            }
        }
        if($current_page < $trang ) {
            echo '
            <li class="pagination-item">
                <a href="index.php?trang='.($current_page+1).'" class="pagination-item__link">
                    <i class="pagination-item__icon fas fa-angle-right"></i>
                </a>
            </li>
            ';
            }
    ?>
    