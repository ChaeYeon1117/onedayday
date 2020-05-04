<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>


<div class="latest_wr">
	<h2>원데이클레스</h2>
    <?php
        $options = array(
            // 최소 317픽셀은 해주셔야 합니다.
            'thumb_width'    => GALLERY_WIDTH, // 썸네일 width
            'thumb_height'   => GALLERY_HEIGHT  // 썸네일 height
        );
        echo latest('theme/grid', 'oneday_1', 5, 12, 2, $options);
//        echo latest('theme/grid', 'oneday_2', 1, 12, 2, $options);
//        echo latest('theme/grid', 'oneday_3', 1, 12, 2, $options);
//        echo latest('theme/grid', 'oneday_4', 1, 12, 2, $options);
//        echo latest('theme/grid', 'oneday_5', 1, 12, 2, $options);
		echo latest('slider_baner', 'slider_banner_1', 2, 12, 2, $options);?>
	<h2>영상컨텐츠</h2>
	<?php
		echo latest('theme/grid', 'free', 5, 12, 2, $options);
	// 최소설치시 자동생성되는 갤러리게시판
    ?>
	<h2>출장</h2>
	<?php
		echo latest('theme/grid', 'Business_trip', 5, 12, 2, $options);
	// 최소설치시 자동생성되는 갤러리게시판
    ?>
	<h2>스토어</h2>
	<?php
		echo latest('theme/grid', 'qa', 5, 12, 2, $options);
	// 최소설치시 자동생성되는 갤러리게시판
    ?>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
