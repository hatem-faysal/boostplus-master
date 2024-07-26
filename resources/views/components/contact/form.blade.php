<!-- contact-form-box start -->
<section class="contact-form-box flex-min-height-box"
    style="background-image:url({{ asset('frontend/images/backgrounds/pexels-photo-1287145.jpeg') }})">
    <div class="bg-overlay"></div>
    <!-- flex-min-height-inner start -->
    <div class="flex-min-height-inner">
        <!-- contact-form-container start -->
        <div class="contact-form-container">
            <!-- container start -->
            <div class="container small top-bottom-padding-120 form-box">
                <h4 class="small-title-oswald text-color-4 text-center">Lets Get In Touch!</h4>
                <!-- flex-container start -->
                <form class="flex-container top-padding-90" action="{{ route('contactus.store') }}" method="POST">
                @method('POST')
                @csrf
                    <!-- column start -->
                    <div class="four-columns">
                        <div class="content-right-margin-10 input-box">
                            <input type="text" value="{{ old('firstname') }}" name="firstname" id="first_name" required
                                class="form-input pointer-small">
                            <label for="first_name" class="form-label">First name</label>
                        </div>
                    </div><!-- column end -->
                    <!-- column start -->
                    <div class="four-columns">
                        <div class="content-left-right-margin-5 input-box">
                            <input type="text" value="{{ old('lastname') }}" name="lastname" id="last_name" required
                                class="form-input pointer-jsmall">
                            <label for="last_name" class="form-label">Last name</label>
                        </div>
                    </div><!-- column end -->
                    <!-- column start -->
                    <div class="four-columns">
                        <div class="content-left-margin-10 input-box">
                            <input type="email" value="{{ old('email') }}" name="email"  id="email" required class="form-input pointer-small">
                            <label for="email" class="form-label email-label">Email address</label>
                        </div>
                    </div><!-- column end -->
                    <!-- column start -->
                    <div class="twelve-columns input-box message-input">
                        <textarea name="message" id="message" required class="form-input pointer-small">{{ old('message') }}</textarea>
                        <label for="message" class="form-label">Message content</label>
                    </div><!-- column end -->
                    <!-- column start -->
                    <input type="hidden" name="url" value="{{ url()->current() }}">
                    <div class="twelve-columns text-center top-padding-90">
                        <button id="send" type="submit" class="border-btn-box pointer-large">
                            <span class="border-btn-inner">
                                <span class="border-btn" data-text="submit">submit</span>
                            </span>
                        </button>
                    </div><!-- column end -->
                </form><!-- flex-container end -->
            </div><!-- container end -->

            <!-- alert start -->
            <div class="js-popup-fade" id="m_sent">
                <div class="js-popup text-center">
                    <div class="popup-icon">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="popup-alert title-style text-color-4">
                        Thank you!<br>
                        Your submission<br>
                        has been received!
                    </div>
                    <div class="flip-btn-box js-popup-close">
                        <div class="flip-btn pointer-large" data-text="Close">Close</div>
                    </div>
                </div>
            </div><!-- alert end -->

            <!-- alert start -->
            <div class="js-popup-fade" id="m_err">
                <div class="js-popup text-center">
                    <div class="popup-icon">
                        <i class="fas fa-times"></i>
                    </div>
                    <div class="popup-alert title-style text-color-4">Error</div>
                    <div class="flip-btn-box js-popup-close">
                        <div class="flip-btn pointer-large" data-text="Close">Close</div>
                    </div>
                </div>
            </div><!-- alert end -->
        </div><!-- contact-form-container end -->
    </div><!-- flex-min-height-inner end -->
</section><!-- contact-form-box end -->