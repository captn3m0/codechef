---
category_name: medium
problem_code: CHEFCIRC
problem_name: 'Chef and Circle'
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
problem_author: mgch
problem_tester: iscsi
date_added: 29-12-2016
tags:
    - binary
    - geometry
    - jan17
    - line
    - medium
    - mgch
editorial_url: 'https://discuss.codechef.com/problems/CHEFCIRC'
time:
    view_start_date: 1484731800
    submit_start_date: 1484731800
    visible_start_date: 1484731800
    end_date: 1735669800
    current: 1493557513
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JAN17/mandarin/CHEFCIRC.pdf), [Russian](http://www.codechef.com/download/translated/JAN17/russian/CHEFCIRC.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JAN17/vietnamese/CHEFCIRC.pdf) as well.

You are given **N** points on 2-D plane. You have to find out minimal radius of a circle which contains at least **M** of these points.

### Input

First line of the input contains two space separated integer **N** and **M**.

Each of the next **N** lines contains two space separated real numbers denoting the **x** and **y** coordinates of **i**-th point, i.e. **xi**, **yi**. These numbers with not contain more than 5 digits after decimal point.

### Output

Output a single floating point number corresponding to the minimal radius of a circle with at least **M** of the above points. Your answer will be considered correct iff its absolute error does not exceed more than 10-2.

### Constraints

- 1 ≤ **M** ≤ **N** ≤ 500
- -103 ≤ **Xi**, **Yi** ≤ 103
 
### Subtasks

- **Subtask #1 (35 points):** 1 ≤ **N** ≤ 200
- **Subtask #2 (65 points):** 1 ≤ **N** ≤ 500

### Example

<pre>
 <b>Input:</b>
3 3
-1 -1
0 1
1 -1

<b>Output:</b>
1.250000
</pre>