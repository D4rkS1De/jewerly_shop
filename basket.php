<?require 'head.php';?>
   <body>
      <div class="main-block">
         <div class="container paper">
            <?require 'header.php';?>
            <div id="main">
               <div id="catalog">
                  <div id="basket">
                     <? 
                        if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) 
                        					{
                        					echo header('Location:index.php');
                        					}
                        					else
                        					{
                        					$sum = 0;
                            echo '<h2 class="gradient">Корзина товаров</h2><table>
                        	<tr><th>Артикул</th><th>Наименование</th><th>Цена</th><th>Количество</th><th>Сумма</th><th></th></tr>';
                            for ($i = 0; $i < $_SESSION['basketcounter']; $i++) {
                                echo '
                        	<tr>
                        	<td id="basket_article">
                        	<b>', $_SESSION['item' . $i], '</b>
                        	</td>
                        	<td id="basket_item_name">
                        	', $_SESSION['item_name' . $i], '
                        	</td>
                        	<td id="basket_price">', $_SESSION['price' . $i], ' руб.
                        	</td>
                        	<td id="basket_quantity">
                        	<form action="changequantity.php">
                        	<input type="submit" value="-" name="changequantity', $i, '">
                        	 ', $_SESSION['quantity' . $i], ' 
                        	<input type="submit" value="+" name="changequantity', $i, '">
                        	</form>
                        	</td>
                        	<td id="basket_sum">
                        	', $_SESSION['price' . $i] * $_SESSION['quantity' . $i], ' руб.
                        	</td>
                        	<td id="basket_quantity">
                        	<form action="delfrombasket.php">
                        	<input type="submit" value="Удалить из корзины" name="item', $i, '">
                        	</form>
                        	</td>
                        	</tr>
                        	';
                                $sum = $sum + $_SESSION['price' . $i] * $_SESSION['quantity' . $i];
                            }
                            echo '</table>';
                            if ($_SESSION['basketcounter'] == 0) {
                                echo '
                        	<tr>
                        	<td colspan="3">
                        	<br>
                        	Корзина пуста.
                        	<br>
                        	<br>
                        	</td>
                        	</tr>
                        	';
                            }
                        else
                        {
                        	echo '
                        	</table>
                        	<table width="100%" align="center" border="4">
                        	<tr>
                        	<td align="right" colspan="3">
                        	<b>Итого к оплате: ', $sum, ' руб.</b>
                        	<form action="ordering.php">
                        	<br>
                        	<input style="height: 50px; width: 200px; font-size: 22px; cursor:pointer;"  type="submit" value="Оформить заказ">
                        	</form>
                        	</td>
                        	</tr>
                        	</table>
                        	<p style="margin-bottom:150px;"></p>
                        	';
                        }
                        
                        				;}?>
                  </div>
               </div>
            </div>
            <div class="clear-both"></div>
         </div>
      </div>
      <?require 'footer.php';?>
   </body>
</html>