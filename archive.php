<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>歯科テンプレート4/news</title>
  <?php get_header(); ?>
</head>

<body>
  <div id="main-wrapper" class="news-wrapper animsition">
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
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/faq')); ?>"><span>よくあるご質問</span></a>
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
    <section class="c-news">
      <div class="c-container">
        <h2 class="c-news__title clip-text left">
          <p class="contents-title">NEWS</p>
          <p class="contents-subtitle">お知らせ</p>
        </h2>
        <ul class="c-news__list">
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <li class="c-news__item">
              <a href="<?php the_permalink() ;?>" class="c-news__link animsition-link">
                <span class="c-news__date"><?php echo get_the_date(); ?></span>
                <?php the_post_thumbnail('thumbnail'); ?>
                <p class="c-news__tit"><?php the_title(); ?></p>
              </a>
            </li>
          <?php endwhile; ?>
          <?php endif; ?>
        </ul>
        <!-- pagenesion -->
        <?php if( function_exists ("the_pagination") ) the_pagination(); ?>
      </div>
    </section>
    <!-- /.news-top -->
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
              <a class="p-footer__link animsition-link" href=" <?php echo esc_url( home_url('/faq')); ?>">よくあるご質問</a>
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
            <a class="animsition-link" href=" <?php echo esc_url( home_url('/')); ?>">ホーム</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href=" <?php echo esc_url( home_url('/about')); ?>">わたしたちについて</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href=" <?php echo esc_url( home_url('/menu')); ?>">診療案内</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href=" <?php echo esc_url( home_url('/clinic')); ?>">医院紹介</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href=" <?php echo esc_url( home_url('/faq')); ?>">よくあるご質問</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href=" <?php echo esc_url( home_url('/recruit')); ?>">採用情報</a>
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
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll-btn.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>  
  <?php wp_footer(); ?>
</body>

</html>