<?php

    $bruto = $_GET['bruto'];
    $liquid = $_GET['liquid'];
    $ajuste = $_GET['ajuste'];

    if($bruto === $ajust) {
?>
    <div class = "container">
        <h1>O valor de retorno é 1</h1>
    </div>        
<?php
    } else {
?>
    <h1>O valor de retorno é <?php echo (1+($bruto-$ajuste));?></h1>
<?php
    }
?>