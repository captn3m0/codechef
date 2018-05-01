---
category_name: hard
problem_code: CHEFKC
problem_name: 'Chef and Cut'
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
max_timelimit: '7.7'
source_sizelimit: '50000'
problem_author: mgch
problem_tester: dpraveen
date_added: 12-08-2016
tags:
    - hard
    - mgch
    - mincut
    - sept16
time:
    view_start_date: 1473931800
    submit_start_date: 1473931800
    visible_start_date: 1473931800
    end_date: 1735669800
    current: 1493556633
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SEPT16/mandarin/CHEFKC.pdf), [Russian](http://www.codechef.com/download/translated/SEPT16/russian/CHEFKC.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SEPT16/vietnamese/CHEFKC.pdf) as well.

Chef likes Graphs Theory a lot. Recently he learned about [minimum cut](https://en.wikipedia.org/wiki/Minimum_cut). During his assignments, he found a problem which he couldn't solve. Can you please help him in solving the problem?

You are given an oriented weighted graph **G** with two chosen nodes **s** and **t**. Let's order all distinct cuts between **s** and **t** cuts between **s** and **t** by weight. You have to find the weight of **k**-th minimum cut. Two cuts (U1, V1) and (U2, V2) are said to be distinct if the U1 != U2 or V1 != V2. In total, there will be total 2^(n-2) such cuts.

### Input

There is a single test case.

First line of the input contains three positive integers - **N** (number nodes of the graph) and **M** (number of edges) and **k**

Second line of the input contains two integers - **s** and **t**

Next **M** lines contain information about edges

First two integers of each of the next **M** lines denoting nodes connected by edge, third integer denoting weight of this edge **c**.

### Output

Output a single integer in a line - weight of **k**-th minimum cut of graph **G**

### Constraints

- **2** ≤ **N** ≤ **77**
- **2** ≤ **M** ≤ **777**
- **2** ≤ **k** ≤ **777**
- **1** ≤ **s**, **t** ≤ **N**
- **1** ≤ **c** ≤ **106**
- It is guaranteed that **K** won't exceed number of distinct cuts, i.e. **1 ≤ K ≤ 2(n-2)**

### Subtasks

- **Subtask 1:**  **N ≤ 10.**  **Points - 20**
- **Subtask 2:** Original constraints. **Points - 80**

### Example

<pre><b>Input:</b>
4 8 2
1 4
1 2 4
1 4 1
2 3 4
2 4 7
3 2 10
3 4 1
4 1 7
4 3 2

<b>Output:</b>
9

</pre><pre><b>Input:</b>
5 19 6
1 5
1 2 1
1 3 4
1 4 9
1 5 8
2 1 7
2 3 2
2 4 5
2 5 1
3 2 4
3 4 1
3 5 5
4 1 4
4 2 5
4 3 1
4 5 7
5 1 8
5 2 7
5 3 2
5 4 6

<b>Output:</b>
29


</pre>