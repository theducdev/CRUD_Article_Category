<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\DanhMucBaiViet> $danhMucBaiViet
 */
?>
<div class="danhMucBaiViet index content">
    <?= $this->Html->link(__('New Danh Muc Bai Viet'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Danh Muc Bai Viet') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('ten_danh_muc') ?></th>
                    <th><?= $this->Paginator->sort('ten_danh_muc_cha') ?></th>
                    <th><?= $this->Paginator->sort('anh_chinh') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($danhMucBaiViet as $danhMucBaiViet): ?>
                <tr>
                    <td><?= $this->Number->format($danhMucBaiViet->id) ?></td>
                    <td><?= h($danhMucBaiViet->ten_danh_muc) ?></td>
                    <td><?= $danhMucBaiViet->ten_danh_muc_cha === null ? '' : $this->Number->format($danhMucBaiViet->ten_danh_muc_cha) ?></td>
                    <td><?= h($danhMucBaiViet->anh_chinh) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $danhMucBaiViet->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $danhMucBaiViet->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $danhMucBaiViet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $danhMucBaiViet->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
