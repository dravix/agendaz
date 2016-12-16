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
        $this->_helper->layout()->disableLayout();



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





