<?php

class Application_Form_Contacto extends Zend_Form
{

    public function init()
    {
    	$this->setName('contacto');

    	$nombre = new Zend_Form_Element_Text('Nombre');
    	$nombre->setLabel('Nombre')
    	->setRequired(true)
    	->addFilter('StripTags')
    	->addFilter('StringTrim')
    	->setAttrib('class', 'form-control')
    	->addValidator('NotEmpty');

    	$correo = new Zend_Form_Element_Text('Email');
    	$correo->setLabel('Email')
    	->setRequired(true)
    	->addFilter('StripTags')
    	->addFilter('StringTrim')
    	->setAttrib('class', 'form-control')
    	->addValidator('NotEmpty');    	

    	$direccion = new Zend_Form_Element_Text('Direccion');
    	$direccion->setLabel('Direccion')
    	->setRequired(true)
    	->addFilter('StripTags')
    	->addFilter('StringTrim')
    	->setAttrib('class', 'form-control')
    	->addValidator('NotEmpty');

    	$submit = new Zend_Form_Element_Submit('submit');
    	$submit->setAttrib('id', 'btn-guardar');
    	$submit->setAttrib('class', 'btn btn-primary');
    	$this->addElements(array($id, $nombre, $correo,$direccion, $submit));
    }


}

