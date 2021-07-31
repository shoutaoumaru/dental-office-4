<?php
 /* Template Name: menu
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>歯科テンプレート４</title>
  <?php get_header(); ?>
</head>

<body>
  <div id="main-wrapper" class="menu-wrapper animsition">
    <header id="header" class="p-header">
      <div class="mobile-container">
        <div class="logo__img">
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
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/faq')); ?>"><span>よくあるご質問</span></a>
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
    <div class="menu-contents">
      <div id="about" class="menu-about">
        <h1 class="menu-about__title clip-js1 left">
          <p class="contents-title">
            診療案内
          </p>
          <p class="contents-subtitle">
            Menu
          </p>
        </h1>
        <section id="general" class="menu-about-sec c-bg-grey03 appear up">
          <div class="c-container item">
            <h2 class="menu-about-sec__subtitle">一般歯科</h2>
            <div class="menu-about-sec__flex is-order">
              <div class="menu-about-sec__img"><img src="<?php echo get_template_directory_uri(); ?>/images/home/treatment@pc.jpg" alt=""></div>
              <div class="menu-about-sec__txtarea">
                <p class="menu-about-sec__txtarea-head c-txt-brown01 ">患者様の満足最優先<br class="u-view-pc">しっかり聞き、しっかり説明します
                </p>
                <p class="c-txt-sm">
                  当院ではいきなり歯を削ることはしません。患者様の思いやご要望を伺い、わかりやすく充分な説明をしっかり行います。そうして患者様との不安を取り除き、ご納得いただいた上で治療を進めます。<br>もし聞きづらいこと、わからないこと、不安なことがあれば、スタッフにご遠慮なくお話しください。CCDカメラでお口の中の状態をご覧いただけきながら、わかりやすくご説明します。コンピューターによる症例集の写真、各種プレゼンテーション・ソフト、お口に関する動画などによりブラッシング方法や治療例などのご説明も可能です。CCDカメラでお口の中をご覧頂いただけます。コンピューターによる症例集の写真、各種プレゼンテーション・ソフト、お口に関する動画などによりブラッシング方法や治療例などのご説明も可能です。
                </p>
              </div>
            </div>
          </div>
        </section>
        <section id="child" class="menu-about-sec c-bg-grey03 is-right appear up">
          <div class="c-container item">
            <h2 class="menu-about-sec__subtitle">小児歯科</h2>
            <div class="menu-about-sec__flex">
              <div class="menu-about-sec__img is_no_download"><img src="<?php echo get_template_directory_uri(); ?>/images/home/kids__2@pc.jpg" alt=""></div>
              <div class="menu-about-sec__txtarea">
                <p class="menu-about-sec__txtarea-head c-txt-brown01 ">大切なお子様の歯を守る<br class="u-view-pc">むし歯にならないための予防治療
                </p>
                <p class="c-txt-sm">
                  当院では、大切なお子様の歯をできるだけ削りたくないと考えています。そのためには、むし歯にならないように予防していくことが最も大切ではないでしょうか。当院ではお子様がむし歯になってしまう前の予防に力を入れています。むし歯になってしまった場合でも、なるべく削らず抜かず、お子様自身の心と体に負担が少ない治療を行います。治療が終わった後もまたむし歯にならないように定期的な予防処置をします。
                </p>
              </div>
            </div>
          </div>
        </section>
        <section id="prevention" class="menu-about-sec c-bg-grey03 appear up">
          <div class="c-container item">
            <h2 class="menu-about-sec__subtitle">予防歯科</h2>
            <div class="menu-about-sec__flex is-order">
              <div class="menu-about-sec__img"><img src="<?php echo get_template_directory_uri(); ?>/images/home/patient__1@pc.jpg" alt=""></div>
              <div class="menu-about-sec__txtarea">
                <p class="menu-about-sec__txtarea-head c-txt-brown01 ">同じ痛みを繰り返さないために<br class="u-view-pc">予防歯科に力を入れています
                </p>
                <p class="c-txt-sm">
                  昔は多くの人が歯医者は痛くなったら通うもの、という認識をしていました。今でこそ予防歯科の重要性が認知されつつありますが、まだまだ浸透には十分ではありません。むし歯や歯周病になった方が治療した後、同じようにケアを受けないと必ずと言っていいほど再治療が必要になります。我々プロフェッショナルによるケアと、患者様自身による両輪でむし歯や歯周病を予防していく必要があるのです。
                </p>
              </div>
            </div>
          </div>
        </section>
        <section id="whitening" class="menu-about-sec c-bg-grey03 is-right appear up">
          <div class="c-container item">
            <h2 class="menu-about-sec__subtitle">ホワイトニング</h2>
            <div class="menu-about-sec__flex">
              <div class="menu-about-sec__img"><img src="<?php echo get_template_directory_uri(); ?>/images/home/whitening@pc.jpg" alt=""></div>
              <div class="menu-about-sec__txtarea">
                <p class="menu-about-sec__txtarea-head c-txt-brown01 ">安全・安心のホワイトニングで<br class="u-view-pc">健康で美しい口元に</p>
                <p class="c-txt-sm">
                  歯科医の指示・管理のもとで、自分で（自宅で）行うホワイトニング方法を当院では行います。まず歯科医院で歯型をとって、自分専用のマウスピースを作成します。そのマウスピースにホワイトニング剤を注入し、毎日一定時間装着することでホワイトニングをしていきます。医院で行う一般的なホワイトニングに比べて白くなるのに時間はかかりますが、後戻りが少なく知覚過敏を起こしにくいと言われています。
                </p>
              </div>
            </div>
          </div>
        </section>
        <section id="ceramic" class="menu-about-sec c-bg-grey03 appear up">
          <div class="c-container item">
            <h2 class="menu-about-sec__subtitle">セラミック治療</h2>
            <div class="menu-about-sec__flex is-order">
              <div class="menu-about-sec__img"><img src="<?php echo get_template_directory_uri(); ?>/images/home/pic_menu05.jpg" alt=""></div>
              <div class="menu-about-sec__txtarea">
                <p class="menu-about-sec__txtarea-head c-txt-brown01 ">審美性に優れ、体にも優しい治療<br
                    class="u-view-pc">あなたの素敵な笑顔を演出します</p>
                <p class="c-txt-sm">
                  私たちは「自分自身や家族が、もし治療を受けるなら？」という自問自答を繰り返しています。そうすると「保険治療では不十分だ」という答えに至ります。<br>保険治療にはさまざまな制限があり、理想的な治療を受けることができません。実際に自分自身や家族、そしてスタッフも理想的な治療を実現するために保険外治療を受けています。<br>審美的にきれいである事はもちろんですが、“体にやさしい”素材、精密に作られた技工物は保険治療では決して得られない、大きな価値があるのです。セラミック治療はあなたの素敵な笑顔をさらに美しく演出します。
                </p>
              </div>
            </div>
          </div>
        </section>
        <section id="implant" class="menu-about-sec c-bg-grey03 is-right appear up">
          <div class="c-container item">
            <h2 class="menu-about-sec__subtitle">インプラント</h2>
            <div class="menu-about-sec__flex">
              <div class="menu-about-sec__img"><img src="<?php echo get_template_directory_uri(); ?>/images/home/pic_menu06.jpg" alt=""></div>
              <div class="menu-about-sec__txtarea">
                <p class="menu-about-sec__txtarea-head c-txt-brown01 ">歯の機能と美しさを取り戻す<br class="u-view-pc">安全性の高い、第二の永久歯
                </p>
                <p class="c-txt-sm">
                  インプラントは「第二の永久歯」とも言われています。歯周病（歯槽膿漏）で抜け落ちたり、虫歯、外傷などで自分の歯を抜歯した時に、なくした場所に麻酔を行った上でインプラント（人工歯根）の埋入手術を行い、その上に人工歯冠（ジルコニア製、セラミック製など）を装着することで、かみ合わせや審美性を回復させる事が出来ます。また、歯科インプラントは自分の歯と大変によく似た構造をしていて、歯冠部と歯根部とから構成されており、素材は生体親和性（生体とのなじみ）にすぐれた、素材が主に用いられる為に、安全性の高い治療方法となっております。
                </p>
              </div>
            </div>
          </div>
        </section>
        <section id="mouthpiece" class="menu-about-sec c-bg-grey03 appear up">
          <div class="c-container item">
            <h2 class="menu-about-sec__subtitle">マウスピース矯正</h2>
            <div class="menu-about-sec__flex is-order">
              <div class="menu-about-sec__img"><img src="<?php echo get_template_directory_uri(); ?>/images/home/mouthpiece_1.jpg" alt=""></div>
              <div class="menu-about-sec__txtarea">
                <p class="menu-about-sec__txtarea-head c-txt-brown01 ">装着が目立ちにくい矯正で<br class="u-view-pc">自信を持てる笑顔に</p>
                <p class="c-txt-sm">
                  歯並びのお悩みをマウスピース矯正で解消してみませんか？<br>マウスピース矯正は従来の歯科矯正装置と比べて、実際に装着していると言われても分からないほどに目立たないのが特徴です。マウスピースは取り外しがいつでも可能。食事の際や歯磨きのときは外すことができます。そのためむし歯になるリスクは従来の矯正装置より格段に改善しています。<br>食事や会話が快適にでき、治療中の痛みが少ないマウスピース矯正で、笑顔に自信を持っていただけます。
                </p>
              </div>
            </div>
          </div>
        </section>
        <section id="root" class="menu-about-sec is-bottom c-bg-grey03 is-right appear up">
          <div class="c-container item">
            <h2 class="menu-about-sec__head c-head04 is-ico is-root ">歯根治療</h2>
            <div class="menu-about-sec__flex">
              <div class="menu-about-sec__img"><img src="<?php echo get_template_directory_uri(); ?>/images/home/treatment-img07.jpg" alt=""></div>
              <div class="menu-about-sec__txtarea">
                <p class="menu-about-sec__txtarea-head c-txt-brown01 ">なるべく抜かずに歯を残す<br class="u-view-pc">精度の高い歯根治療</p>
                <p class="c-txt-sm">
                  むし歯が神経に至るまで進行してしまった場合、歯の根の治療が必要になります。歯根治療は、歯の根の中をきれいに殺菌・洗浄し、薬剤を詰めて被せ物を装着する治療です。歯の中の細い神経の道筋を探し出し、きれいに洗浄するという作業には、細心の注意と高度な技術が求められます。<br>失敗してしまうケースも多いこの治療をより精密に行うために、当院では最高峰の技術と環境を整えております。
                </p>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!-- /.menu-about -->
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
                <a class="p-footer__link animsition-link" href=" <?php echo esc_url( home_url('/news')); ?>">お知らせ</a>
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
      <!-------- /.p-footer -------->
    </div>
    <!-- /.main-contents -->
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
            <a class="animsition-link" href="<?php echo esc_url( home_url('/clinic')); ?>">医院紹介</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/news')); ?>">お知らせ</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/faq')); ?>">よくあるご質問</a>
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
   <!-- /#main-wrapper -->
  <?php get_template_part('includes/c-footer'); ?>      
</body>

</html>