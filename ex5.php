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
<span>* Упишіть відповідь з великої літери, інакше не зарахується.</span><br><br>
<h1 style="text-align: center; "><?php $a = ['г','а','р','м','о','н','і','я']; shuffle($a); $b = implode("",$a); echo $b;?><button onclick="alert('Відповідь на  анаграму - назва танцювального колективу');" class="btn btn-warning"><img src="https://svgsilh.com/svg/1363011.svg" style="width: 20px;height:20px;"> </button>
</h1>
<form method="post" autocomplete="off">
    <div style="width: 95%;margin-left: auto;margin-right: auto;" class="mb-3">
        <input type="text" required placeholder="Ваша відповідь.." name="answer" class="form-control" style="border-radius: 25px;">
    </div> <div class="mb-3" style=" text-align:center;margin-right: auto; margin-left: auto" ><input style="border-radius: 25px;" type="submit" class="btn btn-success" value="Відповісти"></div>
</form>

<?php
if (isset($_POST['answer'])) {
    if ($_POST['answer'] == "Гармонія") {
//        setcookie("ex5", "true");
////        header("Location: ".$_SERVER["REQUEST_URI"]);
//        header("Location: ./");
        echo "<script>document.cookie='ex5=true'; alert('Правильно!');  document.location.replace('./');</script>";
    } else {
//        setcookie("ex5", "false");
//        header("Location: ./");
        echo "<script>document.cookie='ex5=false'; alert('Невірно!');  document.location.replace('./');</script>";
    }
}
if(isset($_COOKIE['ex5'])) {
    echo "Працює!";
}

