---
category_name: challenge
problem_code: EMBDTREE
problem_name: 'Embedding a Tree (Challenge)'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 28-02-2018
tags:
    - admin2
time:
    view_start_date: 1520847000
    submit_start_date: 1520847000
    visible_start_date: 1520847000
    end_date: 1735669800
    current: 1525454453
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problem statements in [Mandarin chinese](http://www.codechef.com/download/translated/MARCH18/mandarin/EMBDTREE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/MARCH18/vietnamese/EMBDTREE.pdf) as well.

You are given a tree with **N** nodes. You should embed this tree in a 2-D plane such that each node of the tree is located at a point with integer coordinates. Let's denote the coordinates of the **i**-th node by **pi** = (**xi**, **yi**). An edge between nodes **u** and **v** corresponds to a line segment between points **pu** and **pv**.

Formally, the mapping of the nodes to points should satisfy the following property: No two segments in the plane intersect each other. (However, it is allowed for two segments corresponding to edges with a common vertex to touch at the point which is mapped to this common vertex.) For example, assume that **N** = 4 and the tree is a path. Then the line segment connecting points **p1** and **p2** will touch the line segment connecting points **p2** and **p3** only at point **p2**. However, the line segment connecting points **p1** and **p2** shouldn't intersect or touch the line segment connecting points **p3** and **p4**.

Additionally, there is a constraint on the length of each edge. For an edge (**u**, **v**), you are also given an integer **L**. You should ensure that the Euclidean distance between the points **pu** and **pv** is at least **L**.

Your objective is to find an embedding such that the sum of Euclidean distances between points corresponding to each pair of nodes (even if they aren't connected by an edge) is as low as possible.

### Input

- The first line of the input contains a single integer **N**.
- The following **N-1** lines describe edges. The **i**-th of these lines contains three space-separated integers **ui**, **vi** and **Li**, which denote an edge between nodes **ui** and **vi** with length constraint **Li**.

### Output

Print **N** lines. For each valid **i**, the **i**-th of these lines should contain two space-separated integers **xi** and **yi**.

For each node, these coordinates should be integers satisfying -109 ≤ **xi**, **yi** ≤ 109. Additionally, no two nodes should be mapped to the same point.

### Example

<pre>
<b>Input</b>

5
1 2 3
2 3 4
2 4 6
3 5 5

<b>Output</b>

0 0
4 0
4 5
10 -10
10 10
</pre>
### Explanation

![](https://discuss.codechef.com/upfiles/embtree.png)

### Score

Your score will be the sum of pairwise Euclidean distances between the points corresponding to nodes.

For the above example, the score you obtain would be 110.976947161586110724.

### Test Generation Process

There are four types of tests and three test cases for each type. During the contest, the displayed score will account for only one test case of each type, i.e. your program score is reflective of 33.333% (1/3) of the test files. However, if your program gets a non-AC verdict on any of the test files, your verdict will be non-AC. In other words, an AC verdict denotes that your program runs successfully on all the test files. After the end of the contest, your score will be changed to reflect the score over all of the test files.

In each test case:

- **N** = 1000
- for each edge, the parameter **L** is generated uniformly randomly between 1 and 5000
- 1 ≤ **u**, **v** ≤ **N**
 
For the paragraph below, assume the function rnd.next(**l**, **r**) generates a random number uniformly in the range **l** through **r** (both inclusive).

#### Type 1:

<pre>
K = 10;
for i = 2 to N:
	if i 

<h4>Type 2:</h4>

K = 10
for i = 2 to N:
	parent[i] = rnd.next(1, min(i - 1, K))


<h4>Type 3:</h4>

K = int(N / 3) = 333
for i = 2 to N:
	if i >= K and i 

<h4>Type 4</h4>

Fix K = 25.

Create K trees with N / K nodes each.

for i = 2 to K:
	join the i-th tree with rnd.next(1, i - 1)-th tree.
<p>These two trees are joined by adding an edge between a randomly selected nodes from each tree.</p>

<p>Note that in all 4 types of tests, after running the above methods, the nodes are mapped to a random permutation of numbers {1, 2, ..., <b>N</b>}, which serve as new labels for the nodes; these labels are what is given as input. Therefore, the above mentioned methods won't generate the exact input trees, but the trees generated by them will be isomorphic to the actual input trees (so only the labels in the trees can change). Apart from this, the generation process is exactly as described above.</p>
</pre>