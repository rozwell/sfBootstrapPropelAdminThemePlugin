<div class="panel panel-default">
        [?php $panelBody = '' ?]
        [?php foreach ($fields as $name => $field): ?]
            [?php if ((isset($form[$name]) && $form[$name]->isHidden()) || (!isset($form[$name]) && $field->isReal())) continue; ?]

            [?php $panelBody .= get_partial('<?php echo $this->getModuleName() ?>/form_field', array(
                'name'       => $name,
                'attributes' => $field->getConfig('attributes', array()),
                'label'      => $field->getConfig('label'),
                'help'       => $field->getConfig('help'),
                'form'       => $form,
                'field'      => $field
            )); ?]
        [?php endforeach; ?]
    [?php if ($fieldset != 'NONE'): ?]
        <div class="panel-heading">[?php echo __($fieldset, array(), '<?php echo $this->getI18nCatalogue(); ?>') ?]</div>
    [?php endif; ?]
    [?php if($panelBody): ?]
        <div class="panel-body">
            [?php echo $panelBody ?]
        </div>
    [?php endif; ?]
</div>
