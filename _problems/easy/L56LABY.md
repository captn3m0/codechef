---
category_name: easy
problem_code: L56LABY
problem_name: 'Chef and Escaping from the Labyrinth'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - rust
    - SCALA
    - swift
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
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: kefaa
problem_tester: mgch
date_added: 18-01-2018
tags:
    - bfs
    - easy
    - greedy
    - heaps
    - kefaa
    - ltime56
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/L56LABY'
time:
    view_start_date: 1517073000
    submit_start_date: 1517073000
    visible_start_date: 1517073000
    end_date: 1735669800
    current: 1525454366
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME56/mandarin/L56LABY.pdf), [Russian](http://www.codechef.com/download/translated/LTIME56/russian/L56LABY.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME56/vietnamese/L56LABY.pdf) as well.

Chef has fallen into the Labyrinth!

Fortunately, Chef found a map of the Labyrinth. On this map, the Labyrinth is represented as an **N × M** grid of integers. The rows of the grid are numbered 1 through **N** and the columns are numbered 1 through **M**; let's denote the cell in the **i**-th row and **j**-th column by (**i**, **j**). Each cell of this grid belongs to one of the following three types:

- Forbidden cell (represented by **-1**). It's impossible to enter or exit this cell.
- Empty cell (represented by 0). Chef can freely enter or exit this cell, but cannot use it to escape the Labyrinth.
- Exit cell (represented by a positive integer **x**). Chef can freely enter or exit this cell. Moreover, Chef can escape the Labyrinth if he's located in this cell and no more than **x** seconds have elapsed since the beginning.

Chef is able to move from his current cell to any non-forbidden adjacent cell of the Labyrinth; this action takes **one second**. Two cells are considered adjacent if they share an edge.

Chef does not even know his starting location, so he decided first to determine his chances of escaping from each possible cell. Specifically, for each non-forbidden cell, Chef wants to know whether it is possible to escape the Labyrinth when he's initially (at time 0) located in this cell.

Help Chef — for each cell, find out if it's possible to start in this cell at time 0 and escape the Labyrinth.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains two space-separated integers **N** and **M**.
- **N** lines follow; each of these lines contains **M** space-separated integers. For each 1 ≤ **i** ≤ **N**, 1 ≤ **j** ≤ **M**, the **j**-th number on the **i**-th of these lines describes the type of cell (**i**, **j**) of the Labyrinth.

### Output

For each test case, print **N** lines; each of these lines should contain a string consisting of **M** characters. The **j**-th character in the **i**-th of these strings should be:

- B if the cell (**i**, **j**) is forbidden
- Y if the cell (**i**, **j**) of the Labyrinth is not forbidden and it is possible to escape the Labyrinth when starting in this cell
- N if the cell (**i**, **j**) is not forbidden and it is impossible to escape when starting in this cell

### Constraints

- 1 ≤ **T** ≤ 30
- 1 ≤ **N**, **M** ≤ 1,000
- 1 ≤ sum of **N** · **M** for all test cases ≤ 3,000,000
- -1 ≤ type of each cell ≤ 1,000

### Subtasks

**Subtask #1 (30 points):**

- 2 ≤ **N**, **M** ≤ 100
- 1 ≤ sum of **N** · **M** for all test cases ≤ 30,000

**Subtask #2 (70 points):** original constraints

### Example

<pre><b>Input:</b>

2
5 5
0 0 0 -1 5
0 0 0 -1 0
1 0 0 0 0
0 0 0 0 0
0 0 0 0 0
3 4
0 0 5 -1
0 -1 -1 0
0 0 0 0

<b>Output:</b>

NNNBY
YNYBY
YYYYY
YNYYY
NNNYY
YYYB
YBBN
YYNN
</pre>
###  Explanation 

**Example case 1:** Cell (3, 1) can be used as the exit when starting in cells (2, 1), (3, 1), (4, 1) or (3, 2). Cell (1, 5) can be used as the exit if Chef starts in cells (3, 2), (3, 3), (2, 3), (4, 3), (3, 4), (4, 4), (5, 4), (1, 5), (2, 5), (3, 5), (4, 5) or (5, 5). Please note that if Chef starts in cell (3, 2), he can use either of the two exit cells for escaping.

**Example case 2:** Chef can escape if he starts in cells (1, 3), (1, 2), (1, 1), (2, 1), (3, 1) or (3, 2).
