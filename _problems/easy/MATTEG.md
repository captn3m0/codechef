---
category_name: easy
problem_code: MATTEG
problem_name: 'Mathison and the teleportation game'
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
    - 'CPP 6.3'
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
    - kotlin
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
    - 'PYTH 3.5'
    - RUBY
    - rust
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1 - 2.5'
source_sizelimit: '50000'
problem_author: alexvaleanu
problem_tester: kingofnumbers
date_added: 23-08-2017
tags:
    - alexvaleanu
    - bitmasking
    - dynamic
    - ltime51
    - medium
editorial_url: 'https://discuss.codechef.com/problems/MATTEG'
time:
    view_start_date: 1503768600
    submit_start_date: 1503768600
    visible_start_date: 1503768600
    end_date: 1735669800
    current: 1514816005
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/LTIME51/mandarin/MATTEG.pdf), [russian](http://www.codechef.com/download/translated/LTIME51/russian/MATTEG.pdf) and [vietnamese](http://www.codechef.com/download/translated/LTIME51/vietnamese/MATTEG.pdf) as well.

 Mathison and Chef are playing a new teleportation game. This game is played on a **R**×**C** board where each cell contains some value. A cell at x-th row and y-th column is denoted by (x,y). The purpose of this game is to collect a number of values by teleporting from one cell to another. A teleportation can be performed using a tel-pair.

 A player is given **N** tel-pairs. **Each tel-pair can be used at most once and a player can use them in any order they like**. Suppose a player is at cell **(a, b)** and the tel-pair is **(dx, dy)**. Then, the player can reach in one teleportation any cell **(c, d)** from **(a, b)** such that **|a − c| = dx** and **|b − d| = dy**.

 It is Mathison’s turn next in the game to make a sequence of moves. 
 He would like to know what is the highest value of a path of length  **at most N+1** that starts in **(Sx, Sy)** and uses some (possibly all) of the tel-pairs given.

### Input

 The first line contains a single integer, **T**, the number of tests.

 Each test starts with three integers, **R**, **C**, and **N**, representing the number of rows, columns, and tel-pairs.

 The next line contains two integers, **Sx**, and **Sy**, representing the coordinates of the starting cell.

 The next two lines will contain the description of the tel-pairs. The first one will contain **N** integers, the x-component of each tel-pair. The second one will contain **N** integers, the y-component of each tel-pair.

 Next, there will be **R** lines, each containing **C** integers, the description of the board.

### Output

 The output file will contain **T** lines. Each line will contain the answer (i.e. the highest value of a path) to the corresponding test.

### Constraints and notes

- 1 ≤ **T** ≤ 100
- 1 ≤ **R, C** ≤ 1000
- 1 ≤ **N** ≤ 9
- 0 ≤ **Sx** < **R**
- 0 ≤ **Sy** < **C**
- 0 ≤ **dx** ≤ **R**
- 0 ≤ **dy** ≤ **C**
- The value of a cell is a natural number between 1 and 1,000,000 (i.e. 106).
- You are allowed to visit a cell multiple times!
- It's **not** allowed to go outside the board!
- If a cell is visited more than once, its value should be taken into account every single time!
- You don't have to use all tel-pairs (but you may want to).
- The length of a path is equal to the number of cells in the path.
- The value of a path is equal to the sum of values of the cells in the path.
- **Note: You may want to use faster reading methods!**
- **Note: The time limits (TLs) are given per input file!**

### Subtaks

**Subtask #1** (15 points):

- **T** ≤ 100
- **R, C** ≤ 10
- **N** ≤ 4
- **TL** = 1s

**Subtask #2** (25 points):

- **T** ≤ 25
- **R, C** ≤ 100
- **N** ≤ 8
- **TL** = 1.5s

**Subtask #3** (30 points):

- **T** ≤ 5
- **R, C** ≤ 1000
- **N** ≤ 8
- **TL** = 2s

**Subtask #4** (30 points):

- **T** ≤ 5
- **R, C** ≤ 1000
- **N** ≤ 9
- **TL** = 2.5s

### Example

<pre><b>Input:</b>
3
5 5 2
2 2
1 2
2 1
10 11 62 14 15
57 23 34 75 21
17 12 <b>14</b> 11 53
84 61 24 <b>85</b> 22
43 <b>89</b> 14 15 43
3 3 2
0 0
1 1
1 1
<b>9</b> 8 7
5 <b>6</b> 4
1 3 2
2 2 1
1 1
2
2
5 6
8 <b>3</b>

<b>Output:</b>
188
24
3
</pre>
### Explanation

<pre>
First test
Mathison starts at (2, 2).
Mathison has two tel-pairs (2, 1) and (1, 2).
The following path (i.e. bolded numbers) generates the maximum value: (2, 2) → (4, 1) → (3, 3)

Second test
Mathison starts at (0, 0).
Mathison has two tel-pairs (1, 1) and (1, 1).
The following path (i.e. bolded numbers) generates the maximum value: (0, 0) → (1, 1) → (0, 0)

Third test
Mathison starts at (1, 1).
Mathison has one tel-pair, (2, 2).
He can't use the tel-pair so the answer is 3 (the value of the starting cell).
</pre>