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
class BudgetalertwithbudgetId extends BaseObject {



	protected static function getOperationConfig($operationUUID) {
		switch ($operationUUID) {
			case "423f5ff2-e2ed-4d59-9234-f974f35db43e":
				return new OperationConfig("/issuer/spendcontrols/v1/card/{uuid}/controls/alerts/budgets/{budgetId}", "delete", array(), array());
			case "a348cef6-2f5f-45c8-9a61-144d2fa78073":
				return new OperationConfig("/issuer/spendcontrols/v1/card/{uuid}/controls/alerts/budgets/{budgetId}", "read", array(), array());
			case "48756a8a-8013-4097-bae9-16d6a752f8eb":
				return new OperationConfig("/issuer/spendcontrols/v1/card/{uuid}/controls/alerts/budgets/{budgetId}", "create", array(), array());
			
			default:
				throw new \Exception("Invalid operationUUID supplied: $operationUUID");
		}
	}

	protected static function getOperationMetadata() {
		$config = ResourceConfig::getInstance();
		return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative());
	}





   /**
	* Delete object of type BudgetalertwithbudgetId by id
	*
	* @param String id
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return BudgetalertwithbudgetId of the response.
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
		return self::execute("423f5ff2-e2ed-4d59-9234-f974f35db43e", new BudgetalertwithbudgetId($map));
	}

   /**
	* Delete this object of type BudgetalertwithbudgetId
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return BudgetalertwithbudgetId of the response.
	*/
	public function delete()
	{
		return self::execute("423f5ff2-e2ed-4d59-9234-f974f35db43e", $this);
	}






	/**
	 * Returns objects of type BudgetalertwithbudgetId by id and optional criteria
	 * @param type $id
	 * @param type $criteria
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return BudgetalertwithbudgetId of the response
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
		return self::execute("a348cef6-2f5f-45c8-9a61-144d2fa78073",new BudgetalertwithbudgetId($map));
	}

   /**
	* Creates object of type BudgetalertwithbudgetId
	*
	* @param Map map, containing the required parameters to create a new object
	* @return BudgetalertwithbudgetId of the response of created instance.
	*/
	public static function create($map)
	{
		return self::execute("48756a8a-8013-4097-bae9-16d6a752f8eb", new BudgetalertwithbudgetId($map));
	}







}

