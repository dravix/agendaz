<?php

class Application_Model_BaseModel
{
	public function setAttributes($values)
	{
		if (is_array($values)) {
			$attributes = array_flip($this->attributes());
			foreach ($values as $name => $value) {
				if (isset($attributes[$name])) {
					$this->$name = $value;
				} 
			}
		}
	}
}

