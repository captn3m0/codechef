---
category_name: medium
problem_code: CORRCHK
problem_name: 'Statements Checking'
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
problem_author: xcwgf666
problem_tester: Rubanenko‎
date_added: 8-03-2014
tags:
    - cakewalk
    - ltime10
    - numeral
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/CORRCHK'
time:
    view_start_date: 1396168200
    submit_start_date: 1396168200
    visible_start_date: 1396168200
    end_date: 1735669800
    current: 1493557915
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME10/mandarin/CORRCHK.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME10/russian/CORRCHK.pdf).

Run has given you a list of statements of the form "A+B=C", where A, B and C consist only of decimal digits and small latin letters from 'a' to 'f'. Moreover, the first symbol of **A**, **B**, **C** is always not a zero and the length of **A**, **B**, **C** is not greater than 8. How many statements have an integer **Q** in the range \[2; 16\] such that **A**+**B** equals to **C** in the base **Q**?

### Input

The first line of input consists of an integer **T** - the number of statements. Then, **T** statements in the form "A+B=C" (without any spaces) follow, each on a separate line.

### Output

Output an answer to the problem of the first line of output.

### Example

```
<b>Input:</b>
3
2+2=10
1+2=a
3+5=8

<b>Output:</b>
2

```
### Scoring

**T** = 105, Every statement is either true in the base 10, either false in all the bases : 50 points.

**T** = 105, No additional constraints : 50 points.