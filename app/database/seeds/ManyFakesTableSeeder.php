<?php

use Faker\Factory as Faker;

class ManyFakesTableSeeder extends Seeder
{

  public function run()
  {
    $nbUsers = 100000;
    $nbItems = 1000;
    $nbCarts = 1000;
    $nbOrders = 10000;
    $this->insertUsers($nbUsers/100);
    //$this->insertItems($nbItems/100);
    //$this->insertCarts($nbCarts/100);
    //$this->insertOrders($nbOrders/100);
  }

  private function insertOrders($n = 100, $m = 100)
  {
    $maxCartId = DB::table('carts')->max('id');
    $maxItemId = DB::table('items')->max('id');
    $faker = Faker::create();
    for ($i = 0; $i < $n; ++$i) {
      $carts = [];
      for ($j = 0; $j < $m; ++$j) {
        $cart = [
          'cart_id' => $faker->numberBetween(1, $maxCartId),
          'nb_items' => $faker->randomNumber(3),
          'item_id' => $faker->numberBetween(1, $maxItemId),
          'created_at' => $faker->dateTime,
          'updated_at' => $faker->dateTime
        ];
        for ($k = 1; $k <= 20; ++$k) {
          $cart["foo" . $k] = $faker->word;
        }
        $carts[] = $cart;
      }
      Order::insert($carts);
    }
  }

  private function insertCarts($n = 100, $m = 100)
  {
    $maxUserId = DB::table('Users')->max('id');
    $faker = Faker::create();
    for ($i = 0; $i < $n; ++$i) {
      $carts = [];
      for ($j = 0; $j < $m; ++$j) {
        $cart = [
          'user_id' => $faker->numberBetween(1, $maxUserId),
          'created_at' => $faker->dateTime,
          'updated_at' => $faker->dateTime
        ];
        for ($k = 1; $k <= 20; ++$k) {
          $cart["foo" . $k] = $faker->word;
        }
        $carts[] = $cart;
      }
      Cart::insert($carts);
    }
  }

  private function insertItems($n = 100, $m = 100)
  {
    $faker = Faker::create();
    for ($i = 0; $i < $n; ++$i) {
      $items = [];
      for ($j = 0; $j < $m; ++$j) {
        $item = [
          'name' => $faker->word(10),
          'price' => $faker->randomNumber(5),
          'created_at' => $faker->dateTime,
          'updated_at' => $faker->dateTime
        ];
        for ($k = 1; $k <= 20; ++$k) {
          $item["foo" . $k] = $faker->word;
        }
        $items[] = $item;
      }
      Item::insert($items);
    }
  }

  private function insertUsers($n = 100, $m = 100)
  {
    $faker = Faker::create();
    for ($i = 0; $i < $n; ++$i) {
      $users = [];
      for ($j = 0; $j < $m; ++$j) {
        $user = [
          'name' => $faker->userName,
          'email' => $faker->email,
          'address' => $faker->address,
          'created_at' => $faker->dateTime,
          'updated_at' => $faker->dateTime
        ];
        for ($k = 1; $k <= 20; ++$k) {
          $user["foo" . $k] = $faker->word;
        }
        $users[] = $user;
      }
      User::insert($users);
    }
  }

}