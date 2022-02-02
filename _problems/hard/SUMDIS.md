---
category_name: hard
problem_code: SUMDIS
problem_name: 'Sum of distances'
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
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: r_64
problem_tester: xcwgf666
date_added: 26-01-2017
tags:
    - divide
    - geometry
    - graph
    - hard
    - march17
    - r_64
editorial_url: 'https://discuss.codechef.com/problems/SUMDIS'
time:
    view_start_date: 1489397400
    submit_start_date: 1489397400
    visible_start_date: 1489397400
    end_date: 1735669800
    current: 1493556860
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MARCH17/mandarin/SUMDIS.pdf?v=1), [Russian](http://www.codechef.com/download/translated/MARCH17/russian/SUMDIS.pdf?v=1) and [Vietnamese](http://www.codechef.com/download/translated/MARCH17/vietnamese/SUMDIS.pdf?v=1) as well.

 There is a **directed** acyclic graph with **N** vertices. The vertices are numbered from **1** to **N**.

 For every **1 ≤ i ≤ N-1**, there is an edge from vertex **i** to vertex **i+1**, which has weight **ai**.

 For every **1 ≤ i ≤ N-2**, there is an edge from vertex **i** to vertex **i+2**, which has weight **bi**.

 For every **1 ≤ i ≤ N-3**, there is an edge from vertex **i** to vertex **i+3**, which has weight **ci**.

 There are no other edges.

 For each pair of vertices **s**, **t** where **s &lt; t**, let **d(s, t)** denote the length of the shortest path from **s** to **t**. Your task is to compute the sum of **d(s, t)** for every **1 ≤ s &lt; t ≤ N.**

###  Input

 First line of the input contains an integer **T** denoting number of test cases. **T** test cases follow.

 For each test case:

 The first line contains an integer **N**.

 The second line contains **N - 1** integers **a1**, **a2**, ..., **aN-1**.

 The third line contains **N - 2** integers **b1**, **b2**, ..., **bN-2**.

 The fourth line contains **N - 3** integers **c1**, **c2**, ..., **cN-3**.



###  Output

 For each test case, output a single line containing an integer, denoting the answer. It can be proved that the answer fits in the signed 64-bit type.

###  Constraints

- **1 ≤ T ≤ 104**
- **4 **≤** N ≤ 105**
- **1** ≤ sum of **N** over all test cases ≤ **3\*105**
- **1** ≤ **ai**,** bi**,** ci ≤ 104**

###  Subtasks

 Subtask #1 (8 points):

- **N ≤ 103**.
- **1** ≤ sum of **N** over all test cases ≤ **104**.

 Subtask #2: (13 points):

- **bi = ai + ai+1**.
- **ci = ai + ai+1 + ai+2**.

 Subtask #3: (46 points):

- **ci = ai + ai+1 + ai+2**.

 Subtsak #4: (33 points):

- Original constraints.

###  Example

<pre>
<b>Input:</b>
<tt>2
4
1 1 1
1 1
1
5
1 2 3 4
2 3 4
3 4</tt>

<b>Output:</b>
<tt>6
31</tt>
</pre>
### Explanation

**Example case 1**. In this test case the distance between the node **A** and the node **B** will be equal to one for all pairs **(A, B)**. So for all six pairs we get the distance **1** and the final sum **6**.
