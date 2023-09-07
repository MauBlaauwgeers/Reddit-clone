<!doctype html>
<html lang="en">

<head>
  <title>Reddit</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
        .mask:hover{
            background: linear-gradient(
            45deg,
            hsla(168, 85%, 52%, 0.5),
            hsla(263, 88%, 45%, 0.5) 100%);
            }
    </style>
</head>

<body>
  <header>
    <div class="container-fluid">
        <div class="row m-3 ">
            <div class="col-md-3">
                Logo
                <br>
                <b>
                <?php
                    $timeNow = date("H:i");
                    echo $timeNow;
                ?>
                </b>
            </div>
            <div class="col-md-6"><input type="search" name="" id="" placeholder=" Search Reddit"></div>
            <div class="col-md-1">
                <button class="btn btn-primary mask rounded">Get app</button>
            </div>
            <div class="col-md-1">
            <button class="btn btn-primary mask rounded">Log in</button>
            </div>
            <div class="col-md-1 "> <div class="dropdown open">
                <button class="btn btn-primary dropdown-toggle mask" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ···
                </button>
                <div class="dropdown-menu">
                    <button class="dropdown-item btn btn-primary mask" href="#">Log In/Sign Up</button>
                    <button class="dropdown-item btn btn-primary mask" href="#">Advertise on Reddit</button>
                    <button class="dropdown-item btn btn-primary mask" href="#">Shop Collectible</button>
                </div>
            </div></div>
        </div>
    </div>
  </header>
  <main>

  </main>
  <footer>
    
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>