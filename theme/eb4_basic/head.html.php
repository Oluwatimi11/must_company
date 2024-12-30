<?php
/**
 * theme file : /theme/THEME_NAME/head.html.php
 */
if (!defined('_EYOOM_')) exit;

add_stylesheet('<link rel="stylesheet" href="' . EYOOM_THEME_URL . '/css/style.css?ver=' . G5_CSS_VER . '">', 0);
add_stylesheet('<link rel="stylesheet" href="' . EYOOM_THEME_URL . '/css/custom.css?ver=' . G5_CSS_VER . '">', 0);
add_stylesheet('<link rel="stylesheet" href="' . EYOOM_THEME_URL . '/css/dropdown.css?ver=' . G5_CSS_VER . '">', 0);
add_stylesheet('<link rel="stylesheet" href="' . EYOOM_THEME_URL . '/css/hamburger.css?ver=' . G5_CSS_VER . '">', 0);

add_javascript('<script src="' . EYOOM_THEME_URL . '/js/dropdown.js?ver=' . G5_JS_VER . '"></script>', 0);
add_javascript('<script src="' . EYOOM_THEME_URL . '/js/navbar.js?ver=' . G5_JS_VER . '"></script>', 0);


include_once(EYOOM_THEME_PATH . '/includes/dropdown-items.php');

/**
 * 로고 타입 : 'image' || 'text'
 */
$logo = 'image';

/**
 * 메뉴바 전체 메뉴 출력 : 'yes' || 'no'
 */
$is_megamenu = 'yes';
?>

