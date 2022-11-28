<style>
    * {

    color: white;
    }
    </style>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<body style="background-color: #2c2525;color: white;">
<form style="margin-left: 2%;margin-top:1%;" method="post">
    <fieldset>
        <legend>Які профілі навчання у нас в гімназії є?</legend>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" name="1" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Фізкультурний
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" name="2" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Працівничий
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" name="3" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Філологічний
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" name="4" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Мовний
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" name="5" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
               Танцювальний
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" name="6" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Природний
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" name="7" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
               Фізичний
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" name="8" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Економіко-математичний
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" name="9" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                 Суспільно-економічний
            </label>
        </div>

<br>


        <button type="submit" class="btn btn-success">Відповісти</button>
    </fieldset>
</form>

<?php
if (isset($_POST)) {
       if (isset($_POST['3']) and isset($_POST['6']) and isset($_POST['8']) and isset($_POST['9'])) {
           setcookie("ex4", "true");
           header("Location: ".$_SERVER["REQUEST_URI"]);
       } else {
           echo "<div class='nevirno'>Невірно / Не вказано</div>";
       }
}
if(isset($_COOKIE['ex4'])) {
    echo "<style> .nevirno {display:none;}</style>Працює!";
}


?>
</body>