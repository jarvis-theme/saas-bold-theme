<!-- ========================= feature-section start ========================= -->
<section id="why" class="feature-extended-section pt-25">
    <div class="feature-extended-wrapper py-18 bg-theme-color bg-opacity-10">
        <div class="container">
            <div class="row flex justify-center">
                <div class="w-full md:w-9/12 lg:w-8/12 xl:w-6/12">
                    <div class="section-title text-center mb-15">
                        <h1 class="mb-6">{{$title}}</h1>
                    </div>
                </div>
            </div>

            <div class="row flex flex-wrap">
				@foreach(list_blog(null,@$blog_category) as $key=>$value)
					<div class="w-full md:w-1/2 lg:w-4/12">
						<div class="p-8 lg:px-3">
							<div class="feature-icon-2 mb-8 text-theme-color leading-none">
								<img src="{{ imgString($value->isi) }}" />
							</div>
							<div class="content">
								<h3 class="mb-5"><a href="{{blog_url($value)}}">{{$value->judul}}</a></h3>
								<p class="text-lg">{{waktuTgl($value->created_at)}} - {{blogIndex($value->isi,150)}}</p>
							</div>
						</div>
					</div>
				@endforeach
				{{list_blog(null,@$blog_category)->links()}} 

            </div>
        </div>
    </div>
</section>
<!-- ========================= feature-section end ========================= -->