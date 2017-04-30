---
category_name: easy
problem_code: DEVLDISC
problem_name: 'Devu and a light discussion'
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
problem_author: admin2
problem_tester: iscsi
date_added: 3-03-2015
tags:
    - ad
    - admin2
    - feb16
    - graph
    - simple
editorial_url: 'http://discuss.codechef.com/problems/DEVLDISC'
time:
    view_start_date: 1455528600
    submit_start_date: 1455528600
    visible_start_date: 1455528600
    end_date: 1735669800
    current: 1493558135
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/FEB16/mandarin/DEVLDISC.pdf), [Russian](http://www.codechef.com/download/translated/FEB16/russian/DEVLDISC.pdf) and [Vietnamese](http://www.codechef.com/download/translated/FEB16/vietnamese/DEVLDISC.pdf) as well.

One day, Devu and Churu were involved in a light discussion about finding the diameter of an undirected unweighted connected graph. Diameter of a graph is the maximum value of pairwise shortest distances over all pairs of vertices of the graph. Churu proposed the following algorithm which takes a parameter **start\_vertex**.

```
<tt>
Algorithm (<b>start_vertex</b>):
	find out the set of vertices <b>S</b> having maximum value of 
		shortest distance from <b>start_vertex</b>.
	ans = 0;
	for each vertex v in <b>S</b>
		temp = 0;
		for each vertex u in graph G:
			temp = max(temp, shortest distance between u and v).
		ans = max(ans, temp);
	return ans;
</tt>
```
When Devu heard this algorithm, he exclaimed: "What, this does not seem to be correct!". Churu challenged him to give a counter example to disprove the algorithm. You have to help Devu come up with a graph as a counter example to the above algorithm, if one exists.

Formally, You will be given an integer **n** denoting the number of nodes of the expected graph (counter example Devu is producing). The graph should be undirected, unweighted and connected. The actual diameter of the graph should not be equal to the one returned by the Churu's proposed algorithm. If for the given **n**, there does not exist any such graph which could act as counter example, print -1.

### Input

- The first line of input contains a single integer **T** denoting number of test cases. Description of **T** test cases follows.
- Only line of each test case contains a single integer **n** as defined in the problem statement.

### Output

- For each test case, first line should contain the number of edges in the counter-example graph, or -1 if no counter-example exists.
If a counter example exists, then: - Print a single line containing an integer **m** denoting the number of edges in the desired graph
- Print **m** lines, each line should contain two integers **u** and **v** (1-based indexing) denoting an edge of the graph. You should make sure that no two edges in the graph repeat, and that the graph is connected.
- In the next line, print a single integer denoting **start\_vertex** (1-based indexing) passed to the algorithm.

### Constraints

- **1 ≤ T, n ≤ 50**

### Subtask

There is only a single subtask worth 100 points with above mentioned constraints. ### Example

```
<b>Input:</b>
2
2
10
<b>Output:</b>
-1
9
1 2
2 3
3 4
4 5
5 6
6 7
7 8
8 9
9 10
7

```
### Explanation

**Example case 1.** There can be only one connected graph of 2 nodes. (i.e. 1 is connected to 2). Diameter returned by algorithm for any start vertex will be 1 which is equal to the actual diameter. So answer is -1.

**Example case 2.** Please note that example given for **n = 10** is **not a correct counter example**. It is only given so as to clarify the input output format. In the example, first line contains **9** denoting the number of edges in the graph. Then **9** edges of the graph are given. The graph is connected. Then the last line specifies the value of **start\_vertex** passed (that is, **7**) to Churu's algorithm.