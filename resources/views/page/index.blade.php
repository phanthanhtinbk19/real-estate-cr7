@extends("layout.layout")
@section("content")
<div class="home">
    <section class="hero-slide">
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="hero-slide__img" src="{{url("frontend/images/new-area-chinh02_1637566294.jpg")}}"
                        alt="">
                </div>
                <div class="swiper-slide"><img class="hero-slide__img" src="{{url("frontend/images/z3098519956317_8ca7704ce0349940c87110ed6c1fde32-1_1641828071.jpg")}}" alt="">
                </div>
                <div class="swiper-slide"> <img class="hero-slide__img" class="img-old img-responsive " alt=""
                        src="{{url("frontend/images/capturepng_1645534231.png")}}">
                </div>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="search">
            <div class="container">
                <h4 class="search__title">Tìm kiếm bất động sản</h4>
                <div class="search__wrapper">
                    <div class="search__tabs">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off"
                                checked>
                            <label class="btn btn-outline-primary" for="btnradio1">Bất động sản bán</label>
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btnradio2">Bất động sản cho thuê</label>
                        </div>
                    </div>

                    <div class="search__content">
                        <div class="search__head">
                            <div class="search__text ">
                                <input type="text" placeholder="Nhập từ khóa tìm kiếm...">
                                <button type="button" class="btn"><i class="fa-solid fa-magnifying-glass"></i>Tìm
                                    kiếm</button>

                            </div>
                        </div>
                        <div class="search__inner">
                            <div class="search__list">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="search__item">
                                            <select class="form-select form-select-lg mb-3"
                                                aria-label=".form-select-lg example">
                                                <option selected>Trên toàn quốc</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="search__item">
                                            <select class="form-select form-select-lg mb-3"
                                                aria-label=".form-select-lg example">
                                                <option selected>Mức giá</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="search__item">
                                            <select class="form-select form-select-lg mb-3"
                                                aria-label=".form-select-lg example">
                                                <option selected>Diện tích</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="search__item">
                                            <select class="form-select form-select-lg mb-3"
                                                aria-label=".form-select-lg example">
                                                <option selected>Lọc thêm</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="search-icon__refresh ">
                                <span><i class="fa-solid fa-arrows-rotate"></i></span>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- new start -->
    <section class="new-more">
        <div class="container">
            <h2 class="heading">
                TIN XEM NHIỀU
            </h2>
            <div class="new-more__content">
                <div class="row gx-5">
                    <div class="col-sm-6">
                        <div class="new-more__left">
                            <div class="new-more__img">
                                <img src="{{url("frontend/images/20210104090853-b8b5-5cce.png")}}" alt="">
                            </div>
                            <div class="new-more__info--lg">
                                <h3 class="new-more__title--lg">
                                    [Infographic] So sánh ưu nhược điểm để chọn mua căn hộ tầng cao hay tầng thấp
                                </h3>
                                <div class="new-more__time">
                                    <i class="fa-regular fa-calendar"></i>
                                    <span>04/01/2021</span>
                                </div>
                                <p class="new-more__desc">
                                    Khi mua nhà chung cư, đứng trước lựa chọn giữa căn hộ tầng thấp hay tầng cao
                                    nhiều
                                    khi
                                    cũng
                                    khiến các gia đình tốn nhiều thời ...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="new-more__right">
                            <div class="new-more__item ">
                                <div class="row pb-4">
                                    <div class="col-sm-4">
                                        <div class="new-more__img ">
                                            <img src="{{url("frontend/images/20201230082752-67af-ab04.png")}}" alt=" ">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="new-more__info">
                                            <h3 class="new-more__title ">
                                                [Infographic] Mua nhà xây sẵn hay mua đất rồi tự xây?
                                            </h3>
                                            <div class="new-more__time ">
                                                <i class="fa-regular fa-calendar "></i>
                                                <span>04/01/2021</span>
                                            </div>
                                            <p class="new-more__desc">
                                                Nếu vẫn còn phân vân lựa chọn giữa việc mua nhà xây sẵn hay mua đất rồi
                                                tự
                                                xây,
                                                bạn
                                                có
                                                thể tham khảo ...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="new-more__item ">
                                <div class="row pb-4">
                                    <div class="col-sm-4">
                                        <div class="new-more__img ">
                                            <img src="{{url("frontend/images/20201230082752-67af-ab04.png")}}" alt=" ">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="new-more__info">
                                            <h3 class="new-more__title ">
                                                [Infographic] Mua nhà xây sẵn hay mua đất rồi tự xây?
                                            </h3>
                                            <div class="new-more__time ">
                                                <i class="fa-regular fa-calendar "></i>
                                                <span>04/01/2021</span>
                                            </div>
                                            <p class="new-more__desc">
                                                Nếu vẫn còn phân vân lựa chọn giữa việc mua nhà xây sẵn hay mua đất rồi
                                                tự
                                                xây,
                                                bạn
                                                có
                                                thể tham khảo ...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="new-more__item ">
                                <div class="row pb-4">
                                    <div class="col-sm-4">
                                        <div class="new-more__img ">
                                            <img src="{{url("frontend/images/20201230082752-67af-ab04.png")}}" alt=" ">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="new-more__info">
                                            <h3 class="new-more__title ">
                                                [Infographic] Mua nhà xây sẵn hay mua đất rồi tự xây?
                                            </h3>
                                            <div class="new-more__time ">
                                                <i class="fa-regular fa-calendar "></i>
                                                <span>04/01/2021</span>
                                            </div>
                                            <p class="new-more__desc">
                                                Nếu vẫn còn phân vân lựa chọn giữa việc mua nhà xây sẵn hay mua đất rồi
                                                tự
                                                xây,
                                                bạn
                                                có
                                                thể tham khảo ...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="new-more__item ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="new-more__img ">
                                            <img src="{{url("frontend/images/20201230082752-67af-ab04.png")}}" alt=" ">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="new-more__info">
                                            <h3 class="new-more__title ">
                                                [Infographic] Mua nhà xây sẵn hay mua đất rồi tự xây?
                                            </h3>
                                            <div class="new-more__time ">
                                                <i class="fa-regular fa-calendar "></i>
                                                <span>04/01/2021</span>
                                            </div>
                                            <p class="new-more__desc">
                                                Nếu vẫn còn phân vân lựa chọn giữa việc mua nhà xây sẵn hay mua đất rồi
                                                tự
                                                xây,
                                                bạn
                                                có
                                                thể tham khảo ...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- new end -->
    <section class="new-sale">
        <div class="container">
            <div class="new-sale__head">
                <h2 class="heading">TIN RAO DÀNH CHO BẠN</h2>
                <a class="see-more" href="/nha-dat-ban">
                    <span>Xem thêm </span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
            <div class="row g-4">
                <div class="col-sm-3 ">
                    <x-card></x-card>
                </div>
                <div class="col-sm-3 ">
                    <x-card></x-card>
                </div>
                <div class="col-sm-3 ">
                    <x-card></x-card>
                </div>
                <div class="col-sm-3 ">
                    <x-card></x-card>
                </div>
                <div class="col-sm-3 ">
                    <x-card></x-card>
                </div>
            </div>

        </div>
    </section>
    <!--new-area end -->

    <!-- new-project start -->
    <section class="new-project">
        <div class="container">
            <div class="new-project__head">
                <h2 class="heading">TIN TỨC DỰ ÁN</h2>
                <a class="see-more" href="/du-an-bat-dong-san">
                    <span>Xem thêm</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
            <div class="new-project__content">
                <div class="row g-4 ">
                    <div class="col-sm-3 ">
                        <x-card1></x-card1>
                    </div>
                    <div class="col-sm-3 ">
                        <x-card1></x-card1>
                    </div>
                    <div class="col-sm-3 ">
                        <x-card1></x-card1>
                    </div>
                    <div class="col-sm-3 ">
                        <x-card1></x-card1>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--new-project end -->

    <!--new-area-->
    <section class="new-area">
        <div class="container">
            <h2 class="heading">Tin Rao Theo Địa Điểm</h2>
            <div class="new-area__grid">
                <div class="new-area__item1">
                    <img src="{{(" frontend/images/hcmm_1591157562_1594887982.jpg")}} " alt=" ">
                <span class=" text-area01 ">Nhà đất</span>
                <span class=" text-area02 ">Tp Hồ Chí Minh</span>
            </div>
            <div class=" new-area__item2 ">
                <img src=" {{(" frontend/images/hn_1591156188_1594888017.jpg")}} " alt=" ">
                <span class=" text-area01 ">Nhà đất</span>
                <span class=" text-area02 ">Hà Nội</span>
            </div>
            <div class=" new-area__item3 ">
                <img src=" {{("frontend/images/dn_1591156527_1594888044.jpg")}} " alt=" ">
                <span class=" text-area01 ">Nhà đất</span>
                <span class=" text-area02 ">Đà Nẵng</span>
            </div>
            <div class=" new-area__item4 ">
                <img src=" {{("frontend/images/bd_1591157396_1594888072.jpg")}} " alt=" ">
                <span class=" text-area01 ">Nhà đất</span>
                <span class=" text-area02 ">Bình Dương</span>
            </div>
            <div class=" new-area__item5 ">
                <img src=" {{("frontend/images/dl_1591157804_1594888101.jpg")}} " alt=" ">
                <span class=" text-area01 ">Nhà đất</span>
                <span class=" text-area02 ">Đồng Nai</span>
            </div>
        </div>
        <div class=" new-area__default ">
        <a href=""><img alt=" new-area Giữa dự án - tin tức 01 "
            src=" https://batdongsanhome.com.vn/images/banners/original/capturegif_1664301677.gif"></a>
                    <a href=""><img class=" img-old img-responsive " alt=" new-area Giữa dự án - tin tức "
                            src="https://batdongsanhome.com.vn/images/banners/original/capturejpg_1664301956.jpg"></a>

                </div>
            </div>
        </div>
    </section>
    <!--new-area end -->

    <!-- brand start -->
    <section class="brand">
        <div class="container">
            <h3 class="heading">Doanh Nghiệp Tiêu Biểu</h3>
            <div class="swiper tin">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{(" frontend/images/doitac01_1594961222.jpg")}}" alt="">
                    </div>
                    <div class="swiper-slide ">
                        <img src="{{(" frontend/images/doitac02_1594961241.jpg")}}" alt="">
                    </div>
                    <div class="swiper-slide ">
                        <img src="{{(" frontend/images/doitac03_1594961254.jpg")}}" alt="">
                    </div>
                    <div class="swiper-slide ">
                        <img src="{{(" frontend/images/doitac04_1594961271.jpg")}}" alt="">
                    </div>
                    <div class="swiper-slide ">
                        <img src="{{(" frontend/images/doitac05_1594961291.jpg")}}" alt="">
                    </div>
                    <div class="swiper-slide ">
                        <img src="{{(" frontend/images/doitac07_1594961325.jpg")}}" alt="">
                    </div>
                    <div class="swiper-slide ">
                        <img src="{{(" frontend/images/doitac09_1594961360.jpg")}}" alt="">
                    </div>
                </div>
                <div class="swiper-button-next "></div>
                <div class="swiper-button-prev "></div>
            </div>
        </div>
    </section>
    <!-- brand end -->

    <!-- contact start -->
    <div class="hotline-phone-ring-wrap">
        <div class="hotline-phone-ring">
            <div class="hotline-phone-ring-circle"></div>
            <div class="hotline-phone-ring-circle-fill"></div>
            <div class="hotline-phone-ring-img-circle">
                <a href="tel:0936387929" class="pps-btn-img">
                    <img width="50" height="50"
                        src="https://maxweb.vn/wp-content/plugins/hotline-phone-ring/assets/images/icon-1.png"
                        alt="Số điện thoại"
                        data-lazy-src="https://maxweb.vn/wp-content/plugins/hotline-phone-ring/assets/images/icon-1.png"
                        data-ll-status="loaded" class="entered lazyloaded"><noscript><img width="50" height="50"
                            src="https://maxweb.vn/wp-content/plugins/hotline-phone-ring/assets/images/icon-1.png"
                            alt="Số điện thoại" /></noscript>
                </a>
            </div>
        </div>
        <div class="hotline-bar">
            <a href="tel:0936387929">
                <span class="text-hotline">0936 387 929</span>
            </a>
        </div>
    </div>
    <!-- contact end -->
</div>
@endsection