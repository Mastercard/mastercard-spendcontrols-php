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
class TravelmarkeralertwithtravelId extends BaseObject {



	protected static function getOperationConfig($operationUUID) {
		switch ($operationUUID) {
			case "33530633-8a58-45dd-b92a-119953a63d2c":
				return new OperationConfig("/issuer/spendcontrols/v1/card/{uuid}/controls/alerts/travels/{travelId}", "create", array(), array());
			case "0520dc9d-53d4-4d40-8c41-7966902510a8":
				return new OperationConfig("/issuer/spendcontrols/v1/card/{uuid}/controls/alerts/travels/{travelId}", "delete", array(), array());
			case "56433c1d-3a88-4731-ba50-ee05ffab93e2":
				return new OperationConfig("/issuer/spendcontrols/v1/card/{uuid}/controls/alerts/travels/{travelId}", "read", array(), array());
			
			default:
				throw new \Exception("Invalid operationUUID supplied: $operationUUID");
		}
	}

	protected static function getOperationMetadata() {
		$config = ResourceConfig::getInstance();
		return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative(), $config->getContentTypeOverride());
	}


   /**
	* Creates object of type TravelmarkeralertwithtravelId
	*
	* @param Map map, containing the required parameters to create a new object
	* @return TravelmarkeralertwithtravelId of the response of created instance.
	*/
	public static function create($map)
	{
		return self::execute("33530633-8a58-45dd-b92a-119953a63d2c", new TravelmarkeralertwithtravelId($map));
	}








   /**
	* Delete object of type TravelmarkeralertwithtravelId by id
	*
	* @param String id
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return TravelmarkeralertwithtravelId of the response.
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
		return self::execute("0520dc9d-53d4-4d40-8c41-7966902510a8", new TravelmarkeralertwithtravelId($map));
	}

   /**
	* Delete this object of type TravelmarkeralertwithtravelId
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return TravelmarkeralertwithtravelId of the response.
	*/
	public function delete()
	{
		return self::execute("0520dc9d-53d4-4d40-8c41-7966902510a8", $this);
	}






	/**
	 * Returns objects of type TravelmarkeralertwithtravelId by id and optional criteria
	 * @param type $id
	 * @param type $criteria
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return TravelmarkeralertwithtravelId of the response
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
		return self::execute("56433c1d-3a88-4731-ba50-ee05ffab93e2",new TravelmarkeralertwithtravelId($map));
	}



}

