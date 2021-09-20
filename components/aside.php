<aside class="menu">
  <div class="menu__reviews" data-aos="fade-right" data-aos-duration="1000">
      <span class="menu__reviews_span" data-href="https://proweb.uz/">
          <i class="far fa-chevron-right"></i>
      </span>
      <span class="menu__reviews_text">Оставить озыв</span>
  </div>
  <?$i=0?>
  <ul class="menu__list">
      <? foreach ($pages as $address => $info) {?>
        <li>
          <a href="./?route=<?= $address?>" class="menu__list-link <?= $_GET['route'] == $address ? 'active' : ''?>"  data-aos="fade-right" data-aos-duration="1000" data-aos-delay="<?= $i+=100?>">
          <i class="<?= $info['icon']?>"></i><?= $info['name']?></a>
        </li>
      <?}?>
  </ul>
  <div class="menu__resizer"><span></span></div>
</aside>
<script>
</script>