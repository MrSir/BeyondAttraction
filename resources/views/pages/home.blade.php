@extends('theme.master')

@section('page-header')
    <link rel="stylesheet" href="/vendor/bxslider-4-master/dist/jquery.bxslider.css"/>
    <script type="text/javascript" src="/vendor/bxslider-4-master/dist/jquery.bxslider.js"></script>

    <link href="/css/pages/home-style.css" rel="stylesheet">
    <link href="/css/pages/home-large-style.css" rel="stylesheet">
@endsection

@section('content')
    <div class="main-grid">
        <div class="about-grid">
            <div class="title">ABOUT VANE CARNERO</div>
            <div class="sub-title">
                <p>
                    But what if no one ever showed you how dating really works? Feeling a bit overwhelmed?
                </p>
                <p>
                    Don’t worry. I’m here to help.
                </p>
                <p>
                    No one ever showed me either. I had to learn it all myself, like most of us out there do. Through my
                    experience I realized that key to your future success at dating is finding that sacred balance
                    between confidence and charm.
                </p>
            </div>
            <div class="description">
                <p>
                    My book, Beyond Attraction, will guide you through the dating process, as I will share my personal
                    experience with getting out of the friend zone, fighting the fear of approaching, learning when to
                    talk and when to listen, how to and much, much more. You will learn more about attractive style,
                    effective communication, confidence, and charisma.
                </p>
                <p>
                    There is nothing better than enjoying a dynamic and interesting life with someone who loves you and
                    shares your desire to appreciate life. Remember, nobody has to be alone – and you’re far from being
                    alone in your search for love!
                </p>
            </div>
            <div class="book">
                <img src="/img/book_front_3D.png" width="100%"/>
            </div>
            <div class="book-button">
                <button class="button" onclick="window.load('/book');">LEARN MORE</button>
            </div>
        </div>
        <div class="what-we-do-grid">
            <div class="title">WHAT WE DO</div>
            <div class="sub-title">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </div>
            <div class="description">
                Suspendisse potenti. Praesent ac neque tempus, accumsan orci sed, laoreet magna. Aliquam mattis lorem ut
                mi ornare, non pretium nulla aliquet. Pellentesque at ex id leo accumsan pharetra gravida quis est.
                Donec efficitur nibh id ullamcorper molestie.
            </div>
            <div class="product-1 product-grid">
                <div class="title">Product 1: Get Started</div>
                <div class="description">
                    Suspendisse potenti. Praesent ac neque tempus, accumsan orci sed, laoreet magna. Aliquam mattis
                    lorem ut mi ornare, non pretium nulla aliquet. Pellentesque at ex id leo accumsan pharetra gravida
                    quis est.
                </div>
            </div>
            <div class="product-2 product-grid">
                <div class="title">Product 2: Advanced</div>
                <div class="description">
                    Suspendisse potenti. Praesent ac neque tempus, accumsan orci sed, laoreet magna. Aliquam mattis
                    lorem ut mi ornare, non pretium nulla aliquet. Pellentesque at ex id leo accumsan pharetra gravida
                    quis est.
                </div>
            </div>
            <div class="product-3 product-grid">
                <div class="title">Product 3: Ultimate</div>
                <div class="description">
                    Suspendisse potenti. Praesent ac neque tempus, accumsan orci sed, laoreet magna. Aliquam mattis
                    lorem ut mi ornare, non pretium nulla aliquet. Pellentesque at ex id leo accumsan pharetra gravida
                    quis est.
                </div>
            </div>
        </div>
        <div class="testimonials-grid">
            <div class="title">TESTIMONIALS</div>
            <div class="description">
                Suspendisse potenti. Praesent ac neque tempus, accumsan orci sed, laoreet magna. Aliquam mattis lorem ut
                mi ornare, non pretium nulla aliquet.
            </div>
            <div class="testimonials-carousel">
                <ul class="bxslider">
                    <li><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><br/>
                        <p>"I personally know Vane, and what I like about him is that he is a normal guy,
                        with a normal job, and a normal family. He does not pretend to be something he is not, but
                        he also
                        knows a lot about dating. I was happy to learn he wrote a book. I would recommend it to any
                        guy who
                        wants to better at dating."</p>
                    </li>
                    <li><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><br/>
                        <p>"I always considered myself “average” when it comes to dating, but after I read
                            the book, I realised we are all “average” until we start learning."</p>
                    </li>
                    <li><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><br/>
                        <p>"Vane helped me become more confident without being needy or insecure. Don’t
                        ever mistake being a great guy with being a nice guy!"</p>
                    </li>
                    <li><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><br/>
                        <p>"I found the book through a Facebook ad and it got me curious. I bought it,
                        because I always wanted to know how to overcome my fear of approaching. There are few really
                        awesome
                        chapters on the whole idea of talking to girls. I learned a lot from it."</p>
                    </li>
                    <li><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><br/>
                        <p>"Getting phone numbers, going out on dates and being generally attractive is
                        not a problem for me. But I do get to the point where I’ve been to 10 dates and nothing
                        happens
                        after that. I bought the book, and I read the chapter “Exciting Dating 101”. I found a lot
                        of
                        answers down there. Thanks Vane!"</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="blog-feed-grid">
            @foreach($articles as $article)
                <div class="post-grid">
                    <div class="img" style="background-image: url('{{ $article->cover->link }}');"></div>
                    <div class="overlay">
                        <div class="title"><a href="/blog/{{ $article->id }}">{{ $article->title }}</a></div>
                    </div>
                </div>
            @endforeach
            <button class="button" onclick="window.load('/blog');">LEARN MORE</button>
        </div>
        <div class="work-with-us-grid">
            <div class="title">WORK WITH US</div>
            <div class="description">
                Suspendisse potenti. Praesent ac neque tempus, accumsan orci sed, laoreet magna. Aliquam mattis lorem ut
                mi ornare, non pretium nulla aliquet. Pellentesque at ex id leo accumsan pharetra gravida quis est.
                Donec efficitur nibh id ullamcorper molestie. Nam aliquet, risus et finibus imperdiet, mi est faucibus
                sapien, at molestie dolor neque eu neque. Suspendisse vitae neque in tellus tincidunt imperdiet sed a
                justo. Interdum et malesuada fames ac ante ipsum primis in faucibus.
            </div>
            <div class="get-started-button">
                <button class="button" onclick="window.load('/book');">GET STARTED NOW</button>
            </div>
        </div>
    </div>
    <script type="text/javascript">
      $(document).ready(
        function () {
          $('.testimonials-carousel .bxslider').bxSlider(
            {
              // GENERAL
              mode: 'horizontal',
              slideSelector: '',
              infiniteLoop: true,
              hideControlOnEnd: false,
              speed: 3000,
              easing: null,
              slideMargin: 0,
              startSlide: 0,
              randomStart: false,
              captions: false,
              ticker: false,
              tickerHover: false,
              adaptiveHeight: false,
              adaptiveHeightSpeed: 500,
              video: false,
              useCSS: true,
              preloadImages: 'visible',
              responsive: true,
              slideZIndex: 50,
              wrapperClass: 'bx-wrapper',

              // TOUCH
              touchEnabled: true,
              swipeThreshold: 50,
              oneToOneTouch: true,
              preventDefaultSwipeX: true,
              preventDefaultSwipeY: false,

              // KEYBOARD
              keyboardEnabled: false,

              // PAGER
              pager: false,

              // CONTROLS
              controls: false,
              nextText: 'Next',
              prevText: 'Prev',
              nextSelector: null,
              prevSelector: null,
              autoControls: false,
              startText: 'Start',
              stopText: 'Stop',
              autoControlsCombine: false,
              autoControlsSelector: null,

              // AUTO
              auto: true,
              pause: 7000,
              autoStart: true,
              autoDirection: 'next',
              stopAutoOnClick: false,
              autoHover: false,
              autoDelay: 0,
              autoSlideForOnePage: false,

              // CAROUSEL
              minSlides: 1,
              maxSlides: 3,
              moveSlides: 1,
              slideWidth: 260,
              shrinkItems: true,
            },
          )
        },
      )
    </script>
@endsection