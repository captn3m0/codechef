---
category_name: hard
problem_code: BWGAME
problem_name: 'Black-white Board Game'
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
problem_author: xcwgf666
problem_tester: xcwgf666
date_added: 2-03-2015
tags:
    - april15
    - hard
    - heaps
    - matrices
    - merging
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/BWGAME'
time:
    view_start_date: -62170005200
    submit_start_date: -62170005200
    visible_start_date: 1772159245
    end_date: 1735669800
    current: 1493556627
layout: problem
---
###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/APRIL15/mandarin/BWGAME.pdf) and [Russian](http://www.codechef.com/download/translated/APRIL15/russian/BWGAME.pdf).

Both Fedya and Alex love playing games. One of their favorite games is playing with permutations. Description of game is given below.

Initially, they have a **N** x **N** matrix with all cells being white. Before starting the game, Alex colors the matrix in following way. he chooses **N** pair of integer **L\[i\], R\[i\]** denoting that in the i-th row, columns from L\[i\] to R\[i\] (1 - based indexing) are colored black.

The players play in rounds. In each round, both Alex and Fedor make a move. Alex moves first.

When a player makes a move, he needs to provide a permutation **P** of integer from **1** to **N** such that the number of inversions in this permutation is even for Alex (similarly odd for Fedya) and all the cells with the coordinates **(i, Pi)** in the matrix are black. It is prohibited to try already used permutations.

If during a round, both Alex and Fedya fail to find the required permutation, the game ends in a draw. If both Alex and Fedya find the required permutation, the game goes on to the next round. If one of the players fails to find the necessary permutation and the other guy finds a permutation, the game ends and the guy who managed to find the permutation wins.

The guys are intelligent enough to find the required permutation each time if it exists i.e. both players play optimally.

Now they're trying some big matrices, but they've became too lazy to play and now just want to know how will the game end on the given matrix. Can you please help them?

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains a single integer **N** denoting the side of the matrix.

The following **N** lines will contain pairs of integers of the form **Li Ri**, denoting the range of the cells that are black in the corresponding row.

### Output

For each test case, output a single line containing the answer to the problem. Output "Draw" if the game ends with a draw, "Alex" if Alex wins and "Fedor" if Fedya wins.

### Constraints

**1** ≤ **Li** ≤ **Ri** ≤ **N**

**Subtask 1 (13 points)**

- **1** ≤ **T** ≤ **1000**
- **1** ≤ **N** ≤ **7**

**Subtask 2 (26 points)**

- **1** ≤ **T** ≤ **100**
- **1** ≤ **N** ≤ **100**

**Subtask 3 (61 points)**

- **1** ≤ **T** ≤ **15**
- **1** ≤ **N** ≤ **105**

### Example

<pre><b>Input:</b>
1
2
1 2
1 1

<b>Output:</b>
Fedor
</pre>### Explanation

In the first round, Fedya picks the permutation **(2, 1)** which has odd number of inversions (**1**) and the cells  **(1, 2)** and **(2, 1)** are black. Alex is unable to pick the appropriate permutation, thus, he loses and Fedya wins. So we print "Fedor".
