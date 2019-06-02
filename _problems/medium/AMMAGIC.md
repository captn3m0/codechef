---
category_name: medium
problem_code: AMMAGIC
problem_name: 'Magic Board'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
max_timelimit: '6'
source_sizelimit: '50000'
problem_author: balajiganapath
problem_tester: null
date_added: 21-12-2017
tags:
    - balajiganapath
time:
    view_start_date: 1517693400
    submit_start_date: 1517693400
    visible_start_date: 1517693400
    end_date: 1735669800
    current: 1525454396
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Young Alex was playing alone on the upper floor of his family house when he accidentally found a dusty magic board set in some old and rusty chest. The board is a rectangle of size **n** × **m**. He also finds a collection of tiles each containing a single decimal digit \[ie. 0 to 9\]. You may assume that there are at least **n** \* **m** tiles for each particular digit.

There is also a manual lying nearby. The manual says that to start working with the magic board one needs to place exactly one tile containing a digit in each of the **n** \* **m** cells of the board. After placing the tiles, we say that an integer x *can be read* from the board if one can pick any starting cell that contains the first digit of x and the remaining digits of x can be obtained as follows: Each successive digit should be obtained by moving to some cell that is either to the left, right, up or down of the current cell and reading its value.

Formally, we denote *d(r, c)* as the digit placed in the cell located in row *r* and column *c*. Let *x = x1x2... xk*, i.e. *xi* stands for the *i*-th decimal digit of *x* and *x1* ≠ 0. Then, to read x in the board one should find the sequence of cells *(r1, c1), (r2, c2), ..., (rk, ck)*, such that *d(ri, ci) = xi*, and cells *(ri, ci)* and *(ri + 1, ci + 1)* share a side for every *i* from *1* to *k - 1*. Note that it is allowed for the sequence to contain the same cells two or more times, but two consecutive cells should be distinct.

The magic power of the board will be equal to the minimum positive integer that one can not read in the board. Alex has already filled all cells of the board with digits and now asks you to compute its power.

### Input

- The first line contains a single integer **T** — the number of test cases in the given input. Then follow **T** descriptions of individual test cases.
- The first line of each test case contains two integers **n** and **m** — the number of rows and the number of columns in the given magic board.
- Each of the next **n** lines contains a sequence of **m** decimal digits representing the tiles placed on the corresponding row of the board. These will not be separated with spaces.

### Output

For each test case print the magic power of the board. That is, the minimum positive integer that cannot be read in the board according to the rules described above.

### Constraints

- 1 ≤ **T** ≤ 5
- 1 ≤ **n**, **m** ≤ 100

### Example

<pre>
<b>Input:</b>
3
2 2
12
34
4 6
020241
103135
861272
529111
10 10
9910778386
2043114104
3060911314
7317085396
1710280734
5255219471
9131541790
4657660072
6302126963
1033147821

<b>Output:</b>
5
22
129
</pre>
### Explanation

**Testcase 1:** The board has no digit 5, so 5 is the minimum possible integer that one won't be able to read.

**Testcase 2:** There are no two cells with digit 2 that share a side.

**Testcase 3:** Note that to read the integer 101 one will have to use the same cell twice, which is permitted.
