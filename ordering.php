<?require 'head.php';?>
   <body>
      <div class="main-block">
         <div class="container paper">
            <?require 'header.php';?>
            <div id="main">
               <div id="catalog">
                   <h2 class="post_ttl2">ОФОРМЛЕНИЕ ЗАКАЗА</h2>
                  <div id="order">
                     <?php
                        if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) {
                            echo header('Location:index.php');
                        } else {
                            echo '<h2 class="gradient" style="margin-bottom:-25px;">Товары</h2><table>
                                                <tr><th>Артикул</th><th>Наименование</th><th>Цена</th><th>Количество</th><th>Сумма к оплате</th></tr>';
                            $sum = 0;
                            for ($i = 0; $i < $_SESSION['basketcounter']; $i++) {
                                $sum = $sum + $_SESSION['price' . $i] * $_SESSION['quantity' . $i];
                                echo ' <tr><td><b>', $_SESSION['item' . $i], '</b></td><td>', $_SESSION['item_name' . $i], '</td><td>', $_SESSION['price' . $i], ' руб.</td><td>', $_SESSION['quantity' . $i], ' шт. </td>
                                       <td> ', $_SESSION['price' . $i] * $_SESSION['quantity' . $i], ' руб.</td>
                                        <br>';
                            }
                           echo '
                              <tr>
                                 <td style="background:#e6e6fa;"><b>Итого к оплате: </b></td>
                                 <td style="background:#e6e6fa; text-align: right; padding-right:40px;" colspan="4"><b>', $sum, ' руб.</b></td>
                              </table>
                              <h2 class="gradient" style="margin-top:15px;">Заполнение формы заказа</h2>
                              <form action="confirmordering.php" method="get">
                                 <input type="text" size="30" name="fullname" required placeholder="Ф.И.О."><br><br>
                                 <input type="text" size="30" name="phonenumber" required placeholder="Номер телефона"><br><br>
                                 <input type="text" size="30" name="email" required placeholder="E-mail"><br><br>
								 <select name="address">
								 <option selected value="Не выбрано">Место получения (Самовывоз из магазина)</option>
								 <option value="Магазин на ул.Кирова 85">Магазин на ул.Кирова 85</option>
								 <option value="Магазин на ул.Ленина 24">Магазин на ул.Ленина 24</option>
								 </select><br><br>
                                 </td>
                                 </tr>
                                 <tr>
                                    <td align="right" colspan="3">
                                       <br>
                                       <input style="height: 50px; width: 250px; font-size: 22px; cursor:pointer;"  type="submit" value="Подтвердить заказ" style="margin-top:20px;">
                                       <br>
                                       <br>
                              </form>
                              </td>
                              </tr>
                              </table>';
                        }
                        ?>
                  </div>
               </div>
            </div>
            <div class="clear-both"></div>
         </div>
      </div>
      <?require 'footer.php';?>
      </div>
   </body>
</html>
