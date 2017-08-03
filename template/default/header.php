<header>
    <div class="canvas">
        <div class="range">
            <div class="column-l-12">
                <div class="nav-container">
                    <div class="logo">
                        <a href="/">
                            <span class="abr">don</span>
                            <span>e-Commerce</span>
                        </a>
                    </div>
                    <div class="nav-links">
                        <a class="nav-right-item" href="#sing-up"><?php echo $language['sign_in'];?></a>
                        <div class="nav-right-item nav-slider-btn"><?php echo $language['language'];?></div>
                        <div class="nav-list-container">
                            <ul class="drop-down-menu">
                                <li><a href="/lang/ru"><?php echo $language['ru'];?></a></li>
                                <li><a href="/lang/en"><?php echo $language['en'];?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- TODO: the modal window -->
<a href="#x" class="overlay" id="sing-up"></a>
<div class="popup">
    <a class="close" href="#close"><i class="fa fa-times" aria-hidden="true"></i></a>
    <div class="form-modal offset-1 column-10">
        <form action="/user/login" method="post">
            <h4 class="text-center"><?php echo $language['sign_in'];?></h4>
            <hr class="m-tb-30">
            <input name="email" placeholder="<?php echo $language['email'];?>" class="form-ctrl">
            <input name="password" placeholder="<?php echo $language['password'];?>" class="form-ctrl" type="password">
            <hr class="m-tb-30">
            <div class="text-center">
                <a href="/user/registration" class="button button-main m-s-20"><?php echo $language['sign_up'];?></a>
                <button name="sign_in" class="button button-main m-s-20"><?php echo $language['sign_in'];?></button>
            </div>
        </form>
    </div>
</div>