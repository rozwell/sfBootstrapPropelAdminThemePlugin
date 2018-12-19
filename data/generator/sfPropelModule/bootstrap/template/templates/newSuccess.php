[?php use_helper('I18N', 'Date') ?]

[?php include_partial('<?php echo $this->getModuleName() ?>/assets') ?]

[?php echo form_tag_for($form, '@<?php echo $this->params['route_prefix'] ?>', array('class' => 'form-horizontal sf_admin_form', 'role' => 'form')) ?]
    <div class="row form-actions-top">
        <div class="col-lg-12">
            [?php include_partial('<?php echo $this->getModuleName() ?>/new_title', array('helper' => $helper, '<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'form' => $form, 'configuration' => $configuration)); ?]
            <div class="pull-right">
                [?php include_partial('<?php echo $this->getModuleName() ?>/form_actions_top', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?]
            </div>
        </div>
    </div>

    [?php include_partial('<?php echo $this->getModuleName() ?>/flashes') ?]

    [?php include_partial('<?php echo $this->getModuleName() ?>/form_header', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'form' => $form, 'configuration' => $configuration)) ?]

    [?php include_partial('<?php echo $this->getModuleName() ?>/form', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?]

    <div class="row form-actions-bottom">
        <div class="col-lg-12">
            <div class="pull-right">
                [?php include_partial('<?php echo $this->getModuleName() ?>/form_actions_bottom', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?]
            </div>
        </div>
    </div>
</form>

[?php include_partial('<?php echo $this->getModuleName() ?>/form_footer', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'form' => $form, 'configuration' => $configuration)) ?]
