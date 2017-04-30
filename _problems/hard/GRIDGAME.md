---
category_name: hard
problem_code: GRIDGAME
problem_name: 'Game on a Grid'
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
problem_author: pieguy
problem_tester: anton_lunyov
date_added: 22-11-2012
tags:
    - cook29
    - game
    - medium
    - pieguy
editorial_url: 'http://discuss.codechef.com/problems/GRIDGAME'
time:
    view_start_date: 1356288262
    submit_start_date: 1356288262
    visible_start_date: 1356288262
    end_date: 1735669800
    current: 1493556724
layout: problem
---
All submissions for this problem are available.Alice and Bob are playing a game. A single pawn is placed on a grid. The grid consists of cells **(X, Y)** for non-negative integers **X** and **Y**. Some cells of the grid have been marked as impassable. A move consists of choosing some positive integer **D** and moving the pawn from **(X, Y)** either to **(X − D, Y)** or to **(X, Y − D)**, of course, if this cell belongs to the grid. In other words, we move the pawn a positive number of steps along the row or column towards the origin. The pawn is not allowed to land on nor pass through an impassable cell. Alice and Bob alternate moves, with Alice going first. The first player unable to make a move loses.

Alice and Bob will play several games on the same grid, but with different starting positions of the pawn. Assuming both players play optimally, determine which player will win each game.

### Input

Input will begin with an integer **T**, the number of test cases that follow. Each test case will begin with an integer **N**, the number of impassable cells. **N** lines follow with 2 integers each: the X and Y coordinates of an impassable cell. Following this is a line with an integer **Q**, the number of games to be played on this grid. **Q** lines follow with 2 integers each: the X and Y coordinates of the pawn.

### Output

For each test case, print the winner of each of the **Q** games, one per line.

### Constraints

- 1 ≤ **T** ≤ 10000 (104)
- 1 ≤ **N** ≤ 100000 (105)
- 1 ≤ **Q** ≤ 100000 (105)
- The sum of **N** over all test cases will not exceed 100000 (105)
- The sum of **Q** over all test cases will not exceed 100000 (105)
- All coordinate values will be between 0 and 1000000000 (109), inclusive
- All impassable cells will be distinct
- No starting position of the pawn will be impassable

### Sample Input

```
1
2
1 1
4 2
4
2 2
1 2
3 4
6 5

```
### Sample Output

```
Alice
Bob
Alice
Bob

```
### Explanation

In the first game, the pawn is at cell (2, 2). In order to win Alice can begin by moving the pawn to (1, 2). Bob's only available move is to (0, 2) since (1, 1) is impassable. Alice then moves the pawn to (0, 0), leaving Bob with no available moves.

Here is the small portion of the table of winning and losing positions. Here X-direction goes from the left to the right and Y-direction goes from the top to the bottom. Letter **'A'** at the cell **(X, Y)** means that Alice will win when **(X, Y)** is the starting position of the pawn and **'B'** means that Bob will win. We use different background color for Alice and Bob cells for convenience. Impassable cells have black background color.

01234560BAAAAAA1ABAAAA2ABAABA3AAABAAA4AAAABAA5AAAAAAB