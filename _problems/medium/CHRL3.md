---
category_name: medium
problem_code: CHRL3
problem_name: 'Chef and Numbers'
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
date_added: 15-01-2014
tags:
    - dynamic
    - easy
    - furko
    - ltime08
editorial_url: 'http://discuss.codechef.com/problems/CHRL3'
time:
    view_start_date: 1390725000
    submit_start_date: 1390725000
    visible_start_date: 1390725000
    end_date: 1735669800
    current: 1493557573
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Russian](http://www.codechef.com/download/translated/LTIME08/russian/CHRL3.pdf) also.

Chef plays with the sequence of **N** numbers. During a single move Chef is able to choose a non-decreasing subsequence of the sequence and to remove it from the sequence. Help him to remove all the numbers in the minimal number of moves.

### Input

The first line of each test case contains a single **N** denoting the number of integers in the given sequence. The second line contains **N** space-separated integers **A1**, **A2**, ..., **AN** denoting the given sequence

### Output

Output a single line containing the minimal number of moves required to remove all the numbers from the sequence.

### Constraints

- **1** ≤ **N** ≤ **100000.**
- **1** ≤ **Ai** ≤ **100000.**

### Example

<pre><b>Input:</b>
3 
1 2 3

<b>Output:</b>
1

</pre><pre><b>Input:</b>
4
4 1 2 3

<b>Output:</b>
2

</pre>### Scoring

Subtask 1 (10 points):  **N = 10**  

Subtask 2 (40 points):  **N = 2000**  

Subtask 2 (50 points):  **N = 100000**
