<?php 
// Method: POST, PUT, GET etc
// Data: array("param" => "value") ==> index.php?param=value&param2=value2
/**
 *You don't need to set params behind the url if $data != null. While, if you
 * want to set param id, ex: api/customer/:id, then you can add into url
 * 
*/

function CallAPI($url, $method = null, $data = false)
{
    $curl = curl_init();

    switch ($method)
    {
        case "POST":
            //POST means "create new" as in "Here is the input for creating a user, create it for me".
            //don't set :id
            curl_setopt($curl, CURLOPT_POST, 1);

            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            //PUT means "insert, replace if already exists" as in "Here is the data for user 5".
            //set :id which indentify a resource to replace it
            curl_setopt($curl, CURLOPT_PUT, 1);
            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        default:
            if ($data)
                //the first %s is placed by $url, and the second %s is replaced by http_build_query($data)
                //the last, $url = localhost:3000/api/customer/id?param1=value1&param2=value2
                $url = sprintf("%s?%s", $url, http_build_query($data));
    }

    // Optional Authentication:
    //curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    //curl_setopt($curl, CURLOPT_USERPWD, "username:password");

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($curl);

    curl_close($curl);
    //should be use json_decode at here?
    $result = json_decode($result);
    return $result;
}
?>