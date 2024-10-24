<?php

interface BudgetInterface
{
    public function cost(): float;
}

class BasicBudget implements BudgetInterface
{
    private int $hours;
    private float $hourlyRate;

    public function __construct(int $hours, float $hourlyRate)
    {
        $this->hours = $hours;
        $this->hourlyRate = $hourlyRate;
    }

    public function cost(): float
    {
        return $this->hours * $this->hourlyRate;
    }
}

class BudgetDecorator implements BudgetInterface
{
    protected BudgetInterface $budget;

    public function __construct(BudgetInterface $budget)
    {
        $this->budget = $budget;
    }

    public function cost(): float
    {
        return $this->budget->cost();
    }
}

class ForeingBudgetDecorator extends BudgetDecorator {
    const EXCHANGE_RATE = 1.5;

    public function cost(): float {
        return parent::cost() * self::EXCHANGE_RATE;
    }
}

class CustomBudgetDecorator extends BudgetDecorator {
    const DISCOUNT = 0.9;

    public function cost(): float {
        return parent::cost() * self::DISCOUNT;
    }
}

$budget = new BasicBudget(10, 100);
echo "Presupuesto base: $ " . $budget->cost() . "<br>";

$foreingBudget = new ForeingBudgetDecorator($budget);
echo "Presupuesto exranjeros: $ " . $foreingBudget->cost() . "<br>";
