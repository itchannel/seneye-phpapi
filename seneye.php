<?php
//Class for integration to Seneye Public API


class Seneye
{

	public $username = "example";
	public $password = "password123";
	public $deviceid = "11111";
	public $disconnected = "1";


function listdevices()
{
	$url = "https://api.seneye.com/v1/devices?IncludeState=1&user=".$this->username."&pwd=".$this->password;
	//Grab status information from apex website
	$request_headers = array();
	$request_headers[] = 'Accept: application/json';
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $request_headers);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 0);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	$response_body = curl_exec($ch);
	if ($response_body == "User not authenticated")
	{
		echo "USER NOT SIGNED IN";
	}else
	{
		$data = json_decode($response_body);
        	//echo var_dump($data);
        	return $data;

	}






}

function getdevinfo()
{

 $url = "https://api.seneye.com/v1/devices/$this->deviceid?IncludeState=1&user=".$this->username."&pwd=".$this->password;
        //Grab status information from apex website
        $request_headers = array();
        $request_headers[] = 'Accept: application/json';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $request_headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 0);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $response_body = curl_exec($ch);
        if ($response_body == "User not authenticated")
        {
                echo "USER NOT SIGNED IN";
        }else
        {
                $data = json_decode($response_body);
                //echo var_dump($data);
		$this->disconnected = $data->status->disconnected;
		echo $data->status->disconnected;
                return $data;

        }





}
















}








?>
