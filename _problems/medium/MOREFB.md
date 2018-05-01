---
category_name: medium
problem_code: MOREFB
problem_name: 'Another Fibonacci'
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
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: amitpandeykgp
problem_tester: null
date_added: 29-03-2015
tags:
    - amitpandeykgp
    - fft
    - june15
    - medium
editorial_url: 'http://discuss.codechef.com/problems/MOREFB'
time:
    view_start_date: 1434360600
    submit_start_date: 1434360600
    visible_start_date: 1434360600
    end_date: 1735669800
    current: 1493557800
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JUNE15/mandarin/MOREFB.pdf) and [Russian](http://www.codechef.com/download/translated/JUNE15/russian/MOREFB.pdf).

Apurva is obsessed with Fibonacci numbers. She finds Fibonacci numbers very interesting. Fibonacci numbers can be defined as given below.

Fib(1) = 1 , Fib(2) = 1.

Fib(n) = Fib(n-1) + Fib(n-2) for n > 2 .

 Given a set  **S**  having **N** elements and an integer **K**, She wants to find out the value of **FIBOSUM(S)**.

![](https://s3.amazonaws.com/codechef_shared/download/JUNE15/FIBOSUM.JPG)

Where **sum(s)** represents the sum of elements in set **s**.

**Note** that values might be repeated in the set, two subsets will be called different if there is an index **i** such that **S\[i\]** is occurring in one of the subset and not in another.

As the value of **FIBOSUM(S)** can be very large, print it modulo **99991**.

### Input

- First line of input contains two integer **N** and **K** sepeated by a space.
- Next line contains **N** space separated integers denoting the set **S**.

### Output

Print a single integer representing the answer.

### Constraints

 **1 ≤ K ≤ N**

**Subtask #1: 10 points**

- **1 ≤ N ≤ 20, 1 ≤ value in set ≤ 109**

**Subtask #2: 30 points**

- **1 ≤ N ≤ 2000, 1 ≤ value in set ≤ 109**

**Subtask #3: 60 points**

- **1 ≤ N ≤ 50000, 1 ≤ value in set ≤ 109**

### Example

<pre><b>Input:</b>
3 1
1 2 3

<b>Output:</b>
4
</pre>### Explanation

**FIBOSUM(S)**  = Fib(1) + Fib(2) + Fib(3) = 4.
