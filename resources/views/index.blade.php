

@extends('layout')

@section('title', 'Index')

@section('content')

    <!-- SECTION TITLE HOME -->
    <section class="section__title-home">
        <div class="text__title">
            <p class="subtitle-home text-white">We Make You Feel</p>
            <div class="title-index">
                <h5 class="text__title pretitle">THE ULTIMATE LUXURY EXPERIENCE</h5>
                <h1 class="text__title title">The Perfect
                    Base For You</h1>
            </div>
            <div class="button-home">
                <button type="button" class="section__text-button text_button heartbeat ">TAKE A TOUR</button>
                <button type="button" class="section__text-button-home text_button heartbeat">LEARN MORE</button>
            </div>
        </div>
        <div class="section__calendar-home">
            <div class="section__calendar-date">
                <h6 class="section__text-calendar text-white">Arrival Date</h6>
                <input type="date" placeholder="24th march 2020" />
            </div>
            <div class="section__calendar-date">
                <h6 class="section__text-calendar text-white">Departure Date</h6>
                <input type="date" placeholder="30th march 2020" />
            </div>
            <button type="button" class="section__text-button-homeCheck text_button  heartbeat">CHECK AVAILABILITY</button>
        </div>
    </section>
    <!-- SECTION ABOUT -->
    <section>
        <div class="home__about-container">
            <div class="home__cards-txt">
                <div class="about__container">
                    <p class="small__title-home text-gray-color">ABOUT US</p>
                    <h2 class="big__title-home text-black">Discover Our
                        Underground.</h2>
                    <p class="paragraph__home text-gray-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed
                        do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <button type="button" class="section__text-button text_button heartbeat">BOOK NOW</button>
                </div>
                <div class="about__grid">
                    <div class="about__container-cards">
                        <img src="./assets/hotel/timbre.jpg" class="img_about" alt="team" />
                        <div class="section__about-cards">
                            <img src="./assets/home/Group.png" alt="persons" />
                            <img src="./assets/home/team.png" class="team_person" alt="team person" />
                            <h4 class="text__about-cards">Strong Team</h4>
                            <p class="paragraph__about-cards">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed
                                do
                                eiusmod tempor.</p>
                        </div>
                    </div>
                    <div class="about__container-cardsSecond">
                        <img src="./assets/hotel/restaurant.jpg" class="img_about" alt="team" />
                        <div class="section__about-cards2">
                            <img src="./assets/home/calendarHome.png" alt="calendar" />
                            <h4 class="text__about-cards text-white">Luxury Room</h4>
                            <p class="paragraph__about-cards text-white">Lorem ipsum dolor sit amet, consectetur
                                adipisicing
                                elit,
                                sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <p class="small__title-homeSecond text-gray-color">Rooms</p>
                <h2 class="big__title-home text-black">Hand Picked Rooms</h2>
            </div>
            <div class="swiper swiper-custom-button gallery-home">
                <div class="swiper-wrapper">
                    <div class="swiper-slide section__gallery-home">
                        <img src="./assets/hotel/bed1.jpg" alt="room" class="section_image-slide" />
                        <div class="section_button-rooms-home ">
                            <img src="./assets/section rooms/room-button.png" alt="button rooms" />
                        </div>
                        <div class="section__card-container">
                            <h4 class="text__room-title text-center text-black">Minimal Duplex Room</h4>
                            <p class="text__room-paragraph text-center text-gray-color">Lorem ipsum dolor sit amet,
                                consectetur
                                adipi
                                sicing elit, sed do eiusmod tempor.</p>
                            <div class="section__gallery-text">
                                <p class="text__room-price-home text-gray ">$345/Night</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide section__gallery-home">
                        <img src="./assets/hotel/montain.jpg" alt="room" class="section_image-slide" />
                        <div class="section_button-rooms-home ">
                            <img src="./assets/section rooms/room-button.png" alt="button rooms" />
                        </div>
                        <div class="section__card-container">
                            <h4 class="text__room-title text-center text-black">Minimal Duplex Room</h4>
                            <p class="text__room-paragraph text-center text-gray-color">Lorem ipsum dolor sit amet,
                                consectetur
                                adipi
                                sicing elit, sed do eiusmod tempor.</p>
                            <div class="section__gallery-text">
                                <p class="text__room-price-home text-gray ">$345/Night</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide section__gallery-home">
                        <img src="./assets/hotel/bed10.jpg" alt="room" class="section_image-slide" />
                        <div class="section_button-rooms-home ">
                            <img src="./assets/section rooms/room-button.png" alt="button rooms" />
                        </div>
                        <div class="section__card-container">
                            <h4 class="text__room-title text-center text-black">Minimal Duplex Room</h4>
                            <p class="text__room-paragraph text-center text-gray-color">Lorem ipsum dolor sit amet,
                                consectetur
                                adipi
                                sicing elit, sed do eiusmod tempor.</p>
                            <div class="section__gallery-text">
                                <p class="text__room-price-home text-gray ">$345/Night</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>


        </div>
    </section>
    <!-- SECTION HOME VIDEO  -->
    <section>
        <div class="video__container">
            <div class="video__text">
                <h4 class="text__video-home text-gray">INTRO VIDEO</h4>
                <h2 class="text__video-titleHome text-white">Meet With Our Luxury Place.</h2>
                <p class="text__video-paragraph text-gray-color">Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                    nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat you have to understand this.
                </p>
                <button type="button" class="section__text-button text_button ">BOOK NOW</button>
            </div>

            <div>
                <iframe src="https://www.youtube.com/embed/Bu3Doe45lcU?start=25&end=75" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>

        </div>
        <div>
            <p class="small__title-homeSecond text-gray-color">Facilities</p>
            <h2 class="big__title-home text-black text-center">Core Features</h2>


            <div class="swiper swiper-custom-pagination dynamic-swiper">
                <div class="swiper-wrapper section__gallery-features">
                    <div class="swiper-slide section__gallery">
                        <img src="./assets/home/01.png" class="position__number" alt="number" />
                        <img src="./assets/section/stars.png" class="position__icon rotate-center" alt="star" />
                        <div>
                            <h4 class="text-core-features__pretitle text-black position__pretitle">Have High Rating</h4>
                            <p class="text-core-features__paragraph text-gray-color">Lorem ipsum dolor sit amet,
                                consectetur
                                adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                    <div class="swiper-slide section__gallery">
                        <img src="./assets/home/02.png" class="position__number" alt="number" />
                        <img src="./assets/section/bruj.png" class="position__icon rotate-center" alt="star" />
                        <div>
                            <h4 class="text-core-features__pretitle text-black position__pretitle">Have High Rating</h4>
                            <p class="text-core-features__paragraph text-gray-color">Lorem ipsum dolor sit amet,
                                consectetur
                                adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna..</p>

                        </div>

                    </div>
                    <div class="swiper-slide section__gallery">
                        <img src="./assets/home/03.png" class="position__number" alt="number" />
                        <img src="./assets/section/map.png" class="position__icon rotate-center" alt="star" />
                        <div>
                            <h4 class="text-core-features__pretitle text-black position__pretitle">Have High Rating</h4>
                            <p class="text-core-features__paragraph text-gray-color">Lorem ipsum dolor sit amet,
                                consectetur
                                adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                    <div class="swiper-slide section__gallery">
                        <img src="./assets/home/04.png" class="position__number" alt="number" />
                        <img src="./assets/section/clock.png" class="position__icon rotate-center" alt="star" />
                        <div>
                            <h4 class="text-core-features__pretitle text-black position__pretitle">Have High Rating</h4>
                            <p class="text-core-features__paragraph text-gray-color">Lorem ipsum dolor sit amet,
                                consectetur
                                adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                    <div class="swiper-slide section__gallery">
                        <img src="./assets/home/05.png" class="position__number" alt="number" />
                        <img src="./assets/section/card.png" class="position__icon rotate-center" alt="star" />
                        <div>
                            <h4 class="text-core-features__pretitle text-black position__pretitle">Have High Rating</h4>
                            <p class="text-core-features__paragraph text-gray-color">Lorem ipsum dolor sit amet,
                                consectetur
                                adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                    <div class="swiper-slide section__gallery">
                        <img src="./assets/home/06.png" class="position__number" alt="number" />
                        <img src="./assets/section/Group (3).png" class="position__icon rotate-center" alt="star" />
                        <div>
                            <h4 class="text-core-features__pretitle text-black position__pretitle">Have High Rating</h4>
                            <p class="text-core-features__paragraph text-gray-color">Lorem ipsum dolor sit amet,
                                consectetur
                                adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <!-- NO SWIPER -->
            <div class="not-swiper-gallery section__gallery-features">
                <div class="swiper-slide section__gallery">
                    <img src="./assets/home/01.png" class="position__number" alt="number" />
                    <img src="./assets/section/stars.png" class="position__icon rotate-center" alt="star" />
                    <div>
                        <h4 class="text-core-features__pretitle text-black position__pretitle">Have High Rating</h4>
                        <p class="text-core-features__paragraph text-gray-color">Lorem ipsum dolor sit amet,
                            consectetur
                            adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
                <div class="swiper-slide section__gallery">
                    <img src="./assets/home/02.png" class="position__number" alt="number" />
                    <img src="./assets/section/bruj.png" class="position__icon rotate-center" alt="star" />
                    <div>
                        <h4 class="text-core-features__pretitle text-black position__pretitle">Have High Rating</h4>
                        <p class="text-core-features__paragraph text-gray-color">Lorem ipsum dolor sit amet,
                            consectetur
                            adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna..</p>

                    </div>

                </div>
                <div class="swiper-slide section__gallery">
                    <img src="./assets/home/03.png" class="position__number" alt="number" />
                    <img src="./assets/section/map.png" class="position__icon rotate-center" alt="star" />
                    <div>
                        <h4 class="text-core-features__pretitle text-black position__pretitle">Have High Rating</h4>
                        <p class="text-core-features__paragraph text-gray-color">Lorem ipsum dolor sit amet,
                            consectetur
                            adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
                <div class="swiper-slide section__gallery">
                    <img src="./assets/home/04.png" class="position__number" alt="number" />
                    <img src="./assets/section/clock.png" class="position__icon rotate-center" alt="star" />
                    <div>
                        <h4 class="text-core-features__pretitle text-black position__pretitle">Have High Rating</h4>
                        <p class="text-core-features__paragraph text-gray-color">Lorem ipsum dolor sit amet,
                            consectetur
                            adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
                <div class="swiper-slide section__gallery">
                    <img src="./assets/home/05.png" class="position__number" alt="number" />
                    <img src="./assets/section/card.png" class="position__icon rotate-center" alt="star" />
                    <div>
                        <h4 class="text-core-features__pretitle text-black position__pretitle">Have High Rating</h4>
                        <p class="text-core-features__paragraph text-gray-color">Lorem ipsum dolor sit amet,
                            consectetur
                            adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
                <div class="swiper-slide section__gallery">
                    <img src="./assets/home/06.png" class="position__number" alt="number" />
                    <img src="./assets/section/Group (3).png" class="position__icon rotate-center" alt="star" />
                    <div>
                        <h4 class="text-core-features__pretitle text-black position__pretitle">Have High Rating</h4>
                        <p class="text-core-features__paragraph text-gray-color">Lorem ipsum dolor sit amet,
                            consectetur
                            adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- SECTION MENU -->
    <section>
        <div class="section__menu">
            <img src="./assets/home/donut_two.png" class="position__icon-second" alt="donut" />

            <p class="small__title-homeSecond position__text-homeSecond text-gray-color">Menu</p>
            <h2 class="big__title-home-menu  text-black">Our Foods Menu</h2>

        </div>
        <div class="swiper swiper-custom-button-twice-sliced">
            <div class="swiper-wrapper">
                <div class="swiper-slide menu-slide-gallery">
                    <div class="menu__item">
                        <img src="./assets/menu-home/egg.jpg" alt="eggs" />
                        <div class="menu__slider-text">
                            <h4 class="menu__food-text">Eggs & Bacon</h4>
                            <p class="menu__food-data">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
                                eiusmod
                                tempor.</p>
                        </div>
                    </div>
                    <div class="menu__item">
                        <img src="./assets/menu-home/coffe.jpg" alt="coffe" />
                        <div class="menu__slider-text">
                            <h4 class="menu__food-text">Eggs & Bacon</h4>
                            <p class="menu__food-data">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
                                eiusmod
                                tempor.</p>
                        </div>
                    </div>
                    <div class="menu__item">
                        <img src="./assets/menu-home/coffe.jpg" alt="coffe" />
                        <div class="menu__slider-text">
                            <h4 class="menu__food-text">Eggs & Bacon</h4>
                            <p class="menu__food-data">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
                                eiusmod
                                tempor.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide menu-slide-gallery">
                    <div class="menu__item">
                        <img src="./assets/menu-home/coffe.jpg" alt="coffe" />
                        <div class="menu__slider-text">
                            <h4 class="menu__food-text">Eggs & Bacon</h4>
                            <p class="menu__food-data">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
                                eiusmod
                                tempor.</p>
                        </div>
                    </div>
                    <div class="menu__item">

                        <img src="./assets/menu-home/coffe.jpg" alt="coffe" />
                        <div class="menu__slider-text">
                            <h4 class="menu__food-text">Eggs & Bacon</h4>
                            <p class="menu__food-data">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
                                eiusmod
                                tempor.</p>
                        </div>
                    </div>
                    <div class="menu__item">
                        <img src="./assets/menu-home/coffe.jpg" alt="coffe" />
                        <div class="menu__slider-text">
                            <h4 class="menu__food-text">Eggs & Bacon</h4>
                            <p class="menu__food-data">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
                                eiusmod
                                tempor.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide menu-slide-gallery">
                    <div class="menu__item">
                        <img src="./assets/menu-home/egg.jpg" alt="eggs" />
                        <div class="menu__slider-text">
                            <h4 class="menu__food-text">Eggs & Bacon</h4>
                            <p class="menu__food-data">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
                                eiusmod
                                tempor.</p>
                        </div>
                    </div>
                    <div class="menu__item">
                        <img src="./assets/menu-home/coffe.jpg" alt="coffe" />
                        <div class="menu__slider-text">
                            <h4 class="menu__food-text">Eggs & Bacon</h4>
                            <p class="menu__food-data">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
                                eiusmod
                                tempor.</p>
                        </div>
                    </div>
                    <div class="menu__item">
                        <img src="./assets/menu-home/coffe.jpg" alt="coffe" />
                        <div class="menu__slider-text">
                            <h4 class="menu__food-text">Eggs & Bacon</h4>
                            <p class="menu__food-data">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
                                eiusmod
                                tempor.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>
        <div class="swiper swiper-custom-pagination dynamic-swiper">
            <div class="swiper-wrapper menu">
                <div class="swiper-slide">
                    <img src="./assets/hotel/menu1.jpg" class=" section_image" alt="bread" />
                </div>
                <div class="swiper-slide">
                    <img src="./assets/hotel/menu2.jpg" class=" section_image" alt="ravioli" />
                </div>
                <div class="swiper-slide">
                    <img src="./assets/hotel/menu3.jpg" class=" section_image" alt="crepes" />
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <!-- NO SWIPER -->
        <div class="not-swiper-features">
            <div class="swiper-slide">
                <img src="./assets/hotel/menu1.jpg" class=" section_image" alt="bread" />
            </div>
            <div class="swiper-slide">
                <img src="./assets/hotel/menu2.jpg" class=" section_image" alt="ravioli" />
            </div>
            <div class="swiper-slide">
                <img src="./assets/hotel/menu3.jpg" class=" section_image" alt="crepes" />
            </div>
        </div>

        <div class="background__icons">
            <div class="icons">
                <div class="background__icons-position">
                    <img src="./assets/home/icon 5.png" alt="ship" />
                    <h2 class="background__number text-white">84k<span class="operator__small">+</span>
                    </h2>
                    <p class="background__data "> Projects are Completed</p>
                </div>
                <div class="background__icons-position">
                    <img src="./assets/home/icon 5.png" alt="ship" />
                    <h2 class="background__number text-white">10M<span class="operator__small">+</span>
                    </h2>
                    <p class="background__data "> Active Backers Around World</p>
                </div>
                <div class="background__icons-position">
                    <img src="./assets/home/icon 5.png" alt="ship" />
                    <h2 class="background__number text-white">02K<span class="operator__small">+</span>
                    </h2>
                    <p class="background__data "> Categories Served</p>
                </div>
                <div class="background__icons-position">
                    <img src="./assets/home/icon 5.png" alt="ship" />
                    <h2 class="background__number text-white">100M<span class="operator__small">+</span>
                    </h2>
                    <p class="background__data ">
                        Idea Raised Funds</p>
                </div>
            </div>
        </div>
    </section>

    <script src="./scripts/burger-nav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="./scripts/slide.js"></script>
    @endsection
