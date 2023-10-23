@extends('layouts.app')

@section('content')
<div class="container clearfix">

    <div class="row align-items-stretch gutter-20 mb-5 min-vh-60">
        <div class="col-xl-8 min-vh-50">
            <div class="fslider h-100" data-arrows="false">
                <div class="flexslider">
                    <div class="slider-wrap">
                        <div class="slide">
                            <a href="#">
                                <img src="images/shop/slider/1.jpg" alt="Shop Image">
                            </a>
                        </div>
                        <div class="slide">
                            <a href="#">
                                <img src="images/shop/slider/2.jpg" alt="Shop Image">
                            </a>
                        </div>
                        <div class="slide">
                            <a href="#">
                                <img src="images/shop/slider/3.jpg" alt="Shop Image">
                            </a>
                        </div>
                        <div class="slide">
                            <a href="#">
                                <img src="images/shop/slider/4.jpg" alt="Shop Image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="row align-items-stretch gutter-20 min-vh-25 h-100">
                <div class="col-12 col-md-6 col-xl-12 min-vh-25 min-vh-md-0">
                    <a href="#" class="grid-inner d-block h-100" style="background-image: url('images/shop/banners/7.jpg');"></a>
                </div>

                <div class="col-12 col-md-6 col-xl-12 min-vh-25 min-vh-md-0 pb-xl-0">
                    <a href="#" class="grid-inner d-block h-100" style="background-image: url('images/shop/banners/3.jpg');"></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="promo parallax promo-full bottommargin-lg" style="background-image: url({{asset('images/parallax/3.jpg')}});" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
    <div class="container clearfix">
        <div class="row align-items-center">
            <div class="col-12 col-lg">
                <h3>Get <span>30%</span> off on orders of $29 or more. Use Coupon: <span>SHOP30</span></h3>
                <span>Sale available on selected Designer Brands that include Apparels, Footwear, Fashion Accessories &amp; Watches.</span>
            </div>
            <div class="col-12 col-lg-auto mt-4 mt-lg-0">
                <a href="#" class="button button-large button-circle m-0">Start Shopping</a>
            </div>
        </div>
    </div>
</div>

<div class="clear"></div>

