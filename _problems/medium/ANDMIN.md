---
category_name: medium
problem_code: ANDMIN
problem_name: 'Range Minimum Queries '
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
max_timelimit: '2.5'
source_sizelimit: '50000'
problem_author: kingofnumbers
problem_tester: mgch
date_added: 13-06-2016
tags:
    - bitwise
    - cook71
    - kingofnumbers
    - medium
    - segment
editorial_url: 'http://discuss.codechef.com/problems/ANDMIN'
time:
    view_start_date: 1466965800
    submit_start_date: 1466965800
    visible_start_date: 1466965800
    end_date: 1735669800
    current: 1493557462
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK71/mandarin/ANDMIN.pdf), [Russian](http://www.codechef.com/download/translated/COOK71/russian/ANDMIN.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK71/vietnamese/ANDMIN.pdf) as well.

You are given an array of **N** integers. You should support the following queries on this array.

- **0 L R** : Find the minimum integer in the range **AL, AL+1, ..., AR**.
- **1 L R X** : You should apply the assignment **A\[i\] = A\[i\] &amp; X**, for all indices **i** in range **\[L, R\]**, where **&amp;** denotes bitwise AND operation.

### Input

First line of the input contains two space separated integers **N** and **Q**.

Second line contains **N** integer numbers denoting array **A**.

In the next **Q** lines, each contain one of the queries described above.

### Output

For each query of the type 0, output a single line containing the answer of the query.

### Constraints

- **1** ≤ **N, Q** ≤ **105**
- **1** ≤ **Ai**, **X** ≤ **109**
- **1** ≤ **L** ≤ **R** ≤ **N**

### Example

<pre><b>Input:</b>
<tt>5 5
1 5 2 3 4
0 2 5
1 1 5 6
0 2 2
1 2 5 3
0 1 3
</tt>
<b>Output:</b>
<tt>2
4
0</tt>
</pre>