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
class Alertall extends BaseObject {



	protected static function getOperationConfig($operationUUID) {
		switch ($operationUUID) {
			case "436d049e-4655-4a37-ae69-af4019bc6ccb":
				return new OperationConfig("/issuer/spendcontrols/v1/card/{uuid}/controls/alerts/all", "delete", array(), array());
			case "1e6fbcc0-ed48-4bec-9f71-19c30c213d2e":
				return new OperationConfig("/issuer/spendcontrols/v1/card/{uuid}/controls/alerts/all", "query", array(), array());
			case "df945b66-e990-4e7a-b5fe-4c3b8bab1eab":
				return new OperationConfig("/issuer/spendcontrols/v1/card/{uuid}/controls/alerts/all", "create", array(), array());
			
			default:
				throw new \Exception("Invalid operationUUID supplied: $operationUUID");
		}
	}

	protected static function getOperationMetadata() {
		$config = ResourceConfig::getInstance();
		return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext());
	}





   /**
	* Delete object of type Alertall by id
	*
	* @param String id
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return Alertall of the response.
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
		return self::execute("436d049e-4655-4a37-ae69-af4019bc6ccb", new Alertall($map));
	}

   /**
	* Delete this object of type Alertall
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return Alertall of the response.
	*/
	public function delete()
	{
		return self::execute("436d049e-4655-4a37-ae69-af4019bc6ccb", $this);
	}







	/**
	 * Query objects of type Alertall by id and optional criteria
	 *
	 * @param type $criteria
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return Alertall of the response
	 */
	public static function query($criteria)
	{
		return self::execute("1e6fbcc0-ed48-4bec-9f71-19c30c213d2e",new Alertall($criteria));
	}
   /**
	* Creates object of type Alertall
	*
	* @param Map map, containing the required parameters to create a new object
	* @return Alertall of the response of created instance.
	*/
	public static function create($map)
	{
		return self::execute("df945b66-e990-4e7a-b5fe-4c3b8bab1eab", new Alertall($map));
	}







}

