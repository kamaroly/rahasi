<?php
/**
* Testing homepage 
*/
class HomePageTest extends  TestCase {

	public function testHomePageAccess()
	{
		$response = $this->call('GET','/');

		$this->assertContains('RAHASI',$response->getContent());
	}
}