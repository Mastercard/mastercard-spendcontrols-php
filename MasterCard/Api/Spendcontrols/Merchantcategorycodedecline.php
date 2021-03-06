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
class Merchantcategorycodedecline extends BaseObject {



	protected static function getOperationConfig($operationUUID) {
		switch ($operationUUID) {
			case "79de187b-0d3c-4b34-bcb7-dc0ba5ae5414":
				return new OperationConfig("/issuer/spendcontrols/v1/card/{uuid}/controls/declines/mccs", "delete", array(), array());
			case "4e86b449-25b5-4987-bf92-cce9fb5fdeed":
				return new OperationConfig("/issuer/spendcontrols/v1/card/{uuid}/controls/declines/mccs", "query", array(), array());
			case "f327d566-b6d2-4aa5-b47f-11b4d84e5166":
				return new OperationConfig("/issuer/spendcontrols/v1/card/{uuid}/controls/declines/mccs", "create", array(), array());
			
			default:
				throw new \Exception("Invalid operationUUID supplied: $operationUUID");
		}
	}

	protected static function getOperationMetadata() {
		$config = ResourceConfig::getInstance();
		return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative(), $config->getContentTypeOverride());
	}





   /**
	* Delete object of type Merchantcategorycodedecline by id
	*
	* @param String id
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return Merchantcategorycodedecline of the response.
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
		return self::execute("79de187b-0d3c-4b34-bcb7-dc0ba5ae5414", new Merchantcategorycodedecline($map));
	}

   /**
	* Delete this object of type Merchantcategorycodedecline
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return Merchantcategorycodedecline of the response.
	*/
	public function delete()
	{
		return self::execute("79de187b-0d3c-4b34-bcb7-dc0ba5ae5414", $this);
	}







	/**
	 * Query objects of type Merchantcategorycodedecline by id and optional criteria
	 *
	 * @param type $criteria
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return Merchantcategorycodedecline of the response
	 */
	public static function query($criteria)
	{
		return self::execute("4e86b449-25b5-4987-bf92-cce9fb5fdeed",new Merchantcategorycodedecline($criteria));
	}
   /**
	* Creates object of type Merchantcategorycodedecline
	*
	* @param Map map, containing the required parameters to create a new object
	* @return Merchantcategorycodedecline of the response of created instance.
	*/
	public static function create($map)
	{
		return self::execute("f327d566-b6d2-4aa5-b47f-11b4d84e5166", new Merchantcategorycodedecline($map));
	}







}

