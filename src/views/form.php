<?php
/**
 * @var \PetrGrishin\View\View $this
 * @author Petr Grishin <petr.grishin@grishini.ru>
 */

echo CHtml::beginForm($this->getParam('action'), $this->getParam('method'), array(
    'id' => $formId = $this->getUniqueIdentifier('formId'),
    'class' => $this->getParam('class'),
));
echo $this->getParam('content');
echo CHtml::endForm();
