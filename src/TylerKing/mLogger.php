<?php
namespace TylerKing;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use \Exception;

function mLog($message = '', $port = 8086) {
  $client = new Client;

  try {
    return $client->post("http://127.0.0.1:{$port}/log", ['body' => ['msg' => $message]]);
  } catch (RequestException $e) {
    if ($e->hasResponse() === false) {
      throw new Exception("No mLogger listening on port {$port}");
    }
  }
}
