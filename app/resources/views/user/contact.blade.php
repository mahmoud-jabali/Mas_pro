{{-----top-----}}

@extends('include_user.top')
 <!-- header-start -->
    <!------------------------------------------ header-start --------------------------------------------->
    @include('include_user.header')
       <!---------------------------------------- /header-start ---------------------------------------------->
       @section('title','Contact')


    <!-- ---------------------------------Form Section-------------------------------- -->
    <div class="section2">
    <div class="contact-form">
        <h2>Contact Us</h2>
        <hr>
        <form action="{{route('contact.store')}}" method="post">
            @csrf
            <div class="form-group">
                <input type="text" id="name" name="name" placeholder="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" placeholder="Message" required></textarea>
            </div>
            <div class="form-group">
                <input id="submit" type="submit"value="Submit" placeholder="comment" >
            </div>
        </form>
    </div>
</div>

                </div>
            </div>
        </section>
        <!-- ---------------------------------/contact-------------------------------- -->


    <!-------------------------------- Location Section ---------------------------------->

    <div class="Msection">

    <div id="Map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7849.7397813829475!2d35.005371909419736!3d29.53077191838495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2sjo!4v1694951704626!5m2!1sar!2sjo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

     <div class="info">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Aqaba, Jordan.</h3>
                                <p>aq, Aq 91770</p>
                            </div>
                        </div>
                        <hr>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+962777777777</h3>
                                <p>Available everyday</p>
                            </div>
                        </div>
                        <hr>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>support@clinic.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>

    </div>
    <!-------------------------------- Location Section ---------------------------------->






 <!-------------------------------- footer Section ---------------------------------->

 @include('include_user.footer')

 <!-- -----------------------------------Java Script-------------------------------- -->

   <!-- --------------------------------font-awesome--------------------------------- -->

     @extends('include_user.js')
