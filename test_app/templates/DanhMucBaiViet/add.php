<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DanhMucBaiViet $danhMucBaiViet
 * @var \Cake\Collection\CollectionInterface|string[] $baiViet
 * @var \Cake\Collection\CollectionInterface|string[] $danhMucCha
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Danh Muc Bai Viet'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="danhMucBaiViet form content">
            <?= $this->Form->create($danhMucBaiViet) ?>
            <fieldset>
                <legend><?= __('Add Danh Muc Bai Viet') ?></legend>
                <?php
                    echo $this->Form->control('ten_danh_muc');
                    echo $this->Form->control('ten_danh_muc_cha', [
                        'type' => 'select',
                        'options' => $danhMucCha,
                        'empty' => __('Chon danh muc cha')
                    ]);
                    echo $this->Form->control('anh_chinh', ['type' => 'file']);
                    echo $this->Form->control('bai_viet._ids', [
                        'type' => 'select',
                        'multiple' => 'checkbox',
                        'options' => $baiViet
                    ]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
