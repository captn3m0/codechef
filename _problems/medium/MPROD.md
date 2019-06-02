---
category_name: medium
problem_code: MPROD
problem_name: 'Minimum Product'
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
problem_author: piyushkumar
problem_tester: balajiganapath
date_added: 20-04-2014
tags:
    - easy
    - greedy
    - ltime11
    - piyushkumar
editorial_url: 'http://discuss.codechef.com/problems/MPROD'
time:
    view_start_date: 1398587400
    submit_start_date: 1398587400
    visible_start_date: 1398587400
    end_date: 1735669800
    current: 1493557807
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/LTIME11/mandarin/MPROD.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME11/russian/MPROD.pdf).

You are given a array **A** of **N** positive integers, and you can perform the following operation on the array

1\) Pick any two indices **i** and **j** in the array

2\) Divide A\[i\] and A\[j\] by some common factor of A\[i\] and A\[j\]



You can perform the above operation as many number of times as you want, and the aim is to minimize the product of the resulting array. Find this minimum product. Since the answer can be a large number, print the product modulo 1000000007 (109+7).



**INPUT:**

First line contains **T**, number of testcases. Each testcase contains 2 lines.

First line of each testcase contains single integer **N**, size of the array

Second line of each testcase contains N space separated integers, the array **A**



**OUTPUT:**

For each testcase, output single line indicating the answer to that testcase



**CONSTRAINTS:**

1<=T<=10

30 points : 1<=N<=2000, 1<=A\[i\]<=106

70 points : 1<=N<=20000, 1<=A\[i\]<=108



**SAMPLE INPUT:**

1

3

2 3 6



**SAMPLE OUTPUT:**

1



**EXPLANATION:**

First divide first and third numbers by 2, then the second and third by 3. This makes all numbers equal to 1, hence the product is 1.
