<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DanhMucBaiViet $danhMucBaiViet
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Danh Muc Bai Viet'), ['action' => 'edit', $danhMucBaiViet->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Danh Muc Bai Viet'), ['action' => 'delete', $danhMucBaiViet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $danhMucBaiViet->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Danh Muc Bai Viet'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Danh Muc Bai Viet'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="danhMucBaiViet view content">
            <h3><?= h($danhMucBaiViet->ten_danh_muc) ?></h3>
            <table>
                <tr>
                    <th><?= __('Ten Danh Muc') ?></th>
                    <td><?= h($danhMucBaiViet->ten_danh_muc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Anh Chinh') ?></th>
                    <td><?= h($danhMucBaiViet->anh_chinh) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($danhMucBaiViet->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ten Danh Muc Cha') ?></th>
                    <td><?= $danhMucBaiViet->ten_danh_muc_cha === null ? '' : $this->Number->format($danhMucBaiViet->ten_danh_muc_cha) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Bai Viet') ?></h4>
                <?php if (!empty($danhMucBaiViet->bai_viet)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Tieu De') ?></th>
                            <th><?= __('Danh Muc Id') ?></th>
                            <th><?= __('Luot Xem') ?></th>
                            <th><?= __('Bai Viet Noi Bat') ?></th>
                            <th><?= __('Anh Chinh') ?></th>
                            <th><?= __('Hien Thi Muc Luc') ?></th>
                            <th><?= __('Mo Ta Ngan') ?></th>
                            <th><?= __('Noi Dung') ?></th>
                            <th><?= __('The Bai Viet') ?></th>
                            <th><?= __('Tep Dinh Kem') ?></th>
                            <th><?= __('Duong Dan Video Youtube') ?></th>
                            <th><?= __('Duong Dan') ?></th>
                            <th><?= __('Tieu De Seo') ?></th>
                            <th><?= __('Tu Khoa Seo') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($danhMucBaiViet->bai_viet as $baiViet) : ?>
                        <tr>
                            <td><?= h($baiViet->id) ?></td>
                            <td><?= h($baiViet->tieu_de) ?></td>
                            <td><?= h($baiViet->danh_muc_id) ?></td>
                            <td><?= h($baiViet->luot_xem) ?></td>
                            <td><?= h($baiViet->bai_viet_noi_bat) ?></td>
                            <td><?= h($baiViet->anh_chinh) ?></td>
                            <td><?= h($baiViet->hien_thi_muc_luc) ?></td>
                            <td><?= h($baiViet->mo_ta_ngan) ?></td>
                            <td><?= h($baiViet->noi_dung) ?></td>
                            <td><?= h($baiViet->the_bai_viet) ?></td>
                            <td><?= h($baiViet->tep_dinh_kem) ?></td>
                            <td><?= h($baiViet->duong_dan_video_youtube) ?></td>
                            <td><?= h($baiViet->duong_dan) ?></td>
                            <td><?= h($baiViet->tieu_de_seo) ?></td>
                            <td><?= h($baiViet->tu_khoa_seo) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'BaiViet', 'action' => 'view', $baiViet->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'BaiViet', 'action' => 'edit', $baiViet->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'BaiViet', 'action' => 'delete', $baiViet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $baiViet->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
