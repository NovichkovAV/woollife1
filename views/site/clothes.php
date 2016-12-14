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
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center"></h2>
                    <?php foreach ($latestProducts as $product): ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="<?php echo Product::getImage($product['id']); ?>" alt="" /> 
                                        <h2><span class="label label-danger"><?php echo $product['price']; ?> руб.</span></h2>
                                        <p><?php echo $product['name']; ?></p>                                        
                                        <a class="btn btn-primary navbar-btn" href="/product/<?php echo $product['id']; ?>" role="button">Подробнее</a>
                                        <a href="#" class="btn btn-default add-to-cart" data-id="<?php echo $product['id']; ?>"><i class="fa fa-shopping-cart"></i>В корзину</a>                              
                                    </div>
                                    <?php if ($product['is_new']): ?>
                                        <img src="/template/images/home/new.png" class="new" alt="" />
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div><!--features_items-->
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>