<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>package_order</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/piece-logo.png') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/nicepage.css') }}" media="screen">
<link rel="stylesheet" href="{{ asset('assets/css/package_order.css') }}" media="screen">

    <script class="u-script" type="text/javascript" src="{{ asset('assets/js/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('assets/js/nicepage.js') }}" defer=""></script>
    <meta name="generator" content="Nicepage 4.13.4, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/1.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="package_order">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-header u-white u-header" id="sec-b30b"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="{{ url('orderHome') }}" data-page-id="263478301" class="u-image u-logo u-image-1" data-image-width="500" data-image-height="500" title="A Piece For A Change">
          <img src="{{ asset('assets/images/1.png') }}" class="u-logo-image u-logo-image-1">
        </a>
      </div></header>
    <section class="u-clearfix u-white u-section-1" id="sec-2712">
      <div class="u-clearfix u-sheet u-sheet-1">
        <a href="{{ url('/') }}" data-page-id="263478301" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-3 u-custom-font u-font-lato u-hover-custom-color-5 u-radius-13 u-btn-1">Back<span style="font-weight: 700;">
            <span style="font-weight: 400;">
              <span style="font-weight: 700;">
                <span style="font-weight: 400;">
                  <span style="font-weight: 700;">
                    <span style="font-weight: 400;">
                      <span style="font-weight: 700;">
                        <span style="font-weight: 400;">
                          <span style="font-weight: 700;"></span>
                        </span>
                      </span>
                    </span>
                  </span>
                </span>
              </span>
            </span>
          </span>
        </a>
        <img class="u-image u-image-round u-radius-10 u-image-1" src="{{ asset('assets/images/IMG_9467.png') }}" alt="" data-image-width="1920" data-image-height="1280">
        <div class="u-form u-form-1">
            <form method="GET" action="{{ route('storePackets')}}" class=" "   style="padding: 0px;margin-left: -17px;
                width: calc(100% +  17px);margin-bottom: 17px;
                padding-left: 17px;  margin-right: 17px;">
            @csrf
            <div class="u-form-group u-form-name">
              <label for="name-4344" class="u-label u-label-1">Name</label>
              <input type="text" placeholder="Enter your Name" id="name-4344" name="name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
            </div>
            <div class="u-form-email u-form-group">
              <label for="email-4344" class="u-label u-label-2">Email</label>
              <input type="email" placeholder="Enter a valid email address" id="email-4344" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
            </div>
            <div class="u-form-address u-form-group u-form-group-3">
              <label for="address-6c0b" class="u-label u-label-3">Address</label>
              <input type="text" placeholder="Enter your address" id="address-6c0b" name="address" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
            </div>
            <div class="u-form-group u-form-phone u-form-group-4">
              <label for="phone-9413" class="u-label u-label-4">Phone</label>
              <input type="tel"  placeholder="Enter your phone (e.g. +14155552675)" id="phone-9413" name="phone" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
            </div>
            <div class="u-form-date u-form-group u-form-group-5">
              <label for="date-c2e3" class="u-label u-label-5">Receive Date</label>
              <input type="date" placeholder="MM/DD/YYYY" id="date-c2e3" name="date" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
            </div>
            <div class="u-form-group u-form-select u-form-group-6">
              <label for="select-7feb" class="u-label u-label-6">Amount of Packages</label>
              <div class="u-form-select-wrapper">
                <select id="select-7feb" name="amount" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                  <option value="0">None</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                </select>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
              </div>
            </div>
            <div class="u-form-group u-form-message">
              <label for="message-4344" class="u-label u-label-7">Message</label>
              <textarea placeholder="Enter your message" rows="4" cols="50" id="message-4344" name="message" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"></textarea>
            </div>
            <div class="u-align-left u-form-group u-form-submit">
              {{-- <a href="order_confirmation.html" data-page-id="39926441" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-3 u-custom-font u-font-lato u-hover-custom-color-2 u-radius-15 u-btn-2">Confirm<br> --}}
              {{-- </a> --}}
              <input type="submit" value="submit" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-3 u-custom-font u-font-lato u-hover-custom-color-2 u-radius-15 u-btn-2">
            </div>
            {{-- <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
            <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div> --}}
            {{-- <input type="hidden" value="" name="recaptchaResponse"> --}}
          </form>
        </div>
      </div>
    </section>
    
    
    
  
</body></html>