<?php
/*
 * Copyright 2016 MasterCard International.
 *
 * Redistribution and use in source and binary forms, with or without modification, are
 * permitted provided that the following conditions are met:
 *
 * Redistributions of source code must retain the above copyright notice, this list of
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list of
 * conditions and the following disclaimer in the documentation and/or other materials
 * provided with the distribution.
 * Neither the name of the MasterCard International Incorporated nor the names of its
 * contributors may be used to endorse or promote products derived from this software
 * without specific prior written permission.
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES
 * OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT
 * SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
 * TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS;
 * OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER
 * IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING
 * IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF
 * SUCH DAMAGE.
 *
 */

 namespace MasterCard\Api\Spendcontrols;

 use MasterCard\Core\Model\BaseObject;
 use MasterCard\Core\Model\RequestMap;
 use MasterCard\Core\Model\OperationMetadata;
 use MasterCard\Core\Model\OperationConfig;


/**
 * 
 */
class BudgetdeclinewithbudgetId extends BaseObject {



	protected static function getOperationConfig($operationUUID) {
		switch ($operationUUID) {
			case "bb8290b1-62bd-4031-9933-bcab5c42bd32":
				return new OperationConfig("/issuer/spendcontrols/v1/card/{uuid}/controls/declines/budgets/{budgetId}", "delete", array(), array());
			case "b760857b-a576-47a4-a717-8cc939da5f7f":
				return new OperationConfig("/issuer/spendcontrols/v1/card/{uuid}/controls/declines/budgets/{budgetId}", "read", array(), array());
			case "8de5e5c5-85a2-4bc5-ae9b-f323e89759ff":
				return new OperationConfig("/issuer/spendcontrols/v1/card/{uuid}/controls/declines/budgets/{budgetId}", "create", array(), array());
			
			default:
				throw new \Exception("Invalid operationUUID supplied: $operationUUID");
		}
	}

	protected static function getOperationMetadata() {
		$config = ResourceConfig::getInstance();
		return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative());
	}





   /**
	* Delete object of type BudgetdeclinewithbudgetId by id
	*
	* @param String id
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return BudgetdeclinewithbudgetId of the response.
	*/
	public static function deleteById($id, $requestMap = null)
	{
		$map = new RequestMap();
		if (!empty($id)) {
			$map->set("id", $id);
		}
		if (!empty($requestMap)) {
			$map->setAll($requestMap);
		}
		return self::execute("bb8290b1-62bd-4031-9933-bcab5c42bd32", new BudgetdeclinewithbudgetId($map));
	}

   /**
	* Delete this object of type BudgetdeclinewithbudgetId
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return BudgetdeclinewithbudgetId of the response.
	*/
	public function delete()
	{
		return self::execute("bb8290b1-62bd-4031-9933-bcab5c42bd32", $this);
	}






	/**
	 * Returns objects of type BudgetdeclinewithbudgetId by id and optional criteria
	 * @param type $id
	 * @param type $criteria
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return BudgetdeclinewithbudgetId of the response
	 */
	public static function read($id, $criteria = null)
	{
		$map = new RequestMap();
		if (!empty($id)) {
			$map->set("id", $id);
		}
		if ($criteria != null) {
			$map->setAll($criteria);
		}
		return self::execute("b760857b-a576-47a4-a717-8cc939da5f7f",new BudgetdeclinewithbudgetId($map));
	}

   /**
	* Creates object of type BudgetdeclinewithbudgetId
	*
	* @param Map map, containing the required parameters to create a new object
	* @return BudgetdeclinewithbudgetId of the response of created instance.
	*/
	public static function create($map)
	{
		return self::execute("8de5e5c5-85a2-4bc5-ae9b-f323e89759ff", new BudgetdeclinewithbudgetId($map));
	}







}

