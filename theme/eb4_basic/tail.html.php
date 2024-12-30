<?php
/**
 * theme file : /theme/THEME_NAME/tail.html.php
 */
if (!defined('_EYOOM_')) exit;
?>



<?php if (!$wmode) { ?>
    <?php
    $side_layout['use'] = 'no';
    if ($side_layout['use'] == 'yes') { ?>
        </main>
        <?php
        if ($side_layout['pos'] == 'right') {
            // Start side area
            /* 사이드영역 시작 */
            include_once(EYOOM_THEME_PATH . '/side.html.php');
            // end of side area
            /* 사이드영역 끝 */
        }
        ?>
        </div><?php /* End .main-wrap */ ?>
    <?php } else { ?>
        </main>
        </div><?php /* End .main-wrap */ ?>
    <?php } ?>

    </div><?php /* End .container */ ?>
    </div><?php /* End .basic-body */ ?>

    <?php /*----- footer 시작 -----*/ ?>
    <footer class="footer">
        <div class="footer-container text-white">
            <div class="footer-top-nav display-flex">
                <div class="footer-nav-left">
                    <!-- Start site logo -->
                    <?php /* ===== 사이트 로고 시작 ===== */ ?>
                    <?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
                        <div class="adm-edit-btn btn-edit-mode" style="top:0;left:12px;text-align:left">
                            <div class="btn-group">
                                <!-- logo settings -->
                                <!--                            <a href="-->
                                <?php //echo G5_ADMIN_URL; ?><!--/?dir=theme&amp;pid=biz_info&amp;amode=logo&amp;thema=-->
                                <?php //echo $theme; ?><!--&amp;wmode=1" onclick="eb_admset_modal(this.href); return false;" class="ae-btn-l"><i class="far fa-edit"></i> 로고 설정</a>-->
                                <!-- Open new window -->
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
                                    <img src="<?php echo $logo_src['top']; ?>" class="footer-site-logo"
                                         alt="<?php echo $config['cf_title']; ?>">
                                <?php } else { ?>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/image/p2u-dark.png" class="footer-site-logo"
                                         alt="<?php echo $config['cf_title']; ?>">
                                <?php } ?>
                            <?php } else { ?>
                                <?php if (file_exists($top_mobile_logo) && !is_dir($top_mobile_logo)) { ?>
                                    <img src="<?php echo $logo_src['mobile_top']; ?>" class="footer-site-logo"
                                         alt="<?php echo $config['cf_title']; ?>">
                                <?php } else { ?>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/image/p2u-dark.png" class="footer-site-logo"
                                         alt="<?php echo $config['cf_title']; ?>">
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>
                    </a>
                    <!-- end of site logo -->
                    <?php /* ===== 사이트 로고 끝 ===== */ ?>

                </div>
                <div class="footer-nav-right">
                    <div class="footer-title-list display-flex">
                        <div class="footer-list-item">
                            <!-- Only members have access. -->
                            <a class="footer-list-link" <?php if ($is_member) { ?>href="<?php echo G5_URL; ?>/?<?php echo $member['mb_id']; ?>"
                               <?php } else { ?>href="javascript:void(0);" onclick="alert('회원만 접근하실 수 있습니다.');"<?php } ?>>
                                <div class="footer-list-item-div">
                                    <!-- Add KakaoTalk channel-->
                                    <span class="footer-list-btn-text text-white">카카오톡 채널추가</span>
                                </div>
                            </a>
                        </div>
                        <div class="footer-list-item">
                            <!-- Only members have access. -->
                            <a class="footer-list-link" <?php if ($is_member) { ?>href="<?php echo G5_URL; ?>/?<?php echo $member['mb_id']; ?>"
                               <?php } else { ?>href="javascript:void(0);" onclick="alert('회원만 접근하실 수 있습니다.');"<?php } ?>>
                                <div class="footer-list-item-div">
                                    <!-- Shopping Cart -->
                                    <span class="footer-list-btn-text text-white">상품후기</span>
                                </div>
                            </a>
                        </div>
                        <div class="footer-list-item">
                            <a class="footer-list-link" <?php if ($is_member) { ?>href="<?php echo G5_URL; ?>/mypage/"
                               <?php } else { ?>href="javascript:void(0);" onclick="alert('회원만 접근하실 수 있습니다.');"<?php } ?>>
                                <div class="footer-list-item-div">
                                    <!-- My page -->
                                    <span class="footer-list-btn-text text-white">1:1문의</span>
                                </div>
                            </a>
                        </div>
                        <div class="footer-list-item">
                            <!-- Only members have access. -->
                            <a class="footer-list-link" href="<?php echo G5_BBS_URL ?>/logout.php">
                                <div class="footer-list-item-div">
                                    <!-- Log Out -->
                                    <span class="footer-list-btn-text text-white">FAQ</span>
                                </div>
                            </a>
                        </div>
                        <div class="footer-list-item">
                            <!-- Only members have access. -->
                            <a class="footer-list-link  display-flex" href="<?php echo G5_BBS_URL ?>/logout.php">
                                <div class="footer-list-item-div">
                                    <!-- see more -->
                                    <span class="footer-list-btn-text text-white">공지사항</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-content-info text-white">
                <?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
                    <div class="adm-edit-btn btn-edit-mode hidden-xs hidden-sm" style="top:-31px">
                        <div class="btn-group">
                            <!-- Corporate information settings -->
                            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=biz_info&amp;amode=biz&amp;thema=<?php echo $theme; ?>&amp;wmode=1" onclick="eb_admset_modal(this.href); return false;" class="ae-btn-l"><i class="far fa-edit"></i> 기업정보 설정</a>
                            <!-- Open new window -->
                            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=biz_info&amp;amode=biz&amp;thema=<?php echo $theme; ?>" target="_blank" class="ae-btn-r" title="새창 열기">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                            <button type="button" class="ae-btn-info" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-html="true" data-bs-content="
							<span class='f-s-13r'>
							<strong class='text-indigo'>기업정보 사용가능한 변수</strong><br>
							<div class='margin-hr-10'></div>
							<strong class='text-indigo'>[설정정보]</strong><br>
							회사명 : $bizinfo['bi_company_name']<br>
							사업자등록번호 : $bizinfo['bi_company_bizno']<br>
							대표자명 : $bizinfo['bi_company_ceo']<br>
							대표전화 : $bizinfo['bi_company_tel']<br>
							팩스번호 : $bizinfo['bi_company_fax']<br>
							통신판매업 : $bizinfo['bi_company_sellno']<br>
							부가통신사업자 : $bizinfo['bi_company_bugano']<br>
							정보관리책임자 : $bizinfo['bi_company_infoman']<br>
							정보책임자메일 : $bizinfo['bi_company_infomail']<br>
							우편번호 : $bizinfo['bi_company_zip']<br>
							주소1 : $bizinfo['bi_company_addr1']<br>
							주소2 : $bizinfo['bi_company_addr2']<br>
							주소3 : $bizinfo['bi_company_addr3']<br>
							고객센터1 : $bizinfo['bi_cs_tel1']<br>
							고객센터2 : $bizinfo['bi_cs_tel2']<br>
							고객센터팩스 : $bizinfo['bi_cs_fax']<br>
							고객센터메일 : $bizinfo['bi_cs_email']<br>
							상담시간 : $bizinfo['bi_cs_time']<br>
							휴무안내 : $bizinfo['bi_cs_closed']
							</span>
						"><i class="fas fa-question-circle"></i></button>
                        </div>
                    </div>
                <?php } ?>
                <div class="m-b-8">
                    <div class="m-b-4">
                        <strong class="text-white">CS CENTER 1522-2041</strong>
                        <span class="info-divider">|</span>
                        <strong class="text-white">평일 10:00 ~ 17:00 (점심 12:00 ~ 13:00)</strong>
                    </div>

                    <div>
                        <span class="text-dark-gray">soo@p2u.kr 토요일, 일요일, 공휴일은 휴무입니다. 근무시간 이후 문의는 1:1 문의를 이용해주세요.</span>
                    </div>
                </div>

                <div class="m-b-8">
                    <div class="m-b-4">
                        <strong class="text-white">주식회사 포인투유</strong>
                        <span class="info-divider">|</span>
                        <strong class="text-white">대표 : 최병호</strong>
                    </div>

                    <div>
                        <span class="text-dark-gray">사업자 등록번호 : 443-86-024-22 </span>
                        <span class="info-divider">|</span>
                        <span class="text-dark-gray">통신판매업 : 제2024-서울금천-0326호</span>
                        <span class="info-divider">|</span>
                        <span class="text-dark-gray">주소 : 08502 서울 금천구 가산디지털1로 212 202-52호 (가산동, 코오롱디지털타워애스턴)</span>
                    </div>
                </div>

                <div class="footer-copyright-det text-dark-gray m-t-15 m-b-6">
                    <span class="text-dark-gray">Copyright </span>&copy; <strong class="text-dark-gray f-w-400">P2U :: 포인투유</strong>. All Rights Reserved.
                </div>


                <div class="footer-btm-list m-t-25 m-b-6">
                    <ul class="display-flex">
                        <li><strong>이용약관</strong></li>
                        <li><strong>개인정보처리방침</strong></li>
                        <li><strong>이메일무단수집거부</strong></li>
                    </ul>
                </div>

        </div>
    </footer>
    <?php /*----- footer 끝 -----*/ ?>
    </div>
    <?php /*----- wrapper 끝 -----*/ ?>

    <!-- Start full search input window -->
    <?php /*----- 전체 검색 입력창 시작 -----*/ ?>
    <div class="search-full">
        <div class="search-close-btn"></div>
        <fieldset class="search-field">
            <!-- Bulletin Board Entire Search -->
            <legend>게시판 전체검색</legend>
            <form name="fsearchbox" method="get" action="<?php echo G5_BBS_URL ?>/search.php" onsubmit="return fsearchbox_submit(this);">
                <input type="hidden" name="sfl" value="wr_subject||wr_content">
                <input type="hidden" name="sop" value="and">
                <!-- Enter search term required -->
                <label for="search_input" class="sound_only">검색어 입력 필수</label>
                <!-- Enter search term [Search entire bulletin board] -->
                <input type="text" name="stx" id="search_input" maxlength="20" placeholder="검색어 입력 [ 전체 게시판 검색 ]">
                <!-- search -->
                <button type="submit" class="search-btn" value="검색"><i class="fas fa-search" aria-hidden="true"></i><span class="sound_only">검색</span></button>
            </form>
            <script>
                function fsearchbox_submit(f)
                {
                    var stx = f.stx.value.trim();
                    if (stx.length < 2) {
                        alert("검색어는 두글자 이상 입력하십시오.");
                        f.stx.select();
                        f.stx.focus();
                        return false;
                    }

                    // 검색에 많은 부하가 걸리는 경우 이 주석을 제거하세요.
                    var cnt = 0;
                    for (var i = 0; i < stx.length; i++) {
                        if (stx.charAt(i) == ' ')
                            cnt++;
                    }

                    if (cnt > 1) {
                        alert("빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.");
                        f.stx.select();
                        f.stx.focus();
                        return false;
                    }
                    f.stx.value = stx;

                    return true;
                }
            </script>
        </fieldset>
    </div>
    <!-- End of entire search input window -->
    <?php /*----- 전체 검색 입력창 끝 -----*/ ?>

    <!-- Consultation application button -->
    <?php /* 상담 신청 버튼 */ ?>
    <?php if ($config['cf_use_counsel'] == '1') { ?>
        <!-- Request for consultation -->
        <a <?php if ( !G5_IS_MOBILE ) { ?>href="javascript:void(0);" onclick="counsel_modal();"<?php } else { ?>href="<?php echo G5_URL; ?>/page/?pid=counsel"<?php } ?> class="counsel-btn"><i class="fas fa-headset"></i><span class="sound-only">상담신청</span></a>
    <?php } ?>

    <!-- Member Sidebar -->
    <?php /* 사이드바 회원 버튼 */ ?>
    <button type="button" class="sidebar-user-trigger sidebar-user-btn mo-btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasUserRight" aria-controls="offcanvasUserRight"><i class="fas fa-user-alt"></i><span class="sound-only">회원 사이드바</span></button>

    <!-- menu sidebar -->
    <?php /* Side Nav Mobile Toggler */ ?>
    <button type="button" class="navbar-mobile-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft" aria-controls="offcanvasLeft"><i class="fas fa-bars"></i><span class="sound-only">메뉴 사이드바</span></button>

    <?php /* Back To Top */ ?>
    <div class="eb-backtotop">
        <svg class="backtotop-progress" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
            <span class="progress-count"></span>
        </svg>
    </div>
<?php } // !$wmode ?>

