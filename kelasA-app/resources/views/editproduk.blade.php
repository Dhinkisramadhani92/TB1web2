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
        <!--Header-->
        <header style="display: flex; justify-conten:space-between">
            <div>
                <h1>Daftar Produk</h1>
                <p>Tentukan produk terbaik untuk kebutuhan Anda</p>
            </div>
            <div>
                <button class="card-button"><a class="text-decoration-none text-wh" href="{{url('/produk/add')}}">Add Produk</a></button>
            </div>
        </header>


        <!-- Produk Grid -->
        <div>
            <div class="container">
                <h1>EditProduk </h1>

                <!-- From to edit  a new produk-->
                <from action="{{ url ('produk/edit/' . $ubahproduk->kode_produk) }}" method="POST" enctype="mulipart/from_data">
                    @csrf
                    @method('PUT')
                    <div class="from-group">
                        <label for="nama_produk">Nama Produk</label>
                        <input type="text" name="nama_produk" class="from-control" required value='{{$ubahproduk->nama_produk}}'>
                    </div>

                    <div class="from-group">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" name="deskripsi" class="from-control" required value='{{$ubahproduk->deskripsi}}'>
                    </div>

                    <div class="from-group">
                        <label for="harga">Harga</label>
                        <input type="text" name="harga" class="from-control" required value='{{$ubahproduk->harga}}'>
                    </div>

                    <div class="from-group">
                        <label for="jumlah-produk">Jumlah Produk</label>
                        <input type="text" name="jumlah-produk" class="from-control" required value='{{$ubahproduk->jumlah_produk}}'>
                    </div>

                    <div class="from-group">
                        <label for="image">Gamar</label>
                        <input type="file" name="image" class="from-control" required>

                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>

                </from>
            </div>
        </div>

<!-- Footer -->
    <footer>
        <p>&copy; 2024 Aplikasi Penjualan. All rights reserved.</p>
    </footer>
</body>
</html>
