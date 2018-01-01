---
category_name: hard
problem_code: SEAORD
problem_name: 'Sereja and Order'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: sereja
problem_tester: null
date_added: 10-09-2014
tags:
    - hard
    - nov14
    - sereja
editorial_url: 'http://discuss.codechef.com/problems/SEAORD'
time:
    view_start_date: 1416216600
    submit_start_date: 1416216600
    visible_start_date: 1416216600
    end_date: 1735669800
    current: 1493556831
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/NOV14/mandarin/SEAORD.pdf) and [Russian](http://www.codechef.com/download/translated/NOV14/russian/SEAORD.pdf).

Sereja have **N** programs. Sereja should run every program on two computers. Program number **i** works **A\[i\]** seconds on first computer and **B\[i\]** seconds on second. On each computer Sereja isn't able to run two programs in parallel, also Sereja isn't able to run one program on two computers in one moment. Sereja need to run all programs on both computers in minimal time. Help Sereja in his problem.

### Input

First line contain integer **T** number of test cases. **T** tests follow. First line of each test case contain integer **N**. Next **N** lines contain integers **A\[i\], B\[i\]**.

### Output

For each test case output optimal time in separated line. On the next **N** lines. In i-th line output pair of numbers **X, Y** **X** - start of working program number **i** on first computer, **j** - the same information for second computer.

### Constraints

- **1** ≤ **Sum of N over all the test cases** ≤  **200000**
- **1** ≤ **N** ≤  **10000**
- **1** ≤ **A\[i\], B\[i\]** ≤  **100000**

### Subtasks

11. Subtask #1: **1** ≤ **N** ≤  **10** , **1** ≤ **T** ≤  **1000** (16 points)
12. Subtask #2: **1** ≤ **N** ≤  **500** (21 points)
13. Subtask #3: **1** ≤ **N** ≤  **10000** (63 points)
### Example

<pre><b>Input:</b>
2
1
1 1
3
2 2
1 1
1 1


<b>Output:</b>
2
0 1
4
2 0
0 2
1 3

.

</pre>