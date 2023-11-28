<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> 會員登入 </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
  <section class="vh-100" style="background-color: #9A616D;">
    <div class="container py-5 h-100">
    <?php  include "./include/header.php"?>
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="./image/img1.webp" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
                  <h2> 會員登入 </h2>
                  <form action="./api/login.php" method="post">
                    <?php
                    if (isset($_GET['error'])) {
                      echo "<span style='color:red'>";
                      echo $_GET['error'];
                      echo "</span>";
                    }
                    ?>
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;"> 請登入 </h5>
                    <div class="form-outline mb-4">
                      <label class="form-label" for=""> 帳號：</label>
                      <input type="text" name='acc' id="acc" class="form-control form-control-lg" />
                    </div>
                    <div class="form-outline mb-4">
                      <label class="form-label" for=""> 密碼：</label>
                      <input type="text" name="pw" id="pw" class="form-control form-control-lg" />
                    </div>
                    <div class="pt-1 mb-4">
                      <input type="submit" class="btn-dark btn-lg btn-block" value="送出">
                      <input type="reset" class="btn-dark btn-lg btn-block" value="重置">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include "./include/footer.php"?>
</body>
</html>