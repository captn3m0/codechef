---
category_name: easy
problem_code: HELLO
problem_name: 'Hello Hello'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - 'C99 strict'
    - CAML
    - CLOJ
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 4.9.2'
    - CPP14
    - CS2
    - D
    - ERL
    - FORT
    - FS
    - GO
    - HASK
    - ICK
    - ICON
    - JAVA
    - JS
    - 'LISP clisp'
    - 'LISP sbcl'
    - LUA
    - NEM
    - NICE
    - NODEJS
    - 'PAS fpc'
    - 'PAS gpc'
    - PERL
    - PERL6
    - PHP
    - PIKE
    - PRLG
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: 'vinayak garg'
problem_tester: null
date_added: 29-01-2013
tags:
    - aug13
    - simple
    - simple
    - vinayak
editorial_url: 'http://discuss.codechef.com/problems/HELLO'
time:
    view_start_date: 1376299800
    submit_start_date: 1376299800
    visible_start_date: 1376299800
    end_date: 1735669800
    current: 1493558152
layout: problem
---
All submissions for this problem are available.Chef talks a lot on his mobile phone. As a result he exhausts his talk-value (in Rokdas) very quickly. One day at a mobile recharge shop, he noticed that his service provider gives add-on plans which can lower his calling rates (Rokdas/minute). One of the plans said "Recharge for 28 Rokdas and enjoy call rates of 0.50 Rokdas/min for one month". Chef was very pleased. His normal calling rate is 1 Rokda/min. And he talked for 200 minutes in last month, which costed him 200 Rokdas. If he had this plan activated, it would have costed him: 28 + 0.5\*200 = 128 Rokdas only! Chef could have saved 72 Rokdas. But if he pays for this add-on and talks for very little in the coming month, he may end up saving nothing or even wasting money. Now, Chef is a simple guy and he doesn't worry much about future. He decides to choose the plan based upon his last month’s usage.

There are numerous plans. Some for 1 month, some for 15 months. Some reduce call rate to 0.75 Rokdas/min, some reduce it to 0.60 Rokdas/min. And of course each of them differ in their activation costs. **Note** - If a plan is valid for **M** months, then we must pay for (re)activation after every **M** months (once in M months). Naturally, Chef is confused, and you (as always) are given the task to help him choose the best plan.

### Input

First line contains **T**- the number of test cases. In each test case, first line contains **D**- the default rate (Rokdas/minute, real number), **U**- the number of minutes Chef talked in last month and **N**- the number of add-on plans available. Then **N** lines follow, each containing **M**- the number of months the plan is valid for, **R**- the calling rate for the plan (Rokdas/minute, real number) and **C**- the cost of the plan.

### Output

For each test case, output one integer- the number of the best plan (from 1 to N). Output '0' if no plan is advantageous for Chef. No two plans are equally advantageous.

### Constraints

1 ≤ **T** ≤ 100
0\.5 ≤ **D** ≤ 10.0 (exactly 2 digits after the decimal point)
1 ≤ **U** ≤ 10000
1 ≤ **N** ≤ 100
1 ≤ **M** ≤ 36
0\.05 ≤ **R** < **D** (exactly 2 digits after the decimal point)
1 ≤ **C** ≤ 1000

### Example

```

<b>Input:</b>
4
1.00 200 1
1 0.50 28
1.00 200 2
1 0.75 40
3 0.60 100
1.00 50 2
1 0.75 40
3 0.60 100
1.00 100 2
3 0.50 10
2 0.10 20

<b>Output:</b>
1
2
0
2

```
### Explanation

**Test Case 1:** This test case is same as the example in the problem statement.
**Test Case 2:** This is for you to work out!
**Test Case 3:** Chef's monthly usage is only 50 Rokdas and none of the 2 plans are advantageous, hence the answer is zero '0'.
**Test Case 4:** Again solve it yourself, but NOTE - if Chef had chosen plan 1, he would have to pay 10 Rokdas (Activation cost), after every 3 months and NOT every month. Similarly had he chosen plan 2, he would have to pay 20 Rokdas (Activation cost), after every 2 months.