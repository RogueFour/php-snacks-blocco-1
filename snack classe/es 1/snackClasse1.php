<?php

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <!-- <div class="grey">
        <?php
            foreach ($db['teachers'] as $teacher) {
                echo $teacher['name'] . ' ' . $teacher['lastname'] . '<br>';
            }
        ?>
    </div>
    <div class="green">
        <?php
            foreach ($db['pm'] as $message) {
                echo $messsage['name'] . ' ' . $message['lastname'] . '<br>';
            }
        ?>

    </div> -->
    <div class="grey">
        <?php
        foreach ($db as $key => $elements) {
            if ($key === 'teachers') {
                foreach ($elements as $key => $teacher) {
                    echo $teacher['name'] . ' ' . $teacher['lastname'];
                }
            }
        }
        ?>
    </div>

    <div class="green">
        <?php
        foreach ($db as $key => $elements) {
            if ($key === 'pm') {
                foreach ($elements as $key => $message) {
                    echo $message['name'] . ' ' . $message['lastname'];
                }
            }
        }
        ?>
    </div>
</body>

</html>