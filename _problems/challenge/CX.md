---
category_name: challenge
problem_code: CX
problem_name: 'Best board fill'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - rust
    - SCALA
    - swift
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
    - kotlin
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '0.120365'
source_sizelimit: '50000'
problem_author: admin
problem_tester: null
date_added: 15-04-2009
tags:
    - admin
time:
    view_start_date: 1242034200
    submit_start_date: 1242034200
    visible_start_date: 1242034200
    end_date: 1735669800
    current: 1525454453
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.**The following a tie breaker problem. The best solution will receive one point. All other successful answers will be scored on a curve and receive a fraction of a point based on how close they come to the best answer.**

Given a large board (with holes) and set of tetris-like figures (an unlimited source, capable of generating any number of them), try to cover the board as exactly as possible. The source is capable of generating the following pieces:

<pre><pre style="font-family: monospace">
1)
###
.#.
</pre>
<pre><pre style="font-family: monospace">
2)
##.
.##
</pre>
<pre><pre style="font-family: monospace">
3)
#.#
###
</pre>
<pre><pre style="font-family: monospace">
4)
###
#..
</pre>
<pre><pre style="font-family: monospace">
5)
..#
###
#..
</pre>
<pre><pre style="font-family: monospace">
6)
#.#
###
.#.
</pre>

You are allowed to flip and rotate pieces before placing them on the board.

### Input

The first line contains two numbers - 100n,mn lines, each containing m space-separated numbers, are the board description. The symbol '0' is a square which should be filled, the symbol '**1**' is a square which should not be filled.

### Output

First output the number of pieces used, k 6. Then write k successive descriptions of the used pieces. Each description should be of the form: t - the number of full squares of the piece, followed by t pairs of integers denoting the coordinates of the respective squares (using 0-based offsets, with the top-left of input written as (0,0) ).

### Example

<pre>
<b>Input:</b>
3 3
0 0 0
0 1 0
0 0 0


<b>Output:</b>
2
4
0 0
0 1
1 1
0 2
4
0 2
1 2
2 2
2 1

</pre>
### Scoring

For each square you will receive a penalty, calculated in the following way: Let a be the number a square should be covered by (either 0 or 1), and let b be the actual number *of times* the square has been covered by a # piece (pieces **may overlap**). If a &gt; b (the square should have been covered, but was not), the penalty is **3**. If b &gt; a (the square should not have be covered and was covered, or should have been covered, but was covered more than once), the penalty is **b-a**. The total penalty is the sum of individual penalties, taken over all squares.

In the example the penalty is 3+3+1+1 = 8.

The program will be run several times for different data sets and the overall score will be the mean of scores received.

### Tests

All tests have been randomly generated, with **1** covering less than 40% of the total number of squares.
