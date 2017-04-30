---
category_name: hard
problem_code: GLBEGA
problem_name: 'Glass Bead Game'
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
problem_author: yogesh01
problem_tester: null
date_added: 26-12-2014
tags:
    - easy
    - greedy
    - inpr1502
    - yogesh01
time:
    view_start_date: 1422636239
    submit_start_date: 1422636239
    visible_start_date: 1422633735
    end_date: 1735669800
    current: 1493556973
layout: problem
---
All submissions for this problem are available. You play the following game against a devilishly clever opponent. On the table, there are two bowls ﬁlled with glass beads. In each move, depending on whose turn it is, you or your opponent can do one of the following.

- Move one bead from the ﬁrst bowl to the second bowl
- Remove one bead from the second bowl.

At any point in the game, let x denote the number of beads in the ﬁrst bowl and y denote the number of beads in the second bowl. If x + y is even, it is your turn to move. If x + y is odd, it is your opponent’s turn to move

At each position of the game, you get some points that depend on the number of beads, x and y, in the two bowls. This is given by a function f(x, y) = Ax2 + By2 + Cxy, where A, B and C are integers that are ﬁxed each time the game is played.

The game starts with M beads in the ﬁrst bowl and N beads in the second bowl. As the game progresses, beads are removed. The game ends when both bowls are empty.

Your score for the game is the sum of the values f(x, y) for each position (x, y) that the game passes through, starting from (M, N) and ending with (0, 0). Your aim is to obtain as high a score as possible, no matter what moves your opponent chooses. Remember that your opponent is ﬁendishly ingenious and will always play in such a way as to minimize your score.

For example, suppose the game starts with 2 beads in each bowl and the score function is f(x, y) = x2 − y2 − xy: that is, A = 1, B = −1 and C = −1. Here are some plays of the game—the positions where you choose the move are enclosed in boxes and the positions where your opponent moves are not enclosed in boxes.
![](/download/extimages/527ffcdf26a5a9d5ef96fec4f7ca6b40.png)

In this particular game, the best possible score that you can achieve if you consider all possible moves that your opponent can choose is −22. Recall that your devilishly clever opponent always plays in such a way that your score is minimized.

### Input

The input consists of a single line containing ﬁve integers, M, N, A, B and C where M and N are the number of beads initially in the ﬁrst and second bowl, respectively and A, B and C are the coeﬃcients of the score function f(x, y) = Ax2 + By2 + Cxy.

### Output

The output should be a single integer, the maximum score that you can achieve in this game.

### Constraints

- **1** ≤ **M,N** ≤ **600**
- **-1000**≤**A,B,C**≤**1000**

### Example

**Input:**
2 2 1 -1 -1

**Output:**

-22