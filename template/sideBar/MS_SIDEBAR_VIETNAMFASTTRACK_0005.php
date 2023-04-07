<?php 
    $list_news_new = $action_news->getListNewsNew_hasLimit(5);
    // var_dump($list_news_new);die;
?>
<div class="gb-sidebar-baivietmoinhat">
    <aside class="widget">
        <h3 class="widget-title"> bài viết mới nhất</h3>
        <div class="widget-content">
            <ul>
                <?php foreach ($list_news_new as $item) { ?>
                <li>
                    <div class="item">
                        <div class="item-img">
                            <a href="/<?= $item['friendly_url'] ?>"><img src="/images/<?= $item['news_img'] ?>" alt="" class="img-responsive"></a>
                        </div>
                        <div class="item-text">
                            <h2><a href="/<?= $item['friendly_url'] ?>"><?= $item['news_name'] ?></a></h2>
                        </div>
                    </div>
                </li>
                <?php } ?>
                <!-- <li>
                    <div class="item">
                        <div class="item-img">
                            <a href=""><img src="/images/gallery/1-1.jpg" alt="" class="img-responsive"></a>
                        </div>
                        <div class="item-text">
                            <h2><a href="">Giá cả cuộn dây hơi khí nén tự rút Đài Loan chất lượng cao</a></h2>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item">
                        <div class="item-img">
                            <a href=""><img src="/images/gallery/2-1.jpg" alt="" class="img-responsive"></a>
                        </div>
                        <div class="item-text">
                            <h2><a href="">Giá cả cuộn dây hơi khí nén tự rút Đài Loan chất lượng cao</a></h2>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item">
                        <div class="item-img">
                            <a href=""><img src="/images/gallery/2.jpg" alt="" class="img-responsive"></a>
                        </div>
                        <div class="item-text">
                            <h2><a href="">Giá cả cuộn dây hơi khí nén tự rút Đài Loan chất lượng cao</a></h2>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item">
                        <div class="item-img">
                            <a href=""><img src="/images/gallery/3-1.jpg" alt="" class="img-responsive"></a>
                        </div>
                        <div class="item-text">
                            <h2><a href="">Giá cả cuộn dây hơi khí nén tự rút Đài Loan chất lượng cao</a></h2>
                        </div>
                    </div>
                </li> -->
            </ul>
        </div>
    </aside>
</div>