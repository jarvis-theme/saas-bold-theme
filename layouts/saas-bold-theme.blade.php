<!DOCTYPE html>
<html class="no-js" lang="id">

<head>
    {{ Theme::partial('seostuff') }} 
    {{ Theme::asset()->styles() }} 
    {{ Theme::partial('defaultcss') }} 
</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    {{ Theme::partial('header') }} 

    {{ Theme::partial('slider') }} 

    {{ Theme::place('content') }} 

    {{ Theme::partial('subscribe') }} 
    
    {{ Theme::partial('footer') }} 

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top btn-hover">
        <i class="lni lni-chevron-up"></i>
    </a>

    {{ Theme::partial('defaultjs') }} 
    {{ Theme::partial('analytic') }} 
</body>

</html>