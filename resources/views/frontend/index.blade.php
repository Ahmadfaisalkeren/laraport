<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To My Portfolio Website</title>
    <link rel="stylesheet" href="{{ asset('portfolio/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('portfolio/assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('portfolio/assets/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('portfolio/assets/css/style.css') }}">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

    <!-- NAVBAR -->
    @includeIf('frontend.navbar')
    <!-- //NAVBAR -->

    <!-- CONTENT WRAPPER -->
    <div id="content-wrapper">

        <!-- HOME -->
        @includeIf('frontend.home')
        <!-- //HOME -->

        <!-- ABOUT -->
        @includeIf('frontend.about')
        <!-- //ABOUT -->

        <!-- SERVICES -->
        @includeIf('frontend.skills')
        <!-- SERVICES -->

        <!-- WORK -->
        @includeIf('frontend.project')
        <!-- //WORK -->


        <!-- REVIEWS -->
        @includeIf('frontend.certificate')
        <!-- //REVIEWS -->

        <!-- CONTACT -->
        @includeIf('frontend.contact')
        <!-- //CONTACT -->

        <!-- FOOTER -->
        @includeIf('frontend.footer')
        <!-- //FOOTER -->

    </div>
    <!-- //CONTENT WRAPPER -->



    <script src="{{ asset('portfolio/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('portfolio/assets/js/aos.js') }}"></script>
    <script src="{{ asset('portfolio/assets/js/main.js') }}"></script>
</body>

</html>
