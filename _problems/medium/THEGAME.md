---
category_name: medium
problem_code: THEGAME
problem_name: 'Filling the maze'
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
max_timelimit: '1 - 2'
source_sizelimit: '50000'
problem_author: xellos0
problem_tester: kevinsogo
date_added: 27-01-2015
tags:
    - bfs
    - dfs
    - expected
    - medium
    - probability
    - sept15
    - xellos0
editorial_url: 'http://discuss.codechef.com/problems/THEGAME'
time:
    view_start_date: 1442223000
    submit_start_date: 1442223000
    visible_start_date: 1442223000
    end_date: 1735669800
    current: 1493557946
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin](http://www.codechef.com/download/translated/SEPT15/mandarin/THEGAME.pdf) and [Russian](http://www.codechef.com/download/translated/SEPT15/russian/THEGAME.pdf). Translations in Vietnamese to be uploaded soon.

![](https://s3.amazonaws.com/codechef_shared/download/SEPT15/THEGAME.jpg)

Consider a maze like this one, encoded in ASCII as a grid of **R** by **C** cells, denoted by characters \# (a wall) and o (a walkable cell). The top left cell of the maze is the _start_ and the bottom right one is the _goal_. All walkable cells are initially white.

Cell B is _reachable_ from cell A iff A and B are both walkable and it's possible to get to B by starting at A and moving only to walkable cells in the four cardinal directions — up, right, down and left.

The maze is complicated and you're too lazy. That's why you try to solve it using the following algorithm:

- Pick a white walkable cell at random and click on it.
- The cell you picked in the first step and all cells reachable from it turn red.
- If there's a red path from the start to the goal, you have solved the maze.
- Else: goto first step.

(Note that once a cell turns red, it will remain red until the maze is solved. Also note that this algorithm will always terminate.)

What's the expected number of clicks ([expectation value](http://mathworld.wolfram.com/ExpectationValue.html) of the number of clicks) you'll have to make to solve the maze?

### Input

The first line of input contains an integer **T** denoting the number of test cases.

- The first line of each test case contains two positive integers **R** and **C** — the number of rows and columns of the maze, respectively.
- The following **R** lines each contain **C** characters. Each character is either \# or o.

### Output

For each test case, output a single line containing one real number: the expected number of clicks necessary to solve the maze.

### Constraints

- **1** ≤ **T** ≤ **100**
- _subtask 1 (15 pts):_ **1** ≤ **RC** ≤ **30**
- _subtask 2 (85 pts):_ **1** ≤ **RC** ≤ **50000**
- At least one path from the start to the goal exists in each test case.

### Example

```
<b>Input:</b>
2
3 3
o#o
oo#
#oo
2 2
oo
oo

<b>Output:</b>
1.166666667
1.000000000


```
### Explanation

**Example case 1.** With 5/6 chance, the first click you'll make will be on the only path from the start to the goal. With 1/6 chance, you'll click on the top right cell before that. The expected number of clicks is therefore 5/6\*1+1/6\*2.