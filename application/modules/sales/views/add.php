
      <div class="mb-4">
       
      </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Agregar Venta</h6>
                    </div>
                    <!-- Card Body -->
                    <form action="<?= $action;?>" method="post">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3 form-group">
                          <label>Fecha<span class="text-danger">*</span></label>
                          <input type="date" name="sales_date" class="form-control"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-3">
                              <select class="form-control" name="product_category" id="product_category">
                                  <option value="">Seleccione Categoría</option>
                                  <?php foreach ($category_list as $key => $category) {?>
                                    <option value="<?=$category->category_id?>"><?=$category->name?></option>
                                  <?php } ?>
                              </select>
                              <?php echo form_error('product_category') ?>
                        </div>
												<div class="col-sm-3">
														<select class="form-control" name="brand" id="prod_brand">
																<option value="">Seleccionar Marca</option>
																<?php foreach ($brand_list as $key => $brand) {?>
																	<option value="<?=$brand->brand_id?>"><?=$brand->name?></option>
																<?php } ?>
														</select>
														<?php echo form_error('brand') ?>
												</div>
												<div class="col-sm-3">
														<select class="form-control" name="product" id="product">

														</select>
														<?php echo form_error('product') ?>
												</div>
												<div class="col-sm-2">
														<input type="text" class="form-control" name="quantity" id="quantity">
														<?php echo form_error('quantity') ?>
												</div>
												<div class="col-sm-1">
													<div class="col-sm-12" align="center">
	                        <button type="button" class="btn btn-success btn-sm btn-icon-split" id="btnAddProduct">
	                          <span class="icon text-white-50"><i class="fas fa-plus"></i></span>
	                        </button>
	                      	</div>
												</div>

                      </div>
											<br/>
                      <!-- attributes block -->
                      <div>
                        <table class="table" id="tbl_attributes">
                          <tr>
                            <th>Producto</th>
                            <th>Atributo</th>
                            <th>Forma de Venta</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Impuestos (%)</th>
                            <th>Total</th>
                            <th>Acción</th>
                          </tr>


                        </table>
                      </div>
                      <!-- end of attributes block -->
                      <input type="hidden" name="sales_id" value="<?php echo $sales_id;?>"/>

                    </div>
                    <div class="card-footer">
                      <a href="<?=admin_url('sales')?>" class="btn btn-danger btn-sm btn-icon-split">
                        <span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span><span class="text">Regresar</span>
                      </a>
                      <button type="submit" class="btn btn-success btn-sm btn-icon-split">
                        <span class="icon text-white-50"><i class="fas fa-check"></i></span><span class="text"><?=$button;?></span>
                      </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
