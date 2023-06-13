<?php /* Template Name: Product Detail */ ?>


<?php
    get_header('custom');
?>

 <!-- BREAD CRUM SEC STARTS -->
 <section class="breadcrumb">
        <div class="container">
            <ul>
                <li><a href="#0">products</a></li>
                <li><a href="#0">categories</a></li>
                <li><a href="#0">lugs nuts</a></li>
            </ul>
        </div>
    </section>
    <!-- BREAD CRUM SEC ENDS -->
    <!-- PRODUCT DETAIL SEC STARTS -->
    <section class="product-detail">
        <div class="container">
            <div class="product-detail-slider-outterwrap">
                <div class="product-detail-slider-block">
                    <div class="wrap model-wrap">
                        <div class="">
                            <ul id="slide">
                                <li class="">
                                    <div class="product-det-slider-block">
                                        <img src="<?php echo get_template_directory_uri().'/images/lug1.png'; ?>" alt="">
                                    </div>
                                </li>
                                <li class="">
                                    <div class="product-det-slider-block">
                                        <img src="<?php echo get_template_directory_uri().'/images/lug1.png'; ?>" alt="">
                                    </div>
                                </li>
                                <li class="">
                                    <div class="product-det-slider-block">
                                        <img src="<?php echo get_template_directory_uri().'/images/lug1.png'; ?>" alt="">
                                    </div>
                                </li>


                            </ul>
                            <ul class="nav thumbnail">
                                <li class=" ">
                                    <img src="<?php echo get_template_directory_uri().'/images/lug1.png'; ?>" alt="">
                                </li>
                                <li class=" ">
                                    <img src="<?php echo get_template_directory_uri().'/images/lug1.png'; ?>" alt="">
                                </li>
                                <li class=" ">
                                    <img src="<?php echo get_template_directory_uri().'/images/lug1.png'; ?>" alt="">
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
                <div class="product-detail-order">
                    <div class="product-title">
                        <h2><?php echo get_the_title(); ?></h2>
                        <div class="rating-star">
                            <div class="star"><img src="<?php echo get_template_directory_uri().'/images/star.png'; ?>" alt=""></div>
                            <div class="star"><img src="<?php echo get_template_directory_uri().'/images/star.png'; ?>" alt=""></div>
                            <div class="star"><img src="<?php echo get_template_directory_uri().'/images/star.png'; ?>" alt=""></div>
                            <div class="star"><img src="<?php echo get_template_directory_uri().'/images/star.png'; ?>" alt=""></div>
                            <div class="star"><img src="<?php echo get_template_directory_uri().'/images/star.png'; ?>" alt=""></div>
                        </div>
                    </div>



                    <div class="product-detail-order-check">
                        <ul class="size">
                            <h5>thread size</h5>
                            <li>
                                <input type="checkbox" id="7/16/20">
                                <label for="7/16/20">7/16/20</label>
                            </li>
                            <li>
                                <input type="checkbox" id="1/2-20">
                                <label for="1/2-20">1/2-20</label>
                            </li>
                            <li>
                                <input type="checkbox" id="14mm">
                                <label for="14mm">14mm</label>
                            </li>
                            <li>
                                <input type="checkbox" id="12mm">
                                <label for="12mm">12mm</label>
                            </li>
                            <li>
                                <input type="checkbox" id="10mm">
                                <label for="10mm">10mm</label>
                            </li>
                        </ul>
                        <ul class="size">
                            <h5>Hex Size</h5>
                            <li>
                                <input type="checkbox" id="13/16">
                                <label for="13/16">13/16"</label>
                            </li>
                            <li>
                                <input type="checkbox" id="3/4">
                                <label for="3/4">3/4"</label>
                            </li>
                        </ul>
                        <ul class="size">
                            <h5>height</h5>
                            <li>
                                <input type="checkbox" id="1.38">
                                <label for="1.38">1.38</label>
                            </li>
                            <li>
                                <input type="checkbox" id="1.25">
                                <label for="1.25">1.25"</label>
                            </li>
                            <li>
                                <input type="checkbox" id="1.41">
                                <label for="1.41">1.41"</label>
                            </li>
                        </ul>

                    </div>
                    <div class="product-detail-order-color">
                        <ul class="color">
                            <h5>available color</h5>
                            <li>
                                <input type="radio" id="black" name="color" value="black">
                                <label for="black">black</label>
                                <input type="radio" id="chrome" name="color" value="chrome">
                                <label for="chrome">chrome</label>
                            </li>
                        </ul>
                    </div>
                    <div class="num-of-items">
                        <div class="qty">
                            <button type="button"><i class="fa fa-minus"></i></button>
                            <input type="text" name="qty" value="0" class="input-qty" />
                            <button type="button"><i class="fa fa-plus"></i></button>
                        </div>
                        <div class="qty-btn">
                            <a href="#">Order Form <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- PRODUCT DETAIL SEC ENDS -->
    <!-- SPECIFICATION SEC STARTS -->
    <section class="specification">
        <div class="container">
            <div class="specification-outterwrap">

                <div class="specification-image-block">
                    <h2>Specifications</h2>
                    <div class="specification-image">

                        <img src="<?php echo get_template_directory_uri().'/images/specs.png'; ?>" alt="">
                    </div>
                </div>
                <div class="specification-datasheet-block">
                    <h2>Data Sheet</h2>
                    <div class="specification-datasheet">
                        <table>
                            <caption>1PC ACORN</caption>
                            <thead>
                                <tr>
                                    <th>Thread Size</th>
                                    <th>Item no.</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>7/16-20</td>
                                    <td>1002</td>
                                </tr>
                                <tr>
                                    <td>7/16-20</td>
                                    <td>1002</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>12mm <span>1.25</span></p>
                                    </td>
                                    <td>1002</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>12mm <span>1.5</span></p>
                                    </td>
                                    <td>1002</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>10mm<span>1.25</span></p>
                                    </td>
                                    <td>1002</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SPECIFICATION SEC ENDS -->
    <!-- RELATED PRODUCT SEC STARTS -->
    <section class="related-products">
        <div class="container">
            <div class="related-products-outterwrap">
                <h3>Related Products</h3>
                <div class="related-products-innerwrap">
                    <div class="related-products-block">
                        <div class="related-products-block-image">
                            <img src="<?php echo get_template_directory_uri().'/images/lug2.png'; ?>" alt="">
                        </div>
                        <div class="related-products-block-content">
                            <h3>1PC ACORN</h3>
                            <p>13/16" Hex</p>
                        </div>
                    </div>
                    <div class="related-products-block">
                        <div class="related-products-block-image">
                            <img src="<?php echo get_template_directory_uri().'/images/lug2.png'; ?>" alt="">
                        </div>
                        <div class="related-products-block-content">
                            <h3>1PC ACORN</h3>
                            <p>13/16" Hex</p>
                        </div>
                    </div>
                    <div class="related-products-block">
                        <div class="related-products-block-image">
                            <img src="<?php echo get_template_directory_uri().'/images/lug2.png'; ?>" alt="">
                        </div>
                        <div class="related-products-block-content">
                            <h3>1PC ACORN</h3>
                            <p>13/16" Hex</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- RELATED PRODUCT SEC ENDS -->


<?php
    get_footer();
?>
