<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


<title>あきぞー部屋</title>
<meta name="description" content="WordPress独自テンプレートの作成のためのWEB制作です。" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!-- BootStrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/loading.js"></script>
</head>


<body>
<div class="loading">
  <div class="loading-animation"><span style="color:white">もふぴよ</span></div>
</div>

<!-- BootStrap -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
  <a class="navbar-brand icon" href="<?php echo esc_url( home_url( '/' ) ); ?>">あきぞー部屋<span class="material-icons-outlined">sports_tennis</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo get_template_directory_uri(); ?>/blog">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo get_template_directory_uri(); ?>/output">Output</a>
      </li>
    </ul>
  </div>
</nav>