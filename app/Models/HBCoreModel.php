<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Ramsey\Uuid\Uuid;

class HBCoreModel extends Model
{
    use SoftDeletes;

    public $incrementing = false;

    protected $hidden = ['count', 'created_at', 'updated_at', 'deleted_at'];

    protected static function boot ()
    {
        parent::boot ();

        static::creating ( function ( $model ) {
            $model->{$model->getKeyName ()} = (string) $model->generateNewId ();
        } );
    }

    public function generateNewId ()
    {
        if ( isset( $this->attributes[ 'id' ] ) ) {
            return $this->attributes[ 'id' ];
        }

        return Uuid::uuid4 ();
    }
}
