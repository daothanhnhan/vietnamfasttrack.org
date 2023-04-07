<?php 
    $limit = 3;

    function list_news_tag ($url, $lang, $trang, $limit) {
        global $conn_vn;
        $sql = "SELECT * FROM newstag_languages Where friendly_url = '$url' AND languages_code = '$lang'";
        $result = mysqli_query($conn_vn, $sql);
        $row = mysqli_fetch_assoc($result);
        $newstag_id = $row['newstag_id'];

        $sql = "SELECT * FROM news_languages INNER JOIN news ON news_languages.news_id = news.news_id Where news.newstag_arr LIKE '%$newstag_id%' AND news_languages.languages_code = '$lang'";
        $result = mysqli_query($conn_vn, $sql);
        $count = mysqli_num_rows($result);

        $start = ($trang - 1) * $limit;
        $sql = "SELECT * FROM news_languages INNER JOIN news ON news_languages.news_id = news.news_id Where news.newstag_arr LIKE '%$newstag_id%' AND news_languages.languages_code = '$lang' LIMIT $start,$limit";
        $result = mysqli_query($conn_vn, $sql);
        $rows = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        $return = array(
                'data' => $rows,
                'count' => $count
            );
        return $return;
    }
    $rows = list_news_tag($_GET['page'], $lang, $trang, $limit);
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

    <?php //include DIR_PAGINATION."MS_PAGINATION_VIETNAMFASTTRACK_0001.php";?>
    <?php 
                            $config = array(
                                'current_page'  => $trang, // Trang hiện tại
                                'total_record'  => $rows['count'], // Tổng số record
                                'total_page'    => 1, // Tổng số trang
                                'limit'         => $limit,// limit
                                'start'         => 0, // start
                                'link_full'     => '',// Link full có dạng như sau: domain/com/page/{page}
                                'link_first'    => '',// Link trang đầu tiên
                                'range'         => 9, // Số button trang bạn muốn hiển thị 
                                'min'           => 0, // Tham số min
                                'max'           => 0,  // tham số max, min và max là 2 tham số private
                                // 'search'        => ''

                            );

                            $pagination = new Pagination;
                            $pagination->init($config);
                            echo $pagination->htmlPaging_tuan($_GET['page']);
                        ?>
</div>