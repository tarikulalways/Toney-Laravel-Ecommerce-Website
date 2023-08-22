@extends('bakend.layout.master')
@section('title', 'Deshbord')
@section('brd_content', 'Dahsbord')

@section('admin_content')

        </div>
    </div>
    <!-- Title and Top Buttons End -->
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <div class="dropdown-as-select me-3" data-setActive="false" data-childSelector="span">
                    <a class="pe-0 pt-0 align-top lh-1 dropdown-toggle" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false" aria-haspopup="true">
                        <span class="small-title"></span>
                    </a>
                    <div class="dropdown-menu font-standard">
                        <div class="nav flex-column" role="tablist">
                            <a class="active dropdown-item text-medium" href="#" aria-selected="true"
                                role="tab">Today's</a>
                            <a class="dropdown-item text-medium" href="#" aria-selected="false"
                                role="tab">Weekly</a>
                            <a class="dropdown-item text-medium" href="#" aria-selected="false"
                                role="tab">Monthly</a>
                            <a class="dropdown-item text-medium" href="#" aria-selected="false"
                                role="tab">Yearly</a>
                        </div>
                    </div>
                </div>
                <h2 class="small-title">Stats</h2>
            </div>
            <div class="mb-5">
                <div class="row g-2">
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="card h-100 hover-scale-up cursor-pointer">
                            <div class="card-body d-flex flex-column align-items-center">
                                <div
                                    class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                    <i data-cs-icon="dollar" class="text-primary"></i>
                                </div>
                                <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">EARNINGS</div>
                                <div class="text-primary cta-4">$ 315.20</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="card h-100 hover-scale-up cursor-pointer">
                            <div class="card-body d-flex flex-column align-items-center">
                                <div
                                    class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                    <i data-cs-icon="basket" class="text-primary"></i>
                                </div>
                                <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">ORDERS</div>
                                <div class="text-primary cta-4">16</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="card h-100 hover-scale-up cursor-pointer">
                            <div class="card-body d-flex flex-column align-items-center">
                                <div
                                    class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                    <i data-cs-icon="server" class="text-primary"></i>
                                </div>
                                <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">SESSIONS</div>
                                <div class="text-primary cta-4">463</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="card h-100 hover-scale-up cursor-pointer">
                            <div class="card-body d-flex flex-column align-items-center">
                                <div
                                    class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                    <i data-cs-icon="user" class="text-primary"></i>
                                </div>
                                <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">USERS</div>
                                <div class="text-primary cta-4">17</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="card h-100 hover-scale-up cursor-pointer">
                            <div class="card-body d-flex flex-column align-items-center">
                                <div
                                    class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                    <i data-cs-icon="arrow-top-left" class="text-primary"></i>
                                </div>
                                <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">RETURNS</div>
                                <div class="text-primary cta-4">2</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="card h-100 hover-scale-up cursor-pointer">
                            <div class="card-body d-flex flex-column align-items-center">
                                <div
                                    class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                    <i data-cs-icon="message" class="text-primary"></i>
                                </div>
                                <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">COMMENTS</div>
                                <div class="text-primary cta-4">5</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Recent Orders Start -->
        <div class="col-md-12 mb-5">
            <h2 class="small-title">Recent Orders</h2>
            <div class="mb-n2 scroll-out">
                <div class="scroll-by-count" data-count="6">
                    <div class="card mb-2 sh-15 sh-md-6">
                        <div class="card-body pt-0 pb-0 h-100">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
                                    <a href="Orders.Detail.html" class="body-link stretched-link">Order #54129</a>
                                </div>
                                <div
                                    class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
                                    <span class="badge bg-outline-primary me-1">PENDING</span>
                                </div>
                                <div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
                                    <span>
                                        <span class="text-small">$</span>
                                        17.35
                                    </span>
                                </div>
                                <div
                                    class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">
                                    Today - 13:20</div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2 sh-15 sh-md-6">
                        <div class="card-body pt-0 pb-0 h-100">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
                                    <a href="Orders.Detail.html" class="body-link stretched-link">Order #54128</a>
                                </div>
                                <div
                                    class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
                                    <span class="badge bg-outline-primary me-1">PENDING</span>
                                </div>
                                <div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
                                    <span>
                                        <span class="text-small">$</span>
                                        145.20
                                    </span>
                                </div>
                                <div
                                    class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">
                                    Today - 11:32</div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2 sh-15 sh-md-6">
                        <div class="card-body pt-0 pb-0 h-100">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
                                    <a href="Orders.Detail.html" class="body-link stretched-link">Order #54127</a>
                                </div>
                                <div
                                    class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
                                    <span class="badge bg-outline-primary me-1">PENDING</span>
                                </div>
                                <div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
                                    <span>
                                        <span class="text-small">$</span>
                                        110.85
                                    </span>
                                </div>
                                <div
                                    class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">
                                    Today - 11:20</div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2 sh-15 sh-md-6">
                        <div class="card-body pt-0 pb-0 h-100">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
                                    <a href="Orders.Detail.html" class="body-link stretched-link">Order #54126</a>
                                </div>
                                <div
                                    class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
                                    <span class="badge bg-outline-primary me-1">PENDING</span>
                                </div>
                                <div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
                                    <span>
                                        <span class="text-small">$</span>
                                        58.00
                                    </span>
                                </div>
                                <div
                                    class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">
                                    Today - 10:20</div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2 sh-15 sh-md-6">
                        <div class="card-body pt-0 pb-0 h-100">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
                                    <a href="Orders.Detail.html" class="body-link stretched-link">Order #54125</a>
                                </div>
                                <div
                                    class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
                                    <span class="badge bg-outline-secondary me-1">SHIPPED</span>
                                </div>
                                <div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
                                    <span>
                                        <span class="text-small">$</span>
                                        22.05
                                    </span>
                                </div>
                                <div
                                    class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">
                                    Today - 07:30</div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-2 sh-15 sh-md-6">
                        <div class="card-body pt-0 pb-0 h-100">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
                                    <a href="Orders.Detail.html" class="body-link stretched-link">Order #54124</a>
                                </div>
                                <div
                                    class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
                                    <span class="badge bg-outline-secondary me-1">SHIPPED</span>
                                </div>
                                <div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
                                    <span>
                                        <span class="text-small">$</span>
                                        14.25
                                    </span>
                                </div>
                                <div
                                    class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">
                                    Monday - 17:30</div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-2 sh-15 sh-md-6">
                        <div class="card-body pt-0 pb-0 h-100">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
                                    <a href="Orders.Detail.html" class="body-link stretched-link">Order #54123</a>
                                </div>
                                <div
                                    class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
                                    <span class="badge bg-outline-quaternary me-1">DELIVERED</span>
                                </div>
                                <div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
                                    <span>
                                        <span class="text-small">$</span>
                                        42.00
                                    </span>
                                </div>
                                <div
                                    class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">
                                    Monday - 11:25</div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-2 sh-15 sh-md-6">
                        <div class="card-body pt-0 pb-0 h-100">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
                                    <a href="Orders.Detail.html" class="body-link stretched-link">Order #54122</a>
                                </div>
                                <div
                                    class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
                                    <span class="badge bg-outline-quaternary me-1">DELIVERED</span>
                                </div>
                                <div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
                                    <span>
                                        <span class="text-small">$</span>
                                        63.25
                                    </span>
                                </div>
                                <div
                                    class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">
                                    Monday - 15:20</div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-2 sh-15 sh-md-6">
                        <div class="card-body pt-0 pb-0 h-100">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
                                    <a href="Orders.Detail.html" class="body-link stretched-link">Order #54121</a>
                                </div>
                                <div
                                    class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
                                    <span class="badge bg-outline-quaternary me-1">DELIVERED</span>
                                </div>
                                <div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
                                    <span>
                                        <span class="text-small">$</span>
                                        74.00
                                    </span>
                                </div>
                                <div
                                    class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">
                                    Monday - 13:10</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Recent Orders End -->
    </div>

@endsection
