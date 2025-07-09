<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Catatan Legenda')</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Palatino Linotype', 'Book Antiqua', Palatino, serif;
            background-color: #f9f7f1;
            color: #333;
            display: flex;
            justify-content: flex-start;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23d0c8b0' fill-opacity='0.1' fill-rule='evenodd'/%3E%3C/svg%3E");
            padding: 20px;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .container::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #d4af37, #c0a030, #d4af37);
            border-radius: 10px 10px 0 0;
        }

        .item {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.7s ease, transform 1.5s ease;
            margin: 10px 0;
            width: 100%;
        }

        .item.visible {
            opacity: 1;
            transform: translateY(0);
            position: relative;
        }

        img {
            max-width: 400px;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            margin: 20px auto;
            display: block;
            filter: saturate(1.2);
        }

        .item h1 {
            font-family: 'Cinzel', serif;
            color: #333;
            font-size: 2.2em;
            text-align: center;
            margin: 20px 0;
            text-transform: capitalize;
            letter-spacing: 1px;
            border-bottom: 2px solid rgba(212, 175, 55, 0.3);
            padding-bottom: 15px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }

        .item p {
            text-align: left;
            margin: 20px 0;
            padding: 0;
            font-size: 16px;
            line-height: 1.8;
            color: #444;
            text-indent: 1.5em;
            position: relative;
        }

        .item p:first-of-type::first-letter {
            font-size: 2.5em;
            font-family: 'Cinzel', serif;
            color: #c0a030;
            line-height: 0.8;
            margin-right: 2px;
        }

        .exit {
            align-self: flex-end;
            font-size: 1.1em;
            background: none;
            color: #333;
            border: 2px solid #d4af37;
            padding: 8px 16px;
            cursor: pointer;
            border-radius: 4px;
            transition: all 0.3s ease;
            margin: 20px 20px 0 0;
            font-family: 'Cinzel', serif;
        }

        .exit:hover {
            background-color: #d4af37;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        }

        /* Footer Styling */
        footer {
            width: 100%;
            margin-top: 40px;
            padding: 20px 0;
            background: linear-gradient(to right, rgba(212, 175, 55, 0.05), rgba(212, 175, 55, 0.1), rgba(212, 175, 55, 0.05));
            border-top: 1px solid rgba(212, 175, 55, 0.3);
            text-align: center;
            font-family: 'Palatino Linotype', 'Book Antiqua', Palatino, serif;
            position: relative;
        }

        footer::before {
            content: "";
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60%;
            height: 1px;
            background: linear-gradient(90deg, transparent, #d4af37, transparent);
        }

        footer .text {
            color: #666;
            font-size: 14px;
            line-height: 1.6;
            letter-spacing: 0.5px;
        }

        footer .text span {
            display: inline-block;
            position: relative;
        }

        footer .text a {
            color: #a38a28;
            text-decoration: none;
            font-family: 'Cinzel', serif;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
        }

        footer .text a::after {
            content: "";
            position: absolute;
            width: 0;
            height: 1px;
            bottom: -2px;
            left: 0;
            background-color: #d4af37;
            transition: width 0.3s ease;
        }

        footer .text a:hover {
            color: #d4af37;
        }

        footer .text a:hover::after {
            width: 100%;
        }

        /* Add a small decorative element */
        footer::after {
            content: "❖";
            display: block;
            margin-top: 10px;
            color: #d4af37;
            font-size: 12px;
            opacity: 0.7;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            footer {
                padding: 15px 10px;
            }
            
            footer .text {
                font-size: 12px;
            }
        }

        @media (max-width: 768px) {
            img {
                max-width: 90%;
            }
            
            .item p {
                padding: 0 10px;
            }
        }

        .page-header {
            width: 100%;
            text-align: center;
            margin-bottom: 20px;
        }

        .page-title {
            font-family: 'Cinzel', serif;
            font-size: 2.5em;
            color: #333;
            margin: 0;
            padding: 20px 0;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }

        .header-decoration {
            width: 60%;
            height: 2px;
            margin: 0 auto 20px;
            background: linear-gradient(90deg, transparent, #d4af37, transparent);
        }
    </style>
    
</head>
<body>
    <div class="container">
        @yield('back-button')
        
        <header class="page-header">
            <h1 class="page-title">@yield('page-title')</h1>
            <div class="header-decoration"></div>
        </header>
        
        @yield('content')
    </div>
    @include('components.footer')
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>