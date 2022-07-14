<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/piece-logo.png') }}" />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&display=swap"
      rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/css/general.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/queries.css') }}" />

    <title>A Piece For a Change</title>
    <style>
        html{
            scroll-behavior: smooth;

        }
    </style>
  </head>
  <body>
    @if (\Session::has('success'))
    <div class="alert alert-success" style="font-size: 19px;">

            {!! \Session::get('success') !!}
    </div>
    @endif
    <header class="header">
      <div class="content-container">
        <a href="#">
          <img class="logo" alt="logo" src="{{ asset('assets/img/Asset 6.png') }}" />
        </a>
        <nav class="main-nav">
          <ul class="main-nav-list">
            <li>
              <a class="main-nav-link" href="#about"
                >What is A Piece For a Change</a
              >
            </li>
            <li>
              <a class="main-nav-link" href="#how">Package Components</a>
            </li>
            <li><a class="main-nav-link" href="#who-are-we">Who Are We</a></li>
            <li>
              <a class="main-nav-link" href="#section-contact">Contact Us</a>
            </li>
            <li>
              <a
                class="main-nav-link nav-cta default-link"
                href="{{ url('orderHome') }}"
                >ORDER NOW</a
              >
            </li>
          </ul>
        </nav>

        <button class="btn-mobile-nav">
          <ion-icon class="icon-mobile-nav" name="menu-outline"></ion-icon>
          <ion-icon class="icon-mobile-nav" name="close-outline"></ion-icon>
        </button>
      </div>
    </header>

    <main>
      <section class="hero-section">
        <h1 class="hero-title heading-primary">
          <span class="highlight">Energy</span> is essential for
          development,<span class="break-line"></span> and
          <span class="highlight">sustainable energy</span> is essential
          <span class="break-line"></span> for sustainable development.
        </h1>
        <div class="content-container">
          <div class="gallery-container">
            <div class="gallery">
              <figure class="gallery-item">
                <img src="{{ asset('assets/img/pots/mong-bui-NznxEfw9iVI-unsplash.jpg') }}" alt="" />
              </figure>
              <figure class="gallery-item">
                <img src="{{ asset('assets/img/pots/mong-bui-NznxEfw9iVI-unsplash.jpg') }}" alt="" />
              </figure>
              <figure class="gallery-item">
                <img src="{{ asset('assets/img/pots/mong-bui-NznxEfw9iVI-unsplash.jpg') }}" alt="" />
              </figure>
              <figure class="gallery-item">
                <img src="{{ asset('assets/img/pots/mong-bui-NznxEfw9iVI-unsplash.jpg') }}" alt="" />
              </figure>
              <figure class="gallery-item">
                <img src="{{ asset('assets/img/pots/mong-bui-NznxEfw9iVI-unsplash.jpg') }}" alt="" />
              </figure>
              <figure class="gallery-item">
                <img src="{{ asset('assets/img/pots/mong-bui-NznxEfw9iVI-unsplash.jpg') }}" alt="" />
              </figure>
              <figure class="gallery-item">
                <img src="{{ asset('assets/img/pots/mong-bui-NznxEfw9iVI-unsplash.jpg') }}" alt="" />
              </figure>
              <figure class="gallery-item">
                <img src="{{ asset('assets/img/pots/mong-bui-NznxEfw9iVI-unsplash.jpg') }}" alt="" />
              </figure>
            </div>
          </div>
        </div>
      </section>

      <section class="section-wt-is-piece" id="about">
        <div class="content-container">
          <div class="grid-pattern--1">
            <div class="left">
              <img src="{{ asset('assets/img/section-wt-pots.jpg') }}" alt="" />
            </div>
            <div class="right">
              <h2>What is A Piece For a Change?</h2>
              <div>
                <div>
                  <p>
                    A Piece for a Change is a project which applies the Circular
                    & Green Economy concepts and Sustainability pillars, its
                    main vision is to flourish the culture of agriculture which
                    is on the verge of collapse in egypt, we came up with a plan
                    to approach this goal.
                  </p>

                  <p>
                    Sustainable packaging is one of the most important aspects
                    in all developing countries and all economies are shifting
                    towards, our solution is producing packaging products that
                    are sustainable by making them plantable utilizable
                    materials with minimal deforestation impact from the
                    production process to packaging post-use.
                  </p>

                  <p>
                    This evolutionary idea allows the Final users to plant any
                    part of the packaging box and labels in the soil.
                  </p>

                  <p>
                    We provide a packaging solution to SMEs that supports the
                    environmental causes, as a part of their CSR program to join
                    the environmental companies Map of Egypt. A Piece for a
                    Change supports a well-functioning Ecosystem.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section-how" id="how">
        <div class="content-container">
          <span class="subheading">How we do it?</span>
          <h2>The package components</h2>
        </div>

        <div class="content-container grid grid--2-cols grid--center-v">
          <!-- STEP 01 -->
          <div class="step-text-box">
            <p class="step-number">01</p>
            <h3>The pot</h3>
            <p class="step-description">
              ceramic and clay pots handmade by Autism and Down Syndrome Orphans
              & Women in need to empower, specially trained by Enactus new Cairo
              team members and available in multiple colors and 4 different
              shapes. The pots have a unique mark that identifies these orphans'
              fingerprints pressed on the bottom of the pot.
            </p>
          </div>
          <div class="step-img-box">
            <img
              src="{{ asset('assets/img/package-components/step-2.png') }}"
              class="step-img"
              alt=""
            />
          </div>

          <!-- STEP 02 -->

          <div class="step-img-box">
            <img
              src="{{ asset('assets/img/package-components/soil.jpg') }}"
              class="step-img"
              alt="natural soil mixed with coconut coir"
            />
          </div>
          <div class="step-text-box">
            <p class="step-number">02</p>
            <h3>The soil</h3>
            <p class="step-description">
              A craft bag that contains natural soil mixed with coconut coir
              which is a natural waste product that causes minimal impact on the
              environment, it is a renewable resource, 100% organic, provides
              both water retention and aeration benefits, promotes stronger root
              growth and coconut coir has proven itself to be the most
              environmentally friendly alternative to peat moss.
            </p>
          </div>

          <!-- STEP 03 -->
          <div class="step-text-box">
            <p class="step-number">03</p>
            <h3>The plantable label</h3>
            <p class="step-description">
              A One Double Layered Label in which the seeds inserted between its
              layers, also it is easily splittable into half, contains 2 types
              of seeds and the cardboard layers are biodegradable material that
              dissolves in the soil providing minerals that nourish the soil.
            </p>
          </div>
          <div class="step-img-box">
            <img
              src="{{ asset('assets/img/package-components/step-2.png') }}"
              class="step-img"
              alt=""
            />
          </div>

          <!-- STEP 04 -->
          <div class="step-img-box">
            <img
              src="{{ asset('assets/img/package-components/step-2.png') }}"
              class="step-img"
              alt=""
            />
          </div>
          <div class="step-text-box">
            <p class="step-number">04</p>
            <h3>How plantable paper works</h3>
            <p class="step-description">
              A One Double Layered Label in which the seeds inserted between its
              layers, also it is easily splittable into half, contains 2 types
              of seeds and the cardboard layers are biodegradable material that
              dissolves in the soil providing minerals that nourish the soil.
            </p>
          </div>
        </div>
      </section>

      <section class="section-down-pics">
        <div class="content-container">
          <div class="down-text-box">
            <h2 class="down-heading">
              Why did we choose Autism and Down Syndrome Orphans?
            </h2>

            <p>
              As they have labor power and talents that they don’t get the
              opportunity to utilize, we help create this opportunity for them
              through a special stoneware and pottery training program provided
              by Enactus New Cairo to these participants within three days of
              training.
            </p>

            <p>
              Pots come in different shapes and colors, with a unique mark that
              identifies these orphans' fingerprints pressed on the bottom of
              the pot.
            </p>
          </div>

          <div class="down-pics-container">
            <img src="{{ asset('assets/img/down-pics/down1.jpg') }}" alt="down's Syndrome picture" />
            <img src="{{ asset('assets/img/down-pics/down1.jpg') }}" alt="down's Syndrome picture" />
            <img src="{{ asset('assets/img/down-pics/down3.jpg') }}" alt="down's Syndrome picture" />
          </div>
        </div>
      </section>

      <section class="section-features">
        <div class="content-container grid-pattern--2">
          <div class="left">
            <h2>
              Our trusted team <span class="break-line" />
              of experts
            </h2>
            <div class="features-container">
              <div class="feature">
                <div class="icon-container">
                  <ion-icon class="icon-30" name="eye-outline"></ion-icon>
                </div>
                <div>
                  <h3>Our vision</h3>
                  <p>
                    Creating a well-functioning Ecosystem through Plantable
                    Packaging Boxes & Plantable Clothes Label from recycled
                    cartoon and Flower seeds.
                  </p>
                </div>
              </div>
              <div class="feature">
                <div class="icon-container">
                  <ion-icon
                    class="icon-30"
                    name="checkmark-circle-outline"
                  ></ion-icon>
                </div>
                <div>
                  <h3>Approved</h3>
                  <p>
                    Our products have been tested to be plantable in any soil,
                    and purely environmentally friendly.
                  </p>
                </div>
              </div>
              <div class="feature">
                <div class="icon-container">
                  <ion-icon class="icon-30" name="heart-outline"></ion-icon>
                </div>
                <div>
                  <h3>Creative</h3>
                  <p>
                    “Planet me” is an evolutionary idea that allows the Final
                    users to plant any part of the packaging box or clothes
                    label in the soil. cultivating different types of herbs and
                    flower.
                  </p>
                </div>
              </div>

              <div class="feature">
                <div class="icon-container">
                  <svg
                    data-name="Layer 1"
                    id="Layer_1"
                    viewBox="0 0 64 64"
                    xmlns="http://www.w3.org/2000/svg"
                    class="icon-25"
                  >
                    <g>
                      <path
                        class="cls-1"
                        d="M49,40.49a3.08,3.08,0,0,0-3.67-.42l-1-4.06,0-.09,0-.08a1,1,0,0,0-.2-.29h0l-1.41-1.41a3,3,0,0,0-4.25,0h0l-.71-.72L51,20.05a1,1,0,0,1,.9-.27,9.86,9.86,0,0,0,4.61-.11,10.11,10.11,0,0,0,7.13-7.13,9.82,9.82,0,0,0,.27-3.65h0a2,2,0,0,0-3.42-1.17l-2.78,2.84a1,1,0,0,1-1.42,0L53.49,7.73A1,1,0,0,1,53.2,7a1,1,0,0,1,.3-.72l2.79-2.84a2,2,0,0,0,.47-2.08A2,2,0,0,0,55.11.06,10,10,0,0,0,44.33,7.47a9.81,9.81,0,0,0-.11,4.6A1,1,0,0,1,44,13L30.59,26.34,14.23,10l-.52-2.64a3,3,0,0,0-.82-1.54L7.66.59a2,2,0,0,0-2.83,0L.59,4.83a2,2,0,0,0,0,2.83l5.22,5.23a3,3,0,0,0,1.54.82l2.64.52L26.34,30.59,13,44a1,1,0,0,1-.9.27,9.86,9.86,0,0,0-4.61.11A10.11,10.11,0,0,0,.33,51.46a9.82,9.82,0,0,0-.27,3.65,2,2,0,0,0,1.33,1.65,2,2,0,0,0,2.09-.48l2.78-2.84a1,1,0,0,1,1.42,0l2.83,2.83a1,1,0,0,1,.29.7,1,1,0,0,1-.3.72L7.71,60.53a2,2,0,0,0,1.18,3.41A10.32,10.32,0,0,0,10,64a10,10,0,0,0,9.67-7.47,9.81,9.81,0,0,0,.11-4.6A1,1,0,0,1,20,51L33.41,37.66l.72.71h0a3,3,0,0,0,0,4.25L35.54,44h0a1,1,0,0,0,.29.2l.08,0,.09,0,4.05,1A3,3,0,0,0,40.49,49L54.64,63.12a3,3,0,0,0,4.24,0l4.24-4.24a3,3,0,0,0,0-4.24ZM45.37,14.38a3,3,0,0,0,.81-2.73A7.9,7.9,0,0,1,46.26,8,8.07,8.07,0,0,1,52,2.27a7.57,7.57,0,0,1,2.91-.21L52.08,4.9a3,3,0,0,0,0,4.25L54.91,12a3,3,0,0,0,4.25,0L62,9.11h0A7.83,7.83,0,0,1,61.73,12a8.08,8.08,0,0,1-5.7,5.7,7.77,7.77,0,0,1-3.68.08,3,3,0,0,0-2.74.81L36.24,32,32,27.76ZM18.63,49.62a3,3,0,0,0-.81,2.73A7.9,7.9,0,0,1,17.74,56a8.07,8.07,0,0,1-5.7,5.7,7.57,7.57,0,0,1-2.91.21l2.79-2.85a3,3,0,0,0,0-4.24L9.09,52a3,3,0,0,0-4.25,0L2.05,54.88A7.83,7.83,0,0,1,2.27,52,8.08,8.08,0,0,1,8,46.26a7.9,7.9,0,0,1,3.68-.08,3,3,0,0,0,2.74-.81L27.76,32,32,36.24ZM40.49,35.25a1,1,0,0,1,.71.29l.71.71-5.66,5.66-.71-.71a1,1,0,0,1,0-1.41l4.25-4.25A1,1,0,0,1,40.49,35.25ZM6.24,2,8,3.77,3.77,8,2,6.24Zm1,9.47L4.47,8.72,8.72,4.47l2.75,2.76a1,1,0,0,1,.28.51l.48,2.42-2.07,2.07-2.42-.48A1,1,0,0,1,7.23,11.47Zm4.67,1.84,1.41-1.41L37,35.54,35.54,37Zm30.88,24.9.85,3.39-2,2-3.39-.85ZM61.71,57.46h0l-4.25,4.25a1,1,0,0,1-1.41,0L41.91,47.56a1,1,0,0,1-.29-.7,1,1,0,0,1,.29-.71l4.24-4.24a1,1,0,0,1,.71-.29,1,1,0,0,1,.7.29L61.71,56.05a1,1,0,0,1,.29.71A1,1,0,0,1,61.71,57.46Z"
                      />
                      <path
                        class="cls-1"
                        d="M44.38,46.5a.5.5,0,0,0-.7,0,.5.5,0,0,0,0,.71L56.4,59.94a.51.51,0,0,0,.36.15.49.49,0,0,0,.35-.15.5.5,0,0,0,0-.71Z"
                      />
                      <path
                        class="cls-1"
                        d="M45.8,45.09a.5.5,0,0,0-.71.71L57.82,58.52a.49.49,0,0,0,.35.15.47.47,0,0,0,.35-.15.48.48,0,0,0,0-.7Z"
                      />
                      <path
                        class="cls-1"
                        d="M47.21,43.68a.5.5,0,0,0-.71,0,.5.5,0,0,0,0,.7L59.23,57.11a.51.51,0,0,0,.36.15.5.5,0,0,0,.35-.15.51.51,0,0,0,0-.71Z"
                      />
                    </g>
                  </svg>
                </div>
                <div>
                  <h3>Supporting</h3>
                  <p>
                    supporting and teaching Dawn Syndrome Orphans & women in
                    need to empower them in the community. Who hand makes our
                    “Planet me” packages.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="right">
            <img src="{{ asset('assets/img/photo.jpg') }}" alt="piece team" />
          </div>
        </div>
      </section>

      <section class="section-who section-who-1" id="who-are-we">
        <div class="content-container">
          <div class="background"></div>
          <h2 class="span-row">Who Are We?</h2>
          <div class="section-who-grid">
            <img src="{{ asset('assets/img/enactus-logo.png') }}" class="span-2" alt="Enactus Logo" />

            <div class="content content--right span-5">
              <p>
                <span> Enactus</span> is a non-profit organization that shares
                the propose of enabling process through Entrepreneur actions.
              </p>
              <p>
                Enactus is the world’s most influential learning platform
                dedicated to create a better world while developing the next
                generation of entrepreneurial leaders and social innovators.
              </p>
            </div>

            <img
              src="{{ asset('assets/img/enactus-nc.png') }}"
              class="span-2"
              alt="Enactus NC logo"
            />
            <div class="content content--right span-5">
              <p>
                We <span>Enactus NC</span> found our way to become from the top
                10 universities in Egypt for 2 years in a row. The last year we
                won 3 trophies for our projects in the national competition. We
                also organised the 'TOT' training this year delivered to 2000+
                students by the UNICEF in only two weeks
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="section-experienced">
        <div class="content-container">
          <div class="section-header">
            <h2>Meet Our Experienced Team</h2>
          </div>

          <div class="experienced-container">
            <div class="experienced-card">
              <div class="team-img-box">
                <img src="{{ asset('assets/img/anas.png') }}" alt="Hendry Doe" />
              </div>
              <h3 class="team-name">ANAS KHALED</h3>
              <p class="team-job">Co-Founder</p>
            </div>

            <div class="experienced-card">
              <div class="team-img-box">
                <img src="{{ asset('assets/img/hagar-walid.jpg') }}" alt="HAGAR WALID - Co-Founder" />
              </div>
              <h3 class="team-name">HAGAR WALID</h3>
              <p class="team-job">Co-Founder</p>
            </div>
          </div>
        </div>
      </section>

      <section class="section-featured-in">
        <div class="section-header">
          <h2>Our Trusted Clients & Partners</h2>
        </div>

        <div class="content-container featured-in-container">
          <div class="featured-in-logo">
            <img src="{{ asset('assets/img/featured-in/dog.png') }}" alt="" />
          </div>
          <div class="featured-in-logo">
            <img src="{{ asset('assets/img/featured-in/rita.png') }}" alt="" />
          </div>
        </div>
      </section>

      <section id="section-contact" class="section-contact">
        <div class="content-container contact-container">
          <div class="left">
            <h2>
              Join A Piece for A Change's <span class="break-line"></span>
              News Letter Now
            </h2>

            <form class="cta-form" method="GET" action="{{ route('store_Comment')}}"
            >
              <div class="input-name">
                <input
                  id="your-name"
                  type="text"
                  name="name"
                  placeholder="YOUR NAME"
                  required
                />
              </div>

              <div class="input-email">
                <input
                  id="email"
                  type="email"
                  name="email"
                  placeholder="EMAIL ADDRESS"
                  required
                />
              </div>
              <button class="btn join-btn"type="submit">JOIN</button>
            </form>
          </div>
          <div class="right">
            <h2>Our Contact Details</h2>
            <div class="contact-info">
              <div class="call-us">
                <span>Call Us</span>
                <div class="call-us-info">
                  <p>Mutasem Khairy (PR lead)</p>
                  <p>+20 111 208 4948</p>
                </div>
              </div>

              <div class="email-address">
                <span>Email Address</span>
                <div class="email-address-info">
                  <p>hello@enactusnewcairo.org</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer class="footer">
      <div class="content-container footer-container grid grid--2-cols">
        <div class="copyright">
          <p>powered by Enactus NC.</p>
        </div>

        <div class="footer-nav-list">
          <nav>
            <ul>
              <li>
                <a class="footer-nav-link" href="#">Home</a>
              </li>
              <li>
                <a class="footer-nav-link" href="#about">About Us</a>
              </li>
              <li>
                <a class="footer-nav-link" href="#who-are-we">Who Are We</a>
              </li>
              <li>
                <a class="footer-nav-link" href="#section-contact">Products</a>
              </li>
              <li>
                <a class="footer-nav-link" href="{{ url('Packetsdashboard') }}">Admin</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </footer>
    <script src="{{ asset('assets/script.js') }}"></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>
