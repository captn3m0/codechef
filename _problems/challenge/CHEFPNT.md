---
category_name: challenge
problem_code: CHEFPNT
problem_name: 'Chef and Painting'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: berezin
problem_tester: shangjingbo
date_added: 1-04-2014
tags:
    - berezin
    - challenge
    - oct14
    - randomized
time:
    view_start_date: 1413192600
    submit_start_date: 1413192600
    visible_start_date: 1413192600
    end_date: 1735669800
    current: 1528985566
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/OCT14/mandarin/CHEFPNT.pdf) and [Russian](http://www.codechef.com/download/translated/OCT14/russian/CHEFPNT.pdf).

Chef wants to paint with you today:)

- The field of the game is a matrix that has **N** rows and **M** columns.
- The rows of the matrix are numbered from 1 to **N**.
- The columns of the matrix are numbered from 1 to **M**.
- Initially some cells are painted with black color. All other are painted with white.
- On each step Chef can choose any white cell and the direction: Left-Right or Up-Down.
- Left-Right direction means that Chef goes left from chosen cell and paint each cell on his way with red color until he reach the board or some already painted with red or black color cell. Then he do the same in right direction (goes right from the chosen cell) and then he paint chosen cell with red color.
- Up-Down direction means the same for appropriate directions
- The aim of game is to paint all white cells with red color in the minimal number of steps.

### Input

The first line of each test case contains three integers **N, M, K** denoting the size of matrix and the number of painted with black color cells.

Each of next **K** lines contains two integers **i, j** denoting the painted with black color cells.

### Output

In the first line print integer **P** - the number of steps.

Next **P** lines should describe steps. Each step in a single line.

The description of each step contains two integers **i, j** denoting the cell you choose and string **"0"** or **"1"**, according to the directions you choose
(**"0"** - Left-Right, **"1"** - Up-Down).

### Scoring

- For each test your score will be defined as number of steps.
- The total score for a submission is the sum of the scores for all test cases.

### Constraints

- **1** ≤ **N, M** ≤ **100**
- **1** ≤ **K** ≤ **min(N\*M - 1, 3000)**
- **1** ≤ **i** ≤ **N**
- **1** ≤ **j** ≤ **M**

### Test generation

- Initially we take **N**, **M**, and **K** with uniform random in the range under constraints
- Then in a loop from **1** to **K** we take uniform random row number (from **1** to **N**) and uniform random column number (from **1** to **M**) and while the cell **aij** is already painted we take new uniform random **i** and **j**.
- Test cases contains max tests, tests with big (close to **N\*M**) and small **K**.

### Example

<pre>
<b>Input:</b>
6 7 6
1 3
3 2
2 4
4 5
5 6
6 4

<b>Output:</b>
12
3 1 1
6 7 1
1 2 1
2 3 1
1 5 0
4 2 1
3 4 0
2 5 0
5 5 0  
6 5 0
4 4 1
4 6 1
</pre>