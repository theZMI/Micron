
    <!-- Вот так в микроне можно подключать css и js в общий сборщик именно с этой страницы -->
    <head>
        <link rel="stylesheet" type="text/css" href="<?= Root('i/css/home.css')?>" />
    </head>


    <div class="home-block">
        <h1><?= $g_lang['welcome']?></h1> <!-- Данная строка написана только в языковом файле дефолтного языка -->
        <p><?= $g_lang['message']?></p> <!-- Эта строчка из языкого файла данного компонента -->
        <small><?= sprintf($g_lang['build'], $buildDate)?></small>
    </div>