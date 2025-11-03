<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <!--Bootstrap stylesheet-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap icon stylesheet-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }

        .card-registration .select-arrow {
            top: 13px;
        }

        .gradient-custom {
            /* fallback for old browsers */
            background: #CEF3ED;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to bottom right, #CEF3ED, #DEF7F3);

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to bottom right, #CEF3ED, #DEF7F3);
        }

        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }

        .card-registration .select-arrow {
            top: 13px;
        }

        .scale-animate {
            transition: transform 0.3s ease-in-out;
        }

        .scale-animate:hover {
            transform: scale(1.03);
        }

        .hand-pointer:hover {
            cursor: pointer
        }

        .info-box {
            position: relative;
            overflow: hidden;
            color: #fff;
            border-radius: .5rem;
            padding: 30px;
            margin-bottom: 30px;
            height: 100%;
            background-color: #5B9279;
        }

        .info-box .icon {
            position: absolute;
            top: 50%;
            right: 20px;
            font-size: 60px;
            opacity: 0.2;
            transform: translateY(-50%)
        }

        .info-box a {
            color: #fff;
            text-decoration: underline;
        }

        .custom-border {
            border: 3px solid black;
        }

        .custom-border th,
        .custom-border td {
            border: 2px solid black;
        }

        .home-page {
            font-size: 3rem;
            margin-bottom: 30px;
            font-weight: 700;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
        }

        .btn-custom {
            font-size: 1.2rem;
            padding: 12px 30px;
            border-radius: 50px;
            background: #ff512f;
            background: linear-gradient(45deg, #ff512f, #dd2476);
            border: none;
            color: #fff;
            transition: all 0.3s ease;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
        }

        .btn-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
        }
    </style>
</head>

<body style="background-color: #FDF0D5">
    @include('partials.header') <!--Add header file-->

    <section>@yield('content')</section>

    @include('partials.footer') <!--Add footer file-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('helper.js') }}"></script>
</body>

</html>
