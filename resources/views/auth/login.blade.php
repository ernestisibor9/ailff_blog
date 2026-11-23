<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>

</style>

<body style="background-color: #F5F7F8">
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="text-center mb-2">
                <img src={{ asset('backend/images/ailff_logo.png') }} alt="">
            </div>
            <div class="col-md-6">
                <div class="card shadow p-2">
                    <h5 class="text-center pt-3">Login</h5>
                    <hr>
                    <div class="card-body">
                        <form method="post" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3 ">
                                <label for="">Email</label>
                                <input type="email" name="email"
                                    class="form-control  @error('email')is-invalid @enderror" id="email"
                                    placeholder="Email">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 password-container">
                                <label for="">Password</label>
                                <input type="password" name="password"
                                    class="form-control @error('email')is-invalid @enderror" id="password"
                                    placeholder="Password" style="padding-right: 40px; width: 100%;">
                                <i id="toggle-password" class="fas fa-eye"
                                    style="
                                        position: absolute;
                                        right: 35px;
                                        top: 63%;
                                        transform: translateY(-50%);
                                        cursor: pointer;
                                        color: #666;
                                        "></i>
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="submit">Login</button>
                            </div>
                        </form>
                        <div>
                            <div class="text-center mt-2">
                                <a href="{{ route('password.request') }}" class="text-decoration-none">Forgot
                                    Password?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const passwordInput = document.getElementById("password");
const togglePassword = document.getElementById("toggle-password");

togglePassword.addEventListener("click", () => {
  // Toggle the type attribute
  const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
  passwordInput.setAttribute("type", type);

  // Toggle the icon class
  togglePassword.classList.toggle("fa-eye");
  togglePassword.classList.toggle("fa-eye-slash");
});

    </script>
</body>

</html>
