<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ExampleTable $exampleTable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Example Table'), ['action' => 'edit', $exampleTable->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Example Table'), ['action' => 'delete', $exampleTable->id], ['confirm' => __('Are you sure you want to delete # {0}?', $exampleTable->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Example Table'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Example Table'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="exampleTable view content">
            <h3><?= h($exampleTable->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Char Column') ?></th>
                    <td><?= h($exampleTable->char_column) ?></td>
                </tr>
                <tr>
                    <th><?= __('Varchar Column') ?></th>
                    <td><?= h($exampleTable->varchar_column) ?></td>
                </tr>
                <tr>
                    <th><?= __('Year Column') ?></th>
                    <td><?= h($exampleTable->year_column) ?></td>
                </tr>
                <tr>
                    <th><?= __('Enum Column') ?></th>
                    <td><?= h($exampleTable->enum_column) ?></td>
                </tr>
                <tr>
                    <th><?= __('Set Column') ?></th>
                    <td><?= h($exampleTable->set_column) ?></td>
                </tr>
                <tr>
                    <th><?= __('Point Column') ?></th>
                    <td><?= h($exampleTable->point_column) ?></td>
                </tr>
                <tr>
                    <th><?= __('Geometry Column') ?></th>
                    <td><?= h($exampleTable->geometry_column) ?></td>
                </tr>
                <tr>
                    <th><?= __('Polygon Column') ?></th>
                    <td><?= h($exampleTable->polygon_column) ?></td>
                </tr>
                <tr>
                    <th><?= __('Geometrycollection Column') ?></th>
                    <td><?= h($exampleTable->geometrycollection_column) ?></td>
                </tr>
                <tr>
                    <th><?= __('Linestring Column') ?></th>
                    <td><?= h($exampleTable->linestring_column) ?></td>
                </tr>
                <tr>
                    <th><?= __('Multipoint Column') ?></th>
                    <td><?= h($exampleTable->multipoint_column) ?></td>
                </tr>
                <tr>
                    <th><?= __('Multilinestring Column') ?></th>
                    <td><?= h($exampleTable->multilinestring_column) ?></td>
                </tr>
                <tr>
                    <th><?= __('Multipolygon Column') ?></th>
                    <td><?= h($exampleTable->multipolygon_column) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($exampleTable->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tiny Int Column') ?></th>
                    <td><?= $exampleTable->tiny_int_column === null ? '' : $this->Number->format($exampleTable->tiny_int_column) ?></td>
                </tr>
                <tr>
                    <th><?= __('Small Int Column') ?></th>
                    <td><?= $exampleTable->small_int_column === null ? '' : $this->Number->format($exampleTable->small_int_column) ?></td>
                </tr>
                <tr>
                    <th><?= __('Medium Int Column') ?></th>
                    <td><?= $exampleTable->medium_int_column === null ? '' : $this->Number->format($exampleTable->medium_int_column) ?></td>
                </tr>
                <tr>
                    <th><?= __('Int Column') ?></th>
                    <td><?= $exampleTable->int_column === null ? '' : $this->Number->format($exampleTable->int_column) ?></td>
                </tr>
                <tr>
                    <th><?= __('Big Int Column') ?></th>
                    <td><?= $exampleTable->big_int_column === null ? '' : $this->Number->format($exampleTable->big_int_column) ?></td>
                </tr>
                <tr>
                    <th><?= __('Unsigned Int Column') ?></th>
                    <td><?= $exampleTable->unsigned_int_column === null ? '' : $this->Number->format($exampleTable->unsigned_int_column) ?></td>
                </tr>
                <tr>
                    <th><?= __('Decimal Column') ?></th>
                    <td><?= $exampleTable->decimal_column === null ? '' : $this->Number->format($exampleTable->decimal_column) ?></td>
                </tr>
                <tr>
                    <th><?= __('Float Column') ?></th>
                    <td><?= $exampleTable->float_column === null ? '' : $this->Number->format($exampleTable->float_column) ?></td>
                </tr>
                <tr>
                    <th><?= __('Double Column') ?></th>
                    <td><?= $exampleTable->double_column === null ? '' : $this->Number->format($exampleTable->double_column) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Column') ?></th>
                    <td><?= h($exampleTable->date_column) ?></td>
                </tr>
                <tr>
                    <th><?= __('Time Column') ?></th>
                    <td><?= h($exampleTable->time_column) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datetime Column') ?></th>
                    <td><?= h($exampleTable->datetime_column) ?></td>
                </tr>
                <tr>
                    <th><?= __('Timestamp Column') ?></th>
                    <td><?= h($exampleTable->timestamp_column) ?></td>
                </tr>
                <tr>
                    <th><?= __('Boolean Column') ?></th>
                    <td><?= $exampleTable->boolean_column ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Text Column') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($exampleTable->text_column)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Mediumtext Column') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($exampleTable->mediumtext_column)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Longtext Column') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($exampleTable->longtext_column)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Json Column') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($exampleTable->json_column)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
