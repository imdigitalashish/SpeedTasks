<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .checkboxButton {
            border: 1px solid black;
            width: 50px;
            height: 50px;
        }
    </style>
</head>

<body>

    <?php

    $rows = 10;
    $columns = 10;
    ?>
    <div>

        <?php

        for ($j = 0; $j < 10; $j++) {
        ?>
            <div style="display: flex;">
                <?php
                for ($i = 0; $i < $rows; $i++) {
                ?>
                    <div style="background: <?php
                                            if ($i % 2 == 0 && $j % 2 == 0) {
                                                echo "black";
                                            }
                                            if ($i % 2 == 1 && $j % 2 == 1) {
                                                echo "black";
                                            }

                                            ?>;
                                            " class="checkboxButton">
                    </div>
                <?php
                }
                ?>
            </div>

        <?php
        }
        ?>
    </div>




</body>

</html>