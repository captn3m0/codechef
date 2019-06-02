---
category_name: school
problem_code: BRLADDER
problem_name: 'Bear and Ladder'
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
    - PYPY
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: errichto
problem_tester: kingofnumbers
date_added: 24-03-2017
tags:
    - cakewalk
    - errichto
    - ltime46
editorial_url: 'https://discuss.codechef.com/problems/BRLADDER'
time:
    view_start_date: 1490461200
    submit_start_date: 1490461200
    visible_start_date: 1490461200
    end_date: 1735669800
    current: 1492507154
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME46/mandarin/BRLADDER.pdf), [Russian](http://www.codechef.com/download/translated/LTIME46/russian/BRLADDER.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME46/vietnamese/BRLADDER.pdf) as well.

Bearland has infinitely many cities, numbered starting from 1. Some pairs of cities are connected with bidirectional roads:

- There are roads 1-2, 3-4, 5-6, 7-8, and so on (there is a road between cities 2\*i+1 and 2\*i+2 for every non-negative integer i).
- There are roads 1-3, 3-5, 5-7, 7-9, ... (between every two consecutive odd numbers).
- There are roads 2-4, 4-6, 6-8, 8-10, ... (between every two consecutive even numbers).

This is how the first few cities and roads between them look like:

![](https://codechef_shared.s3.amazonaws.com/uploads/2017/03/LTIME46/BRLADDER.png)

You are given **Q** queries. In each query, for the given pair of different cities **a** and **b**, you should check if there is a road between them. For each query, print "YES" or "NO" accordingly.

### Input

The first line of the input contains an integer **Q**, denoting the number of queries.

Each of the following **Q** lines contains two distinct integers **a** and **b**, denoting two cities in one query.

### Output

For each query, output a single line containing the answer — "YES" if there is a road between the given cities **a** and **b**, and "NO" otherwise (without the quotes).

### Constraints

- 1 ≤ **Q** ≤ 1000
- 1 ≤ **a**, **b** ≤ 109
- **a** ≠ **b**

### Example

<pre><b>Input:</b>
7
1 4
4 3
5 4
10 12
1 3
999999999 1000000000
17 2384823

<b>Output:</b>
NO
YES
NO
YES
YES
YES
NO
</pre>
### Explanation

In the example test, the answer is "YES" for pairs (4, 3), (10, 12), (1, 3) and (999999999, 1000000000). Roads 3-4 and 1-3 you can see on the drawing in the statement.

The answer is "NO" for example for a pair (1, 4), because there is no road between cities 1 and 4.
