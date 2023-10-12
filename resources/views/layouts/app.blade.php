<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manchester United</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
    <header>
        <nav class="navbar">
            <img href="#" class="navbar-logo" src="css/manchesterunited.png" />
            <div class="navbar-nav">
                <a href="#home">Home</a>
                <a href="#about">About Us</a>
                <a href="#services">Merch</a>
                <a href="#contact">Contact</a>
            </div>
            <div class="navbar-extra">
                <a href="#" id="search"><i data-feather="search"></i></a>
                <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
                <a href="#" id="production-menu"><i data-feather="menu"></i></a>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Footer content goes here -->
    </footer>

    <script>
      feather.replace();
    </script>
</body>
</html>