<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset');?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Himo</title>

  <?php wp_head(); ?>

</head>

<body>
  <header class="header">
    <div class="container">
      <div class="header__inner">
        <a href="#" class="logo">
          <img src="<?php bloginfo('template_url'); ?>/assets/images/logo.jpg" alt="" class="logo__img" />
        </a>
        <nav class="menu">
          <ul class="menu__list">
            <li class="menu__list-item">
              <a href="#info" class="menu__list-link">Описание</a>
            </li>
            <li class="menu__list-item">
              <a href="#characteristic" class="menu__list-link">Характеристики</a>
            </li>
            <li class="menu__list-item">
              <a href="#price" class="menu__list-link">Cтоимость</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>