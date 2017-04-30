---
category_name: medium
problem_code: SHGAME
problem_name: 'A Game With a Sheet of Paper'
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
    - easy
    - ltime10
    - nim
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/SHGAME'
time:
    view_start_date: 1396168200
    submit_start_date: 1396168200
    visible_start_date: 1396168200
    end_date: 1735669800
    current: 1493557931
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME10/mandarin/SHGAME.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME10/russian/SHGAME.pdf).

Yuuko and Nagi like to play the following game:

Initially they take a checkered sheet of paper of the size of **N** x **M** cells. Then, one cell, let's call this cell (**X**, **Y**) is marked. Then, they take the moves alternately. A move consists of making a long horizontal or vertical cut. This cut should coincide with one of the lines that divide the sheet into cells. Then, a part that doesn't contain a marked cell is thrown away and another player takes her turn. A player who is unable to make a turn because after the opponent's turn the dimensions of the sheet became equal to **1** x **1** loses. Yuuko plays first.

Yuuko and Nagi have played a lot of games together so now they both know the optimal strategy and always use it. Today girls are going to play a game on a **N** x **M** cells sheet of paper, but they haven't yet decided, what is the cell (**X**, **Y**) to be marked. Yuuko is interested, in how many ways it's possible to choose this cell so the she can become a winner, regardless of Nagi's moves.

### Input

The first line of input consists of an integer **T** - the number of test cases. Then, **T** lines describing the test cases follow. The **i**-th such line contains two integers **N** and **M**, separated by a single space.

### Output

For each test case, output a single line containing the number of ways to choose the marked cell in order to ensure Yuuko's win.

### Example

```
<b>Input:</b>
2
5 8
6 7

<b>Output:</b>
40
42

```
### Scoring

**T** = 100, 1 <= **N**, **M** <= 10 : 25 points.

**T** = 100, 1 <= **N**, **M** <= 1000 : 36 points.

**T** = 100, 1 <= **N**, **M** <= 106 : 39 points.