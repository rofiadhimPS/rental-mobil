<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Akun</title>
    <meta
      name="description"
      content="Rental mobil Makassar menyediakan sewa mobil dengan pelayanan berkualitas, murah dan mengutamakan kenyamanan. Rental mobil makassar menyediakan berbagai macam mobil sesuai dengan kebutuhan dan keinginan client. Akun Rental Mobil"
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
    <style>
      body{
        width: 80%
      }
        .profile-picture-container {
        position: relative;
        display: inline-block;
      }

      .camera-icon-container {
        position: absolute;
        bottom: 0;
        right: 0;
        background-color: purple;
        padding: 5px;
        border-radius: 50%;
      }



      @media (max-width: 768px) {
       .profile-picture {
          width: 120px; /* Lebar gambar untuk viewport layar kecil */
          }
        body{
          width: 100%;

        }
        svg path{
          border-right: none;
          border-left: none;
        }
        body div .nobor{
          border-right: none;
          border-left: none;
        }
      }

    </style>
    <link rel="icon" href="{{ asset('images/tkro.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  </head>
  <body style="margin:auto;">
         <!-- navbar -->
         @include('components.navbar')
        <!-- akhir navbar -->
        <form method="POST" action="{{ route('user.akun.update') }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <section class="jumbotron text-center" class="text-center" style="background-color:#AE88FF40; border-left: 2px solid #797979; border-right: 2px solid #797979;">
    <h2 style="margin-top: 50px; padding-top:10px;">Edit Akun</h2>
    <div class="d-flex flex-row position-relative mt-1 mb-5 justify-content-center" style="width: 100%; border-radius: 10px; height: 15vh;">
      <div class="profile-picture-container mt-4">
        <div class="rounded-circle overflow-hidden" style="width: 173px; height: 173px;">
          <img src="{{ filter_var($user->avatar, FILTER_VALIDATE_URL) ? $user->avatar : asset('images/profil/'.$user->avatar) }}" class="w-100 h-100 object-cover" alt="Profile Picture">
      </div>
        <label for="profile-picture-upload" class="profile-picture-upload-label">
          <input type="file" name="avatar" id="profile-picture-upload" style="display: none;">
          <div class="camera-icon-container">
            <img src="{{ asset('images/Camera Icon.png') }}" class="camera-icon">
          </div>
        </label>
      </div>
      
  </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
      class="border-left: 2px solid #000; border-right: 2px solid #000;"
        fill="#fff"
        fill-opacity="1"
        d="M0,96L48,106.7C96,117,192,139,288,144C384,149,480,139,576,122.7C672,107,768,85,864,90.7C960,96,1056,128,1152,138.7C1248,149,1344,139,1392,133.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
      ></path>
    </svg>
  </section>
<div class="mb-4 nobor" style="background-color:#fff; border-left: 2px solid #797979; border-right: 2px solid #797979;">
    <div class="mx-5 mb-4">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" name="name" class="form-control" style="border: 1px solid #e2dfdf; width : 60%; border-radius: 5px;" id="nama" value="{{ $user->name }}" aria-describedby="emailHelp">
    </div>
    <div class="mx-5 mb-4">
      <label for="email" class="form-label">Email address</label>
      <input type="email" name="email" class="form-control" style="border: 1px solid #e2dfdf; width : 60%; border-radius: 5px;" id="email" value="{{ $user->email }}" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mx-5 mb-4">
      <label for="exampleInputNo" class="form-label" >No Handphone</label>
      <input type="number" name="no_telp" class="form-control" minlength="8" style="border: 1px solid #e2dfdf; width : 60%; border-radius: 5px;" id="exampleInputNo" value="{{ $user->no_telp }}">
    </div>
    <div class="data_pengguna m-5">
      <button type="submit" class="border bg-dark border-0  shadow-sm p-2 rounded-2" style="color: #fff; width : 100px;"> Simpan</button>              
    </div>
  </div>
</form>
    

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
