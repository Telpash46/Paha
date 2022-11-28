<style>
    * {
        -webkit-user-select: none;

    }
    .imgs {
        display: none;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="body"> <br>
    <h1 style="text-align: center; ">* загадка тут должна быть * <button onclick="alert('Відповідь на цю загадку - про учнів');" class="btn btn-warning"><img src="https://svgsilh.com/svg/1363011.svg" style="width: 20px;height:20px;"> </button>
    </h1>
    <form method="post" autocomplete="off">
        <div style="width: 95%;margin-left: auto;margin-right: auto;" class="mb-3">
            <span>* Упишіть відповідь маленькими літерами, інакше не зарахується.</span><br><br>
            <input type="text" required placeholder="Ваша відповідь.." name="answer" class="form-control" style="border-radius: 25px;">
        </div> <div class="mb-3" style=" text-align:center;margin-right: auto; margin-left: auto" ><input style="border-radius: 25px;" type="submit" class="btn btn-success" value="Відповісти"></div>
    </form>
</div>
<div class="imgs" style="margin-left: auto;text-align: center;margin-right: auto">
    <img  style="pointer-events:none;width: 35%; height: 50%; min-height: 50%; min-width: 20%; float: left" alt="photo1" src="">
    <img style="pointer-events:none;width: 40%; height: 50%; min-height: 50%; min-width: 20%; float: left" alt="photo2" src="">
    <img  style="pointer-events:none;width: 35%; height: 50%; min-height: 50%; min-width: 20%; float: left" alt="photo3" src="">
    <img style="pointer-events:none;width: 40%; height: 50%; min-height: 50%; min-width: 20%; float: left" alt="photo4" src="">
    <img  style="pointer-events:none;width: 35%; height: 50%; min-height: 50%; min-width: 20%; float: left" alt="photo5" src="">
    <br><br><br>
    <button class="btn btn-success" style="margin-top: auto;" onclick="document.cookie='ex3photo=true';window.location.reload(window.location)">Далі -></button>


</div>



<?php
if (isset($_POST['answer'])) {
    if ($_POST['answer'] == "") {
        setcookie("ex3", "true");
        header("Location: ".$_SERVER["REQUEST_URI"]);
    } else {
        echo "Невірно";
    }
}
if(isset($_COOKIE['ex3'])) {
    echo "<style>.body {display:none;}  .imgs { display: inline-table;}</style>";
}

