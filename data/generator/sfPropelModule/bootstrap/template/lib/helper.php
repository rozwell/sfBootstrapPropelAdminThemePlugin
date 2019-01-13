[?php

/**
 * <?php echo $this->getModuleName() ?> module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage <?php echo $this->getModuleName()."\n" ?>
 * @author     ##AUTHOR_NAME##
 */
abstract class Base<?php echo ucfirst($this->getModuleName()) ?>GeneratorHelper extends sfModelGeneratorHelper
{
    public function getUrlForAction($action)
    {
        return 'list' == $action ? '<?php echo $this->params['route_prefix'] ?>' : '<?php echo $this->params['route_prefix'] ?>_' . $action;
    }

    public function linkToMoveUp($object, $params)
    {
        $attributes = $this->getAttributesFromParams($params);

        if ($object->isFirst()) {
            return '<a href="#" class="btn btn-default btn-xs disabled"'.$this->attributesToHtml($attributes).'><i class="fa fa-arrow-up"></i> ' . __($params['label']) . '</a>';
        }

        if (empty($params['action'])) {
            $params['action'] = 'moveUp';
        }

        if (isset($params['for_dropdown']) && $params['for_dropdown'] == true) {
            $class = 'btn-xs';
        } else {
            $class = 'btn btn-default btn-xs';
        }
        if (isset($params['class_suffix'])) {
            $class .= ' '.$params['class_suffix'];
        }

        return link_to('<i class="fa fa-arrow-up"></i> ' . __($params['label']), '<?php echo $this->params['moduleName'] ?>/' . $params['action'] . '?<?php echo $this->getPrimaryKeyUrlParams('$object', true); ?>, array_merge(array('title' => __($params['label']), 'class' => $class.' sf-move-up'), $attributes));
    }

    public function linkToMoveDown($object, $params)
    {
        $attributes = $this->getAttributesFromParams($params);

        if ($object->isLast()) {
            return '<a href="#" class="btn btn-default btn-xs disabled"'.$this->attributesToHtml($attributes).'><i class="fa fa-arrow-down"></i> ' . __($params['label']) . '</a>';
        }

        if (empty($params['action'])) {
            $params['action'] = 'moveDown';
        }

        if (isset($params['for_dropdown']) && $params['for_dropdown'] == true) {
            $class = 'btn-xs';
        } else {
            $class = 'btn btn-default btn-xs';
        }
        if (isset($params['class_suffix'])) {
            $class .= ' '.$params['class_suffix'];
        }

        return link_to('<i class="fa fa-arrow-down"></i> ' . __($params['label']), '<?php echo $this->params['moduleName'] ?>/' . $params['action'] . '?<?php echo $this->getPrimaryKeyUrlParams('$object', true); ?>, array_merge(array('title' => __($params['label']), 'class' => $class.' sf-move-down'), $attributes));
    }

    public function linkToNew($params)
    {
        return link_to('<i class="fa fa-plus"></i> <span class="hidden-xs hidden-sm">' . __($params['label']) . '</span>', '@' . $this->getUrlForAction('new'), array_merge(array('title' => __($params['label']), 'class' => 'btn btn-success'.(isset($params['class_suffix']) ? ' '.$params['class_suffix'] : '')), $this->getAttributesFromParams($params)));
    }

    public function linkToEdit($object, $params)
    {
        if (isset($params['for_dropdown']) && $params['for_dropdown'] == true) {
            $class = 'btn-xs';
        } else {
            $class = 'btn btn-primary btn-xs';
        }
        if (isset($params['class_suffix'])) {
            $class .= ' '.$params['class_suffix'];
        }

        return link_to('<i class="fa fa-pencil"></i> ' . __($params['label']), $this->getUrlForAction('edit'), $object, array_merge(array('title' => __($params['label']), 'class' => $class.' sf-edit'), $this->getAttributesFromParams($params)));
    }

    public function linkToSave($object, $params)
    {
        return '<button type="submit" class="btn btn-success'.(isset($params['class_suffix']) ? ' '.$params['class_suffix'] : '').'"'.$this->attributesToHtml($this->getAttributesFromParams($params)).' title="' . __($params['label']) . '"><i class="fa fa-save"></i> <span class="hidden-xs hidden-sm">' . __($params['label']) . '</span></button>';
    }

    public function linkToList($params)
    {
        return link_to('<i class="fa fa fa-align-justify"></i> <span class="hidden-xs hidden-sm">' . __($params['label']) . '</span>', '@' . $this->getUrlForAction('list'), array_merge(array('title' => __($params['label']), 'class' => 'btn btn-primary'.(isset($params['class_suffix']) ? ' '.$params['class_suffix'] : '')), $this->getAttributesFromParams($params)));
    }

    public function linkToSaveAndAdd($object, $params)
    {
        if (!$object->isNew()) {
            //return '';
        }

        return '<button type="submit" class="btn btn-success'.(isset($params['class_suffix']) ? ' '.$params['class_suffix'] : '').'"'.$this->attributesToHtml($this->getAttributesFromParams($params)).' name="_save_and_add"><i class="fa fa-save"></i> ' . __($params['label']) . '</button>';
    }

    public function linkToDelete($object, $params)
    {
        if ($object->isNew()) {
            return '';
        }

        return link_to('<i class="fa fa-trash-o"></i> <span class="hidden-xs hidden-sm">' . __($params['label']) . '</span>', $this->getUrlForAction('delete'), $object, array_merge(array('method' => 'delete', 'title' => __($params['label']), 'class' => 'btn btn-danger sf-delete'.(isset($params['class_suffix']) ? ' '.$params['class_suffix'] : ''), 'confirm' => !empty($params['confirm']) ? __($params['confirm']) : ''), $this->getAttributesFromParams($params)));
    }

    public function linkToListDelete($object, $params)
    {
        if ($object->isNew()) {
            return '';
        }

        if (isset($params['for_dropdown']) && $params['for_dropdown'] == true) {
            $class = 'btn-xs';
        } else {
            $class = 'btn btn-danger btn-xs';
        }
        if (isset($params['class_suffix'])) {
            $class .= ' '.$params['class_suffix'];
        }

        return link_to('<i class="fa fa-trash-o"></i> ' . __($params['label']), $this->getUrlForAction('delete'), $object, array_merge(array('method' => 'delete', 'title' => __($params['label']), 'class' => $class.' sf-list-delete', 'confirm' => !empty($params['confirm']) ? __($params['confirm']) : ''), $this->getAttributesFromParams($params)));
    }

    public function linkToAction($params)
    {
        //$action = '@<?php echo $this->params['route_prefix']; ?>?action=' . (isset($params['action']) ?  $params['action'] : sfInflector::camelize($params['label']));
        $action = '<?php echo $this->params['route_prefix']; ?>/' . (isset($params['action']) ?  $params['action'] : sfInflector::camelize($params['label']));

        $link_params = $params['params'];

        if (empty($link_params['class'])) {
            $link_params['class'] = 'btn btn-default';
        }

        return link_to((isset($link_params['icon_class']) ? '<i class="' . $link_params['icon_class'] . '"></i> ' : '') . '<span class="hidden-xs hidden-sm">' . __($params['label']) . '</span>', $action, array_merge(array('title' => __($params['label']), 'class' => $link_params['class']), $this->getAttributesFromParams($params)));
    }

    public function linkToListAction($object, $params)
    {
        $link_params = $params['params'];

        if (empty($link_params['class'])) {
            $link_params['class'] = 'btn btn-default btn-xs';
        }

        if (isset($params['for_dropdown']) && $params['for_dropdown'] == true) {
            $link_params['class'] = 'btn-xs';
        }

        return link_to((isset($link_params['icon_class']) ? '<i class="' . $link_params['icon_class'] . '"></i> ' : '') . __($params['label']), '<?php echo $this->params['moduleName'] ?>/' . $params['action'] . '?<?php echo $this->getPrimaryKeyUrlParams('$object', true); ?>, array_merge(array('title' => __($params['label']), 'class' => '<?php echo $this->params['moduleName'] ?> '.$params['action'].' '.$link_params['class'], 'confirm' => !empty($params['confirm']) ? __($params['confirm']) : ''), $this->getAttributesFromParams($params)));
    }

    public function linkToPrevious($object, $params)
    {
        if (!$object->isNew()) {
            return link_to('<i class="fa fa-arrow-left"></i>', '@<?php echo $this->getUrlForAction('object') ?>?action=previous&<?php echo $this->getPrimaryKeyUrlParams('$object', true); ?>, array_merge(array('title' => __($params['label']), 'class' => 'previous_link btn btn-default'.(isset($params['class_suffix']) ? ' '.$params['class_suffix'] : '')), $this->getAttributesFromParams($params)));
        }

        return '';
    }

    public function linkToNext($object, $params)
    {
        if (!$object->isNew()) {
            return link_to('<i class="fa fa-arrow-right"></i>', '@<?php echo $this->getUrlForAction('object') ?>?action=next&<?php echo $this->getPrimaryKeyUrlParams('$object', true); ?>, array_merge(array('title' => __($params['label']), 'class' => 'next_link btn btn-default'.(isset($params['class_suffix']) ? ' '.$params['class_suffix'] : '')), $this->getAttributesFromParams($params)));
        }

        return '';
    }

    public function toggleBatchId($id)
    {
        if ($this->hasBatchId($id)) {
            $this->removeBatchId($id);
        } else {
            $this->addBatchId($id);
        }
    }

    public function removeBatchId($id)
    {
        $this->setBatchIds(array_filter($this->getBatchIds(), function ($element) use ($id) { return ($element != $id); }));
    }

    public function addBatchId($id)
    {
        if (!$this->hasBatchId($id)) {
            $ids = $this->getBatchIds();
            $ids[] = $id;
            $this->setBatchIds($ids);
        }
    }

    public function hasBatchId($id)
    {
        $ids = $this->getBatchIds();

        return in_array($id, $ids);
    }

    public function getBatchIds()
    {
        return sfContext::getInstance()->getUser()->getAttribute('<?php echo $this->getModuleName() ?>.batch', array(), 'admin_module');
    }

    public function setBatchIds($ids = array())
    {
        return sfContext::getInstance()->getUser()->setAttribute('<?php echo $this->getModuleName() ?>.batch', $ids, 'admin_module');
    }

    public function countBatchIds($ids = array())
    {
        return count($this->getBatchIds());
    }

    public function getMaxPerPage()
    {
        return sfContext::getInstance()->getUser()->getAttribute('<?php echo $this->getModuleName() ?>.max_per_page', sfConfig::get('sf_sfBootstrapPropelAdminTheme_max_per_page'), 'admin_module');
    }
}
