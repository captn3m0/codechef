---
category_name: easy
problem_code: DEVJERRY
problem_name: 'Devu and his mouse Jerry'
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
problem_author: admin2
problem_tester: null
date_added: 1-06-2015
tags:
    - admin2
    - snck151c
editorial_url: 'http://discuss.codechef.com/problems/DEVJERRY'
time:
    view_start_date: 1433700900
    submit_start_date: 1433700900
    visible_start_date: 1433700900
    end_date: 1735669800
    current: 1493558135
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCK151C/mandarin/DEVJERRY.pdf) , [Russian](http://www.codechef.com/download/translated/SNCK151C/russian/DEVJERRY.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCK151C/vietnamese/DEVJERRY.pdf)

Devu loves to play with his dear mouse Jerry. One day they play a game on 2 dimensional grid of dimensions **n \* n** (**n** ≥ 2). Jerry is currently at coordinates **(sx, sy)** and wants to move to location **(ex, ey)** where cheese is placed by Devu. Also Devu is very cunning and has placed a bomb at location **(bx, by)**. All these three locations are distinct.

In a single move, Jerry can go either up, down, left or right in the grid such that it never goes out of the grid. Also, it has to avoid the bomb. Find out minimum number of moves Jerry needs. It is guaranteed that it is always possible to do so.

### Input

- The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows."
- The first line of each test case contains seven space separated integers **n, sx, sy , ex, ey, bx, by**.

### Output

- For each test case, output a single line containing an integer corresponding to minimum number of moves Jerry needs.

### Constraints

- **1** ≤ **T** ≤ **1000**
- **2** ≤ **n** ≤ **20**
- **1 ≤ sx, sy , ex, ey, bx, by ≤ n**
- No two or more poitns in the three points are same.

### Example

```
<b>Input:</b>
2
2 1 1 2 2 1 2
3 1 1 1 3 1 2

<b>Output:</b>
2
4

```
### Explanation

**Example case 1.** ...

Jerry will move directly (1, 1) to (2, 1) and then to (2, 2) in total 2 moves. **Example case 2.** ...

![](http://discuss.codechef.com/upfiles/jerry_grid.png)