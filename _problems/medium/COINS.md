---
languages_supported:
    - NA
title: COINS
category: NA
old_version: true
problem_code: COINS
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

In Byteland they have a very strange monetary system.

Each Bytelandian gold coin has an integer number written on it. A coin n can be exchanged in a bank into three coins: n/2, n/3 and n/4. But these numbers are all rounded down (the banks have to make a profit).

You can also sell Bytelandian coins for American dollars. The exchange rate is 1:1. But you can not buy Bytelandian coins.

You have one gold coin. What is the maximum amount of American dollars you can get for it?

### Input

The input will contain several test cases (not more than 10). Each testcase is a single line with a number n, 0 &lt;= n &lt;= 1 000 000 000. It is the number written on your coin.

### Output

For each test case output a single line, containing the maximum amount of American dollars you can make.

### Example

<pre><b>Input:</b>
12
2

<b>Output:</b>
13
2
</pre>
You can change 12 into 6, 4 and 3, and then change these into $6+$4+$3 = $13. If you try changing the coin 2 into 3 smaller coins, you will get 1, 0 and 0, and later you can get no more than $1 out of them. It is better just to change the 2 coin directly into $2.
