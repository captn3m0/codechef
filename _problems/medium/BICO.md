---
category_name: medium
problem_code: BICO
problem_name: 'BiCo Gaming Grid'
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
problem_author: 'vinayak garg'
problem_tester: gerald
date_added: 26-02-2013
tags:
    - combinatorics
    - cook45
    - greedy
    - simple
    - vinayak
editorial_url: 'http://discuss.codechef.com/problems/BICO'
time:
    view_start_date: 1398018600
    submit_start_date: 1398018600
    visible_start_date: 1398018600
    end_date: 1735669800
    current: 1493557491
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK45/mandarin/BICO.pdf) and [Russian](http://www.codechef.com/download/translated/COOK45/russian/BICO.pdf) as well.

The much anticipated video game "BiCo Grid" has been released. The rules of "Bico Grid" are very simple.

The game field is a 100x100 matrix, where each cell is either a blocked cell, or a cell with some number of coins. For a regular player the look of the field seems pretty random, but the programmer in you recognizes the following pattern: the **i**-th cell on the **n**-th row contains **C(n, i)** coins if and only if 0 ≤ **i** ≤ **n**, all other cells are blocked. Record **C(n, i)** denotes binomial coefficient "**n** choose **i**".

The player starts from the cell situated at row **R** and column **C** in the matrix. The objective is to collect **exactly G** number of coins from matrix in several moves. There are some rules:

- On each move the player must collect all the coins from some unblocked cell in the current column.
- The rules of the game state, that player mustn't be really greedy, so the number of coins he collected must not increase. In other words, if at some move the player collected **X** coins then further he cannot collect more than **X** coins in a single move.
- After each move, the player is immediately moved to some cell of the column **W-1** (where **W** denotes the current column of the player). If the current column of the player has index 0, the game ends.
- The game ends when player collects **exactly G** number of coins.

You are given the description of the game. Please, output the sequence of moves that win the game (collect exactly **G** coins)! It is guaranteed that if the player will play optimally it is possible to win the game.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. Then **T** lines follows. Each containing three integers, **R** denoting the starting row, **C**, denoting the starting column, and **G**, denoting the number of coins to be collected.

### Output

For each test case, output two lines. First line contains **K**, the number of column visited before completion of game. Second line contains **K** space separated integers, the number of coins collected from the cells, in the order they were collected.

It is guaranteed that a solution exists. And if there are multiple solutions, print any of them.

### Constraints

1 ≤ **T** ≤ 10000
0 ≤ **C** ≤ 49
0 ≤ **R** ≤ 99
1 ≤ **G** ≤ 1012

### Example

<pre><b>Input:</b>
3
3 2 5
3 3 10
5 4 7

<b>Output:</b>
2
3 2 
1
10 
3
5 1 1
</pre>
### Explanation

**Example case 1.** We first pick 3 coins from \[3, 2\] then we pick 2 coins from \[2, 1\]
**Example case 2.** As 3rd column contains 10 coins in cell \[5, 3\] we pick it.
**Example case 3.** We first pick 5 coins from \[5, 4\] then we pick 1 coin from \[3, 3\] and again we pick 1 coin from \[2, 2\].
