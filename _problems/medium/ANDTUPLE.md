---
category_name: medium
problem_code: ANDTUPLE
problem_name: 'And Tuples'
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
problem_author: piyushkumar
problem_tester: xiaodao
date_added: 1-10-2014
tags:
    - bit
    - dynamic
    - easy
    - ltime17
    - memoization
    - piyushkumar
    - recursion
editorial_url: 'http://discuss.codechef.com/problems/ANDTUPLE'
time:
    view_start_date: 1414312200
    submit_start_date: 1414312200
    visible_start_date: 1414312200
    end_date: 1735669800
    current: 1493557462
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/LTIME17/mandarin/ANDTUPLE.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME17/russian/ANDTUPLE.pdf).

A pair of non-negative integers (A,B) is called *and-pair* if **A &amp; B = B**, i.e., bitwise-and of A and B is equal to B. Similarly, a tuple of K non-negative integers (A1,A2,A3 .. AK) is called *and-tuple* if **Ai &amp; Ai+1 = Ai+1** for 1≤i≤K-1.

Given two integers **N** and **K**, how many *and-tuples* of size K exist such that the sum of the elements of the tuple is N?

### Input

First line contains **T**, the number of testcases, then T lines follow. Each of the following lines contain two space-separated integers K and N.

### Output

For each testcase, print a single line containing the answer. Since the number can be quite large, print the answer modulo **1000000009**.

### Constraints


<pre></pre>
11. **For 20 points:** 1 ≤ T ≤ 10000, K = 3, 1 ≤ N ≤ 1018
12. **For 80 points:** 1 ≤ T ≤ 10000, 3 ≤ K ≤ 4, 1 ≤ N ≤ 1018
### Example

**Input:**

<pre>2<br></br>3 2<br></br>4 2<br></br>
</pre>

**Output:**

<pre>2<br></br>2<br></br>
</pre>

**Explanation:**

- In the first case, the two *and-tuples* are (2,0,0) and (1,1,0).
- In the second case they are (2,0,0,0) and (1,1,0,0).
