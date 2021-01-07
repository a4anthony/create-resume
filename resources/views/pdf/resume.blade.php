<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resume</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"/>
    {{--    <link href="{{ asset('fonts/stylesheet.css') }}" rel="stylesheet" type="text/css"/>--}}
    {{--    <link rel="preconnect" href="https://fonts.gstatic.com">--}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">

    <style>
        html {
            margin: 0 0 0 10mm;
        }

        body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            background-color: white;
            font-size: 15px;
            font-weight: 400 !important;
            font-family: 'Poppins', sans-serif !important;
        }

        .section-header {
            color: #064570;
            text-transform: uppercase;
            width: 160px;
        }

        .name, .address, .phone, .email, .link {
            display: block;
        }

        .table-title {
            display: none;
        }

        .name {
            font-weight: 600;
            font-size: 17px;
            margin-bottom: 5px;
        }

        .address, .phone, .email, .link {
            margin-bottom: 5px;
            /*font-size: 35px;*/
            /*font-weight: 300!important;*/

        }

        table {
            border: none !important;
        }

        .tab {
            border-top: none !important;
            border-left: none !important;
            border-right: none !important;
            border-bottom: 2px solid #064570;
            padding: 5px 5px 5px 0;
            text-transform: uppercase;
            color: #064570;
            margin-bottom: 10px;
            margin-top: 20px;
            font-weight: 700;
            position: relative;
        }

        .box {
            width: 10px;
            height: 10px;
            background: #064570;
            display: block;
            position: absolute;
            right: 0;
            bottom: 0;
        }

        .tab:first-child {
            margin-top: 0;
        }

        .duration {
            color: #246fa2;
            width: 160px;
            font-weight: 400;
            font-size: 14px;
            vertical-align: top;
        }

        .title, .company, .company-address, .company-link {
            display: block;
            /*margin-bottom: 3px;*/
        }

        .title {
            color: #064570;
            font-size: 16px;
            font-weight: 700;
        }

        .activities {
            display: block;
            margin-top: 5px;
        }

        .activities ol {
            margin: 3px 0;
            padding: 0 25px;
            list-style: decimal;
        }


        .content {
            padding-bottom: 10px;
            margin-bottom: 10px;
            margin-left: 20px;
            border-bottom: 1px solid #9bc7e5;
            border-top: none !important;
            border-left: none !important;
            border-right: none !important;
        }

        .work-experience table tr:last-child .content {
            padding-bottom: 0;
            margin-bottom: 0;
            border-bottom: none;
        }

        .fill-width {

        }

        table {
            width: 100%;
        }

        table tr td {
            border: none !important;
        }

        .skills ul, .research-projects ul, .annexes ul {
            margin: 0;
            padding: 0 17px;
            list-style: disc;
        }

        .skills ul li, .research-projects ul li, .annexes ul li {
            /*line-height: 30px;*/
            margin-bottom: 10px;
        }

        a {
            color: #0f68ec;
        }

        @page {
            /*margin: 20cm 20cm 10.5cm 1.5cm;*/
        }
        .personal-info i,.work-experience i{
            /*margin-right: 10px;*/
            color: #064570;
            width: 20px;
        }

    </style>
{{--    <script src="https://kit.fontawesome.com/9d1f78eaa4.js" crossorigin="anonymous"></script>--}}
</head>
<body>
<div>
    <div class="tab">
            <span class="box">
            </span>
        Personal Information
    </div>
    <div class="personal-info">
        <span class="name block">Anthony Test</span>
        <span class="address block"><i class="fas fa-map-marker-alt"></i>No. 13 Okon Bassey Street, Osongama Estate, Akwa Ibom State, Nigeria.</span>
        <span class="phone block"><i class="fas fa-phone-alt"></i>08021464449</span>
        <span class="link block">
                <i class="fas fa-link"></i><a href="https://google.com">https://google.com</a>
        </span>
        <span class="email block"><i class="fas fa-envelope"></i>test@gmail.com</span>
        <span class="email block"><i class="fab fa-linkedin"></i>test@gmail.com</span>
    </div>
    <div class="tab">
            <span class="box">
            </span>
        Work Experience
    </div>
    <div class="work-experience">
        <table class="border-none">
            <tbody class="border-none">
            @foreach([1,2,3,4] as $v)
                <tr class="border-none">
                    <td class="duration">
                        June 2018 - October 2020
                    </td>
                    <td>
                        <div class="content">
                            <span class="title">
                                Web Developer
                            </span>
                            <span class="company">
                                MelaMart Store
                            </span>
                            <span class="company-address">
                                <i class="fas fa-map-marker-alt"></i>No. 13 Okon Bassey Street, Osongama Estate, Akwa Ibom State, Nigeria.
                            </span>
                            <span class="company-link">
                                <i class="fas fa-link"></i><a href="sjdnd">https://google.com</a>
                            </span>
                            <span class="activities">Activities:
                                <ol>
                                    <li>Activity 1</li>
                                    <li>Activity 1</li>
                                    <li>Activity 1</li>
                                    <li>Activity 1</li>
                                </ol>
                            </span>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="tab">
            <span class="box">
            </span>
        Education and Training
    </div>
    <div class="work-experience">
        <table class="border-none">
            <tbody class="border-none">
            @foreach([1,2,3,4] as $v)
                <tr class="border-none">
                    <td class="duration">
                        June 2018 - October 2020
                    </td>
                    <td class="content-column">
                        <div class="content">
                            <span class="title">
                               BSc. Civil Engineering (Second Class, Upper)
                            </span>
                            <span class="company">
                                Eastern Mediterranean University
                            </span>
                            <span class="company-address">
                                North Cyprus.
                            </span>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="tab">
            <span class="box">
            </span>
        Skills
    </div>
    <div class="skills">
        <ul>
            @foreach([1,2,3,4,5,6,7,8,9,10] as $v)
                <li>Good command of HTML, CSS, jQuery and Bootstrap</li>
            @endforeach
        </ul>
    </div>
    <div class="tab">
            <span class="box">
            </span>
        Research and Projects
    </div>
    <div class="research-projects">
        <ul>
            @foreach([1,2,3,4,5,6] as $v)
                <li>Tech Blogging website at www.melaspace.com
                    Notes: Website is built on Laravel framework and current hosted on Digital Ocean.
                </li>
            @endforeach
        </ul>
    </div>
    <div class="tab">
            <span class="box">
            </span>
        Annexes
    </div>
    <div class="annexes">
        <ul>
            @foreach([1,2,3,4,5] as $v)
                <li><a href="">Academic Degree</a></li>
            @endforeach
        </ul>
    </div>
</div>
{{--<script src="{{ asset('js/app.js') }}" type="text/js"></script>--}}
</body>
</html>

