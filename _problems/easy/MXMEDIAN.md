---
category_name: easy
problem_code: MXMEDIAN
problem_name: 'Median of adjacent maximum numbers'
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
problem_author: admin2
problem_tester: null
date_added: 5-05-2017
tags:
    - admin2
    - long
    - may17
editorial_url: 'https://discuss.codechef.com/problems/MXMEDIAN'
time:
    view_start_date: 1495099800
    submit_start_date: 1495099800
    visible_start_date: 1495099800
    end_date: 1735669800
    current: 1497284096
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/MAY17/mandarin/MXMEDIAN.pdf), [russian](http://www.codechef.com/download/translated/MAY17/russian/MXMEDIAN.pdf) and [vietnamese](http://www.codechef.com/download/translated/MAY17/vietnamese/MXMEDIAN.pdf) as well.

You are given an array **A** of size **2 \* N** consisting of positive integers, where **N** is an odd number. You can construct an array B from **A** as follows, B\[i\] = max(**A**\[2 \* i - 1\], **A**\[2 \* i\]), i.e. B array contains the maximum of adjacent pairs of array **A**. Assume that we use 1-based indexing throughout the problem.

You want to maximize the [median](https://en.wikipedia.org/wiki/Median) of the array B. For achieving that, you are allowed to permute the entries of **A**. Find out the maximum median of corresponding B array that you can get. Also, find out any permutation for which this maximum is achieved.

### Note

Median of an array of size n, where n is odd, is the middle element of the array when it is sorted in non-decreasing order. Note that n being odd, the middle element will be unique, i.e. at index (n+1) / 2.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains an integer **N**.

The second line of each test case contains **2 \* N** space separated integers denoting array **A**.

### Output

For each test case, output two lines.

The first of which should contain an integer corresponding to maximum value of the median of array B that you can get.

In the second line, print **2 \* N** integers in a single line denoting any permutation of **A** for which the maximum value of median of array B is achieved.

### Constraints

- 1 ≤ **T** ≤ 10
- 1 ≤ **N** ≤ 50000
- 1 ≤ **A**i ≤ 2 \* N

### Subtasks

- **Subtask #1** (25 points) : 1 ≤ N ≤ 3
- **Subtask #2** (75 points) : original constraints

### Example

<pre><b>Input:</b>
3
1
1 2
3
1 2 3 4 5 6
3
1 3 3 3 2 2

<b>Output:</b>
2
1 2
5
1 3 2 5 4 6
3
1 3 3 3 2 2

</pre>### Explanation
**Example case 1.** There are only two possible permutations of **A**, for both of those B will be 2. The median of B is 2.

**Example case 2.** For following permutation of A: 1 3 2 5 4 6, the corresponding B will be: 3 5 6, whose median is 5, which is the maximum that you can achieve.

**Example case 3.** For A: 1 3 3 3 2 2, the corresponding B will be: 3, 3, 2. Its median is 3, which is maximum that you can achieve.
