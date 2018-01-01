---
category_name: medium
problem_code: VISITALL
problem_name: 'How to Operate a Robot'
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
problem_author: witua
problem_tester: iscsi
date_added: 19-03-2015
tags:
    - cook56
    - easy
    - simulation
    - witua
editorial_url: 'http://discuss.codechef.com/problems/VISITALL'
time:
    view_start_date: 1427049000
    submit_start_date: 1427049000
    visible_start_date: 1427049000
    end_date: 1735669800
    current: 1493557953
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK56/mandarin/VISITALL.pdf) and [Russian](http://www.codechef.com/download/translated/COOK56/russian/VISITALL.pdf) as well.

There is s a square maze consisting of **N** rows and **N** columns divided into unit cells. The rows are numbered from the top to the bottom starting from 1, and the columns are numbered from the left to the right also starting from 1.

You have a robot which you have to operate. Initially the robot is located in the upper-left corner of the maze (i.e. at the cell **(1, 1)**). In a single move you can move the robot in any one of four basic directions: left, right, up or down.

Some cells of the maze are forbidden. It is known that there are no two forbidden cells that share an edge or a corner. The cell **(1, 1)** is not forbidden.

You have to construct a sequence of moves of the robot satisfying the following conditions.

- Robot never leaves the maze.
- Robot never visits a forbidden cell.
- Robot visits each non-forbidden cell of the maze at least once.

You are interested in finding any valid sequence of moves such that there are no more than three consecutive moves that moved the robot in the same direction eg. 'DDDD' is invalid sequence of moves while 'D' and 'DDD' is valid. Also total number of moves should not be more than **N \* (N + 7)**. Please find any such sequence.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains the single integer **N**.

In the next **N** lines, each line contains **N** characters representing the rows of maze. The characters can be one of the following ones:

- '.' denoting a non-forbidden cell.
- '#' denoting a forbidden cell.

### Output

For each test case, output a single line containing the answer to the corresponding test case. The answer should be a string of characters 'L', 'R', 'U' and 'D', representing left, right, up and down moves, respectively. **The answer for each test case should not contain more than N\*(N+7) moves**.

### Constraints

- **2** ≤ **T** ≤ **5**
- **2** ≤ **N** ≤ **1000**
- It is guaranteed that there exists a valid sequence of moves containing no more than **N \* (N + 7)** moves.

### Example

<pre><b>Input:</b>
2
2
..
.#
3
...
#..
..#

<b>Output:</b>
DUR
RRDLDL

</pre>