---
category_name: medium
problem_code: KNPSK
problem_name: 'Knapsack Problem'
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
problem_author: kostya_by
problem_tester: rustinpiece
date_added: 31-05-2014
tags:
    - cook47
    - easy
    - greedy
    - kostya_by
    - sorting
editorial_url: 'http://discuss.codechef.com/problems/KNPSK'
time:
    view_start_date: 1403464500
    submit_start_date: 1403464500
    visible_start_date: 1403464500
    end_date: 1735669800
    current: 1493557717
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK47/mandarin2/KNPSK.pdf) and [Russian](http://www.codechef.com/download/translated/COOK47/russian/KNPSK.pdf) as well.

Mike takes part in programming contests. His favourite topic is dynamic programming(DP). As he said, that he likes problems on DP, because "you spend a lot of time on thinking and a little time on coding".

In this problem you are to solve a version of the knapsack problem([link](http://en.wikipedia.org/wiki/Knapsack_problem)), one of the most famous examples of DP problem.

You are given **N** items, each has two parameters: a weight and a cost. Let's define **M** as the sum of the weights of all the items.

Your task is to determine the most expensive cost of a knapsack, which capacity equals to 1, 2, ..., **M**. A cost of a knapsack equals to the sum of the costs of all the elements of the knapsack. Also, when you have a knapsack with a capacity is equal to **C**, then you can fill it with items, whose sum of weights is not greater than **C**.

### Input

The first line of the input contains one integer **N**, denoting the number of the items.

The next **N** lines contain two integers **W** and **C** each, denoting the weight and the cost of the corresponding item.

### Output

For each capacity **C** (**1 ≤ C ≤ M**) of the knapsack, output a single integer - the most expensive cost for that capacity.

### Constraints

3 ≤ **N** ≤ 100000;

1 ≤ **W** ≤ 2, for each item;

1 ≤ **C** ≤ 109, for each item.

### Example

<pre><b>Input:</b>
5
1 1
2 2
2 3
2 4
2 5

<b>Output:</b>
1 5 6 9 10 12 13 14 15 

</pre>### Explanations
In the test case, **M** equals to 9.

For **C** = 1, it's optimal to choose {1} items;

For **C** = 2, it's optimal to choose {5} items;

For **C** = 3, it's optimal to choose {1, 5} items;

For **C** = 4, it's optimal to choose {4, 5} items;

For **C** = 5, it's optimal to choose {1, 4, 5} items;

For **C** = 6, it's optimal to choose {3, 4, 5} items;

For **C** = 7, it's optimal to choose {1, 3, 4, 5} items;

For **C** = 8, it's optimal to choose {2, 3, 4, 5} items;

For **C** = 9, it's optimal to choose {1, 2, 3, 4, 5} items.
