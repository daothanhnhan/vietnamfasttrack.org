<?php 
    if (isset($_GET['slug']) && $_GET['slug'] != '') {
        $slug = $_GET['slug'];                    
        $rowCatLang = $action_news->getNewsCatLangDetail_byUrl($slug,$lang);
        $rowCat = $action_news->getNewsCatDetail_byId($rowCatLang['newscat_id'],$lang);
        $rows = $action_news->getNewsList_byMultiLevel_orderNewsId($rowCat['newscat_id'],'desc',$trang,3,$rowCat['friendly_url']);
    }
?>
<div class="gb-tintuc-page">
    <?php 
        foreach ($rows['data'] as $item) { 
            $action_news1 = new action_news(); 
            $rowLang1 = $action_news1->getNewsLangDetail_byId($item['news_id'],$lang);
            $row1 = $action_news1->getNewsDetail_byId($item['news_id'],$lang);
    ?>
    <div class="gb-events-lists-content-item">
        <div class="gb-events-iem-img">
            <a href="/<?= $rowLang1['friendly_url'] ?>"><img src="/images/<?= $row1['news_img'] ?>" alt="<?= $rowLang1['lang_news_name'] ?>" class="img-responsive"></a>
        </div>
        <div class="gb-events-lists-item-right">
            <div class="gb-events-item-right-header">
                <div class="gb-event-item-time">
                    <ul class="gb-event-item-time-sub">
                        <li>
                            <span><?= substr($row1['news_created_date'], 8, 2) ?></span>
                        </li>
                        <li>
                            <span><?= substr($row1['news_created_date'], 5, 2) ?></span>
                        </li>
                    </ul>
                </div>
                <div class="gb-event-item-info">
                    <h2><a href="/<?= $rowLang1['friendly_url'] ?>"><?= $rowLang1['lang_news_name'] ?></a></h2>
                    <!-- <ul>
                        <li>
                            <span class="ti-location-pin"></span>Central swimming pool
                        </li>
                        <li>
                            <span class="ti-layout-cta-btn-right"></span>  $50/ticket
                        </li>
                    </ul> -->
                </div>
            </div>
            <div class="gb-events-item-text">
                <p>
                    <?= $rowLang1['lang_news_des'] ?>
                </p>
            </div>
            <div class="gb-events-item-btn">
                <a href="/<?= $rowLang1['friendly_url'] ?>">More information <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </a>
            </div>
        </div>
    </div>
    <?php } ?>
    <!-- <div class="gb-events-lists-content-item">
        <div class="gb-events-iem-img">
            <a href="chi-tiet-tin-tuc"><img src="/images/airplane-wing-2.jpg" alt="" class="img-responsive"></a>
        </div>
        <div class="gb-events-lists-item-right">
            <div class="gb-events-item-right-header">
                <div class="gb-event-item-time">
                    <ul class="gb-event-item-time-sub">
                        <li>
                            <span>10</span>
                        </li>
                        <li>
                            <span>May</span>
                        </li>
                    </ul>
                </div>
                <div class="gb-event-item-info">
                    <h2><a href="chi-tiet-tin-tuc">Masage đá nóng</a></h2>
                    <ul>
                        <li>
                            <span class="ti-location-pin"></span>Central swimming pool
                        </li>
                        <li>
                            <span class="ti-layout-cta-btn-right"></span>  $50/ticket
                        </li>
                    </ul>
                </div>
            </div>
            <div class="gb-events-item-text">
                <p>
                    Pellentesque habitant morbi tristique senect et netus et malesuada
                    fames ac turpis egestas. Tortor quam, feugiat vitae, ultricies eget,
                    tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.
                    Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque
                    sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi,
                    condimentum sed,
                </p>
            </div>
            <div class="gb-events-item-btn">
                <a href="chi-tiet-tin-tuc">More information <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </a>
            </div>
        </div>
    </div>

    <div class="gb-events-lists-content-item">
        <div class="gb-events-iem-img">
            <a href="chi-tiet-tin-tuc"><img src="/images/39VIETNAM.jpg" alt="" class="img-responsive"></a>
        </div>
        <div class="gb-events-lists-item-right">
            <div class="gb-events-item-right-header">
                <div class="gb-event-item-time">
                    <ul class="gb-event-item-time-sub">
                        <li>
                            <span>10</span>
                        </li>
                        <li>
                            <span>May</span>
                        </li>
                    </ul>
                </div>
                <div class="gb-event-item-info">
                    <h2><a href="chi-tiet-tin-tuc">Masage đá nóng</a></h2>
                    <ul>
                        <li>
                            <span class="ti-location-pin"></span>Central swimming pool
                        </li>
                        <li>
                            <span class="ti-layout-cta-btn-right"></span>  $50/ticket
                        </li>
                    </ul>
                </div>
            </div>
            <div class="gb-events-item-text">
                <p>
                    Pellentesque habitant morbi tristique senect et netus et malesuada
                    fames ac turpis egestas. Tortor quam, feugiat vitae, ultricies eget,
                    tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.
                    Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque
                    sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi,
                    condimentum sed,
                </p>
            </div>
            <div class="gb-events-item-btn">
                <a href="chi-tiet-tin-tuc">More information <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </a>
            </div>
        </div>
    </div> -->

    <?php include DIR_PAGINATION."MS_PAGINATION_VIETNAMFASTTRACK_0001.php";?>
</div>