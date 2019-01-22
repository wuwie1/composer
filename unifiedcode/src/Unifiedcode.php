<?php
namespace ShuM\Unifiedcode;

use Illuminate\Session\SessionManager;
use Illuminate\Config\Repository;

class Unifiedcode
{
    /**
     * @var SessionManager
     */
    protected $session;

    /**
     * @var Repository
     */
    protected $config;

    /**
     * Packagetest constructor.
     * @param SessionManager $session
     * @param Repository $config
     */
    public function __construct()
    {   
        // $this->session = $session;
        // $this->config = $config;
    }

    /**
     * @param string $msg
     * @return string
     */
    public function parsingCode($code = 0){
        require_once('ConfigCode.php');
        $res = isset($common[$code]) ? $common[$code] : '未定义异常';
        return $res;
    }
}