<!-- ========================= feature-section start ========================= -->
<section id="why" class="feature-extended-section pt-25">
    <div class="feature-extended-wrapper py-18 bg-theme-color bg-opacity-10">
        <div class="container">
            <div class="row flex justify-center">
                <div class="w-full md:w-9/12 lg:w-8/12 xl:w-6/12">
                    <div class="section-title text-center mb-15">
                        <h1 class="mb-6">{{$detailblog->judul}}</h1>
                        <div class="text-lg">
							{{$detailblog->isi}}
						</div>
						<br>
						<div class="navigate comments clearfix">
							@if(prev_blog($detailblog))
							<p class="pull-left">
								<a href="{{blog_url(prev_blog($detailblog))}}" id="navigate-post">&larr; {{ trans('content.shop_front.shop.blog.next_blog') }}</a>
							</p>
							@endif
							@if(next_blog($detailblog))
							<p class="pull-right">
								<a href="{{blog_url(next_blog($detailblog))}}" id="navigate-post">{{ trans('content.shop_front.shop.blog.prev_blog') }} &rarr;</a>
							</p>
							@endif
						</div>
						<hr>
						{{$fbscript}} 
						{{fbcommentbox(blog_url($detailblog), '100%', '5', 'light')}} 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================= feature-section end ========================= -->