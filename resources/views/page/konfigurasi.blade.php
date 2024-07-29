@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="row">
                <div class="col-xl-7">
                    <div class="card">
                        <div class="card-body pb-0">
                            <div class="d-flex align-items-start">
                                <div class="flex-grow-1">
                                    <h5 class="card-title mb-4">Konfigurasi Paket Hosting</h5>
                                </div>
                            </div>

                            <div class="row d-flex justify-content-start align-items-center">
                                <div class="col-xxl-12">
                                    <div class="m-0">
                                        <form id="checkout-form" method="POST" action="{{ route('invoice') }}">
                                            @csrf
                                            <div
                                                class="d-flex col-12 container-fluid justify-content-start align-items-center m-0 p-0">
                                                <label class="col-4 text-black text-bold text-left"
                                                    style="font-size: 1.5rem" for="domain">{{ $nama_domain }}</label>
                                                    <input type="hidden" value="{{ $nama_domain }}" name="domain">
                                                <div class="col-8">
                                                    <label for="tahun">Pilih Tahun</label>
                                                    <select id="tahun" name="tahun" class="form-control">
                                                        <option value="" disabled selected>Pilih Tahun</option>
                                                        <option value="1">1 Tahun</option>
                                                        <option value="2">2 Tahun</option>
                                                        <option value="3">3 Tahun</option>
                                                        <option value="4">4 Tahun</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <div
                                                class="col-12 d-flex container-fluid justify-content-end align-items-center my-3 mx-0 p-0">
                                                <div class="col-4">
                                                    <label for="harga">Harga</label>
                                                    <input type="text" id="harga" name="harga" class="form-control"
                                                        value="-" readonly>
                                                </div>
                                            </div>

                                            @if (Auth::user())
                                                <div class="col-xxl-12">
                                                    <div class="m-0">
                                                        <div
                                                            class="d-grid col-12 container-fluid justify-content-start align-items-center m-0 p-0">
                                                            <label class="col-12 text-black text-left"
                                                                style="font-size: 1.2rem" for="domain">NAMA :
                                                                {{ Auth::user()->name ?? 'Guest' }}</label>
                                                            <label class="col-12 text-black text-left"
                                                                style="font-size: 1.2rem" for="domain">EMAIL :
                                                                {{ Auth::user()->email ?? 'Guest' }}</label>
                                                        </div>
                                                        <input type="hidden" name="nama"
                                                            value="{{ Auth::user()->name }}">
                                                        <input type="hidden" name="email"
                                                            value="{{ Auth::user()->email }}">
                                                    </div>
                                                </div>
                                            @else
                                                <div class="col-xxl-12">
                                                    <div class="m-0">
                                                        <div class="form-group mt-3">
                                                            <label class="col-12 text-black" style="font-size: 1.2rem"
                                                                for="Nama">NAMA</label>
                                                            <div class="position-relative input-custom-icon">
                                                                <input type="text" class="form-control" id="Nama"
                                                                    name="nama" placeholder="Masukan Nama">
                                                                <span class="bx bx-key"></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mt-3">
                                                            <label class="col-12 text-black" style="font-size: 1.2rem"
                                                                for="Email">EMAIL</label>
                                                            <div class="position-relative input-custom-icon">
                                                                <input type="email" class="form-control" id="Email"
                                                                    name="email" placeholder="Masukan Email">
                                                                <span class="bx bx-key"></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mt-3">
                                                            <label class="col-12 text-black" style="font-size: 1.2rem"
                                                                for="password">PASSWORD</label>
                                                            <div class="position-relative input-custom-icon">
                                                                <input type="password" class="form-control" id="password"
                                                                    name="password" placeholder="Masukan Password">
                                                                <span class="bx bx-key"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span>sudah memiliki akun ? <a
                                                            href={{ route('login') }}><span>Login</span></a></span>
                                                </div>
                                            @endif

                                            <div class="col-xxl-12 d-flex justify-content-end align-items-center mb-4">
                                                <div class="col-3">
                                                    <div class="mt-3">
                                                        <button id="checkout-btn"
                                                            class="btn btn-dark w-100 waves-effect waves-dark text-light"
                                                            type="button">Checkout</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#tahun').on('change', function() {
                var tahun = $(this).val();
                var harga = '-';

                switch (tahun) {
                    case '1':
                        harga = '1.000.000';
                        break;
                    case '2':
                        harga = '2.000.000';
                        break;
                    case '3':
                        harga = '3.000.000';
                        break;
                    case '4':
                        harga = '4.000.000';
                        break;
                }

                $('#harga').val(harga);
            });

            $('#checkout-btn').on('click', function() {
                if ($('#tahun').val() === '' || $('#tahun').val() === null) {
                    alert('Pilih tahun terlebih dahulu');
                } else {
                    $('#checkout-form').submit();
                }
            });
        });
    </script>
