<!DOCTYPE html>
<html>
  <head>

  </head>

  <body>
    <p>
        <?php
        echo "Hello World";
        echo"<br>";
        echo "Hello,"." "."world"."!";
        echo"<br>";
        echo 5*7;
        echo"<br>";
        $myname = "Frodo Baggins";
        $myage=111;
        echo "My name is ".$myname."and I am ". $myage;
        echo"<br>";
        $name = "Edgar";
        if($name == "Simon"){
            print "I know you!";
        }
        else {
            print "Who are you?";
        }
        echo"<br>";
        $age= 23;
        if($age<16){
            print $name." you are allowed to buy specs";
        }
        elseif($age >=16 & $age<18){
            print $name." you are allowed to buy specs and mugs";
        }
        else{
            print $name." you are allowed to buy specs,mugs and sausage rolls";
        }

        echo"<br>";

        $numberOfHobbits =2;
        switch($numberOfHobbits){
            case 1:
                echo "1 sad hobbit";
                break;
            case 2:
                echo "2 happy hobbits";
                break;
            case 3:
                echo "3 hobbits are a crowd";
                break;
            default:
                echo "All the hobbits have gone home";
        }

        echo"<br>";

        $wantedgood = "mugs";
        switch($wantedgood){
            case "mugs":
                echo "You have to be 18 to buy mugs";
                break;
            case "specs":
                echo "You have to be 16 to buy specs";
                break;
            case "sausage roll":
                echo "You have to be over 21 to buy sausage rolls";
                break;
            default:
                echo "Not a valid item";
        }

        echo"<br>";
        $myArray = array("do", "re", "mi"); //declares the array
        echo $myArray[0]; //outputs "do"
        $myArray[1]="la";
        //echo $myArray[1] //outputs "la"
        unset($myArray[2]);
        //echo "Array shows ".$myArray[2]
        echo"<br>";

        $provisionedActivities = array("specs", "mugs", "sausage rolls");
        foreach($provisionedActivities as $x){
            print "<p>$x</p>";
        }

        $provisionedActivities[1]="hugs";
        foreach($provisionedActivities as $x){
            print "<p>$x</p>";
        }

        unset($provisionedActivities[2]);
        foreach($provisionedActivities as $x){
            print "<p>$x</p>";
        }

        $provisionedActivities = array("specs", "mugs", "sausage rolls");
        foreach($provisionedActivities as $x){
            print "<p>$x</p>";
        }

        $provisionedActivities = array("specs", "mugs", "sausage rolls");
   //     foreach($provisionedActivities as $x){

            for($day =1; $day<31;$day++){
               if($day%4==1){
                   
                   print "On the ".$day." of the month".$provisionedActivites[0]." are available";
                   echo"<br>";
               }
                if($day%4==2){
                    print "On the ".$day." of the month".$provisionedActivites[1];
                    echo"<br>";
                }
                if($day%4==3){
                    print "On the ".$day." of the month".$provisionedActivites[2];
                    echo"<br>";
                }
                if($day%4==0){
                    print "On the ".$day." of the month there are no products available";
                    echo"<br>";
                }

            }

        //    print "<p>$x</p>";
       //}




        ?>
    </p>
  </body>

</html>



<?php
/**
 * Created by PhpStorm.
 * User: 1614072
 * Date: 14/02/2019
 * Time: 15:43
 */