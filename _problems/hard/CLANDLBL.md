---
category_name: hard
problem_code: CLANDLBL
problem_name: 'Chef And Land Labeling'
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
problem_author: 'kamranmaharov '
problem_tester: r_64
date_added: 6-12-2017
tags:
    - feb18
    - isomorphism
    - kamranmaharov
    - medium
    - number
editorial_url: 'https://discuss.codechef.com/problems/CLANDLBL'
time:
    view_start_date: 1518427800
    submit_start_date: 1518427800
    visible_start_date: 1518427800
    end_date: 1735669800
    current: 1525198963
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/FEB18/mandarin/CLANDLBL.pdf), [Russian](http://www.codechef.com/download/translated/FEB18/russian/CLANDLBL.pdf) and [Vietnamese](http://www.codechef.com/download/translated/FEB18/vietnamese/CLANDLBL.pdf) as well.

ChefsLand can be viewed as a graph consisting of **N** cities and bidirectional roads. Each pair of cities is directly connected by a road. Recently, Chef came up with following game to make the Number Theory course more interesting for students in country schools.

At the beginning of each lesson, Chef draws ChefsLand as a graph with **N** vertices corresponding to cities and **N(N-1)/2** edges corresponding to roads between them. Then he labels the cities; each city is given a distinct label between 1 and **N** (inclusive). Next, he labels each edge — the label of the edge between vertices **u** and **v** is the common divisor count of **lblu** and **lblv** (the number of positive integers which divide both **lblu** and **lblv**), where **lblu** and **lblv** denote the labels of vertices **u** and **v** respectively.

Now, Chef erases the vertex labels, retaining only edge labels in the graph. You, as the number theory student, should find some assignment of labels to vertices which produces a graph with the given edge labels.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains a single integer **N** denoting the number of vertices in the graph.
- The following **N** lines describe the labels of edges. For each valid **i**, the **i**-th of these lines contains **N** space-separated integers **Mi1, Mi2, ..., MiN**; for each valid **j** ≠ **i**, **Mij** represents the label of the edge connecting vertices **i** and **j**.

### Output

For each test case, print **N** lines. For each valid **i**, the **i**-th of these lines should contain a single integer — the label of the **i**-th vertex.

If there are multiple solutions, you may output any one.

### Constraints

- 1 ≤ **N** ≤ 1000
- for each valid **i**, **Mii** = 0
- it's guaranteed that for the given edge labels, at least one possible assignment of labels to vertices exists

### Subtasks

**Subtask #1 (15 points):** sum of **N** for all test cases ≤ 10

**Subtask #2 (85 points):** sum of **N** for all test cases ≤ 1000

### Example

<pre><b>Input:</b>

1
4
0 1 1 1
1 0 1 1
1 1 0 2
1 1 2 0

<b>Output:</b>

3
1
2
4
</pre>