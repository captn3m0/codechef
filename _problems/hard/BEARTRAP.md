---
category_name: hard
problem_code: BEARTRAP
problem_name: 'Bear and Cat Trap'
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
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: errichto
problem_tester: xcwgf666
date_added: 23-02-2017
tags:
    - errichto
    - hard
    - interactive
    - march17
editorial_url: 'https://discuss.codechef.com/problems/BEARTRAP'
time:
    view_start_date: 1489397400
    submit_start_date: 1489397400
    visible_start_date: 1489397400
    end_date: 1735669800
    current: 1493556958
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MARCH17/mandarin/BEARTRAP.pdf?v=1), [Russian](http://www.codechef.com/download/translated/MARCH17/russian/BEARTRAP.pdf?v=1) and [Vietnamese](http://www.codechef.com/download/translated/MARCH17/vietnamese/BEARTRAP.pdf?v=1) as well.

This is an interactive problem. It means that every time you output something, you must finish with a newline character and flush the output. For example, in C++ use the fflush(stdout) function, in Java — call System.out.flush(), in Python — sys.stdout.flush(), and in Pascal — flush(output). Only after flushing the output will you be able to read from the input again.

Limak is a little polar bear. One of his favorite games is the Cat Trap (also known as Black Cat, Chat Noir or Circle The Cat). The goal of the game is to prevent a cat from running away. Limak loves it because cats are usually afraid of him (for no reason) and don't want to play with him. You can try that game yourself: <http://www.gamedesign.jp/flash/chatnoir/chatnoir.html>.

In this problem, your task is to win in a modified version of the game. The differences are:

1. The grid is a regular hexagon of side N = 20.
2. Initially no cells are blocked.
3. You must win in **M** turns (i.e. you can block at most **M** cells).
4. The cat follows some particular strategy, described below.


Rows are numbered -(N-1) through N-1 from top to bottom, so the row 0 is in the middle. Columns are numbered -(N-1) through N-1 from left to right, where the column 0 is the diagonal that contains the first cell of the top row and the last cell of the bottom row. For example, for N = 3 the grid would look like this (blue arrows are pointing at the column 0):

![](https://codechef_shared.s3.amazonaws.com/download/upload/MARCH17/beartrap1.png)

Let (r, c) denote the cell at the intersection of the r-th row and the c-th column. The description above implies that the cell (r,c) has at most six adjacent cells: (r,c+1), (r-1,c+1), (r-1,c), (r,c-1), (r+1,c-1), (r+1,c).

A **border cell** is a cell with fewer than six adjacent cells (there are exactly 6\*(N-1) border cells). For any not-blocked cell X we define **the distance to the border** as the minimum number of moves the cat would need to reach a border cell, assuming that he starts from X and no more cells will be blocked. In particular, the distance to the border is 0 for all not-blocked border cells. The distance to the border is infinite if a cell is blocked or the cat can't reach any border cell.

The cat starts in the cell (0, 0), i.e. in the middle of the grid. In each turn of the game:

1. The cat moves first. If he is in a border cell, he runs away and you lose. If he can't reach any border cell, you win (i.e. when the cat is in a connected component bounded by blocked cells). Otherwise, the cat moves to one of the adjacent cells with the minimum distance to the border. For example, if three adjacent cells are blocked, two cells have the distance to the border equal to 15, and one cell has the distance to the border equal to 17, then the cat chooses one of the two adjacent cells with the distance 15. Also, in the very first move the cat chooses any of six adjacent cells, because all of them have the same distance to the border.
2. Then you can block one cell. You can't block a cell if it's already blocked or it contains the cat.

### Interaction

The first line of the input contains two integers **T** and **M** denoting the number of test cases and the maximum allowed number of times you can block a cell (per test case). At the beginning of each test case, the cat starts in the cell (0, 0) and no cells are blocked.

When the cat is supposed to move, you should read from the input, a line that is either "WIN" or "CAT r c" (both without the quotes). A line "WIN" means that the cat can't reach the border anymore and you should proceed to the next test case (and again read the first move of the cat), unless it's the last test case — then you should terminate your program. A line "CAT r c" means that the cat moves to the cell (r, c).

After the cat moves, you should print a line in the format "BLOCK r c" denoting blocking the cell (r, c). Remember about printing a newline character and flushing the output. You can't skip a move and you can't block a cell if it's already blocked or it contains the cat.

### Subtasks

- Subtask #1 (35 points) 1 ≤ **T** ≤ 10, **M** = 500
- Subtask #2 (65 points) 1 ≤ **T** ≤ 100, **M** = 20

### Visualizer

You need Python3 to run the visualizer: **[link](https://codechef_shared.s3.amazonaws.com/download/upload/MARCH17/BEARTRAP.py).**The instructions and the example usage are provided at the bottom of the file.

### Example

your program the system2 500CAT 1 -1BLOCK -1 0CAT 1 0BLOCK -1 1CAT 0 0BLOCK 1 -1CAT 0 1BLOCK 0 -1CAT 1 0BLOCK 1 1CAT 0 0BLOCK 0 2CAT 0 1BLOCK -1 2CAT 0 0BLOCK 1 0WINCAT 1 0BLOCK 5 -12......WIN### Explanation

In the provided example, there are **T** = 2 test cases and in each of them you are allowed to block **M** = 500 cells. Note that the example communication is invalid because the cat doesn't always move to an adjacent cell with the minimum distance to the border. Such a situation won't happen in real tests. And the second test case was given only to show you how the communication looks like if there are multiple test cases.

You can run the visualizer to see the simulation of the first test case. For your convenience, the grid below shows the final situation, assuming that the size of the grid is N = 4 (but remember that N = 20 in all tests).

<pre>   . , . , 
  , . , . , 
 . , # # # , 
, . # c , # , 
 , . # # # . 
  , . , . , 
   , . , .
</pre>