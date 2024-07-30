<div class="column column-80">
    <div class="users form content">
        <?= $this->Form->create($user) ?>
        <fieldset>
            <?php
                echo $this->Form->control('username');
                echo $this->Form->control('password');
                echo $this->Form->control('email');
                echo $this->Form->control('created_at');
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>