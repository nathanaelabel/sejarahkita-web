@extends('layout.sejarahKita')

@section('title', 'Profile - Admin')

@section('content')
    <div class="d-flex mb-1" data-aos="fade-up">
        <p class="fs-4 me-auto">Halo, <span class="fw-bold fs-4">{{ Auth::user()->name }}</span>&ensp;&#128075;</p>
        <p class="badge bg-dark border border-2 border-info rounded-3 fw-normal fs-5 ms-auto"><i
                class="bi bi-person-check"></i>&ensp;Admin</p>
    </div>

    <div class="container" data-aos="fade-up">
        <div class="row card justify-content-around">
            <div class="col">
                <div class="row">
                    <div class="col-sm-6 align-self-center">
                        <img src="{{ url('assets/img/ill_profile.svg') }}" alt="Profile"
                            class="profile d-block mx-auto mt-1 mb-3 p-4">
                    </div>
                    <div class="col-sm-6 align-self-center">
                        <div class="row">
                            <p><i class="bi bi-at"></i>&emsp;{{ Auth::user()->username }}</p>
                            <p><i class="bi bi-chat-text"></i>&emsp;{{ Auth::user()->name }}</p>
                            <p><i class="bi bi-envelope"></i>&emsp;{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row my-5 text-center dashboard-card" data-aos="fade-up">
        <div class="col-sm-6">
            <div class="bg-primary bg-gradient rounded-3 p-3">
                <div class="card-body">
                    <p>Kumpulan Pertanyaan dan Kunci Jawaban.</p>
                    <br>
                    <a href="{{ url('admin/profile/question') }}">
                        <button class="btn btn-primary btn-banksoal w-50 shadow-sm">
                            <i class="bi bi-folder"></i>&emsp;{{ 'Bank Soal' }}
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="bg-success bg-gradient rounded-3 p-3">
                <div class="card-body">
                    <p>Pencatatan Riwayat Aktivitas di Aplikasi.</p>
                    <br>
                    <a href="{{ url('admin/profile/log') }}">
                        <button class="btn btn-primary btn-log w-50 shadow-sm">
                            <i class="bi bi-clock"></i>&emsp;{{ 'Log' }}
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <button type="button" class="btn btn-danger px-3 shadow-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        <i class="bi bi-box-arrow-right"></i>&emsp;{{ __('Logout') }}
    </button>

    <div class="modal fade text-white" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Logout</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Yakin ingin keluar dari akun?
                    <br>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <button type="button" class="btn btn-danger shadow-sm d-flex mx-auto mt-5">
                            <i class="bi bi-box-arrow-right"></i>&emsp;{{ 'Logout' }}
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
