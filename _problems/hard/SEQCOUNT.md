---
category_name: hard
problem_code: SEQCOUNT
problem_name: 'How many sequences'
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
problem_author: xcwgf666
problem_tester: Rubanenko‎
date_added: 7-03-2014
tags:
    - dynamic
    - easy
    - ltime10
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/SEQCOUNT'
time:
    view_start_date: 1396168200
    submit_start_date: 1396168200
    visible_start_date: 1396168200
    end_date: 1735669800
    current: 1493556839
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME10/mandarin/SEQCOUNT.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME10/russian/SEQCOUNT.pdf).

Consider the sequence of **K** natural numbers: **a1**, **a2**, ..., **aK**. Tooru thinks that this sequence is nice if and only if:

- **a1**+**a2**+...+**aK** = **N**
- **a1** < **a2** < ... < **aK**
- **ai+1** - **ai** <= **D** for every natural **i**, smaller than **K**
- **a1** <= **D**



You are given **N**, **K** and **D**. Please, count the number of nice sequences for her. This number can be huge, so we ask you to output it modulo **109+7**.

### Input

The first and only line of the input consists of the integers **N**, **K** and **D**, separated by a single space.

### Output

Output the number of nice sequences on the first line of the output modulo **109+7**.

### Example

<pre><b>Input:</b>
10 4 1

<b>Output:</b>
1

</pre>### Explanation
The only suitable sequence is (1, 2, 3, 4).

### Scoring

1 <= **N**, **K**, **D** <= 10 : 17 points.

1 <= **N**, **K**, **D** <= 400 : 23 points.
 1 <= **N**, **K**, **D** <= 2000 : 20 points.

1 <= **N**, **K**, **D** <= 105 : 40 points.
