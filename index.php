<?php 
require("functions.php");
$surveys = getSurveys();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Anketler</h1>
            </div>
        </div>
        <div class="row">
            <?php foreach($surveys as $survey): ?>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?=$survey["question"]?></h5>
                        <ul class="list-group list-group-flush">
                            <?php 
                            $options = explode(";", $survey["options"]);
                            $hits = explode(";", $survey["hits"]);
                            for($i = 0; $i < count($options); $i++):
                            ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center"><?=$options[$i]?>
                                <span>%<?=percent($hits, $hits[$i])?></span>
                                <span class="badge badge-primary badge-pill"><?=$hits[$i]?></span>
                            </li>
                            <a href="oy.php?s=<?=$survey['id']?>&o=<?=$i?>" class="btn btn-primary">Oy</a>
                            <?php endfor; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>