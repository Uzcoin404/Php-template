<main class="main" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="200">
    <section class="head">
        <div class="head__title__blog"><h2 class="head__title">Слайдер</h2></div>
        <p class="head__date">Сегодня 03 Март 2020 год</p>
    </section>
    <? 
        $imgPath = './img/slider/';
        $imgList = scandir($imgPath);
        $imgVideo = 'img';
        $controls = '';
        include_once("slide.php");
        $result = '<div class="slider">';
          $result .= '<div class="slider__line">';
          foreach ($imgList as $index => $imgName) {
            if (strpos($imgName, '.mp4')) {
              $imgVideo = 'video';
              $controls = 'controls style="width=100%;" autoplay';
            }
            if ($index > 1) {
              $result .= "<$imgVideo $controls src=\"$imgPath$imgName\" alt=\"\"    class=\"slider__img\">";    
            }
          }
          $result .= '</div>';
          $result .= '<div class="slider__controls">';
            $result .= '<button class="slider__prev slider__btn"><i class="far  fa-chevron-left"></i></button>
            <button class="slider__next slider__btn"><i class="far  fa-chevron-right"></i></button>';
          $result .= '</div>';
        $result .= '</div>';
        echo $result;
    ?>
</main>