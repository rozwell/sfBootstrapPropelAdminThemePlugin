<?php

class sfWidgetFormSchemaBootstrap extends sfWidgetFormSchema
{
    //public function __construct($fields = null, array $options = array(), array $attributes = array(), array $labels = array(), array $helps = array())
    //{
    //    $this->setDefaultFormFormatterName('bootstrapTable');
    //
    //    parent::__construct($fields,
    //        $options,
    //        $attributes,
    //        $labels,
    //        $helps
    //    );
    //}

    public function render($name, $values = array(), $attributes = array(), $errors = array())
    {
        foreach($this->positions as $name){
            if(get_class($this->fields[$name]) == 'sfWidgetFormInputCheckbox'){
                continue;
            }
            if(!array_key_exists($name, $attributes)){
                $attributes[$name] = ['class' => 'form-control'];
            }
        }

        return parent::render($name, $values, $attributes, $errors);
    }
}
