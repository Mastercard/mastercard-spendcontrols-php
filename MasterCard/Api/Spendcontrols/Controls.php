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
class Controls extends BaseObject {



	protected static function getOperationConfig($operationUUID) {
		switch ($operationUUID) {
			case "dc776da2-9ba0-4859-b9a1-6e1a6a6beab2":
				return new OperationConfig("/issuer/spendcontrols/v1/card/{uuid}/controls", "delete", array(), array());
			case "9f9fe8cd-407e-4172-aaf9-1a186957c4bb":
				return new OperationConfig("/issuer/spendcontrols/v1/card/{uuid}/controls", "query", array(), array());
			case "0649f0a3-4e2a-4a60-bfed-f30836b06f57":
				return new OperationConfig("/issuer/spendcontrols/v1/card/{uuid}/controls", "create", array(), array());
			
			default:
				throw new \Exception("Invalid operationUUID supplied: $operationUUID");
		}
	}

	protected static function getOperationMetadata() {
		$config = ResourceConfig::getInstance();
		return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative());
	}





   /**
	* Delete object of type Controls by id
	*
	* @param String id
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return Controls of the response.
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
		return self::execute("dc776da2-9ba0-4859-b9a1-6e1a6a6beab2", new Controls($map));
	}

   /**
	* Delete this object of type Controls
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return Controls of the response.
	*/
	public function delete()
	{
		return self::execute("dc776da2-9ba0-4859-b9a1-6e1a6a6beab2", $this);
	}







	/**
	 * Query objects of type Controls by id and optional criteria
	 *
	 * @param type $criteria
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return Controls of the response
	 */
	public static function query($criteria)
	{
		return self::execute("9f9fe8cd-407e-4172-aaf9-1a186957c4bb",new Controls($criteria));
	}
   /**
	* Creates object of type Controls
	*
	* @param Map map, containing the required parameters to create a new object
	* @return Controls of the response of created instance.
	*/
	public static function create($map)
	{
		return self::execute("0649f0a3-4e2a-4a60-bfed-f30836b06f57", new Controls($map));
	}







}

