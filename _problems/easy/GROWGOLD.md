---
category_name: easy
problem_code: GROWGOLD
problem_name: 'Golden Trees'
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
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: flying_ant
problem_tester: laycurse
date_added: 7-06-2012
tags:
    - cook23
    - easy
    - flying_ant
editorial_url: 'http://discuss.codechef.com/problems/GROWGOLD'
time:
    view_start_date: 1339959680
    submit_start_date: 1339959680
    visible_start_date: 1339959300
    end_date: 1735669800
    current: 1493558152
layout: problem
---
All submissions for this problem are available.Long ago there was a beautiful kingdom in the island of Sona, the golden island, deep inside Africa. The trees in Sona island are made of gold and farmers are the richest group of people and are also heavy tax payers.

As you know that price of gold increases every year, the minister of Sona has proposed the following tax policy.

- Pay **initTax** units of gold in the first year.
- In each of the next **slot1** years, pay one unit of gold more than the previous year.
- In each of the next **slot2** years, pay double the units of gold of the previous year.
- In each of the following years, pay number of gold units equal to the product of the number of units paid in **K** recent years.


Given an integer **N**, find the number of units of gold to be paid in the **N**th year. This result can be huge, so output the result modulo 100000007 (108+7).

### Input

First line has an integer **T** (number of test cases, 1 ≤ **T** ≤ 3). Each of the next **T** lines has 5 integers, **initTax slot1 slot2 K N**.
1 ≤ **initTax**, **slot1**, **slot2** ≤ 50
1 ≤ **K** ≤ **slot1** + **slot2** + 1
1 ≤ **N** ≤ 1000000000 (109)

### Output

For each test case, output the tax in units of gold to be paid in the **N**th year modulo 100000007 (108+7).

### Example

<pre>
<b>Input:</b>
3
1 3 2 4 4
1 3 2 4 7
1 3 2 4 9

<b>Output:</b>
4
1536
18811834

</pre>**Explanation:**

Let tax\[i\] be the tax paid in ith year.

Init : tax\[1\] = 1

Next 3 years in slot1 (tax\[i\] = tax\[i-1\] + 1) : tax\[2\] = 2 , tax\[3\] = 3, tax\[4\] = 4

Next 2 years in slot2 (tax\[i\] = 2 \* tax\[i-1\]) : tax\[5\] = 8 , tax\[6\] = 16

We have tax\[1..6\] = { 1, 2, 3, 4, 8, 16 }

tax\[7\] = tax\[3\] \* tax\[4\] \* tax\[5\] \* tax\[6\] = 3 \* 4 \* 8 \* 16 = 1536

similarly, tax\[9\] = tax\[5\] \* tax\[6\] \* tax\[7\] \* tax\[8\].

Do not forget to print only the reminder of the result when divided by 100000007 (108+7).
