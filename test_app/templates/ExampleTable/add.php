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
            <?= $this->Html->link(__('List Example Table'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="exampleTable form content">
            <?= $this->Form->create($exampleTable) ?>
            <fieldset>
                <legend><?= __('Add Example Table') ?></legend>
                <?php
                    echo $this->Form->control('tiny_int_column');
                    echo $this->Form->control('small_int_column');
                    echo $this->Form->control('medium_int_column');
                    echo $this->Form->control('int_column');
                    echo $this->Form->control('big_int_column');
                    echo $this->Form->control('unsigned_int_column');
                    echo $this->Form->control('decimal_column');
                    echo $this->Form->control('float_column');
                    echo $this->Form->control('double_column');
                    echo $this->Form->control('char_column');
                    echo $this->Form->control('varchar_column');
                    echo $this->Form->control('text_column');
                    echo $this->Form->control('mediumtext_column');
                    echo $this->Form->control('longtext_column');
                    echo $this->Form->control('date_column', ['empty' => true]);
                    echo $this->Form->control('time_column', ['empty' => true]);
                    echo $this->Form->control('datetime_column', ['empty' => true]);
                    echo $this->Form->control('timestamp_column');
                    echo $this->Form->control('year_column');
                    echo $this->Form->control('enum_column');
                    echo $this->Form->control('set_column');
                    echo $this->Form->control('boolean_column');
                    echo $this->Form->control('json_column');
                    echo $this->Form->control('point_column');
                    echo $this->Form->control('geometry_column');
                    echo $this->Form->control('polygon_column');
                    echo $this->Form->control('geometrycollection_column');
                    echo $this->Form->control('linestring_column');
                    echo $this->Form->control('multipoint_column');
                    echo $this->Form->control('multilinestring_column');
                    echo $this->Form->control('multipolygon_column');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
