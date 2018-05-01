---
category_name: easy
problem_code: KNICOV
problem_name: 'Knight Covering'
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
    - 'CPP 6.3'
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
    - 'PYTH 3.5'
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
problem_author: alei
problem_tester: deadwing97
date_added: 30-05-2017
tags:
    - alei
    - bitmasks
    - cook83
    - dynamic
    - easy
editorial_url: 'https://discuss.codechef.com/problems/KNICOV'
time:
    view_start_date: 1497812400
    submit_start_date: 1497812400
    visible_start_date: 1497812400
    end_date: 1735669800
    current: 1514816003
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/COOK83/mandarin/KNICOV.pdf), [russian](http://www.codechef.com/download/translated/COOK83/russian/KNICOV.pdf) and [vietnamese](http://www.codechef.com/download/translated/COOK83/vietnamese/KNICOV.pdf) as well.

Given a board of **N** rows and **M** columns, place the minimum number of knights such that every cell either contains a knight or is attacked by at least one knight.

Like in standard chess, a [knight](https://en.wikipedia.org/wiki/Knight_(chess)) attacks every cell that is two squares away horizontally and one square vertically, or two squares vertically and one square horizontally.

### Input

The first line of input contains one number **T**, the number of test cases. Each test case contains two integers **N** and **M**, the dimensions of the board.

### Output

For each test case print the minimum number of knights required to cover every cell of the board.

### Constraints

10. 1 ≤ **T** ≤ 150
11. 1 ≤ **N** ≤ 3
12. 1 ≤ **M** ≤ 50
### Example

<pre>
<b>Input:</b>
1
2 4

<b>Output:</b>
4
</pre>### Explanation

One optimal configuration is:

![](https://codechef_shared.s3.amazonaws.com/download/upload/COOK83/KNICOV.png)Cells (1, 1), (1, 2), (4, 1) and (4, 2) contain knights. Cell (2, 1) is attacked by the knight in cell (4, 2). Cell (2, 2) is attacked by the knight in cell (4, 1). Cell (3, 1) is attacked by the knight in cell (1, 2). And cell (3, 2) is attacked by the knight in cell (1, 1).

So every cell either contains a knight or is attacked by at least one knight, hence this is a valid configuration. There is no valid configuration with fewer knights, and so the answer is 4.
