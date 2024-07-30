<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BaiViet $baiViet
 * @var string[]|\Cake\Collection\CollectionInterface $danhMucBaiViet
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $baiViet->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $baiViet->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Bai Viet'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="baiViet form content">
            <?= $this->Form->create($baiViet) ?>
            <fieldset>
                <legend><?= __('Edit Bai Viet') ?></legend>
                <?php
                    echo $this->Form->control('tieu_de');
                    echo $this->Form->control('danh_muc_id', ['options' => $danhMucBaiViet, 'empty' => true]);
                    echo $this->Form->control('luot_xem');
                    echo $this->Form->control('bai_viet_noi_bat');
                    if (!empty($baiViet->anh_chinh)): ?>
                        <p>Ảnh hiện tại: <?= h($baiViet->anh_chinh) ?></p>
                    <?php endif;
                    echo $this->Form->control('anh_chinh', ['type' => 'file', 'label' => 'Chon anh chinh']);
                    echo $this->Form->control('hien_thi_muc_luc');
                    echo $this->Form->control('mo_ta_ngan');
                    echo $this->Form->control('noi_dung');
                    echo $this->Form->control('the_bai_viet');
                    if (!empty($baiViet->tep_dinh_kem)): ?>
                        <p>Tệp đính kèm hiện tại: <?= h($baiViet->tep_dinh_kem) ?></p>
                    <?php endif;
                    echo $this->Form->control('tep_dinh_kem', ['type' => 'file', 'label' => 'Chon tep dinh kem']);
                    echo $this->Form->control('duong_dan_video_youtube');
                    echo $this->Form->control('duong_dan');
                    echo $this->Form->control('tieu_de_seo');
                    echo $this->Form->control('tu_khoa_seo');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
