---
category_name: challenge
problem_code: SEAWCU
problem_name: 'Sereja and Ways in the Cube'
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
    - 'SCM chicken'
    - CLOJ
    - FS
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: sereja
problem_tester: xcwgf666
date_added: 7-10-2016
tags:
    - sereja
time:
    view_start_date: 1479115800
    submit_start_date: 1479115800
    visible_start_date: 1479115800
    end_date: 1735669800
    current: 1525454424
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/NOV16/mandarin/SEAWCU.pdf), [Russian](http://www.codechef.com/download/translated/NOV16/russian/SEAWCU.pdf) and [Vietnamese](http://www.codechef.com/download/translated/NOV16/vietnamese/SEAWCU.pdf) as well.

Sereja has a cube **A** of **N x N x N** cells. The the cell at position **(X, Y, Z)** contains a number **A\[X\]\[Y\]\[Z\]**. You have to to find a sequence of cells **(X\[1\], Y\[1\], Z\[1\]), (X\[2\], Y\[2\], Z\[2\]), ..., (X\[K\], Y\[K\], Z\[K\])** (triples of integers between **1** and **N**) satisfying the following properties:

- The first cell lies on the front side, i.e. **X\[1\] = 1**.
- Each pair of consecutive cells in the sequence are adjacent. Here, we say two cells **(X, Y, Z), (X', Y', Z')** are adjacent if **|X-X'| + |Y-Y'| + |Z-Z'| = 1**.
- Two non-consecutive cells in the sequence are not adjacent. That is, if **i** and **j** are two indices into the sequence with **i+2** ≤ **j** then **|X\[i\]-X\[j\]| + |Y\[i\]-Y\[j\]| + |Z\[i\]-Z\[j\]| ≠ 1**.
- No two cells in the sequence are the same.

Help Sereja, find such a sequence that maximize the sum of the numbers stored at the cells in the sequence.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains integer **N**. Then **N** *blocks* of input follow where each block consists of **N** lines, each containing **N** integers. The **X**-th number in the **Y**-th line of **Z**-th block is the value **A\[X\]\[Y\]\[Z\]**. ### Output

The first line of output for each test case should contain number **K** - the number of cells in the sequence. The next **K** lines should contain three space-separated integers: the **X,Y,Z** indices of the cell.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N** ≤ **50**
- **-1000000** ≤ **A\[i\]\[j\]\[k\]** ≤ **1000000**

### Example

<pre><b>Input:</b>
1
2
1 1
1 1
1 1
1 1

<b>output:</b>
4
1 1 1
1 1 2
1 2 2
2 2 2
</pre>
### Test generation

Each test will contain **T=10** test cases and **N** will always be equal to **50**. There will be  three types of tests: - Every number in the cube will be from the set {1, 0, -1000000}. The cube will be generated in the following way. Originally it will be filled with only 1s. Then a randomly-chosen 5% of the positions will be filled with 0. Finally, while less than 20% of the cube consists of -1000000 entries, some subcube will be filled with -1000000 entries.
- Every number in cube will be from the set {10000, 1000, 100, 1, 0, -1000000}. This will be generated in the same way as previous test, but originally all numbers are random positives number from the set.
- 80% of numbers are positive numbers from the interval \[1, 1000000\]. 20% are randomly chosen from the set {-1, -10, -100, -1000, -10000, -100000, -1000000}.

### Scoring

For each test case, let **S** be the sum of values on the selected path. Let **W** be the average value of positive numbers inside of the cube. Lets **Sum** be the sum of the values **max(S/W, 1)** among all test cases. Lets **Best** be the maximum value of **Sum** among all participants. Your displayed score will be **Sum/Best**.
