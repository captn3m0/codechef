---
category_name: easy
problem_code: GAMEBALL
problem_name: 'A Game of Balls'
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
problem_author: admin2
problem_tester: kingofnumbers
date_added: 26-05-2017
tags:
    - admin2
    - implementation
    - medium
    - snackdown
    - snckpa17
editorial_url: 'https://discuss.codechef.com/problems/GAMEBALL'
time:
    view_start_date: 1495992600
    submit_start_date: 1495992600
    visible_start_date: 1495992600
    end_date: 1735669800
    current: 1497284094
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKPA17/mandarin/GAMEBALL.pdf), [Russian](http://www.codechef.com/download/translated/SNCKPA17/russian/GAMEBALL.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKPA17/vietnamese/GAMEBALL.pdf) as well.

You are playing a game of balls on a grid of dimensions **n \* m**. All except one cell in this grid contains a ball each, i.e. exactly one of the cells is empty, and the others contain exactly 1 ball. You are allowed to make one of the following two kind of moves one by one in any order:

- Choose two adjacent cells one containing a ball and other being empty. Move the ball to the empty cell. Two cells are said to be adjacent to each other if they share a side with each other.
- Choose three consecutive cells (either horizontal or vertical), in which the middle cell has a ball, one of the other cells has a ball and the remaining one is empty. You can move the ball from the non-empty non-middle cell to the empty cell, and destroy the ball in the middle cell while jumping over it, thus making middle cell empty too.

You are asked to play this game. At the end of the game, you win if there is exactly one cell containing a ball. You can make at max 5000 moves per testcase. Find any possible sequence of moves to win this game. If this is impossible to achieve, print -1.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains two space separated integers, **n, m** which are the dimensions of the grid.

The i-th of the next **n** lines contains **m** characters. denoting the i-th row of the grid. The character '.' denotes that cell is empty, whereas '\*' denotes that the cell has a ball in it.

### Output

For each test case, the first line should contain an integer X which will denote the number of moves you want to make. If it is impossible to achieve the desired objective, this integer should be -1. This number X should be at most 5000.

If it is possible to achieve the objective, then each of the next X lines should contain four space separated integers: x1, y1, x2, y2 which signifies the following. If you are making the first type of move, then you are moving the ball from the cell (x1, y1) to (x2, y2). In the second type of move, it will denote that the non-middle cell with ball is (x1, y1) and the empty cell is (x2, y2).

### Constraints

- 1 ≤ **T** ≤ 100
- 1 ≤ **n, m** ≤ 10

### Example

<pre>
<b>Input</b>
1
2 3
<tt>***
**.
</tt>
<b>Output</b>
8
2 1 2 3
1 1 2 1
1 3 1 1
2 1 2 2
2 3 2 1
2 1 2 2
2 2 1 2
1 1 1 3

</pre>### Explanation
<pre>
<tt>
***
**.
</tt>

</pre>In first move, you can take the ball at (2, 1) and move it to cell (2, 3), and the ball at cell (2, 2) will be destroyed. The resulting grid will be
<pre>
<tt>
***
..*
</tt>

</pre>In second move, you can move the ball at cell (1, 1) to cell (2, 1). The resulting grid will be
<pre>
<tt>
.**
*.*
</tt>

</pre>Now, you can move the ball (1, 3) to (1, 1) and destroying the ball at (1, 2), we get.
<pre>
*..
*.*

</pre>Now, move the ball at cell (2, 1) to (2, 2)
<pre>
<tt>
*..
.**
</tt>

</pre>Move the ball at cell (2, 3) to (2, 1) by destroying the ball at cell (2, 2).
<pre>
<tt>
*..
*..
</tt>

</pre>Move the ball at cell (2, 1) to (2, 2)
<pre>
<tt>
*..
.*.
</tt>

</pre>Move the ball at cell (2, 2) to (1, 2)
<pre>
<tt>
**.
...
</tt>

</pre>Now, move the ball cell (1, 1) to (1, 3), thus destroying the ball at (1, 2).
<pre>
<tt>
..*
...
</tt>

</pre>And you are done :)