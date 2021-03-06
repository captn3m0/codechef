---
category_name: medium
problem_code: SEARRAYS
problem_name: 'Sereja and Arrays'
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
problem_author: sereja
problem_tester: null
date_added: 12-02-2014
tags:
    - dynamic
    - easy
    - implementation
    - ltime09
    - sereja
editorial_url: 'http://discuss.codechef.com/problems/SEARRAYS'
time:
    view_start_date: 1393146000
    submit_start_date: 1393146000
    visible_start_date: 1393146000
    end_date: 1735669800
    current: 1493557974
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/LTIME09/mandarin/SEARRAYS.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME09/russian/SEARRAYS.pdf).

### Sereja and Arrays

Sereja have an array that consist of *n* integers *a*1, *a*2, ..., *a**n* (0 ≤ *a**i* ≤ 1). Sereja can make next operation:

- fix some integer *i* (1 ≤ *i* ≤ *n* - *k* + 1)
- subtract *1* from values: *a**i*, *a**i* + 1, ..., *a**i* + *k* - 1

Sereja call array *a* *good* if it is possible to make some operations, that he can and get array that contain only zeros. Now Sereja interested in next question: how many good arrays *a* with length *n* exist?



### Input



First line contain integer *T* — number of testcases. *T* tests follow. Each testcase is given by two integers *n* and *k*.

### Constrains

- 1 ≤ *T* ≤ 10
- 1 ≤ *k* ≤ *n* ≤ 105



### Output



For each testcase output answer modulo 109 + 7.



### Examples 



Input

<pre><pre class="content">3<br></br>3 3<br></br>5 2<br></br>5 1<br></br>
</pre>


Output

<pre><pre class="content">2<br></br>8<br></br>32<br></br>
</pre>






### Note

**Test #0-1(25 points) n ≤** 15

**Test #2(25 points) n ≤** 100

**Test #3(50 points) n ≤** 100000
