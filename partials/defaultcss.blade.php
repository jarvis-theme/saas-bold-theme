	{{favicon()}}
	
    <!-- <link rel="stylesheet" href="assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/animate.css" /> -->
    <!-- <link rel="stylesheet" href="assets/css/tailwindcss.css" /> -->
    
	{{generate_theme_css('saas-bold-theme/assets/css/LineIcons.2.0.css')}}
	{{generate_theme_css('saas-bold-theme/assets/css/tiny-slider.css')}}
	{{generate_theme_css('saas-bold-theme/assets/css/animate.css')}}

    @if($tema->isiCss=='')
	{{generate_theme_css('saas-bold-theme/assets/css/tailwindcss.css?v=001')}}
	@else
	{{generate_theme_css('saas-bold-theme/assets/css/edittailwindcss.css?v=001')}}
	@endif