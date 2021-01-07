<!DOCTYPE html>
<html>
<head>
    <script>
        function subst() {
            var vars = {};
            var query_strings_from_url = document.location.search.substring(1).split('&');
            for (var query_string in query_strings_from_url) {
                if (query_strings_from_url.hasOwnProperty(query_string)) {
                    var temp_var = query_strings_from_url[query_string].split('=', 2);
                    vars[temp_var[0]] = decodeURI(temp_var[1]);
                }
            }
            var css_selector_classes = ['page', 'frompage', 'topage', 'webpage', 'section', 'subsection', 'date', 'isodate', 'time', 'title', 'doctitle', 'sitepage', 'sitepages'];
            for (var css_class in css_selector_classes) {
                if (css_selector_classes.hasOwnProperty(css_class)) {
                    var element = document.getElementsByClassName(css_selector_classes[css_class]);
                    for (var j = 0; j < element.length; ++j) {
                        element[j].textContent = vars[css_selector_classes[css_class]];
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">

    <style>
        html{
            margin: 0 0 0 10mm;
        }
        body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            background-color: white;
            font-size: 15px;
            font-weight: 400;
            color: dimgrey !important;
            font-family: 'Poppins', sans-serif !important;

        }
        table{
            /*margin: 0 10mm 0 40mm;*/
        }
    </style>
</head>
<body style="border:0;" onload="subst()">
<table style=" width: 100%;height: 20mm">
    <tr>
        <td style="text-align:left">
            <span class="title"></span>
        </td>
        <td style="text-align:right">
            Page <span class="page"></span> of <span class="topage"></span>
        </td>
    </tr>
</table>
</body>
</html>
