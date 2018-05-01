---
category_name: school
problem_code: MXZERO
problem_name: 'Make XOR zero'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: xcwgf666
problem_tester: null
date_added: 13-05-2015
tags:
    - ad
    - counting
    - snck151b
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/MXZERO'
time:
    view_start_date: 1432954800
    submit_start_date: 1432954800
    visible_start_date: 1432954800
    end_date: 1735669800
    current: 1492506751
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCK151B/mandarin/MXZERO.pdf) , [Russian](http://www.codechef.com/download/translated/SNCK151B/russian/MXZERO.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCK151B/vietnamese/MXZERO.pdf)

Olya has written **N** binary integers (i.e. either zero or one) on a blackboard. She recently learned about XOR operation. Now she wants to erase exactly one integer in the array so that the [XOR](http://en.wikipedia.org/wiki/Exclusive_or) of the remaining **N - 1** numbers is zero. Please help her to calculate the number of ways of doing so.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains a single integer **N** denoting the number of numbers that Olya has written on a blackboard.

The second line contains **N** space-separated integers **A1**, **A2**, ..., **AN** denoting the numbers she had written.

### Output

For each test case, output a single line containing the number of ways to erase exactly one integer so that the XOR of the remaining integers is zero. The ways where you erase the same integer but on different places in the given sequence are considered different. ### Constraints

- **1** ≤ **T** ≤ **20**
- **2** ≤ **N** ≤ **105**
- 0 ≤ **Ai** ≤ **1**

### Example

<pre><b>Input:</b>
2
5
1 0 0 0 0
5
1 1 1 1 1

<b>Output:</b>
1
5
</pre>### Explanation

**Example case 1.** If you erase the first number on the blackboard, then the XOR of the rest of numbers will be equal to zero.

**Example case 2.** You can erase any of the given 5 numbers, it will make the XOR of the rest equal to zero.
