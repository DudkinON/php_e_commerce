<section>
    <div class="canvas">
        <div class="range content">
            <div class="column-m-4 column-l-3">
                <?php include(ROOT . '/template/' . TEMPLATE . '/sidebar.php'); ?>
            </div>
            <div class="column-m-4 column-l-6">
                <div class="product-item">
                    <?php if (isset($last_products)): ?>
                        <?php foreach ($last_products as $product): ?>
                            <h1 class="top-header"><?php echo $language['last_products']; ?></h1>
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <a href="/product/<?php echo $product['id']; ?>">
                                            <img src="/server/image/<?php echo $product['image']; ?>"
                                                 alt="<?php echo $product['name'] ?>"/>
                                        </a>
                                        <h2>$<?php echo $product['price'] ?></h2>
                                        <p>
                                            <a href="/product/<?php echo $product['id']; ?>"> <?php echo $product['name']; ?></a>
                                        </p>
                                        <a href="/cart/add/<?php echo $product['id']; ?>"
                                           data-id="<?php echo $product['id']; ?>"
                                           class="btn btn-default add-to-cart">
                                            <i class="fa fa-shopping-cart"></i>add</a>
                                    </div>
                                    <?php if ($product['is_new']): ?>
                                        <img src="/template/<?php echo TEMPLATE; ?>/images/home/new.png" class="new" alt=""/>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <h1 class="top-header"><?php echo $language['last_products']; ?></h1>
                        <p class="text-center"><?php echo $language['no_products'];?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="column-m-4 column-l-3">
                <div class="top-header"><?php echo $language['recommend'];?></div>
            </div>
        </div>
    </div>
</section>