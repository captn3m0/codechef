---
category_name: hard
problem_code: SFUNC
problem_name: SuperFunction
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
problem_author: kostya_by
problem_tester: null
date_added: 28-11-2013
tags:
    - basic
    - easy
    - exponentiation
    - inclusn
    - kostya_by
    - ltime07
    - subarr
editorial_url: 'http://discuss.codechef.com/problems/SFUNC'
time:
    view_start_date: 1388305881
    submit_start_date: 1388305881
    visible_start_date: 1388305800
    end_date: 1735669800
    current: 1493556846
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/LTIME07/mandarin/SFUNC.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME07/russian/SFUNC.pdf).

Mike likes to invent new functions. The latest one he has invented is called *SuperFunction*. Let's consider how it can be calculated:

You are given two integers **N** and **K**. *SuperFunction* of **N** and **K** equals to the sum of **K**'th powers of the positive numbers, which are coprime with **N** and also not greater than **N**.

I.e. *SuperFuntion* of 6 and 3 equals to **13 + 53 = 126**.

Mike knows how to calculate *SuperFunction* in case **N** and **K** are rather small integers. Now he wants you to write him a solution, which can calculate *SuperFuntion* for bigger constraints. As far as *SuperFunction* could be extremely huge, you are asked to do all the calculation under modulo **M**.

Help Mike!

### Input

The first line contains three integers **N**, **K** and **M**.

### Output

The first line of contains the only integer, denoting *SuperFuntion* of **N** and **K** under modulo **M**.

### Example

<pre><b>Input:</b>
5 2 100
<b>Output:</b>
30
</pre>
### Explanation

In the test case **N** equals to 5, **K** equals to 2, **M** equals to 100. The answer is (12 + 22 + 32 + 42) mod 100 = 30.

### Scoring

Subtask 1 (12 points): 1 ≤ **N** ≤ 100, 1 ≤ **K** ≤ 2, 1 ≤ **M** ≤ 40000;

Subtask 2 (28 points): 1 ≤ **N** ≤ 1 000 000, 1 ≤ **K** ≤ 2, 1 ≤ **M** ≤ 109;

Subtask 3 (30 points): 1 ≤ **N** ≤ 1 000 000 000 000, 1 ≤ **K** ≤ 3, 1 ≤ **M** ≤ 109;

Subtask 4 (30 points): 1 ≤ **N** ≤ 1 000 000 000 000, 1 ≤ **K** ≤ 10, 1 ≤ **M** ≤ 1018.
