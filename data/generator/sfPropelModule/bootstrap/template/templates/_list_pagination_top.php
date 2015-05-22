[?php if ($pager->haveToPaginate()): ?]
    [?php include_partial('<?php echo $this->getModuleName() ?>/list_pagination_bottom', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)); ?]
[?php endif; ?]
