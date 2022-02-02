---
category_name: easy
problem_code: CAOS1
problem_name: 'CAO Stage-1'
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
problem_author: kaushik_iska
problem_tester: xcwgf666
date_added: 16-07-2013
tags:
    - cakewalk
    - kaushik_iska
    - sept13
editorial_url: 'http://discuss.codechef.com/problems/CAOS1'
time:
    view_start_date: 1379323800
    submit_start_date: 1379323800
    visible_start_date: 1379323800
    end_date: 1735669800
    current: 1493558111
layout: problem
---
All submissions for this problem are available.### Problem Statement

**Past**

In the year of 2048, the Virtual Reality Massively Multiplayer Online Role-Playing Game (VRMMORPG), **Code Art Online (CAO)**, is released. With the Chef Gear, a virtual reality helmet that stimulates the user's five senses via their brain, players can experience and control their in-game characters with their minds.

On August the 2nd, 2048, all the players log in for the first time, and subsequently discover that they are unable to log out. They are then informed by Code Master, the creator of CAO, that if they wish to be free, they must reach the second stage of the game.

Kirito is a known star player of CAO. You have to help him log out.

**Present**


*Stage 1*

A map is described by a 2D grid of cells. Each cell is either labelled as a **\#** or a **^**. **\#** denotes a wall. A monster exists in a cell if the cell is not a wall and the cell is a **centre of Prime-Cross (CPC)**.

- Let **L** be the number of contiguous **^** to the left of **X**, in the same row as **X**.
- **R** be the number of contiguous **^** to the right of **X**, in the same row as **X**.
- **T** be the number of contiguous **^** above **X**, in the same column as **X**.
- **B** be the number of contiguous **^** below **X**, in the same column as **X**.

A cell **X** is said to be a **CPC** if there exists a prime number **P** such that **P ≤ minimum of \[L, R, T, B\]**.

**Note:** While computing **L, R, T, B** for a cell **X**, you should not count the **^** of the cell **X**.

Given a map, you have to tell Kirito the number of cells where monsters exist.

**Future**

If you are done with this task, go help Kirito with Stage 2 :-)

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. Each case starts with a line containing two space separated integers **R, C** denoting the number of rows and columns in the map respectively. The next **R** lines contain **C** characters each, describing the map.

### Output

For each test case, output a single line containing the number of cells where monsters exist.

### Constraints

- 1 ≤ **T** ≤ 100
- 1 ≤ **R** ≤ 50
- 1 ≤ **C** ≤ 50

### Example

<pre><b>Input:</b>
2
5 5
^^^^^
^^^^^
^^^^#
^^^^^
^^^^^
5 7
^^#^^^^
^^#^#^#
#^^^^^^
^^#^^#^
^^^^^^^

<b>Output:</b>
0
1
</pre>
### Explanation

**Example case 1.** There is no cell for which minimum of L, R, T, B is greater than some prime P.

**Example case 2.** The cell at \[3, 4\], (1-based indexing) is the only CPC.
