---
category_name: medium
problem_code: KINT
problem_name: 'How to Choose a Subset'
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
problem_author: witua
problem_tester: iscsi
date_added: 3-03-2015
tags:
    - cook56
    - dynamic
    - medium
    - witua
editorial_url: 'http://discuss.codechef.com/problems/KINT'
time:
    view_start_date: 1427049000
    submit_start_date: 1427049000
    visible_start_date: 1427049000
    end_date: 1735669800
    current: 1493557919
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK56/mandarin/KINT.pdf) and [Russian](http://www.codechef.com/download/translated/COOK56/russian/KINT.pdf) as well.

Given a set **S** of first **N** non-negative integers i.e. **S = {0, 1, 2, ..., N}**. Find number of ways of choosing a **K** size subset of **S** with the property that the XOR-sum of all chosen integers has exactly **B** set bits in its binary representation (i.e. the bits that are equal to **1**). Since the answer can be large, output it modulo **(109 + 7)**. Please refer to notes section for formal definition of XOR-sum.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The only line of each test case contains three space-separated integers **N**, **K** and **B**.

### Output

For each test case, output a single line containing the answer to the corresponding test case.

### Constraints

- **1** ≤ **T** ≤ **5**
- **1** ≤ **N** ≤ **109**
- **1** ≤ **K** ≤ **7**
- ≤ **B** ≤ **30**

### Example

<pre><b>Input:</b>
3
2 2 0
2 2 1
2 2 2

<b>Output:</b>
0
2
1

</pre>### Notes
XOR-sum of **n** integers **A\[1\], , , A\[n\]** will be **A\[1\] xor A\[2\] xor .. A\[n\]**. By xor, we mean [bit-wise xor](http://en.wikipedia.org/wiki/Bitwise_operation#XOR).

### Explanation

**Example case 1.** There is no way to choose a subset of **2** integers from **{0, 1, 2}** such that the XOR-sum contains  set bits.

**Example case 2.** The two possible subsets in this case are **{0, 1}** and **{0, 2}**. In both cases the XOR-sum (**1** and **2** respectively) contains exactly one set bit.

**Example case 3.** The only possible subset is **{1, 2}**.
