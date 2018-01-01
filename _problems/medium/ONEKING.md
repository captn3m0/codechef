---
category_name: medium
problem_code: ONEKING
problem_name: 'One Dimensional Kingdoms'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: nssprogrammer
problem_tester: shiplu
date_added: 2-12-2014
tags:
    - easy
    - greedy
    - jan15
    - nssprogrammer
editorial_url: 'http://discuss.codechef.com/problems/ONEKING'
time:
    view_start_date: 1421055000
    submit_start_date: 1421055000
    visible_start_date: 1421055000
    end_date: 1735669800
    current: 1493557830
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JAN15/mandarin/ONEKING.pdf) and [Russian](http://www.codechef.com/download/translated/JAN15/russian/ONEKING.pdf).

**N** one dimensional kingdoms are represented as intervals of the form **\[ai , bi\]** on the real line.
A kingdom of the form **\[L, R\]** can be destroyed completely by placing a bomb at a point **x** on the real line if **L
≤ x ≤ R**.

Your task is to determine minimum number of bombs required to destroy all the one dimensional kingdoms.

### Input

- First line of the input contains **T** denoting number of test cases.
- For each test case, first line contains **N** denoting the number of one dimensional kingdoms.
- For each next **N** lines, each line contains two space separated integers **ai** and **bi**.

### Output

For each test case , output an integer denoting the minimum number of bombs required.

### Constraints

Subtask 1 (20 points) : **1 ≤ T ≤ 100 , 1 ≤ N ≤ 100 , 0 ≤ ai ≤ bi ≤500**

Subtask 2 (30 points) : **1 ≤ T ≤ 100 , 1 ≤ N ≤ 1000 , 0 ≤ ai ≤ bi ≤ 1000**

Subtask 3 (50 points) : **1 ≤ T ≤ 20 , 1 ≤ N ≤ 105, 0 ≤ ai ≤ bi ≤ 2000**

### Example

<pre><b>Input:</b>
1
3
1 3
2 5
6 9

<b>Output:</b>
2

</pre>### Explanation
There are three kingdoms \[1,3\] ,\[2,5\] and \[6,9\]. You will need at least 2 bombs
to destroy the kingdoms. In one of the possible solutions, you can place two bombs at x = 2 and x = 6 .
