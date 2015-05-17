[?php use_helper('I18N', 'Date'); ?]
[?php include_partial('<?php echo $this->getModuleName() ?>/assets'); ?]

<div class="row list-top">
    <div class="col-lg-12">
        [?php include_partial('<?php echo $this->getModuleName() ?>/list_title', array('helper' => $helper)); ?]
        <p class="pull-right list-actions-top">
            [?php include_partial('<?php echo $this->getModuleName() ?>/list_actions_top', array('helper' => $helper)); ?]
        </p>
    </div>
</div>

[?php include_partial('<?php echo $this->getModuleName() ?>/flashes'); ?]

[?php include_partial('<?php echo $this->getModuleName() ?>/list_header', array('pager' => $pager)); ?]

<?php if ($this->configuration->hasFilterForm()): ?>
    [?php include_partial('<?php echo $this->getModuleName() ?>/filters', array('form' => $filters, 'configuration' => $configuration)); ?]
<?php endif; ?>

<?php if ($this->configuration->getValue('list.batch_actions')): ?>
    <form action="[?php echo url_for('<?php echo $this->getUrlForAction('collection') ?>', array('action' => 'batch')); ?]" method="post" class="form-inline">
<?php endif; ?>
    [?php include_partial('<?php echo $this->getModuleName() ?>/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)); ?]

    <div class="row list-bottom">
        <div class="col-lg-12">
            <div class="pull-left">
                [?php include_partial('<?php echo $this->getModuleName() ?>/list_batch_actions', array('helper' => $helper)); ?]
            </div>

            <div class="pull-right list-actions-bottom form-inline">
                [?php include_partial('<?php echo $this->getModuleName() ?>/list_max_per_page', array('helper' => $helper, 'configuration' => $configuration, 'value' => $pager->getMaxPerPage())) ?]
                [?php include_partial('<?php echo $this->getModuleName() ?>/list_actions_bottom', array('helper' => $helper)) ?]
            </div>
        </div>
    </div>
<?php if ($this->configuration->getValue('list.batch_actions')): ?>
    </form>
<?php endif; ?>

[?php include_partial('<?php echo $this->getModuleName() ?>/list_footer', array('pager' => $pager)); ?]
