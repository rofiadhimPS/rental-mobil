@extends('components.sidebar')

@section('style')
<style>
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
  .profile-picture {
      width: 173px;
      height: 173px; /* Lebar gambar untuk viewport layar kecil */
      }



  @media (max-width: 768px) {
   .profile-picture {
      width: 120px; /* Lebar gambar untuk viewport layar kecil */
      height: 120px; /* Lebar gambar untuk viewport layar kecil */
      }
    }
</style>
@endsection

@section('container')
            <nav class="navbar w-100" style="padding: 2% 0; background-image: linear-gradient(to right, #001743 , #350261); color: white;">
                <div style="margin-left: 5%;">
                    <h1>Akun</h1>
                </div>
            </nav>
    
            <form  action="{{ route('admin.akun.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
<div class="d-flex flex-row position-relative mt-1 mb-5 justify-content-center"  style="width: 95%; margin:auto; border-radius: 10px; height: 15vh; background-color: #BBB5FF; box-shadow: 4px 4px 16px rgb(0 0 0 / 10%);">
    <div class="profile-picture-container mt-4">
        <div class="rounded-circle overflow-hidden profile-picture">
            <img src="{{ filter_var($users->avatar, FILTER_VALIDATE_URL) ? $users->avatar : ($users->avatar ? asset('images/profil/'.$users->avatar) : asset('images/Profile Picture.png')) }}" class="w-100 h-100 object-cover" alt="Profile Picture">
        </div>
      <label for="profile-picture-upload" class="profile-picture-upload-label">
        <input type="file" name="avatar" id="profile-picture-upload" style="display: none;">
        <div class="camera-icon-container">
          <img src="{{ asset('images/Camera Icon.png') }}" class="camera-icon">
        </div>
      </label>
    </div>
    
</div>

<div class="d-flex flex-wrap" style="margin: 11.5% 3% 1.5%;">
    <div class="col-lg-6 col-md-8 col-sm-10 col-12">
        <div class="d-grid gap-3">
            <div class="form-group d-grid gap-2">
                <label for="name" class="fs-5">Nama</label>
                <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Kemal Kamaruddin" value="{{ $users->name }}" required>
            </div>
            <div class="form-group d-grid gap-2">
                <label for="no_telp" class="fs-5">No Telepon</label>
                <input type="tel" class="form-control form-control-lg" id="no_telp" name="no_telp" placeholder="0862266228xx" value="{{ $users->no_telp }}" required>
            </div>
            <div class="form-group d-grid gap-2">
                <label for="email" class="fs-5">Email</label>
                <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="nama@example.com" value="{{ $users->email }}" required>
            </div>
            <div>
                <input class="btn btn-primary fs-5" type="submit" value="Simpan" style="background-color: black; color: white; border-radius: 10px;">
            </div>
        </div>
        <a class="btn btn-primary fs-5 mt-2"  href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Sign Out</a>
    </div>
</div>
        </form>
                                    <form id="logout-form" action="{{route('logout')}}" method="post" style="display: none">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    </form>

@endsection