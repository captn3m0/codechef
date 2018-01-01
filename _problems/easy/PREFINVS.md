---
category_name: easy
problem_code: PREFINVS
problem_name: 'Prefix Inversions'
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
problem_author: gainullinildar
problem_tester: melfice
date_added: 26-05-2017
tags:
    - easy
    - gainullinildar
    - implementation
    - ltime48
    - strings
editorial_url: 'https://discuss.codechef.com/problems/PREFINVS'
time:
    view_start_date: 1495899840
    submit_start_date: 1495899840
    visible_start_date: 1495899840
    end_date: 1735669800
    current: 1497284112
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME48/mandarin/PREFINVS.pdf), [Russian](http://www.codechef.com/download/translated/LTIME48/russian/PREFINVS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME48/vietnamese/PREFINVS.pdf) as well.

You are given a binary string **S**. You need to transform this string into another string of equal length consisting only of zeros, with the minimum number of operations.

A single operation consists of taking some prefix of the string **S** and flipping all its values. That is, change all the 0s in this prefix to 1s, and all the 1s in the prefix to 0s. You can use this operation as many number of times as you want over any prefix of the string.

### Input

The only line of the input contains the binary string,  **S** .

### Output

Output a single line containing one integer, the minimum number of operations that are needed to transform the given string **S** into the string of equal length consisting only of zeros.

### Constraints

- 1 ≤ **|S|** ≤ 100,000

### Subtasks

- Subtask #1 (30 points): 1 ≤ **|S|** ≤ 2000
- Subtask #2 (70 points): Original constraints.

### Example

 ```
<b>Input:</b>
01001001

<b>Output:</b>
6

<pre>### Explanation
For the given sample case, let us look at the way where we achieved minimum number of operations.

  **Operation 1:** You flip values in the prefix of length 8 and transform the string into 10110110

  **Operation 2:** You flip values in the prefix of length 7 and transform the string into 01001000

  **Operation 3:** You flip values in the prefix of length 5 and transform the string into 10110000

  **Operation 4:** You flip values in the prefix of length 4 and transform the string into 01000000

  **Operation 5:** You flip values in the prefix of length 2 and transform the string into 10000000

  **Operation 6:** You flip values in the prefix of length 1 and finally, transform the string into 00000000
