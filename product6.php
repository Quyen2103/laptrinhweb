<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- Basic page needs
        ============================================ -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Box Fans</title>
    <link rel="icon" href="images/Letter-F-icon-1.png">
    <meta name="description" content="">
    <!-- Mobile specific metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- font awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- carousel Theme CSS -->
    <link rel="stylesheet" href="css/owl.my_theme.css">
    <!-- carousel transitions CSS -->
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- nivo slider slider css -->
    <link rel="stylesheet" href="css/nivo-slider.css">
    <!-- animate css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Price jquery-ui  -->
    <link rel="stylesheet" href="css/jquery-ui.css">
    <!-- fancy-box theme -->
    <link rel="stylesheet" href="fancy-box/jquery.fancybox.css">
    <!-- normalizer -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Mobile menu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <div class="chat hidden">
        <button class="open-button"> <i class="fas fa-times"></i>  <i class="fab fa-facebook-messenger"></i> </button>
        <div class="chat-popup" id="myForm">
            <div class="arrow-down"></div>
            <form action="" class="form-container">

                <a href="https://www.facebook.com/messages">
                    <h3> <i class="fab fa-facebook-messenger"></i> Messenger</h3>
                </a>
                <a href="https://zalo.me/pc">
                    <h3><img src="./images/zalo.png" width="13%" alt="">Zalo </h3>
                </a>
                <h3 onclick="openForm1()"><i class="fas fa-phone"></i> Yêu cầu gọi lại </h3>

            </form>
        </div>
        <div class="chat-popup1" id="myForm1">
            <div class="arrow-down"></div>
            <form action="" class="form-container">
                <span> <i class="fas fa-times"></i> </span>
                <h5>Vui lòng nhập số điện thoại của bạn và chúng tôi sẽ sớm gọi lại cho bạn</h5>
                <input type="number" min="0" placeholder="+XXX-XX-XXX-XX-XX">
                <button type="button" class="btn ">Đang chờ cuộc gọi</button>
            </form>
        </div>
    </div>
    <a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647;">
        <div id="backtop" class="onTop hidden">
            <i class="fa fa-angle-double-up" aria-hidden="true"></i>
        </div>
    </a>
    <!--Start Header Top area -->

    <div class="header">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-4 text"> <i class="fas fa-exclamation-triangle"></i> LÀM CHO THẾ GIỚI LUÔN TƯƠI TRẺ</div>
                <div class="col-lg-4 text"> <i class="fas fa-phone-alt"></i> HOTLINE: 0909.090.090</div>
                <div class="col-lg-4 text"> <i class="fas fa-headset"></i> HỖ TRỢ TRỰC TUYẾN 24/7</div>
            </div>
        </div>
    </div>
    <!--Start Header Top area -->
    <div class="header_area_top">
        <div class="container-fluid">
            <div class="row d-flex align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 text-center">
                    <div class="logo ">
                        <a href="index.php">
                            <img src="./images/logo1.png" alt="" width="60%">
                        </a>
                    </div>
                    <!--End Logo area -->
                </div>
                <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 text-center">
                    <form action="#" name="myForm">
                        <div class="search_box ">
                            <input id="itp" class="input_text" type="text" placeholder="Search" />
                            <button type="submit" class="btn-search">
									<span><i class="fa fa-search"></i></span>
							</button>
                        </div>
                    </form>
                    <!--End Search area -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb-3">
                    <!--Start Header Right Cart area -->
                    <div class="account_card_area">
                        <ul id="account_nav">
                            <li><a href="my-account.php">Tài Khoản <i class="fas fa-long-arrow-alt-right"></i></a>
                            </li>
                            <li>
                                <a href="cart.php">
                                    <img src="images/cart.webp" width="25%" alt="">
                                    <span class="cart_zero">2</span>
                                </a>
                                <div class="cart_down_area">
                                    <div class="cart_single">
                                        <a href="#"><img src="images/img-products/quat-phun-suong-1.jpg" alt="" width="30%" /></a>
                                        <h2><a href="#">Pelonic FS40</a></h2>
                                        <p>299 $</p>
                                    </div>
                                    <div class="cart_single">
                                        <a href="#"><img src="./images/product (3).jpg" alt="" width="30%" /></a>
                                        <h2><a href="#">Royal Aura Fan S650</a></h2>
                                        <p>1259 $</p>
                                    </div>
                                    <div class="cart_shoptings">
                                        <a href="checkout.php" class="cart_shoptings-link">Mua ngay</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--End Header Right Cart area -->
                </div>
            </div>
        </div>
    </div>
    <!--End Header Top area -->
    <!--Start Main Menu area -->
    <div class="header_botttom_area bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!--Start desktop menu area -->
                    <div class="main_menu">
                        <ul id="nav_menu" class="active_cl">
                            <li>
                                <a href="index.php"> <i class="fas fa-home"></i> <span class="Home">Trang chủ</span></a>
                            </li>
                            <li>
                                <a href="shop.php"> <span class="Clothings">Sản Phẩm</span> <i class="fas fa-caret-down"></i></a>
                                <div class="mega_menu_list">
                                    <div class="single_megamenu">
                                        <div class="items_list">
                                            <a href="product.php"><i class="fa fa-angle-right"></i> Ceiling Fans</a>
                                            <a href="product1.php"><i class="fa fa-angle-right"></i> Tower Fans</a>
                                            <a href="product2.php"><i class="fa fa-angle-right"></i> Misting Fans</a>
                                            <a href="product3.php"><i class="fa fa-angle-right"></i> Steam Fans</a>
                                            <a href="product4.php"><i class="fa fa-angle-right"></i> Stand Fans</a>
                                            <a href="product5.php"><i class="fa fa-angle-right"></i> Wall Fans</a>
                                            <a href="product6.php"><i class="fa fa-angle-right"></i> Box Fans</a>
                                            <a href="product7.php"><i class="fa fa-angle-right"></i> Exhaust Fan</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="guarantee.php"><span class="Lookbook">Bảo hành</span></a>
                            </li>
                            <li>
                                <a href="endow.php"><span class="Footwear">Ưu đãi</span></a>
                            </li>
                            <li>
                                <a href="about-us.php"><span class="Footwear">Giới thiệu</span></a>
                            </li>
                            <li>
                                <a href="contact.php"><span class="Footwear">Liên hệ</span></a>
                            </li>
                        </ul>
                    </div>
                    <!--End desktop menu area -->
                </div>
            </div>
        </div>
    </div>
    <!--End Main Menu area -->
    <!-- breadcrumbs area -->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb-single breadcrumb_top">
                        <ul id="breadcrumbs">
                            <li><a href="index.php"><i class="fa fa-home"></i> Trang chủ</a></li>
                            <li><span>I</span></li>
                            <li>Ceiling Fans</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End breadcrumbs area -->
    <div class="container-fuild">
        <div class="row">
            <div class="col-lg-2">
                <div class="catagory_price_color" style="margin-left: 10px;">
                    <div class="catagory_area">
                        <h2>Phân Loại</h2>
                        <ul class="catagory">
                            <li><a href="#"><i class="fa fa-angle-right"></i>ceiling fans</a> <span>(12)</span></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>tower fans</a><span>(6)</span></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>misting fans</a><span>(6)</span></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>steam fans</a><span>(3)</span></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>stand fans</a><span>(6)</span></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>wall fans</a><span>(3)</span></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>box fans</a><span>(3)</span></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>exhaust fans</a><span>(2)</span></li>
                        </ul>
                    </div>
                    <div class="priceing_area">
                        <h2>Giá</h2>
                        <div class="info_widget">
                            <div class="price_filter">
                                <div id="slider-range"></div>
                                <div class="price_slider_amount">
                                    <input type="text" id="amount" name="price" />
                                    <input type="submit" value="Search" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="catagory_area">
                        <h2>Màu sắc</h2>
                        <ul class="catagory">
                            <li><a href="#"><i class="fa fa-angle-right"></i>Black</a> <span>(1)</span></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Blue</a><span>(2)</span></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Green</a><span>(8)</span></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Yellow</a><span>(4)</span></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Red</a><span>(8)</span></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>White</a><span>(6)</span></li>
                        </ul>
                    </div>
                </div>
                <div class="popular_tag_area" style="margin-left: 10px;">
                    <div class="popular_items">
                        <h2>Thương hiệu nổi tiếng</h2>
                        <ul id="single_popular">
                            <li><a href="#">Panasonic</a></li>
                            <li><a href="#">Toshiba</a></li>
                            <li><a href="#">Mitsubisi</a></li>
                            <li><a href="#">Senko</a></li>
                            <li><a href="#">Yanfan</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row" style="margin-left: 10px;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0;">
                        <div class="popular_tag_area">
                            <div class="popular_items">
                                <h2>latest products</h2>
                                </div>
                            </div>
                            <div class="clothing_carousel_list">
                                <div class="single_clothing_product">
                                    <div class="clothing_item">
                                        <img src="images/img-products/quattran (1).jpg" alt="" />
                                        <div class="product_clothing_details">
                                            <h2><a href="#">Yanmar L379</a></h2>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <p>&emsp;$427.55</p>
                                        </div>
                                    </div>
                                    <div class="clothing_item">
                                        <img src="images/box11.png" alt="" />
                                        <div class="product_clothing_details">
                                            <h2><a href="#">Genesis X506</a></h2>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <p>&emsp;&nbsp;$39.99</p>
                                        </div>
                                    </div>
                                    <div class="clothing_item">
                                        <img src="images/ceiling6.png" alt="" />
                                        <div class="product_clothing_details">
                                            <h2><a href="#">Royal S650-CX</a></h2>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <p>&emsp;$739.52</p>
                                    </div>
                                </div>
                            </div>
                            <div class="single_clothing_product">
                                <div class="clothing_item">
                                    <img src="images/img-products/quattran (1).jpg" alt="" />
                                    <div class="product_clothing_details">
                                        <h2><a href="#">ddddddddđ</a></h2>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <p>$14.00</p>
                                    </div>
                                </div>
                                <div class="clothing_item">
                                    <img src="images/img-products/quattran (5).jpg" alt="" />
                                    <div class="product_clothing_details">
                                        <h2><a href="#">sssssssssssss</a></h2>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <p>$123.00</p>
                                    </div>
                                </div>
                                <div class="clothing_item">
                                    <img src="images/img-products/quatphunsuong3.jpg" alt="" />
                                    <div class="product_clothing_details">
                                        <h2><a href="#">iiiiiiiiiiiii</a></h2>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <p>$123.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10">
                <!-- Start preview Product details area -->
                <div class="blog_single_view_area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="my_tabs">
                                    <div class="tab-content tab_content_style">
                                        <div id="tab1" class="tab-pane fade in active">
                                            <div class="blog_tabs">
                                                <a class="fancybox" href="./images/box1.png" data-fancybox-group="gallery" title="">
                                                    <img src="./images/box1.png" alt="" title="Genesis 20 | Box Fan, 3 Settings, Black (G20BOX-BLK)" />
                                                </a>
                                            </div>
                                        </div>
                                        <div id="tab2" class="tab-pane fade">
                                            <div class="blog_tabs">
                                                <a class="fancybox" href="images/box2.png" data-fancybox-group="gallery" title="">
                                                    <img src="images/box2.png" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                        <div id="tab3" class="tab-pane fade">
                                            <div class="blog_tabs">
                                                <a class="fancybox" href="./images/ex3.png" data-fancybox-group="gallery" title="">
                                                    <img src="./images/box3.png" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog_view_list">
                                        <ul class="tab_style tab_bottom">
                                            <li class="active">
                                                <div class="blog_single_carousel">
                                                    <a data-toggle="tab" href="#tab1"><img src="./images/box1.png" alt="" /></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="blog_single_carousel">
                                                    <a data-toggle="tab" href="#tab2"><img src="images/box2.png" alt="" /></a>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="blog_single_carousel">
                                                    <a data-toggle="tab" href="#tab3"><img src="images/box3.png" alt="" /></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="my_deal">
                                    <a href="cart.php"><button> Mua ngay <br><span class="btn_buy">Deliver to home</span></button></a>
                                    <img src="./images/deals.png" width="100%" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="blog_product_details">
                                    <h2 class="blog_heading"><a href="">Genesis X506</a></h2>
                                    <div class="product_rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product_rating">
                                        <a href="#">26 Comment /</a><span class="in-stock"> In stock</span>
                                    </div>
                                    <div class="pricing_rate">
                                        <div class="d-flex align-items-center">
                                            <p class="rating_dollor rating_margin"><span class="rating_value_two">$39.99</span></p>
                                            <div class="product_blog_button d-flex">
                                                <div class="cart_blog_details blog_icon_border">
                                                    <i class="far fa-heart"></i>
                                                </div>
                                                <div class="cart_blog_details blog_icon_border">
                                                    <a href="#!" target="heart"><i class="fas fa-cart-plus"></i></a>
                                                </div>
                                                <script>
                                                    var heart = document.querySelector('.cart_blog_details  .far')

                                                    heart.addEventListener('click', function() {
                                                        heart.classList.toggle('fa');
                                                        heart.style.color = 'red'
                                                    })
                                                </script>
                                            </div>
                                        </div>
                                        <p class="blog_texts">
                                            <p class="about-this-item"><b>About this item</b></p>
                                            <ul class="aboutthisitem">
                                                <li>Floor fan: Genesis 20” high velocity box fan can conveniently rest on any flat surface, making it appropriate for use all around the home.</li>
                                                <li>Durable & lightweight: our high velocity fan features a durable Copper motor which provides a super strong fan speed and is built for overall long lasting performance.</li>
                                                <li>Three powerful fan speeds: Genesis high velocity fan features 3 energy efficient speed settings & a durable motor that provides strong performance no matter the weather.</li>
                                                <li>Sleek & stylish design: this high velocity fan features a sleek & stylish design that is neutral & won't clash with your decor no matter the environment. Use it anywhere.</li>
                                                <li>Order Now, No Risk. 12 months plus 18 months worry-free warranty extension and 24h warmhearted service. Just feel free to contact us to get your customized service.</li>
                                            </ul>
                                        </p>
                                    </div>

                                </div>
                                <div class="product_options_area">
                                    <img src="./images/box4.png" height="383px" width="100%" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End preview Product details area -->
                <!-- Start Product details tabs area -->
                <div class="product_collateral_area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="my_tabs_description">
                                    <ul class="tab_style">
                                        <li class="active">
                                            <a data-toggle="tab" href="#tab-1">Product Details</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#tab-2">Comment</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content tab_content_style">
                                        <div id="tab-1" class="tab-pane fade in active">
                                            <div class="parameter">
                                                <div class="col-lg-8">
                                                    <h2>Specifications</h2>
                                                    <table class="table table-bordered  table-striped">
                                                        <tbody>
                                                            <tr>
                                                                <td>Product Dimensions</td>
                                                                <td>4.5 x 20 x 20 inches</td>

                                                            </tr>
                                                            <tr>
                                                                <td>Item Weight</td>
                                                                <td>8.68 pounds</td>

                                                            </tr>
                                                            <tr>
                                                                <td>Manufacturer</td>
                                                                <td>GENESIS</td>

                                                            </tr>

                                                            <tr>
                                                                <td>ASIN</td>
                                                                <td>B08549KWFR</td>

                                                            </tr>

                                                            <tr>
                                                                <td>Item model number</td>
                                                                <td>G20BOX-BLK</td>

                                                            </tr>

                                                            <tr>
                                                                <td>Item Diameter</td>
                                                                <td>20 Inches</td>

                                                            </tr>

                                                            <tr>
                                                                <td>Finish Types</td>
                                                                <td>Glossy</td>

                                                            </tr>

                                                            <tr>
                                                                <td>Material Care Instructions</td>
                                                                <td>Wipe</td>

                                                            </tr>

                                                            <tr>
                                                                <td>Is Assembly Required ?</td>
                                                                <td>No</td>

                                                            </tr>

                                                            <tr>
                                                                <td>Number of Pieces</td>
                                                                <td>1</td>

                                                            </tr>

                                                            <tr>
                                                                <td>Batteries Required</td>
                                                                <td>No</td>

                                                            </tr>

                                                            <tr>
                                                                <td>Included Components</td>
                                                                <td>Fan</td>

                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-lg-4">
                                                    <h2>News</h2>
                                                    <div class="parameter_item d-flex align-items-center">
                                                        <img src="images/product (2).jpg" width="100%" alt="">
                                                        <span>Cách bảo quản và vệ sinh máy quạt đúng cách</span>
                                                    </div>
                                                    <div class="parameter_item d-flex align-items-center">
                                                        <img src="images/homepro2.png" width="100%" alt="">
                                                        <span>Cách bảo quản và vệ sinh máy quạt đúng cách</span>
                                                    </div>
                                                    <div class="parameter_item d-flex align-items-center">
                                                        <img src="images/homepro.png" width="100%" alt="">
                                                        <span>Cách bảo quản và vệ sinh máy quạt đúng cách</span>
                                                    </div>
                                                    <div class="parameter_item d-flex align-items-center">
                                                        <img src="images/homepro1.png" width="100%" alt="">
                                                        <span>Cách bảo quản và vệ sinh máy quạt đúng cách</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="tab-2" class="tab-pane fade">
                                            <div class="product_description">
                                                <ul id="Motorola">
                                                    <li>
                                                        <img src="images/ava3.png" width="7%" alt="">
                                                        <img src="images/ava4.png" width="7%" alt="">
                                                        <img src="images/ava6.png" width="7%" alt="">
                                                        <span><b>Taylor Swift</b> and 7,268 orther peoples commented</span>
                                                    </li>
                                                    <li>
                                                        <span>Quality :</span>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </li>
                                                    <li>
                                                        <span>Price &emsp;:</span>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </li>

                                                    <li>
                                                        <span>Service :</span>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </li>

                                                </ul>
                                                <div class="fieldsets">
                                                    <h3><b>How would you rate ?</b></h3>
                                                    <div class="start_tab_pricing_area">
                                                        <fieldset>
                                                            <table class="star_pricing_tb">
                                                                <tr>
                                                                    <th> <i class="fa fa-star"></i> </th>
                                                                    <th>1 star</th>
                                                                    <th>2 stars</th>
                                                                    <th>3 stars</th>
                                                                    <th>4 stars</th>
                                                                    <th>5 stars</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>Quality</td>
                                                                    <td><input type="radio" name="ratings[1]" value="1" class="radio"></td>
                                                                    <td><input type="radio" name="ratings[1]" value="2" class="radio"></td>
                                                                    <td><input type="radio" name="ratings[1]" value="3" class="radio"></td>
                                                                    <td><input type="radio" name="ratings[1]" value="4" class="radio"></td>
                                                                    <td><input type="radio" name="ratings[1]" value="5" class="radio"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Price</td>
                                                                    <td><input type="radio" name="ratings[2]" value="6" class="radio"></td>
                                                                    <td><input type="radio" name="ratings[2]" value="7" class="radio"></td>
                                                                    <td><input type="radio" name="ratings[2]" value="8" class="radio"></td>
                                                                    <td><input type="radio" name="ratings[2]" value="9" class="radio"></td>
                                                                    <td><input type="radio" name="ratings[2]" value="10" class="radio"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Service</td>
                                                                    <td><input type="radio" name="ratings[3]" value="11" class="radio"></td>
                                                                    <td><input type="radio" name="ratings[3]" value="12" class="radio"></td>
                                                                    <td><input type="radio" name="ratings[3]" value="13" class="radio"></td>
                                                                    <td><input type="radio" name="ratings[3]" value="14" class="radio"></td>
                                                                    <td><input type="radio" name="ratings[3]" value="15" class="radio"></td>
                                                                </tr>
                                                            </table>
                                                        </fieldset>
                                                    </div>

                                                    <div class="rating_contact">
                                                        <ul id="review_contact">
                                                            <li>Name <span>*</span></li>
                                                            <li><input type="text" name="nickname" class="input-text required-entry" value=""></li>
                                                            <li>Comment <span>*</span></li>
                                                            <li><textarea name="detail" cols="5" rows="3" class="required-entry"></textarea></li>
                                                        </ul>
                                                    </div>
                                                    <div class="review_button">
                                                        <button type="submit" title="Submit Review" class="button">Complete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Product details tabs area -->
                <!-- Start Related products area -->
                <div class="related_products_area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="feature_text feature_upsell">
                                    <h4>Similar Products</h4>
                                </div>
                                <div class="row">
                                    <div class="upsell_product_list">
                                        <div class="col-lg-3">
                                            <div class="single_upsell">
                                                <a href="#"><img src="images/ceiling1.png" alt="" /></a>
                                                <div class="upsell_details">
                                                    <h2><a href="">Toshiba LX570</a></h2>
                                                    <div class="text-center">
                                                        <div class="product_rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product_rating">
                                                            <a href="#">1 Comment </a>
                                                        </div>
                                                    </div>
                                                    <p>$ 120.00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="single_upsell">
                                                <a href="#"><img src="images/ceiling2.png" alt="" /></a>
                                                <div class="upsell_details">
                                                    <h2><a href="">LG S5722</a></h2>
                                                    <div class="text-center">
                                                        <div class="product_rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product_rating">
                                                            <a href="#">1 Commentt </a>
                                                        </div>
                                                    </div>
                                                    <p>$ 139.00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="single_upsell">
                                                <a href="#"><img src="images/ceiling3.png" alt="" /></a>
                                                <div class="upsell_details">
                                                    <h2><a href="">Yanfan SH150</a></h2>
                                                    <div class="text-center">
                                                        <div class="product_rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product_rating">
                                                            <a href="#">1 Comment </a>
                                                        </div>
                                                    </div>
                                                    <p>$ 87.99</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="single_upsell">
                                                <a href="#"><img src="images/ceiling4.png" alt="" /></a>
                                                <div class="upsell_details">
                                                    <h2><a href="">Panasonic FX129</a></h2>
                                                    <div class="text-center">
                                                        <div class="product_rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product_rating">
                                                            <a href="#">1 Comment </a>
                                                        </div>
                                                    </div>
                                                    <p>$ 95.99</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="single_upsell">
                                                <a href="#"><img src="images/ceiling5.png" alt="" /></a>
                                                <div class="upsell_details">
                                                    <h2><a href="">Senko Z900</a></h2>
                                                    <div class="text-center">
                                                        <div class="product_rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product_rating">
                                                            <a href="#">1 Comment </a>
                                                        </div>
                                                    </div>
                                                    <p>$ 107.99</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Related products area -->
            </div>
        </div>
    </div>
    <!--Start Footer area -->
    <div class="footer_area home1_margin_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="feature_text feature_newsletter">
                        <h4>Thông tin</h4>
                        <p>Đăng ký để nhận thông tin và ưu đãi mới nhất</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sign_up">
                        <form action="#">
                            <input class="sign_text" type="text" placeholder="Enter your gmail ..." />
                            <button type="submit" class="sign">
                                <svg>
                                    <rect x="0" y="0" fill="none" width="100%" height="100%"/>
                                </svg>
									<span>Đăng ký</span>
								</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="footer_menu_area">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="help_support">
                            <h2>Văn phòng điều hành</h2>
                            <p>Fanfan Company: <span>590 CMT8, Ward 11, District 3, Ho Chi Minh City</span></p>
                            <p>Hotline: <span>0909.090.090<br>&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0901.010.010</span></p>
                            <p>Email: <span>fanfan@gmail.com</span></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="help_support help_border">
                            <h2>Chi nhánh</h2>
                            <ul class="footer_menu">
                                <li><a href="https://goo.gl/maps/tkK3Uus9TFCd5jCH6">590 Cach Mang Thang 8, Ward 11, District 3, Ho Chi Minh City</a></li>
                                <li><a href="https://goo.gl/maps/8pGc9QHxCoJJxz7C8">Alley 2 Ham Nghi, Ben Nghe Ward, District 1, Ho Chi Minh City</a></li>
                                <li><a href="https://goo.gl/maps/VfWGFaUo5x4Cz65g6">1 Le Dai Hanh, Ward 11, <br>District 11, Ho Chi Minh City</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="help_support help_border">
                            <h2>Chăm sóc khách hàng</h2>
                            <ul class="footer_menu">
                                <li><a href="infomation.php">Chính sách bảo mật thông tin</a></li>
                                <li><a href="commit.php">Cam kết hài lòng</a></li>
                                <li><a href="complaint.php">Yêu cầu khiếu nại</a></li>
                                <li><a href="payment.php">Hướng dẫn thanh toán</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="help_support help_border">
                            <h2>Liên kết mạng xã hội</h2>
                            <ul class="footer_menu">
                                <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                                <a href="https://twitter.com/" class="fab fa-twitter"></a>
                                <a href="http://gmail.com/" class="fab fa-google"></a>
                                <a href="http://instagram.com/" class="fab fa-linkedin"></a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copy__right">
            <div class="row">
                <div class="col-sm-4 text-right">
                </div>
                <div class="col-sm-4 text-center" style="margin-top: 10px;">
                    <P> © Đã đăng ký Bản quyền</P>
                </div>
                <div class="col-sm-4  text-right" style="padding-right: 0; margin-top: 10px;">
                    <img src="./images/visa1.png" alt="" width="60%">
                </div>
            </div>
        </div>
    </div>
    <!--End Footer area -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- jquery JS -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Mobile menu JS -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- jquery.easing js -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    <!-- knob circle js -->
    <script src="js/jquery.knob.js"></script>
    <!-- fancybox JS -->
    <script src="fancy-box/jquery.fancybox.pack.js"></script>
    <!-- price slider JS  -->
    <script src="js/price-slider.js"></script>
    <!-- nivo slider JS -->
    <script src="js/jquery.nivo.slider.pack.js"></script>
    <!-- wow JS -->
    <script src="js/wow.js"></script>
    <!-- nivo-plugin JS -->
    <script src="js/nivo-plugin.js"></script>
    <!-- scrollUp JS -->
    <script src="js/jquery.scrollUp.js"></script>
    <!-- carousel JS -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- plugins JS -->
    <script src="js/plugins.js"></script>
    <script src="js/display.js"></script>
    <!-- main JS  -->
    <script src="js/main.js"></script>
</body>

</html>