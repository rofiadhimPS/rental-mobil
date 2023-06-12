<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lupa password</title>
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
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />

  </head>
  <body class="d-flex justify-content-center justify-align-center">
    <!-- card -->
    <div 
    class="card d-flex flex-row flex-center mb-3 mx-5 justify-content-center" style="margin: 4% 0; width: 70%;border-radius: 10px; box-shadow: 4px 4px 16px rgb(0 0 0 / 10%); flex-wrap:wrap; align-items:center;"
    >
      <div class="d-flex align-items-center justify-content-center">
        <img
          style="width:100%; height: 492px"
          src="{{ asset('images/gambar-login.png') }}"
          alt="login rental mobil makassar"
        />
      </div>
      <div class="d-flex align-items-center"style="margin-left: 7%">
        <div class="d-flex flex-column p-2" >
        <h1 class="loginTitle" style="padding: 10px;">Reset Password</h1>
        <form action="{{ route('password.store') }}" method="POST">
          @csrf
          <input type="hidden" name="token" value="{{ $token }}">
        <div class="mb-3">
          <input
            type="email"
            name="email"
            class="form-control-lg w-100"
            id="exampleFormControlInput1"
            placeholder="Masukkan Email Anda"
          >
          @error('email')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
        <div class="mb-3">
            <div class="input-group flex-nowrap">
              <input
                type="password"
                id="pass"
                name="password"
                class="form-control-lg w-100"
                placeholder="Password"
                aria-label="Username"
                aria-describedby="addon-wrapping"
              />
              <span
                class="input-group-text"
                id="addon-wrapping"
                onclick="change()"
              >
                <i class="fas fa-eye-slash" id="icon"></i>
              </span>
            </div>
        </div>
        <div class="mb-3">
            <div class="input-group flex-nowrap">
              <input
                type="password"
                id="pass2"
                name="password_confirmation"
                class="form-control-lg w-100"
                placeholder="Password"
                aria-label="Username"
                aria-describedby="addon-wrapping"
              />
              <span
                class="input-group-text"
                id="addon-wrapping"
                onclick="change()"
              >
                <i class="fas fa-eye-slash" id="icon2"></i>
              </span>
            </div>
        </div>
        <div>
          <button
            type="submit"
            class="btn btn-primary btn-lg w-100"
            style="background-color: #340867; border: none;"
          >
            Reset Password
          </button>
        </div>
      </form>
        </div>
      </div>
    </div>

    <script>
        function change() {
          var x = document.getElementById("pass");
          var icon = document.getElementById("icon");
          if (x.type == "password") {
            x.type = "text";
            icon.classList.remove("fa-eye-slash");
            icon.classList.add("fa-eye");
          } else {
            x.type = "password";
            icon.classList.remove("fa-eye");
            icon.classList.add("fa-eye-slash");
          }
        }
        function change2() {
          var x = document.getElementById("pass2");
          var icon = document.getElementById("icon2");
          if (x.type == "password") {
            x.type = "text";
            icon.classList.remove("fa-eye-slash");
            icon.classList.add("fa-eye");
          } else {
            x.type = "password";
            icon.classList.remove("fa-eye");
            icon.classList.add("fa-eye-slash");
          }
        }
      </script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
