 @include('frontend.layout.header')

<section class="categories">
        <div class="container">
            <h1>Popular Bag</h1>
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/featured/b33.jfif">
                            <h5><a href="#">Vintage</a></h5>
                        </div>
                   </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="pj/b9.png">
                            <h5><a href="#">Baguette</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/featured/do.jfif">
                            <h5><a href="#">Pastel</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/featured/im.jfif">
                            <h5><a href="#">Unicorn</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/latest-product/lp1.jfif">
                            <h5><a href="#">Elysian</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
 @include('frontend.layout.footer')
