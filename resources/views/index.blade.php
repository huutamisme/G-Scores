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

                        <form>
                            <div class="input-group input-group-lg mb-3">
                                <span class="input-group-text">
                                    <i class="bi bi-person-vcard"></i>
                                </span>
                                <input type="text" class="form-control" placeholder="Nhập số báo danh" name="sbd">
                            </div>

                            <button class="btn btn-primary btn-lg w-100">
                                <i class="bi bi-arrow-right-circle"></i> Tra cứu
                            </button>
                        </form>
                    </div>
                </div>

                <!-- KẾT QUẢ -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-3 text-center text-success">
                            <i class="bi bi-award"></i> Kết quả chi tiết
                        </h5>

                        <p><strong>Số báo danh:</strong> 01000001</p>
                        <p><strong>Mã ngoại ngữ:</strong> N1</p>

                        <div class="subject">
                            <span>Toán</span>
                            <span class="score">8.4</span>
                        </div>
                        <div class="subject">
                            <span>Ngữ văn</span>
                            <span class="score">6.75</span>
                        </div>
                        <div class="subject">
                            <span>Ngoại ngữ</span>
                            <span class="score">8.0</span>
                        </div>
                        <div class="subject">
                            <span>Vật lí</span>
                            <span class="score">6.0</span>
                        </div>
                        <div class="subject">
                            <span>Hóa học</span>
                            <span class="score">5.25</span>
                        </div>
                        <div class="subject">
                            <span>Sinh học</span>
                            <span class="score">5.0</span>
                        </div>
                        <div class="subject">
                            <span>Lịch sử</span>
                            <span class="score text-muted">—</span>
                        </div>
                        <div class="subject">
                            <span>Địa lí</span>
                            <span class="score text-muted">—</span>
                        </div>
                        <div class="subject">
                            <span>GDCD</span>
                            <span class="score text-muted">—</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection