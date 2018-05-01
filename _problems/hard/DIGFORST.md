---
category_name: hard
problem_code: DIGFORST
problem_name: 'Digits Forest'
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
problem_author: anhdq
problem_tester: subra
date_added: 22-08-2011
tags:
    - anhdq
    - hard
    - may12
editorial_url: 'http://discuss.codechef.com/problems/DIGFORST'
time:
    view_start_date: 1336723152
    submit_start_date: 1336723152
    visible_start_date: 1336728600
    end_date: 1735669800
    current: 1493556690
layout: problem
---
All submissions for this problem are available.Given a simple undirected graph containing N vertices numbered 1 to N, each vertex containing a digit from {1,2,..7}. Starting at the vertex 1 with an empty string S, we travel through some vertices (with no limitations) to the vertex N. For every vertex on the way, we add the respective digit to the right of the string S. At last we get S as a decimal integer. You are requested to find such a way satisfying S is divisible by all of its digits, and the sum of digits of S must be as small as possible.

### Input

There are several test cases (fifteen at most), each formed as follows:

- The first line contains a positive integer N (N ≤ 100).
- The second line contains N digits (separated by spaces), the i-th digit is the value of the i-th vertex.
- N last lines, each contains N values of {0, 1} (separated by spaces), the j-th value of the i-th line is equal to 1 if there is an edge connecting two vertices (i, j), otherwise 0.

The input is ended with N = 0. ### Output

For each test case, output on a line the minimum sum of digits found, or **-1** if there's no solution.

### Example

<pre>
<b>Input:</b>
4
1 2 1 4
0 1 1 1
1 0 0 1
1 0 0 1
1 1 1 0
0

<b>Output:</b>
7
</pre>