@extends('layouts.app')

@section('content')
        <!-- Swiper -->
<div class="bg-img py-2">
  <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
              <div class="imgBx">
                  <img style="width:100%; height:100%;" src="/images/1.jpg" alt="tasty">
              </div>
              <div class="details">
                  <h3>Lagman<br><span>CookMe</span></h3>
              </div>
          </div>
        <div class="swiper-slide">
            <div class="imgBx">
                <img style="width:100%; height:100%;" src="/images/2.jpg" alt="tasty">
            </div>
            <div class="details">
                  <h3>Lagman<br><span>CookMe</span></h3>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="imgBx">
                <img style="width:100%; height:100%;" src="/images/3.jpg" alt="tasty">
            </div>
            <div class="details">
                <h3>Lagman<br><span>CookMe</span></h3>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="imgBx">
                <img style="width:100%; height:100%;" src="/images/4.jpg" alt="tasty">
            </div>
             <div class="details">
                <h3>Lagman<br><span>CookMe</span></h3>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="imgBx">
                <img style="width:100%; height:100%;" src="/images/5.jpg" alt="tasty">
            </div>
            <div class="details">
                <h3>Lagman<br><span>CookMe</span></h3>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="imgBx">
                <img style="width:100%; height:100%;" src="/images/6.jpg" alt="tasty">
            </div>
            <div class="details">
                <h3>Lagman<br><span>CookMe</span></h3>
            </div>
        </div>
       <div class="swiper-slide">
            <div class="imgBx">
                <img style="width:100%; height:100%;" src="/images/7.jpg" alt="tasty">
            </div>
            <div class="details">
                <h3>Lagman<br><span>CookMe</span></h3>
            </div>
            </div>
        <div class="swiper-slide">
            <div class="imgBx">
                <img style="width:100%; height:100%;" src="/images/1.jpg" alt="tasty">
            </div>
            <div class="details">
                <h3>Lagman<br><span>CookMe</span></h3>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="imgBx">
                <img style="width:100%; height:100%;" src="/images/1.jpg" alt="tasty">
            </div>
            <div class="details">
                <h3>Lagman<br><span>CookMe</span></h3>
            </div>
        </div>
    </div>
  </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
      </div>
    <!--Swipe.js include-->
    <script type="text/javascript" src="{{ asset('js/swiper.min.js') }}"></script>
      <script>
            var swiper = new Swiper('.swiper-container', {
              effect: 'coverflow',
              grabCursor: true,
              centeredSlides: true,
              slidesPerView: 'auto',
              coverflowEffect: {
                rotate: 60,
                stretch: 0,
                depth: 500,
                modifier: 1,
                slideShadows : true,
              },
              pagination: {
                el: '.swiper-pagination',
              },
            });
          </script>
    </div>
    <h1 class="py-4">Posts</h1>
    @if(count($posts) > 0)
        <div class="row d-flex text-center  justify-content-center mx-2">
            @foreach ($posts as $post)
                    <div class="col-4">
                    <div class="card columns end px-4" style="width: 18rem; height: 50px;">
                        <a href="/posts/{{$post->id}}">
                            <img style="width:100%" class="img-thumbnail" src="/storage/cover_images/{{$post->cover_image}}" alt="Post Image">
                        </a>
                    <div class="card-body">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <small>Written on {{$post->created_At}} by {{$post->user->name}}</small>
                            </div>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
        </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection
