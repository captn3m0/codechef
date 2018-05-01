---
category_name: school
problem_code: CHRL2
problem_name: 'Chef and String'
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
problem_author: furko
problem_tester: xcwgf666
date_added: 12-01-2014
tags:
    - chrl3
    - dynamic
    - easy
    - furko
    - ltime08
editorial_url: 'http://discuss.codechef.com/problems/CHRL2'
time:
    view_start_date: 1390725000
    submit_start_date: 1390725000
    visible_start_date: 1390725000
    end_date: 1735669800
    current: 1492506766
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Russian](http://www.codechef.com/download/translated/LTIME08/russian/CHRL2.pdf) also.

Chef likes playing with strings. The most interesting game are named "CHEF in string". The move of the game consists of the following: Chef takes a **subsequence** of string's letters that form the word "CHEF" and then he removes that symbols. The goal of the game is to make the maximal number of moves. Please, help Chef and tell him the maximal possible number of moves that he is able to make for the given string **S**.

### Input

 The first line of each test case contains a given string. This string consists of uppercase letters from the set {"C", "H", "E", "F"}.

### Output

Output a single line containing the maximal possible number of moves.

### Constraints

- **1**  ≤ **|S|** ≤ **100000**

### Example

<pre><b>Input:</b>
CHEFCHEFFFF

<b>Output:</b>
2

</pre><pre><b>Input:</b>
CHHHEEEFFCC

<b>Output:</b>
1

</pre>### Scoring

Subtask 1 (25 points): **|S|** ≤ 2000 
Subtask 2 (75 points): See the constraints.
