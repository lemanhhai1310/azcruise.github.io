<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Du-Lich</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&amp;display=swap">
    <link
            href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200;1,300;1,400;1,600;1,700&display=swap"
            rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
          integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
          crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"/>
    <link rel="stylesheet" type="text/css" href="./assets/css/carousel/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/carousel/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/main.css">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
<div class="wrapper">
    <div class="header-mb">
        <div class="container">
            <div class="nav d-flex align-items-center">
                <div class="nav__logo">
                    <h1><span class="display-none">Welcome to AZ CRUISE Ha LONG</span><a href="./index-mobile.html"><img
                            src="./assets/images/header/logo.png" alt="logo"></a></h1>
                </div>
                <button class="nav__btn d-flex align-items-center justify-content-center ml-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="11" viewbox="0 0 20 11" fill="none">
                        <rect width="20" height="3" rx="1.5" fill="#10284F"></rect>
                        <rect y="8" width="20" height="3" rx="1.5" fill="#10284F"></rect>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div class="menu-mbv2">
        <ul>
            <li class="d-flex align-items-center justify-content-between"><a href="">TRANG CHỦ</a></li>
            <li class="d-flex align-items-center justify-content-between"><a href="">VỀ CHÚNG TÔI</a></li>
            <li class="d-flex align-items-center justify-content-between --havesub" data-idsub="#sub-3"><a href="">TÀU
                THĂM
                VỊNH</a><img src="./assets/images/arrowr.svg" alt=""></li>
            <li class="d-flex align-items-center justify-content-between"><a href="">DU THUYỀN</a></li>
            <li class="d-flex align-items-center justify-content-between"><a href="">CANO</a></li>
            <li class="d-flex align-items-center justify-content-between"><a href="">THUỶ PHI CƠ</a></li>
            <li class="d-flex align-items-center justify-content-between"><a href="">TRỰC THĂNG</a></li>
        </ul>
        <div class="submenu-item" id="sub-3">
            <div class="back"><img src="./assets/images/arrowll.svg" alt=""></div>
            <ul>
                <li><a href="">sub3</a></li>
                <li><a href="">sub1</a></li>
                <li><a href="">sub1</a></li>
                <li><a href="">sub1</a></li>
                <li><a href="">sub1</a></li>
                <li><a href="">sub1</a></li>
            </ul>
        </div>
    </div>
    <div class="home-page-section">
        <div class="banner-mobile banner-boat banner-cano">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="banner-cano-inner d-flex flex-column">
                            <h1 class="cano-title">Bạn sẽ đi đâu ?</h1>
                            <form class="cano-service d-flex align-items-center justify-content-between">
                                <div class="cano-service-detail grid-service d-flex align-items-center"
                                     id="selectServices">
                                    <div class="detail-left d-flex align-items-center">
                                        <div class="left-img f-margin mr-3 ml-2"><img
                                                src="./assets/images/banner/flag.png" alt=""></div>
                                        <div class="left-content select-icon">
                                            <p class="content-head">Loại dịch vụ</p>
                                            <p class="content-bottom input__control control-select"
                                               id="service--select">Tàu ghép</p>
                                            <input type="hidden" id="servicesID" value="2" name="service_name">
                                            <ul class="options-select services-list" id="services-select">
                                                <li class="service-head" data-service="0"
                                                    data-search-label="Lựa chọn dịch vụ">Lựa chọn dịch
                                                    vụ
                                                </li>
                                                <li class="service-type" data-service="1" data-search-label="Tàu riêng">
                                                    Tàu riêng
                                                </li>
                                                <li class="service-type" data-service="2" data-search-label="Tàu ghép">
                                                    Tàu ghép
                                                </li>
                                            </ul>
                                            <div class="icon-arrow-down pt-ev">
                                                <svg version="1.1" id="Capa_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                            y="0px" viewBox="0 0 490.688 490.688" style="enable-background:new 0 0 490.688 490.688;"
                            xml:space="preserve">
                            <path
                                    d="M472.328,120.529L245.213,347.665L18.098,120.529c-4.237-4.093-10.99-3.975-15.083,0.262c-3.992,4.134-3.992,10.687,0,14.82l234.667,234.667c4.165,4.164,10.917,4.164,15.083,0l234.667-234.667c4.237-4.093,4.354-10.845,0.262-15.083c-4.093-4.237-10.845-4.354-15.083-0.262c-0.089,0.086-0.176,0.173-0.262,0.262L472.328,120.529z"/>
                            <path
                                    d="M245.213,373.415c-2.831,0.005-5.548-1.115-7.552-3.115L2.994,135.633c-4.093-4.237-3.975-10.99,0.262-15.083c4.134-3.992,10.687-3.992,14.82,0l227.136,227.115l227.115-227.136c4.093-4.237,10.845-4.354,15.083-0.262c4.237,4.093,4.354,10.845,0.262,15.083c-0.086,0.089-0.173,0.176-0.262,0.262L252.744,370.279C250.748,372.281,248.039,373.408,245.213,373.415z"/>
                          </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cano-service-detail grid-service d-flex align-items-center"
                                     id="timeSelects">
                                    <div class="detail-left d-flex align-items-center">
                                        <div class="left-img mr-3 ml-2"><img src="./assets/images/banner/flag.png"
                                                                             alt=""></div>
                                        <div class="left-content select-icon">
                                            <p class="content-head">Tuyến</p>
                                            <p class="content-bottom input__control control-select" id="time--select">
                                                Tuyến 4 giờ</p>
                                            <input type="hidden" id="timeID" value="4" name="timeName">
                                            <ul class="options-select services-list" id="time-select">
                                                <li class="service-type" data-service="4" data-time-label="Tuyến 4 giờ">
                                                    Tuyến 4 giờ
                                                </li>
                                                <li class="service-type" data-service="6" data-time-label="Tuyến 6 giờ">
                                                    Tuyến 6 giờ
                                                </li>
                                                <li class="service-type" data-service="8" data-time-label="Tuyến 8 giờ">
                                                    Tuyến 8 giờ
                                                </li>
                                            </ul>
                                            <div class="icon-arrow-down pt-ev">
                                                <svg version="1.1" id="Capa_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                            y="0px" viewBox="0 0 490.688 490.688" style="enable-background:new 0 0 490.688 490.688;"
                            xml:space="preserve">
                            <path
                                    d="M472.328,120.529L245.213,347.665L18.098,120.529c-4.237-4.093-10.99-3.975-15.083,0.262c-3.992,4.134-3.992,10.687,0,14.82l234.667,234.667c4.165,4.164,10.917,4.164,15.083,0l234.667-234.667c4.237-4.093,4.354-10.845,0.262-15.083c-4.093-4.237-10.845-4.354-15.083-0.262c-0.089,0.086-0.176,0.173-0.262,0.262L472.328,120.529z"/>
                            <path
                                    d="M245.213,373.415c-2.831,0.005-5.548-1.115-7.552-3.115L2.994,135.633c-4.093-4.237-3.975-10.99,0.262-15.083c4.134-3.992,10.687-3.992,14.82,0l227.136,227.115l227.115-227.136c4.093-4.237,10.845-4.354,15.083-0.262c4.237,4.093,4.354,10.845,0.262,15.083c-0.086,0.089-0.173,0.176-0.262,0.262L252.744,370.279C250.748,372.281,248.039,373.408,245.213,373.415z"/>
                          </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cano-service-detail grid-service last-row d-flex align-items-center"
                                     id="selectMenu">
                                    <div class="detail-left d-flex align-items-center">
                                        <div class="left-img mr-2"><img src="./assets/images/banner/client.png" alt="">
                                        </div>
                                        <div class="left-content select-icon" id="custom-select">
                                            <p class="content-head">Số người</p>
                                            <p class="content-bottom input__control control-select" id="display-select">
                                                Chưa được chọn</p>
                                            <div class="icon-arrow-down pt-ev">
                                                <svg version="1.1" id="Capa_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                            y="0px" viewBox="0 0 490.688 490.688" style="enable-background:new 0 0 490.688 490.688;"
                            xml:space="preserve">
                            <path
                                    d="M472.328,120.529L245.213,347.665L18.098,120.529c-4.237-4.093-10.99-3.975-15.083,0.262c-3.992,4.134-3.992,10.687,0,14.82l234.667,234.667c4.165,4.164,10.917,4.164,15.083,0l234.667-234.667c4.237-4.093,4.354-10.845,0.262-15.083c-4.093-4.237-10.845-4.354-15.083-0.262c-0.089,0.086-0.176,0.173-0.262,0.262L472.328,120.529z"/>
                            <path
                                    d="M245.213,373.415c-2.831,0.005-5.548-1.115-7.552-3.115L2.994,135.633c-4.093-4.237-3.975-10.99,0.262-15.083c4.134-3.992,10.687-3.992,14.82,0l227.136,227.115l227.115-227.136c4.093-4.237,10.845-4.354,15.083-0.262c4.237,4.093,4.354,10.845,0.262,15.083c-0.086,0.089-0.173,0.176-0.262,0.262L252.744,370.279C250.748,372.281,248.039,373.408,245.213,373.415z"/>
                          </svg>
                                            </div>
                                            <ul class="options-select" id="options-select">
                                                <li class="numb-people d-flex align-items-center justify-content-between">
                                                    <div class="content-left"><span>Người lớn</span>
                                                        <p>Trên 13 tuổi</p>
                                                    </div>
                                                    <div class="content-right">
                                                        <input type="number" autofocus="autofocus"
                                                               class="input-component value-btn" value="0"
                                                               min="0" name="adults">
                                                    </div>
                                                </li>
                                                <li class="numb-people d-flex align-items-center justify-content-between">
                                                    <div class="content-left"><span>Trẻ em</span>
                                                        <p>Dưới 10 tuổi</p>
                                                    </div>
                                                    <div class="content-right">
                                                        <input type="number" class="input-component value-btn" value="0"
                                                               min="0" name="child">
                                                    </div>
                                                </li>
                                                <li class="numb-people d-flex align-items-center justify-content-between">
                                                    <div class="content-left"><span>Người cao tuổi</span>
                                                        <p>Trên 60 tuổi</p>
                                                    </div>
                                                    <div class="content-right">
                                                        <input type="number" class="input-component value-btn" value="0"
                                                               min="0" name="elderly">
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="cano-service-detail grid-service d-flex align-items-center justify-content-between"
                                     id="flatpickr-custom">
                                    <div class="detail-left d-flex align-items-center">
                                        <div class="left-img mr-2"><img id="toggle_cal"
                                                                        src="./assets/images/banner/cal.png" alt="">
                                        </div>
                                        <div class="left-content content-date select-icon">
                                            <p class="content-head date-mr" id="dateLabel">Ngày đi</p>
                                            <p class="content-bottom control-select" id="calendar-text"></p>
                                            <input type="hidden" id="calendar-ja" autocomplete="off" name="date">
                                            <div class="icon-arrow-down" id="toggle">
                                                <svg version="1.1" id="Capa_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                            y="0px" viewBox="0 0 490.688 490.688" style="enable-background:new 0 0 490.688 490.688;"
                            xml:space="preserve">
                            <path
                                    d="M472.328,120.529L245.213,347.665L18.098,120.529c-4.237-4.093-10.99-3.975-15.083,0.262c-3.992,4.134-3.992,10.687,0,14.82l234.667,234.667c4.165,4.164,10.917,4.164,15.083,0l234.667-234.667c4.237-4.093,4.354-10.845,0.262-15.083c-4.093-4.237-10.845-4.354-15.083-0.262c-0.089,0.086-0.176,0.173-0.262,0.262L472.328,120.529z"/>
                            <path
                                    d="M245.213,373.415c-2.831,0.005-5.548-1.115-7.552-3.115L2.994,135.633c-4.093-4.237-3.975-10.99,0.262-15.083c4.134-3.992,10.687-3.992,14.82,0l227.136,227.115l227.115-227.136c4.093-4.237,10.845-4.354,15.083-0.262c4.237,4.093,4.354,10.845,0.262,15.083c-0.086,0.089-0.173,0.176-0.262,0.262L252.744,370.279C250.748,372.281,248.039,373.408,245.213,373.415z"/>
                          </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn-orange-az btn btn-find-link" type="submit">Tìm tàu</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="fast-news d-flex align-items-center">
                    <div class="fast-news__title"><span>Tin nhanh</span></div>
                    <div class="fast-news__list owl-carousel owl-theme"><a href=""> Hải quan Vũng Áng thu ngân sách tăng
                        41,5%
                        so với cùng kỳ Nhà máy sản xuất, chế biến lâm sản trên 1.287 tỷ đồng tại KKT Vũng Áng đi vào
                        hoạt động
                        Nhà máy sản xuất, chế biến lâm sản trên 1.287 tỷ đồng tại KKT Vũng Áng đi vào hoạt động</a><a
                            href="">
                        Nhà máy sản xuất, chế biến lâm sản trên 1.287 tỷ đồng tại KKT Vũng Áng đi vào hoạt động</a><a
                            href="">
                        Đề xuất quy hoạch các tuyến cao tốc Bãi Vọt – Vũng Áng</a><a href=""> Hải quan Cửa khẩu Cầu Treo
                        hoàn
                        thành 80% dự toán năm 2021</a></div>
                </div>
            </div>
        </div>
        <div class="box-discover-more-section">
            <div class="discover-more">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="discover-more__content">
                                <h3 class="content__title">Khám phá nhiều hơn nữa cùng AZCRUISE</h3>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <div class="discover-more__video">
                                <video autoplay controls>
                                    <source src="./assets/video/video.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-sale-list-section">
            <div class="box-sale-list">
                <div class="container">
                    <h3 class="box-sale-list__title">Săn deal giá rẻ</h3>
