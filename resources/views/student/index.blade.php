@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <!-- FORM -->
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <h3 class="mb-3 text-primary">
                            <i class="bi bi-search"></i> Tra cứu điểm thi
                        </h3>

                        <form action="/student/checkScore" method="GET">
                            <div class="input-group input-group-lg mb-1">
                                <span class="input-group-text">
                                    <i class="bi bi-person-vcard"></i>
                                </span>
                                <input type="text" inputmode="numeric" name="sbd" placeholder="Nhập số báo danh"
                                    value="{{ old('sbd', request('sbd')) }}"
                                    class="form-control @error('sbd') is-invalid @enderror">
                            </div>

                            {{-- LỖI 1 & 2: nhập sai định dạng --}}
                            @error('sbd')
                                <div class="text-danger text-start mb-3">
                                    <i class="bi bi-exclamation-circle"></i> {{ $message }}
                                </div>
                            @enderror

                            <button class="btn btn-primary btn-lg w-100">
                                <i class="bi bi-arrow-right-circle"></i> Tra cứu
                            </button>
                        </form>

                    </div>
                </div>

                {{-- KẾT QUẢ --}}
                @if(request('sbd') && !$errors->has('sbd'))
                    <div class="card">
                        <div class="card-body">

                            @if($student)
                                <h5 class="mb-3 text-center text-success">
                                    <i class="bi bi-award"></i> Kết quả chi tiết
                                </h5>

                                <p><strong>Số báo danh:</strong> {{ $student->sbd }}</p>
                                <p><strong>Mã ngoại ngữ:</strong> {{ $student->ma_ngoai_ngu }}</p>

                                @php
                                    $subjects = [
                                        'Toán' => $student->toan,
                                        'Ngữ văn' => $student->ngu_van,
                                        'Ngoại ngữ' => $student->ngoai_ngu,
                                        'Vật lí' => $student->vat_li,
                                        'Hóa học' => $student->hoa_hoc,
                                        'Sinh học' => $student->sinh_hoc,
                                        'Lịch sử' => $student->lich_su,
                                        'Địa lí' => $student->dia_li,
                                        'GDCD' => $student->gdcd,
                                    ];
                                @endphp

                                @foreach($subjects as $name => $score)
                                    <div class="subject d-flex justify-content-between">
                                        <span>{{ $name }}</span>
                                        <span class="score {{ is_null($score) ? 'text-muted' : '' }}">
                                            {{ is_null($score) ? '—' : $score }}
                                        </span>
                                    </div>
                                @endforeach

                            @else
                                {{-- LỖI 3: SBD KHÔNG TỒN TẠI --}}
                                <div class="alert alert-warning text-center">
                                    <i class="bi bi-search"></i>
                                    Không tìm thấy kết quả cho số báo danh
                                    <strong>{{ request('sbd') }}</strong>
                                </div>
                            @endif

                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
@endsection