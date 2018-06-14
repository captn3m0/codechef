---
category_name: medium
problem_code: BLREDSET
problem_name: 'Black and Red vertices of Tree'
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
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 21-11-2017
tags:
    - acm17chn
    - admin2
    - chn17rol
    - dynamic
    - medium
    - tree
editorial_url: 'https://discuss.codechef.com/problems/BLREDSET'
time:
    view_start_date: 1515357000
    submit_start_date: 1515357000
    visible_start_date: 1515357000
    end_date: 1735669800
    current: 1525454465
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.You are given a tree **T** with **N** vertices. The vertices are numbered from 1 to **N**. Some of the vertices are colored black and some are colored red. Also, some vertices can be uncolored. There is at least one black and at least one red vertex.

Compute the number of subsets of vertices **W** such that:

- Each vertex in **W** is uncolored.
- **W** is a connected subgraph of **T**.
- If you remove all the vertices of set **W**, there will be at least one pair of vertices (**u**, **v**) such that: 
  - **u** is colored black and **v** red.
  - There is no path from node **u** to node **v**.

Output your answer **modulo 109 + 7**.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains a single integer **N** denoting the number of vertices.
- Each of the next **N - 1** lines contains two space-separated integers **u** and **v** denoting an edge between vertices **u** and **v**.
- The next line contains **N** space-separated integers denoting the colors of the vertices. The **i**-th of these integers is 0 if vertex **i** is uncolored, 1 if it's black or 2 if it's red.

### Output

For each test case, print a single line containing one integer denoting the number of ways to select a valid subset **W**, modulo 109 + 7.

### Constraints

- 1 ≤ **T** ≤ 2 · 105
- 2 ≤ **N** ≤ 105
- 1 ≤ **u**, **v** ≤ **N**
- Sum of **N** over all test cases doesn't exceed 106

### Example

<pre>
<b>Input</b>
2
6
1 2
1 3
1 4
3 5
3 6
0 1 0 1 2 0
6
1 2
1 3
1 4
3 5
3 6
1 0 0 0 2 0

<b>Output</b>
5
2
</pre>### Explanation

**Example case 1:** The possible subsets **W** are **{1}, {3}, {1, 3}, {3, 6}** and **{1, 3, 6}**.

**Example case 2:** The possible subsets **W** are **{3}** and **{3, 6}**.
