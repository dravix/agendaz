<?php

class Application_Model_DbTable_Contacto extends Zend_Db_Table_Abstract
{

	protected $_name = 'contacto';

	public function agregar($nombre,$correo,$direccion)
	{
		$data = array(
			// 'IdContacto'
			'Nombre' => $nombre,
			'Email' => $correo,
			'Direccion' => $direccion,
			);
		$this->insert($data);
	}

	public function getContacto($id)
	{
		$id = (int)$id;
		$row = $this->fetchRow('IdContacto = ' . $id);
		if (!$row) {
			throw new Exception("Could not find row $id");
		}
		return $row->toArray();
	}

	public function findAll()
	{
		# Obtiene toda la lista de contactos
		return $this->fetchAll()->toArray();
		
	}

	public function fields()
	{
		return [
		'IdContacto',
		'Nombre',
		'Correo',
		'Direccion',
		];
	}

}

