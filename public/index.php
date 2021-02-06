<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="/styles/border.css">
        <link rel="stylesheet" href="/styles/inputW.css">
        <title>Lesson_5</title>
    </head>
    <body>
        <div class="m-3 bigBorder">
            <h1 class="m-3">DEBUG</h1>
            <div class="form-group row m-2">
                <code class="m-3">
                    <?php
                    // if doesnt work change to full path, plz.
                    require_once "/home/gogeruk/Php_learning/PHP_advanced/lesson_5/PART_2/p2_lesson_5/vendor/autoload.php";

                    // working with class user
                    $user = new \Nick\Ven\User();
                    $user->setId(1);
                    $user->setName("BOB");
                    $user->setEmail("BOB@protonmai.com");
                    print_r($user);

                    echo "<br><br>";
                    print_r($user->update());

                    echo "<br><br>";
                    print_r($user->delete());

                    echo "<br><br>";
                    print_r($user->create());

                    echo "<br><br>";
                    $find = \Nick\Ven\User::findId(1);
                    print_r($find);

                    echo "\n\n";

                    echo "testing save";
                    echo "\n\n";





                    echo "Testing save as update of an ALREADY EXISTING USER IN a table \n";

                    // created a user
                    $user = new \Nick\Ven\User();
                    $user->setId('1');
                    $user->setName('Chad');
                    //$user->setEmail('chad@gmail.com');
                    print_r($user);

                    echo "\n\n";
                    echo "Changed to Bob\n";

                    $user->setName('Bob');
                    print_r($user);

                    echo "\n\n";
                    echo "Chad changed to Bob, updatung now \n";

                    $result = $user->save();
                    print_r($result);








                    echo "\n\n";
                    echo "Testing save as create if all is null  \n";

                    $user = new \Nick\Ven\User();
                    $user->setId('3');
                    $user->setName('John');
                    $user->setEmail('some@gmail.com');
                    print_r($user);

                    echo "\n\n";

                    $result = $user->save();
                    print_r($result); // INSERT INTO user (id, name, email) VALUES (:id, :name, :email)


                    echo "\n\n";
                    ?>
                </code>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>
