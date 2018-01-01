---
category_name: easy
problem_code: TUZGMBR
problem_name: 'Puppy and Board'
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
problem_author: pavel1996
problem_tester: kostya_by
date_added: 10-02-2016
tags:
    - cook67
    - dynamic
    - easy
    - game
    - pavel1996
editorial_url: 'http://discuss.codechef.com/problems/TUZGMBR'
time:
    view_start_date: 1456081200
    submit_start_date: 1456081200
    visible_start_date: 1456081200
    end_date: 1735669800
    current: 1493558196
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK67/mandarin/TUZGMBR.pdf), [Russian](http://www.codechef.com/download/translated/COOK67/russian/TUZGMBR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK67/vietnamese/TUZGMBR.pdf) as well.

Tuzik and Vanya are playing the following game.

They have an **N × M** board and a chip to indicate the current game position. The chip can be placed on any one cell of the game board, each of which is uniquely identified by an ordered pair of positive integers **(r, c)**, where **1 ≤ r ≤ N** is the row number and **1 ≤ c ≤ M** is the column number.

Initially, the chip is placed at the cell identified as **(1, 1)**. For his move, a player can move it either **1, 2 or 3** cells up, or **1 or 2** cells to the right. The player who can not move the chip loses. In other words, a player suffers defeat if the chip is placed in the cell **(N, M)** at the start of his turn.

Tuzik starts the game. You have to determine who will win the game if both players play optimally.

### Input

The first line contains an integer **T** denoting the number of tests. Each of the following **T** lines contain two integers **N** and **M**.

### Output

For each test output "Tuzik" or "Vanya" on a separate line, indicating who will win the game.

### Constraints

- **1** ≤ **T** ≤ **100**
- **1** ≤ **N, M** ≤ **106**

### Example

<pre><b>Input:</b>
2
4 4
2 2

<b>Output:</b>
Tuzik
Vanya


</pre>### Explanation
**Test case 1:** On his first turn Tuzik moves chip 3 cells up to the cell **(4, 1)**. On his turn Vanya can move chip only right to the cell **(4, 2)** or to the cell **(4, 3)** and after that Tuzik moves it to **(4, 4)** and finishes the game. 
**Test case 2:** On his first Turn Tuzik can move chip to the cell **(2, 1)** or **(1, 2)**, but on his next turn Vanya moves it to **(2, 2)** and wins the game.
