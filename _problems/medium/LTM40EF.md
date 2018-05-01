---
category_name: medium
problem_code: LTM40EF
problem_name: 'Chef and Words'
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
max_timelimit: '2.5'
source_sizelimit: '50000'
problem_author: mgch
problem_tester: xcwgf666
date_added: 12-09-2016
tags:
    - binary
    - ltime40
    - medium
    - meet
    - mgch
editorial_url: 'http://discuss.codechef.com/problems/LTM40EF'
time:
    view_start_date: 1474736400
    submit_start_date: 1474736400
    visible_start_date: 1474736400
    end_date: 1735669800
    current: 1493557762
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME40/mandarin/LTM40EF.pdf), [Russian](http://www.codechef.com/download/translated/LTIME40/russian/LTM40EF.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME40/vietnamese/LTM40EF.pdf) as well.

Chef likes problems related to learning new languages. He only knows first **N** letters of English alphabet. Also he explores all **M**-letter words formed by the characters he knows. Define cost for a given **M**-letter word **S**, cost(**S**) = **P1, S1+P2, S2+...+P**M**, SM**, where **Pi, j** is **i, j**th entry of matrix **P**. Sort all the words by descending cost, if costs are equal, sort them lexicographically. You need to find **K**-th **M**-letter word in Chef's order.

### Input

First line contains three positive integer numbers **N**, **M** and **K**.

Next **M** lines contains **N** integers per line, denoting the matrix **P**.

### Output

Output in a single line **K**-th **M**-letter in Chef's order.

### Constraints

- 1 ≤ **N** ≤ 16
- 1 ≤ **M** ≤ 10
- 1 ≤ **K** ≤ **NM**
- 0 ≤ **Pi, j** ≤ 109

### Subtasks

- **Subtask #1: (20 points)** 1 ≤ **K** ≤ **10000**
- **Subtask #2: (20 points)** 1 ≤ **M** ≤ **5**
- **Subtask #3: (60 points)** Original constraints

### Example

<pre><b>Input:</b>
<tt>2 5 17
7 9
13 18
10 12
4 18
3 9</tt>

<b>Output:</b>
<tt>aaaba</tt>
</pre>