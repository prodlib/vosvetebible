  <!-- Содержание -->
  <section class="content">

    <?php $topic_name = get_topic_id($_GET['id']); ?>

    <h2 class="content-title">Тема вопросов: <?php echo $topic_name; ?></h2>

    <?php
      $questions = get_questions();
      foreach ($questions as $value) :
        if ($value["topic_id"] == $_GET['id']) {
    ?>

      <br>
      <span class="question_number">Вопрос № <?php echo $value["question_number"]; ?></span>
      <br>
      <a class="question_link" href="question.php?id=<?php echo $value["question_number"]; ?>"><?php echo $value["question"]; ?></a>
      <br>

    <?php } endforeach; ?>

  </section>
  <!-- / Содержание -->
