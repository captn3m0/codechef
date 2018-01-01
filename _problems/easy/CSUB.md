---
category_name: easy
problem_code: CSUB
problem_name: 'Count Substrings'
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
problem_author: darkshadows
problem_tester: null
date_added: 20-04-2014
tags:
    - ad
    - cakewalk
    - darkshadows
    - july14
editorial_url: 'http://discuss.codechef.com/problems/CSUB'
time:
    view_start_date: 1405330200
    submit_start_date: 1405330200
    visible_start_date: 1405330200
    end_date: 1735669800
    current: 1493558134
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JULY14/mandarin/CSUB.pdf) and [Russian](http://www.codechef.com/download/translated/JULY14/russian/CSUB.pdf).

Given a string **S** consisting of only **1s** and **0s**, find the number of substrings which start and end both in **1**.
In this problem, a substring is defined as a sequence of continuous characters **Si, Si+1, ..., Sj** where **1 ≤ i ≤ j ≤ N**.

### Input

First line contains **T**, the number of testcases. Each testcase consists of **N**(the length of string) in one line and string in second line.

### Output

For each testcase, print the required answer in one line.

### Constraints

- **1** ≤ **T** ≤ **105**
- **1** ≤ **N** ≤ **105**
- Sum of **N**  over all testcases ≤ **105**

### Example

<pre><b>Input:</b>
2
4
1111
5
10001

<b>Output:</b>
10
3

</pre>### Explanation
\#test1: All substrings satisfy.
\#test2: Three substrings S\[1,1\], S\[5,5\] and S\[1,5\] satisfy.
