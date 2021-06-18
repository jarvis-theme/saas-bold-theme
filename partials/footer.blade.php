<!-- ========================= footer start ========================= -->
<footer class="footer bg-cover bg-no-repeat bg-right-top pt-120 mt-25 bg-theme-color md:bg-transparent md:pt-260 lg:pt-260" style="background-image: url('assets/img/footer/footer-bg.svg');">
    <div class="container">
        <div class="widget-wrapper">
            <div class="row">

                <div class="w-full md:w-6/12 lg:w-3/12">
                    <div class="footer-widget mb-10 mx-3">
                        <div class="logo mb-8">
                            <a href="index.html"> 
                                <img src="assets/img/logo/logo.svg" alt=""> 
                                {{ HTML::image(logo_image_url(), 'logo '.strtolower(Theme::place('title')), array('class'=>'img-responsive', 'itemprop'=>'logo', 'srcset'=>logo_image_url())) }}
                            </a>
                        </div>
                        <p class="mb-8 text-white sm:pr-13 md:pr-0 2xl:pr-25">{{about_us()->isi}}</p>
                        
                        <ul class="socials flex items-center">
                            <li class="mr-5">
                                <a href="{{$kontak->fb}}"> <i class="lni lni-facebook-original"></i> </a>
                            </li>
                            <li class="mr-5">
                                <a href="{{$kontak->tw}}"> <i class="lni lni-twitter-original"></i> </a>
                            </li>
                            <li class="mr-5">
                                <a href="{{$kontak->ig}}"> <i class="lni lni-instagram-original"></i> </a>
                            </li>
                            <li>
                                <a href="{{$kontak->gp}}"> <i class="lni lni-linkedin-original"></i> </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                @foreach(all_menu() as $key=>$group) 
                <div class="w-full md:w-6/12 lg:w-3/12">
                    <div class="footer-widget mb-10 mx-3">
                        <h3 class="mb-6 text-white">{{$group->nama}}</h3>
                        <ul class="links">
                            @foreach($group->link as $key=>$link) 
                            <li> <a href="{{menu_url($link)}}">{{ ucfirst($link->nama) }}</a> </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endforeach
                @if($kontak->alamat!='')
                    <div class="w-full md:w-6/12 lg:w-3/12">
                        <div class="footer-widget mb-10 mx-3">
                            <h3 class="mb-6 text-white">Kontak/h3>
                            <ul class="links">
                                <li> <a href="{{menu_url($link)}}">{{ strtolower($link->alamat) }}</a> </li>
                                <li> <a href="{{menu_url($link)}}">{{ strtolower($link->telepon) }}</a> </li>
                                <li> <a href="{{menu_url($link)}}">{{ strtolower($link->hp) }}</a> </li>
                                <li> <a href="{{menu_url($link)}}">{{ strtolower($link->email) }}</a> </li>
                            </ul>
                        </div>
                    </div>
                @endif 

            </div>

            <div class="centering">
                @foreach(list_banks() as $bank) 
                    @if($bank->status == 1)
                    <img src="{{bank_logo($bank)}}" alt="{{$bank->bankdefault->nama}}" title="{{$bank->bankdefault->nama}}" />
                    @endif
                @endforeach
                @if(count(list_payments()) > 0)
                    @foreach(list_payments() as $pay)
                        @if($pay->nama == 'ipaymu' && $pay->aktif == 1)
                        <img class="img-responsive" src="{{url('img/bank/ipaymu.jpg')}}" alt="ipaymu" title="Ipaymu" />
                        @endif
                        @if($pay->nama == 'bitcoin' && $pay->aktif == 1)
                        <img class="img-responsive" src="{{url('img/bitcoin.png')}}" alt="bitcoin" title="Bitcoin" />
                        @endif
                        @if($pay->nama == 'paypal' && $pay->aktif == 1)
                        <img class="img-responsive" src="{{url('img/bank/paypal.png')}}" alt="paypal" title="Paypal" />
                        @endif
                    @endforeach
                @endif
                @if(count(list_dokus()) > 0 && list_dokus()->status == 1)
                <img class="img-responsive" src="{{url('img/bank/doku.jpg')}}" alt="doku myshortcart" title="Doku Myshortcart" />
                @endif
                @if(count(list_veritrans()) > 0 && list_veritrans()->status == 1 && list_veritrans()->type == 1)
                <img class="img-responsive midtrans" src="{{url('img/bank/midtrans.png')}}" alt="Midtrans" title="Midtrans">
                @endif
            </div>

            <div class="text-center py-18 text-white">Copyright &copy; {{date('Y')}} {{ Theme::place('title') }}. All Rights Reserved. Powered by <a target="_blank" href="http://jarvis-store.com">Jarvis Store</a></div>

        </div>

    </div>
</footer>
<!-- ========================= footer end ========================= -->


{{pluginPowerup()}} 