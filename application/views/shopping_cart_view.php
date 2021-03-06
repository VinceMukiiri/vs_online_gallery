<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Shopping Cart</h1>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Action Buttons -->
                <div class="pull-right">
                    <a href="#" class="btn btn-grey"><i class="glyphicon glyphicon-refresh"></i> UPDATE</a>
                    <a href="#" class="btn"><i class="glyphicon glyphicon-shopping-cart icon-white"></i> CHECK OUT</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Shopping Cart Items -->
                <table class="shopping-cart">
                    <!-- Shopping Cart Item -->
                    <?php
                    $art = new Art_Model();
                    $this->load->model('user_model');
                    $user = new User_Model();
                    ?>
                    <?php
                    foreach ($this->session->userdata('cart') as $item) :
                        $art->load($item[0]);
                        $user->load($art->uploader_user_id);
                        ?>


                        <tr>
                            <!-- Shopping Cart Item Image -->
                            <td class="image">
                                <a href="<?php echo base_url() . 'index.php/view?art=' . $art->art_id ?>">
                                    <img src="<?php echo base_url() . 'artwork/' . $art->file_name ?>" alt="Item Name">
                                </a>
                            </td>
                            <!-- Shopping Cart Item Description & Features -->
                            <td>
                                <div class="cart-item-title">
                                    <a href="<?php echo base_url() . 'index.php/view?art=' . $art->art_id ?>"><?php echo $art->title ?></a>
                                </div>
                                <div class="feature artist">
                                    <p><?php echo $user->first_name . " " . $user->second_name ?></p>
                                </div>
                            </td>
                            <!-- Shopping Cart Item Quantity -->
                            <td class="quantity">
                                <input class="form-control input-sm input-micro" type="text" value="<?php echo $item[1] ?>">
                            </td>
                            <!-- Shopping Cart Item Price -->
                            <td class="price"><?php echo ($art->price * $item[1]) ?></td>
                            <!-- Shopping Cart Item Actions -->
                            <td class="actions">
                                <a href="#" class="btn btn-xs btn-grey"><i class="glyphicon glyphicon-pencil"></i></a>
                                <a href="#" class="btn btn-xs btn-grey"><i class="glyphicon glyphicon-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </table>
                <!-- End Shopping Cart Items -->
            </div>
        </div>
        <div class="row">
            <!-- Promotion Code -->
            <div class="col-md-4  col-md-offset-0 col-sm-6 col-sm-offset-6">
                <div class="cart-promo-code">
                    <h6><i class="glyphicon glyphicon-gift"></i> Have a promotion code?</h6>
                    <div class="input-group">
                        <input class="form-control input-sm" id="appendedInputButton" type="text" value="">
                        <span class="input-group-btn">
                            <button class="btn btn-sm btn-grey" type="button">Apply</button>
                        </span>
                    </div>
                </div>
            </div>
            <!-- Shipment Options -->
            <div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-6">
                <div class="cart-shippment-options">
                    <h6><i class="glyphicon glyphicon-plane"></i> Shippment options</h6>
                    <div class="input-append">
                        <select class="form-control input-sm">
                            <option value="1">Standard - FREE</option>
                            <option value="2">Next day delivery - $10.00</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Shopping Cart Totals -->
            <div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-6">
                <table class="cart-totals">
                    <tr>
                        <td><b>Shipping</b></td>
                        <td>Free</td>
                    </tr>
                    <tr>
                        <td><b>Discount</b></td>
                        <td>- $18.00</td>
                    </tr>
                    <tr class="cart-grand-total">
                        <td><b>Total</b></td>
                        <td><b>$163.55</b></td>
                    </tr>
                </table>
                <!-- Action Buttons -->
                <div class="pull-right">
                    <a href="#" class="btn btn-grey"><i class="glyphicon glyphicon-refresh"></i> UPDATE</a>
                    <a href="#" class="btn"><i class="glyphicon glyphicon-shopping-cart icon-white"></i> CHECK OUT</a>
                </div>
            </div>
        </div>
    </div>
</div>