<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Controller;

use Hyperf\Utils\Context;
use Hyperf\Utils\Coroutine;
use Hyperf\Utils\Parallel;
use Hyperf\Utils\ApplicationContext;
use App\JsonRpc\CalculatorServiceInterface;
use App\JsonRpc\MathValue;

class IndexController extends AbstractController
{
    public function index()
    {
        $user = $this->request->input('user', 'Hyperf');
        $method = $this->request->getMethod();

        return [
            'method' => $method,
            'message' => "Hello {$user}.",
        ];
    }

    public function add()
    {
        $client = ApplicationContext::getContainer()->get(CalculatorServiceInterface::class);
        $value = $client->add(10, 20);
        return $value;
    }
}
