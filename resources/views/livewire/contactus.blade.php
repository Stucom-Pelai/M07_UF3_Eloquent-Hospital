<div id="getintouch" class="section wb wow fadeIn" style="padding-bottom:0;">
    <div class="container">
        <div class="heading">
            <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
            <h2>Get in Touch</h2>
        </div>

    </div>
    @error('captcha')
    <div class="alert alert-danger text-center" role="alert">
        {{ $message }}
    </div>
    @enderror
    <div class="contact-section">
        <div class="form-contant">
            <form wire:submit.prevent="add_to_contact">
                <div id="captcha" class="mt-4" wire:ignore></div>

                @if($captcha)
                <div style="background-color:red; padding:3px;">{{$message}}</div>
                @endif
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group in_name">
                            <input type="text" class="form-control" placeholder="Name" wire:model.lazy="name" required="required" style="color: cyan">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group in_email">
                            <input type="email" class="form-control" wire:model.lazy="email" placeholder="E-mail" required="required " style="color: cyan">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group in_email">
                            <input type="tel" class="form-control" id="phone" wire:model.lazy="phone" placeholder="Phone" required="required" style="color: cyan">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group in_email">
                            <input type="text" class="form-control" id="subject" wire:model.lazy="subject" placeholder="Subject" required="required" style="color: cyan">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group in_message">
                            <textarea class="form-control" id="message" rows="2" placeholder="Message" wire:model.lazy="message" required="required" style="color: cyan"></textarea>

                            <button id="submitButton" type="submit" data-sitekey="{{env('CAPTCHA_SITE_KEY')}}" data-callback='handle' data-action='submit' class="g-recaptcha btn small">
                                Submit your message
                            </button>
                        </div>
                    </div>
            </form>
            @if (session()->has('message'))
            <script>
                alert("{{ session('message')}}");
            </script>
            @endif
        </div>
        <div id="googleMap" style="width:100%;height:450px;"></div>
    </div>
</div>

<script src="https://www.google.com/recaptcha/api.js?onload=handle&render=explicit" async defer>
</script>

<script>
    var handle = function(e) {
        widget = grecaptcha.render('captcha', {
            'sitekey': "{{ env('CAPTCHA_SITE_KEY') }}",
            'theme': 'light',
            'callback': verify
        });

    }
    var verify = function(response) {
        @this.set('captcha', response)
    }
</script>