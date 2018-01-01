---
category_name: easy
problem_code: DISCHAR
problem_name: 'Distinct Characters Subsequence'
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
date_added: 26-09-2014
tags:
    - cakewalk
    - darkshadows
    - nov14
editorial_url: 'http://discuss.codechef.com/problems/DISCHAR'
time:
    view_start_date: 1416216600
    submit_start_date: 1416216600
    visible_start_date: 1416216600
    end_date: 1735669800
    current: 1493558137
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/NOV14/mandarin/DISCHAR.pdf) and [Russian](http://www.codechef.com/download/translated/NOV14/russian/DISCHAR.pdf).

You have initially a string of **N** characters, denoted by **A1,A2...AN**. You have to print the size of the largest subsequence of string **A** such that all the characters in that subsequence are distinct ie. no two characters in that subsequence should be same.
A subsequence of string **A** is a sequence that can be derived from **A** by deleting some elements and without changing the order of the remaining elements.

### Input

First line contains **T**, number of testcases. Each testcase consists of a single string in one line. Each character of the string will be a small alphabet(ie. 'a' to 'z').

### Output

For each testcase, print the required answer in one line.

### Constraints

- **1** ≤ **T** ≤ **10**
- Subtask 1 (20 points):**1** ≤ **N** ≤ **10**
- Subtask 2 (80 points):**1** ≤ **N** ≤ **105**

### Example

<pre><b>Input:</b>
2
abc
aba

<b>Output:</b>
3
2


</pre>### Explanation
For first testcase, the whole string is a subsequence which has all distinct characters.
In second testcase, the we can delete last or first 'a' to get the required subsequence.
