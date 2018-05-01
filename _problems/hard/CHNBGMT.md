---
category_name: hard
problem_code: CHNBGMT
problem_name: 'Chef and Big Matrix'
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
max_timelimit: '2 - 10'
source_sizelimit: '50000'
problem_author: antoniuk1
problem_tester: xcwgf666
date_added: 8-02-2016
tags:
    - antoniuk1
    - april16
    - binomial
    - chinese
    - hard
    - modular
editorial_url: 'http://discuss.codechef.com/problems/CHNBGMT'
time:
    view_start_date: 1460374200
    submit_start_date: 1460374200
    visible_start_date: 1460374200
    end_date: 1735669800
    current: 1493556655
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/APRIL16/mandarin/CHNBGMT.pdf), [Russian](http://www.codechef.com/download/translated/APRIL16/russian/CHNBGMT.pdf) and [Vietnamese](http://www.codechef.com/download/translated/APRIL16/vietnamese/CHNBGMT.pdf) as well.

Chef has a rectangular table consisting of **N** rows and **M** columns. Rows are numbered by integers from 1 to **N** from top to bottom and columns are numbered from 1 to **M** from left to right. Let **(x, y)** denote the cell corresponding to **xth** row and **yth** column.

Chef has two bunnies, both initially at the cell (1, 1). He wants them to get to the cell (**N**, **M**). Each of the bunny can move from some cell (**x**, **y**) to cell (**x**+1, **y**) or cell (**x**, **y**+1). As bunnies do not really like each other, they do not want to meet along their ways, except at the start **(1,1)** and end (**N**, **M**) cells.

Also, there are exactly **C** cells in the table containing a carrot. When a bunny goes through such a cell, he eats this carrot. As Chef also wants to eat carrots, he wants that both the bunnies cumulatively don't eat more than **D** carrots.

Find out number of ways in which bunnies can get from cell (1, 1) to cell (**N**, **M**) satisfying the above conditions. As answer could be large, please output your answer modulo **MOD**.

### Input

- The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains five space-separated integers **N**, **M**, **C**, **D** and **MOD** denoting the sizes of table, the number of cells with a carrot, the maximum number of carrots that can be eaten by bunnies and the modulo.
- Each of next **C** lines contains two space-separated integers **xi** and **yi** denoting the coordinates of the cell with a carrot.

### Output

- For each test case, output a single line containing the numbers of ways bunnies can get from cell (1,1) to cell (**N**, **M**) modulo **MOD**.

### Constraints

- **2** ≤ **N, M** ≤ **105**
- 0 ≤ **D** ≤ **C** ≤ **min{200, N \* M - 2}**
- **1** ≤ **xi** ≤ **N**
- **1** ≤ **yi** ≤ **M**
- **1** ≤ **MOD** ≤ **109**
- It's guaranteed that there is no carrot in cells (1, 1) and (**N**, **M**)

### Subtasks

**Subtask #1 (7 pts)**

- **1** ≤ **T** ≤ **100**
- **2** ≤ **N, M** ≤ **5**
- TL = 2s

**Subtask #2 (11 pts)**

- **1** ≤ **T** ≤ **10**
- **2** ≤ **N, M, C** ≤ **60**
- TL = 2s

**Subtask #3 (13 pts)**

- **1** ≤ **T** ≤ **10**
- **C** = 0
- TL = 2s

**Subtask #4 (19 pts)**

- **1** ≤ **T** ≤ **5**
- 0 ≤ **C** ≤ **100**
- TL = 10s

**Subtask #5 (23 pts)**

- **1** ≤ **T** ≤ **5**
- 0 ≤ **C** ≤ **100**
- TL = 2s

**Subtask #6 (27 pts)**

- **1** ≤ **T** ≤ **5**
- TL = 2s

### Example

<pre><b>Input:</b>
4
2 3 0 0 10
2 3 1 0 16
2 1
3 3 1 0 7
2 2
2 2 2 1 11
1 2
2 1

<b>Output:</b>
1
0
1
0
</pre>### Explanation

**Example case 1.**

\*\*\*
\*\*\*
In this case there is only one variant how bunnies can get from the cell (1,1) to the cell (2, 3). 
First bunny - (1, 1) -> (2, 1) -> (2, 2) -> (2. 3) and the second bunny - (1, 1) -> (1, 2) -> (1, 3) -> (2, 3).

**Example case 2.**

\*\*\*
x\*\*
In this example there are no two nonintersecting ways without cells with carrot. Therefore the answer is 0.

**Example case 4.**

\*x
x\*
In this case there is only one variant how bunnies can move. First bunny - (1, 1) -> (2, 1) -> (2, 2) and the second bunny - (1, 1) -> (1, 2) -> (2, 2). But in this case, in total, bunnies will eat two carrots(when only one carrot is allowed). Therefore the answer is 0.
