---
category_name: medium
problem_code: TCP
problem_name: 'Travelling Chef Problem'
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
problem_author: 'vinayak garg'
problem_tester: gerald
date_added: 15-07-2013
tags:
    - cook45
    - integrals
    - interpolation
    - medium
    - vinayak
editorial_url: 'http://discuss.codechef.com/problems/TCP'
time:
    view_start_date: 1398018600
    submit_start_date: 1398018600
    visible_start_date: 1398018600
    end_date: 1735669800
    current: 1493557946
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK45/mandarin/TCP.pdf) and [Russian](http://www.codechef.com/download/translated/COOK45/russian/TCP.pdf) as well.

When Chef is travelling - that's the problem. No one knows when he will change his velocity. But mathematicians are certain that Chef's velocity depends on the current time, and can be described as a cubic polynomial. A cubic polynomial can be defined as:

**v(t) = A×t3 + B×t2 + C×t + D**, where **A, B, C, D** are rational numbers (**A** is non zero), and **t** is the current time.

As for us, all we know is: Chef's velocity at 4 time instances. And we are interested in finding the total distance covered by Chef at time **T**. We can assume that Chef has started his travel at zero time moment.

### Input

The first line contains an integer **N** denoting the number of test cases. The first line of each testcase contains an integer **T**, the time up to which we want to know the distance covered by Chef from time . Then **4** lines follow, each containing two integers: **ct** and **cv**. Here **ct** is the time instant and **cv** is the velocity at time **ct**.

**Please note**, that we pick **ct** in such a way that **cv** comes out to be integer. In general the velocity of Chef is real number.

### Output

For each test case output a single line containing a real number – the distance covered by the Chef in time interval  to **T**. Your answer will be considered as correct if it has **relative error less than 10-10**.

### Constraints

- **1** ≤ **N** ≤ **1000**
- **1** ≤ **T** ≤ **3600**
- **1** ≤ **ct** ≤ **3600**
- **-1000000** ≤ **cv** ≤ **1000000**
- For each testcase values of **ct** are distinct.

### Example

<pre><b>Input:</b>
2
5
2 11
3 31
4 69
5 131
8
12 -480
13 -693
14 -960
15 -1287

<b>Output:</b>
173.750000
80.000000

</pre>