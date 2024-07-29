<!DOCTYPE html>
<html>
<head>
    <title>Invoice</title>
    <style>
        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
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

        td, th {
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <h1 class="text-center" style="font-size: 2rem">PT QWORDS COMPANY INTERNASIONAL</h1>
    <h2>INVOICE</h2>
    <div>
        <label for="no">No. Invoice: {{ $invoice_number }}</label><br>
        <label for="nama">Nama Pemesan: {{ $nama_pemesan }}</label><br>
        <label for="email">Email Pemesan: {{ $email_pemesan }}</label><br>
    </div>
    <div>
        <h4>Status: {{ $status }}</h4>
    </div>
    <table>
        <thead>
            <tr>
                <th>NO</th>
                <th>DESKRIPSI</th>
                <th>TOTAL</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1.</td>
                <td>Pembelian Domain {{ $nama_domain }}</td>
                <td>Rp. {{ $harga_pesanan}}</td>
            </tr>
        </tbody>
    </table>
    <div>
        <h4>Total: Rp. {{ $harga_pesanan}}</h4>
    </div>
    <div>
        <h4>Rekening :</h4>
        <h4>BCA: 123456789 / Hrd Pt</h4>
    </div>
</body>
</html>
