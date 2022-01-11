<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>Student List</h1>
<!--<ul>-->
<!--    --><?php //foreach ($students as $data):?>
<!--        --><?php //foreach ($data as $key=>$student):?>
<!--            --><?php // if($key === 'results'):?>
<!--                <li>Vidurkis:</li>-->
<!--                    <ul>-->
<!--                     --><?php //foreach ($student as $subject=>$result):?>
<!--                     <li>--><?//=$result;?><!--</li>-->
<!--                     --><?php //endforeach;?>
<!--                    </ul>-->
<!--                --><?php //else:?>
<!--                     <li>--><?//=$student;?><!--</li>-->
<!--            --><?php //endif;?>
<!--        --><?php //endforeach;?>
<!--            <li>--><?//='---------------------------'?><!--</li>-->
<!--    --><?php //endforeach;?>
<!--</ul>-->
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Klase</th>
            <th scope="col">Kodas</th>
            <th scope="col">Vardas</th>
            <th scope="col">Pavarde</th>
            <th scope="col">Vidurkis</th>
            <th scope="col">Data</th>
        </tr>
        </thead>
        <tbody>

            <?php foreach ($students as $class=>$student):?>
            <?php foreach ($student as $data):?>
        <tr>
            <td scope="row"><?=$class;?></td>
            <td> <?=$data['id'];?></td>
            <td> <?=$data['name'];?></td>
            <td> <?=$data['lname'];?></td>
            <td> <?= round(array_sum($data['results']) / count($data["results"]));?></td>
            <td> <?=$data['data'];?></td>
        </tr>
            <?php endforeach;?>
            <?php endforeach;?>
        </tbody>
    </table>


</div>
</body>

</html>