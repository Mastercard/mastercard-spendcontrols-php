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
class Alerts extends BaseObject {



	protected static function getOperationConfig($operationUUID) {
		switch ($operationUUID) {
			case "e55e129f-b466-4702-bdf2-1f9737e7d852":
				return new OperationConfig("/issuer/v1/card/{uuid}/controls/alerts", "delete", array(), array());
			case "261c5ea4-1ad1-43ae-84b4-7f9528c53aee":
				return new OperationConfig("/issuer/v1/card/{uuid}/controls/alerts", "query", array(), array());
			case "12957bfb-dcf2-42d7-9ded-1a1d2c1d8226":
				return new OperationConfig("/issuer/v1/card/{uuid}/controls/alerts", "create", array(), array());
			
			default:
				throw new \Exception("Invalid operationUUID supplied: $operationUUID");
		}
	}

	protected static function getOperationMetadata() {
		$config = ResourceConfig::getInstance();
		return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext());
	}





   /**
	* Delete object of type Alerts by id
	*
	* @param String id
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return Alerts of the response.
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
		return self::execute("e55e129f-b466-4702-bdf2-1f9737e7d852", new Alerts($map));
	}

   /**
	* Delete this object of type Alerts
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return Alerts of the response.
	*/
	public function delete()
	{
		return self::execute("e55e129f-b466-4702-bdf2-1f9737e7d852", $this);
	}







	/**
	 * Query objects of type Alerts by id and optional criteria
	 *
	 * @param type $criteria
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return Alerts of the response
	 */
	public static function query($criteria)
	{
		return self::execute("261c5ea4-1ad1-43ae-84b4-7f9528c53aee",new Alerts($criteria));
	}
   /**
	* Creates object of type Alerts
	*
	* @param Map map, containing the required parameters to create a new object
	* @return Alerts of the response of created instance.
	*/
	public static function create($map)
	{
		return self::execute("12957bfb-dcf2-42d7-9ded-1a1d2c1d8226", new Alerts($map));
	}







}

