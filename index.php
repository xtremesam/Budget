<?php
  
$annualExpenses = [
    "vacations" => 1000,
    "carRepairs" => 1000,    
];

$monthlyExpenses = [
    "rent" => 1500,
    "utilities" => 200,
    "healthInsurance" => 200
];

$grossSalary = 48150;
$socialSecurity = $grossSalary * .062;

$incomeSegments = [[9700, .88], [29775, .78], [8675, .76]];

// Write your code below:
$netIncome = ($incomeSegments[0][0] * $incomeSegments[0][1]) + ($incomeSegments[1][0] * $incomeSegments[1][1]) + ($incomeSegments[2][0] * $incomeSegments[2][1]);

$annualIncome =($netIncome - $socialSecurity);
print_r("Annual income before deducting annual expenses:\n$annualIncome\n");

echo "\n";

$annualIncome = $annualIncome - $annualExpenses["vacations"];

$annualIncome = $annualIncome - $annualExpenses["carRepairs"];

print_r("Annual income after calculation:\n$annualIncome\n");

echo "\n";
$monthlyIncome = $annualIncome / 12;

print_r("monthly income before deducting monthly expenses:\n$monthlyIncome\n");

echo "\n";
$monthlyIncome = $monthlyIncome - $monthlyExpenses["rent"];
$monthlyIncome = $monthlyIncome - $monthlyExpenses["utilities"];
$monthlyIncome = $monthlyIncome - $monthlyExpenses["healthInsurance"];

print_r("monthly income after deducting monthly expenses:\n$monthlyIncome\n");

echo "\n";
$weeklyIncome = $monthlyIncome / 4.33;
print_r("weekly income after before deducting weekly expenses:\n$weeklyIncome\n");

echo "\n";
$weeklyExpenses = 
[
   "gas" => 25,
   "food" => 90,
   "entertainment" => 47
];

$weeklyIncome = $weeklyIncome - $weeklyExpenses["gas"];
$weeklyIncome = $weeklyIncome - $weeklyExpenses["food"];
$weeklyIncome = $weeklyIncome - $weeklyExpenses["entertainment"];

echo "\n";
print_r("weekly income after deducting weekly expenses:\n$weeklyIncome\n");

echo "\n";
$remainingMoney = $weeklyIncome * 52;
print_r("Remaining income:\n$remainingMoney\n");
