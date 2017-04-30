---
category_name: medium
problem_code: DIVPAIR
problem_name: 'Divisible Pairs'
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
problem_author: rustinpiece
problem_tester: subra
date_added: 11-03-2012
tags:
    - may12
    - medium
    - rustinpiece
editorial_url: 'http://discuss.codechef.com/problems/DIVPAIR'
time:
    view_start_date: 1336722978
    submit_start_date: 1336722978
    visible_start_date: 1336728600
    end_date: 1735669800
    current: 1493557633
layout: problem
---
All submissions for this problem are available.Given **N** and **M** Dexter wants to know how many pairs **a,b(1 <= a < b <=N)** are there such that **(a+b)** is divisible by **M**. For example when **N=4** and **M=3**, there are 2 possible pairs the sum of which is divisible by **M** and they are (1,2) and (2,4).

### Input

First line of input contains **T(<=100000)** which is the number of test cases. Each of the next **T** lines contains two integers **N(1 <= N <= 10^9)** and **M(2 <= M <= 10^9)**.

### Output

Output one line per testcase, the number of pairs **(a,b)** as described before.

### Example

```

<b>Input:</b>
3
2 3
4 3
1 6

<b>Output:</b>
1
2
0


```