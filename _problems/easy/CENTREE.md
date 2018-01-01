---
category_name: easy
problem_code: CENTREE
problem_name: Centeroid
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
problem_author: alei
problem_tester: deadwing97
date_added: 30-05-2017
tags:
    - ad
    - alei
    - constructive
    - cook83
    - graph
    - tree
editorial_url: 'https://discuss.codechef.com/problems/CENTREE'
time:
    view_start_date: 1497812400
    submit_start_date: 1497812400
    visible_start_date: 1497812400
    end_date: 1735669800
    current: 1514817221
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/COOK83/mandarin/CENTREE.pdf), [russian](http://www.codechef.com/download/translated/COOK83/russian/CENTREE.pdf) and [vietnamese](http://www.codechef.com/download/translated/COOK83/vietnamese/CENTREE.pdf) as well.

Chef Ada loves trees, she thinks that the beauty of a tree is determined by the distance between its center and centroid. If the tree has multiple centers or centroids, then the beauty is the maximum among every possible pair.

As a reward for her delicious dishes (and awesome coding skills), CodeChef is going to give a present to Chef Ada, and of course it must be a tree! But not any tree, we want to give her one with **n** nodes, and beauty **b**. Help find such a tree.

### Input

The first line of input contains one number **T**, the number of test cases.

Each test case contains two integers **n** and **b**, the desired number of vertices and beauty.

### Output

For each test case, if no tree satisfies the conditions print "NO" in a new line.

Otherwise, print "YES" in a new line and describe any valid tree. Print **n-1** more lines, each with two integers **ui**, **vi** (1 ≤ **ui**, **vi** ≤ **n**) denoting the indices of the vertices connected by an edge in the tree.

### Constraints

12. 1 ≤ **T** ≤ 104
13. 2 ≤ **n** ≤ 100
14. 0 ≤ **b** ≤ n-1
### Notes

A vertex **u** is a centroid if after removing **u** from the tree, the size of any of the resulting connected components is at most **n/2**.

Lef **f(x)** be the greatest distance from **u** to any other vertex of the tree. A vertex **u** is a center if **f(u) ≤ f(v)**  for any other vertex **v**.

### Example

<pre>
<b>Input:</b>
1
4 0

<b>Output:</b>
YES
1 2
1 3
1 4

</pre>### Explanation
Vertex 1 is the center and centroid of the tree.
