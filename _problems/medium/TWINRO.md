---
category_name: medium
problem_code: TWINRO
problem_name: 'Twin Robots'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: yogesh01
problem_tester: null
date_added: 29-12-2014
tags:
    - yogesh01
time:
    view_start_date: 1422636370
    submit_start_date: 1422636370
    visible_start_date: 1422635400
    end_date: 1735669800
    current: 1493557952
layout: problem
---
All submissions for this problem are available.You have a board divided into N ×N squares and two robots, R2D2 and C3P O. Each square on the board has a number written on it

R2D2 starts at the top left corner square of the board and C3P O starts at the top right corner square of the board. Your aim is to move the robots so that R2D2 reaches the bottom right corner square and C3P O reaches the bottom left corner square. You have a remote control with two buttons, blue and yellow, that control the robots as follows.

- Whenever you press the blue button, R2D2 moves one square to the right and C3P O moves one square down.
- Whenever you press the yellow button, R2D2 moves one square down and C3P O moves one square left.

The robots are not allowed to move oﬀ the board—if pushing a button would force either one of the robots to move oﬀ the board, the button push has no eﬀect and both robots stay where they are.

For each robot, you compute a score which is the sum of the numbers on the squares that it visits along the path that it follows from its starting position to its ﬁnal position. The combined score of the two robots is the sum of their individual scores. Your aim is to compute the maximum combined score that the two robots can achieve.

 For example, suppose you have a 4 × 4 board as follows.

![](/download/extimages/3c1ec326273967d4ef5c1c67d934ad23.png)

In this example, if R2D2 follows the path marked by ∗ and C3PO follows the path marked by †, as shown below, their combined score is 56.

![](/download/extimages/237fd6c087ea55dc939aa61dce2aa026.png)

### Input

The ﬁrst line of input is a single integer N, the size of the square board. This is followed by N lines, each containing N space separated integers. For 1 ≤ i ≤ N, the integers on line i+1 of the input describe row i of the board.

### Output

A single integer, the maximum combined score that the two robots can achieve. .

### Constraints

- **1** ≤ **N** ≤ **2500**
- **-9999**≤ **score on each square** ≤ **9999**

### Example

<pre>
<b>Input:</b>
4
6 0 3 -1
7 4 2 4
-3 3 -2 8
13 10 -1 -4

<b>Output:</b>
56


</pre>