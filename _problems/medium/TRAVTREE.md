---
category_name: medium
problem_code: TRAVTREE
problem_name: 'Travelling in a tree'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: pavel1996
problem_tester: karanaggarwal
date_added: 14-06-2016
tags:
    - heavy
    - lca
    - ltime37
    - med
    - pavel1996
    - subtree
editorial_url: 'http://discuss.codechef.com/problems/TRAVTREE'
time:
    view_start_date: 1466874000
    submit_start_date: 1466874000
    visible_start_date: 1466874000
    end_date: 1735669800
    current: 1493557947
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME37/mandarin/TRAVTREE.pdf), [Russian](http://www.codechef.com/download/translated/LTIME37/russian/TRAVTREE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME37/vietnamese/TRAVTREE.pdf) as well.

Leha likes traveling a lot. In particular he likes discovering new routes in his world which he calls a tree-world.

Leha's world is a connected tree of **N** vertices, so there is a unique path between any pair of vertices **a** and **b**. Every day Leha chooses some new pair of vertices and walks along this route. Sometimes he notices that he has already been in some vertices during his previous walks. So now for each new route that he takes, he is interested in knowing how many previous routes does it intersect? Two routes are considered to be intersecting with each other, if they have at least one common vertex.

### Input

The first line contains one integer **N** denoting the number of vertices in the tree. Vertices are enumerated from **1** to **N**.

The following **N-1** describe the edges of the tree. Each of these lines contains two space separated integers **u, v** denoting that there is an edge between vertex **u** and **v**.

The next line contains an integer **Q** denoting the number of days Leha is traveling. Each of next **Q** lines contains two space separated integers **u, v** denoting the start and finish vertices of the corresponding route.

### Output

For each day output one integer on a separate line - the number of previous routes it intersects with.

### Constraints with Subtasks

- **Subtask #1\[18 points\]**:
    **1** ≤ **N, Q** ≤ **102**
- **Subtask #2\[19 points\]**:
    **1** ≤ **N, Q** ≤ **103**
- **Subtask #3\[21 points\]**:
    **1** ≤ **N, Q** ≤ **5\*104**
- **Subtask #4\[42 points\]**:
    **1** ≤ **N** ≤ **2\*105**, **1** ≤ **Q** ≤ **3\*105**

### Example

<pre><b>Input:</b>
5
1 2
1 3
3 4
3 5
4
4 5
4 2
1 3
1 2

<b>Output:</b>
0
1
2
2
</pre>
### Explanation

**Day 1**. As there is no previous route, the route from **4** to **5** can't intersect with any round. Hence answer is 0.

**Day 2**. Route from **4** to **2** intersects with route 1 (at vertices **3** and **4**), So the answer is **1**.

**Day 3**. Route from **1** to **3**: intersects with both the previous routes. Hence answer is 2.

**Day 4**. Route from **1** to **2**: intersects with route 2 and 3. Hence answer is **2**.
