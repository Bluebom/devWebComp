<?php
if (isset($_POST['request']) && $_POST['request'] == 'name_return') {
  $news = ['título da minha notícia 1', 'título da minha notícia 2'];
  die(json_encode($news));
}
