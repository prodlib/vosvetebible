<nav class="navigation-mobile">
    <div class="mobile-menu">
      <input class="library visually-hidden" type="checkbox" id="menu">
      <label class="library-label" for="menu">Библиотека</label>
      <ul class="mobile-navigation">
        <li><a href="#">Все книги И.Т. Лапкина</a></li>
        <li><a href="#">Новый Завет с толкованием</a></li>
        <li><a href="#">Толкование на Апокалипсис</a></li>
        <li><a href="#">Для слова Божьего нет уз...</a></li>
        <li><a href="#">К истинному Православию</a></li>
        <li><a href="#">Аудио архив</a></li>
        <li><a href="#">Видео архив</a></li>
        <li><a href="#">Стихи</a></li>
        <li><a href="#">Библия</a></li>
        <li><a href="#">Проповеди</a></li>
        <li><a href="#">12 томов Иоанна Златоуста</a></li>
        <li><a href="#">Статьи</a></li>
      </ul>
    </div>
    <div class="mobile-menu">
      <input class="heresy visually-hidden" type="checkbox" id="heresy">
      <label class="heresy-label" for="heresy">От мрака ереси</label>
      <ul class="mobile-navigation">
        <li><a href="">Протестантизм</a></li>
        <li><a href="">Заблуждения католиков</a></li>
        <li><a href="">Мусульманство</a></li>
        <li><a href="">Пособие по беседе с людьми различных убеждений</a></li>
      </ul>
    </div>
    <div class="mobile-menu">
      <input class="prayers visually-hidden" type="checkbox" id="prayers">
      <label class="prayers-label" for="prayers">Молитвы</label>
      <ul class="mobile-navigation">
        <li><a href="">Стопоклонная молитва</a></li>
        <li><a href="">Утреннее правило</a></li>
        <li><a href="">Вечернее правило</a></li>
        <li><a href="">Канон Андрея Критского на 3 ступени</a></li>
        <li><a href="">Подготовка к причастию</a></li>
      </ul>
    </div>
    <div class="mobile-menu">
      <input class="christian visually-hidden" type="checkbox" id="christian">
      <label class="christian-label" for="christian">Христианин</label>
      <ul class="mobile-navigation">
        <li><a href="">Внешний вид христианина</a></li>
        <li><a href="">Дисциплина</a></li>
        <li><a href="">Дисциплина в Храме</a></li>
      </ul>
    </div>
    <div class="mobile-menu">
      <input class="orthodoxy visually-hidden" type="checkbox" id="orthodoxy">
      <label class="orthodoxy-label" for="orthodoxy">Православие</label>
      <ul class="mobile-navigation">
        <li><a href="">Священное Писание</a></li>
        <li><a href="">О молитве</a></li>
        <li><a href="">О покаянии</a></li>
        <li><a href="">О церковной дисциплине</a></li>
        <li><a href="">К истинному крещению</a></li>
        <li><a href="">Об исповеди</a></li>
        <li><a href="">О священстве</a></li>
        <li><a href="">О Церкви</a></li>
        <li><a href="">О посте</a></li>
        <li><a href="">О милостыне</a></li>
        <li><a href="">О лжи</a></li>
        <li><a href="">От объядения</a></li>
        <li><a href="">От пьянства</a></li>
        <li><a href="">От забот житейских</a></li>
        <li><a href="">Отцы и дети</a></li>
        <li><a href="">О слове</a></li>
        <li><a href="">О сне</a></li>
        <li><a href="">О благовестии</a></li>
        <li><a href="">О семье</a></li>
        <li><a href="">О брадобритии</a></li>
        <li><a href="">О табакокурении</a></li>
        <li><a href="">Итак, бодрствуйте</a></li>
        <li><a href="">Божий храм и торговля - несовместимы</a></li>
        <li><a href="">А Я вам говорю: любите врагов ваших</a></li>
        <li><a href="">О воспитании воспитателей</a></li>
        <li><a href="">Можно ли обращаться в гражданский суд христианину?</a></li>
      </ul>
    </div>
    <div class="mobile-menu">
      <input class="answers visually-hidden" type="checkbox" id="answers">
      <label class="answers-label" for="answers">4124 ответа</label>
      <ul class="mobile-navigation">
        <?php $topic_name = get_all_topics();
          foreach ($topic_name as $value) :
        ?>

        <li><a href="questions.php?id=<?php echo $value["topic_id"]; ?>"><?php echo $value["topic_name"]; ?></a></li>

        <?php endforeach; ?>
      </ul>
    </div>
  </nav>
