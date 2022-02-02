---
category_name: medium
problem_code: COUPON
problem_name: 'Online Shopping'
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
problem_author: vamsi_kavala
problem_tester: Rubanenko
date_added: 7-06-2013
tags:
    - dynamic
    - ltime01
    - simple
    - simple
    - vamsi_kavala
editorial_url: 'http://discuss.codechef.com/problems/COUPON'
time:
    view_start_date: 1372581279
    submit_start_date: 1372581279
    visible_start_date: 1372581279
    end_date: 1735669800
    current: 1493557611
layout: problem
---
All submissions for this problem are available.Alice likes to shop online. The main reason is that she gets a lot of discounts! There are **M** online shops from where she purchases her items. The prices of the same item vary in both the shops. She needs to buy **N** items in all. And each she can buy each item in any one of the shops. All the shops offer certain discounts. If she buys the *i*th item in one shop, she gets a discount coupon for the *i+1*th item in the same shop. But if she purchases the *i+1*th item from a different shop, she cannot use the discount coupon.
 For example, if she buys the *i*th item in Shop *j* and gets a discount of ***X*** rupees. Let the price of *i+1*th item be ***Y*** rupees in shop *j* and ***Z*** rupees in shop *k*. If she purchases the *i+1*th item from shop *j* she can use the discount coupon and hence, will have to pay ***Y-X*** rupees. If she purchases the *i+1*th item from shop *k* she cannot use the discount coupon and hence, will have to pay ***Z*** rupees.

**Note:** If the discount given is more than price of the item in the shop, i.e. if ***Y-X*** &lt; 0, the item is given free but she does NOT get any money back.

Alice wants to spend as less as possible and wants your help. She starts buying from item 1 and goes on till item N in that order. Your task is simple. Tell her the least amount to spend to get all the **N** items.

### Input:

First line of input contains a single integer **T**, the number of test cases.

Each test case starts with a line consisting of two space separated integers **N** &amp; **M**.
The next **N** lines consist of **M** space separated integers each. The *j*th number on the *i*th line denotes the price of *i*th item in the *j*th shop.

The next **N** lines consist of **M** space separated integers each. The *j*th number on the *i*th line denotes the value of discount coupon given after purchasing *i*th item in the *j*th shop.

### Output:

For each test case, output on a separate line the least amount that has to be spent to get all the **N** items.

### Constraints:

<pre>
1 ≤ <b>T</b> ≤ 10
2 ≤ <b>N, M</b> ≤ 100000
0 ≤ Prices, Discounts ≤ 1000000
1 ≤ <b>T * N * M</b> ≤ 1000000

</pre>
### Example:

**Input:**

<pre>
2
2 2
3 4
1 2
1 0
0 1
2 4
1 2 3 4
4 3 2 1
2 3 2 1
1 2 1 1


</pre>
**Output:**

<pre>
3
2

</pre>
### Scoring:

You will be awarded **40** points for solving the problem correctly for **M = 2**.

Another **20** points for solving the problem correctly for **M &lt;= 100**.

Remaining **40** points will be awarded for solving the problem correctly for **M &gt; 100**.
