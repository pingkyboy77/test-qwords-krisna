
@extends('layouts.app')
@section('content')
    <style>
        .message-container {
            display: grid;
            flex-direction: column;
            align-items: center;
            text-align: center;
            font-size: 2rem;
        }

        .message-container span {
            margin-bottom: 1rem;
        }

        .message-container .btn {
            font-size: 1rem;
        }
    </style>

    <div class="row">
        <div class="col-xl-12">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body pb-0">
                            <div class="d-flex align-items-start">
                                <div class="flex-grow-1">
                                    <h5 class="card-title mb-4">CHECK DOMAIN</h5>
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-xxl-12">
                                    <div class="m-3">
                                        <label class="form-label text-black" for="domain">MASUKAN DOMAIN</label>
                                        <div class="position-relative input-custom-icon">
                                            <input type="text" class="form-control" id="domain" name="domain"
                                                placeholder="Enter Domain">
                                            <span class="bx bx-key"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-12 d-flex justify-content-end align-items-center mb-4">
                                    <div class="col-2">
                                        <div class="mt-3">
                                            <button id="search-domain-btn"
                                                class="btn btn-dark w-100 waves-effect waves-dark text-light"
                                                type="button">Cari Domain</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-12 d-flex justify-content-center align-items-center mb-4">
                                    <div id="domain-status-message"
                                        class="col-12 mt-3 d-grid justify-content-center align-items-center mb-4"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#search-domain-btn').on('click', function() {
            var domain = $('#domain').val();
            if (domain) {
                // Tampilkan loader sebelum memulai AJAX request
                $('#loader-overlay').css('visibility', 'visible');

                $.ajax({
                    url: '/proxy/whois',
                    method: 'GET',
                    data: {
                        domain: domain
                    },
                    success: function(response) {
                        // Sembunyikan loader setelah selesai AJAX request
                        $('#loader-overlay').css('visibility', 'hidden');

                        var konfigurasiUrl =
                            '{{ route('konfigurasi', ['domain' => '__DOMAIN__']) }}'
                            .replace('__DOMAIN__', domain);
                        var message = '';
                        if (response.status === 'available') {
                            message =
                                '<div class="message-container"><span class="text-success">Selamat, domain anda tersedia</span>' +
                                '<a href="' + konfigurasiUrl +
                                '"><button id="order-domain-btn" class="btn btn-dark w-50 waves-effect waves-dark text-light">Pesan</button></a></div>';
                        } else {
                            message =
                                '<div class="message-container"><span class="text-danger">Mohon maaf, domain tidak tersedia</span></div>';
                        }
                        $('#domain-status-message').html(message);
                    },
                    error: function() {
                        // Sembunyikan loader jika terjadi error
                        $('#loader-overlay').css('visibility', 'hidden');

                        $('#domain-status-message').html(
                            '<div class="message-container"><span class="text-danger">Terjadi kesalahan saat memeriksa domain. Silakan coba lagi.</span></div>'
                        );
                    }
                });
            } else {
                $('#domain-status-message').html(
                    '<div class="message-container"><span class="text-danger">Silakan masukkan domain terlebih dahulu.</span></div>'
                );
            }
        });
    });
</script>
