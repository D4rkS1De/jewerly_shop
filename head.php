<? session_start();
   if (isset($_SESSION['basketcounter'])==false)
   {
   	$_SESSION['basketcounter']=0;
   }
   ?>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="shortcut icon" href="images/logo.png" type="image/png">
      <title>Кристалл - Ювелирный нтернет-магазин</title>
      <link rel="stylesheet" type="text/css" href="style.css" />
	  <script>function confirmDelete() {
		if (confirm("Вы подтверждаете удаление?")) {
			return true;
		} else {
			return false;
		}
		}
		</script>
	  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	  <script type="text/javascript">
		$(document).ready(function(){
		$('.spoiler-body').hide();
		$('.spoiler-title').click(function(){
			$(this).toggleClass('opened').toggleClass('closed').next().slideToggle();
			if($(this).hasClass('opened')) {
				$(this).html('Скрыть добавление товара');
			}
			else {
				$(this).html('Добавить товар');
			}
		});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
		$('.spoiler-body2').hide();
		$('.spoiler-title2').click(function(){
			$(this).toggleClass('opened').toggleClass('closed').next().slideToggle();
			if($(this).hasClass('opened')) {
				$(this).html('Скрыть добавление новости дня');
			}
			else {
				$(this).html('Добавить новость дня');
			}
		});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
		$('.spoiler-body3').hide();
		$('.spoiler-title3').click(function(){
			$(this).toggleClass('opened').toggleClass('closed').next().slideToggle();
			if($(this).hasClass('opened')) {
				$(this).html('Скрыть добавление рекламного баннера');
			}
			else {
				$(this).html('Добавить рекламный баннер');
			}
		});
		});
	</script>
   </head>