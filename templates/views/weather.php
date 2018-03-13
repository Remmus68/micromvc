<?php

?>
<div class="container">
    <h1>Погода</h1>
    <div class="weather">
        <h2><?=$weatherByCity['name']?></h2>
        <p class="temperature">Температура: <?=$weatherByCity['main']['temp'] - 273.15?> C&deg;</p>
        <p class="temperature">Давление: <?=$weatherByCity['main']['pressure']?></p>
    </div>
</div>
