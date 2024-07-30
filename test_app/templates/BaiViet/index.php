
<div class="baiViet index content">
    <?= $this->Html->link(__('New Bai Viet'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Bai Viet') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
            
                </tr>
            </thead>
            <tbody>
                <?php foreach ($records as $baiViet): ?>
                <tr>
                    <td><?= $this->Number->format($baiViet->id) ?></td>
                    <td><?= h($baiViet->tieu_de) ?></td>
                    <td><?= $baiViet->hasValue('danh_muc_bai_viet') ? $this->Html->link($baiViet->danh_muc_bai_viet->ten_danh_muc, ['controller' => 'DanhMucBaiViet', 'action' => 'view', $baiViet->danh_muc_bai_viet->id]) : '' ?></td>
                    <td><?= $baiViet->luot_xem === null ? '' : $this->Number->format($baiViet->luot_xem) ?></td>
                    <td><?= h($baiViet->bai_viet_noi_bat) ?></td>
                    <td><?= h($baiViet->anh_chinh) ?></td>
                    <td><?= h($baiViet->hien_thi_muc_luc) ?></td>
                    <td><?= h($baiViet->duong_dan_video_youtube) ?></td>
                    <td><?= h($baiViet->duong_dan) ?></td>
                    <td><?= h($baiViet->tep_dinh_kem) ?></td>
                    <td><?= h($baiViet->tieu_de_seo) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $baiViet->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $baiViet->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $baiViet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $baiViet->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
         
        </ul>
        
    </div>
</div>
