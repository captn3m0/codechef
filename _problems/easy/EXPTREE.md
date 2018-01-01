---
category_name: easy
problem_code: EXPTREE
problem_name: 'Tree Expectancy'
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
    - 'CPP 6.3'
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
    - 'PYTH 3.5'
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
problem_author: melfice
problem_tester: null
date_added: 27-06-2017
tags:
    - combinatorics
    - july17
    - math
    - melfice
    - numbertheory
editorial_url: 'https://discuss.codechef.com/problems/EXPTREE'
time:
    view_start_date: 1500283800
    submit_start_date: 1500283800
    visible_start_date: 1500283800
    end_date: 1735669800
    current: 1514816308
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JULY17/mandarin/EXPTREE.pdf), [Russian](http://www.codechef.com/download/translated/JULY17/russian/EXPTREE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JULY17/vietnamese/EXPTREE.pdf) as well.

Consider an [ordered tree](https://en.wikipedia.org/wiki/Tree_(graph_theory)#Ordered_tree) with **N** vertices. Your task is to calculate the expected value of the number of vertices having exactly one child in such tree assuming that it is uniformly chosen from the set of all ordered trees of size **N**.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

Each testcase contains a single integer **N** for which you should calculate the answer.

### Output

For each test case, output a single line containing two integers, which are explained below.

Consider the answer to be a proper fraction **P**/**Q**, where gcd(**P**, **Q**) = 1. Then your task is to output two integers **PQ-1** mod 109+7 and **PQ-1** mod 109+9.

### Constraints

- 1 ≤ **T** ≤ 105
- It is guaranteed that **Q** will be invertible with respect to both the modulos.

### Subtasks

**Subtask #1 (10 points)**

- 1 ≤ **N** ≤ 103

**Subtask #2 (20 points)**

- 1 ≤ **N** ≤ 106

**Subtask #3 (30 points)**

- 1 ≤ **N** ≤ 109

**Subtask #4 (40 points)**

- 1 ≤ **N** ≤ 1018

### Example

<pre><b>Input:</b>
4
1
2
3
4

<b>Output:</b>
0 0
1 1
1 1
400000004 200000003


</pre>### Explanation
You can see every possible tree with 1, 2, 3 or 4 vertices on the diagram below.

![](https://codechef_shared.s3.amazonaws.com/download/upload/JULY17/exptree.jpg)From this you can see that answers for these inputs are 0/1 = 0, 1/1 = 1, (2+0)/2 = 1 and (3+1+1+1+0)/5 = 6/5 correspondingly.
