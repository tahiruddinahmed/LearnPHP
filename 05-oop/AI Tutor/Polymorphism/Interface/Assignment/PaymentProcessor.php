<?php 

interface PaymentProcessor {
    public function processPayment(float $amount): bool;
    public function refundPayment(float $amount): bool;
}

abstract class OnlinePaymentProcessor implements PaymentProcessor {
    public function __construct(
        protected string $apiKey
    ){}

    abstract protected function validateApiKey(): bool;
    abstract protected function executePayment(): bool;
    abstract protected function executeRefund(): bool;

    public function processPayment(float $amount): bool {
        if(!$this->validateApiKey()) {
            throw new Exception('Invalid API key');
        }

        return $this->executePayment();
    }

    public function refundPayment(float $amount): bool {
        if(!$this->validateApiKey()) {
            throw new Exception('Invalid API key');
        }

        return $this->executeRefund();
    }
}

class StripeProcessor extends OnlinePaymentProcessor {
    protected function validateApiKey(): bool
    {
        return strpos($this->apiKey, 'sk_') === 0;
    }

    protected function executePayment(): bool {
        echo "Payment executed ....";
        return true;
    }
    protected function executeRefund(): bool {
        echo "Payment refunded ....";
        return true;
    }
    
}

class cashProcessor implements PaymentProcessor {
    public function processPayment(float $amount): bool {
        echo "Cash Payment ....";
        return true;
    }
    public function refundPayment(float $amount): bool {
        echo "Cash Refund ....";
        return true;
    }
}

$processor = new StripeProcessor("sk_");
$processor->processPayment(500);

$cash = new cashProcessor();
$cash->refundPayment(500);