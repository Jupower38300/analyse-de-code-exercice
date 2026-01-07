<?php

class PaymentService {

    public function pay(int $price,string $type): float {

        if ($price <= 0) {
            throw new InvalidArgumentException("Le prix doit être supérieur à zéro.");
        }

        $price = match($type) {
            "card" => $price * 1.03,
            "paypal" => $price * 1.05,
            default => $price,
        };

        return $price;
    }

    public function calculateTax(float $amount, float $taxRate): float {
        return $amount * $taxRate;
    }
}

// Exemple d'utilisation
$service = new PaymentService();
try {
    $finalPrice = $service->pay(100, "card");
    echo "Prix final : " . $finalPrice;
} catch (InvalidArgumentException $e) {
    echo "Erreur : " . $e->getMessage();
}




