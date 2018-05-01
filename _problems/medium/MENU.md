---
languages_supported:
    - NA
title: MENU
category: NA
old_version: true
problem_code: MENU
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Alfred wants to plan what to cook in the next days. He can cook various dishes. For each dish the costs of the ingredients and the benefit value is known. If a dish is cooked the second time in a row, the benefit value for the second time is 50 percent of the benefit value of first time, if it is prepared for the third or higher time in a row, the benefit value is 0. For example cooking a dish with benefit value v three times in a row leads to a total benefit value of 1.5\*v.
Help him to build the menu which maximizes the benefit value under the constraint that his budget is not exceeded.

### Input

The input consists of several test cases. Each test case begins with 3 integers in a line: The number of days _k_ (_1 ≤ k ≤ 21_) Alfred wants to plan for, the number of dishes _n_ (_1 ≤ n ≤ 50_) he can cook and his budget _m_ (_0 ≤ m ≤ 100_). The following _n_ lines describe the dishes Alfred can cook. The i-th line contains two integers: the costs _c_ (_1 ≤ c ≤ 50_) and the benefit value _v_ (_1 ≤ v ≤ 10000_) of the i-th dish.
The end of the input is signaled by a test case with _k = n = m = 0_. You don't need to process this test case.

### Output

For each output, print the maximum benefit value reachable with 1 digit after the decimal point. Then print k integers with i-th integer being the number of the dish to cook on day i. Dishes are numbered from 1 to n. Print at least one space or new line character after each integer.
If there are several possible menus reaching the maximum benefit value, select the one with minimum costs, if there are several with minimum costs, you can print any of them.
If every menu exceeds the budget, print only the benefit value of 0.

### Example

<pre>
<b>Input:</b>
2 1 5
3 5
3 5 20
2 5
18 6
1 1
3 3
2 3
0 0 0

<b>Output:</b>
0.0

13.0
1 5 1 
</pre>