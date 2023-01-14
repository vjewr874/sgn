<?php
if (!defined('IN_ROOT')) {
    exit('Access denied');
}
?>
<div class="col-sm-2">
    <aside class="aside-left">
        <ul>
            <?php if ($this->action == 'apps' && IN_DIST_ON || $this->action == 'sign' && IN_SIGN || $this->action == 'super' && IN_SUPER) {
                ?>
                <li class="<?php echo ($this->module == 'publish' || $this->module == 'publish_update') ? 'active' : '' ?>">
                    <a href="/index/publish/<?php echo $this->action ?>"> <span class="iconfont icon-upload1"></span>上传应用</a>
                </li>
                <?php
            } ?>
            <li class="<?php echo $this->module == 'apps' ? 'active' : '' ?>">
                <a href="/index/apps/<?php echo $this->action ?>"><span class="iconfont icon-41"></span>应用列表</a>
            </li>
            <?php if (IN_SUPER && ($this->action == 'super' || strstr($this->module, 'super'))) { ?>
                <li class="<?php echo $this->module == 'super_code' ? 'active' : '' ?>">
                    <a href="/index/super_code/super"><span class="iconfont icon-pwd"></span>授权码管理</a>
                </li>
                <li class="<?php echo $this->module == 'super_cert' ? 'active' : '' ?>">
                    <a href="/index/super_cert/super"><span class="iconfont icon-gongju"></span>开发者账号</a>
                </li>
            <?php } ?>
        </ul>
    </aside>
</div>
