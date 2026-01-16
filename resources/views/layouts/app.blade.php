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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">

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
            <i id="toggleIcon" class="bi bi-chevron-left"></i>
        </button>

        <div class="p-3">
            <h5 class="mb-3">
                <i class="bi bi-bar-chart-fill me-2"></i> G-Scores
            </h5>

            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link text-white" href="/student">
                        <i class="bi bi-search me-2"></i>
                        Tra cứu điểm THPT
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="/student/leaderboard">
                        <i class="bi bi-trophy me-2"></i>
                        Bảng xếp hạng theo khối
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="/student/report">
                        <i class="bi bi-graph-up-arrow me-2"></i>
                        Thống kê & báo cáo
                    </a>
                </li>
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
            const icon = document.getElementById('toggleIcon');

            sidebar.classList.toggle('hide');
            content.classList.toggle('full');

            if (sidebar.classList.contains('hide')) {
                icon.classList.remove('bi-chevron-left');
                icon.classList.add('bi-chevron-right');
            } else {
                icon.classList.remove('bi-chevron-right');
                icon.classList.add('bi-chevron-left');
            }
        }
    </script>



</body>

</html>