<style>
    * {
        -webkit-user-select: none;
        text-align: center;
    }
    .imgs {
        display: none;
    }
</style>
<div class="body">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<img style='pointer-events: none; text-align: center' src="img/imgzolotiyzapas.png"><br>
<form method="post" autocomplete="off">
    <div class="mb-3">
    <textarea name="answer" class="form-control" style="resize: none;width: 50%;height: 50%;margin-left: auto;margin-right: auto" required placeholder="Ваша відповідь.." onresize="false"></textarea>
    </div>

        <div class="mb-3" style="text-align: center"><button type="submit" class="btn btn-success" >
                Відповісти
            </button>
        </div>
</form>
</div>

<div class="imgs" style="margin-left: auto;text-align: center;margin-right: auto">
    <img  style="pointer-events:none;width: 35%; height: 50%; min-height: 50%; min-width: 20%; float: left" src="img/zolzapas1.jpg">
    <img style="pointer-events:none;width: 40%; height: 50%; min-height: 50%; min-width: 20%; float: left" src="img/zolzapas2.jpg">
<br><br><br>
    <button class="btn btn-success" style="margin-top: auto;" onclick="document.cookie='exrebusphoto=true';window.location.reload(window.location)">Далі -></button>


</div>



<?php
if (isset($_POST['answer'])) {
    if (mb_strtolower($_POST['answer']) == "золотий запас") {
        setcookie("ex8", "true");

        header("Location: ".$_SERVER["REQUEST_URI"]);
    }
}
if(isset($_COOKIE['ex8'])) {
    echo "<style>.body {display:none;}  .imgs { display: inline-table;}</style>";
}

