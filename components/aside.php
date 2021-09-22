<aside class="menu">
  <div class="menu__icon" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
  <ul class="menu__list" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400">
      <? foreach ($pages as $address => $info) {?>
        <a  href="./?route=<?= $address?>" class="menu__link <?= $_GET['route'] == $address ? 'active' : ''?>">
        <i class="<?= $info['icon']?>"></i>
          <span class="menu__list-link"><?= $info['name']?></span>
        </a>
      <?}?>
    </ul>
  <div class="menu__reviews">
    <span class="menu__reviews_span">
        <i class="far fa-chevron-right"></i>
    </span>
    <span class="menu__reviews_text">Оставить озыв</span>
  </div>
</aside>
<script>
  const menuIcon = document.querySelector('.menu__icon');
  const menu = document.querySelector('.menu');
  menu.addEventListener('mouseover', function(){
    this.classList.add('hover');
  });
  menu.addEventListener('mouseout', function(){
    this.classList.remove('hover');
  });
  menuIcon.addEventListener('click', function(){
    this.classList.toggle('active');
    if (!this.classList.contains('active')) {
      menu.classList.remove('hover');
    }
  });
</script>