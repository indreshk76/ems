<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $customer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="customers form large-9 medium-8 columns content">
    <?= $this->Form->create($customer) ?>
    <fieldset>
        <legend><?= __('Add Customer') ?></legend>
        <?php
            echo $this->Form->control('full_name');
            echo $this->Form->control('mobile_number');
            echo $this->Form->control('pin_code');
            echo $this->Form->control('address');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
