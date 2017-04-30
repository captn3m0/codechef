---
category_name: medium
problem_code: ISONUM
problem_name: 'Number Isomorphism'
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
problem_author: xcwgf666
problem_tester: null
date_added: 13-05-2015
tags:
    - counting
    - snck151b
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/ISONUM'
time:
    view_start_date: 1432954800
    submit_start_date: 1432954800
    visible_start_date: 1432954800
    end_date: 1735669800
    current: 1493557702
hand_edited: true
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCK151B/mandarin/ISONUM.pdf) , [Russian](http://www.codechef.com/download/translated/SNCK151B/russian/ISONUM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCK151B/vietnamese/ISONUM.pdf)

Let's call two numbers isomorphic if they have same number of digits and set of places having equal digits is same. We consider that all the numbers are in decimal notation and don't have leading zeroes. Consider some examples:

- 12321 is isomorphic to 83538 and 45654.
- 1232 is not isomorphically equal to 2342 because set of places having equal digits are ({1}, {2, 4}, {3}) and ({1, 4}, {2}, {3}) (digits are numbered from left to right using 1 based indexing). In other words, the digits order has to remain the same.
- 12 isomorphic to 10,13,14, 92, but not isomorphic to 1, because their lengths are not equal and not isomorphic to 01, because leading zeroes are not allowed.

Let **F(X)** denote the smallest integer (without leading zeroes) isomorphic to **X** where **X** is a positive integer. For example, **F(12)** = 10, **F(213)** = 102.

You are given two integers **N** and **M**. Your task is to calculate **F(1) % M + F(2) % M + F(3) % M + ... + F(N - 1) % M + F(N) % M**.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first and only line of each test case contains a pair of integers **N** and **M**. The meaning of these integers is described in the statement.

### Output

For each test case, output a single line containing the answer to the problem. ### Constraints

13. **1** ≤ **T** ≤ **10**
14. **1** ≤ **N** ≤ **1011**
15. **1** ≤ **M** ≤ **107**
### Example

```
<b>Input:</b>
2
15 100
123456789 9876543

<b>Output:</b>
70
102768568246676

```
### Explanation

**Example case 1.** Numbers 1, 2, 3, ..., 9 are isomorphic to 1. Numbers 10, 12, 13, 14, 15 are isomorphic to 10. Among the numbers from 1 to 15, 11 is isomorphic only to itself. So, we get 1 + 1 + ... + 1 + 10 + 11 + 10 + 10 + 10 + 10 = 70.

**Example case 2.** This is just a large case so that you can check your solution better.