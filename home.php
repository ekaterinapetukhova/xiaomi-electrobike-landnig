<?php
/*
Template Name: Home
*/
?>

<?php get_header();?>

    <section class="bike">
      <div class="container">
        <div class="bike__inner">
          <div class="bike__column">
            <h1 class="bike__title">Xiaomi Himo C26</h1>
            <h3 class="bike__sub-title">Электрический велосипед</h3>
            <p class="bike__text">
              Полная свобода передвижения и надежный транспорт для путешествий
              на любые расстояния
            </p>
            <p class="bike__text">
              HIMO C26 – это новый электровелосипед от Xiaomi, который создан
              как для езды по городу, так и бездорожью. Он имеет мощный
              двигатель и емкий аккумулятор, благодаря которым способен
              проезжать на одном заряде до 100 км, что определенно выше, чем у
              большинства конкурентов. А большие колеса с пневматическими
              шинами, дисковые тормоза, 7-скоростная трансмиссия и эргономичное
              сидение делают каждую поездку гораздо приятнее.
            </p>
            <div class="bike__btn-wrapper">
              <a href="#price" class="bike__btn">Заказать</a>
            </div>
          </div>
          <div class="bike__column">
            <div class="bike-slider">

<?php
global $post;

$myposts = get_posts([ 
	'numberposts' => -1,
]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>
         <?php the_post_thumbnail(
            array(630, 525),
            array(
            'class' => 'bike-slider__item',
            ),
         );?>

		<?php 
	}
}

