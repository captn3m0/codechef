---
category_name: medium
problem_code: CLONEME
problem_name: Cloning
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: sidhant007
problem_tester: null
date_added: 10-05-2017
tags:
    - sidhant007
time:
    view_start_date: 1497259800
    submit_start_date: 1497259800
    visible_start_date: 1497259800
    end_date: 1735669800
    current: 1497284426
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JUNE17/mandarin/CLONEME.pdf), [Russian](http://www.codechef.com/download/translated/JUNE17/russian/CLONEME.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JUNE17/vietnamese/CLONEME.pdf) as well.

Given an array **A** consisting of **N** integers, you have to execute **Q** queries on it. These queries ask you to determine whether the two sub-arrays **a** to **b** and **c** to **d**, which are of equal length, are *similar* or not. The two sub-arrays **a** to **b** and **c** to **d** are said to be *similar*, if, after being sorted individually and then compared element by element, they have at most one mismatch. The output should be YES or NO for each query.

 Note - The two sub-arrays can intersect each other and during the query process they will not affect each other in any way.

### Input

The first line of the input contains **T**, denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains two space separated integers: **N** and **Q**, denoting the number of elements in the array and the number of queries respectively.

The second line contains **N** space-separated integers - **A1**, **A2**, ..., **AN** denoting the input array **A**.

The next **Q** lines contain the queries.

The queries are given as "**a b c d**" (without the double quotes) where **a** and **b** are the left and right end point of the first sub-array and **c** and **d** are the left and right end point of the second sub-array. Both end points are included in a sub-array.

### Output

For each query output "YES" or "NO" (without the double quotes) depending on whether the two sub-arrays given in that query are *similar* or not.

### Constraints

**a**, **b**, **c** and **d** for the queries will always be in the range from **1** to **N** where **a** ≤ **b**, **c** ≤ **d**

 and **b** - **a** = **d** - **c****Time limit = 2 seconds**

### Subtasks

**Subtask #1 (10 points):**

- **1** ≤ **T** ≤ **3**
- **1** ≤ **N, Q** ≤ **103**
- **1** ≤ **A\[i\]** ≤ **103**

**Subtask #2 (20 points):**

- **1** ≤ **T** ≤ **3**
- **1** ≤ **N** ≤ **105**
- **1** ≤ **Q** ≤ **104**
- **1** ≤ **A\[i\]** ≤ **105**

**Subtask #3 (70 points):**

- 1 ≤ **T** ≤ 3
- 1 ≤ **N, Q** ≤ 105
- 1 ≤ **A\[i\]** ≤ 105

### Example

<pre><b>Input:</b>
1
6 3
1 3 4 2 3 4
1 3 4 6
1 2 5 6
3 5 2 4

<b>Output:</b>
YES
NO
YES
</pre>
### Explanation

In the first query the first sub-array looks like \[1, 3, 4\] on sorting and the second sub-array looks like \[2, 3, 4\] on sorting. These two sub-arrays only differ at first position so they are *similar*.

In the second query the first sub-array on sorting looks like \[1, 3\] on sorting and the second sub-array looks like \[3, 4\] on sorting. These two sub-arrays differ at both the positions so they are not *similar*.

In the third query the first sub-array look like \[2, 3, 4\] on sorting and the second sub-array also looks like \[2, 3, 4\] on sorting. Since these two sub-arrays don't differ at any position so they are *similar*.
