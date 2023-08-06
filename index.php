<?php
session_start();
if(!empty($_GET['ref'])){
    $_SESSION["ref"] = substr($_GET['ref'], 0, 500);
}

?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" href="css/intlTelInput.css" />
    <link rel="stylesheet" href="css/styles.css" />

    <title>Асгард - квартиры</title>
  </head>
  <body>
    <section class="cover">
      <header class="header">
        <div class="container container--big">
          <div class="header__wrapper">
            <div class="header__logo"><img src="img/logo.svg" alt="" /></div>
            <div class="header__content">
              <button class="header__btn modal__btn-active" data-modal-src="modal">
                Связаться с менеджером
              </button>
              <!-- <div class="header__socials">
                <a href="" class="header__social"><img src="img/icons/telegram.svg" alt="" /></a>
                <a href="" class="header__social"><img src="img/icons/whatsapp.svg" alt="" /></a>
              </div>
              <div class="header__langs">
                <a href="" class="header__lang header__lang--active">RU</a>
                <a href="" class="header__lang">EN</a>
              </div> -->
            </div>
          </div>
        </div>
      </header>

      <div class="container">
        <div class="cover__wrapper">
          <div class="cover__title">
            <div class="title title--big">Квартиры премиум-класса ECO PREMIUM by Asgard</div>
          </div>
          <div class="cover__text">
            в закрытом обогащенном зеленью комплексе клубного типа, в городке Авсаллар
          </div>
          <div class="cover__btn">
            <button class="btn modal__btn-active" data-modal-src="modal">
              Связаться с менеджером
            </button>
          </div>
        </div>
      </div>
    </section>

    <div class="about about__slider-1">
      <div class="container">
        <div class="about__wrapper">
          <div class="about__slider">
            <!-- <div class="swiper-wrapper"> -->
            <div class="about__slider-item">
              <div class="about__slider-item-img">
                <img src="img/about/slider/1.jpg" alt="" />
              </div>
              <div class="about__slider-item-content">
                <div class="about__slider-item-title">
                  <div class="title title--min">
                    главные <br />
                    преимущества
                  </div>
                </div>
                <div class="about__slider-item-elems">
                  <div class="about__slider-item-elem">
                    Целебный сосновый воздух в заповедном уголке солнечной Алании
                  </div>
                  <div class="about__slider-item-elem">Идеально для инвестирования</div>
                  <div class="about__slider-item-elem">Подходит для круглогодичного проживания</div>
                  <div class="about__slider-item-elem">Сейсмоустойчивый монолит первого класса</div>
                  <div class="about__slider-item-elem">Беспроцентная рассрочка на 12 месяцев</div>
                  <div class="about__slider-item-elem">Первоначальный взнос от 30%</div>
                </div>
                <div class="about__slider-item-btn">
                  <button class="btn modal__btn-active" data-modal-src="modal">
                    Связаться с менеджером
                  </button>
                </div>
              </div>
            </div>
            <div class="about__slider-item">
              <div class="about__slider-item-img">
                <img src="img/about/slider/2.jpg" alt="" />
              </div>
              <div class="about__slider-item-content">
                <div class="about__slider-item-title">
                  <div class="title title--min">
                    Развитая внутренняя инфраструктура для люксовой жизни
                  </div>
                </div>
                <div class="about__slider-item-elems">
                  <div class="about__slider-item-elem">
                    Открытый и закрытый бассейны со SPA-зоной
                  </div>
                  <div class="about__slider-item-elem">
                    Фитнес-зал с силовыми тренажерами и кардиозоной
                  </div>
                  <div class="about__slider-item-elem">Детская площадка и детская игровая зона</div>

                  <div class="about__slider-item-elem">Баня на дровах</div>
                  <div class="about__slider-item-elem">Кинотеатр и зоны отдыха</div>
                  <div class="about__slider-item-elem">Чан на улице</div>
                </div>
                <div class="about__slider-item-btn">
                  <button class="btn modal__btn-active" data-modal-src="modal">
                    Связаться с менеджером
                  </button>
                </div>
              </div>
            </div>
            <div class="about__slider-item">
              <div class="about__slider-item-img">
                <img src="img/about/slider/3.jpg" alt="" />
              </div>
              <div class="about__slider-item-content">
                <div class="about__slider-item-title">
                  <div class="title title--min">Надежная технология строительства</div>
                </div>
                <div class="about__slider-item-elems">
                  <div class="about__slider-item-elem">
                    Сейсмоустойчивость первого класса (выдержит землетрясение до 8-9 баллов)
                  </div>
                  <div class="about__slider-item-elem">
                    Монолитное строительство из легких конструкций
                  </div>
                  <div class="about__slider-item-elem">
                    Красный пустотелый кирпич с повышенными тепло-, гидро- и звукоизоляционными
                    свойствами
                  </div>
                  <div class="about__slider-item-elem">Комплексная защита конструкций от влаги</div>
                </div>
                <div class="about__slider-item-btn">
                  <button class="btn modal__btn-active" data-modal-src="modal">
                    Связаться с менеджером
                  </button>
                </div>
              </div>
            </div>
            <div class="about__slider-item">
              <div class="about__slider-item-img">
                <img src="img/about/slider/4.jpg" alt="" />
              </div>
              <div class="about__slider-item-content">
                <div class="about__slider-item-title">
                  <div class="title title--min">
                    Полный набор опций для быстрого вселения и комфортного проживания
                  </div>
                </div>
                <div class="about__slider-item-elems">
                  <div class="about__slider-item-elem">Водяной теплый пол в каждой квартире</div>
                  <div class="about__slider-item-elem">Техника Franke с пожизненной гарантией</div>
                  <div class="about__slider-item-elem">
                    Бесперебойное электроснабжение и своя артезианская скважина
                  </div>
                  <div class="about__slider-item-elem">
                    Чистовая отделка, сантехника класса люкс, итальянская мебель, кондиционеры
                  </div>
                  <div class="about__slider-item-elem">
                    Собственная управляющая компания с 5-летней гарантией
                  </div>
                </div>
                <div class="about__slider-item-btn">
                  <button class="btn modal__btn-active" data-modal-src="modal">
                    Связаться с менеджером
                  </button>
                </div>
              </div>
            </div>
            <div class="about__slider-item">
              <div class="about__slider-item-img">
                <img src="img/about/slider/5.jpg" alt="" />
              </div>
              <div class="about__slider-item-content">
                <div class="about__slider-item-title">
                  <div class="title title--min">Повышенная безопасность</div>
                </div>
                <div class="about__slider-item-elems">
                  <div class="about__slider-item-elem">
                    Доступ в квартиру по отпечаткам пальцев и система «умный дом»
                  </div>
                  <div class="about__slider-item-elem">Пункт охраны на выезде</div>
                  <div class="about__slider-item-elem">Доступ в комплекс по карте доступа</div>
                  <div class="about__slider-item-elem">Круглосуточный видеомониторинг</div>
                </div>
                <div class="about__slider-item-btn">
                  <button class="btn modal__btn-active" data-modal-src="modal">
                    Связаться с менеджером
                  </button>
                </div>
              </div>
            </div>
            <!-- </div> -->
          </div>
          <!-- <div class="about__slider-arrows">
            <div class="about__slider-arrow about__slider-arrow--l">
              <span class="icon-arrow-l"></span>
            </div>
            <div class="about__slider-arrow about__slider-arrow--r">
              <span class="icon-arrow-r"></span>
            </div>
          </div>
          <div class="about__slider-pagination"></div> -->
        </div>
      </div>
    </div>

    <div class="info">
      <div class="container">
        <div class="info__wrapper">
          <div class="info__content">
            <div class="info__content-title">
              <div class="title title--min">
                ECO PREMIUM — наш новый комплекс премиального типа, расположенный в зеленом городке
                Авсаллар, в курортной зоне Алании
              </div>
            </div>
            <div class="info__content-descs">
              <div class="info__content-desc">
                <div class="info__content-desc-icon"><img src="img/icons/flag-1.svg" alt="" /></div>
                <div class="info__content-desc-text">
                  Начало строительства: <br />
                  <span>Май 2023 г.</span>
                </div>
              </div>
              <div class="info__content-desc">
                <div class="info__content-desc-icon"><img src="img/icons/flag-2.svg" alt="" /></div>
                <div class="info__content-desc-text">
                  Конец строительства: <span>Январь 2025 г.</span>
                </div>
              </div>
            </div>
          </div>
          <div class="info__items-wrapper">
            <div class="info__items-title"><div class="title title--big">Что рядом:</div></div>
            <div class="info__items">
              <div class="global-item">
                <div class="global-item__icon"><img src="img/info/icons/1.svg" alt="" /></div>
                <div class="global-item__text">900 м до песчаного городского пляжа</div>
              </div>
              <div class="global-item">
                <div class="global-item__icon"><img src="img/info/icons/2.svg" alt="" /></div>
                <div class="global-item__text">900 м до центра городка Авсаллар</div>
              </div>
              <div class="global-item">
                <div class="global-item__icon"><img src="img/info/icons/3.svg" alt="" /></div>
                <div class="global-item__text">2 км до знаменитого пляжа заповедника Инжекум</div>
              </div>
              <div class="global-item">
                <div class="global-item__icon"><img src="img/info/icons/4.svg" alt="" /></div>
                <div class="global-item__text">
                  200 метров до популярного спортивного комплекса Avsallar Hokey Sahası (хоккей на
                  траве)
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="map">
      <div class="container">
        <div class="map__wrapper">
          <div class="map__title">
            <div class="title title--mid">Расположение комплекса на карте</div>
          </div>
          <div class="map__img">
            <!-- <img src="img/map/1.jpg" alt="" /> -->
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9457.374869489986!2d31.761309470299505!3d36.628174420753716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14dcaf136ccc17fb%3A0x6a71a2fe21a705b7!2z0K3QutC-0YHQuNGC0Lgg0J_RgNC10LzQuNGD0Lw!5e0!3m2!1sru!2sua!4v1685379525605!5m2!1sru!2sua"
              width="100%"
              height="100%"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
      </div>
    </section>

    <div class="info-2">
      <div class="container">
        <div class="info-2__wrapper">
          <div class="info-2__title-block block-1 gtmpl--3-4">
            <div class="block-1__title">
              <div class="title title--mid">Авсаллар — перспективный и зеленый пригород Алании</div>
            </div>
            <div class="block-1__text">
              Еще недавно неизвестный миру курортный поселок Авсаллар (24 км до центра Алании)
              переживает бум строительства.
            </div>
          </div>
          <div class="info-2__content gtmpl--3-4">
            <div class="info-2__desc">
              <div class="info-2__desc-text">
                Это уже третий объект нашей команды, и вот почему:
              </div>
              <div class="info-2__desc-icon"><img src="img/icons/arrow-r-2.svg" alt="" /></div>
            </div>
            <div class="info-2__list">
              <div class="info-2__list-item">Спокойные песчаные пляжи с пологим заходом</div>
              <div class="info-2__list-item">Вокруг живописные холмы и скалы</div>
              <div class="info-2__list-item">
                Рядом заповедник Инжекум со своим знаменитым секретным пляжем
              </div>
              <div class="info-2__list-item">
                Целебный воздух густого соснового бора на территории поселка
              </div>
              <div class="info-2__list-item">
                Центр поселка — туристическая зона в южном колоритном стиле с традиционными лавками
                и уютными ресторанами
              </div>
              <div class="info-2__list-item">
                В наличии вся инфраструктура для жизни, включая садики, начальную школу и трансфер в
                общеобразовательную школу
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="gallery gallery--tmpl-1">
      <div class="gallery__item"><img src="img/about/slider2/1.jpg" alt="" /></div>
      <div class="gallery__item"><img src="img/about/slider2/2.jpg" alt="" /></div>
      <div class="gallery__item"><img src="img/about/slider2/3.jpg" alt="" /></div>
      <div class="gallery__item"><img src="img/about/slider2/4.jpg" alt="" /></div>
      <div class="gallery__item"><img src="img/about/slider2/5.jpg" alt="" /></div>
    </div>

    <section class="complex">
      <div class="container">
        <div class="complex__wrapper">
          <div class="complex__title">
            <div class="title title--min">
              ECO PREMIUM — закрытый комплекс клубного типа и Состоит из двух 5-этажных блоков по 24
              квартиры:
            </div>
          </div>
          <div class="complex__items">
            <div class="complex__item">
              <div class="complex__item-title complex__item--grad">
                Одноэтажные <br />
                квартиры формата 1+1
              </div>
              <div class="complex__item-text complex__item--grad">
                Отдельная спальня и кухня-гостиная
              </div>
              <div class="complex__item-list">
                <div class="complex__item-list-title">
                  <p class="complex__item--grad">Порядка 60 м² честной площади*</p>
                </div>
                <div class="complex__item-list-elem">
                  <div class="complex__item-list-text complex__item--grad">Стоимость</div>
                  <div class="complex__item-list-num">235 000 €</div>
                </div>
                <div class="complex__item-list-elem">
                  <div class="complex__item-list-text complex__item--grad">Всего квартир</div>
                  <div class="complex__item-list-num">16</div>
                </div>
                <div class="complex__item-list-elem">
                  <div class="complex__item-list-text complex__item--grad">Осталось в продаже</div>
                  <div class="complex__item-list-num">13</div>
                </div>
              </div>
              <div class="complex__item-btn">
                <button class="btn modal__btn-active" data-modal-src="modal">
                  Связаться с менеджером
                </button>
              </div>
            </div>
            <div class="complex__item">
              <div class="complex__item-title complex__item--grad">
                Двухэтажные <br />
                квартиры формата 2+1
              </div>
              <div class="complex__item-text complex__item--grad">
                2 отдельные спальни и кухня-гостиная
              </div>
              <div class="complex__item-list">
                <div class="complex__item-list-title complex__item--grad">
                  <p class="complex__item--grad">Более 100 м² честной площади*</p>
                </div>
                <div class="complex__item-list-elem">
                  <div class="complex__item-list-text complex__item--grad">Стоимость</div>
                  <div class="complex__item-list-num">325 000 €</div>
                </div>
                <div class="complex__item-list-elem">
                  <div class="complex__item-list-text complex__item--grad">Всего квартир</div>
                  <div class="complex__item-list-num">32</div>
                </div>
                <div class="complex__item-list-elem">
                  <div class="complex__item-list-text complex__item--grad">Осталось в продаже</div>
                  <div class="complex__item-list-num">22</div>
                </div>
              </div>
              <div class="complex__item-btn">
                <button class="btn modal__btn-active" data-modal-src="modal">
                  Связаться с менеджером
                </button>
              </div>
            </div>
            <div class="complex__desc-wrapper">
              <div class="complex__desc-1">
                <span class="complex__item--grad">* </span>
                <p class="complex__item--grad">
                  Мы не строим маленькие квартиры и не включаем в площадь лифтовую площадку. Только
                  честная площадь. Только просторные квартиры, в которых хочется жить. Цена
                  действительна на момент публикации и может измениться
                </p>
              </div>
              <div class="complex__desc-2">
                <div class="complex__desc-title">
                  Хотите получить паспорт Турции? Купите 2 квартиры в этом доме
                </div>
                <div class="complex__desc-text">
                  Вы имеете право получить гражданство Турции при покупке недвижимости на сумму от
                  400&nbsp000&nbsp$
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="layouts">
      <div class="container">
        <div class="layouts__wrapper">
          <div class="layouts__title">
            <div class="title title--mid">Посмотрите наши планировки</div>
          </div>

          <div class="layouts__items">
            <div class="layouts__item-wrapper">
              <div class="layouts__item-suptitle"><div class="title title--min">Блок А</div></div>
              <div class="layouts__item">
                <div class="layouts__item-title">Этажи 1-2:</div>
                <div class="layouts__item-elems">
                  <div class="layouts__item-elem">
                    <div
                      class="layouts__item-elem-img modal__btn-active"
                      data-modal-src="layout"
                      data-review-btn
                      data-review-big="img/layouts/layout/1-1.jpg"
                    >
                      <img src="img/layouts/1-1.png" alt="" />
                    </div>
                    <div class="layouts__item-elem-text">Обмерные планы</div>
                  </div>
                  <div class="layouts__item-elem">
                    <div
                      class="layouts__item-elem-img modal__btn-active"
                      data-modal-src="layout"
                      data-review-btn
                      data-review-big="img/layouts/plans/1-1.JPG"
                    >
                      <img src="img/layouts/1-2.png" alt="" />
                    </div>
                    <div class="layouts__item-elem-text">Планировки</div>
                  </div>
                </div>
              </div>
              <div class="layouts__item">
                <div class="layouts__item-title">Этаж 3:</div>
                <div class="layouts__item-elems">
                  <div class="layouts__item-elem">
                    <div
                      class="layouts__item-elem-img modal__btn-active"
                      data-modal-src="layout"
                      data-review-btn
                      data-review-big="img/layouts/layout/2.jpg"
                    >
                      <img src="img/layouts/2-1.png" alt="" />
                    </div>
                    <div class="layouts__item-elem-text">Обмерные планы</div>
                  </div>
                  <div class="layouts__item-elem">
                    <div
                      class="layouts__item-elem-img modal__btn-active"
                      data-modal-src="layout"
                      data-review-btn
                      data-review-big="img/layouts/plans/2.JPG"
                    >
                      <img src="img/layouts/2-2.png" alt="" />
                    </div>
                    <div class="layouts__item-elem-text">Планировки</div>
                  </div>
                </div>
              </div>
              <div class="layouts__item">
                <div class="layouts__item-title">Этажи 4-5:</div>
                <div class="layouts__item-elems">
                  <div class="layouts__item-elem">
                    <div
                      class="layouts__item-elem-img modal__btn-active"
                      data-modal-src="layout"
                      data-review-btn
                      data-review-big="img/layouts/layout/3.jpg"
                    >
                      <img src="img/layouts/3-1.png" alt="" />
                    </div>
                    <div class="layouts__item-elem-text">Обмерные планы</div>
                  </div>
                  <div class="layouts__item-elem">
                    <div
                      class="layouts__item-elem-img modal__btn-active"
                      data-modal-src="layout"
                      data-review-btn
                      data-review-big="img/layouts/plans/3.JPG"
                    >
                      <img src="img/layouts/3-2.png" alt="" />
                    </div>
                    <div class="layouts__item-elem-text">Планировки</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="layouts__item-wrapper">
              <div class="layouts__item-suptitle"><div class="title title--min">Блок Б</div></div>
              <div class="layouts__item">
                <div class="layouts__item-title">Этажи 1-2:</div>
                <div class="layouts__item-elems">
                  <div class="layouts__item-elem">
                    <div
                      class="layouts__item-elem-img modal__btn-active"
                      data-modal-src="layout"
                      data-review-btn
                      data-review-big="img/layouts/layout/1-2.JPG"
                    >
                      <img src="img/layouts/1-1.png" alt="" />
                    </div>
                    <div class="layouts__item-elem-text">Обмерные планы</div>
                  </div>
                  <div class="layouts__item-elem">
                    <div
                      class="layouts__item-elem-img modal__btn-active"
                      data-modal-src="layout"
                      data-review-btn
                      data-review-big="img/layouts/plans/1-2.JPG"
                    >
                      <img src="img/layouts/1-2.png" alt="" />
                    </div>
                    <div class="layouts__item-elem-text">Планировки</div>
                  </div>
                </div>
              </div>
              <div class="layouts__item">
                <div class="layouts__item-title">Этаж 3:</div>
                <div class="layouts__item-elems">
                  <div class="layouts__item-elem">
                    <div
                      class="layouts__item-elem-img modal__btn-active"
                      data-modal-src="layout"
                      data-review-btn
                      data-review-big="img/layouts/layout/2.jpg"
                    >
                      <img src="img/layouts/2-1.png" alt="" />
                    </div>
                    <div class="layouts__item-elem-text">Обмерные планы</div>
                  </div>
                  <div class="layouts__item-elem">
                    <div
                      class="layouts__item-elem-img modal__btn-active"
                      data-modal-src="layout"
                      data-review-btn
                      data-review-big="img/layouts/plans/2.JPG"
                    >
                      <img src="img/layouts/2-2.png" alt="" />
                    </div>
                    <div class="layouts__item-elem-text">Планировки</div>
                  </div>
                </div>
              </div>
              <div class="layouts__item">
                <div class="layouts__item-title">Этажи 4-5:</div>
                <div class="layouts__item-elems">
                  <div class="layouts__item-elem">
                    <div
                      class="layouts__item-elem-img modal__btn-active"
                      data-modal-src="layout"
                      data-review-btn
                      data-review-big="img/layouts/layout/3.jpg"
                    >
                      <img src="img/layouts/3-1.png" alt="" />
                    </div>
                    <div class="layouts__item-elem-text">Обмерные планы</div>
                  </div>
                  <div class="layouts__item-elem">
                    <div
                      class="layouts__item-elem-img modal__btn-active"
                      data-modal-src="layout"
                      data-review-btn
                      data-review-big="img/layouts/plans/3.JPG"
                    >
                      <img src="img/layouts/3-2.png" alt="" />
                    </div>
                    <div class="layouts__item-elem-text">Планировки</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="description">
      <div class="container">
        <div class="description__wrapper">
          <div class="description__title">
            <div class="title title--big">Стараемся больше, чем другие застройщики</div>
          </div>
          <div class="description__items">
            <div class="description__item">
              <div class="description__item-title">Обеспечиваем сейсмоустойчивость</div>
              <div class="description__item-img"><img src="img/description/1.png" alt="" /></div>
              <div class="description__item-text-block">
                <p>
                  Как и раньше, мы строим объект первого класса сейсмоустойчивости: цельный монолит
                  с облегченными конструкциями и полной обвязкой
                </p>
                <p class="description__item-text--small">
                  Такие дома должны выдержать землетрясение в 8-9 баллов
                </p>
              </div>
            </div>
            <div class="description__item">
              <div class="description__item-title">Строим наши обьекты из кирпича</div>
              <div class="description__item-img"><img src="img/description/2.png" alt="" /></div>
              <div class="description__item-text-block">
                <p>
                  Дом выполнен из красного пустотелого кирпича, а не из пеноблоков, пусть такой
                  кирпич и дороже в 2,5 раза. Дополнительно утепляем фасады. Мы не экономим на
                  качестве! Это:
                </p>
                <ul class="description__item-text--small">
                  <li>дополнительный “+” к сейсмоустойчивости</li>
                  <li>
                    термоизоляция: летом в наших квартирах на 2 градуса прохладнее, а зимой — теплее
                  </li>
                  <li>шумоизоляция: вас не беспокоят соседи</li>
                  <li>гидроизоляция: в квартирах не бывает грибка</li>
                </ul>
              </div>
            </div>
            <div class="description__item">
              <div class="description__item-title">Обеспечиваем всеми удобствами</div>
              <div class="description__item-img"><img src="img/description/3.png" alt="" /></div>
              <div class="description__item-text-block">
                <p>Вы обеспечены всем необходимым для круглогодичного проживания:</p>
                <ul class="description__item-text--small">
                  <li>вода — своя артезианская скважина</li>
                  <li>бесперебойное энергоснабжение — генератор и солнечные панели</li>
                  <li>тепло — автономное отопление (котел Daikin) и водяной теплый пол</li>
                  <li>разводка под газ и выводы под батареи</li>
                  <li>широкополосный интернет</li>
                </ul>
              </div>
            </div>
            <div class="description__item">
              <div class="description__item-title">Заряжаем комфортом европейского уровня</div>
              <div class="description__item-img"><img src="img/description/4.png" alt="" /></div>
              <div class="description__item-text-block">
                <p>Вы сможете сразу заселиться и жить, потому как все квартиры сдаются с:</p>
                <ul class="description__item-text--small">
                  <li>полной чистовой отделкой</li>
                  <li>техникой Franke с пожизненной гарантией</li>
                  <li>сантехникой класса люкс</li>
                  <li>итальянской мебелью</li>
                  <li>
                    кухонным гарнитуром ультрасовременного дизайна со встроенной швейцарской
                    техникой
                  </li>
                  <li>установленными и спрятанными в фасад кондиционерами</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="gallery gallery--tmpl-2">
      <div class="gallery__item-block gallery__item-block--1">
        <div class="gallery__item"><img src="img/about/slider3/1.jpg" alt="" /></div>
        <div class="gallery__item"><img src="img/about/slider3/2.jpg" alt="" /></div>
      </div>
      <div class="gallery__item-block">
        <div class="gallery__item"><img src="img/about/slider3/3.jpg" alt="" /></div>
        <div class="gallery__item"><img src="img/about/slider3/4.jpg" alt="" /></div>
        <div class="gallery__item"><img src="img/about/slider3/5.jpg" alt="" /></div>
      </div>
      <div class="gallery__item-block gallery__item-block--2">
        <div class="gallery__item"><img src="img/about/slider3/6.jpg" alt="" /></div>
        <div class="gallery__item"><img src="img/about/slider3/7.jpg" alt="" /></div>
      </div>
      <div class="gallery__item-block gallery__item-block--3">
        <div class="gallery__item"><img src="img/about/slider3/8.jpg" alt="" /></div>
        <div class="gallery__item"><img src="img/about/slider3/9.jpg" alt="" /></div>
      </div>
    </div>

    <section class="steps">
      <div class="container">
        <div class="steps__wrapper">
          <div class="steps__title">
            <div class="title title--min">Как купить недвижимость легко и просто в 4 шага:</div>
          </div>
          <div class="steps__items">
            <div class="steps__item">
              <div class="steps__item-num">1</div>
              <div class="steps__item-dec"></div>
              <div class="global-item">
                <div class="global-item__icon"><img src="img/steps/1.svg" alt="" /></div>
                <div class="global-item__text">Оставьте заявку и наш менеджер свяжется с Вами</div>
              </div>
            </div>
            <div class="steps__item">
              <div class="steps__item-num">2</div>
              <div class="steps__item-dec"></div>
              <div class="global-item">
                <div class="global-item__icon"><img src="img/steps/2.svg" alt="" /></div>
                <div class="global-item__text">Выбираете квартиру</div>
              </div>
            </div>
            <div class="steps__item">
              <div class="steps__item-num">3</div>
              <div class="steps__item-dec"></div>
              <div class="global-item">
                <div class="global-item__icon"><img src="img/steps/3.svg" alt="" /></div>
                <div class="global-item__text">Подписываете договор и производите оплату</div>
              </div>
            </div>
            <div class="steps__item">
              <div class="steps__item-num">4</div>
              <div class="steps__item-dec"></div>
              <div class="global-item">
                <div class="global-item__icon"><img src="img/steps/4.svg" alt="" /></div>
                <div class="global-item__text">Получаете Tapu*</div>
              </div>
            </div>
          </div>
          <div class="steps__text">
            * Tapu – это документ, который подтверждает право собственности на недвижимость в Турции
          </div>
        </div>
      </div>
    </section>

    <section class="advantages">
      <div class="container">
        <div class="advantages__wrapper">
          <div class="advantages__title">
            <div class="title title--min">И еще 4 преимущества комплекса ECO PREMIUM by Asgard</div>
          </div>
          <div class="advantages__items">
            <div class="advantages__item">
              <div class="advantages__item-img"><img src="img/advantages/1.png" alt="" /></div>
              <div class="advantages__item-content">
                <div class="advantages__item-title">Повышенное внимание к безопасности</div>
                <div class="advantages__item-text">
                  <p>
                    Из пункта охраны (на выезде) будет проводиться круглосуточный контроль
                    автомобилей и пешеходов — с помощью карты доступа и видеомониторинга (CTTV)
                  </p>
                  <p>
                    Контролируйте свое жилье с помощью системы «умный дом». Входите по отпечаткам
                    пальцев с системой электронного доступа
                  </p>
                </div>
              </div>
            </div>
            <div class="advantages__item">
              <div class="advantages__item-img"><img src="img/advantages/2.png" alt="" /></div>
              <div class="advantages__item-content">
                <div class="advantages__item-title">Богатая внутренняя инфраструктура</div>
                <div class="advantages__item-text">
                  <p>
                    В комплексе будет всё необходимое для отдыха и развлечений детей и взрослых:
                  </p>
                  <ul>
                    <li>сауна</li>
                    <li>беседка-барбекю</li>
                    <li>детская площадка</li>
                    <li>детская игровая зона</li>
                    <li>баня на дровах</li>
                    <li>открытый и закрытый бассейны со SPA-зоной</li>
                    <li>свой фитнес-зал с кардио- и силовыми тренажерами</li>
                    <li>
                      бесплатный доступ в спортивный комплекс Avsallar Hokey Sahası (хоккей на
                      траве)
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="advantages__item">
              <div class="advantages__item-img"><img src="img/advantages/3.png" alt="" /></div>
              <div class="advantages__item-content">
                <div class="advantages__item-title">Отсутствие соседней застройки</div>
                <div class="advantages__item-text">
                  <p>
                    Новой застройки возле комплекса не будет, ведь рядом расположены земли
                    заповедного фонда со скалами и лесом.
                  </p>
                  <p>
                    Кстати, на одной из скал будет обустроен искусственный водопад, а на второй —
                    зона отдыха для жителей комплекса
                  </p>
                </div>
              </div>
            </div>
            <div class="advantages__item">
              <div class="advantages__item-img"><img src="img/advantages/4.png" alt="" /></div>
              <div class="advantages__item-content">
                <div class="advantages__item-title">Собственная управляющая компания</div>
                <div class="advantages__item-text">
                  <p>Мы даем гарантию 5 лет на все работы по Айдату</p>
                  <p>
                    Вы сможете экономить на Айдате за счет своей воды и электричества в комплексе
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="info-2">
      <div class="container">
        <div class="info-2__wrapper">
          <div class="info-2__title-block block-1 gtmpl--2">
            <div class="block-1__title">
              <div class="title title--mid">
                Мы — надежный <br />
                застройщик
              </div>
            </div>
            <div class="block-1__text">
              Застройщик комплекса ECO PREMIUM by Asgard - компания ECO INVESTMENTS (лицензированный
              застройщик, рег. № 3240954085, Анталья, Турция) на рынке недвижимости в Турции с 2020
              года. Нашей команде есть чем гордиться:
            </div>
          </div>
          <div class="info-2__items">
            <div class="info-2__item">
              <div class="info-2__item-title">4 объекта</div>
              <div class="info-2__item-text">в процессе постройки</div>
            </div>
            <div class="info-2__item">
              <div class="info-2__item-title">35 000 m²</div>
              <div class="info-2__item-text">построено жилья</div>
            </div>
            <div class="info-2__item">
              <div class="info-2__item-title">9 000 000$</div>
              <div class="info-2__item-text">вложено инвестиций</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="payment">
      <div class="container">
        <div class="payment__wrapper">
          <div class="payment__title">
            <div class="title title--big">Всё для удобной оплаты</div>
          </div>
          <div class="payment__items">
            <div class="global-item">
              <div class="global-item__icon"><img src="img/payment/1.svg" alt="" /></div>
              <div class="global-item__text">Платите в рассрочку до 12 месяцев — без процентов</div>
            </div>
            <div class="global-item">
              <div class="global-item__icon"><img src="img/payment/2.svg" alt="" /></div>
              <div class="global-item__text">Первоначальный взнос от 30%</div>
            </div>
            <div class="global-item">
              <div class="global-item__icon"><img src="img/payment/4.svg" alt="" /></div>
              <div class="global-item__text">Можете оплатить криптовалютой</div>
            </div>
            <div class="global-item">
              <div class="global-item__icon"><img src="img/payment/3.svg" alt="" /></div>
              <div class="global-item__text">
                Безналичный расчет — в любой валюте: <b>$</b>&nbsp, <b>€</b>&nbsp, <b>₽</b>&nbsp,
                <b>₺</b>&nbsp,
                <b>د</b>
              </div>
            </div>

            <!-- <div class="global-item">
              <div class="global-item__icon"><img src="img/payment/5.svg" alt="" /></div>
              <div class="global-item__text">
                Если вы в Турции — платите в евро, долларах или лирах
              </div>
            </div>
            <div class="global-item">
              <div class="global-item__icon"><img src="img/payment/6.svg" alt="" /></div>
              <div class="global-item__text">Если вы в России — платите в рублях</div>
            </div>
            <div class="global-item">
              <div class="global-item__icon"><img src="img/payment/7.svg" alt="" /></div>
              <div class="global-item__text">Если вы в Берлине — платите в евро</div>
            </div>
            <div class="global-item">
              <div class="global-item__icon"><img src="img/payment/8.svg" alt="" /></div>
              <div class="global-item__text">Если вы в США — платите в долларах</div>
            </div>
            <div class="global-item">
              <div class="global-item__icon"><img src="img/payment/9.svg" alt="" /></div>
              <div class="global-item__text">Если вы в ОАЭ — платите в дирхамах</div>
            </div> -->
          </div>
        </div>
      </div>
    </section>

    <div class="info-3">
      <div class="container">
        <div class="info-3__wrapper">
          <div class="info-3__text">
            Чтобы получить более детальную консультацию, оставьте свои данные в форме и наш
            мененджер свяжется с вами в ближайшее время
          </div>
          <div class="info-3__btn"><button class="btn modal__btn-active" data-modal-src="modal">Заполнить форму</button></div>
        </div>
      </div>
    </div>

    <!-- <section class="construction">
      <div class="container">
        <div class="construction__wrapper">
          <div class="construction__title">
            <div class="title title--mid">Следите за ходом строительства</div>
          </div>
          <div class="construction__img"><img src="img/construction/img.png" alt="" /></div>
          <div class="construction__btn">
            <button class="btn modal__btn-active" data-modal-src="modal">
              Связаться с менеджером
            </button>
          </div>
        </div>
      </div>
    </section> -->

    <footer class="footer">
      <div class="container">
        <div class="footer__wrapper">
          <div class="footer__info">
            <div class="footer__title footer__title--margin">Юридическая информация</div>
            <div class="footer__info-text">
              <p>
                Продавец квартир в комплексе ECO PREMIUM by Asgard - компания ECO INVESTMENTS
                (лицензированный застройщик, рег. № 3240954085, Анталья, Турция). Маркетинговые
                услуги оказываются компанией ASGARD ESTATE - FZCO (лицензия № - 24755, Дубай, ОАЭ)
              </p>
              <p>
                Обращаем Ваше внимание на то, что данный сайт не является средством массовой
                информации и предназначен исключительно для предоставления пользователям сайта
                сведений общего характера и справочной информации (не является публичной офертой)
              </p>
            </div>
          </div>
          <div class="footer__contacts">
            <div class="footer__contacts-item">
              <div class="footer__title">Тех. поддержка</div>
              <a href="mailto:support@asgardestate.org" class="footer__link">
                <span class="icon-mail"></span>
                <p>support@asgardestate.org</p></a
              >
            </div>
            <div class="footer__contacts-item">
              <div class="footer__title">Соц.сети</div>

              <a
                href="https://www.youtube.com/channel/UCraWfyGgemOd1bcC8aMzkOA"
                target="_blank"
                class="footer__link"
                ><span class="icon-youtube"></span>
                <p>Канал YouTube</p></a
              >
            </div>
          </div>
          <div class="footer__logo"><img src="img/logo-black.svg" alt="" /></div>
        </div>
      </div>
    </footer>

    <div class="modal__wrapper" data-modal-window="modal">
      <div class="modal__content">
        <div class="modal__btn-close">
          <span class="icon-close"></span>
        </div>
        <form id="form" class="form" action="./send.php" method="post">
          <div class="form__title">
            Чтобы получить косультацию менеджера, пожалуйста, внесите свои данные в полях ниже
          </div>
          <div class="form__inputs">
            <div class="form__input-block">
              <input type="hidden" value="" name="country-code" id="country-code" />
              <input
                type="text"
                required
                placeholder="Имя"
                name="name"
                value=""
                class="form__input val val-name"
              />
              <div class="form__input-text">Не правильно введено Имя</div>
            </div>
            <div class="form__input-block">
              <input
                type="text"
                required
                placeholder="Фамилия"
                name="surname"
                value=""
                class="form__input val val-name"
              />
              <div class="form__input-text">Не правильно введена Фамилия</div>
            </div>
            <div class="form__input-block">
              <input
                type="tel"
                required
                placeholder=""
                name="phone"
                value=""
                class="form__input"
                id="phone"
              />
              <div class="form__input-text" id="error-msg"></div>
            </div>
          </div>

          <div class="form__checkbox-block">
            <input type="checkbox" id="agree" name="agree" class="form__input-checkbox" />
            <label class="form__input-checkbox-label" for="agree"></label>
            <p>
              Я даю свое согласие на обработку указанных мной данных компаниями ASGARD ESTATE - FZCO
              (№ - 24755, Дубай, ОАЭ) и ECO INVESTMENTS (№ 3240954085, Анталья, Турция) в целях
              предоставления мне консультационных услуг и информации о покупке недвижимости на срок
              3 месяца.
            </p>
          </div>

          <div class="form__btn"><button class="btn">Отправить</button></div>

          <div class="form__text">
            <span class="icon-mail"></span>
            <p>
              Для отзыва согласия обращайтесь по электронной почте
              <a href="mailto:legal@asgard.estate">legal@asgard.estate</a>
            </p>
          </div>
        </form>
      </div>
    </div>

    <div class="modal__wrapper modal__wrapper--dark" data-modal-window="layout">
      <div class="modal__content modal__content--big">
        <div class="modal__btn-close">
          <span class="icon-close"></span>
        </div>
        <div class="review" data-review-img>
          <img class="review__img" src="" alt="" />
          <div class="review__btns">
            <button class="review__btn" data-review-zoom="minus">
              <span class="icon-zoom-min"></span>
            </button>
            <button class="review__btn" data-review-zoom="plus">
              <span class="icon-zoom-plus"></span>
            </button>
          </div>
        </div>
      </div>
    </div>

    <script src="js/intlTelInput.js"></script>
    <script src="js/utils.js"></script>
    <script src="js/form-validation.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
