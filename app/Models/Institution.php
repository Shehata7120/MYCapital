<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'type_id',
        'address',
        'phone',
        'email',
        'url',
        'map',
        'image',
    ];
    public  static $rules = [
        'name' => 'required',
        'type_id' => 'required',
        'address' => 'required',
        'phone' => 'required',
        'email' => 'required',
        'url' => 'nullable',
        'map' => 'required',
        'image' => 'nullable',

    ];



    public function type (): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {

        return $this->belongsTo(InstitutionType::class);
    }
}
