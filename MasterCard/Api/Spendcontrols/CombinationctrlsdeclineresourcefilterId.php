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
class CombinationctrlsdeclineresourcefilterId extends BaseObject {



	protected static function getOperationConfig($operationUUID) {
		switch ($operationUUID) {
			case "0dc4bcae-a7db-4753-b64c-497ded26480f":
				return new OperationConfig("/issuer/spendcontrols/v1/card/{uuid}/controls/declines/filters/{filterId}", "delete", array(), array());
			case "fef44a34-771c-4840-9870-a99aace9ea63":
				return new OperationConfig("/issuer/spendcontrols/v1/card/{uuid}/controls/declines/filters/{filterId}", "read", array(), array());
			case "a9e9441f-8061-444a-bead-0312e9b2845b":
				return new OperationConfig("/issuer/spendcontrols/v1/card/{uuid}/controls/declines/filters/{filterId}", "create", array(), array());
			
			default:
				throw new \Exception("Invalid operationUUID supplied: $operationUUID");
		}
	}

	protected static function getOperationMetadata() {
		$config = ResourceConfig::getInstance();
		return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative());
	}





   /**
	* Delete object of type CombinationctrlsdeclineresourcefilterId by id
	*
	* @param String id
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return CombinationctrlsdeclineresourcefilterId of the response.
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
		return self::execute("0dc4bcae-a7db-4753-b64c-497ded26480f", new CombinationctrlsdeclineresourcefilterId($map));
	}

   /**
	* Delete this object of type CombinationctrlsdeclineresourcefilterId
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return CombinationctrlsdeclineresourcefilterId of the response.
	*/
	public function delete()
	{
		return self::execute("0dc4bcae-a7db-4753-b64c-497ded26480f", $this);
	}






	/**
	 * Returns objects of type CombinationctrlsdeclineresourcefilterId by id and optional criteria
	 * @param type $id
	 * @param type $criteria
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return CombinationctrlsdeclineresourcefilterId of the response
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
		return self::execute("fef44a34-771c-4840-9870-a99aace9ea63",new CombinationctrlsdeclineresourcefilterId($map));
	}

   /**
	* Creates object of type CombinationctrlsdeclineresourcefilterId
	*
	* @param Map map, containing the required parameters to create a new object
	* @return CombinationctrlsdeclineresourcefilterId of the response of created instance.
	*/
	public static function create($map)
	{
		return self::execute("a9e9441f-8061-444a-bead-0312e9b2845b", new CombinationctrlsdeclineresourcefilterId($map));
	}







}

