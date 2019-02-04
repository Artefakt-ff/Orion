<?php
if ($_POST) {
    $name = htmlspecialchars($_POST["name"]);
    $phone = htmlspecialchars($_POST["phone"]);
    mail('site@орионмедиа.рф', 'Заявка с сайта', 'Имя: ' . $name . PHP_EOL . 'Телефон: '  . $phone .  PHP_EOL , 'From: site@орионмедиа.рф');
}
