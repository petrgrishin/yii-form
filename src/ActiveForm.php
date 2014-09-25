<?php
/**
 * @author Petr Grishin <petr.grishin@grishini.ru>
 */

namespace PetrGrishin\Form;


use CHtml;
use PetrGrishin\Widget\BaseWidget;

class ActiveForm extends BaseWidget {
    public $action;
    public $method = 'post';
    public $class = '';

    public function init() {
        ob_start();
    }

    public function textField($name, $value = null) {
        echo CHtml::textField($name, $value, array('class' => 'form-control'));
    }

    public function passwordField($name, $value = null) {
        echo CHtml::passwordField($name, $value, array('class' => 'form-control'));
    }

    public function run() {
        $this->render('form', array(
            'action' => $this->action,
            'method' => $this->method,
            'class' => $this->class,
            'content' => ob_get_clean(),
        ));
    }
}
