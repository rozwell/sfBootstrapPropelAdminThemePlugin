<tr class="row-pagination">
    <th colspan="<?php echo count($this->configuration->getValue('list.display')) + ($this->configuration->getValue('list.object_actions') ? 1 : 0) + ($this->configuration->getValue('list.batch_actions') ? 1 : 0) ?>">
        <div class="pull-left">
            [?php echo format_number_choice('[0] no result|[1] 1 result|(1,+Inf] %1% results', array('%1%' => $pager->getNbResults()), $pager->getNbResults(), 'sf_admin') ?]
            [?php if ($pager->haveToPaginate()): ?]
                [?php echo __('(page %%page%%/%%nb_pages%%)', array('%%page%%' => $pager->getPage(), '%%nb_pages%%' => $pager->getLastPage()), 'sf_admin') ?]
            [?php endif; ?]

            <?php if ($this->configuration->getValue('list.batch_actions')): ?>
            | [?php include_partial('<?php echo $this->getModuleName() ?>/chosen_datasets', array('helper' => $helper)) ?]
            <?php endif; ?>
        </div>

        [?php if ($pager->haveToPaginate()): ?]
            <div class="pull-right">
                [?php include_partial('<?php echo $this->getModuleName() ?>/pagination', array('pager' => $pager)) ?]
            </div>
        [?php endif; ?]
    </th>
</tr>
