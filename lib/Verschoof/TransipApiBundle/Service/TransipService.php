<?PHP

namespace Verschoof\TransipApiBundle\Service;

use Transip;

class TransipService
{
    protected $client;

    public function __construct($login, $privateKey, $test=null)
    {
        $this->client = new Transip\Client($login, $privateKey);
    }

    public function api($name)
    {
        return $this->client->api($name);
    }
}