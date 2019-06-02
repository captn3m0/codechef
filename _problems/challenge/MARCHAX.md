---
category_name: challenge
problem_code: MARCHAX
problem_name: 'Place the mines!'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - rust
    - SCALA
    - swift
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - TCL
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '0.434783'
source_sizelimit: '50000'
problem_author: admin
problem_tester: null
date_added: 19-03-2009
tags:
    - admin
time:
    view_start_date: 1237966798
    submit_start_date: 1237966798
    visible_start_date: 1237966798
    end_date: 1735669800
    current: 1525454420
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.**The following problem appeared in the [CodeChef March '09 Challenge.](http://www.codechef.com/MARCH09/)**

**The following a tie breaker problem. The best answer will receive one point. All other successful answers will be scored on a curve and receive a fraction of a point based on how close they come to the best answer.**

You are given a large square area with an edge length of 2n, subdivided into unit squares (fields). Some mines have already been planted on certain fields, and we would like to plant as few more mines as possible, so as to destroy all of the fields of the area (assuming all the mines explode simultaneously). For each mine, the fields it destroys are given as follows. For any  k , 0 k n, we can partition the considered area into 2n rectangles of size 2k x 2n-k. The mine is assumed to destroy a square if and only if the mine and the square belong to the same rectangle in the considered partition, for some value of k.

For example, if n=3, the mine "\*" placed on the square at position (1,1) will destroy all the fields which are not marked with dots below:

<pre><tt>
.#......
.#......
.#......
.#......
##......
##......
#*######
####....
</tt>
</pre>
### Input

The first line will contain integer 8nn is the size of the area). The second line will contain 0n, the number of already planted mines. The next m lines will contain the 0-based x and y coordinates of the existing mines.

### Output

The first line should contain t - the number of mines to be added. The next t lines should contain the coordinates of the added mines.

### Scoring

For each test case, you will receive (2n-m)/t-1 points, provided you destroy all the fields of the area. ### Example

<pre>
<b>Input:</b>
2
1
3 3

<b>Output:</b>
2
0 1
2 2
</pre>
You will receive (4-1)/2 - 1 = 0.5 pts for such a mine placement.

**Note:**There will be some tests with no initially placed mines, and some tests with initial placements covering most of the area pretty well. Good luck!
