<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Order extends Eloquent
{
  public function item() {
    $this->belongsTo('Item', 'item_id');
  }

  public function cart() {
    $this->belongsTo('Cart', 'cart_id');
  }

}
