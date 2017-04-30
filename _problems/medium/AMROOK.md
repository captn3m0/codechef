---
category_name: medium
problem_code: AMROOK
problem_name: 'Rook Placement'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: 'satej '
problem_tester: gamabunta
date_added: 8-05-2013
tags:
    - combinatorics
    - cook34
    - medium
    - satej
editorial_url: 'http://discuss.codechef.com/problems/AMROOK'
time:
    view_start_date: 1368988200
    submit_start_date: 1368988200
    visible_start_date: 1368988200
    end_date: 1735669800
    current: 1493557447
layout: problem
---
All submissions for this problem are available.**Chef** and **Sous Chef** are playing a game. There are **N rooks** right next to a chessboard. The chessboard has **R** rows and **C** columns. The rows are numbered from **1** to **R** from top to bottom. The columns are numbered from **1** to **C** from left to right.

Chef will place the **N** rooks within the **R**\***C** cells of the chessboard. **He may keep multiple rooks on the same cell**. You may assume that each cell is large enough to hold all of the **N** rooks. After placing the **N** rooks, some of the cells may remain empty.

Note that not all possible placements of rooks within the **R\*C** cells are **valid**. **If there is a rook at cell (r, c) then there should be no rooks in the cells (u, v)** where **u < r AND v > c**.

Following the Chef's placement of the rooks, the Sous Chef will make an **unlimited number of moves** - including, of course, the possibility of **no move at all**. In each move he may move a rook to **one cell up** or **one cell left** of its position. He cannot move a rook out of the chessboard. At the end of all the moves (**i.e. not necessarily at the end of each move, but at the end of all of them**), Sous Chef must also ensure that the board is **valid** according to the condition given above.

The Sous Chef will win, if he can move the rooks into a valid arrangement where **no pairs of rooks attack each other**. In other words, into a valid arrangement where **no pairs of rooks share the same row or the same column**.

Chef, being Chef - having such wonderful cooks for his advantage - has asked you to count the number of **valid** ways he can place **N** rooks in a chessboard with **R** rows and **C** columns such that the Sous Chef **cannot win**. 2 initial arrangements are considered different if there is at least one cell that contains different number of rooks.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. Each test case contains 3 integers **R**, **C** and **N** respectively.

### Output

For each test case, output a single line containing the number of **valid** (see the problem statement for the definition of valid) ways Chef can place the rooks such that Sous Chef cannot win. Since this number can be quite large, print the number modulo **10007**.

### Constraints

**1 ≤ T ≤ 1000**
**1 ≤ R ≤ 1015**
**1 ≤ C ≤ 1015**
**1 ≤ N ≤ 1015**

### Sample

```

<b>Input:</b>
4
2 2 1
2 2 2
3 2 2
3 3 2

<b>Output:</b>
0
5
8
11


```
### Explanation

**Test Case 1:** Chef has to place a single rook on a 2\*2 board. Of course the Sous Chef can always make sure that the rooks are not under attack from each other (since there is only 1). Hence the Chef cannot place the rook in any way in which the Sous Chef may not win.

**Test Case 2:** There are 9 ways the chef can place the rooks initially. The ways that are marked in bold below are those in which the Sous Chef cannot win. The notation used below is simply the number of rooks placed on each of the 2\*2 cells.

```

<b>1 1
0 0</b>

<b>1 0
1 0</b>

1 0
0 1

0 1
0 1

0 0
1 1

<b>2 0
0 0</b>

<b>0 2
0 0</b>

<b>0 0
2 0</b>

0 0
0 2

```
Note that the following way to place the rooks was invalid.

```

0 1
1 0

```