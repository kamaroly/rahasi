<?php
class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$response = $this->call('GET', '/');

		$this->assertEquals(200, $response->getStatusCode());
	}

	public function testLoginPage()
	{
		$response = $this->call('GET','/login');

		$this->assertContains('Sign In', $response->getContent());
	}
}
