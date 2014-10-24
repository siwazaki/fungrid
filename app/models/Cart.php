<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Cart extends Eloquent
{
  public function user() {
    return $this->belongsTo('User','user_id');
  }

  public function orders() {
    return $this->hasMany('Order', 'order_id');
  }

}
