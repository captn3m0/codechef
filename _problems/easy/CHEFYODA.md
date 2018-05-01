---
category_name: easy
problem_code: CHEFYODA
problem_name: 'Chef and Yoda'
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
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: omelyanenko
problem_tester: mgch
date_added: 26-04-2015
tags:
    - omelyanenko
time:
    view_start_date: 1487496600
    submit_start_date: 1487496600
    visible_start_date: 1487496600
    end_date: 1735669800
    current: 1493558125
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/FEB17/mandarin/CHEFYODA.pdf), [Russian](http://www.codechef.com/download/translated/FEB17/russian/CHEFYODA.pdf) and [Vietnamese](http://www.codechef.com/download/translated/FEB17/vietnamese/CHEFYODA.pdf) as well.

Chef has arrived in Dagobah to meet with Yoda to study cooking. Yoda is a very busy cook and he doesn't want to spend time with losers. So he challenges the Chef to a series of games, and agrees to teach the Chef if Chef can win at least **P** of the games. The total number of games is **K**. The games will be played on a chessboard of size **N**\***M**. That is, it has **N** rows, each of which has **M** squares. At the beginning of the game, a coin is on square (1, 1), which corresponds to the top-left corner, and every other square is empty. At every step, Yoda and Chef have to move the coin on the chessboard. The player who cannot make a move loses. Chef makes the first move. They can't move the coin to a square where it had been placed sometime before in the game, and they can't move outside chessboard.

In this game, there are two different sets of rules according to which the game can be played:
-from (x, y) player can move coin to (x+1, y), (x-1, y), (x, y+1), (x, y-1) in his turn, if they are valid squares.
-from (x, y) player can move coin to (x+1, y+1), (x-1, y-1), (x-1, y+1), (x+1, y-1) in his turn, if they are valid squares.

Before every game, the Power of the kitchen chooses one among the two sets of rules with equal probability of **0.5**, and the game will be played according to those rules. Chef and Yoda are very wise, therefore they play optimally. You have to calculate the probability that Yoda will teach Chef.

### Input

Input begins with an integer **T**, the number of test cases
Each test case begins with 4 integers **N**, **M**, **P**, **K**.

### Output

For each test case, output a line containing the answer for task. The output must have an absolute error at most 0.000001 (10-6).

### Constraints and Subtasks

- **1** ≤ **T** ≤ **50**
- **1** ≤ **K**


 **Subtask 1 : 10 points**  
- **2** ≤ **N, M** ≤ **5**
- 0 ≤ **P** ≤ **K** ≤ **5**


 **Subtusk 2 : 10 points** - **2** ≤ **N, M** ≤ **10**
- 0 ≤ **P** ≤ **K** ≤ **10^3**


 **Subtusk 3 : 20 points** - **2** ≤ **N, M** ≤ **100**
- 0 ≤ **P** ≤ **K** ≤ **10^3**


 **Subtusk 4 : 60 points**- **2** ≤ **N, M** ≤ **100**
- 0 ≤ **P** ≤ **K** ≤ **10^6**

### Example

<pre><b>Input:</b>
2
2 3 2 3
2 2 5 5
<b>Output:</b>
0.500000
1.000000
</pre>