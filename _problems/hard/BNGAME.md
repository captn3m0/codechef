---
category_name: hard
problem_code: BNGAME
problem_name: 'Brand New Game'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: xcwgf666
problem_tester: stzgd
date_added: 8-05-2014
tags:
    - easy
    - ltime12
    - stl
    - two
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/BNGAME'
time:
    view_start_date: 1401006600
    submit_start_date: 1401006600
    visible_start_date: 1401006600
    end_date: 1735669800
    current: 1493556620
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME12/mandarin/BNGAME.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME12/russian/BNGAME.pdf).

Consider the following game that is played on the field of the size of 1 x **N** cells. The cells are numbered from 1 to **N**. In the i-th cell there are two positive integers written - **Ai** and **Bi**.

The game is as follows. Initially, the player stands at the fictive cell with the index  that is located right before all the **N** cells of the board. Then, he makes moves. Each move consists in moving by no more than by **K** cells forward. The goal of the game is to reach the fictive **N+1**-th cell that is located right after all the **N** cells.

After the **N+1**-th cell is reached, the player's penalty is calculated. The penalty equals to max(**Ax**) \* max(**By**), where **x** and **y** are the indices of the cells that were visited in between (during the movement to the **N+1**-th cell).

Please find the minimal possible penalty that can be reached in this game.

### Input

The first line of input contains two single space separated integer numbers - **N** and **K** respectively.

Then, there are **N** lines, each containing a pair of signle space separated integers - **Ai** and **Bi** respectively.

### Output

Output the minimal possible penalty on the first line.

### Constraints

- **1** ≤ **K** ≤ **N**
- **1** ≤ **N** ≤ **100**, **1** ≤ **Ai, Bi** ≤ **100** - 27 points.
- **1** ≤ **N** ≤ **1000**, **1** ≤ **Ai, Bi** ≤ **32000** - 20 points.
- **1** ≤ **N** ≤ **5 \* 105**, **1** ≤ **Ai, Bi** ≤ **32000** - 53 points.

### Example

```
<b>Input:</b>
5 3
1 5
2 4
3 3
4 2
5 1

<b>Output:</b>
9

```