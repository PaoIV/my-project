<?php
	include("lib_db.php");
	//get input -> ko co, vi la trang chu
	$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] : 0;
	$q = isset($_REQUEST["q"]) ? trim($_REQUEST["q"]) : "";
	// if ($id <  1) return ;
	//tao sql
	//$sql = "select * from grab_content where id={$id}";
	$sql = "select * from tbl_product ";
	// echo $sql;exit();
	//thuc thi cau lenh sql
	$pros = exec_select($sql);
	// print_r($result);exit();
	// if (!$pros) return ;
    $sql = "select * from tbl_product where id={$id}";
    $info= select_one($sql);
	
	// $sql = "select * from grab_content 
	// where cid={$pros['cid']} limit 10";
	
	// //echo $sql;exit();
	
	// $resultOther = exec_select($sql);
	//print_r($resultOther);exit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/btl.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.css">
    
</head>
<body>
    <div class="m-wapper">
        <!-- header -->
        <div class="header">
            <div class="header-top">
                <div class="control-top frames">
                    <div class="dow-app" id=ctt>
                        <span>Tải ứng dụng</span>
                    </div>
                    <div class="cus-care" id= ctt>
                        <span>Chăm sóc khách hàng</span>
                    </div>
                    <div class="test-pro" id=ctt>
                        <span>Kiểm tra đơn hàng</span>
                    </div>
                </div>    
            </div>              
        </div> 
        <!-- content -->
        <div class="content">
            <div class="content-top">
                <div class="interact-area frames">
                    <div class="col-lg-1 col-md-1 col-xs-4">
                        <div class="logo-sendo">
                            <a href="./index.php">
                                <img src="images/logo-sendo.PNG" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-xs-4">
                        <div class="search-area">
                            <div class="col-md-1">
                                <div class="menu-top">
                                    <a href=""><img src="images/menu-top.PNG" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="search-input">
                                    <form method="GET">
			                        <!-- <input name="q" value=""/> -->
                                    <input type="text" placeholder="Tìm kiếm trên Sendo...                                           ">
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="search-galss">
                                    <button ><i class="fas fa-search fa-2x"></i>
                                    </button>    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-xs-4">
                        <div class="bag-account">
                            <div class="col-xs-4 col-sm-2">
                                <div class="bag">
                                    <a href=""><img src="images/pro-bag.PNG" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-7">
                                <button class="login">
                                    <a href="./login.php">
                                         Đăng Nhập
                                    </a>    
                                </button>
                            </div>
                            <div class="col-xs-4 col-sm-3">
                                <button class="signup">
                                    <a href="./sign-up.php">
                                        Đăng Ký
                                    </a>
                                </button>
                            </div>                           
                        </div>                           
                    </div>
                </div>
            </div>
            <div class="address frames">
                <ol>
                    <li>
                        <a href="">trang chủ</a>
                    </li>
                    <li>/</li>
                    <li>
                        <a href="">tên chuyên mục</a>
                    </li>
                </ol>
            </div>
            <div class="interac-area-pro frames">
                <div class="decription">
                    <div class="col-xs col-sm6 col-md-4 col-lg-5">
                        <div class="img-product">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?php echo $info['img']?>" class="d-block w-100" alt="...">
                                    </div>
                                    <!-- <div class="carousel-item">
                                        <img src="" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="" class="d-block w-100" alt="...">
                                    </div> -->
                                </div>
                                    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                    </button> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xs col-sm6 col-md-8 col-lg-7">
                        <div class="info-product">
                            <div class="n-pro">
                                <h2>
                                    <img src="images/Shop+.png" alt="">
                                    <?php echo $info['name'] ?>
                                </h2>
                            </div>
                            <div class="price-pro">
                                <span>
                                <?php echo $info['price'] ?>
                                </span>
                            </div>
                            <div class="nbs-pro">
                                <span>
                                    6 Đánh giá
                                </span>
                                <span> - </span>
                                <i class="fas fa-shopping-bag"></i>
                                <span>
                                <?php echo $info['nbsold'] ?>
                                </span>
                            </div>
                            <div class="choose-nb">
                                <h5>Chọn số lượng:</h5>
                                <button><i class="fas fa-minus"></i></button>
                                <input inputmode="numeric" value="1">
                                <button><i class="fas fa-plus"></i></button>
                            </div>
                            <div class="add-cart-buy">
                                <div class=col-md-6>
                                    <div class="add-cart">
                                        <button>
                                            <h2>Thêm vào giỏ hàng</h2>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="buy">
                                        <button>
                                            <h2>Mua ngay</h2>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="endow-benefit">
                                <div class="endow">
                                    <div class="user-endow">
                                        <h3>Ưu đãi dành cho bạn</h3>
                                        <i class="fas fa-exclamation-circle fa-2x"></i>
                                    </div>
                                    <div class="endow-freeship">
                                        <img src="images/free-ship.png" alt="">
                                        <h5>Miễn phí vận chuyển</h5>
                                    </div>
                                </div>
                                <div class="benefit">
                                    <div class=user-benefit>
                                        <h3>Quyền lới khách hàng</h3>
                                        <i class="fas fa-exclamation-circle fa-2x"></i>
                                    </div>
                                    <div class="benefit-refund">
                                        <i class="fas fa-shield-alt fa-2x" ></i>
                                        <h5>48 giờ hoàn trả</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div> 
            </div>
            <div class="product-like frames">
                <h3>Ở đây có sản phẩm bạn thích</h3>
            </div>
            <div class="row frames">
                <?php foreach($pros as $pro) {?>
                    <div class="col-xs col-sm-6 col-md-4 col-lg-2">
                        <div class="card" id=pro>
                            <a href="./chi-tiet.php?id=<?php echo $pro['id']?>" class="page-pro">
                                <img src="<?php echo $pro['img']?>" class="card-img-top">
                                <div class="pro-status">
                                    <h5 class="n-pro"><?php echo $pro['name']?></h5>
                                    <h4 class="price-pro"><?php echo $pro['price']?></h4>
                                    <div class="adr-nbs">
                                        <div class="adr-pro">
                                         <h4><?php echo $pro['address']?></h4>
                                        </div>
                                        <div class="nbs-pro">
                                            <h4><?php echo $pro['nbsold']?></h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div> 
                <?php }?>
            </div>
        </div>
        <!-- footer -->
        <div class="footer">
            <div class="footer-top frames">
                <div class="row">
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class=interac-area-2>
                            <a href="">
                                <img src="images/img-itr-1.png"  class="img-fluid" alt="">
                                <div class="text-itr">
                                    <div class="text-itr-1">
                                        <h5>Siêu nhiều hàng tốt</h5>
                                    </div>
                                    <div class="text-itr-2">
                                        <h6>Cần gì cũng có 26 ngành hàng & 10 triệu sản phẩm</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>  
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class=interac-area-2>
                            <a href="">
                                <img src="images/img-itr-2.png"  class="img-fluid" alt="">
                                <div class="text-itr">
                                    <div class="text-itr-1">
                                        <h5>Siêu yên tâm</h5>
                                    </div>
                                    <div class="text-itr-2">
                                        <h6>Miễn phí đổi trả 48h</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class=interac-area-2>
                            <a href="">
                                <img src="images/img-itr-3.png"  class="img-fluid" alt="">
                                <div class="text-itr">
                                    <div class="text-itr-1">
                                        <h5>Siêu tiện lợi</h5>
                                    </div>
                                    <div class="text-itr-2">
                                        <h6>Mang thế giới mua sắm của Sendo trong tầm tay bạn</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class=interac-area-2>
                            <a href="">
                                <img src="images/img-itr-4.png"  class="img-fluid" alt="">
                                <div class="text-itr">
                                    <div class="text-itr-1">
                                        <h5>Siêu tiết kiệm</h5>
                                    </div>
                                    <div class="text-itr-2">
                                        <h6>Giá hợp lý, vừa túi tiền. Luôn có nhiều chương trình khuyến mãi</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>                 
                </div>
            </div>
            <div class="footer-mid frames">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="about-we">
                            <h5>VỀ CHÚNG TÔI</h5>
                            <ul>
                                <li><a href="#">Giới thiệc sendo.vn</a></li>
                                <li><a href="#">Giới thiệu Senmall</a></li>
                                <li><a href="#">Quy chế hoạt động</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="for-customer">
                            <h5>DÀNH CHO NGƯỜI MUA</h5>
                            <ul>
                                <li><a href="#">Giải quyết khiếu lại</a></li>
                                <li><a href="#">Hướng dẫn mua hàng</a></li>
                                <li><a href="#">Chính sách đổi trả</a></li>
                                <li><a href="#">Chăm sóc khách hàng</a></li>
                                <li><a href="#">Nạp tiền điện thoại</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="for-sale">
                            <h5>DÀNH CHO NGƯỜI BÁN</h5>
                            <ul>
                                <li><a href="#">Quy định đối với người</a></li>
                                <li><a href="#">Chính sách badn hàng</a></li>
                                <li><a href="#">Hệ thống tiêu chí kiểm duyệt</a></li>
                                <li><a href="#">Mở shop trên sendo</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="dow-app">
                            <h5>TẢI ỨNG DỤNG SENDO</h5>
                            <ul>
                                <li><a href="#"></a>Mang thế giói mua sắm của sem đỏ trong tầm tay bạn</li>
                            </ul>
                            <div class="app">
                                <div class="url-appstore">
                                    <a href="#">
                                        <img src="images/logo-app-store.png" alt="">
                                    </a>
                                </div>
                                <div class="url-playstore">
                                    <a href="#">
                                        <img src="images/logo-play-store.png" alt="">
                                    </a>
                                </div>
                                <div class="url-huawei">
                                    <a href="#">
                                        <img src="images/logo-huawei.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>   
            <div class="footer-bot frames">
               <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="info-compan">
                        <h5>Công ty Cổ phần Công nghệ Sen Đỏ, thành viên của Tập đoàn FPT</h5>
                        <span>Số ĐKKD: 0312776486 - Ngày cấp: 13/05/2014, được sửa đổi lần thứ 6, ngày 23/05/2016.</span>
                        <br>
                        <span>Cơ quan cấp: Sở Kế hoạch và Đầu tư TPHCM.</span>
                        <br>
                        <span>Địa chỉ: Tầng 5, Tòa nhà A, Vườn Ươm Doanh Nghiệp, Lô D.01, Đường Tân Thuận, Khu chế xuất Tân Thuận, Phường Tân Thuận Đông, Quận 7, Thành phố Hồ Chí Minh, Việt Nam.</span>
                        <br>
                        <a class="email-text-color"href="#">Email: lienhe@sendo.vn</a>
                        <br>
                        <a href="#"><img src="images/bo_cong_thuong.png" alt=""></a>    
                        <a href="#"><img src="images/ko_hang_gia.png" alt=""></a>             
                     </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="login-two">
                            <h5>Đăng ký nhận bản tin ưu đãi khủng từ Sendo</h5>
                            <input type="text" placeholder="Email của bạn là...">
                            <button>Đăng ký</button>
                        </div>
                    </div>
               </div>
            </div>    
        </div>
    </div>     
</body>
</html>
