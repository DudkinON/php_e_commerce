<div class="col-sm-3">
    <div class="left-sidebar">
        <?php if (isset($categories)):?>
            <h2><?=$language['catalog'];?></h2>
            <div class="panel-group category-products">
            <?php foreach ($categories as $categoryItem): ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a href="/category/<?=$categoryItem['id']?>">
                            <?php
                            if (isset($categoryItem['name_'.$_SESSION['language']])){
                                echo $categoryItem['name_'.$_SESSION['language']];
                            } else {echo $categoryItem['name'];}
                            ?>
                        </a>
                    </h4>
                </div>
            </div>
            <?php endforeach; ?>
            </div>
        <?php endif;?>
        <?php if (isset($blogCategories)):?>
            <h2><?=$language['categories'];?></h2>
        <div class="panel-group category-products">
            <?php foreach ($blogCategories as $categoryItem): ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a href="/blog/category/<?=$categoryItem['id']?>">
                            <?php
                            if (isset($categoryItem['name_'.$_SESSION['language']])){
                                echo $categoryItem['name_'.$_SESSION['language']];
                            } else{echo $categoryItem['name'];}
                            ?>
                        </a>
                    </h4>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif;?>
    </div>
</div>