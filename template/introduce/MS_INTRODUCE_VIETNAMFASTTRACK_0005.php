<?php 
    $slug = isset($_GET['slug']) ? $_GET['slug'] : '';
    $action_page = new action_page();
    $rowLang = $action_page->getPageLangDetail_byUrl($slug,$lang);
    $row = $action_page->getPageDetail_byId($rowLang['page_id'],$lang);
    $_SESSION['sidebar'] = 'pageDetail';
?>
<!--BANNER-->
<?php include DIR_BREADCRUMBS."MS_BREADCRUMS_VIETNAMFASTTRACK_0001.php";?>
<div class="gb-gioithieu-page">
    <div class="container">
        <div class="box_about">
            <div class="content_about">
                <?= $rowLang['lang_page_content'] ?>
            </div>
        </div>
        <?php include DIR_TEAM."MS_TEAM_VIETNAMFASTTRACK_0001.php";?>
    </div>
</div><!--end WrapperContent-->