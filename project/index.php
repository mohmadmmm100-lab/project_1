<?php
include './php/conn.php'; 
include './php/form.php';
include './php/sql_check.php';
include './php/db_close.php';
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.rtl.min.css" >
    <link rel="stylesheet" href="./css/style.css">



</head>
<body>
 

<!-- title -->
 <div class="position-relative overflow-hidden p-1 p-md-2 m-md-1 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">اربح معنا</h1>
      <p class="lead fw-normal">باقي على التسجيل</p>
      <p id="counter">  </p>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  </div>


  <!-- form -->
 <div class="container" >
<div>
    <h2 class="text-center">تسجيل الدخول</h2>
</div>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div class="form-floating mb-1">
  <input type="text"  name="firstname" class="form-control error" id="floatingInput" placeholder="firstname">
  <label for="floatingInput">الاسم الأول</label>
  <?php if (!empty($errors['firstname'])): ?>
      <div class="error-message"><?php echo $errors['firstname']; ?></div>
  <?php endif; ?>
</div>
<div class="form-floating mb-1">
  <input type="text"  name="lastname" class="form-control error" id="floatingInput" placeholder="lastname">
  <label for="floatingInput">الاسم الأخير</label>
  <?php if (!empty($errors['lastname'])): ?>
      <div class="error-message"><?php echo $errors['lastname']; ?></div>
  <?php endif; ?>
</div>
<div class="form-floating mb-1">
  <input type="text"  name="email" class="form-control error" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">البريد الإلكتروني</label>
  <?php if (!empty($errors['email'])): ?>
      <div class="error-message"><?php echo $errors['email']; ?></div>
  <?php endif; ?>
</div>
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
 </div>  
</form>
</div>

<div class="container p-md-3">
  <div class="text-center">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      عرض الفائزين
    </button>
  </div>
  </div>

<!-- table -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- HEADER -->
      <div class="modal-header">
        <h5 class="modal-title w-100 text-center" id="exampleModalLabel" >الرابح</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- BODY -->
      <div class="modal-body">
        <div id="cards" class="container p-md-3">
          <div class="row">
            <?php foreach ($users as $user): ?>
                    <h1 class="card-title" style="text-align: center; color: #000;">
                      <?php echo htmlspecialchars($user['firstname'] . ' ' . $user['lastname']); ?>
                    </h1>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

   <script src="./java/bootstrap.bundle.min.js"></script>
    <script src="./java/countdown.js"></script>
    <script src="./java/winner.js"></script>

</body>

</html>
