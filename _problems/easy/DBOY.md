---
category_name: easy
problem_code: DBOY
problem_name: 'Pizza Delivery'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: khadarbasha
problem_tester: laycurse
date_added: 27-10-2012
tags:
    - dec12
    - dynamic
    - khadarbasha
    - simple
editorial_url: 'http://discuss.codechef.com/problems/DBOY'
time:
    view_start_date: 1355221020
    submit_start_date: 1355221020
    visible_start_date: 1355221020
    end_date: 1735669800
    current: 1493558134
layout: problem
---
All submissions for this problem are available.**Chef Po** had recently started home delivery service for pizzas. Po has only a single delivery boy that delivers the orders by riding his motorcycle. The motorcycle has an unlimited capacity of fuel tank. However, it is too old and can only ride 1 km for each 1 liter of fuel.

There are **N** fuel stations near the restaurant. The **i-th** fuel station can fill a fuel tank exactly **Ki** liters; not more and not less. Filling a fuel tank with any amount of fuel in those stations tends to take a long time. Since the fuel stations are placed near the restaurant, no fuel is needed to go to a fuel station.

Today Chef Po received **N** pizza orders, which is the same number of fuel stations fortuitously. The house of the person that ordered the **i-th** order is **Hi** km away from the restaurant. The delivery boy cannot deliver more than one order at a time. Therefore, after delivering an order, he must return back to the restaurant to take the next order.

The delivery boy is an efficient person and thus he wants to fill the fuel tank with the exact amount of fuel required to deliver an order and return back. He also does not want to spends much time filling the tank, so he wants to minimize the number of times he fills the tank. Help him determine the minimum number of times he must fill the tank to deliver all orders.

### Input

The first line contains a single integer **T** denoting the number test cases. The description of **T** test cases follows. For each test case, the first line contains a single integer **N**. The second line contains **N** space-separated integers **Hi**. The third line contains **N** space-separated integers **Ki**.

### Output

For each test case, output a single line containing the minimum number of times the delivery boy must fill the tank.

### Constraints

1 ≤ **T** ≤ 500
1 ≤ **N** ≤ 500
1 ≤ **Hi** ≤ 500
1 ≤ **Ki** ≤ 500
There is at least one way for completing the deliveries.
That is, the delivery boy always can fill a fuel tank exactly 2 \* **Hi** liters for 1 ≤ **i** ≤ **N**.

### Example

<pre>
<b>Input:</b>

1
4
1 2 3 4
1 4 5 3

<b>Output:</b>

7

</pre>### Explanation:

Here is one possible solution.

For the first order, the delivery boy must ride 1 + 1 = 2 km long. Fill the tank twice in the first fuel station.

For the second order, the delivery boy must ride 2 + 2 = 4 km long. Fill the tank once in the second fuel station.

For the third order, the delivery boy must ride 3 + 3 = 6 km long. Fill the tank twice in the fourth fuel station.

For the fourth order, the delivery boy must ride 4 + 4 = 8 km long. Fill the tank in the third and fourth fuel stations.

In total, the delivery boy must fill the tank 7 times. There is no way to fill the tank less than 7 times.
