<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                    <div class="panel-group category-products">
                        <?php foreach ($categories as $categoryItem): ?>                       
                            <h4 class="panel-title">
                                <a class="panel panel-default panel-heading" href="/category/<?php echo $categoryItem['id']; ?>">
                                    <?php echo $categoryItem['name']; ?>
                                </a>
                            </h4>                         
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="view-product">
                                <img src="<?php echo Product::getImage($product['id']); ?>" alt="" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="product-information"><!--/product-information-->

                                <?php if ($product['is_new']): ?>
                                    <img src="/template/images/product-details/new.jpg" class="newarrival" alt="" />
                                <?php endif; ?>

                                <h2><?php echo $product['name']; ?></h2>
                                <p>Код товара: <?php echo $product['code']; ?></p>
                                <h5><b>Описание товара:</b></h5>
                                <p><?php echo $product['description']; ?></p>
                                <p><b>Наличие: </b><u><?php echo Product::getAvailabilityText($product['availability']); ?></u></p>   
                                <br>                                
                                <h2><span class="label label-danger"><?php echo $product['price']; ?> руб.</span></h2>
                                    <a href="#" data-id="<?php echo $product['id']; ?>"
                                       class="btn btn-default add-to-cart">
                                        <i class="fa fa-shopping-cart"></i>В корзину</a>                                                 
                            </div><!--/product-information-->
                        </div>
                    </div>                  
                </div><!--/product-details-->

            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>