<?php namespace Niceweb\Shopping\Models;

use Model;
use Illuminate\Support\Str;

/**
 * Model
 */
class Product extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    use \Winter\Storm\Database\Traits\SoftDelete;
    
    public function init()
    {
        $this->connection = env('APP_DB_DRIVE', 'mysql');
    }

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'niceweb_shopping_products';

    /**
     * @var array Validation rules
     */
    public $rules = [];

    public $belongsTo = [
        'rstore' => [Store::class, 'key' => 'store_id'],
        'rsegment' => [Segment::class, 'key' => 'segment_id'],
    ];


    /* */
    public function beforeCreate()
    {
        $this->guid = Str::uuid()->toString();
        // TODO: temporary
        $this->store_id = 1;
        $this->segment_id = 1;
        $this->category_id = 1;
    }    
}
