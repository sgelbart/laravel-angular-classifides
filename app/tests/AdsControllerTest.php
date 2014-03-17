<?
class AdsControllerTest extends TestCase {

    public function testIndex()
    {
        $this->client->request('GET', 'ads/all');
    }

}