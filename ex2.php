<style>
    .btn-ex2 {
        background-color:grey;
        border:none;
        color:aqua;
    }
    form:clicked {
        font-size:40px;
        color:red;
        font-weight:bold;
    }

    * {
        font-size:35px;
        -webkit-user-select:none;
    }
    .knocked {
        font-size:40px;
        color:red;
        font-weight:bold;
    }
    button {
        pointer:pointer;
    }
</style>

<?php

$numbers=['๐คช','๐','๐ค','๐ค','๐','๐ค','๐คญ','๐ฎ','๐','๐','๐ซ','๐ซ','๐ฆ','๐','๐ง','๐ฅ','๐ฅฆ','๐ฅ','๐ฅ','๐ฝ','๐ฝ','๐ช','๐ก','๐งฑ','๐','๐','๐','๐ญ','๐ฆ','๐','๐','๐','๐','๐จ','โ๏ธ','๐ฉ','๐','๐',
    "<button class='btn-ex2'>1</button>",
    "<button class='btn-ex2'>2</button>",
    "<button class='btn-ex2'>3</button>",
    "<button class='btn-ex2'>5</button>",
    "<button class='btn-ex2' id='four' name='four'> 4 </button>",
    "<button class='btn-ex2' id='six' name='six'> 6 </button>",
    "<button class='btn-ex2'>7</button>",
    "<button class='btn-ex2'>8</button>",
    "<button class='btn-ex2'>9</button>",
    "<button class='btn-ex2'>0</button>",
    "<button class='btn-ex2'>-</button>",
    "<button class='btn-ex2'>=</button>",
    "<button class='btn-ex2'>+</button>",
    "<button class='btn-ex2'>/</button>",
    "<button class='btn-ex2'>*</button>",
    "<button class='btn-ex2'>,</button>",
    "<button class='btn-ex2'>.</button>",
    "<button class='btn-ex2'>[</button>",
    "<button class='btn-ex2'>]</button>",
    "<button class='btn-ex2'>{</button>",
    "<button class='btn-ex2'>}</button>",
    "<button class='btn-ex2'>/</button>",
    "<button class='btn-ex2'>\</button>",
    'q','w','e','r','t','y','u','i','o','p','a','s','d','f','g','h','j','k','l','z','x','c','v','b','n','m','ะน','ั','ั','ะบ','ะต','ะฝ','ะณ','ั','ั','ะท','ั','ั','ั','ั','ะฒ','ะฐ','ะฟ','ั','ะพ','ะป','ะด','ะถ','ั','ั','ั','ั','ะผ','ะธ','ั','ั','ะฑ','ั'];
shuffle($numbers);
?>
<div style="word-wrap: break-word;overflow-x:hidden;background-color:grey; color:aqua; width:50%;height:50%;">
    <?php
    foreach($numbers as $k => $v) {
        echo $v." ";
    }
    ?>
</div>




<script>
    console.log("open");
    //const fourBtn = document.querySelector("#four");
    let fourBtn = document.querySelector("#four");
    let sixBtn = document.querySelector("#six");
    let four = false;
    let six = false;
    fourBtn.addEventListener('click', function () {
        if (four === false) {
            fourBtn.classList.toggle("knocked");
            four = true;
        }
        if(four === true && six === true){
            alert("ะะพะผะตั ะฝะฐัะพั ะณัะผะฝะฐะทัั 46โค๏ธ");
            document.cookie="uspishno=1";
            document.location.replace(document.location);
        }
    })
    sixBtn.addEventListener('click', function () {
        if (six === false) {
            sixBtn.classList.toggle("knocked");
            six = true;
        }
        if(four === true && six === true){

            alert("ะะพะผะตั ะฝะฐัะพั ะณัะผะฝะฐะทัั 46โค๏ธ");
            document.cookie="ex2=1";
            document.location.replace("./");
        }
    })


</script>
<?php
if(isset($_COOKIE['ex2'])) {
    echo "<script>document.cookie='ex2=true'; document.location.replace('./');</script>";
    echo "ะัะฐััั!";
    header("Location: ./");
}
