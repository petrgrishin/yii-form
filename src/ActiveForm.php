<?php
/**
 * @author Petr Grishin <petr.grishin@grishini.ru>
 */

namespace PetrGrishin\Form;


use CHtml;
use PetrGrishin\Widget\BaseWidget;

class ActiveForm extends BaseWidget {
    protected $formId;

    public $action;
    public $method = 'post';

    public function init(){
        echo CHtml::beginForm($this->action, $this->method, array('id' => $this->formId = $this->getView()->getUniqueIdentifier('form')));
    }

    public function run() {
        echo CHtml::endForm();
    }
}
