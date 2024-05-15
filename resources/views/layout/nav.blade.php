<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>@yield('title')</title>

    <link rel="shortcut icon" href="{{ asset('img/img7.png') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/main/style1.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/main/style2.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/main/kuisioner.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/main/auth.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Bodoni:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&family=Libre+Bodoni:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


    <script src="{{ asset('js/main/main1.js') }}"></script>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</head>

<body style="background-color: black">
    <nav class="navbar fixed-top">
        <div class="navbar-left">
            <a href="{{ route('landingpage') }}" class="navbar-brand">
                <span class="red-text">Red</span><span class="white-text">Sco.</span>
            </a>
        </div>

        <div class="navbar-right navbar-dropdown login-text1">
            <a href="{{ route('landingpage') }}" class="nav-item {{ request()->is('/') ? 'active' : '' }}">Home</a>
            <a href="{{ route('user.shop') }}" class="nav-item {{ request()->is('shop*') ? 'active' : '' }}">Shop</a>
            <a href="{{ route('user.kuisioner') }}"
                class="nav-item {{ request()->is('kuisioner') ? 'active' : '' }}">Kuisioner</a>
            <a href="{{ route('keranjang') }}"
                class="nav-item {{ request()->is('keranjang*') ? 'active' : '' }}">Keranjang</a>


            @guest
                <a href="{{ route('auth.login') }}" class="nav-item btn-login">Login</a>
            @endguest

            @if (Auth()->check() && Auth()->user()->role == 'user')
                <div class="dropdown-profile nav-itemitem" id="nav-itemitem">
                    <div class="dropdown-toggle" onclick="toggleDropdown()" id="userDropdown">
                        Hi, {{ Auth::user()->name }}!
                    </div>
                    <ul class="dropdown-menu1" id="dropdownMenu">
                        <li>
                            <a href="{{ route('logout') }}" class="">Logout</a>
                        </li>
                    </ul>
                </div>
            @elseif (Auth()->check() && Auth()->user()->role == 'admin')
                <div class="dropdown-profile nav-itemitem" id="nav-itemitem">
                    <div class="dropdown-toggle" onclick="toggleDropdown()" id="userDropdown">
                        Hi, {{ Auth::user()->name }}!
                    </div>
                    <ul class="dropdown-menu1" id="dropdownMenu">
                        <li>
                            <a href="{{ route('admin.dashboard') }}" class="">Back</a>
                        </li>
                        <br>
                        <li>
                            <a href="{{ route('logout') }}" class="">Logout</a>
                        </li>
                    </ul>
                </div>
            @endif



        </div>

        <div class="navbar-toggler" onclick="toggleNavbar()">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>

    </nav>

    @yield('content')

    <script>
        function toggleNavbar() {
            var navbarDropdown = document.querySelector('.navbar-dropdown');
            navbarDropdown.classList.toggle('active');
        }
        document.getElementById('btnMinus').addEventListener('click', function() {
            var inputQuantity = document.getElementById('quantity');
            if (parseInt(inputQuantity.value) > 1) {
                inputQuantity.value = parseInt(inputQuantity.value) - 1;
            }
        });
        document.getElementById('btnPlus').addEventListener('click', function() {
            var inputQuantity = document.getElementById('quantity');
            inputQuantity.value = parseInt(inputQuantity.value) + 1;
        });

        function nextQuestion() {
            var currentQuestion = document.querySelector('.question.active');
            var nextQuestion = currentQuestion.nextElementSibling;

            if (nextQuestion !== null && nextQuestion.classList.contains('question')) {
                currentQuestion.classList.remove('active');
                nextQuestion.classList.add('active');

                if (nextQuestion.getAttribute('data-last-question') !== null) {
                    document.getElementById('nextButton').textContent = 'Submit';
                    document.getElementById('nextButton').setAttribute('onclick', 'submitQuiz()');
                }
            }
        }

        function previousQuestion() {
            var currentQuestion = document.querySelector('.question.active');
            var previousQuestion = currentQuestion.previousElementSibling;

            if (previousQuestion !== null && previousQuestion.classList.contains('question')) {
                currentQuestion.classList.remove('active');
                previousQuestion.classList.add('active');

                if (currentQuestion.getAttribute('data-last-question') !== null) {
                    document.getElementById('nextButton').textContent = 'Next';
                    document.getElementById('nextButton').setAttribute('onclick', 'nextQuestion()');
                }
            }
        }

        function submitQuiz() {
            // Mengumpulkan jawaban dari kuisioner
            var answers = document.querySelectorAll('input[type="checkbox"]:checked');

            // Variabel untuk menyimpan jumlah jawaban yang dipilih untuk setiap varian
            var variantCounts = {
                '1': 0, // Esmeralda
                '2': 0, // Starboy
                '3': 0, // Vanille
                '4': 0 // Euphoria
            };

            // Menghitung jumlah jawaban yang dipilih untuk setiap varian
            answers.forEach(function(answer) {
                var variant = answer.getAttribute('data-variant');
                variantCounts[variant]++;
            });

            // Menentukan rekomendasi berdasarkan jumlah jawaban yang dipilih
            var maxVariant = Object.keys(variantCounts).reduce(function(a, b) {
                return variantCounts[a] > variantCounts[b] ? a : b
            });

            // Redirect ke halaman baru untuk menampilkan rekomendasi
            window.location.href = "{{ route('user.recommendation', ['variant' => ':variant']) }}"
                .replace(':variant', maxVariant); // Ganti '/recommendation/' dengan URL sesuai dengan struktur proyek Anda
        }

        function toggleDropdown() {
            var dropdownMenu = document.getElementById('dropdownMenu');
            dropdownMenu.classList.toggle('show');
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropdown-toggle')) {
                var dropdowns = document.getElementsByClassName("dropdown-menu");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>
</body>
