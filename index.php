<?require 'head.php';?>
   <body>
      <div class="main-block">
         <div class="container paper">
            <?require 'header.php';?>
            <div id="main">
               <div id="catalog">
                  <div id="banner">
                     <?php
                        $bannernames=file('files/bannernames.txt', FILE_IGNORE_NEW_LINES);
                        $bannerimgs=file('files/bannerimgs.txt', FILE_IGNORE_NEW_LINES);
                        $bannersrcs=file('files/bannersrcs.txt', FILE_IGNORE_NEW_LINES);
                        for ($i=0; $i<count($bannernames); $i++)
                        {
                        	echo '<a href="',$bannersrcs[$i],'"target="_blank"><img src="banner/',$bannerimgs[$i],'" alt="',$bannernames[$i],'"></a>';
                        }
                        ?>
                  </div>
                  <?php
					 $productarticles=file('files/productarticles.txt', FILE_IGNORE_NEW_LINES);
                     $productnames=file('files/productnames.txt', FILE_IGNORE_NEW_LINES);
                     $productdescs=file('files/productdescs.txt', FILE_IGNORE_NEW_LINES);
                     $productimgs=file('files/productimgs.txt', FILE_IGNORE_NEW_LINES);
                     $productprices=file('files/productprices.txt', FILE_IGNORE_NEW_LINES);
                     for ($i=0; $i<count($productarticles); $i++)
                     {
                     	echo '<div id="product">
			     <div style="width:300px; height: 300px; margin:10px; float:left;">
				 <img src="products/',$productimgs[$i],'" alt="',$productnames[$i],'"/><br><br><p style="margin-left:40px; font-size: 28px;">Цена: ',$productprices[$i],'руб.</p></div>
				 <div style="width:550px; height: auto; margin: 20 10 0 40; float:left;"<p align="center" style="color:#dadada; font-size: 28px;"> ',$productnames[$i],'</p><p align="left" style="margin-top:20px;text-align:justify; font-size: 22px;">Артикул: ',$productarticles[$i], '<br>' , $productdescs[$i], '</p></div>';
                     
                      	if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) {
			     echo '<form action="delproduct.php" method="GET" >
			     <center><input style="margin-top:5px;" type="submit" value="Удалить товар" onclick="return confirmDelete();" name="product',$i,'"/></center>
			     </form>';
			}
			else
			{
			     echo '<form action="addtobasket.php">';
			     $is_item_added[$i]=false;
			     for ($j=0; $j<$_SESSION['basketcounter']; $j++) {
			     	if ($_SESSION['item'.$j]==$productarticles[$i])
			     	{
			     		echo '<center><input style="margin-top:5px;" type="submit" value="Добавлено в корзину" name="product', $i, '" disabled></center>';
			     		$is_item_added[$i]=true;
			     	}
			     }
			     if ($is_item_added[$i]==false)
			     {
			     echo '<center><input style="margin-top:5px;" type="submit" value="Добавить в корзину" name="product', $i, '"></center>';
			     }
			     echo '</form>';
			};echo'</div>';
		     }	
		       
                     	
                     ?>
               </div>
            </div>
            <div class="clear-both"></div>
         </div>
      </div>
      <?require 'footer.php';?>
   </body>
</html>
