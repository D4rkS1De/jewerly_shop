<?require 'head.php';?>
   <body>
      <div class="main-block">
         <div class="container paper">
            <?require 'header.php';?>
            <div id="main">
               <div id="catalog">
                  <h2 class="post_ttl2">ПАНЕЛЬ УПРАВЛЕНИЯ</h2>
                  <div id="admin_panel" style="background:none;">
                     <? 
                        if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) 
                        {
							echo '<button style="height: 75px; width: 300px; font-size: 22px; margin-top: 15px; background:#DFAA1E; color:#003153;  cursor:pointer;"  class="spoiler-title">Добавить товар</button>
							<div class="spoiler-body" id="addprod">
							   <h2 class="post_ttl">Добавление товаров</h2>
							   <form method="post" enctype="multipart/form-data" action="addproduct.php">
								  <p align="center">Артикул: 
								 <input type="text" size="20" name="productarticle" required>
								  </p>
								  <p align="center">Название: 
								 <input type="text" size="40" name="productname" required>
								  </p>
								  <p align="center">Описание: 
								 <textarea rows="10" cols="40" name="productdesc"></textarea>
								  </p>
								  <p align="center">Цена: 
								 <input type="text" name="productprice" required>
								  </p>
								  <p>Картинка (рекоменд. размер - 200x200px):<br>
								 <input type="file" name="productimg" required>
								  </p>
								  <input style="height: 50px; width: 200px; font-size: 22px; cursor:pointer;" type="submit" value="Добавить товар">
							   </form>
							</div>';
		       
							echo '<br><button style="height: 75px; width: 300px; font-size: 22px; margin-top: 15px; background:#DFAA1E; color:#003153; cursor:pointer;"  class="spoiler-title2">Добавить новость дня</button> <div id="basket" class="spoiler-body2" style="font-size:24px;">
							<p><b>Выбрать новость дня:</b>';
							
							$daynews=file('files/key_news.txt', FILE_IGNORE_NEW_LINES);
							
							echo '<form action="add_daynews.php" method="POST" >
							<p><select name="daynews">
							<option selected value="Мы всегда рады видеть вас в нашем магазине!">Выбрать</option>';
							for ($i=0; $i<count($daynews); $i++)
								{
									echo '<option VALUE="', $daynews[$i] ,'">', $daynews[$i] ,'</option>';
								}
							echo '</select></p>
							<p><input style="height: 50px; width: 200px; font-size: 22px; cursor:pointer;" type="submit" value="Опубликовать"></p>
							</form></p></div>';	
							
							echo '<br><button style="height: 75px; width: 300px; font-size: 22px; margin-top: 15px; background:#DFAA1E; color:#003153; cursor:pointer;"  class="spoiler-title3">Добавить рекламный баннер</button> <div id="basket" class="spoiler-body3" style="font-size:24px;">
							<p><b>Выбрать рекламный баннер:</b><br>
							<form method="post" enctype="multipart/form-data" action="add_banner.php">
							<p>Рекламодатель:<br>
							<input type="text" size="40" name="bannername" required></p>
							<p>Изображение рекламного баннера (рекоменд. размер - 400x200px):<br>
							<input type="file" name="bannerimg" required></p>
							<p>Ссылка на сайт:<br>
							<input type="text" size="40" name="bannersrc" required></p>
							<input style="height: 50px; width: 200px; font-size: 22px; cursor:pointer;"  type="submit" value="Добавить баннер">
							</form>
							</p></div>';	
							
						}
						else {
							echo header('Location:index.php');
						}
                        ?>
                  </div>
               </div>
            </div>
         </div>
         <div class="clear-both"></div>
      </div>
      </div> 
      <?require 'footer.php';?>
   </body>
</html>