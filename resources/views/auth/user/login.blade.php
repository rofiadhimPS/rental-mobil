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
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />

    <style>
      .loginTitle {
        padding: 10px;
        margin-top: 15%;
      }
    </style>
  </head>
  <body>
    <!-- card -->
    <div 
      class="card d-flex flex-row flex-wrap justify-content-center align-items-center mb-3 mx-auto" 
      style="margin: 4% 0; width: 70%;border-radius: 10px; box-shadow: 4px 4px 16px rgb(0 0 0 / 10%);"
    >
      <div class="w-50">
        <img
          style="width:100%; height: 492px"
          src="{{ asset('images/gambar-login.png') }}"
          alt="Gambar Login"
        />
      </div>
      <div class="w-50 px-4 py-5">
        <h1 class="loginTitle">Log In</h1>
        <div class="mb-3">
          <input
            type="email"
            class="form-control form-control-lg"
            id="exampleFormControlInput1"
            placeholder="Nomor Telepon/Username/Email"
          />
        </div>
        <div class="mb-3">
          <div class="input-group flex-nowrap">
            <input
              type="password"
              id="pass"
              class="form-control form-control-lg"
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
          <a
            href="/"
            class="btn btn-primary btn-lg w-100"
            style="background-color: #340867; border: none;"
          >
            Log In
          </a>
        </div>
        <div class="d-flex justify-content-end">
          <a href="#" class="fs-6 text-decoration-none">Lupa Password?</a>
        </div>
        <div class="d-flex justify-content-center mt-5">
          <p class="fs-4">atau</p>
        </div>
        <div
          class="d-flex justify-content-center mb-3"
          style="box-shadow: 4px 4px 16px rgb(0 0 0 / 10%);border-radius: 10px;"
        >
          <a
            type="button"
            class="btn btn-lg w-100 d-flex justify-content-center align-items-center d-grid gap-2 fs-4"
            href="{{route('user.login.google')}}"
          >
            <img
              src="{{ asset('images/Google Logo.png') }}"
              style="width: 30px;"
              alt="Google Logo"
            />
            Google
          </a>
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
    </script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
