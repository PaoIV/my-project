<?php
	include("lib_db2.php");
	$q = isset($_REQUEST["q"]) ? $_REQUEST["q"] : '';
	$qsessionname = "___Q___";
	if (!isset($_REQUEST["q"])){
		$q = isset($_SESSION[$qsessionname]) ? $_SESSION[$qsessionname] : '';
	}else{
		$_SESSION[$qsessionname] = $q;
	}
	$cond = "";
	$searchfields = array("","");
	if ($q){
		$sq = sql_str($q);
		$cond = "where ";
		$cond .= " name like '%{$sq}%' ";
		$cond .= " or address like '%{$sq}%' ";
	}
	//print_r($_SESSION);
	$sql = "select * from tbl_product {$cond} order by id desc limit 10 ";
	//echo $sql;exit();
	//thuc thi cau lenh sql
	// print("oke");exit();
	$pros = select_list($sql);
	// print_r($pros);exit();
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
                                <button class="login">Admin</button>
                            </div>
                            <div class="col-xs-4 col-sm-3">
                                <!-- <button class="signup">Đăng Ký</button> -->
                            </div>                          
                        </div>                           
                    </div>
                </div>
            </div> 
            <div class="title frames">
                <h1>Quản Lý Sản Phẩm</h1>
            </div>
            <h4>
                <div class="admin-interac frames">
                    <div class="col-md-8 col-lg-8">
                        <div class="admin-interac-top-left">
                            <br>
                            <form method="GET" action="search.php">
                            <input class="admin-input" name="q" value="<?php echo $q ?>"/>
                            <button class="admin-button">
                                <i class="fas fa-search fa-xs"></i>
                            </button></form>
                            <table>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Address</th>
                                    <th>Number-Sold</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                <?php foreach ($pros as $pro) {?>
                                    <tr>
                                        <td><?php echo $pro['id'];?></td>
                                        <td><?php echo $pro['name'];?></td>
                                        <td><?php echo $pro['price'];?></td>
                                        <td><?php echo $pro['address'];?></td>
                                        <td><?php echo $pro['nbsold'];?></td>
                                        <td>
                                            <button class="admin-button">
                                                <a href="edit.php?id=<?php echo $pro['id'];?>">Edit</a>
                                            </button>
                                        </td>
                                        <td>
                                            <button class="admin-button">
                                                <a href="delete.php?id=<?php echo $pro['id'];?>">Delete</a>
                                            </button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="admin-interac-top-right">
                            <ul>
                                <button class="admin-button">
                                    <a href="./add.php">Add</a>
                                </button>
                                <br>
                                <button class="admin-button">
                                    <a href="./search.php">Search</a>
                                </button>
                            </ul>
                        </div>
                    </div>
                </div>
            </h4>
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
