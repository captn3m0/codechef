---
category_name: easy
problem_code: MAANDI
problem_name: 'Maxim and Dividers'
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
problem_tester: shangjingbo
date_added: 25-05-2013
tags:
    - divisors
    - number
    - oct13
    - sereja
    - simple
editorial_url: 'http://discuss.codechef.com/problems/MAANDI'
time:
    view_start_date: 1381743000
    submit_start_date: 1381743000
    visible_start_date: 1381743000
    end_date: 1735669800
    current: 1493558166
layout: problem
---
All submissions for this problem are available.###  Read problems statements in Mandarin Chinese [here](http://www.codechef.com/download/translated/OCT13/mandarin/MAANDI.pdf)

### Problem Statement

Maxim likes dividers of the numbers. Also Maxim is fond of **lucky numbers** of small elephant from Lviv city. If you remember, **lucky numbers** are positive integers whose decimal representation contains only the lucky digits **4** and **7**. For example, numbers **47**, **744**, **4** are lucky, **5**, **17**, **467** — aren't. Now Maxim is interested in the next information: what is the number of the integer positive dividers of number **n**, which are **overlucky**. We call number **overlucky** if it is possible to remove some, but not all, digits and during bonding the remaining digits we will receive a lucky number. For example, number **72344** — overlucky, because it is possible to remove digits **2** and **3**, and get number **744**, which is lucky. Number **223** isn't overlucky.
### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. Single line of each test case contains an integer **n**.
### Output

For each test case on different lines print the answer to the problem.
### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **n** ≤ **10^9**

### Example

<pre><b>Input:</b>
10
1
2
3
4
5
6
7
8
9
10

<b>Output:</b>
0
0
0
1
0
0
1
1
0
0

</pre>