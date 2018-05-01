---
category_name: medium
problem_code: KCONNECT
problem_name: 'Chef And A Complete Graph'
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
problem_author: ma5termind
problem_tester: pushkarmishra
date_added: 25-10-2015
tags:
    - ma5termind
editorial_url: 'http://discuss.codechef.com/problems/KCONNECT'
time:
    view_start_date: 1448785800
    submit_start_date: 1448785800
    visible_start_date: 1448785800
    end_date: 1735669800
    current: 1493557709
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME31/mandarin/SVNTR.pdf), [Russian](http://www.codechef.com/download/translated/LTIME31/russian/SVNTR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME31/vietnamese/SVNTR.pdf) as well.

###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME30/mandarin/KCONNECT.pdf), [Russian](http://www.codechef.com/download/translated/LTIME30/russian/KCONNECT.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME30/vietnamese/KCONNECT.pdf)

Chef loves to play with graphs. Today, Chef has a [complete graph](https://en.wikipedia.org/wiki/Complete_graph) **G** consisting of **N** vertices and he is eager to count the number of non-empty subsets of the edge set of **G** such that the removal of any chosen subset separates the graph into exactly **K** connected components. Chef is unable to solve this task on his own and has, therefore, requested your assistance. Please help him.

Since the required answer can be very large, Print it modulo **M**.

### Input:

First line of input contains a single integer **T** denoting the number of test cases. First and the only line of each test case contains **3** space separated integers — **N**, **K** and **M** — denoting the number of vertices in the graph **G**, required number of connected components, and the modulus.

### Output:

For each test case, output the required answer.

### Constraints:

**1. 1 ≤ T ≤ 50** **1. 1 ≤ N ≤ 100** **1. 1 ≤ K ≤ N** **1. 1 ≤ M ≤ 109** 
### Subtasks:

**1. Subtask 1: 1 ≤ N ≤ 6 ( 25 pts )** **1. Subtask 2: 1 ≤ N ≤ 50 ( 25 pts )** **1. Subtask 3: 1 ≤ N ≤ 100, M is prime ( 25 pts )** **1. Subtask 4: Original Constraints ( 25 pts )** 
### Example:

<pre>
<b>Input:</b>
5
2 2 3
3 1 5
4 3 7
4 2 11
5 1 10

<b>Output:</b>
1
3
6
8
7

</pre>### Explanation:

![](https://s3.amazonaws.com/hr-challenge-images/3194/1448608384-4e93622266-final_image.png "final_image.png")
