---
category_name: hard
problem_code: MATRIXUM
problem_name: 'Matrix Sum'
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
    - 'CPP 6.3'
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
    - 'PYTH 3.5'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: alex_2oo8
problem_tester: null
date_added: 20-06-2017
tags:
    - alex_2oo8
time:
    view_start_date: 1498908900
    submit_start_date: 1498908900
    visible_start_date: 1498908900
    end_date: 1735669800
    current: 1514816604
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKFL17/mandarin/MATRIXUM.pdf), [Russian](http://www.codechef.com/download/translated/SNCKFL17/russian/MATRIXUM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKFL17/vietnamese/MATRIXUM.pdf) as well.

We call an **N** × **M** matrix *nice*, if it satisfies both these conditions:

- Each of its elements is either a 0 or a 1.
- We define two cells of the matrix to be *adjacent*, if they share a side. All the cells containing a 1 should form a single connected component. More formally: You should be able to reach any cell containing a 1 from any other cell containing a 1 through a sequence of steps, where a single step consists of moving from one cell containing a 1, to an adjacent cell containing a 1.

You are given an **N** × **M** matrix **A**, and each of its elements is either a 0 or a 1. You want to decompose **A** into some *terms*, where each term is a sign ( + or - ) followed by a nice matrix. In other words, you want to write **A** as the addition and subtraction of some nice matrices.

For example, you could write **A** = + B1 + B2 - B3 + B4 - B5, where each Bi is a nice matrix. Note that even though every single Bi and their total sum (which equals **A**) has only elements 0 and 1, some prefix sum could have other elements. For example, the matrix corresponding to + B1 + B2 - B3 could have elements which are neither 0 nor 1.

Find the smallest number of nice matrices needed to decompose **A** in the manner described above and output them. If there are multiple ways to do this, you can output any one optimal decomposition.

### Input

The first line of the input contains an integer **T** denoting the number of test cases.

The first line of every test case contains two integers, **N** and **M**, which denote the number of rows and number of columns respectively.

The i-th of the following **N** lines contains a string of length **M** and consisting only of characters '0' and '1', which denotes the i-th row of the matrix **A**.

### Output

For each test case, first output a line with a single integer **k**, which denotes the smallest number of nice matrices needed to decompose **A**.

This should be followed by **k** \* (**N** + 1) lines, which correspond to the **k** terms.

Each term should have **N** + 1 lines. The first line of each term should contain either a '+' or a '-', which denotes whether the following nice matrix is to be added or subtracted. The following **N** lines should denote the **N** rows of the nice matrix, with each line containing a string of length **M**.

### Constraints

- 1 ≤ **T** ≤ 103
- 1 ≤ **N, M** ≤ 20
- There will be at most 100 test cases where **N** > 10 or **M** > 10.
- The matrix **A** is guaranteed to have at least one non-zero element.

### Example

<pre><b>Input:</b>
1
3 4
1010
0101
1010

<b>Output:</b>
3
-
0000
0010
0000
+
1010
1111
1010
-
0000
1000
0000
</pre>