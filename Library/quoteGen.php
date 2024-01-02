<?php

$quoteList = [
    '"To improve is to change; to be perfect is to change often" - Winston Churchill',
    '"Success is not final; Failure is not fatal; it is the courage to continue that counts" - Winston Churchill',
    '"Attitude is a little thing that makes a big difference" - Winston Churchill',
    '"Give us the tools, and we will finish the job" - Winston Churchill',
    '"It is a fine thing to be honest, but it is also very important to be right" - Winston Churchill',
    '"He who is not courageous enough to take risks will accomplish nothing in life."
    - Muhammad Ali'
];

$randomNum = rand(0, count($quoteList)-1);

echo $quoteList[$randomNum];
