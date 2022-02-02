---
category_name: easy
problem_code: MTRWY
problem_name: Matrix
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
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: antoniuk1
problem_tester: laycurse
date_added: 29-01-2015
tags:
    - antoniuk1
    - easy
    - march15
    - union
editorial_url: 'http://discuss.codechef.com/problems/MTRWY'
time:
    view_start_date: 1426498200
    submit_start_date: 1426498200
    visible_start_date: 1426498200
    end_date: 1735669800
    current: 1493558169
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/MARCH15/mandarin/MTRWY.pdf) and [Russian](http://www.codechef.com/download/translated/MARCH15/russian/MTRWY.pdf).

You have a rectangular grid of size **N × M**, namely, there are cells **(x, y)** for **1 ≤ x ≤ N, 1 ≤ y ≤ M**. Two cells are adjacent if they share a side. More formally, two cells **(x1, y1), (x2, y2)** are adjacent if **|x1 − x2| + |y1 − y2| = 1**. Between two adjacent cells there can be a wall. Two cells **a** and **b** are connected if there is a way between them (in other words there is a sequence of cells **c1, c2, ..., ck** that **c1 = a, ck = b**, and for each **1 ≤ i &lt; k**, **ci, ci+1** are adjacent cells without wall between them).

Now you are given **Q** queries, each of whom is of following four types.

- **1 x y** - build the wall between cells **(x, y)** and **(x, y+1)**. If there is already exist a wall between them, this query is ignored.
- **2 x y** - build the wall between cells **(x, y)** and **(x+1, y)**. If there is already exist a wall between them, this query is ignored.
- **3 x1 y1 x2 y2** - check if cells **(x1, y1)** and **(x2, y2)** are connected. You must answer **1** if they are connected, 0 otherwise.
- **4** - You must answer the size of the largest connected component. A connected component is a set of sells wherein each two cells are connected. The size of a connected component is a number of the cells in it.

You must assume that there are no walls on the grid before the queries.

### Input

The first line of input contains an integer **T**, denoting the number of test cases. Then **T** test cases are follow.

The first line of each test case contains three space-separated integers **N, M** and **Q**, denoting the grid sizes and amount of queries. For next **Q** lines, each line contains a query. The format of queries are the same as described by the statement.

### Output

For each test case, output an integer, denoting the sum of answers for queries of type **3** and **4**. Note that you just print only the sum of the answers for each test case.

### Constraints and Subtasks

- **1 ≤ T ≤ 100**
- **2 ≤ N, M ≤ 1000**
- The sum of **Q** over all test cases in one test file does not exceed **106**
- For queries of type **1**: **1 ≤ x ≤ N** and **1 ≤ y ≤ M−1**
- For queries of type **2**: **1 ≤ x ≤ N−1** and **1 ≤ y ≤ M**
- For queries of type **3**: **1 ≤ x1, x2 ≤ N** and **1 ≤ y1, y2 ≤ M**

**Subtask 1: (15 points)**

- **1 ≤ Q × N × M ≤ 106**

**Subtask 2: (15 points)**

- **1 ≤ N, M ≤ 300**
- The sum of **Q** over all test cases in one test file does not exceed **105**

**Subtask 3: (70 points)**

- No additional constraints

### Example

<pre><b>Input:</b>
1
3 4 10
3 1 1 3 4
1 1 2
1 2 2
2 2 2
4
1 3 1
4
3 1 1 3 4
1 1 2
3 1 1 1 1

<b>Output:</b>
21
</pre>
### Explanation

**Query 1.** There are a lot of ways from **(1,1)** to **(3,4)**. One of them is marked in red in the picture #1. So these are connected, then **Answer = 1** in this query.

**Query 2.** In the picture #2 you can see the grid after second query.

**Query 3.** In the picture #3 you can see the grid after third query.

**Query 4.** In the picture #4 you can see the grid after fourth query.

**Query 5.** In the picture #5 the largest connected component marked in green. Thus **Answer = 12**.

**Query 6.** In the picture #6 you can see the grid after sixth query.

**Query 7.** In the picture #7 the largest connected component marked in green. Thus **Answer = 7**.

**Query 8.** As you can see in the picture #8, there are no ways from **(1,1)** to **(3,4)**. So they are no longer connected, then **Answer = 0**.

**Query 9.** In the picture #9 you can see the grid after ninth query. There is no difference between it and the grid after the sixth query, because before the ninth query the wall was already built.

**Query 10.** When **a = b**, two cells **a** and **b** are always connected. Thus **Answer = 1**.

Therefore, the sum of the answers is **1 + 12 + 7 + 0 + 1 = 21**, which you should print.

![explanation](/download/extimages/bec647a1cb00760db4257697e654151e.png)
