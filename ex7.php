<style>
    * {
    -webkit-user-select: none;

    }
</style>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<br>
<h1 style="text-align: center; ">356 x 6 - ( 50 / 2 + 174 ) <button onclick="alert('Відповідь на цей приклад рік заснування гімназії');" class="btn btn-warning"><img src="https://svgsilh.com/svg/1363011.svg" style="width: 20px;height:20px;"> </button>
</h1>
<form method="post" autocomplete="off">
    <div style="width: 95%;margin-left: auto;margin-right: auto;" class="mb-3">
    <input type="number" required placeholder="Ваша відповідь.." name="answer" class="form-control" style="border-radius: 25px;" min="0" max="2022">
    </div> <div class="mb-3" style=" text-align:center;margin-right: auto; margin-left: auto" ><input style="border-radius: 25px;" type="submit" class="btn btn-success" value="Відповісти"></div>
</form>

<?php
if (isset($_POST['answer'])) {
    if ($_POST['answer'] == "1937") {
        setcookie("ex7", "true");
        header("Location: ".$_SERVER["REQUEST_URI"]);
    } else {
        echo "Невірно";
    }
}
if(isset($_COOKIE['ex7'])) {
    echo "Працює!";
}

