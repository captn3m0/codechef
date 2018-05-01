---
category_name: hard
problem_code: MXPATH
problem_name: 'Maximum Tree Path'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: chemthan
problem_tester: null
date_added: 19-02-2018
tags:
    - chemthan
    - cook92
    - datastructure
    - medium
    - tree
editorial_url: 'https://discuss.codechef.com/problems/MXPATH'
time:
    view_start_date: 1521397800
    submit_start_date: 1521397800
    visible_start_date: 1521397800
    end_date: 1735669800
    current: 1525198968
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK92/mandarin/MXPATH.pdf), [Russian](http://www.codechef.com/download/translated/COOK92/russian/MXPATH.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK92/vietnamese/MXPATH.pdf) as well.

You're given a tree with **N** vertices. There is a positive integer written in each vertex; let's denote the integer written in vertex **i** by **Ai**.

Consider a simple path between vertices **u** and **v**. Let's define **dist**(**u**, **v**) as the length of the path, **gcd**(**u**, **v**) as the greatest common divisor of all numbers written in vertices that lie on the path (including **u** and **v**) and **min**(**u**, **v**) as the minimum of numbers written in vertices on the path (including **u** and **v**).

Compute the maximum of the expression **dist**(**u**, **v**) · **gcd**(**u**, **v**) · **min**(**u**, **v**) over all pairs of vertices (**u**, **v**).

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains a single integer **N** denoting the number of vertices of the tree.
- The second line contains **N** space-separated integers **A1, A2, ..., AN**.
- Each of the following **N-1** lines contains three space-separated integers **u**, **v** and **w** denoting an edge with length **w** between vertices **u** and **v**.

### Output

For each testcase, print a single line containing one integer — the answer to the problem.

### Constraints

- 1 ≤ **T** ≤ 100
- 2 ≤ **N** ≤ 105
- 2 ≤ sum of **N** over all test cases ≤ 105
- 1 ≤ **Ai** ≤ 104 for each valid **i**
- 1 ≤ **u**, **v** ≤ **N**
- 1 ≤ **w** ≤ 105

### Example

<pre><b>Input:</b>
1
4
1 2 3 4
1 2 1
1 3 2
3 4 3

<b>Output:</b>
9
</pre>