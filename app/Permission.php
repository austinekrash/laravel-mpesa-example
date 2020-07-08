<?php
namespace App;

use App\Misc\Observers\UserActionsObserver;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Permission
 *
 * @package App
 * @property string $title
*/
class Permission extends Model
{

    protected $fillable = ['title'];


    public static function boot()
    {
        parent::boot();

        Permission::observe(new UserActionsObserver);
    }

    public static function storeValidation($request)
    {
        return [
            'title' => 'max:191|required'
        ];
    }

    public static function updateValidation($request)
    {
        return [
            'title' => 'max:191|required'
        ];
    }






}
