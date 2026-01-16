<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>G-Scores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <style>
        body {
            overflow-x: hidden;
        }

        #sidebar {
            width: 250px;
            min-height: 100vh;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div id="sidebar">
        <!-- Nút toggle -->
        <button id="toggleBtn" onclick="toggleSidebar()">
            <i class="bi bi-chevron-left"></i>
        </button>

        <div class="p-3">
            <h5>G-Scores</h5>
            <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link text-white" href="#">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">Search Scores</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">Reports</a></li>
            </ul>
        </div>
    </div>

    <div id="content">
        @yield('content')
    </div>



    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const content = document.getElementById('content');
            const btn = document.getElementById('toggleBtn');

            sidebar.classList.toggle('hide');
            content.classList.toggle('full');

            // Đổi icon
            btn.innerHTML = sidebar.classList.contains('hide') ? '❯' : '❮';
        }
    </script>


</body>

</html>