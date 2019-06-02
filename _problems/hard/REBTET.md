---
category_name: hard
problem_code: REBTET
problem_name: 'Nikitosh and Sauron-tetrahedron'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: rebryk
problem_tester: iscsi
date_added: 24-04-2015
tags:
    - binomial
    - fourier
    - karatsuba
    - medium
    - nov15
    - rebryk
editorial_url: 'http://discuss.codechef.com/problems/REBTET'
time:
    view_start_date: 1447666200
    submit_start_date: 1447666200
    visible_start_date: 1447666200
    end_date: 1735669800
    current: 1493556816
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/NOV15/mandarin/REBTET.pdf), [Russian](http://www.codechef.com/download/translated/NOV15/russian/REBTET.pdf) and [Vietnamese](http://www.codechef.com/download/translated/NOV15/vietnamese/REBTET.pdf) as well.

A *dark tetrahedron*'s size is said to be **N** if each of its edges consists of **N** segments.

To destroy a dark tetrahedron of size **N**, you have to erase at least **N** segments (you can't destroy a dark tetrahedron partially: the tetrahedron uses dark magic to self-cure if you erase less than **N** segments, and so it's the same as not erasing any segment). Also, to protect yourself from the tetraheldral curse, you must ensure that each vertex of a tetrahedron needs to have at least 2 incident segments. Note that a dark tetrahedron has 4 vertices, just like regular tetrahedrons.

A *Sauron-tetrahedron* of size **N** with resistance **K** is made of **N** dark tetrahedrons with sizes **1**, **2**, ... , **N**. To destroy a Sauron-tetrahedron, you have to destroy at least **K** of its constituent tetrahedrons.

Wizard Nikitosh needs to detroy a Sauron-tetahedron of size **N** with resistance **K** and he wants to know how many ways to destroy it are there. Since Nikitosh's creative juices only flow for wizardry, he needs your mathematical talent to solve this problem.

You also need to follow the wizard's order to output the answer modulo **105+3**.

### Input

The first line of input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

For each test case, a single line contains two integers, **N** and **K**, representing the size of the super tetrahedron and its resistance.

### Output

For each test case, output a single line. It must contain the number of ways to destroy a super tetrahedron of size **N** with resistance **K** (modulo **105+3**).

### Constraints

- **1** ≤ **T** ≤ **5**
- **1** ≤ **N** ≤ **6\*104**
- **1** ≤ **K** ≤ **N**

### Subtasks

- Subtask #1 (20 points): **1** ≤ **N** ≤ **103**
- Subtask #2 (80 points): **1** ≤ **N** ≤ **6\*104**

### Example

<pre><b>Input:</b>
2
1 1
2 1

<b>Output:</b>
9
2439

</pre>