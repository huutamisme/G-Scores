@extends('layouts.app')

@section('content')
    <div class="card mb-4">
        <div class="card-body">
            <h4 class="text-primary mb-3">
                <i class="bi bi-trophy"></i> Top 10 học sinh theo khối thi
            </h4>

            <form method="GET" class="row g-2 align-items-center">
                <div class="col-auto">
                    <select name="block" class="form-select" onchange="this.form.submit()">
                        <option value="A00" {{ request('block') == 'A00' ? 'selected' : '' }}>Khối A00</option>
                        <option value="A01" {{ request('block') == 'A01' ? 'selected' : '' }}>Khối A01</option>
                        <option value="B00" {{ request('block') == 'B00' ? 'selected' : '' }}>Khối B00</option>
                        <option value="D01" {{ request('block') == 'D01' ? 'selected' : '' }}>Khối D01</option>
                    </select>
                </div>
            </form>
        </div>
    </div>
    @if($topStudents->count())
        <div class="row mb-4">
            @foreach($topStudents->take(3) as $index => $student)
                <div class="col-md-4">
                    <div class="card text-center shadow 
                            {{ $index == 0 ? 'border-warning' :
                        ($index == 1 ? 'border-secondary' : 'border-bronze') }}">
                        <div class="card-body">
                            <h1>
                                @if($index == 0) 🥇
                                @elseif($index == 1) 🥈
                                @else 🥉
                                @endif
                            </h1>
                            <h5 class="fw-bold">{{ $student->sbd }}</h5>
                            <p class="mb-1">
                                Tổng điểm:
                                <strong class="text-primary">
                                    {{ $student->total_score }}
                                </strong>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <table class="table table-hover text-center align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Hạng</th>
                        <th>SBD</th>
                        <th>{{ strtoupper($subjects[0]) }}</th>
                        <th>{{ strtoupper($subjects[1]) }}</th>
                        <th>{{ strtoupper($subjects[2]) }}</th>
                        <th>Tổng</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($topStudents as $index => $student)
                        <tr class="{{ $index < 3 ? 'table-warning fw-bold' : '' }}">
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $student->sbd }}</td>
                            <td>{{ $student->{$subjects[0]} }}</td>
                            <td>{{ $student->{$subjects[1]} }}</td>
                            <td>{{ $student->{$subjects[2]} }}</td>
                            <td class="text-primary fw-bold">
                                {{ $student->total_score }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection