---
category_name: medium
problem_code: SVNTR
problem_name: 'Save the nature'
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
max_timelimit: '1 - 3'
source_sizelimit: '50000'
problem_author: pavel1996
problem_tester: xcwgf666
date_added: 26-09-2015
tags:
    - fenwick
    - ltime29
    - medium
    - mergesort
    - pavel1996
editorial_url: 'http://discuss.codechef.com/problems/SVNTR'
time:
    view_start_date: 1445761800
    submit_start_date: 1445761800
    visible_start_date: 1445761800
    end_date: 1735669800
    current: 1493557938
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/LTIME29/mandarin/SVNTR.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME29/russian/SVNTR.pdf)

The new king of Byteland, John-2318, has just ascended the throne. As every new king, he wants to build a spectacular palace to showcase his wealth and power.

We can consider Byteland as an **N x M** rectangular matrix **A**. If **A\[i\]\[j\]** is positive, then it means that **A\[i\]\[j\]** litres of oxygen are produced by trees in the cell with coordinates **(i, j)** every day. On the other hand, a negative value of **A\[i\]\[j\]** indicates that a Byteland resident lives in this cell, who consumes **A\[i\]\[j\]** litres of oxygen every day.

The palace will occupy some rectangle submatrix of **A**. All the cells within the palace premises will not produce nor consume any oxygen.

Byteland scientists discovered the new important fact: if Byteland will be producing **S** less litres of oxygen every day than it produces now, it will lead to a natural disaster. So now everyone is interested in the following question: how many ways exist for choosing a rectangular region for the planned palace?

### Input

The first line contains one integer **T** denoting the number of testcases.

Each testcase starts with a line containing three space-separated integers **N**, **M**, and **S**. The following **N** lines contain **M** integers each and describe the cells of the matrix **A**.

### Output

For each testcase, output a single line containing one integer - the number of rectangles where the palace can be built without causing a disaster.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N, M** ≤ **150**
- **-109** ≤ **A\[i\]\[j\]** ≤ **109**
- **1** ≤ **S** ≤ **109**

### Subtasks

- Subtask 1 (27 points) **1** ≤ **N, M** ≤ **20**, **time limit = 1 sec**
- Subtask 2 (30 points) **1** ≤ **N, M** ≤ **50**, **time limit = 1 sec**
- Subtask 3 (43 points) **1** ≤ **N, M** ≤ **150**, **time limit = 3 sec**

### Example

<pre><b>Input:</b>
<tt>2
2 3 7
1 2 3
4 5 6
3 3 12
3 3 3
4 4 4
3 3 3</tt>

<b>Output:</b>
<tt>11
27</tt>
</pre>
### Explanation

**Test case 1**: we have the following matrix **A**:
1 2 3
4 5 6

There are 11 rectangular submatrices with sum ≤ **S = 7**: all the 6 cells themselves, 2 columns (the left and the middle), 1 row (the first), and 2 segments in the first row of length 2 each.
