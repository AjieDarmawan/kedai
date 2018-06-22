


						<div class="col-md-3 skil" style="width: 35%">
							<div class="continue">Detail Pembelian</div>
							<div class="col-md-12" style="margin-bottom: 1em">
								<input type="text" class="form-control" placeholder="Barcode Scanner">
							</div>
							<div class="clearfix"></div>
							<div class="price-details">
								<table class="table" style="font-size: 12px;">
									<thead>
										<tr>
											<th style="width:10px"></th>
											<th>Barang</th>
											<th>Qty</th>
											<th>Price</th>
										</tr>
									</thead>
									<tbody>
									<tr>
										<td><i class="fa fa-trash-o" style="font-size:15px"></i></td>
										<td>Teh Tarik</td>
										<td><button>-</button><input type="text" value="1" size="1" id=""><button>+</button></td>
										<td>Rp. 20.000,00</td>
									</tr>      
									
									</tbody>
									<tfoot style="font-size: 15px; font-weight: bold;">
										<tr>
											<td colspan="2" class="text-right" style="font-size: 15px">Total</td>
											<td align="center">5</td>
											<td>Rp. 100.000,00</td>
										</tr>
									</tfoot>
								</table>
							
								<div style="background: #f0f0f0">
									<h3>Pembayaran</h3>
									<span>Total</span>
									<span class="total1">Rp. 100.000,00</span>
									<span>Discount</span>
									<span class="total1">---</span>
									<span>Delivery Charges</span>
									<span class="total1">150.00</span>
									<div class="clearfix"></div>				 
								</div>	
								<ul class="total_price">
									<li class="last_price"> <h4>GRANT TOTAL</h4></li>	
									<li style="font-size: 1.5em"><span>Rp. 100.000,00</span></li>
									<div class="clearfix"> </div>
								</ul>
							</div>

							<div class="col-md-6 text-center" style="margin-top: 2em">
								<button type="button" class="btn btn-danger col-md-12">Batal</button>
							</div>
							<div class="col-md-6 text-center" style="margin-top: 2em">
								<button type="button" class="btn btn-success col-md-12">Bayar</button>
							</div>
							
							<div class="clearfix"></div>
						</div>

						<div class="col-md-8 mid-content-top" style="width: 63% !important;">
							<div class="check">	 
								
								<div class="col-md-12 cart-items">
									<div id="tabs" class="tabs">
										<!-- <div class="graph"> -->
											<nav style="z-index: 1000">
												<ul>
													<li class="tab-current"><a href="#section-1" class="icon-shop"><span>Semua</span></a></li>
													<li><a href="#section-2" class="icon-cup"><span>Makanan</span></a></li>
													<li><a href="#section-3" class="icon-food"><span>Minuman</span></a></li>
												</ul>
											</nav>
											<div class="content tab">
												<section id="section-1" class="content-current">
													
													<!-- grids_of_4 -->
													<div class="grids_of_4">
														
														
                                                        <?php
                                                           foreach($makanan as $mak){
                                                        ?>
    
														
													
														<div class="grid1_of_4">
															<div class="content_box"><a href="details.html">
																<img src="<?php echo base_url('file_uploads/makanan/'.$mak->gambar)?>" class="img-responsive" alt="" style="width: 250px; height: 180px">
																</a>
																<h4><a href="details.html"> <?php echo $mak->nama_makanan;?></a></h4>
																<!--  <p>It is a long established fact that</p> -->
																<div class="grid_1 simpleCart_shelfItem">
																
																<div class="item_add"><span class="item_price"><h6>Rp. <?php echo $mak->harga;?></h6></span></div>
																<div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
																</div>
															</div>
                                                        </div>
                                                        
                                                          <?php
                                                           } 
                                                          ?>

                                                          <?php
                                                           foreach($minuman as $min){
                                                        ?>
    
														
													
														<div class="grid1_of_4">
															<div class="content_box"><a href="details.html">
																<img src="<?php echo base_url('file_uploads/minuman/'.$min->gambar)?>" class="img-responsive" alt="" style="width: 250px; height: 180px">
																</a>
																<h4><a href="details.html"> <?php echo $min->nama_minuman;?></a></h4>
																<!--  <p>It is a long established fact that</p> -->
																<div class="grid_1 simpleCart_shelfItem">
																
																<div class="item_add"><span class="item_price"><h6>Rp. <?php echo $min->harga;?></h6></span></div>
																<div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
																</div>
															</div>
                                                        </div>
                                                        
                                                          <?php
                                                           } 
                                                          ?>


														<div class="clearfix"></div>
													</div>		

												</section>
												<section id="section-2">
																									
												</section>
												<section id="section-3">
															
												</section>
																																	
											</div><!-- /content -->
										<!-- </div> -->
									</div>
								</div>
								<script src="js/cbpFWTabs.js"></script>
								<script>
									new CBPFWTabs( document.getElementById( 'tabs' ) );
								</script>

								<div class="clearfix"> </div>
							</div>

							<div class="clearfix"></div>
						</div>
					