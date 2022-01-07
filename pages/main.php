<div class="app__container">
    <div class="grid wide">
        <div class="row sm-gutter app__content">
            <div class="col l-2 m-0 c-0">
            <?php
                include 'sidebar/sidebar.php';
            ?>
            </div>
            <div class="col l-10 m-12 c-12">
                <div class="home-filter">
                    <span class="home-filter__lable">Sắp xếp theo</span>
                    <button class="home-filter-btn btn">Phổ biến</button>
                    <button class="home-filter-btn btn btn--primary">Mới nhất</button>
                    <button class="home-filter-btn btn">Bán chạy</button>
    
                    <div class="select-input">
                        <span class="select-input__lable">
                            Giá
                        </span>
                        <i class="select-input__icon fas fa-angle-down"></i>
                        <ul class="select-input__list">
                            <li class="select-input__item">
                                <a href="" class="select-input__link">Giá: Thấp đến cao</a>
                            </li>
                            <li class="select-input__item">
                                <a href="" class="select-input__link">Giá: Cao đến thấp</a>
                            </li>
                        </ul>
                    </div>
                    <div class="home-filter__page">
                        <span class="home-filter__page-num">
                            <span class="home-filter__page-current">1</span> / 14
                        </span>
                        <div class="home-filter__page-control">
                            <a class="home-filter__page-btn home-filter__page-btn__disable">
                                <i class="fas fa-angle-left home-filter__page-btn__no-enable"></i>
                            </a>
                            <a class="home-filter__page-btn ">
                                <i class="fas fa-angle-right home-filter__page-btn__enable"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
                    if(isset($_GET['quanly'])) {
                        $tam = $_GET['quanly'];
                    }else {
                        $tam = '';
                    }
                    if($tam == 'danhmucsanpham') {
                        include 'main/danhmuc.php';
                    }elseif($tam == 'danhmucbaiviet') {
                        include 'main/baiviet.php';
                    }elseif($tam == 'baiviet') {
                        include 'main/chitietbaiviet.php';
                    }
                    elseif($tam == 'giohang') {
                        include 'main/giohang.php';
                    }elseif($tam == 'tintuc') {
                        include 'main/tintuc.php';
                    }elseif($tam == 'lienhe') {
                        include 'main/lienhe.php';
                    }elseif($tam == 'sanpham') {
                        include 'main/sanpham.php';
                    }elseif($tam == 'dangky') {
                        include 'main/dangky.php';
                    }elseif($tam == 'dangnhap') {
                        include 'main/dangnhap.php';
                    }elseif($tam == 'timkiem') {
                        include 'main/timkiem.php';
                    }
                    elseif($tam == 'camon') {
                        include 'main/camon.php';
                    }elseif($tam == 'thaydoimatkhau') {
                        include 'main/doimatkhau.php';
                    }
                    else {
                        include 'main/index.php';
                    }
                ?>
                <!-- <ul class="pagination home-product-pagination">
                    <li class="pagination-item">
                        <a href="" class="pagination-item__link">
                            <i class="pagination-item__icon fas fa-angle-left"></i>
                        </a>
                    </li>
    
                    <li class="pagination-item pagination-item--active">
                        <a href="" class="pagination-item__link">1</a>
                    </li>
                    <li class="pagination-item">
                        <a href="" class="pagination-item__link">2</a>
                    </li>
                    <li class="pagination-item">
                        <a href="" class="pagination-item__link">3</a>
                    </li>
                    <li class="pagination-item">
                        <a href="" class="pagination-item__link">4</a>
                    </li>
                    <li class="pagination-item">
                        <a href="" class="pagination-item__link">5</a>
                    </li>
                    <li class="pagination-item">
                        <a href="" class="pagination-item__link">...</a>
                    </li>
                    <li class="pagination-item">
                        <a href="" class="pagination-item__link">14</a>
                    </li>
    
                    <li class="pagination-item">
                        <a href="" class="pagination-item__link">
                            <i class="pagination-item__icon fas fa-angle-right"></i>
                        </a>
                    </li>
                </ul> -->
            </div>
        </div>
    </div>
</div>