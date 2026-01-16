@extends('layouts.app')

@section('content')
    <div class="container">

        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold text-dark mb-0">
                <i class="bi bi-graph-up-arrow me-2"></i> Thống kê phổ điểm
            </h3>

            <form method="GET">
                <select name="subject" class="form-select shadow-sm" style="width: 220px" onchange="this.form.submit()">
                    @foreach($subjects as $key => $name)
                        <option value="{{ $key }}" {{ $subject === $key ? 'selected' : '' }}>
                            {{ $name }}
                        </option>
                    @endforeach
                </select>
            </form>
        </div>

        <!-- Summary Cards -->
        <div class="row g-3 mb-4">
            <div class="col-md-3">
                <div class="card border-0 shadow-sm bg-success bg-opacity-10">
                    <div class="card-body text-center">
                        <h6 class="text-white">≥ 8 điểm</h6>
                        <h2 class="fw-bold text-white">{{ $stats['>=8'] }}</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card border-0 shadow-sm bg-primary bg-opacity-10">
                    <div class="card-body text-center">
                        <h6 class="text-white">6 – < 8</h6>
                                <h2 class="fw-bold text-white">{{ $stats['6-8'] }}</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card border-0 shadow-sm bg-warning bg-opacity-10">
                    <div class="card-body text-center">
                        <h6 class="text-white">4 – < 6</h6>
                                <h2 class="fw-bold text-white">{{ $stats['4-6'] }}</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card border-0 shadow-sm bg-danger bg-opacity-10">
                    <div class="card-body text-center">
                        <h6 class="text-white">
                            < 4</h6>
                                <h2 class="fw-bold text-white">{{ $stats['<4'] }}</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Chart -->
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <canvas id="scoreChart" height="120"></canvas>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        new Chart(document.getElementById('scoreChart'), {
            type: 'bar',
            data: {
                labels: ['≥ 8', '6 – <8', '4 – <6', '< 4'],
                datasets: [{
                    data: [
                                    {{ $stats['>=8'] }},
                                    {{ $stats['6-8'] }},
                                    {{ $stats['4-6'] }},
                        {{ $stats['<4'] }}
                    ],
                    backgroundColor: [
                        '#20c997',
                        '#4dabf7',
                        '#ffd43b',
                        '#ff6b6b'
                    ],
                    borderRadius: 14,
                    barThickness: 50
                }]
            },
            options: {
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        backgroundColor: '#212529',
                        padding: 10
                    }
                },
                scales: {
                    x: {
                        grid: { display: false },
                        ticks: { font: { size: 14 } }
                    },
                    y: {
                        beginAtZero: true,
                        grid: { color: '#f1f3f5' }
                    }
                }
            }
        });
    </script>
@endsection