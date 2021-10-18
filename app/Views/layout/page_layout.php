<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?= $this->renderSection('style') ?>

    <?= $this->include('pages/jquery') ?>

    <title><?= $title ?></title>
</head>

<body>
    <?= $this->renderSection('popup') ?>
    <?= $this->include('layout/navbar') ?>
    <?= $this->renderSection('content') ?>
    <?= $this->include('layout/footer') ?>
</body>
<?= $this->renderSection('script') ?>

</html>