<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="CUBG_512px.png" type="image/jpg" size="50px">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <title>Kalkulator Pinjaman</title>
</head>


<body>
    <nav class="navbar navbar-dark bg-warning">
        <span class="navbar-brand mb-0 h1"><a href="https://koperasi-cubg.org"> KSP CU Bererod Gratia</a></span>
    </nav>
    <div class="container">
    <main>
        <form id="simulasiKredit">
            <h1 class="h1 mb-3">Kalkulator Pinjaman</h1>

            <div class="form-group">
                <label for="jumlahKredit">Jumlah Pinjaman: </label>
                <input type="number" class="form-control" id="jumlahKredit" name="jumlahKredit" placeholder="100000000">
            </div>

            <div class="form-group">
                <label for="jangkaWaktu">Jangka Waktu (bulan): </label>
                <input type="number" class="form-control" id="jangkaWaktu" name="jangkaWaktu" placeholder="12">
            </div>

            <div class="form-group">
                <label for="bungaPertahun">Bunga Pinjaman (%): </label>
                <input type="number" class="form-control" id="bungaPertahun" name="bungaPertahun" placeholder="0.8">
            </div>

            <div class="form-group">
                <div class="form-check-inline">
                    <input type="radio" class="form-check-input" value="1" name="metode" id="Flat" checked>
                    <label class="form-check-label" for="Flat">Tetap</label>
                </div>

                <div class="form-check-inline">
                    <input type="radio" class="form-check-input" value="2" name="metode" id="Efektif">
                    <label class="form-check-label" for="Efektif">Menurun</label>
                </div>
            </div>

            <div class="form-group">
                <button id="btnHitung" type="submit" class="btn btn-primary">Hitung</button>
                <button id="btnUlangi" type="submit" class="btn btn-secondary">Ulangi</button>
            </div>
        </form>
    </main>

    <aside>
        <hr>
        <h3 class="h3 mb-3">Pinjaman Anda</h1>
        <p>Total Pinjaman : <span id="resultTotalPinjaman"></span></p>
        <p>Lama Pinjaman :	<span id="resultLamaPinjaman"></span></p>
        <p>Bunga Perbulan :	<span id="resultBungaPertahun"></span></p>
        <p>Angsuran Pokok Perbulan : <span id="resultAngPokokBulan"></span></p>
        <p>Angsuran Bunga Perbulan : <span id="resultAngBungaBulan"></span></p>
        <p>Total angsuran per bulan	: <span id="resultAngBulan"></span></p>
        <hr>

        <table class="table" id="tableAngsuran">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Bulan</th>
                <th scope="col">Pokok</th>
                <th scope="col">Bunga</th>
                <th scope="col">Angsuran</th>
                <th scope="col">Sisa Pinjaman</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </aside>
    </div>
</body>
<script src="assets/jquery/jquery-3.5.1.min.js"></script>
<script src="assets/jquery/jquery.validate.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/numeraljs/numeral.min.js"></script>
<script src="assets/custom.js"></script>
</html>

