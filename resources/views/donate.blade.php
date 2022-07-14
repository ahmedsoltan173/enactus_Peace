<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Feed Product</title>
    <link rel="stylesheet" href="{{asset('assets/css/nicepage.css')}}" media="screen">
<link rel="stylesheet" href="{{asset('assets/css/Feed-Product.css')}}" media="screen">
    <script class="u-script" type="text/javascript" src="{{asset('assets/jquery.js')}}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{asset('assets/nicepage.js')}}" defer=""></script>
    <meta name="generator" content="Nicepage 4.13.4, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">



    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Feed Product">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-custom-color-4 u-header u-header" id="sec-9b57"><div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <img class="u-image u-image-round u-preserve-proportions u-radius-10 u-image-1" src="{{asset('assets/images/Hope-logo.png')}}" alt="" data-image-width="171" data-image-height="52" data-href="/">
      </div></header>
    <section class="u-clearfix u-custom-color-4 u-section-1" id="sec-38d1">
      <div class="u-clearfix u-sheet u-sheet-1">
        <a href="{{ url('DonateHome') }}" data-page-id="3948726" class="u-active-custom-color-3 u-border-none u-btn u-button-style u-custom-color-2 u-hover-custom-color-1 u-btn-1">Back</a>

            <img class="u-image u-image-round u-preserve-proportions u-radius-10 u-image-1"
            @if ($type=='wet food')
                src="{{asset('assets/images/7596PurinaFelixAsGoodasitLooksJuniorWithChickeninJellyWetCatFoodPouch100g-removebg-preview.png')}}"

            @elseif ($type='Dry food')
                src="{{asset('assets/images/download-removebg-preview.png')}}"

            @endif


            alt="" data-image-width="225" data-image-height="225">

        <div class="u-align-center u-form u-form-1">
          <form method="GET" action="{{ route('storeDonate')}}" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form"    style="padding: 10px;">
            @csrf
            <input type="hidden" name="type" value="{{ $type }}">
            <div class="u-form-group u-form-name">
              <label for="name-eca2" class="u-label">Name</label>
              <input type="text" placeholder="Enter your Name" id="name-eca2" name="name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
            </div>
            <div class="u-form-group u-form-phone u-form-group-2">
              <label for="phone-c06c" class="u-label">Phone</label>
              <input type="tel" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder="Phone number" id="phone-c06c" name="phone" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
            </div>
            <div class="u-form-email u-form-group">
              <label for="email-eca2" class="u-label">Email</label>
              <input type="email" placeholder="Enter a valid email address" id="email-eca2" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
            </div>
            <div class="u-form-address u-form-group u-form-group-4">
              <label for="address-095e" class="u-label">Address</label>
              <input type="text" placeholder="Enter your address" id="address-095e" name="address" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
            </div>
            <div class="u-form-date u-form-group u-form-group-5">
              <label for="date-75f9" class="u-label">Receive Date</label>
              <input type="date" placeholder="MM/DD/YYYY" id="date-75f9" name="date" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
            </div>

            <div class="u-form-group u-form-select u-form-group-6">
                <label for="select-2315" class="u-label">Shelter You Will Donate To</label>
                <div class="u-form-select-wrapper">
                  <select id="select-2315" name="shelter" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                    <option value="Dry Food">Dry Food</option>
                    <option value="Wet Food">Wet Food</option>
                    <option value="Item 3">Item 3</option>
                  </select>
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
                </div>
              </div>
            <div class="u-form-group u-form-select u-form-group-6">
              <label for="select-187f" class="u-label">Amount of Order</label>
              <div class="u-form-select-wrapper">
                <select id="select-187f" name="select" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                  <option value="20 kg Sack = 424 L.E">20 kg Sack = 424 L.E</option>
                  <option value="1/2 Ton = 4250 L.E">1/2 Ton = 4250 L.E</option>
                  <option value="1 Ton =8500 L.E">1 Ton =8500 L.E</option>
                </select>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
              </div>
            </div>
            <div class="u-form-group u-form-message">
              <label for="message-eca2" class="u-label">Comment</label>
              <textarea placeholder="Enter your message" rows="4" cols="50" id="message-eca2" name="message" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"></textarea>
            </div>
            <div class="u-align-left u-form-group u-form-submit">
              {{-- <a href="Order-Confirmation.html" data-page-id="803601041" class="u-active-black u-border-none u-btn u-btn-submit u-button-style u-custom-color-2 u-hover-custom-color-3 u-btn-2">Confirm Order<br>
              </a> --}}
              <input type="submit" value="submit" class="u-active-black u-border-none u-btn u-btn-submit u-button-style u-custom-color-2 u-hover-custom-color-3 u-btn-2">
            </div>
            <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
            <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
            <input type="hidden" value="" name="recaptchaResponse">
          </form>
        </div>
      </div>
    </section>



    <footer class="u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-custom-color-4 u-footer" id="sec-420a"><div class="u-align-left u-clearfix u-sheet u-sheet-1"></div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>.
    </section>

</body></html>