<div class="container clearfix">
    <div class="tabs topmargin-lg clearfix" id="tab-3">

        <ul class="tab-nav clearfix">
            <li><a href="#tabs-9">New Arrivals</a></li>
            <li><a href="#tabs-10">Best sellers</a></li>
            <li><a href="#tabs-11">You may like</a></li>
        </ul>

        <div class="tab-container">

            <div class="tab-content" id="tabs-9">

                <div class="shop row gutter-30">

                    <div class="product col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="grid-inner">
                            <div class="product-image">
                                <a href="#"><img src="images/shop/dress/1.jpg" alt="Checked Short Dress"></a>
                                <a href="#"><img src="images/shop/dress/1-1.jpg" alt="Checked Short Dress"></a>
                                <div class="sale-flash badge bg-success p-2">50% Off*</div>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                        <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-basket"></i></a>
                                        <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg bg-transparent"></div>
                                </div>
                            </div>
                            <div class="product-desc">
                                <div class="product-title"><h3><a href="#">Checked Short Dress</a></h3></div>
                                <div class="product-price"><del>$24.99</del> <ins>$12.49</ins></div>
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-half-full"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="grid-inner">
                            <div class="product-image">
                                <a href="#"><img src="images/shop/pants/1-1.jpg" alt="Slim Fit Chinos"></a>
                                <a href="#"><img src="images/shop/pants/1.jpg" alt="Slim Fit Chinos"></a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                        <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-basket"></i></a>
                                        <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg bg-transparent"></div>
                                </div>
                            </div>
                            <div class="product-desc">
                                <div class="product-title"><h3><a href="#">Slim Fit Chinos</a></h3></div>
                                <div class="product-price">$39.99</div>
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-half-full"></i>
                                    <i class="icon-star-empty"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="grid-inner">
                            <div class="product-image">
                                <div class="fslider" data-arrows="false">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
                                            <div class="slide"><a href="#"><img src="{{asset('images/shop/shoes/1.jpg')}}" alt="Dark Brown Boots"></a></div>
                                            <div class="slide"><a href="#"><img src="{{asset('images/shop/shoes/1-1.jpg')}}" alt="Dark Brown Boots"></a></div>
                                            <div class="slide"><a href="#"><img src="{{asset('images/shop/shoes/1-2.jpg')}}" alt="Dark Brown Boots"></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                        <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-basket"></i></a>
                                        <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg bg-transparent"></div>
                                </div>
                            </div>
                            <div class="product-desc">
                                <div class="product-title"><h3><a href="#">Dark Brown Boots</a></h3></div>
                                <div class="product-price">$49</div>
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-empty"></i>
                                    <i class="icon-star-empty"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="grid-inner">
                            <div class="product-image">
                                <a href="#"><img src="images/shop/dress/2.jpg" alt="Light Blue Denim Dress"></a>
                                <a href="#"><img src="images/shop/dress/2-2.jpg" alt="Light Blue Denim Dress"></a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                        <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-basket"></i></a>
                                        <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg bg-transparent"></div>
                                </div>
                            </div>
                            <div class="product-desc">
                                <div class="product-title"><h3><a href="#">Light Blue Denim Dress</a></h3></div>
                                <div class="product-price">$19.95</div>
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-empty"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="tab-content" id="tabs-10">

                <div class="shop row gutter-30">

                    <div class="product col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="grid-inner">
                            <div class="product-image">
                                <a href="#"><img src="images/shop/sunglasses/1.jpg" alt="Unisex Sunglasses"></a>
                                <a href="#"><img src="images/shop/sunglasses/1-1.jpg" alt="Unisex Sunglasses"></a>
                                <div class="sale-flash badge bg-danger p-2">Sale!</div>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                        <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-basket"></i></a>
                                        <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg bg-transparent"></div>
                                </div>
                            </div>
                            <div class="product-desc">
                                <div class="product-title"><h3><a href="#">Unisex Sunglasses</a></h3></div>
                                <div class="product-price"><del>$19.99</del> <ins>$11.99</ins></div>
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-empty"></i>
                                    <i class="icon-star-empty"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="grid-inner">
                            <div class="product-image">
                                <a href="#"><img src="images/shop/tshirts/1.jpg" alt="Blue Round-Neck Tshirt"></a>
                                <a href="#"><img src="images/shop/tshirts/1-1.jpg" alt="Blue Round-Neck Tshirt"></a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                        <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-basket"></i></a>
                                        <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg bg-transparent"></div>
                                </div>
                            </div>
                            <div class="product-desc">
                                <div class="product-title"><h3><a href="#">Blue Round-Neck Tshirt</a></h3></div>
                                <div class="product-price">$9.99</div>
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-half-full"></i>
                                    <i class="icon-star-empty"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="grid-inner">
                            <div class="product-image">
                                <a href="#"><img src="images/shop/watches/1.jpg" alt="Silver Chrome Watch"></a>
                                <a href="#"><img src="images/shop/watches/1-1.jpg" alt="Silver Chrome Watch"></a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                        <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-basket"></i></a>
                                        <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg bg-transparent"></div>
                                </div>
                            </div>
                            <div class="product-desc">
                                <div class="product-title"><h3><a href="#">Silver Chrome Watch</a></h3></div>
                                <div class="product-price">$129.99</div>
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-half-full"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="grid-inner">
                            <div class="product-image">
                                <a href="#"><img src="images/shop/shoes/2.jpg" alt="Men Grey Casual Shoes"></a>
                                <a href="#"><img src="images/shop/shoes/2-1.jpg" alt="Men Grey Casual Shoes"></a>
                                <div class="sale-flash badge bg-danger p-2">Sale!</div>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                        <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-basket"></i></a>
                                        <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg bg-transparent"></div>
                                </div>
                            </div>
                            <div class="product-desc">
                                <div class="product-title"><h3><a href="#">Men Grey Casual Shoes</a></h3></div>
                                <div class="product-price"><del>$45.99</del> <ins>$39.49</ins></div>
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-half-full"></i>
                                    <i class="icon-star-empty"></i>
                                    <i class="icon-star-empty"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="tab-content" id="tabs-11">

                <div class="shop row gutter-30">

                    <div class="product col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="grid-inner">
                            <div class="product-image">
                                <div class="fslider" data-arrows="false">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
                                            <div class="slide"><a href="#"><img src="images/shop/dress/3.jpg" alt="Pink Printed Dress"></a></div>
                                            <div class="slide"><a href="#"><img src="images/shop/dress/3-1.jpg" alt="Pink Printed Dress"></a></div>
                                            <div class="slide"><a href="#"><img src="images/shop/dress/3-2.jpg" alt="Pink Printed Dress"></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                        <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-basket"></i></a>
                                        <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg bg-transparent"></div>
                                </div>
                            </div>
                            <div class="product-desc">
                                <div class="product-title"><h3><a href="#">Pink Printed Dress</a></h3></div>
                                <div class="product-price">$39.49</div>
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-empty"></i>
                                    <i class="icon-star-empty"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="grid-inner">
                            <div class="product-image">
                                <a href="#"><img src="images/shop/pants/5.jpg" alt="Green Trousers"></a>
                                <a href="#"><img src="images/shop/pants/5-1.jpg" alt="Green Trousers"></a>
                                <div class="sale-flash badge bg-danger p-2">Sale!</div>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                        <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-basket"></i></a>
                                        <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg bg-transparent"></div>
                                </div>
                            </div>
                            <div class="product-desc">
                                <div class="product-title"><h3><a href="#">Green Trousers</a></h3></div>
                                <div class="product-price"><del>$24.99</del> <ins>$21.99</ins></div>
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-half-full"></i>
                                    <i class="icon-star-empty"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="grid-inner">
                            <div class="product-image">
                                <a href="#"><img src="images/shop/sunglasses/2.jpg" alt="Men Aviator Sunglasses"></a>
                                <a href="#"><img src="images/shop/sunglasses/2-1.jpg" alt="Men Aviator Sunglasses"></a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                        <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-basket"></i></a>
                                        <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg bg-transparent"></div>
                                </div>
                            </div>
                            <div class="product-desc">
                                <div class="product-title"><h3><a href="#">Men Aviator Sunglasses</a></h3></div>
                                <div class="product-price">$13.49</div>
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-empty"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="grid-inner">
                            <div class="product-image">
                                <a href="#"><img src="images/shop/tshirts/4.jpg" alt="Black Polo Tshirt"></a>
                                <a href="#"><img src="images/shop/tshirts/4-1.jpg" alt="Black Polo Tshirt"></a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                        <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-basket"></i></a>
                                        <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg bg-transparent"></div>
                                </div>
                            </div>
                            <div class="product-desc">
                                <div class="product-title"><h3><a href="#">Black Polo Tshirt</a></h3></div>
                                <div class="product-price">$11.49</div>
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="clear bottommargin-sm"></div>

    <div class="row justify-content-center col-mb-50 mb-0">
        <div class="col-sm-6 col-lg-4">
            <div class="fancy-title title-border">
                <h4>About Us</h4>
            </div>
            <p>Jane Jacobs educate, leverage affiliate Martin Luther King Jr. agriculture conflict resolution dignity. Cooperation international progress non-partisan lasting change meaningful.</p>
        </div>

        <div class="col-sm-6 col-lg-4 subscribe-widget">
            <div class="fancy-title title-border">
                <h4>Subscribe for Offers</h4>
            </div>
            <p>Subscribe to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</p>
            <div class="widget-subscribe-form-result"></div>
            <form id="widget-subscribe-form2" action="include/subscribe.php" method="post" class="mb-0">
                <div class="input-group mx-auto">
                    <div class="input-group-text"><i class="icon-email2"></i></div>
                    <input type="email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                    <button class="btn btn-secondary" type="submit">Subscribe</button>
                </div>
            </form>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="fancy-title title-border">
                <h4>Connect with Us</h4>
            </div>

            <a href="http://facebook.com/ranggacahyaw" class="social-icon si-facebook" data-bs-toggle="tooltip" target="blank" data-bs-placement="top" title="Facebook">
                <i class="icon-facebook"></i>
                <i class="icon-facebook"></i>
            </a>

            <a href="http://instagram.com/ranggacaw" class="social-icon si-instagram" data-bs-toggle="tooltip" target="blank" data-bs-placement="top" title="Instagram">
                <i class="icon-instagram"></i>
                <i class="icon-instagram"></i>
            </a>
            
            <a href="https://www.tiktok.com/@ranggacaw" class="social-icon si-tiktok" data-bs-toggle="tooltip" target="blank" data-bs-placement="top" title="tiktok">
                <i class="icon-tiktok"></i>
                <i class="icon-tiktok"></i>
            </a>

            <a href="https://youtube.com/@Ranggacaw" class="social-icon si-youtube" data-bs-toggle="tooltip" target="blank" data-bs-placement="top" title="Youtube">
                <i class="icon-youtube"></i>
                <i class="icon-youtube"></i>
            </a>
        </div>
    </div>

    <div class="clear"></div>

    <div class="fancy-title title-border title-center topmargin-sm">
        <h4>Popular Brands</h4>
    </div>

    <ul class="clients-grid grid-2 grid-sm-3 grid-md-6 mb-0">
        <li class="grid-item"><a href="#"><img src="{{asset('images/clients/logo/1.png')}}" alt="Clients"></a></li>
        <li class="grid-item"><a href="#"><img src="{{asset('images/clients/logo/2.png')}}" alt="Clients"></a></li>
        <li class="grid-item"><a href="#"><img src="{{asset('images/clients/logo/3.png')}}" alt="Clients"></a></li>
        <li class="grid-item"><a href="#"><img src="{{asset('images/clients/logo/4.png')}}" alt="Clients"></a></li>
        <li class="grid-item"><a href="#"><img src="{{asset('images/clients/logo/5.png')}}" alt="Clients"></a></li>
        <li class="grid-item"><a href="#"><img src="{{asset('images/clients/logo/6.png')}}" alt="Clients"></a></li>
        <li class="grid-item"><a href="#"><img src="{{asset('images/clients/logo/7.png')}}" alt="Clients"></a></li>
        <li class="grid-item"><a href="#"><img src="{{asset('images/clients/logo/8.png')}}" alt="Clients"></a></li>
        <li class="grid-item"><a href="#"><img src="{{asset('images/clients/logo/9.png')}}" alt="Clients"></a></li>
        <li class="grid-item"><a href="#"><img src="{{asset('images/clients/logo/10.png')}}" alt="Clients"></a></li>
        <li class="grid-item"><a href="#"><img src="{{asset('images/clients/logo/11.png')}}" alt="Clients"></a></li>
        <li class="grid-item"><a href="#"><img src="{{asset('images/clients/logo/12.png')}}" alt="Clients"></a></li>
        <li class="grid-item"><a href="#"><img src="{{asset('images/clients/logo/13.png')}}" alt="Clients"></a></li>
        <li class="grid-item"><a href="#"><img src="{{asset('images/clients/logo/14.png')}}" alt="Clients"></a></li>
        <li class="grid-item"><a href="#"><img src="{{asset('images/clients/logo/15.png')}}" alt="Clients"></a></li>
        <li class="grid-item"><a href="#"><img src="{{asset('images/clients/logo/16.png')}}" alt="Clients"></a></li>
        <li class="grid-item"><a href="#"><img src="{{asset('images/clients/logo/19.png')}}" alt="Clients"></a></li>
        <li class="grid-item"><a href="#"><img src="{{asset('images/clients/logo/18.png')}}" alt="Clients"></a></li>
    </ul>

