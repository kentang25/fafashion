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
            <a href="<?= base_url('logout') ?>">logout</a>
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
                                </ul>
                            </li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="<?= base_url('kontak') ?>">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                        
                        <ul class="header__right__widget">
                        <li>
                            <form action="<?= site_url('fafashion/f_shop/search') ?>" method="GET" style="display: inline;">
                                <input type="text" name="search" placeholder="Search..." style="border: 1px solid; border-radius:5px;">
                                <button type="submit" style="background: none; border: none; cursor: pointer;">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </form>
                        </li>

                            <li><a href="#"><i class="fa-solid fa-heart"></i>
                                <div class="tip">2</div>
                            </a></li>
                            <!-- <li><a href="#"><i class="fa-solid fa-bag-shopping"></i>
                                <div class="tip">2</div>
                            </a></li> -->
                            <li><a href="<?= base_url('logout') ?>"><i class="fa fa-sign-out"></i>
                                <!-- <div class="tip"></div> -->
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

    <style>
        li form {
            display: flex;
            align-items: center;
        }

        li input[type="text"] {
            padding: 5px;
            font-size: 14px;
        }

        li button {
            padding: 5px;
            cursor: pointer;
        }

    </style>