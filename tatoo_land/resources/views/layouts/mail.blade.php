<!DOCTYPE html>
<html>
<head>
    <title>{{ env('APP_NAME') }}</title>
    <style>
        main {
            width: 480px !important;
            margin: 20px auto;
            color: #444;
            line-height: 1.5;
            letter-spacing: 0.8px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #f5f5f5;
        }

        a {
            text-decoration: none;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background-color: #a6b64e;
            color: #fff;
        }

        td, th {
            text-align: left;
            padding: 5px;
        }

        td {
            border: 1px solid #ddd;
        }

        li {
            padding: 2px;
        }

        hr {
            margin: 20px 0;
            border: 1px solid #ddd;
        }

        .btn {
            color: #fff !important;
            padding: 5px 20px;
            background-color: #a6b64e;
            border-radius: 2px;
        }
    </style>
</head>
<body>
<main>
    @yield('mail')
</main>
</body>
</html>