<?php
include_once(EYOOM_THEME_PATH . '/misc.html.php');
?>

<?php
if ($is_member && $eyoomer['onoff_push'] == 'on') {
    include_once(EYOOM_THEME_PATH . '/skin/push/basic/push.skin.html.php');
}
?>

<script src="<?php echo EYOOM_THEME_URL; ?>/js/app.js?ver=<?php echo G5_JS_VER; ?>"></script>
<?php if ($is_admin == 'super') { ?>
    <script>
        $(document).ready(function() {
            var edit_mode = "<?php echo $eyoom_default['edit_mode']; ?>";
            if (edit_mode == 'on') {
                $(".btn-edit-mode").show();
            } else {
                $(".btn-edit-mode").hide();
            }

            $("#btn_edit_mode").click(function() {
                var edit_mode = $("#edit_mode").val();
                if (edit_mode == 'on') {
                    $(".btn-edit-mode").hide();
                    $("#edit_mode").val('');
                } else {
                    $(".btn-edit-mode").show();
                    $("#edit_mode").val('on');
                }

                $.post("<?php echo G5_ADMIN_URL; ?>/?dir=theme&pid=theme_editmode&smode=1", { edit_mode: edit_mode });
            });
        });
    </script>
<?php } ?>

<?php
if ( $config['cf_analytics'] ) echo $config['cf_analytics'];
?>
