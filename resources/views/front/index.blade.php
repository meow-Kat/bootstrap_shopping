@extends('layout.template')


@section('title','Homepage')



@section('css')
    <link rel="stylesheet" href="/css/index.css">
    <!-- banner -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endsection

@section('main')
    <!-- main -->
    <main class="mains">

        <!-- banner -->
        <div class="swiper-container mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="https://wallpaperaccess.com/full/109672.jpg" alt=""></div>
                <div class="swiper-slide"><img
                        src="https://www.10wallpaper.com/wallpaper/1920x1080/1411/blue_reflections-Abstract_widescreen_wallpaper_1920x1080.jpg"
                        alt=""></div>
                <div class="swiper-slide"><img
                        src="https://www.10wallpaper.com/wallpaper/1920x1080/1307/explosion_bright_light-Abstract_design_wallpaper_1920x1080.jpg"
                        alt=""></div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>

        <!-- Main title -->
        <div class="container pt-5">
            <div class="row">
                <div class="col text-center ">
                    <h3>Raw Denim Heirloom Man Braid</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-8 m-auto text-center">
                    <p class="my-p">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub
                        indxgo juice poutine, ramps microdosing banh mi pug.</p>
                </div>
            </div>
        </div>

        <!-- 並排3張卡 -->
        <div class="container my-5 py-5">
            <div class="row">
                <div class="col-sm-4  card border-0 mb-5">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="my-icon1 mb-4" viewBox="-5 -5 35 35">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg>
                    <div class="card-body text-center p-0">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text d-flex align-items-center">Some quick example text to build on the card
                            title and make up the bulk
                            of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                    </div>
                </div>

                <div class="col-sm-4  card border-0 mb-5">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="my-icon1 mb-4" viewBox="-5 -5 35 35">
                        <circle cx="6" cy="6" r="3"></circle>
                        <circle cx="6" cy="18" r="3"></circle>
                        <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                    </svg>
                    <div class="card-body text-center p-0">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                    </div>
                </div>

                <div class="col-sm-4  card border-0 mb-5">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="my-icon1 mb-4" viewBox="-5 -5 35 35">
                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <div class="card-body text-center p-0">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                    </div>
                </div>
            </div>
            <!-- 按鈕 -->
            <div class="rol">
                <div class="col text-center">
                    <button type="button" class="btn btn-primary btn-lg ">Large button</button>
                </div>
            </div>
        </div>

        <!-- 一堆圖不同尺寸 -->
        <!-- 文字段落1 -->
        <div class="container mt-5 py-5">
            <div class="row no-gutters p-2">
                <div class="col-lg-5">
                    <h3>Card title aaaa aaaa aaa aa a</h3>
                </div>
                <div class="col-lg-7">
                    <p>Some quick example text to build on the card title and make up
                        the
                        bulk of the card's content.</p>
                </div>
            </div>


            <!-- 很多圖 -->
            <div class="row no-gutters mb-5 pb-5">
                <div class="col-6">
                    <div class="row no-gutters">
                        <div class="col-6 p-2">
                            <img src="https://dummyimage.com/500x300" alt="" class="w-100">
                        </div>
                        <div class="col-6 p-2">
                            <img src="https://dummyimage.com/500x300" alt="" class="w-100">
                        </div>

                        <div class="col-12 p-2">
                            <img src="https://dummyimage.com/600x360" alt="" class="w-100">
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="row no-gutters">
                        <div class="col-6 p-2 order-2">
                            <img src="https://dummyimage.com/500x300" alt="" class="w-100 ">
                        </div>
                        <div class="col-6 p-2 order-1">
                            <img src="https://dummyimage.com/500x300" alt="" class="w-100">
                        </div>

                        <div class="col-12 p-2">
                            <img src="https://dummyimage.com/600x360" alt="" class="w-100">
                        </div>
                    </div>
                </div>
            </div>

            <!-- 購物 -->

            <div class="row py-5">
                <div class="col-8 m-auto text-center ">
                    <h2>Pricing</h2>
                    <p>Banh mi cornhole echo park skateboard authentic crucifix neutra tilde lyft biodiesel artisan
                        direct trade mumblecore 3 wolf moon twee</p>
                </div>
            </div>

            <div class="row d-flex justify-content-center pb-5">
                <div class="col col-lg-8">
                    <table class="table">
                        <thead>
                            <tr class="table-tittle">
                                <th scope="col">plan</th>
                                <th scope="col">Speed</th>
                                <th scope="col">Storage</th>
                                <th scope="col">Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Start</th>
                                <td>5 Mb/s</td>
                                <td>15 GB</td>
                                <td>Free</td>
                                <td class="check"><input type="radio" name="chenk-buy" id=""></td>
                            </tr>
                            <tr>
                                <th scope="row">Pro</th>
                                <td>25 Mb/s</td>
                                <td>25 GB</td>
                                <td>$24</td>
                                <td class="check"><input type="radio" name="chenk-buy" id=""></td>
                            </tr>
                            <tr>
                                <th scope="row">Business</th>
                                <td>36 Mb/s</td>
                                <td>40 GB</td>
                                <td>$50</td>
                                <td class="check"><input type="radio" name="chenk-buy" id=""></td>
                            </tr>
                            <tr>
                                <th scope="row">Exclusive</th>
                                <td>48 Mb/s</td>
                                <td>120 GB</td>
                                <td>$72</td>
                                <td class="check">
                                    <input type="radio" name="chenk-buy" id="">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row ">
                        <div class="col d-flex justify-content-between align-items-center">
                            <a href="" class="pl-2 link-more">Learn More</a>
                            <button type="button" class="btn btn-primary ">Primary</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 文字段落2 -->
            <div class="row py-5 my-5">
                <div class="col">
                    <div class="row">
                        <div class="col-12 col-md-6 text-center">
                            <h2>Pitchfork Kickstarter Taxidermy</h2>
                        </div>
                        <div class="col-12 col-md-6 text-center">
                            <p>Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile
                                poke
                                farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies
                                heirloom
                                prism food truck ugh squid celiac humblebrag.</p>
                        </div>
                    </div>


                    <!-- 4張卡片 -->
                    <div class="row pb-5">
                        <div class="col-12 col-sm-6 col-lg-3 py-3 py-3">
                            <div class="card">
                                <img src="https://lh3.googleusercontent.com/t_UGL_byEYiv92U2B-epRNXQqPbpI1S6n1wxScVtOIaW_6VYRFybZBDfBe9MkNS1ZG89tLqQyaqAiz0jN88aeOLB9KIntGiG0Lk_iV8L-_PEwRMKbexVcJwhBKuiBFpGr7FEjUPVIitLseIEGzQ6Crg35QQ_54yD9xDnvGmeP6-1d240uyY50bij8Ui2aTIABGKtGBGaXJtkkzRG-I7mdSSetNMl5heEBHF670Z1NjQ6-7rS7q_RDsGSVBFPsS-GX9SI5A7L_V_rtc9Nnrehnw-3O3IMBDJtE738VSSmpvbMgkzJDWhTPLsBKGC15r--EiMie8wSJAPZE4pPfx3p0RLdfvCC-EbTxLX3MWplW_ynpVZWuDvY-XnSnhaeKDLn1UbExhbzReejfLmwdw_6QGj3Tvs1VpDe4ZE64prc32m3wIura_rg5CREL1_D_zeY1DS8opB4HdI_QmpbQkQtfPU8QOq1ZQ5g0vy22ZsKsZyxUoxGoRmNka5hTZjcosgGm62q_qgLgqpUB-8fxP9Va19va3tzwswPgDLV7PAp00vXZ7zN6IUfX6xAhTa1mAsMyKLGSHoNFWAkSyjS6WPBqSnPg1rPWtNvHMLhD2YBCKhHEPNa9LXxwwtwze4PQx_GMcJDGRW2_39bV9er1e0kBKyjDK3Q7PU1hvyA1qK-59g__lWFzyew2-8pPIhkOw=w1024"" class="
                                    card-img-top px-3 pt-3" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk
                                        of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3 py-3">
                            <div class="card">
                                <img src="https://lh3.googleusercontent.com/4jOxIUFFtXknFeInu66ei92HqfQqXchJ_oZlBw1WRfu-RSIr2amistjeaoHwTAQTiAv6ga_kdQtkwW6H6i4-ID9SeFvifI761NSz1-8SuIhwPrtAixTdzkqyF1ayVaRfo5gqGITRkH-15oX8bgTtoEJA4lZW5DaflxhRqB37VELJ_cDUwdAe3moOjYUJET1ibxSBeztxXBXmWi4bk6rNfkO8Y0jj6s5KHI5zaAf3rjd2sISHb2cbBeBPTycifAfUhfRxWBF70jare3KLE_AVn__grLHWPBno0NcSxBV2xmPMg4sE2Yfsl5Gm5uXpRE5zqKs4ekqX2lQsNOLWXKGeGIqoBl2gXmUvlgxlu5D2W8DK2RltU1vYLH5pavXPvCBIuuMM7DmcvrHwHVwWRta4Ic8ujaBS8N888zG9Z-fOHec5ys993Y8fG8qgy2L87sBUkLRriPGmNozp7hDoowaAixO-mYcP9lks04pIszBjDD5wZZpE4mfsTLj-_AvNQ6G_8hdeyQgMP4okceonQf0cZLkYkwd28uIq1-YJNxVD2US2cm_QswzhjdKGRJz8RZYAKSqnZE0w5FfZyM5wTuVbYPyrG5uzSg5EA7stDcZIlc_MT9LsAqxyb8kMlBJ5RYx6gVpnehdeflYBvdvFzHbXE9arFGSEcIFcR9RCzT5xpkIFUiPP3PrOQ54xHXqA6Q=w1024"
                                    class="card-img-top px-3 pt-3" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk
                                        of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3 py-3">
                            <div class="card">
                                <img src="https://lh3.googleusercontent.com/Jq26Ws2ES7f9Aex_IleqSbwfQgbl-kmw7vUtqOX_NYHupS1mlP72LXvqEU9sU0UQ91eBsZkhCktLwZnVX62ojTuMEKF3A3nP5oiSIk8dbqa83hj9m8PeJ1U3oGJ0hb-D1rlmR-B3eJF--TwJbfRH-uWfTYSUf3H84N-4l7iAjse0jYFl7D6IRaSqIoWN6MH2B7WZ8lJqNUEBfZ3zCb9-xNwlWxpGrHKA4RcmTr0r8PAqmzayhc6a7Sh-H7ArDukFxS0r7qDM1_p3xJDgLSqfu5E1ZK_PVwJHOf4t1Did80ka_cNcrR_Jv_nW3hHfAnxWz7knuwZ-mduS5eolsKBFsV7LXIEufsQHG_e0JcSBfHaRzViL64u5BmgVnb763znsMZgayl6u3n9fd0gw23tFIo2axr45Sv8g_8L2WJ7XVswf_JGOPc7zG5gtsLCBhmVQDymsgF3eLBtbstsIghs9vyLmpYReq1TSucjt5RAuE0BpFReYzwTPC2hA7yCUiatmksp7h6my6dxTVBpn2ZE9x_-RZTawc4nBRTJGjis2i_fb_DiKsHS396puB8n9MVAdEFuwSk9Ii2ak_f3P73Yvxt1gzzFEgZrelQQ_F_NiRoRmgAr4Srn8cxPYeSUkyLbbhjzhDD6QRhxb_JqrrQh5nhZlEctHjIFjauh1cYh0HX_KCa-M0Rls2gN3C5IQSQ=w1024"
                                    class="card-img-top px-3 pt-3" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk
                                        of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3 py-3">
                            <div class="card">
                                <img src="https://lh3.googleusercontent.com/yOWVY13cgDXyMh3OKIx-a3IsLSv_ZCOXK3MaS86JejW1jIF8mYMCCyn2WB4p3aZOhvxpYQBW9iIOiicreZ0ijWGaPoHh-hYKMvDw_UN4mdIqD87dCNeIGBuJ58sDVsxBx3xrAyxAbU4K89A1VpHfwRB9HZLiIiGRvA9SNRfo1ik0ZMoQAQOnIwDLdxXSmHHDZYGIYyhxCMngEyaUS1LXnEYBvXJsQEBO3TZVXtdUljJSEnPVApbqfUrgC4RGp90yEP574c2R2EURfWhrzDFVjwQ7dTdl96e26kPFX65D92LAdC4eQ68-LTDjfso1BmuakeQCG9giqjGx88wqdioLNGW8OKB_swwxullcgrAmpniuuq-YnPteQOOGmZLTwQKp-2JixpsTwv44T3UFJmf7fWA07PX0341JrRj7K8fAt_lj2jjccwnCQeuZaPMSeKdJmG4k2DT-zmUI1Tv0_wQLzqpEJc0i8TIJMsEsKKu7NW0_F9hn8fydMhLuloVg89vtZ6JWe8i1MLM57Y3pNpcPEgDDryMeWjl-wO0GballrajXPEdpp7BxopktxoR8W7YNkNDzhl9g5Doh24M0Coe3KOAS8E8nkSvxyQ7-dQno7Iq1Qahs3QaO2QOpdcsJZFmzmDk2tzsCiGtcsv70Aaq84sS6XTcHuhJAGT54ks4qhWzEok4ZpY4eHWDZiw2HBQ=w1024"
                                    class="card-img-top px-3 pt-3" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk
                                        of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- 左右左 -->
            <div class="row no-gutters py-5 col-12 col-lg-8 m-auto text-center text-sm-left">
                <div class="row ">
                    <div class="col">
                        <div class="card border-0  d-flex flex-sm-row justify-content-center align-items-center">
                            <div class="box">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="my-icon2" viewBox="0 0 24 24">
                                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                                </svg>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the card's content.</p>
                                <a href="#" class="card-link link-more">Learn More</a>

                            </div>
                        </div>
                    </div>

                </div>

                <!-- 右 -->
                <hr class="featurette-divider">
                <div class="row">
                    <div
                        class="col card border-0  d-flex flex-sm-row-reverse justify-content-center align-items-center ">
                        <div class="box pt-4 pt-sm-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="my-icon2 " viewBox="0 0 24 24">
                                <circle cx="6" cy="6" r="3"></circle>
                                <circle cx="6" cy="18" r="3"></circle>
                                <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                            </svg>
                        </div>
                        <div class="card border-0">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the card's content.</p>
                                <a href="#" class="card-link link-more">Learn More</a>

                            </div>
                        </div>
                    </div>
                </div>
                <hr class="featurette-divider">

                <!-- 左 -->
                <div class="row">
                    <div class="col">
                        <div class="card border-0  d-flex flex-sm-row justify-content-center align-items-center">
                            <div class="box pt-4 pt-sm-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="my-icon2" viewBox="0 0 24 24">
                                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the card's content.</p>
                                <a href="#" class="card-link link-more">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row m-auto py-5">
                    <button type="button" class="btn btn-primary">Large button</button>
                </div>
            </div>

            <!-- 買東西選SIZE -->
            <form action="">
                <div class="row py-5">
                    <div class="col py-5">
                        <div class="card flex-md-row border-0">
                            <img src="{{ $record[0]->product_photo }}" alt="" class="m-auto buy-size">
                            <div class="card-body col-lg-6 mt-1 ">
                                <div class="row">
                                    <div class="col">
                                        <h6 class="card-subtitle mb-2 text-muted">{{ $record[0]->type->type_name }}</h6>
                                        <h1 class="card-title">{{ $record[0]->product_name }}</h1>
                                        <div class="row">
                                            <div class="col d-flex align-items-center">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <p class="card-text px-3 border-right">4 Reviews</p>
                                                <i class="fab fa-facebook-square pl-3"></i>
                                                <i class="fab fa-twitter px-2"></i>
                                                <i class="fas fa-comment-dots"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row py-4">
                                    <div class="col">
                                        <p class="card-text">{{ $record[0]->product_context }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col d-flex align-items-center">
                                        <i class="mr-2">Color</i>
                                        @foreach ($color as $item)
                                            <button type="button" class="btn-outline-primary color mx-1" style="background-color: {{ $item }}"></button>
                                        @endforeach
                                        <i class="mr-2">Size</i>
                                        <div class="relative">
                                            <select
                                                class="rounded py-2 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base pr-3 ">
                                                @foreach ($size as $item)
                                                    <option value="{{ $item }}">{{ $item }}</option>                                              
                                                @endforeach
                                            </select>
    
                                        </div>
                                    </div>
    
    
                                </div>
                                <hr class="featurette-divider my-3">
                                <div class="row">
                                    <div class="col d-flex align-items-center">
                                        <p>$ {{ $record[0]->product_price }}</p>
                                    </div>
                                    <div class="col d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary">Go</button>
                                        <button class="heart border-0 ml-3" type="submit"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>


            <!-- 8個卡片 -->
            <div class="row py-5">
                <div class="col">
                    <div class="row">
                        
                        <div class="col d-flex flex-wrap p-0">
                            <div class="card col-md-6 col-lg-3 border-0 ">
                                <img src="https://dummyimage.com/400x205" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk
                                        of the card's content.</p>
                                    <p>Go somewhere</p>
                                </div>
                            </div>
                            <div class="card col-md-6 col-lg-3 border-0">
                                <img src="https://dummyimage.com/400x206" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk
                                        of the card's content.</p>
                                    <p>Go somewhere</p>
                                </div>
                            </div>
                            <div class="card col-md-6 col-lg-3 border-0">
                                <img src="https://dummyimage.com/400x207" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk
                                        of the card's content.</p>
                                    <p>Go somewhere</p>
                                </div>
                            </div>
                            <div class="card col-md-6 col-lg-3 border-0">
                                <img src="https://dummyimage.com/400x208" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk
                                        of the card's content.</p>
                                    <p>Go somewhere</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col d-flex flex-wrap p-0">
                            <div class="card col-md-6 col-lg-3 border-0">
                                <img src="https://dummyimage.com/400x205" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk
                                        of the card's content.</p>
                                    <p>Go somewhere</p>
                                </div>
                            </div>
                            <div class="card col-md-6 col-lg-3 border-0">
                                <img src="https://dummyimage.com/400x206" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk
                                        of the card's content.</p>
                                    <p>Go somewhere</p>
                                </div>
                            </div>
                            <div class="card col-md-6 col-lg-3 border-0">
                                <img src="https://dummyimage.com/400x207" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk
                                        of the card's content.</p>
                                    <p>Go somewhere</p>
                                </div>
                            </div>
                            <div class="card col-md-6 col-lg-3 border-0">
                                <img src="https://dummyimage.com/400x208" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk
                                        of the card's content.</p>
                                    <p>Go somewhere</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- MAP -->
        <div class="map-box ">
            <div class="map my-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d12235.473802118422!2d120.72516540424526!3d24.254781975420187!3m2!1i1024!2i768!4f13.1!5e0!3m2!1szh-TW!2stw!4v1620626634687!5m2!1szh-TW!2stw"
                    width="100%" height="700" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

            <div class="card map-feedback p-3">
                <div class="card-body">
                    <p class="card-title">Card title</p>
                    <p class="card-subtitle mb-2 text-muted">Card subtitle</p>
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Message</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>
                    </form>
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                    <span class="text-smll-size">Chicharrones blog helvetica normcore iceland tousled brook
                        viral artisan.</span>
                </div>
            </div>

        </div>


    </main>
@endsection



@section('swiper-index')
    <!-- Initialize Swiper -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            cssMode: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
            },
            mousewheel: true,
            keyboard: true,
        });
    </script>
@endsection