</div>

<div class="section mb-0">
    <div class="container">

        <div class="row col-mb-50">
            <div class="col-sm-6 col-lg-3">
                <div class="feature-box fbox-plain fbox-dark fbox-sm">
                    <div class="fbox-icon">
                        <i class="icon-thumbs-up2"></i>
                    </div>
                    <div class="fbox-content">
                        <h3>100% Original</h3>
                        <p class="mt-0">We guarantee you the sale of Original Brands.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="feature-box fbox-plain fbox-dark fbox-sm">
                    <div class="fbox-icon">
                        <i class="icon-credit-cards"></i>
                    </div>
                    <div class="fbox-content">
                        <h3>Payment Options</h3>
                        <p class="mt-0">We accept Visa, MasterCard and American Express.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="feature-box fbox-plain fbox-dark fbox-sm">
                    <div class="fbox-icon">
                        <i class="icon-truck2"></i>
                    </div>
                    <div class="fbox-content">
                        <h3>Free Shipping</h3>
                        <p class="mt-0">Free Delivery to 100+ Locations on orders above $40.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="feature-box fbox-plain fbox-dark fbox-sm">
                    <div class="fbox-icon">
                        <i class="icon-undo"></i>
                    </div>
                    <div class="fbox-content">
                        <h3>30-Days Returns</h3>
                        <p class="mt-0">Return or exchange items purchased within 30 days.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="section border-top-0 border-bottom-0 mb-0 p-0 bg-transparent footer-stick">
    <div class="container clearfix">

        <div class="row col-mb-50">
            <div class="col-md-6 d-none d-md-flex align-self-end">
                <img src="images/services/4.jpg" alt="Image" class="mb-0">
            </div>

            <div class="col-md-6 mb-5 subscribe-widget">
                <div class="heading-block">
                    <h3><strong>GET 20% OFF*</strong></h3>
                    <span>Our App scales beautifully to different Devices.</span>
                </div>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet cumque, perferendis accusamus porro illo exercitationem molestias.</p>

                <div class="widget-subscribe-form-result"></div>
                <form id="widget-subscribe-form3" action="include/subscribe.php" method="post" class="mb-0">
                    <div class="input-group" style="max-width:400px;">
                        <div class="input-group-text"><i class="icon-email2"></i></div>
                        <input type="email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                        <button class="btn btn-danger" type="submit">Subscribe Now</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection