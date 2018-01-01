---
category_name: hard
problem_code: DOMSOL
problem_name: 'Domino Solitaire'
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
date_added: 15-11-2014
tags:
    - dynamic
    - easy
    - inpr1501
    - yogesh01
time:
    view_start_date: 1422551177
    submit_start_date: 1422551177
    visible_start_date: 1422551127
    end_date: 1735669800
    current: 1493556697
layout: problem
---
All submissions for this problem are available.In Domino Solitaire, you have a grid with two rows and N columns. Each square in the grid contains an integer A. You are given a supply of rectangular 2 × 1 tiles, each of which exactly covers two adjacent squares of the grid. You have to place tiles to cover all the squares in the grid such that each tile covers two squares and no pair of tiles overlap.

The score for a tile is the diﬀerence between the bigger and the smaller number that are covered by the tile. The aim of the game is to maximize the sum of the scores of all the tiles.

Here is an example of a grid, along with two different tilings and their scores.The score for Tiling 1 is 12 = (9 − 8) + (6 − 2) + (7 − 1) + (3 − 2) while the score for Tiling 2 is 6 = (8 − 6) + (9 − 7) + (3 − 2) + (2 − 1). There are other tilings possible for this grid, but you can check that Tiling 1 has the maximum score among all tilings. Your task is to read the grid of numbers and compute the maximum score that can be achieved by any tiling of the grid.

![](/download/extimages/7a5dce34b65f397e0b2b7b4fc7eb78d0.png)

Your task is to read the grid of numbers and compute the maximum score that can be achieved by any tiling of the grid.

### **Input**

The ﬁrst line contains one integer N, the number of columns in the grid. This is followed by 2 lines describing the grid. Each of these lines consists of N integers, separated by blanks.

### **Output**

A single integer indicating the maximum score that can be achieved by any tiling of the given grid.

### Constraints

- **1** ≤ **N** ≤ **105**
- **1** ≤ **A** ≤ **104**

### Example

**Input:**
4
8 6 2 3
9 7 1 2
**Output:**
12
