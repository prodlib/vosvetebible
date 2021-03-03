<!-- Правая боковая панель -->
<section class="sidebar-right">
  <h2>Ответы на 4124 вопроса, по темам:</h2>
  <ul class="sidebar-list">
    <?php $topic_name = get_all_topics();
      foreach ($topic_name as $value) :
    ?>

    <li><a href="questions.php?id=<?php echo $value["topic_id"]; ?>"><?php echo $value["topic_name"]; ?></a></li>

    <?php endforeach; ?>

  </ul>
</section>
