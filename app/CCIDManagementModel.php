<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CCIDManagementModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ccid';

    // Convert Objects to Array
    public function objectToArray($data)
    {
        if (is_array($data) || is_object($data))
        {
            $result = array();
            foreach ($data as $key => $value)
            {
                $result[$key] = $this->objectToArray($value);
            }
            return $result;
        }
        return $data;
    }
}
