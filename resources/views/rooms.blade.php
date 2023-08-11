@extends('layout')

@section('title', 'Rooms')

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
                    <p class="page__text text-gray">Rooms</p>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION GALLERY -->
    <section id="section__gallery-grid">
        @foreach ($rooms as $room)
            <div class="section__gallery active-img">
                <img src="../assets/hotel/bed_small.jpg" class="section_image" alt="duplex room" />
                <div class="section_button-rooms section_button-rooms-btn">
                    <img src="../assets/section rooms/room-button.png" alt="button rooms" />
                </div>
                <h4 class="text__room-title text-center text-black">{{ $room->bed_type }}</h4>
                <p class="text__room-paragraph text-center text-gray-color">Lorem ipsum dolor sit amet, consectetur
                    adipi
                    sicing elit, sed do eiusmod tempor.
                </p>
                <div class="section__gallery-text">
                    <p class="text__room-price text-gray">${{ $room->rate }}/Night</p>
                    <p class="text__room-booking">
                        <a href="../rooms/{{ $room->id }}">Booking Now
                        </a>
                    </p>

                </div>
            </div>
        @endforeach
    </section>
    <div id="paginationSection" class="section__gallery-pagination">
        <img src="../assets/section rooms/Pagination.png" alt="pagination" />
    </div>

    <script src="../scripts/burger-nav.js"></script>
    <script src="../scripts/pagination.js"></script>
@endsection
