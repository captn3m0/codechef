---
category_name: hard
problem_code: PRIMEDST
problem_name: 'Prime Distance On Tree'
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
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: cgy4ever
problem_tester: white_king
date_added: 12-06-2013
tags:
    - aug13
    - cgy4ever
    - dfs
    - fft
    - graph
    - hard
editorial_url: 'http://discuss.codechef.com/problems/PRIMEDST'
time:
    view_start_date: 1376299800
    submit_start_date: 1376299800
    visible_start_date: 1376299800
    end_date: 1735669800
    current: 1493556981
layout: problem
---
All submissions for this problem are available.### Problem description.

You are given a tree. If we select 2 distinct nodes uniformly at random, what's the probability that the distance between these 2 nodes is a prime number?

### Input

The first line contains a number **N**: the number of nodes in this tree.
The following **N**-1 lines contain pairs a\[i\] and b\[i\], which means there is an edge with length 1 between a\[i\] and b\[i\].

### Output

Output a real number denote the probability we want.
You'll get accept if the difference between your answer and standard answer is no more than 10^-6.

### Constraints

**2** ≤ **N** ≤ **50,000**

The input must be a tree.

### Example

<pre><b>Input:</b>
5
1 2
2 3
3 4
4 5

<b>Output:</b>
0.5

</pre>### Explanation
We have C(5, 2) = 10 choices, and these 5 of them have a prime distance:

1-3, 2-4, 3-5: 2

1-4, 2-5: 3

Note that 1 is not a prime number.
