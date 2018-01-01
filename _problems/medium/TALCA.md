---
category_name: medium
problem_code: TALCA
problem_name: 'Lowest Common Ancestor'
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
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: tuananh93
problem_tester: null
date_added: 3-07-2014
tags:
    - lca
    - ltime14
    - medium
    - tree
    - tuananh93
editorial_url: 'http://discuss.codechef.com/problems/TALCA'
time:
    view_start_date: 1406452500
    submit_start_date: 1406452500
    visible_start_date: 1406452500
    end_date: 1735669800
    current: 1493557942
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese.](http://www.codechef.com/download/translated/LTIME14/mandarin/TALCA.pdf)

In a rooted tree, the [lowest common ancestor](http://en.wikipedia.org/wiki/Lowest_common_ancestor) (or LCA for short) of two vertices **u** and **v** is defined as the lowest vertex that is ancestor of both that two vertices.

Given a tree of **N** vertices, you need to answer the question of the form "**r u v**" which means if the root of the tree is at **r** then what is LCA of **u** and **v**.

### Input

The first line contains a single integer **N**. Each line in the next **N - 1** lines contains a pair of integer **u** and **v** representing a edge between this two vertices.

The next line contains a single integer **Q** which is the number of the queries. Each line in the next **Q** lines contains three integers  **r, u, v** representing a query.

### Output

For each query, write out the answer on a single line.

### Constraints

20 points:

- 1 ≤ **N**, **Q** ≤ 100

40 points:

- 1 ≤ **N**, **Q** ≤ 105
- There is less than 10 unique value of r in all queries

40 points:

- 1 ≤ **N**, **Q** ≤ 2 × 105

### Example

<pre><b>Input:</b>
4
1 2
2 3
1 4
2
1 4 2
2 4 2

<b>Output:</b>
1
2

</pre>### Explanation
- "1 4 2": if 1 is the root, it is parent of both 2 and 4 so LCA of 2 and 4 is 1.
- "2 4 2": the root of the tree is at 2, according to the definition, LCA of any vertex with 2 is 2.
