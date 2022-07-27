<?php

class PublicToDoController extends \Kyte\Mvc\Controller\ModelController
{
    public function hook_init() {
        // make controller available to public
        $this->requireAuth = false;
        // limit to get calls only
        $this->allowableActions = ['get'];
    }

    public function hook_prequery($method, &$field, &$value, &$conditions, &$all, &$order) {
        switch ($method) {
            case 'get':
                // only return todo items flagged as public
                $conditions = [ ["field" => "isPublic", "value" => 0, "operator" => "="] ];
                // search by the creation date in ascending order
                $order = [ ['field' => 'date_created', 'direction' => 'asc' ] ];
				break;

			default:
				break;
		}
	}
}

?>
