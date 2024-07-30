<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BaiViet $baiViet
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Bai Viet'), ['action' => 'edit', $baiViet->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Bai Viet'), ['action' => 'delete', $baiViet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $baiViet->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Bai Viet'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Bai Viet'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="baiViet view content">
            <h3><?= h($baiViet->tieu_de) ?></h3>
            <table>
                <tr>
                    <th><?= __('Tieu De') ?></th>
                    <td><?= h($baiViet->tieu_de) ?></td>
                </tr>
                <tr>
                    <th><?= __('Danh Muc Bai Viet') ?></th>
                    <td><?= $baiViet->hasValue('danh_muc_bai_viet') ? $this->Html->link($baiViet->danh_muc_bai_viet->ten_danh_muc, ['controller' => 'DanhMucBaiViet', 'action' => 'view', $baiViet->danh_muc_bai_viet->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Anh Chinh') ?></th>
                    <td><?= h($baiViet->anh_chinh) ?></td>
                </tr>
                <tr>
                    <th><?= __('Duong Dan Video Youtube') ?></th>
                    <td><?= h($baiViet->duong_dan_video_youtube) ?></td>
                </tr>
                <tr>
                    <th><?= __('Duong Dan') ?></th>
                    <td><?= h($baiViet->duong_dan) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tieu De Seo') ?></th>
                    <td><?= h($baiViet->tieu_de_seo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($baiViet->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Luot Xem') ?></th>
                    <td><?= $baiViet->luot_xem === null ? '' : $this->Number->format($baiViet->luot_xem) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bai Viet Noi Bat') ?></th>
                    <td><?= $baiViet->bai_viet_noi_bat ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Hien Thi Muc Luc') ?></th>
                    <td><?= $baiViet->hien_thi_muc_luc ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Mo Ta Ngan') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($baiViet->mo_ta_ngan)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Noi Dung') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($baiViet->noi_dung)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('The Bai Viet') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($baiViet->the_bai_viet)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Tep Dinh Kem') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($baiViet->tep_dinh_kem)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Tu Khoa Seo') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($baiViet->tu_khoa_seo)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
