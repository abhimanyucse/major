<div class="clearfix"> </div>

					<div class="w3ls_mobiles_grid_right_grid2">
						<div class="w3ls_mobiles_grid_right_grid2_left">
							<h3>Showing Results</h3>
						</div>
						<!-- <div class="w3ls_mobiles_grid_right_grid2_right">
							<select name="select_item" class="select_item">
								<option selected="selected">Default sorting</option>
								<option>Sort by popularity</option>
								<option>Sort by average rating</option>
								<option>Sort by newness</option>
								<option>Sort by price: low to high</option>
								<option>Sort by price: high to low</option>
							</select>
						</div> -->
						<div class="clearfix"> </div>
					</div>
					<div class="w3ls_mobiles_grid_right_grid3">
									<?php
									include "connect.php"; 
									$search=$_POST['str'];
									$search=explode(" ",$search);
									$i=0;
									$str="";
									for($i=0;$i<count($search);$i++){
										$str.=$search[$i]."%";
										}
										echo  "Search Result For ".$_POST['str'];
										$q=mysql_query("select * from products where name like '$str'");
										if(isset($_SESSION['type'])&&$_SESSION['type']=='S'){
											$q=mysql_query("select * from products where seller=".$_SESSION['mid']." && name like '$str'");
										}
										if($q!=false)
										while($product=mysql_fetch_array($q)){
									?>
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
							<div class="agile_ecommerce_tab_left mobiles_grid">
								<div>
									
									<div class="hs-wrapper" style="display:flex;justify-content:center;align-items:center">
										<img src="products/<?php echo $product["photo"]; ?>" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom w3_hs_bottom_sub1">
											<ul>
												<li>
													<a href="#"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html"><?php echo $product["name"]; ?></a></h5> 
									<div class="simpleCart_shelfItem">
										<p><span>$<?php echo $product["price"];?></span> <i class="item_price">$<?php echo $product["price"]-$product["price"]*$product["discount"]/100;?></i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls_item" value="<?php echo $product["name"];?>" /> 
											<input type="hidden" name="amount" value="<?php echo $product["price"]-$product["price"]*$product["discount"]/100;?>"/>   
                                            <?php
											
                                            if(isset($_SESSION['type'])&&$_SESSION['type']=='customer'){
												if($product['quantity']>0){
											?>
											<button type="submit" class="w3ls-cart" id="<?php echo $product["pid"]; ?>">Add to cart</button>
                                            <?php
											}
											if($product['quantity']<=0){
												?>
                                       			<b style="color:#F00;">Out Of Stock</b>
                                                <?php
												}
											}
											?>
										</form>
									</div> 
								</div>
							</div>
						</div>
						<?php } ?>
						
						
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>   