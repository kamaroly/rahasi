<?php  namespace Rahasi\Repositories\Models\Eloquents;

use Chrisbjr\ApiGuard\Repositories\ApiLogRepository;

class ApiLog extends ApiLogRepository
{

       /**
     * @return ApiKeyRepository
     */
    public function apiKey()
    {
        return $this->hasOne(Config::get('apiguard.model'));
    }

    public function countApiKeyRequests($apiKeyId, $routeAction, $method, $keyIncrementTime)
    {
        return self::where('api_key_id', '=', $apiKeyId)
            ->where('route', '=', $routeAction)
            ->where('method', '=', $method)
            ->where('created_at', '>=', date('Y-m-d H:i:s', $keyIncrementTime))
            ->where('created_at', '<=', date('Y-m-d H:i:s'))
            ->count();
    }

    public function countMethodRequests($routeAction, $method, $keyIncrementTime)
    {
        return self::where('route', '=', $routeAction)
            ->where('method', '=', $method)
            ->where('created_at', '>=', date('Y-m-d H:i:s', $keyIncrementTime))
            ->where('created_at', '<=', date('Y-m-d H:i:s'))
            ->count();
    }

}