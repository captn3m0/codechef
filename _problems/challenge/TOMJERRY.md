---
category_name: challenge
problem_code: TOMJERRY
problem_name: 'Tom And Jerry'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - SCALA
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - PERL6
    - TEXT
    - CLOJ
    - FS
max_timelimit: '0.4'
source_sizelimit: '50000'
problem_author: gamabunta
problem_tester: anton_lunyov
date_added: 25-04-2011
tags:
    - challenge
    - gamabunta
    - march12
editorial_url: 'http://discuss.codechef.com/problems/TOMJERRY'
time:
    view_start_date: 1331462319
    submit_start_date: 1331462319
    visible_start_date: 1331458200
    end_date: 1735669800
    current: 1525199679
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.**Note:** The test data for this problem is not final yet. More tests may be uploaded later!

Here comes the famous story of Tom and Jerry again!

One day, Jerry is on his way back home. His home has lots of doors scattered at different cells in a rectangular board of size **M x N**. Entering any door leads Jerry to his home. There are obstacles in some cells of the board and Jerry cannot step on these cells. In each step Jerry will move to one of the four neighboring cells. Of course, Jerry is really clever, so he always goes home along a shortest path. If there are multiple choices, Jerry will prioritize his actions in the following order: moving upward, moving rightward, moving leftward and moving downward.

Needless to say that Tom does not want Jerry to get back home. And Tom is very clever too. In each step Tom will put an obstacle in an empty cell, and of course this empty cell cannot have Jerry standing in it. He cannot put an obstacle on top of an entrance to Jerry's house. Also, in each step Tom places exactly one obstacle. Tom wants to put obstacles so that there's no way for Jerry to come back home!

Write a program to help Tom put as few obstacles as possible to achieve his (cruel) objective! Given that, in the beginning of each step Tom will put an obstacle first and then Jerry makes a move. You may sympathize with poor Jerry, but nonetheless it is your job to write this program!

### Input

The first line contains two space separated positive integers **M** and **N**, the sizes of the board.

Each of the next **M** lines contains **N** characters, representing the rectangular board. Each character can be '.' - an empty cell, '0' (zero) - a door to Jerry's home, '#' - an obstacle or '\*' - the initial position of Jerry. The input is guaranteed to have a single '\*' on the board. There will be at least one door to Jerry's home. There may or may not be any obstacles in the beginning.

You may assume that in each test case Jerry has a way to escape in the beginning; and there is a way for Tom to put obstacles such that Tom achieves his objective within 100 steps.

### Output

The first line should contains a non-negative integer **K**, the number of obstacles that Tom will put. If **K** is more than 200, the judge will return Wrong Answer.

Each of the next **K** lines should contain two space separated positive integers **x** and **y** (1 ≤ **x** ≤ **M**, 1 ≤ **y** ≤ **N**), the coordinates of the obstacles that Tom will put in the current step. The rows of the board are numbered by numbers from 1 to **M** from top to bottom. The columns of the board are numbered by numbers from 1 to **N** from left to right. If at some move Tom will put obstacle outside the board or at already occupied cell (by Jerry or by door or by another obstacle), the judge will return Wrong Answer.

### Scoring

Your score for each test case is **K\*K** if Jerry does not have any route to escape after placing the obstacles. If in the end Jerry can still find his way back home, you will get 2000000 (2e6) score for the corresponding test case. The total score is the sum of score for all test cases (or files).

Your objective, of course, is to minimize the total score.

### Constraints

1 ≤ **M, N** ≤ 50

### Example

<pre>
<b>Input</b>

3 3
..0
...
*..

<b>Output</b>

3
2 2
1 1
3 2

This sample output would score 3*3=9. Note that better scores may be possible.
</pre>