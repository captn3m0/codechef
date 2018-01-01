---
category_name: medium
problem_code: TADELIVE
problem_name: 'Delivery Man'
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
problem_author: tuananh93
problem_tester: stzgd
date_added: 6-12-2014
tags:
    - dynamic
    - greedy
    - ltime19
    - simple
    - tuananh93
editorial_url: 'http://discuss.codechef.com/problems/TADELIVE'
time:
    view_start_date: 1419755400
    submit_start_date: 1419755400
    visible_start_date: 1419755400
    end_date: 1735669800
    current: 1493557941
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME19/mandarin/TADELIVE.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME19/russian/TADELIVE.pdf).

Andy and Bob are the only two delivery men of Pizza-chef store. Today, the store received **N** orders. It's known that the amount of tips may be different when handled by different delivery man. More specifically, if Andy takes the **i**th order, he would be tipped **Ai** dollars and if Bob takes this order, the tip would be **Bi** dollars.

They decided that they would distribute the orders among themselves to maximize the total tip money. One order will be handled by only one person. Also, due to time constraints Andy cannot take more than **X** orders and Bob cannot take more than **Y** orders. It is guaranteed that **X** + **Y** is greater than or equal to **N**, which means that all the orders can be handled by either Andy or Bob.

Please find out the maximum possible amount of total tip money after processing all the orders.

### Input

- The first line contains three integers **N**, **X**, **Y**.
- The second line contains **N** integers. The **i**th integer represents **Ai**.
- The third line contains **N** integers. The **i**th integer represents **Bi**.

### Output

- Print a single integer representing the maximum tip money they would receive.

### Constraints

**All test:**- **1** ≤ **N** ≤ **105**
- **1** ≤ **X**, **Y** ≤ **N**; **X** + **Y** ≥ **N**
- **1** ≤ **Ai**, **Bi** ≤ **104**

**10 points:**

- **1** ≤ **N** ≤ **20**

**30 points:**

- **1** ≤ **N** ≤ **5000**

**60 points:**- **1** ≤ **N** ≤ **105**

### Example

<pre><b>Input:</b>
5 3 3
1 2 3 4 5
5 4 3 2 1

<b>Output:</b>
21

</pre>### Explanation
Bob will take the first three orders (or the first two) and Andy will take the rest (of course).
