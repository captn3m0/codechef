---
category_name: medium
problem_code: TREE
problem_name: 'Tree Counting'
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
problem_author: shangjingbo
problem_tester: pieguy
date_added: 5-11-2012
tags:
    - easy
    - kirchhoff
    - maths
    - may13
    - shangjingbo
editorial_url: 'http://discuss.codechef.com/problems/TREE'
time:
    view_start_date: 1368441297
    submit_start_date: 1368441297
    visible_start_date: 1368441000
    end_date: 1735669800
    current: 1493557976
layout: problem
---
All submissions for this problem are available.Let's define a good tree:

1. It is a tree with **k \* n** nodes labeled from 0 to **k \* n - 1**
2. Node **i** and node **j** are not adjacent, for all **0 <= i, j < k \* n** such that **i div k = j div k** (here **div** means integer division. E.g. 7 **div** 2 = 3)

Given **n** and **k**, how many different good trees are there?

### Input

Two integers **n(1 <= n <= 10^5), k(1<= k <=3)**

### Output

Output the number of different good trees. As the result may be very large, just output the remainder when divided by (10^9 + 7).

### Example

<pre>
<b>Input 1:</b>
2 2

<b>Output 1:</b>
4

<b>Input 2:</b>
1 2

<b>Output 2:</b>
0

<b>Input 3:</b>
4 1

<b>Output 3:</b>
16

</pre>