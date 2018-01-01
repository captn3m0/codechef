---
category_name: medium
problem_code: SHOOTING
problem_name: Shooting
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
problem_author: witua
problem_tester: xcwgf666
date_added: 11-08-2014
tags:
    - bruteforce
    - cook49
    - greedy
    - simple
    - witua
editorial_url: 'http://discuss.codechef.com/problems/SHOOTING'
time:
    view_start_date: 1408906200
    submit_start_date: 1408906200
    visible_start_date: 1408906200
    end_date: 1735669800
    current: 1493557931
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK49/mandarin2/SHOOTING.pdf) and [Russian](http://www.codechef.com/download/translated/COOK49/russian/SHOOTING.pdf) as well.

You are given a rectangular grid with **N** rows and **M** columns. Each its cell is either empty, contains an enemy, or contains a laser.

The lasers are capable of shooting. Each one can shoot in one of **three** directions: either left, right or up.When a laser shoots at some direction, it kills all the enemies on its way.

Find out whether it's possible to kill all the enemies on the grid. If it's possible, output "Possible", otherwise output "Impossible".

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains the pair of integers **N** and **M** denoting the size of the grid.

The next **N** lines contain **M** characters each. The characters can be one of the following ones:

- '.' denoting an empty cell.
- 'E' denoting an enemy.
- 'L' denoting a laser.

### Output

For each test case, output a single line containing the answer to the corresponing test case.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N**, **M** ≤ **50**
- The number of lasers will be between **1** and **16**, inclusive.

### Example

<pre><b>Input:</b>
3
2 2
E.
L.
2 4
E.EL
LL..
3 3
EE.
L.L
L..

<b>Output:</b>
Possible
Possible
Impossible

</pre>