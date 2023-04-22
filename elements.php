<?php

  class ElementDraw {

    static function UserItem($user) {
      echo <<<EOD
        <div class="item-user">
          <div class="item-user_info">
            <div class="item-user_info_sub">$user[dni]</div>
            <div class="item-user_info_sub">$user[username]</div>
            <a href="./users.php?user=$user[username]">View</a>
          </div>
          <div class="item-user_name">
            $user[fullname]
          </div>
        </div>
      EOD;
    }

    static function OrderItem($order) {
      $paid = $order['paid'] ? 'PAGADO' : 'PENDIENTE';
      echo <<<EOD
        <div class='item-order'>
          <div class='item-order-info $paid'>
          <div class="item-order-info_sub">ID: $order[id]</div>
          <div class="item-order-info_sub">$paid</div>
            <div class="item-order-info_sub">$order[orderd_at]</div>
          </div>
          <div class='item-order-data-cont'>
            <div class="item-order-data">Total: $order[total]</div>
            <div class="item-order-data">Clothes: $order[counts]</div>
          </div>
        </div>
      EOD;
    }

  }

?>