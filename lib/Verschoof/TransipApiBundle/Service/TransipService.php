<?PHP

namespace Verschoof\TransipApiBundle\Service;

use Transip;

class TransipService
{
    protected $client;

    public function __construct($transipConfig)
    {
        $this->client = new Transip\Client($transipConfig['login'], $transipConfig['private_key'], $transipConfig['read_only']);
    }

    public function api($name)
    {
        return $this->client->api($name);
    }
}