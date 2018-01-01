---
category_name: medium
problem_code: RRDAG
problem_name: 'Present for Andrii'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: Rubanenko
problem_tester: shiplu
date_added: 10-07-2014
tags:
    - Rubanenko
    - cook48
    - graph
    - medium
editorial_url: 'http://discuss.codechef.com/problems/RRDAG'
time:
    view_start_date: 1405884600
    submit_start_date: 1405884600
    visible_start_date: 1405884600
    end_date: 1735669800
    current: 1493557884
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK48/mandarin2/RRDAG.pdf) and [Russian](http://www.codechef.com/download/translated/COOK48/russian/RRDAG.pdf) as well.

Andrii is a great programmer. He recently managed to enter Ukrainian IOI team. His parents wanted to appreciate him and present him a DAG(Directed Acyclic Graph). His favourite TV show is "Pimp My Ride" so he'd like to customize his graph. He'd like to add as many edges as possible in order to still have a DAG. Please, help Andrii, find the maximum number of edges he can add to his graph without obtaining any cycle.

### Input

The first line of an input contains single integer **N** — the number of vertices in the graph. Vertices are numerated from **1** to **N**. Next **N** lines contain **N** characters each — adjacency matrix of the graph. If there is '1' in **jth** character of the **ith** line then there is an edge from vertex **i** to vertex **j** in Andrii's graph. It's guaranteed that given graph does not contain cycles.

### Output

Output the maximal number of edges one can add to the graph in the first line. Then output the edges themselves. Edges should be written in separate lines, one by one. Edge is defined by a pair of integers **a** and **b** which means that edge from **a** to **b** should be added. 
The author is pretty lazy and he does not want to write checking program. So, if there are multiple solutions which lead to maximal number of edges that can be added, then you should output lexicographically smallest sequence of edges. A sequence of edges is smaller than another if the first edge that they differ in is lexicographically smaller. Edges are compared as pairs of integers, i.e. as sequence of two integers.

### Constraints

- **1** ≤ **N** ≤ **1500**

### Example

<pre><b>Input:</b>
3
010
000
000

<b>Output:</b>
2
1 3
2 3

</pre>