<!--                    <div class="box-sale-list__wrap owl-carousel owl-theme">-->
<!--                        <div class="box-sale-list__box"><a class="box-sale-list__box-img" href="#"><span>HOT DEAL</span><img-->
<!--                                src="./assets/images/box-sale-list/sale-1.png" alt="img"></a><a href="#">-->
<!--                            <h4 class="box-sale-list__box-title">Combo 1 ngày 2 đêm cho cả gia đình</h4>-->
<!--                        </a><span class="box-sale-list__box-price">đ 2.900.000</span></div>-->
<!--                        <div class="box-sale-list__box"><a class="box-sale-list__box-img" href="#"><span>HOT DEAL</span><img-->
<!--                                src="./assets/images/box-sale-list/sale-2.png" alt="img"></a><a href="#">-->
<!--                            <h4 class="box-sale-list__box-title">Thăm vịnh bằng trực thăng</h4>-->
<!--                        </a><span class="box-sale-list__box-price">đ 2.900.000</span></div>-->
<!--                        <div class="box-sale-list__box"><a class="box-sale-list__box-img" href="#"><span>HOT DEAL</span><img-->
<!--                                src="./assets/images/box-sale-list/sale-3.png" alt="img"></a><a href="#">-->
<!--                            <h4 class="box-sale-list__box-title">Tắm Onsen -50%</h4>-->
<!--                        </a><span class="box-sale-list__box-price">đ 2.900.000</span></div>-->
<!--                        <div class="box-sale-list__box"><a class="box-sale-list__box-img" href="#"><span>HOT DEAL</span><img-->
<!--                                src="./assets/images/box-sale-list/sale-4.png" alt="img"></a><a href="#">-->
<!--                            <h4 class="box-sale-list__box-title">Vé du thuyền -40%</h4>-->
<!--                        </a><span class="box-sale-list__box-price">đ 2.900.000</span></div>-->
<!--                    </div>-->
                    <div class="homeMobile__boxScroll">
                        <div class="row flex-nowrap row-14">
                            <?php for ($i=1;$i<=4;$i++): ?>
                            <div class="col homeMobile__boxScroll__col">
                                <div class="homeMobile__sandeal__card card">
                                    <div class="position-relative homeMobile__sandeal__card__boxImg">
                                        <img src="assets/images/noimage.jpg" alt="">
                                    </div>
                                    <div class="card-body homeMobile__sandeal__card__body">
                                        <div class="homeMobile__sandeal__card__name"><a href="">Tour thăm vịnh 6h trong ngày</a></div>
                                        <div class="homeMobile__sandeal__card__price">đ 599,000</div>
                                        <div class="item__20">
                                            <div class="row home__gridMath row-10">
                                                <?php
                                                $data = array(
                                                    array(
                                                        'img' => 'assets/images/hotel.png',
                                                        'txt' => 'Khách sạn',
                                                        'active' => true,
                                                    ),
                                                    array(
                                                        'img' => 'assets/images/001-insurance.png',
                                                        'txt' => 'Xe đón/tiễn',
                                                        'active' => false,
                                                    ),
                                                    array(
                                                        'img' => 'assets/images/002-cruise.png',
                                                        'txt' => 'Vé tàu',
                                                        'active' => false,
                                                    ),
                                                );
                                                foreach ($data as $k=>$v): ?>
                                                    <div class="col">
                                                        <div class="homeMobile__sandeal__card__box1 d-flex flex-column <?= ($v['active'])?'active':'' ?>">
                                                            <div class="homeMobile__sandeal__card__box1__auto">
                                                                <img class="" src="<?= $v['img'] ?>" alt="">
                                                            </div>
                                                            <div class="homeMobile__sandeal__card__txtsmall"><?= $v['txt'] ?></div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Tàu thăm vịnh-->
        <div class="homeMobile__tauthamvinh">
            <div class="container">
                <h3 class="box-sale-list__title homeMobile__title">Tàu thăm vịnh</h3>
                <div class="card homeMobile__tauthamvinh__boxTab homeMobile__boxSpace">
                    <div class="row row-14">
                        <div class="col-auto">
                            <a href="" class="homeMobile__tauthamvinh__menu active">Tàu Tuyến 1</a>
                        </div>
                        <div class="col-auto">
                            <a href="" class="homeMobile__tauthamvinh__menu">Tàu Tuyến 2</a>
                        </div>
                    </div>
                </div>
                <div>
                    <?php for ($i=1;$i<=2;$i++): ?>
                    <div class="card homeMobile__tauthamvinh__card card-body homeMobile__boxSpace">
                        <div class="homeMobile__tauthamvinh__card__boxImg">
                            <img src="assets/images/noimage.jpg" alt="">
                            <a class="homeMobile__tauthamvinh__card__boxImg__view" href="">Xem ảnh tàu</a>
                        </div>
                        <div class="item__20 homeMobile__tauthamvinh__card__name"><a href="">Tàu 18 chỗ thường</a></div>
                        <div class="item__8">
                            <div class="row row-8">
                                <div class="col-auto">
                                    <span class="homeMobile__tauthamvinh__card__tag">Có đồ ăn</span>
                                </div>
                                <div class="col-auto">
                                    <span class="homeMobile__tauthamvinh__card__tag">Xe đưa đón</span>
                                </div>
                            </div>
                        </div>
                        <ul class="list-unstyled homeMobile__tauthamvinh__card__list item__20">
                            <li>Cảng khởi hành: Tuần Châu</li>
                            <li>Thời gian khởi hành: Linh động</li>
                            <li>Dịch vụ cơ bản: Karaoke</li>
                            <li>Đã bao gồm vé thắng cảnh + vé tàu</li>
                            <li>Có thêm các dịch vụ đi kèm</li>
                        </ul>
                        <div class="homeMobile__tauthamvinh__card__divider"></div>
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="homeMobile__tauthamvinh__card__price homeMobile__tauthamvinh__card__price--new">đ 399,000</div>
                                <div class="homeMobile__tauthamvinh__card__price homeMobile__tauthamvinh__card__price--old">đ 599,000</div>
                            </div>
                            <div class="col-auto">
                                <div class="homeMobile__tauthamvinh__card__saleoff">Sale off -30%</div>
                            </div>
                        </div>
                        <a href="" class="btn btn-primary w-100 item__15 homeMobile__tauthamvinh__card__btnBuy">Đặt tàu</a>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
        <!--/Tàu thăm vịnh-->

        <!--Du thuyền-->
        <div class="homeMobile__duthuyen">
            <div class="container">
                <h3 class="box-sale-list__title homeMobile__title">Du thuyền</h3>
                <div>
                    <?php for ($i=1;$i<=2;$i++): ?>
                        <div class="card homeMobile__tauthamvinh__card card-body homeMobile__boxSpace">
                            <div class="homeMobile__tauthamvinh__card__boxImg">
                                <img src="assets/images/noimage.jpg" alt="">
                                <a class="homeMobile__tauthamvinh__card__boxImg__view" href="">Xem ảnh phòng</a>
                            </div>
                            <div class="item__20 homeMobile__tauthamvinh__card__name"><a href="">Sliver Pearl</a></div>
                            <div class="item__15">
                                <!--item-->
                                <div class="item__8">
                                    <div class="row">
                                        <div class="col">
                                            <div class="row row-8 align-items-center">
                                                <div class="col-auto">
                                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M22.0824 2.50244H2.91733C2.68539 2.50244 2.50229 2.68555 2.50229 2.91748V22.0825C2.50229 22.3145 2.68539 22.4976 2.91733 22.4976H22.0824C22.3143 22.4976 22.4974 22.3145 22.4974 22.0825V2.91748C22.4974 2.68555 22.3143 2.50244 22.0824 2.50244ZM21.6673 21.6675H3.33237V3.33252H21.6673V21.6675Z" fill="#10284F"/>
                                                        <path d="M2.91733 0C2.68539 0 2.50229 0.183105 2.50229 0.415039V1.66016C2.50229 1.89209 2.68539 2.0752 2.91733 2.0752C3.14926 2.0752 3.33237 1.89209 3.33237 1.66016V0.415039C3.33237 0.183105 3.14926 0 2.91733 0Z" fill="black"/>
                                                        <path d="M1.67236 2.50244H0.415039C0.183105 2.50244 0 2.68555 0 2.91748C0 3.14941 0.183105 3.33252 0.415039 3.33252H1.66016C1.89209 3.33252 2.0752 3.14941 2.0752 2.91748C2.0752 2.68555 1.89209 2.50244 1.67236 2.50244Z" fill="black"/>
                                                        <path d="M1.67236 21.6675H0.415039C0.183105 21.6675 0 21.8506 0 22.0825C0 22.3145 0.183105 22.4976 0.415039 22.4976H1.66016C1.89209 22.4976 2.0752 22.3145 2.0752 22.0825C2.0752 21.8506 1.89209 21.6675 1.67236 21.6675Z" fill="black"/>
                                                        <path d="M2.91733 22.9126C2.68539 22.9126 2.50229 23.0957 2.50229 23.3276V24.5728C2.50229 24.8047 2.68539 24.9878 2.91733 24.9878C3.14926 24.9878 3.33237 24.8047 3.33237 24.5728V23.3276C3.33237 23.1079 3.14926 22.9126 2.91733 22.9126Z" fill="black"/>
                                                        <path d="M22.0827 22.9126C21.8507 22.9126 21.6676 23.0957 21.6676 23.3276V24.5728C21.6676 24.8047 21.8507 24.9878 22.0827 24.9878C22.3146 24.9878 22.4977 24.8047 22.4977 24.5728V23.3276C22.4977 23.1079 22.3146 22.9126 22.0827 22.9126Z" fill="black"/>
                                                        <path d="M24.5851 21.6675H23.34C23.1081 21.6675 22.925 21.8506 22.925 22.0825C22.925 22.3145 23.1081 22.4976 23.34 22.4976H24.5851C24.817 22.4976 25.0002 22.3145 25.0002 22.0825C25.0002 21.8506 24.817 21.6675 24.5851 21.6675Z" fill="black"/>
                                                        <path d="M24.5851 2.50244H23.34C23.1081 2.50244 22.925 2.68555 22.925 2.91748C22.925 3.14941 23.1081 3.33252 23.34 3.33252H24.5851C24.817 3.33252 25.0002 3.14941 25.0002 2.91748C25.0002 2.68555 24.817 2.50244 24.5851 2.50244Z" fill="black"/>
                                                        <path d="M22.0827 0C21.8507 0 21.6676 0.183105 21.6676 0.415039V1.66016C21.6676 1.89209 21.8507 2.0752 22.0827 2.0752C22.3146 2.0752 22.4977 1.89209 22.4977 1.66016V0.415039C22.4977 0.183105 22.3146 0 22.0827 0Z" fill="black"/>
                                                    </svg>
                                                </div>
                                                <div class="col">
                                                    <div class="homeMobile__duthuyen__txt">28 m2</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row row-8 align-items-center">
                                                <div class="col-auto">
                                                    <svg width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_2507_266)">
                                                            <path d="M12.0002 9.78031C14.272 9.78031 16.111 7.59092 16.111 4.88637C16.111 2.18182 15.5083 -0.00756836 12.0002 -0.00756836C8.49219 -0.00756836 7.89721 2.18182 7.89721 4.88637C7.88948 7.59092 9.7285 9.78031 12.0002 9.78031Z" fill="#10284F"/>
                                                            <path d="M19.7501 17.0531C19.6728 12.3486 19.0469 11.0077 14.2485 10.1592C14.2485 10.1592 13.5763 11.0001 11.9999 11.0001C10.4236 11.0001 9.75139 10.1592 9.75139 10.1592C5.00703 11.0001 4.34251 12.3183 4.25751 16.9016C4.24979 17.2728 4.24979 17.2955 4.24979 17.2501C4.24979 17.3334 4.24979 17.4849 4.24979 17.7425C4.24979 17.7425 5.39338 20.0001 12.0077 20.0001C18.622 20.0001 19.7656 17.7425 19.7656 17.7425C19.7656 17.5758 19.7656 17.4546 19.7656 17.3789C19.7578 17.4016 19.7501 17.3486 19.7501 17.0531Z" fill="#10284F"/>
                                                            <path d="M17.7023 8.90912C19.5413 8.90912 21.0404 7.12882 21.0404 4.93942C21.0404 2.75003 20.5536 0.969727 17.7023 0.969727C17.2232 0.969727 16.8137 1.02276 16.4583 1.11367C17.115 2.30306 17.2078 3.74245 17.2078 4.89397C17.2078 6.197 16.8446 7.43942 16.1801 8.4773C16.636 8.75003 17.1537 8.90912 17.7023 8.90912Z" fill="#10284F"/>
                                                            <path d="M23.9925 14.8106C23.9307 10.9925 23.4207 9.90155 19.5263 9.21216C19.5263 9.21216 18.9777 9.89398 17.7028 9.89398C17.6487 9.89398 17.6023 9.89398 17.5482 9.8864C18.3596 10.2425 19.1013 10.7425 19.6422 11.4773C20.5849 12.7425 20.8013 14.4394 20.8399 16.9319C23.4594 16.4243 24.0002 15.3637 24.0002 15.3637C24.0002 15.2273 24.0002 15.1288 24.0002 15.0682C24.0002 15.0985 23.9925 15.0606 23.9925 14.8106Z" fill="#10284F"/>
                                                            <path d="M6.29712 8.90912C6.84574 8.90912 7.36345 8.75003 7.81934 8.46973C7.15482 7.43942 6.79938 6.197 6.79938 4.89397C6.79938 3.74245 6.8921 2.30306 7.5489 1.11367C7.19345 1.02276 6.78392 0.969727 6.30485 0.969727C3.46132 0.969727 2.9668 2.75003 2.9668 4.93942C2.9668 7.12882 4.4581 8.90912 6.29712 8.90912Z" fill="#10284F"/>
                                                            <path d="M6.45203 9.89397C6.39794 9.89397 6.35158 9.90154 6.29749 9.90154C5.02254 9.90154 4.47392 9.21973 4.47392 9.21973C0.579524 9.90912 0.0695428 11 0.00772698 14.8182C0 15.0606 0 15.0985 0 15.0758C0 15.144 0 15.2349 0 15.3712C0 15.3712 0.540889 16.4318 3.16033 16.9394C3.2067 14.447 3.42305 12.7425 4.36574 11.4773C4.90663 10.75 5.6407 10.25 6.45203 9.89397Z" fill="#10284F"/>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_2507_266">
                                                                <rect width="24" height="20" fill="white"/>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </div>
                                                <div class="col">
                                                    <div class="homeMobile__duthuyen__txt">Tối đa 2 người</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/item-->
                                <!--item-->
                                <div class="item__8">
                                    <div class="row row-8 align-items-center">
                                        <div class="col-auto">
                                            <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_2507_290)">
                                                    <path d="M23.9625 15.1698C24 15.0714 24.0141 14.9635 23.9766 14.851L21.9984 8.42402V2.49861C21.9984 1.12039 20.8781 0 19.5 0H4.5C3.12188 0 2.00156 1.12039 2.00156 2.49861V8.42871L0.0234375 14.8557C-0.009375 14.9635 0.0046875 15.0761 0.0375 15.1745C0.0140625 15.2823 0 15.3901 0 15.5026V19.5014V21.5031C0 21.7796 0.225 22.0047 0.501562 22.0047H2.50313C2.77969 22.0047 3.00469 21.7796 3.00469 21.5031V20.003H21.0047V21.5031C21.0047 21.7796 21.2297 22.0047 21.5062 22.0047H23.5078C23.7844 22.0047 24.0094 21.7796 24.0094 21.5031V19.5014V15.5026C24 15.3854 23.9859 15.2776 23.9625 15.1698ZM0.998437 18.9998V15.498C0.998437 15.2214 1.22344 14.9964 1.5 14.9964H22.5C22.7766 14.9964 23.0016 15.2214 23.0016 15.498V18.9998H0.998437ZM2.86875 9.00063H4.37344C4.425 9.15064 4.49531 9.29596 4.59844 9.42253C4.88438 9.78818 5.31563 9.99913 5.78438 9.99913H9.50156C10.1531 9.99913 10.7016 9.57723 10.9078 9.00063H13.0922C13.2984 9.58192 13.8469 9.99913 14.4984 9.99913H18.2156C18.6797 9.99913 19.1109 9.78818 19.3969 9.42253C19.5 9.29127 19.5656 9.15064 19.6219 9.00063H21.1266L22.6688 14.0213C22.6125 14.0166 22.5516 14.0025 22.4953 14.0025H1.5C1.43906 14.0025 1.38281 14.0119 1.32656 14.0213L2.86875 9.00063ZM10.0031 8.49434V8.49903C10.0031 8.77561 9.77812 8.99594 9.50625 8.99594H5.78906C5.63438 8.99594 5.48906 8.92562 5.39531 8.80374C5.30156 8.68186 5.26406 8.52247 5.30625 8.37246L5.80781 6.37076C5.86406 6.15043 6.06094 5.99104 6.29531 5.99104H9.51562C9.79219 5.99104 10.0172 6.21606 10.0172 6.49264V8.49434H10.0031ZM14.0016 8.49903V6.49733C14.0016 6.22075 14.2266 5.99573 14.5031 5.99573H17.7188C17.9484 5.99573 18.15 6.15043 18.2016 6.37544L18.7031 8.37715C18.7406 8.52716 18.7078 8.68186 18.6141 8.80843C18.5203 8.93031 18.375 9.00063 18.2203 9.00063H14.5031C14.2266 9.00063 14.0016 8.77561 14.0016 8.49903ZM3 2.49861C3 1.67355 3.675 0.998507 4.5 0.998507H19.5C20.325 0.998507 21 1.67355 21 2.49861V7.99743H19.6406L19.1766 6.13168C19.0078 5.46132 18.4078 4.99722 17.7188 4.99722H14.4984C13.6734 4.99722 12.9984 5.67227 12.9984 6.49733V7.99743H10.9969V6.49733C10.9969 5.67227 10.3219 4.99722 9.49688 4.99722H6.28125C5.59219 4.99722 4.99219 5.46601 4.82344 6.13168L4.35938 8.00212H3V2.49861ZM2.00156 21.0015H0.998437V20.003H1.99687V21.0015H2.00156ZM21.9984 21.0015V20.003H22.9969V21.0015H21.9984Z" fill="#10284F"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_2507_290">
                                                        <rect width="24" height="22" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="col-auto">
                                            <div class="homeMobile__duthuyen__txt">1 giường king hoặc</div>
                                        </div>
                                        <div class="col-auto">
                                            <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_2507_290)">
                                                    <path d="M23.9625 15.1698C24 15.0714 24.0141 14.9635 23.9766 14.851L21.9984 8.42402V2.49861C21.9984 1.12039 20.8781 0 19.5 0H4.5C3.12188 0 2.00156 1.12039 2.00156 2.49861V8.42871L0.0234375 14.8557C-0.009375 14.9635 0.0046875 15.0761 0.0375 15.1745C0.0140625 15.2823 0 15.3901 0 15.5026V19.5014V21.5031C0 21.7796 0.225 22.0047 0.501562 22.0047H2.50313C2.77969 22.0047 3.00469 21.7796 3.00469 21.5031V20.003H21.0047V21.5031C21.0047 21.7796 21.2297 22.0047 21.5062 22.0047H23.5078C23.7844 22.0047 24.0094 21.7796 24.0094 21.5031V19.5014V15.5026C24 15.3854 23.9859 15.2776 23.9625 15.1698ZM0.998437 18.9998V15.498C0.998437 15.2214 1.22344 14.9964 1.5 14.9964H22.5C22.7766 14.9964 23.0016 15.2214 23.0016 15.498V18.9998H0.998437ZM2.86875 9.00063H4.37344C4.425 9.15064 4.49531 9.29596 4.59844 9.42253C4.88438 9.78818 5.31563 9.99913 5.78438 9.99913H9.50156C10.1531 9.99913 10.7016 9.57723 10.9078 9.00063H13.0922C13.2984 9.58192 13.8469 9.99913 14.4984 9.99913H18.2156C18.6797 9.99913 19.1109 9.78818 19.3969 9.42253C19.5 9.29127 19.5656 9.15064 19.6219 9.00063H21.1266L22.6688 14.0213C22.6125 14.0166 22.5516 14.0025 22.4953 14.0025H1.5C1.43906 14.0025 1.38281 14.0119 1.32656 14.0213L2.86875 9.00063ZM10.0031 8.49434V8.49903C10.0031 8.77561 9.77812 8.99594 9.50625 8.99594H5.78906C5.63438 8.99594 5.48906 8.92562 5.39531 8.80374C5.30156 8.68186 5.26406 8.52247 5.30625 8.37246L5.80781 6.37076C5.86406 6.15043 6.06094 5.99104 6.29531 5.99104H9.51562C9.79219 5.99104 10.0172 6.21606 10.0172 6.49264V8.49434H10.0031ZM14.0016 8.49903V6.49733C14.0016 6.22075 14.2266 5.99573 14.5031 5.99573H17.7188C17.9484 5.99573 18.15 6.15043 18.2016 6.37544L18.7031 8.37715C18.7406 8.52716 18.7078 8.68186 18.6141 8.80843C18.5203 8.93031 18.375 9.00063 18.2203 9.00063H14.5031C14.2266 9.00063 14.0016 8.77561 14.0016 8.49903ZM3 2.49861C3 1.67355 3.675 0.998507 4.5 0.998507H19.5C20.325 0.998507 21 1.67355 21 2.49861V7.99743H19.6406L19.1766 6.13168C19.0078 5.46132 18.4078 4.99722 17.7188 4.99722H14.4984C13.6734 4.99722 12.9984 5.67227 12.9984 6.49733V7.99743H10.9969V6.49733C10.9969 5.67227 10.3219 4.99722 9.49688 4.99722H6.28125C5.59219 4.99722 4.99219 5.46601 4.82344 6.13168L4.35938 8.00212H3V2.49861ZM2.00156 21.0015H0.998437V20.003H1.99687V21.0015H2.00156ZM21.9984 21.0015V20.003H22.9969V21.0015H21.9984Z" fill="#10284F"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_2507_290">
                                                        <rect width="24" height="22" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="col-auto">
                                            <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_2507_290)">
                                                    <path d="M23.9625 15.1698C24 15.0714 24.0141 14.9635 23.9766 14.851L21.9984 8.42402V2.49861C21.9984 1.12039 20.8781 0 19.5 0H4.5C3.12188 0 2.00156 1.12039 2.00156 2.49861V8.42871L0.0234375 14.8557C-0.009375 14.9635 0.0046875 15.0761 0.0375 15.1745C0.0140625 15.2823 0 15.3901 0 15.5026V19.5014V21.5031C0 21.7796 0.225 22.0047 0.501562 22.0047H2.50313C2.77969 22.0047 3.00469 21.7796 3.00469 21.5031V20.003H21.0047V21.5031C21.0047 21.7796 21.2297 22.0047 21.5062 22.0047H23.5078C23.7844 22.0047 24.0094 21.7796 24.0094 21.5031V19.5014V15.5026C24 15.3854 23.9859 15.2776 23.9625 15.1698ZM0.998437 18.9998V15.498C0.998437 15.2214 1.22344 14.9964 1.5 14.9964H22.5C22.7766 14.9964 23.0016 15.2214 23.0016 15.498V18.9998H0.998437ZM2.86875 9.00063H4.37344C4.425 9.15064 4.49531 9.29596 4.59844 9.42253C4.88438 9.78818 5.31563 9.99913 5.78438 9.99913H9.50156C10.1531 9.99913 10.7016 9.57723 10.9078 9.00063H13.0922C13.2984 9.58192 13.8469 9.99913 14.4984 9.99913H18.2156C18.6797 9.99913 19.1109 9.78818 19.3969 9.42253C19.5 9.29127 19.5656 9.15064 19.6219 9.00063H21.1266L22.6688 14.0213C22.6125 14.0166 22.5516 14.0025 22.4953 14.0025H1.5C1.43906 14.0025 1.38281 14.0119 1.32656 14.0213L2.86875 9.00063ZM10.0031 8.49434V8.49903C10.0031 8.77561 9.77812 8.99594 9.50625 8.99594H5.78906C5.63438 8.99594 5.48906 8.92562 5.39531 8.80374C5.30156 8.68186 5.26406 8.52247 5.30625 8.37246L5.80781 6.37076C5.86406 6.15043 6.06094 5.99104 6.29531 5.99104H9.51562C9.79219 5.99104 10.0172 6.21606 10.0172 6.49264V8.49434H10.0031ZM14.0016 8.49903V6.49733C14.0016 6.22075 14.2266 5.99573 14.5031 5.99573H17.7188C17.9484 5.99573 18.15 6.15043 18.2016 6.37544L18.7031 8.37715C18.7406 8.52716 18.7078 8.68186 18.6141 8.80843C18.5203 8.93031 18.375 9.00063 18.2203 9.00063H14.5031C14.2266 9.00063 14.0016 8.77561 14.0016 8.49903ZM3 2.49861C3 1.67355 3.675 0.998507 4.5 0.998507H19.5C20.325 0.998507 21 1.67355 21 2.49861V7.99743H19.6406L19.1766 6.13168C19.0078 5.46132 18.4078 4.99722 17.7188 4.99722H14.4984C13.6734 4.99722 12.9984 5.67227 12.9984 6.49733V7.99743H10.9969V6.49733C10.9969 5.67227 10.3219 4.99722 9.49688 4.99722H6.28125C5.59219 4.99722 4.99219 5.46601 4.82344 6.13168L4.35938 8.00212H3V2.49861ZM2.00156 21.0015H0.998437V20.003H1.99687V21.0015H2.00156ZM21.9984 21.0015V20.003H22.9969V21.0015H21.9984Z" fill="#10284F"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_2507_290">
                                                        <rect width="24" height="22" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="col">
                                            <div class="homeMobile__duthuyen__txt">2 giường đơn</div>
                                        </div>
                                    </div>
                                </div>
                                <!--/item-->

                                <!--item-->
                                <div class="item__8">
                                    <div class="row row-8">
                                        <div class="col-auto">
                                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_2507_258)">
                                                    <path d="M13.07 4.68997C12.6558 4.68799 12.2503 4.80913 11.9051 5.03802C11.5599 5.26691 11.2905 5.59322 11.131 5.97553C10.9716 6.35783 10.9294 6.77888 11.0097 7.18523C11.09 7.59158 11.2893 7.9649 11.5822 8.25779C11.8751 8.55069 12.2484 8.74994 12.6547 8.83027C13.0611 8.91059 13.4821 8.86836 13.8644 8.70894C14.2467 8.54951 14.5731 8.28008 14.8019 7.93485C15.0308 7.58963 15.152 7.18417 15.15 6.76997C15.1474 6.21913 14.9274 5.6916 14.5379 5.30209C14.1484 4.91258 13.6208 4.69259 13.07 4.68997ZM13.07 7.80997C12.8722 7.80997 12.6789 7.75132 12.5144 7.64143C12.35 7.53155 12.2218 7.37537 12.1461 7.19265C12.0704 7.00992 12.0506 6.80886 12.0892 6.61487C12.1278 6.42089 12.223 6.24271 12.3629 6.10286C12.5028 5.96301 12.6809 5.86776 12.8749 5.82918C13.0689 5.79059 13.27 5.8104 13.4527 5.88609C13.6354 5.96177 13.7916 6.08995 13.9015 6.2544C14.0114 6.41884 14.07 6.61218 14.07 6.80997C14.07 7.07518 13.9647 7.32954 13.7771 7.51707C13.5896 7.70461 13.3352 7.80997 13.07 7.80997Z" fill="#2E4365"/>
                                                    <path d="M14.63 9.90004H10.46C10.3221 9.90004 10.1898 9.95483 10.0923 10.0523C9.99479 10.1499 9.94 10.2821 9.94 10.42V12.5C9.94 12.638 9.99479 12.7702 10.0923 12.8677C10.1898 12.9653 10.3221 13.02 10.46 13.02H11V20.83C10.9987 20.8992 11.0111 20.9679 11.0367 21.0321C11.0622 21.0964 11.1003 21.1549 11.1487 21.2042C11.1971 21.2536 11.2549 21.2928 11.3187 21.3195C11.3824 21.3463 11.4509 21.3601 11.52 21.36H14.65C14.7191 21.3601 14.7876 21.3463 14.8513 21.3195C14.9151 21.2928 14.9729 21.2536 15.0213 21.2042C15.0697 21.1549 15.1078 21.0964 15.1333 21.0321C15.1589 20.9679 15.1713 20.8992 15.17 20.83V10.42C15.1701 10.35 15.156 10.2807 15.1286 10.2163C15.1012 10.1519 15.0611 10.0936 15.0107 10.0451C14.9603 9.99653 14.9006 9.95866 14.8351 9.93373C14.7697 9.90881 14.7 9.89735 14.63 9.90004ZM14.11 20.31H12V12.5C11.9951 12.369 11.9408 12.2447 11.8481 12.152C11.7554 12.0593 11.631 12.005 11.5 12H11V11H14.13L14.11 20.31Z" fill="#2E4365"/>
                                                    <path d="M13.07 0.52002C10.5969 0.520023 8.17934 1.25364 6.12329 2.62805C4.06725 4.00245 2.46511 5.95587 1.5196 8.24111C0.574097 10.5263 0.327726 13.0407 0.811664 15.466C1.2956 17.8913 2.4881 20.1186 4.23826 21.8659C5.98842 23.6133 8.21757 24.8022 10.6437 25.2823C13.0697 25.7623 15.5837 25.5119 17.8674 24.5628C20.1511 23.6136 22.102 22.0083 23.4731 19.9501C24.8442 17.8918 25.574 15.4731 25.57 13C25.5621 9.68909 24.2419 6.51634 21.8989 4.17703C19.5558 1.83772 16.3809 0.522657 13.07 0.52002ZM13.07 24.52C10.8056 24.522 8.5913 23.853 6.70672 22.5976C4.82214 21.3422 3.35173 19.5566 2.48108 17.4662C1.61043 15.3759 1.37858 13.0744 1.8148 10.8524C2.25102 8.63037 3.33574 6.58738 4.93205 4.98131C6.52837 3.37524 8.56471 2.27808 10.784 1.82833C13.0034 1.37858 15.3062 1.5964 17.4018 2.45429C19.4975 3.31218 21.292 4.77169 22.5588 6.64858C23.8257 8.52547 24.5081 10.7356 24.52 13C24.5227 16.0403 23.3181 18.9573 21.1711 21.1099C19.0241 23.2626 16.1103 24.4747 13.07 24.48V24.52Z" fill="#2E4365"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_2507_258">
                                                        <rect width="26" height="26" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="col">
                                            <div class="homeMobile__duthuyen__txt">Không cho phép hút thuốc</div>
                                            <div class="homeMobile__duthuyen__txt">Không cho phép thú cưng</div>
                                            <div class="homeMobile__duthuyen__txt">Không cho phép tổ chức tiệc / sự kiện</div>
                                        </div>
                                    </div>
                                </div>
                                <!--/item-->
                            </div>
                            <div class="homeMobile__tauthamvinh__card__divider"></div>
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="homeMobile__duthuyen__price">1,599,000đ / người</div>
                                </div>
                                <div class="col-auto">
                                    <a href="" class="btn btn-primary homeMobile__tauthamvinh__card__btnBuy">Đặt phòng</a>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
        <!--/Du thuyền-->

        <div class="box-where-go-section">
            <div class="box-where-go">
                <div class="container">
                    <h3 class="box-where-go__title">Đi đâu ở Hạ Long ?</h3>
                    <div class="box-where-go__wrap owl-carousel owl-theme">
                        <div>
                            <div class="box-where-go__box box-where-go__box-1">
                                <div class="box-where-go__box-img"><a href="#"><img
                                        src="./assets/images/box-where-go/where-1.jpg"
                                        alt="img"></a>
                                    <div class="img__content"><a href="#">
                                        <h4 class="img__content-place">Đảo Titop</h4>
                                    </a><span class="img__content-visitor">8,960 accommodations</span></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="box-where-go__box">
                                <div class="box-where-go__box-img"><a href="#"><img
                                        src="./assets/images/box-where-go/where-2.png"
                                        alt="img"></a>
                                    <div class="img__content"><a href="#">
                                        <h4 class="img__content-place">Tắm Onsen Nhật Bản</h4>
                                    </a><span class="img__content-visitor">8,960 accommodations</span></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="box-where-go__box">
                                <div class="box-where-go__box-img"><a href="#"><img
                                        src="./assets/images/box-where-go/where-3.png"
                                        alt="img"></a>
                                    <div class="img__content"><a href="#">
                                        <h4 class="img__content-place">Làng Chài</h4>
                                    </a><span class="img__content-visitor">8,960 accommodations</span></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="box-where-go__box">
                                <div class="box-where-go__box-img"><a href="#"><img
                                        src="./assets/images/box-where-go/where-4.png"
                                        alt="img"></a>
                                    <div class="img__content"><a href="#">
                                        <h4 class="img__content-place">Vịnh di sản</h4>
                                    </a><span class="img__content-visitor">8,960 accommodations</span></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="box-where-go__box">
                                <div class="box-where-go__box-img"><a href="#"><img
                                        src="./assets/images/box-where-go/where-5.png"
                                        alt="img"></a>
                                    <div class="img__content"><a href="#">
                                        <h4 class="img__content-place">Hang Sửng Sốt </h4>
                                    </a><span class="img__content-visitor">8,960 accommodations</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="client-service-section">
            <div class="client-service">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-8 col-lg-7 col-12">
                            <div class="client-service__box">
                                <h3 class="client-service__box-title">Trải nghiệm khách hàng là điều quan trọng
                                    nhất</h3>
                                <div class="client-service__box-icon-wrap">
                                    <div class="client-service__box-icon"><img
                                            src="./assets/images/client-service/client-icon-mb-1.svg"
                                            alt="img"><span class="icon__title">Hoàn hủy 100% free</span></div>
                                    <div class="client-service__box-icon"><img
                                            src="./assets/images/client-service/client-icon-mb-2.svg"
                                            alt="img"><span class="icon__title">Miễn phí vé cho trẻ em</span></div>
                                    <div class="client-service__box-icon"><img
                                            src="./assets/images/client-service/client-icon-mb-3.svg"
                                            alt="img"><span class="icon__title">Dịch vụ đưa đón </span></div>
                                </div>
                                <p class="client-service__box-content">
                                    EasyCancel <br>Not sure about your travel plans? Look for the EasyCancel badge to
                                    find hotels
                                    offering free cancellation on select rooms up to the day before check-in. See your
                                    chosen room's
                                    cancellation policy for more details.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="happy__client__wrapper">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="happy__client__item">
                            <h2>Happy Client</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore
                                et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                                maecenas
                                accumsan lacus vel facilisis.</p>
                        </div>
                        <div class="happy__client__item d-flex align-items-center justify-content-center">
                            <div class="item__device"><img class="device-image"
                                                           src="./assets/images/happy-client-slider/happy-client-device.png"
                                                           alt="">
                                <div class="owl-carousel owl-theme device-carousel-mb">
                                    <div class="item">
                                        <div class="device-slide d-flex align-items-center justify-content-center">
                                            <div class="number">1</div>
                                            <img
                                                    src="./assets/images/happy-client-slider/happy-client-slider-image.png"
                                                    alt="">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="device-slide d-flex align-items-center justify-content-center">
                                            <div class="number">2</div>
                                            <img
                                                    src="./assets/images/happy-client-slider/happy-client-slider-image.png"
                                                    alt="">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="device-slide d-flex align-items-center justify-content-center">
                                            <div class="number">3</div>
                                            <img
                                                    src="./assets/images/happy-client-slider/happy-client-slider-image.png"
                                                    alt="">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="device-slide d-flex align-items-center justify-content-center">
                                            <div class="number">4</div>
                                            <img
                                                    src="./assets/images/happy-client-slider/happy-client-slider-image.png"
                                                    alt="">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="device-slide d-flex align-items-center justify-content-center">
                                            <div class="number">5</div>
                                            <img
                                                    src="./assets/images/happy-client-slider/happy-client-slider-image.png"
                                                    alt="">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="device-slide d-flex align-items-center justify-content-center">
                                            <div class="number">6</div>
                                            <img
                                                    src="./assets/images/happy-client-slider/happy-client-slider-image.png"
                                                    alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="partner-slider-section-mb">
            <div class="container">
                <div class="owl-carousel">
                    <div class="partner-slider__item"><a href="#"><img class="mb-5 mt-3 pb-4 pt-5"
                                                                       src="./assets/images/box-partner/viet.png"
                                                                       alt=""></a><a href="#"><img class="mb-1"
                                                                                                   src="./assets/images/box-partner/traveloka/layer-1.png"
                                                                                                   alt=""></a></div>
                    <div class="partner-slider__item"><a href="#"><img class="mt-5 pb-5 pt-4"
                                                                       src="./assets/images/box-partner/airlines/layer-1.png"
                                                                       alt=""></a><a href="#"><img
                            src="./assets/images/box-partner/tripadvisor/layer-1.png" alt=""></a></div>
                    <div class="partner-slider__item"><a href="#"><img class="mb-5"
                                                                       src="./assets/images/box-partner/hotel/layer-1.png"
                                                                       alt=""></a><a href="#"><img class="mb-1"
                                                                                                   src="./assets/images/box-partner/airbnb/layer-1.png"
                                                                                                   alt=""></a></div>
                </div>
            </div>
        </div>
    </div>
    <section class="footer">
        <div class="footer__section">
            <div class="footer-top">
                <div class="container">
                    <div class="row padd-37">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="footer__list-item list-top">
                                <h3 class="list-title">Đừng bỏ lỡ các deal du lịch HOT</h3>
                                <p class="list-description"><span>Các deal khuyến mại sẽ được gửi vào email của bạn. Bằng cách nhấp
                      vào đăng ký, bạn đã đồng ý với các <a href="#"><u> Điều khoản </u></a> & <a href="#"><u> Chính
                          sách của chúng tôi </u></a></span></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="footer__list-item form_email">
                                <div class="list-form">
                                    <input type="text" placeholder="Email của bạn">
                                    <div class="ic_next"><img src="./assets/images/footer-02/layer-1.png" alt=""></div>
                                </div>
                                <small class="deal">+1.200 offer mỗi tháng </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer__list-name footer__list-item">
                                <p class="list-name__title">Công ty Cổ phần AZWAY Việt Nam </p>
                            </div>
                            <div class="footer-soli d-flex mb-4">
                                <div class="footer__list-follow">
                                    <p class="follow__title">Theo dõi chúng tôi</p>
                                </div>
                                <div class="follow-social"><a href=""><img src="./assets/images/footer-02/layer-5.png"
                                                                           alt=""></a><a
                                        href=""><img src="./assets/images/footer-02/layer-6.png" alt=""></a><a href="">
                                    <img
                                            src="./assets/images/footer-02/layer-4.png" alt=""></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="footer-bottom-mb">
                        <div class="row">
                            <div class="col-6">
                                <div class="footer__list-name footer__list-item">
                                    <ul class="footer__list-content">
                                        <li class="content__item"><a href="">Về chúng tôi</a></li>
                                        <li class="content__item"><a href=""> Profile công ty </a></li>
                                        <li class="content__item"><a href=""> Tàu thăm vịnh</a></li>
                                        <li class="content__item"><a href=""> Du thuyền </a></li>
                                        <li class="content__item"><a href=""> Cano </a></li>
                                        <li class="content__item"><a href=""> Thủy phi cơ </a></li>
                                        <li class="content__item"><a href=""> Trực thăng </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6">
                                <ul class="footer__list-content">
                                    <li class="content__item"><a href="">Điều khoản bảo mật</a></li>
                                    <li class="content__item"><a href=""> Chỉnh sách hoàn trả </a></li>
                                    <li class="content__item"><a href=""> Câu hỏi thường gặp</a></li>
                                    <li class="content__item"><a href=""> Kinh nghiệm du lịch </a></li>
                                    <li class="content__item"><a href=""> Du lịch Hạ Long</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <div class="footer__copyright-list"><img src="./assets/images/footer-02/lcopy.png" alt="">
                        <p class="copyright-title">© 2003-2020 AZCRUISE </p>
                        <p class="copyright-bottom"> Một thành viên của AZWAY Việt Nam </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
<script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.vi.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js"></script>
<script src="./assets/js/flatpickr.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.5.1/flatpickr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/vn.js"></script>
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.3.0/dist/lazyload.min.js"></script>
<script src="./assets/js/main.js"></script>
</body>

</html>