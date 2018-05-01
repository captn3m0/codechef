---
category_name: medium
problem_code: CHEFAFD
problem_name: 'Chef and Finding Direction'
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
problem_author: lexman
problem_tester: null
date_added: 17-09-2016
tags:
    - lexman
time:
    view_start_date: 1481535000
    submit_start_date: 1481535000
    visible_start_date: 1481535000
    end_date: 1735669800
    current: 1493557513
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/DEC16/mandarin/CHEFAFD.pdf), [Russian](http://www.codechef.com/download/translated/DEC16/russian/CHEFAFD.pdf) and [Vietnamese](http://www.codechef.com/download/translated/DEC16/vietnamese/CHEFAFD.pdf) as well.

Chef has a grid of size **N \* N** with its rows numbered from **1** to **N**, and the columns also numbered from **1** to **N**. The cell at the **i**th row and the **j**th column is cell **(i,j)**. From cell **(i,j)**, you can go in one of the four directions **U L D R** (corresponding to up, left, down, right) to cells **(i-1,j)**, **(i,j-1)**, **(i+1,j)**, **(i,j+1)** respectively, and of course you cannot go outside of the grid. However, with each cell, Chef is only allowed to go in some of the four directions (at least one), which is given by a string **directs\[i\]\[j\]** containing only the characters **U L D R** denoting the directions Chef can go from cell **(i,j)**.

Now, Chef wants to choose exactly one direction to go from each cell, so that from any cell in the grid, he can come back to same cell by following the chosen directions of the cells. Please help him!

### Input

The first line of input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains a single integer **N** denoting the size of the grid.

**N** lines follow. Each line contains **N** space-separated strings denoting the given directions for that cell. The **jth** string in the **ith** line is **directs\[i\]\[j\]**.

### Output

For each test case, output a single line containing "**YES**" (without quotes) if for each cell Chef can choose one and only one direction to go so that from every cell Chef can go back to that cell using chosen directions, "**NO**" (without quotes) otherwise.

If the answer is "**YES**", then you must print the chosen directions in the next **N** lines. Each line will contain **N** strings. The **jth** string in the **ith** line must consist of a single character: the direction chosen for cell **(i,j)**.

### Constraints

- **1** ≤ **T** ≤ **50**
- **2** ≤ **N** ≤ **150**
- **1** ≤ length **directs\[i\]\[j\]** ≤ **4**

### Subtasks

 **Subtask #1: (10 points)** - **2** ≤ **N** ≤ **5**
- **1** ≤ length **directs\[i\]\[j\]** ≤ **2**

 **Subtask #2: (10 points)** - **2** ≤ **N** ≤ **12**

 **Subtask #3: (40 points)** - **2** ≤ **N** ≤ **50**

 **Subtask #4: (40 points)**

- Original constraints

### Example

<pre><b>Input:</b>
<tt>2
2
RD D
UR UL
3
RD LR DL
RU LU LDU
U UL L</tt>

<b>Output:</b>
<tt>YES
R D
U L
NO</tt>

</pre>### Explanation

**Example case 1.** Chef can keep the direction **R** for cell **(1, 1)**, **D** for **(1, 2)**, **U** for **(2, 1)** and **L** for **(2, 2)**. Then he can go **(1,1) -> (1,2) -> (2,2) -> (2,1) -> (1,1)**. It means that from any cell he always can go back to that cell.

**Example case 2.** There is no way to keep only 1 direction for each cell to satisfy the condition.
