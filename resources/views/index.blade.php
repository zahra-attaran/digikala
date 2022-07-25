@extends('template')

@section('title')
    خانه صفحه اصلی
@endsection
@section('content')

<div class="wrapper default">

    <!-- header -->
    <header class="main-header default">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-4 col-5">
                    <div class="logo-area default">
                        <a href="http://ehsanghasimi.ir/">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-sm-8 col-7">
                    <div class="search-area default">
                        <form action="" class="search">
                            <input type="text" placeholder="نام کالا، برند و یا دسته مورد نظر خود را جستجو کنید…">
                            <button type="submit"><img src="img/search.png" alt=""></button>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="user-login dropdown">
                        <a href="http://ehsanghasimi.ir/" class="btn btn-neutral dropdown-toggle" data-toggle="dropdown" id="navbarDropdownMenuLink1">
                        ورود / ثبت نام
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                            <div class="dropdown-item">
                                <a class="btn btn-info">ورود به دیجی کالا</a>
                            </div>
                            <div class="dropdown-item font-weight-bold">
                                <span>کاربر جدید هستید؟</span> <a class="register" href="http://ehsanghasimi.ir/">ثبت‌نام</a>
                            </div>
                        </ul>
                    </div>
                    <div class="cart dropdown">
                        <a href="http://ehsanghasimi.ir/" class="btn dropdown-toggle" data-toggle="dropdown" id="navbarDropdownMenuLink1">
                        <i class="now-ui-icons shopping_cart-simple"></i>
                        سبد خرید
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                            <div class="basket-header">
                                <div class="basket-total">
                                    <span>مبلغ کل خرید:</span>
                                    <span> ۲۳,۵۰۰</span>
                                    <span> تومان</span>
                                </div>
                                <a href="http://ehsanghasimi.ir/" class="basket-link">
                                    <span>مشاهده سبد خرید</span>
                                    <div class="basket-arrow"></div>
                                </a>
                            </div>
                            <ul class="basket-list">
                                <li>
                                    <a href="http://ehsanghasimi.ir/" class="basket-item">
                                        <button class="basket-item-remove"></button>
                                        <div class="basket-item-content">
                                            <div class="basket-item-image">
                                                <img alt="" src="img/cart/2324935.jpg">
                                            </div>
                                            <div class="basket-item-details">
                                                <div class="basket-item-title">هندزفری بلوتوث مدل S530
                                                </div>
                                                <div class="basket-item-params">
                                                    <div class="basket-item-props">
                                                        <span> ۱ عدد</span>
                                                        <span>رنگ مشکی</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <a href="http://ehsanghasimi.ir/" class="basket-submit">ورود و ثبت سفارش</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="main-menu">
            <div class="container">
                <ul class="list float-right">
                    <li class="list-item list-item-has-children mega-menu mega-menu-col-5">
                        <a class="nav-link" href="http://ehsanghasimi.ir/">کالای دیجیتال</a>
                        <ul class="sub-menu nav">
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link"
                                                                                     href="http://ehsanghasimi.ir/">لوازم
                                    جانبی گوشی</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/"">کیف و کاور گوشی</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">پاور بانک</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">هندزفری،هدفون</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">پایه نگهدارنده گوشی</a>
                                    </li>
                                    <li class="list-item list-item-has-children">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                            class="main-list-item nav-link" href="http://ehsanghasimi.ir/">گوشی موبایل</a>
                                        <ul class="sub-menu nav">
                                            <li class="list-item">
                                                <a class="nav-link" href="http://ehsanghasimi.ir/">آیفون اپل</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="http://ehsanghasimi.ir/">هوآوی</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="list-item">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                            class="main-list-item nav-link" href="http://ehsanghasimi.ir/">ساعت هوشمند</a>
                                    </li>
                                    <li class="list-item">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                            class="main-list-item nav-link" href="http://ehsanghasimi.ir/">اسپیکر بلوتوث و با سیم</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link"
                                                                                     href="http://ehsanghasimi.ir/">موبایل</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">Apple</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">ASUS</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">HTC</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">LG</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">Nokia</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">Samsung</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">Sony</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link" href="http://ehsanghasimi.ir/">تبلت
                                    و کتابخوان</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">Acer</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">Amazon</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">Apple</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">ASUS</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">HTC</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">Samsung</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link"
                                                                                     href="http://ehsanghasimi.ir/">دوربین</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">Canon</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">Casio</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">Nikon</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">Sony</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link"
                                                                                     href="http://ehsanghasimi.ir/">کامپیوتر و تجهیزات
                                    جانبی</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">هارد دیسک</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">نمایشگر</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">مادر بورد</a></li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">پردازنده</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">کارت گرافیک</a>
                                    </li>
                                </ul>
                            </li>
                            <img src="img/1636.png" alt="">
                        </ul>
                    </li>
                    <li class="list-item list-item-has-children mega-menu mega-menu-col-5">
                        <a class="nav-link" href="http://ehsanghasimi.ir/">آرایشی،بهداشت و سلامت</a>
                        <ul class="sub-menu nav">
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link"
                                                                                     href="http://ehsanghasimi.ir/">لوازم
                                    جانبی گوشی</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">کیف و کاور گوشی</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">پاور بانک</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">هندزفری،هدفون</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">پایه نگهدارنده گوشی</a>
                                    </li>
                                    <li class="list-item list-item-has-children">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                            class="main-list-item nav-link" href="http://ehsanghasimi.ir/">گوشی
                                            موبایل</a>
                                        <ul class="sub-menu nav">
                                            <li class="list-item">
                                                <a class="nav-link" href="http://ehsanghasimi.ir/">آیفون اپل</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="http://ehsanghasimi.ir/">هوآوی</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="list-item">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                            class="main-list-item nav-link" href="http://ehsanghasimi.ir/">ساعت
                                            هوشمند</a>
                                    </li>
                                    <li class="list-item">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                            class="main-list-item nav-link" href="http://ehsanghasimi.ir/">اسپیکر
                                            بلوتوث و با سیم</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link"
                                                                                     href="http://ehsanghasimi.ir/">موبایل</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">Apple</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">ASUS</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">HTC</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">LG</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">Nokia</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">Samsung</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">Sony</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link" href="http://ehsanghasimi.ir/">تبلت
                                    و کتابخوان</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">Acer</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">Amazon</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">Apple</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">ASUS</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">HTC</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">Samsung</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link"
                                                                                     href="http://ehsanghasimi.ir/">دوربین</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">Canon</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">Casio</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">Nikon</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">Sony</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link"
                                                                                     href="http://ehsanghasimi.ir/">کامپیوتر و تجهیزات
                                    جانبی</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">هارد دیسک</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">نمایشگر</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">مادر بورد</a></li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">پردازنده</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">کارت گرافیک</a>
                                    </li>
                                </ul>
                            </li>
                            <img src="img/1636.png" alt="">
                        </ul>
                    </li>
                    <li class="list-item list-item-has-children mega-menu mega-menu-col-5">
                        <a class="nav-link" href="">خودرو،ابزار و اداری</a>
                        <ul class="sub-menu nav">
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link"
                                                                                     href="http://ehsanghasimi.ir/">لوازم
                                    جانبی گوشی</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">کیف و کاور گوشی</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">پاور بانک</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">هندزفری،هدفون</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">پایه نگهدارنده گوشی</a>
                                    </li>
                                    <li class="list-item list-item-has-children">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                            class="main-list-item nav-link" href="http://ehsanghasimi.ir/">گوشی
                                            موبایل</a>
                                        <ul class="sub-menu nav">
                                            <li class="list-item">
                                                <a class="nav-link" href="http://ehsanghasimi.ir/">آیفون اپل</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="http://ehsanghasimi.ir/">هوآوی</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="list-item">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                            class="main-list-item nav-link" href="http://ehsanghasimi.ir/">ساعت
                                            هوشمند</a>
                                    </li>
                                    <li class="list-item">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                            class="main-list-item nav-link" href="http://ehsanghasimi.ir/">اسپیکر
                                            بلوتوث و با سیم</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link"
                                                                                     href="http://ehsanghasimi.ir/">موبایل</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">Apple</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">ASUS</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">HTC</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">LG</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">Nokia</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">Samsung</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">Sony</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link" href="http://ehsanghasimi.ir/">تبلت
                                    و کتابخوان</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">Acer</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">Amazon</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">Apple</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">ASUS</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">HTC</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">Samsung</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link"
                                                                                     href="http://ehsanghasimi.ir/">دوربین</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">Canon</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">Casio</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">Nikon</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">Sony</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link"
                                                                                     href="http://ehsanghasimi.ir/">کامپیوتر و تجهیزات
                                    جانبی</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">هارد دیسک</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">نمایشگر</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">مادر بورد</a></li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">پردازنده</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="http://ehsanghasimi.ir/">کارت گرافیک</a>
                                    </li>
                                </ul>
                            </li>
                            <img src="img/1636.png" alt="">
                        </ul>
                    </li>
                    <li class="list-item">
                        <a class="nav-link" href="http://ehsanghasimi.ir/">مد و پوشاک</a>
                    </li>
                    <li class="list-item">
                        <a class="nav-link" href="http://ehsanghasimi.ir/">خانه و آشپزخانه</a>
                    </li>
                    <li class="list-item">
                        <a class="nav-link" href="http://ehsanghasimi.ir/">کتاب،لوازم تحریر</a>
                    </li>
                    <li class="list-item">
                        <a class="nav-link" href="http://ehsanghasimi.ir/">ورزش و سفر</a>
                    </li>
                    <li class="list-item">
                        <a class="nav-link" href="http://ehsanghasimi.ir/">وسایل نقلیه و صنعتی</a>
                    </li>
                    <li class="list-item amazing-item">
                        <a class="nav-link" href="http://ehsanghasimi.ir/" target="_blank">شگفت‌انگیزها</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- header -->


    <main class="main default">
        <div class="container">
            <!-- banner -->
            <div class="row banner-ads">
                <div class="col-12">
                    <section class="banner">
                        <a href="http://ehsanghasimi.ir/">
                            <img src="img/banner/banner.jpg" alt="">
                        </a>
                    </section>
                </div>
            </div>
            <!-- banner -->
            <div class="row">
                <aside class="sidebar col-12 col-lg-3 order-2 order-lg-1">
                    <div class="sidebar-inner default">
                        <div class="widget-banner widget card">
                            <a href="http://ehsanghasimi.ir/" target="_top">
                                <img class="img-fluid" src="img/banner/1455.jpg" alt="">
                            </a>
                        </div>
                        <div class="widget-services widget card">
                            <div class="row">
                                <div class="feature-item col-12">
                                    <a href="http://ehsanghasimi.ir/" target="_blank">
                                        <img src="img/svg/return-policy.svg">
                                    </a>
                                    <p>ضمانت برگشت</p>
                                </div>
                                <div class="feature-item col-6">
                                    <a href="http://ehsanghasimi.ir/" target="_blank">
                                        <img src="img/svg/payment-terms.svg">
                                    </a>
                                    <p>پرداخت درمحل</p>
                                </div>
                                <div class="feature-item col-6">
                                    <a href="http://ehsanghasimi.ir/" target="_blank">
                                        <img src="img/svg/delivery.svg">
                                    </a>
                                    <p>تحویل اکسپرس</p>
                                </div>
                                <div class="feature-item col-6">
                                    <a href="http://ehsanghasimi.ir/" target="_blank">
                                        <img src="img/svg/origin-guarantee.svg">
                                    </a>
                                    <p>تضمین بهترین قیمت</p>
                                </div>
                                <div class="feature-item col-6">
                                    <a href="http://ehsanghasimi.ir/" target="_blank">
                                        <img src="img/svg/contact-us.svg">
                                    </a>
                                    <p>پشتیبانی 24 ساعته</p>
                                </div>
                            </div>
                        </div>
                        <div class="widget-suggestion widget card">
                            <header class="card-header">
                                <h3 class="card-title">پیشنهاد لحظه ای</h3>
                            </header>
                            <div id="progressBar">
                                <div class="slide-progress"></div>
                            </div>
                            <div id="suggestion-slider" class="owl-carousel owl-theme">
                                <div class="item">
                                    <a href="http://ehsanghasimi.ir/">
                                        <img src="img/product/692674-200x200.jpg" class="w-100" alt="">
                                    </a>
                                    <h3 class="product-title">
                                        <a href="http://ehsanghasimi.ir/"> لپ تاپ ۱۵ اینچی ایسوس مدل FX503VD - A </a>
                                    </h3>
                                    <div class="price">
                                        <span class="amount">5,700,000<span>تومان</span></span>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="http://ehsanghasimi.ir/">
                                        <img src="img/product/e75a73-200x200.jpg" class="w-100" alt="">
                                    </a>
                                    <h3 class="product-title">
                                        <a href="http://ehsanghasimi.ir/"> لپ تاپ ۱۳ اینچی اپل مدل MacBook Pro MLH12 همراه با تاچ بار
                                        </a>
                                    </h3>
                                    <div class="price">
                                        <del><span class="amount">10,300,000<span>تومان</span></span></del>
                                        <span class="amount">1,099,000<span>تومان</span></span>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="http://ehsanghasimi.ir/">
                                        <img src="img/product/482250-200x200.jpg" class="w-100" alt="">
                                    </a>
                                    <h3 class="product-title">
                                        <a href="http://ehsanghasimi.ir/"> لپ تاپ ۱۵ اینچی اپل مدل ۲۰۱۷ MacBook Pro MPTT2 همراه با
                                            تاچ
                                            بار </a>
                                    </h3>
                                    <div class="price">
                                        <del><span class="amount">16,800,000<span>تومان</span></span></del>
                                        <span class="amount">16,286,000<span>تومان</span></span>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="http://ehsanghasimi.ir/">
                                        <img src="img/product/19a2cc-200x200.jpg" class="w-100" alt="">
                                    </a>
                                    <h3 class="product-title">
                                        <a href="http://ehsanghasimi.ir/"> لپ تاپ ۱۳ اینچی اپل مدل MacBook Air MQD32 2017 </a>
                                    </h3>
                                    <div class="price">
                                        <del><span class="amount">6,000,000<span>تومان</span></span></del>
                                        <span class="amount">5,746,000<span>تومان</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-banner widget card">
                            <a href="http://ehsanghasimi.ir/" target="_blank">
                                <img class="img-fluid" src="img/banner/1000001422.jpg" alt="">
                            </a>
                        </div>
                        <div class="widget-banner widget card">
                            <a href="http://ehsanghasimi.ir/" target="_blank">
                                <img class="img-fluid" src="img/banner/side-banner-01.jpeg" alt="">
                            </a>
                        </div>
                        <div class="widget-banner widget card">
                            <a href="http://ehsanghasimi.ir/" target="_top">
                                <img class="img-fluid" src="img/banner/1000001322.jpg" alt="">
                            </a>
                        </div>
                        <div class="widget-banner widget card">
                            <a href="http://ehsanghasimi.ir/" target="_blank">
                                <img class="img-fluid" src="img/banner/1000001442.jpg" alt="">
                            </a>
                        </div>
                        <div class="widget-banner widget card">
                            <a href="http://ehsanghasimi.ir/" target="_blank">
                                <img class="img-fluid"
                                     src="img/banner/8d546388-29d7-4733-871f-2d84a3012cc227_21_1_6.jpeg"
                                     alt="">
                            </a>
                        </div>
                        <div class="widget-banner widget card">
                            <a href="http://ehsanghasimi.ir/" target="_blank">
                                <img class="img-fluid" src="img/banner/1000001422.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </aside>
                <div class="col-12 col-lg-9 order-1 order-lg-2">
                    <section id="main-slider" class="carousel slide carousel-fade card" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                            <li data-target="#main-slider" data-slide-to="1"></li>
                            <li data-target="#main-slider" data-slide-to="2"></li>
                            <li data-target="#main-slider" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a class="d-block" href="http://ehsanghasimi.ir/">
                                    <img src="img/slider/22f48d8e-6a8f-431c-985d-76ab0e1e59405_21_1_1.jpg"
                                         class="d-block w-100" alt="">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a class="d-block" href="http://ehsanghasimi.ir/">
                                    <img src="img/slider/a264d696-9c12-4dd9-bdc1-12c13a3632b329_21_1_1.jpg"
                                         class="d-block w-100" alt="">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a class="d-block" href="http://ehsanghasimi.ir/">
                                    <img src="img/slider/c0a50594-df40-412b-84f8-c7d6872fb83620_21_1_1.jpg"
                                         class="d-block w-100" alt="">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a class="d-block" href="http://ehsanghasimi.ir/">
                                    <img src="img/slider/d1844e92-e5a9-4aef-8ea7-49be936422ca6_21_1_1.jpg"
                                         class="d-block w-100" alt="">
                                </a>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#main-slider" role="button" data-slide="prev">
                            <i class="now-ui-icons arrows-1_minimal-right"></i>
                        </a>
                        <a class="carousel-control-next" href="#main-slider" data-slide="next">
                            <i class="now-ui-icons arrows-1_minimal-left"></i>
                        </a>
                    </section>
                    <section id="amazing-slider" class="carousel slide carousel-fade card" data-ride="carousel">
                        <div class="row m-0">
                            <ol class="carousel-indicators pr-0 d-flex flex-column col-lg-3">
                                <li class="active" data-target="#amazing-slider" data-slide-to="0">
                                    <span>لپ تاپ INSPIRON</span>
                                </li>
                                <li data-target="#amazing-slider" data-slide-to="1" class="">
                                    <span>دل مدل 5471</span>
                                </li>
                                <li data-target="#amazing-slider" data-slide-to="2" class="">
                                    <span>لپ تاپ ۱۵ اینچی</span>
                                </li>
                                <li data-target="#amazing-slider" data-slide-to="3" class="">
                                    <span>۱۵ اینچی دل</span>
                                </li>
                                <li data-target="#amazing-slider" data-slide-to="4" class="">
                                    <span>لنوو مدل 310</span>
                                </li>
                                <li data-target="#amazing-slider" data-slide-to="5" class="">
                                    <span>لپ تاپ لنوو</span>
                                </li>
                                <li data-target="#amazing-slider" data-slide-to="6">
                                    <span>لپ تاپ ۱۵ اینچی</span>
                                </li>
                                <li data-target="#amazing-slider" data-slide-to="7">
                                    <span>لپ تاپ ایسوس</span>
                                </li>
                                <li data-target="#amazing-slider" data-slide-to="8">
                                    <span>ایسوس مدل A540UP - F</span>
                                </li>
                                <li class="view-all">
                                    <a href="http://ehsanghasimi.ir/" class="btn btn-primary btn-block hvr-sweep-to-left">
                                    <i class="fa fa-arrow-left"></i>مشاهده همه شگفت انگیزها
                                    </a>
                                </li>
                            </ol>
                            <div class="carousel-inner p-0 col-12 col-lg-9">
                                <img class="amazing-title" src="img/amazing-slider/amazing-title-01.png"
                                     alt="">
                                <div class="carousel-item active">
                                    <div class="row m-0">
                                        <div class="right-col col-5 d-flex align-items-center">
                                            <a class="w-100 text-center" href="http://ehsanghasimi.ir/">
                                                <img src="img/amazing-slider/60eb20-200x200.jpg"
                                                     class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <div class="left-col col-7">
                                            <div class="price">
                                                <del><span>4,299,000<span>تومان</span></span></del>
                                                <ins><span>4,180,000<span>تومان</span></span></ins>
                                                <span class="discount-percent">3 % تخفیف</span>
                                            </div>
                                            <h2 class="product-title">
                                                <a href="http://ehsanghasimi.ir/"> لپ تاپ ۱۱٫۶ اینچی دل مدل INSPIRON 3168 -AC B </a>
                                            </h2>
                                            <ul class="list-group">
                                                <li class="list-group-item">رنگ: مشکی</li>
                                                <li class="list-group-item">160 گیگابایت</li>
                                            </ul>
                                            <hr>
                                            <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                                <span data-days>0</span>:
                                                <span data-hours>0</span>:
                                                <span data-minutes>0</span>:
                                                <span data-seconds>0</span>
                                            </div>
                                            <div class="timer-title">زمان باقی مانده تا پایان سفارش</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row m-0">
                                        <div class="right-col col-5 d-flex align-items-center">
                                            <a class="w-100 text-center" href="http://ehsanghasimi.ir/">
                                                <img src="img/amazing-slider/4ff777-200x200.jpg"
                                                     class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <div class="left-col col-7">
                                            <div class="price">
                                                <del><span>6,890,000<span>تومان</span></span></del>
                                                <ins><span>6,580,000<span>تومان</span></span></ins>
                                                <span class="discount-percent">6 % تخفیف</span>
                                            </div>
                                            <h2 class="product-title">
                                                <a href="http://ehsanghasimi.ir/"> لپ تاپ ۱۴ اینچی دل مدل vostro 5471 </a>
                                            </h2>
                                            <ul class="list-group">
                                                <li class="list-group-item">رنگ: نوک مدادی</li>
                                                <li class="list-group-item">120 گیگابایت</li>
                                            </ul>
                                            <hr>
                                            <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                                <span data-days>0</span>:
                                                <span data-hours>0</span>:
                                                <span data-minutes>0</span>:
                                                <span data-seconds>0</span>
                                            </div>
                                            <div class="timer-title">زمان باقی مانده تا پایان سفارش</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row m-0">
                                        <div class="right-col col-5 d-flex align-items-center">
                                            <a class="w-100 text-center" href="http://ehsanghasimi.ir/">
                                                <img src="img/amazing-slider/35a2b8-200x200.jpg"
                                                     class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <div class="left-col col-7">
                                            <div class="price">
                                                <del><span>4,799,000<span>تومان</span></span></del>
                                                <ins><span>4,699,000<span>تومان</span></span></ins>
                                                <span class="discount-percent">2 % تخفیف</span>
                                            </div>
                                            <h2 class="product-title">
                                                <a href="http://ehsanghasimi.ir/"> لپ تاپ ۱۵ اینچی دل مدل Latitude 5580 </a>
                                            </h2>
                                            <ul class="list-group">
                                                <li class="list-group-item">10 گیگابایت رم</li>
                                                <li class="list-group-item">صفحه نمایش لمسی:خیر</li>
                                            </ul>
                                            <hr>
                                            <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                                <span data-days>0</span>:
                                                <span data-hours>0</span>:
                                                <span data-minutes>0</span>:
                                                <span data-seconds>0</span>
                                            </div>
                                            <div class="timer-title">زمان باقی مانده تا پایان سفارش</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item  finished">
                                    <div class="row m-0">
                                        <div class="right-col col-5 d-flex align-items-center">
                                            <a class="w-100 text-center" href="http://ehsanghasimi.ir/">
                                                <img src="img/amazing-slider/c8297f-200x200.jpg"
                                                     class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <div class="left-col col-7">
                                            <div class="price">
                                                <del><span>8,999,000<span>تومان</span></span></del>
                                                <ins><span>8,899,000<span>تومان</span></span></ins>
                                                <span class="discount-percent">1 % تخفیف</span>
                                            </div>
                                            <h2 class="product-title">
                                                <a href="http://ehsanghasimi.ir/"> لپ تاپ ۱۵ اینچی دل مدل INSPIRON 7577 – D </a>
                                            </h2>
                                            <ul class="list-group">
                                                <li class="list-group-item">160 گیگابایت</li>
                                                <li class="list-group-item">پردازنده: Intel</li>
                                            </ul>
                                            <hr>
                                            <a href="http://ehsanghasimi.ir/" class="finished btn"> تمام شد </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item  finished">
                                    <div class="row m-0">
                                        <div class="right-col col-5 d-flex align-items-center">
                                            <a class="w-100 text-center" href="http://ehsanghasimi.ir/">
                                                <img src="img/amazing-slider/36855a-200x200.jpg"
                                                     class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <div class="left-col col-7">
                                            <div class="price">
                                                <del><span>3,600,000<span>تومان</span></span></del>
                                                <ins><span>3,490,000<span>تومان</span></span></ins>
                                                <span class="discount-percent">3 % تخفیف</span>
                                            </div>
                                            <h2 class="product-title">
                                                <a href="http://ehsanghasimi.ir/"> لپ تاپ ۱۵ اینچی لنوو مدل Ideapad 310 – O </a>
                                            </h2>
                                            <ul class="list-group">
                                                <li class="list-group-item">رنگ: مشکی</li>
                                                <li class="list-group-item">رم: 12 گیگابایت</li>
                                            </ul>
                                            <hr>
                                            <a href="http://ehsanghasimi.ir/" class="finished btn"> تمام شد </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row m-0">
                                        <div class="right-col col-5 d-flex align-items-center">
                                            <a class="w-100 text-center" href="http://ehsanghasimi.ir/">
                                                <img src="img/amazing-slider/0e6809-200x200.jpg"
                                                     class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <div class="left-col col-7">
                                            <div class="price">
                                                <del><span>4,160,000;<span>تومان</span></span></del>
                                                <ins><span>4,090,000<span>تومان</span></span></ins>
                                                <span class="discount-percent">2 % تخفیف</span>
                                            </div>
                                            <h2 class="product-title">
                                                <a href="http://ehsanghasimi.ir/"> لپ تاپ ۱۵ اینچی لنوو مدل Ideapad 520 – F </a>
                                            </h2>
                                            <ul class="list-group">
                                                <li class="list-group-item">پردازنده: NVIDIA</li>
                                                <li class="list-group-item">حافظه: 160 گیگابایت</li>
                                            </ul>
                                            <hr>
                                            <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                                <span data-days>0</span>:
                                                <span data-hours>0</span>:
                                                <span data-minutes>0</span>:
                                                <span data-seconds>0</span>
                                            </div>
                                            <div class="timer-title">زمان باقی مانده تا پایان سفارش</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item  finished">
                                    <div class="row m-0">
                                        <div class="right-col col-5 d-flex align-items-center">
                                            <a class="w-100 text-center" href="http://ehsanghasimi.ir/">
                                                <img src="img/amazing-slider/2d71f4-200x200.jpg"
                                                     class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <div class="left-col col-7">
                                            <div class="price">
                                                <del><span>2,390,000<span>تومان</span></span></del>
                                                <ins><span>2,320,000<span>تومان</span></span></ins>
                                                <span class="discount-percent">3 % تخفیف</span>
                                            </div>
                                            <h2 class="product-title">
                                                <a href="http://ehsanghasimi.ir/"> لپ تاپ ۱۵ اینچی لنوو مدل Ideapad V310 – S </a>
                                            </h2>
                                            <ul class="list-group">
                                                <li class="list-group-item">صفحه نمایش لمسی: خیر</li>
                                                <li class="list-group-item">پردازنده: Intel</li>
                                            </ul>
                                            <hr>
                                            <a href="http://ehsanghasimi.ir/" class="finished btn"> تمام شد </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row m-0">
                                        <div class="right-col col-5 d-flex align-items-center">
                                            <a class="w-100 text-center" href="http://ehsanghasimi.ir/">
                                                <img src="img/amazing-slider/59fc05-200x200.jpg"
                                                     class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <div class="left-col col-7">
                                            <div class="price">
                                                <del><span>5,485,000<span>تومان</span></span></del>
                                                <ins><span>5,380,000<span>تومان</span></span></ins>
                                                <span class="discount-percent">2 % تخفیف</span>
                                            </div>
                                            <h2 class="product-title">
                                                <a href="http://ehsanghasimi.ir/"> لپ تاپ ۱۵ اینچی ایسوس مدل VivoBook Flip TP510UQ – C
                                                </a>
                                            </h2>
                                            <ul class="list-group">
                                                <li class="list-group-item">حافظه: 160 گیگابایت</li>
                                                <li class="list-group-item">رنگ: نقره ای</li>
                                            </ul>
                                            <hr>
                                            <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                                <span data-days>0</span>:
                                                <span data-hours>0</span>:
                                                <span data-minutes>0</span>:
                                                <span data-seconds>0</span>
                                            </div>
                                            <div class="timer-title">زمان باقی مانده تا پایان سفارش</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row m-0">
                                        <div class="right-col col-5 d-flex align-items-center">
                                            <a class="w-100 text-center" href="http://ehsanghasimi.ir/">
                                                <img src="img/amazing-slider/8eb96c-200x200.jpg"
                                                     class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <div class="left-col col-7">
                                            <div class="price">
                                                <del><span>2,755,000<span>تومان</span></span></del>
                                                <ins><span>2,565,000<span>تومان</span></span></ins>
                                                <span class="discount-percent">8 % تخفیف</span>
                                            </div>
                                            <h2 class="product-title">
                                                <a href="http://ehsanghasimi.ir/"> لپ تاپ ۱۵ اینچی ایسوس مدل A540UP – F </a>
                                            </h2>
                                            <ul class="list-group">
                                                <li class="list-group-item">رنگ: خاکستری</li>
                                                <li class="list-group-item">رم: 16 گیگابایت</li>
                                            </ul>
                                            <hr>
                                            <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                                <span data-days>0</span>:
                                                <span data-hours>0</span>:
                                                <span data-minutes>0</span>:
                                                <span data-seconds>0</span>
                                            </div>
                                            <div class="timer-title">زمان باقی مانده تا پایان سفارش</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="row" id="amazing-slider-responsive">
                        <div class="col-12">
                            <div class="widget widget-product card">
                                <header class="card-header">
                                    <img src="img/amazing-slider/amazing-title-01.png" width="150px" alt="">
                                    <a href="http://ehsanghasimi.ir/" class="view-all">مشاهده همه</a>
                                </header>
                                <div class="product-carousel owl-carousel owl-theme">
                                    <div class="item">
                                        <a href="http://ehsanghasimi.ir/">
                                            <img src="img/product-slider/60eb20-200x200.jpg"
                                                 class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="http://ehsanghasimi.ir/">لپ تاپ ۱۱٫۶ اینچی دل مدل INSPIRON 3168 -AC B</a>
                                        </h2>
                                        <div class="price">
                                            <ins><span>4,180,000<span>تومان</span></span></ins>
                                        </div>
                                        <hr>
                                        <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                            <span data-days>0</span>:
                                            <span data-hours>0</span>:
                                            <span data-minutes>0</span>:
                                            <span data-seconds>0</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="http://ehsanghasimi.ir/">
                                            <img src="img/product-slider/4ff777-200x200.jpg"
                                                 class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="http://ehsanghasimi.ir/">لپ تاپ ۱۴ اینچی دل مدل vostro 5471</a>
                                        </h2>
                                        <div class="price">
                                            <ins><span>6,580,000<span>تومان</span></span></ins>
                                        </div>
                                        <hr>
                                        <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                            <span data-days>0</span>:
                                            <span data-hours>0</span>:
                                            <span data-minutes>0</span>:
                                            <span data-seconds>0</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="http://ehsanghasimi.ir/">
                                            <img src="img/product-slider/35a2b8-200x200.jpg"
                                                 class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="http://ehsanghasimi.ir/">لپ تاپ ۱۵ اینچی دل مدل Latitude 5580</a>
                                        </h2>
                                        <div class="price">
                                            <ins><span>4,699,000<span>تومان</span></span></ins>
                                        </div>
                                        <hr>
                                        <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                            <span data-days>0</span>:
                                            <span data-hours>0</span>:
                                            <span data-minutes>0</span>:
                                            <span data-seconds>0</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="http://ehsanghasimi.ir/">
                                            <img src="img/product-slider/9b3da9-200x200.jpg"
                                                 class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="http://ehsanghasimi.ir/">لپ تاپ ۱۵ اینچی دل مدل INSPIRON 15-3567 - I</a>
                                        </h2>
                                        <div class="price">
                                            <ins><span>2,780,000<span>تومان</span></span></ins>
                                        </div>
                                        <hr>
                                        <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                            <span data-days>0</span>:
                                            <span data-hours>0</span>:
                                            <span data-minutes>0</span>:
                                            <span data-seconds>0</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="http://ehsanghasimi.ir/">
                                            <img src="img/product-slider/c8297f-200x200.jpg"
                                                 class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="http://ehsanghasimi.ir/">لپ تاپ ۱۵ اینچی دل مدل INSPIRON 7577 - D</a>
                                        </h2>
                                        <div class="price">
                                            <ins><span>8,899,000<span>تومان</span></span></ins>
                                        </div>
                                        <hr>
                                        <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                            <span data-days>0</span>:
                                            <span data-hours>0</span>:
                                            <span data-minutes>0</span>:
                                            <span data-seconds>0</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="http://ehsanghasimi.ir/">
                                            <img src="img/product-slider/a579bb-200x200.jpg"
                                                 class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="http://ehsanghasimi.ir/">لپ تاپ ۱۵ اینچی دل مدل Inspiron 15-5570 - B</a>
                                        </h2>
                                        <div class="price">
                                            <ins><span>4,279,000<span>تومان</span></span></ins>
                                        </div>
                                        <hr>
                                        <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                            <span data-days>0</span>:
                                            <span data-hours>0</span>:
                                            <span data-minutes>0</span>:
                                            <span data-seconds>0</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="http://ehsanghasimi.ir/">
                                            <img src="img/product-slider/19a2cc-200x200.jpg"
                                                 class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="http://ehsanghasimi.ir/">لپ تاپ ۱۵ اینچی دل مدل XPS 15-9560</a>
                                        </h2>
                                        <div class="price">
                                            <ins><span>18,450,000<span>تومان</span></span></ins>
                                        </div>
                                        <hr>
                                        <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                            <span data-days>0</span>:
                                            <span data-hours>0</span>:
                                            <span data-minutes>0</span>:
                                            <span data-seconds>0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row banner-ads">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6 col-lg-3">
                                    <div class="widget-banner card">
                                        <a href="http://ehsanghasimi.ir/" target="_blank">
                                            <img class="img-fluid" src="img/banner/banner-1.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="widget-banner card">
                                        <a href="http://ehsanghasimi.ir/" target="_top">
                                            <img class="img-fluid" src="img/banner/banner-2.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="widget-banner card">
                                        <a href="http://ehsanghasimi.ir/" target="_top">
                                            <img class="img-fluid" src="img/banner/banner-3.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="widget-banner card">
                                        <a href="http://ehsanghasimi.ir/" target="_top">
                                            <img class="img-fluid" src="img/banner/banner-4.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="brand-slider card">
                                <header class="card-header">
                                    <h3 class="card-title"><span>ذسته بندی</span></h3>
                                </header>
                                <div class="owl-carousel">

                                    @foreach($categories as $category)
                                        <div class="item">
                                            <h4>{{ $category->title }}</h4>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="widget widget-product card">
                                <header class="card-header">
                                    <h3 class="card-title">
                                        <span>کامپیوتر و لوازم جانبی</span>
                                    </h3>
                                    <a href="http://ehsanghasimi.ir/" class="view-all">مشاهده همه</a>
                                </header>
                                <div class="product-carousel owl-carousel owl-theme">
                                    @foreach($products as $product)
                                        <div class="item">
                                            <a href='/product/{{$product->id}}'>
                                                <img src="{{url("img/product/$product->url")}}" class="img-fluid" alt="">
                                            </a>
                                            <h2 class="post-title">
                                                {{ $product->name }}
                                            </h2>
                                            <div class="price">
                                                <del><span>{{ $product->price_off }}<span>تومان</span></span></del>
                                                <ins><span>{{ $product->price }}<span>تومان</span></span></ins>
                                            </div>
                                        </div>


                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row banner-ads">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="widget-banner card">
                                        <a href="http://ehsanghasimi.ir/" target="_blank">
                                            <img class="img-fluid" src="img/banner/banner-9.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="widget-banner card">
                                        <a href="http://ehsanghasimi.ir/" target="_top">
                                            <img class="img-fluid" src="img/banner/banner-10.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="widget widget-product card">
                                <header class="card-header">
                                    <h3 class="card-title">
                                        <span>کامپیوتر و لوازم جانبی</span>
                                    </h3>
                                    <a href="http://ehsanghasimi.ir/" class="view-all">مشاهده همه</a>
                                </header>
                                <div class="product-carousel owl-carousel owl-theme">
                                    <div class="item">
                                        <a href="http://ehsanghasimi.ir/">
                                            <img src="img/product-slider/60eb20-200x200.jpg"
                                                 class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="http://ehsanghasimi.ir/">لپ تاپ ۱۱٫۶ اینچی دل مدل INSPIRON 3168 -AC B</a>
                                        </h2>
                                        <div class="price">
                                            <del><span>4,299,000<span>تومان</span></span></del>
                                            <ins><span>4,180,000<span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="http://ehsanghasimi.ir/">
                                            <img src="img/product-slider/4ff777-200x200.jpg"
                                                 class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="http://ehsanghasimi.ir/">لپ تاپ ۱۴ اینچی دل مدل vostro 5471</a>
                                        </h2>
                                        <div class="price">
                                            <del><span>6,890,000<span>تومان</span></span></del>
                                            <ins><span>6,580,000<span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="http://ehsanghasimi.ir/">
                                            <img src="img/product-slider/35a2b8-200x200.jpg"
                                                 class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="http://ehsanghasimi.ir/">لپ تاپ ۱۵ اینچی دل مدل Latitude 5580</a>
                                        </h2>
                                        <div class="price">
                                            <del><span>4,799,000<span>تومان</span></span></del>
                                            <ins><span>4,699,000<span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="http://ehsanghasimi.ir/">
                                            <img src="img/product-slider/9b3da9-200x200.jpg"
                                                 class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="http://ehsanghasimi.ir/">لپ تاپ ۱۵ اینچی دل مدل INSPIRON 15-3567 - I</a>
                                        </h2>
                                        <div class="price">
                                            <span>2,780,000<span>تومان</span></span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="http://ehsanghasimi.ir/">
                                            <img src="img/product-slider/c8297f-200x200.jpg"
                                                 class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="http://ehsanghasimi.ir/">لپ تاپ ۱۵ اینچی دل مدل INSPIRON 7577 - D</a>
                                        </h2>
                                        <div class="price">
                                            <del><span>8,999,000<span>تومان</span></span></del>
                                            <ins><span>8,899,000<span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="http://ehsanghasimi.ir/">
                                            <img src="img/product-slider/a579bb-200x200.jpg"
                                                 class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="http://ehsanghasimi.ir/">لپ تاپ ۱۵ اینچی دل مدل Inspiron 15-5570 - B</a>
                                        </h2>
                                        <div class="price">
                                            <span>4,279,000<span>تومان</span></span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="http://ehsanghasimi.ir/">
                                            <img src="img/product-slider/19a2cc-200x200.jpg"
                                                 class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="http://ehsanghasimi.ir/">لپ تاپ ۱۵ اینچی دل مدل XPS 15-9560</a>
                                        </h2>
                                        <div class="price">
                                            <span>18,450,000<span>تومان</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="widget widget-product card">
                                <header class="card-header">
                                    <h3 class="card-title">
                                        <span>کامپیوتر و لوازم جانبی</span>
                                    </h3>
                                    <a href="http://ehsanghasimi.ir/" class="view-all">مشاهده همه</a>
                                </header>
                                <div class="product-carousel owl-carousel owl-theme">
                                    <div class="item">
                                        <a href="http://ehsanghasimi.ir/">
                                            <img src="img/product-slider/60eb20-200x200.jpg"
                                                 class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="http://ehsanghasimi.ir/">لپ تاپ ۱۱٫۶ اینچی دل مدل INSPIRON 3168 -AC B</a>
                                        </h2>
                                        <div class="price">
                                            <del><span>4,299,000<span>تومان</span></span></del>
                                            <ins><span>4,180,000<span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="http://ehsanghasimi.ir/">
                                            <img src="img/product-slider/4ff777-200x200.jpg"
                                                 class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="http://ehsanghasimi.ir/">لپ تاپ ۱۴ اینچی دل مدل vostro 5471</a>
                                        </h2>
                                        <div class="price">
                                            <del><span>6,890,000<span>تومان</span></span></del>
                                            <ins><span>6,580,000<span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="http://ehsanghasimi.ir/">
                                            <img src="img/product-slider/35a2b8-200x200.jpg"
                                                 class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="http://ehsanghasimi.ir/">لپ تاپ ۱۵ اینچی دل مدل Latitude 5580</a>
                                        </h2>
                                        <div class="price">
                                            <del><span>4,799,000<span>تومان</span></span></del>
                                            <ins><span>4,699,000<span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="http://ehsanghasimi.ir/">
                                            <img src="img/product-slider/9b3da9-200x200.jpg"
                                                 class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="http://ehsanghasimi.ir/">لپ تاپ ۱۵ اینچی دل مدل INSPIRON 15-3567 - I</a>
                                        </h2>
                                        <div class="price">
                                            <span>2,780,000<span>تومان</span></span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="http://ehsanghasimi.ir/">
                                            <img src="img/product-slider/c8297f-200x200.jpg"
                                                 class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="http://ehsanghasimi.ir/">لپ تاپ ۱۵ اینچی دل مدل INSPIRON 7577 - D</a>
                                        </h2>
                                        <div class="price">
                                            <del><span>8,999,000<span>تومان</span></span></del>
                                            <ins><span>8,899,000<span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="http://ehsanghasimi.ir/">
                                            <img src="img/product-slider/a579bb-200x200.jpg"
                                                 class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="http://ehsanghasimi.ir/">لپ تاپ ۱۵ اینچی دل مدل Inspiron 15-5570 - B</a>
                                        </h2>
                                        <div class="price">
                                            <span>4,279,000<span>تومان</span></span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="http://ehsanghasimi.ir/">
                                            <img src="img/product-slider/19a2cc-200x200.jpg"
                                                 class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="http://ehsanghasimi.ir/">لپ تاپ ۱۵ اینچی دل مدل XPS 15-9560</a>
                                        </h2>
                                        <div class="price">
                                            <span>18,450,000<span>تومان</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row banner-ads">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12">
                                    <div class="widget widget-banner card">
                                        <a href="http://ehsanghasimi.ir/" target="_blank">
                                            <img class="img-fluid" src="img/banner/banner-11.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="widget widget-product card">
                                <header class="card-header">
                                    <h3 class="card-title">
                                        <span>کامپیوتر و لوازم جانبی</span>
                                    </h3>
                                    <a href="http://ehsanghasimi.ir/" class="view-all">مشاهده همه</a>
                                </header>
                                <div class="product-carousel owl-carousel owl-theme">
                                    <div class="item">
                                        <a href="http://ehsanghasimi.ir/">
                                            <img src="img/product-slider/60eb20-200x200.jpg"
                                                 class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="http://ehsanghasimi.ir/">لپ تاپ ۱۱٫۶ اینچی دل مدل INSPIRON 3168 -AC B</a>
                                        </h2>
                                        <div class="price">
                                            <del><span>4,299,000<span>تومان</span></span></del>
                                            <ins><span>4,180,000<span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="http://ehsanghasimi.ir/">
                                            <img src="img/product-slider/4ff777-200x200.jpg"
                                                 class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="http://ehsanghasimi.ir/">لپ تاپ ۱۴ اینچی دل مدل vostro 5471</a>
                                        </h2>
                                        <div class="price">
                                            <del><span>6,890,000<span>تومان</span></span></del>
                                            <ins><span>6,580,000<span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="http://ehsanghasimi.ir/">
                                            <img src="img/product-slider/35a2b8-200x200.jpg"
                                                 class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="http://ehsanghasimi.ir/">لپ تاپ ۱۵ اینچی دل مدل Latitude 5580</a>
                                        </h2>
                                        <div class="price">
                                            <del><span>4,799,000<span>تومان</span></span></del>
                                            <ins><span>4,699,000<span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="http://ehsanghasimi.ir/">
                                            <img src="img/product-slider/9b3da9-200x200.jpg"
                                                 class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="http://ehsanghasimi.ir/">لپ تاپ ۱۵ اینچی دل مدل INSPIRON 15-3567 - I</a>
                                        </h2>
                                        <div class="price">
                                            <span>2,780,000<span>تومان</span></span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="http://ehsanghasimi.ir/">
                                            <img src="img/product-slider/c8297f-200x200.jpg"
                                                 class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="http://ehsanghasimi.ir/">لپ تاپ ۱۵ اینچی دل مدل INSPIRON 7577 - D</a>
                                        </h2>
                                        <div class="price">
                                            <del><span>8,999,000<span>تومان</span></span></del>
                                            <ins><span>8,899,000<span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="http://ehsanghasimi.ir/">
                                            <img src="img/product-slider/a579bb-200x200.jpg"
                                                 class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="http://ehsanghasimi.ir/">لپ تاپ ۱۵ اینچی دل مدل Inspiron 15-5570 - B</a>
                                        </h2>
                                        <div class="price">
                                            <span>4,279,000<span>تومان</span></span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="http://ehsanghasimi.ir/">
                                            <img src="img/product-slider/19a2cc-200x200.jpg"
                                                 class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="http://ehsanghasimi.ir/">لپ تاپ ۱۵ اینچی دل مدل XPS 15-9560</a>
                                        </h2>
                                        <div class="price">
                                            <span>18,450,000<span>تومان</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <footer class="main-footer default">
        <div class="back-to-top">
            <a href="http://ehsanghasimi.ir/"><span class="icon"><i class="now-ui-icons arrows-1_minimal-up"></i></span> <span>بازگشت به
                        بالا</span></a>
        </div>
        <div class="container">
            <div class="footer-services">
                <div class="row">
                    <div class="service-item col">
                        <a href="http://ehsanghasimi.ir/" target="_blank">
                            <img src="img/svg/delivery.svg">
                        </a>
                        <p>تحویل اکسپرس</p>
                    </div>
                    <div class="service-item col">
                        <a href="http://ehsanghasimi.ir/" target="_blank">
                            <img src="img/svg/contact-us.svg">
                        </a>
                        <p>پشتیبانی 24 ساعته</p>
                    </div>
                    <div class="service-item col">
                        <a href="http://ehsanghasimi.ir/" target="_blank">
                            <img src="img/svg/payment-terms.svg">
                        </a>
                        <p>پرداخت درمحل</p>
                    </div>
                    <div class="service-item col">
                        <a href="http://ehsanghasimi.ir/" target="_blank">
                            <img src="img/svg/return-policy.svg">
                        </a>
                        <p>۷ روز ضمانت بازگشت</p>
                    </div>
                    <div class="service-item col">
                        <a href="http://ehsanghasimi.ir/" target="_blank">
                            <img src="img/svg/origin-guarantee.svg">
                        </a>
                        <p>ضمانت اصل بودن کالا</p>
                    </div>
                </div>
            </div>
            <div class="footer-widgets">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="widget-menu widget card">
                            <header class="card-header">
                                <h3 class="card-title">راهنمای خرید از دیجی کالا</h3>
                            </header>
                            <ul class="footer-menu">
                                <li>
                                    <a href="http://ehsanghasimi.ir/">نحوه ثبت سفارش</a>
                                </li>
                                <li>
                                    <a href="http://ehsanghasimi.ir/">رویه ارسال سفارش</a>
                                </li>
                                <li>
                                    <a href="http://ehsanghasimi.ir/">شیوه‌های پرداخت</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="widget-menu widget card">
                            <header class="card-header">
                                <h3 class="card-title">خدمات مشتریان</h3>
                            </header>
                            <ul class="footer-menu">
                                <li>
                                    <a href="http://ehsanghasimi.ir/">پاسخ به پرسش‌های متداول</a>
                                </li>
                                <li>
                                    <a href="http://ehsanghasimi.ir/">رویه‌های بازگرداندن کالا</a>
                                </li>
                                <li>
                                    <a href="http://ehsanghasimi.ir/">شرایط استفاده</a>
                                </li>
                                <li>
                                    <a href="http://ehsanghasimi.ir/">حریم خصوصی</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="widget-menu widget card">
                            <header class="card-header">
                                <h3 class="card-title">با دیجی کالا</h3>
                            </header>
                            <ul class="footer-menu">
                                <li>
                                    <a href="http://ehsanghasimi.ir/">فروش در دیجی کالا</a>
                                </li>
                                <li>
                                    <a href="http://ehsanghasimi.ir/">همکاری با سازمان‌ها</a>
                                </li>
                                <li>
                                    <a href="http://ehsanghasimi.ir/">فرصت‌های شغلی</a>
                                </li>
                                <li>
                                    <a href="http://ehsanghasimi.ir/">تماس با دیجی کالا</a>
                                </li>
                                <li>
                                    <a href="http://ehsanghasimi.ir/">درباره دیجی کالا</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="newsletter">
                            <p>از تخفیف‌ها و جدیدترین‌های فروشگاه باخبر شوید:</p>
                            <form action="">
                                <input type="email" class="form-control"
                                       placeholder="آدرس ایمیل خود را وارد کنید...">
                                <input type="submit" class="btn btn-primary" value="ارسال">
                            </form>
                        </div>
                        <div class="socials">
                            <p>ما را در شبکه های اجتماعی دنبال کنید.</p>
                            <div class="footer-social">
                                <a href="http://ehsanghasimi.ir/" target="_blank"><i class="fa fa-instagram"></i>اینستاگرام دیجی کالا</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="info">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <span>هفت روز هفته ، 24 ساعت شبانه‌روز پاسخگوی شما هستیم.</span>
                    </div>
                    <div class="col-12 col-lg-2">شماره تماس: 021-123456789</div>
                    <div class="col-12 col-lg-2">آدرس ایمیل:<a href="http://ehsanghasimi.ir/">info@digikala.com</a></div>
                    <div class="col-12 col-lg-4 text-center">
                        <a href="http://ehsanghasimi.ir/" target="_blank"><img src="img/bazzar.png" width="159" height="48"
                                                                             alt=""></a>
                        <a href="http://ehsanghasimi.ir/" target="_blank"><img src="img/sibapp.png" width="159" height="48"
                                                                             alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="description">
            <div class="container">
                <div class="row">
                    <div class="site-description col-12 col-lg-7">
                        <h1 class="site-title">فروشگاه اینترنتی دیجی کالا، بررسی، انتخاب و خرید آنلاین</h1>
                        <p>
                            دیجی کالا به عنوان یکی از قدیمی‌ترین فروشگاه های اینترنتی با بیش از یک دهه تجربه، با
                            پایبندی به سه اصل کلیدی، پرداخت در
                            محل، 7 روز ضمانت بازگشت کالا و تضمین اصل‌بودن کالا، موفق شده تا همگام با فروشگاه‌های
                            معتبر جهان، به بزرگ‌ترین فروشگاه
                            اینترنتی ایران تبدیل شود. به محض ورود به دیجی کالا با یک سایت پر از کالا رو به رو
                            می‌شوید! هر آنچه که نیاز دارید و به
                            ذهن شما خطور می‌کند در اینجا پیدا خواهید کرد.
                        </p>
                    </div>
                    <div class="symbol col-12 col-lg-5">
                        <a href="http://ehsanghasimi.ir/" target="_blank"><img src="img/symbol-01.png" alt=""></a>
                        <a href="http://ehsanghasimi.ir/" target="_blank"><img src="img/symbol-02.png" alt=""></a>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <ul class="footer-partners default">
                                <li class="col-md-3 col-sm-6">
                                    <a href=""><img src="img/footer/1.svg" alt=""></a>
                                </li>
                                <li class="col-md-3 col-sm-6">
                                    <a href=""><img src="img/footer/2.svg" alt=""></a>
                                </li>
                                <li class="col-md-3 col-sm-6">
                                    <a href=""><img src="img/footer/3.svg" alt=""></a>
                                </li>
                                <li class="col-md-3 col-sm-6">
                                    <a href=""><img src="img/footer/4.svg" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <p>
                    استفاده از مطالب فروشگاه اینترنتی دیجی کالا فقط برای مقاصد غیرتجاری و با ذکر منبع بلامانع است.
                    کلیه حقوق این سایت متعلق
                    به شرکت نوآوران فن آوازه (فروشگاه آنلاین دیجی کالا) می‌باشد.
                </p>
            </div>
        </div>
    </footer>
</div>
@endsection
