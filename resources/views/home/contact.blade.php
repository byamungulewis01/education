@extends('layouts.front')
@section('title', 'Contuct Us')
@section('body')

    <!--SECTION START-->
    <section>
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2>{{ $contact->title }}</h2>
                            <p>{{ $contact->header_section }}</p>
                        </div>
                    </div>
                    <div class="pg-contact">
                        <div class="col-md-4 col-sm-6 col-xs-12 new-con new-con1">
                            <h2>{{ $contact->company_desc_title }}</h2>
                            <p>{{ $contact->company_descr }}</p>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 new-con new-con1"> <img src="img/contact/1.html" alt="">
                            <h4>{{ $contact->addr_title }}</h4>
                            <p>{{ $contact->company_addr_details }}</p>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 new-con new-con3"> <img src="img/contact/2.html" alt="">
                            <h4>{{ $contact->contact_title }}</h4>
                            <p>{{ $contact->contact_details }}</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->

    <section id="map">
        <div class="row contact-map">
            <!-- IFRAME: GET YOUR LOCATION FROM GOOGLE MAP -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6290413.804893654!2d-93.99620524741552!3d39.66116578737809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880b2d386f6e2619%3A0x7f15825064115956!2sIllinois%2C+USA!5e0!3m2!1sen!2sin!4v1469954001005"
                allowfullscreen=""></iframe>
            <div class="container">
                <div class="overlay-contact footer-part footer-part-form">
                    <div class="map-head">
                        <p>Send Us Now</p>
                        <h2>GetIn Touch</h2> <span class="footer-ser-re">Service Request Form</span> </div>
                    <!-- ENQUIRY FORM -->
                    <form id="contact_form" name="contact_form" action="http://rn53themes.net/themes/demo/education-master/send.php">
                        <ul>
                            <li class="col-md-12 col-sm-12 col-xs-12 contact-input-spac">
                                <input type="text" id="f1" value="" name="f1" placeholder="Name" required=""> </li>
                            <li class="col-md-12 col-sm-12 col-xs-12 contact-input-spac">
                                <input type="text" id="f2" value="" name="f2" placeholder="Email" required=""> </li>

                            <li class="col-md-12 col-sm-12 col-xs-12 contact-input-spac">
                                <textarea id="f5" name="f5" required=""></textarea>
                            </li>
                            <li class="col-md-6">
                                <input type="submit" value="SUBMIT"> </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
