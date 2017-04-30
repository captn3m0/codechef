---
category_name: medium
problem_code: PUPPYCT
problem_name: 'Puppy and cats'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: pavel1996
problem_tester: zedthirtyeight
date_added: 20-07-2015
tags:
    - ltime26
    - pavel1996
editorial_url: 'http://discuss.codechef.com/problems/PUPPYCT'
time:
    view_start_date: 1437900300
    submit_start_date: 1437900300
    visible_start_date: 1437900300
    end_date: 1735669800
    current: 1493557867
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME26/mandarin/PUPPYCT.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME26/russian/PUPPYCT.pdf).

 Tuzik is a very brave puppy. But there is still one thing he is afraid of - big black cats. He always tries to avoid them.

 Tuzik's city can be represented as an **N x N** grid. Each cell of the city can either contain cats or not. Tuzik knows that **K** cells of the city are dumps. If a cell is a dump, then each diagonal that contains this cell is full of cats (all cells of this diagonal contain cats). Two cells with corresponding coordinates **(i, j)** and **(x, y)** are on one diagonal if either **x + y** equals **i + j** or **x - y** equals **i - j**.

You are given integers **N** and coordinates of **K** dumps. Please find the number of cells which are free of cats.

### Input

The first line of the input contains an integer **T**, denoting the number of test cases. Each test case starts with a line containing space-separated integers **N** and **K**. Each of the following **K** lines contain two space-separated integers **xi** and **yi** - coordinates of each dump. All the dumps are pairwise different.

### Output

For each test case, output a single line containing one integer - number of cells that are free of cats.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N** ≤ **106**
- ≤ **K** ≤ **105**
- **1** ≤ **xi**, **yi** ≤ **N**
- Subtask #1 \[22 points\]: **1** ≤ **N** ≤ **500**,  ≤ **K** ≤ **104**
- Subtask #2 \[24 points\]: **1** ≤ **N** ≤ **1000**,  ≤ **K** ≤ **105**
- Subtask #3 \[23 points\]: **1** ≤ **N** ≤ **106**,  ≤ **K** ≤ **1**
- Subtask #4 \[31 points\]: no additional constraints

### Example

```
<b>Input:</b>
1
3 2 
1 2
3 2 

<b>Output:</b>
5

```
### Sample explanation

We have cells **(2, 1) (2, 3)** on the same diagonals with **(1, 2) or (3, 2)**. Thus 4 cells are occupied by cats and 5 are free of cats.