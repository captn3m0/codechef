---
category_name: medium
problem_code: THREECOL
problem_name: 'Bear and Three Colours'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: errichto
problem_tester: null
date_added: 30-11-2016
tags:
    - errichto
time:
    view_start_date: 1481535000
    submit_start_date: 1481535000
    visible_start_date: 1481535000
    end_date: 1735669800
    current: 1493557946
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/DEC16/mandarin/THREECOL.pdf), [Russian](http://www.codechef.com/download/translated/DEC16/russian/THREECOL.pdf) and [Vietnamese](http://www.codechef.com/download/translated/DEC16/vietnamese/THREECOL.pdf) as well.

Limak, a little polar bear, loves puzzles. He has recently found an especially interesting one.

There is a rectangular grid with **N** rows and **N** columns, both numbered **1** through **N**. Two cells are called adjacent if they share a side, i.e. all the cells other than those at boundary will have 4 adjacent cells. Every cell is colored in one of three colors. For convenience, let us label these colors by characters 'A', 'B' and 'C'.

In one move, Limak can choose any two adjacent cells of different colors and change them both to the third color. For example, if two adjacent cells have colors 'A' and 'C', then Limak can change them both to colour 'B'.

It's forbidden to choose two non-adjacent cells or to choose a cell with itself. It's allowed to choose two adjacent cells of the same color, but such a move does nothing.

The goal of the puzzle is to get all the cells of the grid in the same color. Limak is a smart bear, he would surely achieve that, but there is a problem, he is color-blind. He sees the size of the grid but he can't distinguish the colors of cells.

You are his only hope. Given an integer **N**, find a sequence of at most **100,000** moves such that it solves each grid of dimensions **N × N**.

### Input

The only line of the input contains a single integer **N**, denoting the dimension of the grid.

### Output

In the first line, output a single integer **K** (between  and **100,000**, inclusive), denoting the number of moves.

Then print **K** lines. The **i**-th of them should contain four integers **r1**, **c1**, **r2** and **c2**, meaning that in the **i**-th move, you choose cells **(r1, c1)** and **(r2, c2)**. These two cells must be adjacent. All coordinates must be between **1** and **N**, inclusive. Here, **(i, j)** denotes a cell at the intersection of the **i**-th row and the **j**-th column.

### Constraints

- **2** ≤ **N** ≤ **20**
- **N** is not divisible by **3**. This condition guarantees that all initial grids are solvable.

### Subtasks

There are eight subtasks, each worth 12 or 13 points. Every subtask contains only one test. Values of **N** are: **2**, **4**, **5**, **8**, **11**, **13**, **16**, **20**.

### Checker and Correctness

The task will be graded by a custom checker. Your program will be judged AC (accepted) only if your solution follows the output format and the grader can't find any counterexample grid that breaks your solution. We tried to make the checker as strong as possible. The intended solution indeed solves all possible initial grids. It's possible that the checker is strong enough that all incorrect solutions are judged WA (wrong answer).

### Example

```
<b>Input:</b>
4

<b>Output:</b>
6
1 1 1 2
1 3 2 3
2 3 2 2
3 2 2 2
4 3 4 4
1 4 1 3

```
### Explanation

The provided output isn't correct because it doesn't solve all possible initial grids. Its only purpose is to show you a valid format. Below you can see how one example grid would change. Here we assume that columns are numbered from top to bottom, and rows are numbered from left to right. In every new grid two previously chosen cells are marked bold. Note that some moves don't affect the grid.

AAAB **AA**AB AA**C**B AACB AACB AACB AA**AA**
ABBA ABBA AB**C**A A**AA**A A**A**AA AAAA AAAA
AAAA AAAA AAAA AAAA A**A**AA AAAA AAAA
AABC AABC AABC AABC AABC AA**AA** AAAA