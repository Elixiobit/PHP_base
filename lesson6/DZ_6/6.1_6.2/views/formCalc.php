<?php
/**
 * @param $result
 */
?>
<form action="" method="post">
    <h1>Калькулятор</h1>
    <p>Введите первый параметр</p>
    <p><input name="paramOne" type="number"></p>
    <p>Введите второй параметр</p>
    <p><input name="paramTwo" type="number"></p>
    <!--  6.1  -->
    <select name="operation" id="">
        <option value="sum">Сложение</option>
        <option value="difference">Вычитание</option>
        <option value="multiplication">Умножение</option>
        <option value="division">Деление</option>
    </select>
    <input type="submit" value="Вычислить">
    <!--  6.2  -->
    <p>
        <input name="operation" value="sum" type="submit"/>
        <input name="operation" value="difference" type="submit"/>
        <input name="operation" value="multiplication" type="submit"/>
        <input name="operation" value="division" type="submit"/>
    </p>
</form>
<h2>Ответ: <?= $result ?></h2>  <!--Так и не понял почему мне шторм подчеркнул $result красным,хотяя все работает-->

