---
category_name: challenge
problem_code: SEAFUNC
problem_name: 'Sereja and Functions (Challenge)'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: sereja
problem_tester: null
date_added: 21-11-2015
tags:
    - challenge
    - greedy
    - math
    - sept17
    - sereja
editorial_url: 'https://discuss.codechef.com/problems/SEAFUNC'
time:
    view_start_date: 1505122200
    submit_start_date: 1505122200
    visible_start_date: 1505122200
    end_date: 1735669800
    current: 1525454422
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/SEPT17/mandarin/SEAFUNC.pdf) and [vietnamese](http://www.codechef.com/download/translated/SEPT17/vietnamese/SEAFUNC.pdf) as well.

Sereja is stuck with a problem and asks for your help. You readily agree to help Sereja and he poses the following problem to you.

Sereja has a matrix  **A** of size **N x N**. Each cell in row **i** and column **j** contains a number **A\[i\]\[j\]**. Every element of the matrix can either be 0 or **1**. Initially, all the elements are zero.

Sereja informs you that he only likes the functions of the form

![](https://discuss.codechef.com/upfiles/cheffunc.png)Here the division is integer division, i.e. x/y means integer division of x by y.

Sereja can choose a set of integers **a1, a2, b1, b2, c1, c2, d** and two other integers **l, r** and **applies** the function **f** to the matrix as follows. He will substitute 1 in the every cell **(i, j)** where **l ≤ i ≤ r** and **j = f(i)**.

Sereja gives you a matrix **A** after applying a certain number of functions to it. He asks you to find the minimal amount of functions such that after applying them Sereja will get the matrix A. You need not create the matrix **A** exactly, you are allowed to have at most **100 distinct cells** in the matrix obtained after your operations and the matrix **A**. Your task is to minimize the number of such functions applied.

### Input

 The first line of input contains an integer **T** denoting the number of test cases.

First line of each test case contains an integer **N**. Each of the next **N** lines contains **N** digits (zero or one) without spaces denoting the matrix **A**.

### Output

For each test case in first line output an integer corresponding to the number of functions **Q**.

Next **Q** lines should contain information about functions. Each lines should contain set of integers **a1, a2, b1, b2, c1, c2, d**, l, r.

The following constraints must be satisfied for the output.

- 0 ≤ **Q** ≤ **N\*N**
- **-N** ≤ **a1, b1, c1, d** ≤ **N**
- **1** ≤ **a2, b2, c2** ≤ **N**
- **1** ≤ **l** ≤ **r** ≤ **N**

### Constraints

- **1** ≤ **T** ≤ **20**
- **1** ≤ **N** ≤ **100**

### Tests generation

There will be **10** official tests. During contest you will be able to get your score on first **2** tests. After contest there will be rejudge on full tests set.

In every test, **T** is equal to **20** and **N** is chosen randomly in the range **\[95, 100\]**. Further for each test case integer **K** is chosen:

- For first **5** tests, **K** is chosen randomly in range \[1, 5\]
- For next **5** tests, **K** is chosen randomly in range \[50, 100\]
- For next **5** tests, **K** is chosen randomly in range \[500, 1000\]
- For next **5** tests, **K** is chosen randomly in range \[1000, 3000\]

After **K** is chosen we generate **K** functions in next way:

- With probability **1/3**, **a1 = b1 = 0**
- With probability **2/3**, **a1 = 0**
- For all other numbers, the way of generation is hidden

### Scoring

You will receive a WA if the operation doesn't satisfy the output constraints specified in the statement or the number of distinct cells in the final matrix after applying all the operations exceeds 100.

Lets **S** denote the sum of **Q / (N \* N + 1 - ONES)** (where **ONES** is number of digit **1** in given matrix) for all the test cases. Your score will be to **S** which you should try to minimize.

### Example

<pre><b>Input:</b>
1
5
00010
00100
01000
10000
11111

<b>Output:</b>
2
0 1 0 1 -1 1 5 1 4
0 1 0 1 0 1 5 1 5
</pre>