---
category_name: easy
problem_code: PANSTACK
problem_name: 'Stacking Pancakes'
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
source_sizelimit: '5000'
problem_author: kaushik_iska
problem_tester: laycurse
date_added: 1-03-2012
tags:
    - april12
    - easy
    - kaushik_iska
editorial_url: 'http://discuss.codechef.com/problems/PANSTACK'
time:
    view_start_date: 1334137504
    submit_start_date: 1334137504
    visible_start_date: 1334136600
    end_date: 1735669800
    current: 1493558173
layout: problem
---
All submissions for this problem are available.Chef is good at making pancakes. Generally he gets requests to serve **N** pancakes at once. He serves them in the form of a stack. A pancake can be treated as a circular disk with some radius.

Chef needs to take care that when he places a pancake on the top of the stack the radius of the pancake should not exceed the radius of the largest pancake in the stack by more than **1**. Additionally all radii should be positive integers, and the bottom most pancake should have its radius as **1**. Chef wants you to find out in how many ways can he create a stack containing **N** pancakes.

**Input**

First line of the input contains **T (T <= 1000)** denoting the number of test cases.

**T** lines follow each containing a single integer **N (1 <= N <= 1000)** denoting the size of the required stack.

**Output**

For each case the output should be a single integer representing the number of ways a stack of size **N** can be created. As the answer can be large print it modulo **1000000007**.

**Example**

**Input**

<pre>
2
1
2
</pre>**Output**

<pre>
1
2
</pre>