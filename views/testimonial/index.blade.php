<!-- ========================= testimonial-section start ========================= -->
<section id="testimonials" class="testimonial-section pt-8 pb-25 sm:p-0 lg:py-170">
    <div class="container">
        <div class="section-title text-center">
            <h1 class="mb-8">What our customers says</h1>
        </div>
        <div class="testimonial-active-wrapper relative">

            <div class="shapes">
                <img src="assets/img/testimonial/testimonial-shape.svg" alt="" class="shape shape-1 hidden lg:block -left-25 top-1/2 transform -translate-y-1/2">
                <img src="assets/img/testimonial/testimonial-dots.svg" alt="" class="shape shape-2 hidden lg:block left-150 -bottom-110 lg:-bottom-13 lg:w-1/4 xl:w-max">
            </div>

            <div class="testimonial-active">

				<!-- single testimonial -->
				@foreach(list_testimonial() as $key=>$value)
                <div class="single-testimonial">
                    <div class="row flex">
                        <div class="w-full lg:w-5/12">
                            <div class="testimonial-img inline-block lg:block text-left lg:text-right relative mb-8 lg:mb-0">
                                <img src="assets/img/testimonial/testimonial-1.png" alt="" class="lg:ml-auto">
                                <div class="quote">
                                    <i class="lni lni-quotation"></i>
                                </div>
                            </div>
                        </div>
                        <div class="w-0 lg:w-1/12"></div>
                        <div class="lg:w-6/12">
                            <div class="content-wrapper">
                                <div class="content">
                                    <p class="text-lg leading-7 mb-8">{{ ucfirst($value->isi) }}</p>
                                </div>
                                <div class="info">
                                    <h4 class="mb-3">{{ ucwords($value->nama) }}</h4>
                                    <!-- <p>Developer and Youtuber</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				@endforeach
				{{list_testimonial()->links()}} 

            </div>
        </div>
    </div>
</section>
<!-- ========================= testimonial-section end ========================= -->