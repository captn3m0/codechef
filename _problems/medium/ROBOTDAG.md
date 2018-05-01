---
category_name: medium
problem_code: ROBOTDAG
problem_name: 'Robots in a DAG'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: admin3
problem_tester: null
date_added: 2-06-2017
tags:
    - admin3
time:
    view_start_date: 1496516400
    submit_start_date: 1496516400
    visible_start_date: 1496516400
    end_date: 1735669800
    current: 1497284439
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKEL17/mandarin/ROBOTDAG.pdf), [Russian](http://www.codechef.com/download/translated/SNCKEL17/russian/ROBOTDAG.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKEL17/vietnamese/ROBOTDAG.pdf) as well.

The annual Robotics Fest has started, and you have registered for an event in it, for which you have to build **K** robots and make them traverse a maze. The maze is in the form of a directed acyclic graph (DAG). That is, you can think that there is a graph with **N** vertices and **M** edges. Let the nodes be numbered from 1 to **N**. The edges are **E1, E2**, ..., **EM**, where **Ei** = (**ui, vi**), denoting that a robot can travel from **ui** to **vi**.The robots start from node 1 and have to reach node **N**. The graph's edges do not form any directed cycles, and there are no self-loops or multiple edges.

All the **K** robots travel at the speed of 1 edge per second, and all of them start at the same time. Once a robot reaches node **N**, it is taken out of the maze. But till then, a robot has to keep moving. That is, a robot cannot wait at any node. And since the maze's paths are narrow, at most one robot can traverse that edge in any given second.

Formally, we can represent the i-th robot's trip using a series of edges: **Ei1, Ei2, .., Eix**, where **Ei1** is an edge which goes out of node 1 and **Eix** is an edge which goes into node **N**. For any i, j such that i ≠ j, there should not be a t, such that **Eit = Ejt**.

The aim of the contest is to program your robots in such a manner that they travel obeying these constraints, and minimizing the maximum distance traveled by your robots. That is, consider the number of edges traveled by a robot, and take the maximum of this among all your **K** robots. This value should be minimized. Output this minimum value. And if it is not possible to program the robots according to the conditions, output -1 instead.

### Input

- The first line contains a single integer, **T**, denoting the number of testcases. The description of each testcase follows.
- The first line of each testcase contains three integers: **N, M** and **K**, denoting the number of nodes, number of edges, and the number of robots respectively.
- The i-th of the next **M** lines contains two integers, **ui** and **vi**, denoting that there is an edge from **ui** to **vi**.

### Output

- For each testcase, output a single line containing a single integer which should be the minimum maximum distance traveled by the robots, or -1, if it is not possible to send all the **K** robots.

### Constraints

- 1 ≤ **T** ≤ 5
- 2 ≤ **N** ≤ 100
- 1 ≤ **M, K** ≤ 1000
- 1 ≤ **ui, vi** ≤ **N**

### Example

<pre><b>Input:</b>
3
8 11 1
1 2
1 3
1 4
6 7
2 5
3 6
3 2
4 6
5 7
7 8
2 7
8 11 2
1 2
1 3
1 4
6 7
2 5
3 6
3 2
4 6
5 7
7 8
2 7
8 11 3
1 2
1 3
1 4
6 7
2 5
3 6
3 2
4 6
5 7
7 8
2 7

<b>Output:</b>
3
4
5
</pre>### Explanation

The graphs in all the three testcases are the same. Only the number of robots change.

**Test Case 1:** There is only one robot, and it can take this sequence of edges: (1, 2), (2, 7), (7, 8). The maximum distance traveled among all the robot(s) is 3, and hence the answer is 3. This cannot be lowered.

**Test Case 2:** There are two robots, and one optimal solution is to make the first robot take this path: (1, 2), (2, 7), (7, 8) and make the second robot take this path: (1, 3), (3, 6), (6, 7), (7, 8). Note that the edge (7, 8) was traversed by both robots, but one did it at the third second, and the other at the fourth second, and hence it is allowed. The distances traveled by the robots are 3 and 4, and the maximum among that is 4. This cannot be lowered, and hence the answer is 4.

**Test Case 3:** There are three robots, and one optimal solution is to make the first robot take this path: (1, 2), (2, 7), (7, 8), make the second robot take this path: (1, 4), (4, 6), (6, 7), (7, 8) and make the third robot take this path: (1, 3), (3, 2), (2, 5), (5, 7), (7, 8). Note that the edge (7, 8) was traversed by all three robots, but one did it at the third second, one did it at the fourth second, and the other at the fifth second, and hence it is allowed. The distances traveled by the robots are 3, 4, and 5, and the maximum among them is 5. This cannot be lowered, and hence the answer is 5.
