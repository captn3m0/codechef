---
category_name: medium
problem_code: MAZE
problem_name: Maze
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
problem_author: wwwwodddd
problem_tester: kevinsogo
date_added: 14-05-2016
tags:
    - bfs
    - cook70
    - dfs
    - dual
    - easy
    - union
    - wwwwodddd
editorial_url: 'http://discuss.codechef.com/problems/MAZE'
time:
    view_start_date: 1463941800
    submit_start_date: 1463941800
    visible_start_date: 1463941800
    end_date: 1735669800
    current: 1493557785
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK70/mandarin/MAZE.pdf), [Russian](http://www.codechef.com/download/translated/COOK70/russian/MAZE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK70/vietnamese/MAZE.pdf) as well.

A brutal war in Chefland has just ended. Chefland is of rectangular grid shape of dimensions **R \* C**, where **R** denotes the number of rows and **C** the number of columns. At each cell of the grid, there is a house. Enemy has planted parts a big nuclear bomb in each house of the Chefland. Enemy has just been defeated and might activate the bomb as a last resort. Enemy can only activate the nuclear bomb if all the parts of the bomb can send signals to each other. A part of bomb at a house can send signals to a part of bomb in its adjacent house only (i.e. the houses which share a wall with it). Note that there are walls between any two adjacent houses. Also, on all the houses, which lie on the boundary, there are walls on the boundary also. In simple terms, there are walls surrounding each house.

Now when bomb diffusion squad of Chefland learned about the plans of the enemy, they were devastated. Hurriedly they started coating walls of the houses with anti-nuclear material, so that no signal could be sent across the coated walls. They have already coated some walls with anti-nuclear material. Soon, they realized that they should ask some scientist to help them in coating the walls, so they asked our Chef to help them by coating minimum number of walls with anti-nuclear material such that bomb is disposed.

Please hurry up to help Chef in finding out the minimum number of walls he should coat to dispose the nuclear bomb. Enemy might activate the bomb any time soon. It might be impossible for Chef to coat the walls in order to dispose the bomb. In that case, Chefland is doomed.

### Input

First line of input contains a single integer **T** denoting the number of test cases.

For each test case, first line contains three space separated integers **R, C, W** denoting number of rows in Chefland, number of columns and the number of walls already coated by bomb diffusion squad, respectively.

Each of the next **W** lines, contains four space separated integers **i1, j1, i2, j2**, denoting the wall between the house (**i1, j1**) and (**i2, j2**) has been coated.

### Output

For each test case, output either "Chefland is doomed" (without quotes), or a single integer denoting the minimum number of walls Chef should coat.

### Constraints

- **1** ≤ **T** ≤ **2×105**
- **1** ≤ **R, C** ≤ **106**
- **1** ≤ **i1** ≤ **i2** ≤ **R**
- **1** ≤ **j1** ≤ **j2** ≤ **C**
- (**i1, j1**) and (**i2, j2**) are adjacent.
- Sum of **W** over all test cases in a single test file does not exceed **2×105**

### Example

<pre><b>Input:</b>
2
4 4 2
1 2 1 3
2 1 3 1
4 4 4
1 2 1 3
2 1 3 1
2 2 2 3
2 2 3 2
<b>Output:</b>
2
0
</pre>
### Explanation

**Example case 1.**

![](https://s3.amazonaws.com/codechef_shared/download/upload/COOK70/example_1_city_before.png)
![](https://s3.amazonaws.com/codechef_shared/download/upload/COOK70/example_1_city_after.png)

First image shows the situation at the time Chef was invited to coat the walls. There were two walls coated with anti-active element (shown in red).
Second image shows the situation after Chef coated two additional walls (between houses (2, 2) and (2, 3) and another between houses (2, 2) and (3, 2)).
Note that, after this, bomb will be defused as bomb parts at (1, 1) won't be send signal to bomb part say (4, 4).

**Example case 2.**
These situation is same as second image in the above example. Bomb is already defused. Chef doesn't need to coat any more walls.
