<div class="d-flex d-lg-none MobilesubMegaMenu container px-0">
  <ul>
    <?php
    global $post;
    foreach (wp_get_nav_menu_items('Product') as $mi) {
      $class = '';
      if ($post->ID == $mi->object_id) $class = 'current';
      $le = get_field('level', $mi->ID);
      $name = get_field('m_name', $mi->ID);
      $img = get_field('m_img', $mi->ID);
      echo <<<HTML
          <li class="$class">
            <a href="$mi->url" class="item">
              <div class="imgWrap">
                <div class="innerWrap">
                  <img src="$img" alt="">
                </div>
              </div>
              <div class="body">
                <div class="label">$le</div>
                <span>$name</span>
              </div>
            </a>
          </li>
HTML;
    }
    ?>
  </ul>
  <script>
    document.querySelector('nav.GNB.mobile').classList.add('active');
  </script>
</div>