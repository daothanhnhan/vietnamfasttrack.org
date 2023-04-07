<?php 
    function listNewsTag ($lang) {
        global $conn_vn;
        $sql = "SELECT * From newstag_languages INNER JOIN newstag ON newstag_languages.newstag_id = newstag.newstag_id Where newstag_languages.languages_code = '$lang'";
        $result = mysqli_query($conn_vn, $sql);
        $rows = array();
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $rows[] = $row;
            }
        }
        
        return $rows;
    }
    $tag_clound = listNewsTag($lang);
?>
<div class="gb-sidebar-tag">
    <aside class="widget">
        <h3 class="widget-title"> Tag clound</h3>
        <div class="widget-content">
            <ul>
                <?php foreach ($tag_clound as $item) { ?>
                <li><a href="/<?= $item['friendly_url'] ?>"><?= $item['lang_newstag_name'] ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </aside>
</div>