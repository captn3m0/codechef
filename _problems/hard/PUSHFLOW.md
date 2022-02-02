---
category_name: hard
problem_code: PUSHFLOW
problem_name: 'Push the Flow!'
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
problem_author: kostya_by
problem_tester: null
date_added: 27-06-2014
tags:
    - aug14
    - graphs
    - hard
    - heavy
    - kostya_by
    - tree
editorial_url: 'http://discuss.codechef.com/problems/PUSHFLOW'
time:
    view_start_date: 1407749400
    submit_start_date: 1407749400
    visible_start_date: 1407749400
    end_date: 1735669800
    current: 1493556981
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/AUG14/mandarin/PUSHFLOW.pdf) and [Russian](http://www.codechef.com/download/translated/AUG14/russian/PUSHFLOW.pdf).

You are given a connected undirected graph **G**, consisting of **N** vertices and **M** edges. The vertices of **G** are indexed with integers 1, 2, 3, ..., **N**, the edges of **G** are indexed with integers 1, 2, 3, ..., **M**. Each edge of **G** has *a capacity* - a positive integer parameter. Each pair of the vertices is connected by at most one edge. No edge connects a vertex with itself.

Let's call a sequence of vertices **A** = **A1**, **A2**, ..., **AK**(**K** &gt; 2) *a simple cycle*, if:

- There's an edge between vertices **Ai** and **Ai + 1**, for each 1 ≤ **i** &lt; **K**;
- There's an edge between vertices **A1** and **AK**;
- **Ai** equals to **Aj** if and only if **i** equals to **j**.

It's guaranteed, that each vertex of **G** belongs to at most one simple cycle.

You task is to implement a data structure, which can process the following queries efficiently:

- 0 **S** **T**: find the maximum flow in **G** in case the source is **S** and the sink is **T**;
- 1 **X** **NEW\_CAPACITY**: make the capacity of **X**'th edge equal to **NEW\_CAPACITY**.

You can read about maximum flow problem here: [http://en.wikipedia.org/wiki/Maximum\_flow\_problem](http://en.wikipedia.org/wiki/Maximum_flow_problem)

### Input

The first line of the input contains two integers **N** and **M**, denoting the number of the vertices and the number of the edges.

The next **M** lines contain the information about the edges of **G**, each contains three integers **U**, **V** and **C**, which means that this edge connects vertices **U**-**V** and has a capacity equal to **C**. The information about **i**'th edge is on **(i + 1)**'th line of the input.

The next line contains an integer **Q**, denoting the number of queries to process.

The next **Q** lines contain the queries to process, each contains one query. The format of queries is the same with the one described in the legend.

### Output

Your output should contain exactly **Q0** lines, where **Q0** is the number of the queries of the zeroth type in the input.

For each query of the zeroth type you should to output one integer: the maximum flow in the corresponding graph. You should output the answers for the queries in the order they appear in the input.

### Constraints

- 1 ≤ **N** ≤ 100 000;
- 0 ≤ **M** ≤ 200 000;
- 0 ≤ **Q** ≤ 200 000;
- 1 ≤ **U, V** ≤ **N**, for each edge;
- 1 ≤ **C** ≤ 109, for each edge;
- 1 ≤ **S ≠ T** ≤ **N**, for each query of the zeroth type appeared in the input;
- 1 ≤ **X** ≤ **M**, for each query of the first type appeared in the input;
- 1 ≤ **NEW\_CAPACITY** ≤ 109, for each query of the first type appeared in the input;

### Example

<pre><b>Input:</b>
6 6
1 2 1
4 5 8
4 3 2
6 5 5
1 6 4
2 3 1
6
0 4 5
0 1 3
0 1 2
1 1 5
1 6 5
0 1 2

<b>Output:</b>
9
3
2
7
</pre>