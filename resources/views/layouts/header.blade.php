<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
@if (config('app.env') != 'production')
<meta name="robots" content="noindex">
@endif
@include('layouts.meta', ['pageMeta' => \Request::path()])
@stack('meta')
<base href="{{ url('') }}">
<link rel="canonical" href="{{ URL::current()}}" />

<!-- Bootstrap Min CSS -->
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<!-- Animation Min CSS -->
<link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
<!-- Font Awesome Min CSS -->
<link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
<!-- Owl Carousel Min CSS -->
<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
<!-- Slick Min CSS -->
<link rel="stylesheet" href="{{asset('css/slick.min.css')}}">
<!-- Nice Select CSS -->
<link rel="stylesheet" href="{{asset('css/nice-select.min.css')}}">
<!-- Magnific Popup Min CSS -->
<link rel="stylesheet" href="{{asset('css/magnific-popup.min.css')}}">
<!-- Odometer Min CSS -->
<link rel="stylesheet" href="{{asset('css/odometer.min.css')}}">
<!-- FlatIcon CSS -->
<link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
<!-- Mean Menu CSS -->
<link rel="stylesheet" href="{{asset('css/meanmenu.min.css')}}">
<!-- Style CSS -->
<link rel="stylesheet" href="{{asset('css/style.min.css')}}">
<!-- Responsive CSS -->
<link rel="stylesheet" href="{{asset('css/responsive.min.css')}}">
<link rel="stylesheet" href="{{asset('css/custom.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"
    integrity="sha256-ENFZrbVzylNbgnXx0n3I1g//2WeO47XxoPe0vkp3NC8=" crossorigin="anonymous" />
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link type=" text/css" rel="stylesheet"
    href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.12/css/lightgallery.min.css')}}" />

<link rel="icon" type="image/png" href="img/favicon.png">


@if (App::environment('production'))
<!-- Google Tag Manager -->
<script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5SNX8QL');
</script>
<!-- End Google Tag Manager -->

<!-- Facebook Pixel Code -->

<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '321075436457354');
    fbq('track', 'PageView');
</script>

<noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=321075436457354&ev=PageView&noscript=1"
    /></noscript>
  <!-- End Facebook Pixel Code -->

  <!-- Global site tag (gtag.js) - Google Ads: 965265600 -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KHP9R8WHRD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-KHP9R8WHRD');
    </script>

  <!-- End Global site tag (gtag.js) - Google Ads: 965265600 -->

  <script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "bny6nwiuu5");
</script>




@stack('header-scripts')

@endif
