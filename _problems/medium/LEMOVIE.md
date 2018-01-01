---
category_name: medium
problem_code: LEMOVIE
problem_name: 'Little Elephant and Movies'
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
problem_author: witua
problem_tester: laycurse
date_added: 20-03-2012
tags:
    - easy
    - feb14
    - witua
editorial_url: 'http://discuss.codechef.com/problems/LEMOVIE'
time:
    view_start_date: 1392629400
    submit_start_date: 1392629400
    visible_start_date: 1392629400
    end_date: 1735669800
    current: 1493557747
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/FEB14/mandarin/LEMOVIE.pdf) and [Russian](http://www.codechef.com/download/translated/FEB14/russian/LEMOVIE.pdf).

Little Elephant from Zoo of Lviv likes to watch movies.

There are **N** different movies (numbered from  to **N − 1**) he wants to watch in some order. Of course, he will watch each movie exactly once. The priority of **i**th movie is **Pi**.

A watching of a movie is called _exciting_ if and only if one of the following two conditions holds:

- This is the first watching.
- The priority of this movie is strictly greater than the maximal priority of the movies watched so far.

Let us call the number of _exciting_ watchings the _excitingness_ of the order.

Help him to find the number of different watching orders whose _excitingness_ does not exceed **K**. Since the answer can be large, print it modulo **1000000007 (109+7)**.

### Input

The first line of input contains an integer **T**, denoting the number of test cases. Then **T** test cases follow.

The first line of each test case contains two space-separated integers **N** and **K**. The next line contains **N** space-separated integers **P1**, **P2**, ..., **PN**.

### Output

For each test case, print the number of different watching orders having at most **K** _excitingness_ modulo **1000000007 (109+7)**.

### Constraints

- **1 ≤ T ≤ 10**
- **1 ≤ K ≤ N ≤ 200**
- **1 ≤ Pi ≤ 200**

### Example

<pre>
<b>Input:</b>
2
3 1
3 1 2
4 3
1 2 2 3

<b>Output:</b>
2
24

</pre>### Explanation
In the first case, there are two boring watching orders whose _excitingness_ not greater than **K=1**: **\[3, 1, 2\]**, **\[3, 2, 1\]**. Both watching orders have one _exciting_ watching: the first watching.

In the second case, every watching order has at most **3** _excitingness_.
