<?php
/*
$ch = curl_init();

$url ="https://api.dooblo.net/newapi/SurveyInterviewIDs?surveyIDs=c49882c8-0421-47f2-bfe4-db0eb01d1049";

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($CH, CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($ch);

if($e = curl_error($ch)) {
    echo $e;
}else{
    $decode = json_decode($resp);
    print_r($decode);
}

curl_close($ch);
*/
?>

<?php
/*




*/



/*
$username = '0215114e-a577-4878-9353-73ec71d0a809/Markettrendsintl';
$password = 'MarketTrends@123';
$surveyID = 'c49882c8-0421-47f2-bfe4-db0eb01d1049';
$endpoint = 'https://api.dooblo.net/newapi/SurveyInterviewIDs?surveyIDs='.$surveyID;

$credentials = base64_encode("$username:$password");

$headers = [];
$headers[] = "Authorization: Basic {$credentials}";
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Cache-Control: no-cache';

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $endpoint);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);

$headers1 = [];
$headers1[] = 'Content-Type: text/xml';
$headers1[] = 'Cache-Control: no-cache';

$counter = 0;
$interviewIdsInCurPack = '';
for ($x = 0; $x < $result; $x++) {
 $interviewIdsInCurPack = sprintf("{0},{1}",$interviewIdsInCurPack,$result[i]);
  $counter +=1;
  if ($lastInterviewID = $x==$interviewIds - 1) {
  	if ($counter == 99 || $lastInterviewID) {
        $interviewIdsInCurPack = substr_replace($interviewIdsInCurPack, 0, 1);
         $urlInterviewData = sprintf("https://api.dooblo.net/newapi/SurveyInterviewData?subjectIDs={0}&surveyID={1}&onlyHeaders=false&includeNulls=false", $interviewIdsInCurPack, $surveyID);
        curl_setopt($ch, CURLOPT_URL, $urlInterviewData);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers1);
        
        $response = curl_exec($ch);
        // Console.WriteLine(resp); 
        //------------------------------------------------------------------------------------
        // STEP 3: This is the actual XML Data as it comes as an answer, your code should 
        //  process xmlInterviewData to process the interview data of the 99 interviews of 
        //  this pack
        //------------------------------------------------------------------------------------
         // $xmlInterviewData = $response;
        // Console.WriteLine(xmlInterviewData);
        
    }
  }
}


if (curl_errno($ch)) {
echo 'Error:' . curl_error($ch);
}
curl_close($ch);

// Debug the result
var_dump($response); 

*/

?>

<?php

$username = '0215114e-a577-4878-9353-73ec71d0a809/Markettrendsintl';
$password = 'MarketTrends@123';
$surveyID = 'c49882c8-0421-47f2-bfe4-db0eb01d1049';
$endpoint = 'https://api.dooblo.net/newapi/SurveyInterviewIDs?surveyIDs='.$surveyID;

$credentials = base64_encode("$username:$password");

$headers = [];
$headers[] = "Authorization: Basic {$credentials}";
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Cache-Control: no-cache';

$headers1 = [];
$headers1[] = "Authorization: Basic {$credentials}";
$headers1[] = 'Content-Type: text/xml';
$headers1[] = 'Cache-Control: no-cache';


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $endpoint);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result[] = curl_exec($ch);

/*---------New Code -----------------*/
$counter = 0;
$interviewIdsInCurPack = '';
for ($i=0; $i < count($result); $i++) { 
  $interviewIdsInCurPack = sprintf("{0},{1}", $interviewIdsInCurPack, $result[$i]);
  $counter += 1;
  $lastInterviewID = $i==$result[$i];

  if ($counter == 99 || $lastInterviewID) {
      $interviewIdsInCurPack = substr_replace($interviewIdsInCurPack, 0, 1);
                 $urlInterviewData = sprintf("https://api.dooblo.net/newapi/SurveyInterviewData?subjectIDs={0}&surveyID={1}&onlyHeaders=false&includeNulls=false", $interviewIdsInCurPack, $surveyID);
                 // print($urlInterviewData);

                  $sender = curl_init();

                  curl_setopt($sender, CURLOPT_URL, $urlInterviewData);
                  curl_setopt($sender, CURLOPT_RETURNTRANSFER, 1);
                  curl_setopt($sender, CURLOPT_CUSTOMREQUEST, 'GET');
                  curl_setopt($sender, CURLOPT_HTTPHEADER, $headers1);

                  $resResult = curl_exec($sender);
                   var_dump($resResult);
  }
}