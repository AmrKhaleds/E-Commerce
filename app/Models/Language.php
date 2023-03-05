<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;
    protected $table = 'languages';

    protected $fillable = [
        'abbr', 'locale', 'name', 'direction', 'active', 'created_at', 'updated_at'
    ];
    /**
     * scopeActive - Local Scope to return Active == 1 
     * @param query <query>
     */
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeSelection($query)
    {
        return $query->select('name', 'abbr', 'diresction', 'active');
    }
    /**
     * 
     */
    public function getActive()
    {
        return $this->active == 1 ? 'On' : 'Off';
    }
}
