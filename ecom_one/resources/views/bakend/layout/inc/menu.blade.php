<div id="nav" class="nav-container d-flex">
    <div class="nav-content d-flex">
        <!-- Logo Start -->
        <div class="logo position-relative">
            <a href="Dashboard.html">
                <!-- Logo can be added directly -->
                <!-- <img src="img/logo/logo-white.svg" alt="logo" /> -->

                <!-- Or added via css to provide different ones for different color themes -->
                <div class="img"></div>
            </a>
        </div>
        <!-- Logo End -->

        <!-- User Menu Start -->
        <div class="user-container d-flex">
            <a href="{{ url('/dashbord') }}" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <img class="profile" alt="profile" src="{{ asset('assets/bakend') }}/img/profile/profile-11.jpg" />
                <div class="name">Admin</div>
            </a>
            <div class="dropdown-menu dropdown-menu-end user-menu wide">
                <div class="row mb-1 ms-0 me-0">
                    <div class="col-12 pe-1 ps-1">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">
                                    <i data-cs-icon="gear" class="me-2" data-cs-size="17"></i>
                                    <span class="align-middle">Settings</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i data-cs-icon="logout" class="me-2" data-cs-size="17"></i>
                                    <span class="align-middle">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- User Menu End -->

        <!-- Menu Start -->
        <div class="menu-container flex-grow-1">
            <ul id="menu" class="menu">
                <li>
                    <a href="{{ url('/admin/dashbord') }}">
                        <i data-cs-icon="shop" class="icon" data-cs-size="18"></i>
                        <span class="label">Dashboard</span>
                    </a>
                </li>
                {{-- category operation --}}
                <li>
                    <a href="#category" data-href="category.html">
                        <i data-cs-icon="cupcake" class="icon" data-cs-size="18"></i>
                        <span class="label">Category</span>
                    </a>
                    <ul id="category">
                        <li>
                            <a href="{{ route('create.category') }}">
                                <span class="label">List</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('index.category') }}">
                                <span class="label">Detail</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#products" data-href="Products.html">
                        <i data-cs-icon="cupcake" class="icon" data-cs-size="18"></i>
                        <span class="label">Products</span>
                    </a>
                    <ul id="products">
                        <li>
                            <a href="{{ route('create.product') }}">
                                <span class="label">List</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('index.product') }}">
                                <span class="label">Detail</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#testimonial" data-href="testimonial.html">
                        <i data-cs-icon="cupcake" class="icon" data-cs-size="18"></i>
                        <span class="label">Testimonial</span>
                    </a>
                    <ul id="testimonial">
                        <li>
                            <a href="{{ route('create.testimonial') }}">
                                <span class="label">List</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('index.testimonial') }}">
                                <span class="label">Detail</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#orders" data-href="Orders.html">
                        <i data-cs-icon="cart" class="icon" data-cs-size="18"></i>
                        <span class="label">Orders</span>
                    </a>
                    <ul id="orders">
                        <li>
                            <a href="Orders.List.html">
                                <span class="label">List</span>
                            </a>
                        </li>
                        <li>
                            <a href="Orders.Detail.html">
                                <span class="label">Detail</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#customers" data-href="Customers.html">
                        <i data-cs-icon="user" class="icon" data-cs-size="18"></i>
                        <span class="label">Customers</span>
                    </a>
                    <ul id="customers">
                        <li>
                            <a href="Customers.List.html">
                                <span class="label">List</span>
                            </a>
                        </li>
                        <li>
                            <a href="Customers.Detail.html">
                                <span class="label">Detail</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#storefront" data-href="Storefront.html">
                        <i data-cs-icon="screen" class="icon" data-cs-size="18"></i>
                        <span class="label">Storefront</span>
                    </a>
                    <ul id="storefront">
                        <li>
                            <a href="Storefront.Home.html">
                                <span class="label">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="Storefront.Filters.html">
                                <span class="label">Filters</span>
                            </a>
                        </li>
                        <li>
                            <a href="Storefront.Categories.html">
                                <span class="label">Categories</span>
                            </a>
                        </li>
                        <li>
                            <a href="Storefront.Detail.html">
                                <span class="label">Detail</span>
                            </a>
                        </li>
                        <li>
                            <a href="Storefront.Cart.html">
                                <span class="label">Cart</span>
                            </a>
                        </li>
                        <li>
                            <a href="Storefront.Checkout.html">
                                <span class="label">Checkout</span>
                            </a>
                        </li>
                        <li>
                            <a href="Storefront.Invoice.html">
                                <span class="label">Invoice</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="Shipping.html">
                        <i data-cs-icon="shipping" class="icon" data-cs-size="18"></i>
                        <span class="label">Shipping</span>
                    </a>
                </li>
                <li>
                    <a href="Discount.html">
                        <i data-cs-icon="tag" class="icon" data-cs-size="18"></i>
                        <span class="label">Discount</span>
                    </a>
                </li>
                <li>
                    <a href="Settings.html">
                        <i data-cs-icon="gear" class="icon" data-cs-size="18"></i>
                        <span class="label">Settings</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Menu End -->

        <!-- Mobile Buttons Start -->
        <div class="mobile-buttons-container">
            <!-- Menu Button Start -->
            <a href="#" id="mobileMenuButton" class="menu-button">
                <i data-cs-icon="menu"></i>
            </a>
            <!-- Menu Button End -->
        </div>
        <!-- Mobile Buttons End -->
    </div>
    <div class="nav-shadow"></div>
</div>
