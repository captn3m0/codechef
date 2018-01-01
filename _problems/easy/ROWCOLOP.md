---
category_name: easy
problem_code: ROWCOLOP
problem_name: 'Row and Column Operations'
languages_supported:
    - C
    - 'CPP 4.9.2'
    - CPP14
    - JAVA
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: anton_lunyov
problem_tester: laycurse
date_added: 6-02-2013
tags:
    - anton_lunyov
    - cook31
    - simple
    - simple
editorial_url: 'http://discuss.codechef.com/problems/ROWCOLOP'
time:
    view_start_date: 1361126625
    submit_start_date: 1361126625
    visible_start_date: 1361126539
    end_date: 1735669800
    current: 1493558183
layout: problem
---
All submissions for this problem are available.You are given an **N × N** grid initially filled by zeros. Let the rows and columns of the grid be numbered from **1** to **N**, inclusive. There are two types of operations can be applied to the grid:

- **RowAdd R X**: all numbers in the row **R** should be increased by **X**.
- **ColAdd C X**: all numbers in the column **C** should be increased by **X**.

Now after performing the sequence of such operations you need to find the maximum element in the grid.

### Input

The first line of the input contains two space separated integers **N** and **Q** denoting the size of the grid and the number of performed operations respectively. Each of the following **Q** lines describe an operation in the format described above.

### Output

Output a single line containing the maximum number at the grid after performing all the operations.

### Constraints

- **1** ≤ **N** ≤ **314159**
- **1** ≤ **Q** ≤ **314159**
- **1** ≤ **X** ≤ **3141**
- **1** ≤ **R, C** ≤ **N**

### Example

<pre>
<b>Input:</b>
2 4
RowAdd 1 3
ColAdd 2 1
ColAdd 1 4
RowAdd 2 1

<b>Output:</b>
7

</pre>### Explanation
The grid changes as follows:

<pre>00  33  34  74  74
00  00  01  41  52
</pre>The maximum number in the final grid is 7.