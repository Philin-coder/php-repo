<?session_start();

    $host = 'localhost'; // адрес сервера 
    $user = 'root'; // имя пользователя
    $password = ''; // пароль
    $database = 'pizzeria'; // имя базы данных

    $link = mysqli_connect($host, $user, $password, $database);

mysqli_query($link, "SET NAMES 'utf8'");
$login = $_POST['login'];
$parol = $_POST['parol'];
    $fio = $_POST['fio'];
    $email = $_POST['email'];
	$address = $_POST['address'];
    $tel = $_POST['tel'];
    
    

    if (!empty($_POST['btn_regist'])) {

        $sql = mysqli_query($link,"INSERT INTO polzov (login, parol, fio, email, address,tel) VALUES ('".login."', '".$parol."', '".$fio."', '".$email."', '".$address."','".$tel."')");
       !var_dump($sql);
	   /*  $query = $db->query($sql); */

        if ( $sql) {

            $_SESSION['id_user'] = mysqli_insert_id($link);
            $_SESSION['login'] = $login;
            $_SESSION['parol'] = $parol;

            header('Location: autoriz.php');

        }

    }
//    include('autoriz.php');
    include ('temp/head.php');
   
    
?>
<div class="container bg-white border pb-5">
    <form action="regist.php" class="row pt-5 needs-validation" method="POST" novalidate>
        <div class="col-lg-6 offset-lg-3">   
        <h4 class="pb-2 bg-dark text-center pt-3 pb-3 text-white border-bottom border-primary position-relative">
            
            <br/>
            Регистрация
        </h4>
        </div>
        <div class="col-lg-6 offset-lg-3 mt-2">
            <div class="form-group">
                <label for="fio_user" class="control-label">Ф.И.О <span class="text-danger">*</span></label>
                <input type="text" class="form-control rounded-0" placeholder="Фамилия, имя, отчество" name="fio" pattern="[А-Яа-яЁё\. ]+" required>
                <div class="invalid-feedback">
                    <small>Поле является обязательным и должно содержать только строчные или заглавные буквы русского алфавита.</small>
                </div>
            </div>
        </div>
		 <div class="col-lg-6 offset-lg-3">
            <div class="form-group">
                <label for="fio_user" class="control-label">Адрес <span class="text-danger">*</span></label>
                <input type="text" class="form-control rounded-0" placeholder="город, улица, дом" name="address" pattern="[А-Яа-яЁё\. ]+" required>
                <div class="invalid-feedback">
                    <small>Поле является обязательным и должно содержать только строчные или заглавные буквы русского алфавита.</small>
                </div>
            </div>
        </div>
        <div class="col-lg-6 offset-lg-3">
            <div class="form-group">
                <label for="email">Электронная почта <span class="text-danger">*</span></label>
                <input type="email" id="email" class="form-control rounded-0" placeholder="Эл.почта" name="email" required>
                <div class="invalid-feedback">
                    <small>Поле является обязательным и должно содержать символ @.</small>
                </div>
            </div>
        </div>
        <div class="col-lg-6 offset-lg-3">
            <div class="form-group">
                <label for="phone">Телефон <span class="text-danger">*</span></label>
                <input type="text" id="phone" class="form-control rounded-0" placeholder="Телефон в формате +7 (XXX) XXX-XX-XX" name="tel" >
                <div class="invalid-feedback">
                    <small>Поле является обязательным и должно быть указанно в формате +7 (XXX) XXX-XX-XX.</small>
                </div>
            </div>
        </div>
        <div class="col-lg-6 offset-lg-3">
            <div class="form-group">
                <label for="login">Логин <span class="text-danger">*</span></label>
                <input type="text" id="login" class="form-control rounded-0" placeholder="Логин" minlength="6" name="login" required>
                <div class="invalid-feedback">
                    <small>Поле является обязательным и должно быть не менее 6 символов.</small>
                </div>
            </div>
        </div>
        <div class="col-lg-6 offset-lg-3">
            <div class="form-group">
                <label for="password">Пароль <span class="text-danger">*</span></label>
                <input type="password" id="password" class="form-control rounded-0" placeholder="Пароль" minlength="6" name="parol" required>
                <div class="invalid-feedback">
                    <small>Поле является обязательным и должно быть не менее 6 символов.</small>
                </div>
            </div>
        </div>
        <!-- <div class="col-lg-6 offset-lg-3">
            <div class="form-group">
                <label for="repassword">Повторите пароль <span class="text-danger">*</span></label>
                <input type="password" id="repassword" class="form-control rounded-0" placeholder="Пароль" name="repassword" required>
                <div class="invalid-feedback">
                    <small>Поле явялется обязательным и должно совпадать с полем пароль.</small>
                </div>
            </div>
        </div> -->
       
        <div class="col-lg-6 offset-lg-3">
            <div class="form-group">
                <input type="submit" name="btn_regist" class="form-control btn btn-primary" value="Регистрация">
            </div>
        </div>
    </form>
</div>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();



</script>