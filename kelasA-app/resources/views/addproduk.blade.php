<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard penjualan</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
 </head>
 <body>
     <!-- Sidebar -->
     <div class="sidebar">
        <h2>Dashboard Penjualan</h2>
        <ul>
            <li><a href="{{url('home') }}"> Home</a></li>
            <li><a href="{{url('produk') }}">Produk</a></li>
            <li><a href="#">Penjualan</a></li>
            <li><a href="#">Laporan</a></li>
            <li><a href="#">Pengaturan</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
    <!--Header -->
    <header style="display: flex; justify-conten:space-between">

        <div>
            <h1>Daftar Produk</h1>
            <p>Tentukan produk terbaik untuk kebutuhan Anda</p>
        </div>
        <div>
            <button class="card-button">Add Product</button>
        </div>
    </header>

    <div>
    <div class ="container">
            <h1>Create Product</h1>

            <!-- form to create a new  produk-->
            <form action="{{url('/produk/add')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class ="form-group">
                <label for="nama_produk">Nama Produk</label>
                <input type="text" name = "nama_produk" class="form-control" required>
            </div>

            <div class ="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" name = "deskripsi" class="form-control" required>
            </div>

            <div class ="form-group">
                <label for="harga">Harga</label>
                <input type="number" name = "harga" class="form-control" required>
            </div>

            <div class ="form-group">
                <label for="jumlah_produk">Jumlah Produk</label>
                <input type="number" name = "jumlah_produk" class="form-control" required>
            </div>

            <div class="from-group">
                <label for="image">Gambar</label>
                <input type="file" name="image" class="from-control" required>
            </div>

            <button type="Sumbit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Aplikasi Penjualan. All rights reserved.</p>
    </footer>
</body>
</html>
