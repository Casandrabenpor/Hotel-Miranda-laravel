@extends('layout')

@section('title', 'Rooms details')

@section('content')


    <!-- SECTION TITLE -->
    <section class="section-title">
        <div class="text__title">
            <div class="title__header">
                <h5 class="text__title pretitle">THE ULTIMATE LUXURY</h5>
                <h1 class="text__title title">Ultimate Room</h1>
            </div>

            <div class="page__title-container">
                <div class="page__title">
                    <p class="page__text text-black">Home</p>
                    <p class="page__text text-black">|</p>
                    <p class="page__text text-gray">Room Details</p>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION ROOMS DETAILS -->
    <section>
        <div class="section__room">
            <div class="section__room-detail">
                <p class="text__small-section text-gray-color">{{ $room->bed_type }}</p>
                <p class="text__big-section">Luxury Double Bed</p>
                <p class="text__number-room-details text-gray">${{ $room->rate }}</p>
                <img src="../assets/hotel/bed.jpg" class="image-roomDetail" alt="hotel" />
            </div>
            <div class="section__room-detail-calendar">

                <p class="text__small-bold text-black text-center">Check Availability</p>

                <div class="section__check">
                    <p class="text__check">Check In</p>
                    <input type="date" value="date" />

                </div>
                <div class="section__check">
                    <p class="text__check">Check Out</p>
                    <input type="date" value="date" />
                    <button type="button" class="section__text-button text_button text-center">CHECK
                        AVAILABILIY</button>
                </div>
            </div>
        </div>
        <div class="section__rooms-text">
            <p class="text__details-paragraph text-gray-color">Lorem ipsum dolor sit amet, consectetur
                adipisicing
                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                irure
                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum.
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                laudantium,
                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                fugit,
                sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                quisquam
                est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam
                eius
                modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
        </div>



    </section>
    <!-- SECTION AMENITIES -->
    <section class="section__amenities">
        <h3 class="text__title-amenieties">Amenities</h3>
        <div class="section__list-column">
            <ul class=" text-gray-color">
                <li> <img src="../assets/rooms-details/air.png" alt="air" />
                    <p class="section__list-amenities">Air conditioner</p>
                </li>
                <li> <img src="../assets/rooms-details/breakfast.png" alt="Breakfast" />
                    <p>Breakfast</p>
                </li>
                <li> <img src="../assets/rooms-details/clean.png" alt="Cleaning" />
                    <p class="section__list-amenities">Cleaning</p>
                </li>
                <li> <img src="../assets/rooms-details/grocery.png" alt="Grocery" />
                    <p class="section__list-amenities">Grocery</p>
                </li>
                <li> <img src="../assets/rooms-details/shop.png" alt="Shop near" />
                    <p>Shop near</p>
                </li>
                <li> <img src="../assets/rooms-details/support.png" alt="24/7 Online Support" />
                    <p class="section__list-amenities">24/7 Online Support</p>
                </li>
                <li> <img src="../assets/rooms-details/smart.png" alt="Smart Security" />
                    <p class="section__list-amenities">Smart Security</p>
                </li>
            </ul>
            <ul class="text-gray-color">
                <li> <img src="../assets/rooms-details/wifi.png" alt="High speed WiFi" />
                    <p class="section__list-amenities">High speed WiFi</p>
                </li>
                <li> <img src="../assets/rooms-details/kitchen.png" alt="Kitchen" />
                    <p class="section__list-amenities">Kitchen</p>
                </li>
                <li> <img src="../assets/rooms-details/shower.png" alt="Shower" />
                    <p class="section__list-amenities">Shower</p>
                </li>
                <li> <img src="../assets/rooms-details/bed.png" alt="Single bed" />
                    <p class="section__list-amenities">Single bed</p>
                </li>
                <li> <img src="../assets/rooms-details/towels.png" alt="Towels" />
                    <p class="section__list-amenities">Towels</p>
                </li>
                <li> <img src="../assets/rooms-details/locker.png" alt="Strong Locker" />
                    <p class="section__list-amenities">Strong Locker</p>
                </li>
                <li> <img src="../assets/rooms-details/expert.png" alt="Expert Team" />
                    <p class="section__list-amenities">Expert Team</p>
                </li>
            </ul>
        </div>
        <div class="section__room-person">
            <div class="section__room-photo">
                <img src="../assets/hotel/person.jpg" alt="person" class="section__room-photo" />
                <img src="../assets/rooms-details/check 2.svg" class="section__room-check" alt="check" />

            </div>
            <p class="section__name-person text-black">Rosalina D. William</p>
            <p class="section__name-data">Founder, Qux Co.</p>
            <p class="section__name-paragraph text-gray-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore.</p>
        </div>
        <!-- CANCELLATION -->
        <h3 class="text__title-amenieties">Cancellation</h3>
        <p class="section__cancellation text-gray-color">Phasellus volutpat neque a tellus venenatis, a euismod augue
            facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus. Pellentesque orci quis hendrerit sed
            eu dolor. Cancel up to 14 days to get a full refund.</p>
        <!-- RELATED ROOMS -->
        <h3 class="text__title-amenieties">Related Rooms</h3>
        <div class="section__relatedRooms">
            <div class="section__gallery-related">
                <div class="">
                    <img src="../assets/hotel/bed10.jpg" alt="bed" class="section_image" />
                </div>
                <div class="section_button-rooms section_button-rooms-detail-btn">
                    <img src="../assets/section rooms/room-button.png" alt="button rooms" />
                </div>
                <h4 class="text__room-title text-center text-black">{{ $room->bed_type }}</h4>
                <p class="text__room-paragraph text-center text-gray-color">Lorem ipsum dolor sit amet, consectetur
                    adipi
                    sicing elit, sed do eiusmod tempor.</p>
                <div class="section__gallery-text">
                    <p class="text__room-price text-gray ">${{ $room->offer_price }}</p>
                    <p class="text__room-booking "> Booking Now</p>
                </div>
            </div>
            <div class="section__gallery-related">
                <div class="">
                    <img src="../assets/hotel/bed10.jpg" alt="bed" class="section_image" />
                </div>
                <div class="section_button-rooms section_button-rooms-detail-btn">
                    <img src="../assets/section rooms/room-button.png" alt="button rooms" />
                </div>
                <h4 class="text__room-title text-center text-black">{{ $room->bed_type }}</h4>
                <p class="text__room-paragraph text-center text-gray-color">Lorem ipsum dolor sit amet, consectetur
                    adipi
                    sicing elit, sed do eiusmod tempor.</p>
                <div class="section__gallery-text">
                    <p class="text__room-price text-gray ">${{ $room->offer_price }}</p>
                    <p class="text__room-booking "> Booking Now</p>
                </div>
            </div>
        </div>

    </section>



    <script src="../scripts/burger-nav.js"></script>
@endsection
