<?php
namespace TylerKing;

use GuzzleHttp\Message\Response;

class mLoggerTest extends \PHPUnit_Framework_TestCase
{  
  /**
   * @test
   *
   * With mLogger running on default port, it should return a response
   */
  function itShouldReturnGuzzleResponse() {
    $this->assertInstanceOf('GuzzleHttp\Message\Response', mLog('Log this'));
  }
  
  /**
   * @test
   *
   * With mLogger running on default port, it should return a response code of 200 OK
   */
  function itShouldReturnGuzzleResponseCodeOf200() {
    $log = mLog('Log this');
    
    $this->assertEquals(200, $log->getStatusCode());
  }
  
  /**
   * @test
   * @expectedException Exception
   * @expectedExceptionMessage No mLogger listening on port 8090
   *
   * Exception thrown if mLogger is not listening on the port provided
   */
  function itShouldThrowExceptionForNonListeningPort() {
    mLog('Log this', 8090);
  }
  
  /**
   * @test
   *
   * With mLogger running it should accept an empty message
   */
  function itShouldAcceptEmptyMessage() {
    $this->assertInstanceOf('GuzzleHttp\Message\Response', mLog());
  }
}