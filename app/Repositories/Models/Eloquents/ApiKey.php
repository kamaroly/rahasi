<?php namespace Rahasi\Repositories\Models\Eloquents;

use Chrisbjr\ApiGuard\Repositories\ApiKeyRepository;

class ApiKey extends ApiKeyRepository
{

    /**
     * @param $key
     * @return ApiKeyRepository
     */
    public function getByKey($key)
    {
        $apiKey = self::where('key', '=', $key)
            ->first();

        if (empty($apiKey) || $apiKey->exists == false) {
            return null;
        }

        return $apiKey;
    }

    /**
     * A sure method to generate a unique API key
     *
     * @return string
     */
    public function generateKey()
    {
        do {
            $salt = sha1(time() . mt_rand());
            $newKey = substr($salt, 0, 30);
        } // Already in the DB? Fail. Try again
        while (self::keyExists($newKey));

        return $newKey;
    }

    /**
     * Checks whether a key exists in the database or not
     *
     * @param $key
     * @return bool
     */
    private function keyExists($key)
    {
        $apiKeyCount = self::where('live_sk', '=', $key)
                            ->orWhere('live_pk', '=', $key)
                            ->orWhere('test_sk', '=', $key)
                            ->orWhere('test_pk', '=', $key)
                            ->limit(1)->count();

        if ($apiKeyCount > 0) return true;

        return false;
    }

    /**
     * Generate new key
     */
    public function newKey($keyType,$userId)
    {

        // check whether this user already has an API key
        $apiKey = apiKey::where('user_id', '=', $userId)->first();

        if (is_null($apiKey)) {
            $apiKey = new apiKey;
        }
        /** API KEYS NAMES DEFINITION */
        $apiKey->$keyType =$keyType.$apiKey->generateKey();

        /** END OF THE DEFINITIONS */
        $apiKey->user_id    = $userId;
        $apiKey->level      = 10;
        $apiKey->ignore_limits = 1;

        if ( $apiKey->save() === false) {
               return false;
           }
        return $apiKey->$keyType;
    }

}