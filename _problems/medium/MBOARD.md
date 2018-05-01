---
category_name: medium
problem_code: MBOARD
problem_name: 'Magic Board'
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
    - 'SCM guile'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '0.6'
source_sizelimit: '50000'
problem_author: shangjingbo
problem_tester: laycurse
date_added: 15-10-2012
tags:
    - data
    - feb13
    - medium
    - shangjingbo
editorial_url: 'http://discuss.codechef.com/problems/MBOARD'
time:
    view_start_date: 1360583700
    submit_start_date: 1360583700
    visible_start_date: 1360582602
    end_date: 1735669800
    current: 1493557785
layout: problem
---
All submissions for this problem are available.Long long ago, there is a magic board. The magic board has **N\*N** cells: **N** rows and **N** columns. Every cell contains one integer, which is 0 initially. Let the rows and the columns be numbered from **1** to **N**.

There are **2** types of operations can be applied to the magic board:

1. **RowSet i x**: it means that all integers in the cells on **row i** have been changed to **x** after this operation.
2. **ColSet i x**: it means that all integers in the cells on **column i** have been changed to **x** after this operation.

And your girlfriend sometimes has an interest in the total number of the integers 0s on some row or column.

1. **RowQuery i**: it means that you should answer the total number of 0s on **row i**.
2. **ColQuery i**: it means that you should answer the total number of 0s on **column i**.

### Input

The first line of input contains **2** space-separated integers **N** and **Q**. They indicate the size of the magic board, and the total number of operations and queries from the girlfriend.

Then each of the next **Q** lines contains an operation or a query by the format mentioned above.

### Output

For each query, output the answer of the query.

### Constraints

**1 ≤ N, Q ≤ 500000 (5 \* 105)**
**1 ≤ i ≤ N**
**x ∈ {0, 1}** (That is, **x = 0** or **1**)

### Sample

<pre>
<b>Input:</b>
3 6
RowQuery 1
ColSet 1 1
RowQuery 1
ColQuery 1
RowSet 1 0
ColQuery 1

<b>Output:</b>
3
2
0
1
</pre>### Explanation

At first, the magic board is

<pre><b>000 <- row 1
000
000
</b>
</pre>So the answer of first query _"RowQuery 1"_ is **3**.

After the _"ColSet 1 1"_, the board becomes

<pre><b>column 1
|
V
100
100
100
</b>
</pre>So the answer of the second query _"RowQuery 1"_ is clearly **2**, since the cell **(1,1)** became **1**. And the answer of the third query _"ColQuery 1"_ is 0.

Finally, apply the operation _"RowSet 1 0"_, the board has changed to

<pre><b>000
100
100
</b>
</pre>From this board, the answer of the last query _"ColQuery 1"_ should be **1**.
