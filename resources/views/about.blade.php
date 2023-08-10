
@extends('layout')

@section('title', 'About Us')

@section('content')
    <!-- SECTION TITLE -->
    <section class="section-title">
        <div class="text__title">
            <div class="title__header">
                <h5 class="text__title pretitle">THE ULTIMATE LUXURY </h5>
                <h1 class="text__title title">About Us</h1>
            </div>
            <div class="page__title-container">
                <div class="page__title">
                    <p class="page__text text-black">Home</p>
                    <p class="page__text text-black">|</p>
                    <p class="page__text text-gray">About</p>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION OPTIONS -->
    <section>
        <div class="section_options">
            <div>
                <iframe class="video" src="https://www.youtube.com/embed/Bu3Doe45lcU?start=25&end=75"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
            <h4 class="section_text text_video">Hello. Our hotel has been present for over 20 years. We make the best
                for all our customers.</h4>
            <div class="cards">
                <div class="section_cards">
                    <img class="about-filter heartbeat" src="../assets/section/breakfast.svg" alt="card breakfast" />
                    <p class="text-icon-about text-black">BREAKFAST</p>
                </div>
                <div class="section_cards">
                    <img src="../assets/section/airport.png" class="icon-about heartbeat" alt="card airport" />
                    <p class="text-icon-about text-black">AIRPORT PICKUP</p>
                </div>
                <div class="section_cards">
                    <img src="../assets/section/Group.svg" class="heartbeat" alt="card city guide" />
                    <p class="text-icon-about text-black">CITY GUIDE</p>
                </div>
                <div class="section_cards card__none">
                    <img src="../assets/section/bbq.svg" class="heartbeat" alt="card BBQ PARTY" />
                    <p class="text-icon-about text-black">BBQ PARTY</p>
                </div>
                <div class="section_cards">
                    <img src="../assets/section/room.svg" class="heartbeat" alt="card luxury room" />
                    <p class="text-icon-about text-black">LUXURY ROOM</p>
                </div>
            </div>



            <div class="restaurant-section">
                <img src="../assets/hotel/burguer.jpg" class="section_image-burguer image_restaurant"
                    alt="restaurant" />
                <div class="section_restaurant">
                    <p class="section__text-restaurant text__small-section">RESTAURANT</p>
                    <h3 class="section__text-title text__big-section">Get Restaurant Facilities & Many Other More</h3>
                    <p class="section__text-paragraph text__small-section-paragraph text-gray-color">Lorem ipsum dolor
                        sit
                        amet, consectetur
                        adipisicing elit, sed do eiusmod tem por incididunt ut labore et dolore magna aliqua. Ut enim ad
                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                    <button type="button" class="section__text-button text_button heartbeat ">TAKE A TOUR</button>
                </div>
            </div>
        </div>
    </section>
    <!-- FEATURES -->
    <section>
        <div class="section_features">
            <h5 class="text__features text-center">FACILITIES</h5>
            <h2 class="text__title-features text-center">Core Features</h2>
            <div class="swiper swiper-custom-pagination dynamic-swiper ">
                <div class="swiper-wrapper cards__features">
                    <div class="swiper-slide core-features__section ">
                        <img src="../assets/section/01.png" class="core-features_number" alt="number" />
                        <div class="core-features__section-icon">
                            <img src="../assets/section/stars.png" alt="star" />
                            <h4 class="text-core-features__pretitle  text-white">Have High Rating</h4>
                            <p class="text-core-features__paragraph text-white">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                    <div class="swiper-slide  core-features__section">
                        <img src="../assets/section/02.png" class="core-features_number" alt="number" />
                        <div class="core-features__section-icon">
                            <img src="../assets/section/bruj.png" alt="bruj" />
                            <h4 class="text-core-features__pretitle  text-white">Have High Rating</h4>
                            <p class="text-core-features__paragraph text-white">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                    <div class="swiper-slide  core-features__section">
                        <img src="../assets/section/03.png" class="core-features_number" alt="number" />
                        <div class="core-features__section-icon">
                            <img src="../assets/section/map.png" alt="map" />
                            <h4 class="text-core-features__pretitle  text-white">Have High Rating</h4>
                            <p class="text-core-features__paragraph text-white">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                    <div class="swiper-slide  core-features__section">
                        <img src="../assets/section/04.png" class="core-features_number" alt="number" />
                        <div class="core-features__section-icon">
                            <img src="../assets/section/clock.png" alt="clock" />
                            <h4 class="text-core-features__pretitle  text-white">Have High Rating</h4>
                            <p class="text-core-features__paragraph text-white">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                    <div class="swiper-slide core-features__section">
                        <img src="../assets/section/05.png" class="core-features_number" alt="number" />
                        <div class="core-features__section-icon">
                            <img src="../assets/section/card.png" alt="card" />
                            <h4 class="text-core-features__pretitle  text-white">Have High Rating</h4>
                            <p class="text-core-features__paragraph text-white">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                    <div class="swiper-slide core-features__section">
                        <img src="../assets/section/06.png" class="core-features_number" alt="number" />
                        <div class="core-features__section-icon">
                            <img src="../assets/section/Group (3).png" alt="offer" />
                            <h4 class="text-core-features__pretitle  text-white">Have High Rating</h4>
                            <p class="text-core-features__paragraph text-white">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <!-- NO SWIPER -->
            <div class="not-swiper-gallery  ">
                <div class="swiper-wrapper cards__features">
                    <div class="swiper-slide core-features__section">
                        <img src="../assets/section/01.png" class="core-features_number" alt="number" />
                        <div class="core-features__section-icon">
                            <img src="../assets/section/stars.png" alt="star" />
                            <h4 class="text-core-features__pretitle  text-white">Have High Rating</h4>
                            <p class="text-core-features__paragraph text-white">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                    <div class="swiper-slide  core-features__section">
                        <img src="../assets/section/02.png" class="core-features_number" alt="number" />
                        <div class="core-features__section-icon">
                            <img src="../assets/section/bruj.png" alt="bruj" />
                            <h4 class="text-core-features__pretitle  text-white">Have High Rating</h4>
                            <p class="text-core-features__paragraph text-white">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                    <div class="swiper-slide  core-features__section">
                        <img src="../assets/section/03.png" class="core-features_number" alt="number" />
                        <div class="core-features__section-icon">
                            <img src="../assets/section/map.png" alt="map" />
                            <h4 class="text-core-features__pretitle  text-white">Have High Rating</h4>
                            <p class="text-core-features__paragraph text-white">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                    <div class="swiper-slide  core-features__section">
                        <img src="../assets/section/04.png" class="core-features_number" alt="number" />
                        <div class="core-features__section-icon">
                            <img src="../assets/section/clock.png" alt="clock" />
                            <h4 class="text-core-features__pretitle  text-white">Have High Rating</h4>
                            <p class="text-core-features__paragraph text-white">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                    <div class="swiper-slide core-features__section">
                        <img src="../assets/section/05.png" class="core-features_number" alt="number" />
                        <div class="core-features__section-icon">
                            <img src="../assets/section/card.png" alt="card" />
                            <h4 class="text-core-features__pretitle  text-white">Have High Rating</h4>
                            <p class="text-core-features__paragraph text-white">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                    <div class="swiper-slide core-features__section">
                        <img src="../assets/section/06.png" class="core-features_number" alt="number" />
                        <div class="core-features__section-icon">
                            <img src="../assets/section/Group (3).png" alt="offer" />
                            <h4 class="text-core-features__pretitle  text-white">Have High Rating</h4>
                            <p class="text-core-features__paragraph text-white">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>


    </section>
    <!-- SECTION CARDS COUNTER -->
    <section>
        <div id="section_some_fun">
            <p class="text__small-section text-gray">COUNTER</p>
            <h2 class="text__counter-title text-black">Some Fun Facts</h2>
            <div class="section__cards text-center">
                <div class="section__cards-some ">
                    <img src="../assets/section/Group.png" alt="icon man" />
                    <img src="../assets/section/8000 Happy Users.png" alt="happy users" />
                    <img src="../assets/section/Vector.png" alt="arrow" />
                </div>
                <div class="section__cards-some">
                    <img src="../assets/section/Group (1).png" alt="hand" />
                    <img src="../assets/section/10M Reviews & Appriciate.png" alt="reviews" />
                    <img src="../assets/section/Vector.png" alt="arrow" />
                </div>
                <div class="section__cards-some">
                    <img src="../assets/section/Group (2).png" alt="planet" />
                    <img src="../assets/section/100 Country Coverage.png" alt="country" />
                    <img src="../assets/section/Vector.png" alt="arrow" />
                </div>
            </div>
            <div class="swiper swiper-custom-pagination dynamic-swiper">
                <div class="swiper-wrapper section_image-flex">
                    <div class="swiper-slide">
                        <img src="../assets/hotel/hotel1.jpg" class="image__counter" alt="hotel" />
                    </div>
                    <div class="swiper-slide">
                        <img src="../assets/hotel/hotel.jpg" class="image__counter" alt="hotel" />
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <!-- NO SWIPER -->
            <div class=" not-swiper-gallery">
                <div class="section_image-flex">
                    <div class="swiper-slide">
                        <img src="../assets/hotel/hotel1.jpg" class="image__counter" alt="hotel" />
                    </div>
                    <div class="swiper-slide">
                        <img src="../assets/hotel/hotel.jpg" class="image__counter" alt="hotel" />
                    </div>
                </div>

            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="../scripts/burger-nav.js"></script>
    <script src="../scripts/slide.js"></script>
    @endsection
 


