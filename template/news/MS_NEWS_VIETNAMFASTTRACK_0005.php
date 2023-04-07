<?php 
    $slug = isset($_GET['slug']) ? $_GET['slug'] : '';

    $rowLang = $action_news->getNewsLangDetail_byUrl($slug,$lang);
    $row = $action_news->getNewsDetail_byId($rowLang['news_id'],$lang);
    $_SESSION['sidebar'] = 'newsDetail';
?>
<div class="gb-chitiet-tintuc-content">
    <h2 style="margin: 0"><?= $rowLang['lang_news_name'] ?></h2>
    <div class="gb-author-time">
        <ul>
            <li class="time"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?= substr($row['news_created_date'], 0, 10) ?></li>
            <li class="author"><i class="fa fa-user-o" aria-hidden="true"></i> admin</li>
        </ul>
    </div>
    <div class="gb-chitiet-tintuc-body">
        <?= $rowLang['lang_news_content'] ?>
    </div>
</div>