wp_reset_postdata(); 
?>

             
            </div>
            <ul class="bike__list">
              <li class="bike__list-item">
                <span class="bike__list-num">до 100 км</span
                ><span class="bike__list-text">запас хода</span>
              </li>
              <li class="bike__list-item">
                <span class="bike__list-num">25 км/ч</span
                ><span class="bike__list-text">макс корость</span>
              </li>
              <li class="bike__list-item">
                <span class="bike__list-num">3 режима езды</span>
                <span class="bike__list-text">
                  механический, гибридный, электрический</span
                >
              </li>
              <li class="bike__list-item">
                <span class="bike__list-num">25 кг</span
                ><span class="bike__list-text">вес</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="info" id="info">
      <div class="container">
        <div class="info__inner">
          <img src="<?php bloginfo('template_url'); ?>/assets/images/info.jpg" alt="" class="info__img" />
          <div class="info__list">
            <div class="info__list-item">
              <h4 class="info__item-title">Комфорт и безопасность от HIMO</h4>
              <p class="info__item-text">
                Электровелосипед HIMO C26 позволит вам быстро и с комфортом
                добраться до места работы или учебы и не привязываться к
                городскому транспорту. Велосипед обладает прочной конструкцией и
                внушительным запасом хода, чтобы стать надежным транспортным
                средством в современных городских условиях. Легкая и прочная
                рама, 26-дюймовые колеса и 7-ступенчатая система трансмиссии
                позволяют уверенно передвигаться не только по асфальтированному
                дорожному полотну, но и по сложной загородной трассе.
              </p>
              <h4 class="info__item-title">Прочная и легкая рама</h4>
              <p class="info__item-text">
                Рама HIMO C26 изготовлена из прочного и легкого алюминиевого
                сплава и отличается высокой надежностью, устойчивостью в
                аварийных ситуациях, превосходной управляемостью и комфортным
                передвижением по любой дороге.
              </p>
              <h4 class="info__item-title">
                Комбинация режимов для увеличения запаса хода
              </h4>
              <p class="info__item-text">
                Электровелосипед HIMO C26 обладает увеличенным запасом хода. Его
                аккумулятор емкостью 10000 мАч с интеллектуальной системой
                оптимизации энергопотребления позволяет проехать до 60 км на
                одном заряде в режиме электропривода. При использовании на
                некоторых участках пути физической силы дальность хода
                увеличивается до 100 км. Максимальная скорость передвижения HIMO
                C26 составляет 25 км/ч.
              </p>
              <h4 class="info__item-title">Надежная трансмиссия</h4>
              <p class="info__item-text">
                7-ступенчатая система трансмиссии обеспечивает плавное и точное
                переключение передач, удобное управление скоростью и надежность
                в работе. Переключая передачи, вы сможете с минимальными
                усилиями заехать на горку и безопасно скатиться вниз.
              </p>
              <h4 class="info__item-title">Вся информация на ЖК-дисплее</h4>
              <p class="info__item-text">
                Вся информация на ЖК-дисплее Большой информативный дисплей,
                вынесенный на рулевую стойку, отображает всю важную информацию о
                работе HIMO C26 в реальном времени. Вы сможете узнать актуальную
                скорость передвижения, уровень заряда или пройденный путь.
                Дисплей защищен от воздействия внешних факторов по стандарту
                IPX7 и не боится дождя и пыли.
              </p>
              <h4 class="info__item-title">Удобное седло</h4>
              <p class="info__item-text">
                Электровелосипед HIMO C26 укомплектован велосипедным седлом от
                известного бренда Selle Royal. Трехмерная гелевая структура
                седла обеспечивает оптимальную упругость и высокий комфорт во
                время езды.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="characteristic" id="characteristic">
      <div class="container">
        <h4 class="characteristic__title">Характеристики</h4>
        <div class="characteristic__inner">
          <div class="characteristic__items">
            <ul class="characteristic__list">
              <li class="characteristic__list-title">Общие</li>
              <li class="characteristic__line">
                <p class="characteristic__name">Производитель</p>
                <p class="characteristic__deser">Xiaomi</p>
              </li>
              <li class="characteristic__line">
                <p class="characteristic__name">Вид</p>
                <p class="characteristic__deser">
                  взрослый, дорожный, городской, электровелосипед, алюминиевая
                  рама
                </p>
              </li>
              <li class="characteristic__line">
                <p class="characteristic__name">Колеса</p>
                <p class="characteristic__deser">
                  26, двойной алюминиевый обод
                </p>
              </li>
              <li class="characteristic__line">
                <p class="characteristic__name">Электропривод</p>
                <p class="characteristic__deser">
                  мотор 250W, разгон до 25 км/ч
                </p>
              </li>
            </ul>
            <ul class="characteristic__list">
              <li class="characteristic__list-title">амортизация</li>
              <li class="characteristic__line">
                <p class="characteristic__name">Тип амортизации</p>
                <p class="characteristic__deser">
                  амортизирующая вилка (Hard tail)
                </p>
              </li>
              <li class="characteristic__line">
                <p class="characteristic__name">Вилка</p>
                <p class="characteristic__deser">пружинно-эластомерная</p>
              </li>
            </ul>
            <ul class="characteristic__list">
              <li class="characteristic__list-title">управление</li>
              <li class="characteristic__line">
                <p class="characteristic__name">Руль</p>
                <p class="characteristic__deser">
                  изогнутый, регулируемый подъем
                </p>
              </li>
              <li class="characteristic__line">
                <p class="characteristic__name">Манетки</p>
                <p class="characteristic__deser">
                  триггерные однорычажные, Shimano
                </p>
              </li>
            </ul>
            <ul class="characteristic__list">
              <li class="characteristic__list-title">
                характеристика трансмиссии
              </li>
              <li class="characteristic__line">
                <p class="characteristic__name">Количество скоростей</p>
                <p class="characteristic__deser">7</p>
              </li>
              <li class="characteristic__line">
                <p class="characteristic__name">Педали</p>
                <p class="characteristic__deser">классические</p>
              </li>
              <li class="characteristic__line">
                <p class="characteristic__name">Передний переключатель</p>
                <p class="characteristic__deser">1 звезда</p>
              </li>
              <li class="characteristic__line">
                <p class="characteristic__name">Задний переключатель</p>
                <p class="characteristic__deser">
                  Shimano Tourney (прогулочный)
                </p>
              </li>
              <li class="characteristic__line">
                <p class="characteristic__name">Кассета</p>
                <p class="characteristic__deser"></p>
              </li>
            </ul>
            <ul class="characteristic__list">
              <li class="characteristic__list-title">тормоза</li>
              <li class="characteristic__line">
                <p class="characteristic__name">Передний</p>
                <p class="characteristic__deser">дисковый механический</p>
              </li>
              <li class="characteristic__line">
                <p class="characteristic__name">Задний</p>
                <p class="characteristic__deser">дисковый механический</p>
              </li>
              <li class="characteristic__line">
                <p class="characteristic__name">
                  Готовность к установке дисковых
                </p>
                <p class="characteristic__deser">рама, вилка, втулка</p>
              </li>
            </ul>
            <ul class="characteristic__list">
              <li class="characteristic__list-title">прочее</li>
              <li class="characteristic__line">
                <p class="characteristic__name">Оснащение</p>
                <p class="characteristic__deser">электрооборудование, звонок</p>
              </li>
              <li class="characteristic__line">
                <p class="characteristic__name">Вес</p>
                <p class="characteristic__deser">25 кг</p>
              </li>
            </ul>
          </div>
          <img
            src="<?php bloginfo('template_url'); ?>/assets/images/characteristic.jpg"
            alt=""
            class="characteristic__img"
          />
        </div>
      </div>
    </section>
    <div class="slider">
      <div class="container">
        <div class="slider__items">
          <img src="<?php bloginfo('template_url'); ?>/assets/images/slider-1.jpg" class="slider__item" />
          <img src="<?php bloginfo('template_url'); ?>/assets/images/slider-2.jpg" class="slider__item" />
          <img src="<?php bloginfo('template_url'); ?>/assets/images/slider-3.jpg" class="slider__item" />
        </div>
      </div>
    </div>
    <section class="price" id="price">
      <div class="container">
        <div class="price__inner">
          <form action="" class="form">
            <h4 class="form__title">Заказать</h4>
            <p class="form__text">
              Если Вы хотите заказать велосипед, оставьте свой контакт и наш
              менеджер перезвонит вам в ближайшее время
            </p>
            <input type="text" class="form__input-name" placeholder="имя" />
            <input type="tel" class="form__input-tel" placeholder="телефон" />
            <p class="form__color">выберите желаемый цвет</p>
            <div class="form__label-box">
              <label class="form__label">
                <input type="radio" class="form__input-radio" name="radio" />
                <div class="form__bike">
                  <img
                    src="<?php bloginfo('template_url'); ?>/assets/images/bike-grey.jpg"
                    alt=""
                    class="form__bike-img"
                  />
                  <p class="form__bike-price"><span>33999 грн.</span></p>
                </div>
                <div class="form__radio-style form__radio-style--grey"></div>
              </label>
              <label class="form__label">
                <input
                  type="radio"
                  class="form__input-radio"
                  name="radio"
                  checked
                />
                <div class="form__bike">
                  <img
                    src="<?php bloginfo('template_url'); ?>/assets/images/bike-white.jpg"
                    alt=""
                    class="form__bike-img"
                  />
                  <p class="form__bike-price"><span>32999 грн.</span></p>
                </div>
                <div
                  class="form__radio-style form__radio-style--white"
                ></div> </label
              ><label class="form__label">
                <input type="radio" class="form__input-radio" name="radio" />
                <div class="form__bike">
                  <img
                    src="<?php bloginfo('template_url'); ?>/assets/images/bike-red.jpg"
                    alt=""
                    class="form__bike-img"
                  />
                  <p class="form__bike-price"><span>35999 грн.</span></p>
                </div>
                <div class="form__radio-style form__radio-style--red"></div>
              </label>
            </div>
            <button class="form__btn" type="submit">ЗАКАЗАТЬ</button>
          </form>
        </div>
      </div>
    </section>

    <?php get_footer();?>