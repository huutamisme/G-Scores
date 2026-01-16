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
            font-family: 'Rubik', system-ui, -apple-system, BlinkMacSystemFont,
                'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            margin: 0;
            overflow-x: hidden;

        }

        #sidebar {
            width: 250px;
            min-height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            background: #212529;
            color: white;
            transition: transform 0.3s ease;
        }

        /* Sidebar ẩn */
        #sidebar.hide {
            transform: translateX(-250px);
        }

        /* Nút toggle */
        #toggleBtn {
            position: absolute;
            top: 50%;
            right: -15px;
            /* đẩy ra sát mép phải */
            transform: translateY(-50%);
            width: 30px;
            height: 30px;
            border-radius: 20px;
            border: none;
            background: #0d6efd;
            color: white;
            cursor: pointer;
        }

        li {
            border-radius: 4px;
        }

        li:hover {
            background-color: #0d6efd;
            cursor: pointer;
        }

        /* Content */
        #content {
            margin-left: 250px;
            padding: 20px;
            transition: margin-left 0.3s ease;
        }

        #content.full {
            margin-left: 0;
        }


        .card {
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .score {
            font-weight: bold;
            color: #0d6efd;
        }

        .subject {
            display: flex;
            justify-content: space-between;
            padding: 6px 0;
            border-bottom: 1px dashed #ddd;
        }

        .subject:last-child {
            border-bottom: none;
        }

        .border-bronze {
            border: 2px solid #cd7f32;
        }
    </style>
    <link rel="stylesheet" href="">
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