<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><a href="#"><i class="fa-solid fa-magnifying-glass"></i></li>
            <li><a href="#"><i class="fa-solid fa-heart"></i>
                <div class="tip">2</div>
            </a></li>
            <li><a href="#"><i class="fa-solid fa-bag-shopping"></i>
                <div class="tip">2</div>
            </a></li>
        </ul>
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <a href="#">Login</a>
            <a href="#">Register</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <h3>Fafashion</h3>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="<?= base_url('fafashion') ?>">Home</a></li>
                            <li><a href="<?= base_url('wanita') ?>">Women’s</a></li>
                            <li><a href="<?= base_url('pria') ?>">Men’s</a></li>
                            <li><a href="<?= base_url('shop') ?>">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./product-details.html">Product Details</a></li>
                                    <li><a href="<?= base_url('cart-shop') ?>">Shop Cart</a></li>
                                    <li><a href="<?= base_url('pembayaran/order') ?>">Checkout</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="<?= base_url('kontak') ?>">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                        <div class="header__right__auth">
                            <a href="#">Login</a>
                            <a href="#">Register</a>
                        </div>
                        <ul class="header__right__widget">
                            <li><a href="#"><i class="fa-solid fa-magnifying-glass"></i></li>
                            <li><a href="#"><i class="fa-solid fa-heart"></i>
                                <div class="tip">2</div>
                            </a></li>
                            <li><a href="#"><i class="fa-solid fa-bag-shopping"></i>
                                <div class="tip">2</div>
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->