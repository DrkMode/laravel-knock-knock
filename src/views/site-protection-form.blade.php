<!DOCTYPE html>
<html>
<head>
    <title>Password protected</title>

    <style>
        html, body {
            height: 100%;
            background-color: rgb(17 24 39);
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif;
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 2em;
            color: #FFFFFF;
        }

        .form-control {
            border: 1px solid #ccc;
            padding: 10px 20px;
        }

        .hidden {
            display: none;
        }

        .text-danger {
            color: #d9534f;
            font-weight: bold;
            font-size: 1.2em;
            padding-top: 10px;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        .logo {
            height: 5em;
        }

        .help-block {
            color: #FFFFFF;
            padding-top: 5px;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 320px) {
            .logo {
                height: 3em;
            }
        }
    </style>

    @if (config('site-protection.css_file_uri'))
        <link href="{{ config('site-protection.css_file_uri') }}" rel="stylesheet" >
    @endif

</head>
<body>
<div class="container">
    <div class="content">
        <div class="imgcontainer">
            <img src="{{ config('site-protection.logo_file') }}" alt="DrkMode" class="logo">
        </div>
        <h1 class="title">Password protected</h1>

        <form method="GET">
            {{ csrf_field() }}

            <div class="form-group">

                <input type="password" name="site-password-protected" placeholder="Please enter password" class="form-control" tabindex="1" autofocus />
                @if (Request::get('site-password-protected'))
                    <div class="text-danger">Password is wrong</div>
                @else
                    <div class="small help-block">And press enter</div>
                @endif
            </div>

            <input type="submit" class="hidden" />

        </form>
    </div>
</div>
</body>
</html>
