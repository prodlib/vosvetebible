  <!-- Содержание -->
  <section class="content">

    <?php
      $questions = get_questions();
      foreach ($questions as $value) :
        if ($value["question_number"] == $_GET['id']):
    ?>
      <h2 class="content-title">Вопрос № <?php echo $value["question_number"]; ?></h2>
      <span>Данный вопрос опубликован в книге «‎...открытым оком» И.Т. Лапкин, <?php echo $value["book_volume"]; ?> том.</span>
      <br>
      <span>Количество просмотров: <?php echo $value["views"]; ?></span>
      <br>
      <br>
      <br>
      <span class="question_number"><b>Вопрос:</b></span>
      <br>
      <p><?php echo $value["question"]; ?></p>
      <br>
      <span class="question_number"><b>Ответ:</b></span>
      <br>
      <p><?php echo $value["answer"]; ?></p>

    <?php endif; endforeach; ?>

  </section>
  <!-- / Содержание -->