<?php if (!$wmode) { ?>
    <?php /*----- wrapper 시작 -----*/ ?>
    <div class="wrapper">
    <h1 id="hd-h1"><?php echo $g5['title'] ?></h1>
    <?php
    // 팝업창
    //Run only on
    if (defined('_INDEX_') && $newwin_contents) { // index에서만 실행
        echo $newwin_contents;
    }
    ?>

    <?php /*----- header 시작 -----*/ ?>
    <header class="nav-wrapper <?php if (!defined('_INDEX_')) { ?>page-header-wrap<?php } ?>">
        <div class="hamburger-container">
        <!-- Top Hamburger Menu -->
        <div class="hamburger-menu top-hamburger-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <!-- Bottom Hamburger Menu -->
        <div class="hamburger-menu btm-hamburger-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

        <div class="top-nav display-flex">
            <!-- Logo (Centered) -->
            <div class="top-nav-left">
                <?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
                    <div class="adm-edit-btn btn-edit-mode">
                        <div class="btn-group">
                            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=biz_info&amp;amode=logo&amp;thema=<?php echo $theme; ?>"
                               target="_blank" class="ae-btn-r" title="새창 열기">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                        </div>
                    </div>
                <?php } ?>
                <a href="<?php echo G5_URL; ?>" class="title-logo">
                    <?php if ($logo == 'text') { ?>
                        <h1><?php echo $config['cf_title']; ?></h1>
                    <?php } else if ($logo == 'image') { ?>
                        <?php if (!G5_IS_MOBILE) { ?>
                            <?php if (file_exists($top_logo) && !is_dir($top_logo)) { ?>
                                <img src="<?php echo $logo_src['top']; ?>" class="site-logo"
                                     alt="<?php echo $config['cf_title']; ?>">
                            <?php } else { ?>
                                <img src="<?php echo EYOOM_THEME_URL; ?>/image/p2u.png" class="site-logo"
                                     alt="<?php echo $config['cf_title']; ?>">
                            <?php } ?>
                        <?php } else { ?>
                            <?php if (file_exists($top_mobile_logo) && !is_dir($top_mobile_logo)) { ?>
                                <img src="<?php echo $logo_src['mobile_top']; ?>" class="site-logo"
                                     alt="<?php echo $config['cf_title']; ?>">
                            <?php } else { ?>
                                <img src="<?php echo EYOOM_THEME_URL; ?>/image/p2u.png" class="site-logo"
                                     alt="<?php echo $config['cf_title']; ?>">
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>
                </a>
            </div>
            <!-- end of site logo -->
            <?php /* ===== 사이트 로고 끝 ===== */ ?>

            <div class="top-nav-right">
                <div class="header-title-list display-flex">
                    <div class="list-item">
                        <!-- Only members have access. -->
                        <a class="list-link"
                           <?php if ($is_member) { ?>href="<?php echo G5_URL; ?>/?<?php echo $member['mb_id']; ?>"
                           <?php } else { ?>href="javascript:void(0);" onclick="alert('회원만 접근하실 수 있습니다.');"<?php } ?>>
                            <div class="list-item-div">
                                <!-- Hong Gil-dong  11,181,887 P2U-->
                                <span class="list-btn-text">홍길동님 <span
                                            class="title-add-span">11,181,887 P2U</span></span>
                            </div>
                        </a>
                    </div>
                    <div class="list-item">
                        <!-- Only members have access. -->
                        <a class="list-link"
                           <?php if ($is_member) { ?>href="<?php echo G5_URL; ?>/?<?php echo $member['mb_id']; ?>"
                           <?php } else { ?>href="javascript:void(0);" onclick="alert('회원만 접근하실 수 있습니다.');"<?php } ?>>
                            <div class="list-item-div">
                                <!-- Shopping Cart -->
                                <span class="list-btn-text">장바구니</span>
                            </div>
                        </a>
                    </div>
                    <div class="list-item">
                        <a class="list-link" <?php if ($is_member) { ?>href="<?php echo G5_URL; ?>/mypage/"
                           <?php } else { ?>href="javascript:void(0);" onclick="alert('회원만 접근하실 수 있습니다.');"<?php } ?>>
                            <div class="list-item-div">
                                <!-- My page -->
                                <span class="list-btn-text">마이페이지</span>
                            </div>
                        </a>
                    </div>
                    <div class="list-item">
                        <!-- Only members have access. -->
                        <a class="list-link" href="<?php echo G5_BBS_URL ?>/logout.php">
                            <div class="list-item-div">
                                <!-- Log Out -->
                                <span class="list-btn-text">로그아웃</span>
                            </div>
                        </a>
                    </div>
                    <div class="list-item see-more">
                        <!-- Only members have access. -->
                        <a class="list-link  display-flex">
                            <div class="list-item-div">
                                <!-- see more -->
                                <span class="list-btn-text">더보기</span>
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>

                        <div class="see-more-menu">
                            <?php foreach ($moreItems as $item) : ?>
                                <a href="<?php echo $item['url']; ?>"
                                   class="see-more-item"><?php echo $item['label']; ?></a>
                            <?php endforeach; ?>
                        </div>

                    </div>
                </div>

                <div class="header-search-feature d-lg-block m-l-15">
                    <form name="fsearchbox" method="get" action="<?php echo G5_BBS_URL; ?>/search.php"
                          onsubmit="return fsearchbox_submit(this);" class="eyoom-form">
                        <input type="hidden" name="sfl" value="wr_subject||wr_content">
                        <input type="hidden" name="sop" value="and">
                        <!-- Enter search term required -->
                        <label for="modal_sch_stx" class="sound_only"><strong>검색어 입력 필수</strong></label>
                        <div class="search-area display-flex bd-r-20">
                            <!-- Search entire bulletin board -->
                            <div class="search-wrapper">
                                <input type="text" name="stx" id="modal_sch_stx" class="search-field" maxlength="20"
                                       placeholder="전체 게시판 검색">
                                <i class="fas fa-search search-icon"></i>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="bottom-nav m-t-10">
            <div class="bottom-nav-list display-flex align-items-center">
                <div class="bottom-list-item dropdown-trigger">
                    <a href="javascript:void(0);">
                        <div class="bottom-list-item-div">
                            <i class="fas fa-bars"></i>
                            <h6 class="eyoom-btn-text">전체상품</h6>
                        </div>
                    </a>

                    <div class="category-dropdown">
                        <div class="category-columns">
                            <div class="category-column">
                                <ul id="parent-categories"></ul>
                            </div>
                            <div class="category-column">
                                <ul id="child-categories"></ul>
                            </div>
                            <div class="category-column">
                                <ul id="grandchild-categories"></ul>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                foreach ($navItems as $item) {
                    echo '<div class="bottom-list-item">
                <a href="' . $item['url'] . '">
                    <div class="bottom-list-item-div">
                        <h6 class="eyoom-btn-text">' . $item['label'] . '</h6>
                    </div>
                </a>
            </div>';
                }
                ?>
            </div>
        </div>
    </header>
    <?php /*----- header 끝 -----*/ ?>

    <!-- When it is not the main -->
    <?php if (!defined('_INDEX_')) { // 메인이 아닐때 ?>
        <?php /*----- page title 시작 -----*/ ?>
        <div class="page-title-wrap">
            <div class="container">
                <?php if (!defined('_EYOOM_MYPAGE_')) { ?>
                    <h2>
                        <?php if (!$it_id) { ?>
                            <i class="fas fa-arrow-alt-circle-right m-r-10"></i><?php echo $subinfo['title']; ?>
                        <?php } else { ?>
                            <span class="f-s-14r"><i
                                        class="fas fa-arrow-alt-circle-right m-r-10"></i><?php echo $subinfo['title']; ?></span>
                        <?php } ?>
                    </h2>
                    <?php if (!$it_id) { ?>
                        <div class="sub-breadcrumb-wrap">
                            <ul class="sub-breadcrumb hidden-xs">
                                <?php echo $subinfo['path']; ?>
                            </ul>
                        </div>
                    <?php } ?>
                <?php } else { ?>
                    <!-- My page -->
                    <h2><i class="fas fa-arrow-alt-circle-right"></i> 마이페이지</h2>
                <?php } ?>
            </div>
        </div>
        <?php /*----- page title 끝 -----*/ ?>
    <?php } ?>

<div class="basic-body <?php if (!defined('_INDEX_')) { ?>page-body<?php } ?>">
    <?php if (defined('_INDEX_')) { ?>
        <div class="main-slider-top">
            <!-- EB Slider -->
            <?php /* EB슬라이더 - basic */ ?>
            <?php //echo eb_slider('1516512257'); ?>
        </div>
    <?php } ?>
    <div class="container">
    <?php if ($side_layout['use'] == 'yes') { ?>
    <div class="main-wrap">
    <?php
    if ($side_layout['pos'] == 'left') {
        // Open new window
        /* Start side area */
        include_once(EYOOM_THEME_PATH . '/side.html.php');
        //end of side area
        /* 사이드영역 끝 */
    }
    ?>
    <main class="basic-body-main <?php if ($side_layout['pos'] == 'left') {
        echo 'right';
    } else {
        echo 'left';
    } ?>-main">
    <?php } else { ?>
    <div class="main-wrap">
    <main class="basic-body-main">
<?php } ?>
<?php } // !$wmode ?>