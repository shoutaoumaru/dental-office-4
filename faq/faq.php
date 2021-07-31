<?php
 /* Template Name: faq
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>歯科サンプル4 | faq</title>
  <?php get_header(); ?>
</head>

<body>
  <div class="main-wrapper animsition">
    <header id="header" class="p-header">
      <div class="mobile-container">
        <div class=" logo__img">
          <a class="animsition-link" href=" <?php echo esc_url( home_url('/')); ?>">
            <div class="logo"></div>
          </a>
        </div>
        <div class="mobile-button">
          <button class="mobile-menu__btn">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>
      <!-- /.mobile-container -->
      <div class="pc-container">
        <div class=" logo__img">
          <a class="animsition-link" href=" <?php echo esc_url( home_url('/')); ?>">
            <div class="logo-pc logo"></div>
          </a>
        </div>
        <nav class="pc-nav">
          <ul class="pc-nav-list">
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/')); ?>"><span>ホーム</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/about')); ?>"><span>わたしたちについて</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/clinic')); ?>"><span>医院案内</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/menu')); ?>"><span>診療案内</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/news')); ?>"><span>お知らせ</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link " href=" <?php echo esc_url( home_url('/recruit')); ?>"><span>採用情報</span></a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- /.pc-container -->
      <nav class="sp-navbtn">
        <ul class="sp-navbtn__container">
          <li><a class="tel" href="tel:092-686-7954">電話予約<i class="icon-tel"></i></a></li>
          <li><a class="net" target="_blank" href="https://haisha-yoyaku.jp/">オンライン予約<i class="icon-net"></i></a>
          </li>
        </ul>
      </nav>
      <!-- /.nav-btn -->
    </header>
    <!-- /.p-header -->
    <div class="faq-contents">
      <div class="c-container">
        <div class="faq">
          <div class="faq__inner">
            <h2 class="faq__title">
              <p class="c-title">よくあるご質問</p>
            </h2>
            <div class="c-txtarea01">
              <p class="c-txt-sm">当院に今までにお寄せいただきましたご質問を掲載いたします。もし、お求めのご質問が見当たらないようでしたら、お気軽に当院までお問い合わせください。</p>
            </div>
            <dl class="faq__block">
              <div class="faq__item">
                <dt class="js-accordion-title ac-title">
                  <span class="c-txt-md">今、困っているのですが、当日診てもらえますか？
                  </span>
                </dt>
                <dd class="ac-content">
                  <div class="m-description-article">
                    <p class="c-txt-md">
                      当院は予約制ですので、予約の方が優先になりますが、当日キャンセルにて空きが出る場合もございますので直接クリニックまでお問い合わせください。緊急性の高い処置が必要な場合は、優先して拝見いたします。
                    </p>
                  </div>
                </dd>
              </div>
              <div class="faq__item">
                <dt class="js-accordion-title ac-title">
                  <span class="c-txt-md">駐車場はありますか？
                  </span>
                </dt>
                <dd class="ac-content">
                  <div class="m-description-article">
                    <p class="c-txt-md">はい。クリニック裏に10台分の駐車スペースがございます。駐輪場もございますので、お近くの方は自転車でもお越しいただけます。</p>
                  </div>
                </dd>
              </div>
              <div class="faq__item">
                <dt class="js-accordion-title ac-title">
                  <span class="c-txt-md">子供は何歳から診てもらえますか？
                  </span>
                </dt>
                <dd class="ac-content">
                  <div class="m-description-article">
                    <p class="c-txt-md">
                      歯が生え始めえた段階（生後約６ヶ月）でお口の管理はスタートします。まずはおうちの方と一緒に診療椅子に座ってもらうところからスタートし、徐々に慣れてもらうことから始めます。お子さんのお口の中は成長に伴い変化し続けますので、その時々で適切なアドバイスをいたします。
                    </p>
                  </div>
                </dd>
              </div>
              <div class="faq__item">
                <dt class="js-accordion-title ac-title">
                  <span class="c-txt-md">クレジットカードは使えますか？
                  </span>
                </dt>
                <dd class="ac-content">
                  <div class="m-description-article">
                    <p class="c-txt-md">
                      保険診療は使えません。<br>自由診療のみお使え致します。
                    </p>
                  </div>
                </dd>
              </div>
            </dl>
          </div>
        </div>
      </div>
    </div>
    <!-- /.fq-contents -->
    <footer class="p-footer">
      <div class="p-footer__wrap">
        <div class="p-footer__block">
          <ul class="p-footer__list">
            <li class="p-footer__item">
              <a class="p-footer__link animsition-link" href=" <?php echo esc_url( home_url('/')); ?>">ホーム</a>
            </li>
            <li class="p-footer__item">
              <a class="p-footer__link animsition-link" href=" <?php echo esc_url( home_url('/about')); ?>">わたしたちについて</a>
            </li>
            <li class="p-footer__item">
              <a class="p-footer__link animsition-link" href=" <?php echo esc_url( home_url('/clinic')); ?>">医院紹介</a>
            </li>
            <li class="p-footer__item">
              <a class="p-footer__link animsition-link" href=" <?php echo esc_url( home_url('/menu')); ?>">診療案内</a>
            </li>
            <li class="p-footer__item">
              <a class="p-footer__link animsition-link" href=" <?php echo esc_url( home_url('/news')); ?>">お知らせ</a>
            </li>
            <li class="p-footer__item">
              <a class="p-footer__link animsition-link" href=" <?php echo esc_url( home_url('/recruit')); ?>">採用情報</a>
            </li>
          </ul>
        </div>
        <div class="ft-info">
          <div class="ft-info__wrap">
            <div class="ft-info__btns">
              <p class="ft-info__reservation c-btn03 ">
                <a class="c-btn03__link"
                  href="https://apo-toolboxes.stransa.co.jp/user/web/32ae1acc808e7d396dd3c08eb96b4fa7/reservations"
                  target="_blank" rel="noopener noreferrer">
                  <span class="c-btn03__txt u-serif">WEB予約</span>
                </a>
              </p>
            </div>
          </div>
          <div class="ft-info__logos">
            <div class="ft-info__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/common/riv_logo_official2.png" alt="rivround"></div>
            <p class="ft-cr"><small class="ft-cr__txt">© Riv Round</small></p>
          </div>
        </div>
      </div>
    </footer>
    <!-- /.p-footer -->
    <div class="mobile-menu">
      <nav class="mobile-menu__nav">
        <ul class="mobile-menu__list">
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/')); ?>">ホーム</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/about')); ?>">わたしたちについて</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/menu')); ?>">診療案内</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/clinic')); ?>">医院紹介</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href=" <?php echo esc_url( home_url('/news')); ?>">お知らせ</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/recruit')); ?>">採用情報</a>
          </li>
        </ul>
        <div class="reserve-btn-wrap">
          <div class="reserve-btn-tel">
            <h4>電話予約はこちら</h4>
            <div class="reserve-btn">
              <a href="tel:092-686-7954"><span>092-686-7954</span></a>
            </div>
          </div>
          <div class="reserve-btn-net">
            <h4>ネット予約はこちら</h4>
            <div class="reserve-btn">
              <a href="https://beauty.hotpepper.jp/" target="_blank"><span>ONLINE RESERVE</span></a>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <!-- /.mobile-menu -->
  </div>
  <!-- /.main-wrapper -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendors/animsition.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/accordion.js"></script>
  <!-- <script src="/scripts/libs/pagination.js"></script> -->
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll-btn.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/c-main.js"></script>
  <?php wp_footer(); ?>
</body>

</html>