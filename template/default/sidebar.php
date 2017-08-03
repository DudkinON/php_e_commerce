<?php if (isset($categories)):?>
<div class="sb-menu">
    <div class="top-header"><?=$language['catalog'];?></div>
    <ul>
        <?php foreach ($categories as $categoryItem): ?>
        <li>
            <a href="/category/<?=$categoryItem['id']?>">
                <?php
                if (isset($categoryItem['name_'.$_SESSION['language']])){
                    echo $categoryItem['name_'.$_SESSION['language']];
                } else {echo $categoryItem['name'];}
                ?>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
</div>
<?php else:?>
<div class="sb-menu">
    <div class="top-header"><?=$language['catalog'];?></div>
    <p class="text-center text-low"><?php echo $language['no_categories'];?></p>
</div>
<?php endif;?>