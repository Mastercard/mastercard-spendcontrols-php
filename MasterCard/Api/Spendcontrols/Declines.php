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
class Declines extends BaseObject {



	protected static function getOperationConfig($operationUUID) {
		switch ($operationUUID) {
			case "7d24558b-cc54-462c-ad54-25c04a267ca1":
				return new OperationConfig("/issuer/spendcontrols/v1/card/{uuid}/controls/declines", "delete", array(), array());
			case "7a9e2f6d-4ebb-4f36-8644-8a3ac277421a":
				return new OperationConfig("/issuer/spendcontrols/v1/card/{uuid}/controls/declines", "query", array(), array());
			case "5b464a6f-05a6-4b12-9e09-181d7e1925eb":
				return new OperationConfig("/issuer/spendcontrols/v1/card/{uuid}/controls/declines", "create", array(), array());
			
			default:
				throw new \Exception("Invalid operationUUID supplied: $operationUUID");
		}
	}

	protected static function getOperationMetadata() {
		$config = ResourceConfig::getInstance();
		return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext());
	}





   /**
	* Delete object of type Declines by id
	*
	* @param String id
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return Declines of the response.
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
		return self::execute("7d24558b-cc54-462c-ad54-25c04a267ca1", new Declines($map));
	}

   /**
	* Delete this object of type Declines
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return Declines of the response.
	*/
	public function delete()
	{
		return self::execute("7d24558b-cc54-462c-ad54-25c04a267ca1", $this);
	}







	/**
	 * Query objects of type Declines by id and optional criteria
	 *
	 * @param type $criteria
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return Declines of the response
	 */
	public static function query($criteria)
	{
		return self::execute("7a9e2f6d-4ebb-4f36-8644-8a3ac277421a",new Declines($criteria));
	}
   /**
	* Creates object of type Declines
	*
	* @param Map map, containing the required parameters to create a new object
	* @return Declines of the response of created instance.
	*/
	public static function create($map)
	{
		return self::execute("5b464a6f-05a6-4b12-9e09-181d7e1925eb", new Declines($map));
	}







}

