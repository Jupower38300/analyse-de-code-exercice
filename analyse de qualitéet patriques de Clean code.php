<?php

class OrderManager {

    public function processData($data) {

        if ($data == null) {
            error_log('No data provided');
            return 0;
        }

        $total = 0;
        if (isset($data['price']) && $data['price'] > 0) {
            $total = $data['price'] * 1.2;
        }

        if (isset($data['promo'])) {
            $total = $total - 5;
        }

        return $total;
    }
}