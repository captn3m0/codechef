---
category_name: challenge
problem_code: EDSTGRID
problem_name: 'Edit Distance on Grid'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - SCALA
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - PERL6
    - TEXT
    - CLOJ
    - FS
max_timelimit: '0.930359'
source_sizelimit: '50000'
problem_author: ACRush
problem_tester: shangjingbo
date_added: 28-08-2013
tags:
    - ACRush
editorial_url: 'http://discuss.codechef.com/problems/EDSTGRID'
time:
    view_start_date: 1381743000
    submit_start_date: 1381743000
    visible_start_date: 1381743000
    end_date: 1735669800
    current: 1525199511
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in Mandarin Chinese [here](http://www.codechef.com/download/translated/OCT13/mandarin/EDSTGRID.pdf)

### Problem description.

 Recently, Chef is learning how to compute the edit distance between two strings.
Today, Chef wants to generalize the concept of edit distance to 2D-grid(s).

 Given a 2D-grid with **N** rows and **M** columns,
each cell of the grid is either white or black.
There are three operations to change the grid:

1\) Swap two cells share a common edge, which takes 1 second, or 

2\) Change one white cell to black, which takes **C2** seconds. 

3\) Change one black cell to white, which takes **C3** seconds. 

The parameters **C2** and **C3** are known, but may be different in different cases.

 Now, Chef wants to know the minimal edit distance from the given grid to any connected grid.
So, your job is to change the given grid by the three operations above, and make the grid connected as soon as possible.

 One grid is connected if it contains no black cells or all black cells are connected.
Two cells A and B are directly connected if their cells share a common edge.
Two cells A and B are connected indirectly if there exists another cell C such that A and C are connected (indirectly or directly)
and B and C are connected (indirectly or directly).

 For scoring propose, your submission will get "Wrong Answer" if the number of operations for any test case exceeds 1000000. The task does not require minimality, but less time will score more points.

### Input

 The first line of the input file contains an integer **T**, the number of test cases. The description of **T** test cases follows.

The first line of each test case contains four integers **N**, **M**, **C2** and **C3**
denoting the size of the grid and time for Operation 2) and 3).
The next **N** lines describe the board, each line contains an **M** characters string.

In the grid, rows are numbered from **1** to **N**, and columns are numbered from **1** to **M**.
The **j**-th character of the **i**-th line can be either 'B' or 'W', representing the color of the cell in the **i**-th row and **j** column is black or white.

### Output

For each test case, output the integer **C** on the first line, denoting the number of operations.
Then output **C** lines for **C** operations. 

For operation 1), please output '1' followed by the positions of the two cells
**row1**, **column1**, **row2** and **column2**.
The two cells must be in the board and share one edge.

For operation 2), please output '2' followed by two integers indicates the position of the cell.
The cell must be in the board and white before the operation. 

For operation 3), please output '3' followed by two integers indicates the position of the cell.
The cell must be in the board and black before the operation.

### Constraints

- **1** ≤ **T** ≤ **5**
- **1** ≤ **N, M** ≤ **100**
- **5** ≤ **C2** ≤ **20**
- **20** ≤ **C3** ≤ **40**

### Scoring

For each test case, suppose the total time used is **S**. Your score is **S / (N \* M)**. The total score of the test file is the sum of the scores for each test case. The goal is to minimize your score.

 We have 24 official test files. You must correctly solve all test files to receive **OK**.
During the contest, your overall score is the sum of the scores on the first **4** test files. After the contest, all solutions will be rescored by the sum of the scores on the rest **20** test files.

### Example

<pre><b>Input:</b>
3
3 4 10 40
BWWB
WWWW
BWWB
3 4 10 40
BWWB
WWWW
BWWB
3 4 10 40
BWWB
WWWW
BWWB

<b>Output:</b>
4
2 2 1
2 2 2
2 2 3
2 2 4
4
3 1 1
3 1 4
3 3 1
3 3 4
6
1 1 1 1 2
1 1 2 2 2
1 2 2 3 2
1 1 4 1 3
1 1 3 2 3
1 2 3 3 3

</pre>
### Explanation

The scores of the sample output is **40 / (3 \* 4)** + **40 \* 4 / (3 \* 4)** + **6 / (3 \* 4)**.

### Test Generation

 We have **24** official test files. Every input file contains exactly 5 (**T** = **5**) test cases.

Each test case is created as follows:

The size of the grid **N** and **M** are chosen from **\[50, 100\]** uniformly at random.

The parameter **C2** is chosen from **\[5, 20\]** uniformly at random.

The parameter **C3** is chosen from **\[20, 40\]** uniformly at random.

One real value **p** is chosen from **\[0.05, 0.1\]** uniformly at random.

Each grid is black with probability **p** and white with probability **1 - p**, independently.
