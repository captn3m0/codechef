---
category_name: easy
problem_code: SAMESNAK
problem_name: 'Same Snake'
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
problem_author: admin3
problem_tester: kingofnumbers
date_added: 19-05-2017
tags:
    - admin3
editorial_url: 'https://discuss.codechef.com/problems/SAMESNAK'
time:
    view_start_date: 1495625400
    submit_start_date: 1495625400
    visible_start_date: 1495625400
    end_date: 1735669800
    current: 1497284103
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKQL17/mandarin/SAMESNAK.pdf), [Russian](http://www.codechef.com/download/translated/SNCKQL17/russian/SAMESNAK.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKQL17/vietnamese/SAMESNAK.pdf) as well.

Consider a 2d-grid. That is, each cell is identified by (i,j). You have received reports of two snake-sightings on this grid. You want to check whether they could be partial sightings of the same snake or not.

Each of the snake sightings correspond to a straight, axis-parallel line segment in the grid, and the starting and ending cells for each are given to you. Now consider a graph, where each cell in the 2d-grid is a vertex. And there is an edge between 2 vertices if and only if the cells corresponding to these two vertices are consecutive cells in at least one of the two snakes. That is, at least in one of the snakes, when you go from one end point to the other end point, these two cells should occur consecutively.

The two sightings/snakes are said to be same, if both these conditions are satisfied:

- The union of the set of cells in the first snake and the set of cells in the second snake, should form a connected component in this graph.
- No vertex should have degree more than 2 in the graph.

In other words, the induced subgraph on the union set must be a path graph.

### Input

- The first line contains a single integer, **T**, which is the number of testcases. The description of each testcase follows.
- The first line of each testcase contains four integers: **X11, Y11, X12, Y12**. This represents the fact that the first snake's end points are (**X11, Y11**) and (**X12, Y12**).
- The second line of each testcase contains four integers: **X21, Y21, X22, Y22**. This represents the fact that the second snake's end points are (**X21, Y21**) and (**X22, Y22**).

### Output

- For each testcase, output "yes" if the snakes are the same, as per the definition given above. Output "no" otherwise.

### Constraints

- 1 ≤ **T** ≤ 105
- -109 ≤ **Xij,Yij** ≤ 109
- The two end points of every snake is guaranteed to be either on the same row or on the same column. Thus, the snake occupies all the cells between these cells, including the end points.

### Example

<pre><b>Input:</b>
4
2 1 8 1
11 1 7 1
2 1 8 1
11 1 9 1
2 1 8 1
3 1 3 -2
2 1 8 1
2 1 2 -2
<b>Output:</b>
yes
no
no
yes

</pre>### Explanation
In the images, the first snake is red, the second snake is yellow, and the intersections, if any, are in orange.

The first test case corresponds to:

![](https://codechef.com/download/SNCKQL17/SAMESNAK/image1.png)Both the conditions on the graph are satisfied, and hence this is a "yes".

The second test case corresponds to:

![](https://codechef.com/download/SNCKQL17/SAMESNAK/image2.png)There is no edge between the vertex corresponding to the (8,1) cell and the vertex corresponding to (9,1), Hence, the union set is disconnected, and thus the answer is "no".

The third test case corresponds to:

![](https://codechef.com/download/SNCKQL17/SAMESNAK/image3.png)The vertex corresponding to the cell (3,1) has degree 3, which is more than 2, and thus the answer is "no".

The fourth test case corresponds to:

![](https://codechef.com/download/SNCKQL17/SAMESNAK/image4.png)Both the conditions on the graph are satisfied, and hence this is a "yes".
