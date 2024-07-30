<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BaiViet $baiViet
 * @var \Cake\Collection\CollectionInterface|string[] $danhMucBaiViet
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Bai Viet'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="baiViet form content">
            <form action="/article/save" method="post">
                <fieldset>
                    <legend><?= __('Add Bai Viet') ?></legend>

                    <input name="tieu_de" type="text" value="">
                    <input name="noi_dung" type="text" value="">
                    <button type="submit">
                        Tạo
                    </button>
                </fieldset>
            </form>
            

        </div>
    </div>
</div>
