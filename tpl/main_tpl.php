<!DOCTYPE html>
<html lang="<?= LANG?>" dir="ltr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=<?= $g_config['charset']?>" />
        <title><?= $title?></title>
        <?php if (!empty($description)):?><meta name="description" content="<?= $description?>" /><?php endif?>
        <?php if (!empty($keyWords)):?><meta name="keywords" content="<?= $keyWords?>" /><?php endif?>

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= Root('i/image/touch_icon/favicon_144x144.png')?>" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= Root('i/image/touch_icon/favicon_114x114.png')?>" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= Root('i/image/touch_icon/favicon_72x72.png')?>" />
        <link rel="apple-touch-icon-precomposed" href="<?= Root('i/image/touch_icon/favicon_57x57.png')?>" />

        <link rel="icon" href="<?= Root('favicon.ico')?>" type="image/x-icon" />
        <link rel="shortcut icon" href="<?= Root('favicon.ico')?>" type="image/x-icon" />

        <meta http-equiv="cleartype" content="on">

        <link rel="stylesheet" type="text/css" href="<?= Root('i/css/normalize.css')?>" />
        <link rel="stylesheet" type="text/css" href="<?= Root('i/css/dev/funcs.css')?>" />
        <link rel="stylesheet" type="text/css" href="<?= Root('i/css/main.css')?>" />
        <!-- extraPacker -->
        <?php IncludeCom('dev/jquery')?>
    </head>
    <body>
        <?= $content?>
    </body>
</html>