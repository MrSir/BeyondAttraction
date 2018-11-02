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
               <div class="title">Product 1</div>
               <div class="description">
                   Suspendisse potenti. Praesent ac neque tempus, accumsan orci sed, laoreet magna. Aliquam mattis lorem ut mi ornare, non pretium nulla aliquet. Pellentesque at ex id leo accumsan pharetra gravida quis est.
               </div>
           </div>
           <div class="poduct-2 product-grid">
               <div class="title">Product 2</div>
               <div class="description">
                   Suspendisse potenti. Praesent ac neque tempus, accumsan orci sed, laoreet magna. Aliquam mattis lorem ut mi ornare, non pretium nulla aliquet. Pellentesque at ex id leo accumsan pharetra gravida quis est.
               </div>
           </div>
           <div class="poduct-3 product-grid">
               <div class="title">Product 3</div>
               <div class="description">
                   Suspendisse potenti. Praesent ac neque tempus, accumsan orci sed, laoreet magna. Aliquam mattis lorem ut mi ornare, non pretium nulla aliquet. Pellentesque at ex id leo accumsan pharetra gravida quis est.
               </div>
           </div>
       </div>
       <div class="testimonials-grid">testimonials</div>
       <div class="blog-feed-grid">blog feed </div>
       <div class="work-with-us-grid">work with us</div>
   </div>
@endsection