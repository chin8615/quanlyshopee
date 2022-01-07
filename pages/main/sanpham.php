<?php
    $sql_chitiet = "SELECT * FROM tbl_danhmuc,tbl_sanpham 
    WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
    $query_chitiet = mysqli_query($mysqli, $sql_chitiet);
    while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>
<div class="home-product-detail">
    <div class="row sm-gutter list-product-detail">
        <div class="col l-7">
            <div class="frame-img"><img class="list-detail-img" src="admincp/modules/quanlysanpham/uploads/<?=$row_chitiet['hinhanh']?>" alt="hinh"></div>
            <div class="row sm-gutter list-detail-img-css">
                <div class="col l-3 ">
                    <img class="list-detail-img-small"  src="asset/img/black.png" alt="hinh">
                </div>
                <div class="col l-3 ">
                    <img class="list-detail-img-small"  src="asset/img/black.png" alt="">
                </div>
                <div class="col l-3 ">
                    <img class="list-detail-img-small"  src="asset/img/black.png" alt="">
                </div>
                <div class="col l-3 ">
                    <img class="list-detail-img-small"  src="asset/img/black.png" alt="">
                </div>
            </div>
        </div>
        <div class="col l-5">
            <form action="pages/main/themgiohang.php?idsanpham=<?=$row_chitiet['id_sanpham']?>" method="post">
                <div class="mall">Mall</div>
                <h3 class="name-product-detail"><?=$row_chitiet['tensanpham']?></h3>
                <ul class="more-info">
                    <li class="more-info-start">5.0</li>
                    <li class="more-info-start">12 đánh giá</li>
                    <li class="more-info-start">21 đã bán</li>
                </ul>
                <ul class="number">
                    <li class="number-price"><?=number_format((float)$row_chitiet['giasanpham'],0,',','.').'vnd'?></li>
                    <li class="number-price"><?=number_format((float)$row_chitiet['gia_discount'],0,',','.').'vnd'?></li>
                    <li class="number-price">25%</li>
                </ul>
                <span class="total">Số lượng</span>
                <input type="number" value="1">
                <input class="themvaogiohang" name="themgiohang" type="submit" value="Them vao gio hang">
            </form>
        </div>
    </div>
    <div class="row sm-gutter">
        <div class="col l-9">
            <div class="info-product-detail">
                <h3>CHI TIẾT SẢN PHẨM</h3>
                <div class="chitiet">
                    <div class="danhmuc">
                        <label for="">Danh mục</label>
                        <a href="">abc</a>
                    </div>
                    <div class="brand">
                        <label for="">Thương hiệu</label>
                        <a href="">abc</a>
                    </div>
                </div>
            </div>
            <div class="info-product-detail">
                <h3>MÔ TẢ SẢN PHẨM</h3>
                <div class="describe">
                    <div class="danhmuc">
                        <span><?=$row_chitiet['tomtat']?></span>
                        <span><?=$row_chitiet['noidung']?></span>
                        <img src="admincp/modules/quanlysanpham/uploads/<?=$row_chitiet['hinhanh']?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="wrapper">
    <div class="khunghinh">
        <img src="admincp/modules/quanlysanpham/uploads/<?=$row_chitiet['hinhanh']?>" alt="">
    </div>
    <form action="pages/main/themgiohang.php?idsanpham=<?=$row_chitiet['id_sanpham']?>" method="POST">
        <div class="khungchitiet">
            <p><?=$row_chitiet['tensanpham']?></p>
            <p><?=number_format((float)$row_chitiet['giasanpham'],0,',','.').'vnd'?></p>
            <p><?=number_format((float)$row_chitiet['gia_discount'],0,',','.').'vnd'?></p>
        </div>
        <input class="themvaogiohang" name="themgiohang" type="submit" value="Them vao gio hang">
    </form>
</div> -->
<!-- <div class="tabs">
  <ul id="tabs-nav">
    <li><a href="#tab1">Thông số kỹ thuật</a></li>
    <li><a href="#tab2">Nội dung chi tiết</a></li>
    <li><a href="#tab3">Hình ảnh sản phẩm</a></li>
  </ul> 
  <div id="tabs-content">
    <div id="tab1" class="tab-content">
        <?=$row_chitiet['tomtat']?>
    </div>
    <div id="tab2" class="tab-content">
        <?=$row_chitiet['noidung']?>
    </div>
    <div id="tab3" class="tab-content">
        <img src="admincp/modules/quanlysanpham/uploads/<?=$row_chitiet['hinhanh']?>" alt="">
    </div>
  </div> 
</div> -->
<?php
    }
?>