<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ExampleTable> $exampleTable
 */
?>
<div class="exampleTable index content">
    <?= $this->Html->link(__('New Example Table'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Example Table') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('tiny_int_column') ?></th>
                    <th><?= $this->Paginator->sort('small_int_column') ?></th>
                    <th><?= $this->Paginator->sort('medium_int_column') ?></th>
                    <th><?= $this->Paginator->sort('int_column') ?></th>
                    <th><?= $this->Paginator->sort('big_int_column') ?></th>
                    <th><?= $this->Paginator->sort('unsigned_int_column') ?></th>
                    <th><?= $this->Paginator->sort('decimal_column') ?></th>
                    <th><?= $this->Paginator->sort('float_column') ?></th>
                    <th><?= $this->Paginator->sort('double_column') ?></th>
                    <th><?= $this->Paginator->sort('char_column') ?></th>
                    <th><?= $this->Paginator->sort('varchar_column') ?></th>
                    <th><?= $this->Paginator->sort('date_column') ?></th>
                    <th><?= $this->Paginator->sort('time_column') ?></th>
                    <th><?= $this->Paginator->sort('datetime_column') ?></th>
                    <th><?= $this->Paginator->sort('timestamp_column') ?></th>
                    <th><?= $this->Paginator->sort('year_column') ?></th>
                    <th><?= $this->Paginator->sort('enum_column') ?></th>
                    <th><?= $this->Paginator->sort('set_column') ?></th>
                    <th><?= $this->Paginator->sort('boolean_column') ?></th>
                    <th><?= $this->Paginator->sort('point_column') ?></th>
                    <th><?= $this->Paginator->sort('geometry_column') ?></th>
                    <th><?= $this->Paginator->sort('polygon_column') ?></th>
                    <th><?= $this->Paginator->sort('geometrycollection_column') ?></th>
                    <th><?= $this->Paginator->sort('linestring_column') ?></th>
                    <th><?= $this->Paginator->sort('multipoint_column') ?></th>
                    <th><?= $this->Paginator->sort('multilinestring_column') ?></th>
                    <th><?= $this->Paginator->sort('multipolygon_column') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($exampleTable as $exampleTable): ?>
                <tr>
                    <td><?= $this->Number->format($exampleTable->id) ?></td>
                    <td><?= $exampleTable->tiny_int_column === null ? '' : $this->Number->format($exampleTable->tiny_int_column) ?></td>
                    <td><?= $exampleTable->small_int_column === null ? '' : $this->Number->format($exampleTable->small_int_column) ?></td>
                    <td><?= $exampleTable->medium_int_column === null ? '' : $this->Number->format($exampleTable->medium_int_column) ?></td>
                    <td><?= $exampleTable->int_column === null ? '' : $this->Number->format($exampleTable->int_column) ?></td>
                    <td><?= $exampleTable->big_int_column === null ? '' : $this->Number->format($exampleTable->big_int_column) ?></td>
                    <td><?= $exampleTable->unsigned_int_column === null ? '' : $this->Number->format($exampleTable->unsigned_int_column) ?></td>
                    <td><?= $exampleTable->decimal_column === null ? '' : $this->Number->format($exampleTable->decimal_column) ?></td>
                    <td><?= $exampleTable->float_column === null ? '' : $this->Number->format($exampleTable->float_column) ?></td>
                    <td><?= $exampleTable->double_column === null ? '' : $this->Number->format($exampleTable->double_column) ?></td>
                    <td><?= h($exampleTable->char_column) ?></td>
                    <td><?= h($exampleTable->varchar_column) ?></td>
                    <td><?= h($exampleTable->date_column) ?></td>
                    <td><?= h($exampleTable->time_column) ?></td>
                    <td><?= h($exampleTable->datetime_column) ?></td>
                    <td><?= h($exampleTable->timestamp_column) ?></td>
                    <td><?= h($exampleTable->year_column) ?></td>
                    <td><?= h($exampleTable->enum_column) ?></td>
                    <td><?= h($exampleTable->set_column) ?></td>
                    <td><?= h($exampleTable->boolean_column) ?></td>
                    <td><?= h($exampleTable->point_column) ?></td>
                    <td><?= h($exampleTable->geometry_column) ?></td>
                    <td><?= h($exampleTable->polygon_column) ?></td>
                    <td><?= h($exampleTable->geometrycollection_column) ?></td>
                    <td><?= h($exampleTable->linestring_column) ?></td>
                    <td><?= h($exampleTable->multipoint_column) ?></td>
                    <td><?= h($exampleTable->multilinestring_column) ?></td>
                    <td><?= h($exampleTable->multipolygon_column) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $exampleTable->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $exampleTable->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $exampleTable->id], ['confirm' => __('Are you sure you want to delete # {0}?', $exampleTable->id)]) ?>
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
