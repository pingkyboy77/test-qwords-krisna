{{-- @dd($nama_domain, $nama_pemesan, $email_pemesan, $harga_pesanan) --}}

@extends('layouts.app')
@section('content')
    <style>
        table {

            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 12px 15px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        /* tr:first-child th:first-child {
                border-top-left-radius: 15px;
            }

            tr:first-child th:last-child {
                border-top-right-radius: 15px;
            }

            tr:last-child td:first-child {
                border-bottom-left-radius: 15px;
            }

            tr:last-child td:last-child {
                border-bottom-right-radius: 15px;
            } */

        td,
        th {
            border: 1px solid #ddd;
        }
    </style>
    <div class="row">
        <div class="col-xl-12">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body pb-0">
                            <div class="d-flex align-items-start">
                                <div class="flex-grow-1  d-flex align-items-center">
                                    <h5 class="card-title mb-4 gap-3">INVOICE <a href="{{ route('generatePDF', ['nama' => $nama_pemesan, 'email' => $email_pemesan, 'domain' => $nama_domain, 'harga' => $harga_pesanan]) }}"
                                        class="btn btn-primary">Cetak Invoice <i class="bx bx-download"></i></a></h5>
                                    
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-xxl-6 d-grid justify-content-start align-items-center">
                                    <div class="m-0 d-grid">
                                        <label class="form-label text-black" for="no">No. Invoice : #12</label>
                                        <label class="form-label text-black" for="nama">{{ $nama_pemesan }}</label>
                                        <label class="form-label text-black" for="email">{{ $email_pemesan }}</label>
                                    </div>
                                </div>
                                <div class="col-xxl-6 d-flex justify-content-end align-items-start">
                                    <div class="m-0">
                                        <label class="form-label text-black m-0 p-0" style="font-size:4rem"
                                            for="status">UNPAID</label>
                                    </div>
                                </div>

                                <div class="col-xxl-12 py-3">
                                    <table class="table-invoice ">
                                        <thead>
                                            <tr>
                                                <td>NO</td>
                                                <td>DESKRIPSI</td>
                                                <td>TOTAL</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td>Pembelian Domain {{ $nama_domain }}</td>
                                                <td>Rp. {{ $harga_pesanan }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="col-xxl-12 d-flex justify-content-end align-items-center">
                                    <div class="col-2 d-flex justify-content-end align-items-center">
                                        <span>Total : {{ $harga_pesanan }}</span>
                                    </div>
                                </div>
                                <div class="col-xxl-12 d-flex justify-content-center align-items-center">
                                    <div class="col-12 d-grid justify-content-center align-items-center">
                                        <h6 class="text-center text-bold">silahkan bayar di Rekening Berikut</h6><br>
                                        <h6 class="text-center text-bold">BCA : 123456789 / Hrd Pt</h6><br>
                                    </div>
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
