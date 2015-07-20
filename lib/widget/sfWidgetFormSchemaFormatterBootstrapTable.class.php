<?php

class sfWidgetFormSchemaFormatterBootstrapTable extends sfWidgetFormSchemaFormatterTable
{
  protected $decoratorFormat = "<table class=\"table\">\n  %content%</table>";
}
