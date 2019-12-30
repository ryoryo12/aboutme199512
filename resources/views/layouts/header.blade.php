<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <style>
            .left_content{
                width: 15%;
                top: 0px;
            }
            a {
                display: block;
                margin: 150px; 
                transform: rotate(270deg);
                color: #777777;
                right: 0;
                font-size: 22px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
        </style>
    </head>
    @yield('header')
        <ul class="links">
            <a href="/prof">Profile</a>
            <a href="/work">Works</a>
            <a href="https://github.com/ryoryo12" target="_blank">GitHub</a>
            <a href="/contact_form">Contact</a>
        </ul>
    @show
</html>

