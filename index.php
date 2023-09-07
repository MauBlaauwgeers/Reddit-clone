<!doctype html>
<html lang="en">

<head>
  <title>Maup</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <style>
    .mask:hover {
      background: linear-gradient(45deg,
          hsla(168, 85%, 52%, 0.5),
          hsla(263, 88%, 45%, 0.5) 100%);
    }

    .timeLine {
      width: 40px;
      margin-left: 10px;
    }

    .verticalline {
      border-right: 1px solid lightgray;
      height: 640px;
    }

    .marginOnNav {
      margin-left: -43px;
    }
  </style>
</head>

<body>
  <header>
    <div class="container-fluid">
      <div class="row m-2 ">
        <div class="col-md-1 text-center">
          <a href="index.php" class="text-decoration-none marginOnNav"><b>Maup</b></a>
          <br>
          <hr class="timeLine ">
          <i class="marginOnNav">
            <?php
            $timeNow = date("H:i");
            echo $timeNow;
            ?>
          </i>
        </div>
        <div class="col-md-8 text-center"><input class="rounded mt-3" type="search" name="" id="" size="70" height="" placeholder=" Search Maup"></div>
        <div class="col-md-1">
          <button class="btn btn-primary mask rounded mt-2">Get app</button>
        </div>
        <div class="col-md-1 mt-2">
          <button class="btn btn-primary mask rounded">Log in</button>
        </div>
        <div class="col-md-1 ">
          <div class="dropdown open">
            <button class="btn btn-primary dropdown-toggle mask mt-2" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              ···
            </button>
            <div class="dropdown-menu">
              <button class="dropdown-item btn btn-primary mask" href="#">Log In/Sign Up</button>
              <button class="dropdown-item btn btn-primary mask" href="#">Advertise on Maup</button>
              <button class="dropdown-item btn btn-primary mask" href="#">Shop Collectible</button>
            </div>
          </div>
        </div>
      </div>
      <hr>
    </div>
  </header>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1  ">
          <div class="verticalline ">

            <button class="btn btn-primary mask m-2 w-75" href="#"><small>Popular</small></button>
            <br>
            <br>
            <button class="btn btn-primary mask m-2 w-75" href="#"><small>Gaming</small></button>
            <br>
            <br>
            <button class="btn btn-primary mask m-2 w-75" href="#"><small>Crypto</small></button>
            <br>
            <br>
            <button class="btn btn-primary mask m-2 w-75" href="#"><small>Sports</small></button>
            <br>
            <br>
            <button class="btn btn-primary mask m-2 w-75" href="#"><small>Celebrity</small></button>
            <br>
            <br>
            <button class="btn btn-primary mask m-2 w-75" href="#"><small>Animals</small></button>
            <br>
            <br>
            <button class="btn btn-primary mask m-2 w-75" href="#"><small>Cars</small></button>
            <br>
            <br>
            <br>
            <br>
            <small><i>
              <?php
                echo date('l jS \of F Y')
              ?>
              </i></small>
          </div>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-10"></div>
      </div>
    </div>
  </main>
  <footer>

  </footer>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>