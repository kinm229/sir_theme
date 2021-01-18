<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
<style>
    .inSlider{width: 930px;background:pink;}
    .inSlider li img{width: 100%;}
</style>

<script>
    $(document).ready(function(){
        $(".slider1st").bxSlider({auto:true});
    });
</script>

<div class="inSlider">
    <ul class="slider1st">
        <li><img src="<? echo G5_THEME_IMG_URL  ?>/pc01.jpg" alt="1111"></li>
        <li><img src="<? echo G5_THEME_IMG_URL  ?>/pc02.jpg" alt="1111"></li>
        <li><img src="<? echo G5_THEME_IMG_URL  ?>/pc03.jpg" alt="1111"></li>
    </ul>

</div> 
<?php
include_once(G5_THEME_PATH.'/tail.php');?>