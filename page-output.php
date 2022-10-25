<?php get_header(); ?>

<div class="inner task_admin">
  <div class="content">
  </div>

  <div id="table">
    <div class="task_contents">
      <div class="task_content_header todo"></div>
      <div class="task_content_title">ToDo</div>
      <div class="task_new">
        <button class="task_submit" type="button">
          <span class="material-symbols-outlined">add</span>
          <span>追加</span>
        </button>
      </div>
      <ul class="task_list">
      </ul>
    </div>
    <div class="task_contents">
      <div class="task_content_header done"></div>
      <div class="task_content_title">Done</div>
      <div class="task_new">
        <button class="task_submit" type="button">
          <span class="material-symbols-outlined">add</span>
          <span>追加</span>
        </button>
      </div>
      <ul class="task_list"></ul>
    </div>
  </div>
</div>
<div class="task_input">
  <div class="content">
    <textarea name="contact" rows="3"></textarea>
    <button class="task_add" type="button">
      OK
    </button>
  </div>
</div>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/todo.js"></script>
</body>
</html>
