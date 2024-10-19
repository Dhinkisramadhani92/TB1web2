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

        <div class ='produk-grid'>
        <!-- Product Card 1 -->
        @foreach ($produk as $item)
        <div class="product-card">
            <img src="{{ url('storage/public/images/' . $item->image) }}" alt="Produk 1">
            <h3>{{$item->nama_produk}}</h3>
            <p class="price">{{$item->harga}}</p>
            <p class="description">{{$item->deskripsi}}</p>
            <button class="card-button">edit</button>
            {{--<button class="card-botton">delete</button>--}}
            <from action="{{url('produk/delete/' . $item->kode_produk) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </from>
        </div>
        @endforeach
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Aplikasi Penjualan. All rights reserved.</p>
    </footer>
</body>
</html>
