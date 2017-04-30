---
category_name: school
problem_code: SPALNUM
problem_name: 'Sum of palindromic numbers'
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
problem_tester: logic_iu
date_added: 27-08-2015
tags:
    - ad
    - ltime28
    - palindrome
    - simple
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/SPALNUM'
time:
    view_start_date: 1440923400
    submit_start_date: 1440923400
    visible_start_date: 1440923400
    end_date: 1735669800
    current: 1492507602
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME28/mandarin/SPALNUM.pdf) , [Russian](http://www.codechef.com/download/translated/LTIME28/russian/SPALNUM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME28/vietnamese/SPALNUM.pdf)

A number is called _palindromic_ if its decimal representation is a palindrome. You are given a range, described by a pair of integers **L** and **R**. Find the sum of all palindromic numbers lying in the range **\[L, R\]**, inclusive of both the extrema.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains a pair of space separated integers **L** and **R** denoting the range for which you are required to find the sum of the palindromic numbers.

### Output

For each test case, output a single line containing the sum of all the palindromic numbers in the given range.

### Constraints

- **1** ≤ **T** ≤ **100**
- Subtask 1 (34 points) : **1** ≤ **L** ≤ **R** ≤ **103**
- Subtask 2 (66 points) : **1** ≤ **L** ≤ **R** ≤ **105**

### Example

```
<b>Input:</b>
<tt>2
1 10
123 150</tt>

<b>Output:</b>
<tt>45
272</tt>


```
### Explanation

**Example case 1.** The palindromic numbers between **1** and **10** are all numbers except the number **10**. Their sum is 45.

**Example case 2.** The palindromic numbers between **123** and **150** are **131** and **141** and their sum is **272**.