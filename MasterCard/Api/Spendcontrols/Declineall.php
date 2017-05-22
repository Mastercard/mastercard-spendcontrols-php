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
class Declineall extends BaseObject {



	protected static function getOperationConfig($operationUUID) {
		switch ($operationUUID) {
			case "7bfbcf2c-9698-4a3f-a47c-70dff5afbce7":
				return new OperationConfig("/issuer/spendcontrols/v1/card/{uuid}/controls/declines/all", "delete", array(), array());
			case "26497fbd-5ef4-442b-b2fe-a7aa94da3154":
				return new OperationConfig("/issuer/spendcontrols/v1/card/{uuid}/controls/declines/all", "query", array(), array());
			case "630264b5-2a59-4bc0-bf83-756768738a25":
				return new OperationConfig("/issuer/spendcontrols/v1/card/{uuid}/controls/declines/all", "create", array(), array());
			
			default:
				throw new \Exception("Invalid operationUUID supplied: $operationUUID");
		}
	}

	protected static function getOperationMetadata() {
		$config = ResourceConfig::getInstance();
		return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext());
	}





   /**
	* Delete object of type Declineall by id
	*
	* @param String id
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return Declineall of the response.
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
		return self::execute("7bfbcf2c-9698-4a3f-a47c-70dff5afbce7", new Declineall($map));
	}

   /**
	* Delete this object of type Declineall
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return Declineall of the response.
	*/
	public function delete()
	{
		return self::execute("7bfbcf2c-9698-4a3f-a47c-70dff5afbce7", $this);
	}







	/**
	 * Query objects of type Declineall by id and optional criteria
	 *
	 * @param type $criteria
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return Declineall of the response
	 */
	public static function query($criteria)
	{
		return self::execute("26497fbd-5ef4-442b-b2fe-a7aa94da3154",new Declineall($criteria));
	}
   /**
	* Creates object of type Declineall
	*
	* @param Map map, containing the required parameters to create a new object
	* @return Declineall of the response of created instance.
	*/
	public static function create($map)
	{
		return self::execute("630264b5-2a59-4bc0-bf83-756768738a25", new Declineall($map));
	}







}

