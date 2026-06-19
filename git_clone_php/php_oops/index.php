<?php
include("class-object.php");
include("properties-methods.php");
include("includes/constructor.php");
include("static-property.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Testing</h1>

    <?php
    // $object = new Pet();
    // $object->testing();

    // $obj2 = new Car();
    // $obj2->test2;
    // $obj2->test1;
    // echo($obj2->sameClass());

    $obj3 = new School();
    $obj3->status("Jhonsi Rani");

    // $obj4 = new School();
    // $obj4->status("Amirthavalli");
    // $obj = new Telivision("chambion", "2", "three");
    // echo ($obj->switch);
    // $obj->setName("headphone");
    // echo($obj->getName("headphone"));

    // echo India::$Voting;
    // echo India::votingAge();



    ?>
</body>

</html>