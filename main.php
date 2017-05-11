<?php
error_reporting(E_ALL);

include '/class/News.php';
if (!empty($_GET["pageType"])) {
    $typeOfPage = $_GET["pageType"];

    if ($typeOfPage == "1") {
        $head = "Новости";
        $fieldsetClass = "main-container-fieldset__start";
    } else
        if ($typeOfPage == "2") {
            $head = "Комментарии";
            $fieldsetClass = "main-container-fieldset-info";
        }
}
else
{
    $head = "Новости";
    $fieldsetClass = "main-container-fieldset__start";
}

$content = file_get_contents(__DIR__.'/data/news.json');

$object_response = json_decode($content);

$news_array = [];

for ($i = 0; $i < count($object_response); $i++) {
    $new = new News();
    $new->setPublishDate($object_response[$i]->publish_date);
    $new->setAuthor($object_response[$i]->author);
    $new->setContent($object_response[$i]->content);
    $news_array[$i] = $new;
};

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Cache-Control" content="no-cache">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Новости</title>
</head>
<body>
<header class="header-container">
    <div class="header-container__h1">
        <h1 class="header-container__h1__text"><?php echo $head; ?></h1>
        <a class="header-container-link" href="main.php?pageType=1">Новости</a>
        <a class="header-container-link" href="main.php?pageType=2">Комментарии</a>
    </div>
</header>
<div class="main-container">
    <fieldset class="<?php echo $fieldsetClass?>">
        <?php if ($head === "Новости") { ?>
        <table class="main-container-table">
            <tr class="table-row">
                <td class="table-cell">Дата публикации</td>
                <td class="table-cell">Автор</td>
                <td class="table-cell">Новость</td>
            </tr>
            <?php foreach ($news_array as $item) { ?>
            <tr class="table-row">
                <td class="table-cell"><?= $item->getPublishDate(); ?></td>
                <td class="table-cell"><?= $item->getAuthor(); ?></td>
                <td class="table-cell"><?= $item->getContent(); ?></td>
            </tr>
        <?php } ?>
        </table>
        <?php } else { ?>
            <h1 class="main-container-fieldset__start__text-high"><?php echo $head; ?></h1>
            <p class="main-container-fieldset__start__text-high">Приносим свои извинения, раздел пока что находится в разработке!</p>
            <p class="main-container-fieldset__start__pic-low"><a href="main.php?pageType=1"><img  class="main-container-fieldset__start__pic-arrow" src="arrow.png"></a></p>
        <?php } ?>
    </fieldset>
</div>
</body>
</html>