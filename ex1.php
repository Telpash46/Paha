<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<form method="post" autocomplete="off">
    <div class="mb-3">
        <span>Укажіть ім'я нашої школи як на цих картах позначено</span><br><br>
        <input name="answer" typer="text" class="form-control" style="" required placeholder="Ваша відповідь..">
    </div>

    <div class="mb-3" style="text-align: center"><button type="submit" class="btn btn-success" >
            Відповісти
        </button>
    </div>
</form>
<div style="width:100%;">
<img style="-webkit-transform: scaleX(-1); transform: scaleX(-1); float: left;width: 99%;" src="img/1.jpg">

<img style="-webkit-transform: scaleX(-1); transform: scaleX(-1); float: left; margin-top:1%;width: 99%;" src="img/2.jpg">
</div>
<?php
if (isset($_POST['answer'])) {
    if ($_POST['answer'] == "Харківська гімназія №46 ім М. В. Ломоносова") {
//        setcookie("ex1", "true");
//
//        header("Location: ./");
        echo "<script>document.cookie='ex1=true'; alert('Правильно!');  document.location.replace('./');</script>";
    } else {
//        setcookie("ex1", "false");
//
//        header("Location: ./");
        echo "<script>document.cookie='ex1=false'; alert('Невірно!'); console.log('neverno');   document.location.replace('./');</script>";
    }
}
if(isset($_COOKIE['ex1'])) {
    echo "<script>alert('Працює')</script>";
}

