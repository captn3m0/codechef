---
category_name: medium
problem_code: AX
problem_name: 'Place the mines!'
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
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: admin
problem_tester: null
date_added: 1-12-2008
tags:
    - admin
time:
    view_start_date: 1367924921
    submit_start_date: 1367924921
    visible_start_date: 1367924777
    end_date: 1735669800
    current: 1493557484
layout: problem
---
All submissions for this problem are available.**The following a tie breaker problem. The best answer will receive one point. All other successful answers will be scored on a curve and receive a fraction of a point based on how close they come to the best answer.**

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
</pre>### Input
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

</pre>You will receive (4-1)/2 - 1 = 0.5 pts for such a mine placement.
**Note:**There will be some tests with no initially placed mines, and some tests with initial placements covering most of the area pretty well. Good luck!
