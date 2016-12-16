<?php

class AppController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        $contacto = new Application_Model_DbTable_Contacto();
        $this->view->contactos = $contacto->findAll();
    }

    public function addAction()
    {
        // Agrega un contacto
        if ($this->getRequest()->isXmlHttpRequest()) {

            $this->_helper->layout()->disableLayout();
        }
        $form = new Application_Form_Contacto;
        $form->submit->setLabel('Guardar');
        $this->view->form = $form;
        if ($this->getRequest()->isPost()) {
           $formData = $this->getRequest()->getPost();
           if ($form->isValid($formData)) {
               $nombre = $form->getValue('Nombre');
               $correo = $form->getValue('Email');
               $direccion = $form->getValue('Direccion');
               $contacto = new Application_Model_DbTable_Contacto();
               $contacto->agregar($nombre, $correo,$direccion);

               $this->_helper->redirector('index');
           } else {
               $form->populate($formData);
           }
       }

    }

    public function saveAction()
    {
        if ($this->getRequest()->isPost()) {
           $formData = $this->getRequest()->getPost();
           if ($form->isValid($formData)) {
               $nombre = $form->getValue('Nombre');
               $correo = $form->getValue('Email');
               $direccion = $form->getValue('Direccion');
               $contacto = new Application_Model_DbTable_Contacto();
               $contacto->agregar($nombre, $correo,$direccion);

               return json_encode(true);
           } 
       }
       return json_encode(false);
   }

    public function listaAction()
    {
       $contacto = new Application_Model_DbTable_Contacto();
       echo json_encode($contacto->findAll());
       exit;
    }

    public function verAction()
    {
        $id = $this->_getParam('id', 1);

       $contacto = new Application_Model_DbTable_Contacto();
       echo json_encode($contacto->getContacto($id));
       exit;
    }


}





