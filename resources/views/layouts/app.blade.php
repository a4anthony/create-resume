<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Resume</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
          integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous"/>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="{{ asset('fonts/stylesheet.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('fonts/nunito/stylesheet.css') }}" rel="stylesheet" type="text/css"/>


    @livewireStyles

    <style>
        body {
            background: linear-gradient(147deg, rgba(15, 85, 131, .2), rgba(0, 0, 0, .3)), url('https://create-resume.test/storage/images/bg.png') no-repeat;
            background-size: cover;
            font-family: 'Nunito', sans-serif !important;

        }
    </style>

</head>

<body>
@livewire('navigation-bar')


<div class="my-10 w-full flex justify-center">
    {{ $slot }}
</div>

@livewireScripts

{{--<script src="{{asset('js/app.js')}}"></script>--}}

</body>

</html>
