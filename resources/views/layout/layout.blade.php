<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{--
    <link rel="stylesheet" href="{{url('frontend/css/layout.css')}}" />
    <link rel="stylesheet" href="{{url('frontend/css/post.css')}}" />
    <link rel="stylesheet" href="{{url('frontend/css/auth.css')}}" />

    <link rel="stylesheet" href="{{url('frontend/css/sale.css')}}" />
    <link rel="stylesheet" href="{{url('frontend/css/detail.css')}}" />
    <link rel="stylesheet" href="{{url('frontend/css/header.css')}}" />

    <link rel="stylesheet" href="{{url('frontend/css/new.css')}}" />
    <link rel="stylesheet" href="{{url('frontend/css/sidebar.css')}}" /> --}}
    @vite([
    "resources/scss/app.scss",
    "resources/css/app.css",
    "resources/js/app.js",
    ]);
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v15.0&appId=500446398687474&autoLogAppEvents=1"
        nonce="MUKZ8Qwu"></script>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v15.0&appId=878972646064698&autoLogAppEvents=1"
        nonce="uTJygusB"></script>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <title>Document</title>
</head>

<body>
    @include("layout.header")

    <div class="main"> @yield("content")</div>

    @include("layout.footer")


</body>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js "
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM " crossorigin="anonymous ">
</script>
<script src="{{url("frontend/js/script.js")}} "></script>
<script src=" {{url("frontend/js/pagination.js")}} "></script>

</html>