---
category_name: medium
problem_code: SEABUB
problem_name: 'Sereja and Bubble Sort'
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
problem_author: sereja
problem_tester: xcwgf666
date_added: 15-03-2014
tags:
    - dynamic
    - expectation
    - medium
    - sept14
    - sereja
editorial_url: 'http://discuss.codechef.com/problems/SEABUB'
time:
    view_start_date: 1410773400
    submit_start_date: 1410773400
    visible_start_date: 1410773400
    end_date: 1735669800
    current: 1493557924
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SEPT14/mandarin/SEABUB.pdf) and [Russian](http://www.codechef.com/download/translated/SEPT14/russian/SEABUB.pdf).

Sereja has an array **A** that contains **n** integers, namely **A1, A2, ..., An**. A single action consists of performing one of two following operations:

- To swap two consecutive elements;
- To make a random and uniform shuffle of all the elements of the array **A**.

Now Sereja's goal is to make the expected value of the function **f(A)** as minimal as possible, by doing no more than **k** actions.

The function **f(A)** is the minimal number of consecutive elements' swaps you need in order to sort the array **A** in the increasing order.

What is the expected value of **f(A)** in case Sereja uses no more than **k** actions in the optimal way?

### Input

The first line contains an integer **T**, denoting the number of testcases. Then, **T** testcase descriptions follow.

The first line of each desription contains the integers **n** and **k** from the statement, respectively. The following line contains **n** space separated integers - **A1, A2, ..., An**. All the values of **Ai** will form a permutation of the first **N** natural numbers.

### Output

For each test case output the minimal possible expected value of **f(A)**. Your answer will be considered correct in case it differs by no more than **10-6** from the official one.

### Constraints

- **1** ≤ **T** ≤ **100**
- **1** ≤ **n** ≤ **100**
- ≤ **k** ≤ **1018**
- **1** ≤ **Ai** ≤ **n**

### Example

<pre><b>Input:</b>
2
2 1
2 1
3 1
3 2 1

<b>Output:</b>
0.0000
1.5000


</pre>