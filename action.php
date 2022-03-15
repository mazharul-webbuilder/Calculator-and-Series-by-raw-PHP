<?php
    require_once "vendor/autoload.php";
    use App\classes\Calculator;
    use App\classes\Series;

    if (isset($_GET['page']))
    {
        if ($_GET['page'] == 'home')
        {
            include "pages/home.php";
        }
        elseif ($_GET['page'] == 'series')
        {
            $myArray = [];
            include "pages/series.php";
        }
    }
    elseif (isset($_POST['calBtn']))
    {
        $calOb  = new Calculator($_POST);
        $result = $calOb->myCalculator();

        include "pages/home.php";
    }
    elseif ($_POST['seriesBtn'])
    {
        $seriesObject = new Series($_POST);
        $myArray      = $seriesObject->seriesFunction();
        include "pages/series.php";
    }
?>