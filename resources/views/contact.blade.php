
@extends('layout')

@section('title', 'Contact')

@section('content')
    <!-- SECTION TITLE -->
    <section class="section-title">
        <div class="text__title">
            <div class="title__header">
                <h5 class="text__title pretitle">THE ULTIMATE LUXURY</h5>
                <h1 class="text__title title">New Details</h1>
            </div>

            <div class="page__title-container">
                <div class="page__title">
                    <p class="page__text text-black">Home</p>
                    <p class="page__text text-black">|</p>
                    <p class="page__text text-gray">Blog</p>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION CONTACT -->
    <section class="section__contact">
        <div class="section__contact-container">
            <img src="../assets/section-contact/01.png" class="section__contact-number" alt="number" />
            <img src="../assets/section-contact/icon-message.png" class="section__contact-icon" alt="message" />
            <div class="section__contact-text">
                <h6 class="text__title-contact text-black">Hotel Address</h6>
                <p class="text__date-contact text-gray-color">OXYGEN Workspace, C/Princesa 31, planta 2, 28008 Madrid
                </p>
            </div>
        </div>
        <div class="section__contact-container">
            <img src="../assets/section-contact/02.png" class="section__contact-number" alt="number" />
            <img src="../assets/section-contact/icon-telephone.png" class="section__contact-icon" alt="message" />
            <div class="section__contact-text">
                <h6 class="text__title-contact text-black">Phone Number</h6>
                <p class="text__date-contact text-gray-color">600 222 894
                </p>
            </div>
        </div>
        <div class="section__contact-container">
            <img src="../assets/section-contact/03.png" class="section__contact-number" alt="number" />
            <img src="../assets/section-contact/icon-map.png" class="section__contact-icon" alt="message" />
            <div class="section__contact-text">
                <h6 class="text__title-contact text-black">Email</h6>
                <p class="text__date-contact text-gray-color">casandra211@gmail.com
                </p>
            </div>
        </div>

    </section>
    <div class="section_contact-map">
        <img src="../assets/footer/contact.jpg" class="section_image" alt="contact" />
    </div>
    <!-- SECTION ENTER CONTACT -->
    <section>
        <form action="" method="post">
        <div id="contact__form">

            <div class="contact__form-container">
                <div class="section__enter-contact ">
                    <img src="../assets/section-contact/account.png" alt="acount" />
                    <input type="text" name="name" placeholder="Your full name">
                </div>
            </div>
            <div class="contact__form-container">
                <div class="section__enter-contact ">
                    <img src="../assets/section-contact/email.png" alt="acount" />
                    <input type="email"  name="email" placeholder="Enter email address" />
                </div>
            </div>
            <div class="contact__form-container">
                <div class="section__enter-contact ">
                    <img src="../assets/section-contact/phone.png" alt="acount" />
                    <input type="number" name="phone" placeholder="Add phone number" />
                </div>
            </div>
            <div class="contact__form-container">
                <div class="section__enter-contact ">
                    <img src="../assets/section-contact/subject.png" alt="acount" />
                    <input type="text"  name="subject" placeholder="Enter subject" />
                </div>
            </div>
        </div>
        <div class="section__enter-contact ">
            <img src="../assets/section-contact/pen.png" class="enter_message-pen" alt="acount" />
        <textarea  name="message" class="enter_message" placeholder="Tell us what you need" cols="50" rows="10"></textarea>
        </div>


        <button  type="submit" class="section__text-button text_button text-center button__center">SEND</button>
    </form>
    </section>
<script src="../scripts/burger-nav.js"></script>

@endsection


