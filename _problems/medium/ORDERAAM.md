---
category_name: medium
problem_code: ORDERAAM
problem_name: 'Chef and the Orders'
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
problem_author: 'satej '
problem_tester: gerald
date_added: 6-01-2014
tags:
    - cook42
    - greedy
    - hard
    - min
    - satej
editorial_url: 'http://discuss.codechef.com/problems/ORDERAAM'
time:
    view_start_date: 1390158900
    submit_start_date: 1390158000
    visible_start_date: 1390158900
    end_date: 1735669800
    current: 1493557830
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK42/mandarin/ORDERAAM.pdf) and [Russian](http://www.codechef.com/download/translated/COOK42/russian/ORDERAAM.pdf) as well.

Chef gets **N** orders. The orders are numbered from **1** to **N**. He gets order **i** at **Si** time, and this order contains **Xi** number of items. Chef needs to serve each of these **Xi** items before **Di** time and for each unit of items he cannot cook before this deadline he needs to pay **Pi** unit of money as penalty. Given all of the orders, help the Chef to minimize the penalty he will have to pay. 

 **Important Note**: Chef can cook at most one item at a unit time and for each item he needs exactly one unit of time to cook. Also Chef can serve an item instantly, when the item is cooked. If Chef wants to serve an item at time **t**, then the latest he can cook that item is at time time **t**. In another words, for order **i** Chef can cook the items at time units **Si**, **Si+1**, **Si+2**, ..., **Di-1**. Please note, that Chef can not cook items from order **i** exactly at time unit **Di**.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. Each test case starts with a line containing **N** the number of orders. Each of the next **N** lines contains the description of an order. Order **i** is given as a four integers **Si**, **Xi**, **Di** and **Pi** in a single line separated by a single space.

### Output

For each test case, output a single line containing the minimum amount of penalty Chef has to pay.

### Constraints

- **1** ≤ **T** ≤ **50**
- **1** ≤ **N** ≤ **200**
- **1** ≤ **Si** ≤ **108**
- **1** ≤ **Xi** ≤ **108**
- **1** ≤ **Di** ≤ **108**
- **1** ≤ **Pi** ≤ **108**
- **Si**+**Xi** ≤ **Di**

### Example

<pre><b>Input:</b>
5
1
1 5 6 10
2
1 5 6 10
1 5 6 10
2
1 5 6 1
1 5 6 10
2
1 5 6 10
6 5 11 10
4
5 8 15 20
11 8 20 21
16 8 25 22
21 8 30 23

<b>Output:</b>
0
50
5
0
147

</pre>### Explanation

**Example 1:** There is only 1 order and all of the items from this order can be served. So zero penalty

**Example 2:** There are two orders and you cannot serve 5 items. You can select these 5 items from any order.

**Example 3:** There are two orders and you cannot serve 5 items. But it is better not to serve these 5 items from the first order.
