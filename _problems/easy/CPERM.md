---
category_name: easy
problem_code: CPERM
problem_name: 'Count Permutations'
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
problem_author: darkshadows
problem_tester: xcwgf666
date_added: 18-04-2014
tags:
    - combinatorics
    - darkshadows
    - easy
    - fast
    - nov16
editorial_url: 'http://discuss.codechef.com/problems/CPERM'
time:
    view_start_date: 1479115800
    submit_start_date: 1479115800
    visible_start_date: 1479115800
    end_date: 1735669800
    current: 1493558132
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/NOV16/mandarin/CPERM.pdf), [Russian](http://www.codechef.com/download/translated/NOV16/russian/CPERM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/NOV16/vietnamese/CPERM.pdf) as well.

Given **N**, count how many permutations of **\[1, 2, 3, ..., N\]** satisfy the following property.

Let **P1, P2, ..., PN** denote the permutation. The property we want to satisfy is that there exists an **i** between **2** and **n-1** (inclusive) such that

- **Pj > Pj + 1 ∀ i ≤ j ≤ N - 1**.
- **Pj > Pj - 1 ∀ 2 ≤ j ≤ i**.

### Input

First line contains **T**, the number of test cases. Each test case consists of **N** in one line.

### Output

For each test case, output the answer modulo **109+7**.

### Constraints

- **1** ≤ **T** ≤ **100**
- **1** ≤ **N** ≤ **109**

### Subtasks

- Subtask #1(40 points): **1** ≤ **N** ≤ **1000**
- Subtask #2(60 points): **original constraints**

### Example

<pre><b>Input:</b>
2
2
3

<b>Output:</b>
0
2


</pre>### Explanation
Test case 1:
No permutation satisfies.

Test case 2:
Permutations \[1, 3, 2\] and \[2, 3, 1\] satisfy the property.
