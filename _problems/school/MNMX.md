---
category_name: school
problem_code: MNMX
problem_name: 'Minimum Maximum'
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
problem_tester: minimario
date_added: 11-08-2015
tags:
    - ad
    - cakewalk
    - ltime27
    - ma5termind
editorial_url: 'http://discuss.codechef.com/problems/MNMX'
time:
    view_start_date: 1440923400
    submit_start_date: 1440923400
    visible_start_date: 1440923400
    end_date: 1735669800
    current: 1492507579
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME27/mandarin/MNMX.pdf) , [Russian](http://www.codechef.com/download/translated/LTIME27/russian/MNMX.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME27/vietnamese/MNMX.pdf)

Chef loves to play with arrays by himself. Today, he has an array **A** consisting of **N** distinct integers. He wants to perform the following operation on his array **A**.

- Select a pair of adjacent integers and remove the larger one of these two. This decreases the array size by 1. Cost of this operation will be equal to the smaller of them.

Find out minimum sum of costs of operations needed to convert the array into a single element.

### Input

First line of input contains a single integer **T** denoting the number of test cases. First line of each test case starts with an integer **N** denoting the size of the array **A**. Next line of input contains **N** space separated integers, where the **ith** integer denotes the value **Ai**.

### Output

For each test case, print the minimum cost required for the transformation.

### Constraints

- **1 ≤ T ≤ 10**
- **2 ≤ N ≤ 50000**
- **1 ≤ Ai ≤ 105**

### Subtasks

- **Subtask 1 :** 2 ≤ N ≤ 15 **: 35 pts**
- **Subtask 2 :** 2 ≤ N ≤ 100 **: 25 pts**
- **Subtask 3 :** 2 ≤ N ≤ 50000 **: 40 pts**

### Example

<pre>
<b>Input</b>
2
2
3 4
3
4 2 5

<b>Output</b>
3
4

</pre>### Explanation
**Test 1 :**  Chef will make only 1 move: pick up both the elements (that is, 3 and 4), remove the larger one (4), incurring a cost equal to the smaller one (3).
