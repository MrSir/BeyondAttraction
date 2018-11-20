@extends('theme.master')

@section('page-header')
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
                   No one ever showed me either. I had to learn it all myself, like most of us out there do. Through my experience I realized that key to your future success at dating is finding that sacred balance between confidence and charm.
               </p>
           </div>
           <div class="description">
               <p>
                   My book, Beyond Attraction, will guide you through the dating process, as I will share my personal experience with getting out of the friend zone, fighting the fear of approaching, learning when to talk and when to listen, how to and much, much more. You will learn more about attractive style, effective communication, confidence, and charisma.
               </p>
               <p>
                   There is nothing better than enjoying a dynamic and interesting life with someone who loves you and shares your desire to appreciate life. Remember, nobody has to be alone – and you’re far from being alone in your search for love!
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
               Suspendisse potenti. Praesent ac neque tempus, accumsan orci sed, laoreet magna. Aliquam mattis lorem ut mi ornare, non pretium nulla aliquet. Pellentesque at ex id leo accumsan pharetra gravida quis est. Donec efficitur nibh id ullamcorper molestie.
           </div>
           <div class="product-1 product-grid">
               <div class="title">Product 1: Get Started</div>
               <div class="description">
                   Suspendisse potenti. Praesent ac neque tempus, accumsan orci sed, laoreet magna. Aliquam mattis lorem ut mi ornare, non pretium nulla aliquet. Pellentesque at ex id leo accumsan pharetra gravida quis est.
               </div>
           </div>
           <div class="product-2 product-grid">
               <div class="title">Product 2: Advanced</div>
               <div class="description">
                   Suspendisse potenti. Praesent ac neque tempus, accumsan orci sed, laoreet magna. Aliquam mattis lorem ut mi ornare, non pretium nulla aliquet. Pellentesque at ex id leo accumsan pharetra gravida quis est.
               </div>
           </div>
           <div class="product-3 product-grid">
               <div class="title">Product 3: Ultimate</div>
               <div class="description">
                   Suspendisse potenti. Praesent ac neque tempus, accumsan orci sed, laoreet magna. Aliquam mattis lorem ut mi ornare, non pretium nulla aliquet. Pellentesque at ex id leo accumsan pharetra gravida quis est.
               </div>
           </div>
       </div>
       <div class="testimonials-grid">
           <div class="title">TESTIMONIALS</div>
           <div class="description">
               Suspendisse potenti. Praesent ac neque tempus, accumsan orci sed, laoreet magna. Aliquam mattis lorem ut mi ornare, non pretium nulla aliquet.
           </div>
           <div class="testimonials-carousel">
               *Testimonials go here. Auto rotating (5-6) with star ratings.*
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
               Suspendisse potenti. Praesent ac neque tempus, accumsan orci sed, laoreet magna. Aliquam mattis lorem ut mi ornare, non pretium nulla aliquet. Pellentesque at ex id leo accumsan pharetra gravida quis est. Donec efficitur nibh id ullamcorper molestie. Nam aliquet, risus et finibus imperdiet, mi est faucibus sapien, at molestie dolor neque eu neque. Suspendisse vitae neque in tellus tincidunt imperdiet sed a justo. Interdum et malesuada fames ac ante ipsum primis in faucibus.
           </div>
           <div class="get-started-button">
               <button class="button" onclick="window.load('/book');">GET STARTED NOW</button>
           </div>
       </div>
   </div>
@endsection