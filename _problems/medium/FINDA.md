---
category_name: medium
problem_code: FINDA
problem_name: 'Finding the matrix'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: sidhant007
problem_tester: kingofnumbers
date_added: 16-01-2018
tags:
    - bipartite
    - constructive
    - cook90
    - maths
    - medium
    - sidhant007
editorial_url: 'https://discuss.codechef.com/problems/FINDA'
time:
    view_start_date: 1516559400
    submit_start_date: 1516559400
    visible_start_date: 1516559400
    end_date: 1735669800
    current: 1525198954
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK90/mandarin/FINDA.pdf), [Russian](http://www.codechef.com/download/translated/COOK90/russian/FINDA.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK90/vietnamese/FINDA.pdf) as well.

You are given a matrix **B** with size **N × N**. Each element of this matrix is an integer from the set **{-1, 0, 1}**.

Determine if it's possible to express **B** as **A · AT**, where **A** is a matrix of integers with size **N × N**. (Here, **AT** is the transpose of **A**; see below for its definition.) If it is possible, find the lexicographically smallest **A** such that **B** = **A · AT**.

The *transpose* of a matrix is created by flipping that matrix around its main diagonal — formally, the element at row **i** and column **j** of matrix **AT** is the same as the element at row **j** and column **i** of matrix **A**, for each valid **i**, **j**. For more details, see [Wikipedia](https://en.wikipedia.org/wiki/Transpose).

For two matrices **C** and **D** with size **N × N**, we will say that **C** is lexicographically smaller than **D** if the sequence **c** = **C1,1, C1,2, ..., C1,N, C2,1, C2,2, ..., C2,N, ..., CN,1, ..., CN,N** is lexicographically smaller than **d** = **D1,1, D1,2, ..., D1,N, D2,1, D2,2, ..., D2,N, ..., DN,1, ..., DN,N**. That is, there must be a valid index **i** such that **ci** and **di** differ, and the smallest such index must satisfy **ci** < **di**.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains a single integer **N**.
- The next **N** lines describe matrix **B**. Each of these lines contains **N** space-separated integers. The **j**-th integer on the **i**-th line denotes **Bi,j**, the element at row **i** and column **j** of **B**.

### Output

For each test case: - If no valid matrix **A** exists, print a single line containing the integer -1.
- Otherwise, print **N** lines; each of them should contain **N** space-separated integers.
- The **j**-th integer on the **i**-th line should denote the element at row **i** and column **j** of matrix **A**.

### Constraints

- 1 ≤ **T** ≤ 10
- 2 ≤ **N** ≤ 1000
- -1 ≤ **Bi,j** ≤ 1 for each valid **i**, **j**
- sum of **N** for all test cases ≤ 1000

### Example

<pre><b>Input:</b>
1
2
1 -1
-1 1

<b>Output:</b>
-1 0
1 0
</pre>
### Explanation

**Example case 1:** You can check by brute force that this is the lexicographically smallest possible valid matrix **A**.
