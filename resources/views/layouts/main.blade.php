<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Begitu Sulid</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="mb-2">
        <ul class="nav justify-content-center">
            {{-- <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Active</a>
              </li> --}}
            {{-- <li class="nav-item">
              <a class="nav-link disabled" aria-current="page" href="">Active</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Masih On Progres jadi DISABLED</a>
            </li> --}}
          </ul>
    </div>
     {{-- <body style="background: rgb(17, 195, 4);"> --}}
      <body style="background: #00D7FF">
        <div class="form-check form-switch d-flex justify-content-center mt-5">
            <input class="form-check-input" type="checkbox" role="switch" id="switch" checked="" onchange="switchMode()">
            <label class="form-check-label ms-3" style="color: rgb(25, 27, 29);" for="flexSwitchCheckChecked" id="label">Mode</label>
        </div>
    
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <script>
            function switchMode() {
                let body = document.querySelector('body');
                let switchEl = document.querySelector('#switch');
                let label = document.querySelector('#label');
                if (switchEl.checked) {
                    body.style.background = '#00D7FF';
                    label.style.color = '#000000';
                }else {
                    body.style.background = '#ffffff';
                    label.style.color = '#5F6F94';
                }
            }
        </script>
        {{-- swicthalert
        <link href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script> --}}
    {{-- <h1>Hello, world!</h1> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <div class="container">
        @yield('container')
    </div>
</body>
</html>