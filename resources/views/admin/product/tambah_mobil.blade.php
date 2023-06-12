<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rental Mobil</title>
    <meta
      name="description"
      content="Rental mobil Makassar menyediakan sewa mobil dengan pelayanan berkualitas, murah dan mengutamakan kenyamanan. Rental mobil makassar menyediakan berbagai macam mobil sesuai dengan kebutuhan dan keinginan client."
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Mulish:wght@300&family=Poppins:ital,wght@0,100;1,200&family=Roboto:wght@900&family=Sen:wght@400;700;800&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css"
      integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51"
      crossorigin="anonymous"
    />
    <link rel="icon" href="{{ asset('images/tkro.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/pembayaran.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  </head>
  <body>
    <!-- form pembayaran -->
    <div class="container__form d-flex p-2 d-flex d-flex flex-column mb-3 justify-content-center mx-auto" style="width: 60%; margin-top:100px;">
        <div class="pageTitle" style="width: 60%;">
          <h1>Tambah Mobil</h1>
        </div>
        <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 d-flex flex-column">
          <label for="title" class="form-label">Title Mobil</label>
          <input type="text" class="form-control" name="title"  id="title" value="{{ old("title") }}">
          @error('title')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 d-flex flex-column">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control" name="slug"  id="slug" value="{{ old('slug') }}">
          @error('slug')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 d-flex flex-column">
          <label for="tahun" class="form-label">Tahun</label>
          <input type="text" class="form-control" name="tahun"  id="tahun" placeholder="tahun keluaran" value="{{ old('tahun') }}">
        </div>
        <div class="mb-3 d-flex flex-column">
          <label for="seat" class="form-label">Seat</label>
          <input type="text" class="form-control" name="seat"  id="seat" placeholder="jumlah Seat" value="{{ old('seat') }}">
        </div>
        <div class="mb-3 d-flex flex-column">
          <label for="metode_bayar" class="form-label">Metode Pesan</label>
          <input type="text" class="form-control" name="metode_bayar"  id="metode_bayar" placeholder="" value="Transfer atau Cash">
        </div>
        <div class="mb-3 d-flex flex-column">
          <label for="price" class="form-label">Price</label>
          <input type="text" class="form-control" name="price"  id="price" value="{{ old('price') }}">
          @error('price')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
          <label for="icon" class="form-label">Gambar</label>
          <input class="form-control" type="file" name="icon" id="icon" accept="image/*" required>
          <img id="previewImage" src="#" alt="preview mobil rental" style="display:none;" width="300px">
          @error('icon')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div>
          <button id="submit-form2" type="submit" class="btn btn-primary">Tambah</button>
          <button type="button" class="btn btn-primary" onclick="window.location.href = '/admin/produk';">Selesai</button>
        </div>
      </form>
      
      </div>
    </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <script src="{{ asset('JS/imageform.js') }}"></script>
  </body>
</html>
