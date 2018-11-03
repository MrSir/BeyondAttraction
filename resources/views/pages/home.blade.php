@extends('theme.master')

@section('page-header')
    <link href="/css/pages/home-style.css" rel="stylesheet">
    {{--<link href="/css/pages/home-large-style.css" rel="stylesheet">--}}
@endsection

@section('content')
   <div class="main-grid">
       <div class="about-grid">
           <div class="title">ABOUT VANE CARNERO</div>
           <div class="sub-title">
               Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit eros dictum ante pharetra maximus. Suspendisse sapien magna, tincidunt convallis semper at, imperdiet sit amet risus. Duis in eros massa.
           </div>
           <div class="description">
               Suspendisse potenti. Praesent ac neque tempus, accumsan orci sed, laoreet magna. Aliquam mattis lorem ut mi ornare, non pretium nulla aliquet. Pellentesque at ex id leo accumsan pharetra gravida quis est. Donec efficitur nibh id ullamcorper molestie. Nam aliquet, risus et finibus imperdiet, mi est faucibus sapien, at molestie dolor neque eu neque. Suspendisse vitae neque in tellus tincidunt imperdiet sed a justo. Interdum et malesuada fames ac ante ipsum primis in faucibus.
           </div>
           <div class="book">
               <img src="/img/book-front.jpg"/>
           </div>
           <div class="book-button">
               <button class="button" onclick="window.load('/book');">Learn more &gt;</button>
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
           <div class="poduct-1 product-grid">
               <div class="title">Product 1: Get Started</div>
               <div class="description">
                   Suspendisse potenti. Praesent ac neque tempus, accumsan orci sed, laoreet magna. Aliquam mattis lorem ut mi ornare, non pretium nulla aliquet. Pellentesque at ex id leo accumsan pharetra gravida quis est.
               </div>
           </div>
           <div class="poduct-2 product-grid">
               <div class="title">Product 2: Advanced</div>
               <div class="description">
                   Suspendisse potenti. Praesent ac neque tempus, accumsan orci sed, laoreet magna. Aliquam mattis lorem ut mi ornare, non pretium nulla aliquet. Pellentesque at ex id leo accumsan pharetra gravida quis est.
               </div>
           </div>
           <div class="poduct-3 product-grid">
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
                   <a href="/blog/{{ $article->id }}"><img src="{{ $article->cover->link }}"/></a>
                   <div class="title"><a href="/blog/{{ $article->id }}">{{ $article->title }}</a></div>
                   <div class="summary">
                       {{ $article->summary }}<br/>
                       <a href="/blog/{{ $article->id }}">Read More</a>
                   </div>
               </div>
           @endforeach
       </div>
       <div class="work-with-us-grid">
           <div class="title">WORK WITH US</div>
           <div class="description">
               Suspendisse potenti. Praesent ac neque tempus, accumsan orci sed, laoreet magna. Aliquam mattis lorem ut mi ornare, non pretium nulla aliquet. Pellentesque at ex id leo accumsan pharetra gravida quis est. Donec efficitur nibh id ullamcorper molestie. Nam aliquet, risus et finibus imperdiet, mi est faucibus sapien, at molestie dolor neque eu neque. Suspendisse vitae neque in tellus tincidunt imperdiet sed a justo. Interdum et malesuada fames ac ante ipsum primis in faucibus.
           </div>
           <div class="get-started-button">
               <button class="button" onclick="window.load('/book');">Get Started Now &gt;</button>
           </div>
       </div>
   </div>
@endsection