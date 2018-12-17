<div id="dashboard" class="container">
    <div class="row">
        <div class="col-md-7 d-none d-sm-block">


            <!-- Quick Links -->
            <div class="container border-bottom pb-4">
                <h4 class="pb-3"><?php $L->p('Quick links') ?></h4>
                <div class="row">
                    <div class="col">
                        <a class="quick-links text-center" style="color: #4586d4" href="<?php echo HTML_PATH_ADMIN_ROOT.'new-content' ?>">
                            <div class="oi oi-plus quick-links-icons"></div>
                            <div><?php $L->p('New content') ?></div>
                        </a>
                    </div>
                    <div class="col border-left border-right">
                        <a class="quick-links text-center" style="color: #4586d4" href="<?php echo HTML_PATH_ADMIN_ROOT.'content' ?>">
                            <div class="oi oi-layers quick-links-icons"></div>
                            <div><?php $L->p('Content') ?></div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="quick-links text-center" href="<?php echo HTML_PATH_ADMIN_ROOT.'edit-user/'.$login->username() ?>">
                            <div class="oi oi-person quick-links-icons"></div>
                            <div><?php $L->p('Profile') ?></div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
