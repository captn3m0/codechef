---
category_name: medium
problem_code: CHEFPRES
problem_name: 'Chef Under Pressure'
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
max_timelimit: '1 - 2'
source_sizelimit: '50000'
problem_author: 'kamranmaharov '
problem_tester: shiplu
date_added: 9-09-2012
tags:
    - dec14
    - dfs
    - kamranmaharov
    - medium
    - tree
editorial_url: 'http://discuss.codechef.com/problems/CHEFPRES'
time:
    view_start_date: 1418643510
    submit_start_date: 1418643510
    visible_start_date: 1418643510
    end_date: 1735669800
    current: 1493557549
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/DEC14/mandarin/CHEFPRES.pdf) and [Russian](http://www.codechef.com/download/translated/DEC14/russian/CHEFPRES.pdf).

Chef is about to leave his home and live in a place called The Kingdom. There are **N** cities in this kingdom, and they are connected by bidirectional roads such that there is exactly one simple path between every 2 cities. The Kingdom is very unusual in that each road that connects two cities is exactly the same length.

The King has a monopoly over all commerce in the city and has very strict rules - he does not allow the citizens of a given city to sell more than one product. So in each city the desperate citizens sell exactly one product. There are **K** distinct products being sold overall in the Kingdom.

Let's number the cities with integers from **1** to **N**, and the products from **1** to **K**. The King lives in the capital city, city **B**. For each city **i**, the product that is sold in that city is denoted by **F(i)**.

After Chef has arrived and settled in, he plans to create a new recipe. This will require a certain product **P**, but this product may not be available in the city he will be living in - he will need to travel to that city to purchase it. Knowing the King's temper and remembering unpleasant incidents between him and the King in the past, Chef wants to stay as far as possible from the capital city (numbered **B**) during his travels.

Specifically, suppose Chef will be living in the city **A**. For each city **i**, let **G(i)** be the smallest distance between **B** and any city on the unique path connecting cities **A** and **i**. Chef wants to travel to the city **C** such that:

- **F(C)**=**P**
- There is no other city **D** having **F(D)**=**P** and **G(D)** > **G(C)**.

If there are several cities with this property, Chef will choose the one with the smallest number. It is possible that **C** may equal **A**, in which case he does not have to travel at all.

Chef has not yet decided which city to live in, nor which recipe to create. You are required to answer several queries for him - if he lives in city **A**, and requires product **P**, which city should he travel to in order to purchase it?

### Input

The first line of the input contains 2 integers: **N** and **K**. The next line contains the number **B** - the capital city of The Kingdom.

After this, there will be **N**-1 lines, each containing integers representing two cities, **X** and **Y** - indicating that there is a bidirectional road between cities **X** and **Y**.

The next **N** lines contain the description of cities: the **i**-th line contains a single integer **F(i)** - the product being sold in city **i**.

The next line will contain the number of queries, **Q**. The next **Q** lines contain 2 integers: **A** and **P**: the city Chef will be living in, and the product he requires.

### Output

For each of the **Q** queries, output on separate lines the number of the city from which Chef should buy the given product from, if there is any. Otherwise output **-1**.

### Constraints

- 1 ≤ **K** ≤ 100

### Subtask 1: \[point 20\]

- 1 ≤ **N** ≤ 100
- 1 ≤ **Q** ≤ 100

### Subtask 2:\[point 80\]

- 1 ≤ **N** ≤ 104
- 1 ≤ **Q** ≤ 104

### Example

<pre>
<b>Input:</b>
8 4
8
3 2
2 1
1 8
8 6
8 7
7 4
4 5
3
2
3
4
1
1
4
4
8
2 1
2 2
2 3
2 4
8 1
8 2
8 3
8 4

<b>Output:</b>
5
2
3
4
5
2
1
4

</pre>### Explanation

In the first query, Chef must purchase product 1 from either city 5 or city 6. In both cases Chef will pass directly through the capital while travelling from city 2, so he chooses the smallest city number, 5.

In the third query, the path from city 2 to city 3 is always at least 2 steps away from the capital. The path from city 2 to city 1 is less preferred, as the path comes within 1 step of the capital.
