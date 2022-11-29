<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<?php
if (!isset($_COOKIE['ex1'])) {
    echo '<script>
    alert("Вітаємо тебе на квесті!\nДля продовження натисни ОК");
    alert("У тебе є 8 завдань. Тобі потрібно це пройти.\nДля продовження натисни ОК");
    alert("Це все анонімно, якщо що.\nДля продовження натисни ОК");
    alert("Ну що ж, уперед)\nДля продовження натисни ОК");
</script>';
    setcookie("ex1","true");
    include "ex1.php";
}
if (!isset($_COOKIE['ex2']) and isset($_COOKIE['ex1'])) {
echo "Тобі тут потрібно вибрати номер нашої гімназії";
    include "ex2.php";
}
if (!isset($_COOKIE['ex3']) and isset($_COOKIE['ex2'])) {

//    include "ex3.php";
    include "ex4.php";
}
if (!isset($_COOKIE['ex4']) and isset($_COOKIE['ex3'])) {

//    include "ex4.php";
    include "ex5.php";
}
if (!isset($_COOKIE['ex5']) and isset($_COOKIE['ex4'])) {

//    include "ex5.php";
    include "ex6.php";
}
if (!isset($_COOKIE['ex6']) and isset($_COOKIE['ex5'])) {

//    include "ex6.php";
    include "ex7.php";
}
if (!isset($_COOKIE['ex7']) and isset($_COOKIE['ex6'])) {

//    include "ex7.php";
    include "rebus.php";
}
if (!isset($_COOKIE['ex8']) and isset($_COOKIE['ex7'])) {

//    include "rebus.php";
    echo '<script>alert("Ти успішно пройшов квест!");</script>';
    include "final.php";
}
//if (!isset($_COOKIE['final']) and isset($_COOKIE['ex8'])) {
//    echo '<script>alert("Ти успішно пройшов квест!");</script>';
//    include "final.php";
//}