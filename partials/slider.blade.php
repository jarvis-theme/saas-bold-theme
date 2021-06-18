<!-- ========================= hero-section start ========================= -->
<section id="home" class="hero-section relative bg-no-repeat bg-top z-10 pt-200 pb-13 lg:pb-200 2xl:pb-120" style="background-image: url('assets/img/hero/hero-bg.svg')">
    <div class="container">
        @foreach(slideshow() as $slide)
            <div class="row flex items-center relative">
                <div class="w-full lg:w-1/2">
                    <div class="hero-content mb-0 lg:mb-6">
                        @if(!empty($slide->text))
                            <h1 class="text-white mb-9 text-4xl sm:text-5xl md:text-6xl lg:text-5xl xl:text-5xl 2xl:text-6xl">{{$slide->title}}</h1>
                            <p class="text-white text-lg mb-10 xl:pr-18 2xl:pr-120">
                                {{$slide->text}}
                            </p>
                        @endif
                        @if(!empty($slide->url))
                            <a href="{{filter_link_url($slide->url)}}" class="main-btn border-btn btn-hover mb-2">Get Started</a>
                        @endif
                        <!-- <a href="#features" class="scroll-bottom"> <i class="lni lni-arrow-down"></i></a> -->
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <div class="hero-img pt-8 lg:pt-0">
                        <img src="{{ slide_image_url($slide->gambar) }}" alt="" class="w-full lg:w-auto">
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
<!-- ========================= hero-section end ========================= -->
