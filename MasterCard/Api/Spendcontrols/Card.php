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
class Card extends BaseObject {



	protected static function getOperationConfig($operationUUID) {
		switch ($operationUUID) {
			case "91406b75-20bc-4696-8686-d26ac715f3b5":
				return new OperationConfig("/issuer/spendcontrols/v1/card", "create", array(), array());
			case "85e206a9-e5e7-4dd1-ad68-80896bb5f22e":
				return new OperationConfig("/issuer/spendcontrols/v1/card/{uuid}", "read", array(), array());
			case "3e3fb319-d01d-4698-964b-087d6f5af113":
				return new OperationConfig("/issuer/spendcontrols/v1/card/uuid", "create", array(), array());
			case "3f598e5a-bbf4-4780-9af1-d8e512d2077b":
				return new OperationConfig("/issuer/spendcontrols/v1/card/{uuid}", "delete", array(), array());
			case "f573bf51-ff69-4616-856b-7092a818016c":
				return new OperationConfig("/issuer/spendcontrols/v1/card/{uuid}", "create", array(), array());
			
			default:
				throw new \Exception("Invalid operationUUID supplied: $operationUUID");
		}
	}

	protected static function getOperationMetadata() {
		$config = ResourceConfig::getInstance();
		return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative());
	}


   /**
	* Creates object of type Card
	*
	* @param Map map, containing the required parameters to create a new object
	* @return Card of the response of created instance.
	*/
	public static function create($map)
	{
		return self::execute("91406b75-20bc-4696-8686-d26ac715f3b5", new Card($map));
	}









	/**
	 * Returns objects of type Card by id and optional criteria
	 * @param type $id
	 * @param type $criteria
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return Card of the response
	 */
	public static function retrievePan($id, $criteria = null)
	{
		$map = new RequestMap();
		if (!empty($id)) {
			$map->set("id", $id);
		}
		if ($criteria != null) {
			$map->setAll($criteria);
		}
		return self::execute("85e206a9-e5e7-4dd1-ad68-80896bb5f22e",new Card($map));
	}

   /**
	* Creates object of type Card
	*
	* @param Map map, containing the required parameters to create a new object
	* @return Card of the response of created instance.
	*/
	public static function read($map)
	{
		return self::execute("3e3fb319-d01d-4698-964b-087d6f5af113", new Card($map));
	}








   /**
	* Delete object of type Card by id
	*
	* @param String id
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return Card of the response.
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
		return self::execute("3f598e5a-bbf4-4780-9af1-d8e512d2077b", new Card($map));
	}

   /**
	* Delete this object of type Card
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return Card of the response.
	*/
	public function delete()
	{
		return self::execute("3f598e5a-bbf4-4780-9af1-d8e512d2077b", $this);
	}


   /**
	* Creates object of type Card
	*
	* @param Map map, containing the required parameters to create a new object
	* @return Card of the response of created instance.
	*/
	public static function update($map)
	{
		return self::execute("f573bf51-ff69-4616-856b-7092a818016c", new Card($map));
	}







}

