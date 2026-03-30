<?php 
include './incl/conn.php';
include './incl/form.php';
include './incl/select.php';
include './incl/conn_close.php';

?>

<?php include_once './incl/header.php' ?>

    

        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <img src="imgg/ghgh.gif" alt="Stg"/>
                <h1 class="display-4 fw-normal mb-4">اربح مع زيد</h1>
                <p class="lead fw-normal">باقي على نهاية السحب :</p>
                <h2 id="countdown" class="mb-4"></h2>
            </div>
            
            <div class="container">
                <h3>جوائز السحب للمسابقه ما يلي :</h3>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">  جهاز منصة PS5</li>
                    <li class="list-group-item">جهاز منصة Xbox</li>
                    <li class="list-group-item">دراجة كهربائيه</li>
                    <li class="list-group-item">كامري 2016</li>
                    <li class="list-group-item">fifth one</li>
                </ul>
            </div>
            
        </div>




        

    <div class="container">
        <div class="position-relative text-center">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    
                    <h3 class="display-4 fw-normal mb-4 text-center">الرجاء إدخل معلوماتك</h3>
                    
                    <div class="mb-3">
                        <label for="FirstName" class="form-label">الاسم الأول</label>
                        <input type="text" class="form-control" id="FirstName" name="FirstName" value="<?php echo $firstName ?>" aria-describedby="FirstNameHelp">
                        <div id="FirstNameHelp" class="form-text error"><?php echo $errors['FirstNameError'] ?></div>
                    </div>

                    <div class="mb-3">
                        <label for="LastName" class="form-label">الاسم الأخير</label>
                        <input type="text" class="form-control" id="LastName" name="LastName" value="<?php echo $lastName ?>" aria-describedby="LastNameHelp">
                        <div id="LastNameHelp" class="form-text error"><?php echo $errors['LastNameError'] ?></div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">البريد الإلكتروني</label>
                        <input type="text" class="form-control" id="email" name="email" value="<?php echo $email ?>" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text error"><?php echo $errors['emailError'] ?></div>
                    </div>

                    <div class="text-center">
                        <button type="submit" name="submit" class="btn btn-primary">إرسال المعلومات</button>
                    </div>

                </form>
            </div>
        </div>

        <div class="loder-con">
            <div id="snakeloop">
                <canvas id="circularLoader" width="200" height="200"></canvas>
            </div>
        </div>

    <!-- Button trigger modal -->
        <div id="WC" class="d-grid gap-2 col-6 mx-auto my-5">
            <button type="button" id="winner" class="btn btn-primary">
                اختيار الرابح
            </button>
        </div>
<!-- Modal -->
<div class="modal fade" id="MainModal" tabindex="-1" aria-labelledby="MainModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="MainModalLabel">الرابح في المسابقة</h5>

      </div>
      <div class="modal-body">
        <?php foreach($users as $user): ?>
            <h1 class="display-3 text-center modal-title" id=""><?php echo htmlspecialchars($user['firstname'] . ' ' . $user['lastname'] ) . '<br>'; ?></h1>
        <?php endforeach; ?>
        </div>
    </div>
  </div>
</div>

<?php include_once './incl/footer.php' ?>