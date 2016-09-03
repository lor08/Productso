<?php
/**
 * Created by PhpStorm.
 * User: LOR08
 * Date: 03.09.2016
 * Time: 21:36
 */
namespace lor08\Productso\Models;

use Kalnoy\Nestedset\Node;

class PrsoCategory extends Node
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', '_lft', '_rgt', 'parent_id', 'note', 'desc', 'showtop', 'showside', 'showbottom', 'showcontent',
    ];

}