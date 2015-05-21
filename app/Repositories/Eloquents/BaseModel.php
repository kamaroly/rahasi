<?php namespace Rahasi\Repositories\Eloquents;

use Illuminate\Database\Eloquent\Model;
/**
* Base class for the modesl
*/
abstract class BaseModel extends Model
{

     /**
     * A sure method to generate a unique API key
     *
     * @return string
     */
    public  function generateKey()
    {
        do {
            $salt = sha1(time() . mt_rand());
            $newKey = substr($salt, 0, 40);
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
        $primaryKeyCount = self::where('id', 'LIKE', "%$key%")->limit(1)->count();
        
        return ($primaryKeyCount > 0);
    }
}