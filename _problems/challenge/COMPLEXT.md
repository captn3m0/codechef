---
category_name: challenge
problem_code: COMPLEXT
problem_name: 'Complex Spanning Tree'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - SCALA
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
    - PERL6
    - TEXT
    - CLOJ
    - FS
max_timelimit: '0.816087'
source_sizelimit: '50000'
problem_author: gamabunta
problem_tester: ' Shilp Gupta.'
date_added: 1-08-2011
tags:
    - gamabunta
time:
    view_start_date: 1313141594
    submit_start_date: 1313141594
    visible_start_date: 1313141594
    end_date: 1735669800
    current: 1525199659
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Our Chef was in intellectual mode today. He came across the maximum spanning tree problem in a grid; which he was able to solve in a jiffy for integral values. But, the never-say-die spirit of our chef pushed him to something more complex.

"What could be more complex than replacing the integer edges by complex edges", he thought. Help our chef to prove his intellectualism, as much as, he has proven his chef-skills.

You are given a grid of n\*n vertices named as a11, a12, .... a1n, a21, a22, ....a2n, a31, a32, .... ann. There are bidirectional edges between adjacent vertices. So a vertex on the top row (say a14) will have an edge to its left element (a13), to its right element (a15) and to its bottom element (a24). Any vertex cannot have more than 4 neighbors. Vertices on the edges will have 3 neighbors. Vertices on the corners of the grid will have 2 neighbors. Every edge is given as a complex number "x y" (without the quotes). Now, you are required to find a spanning tree in this grid, such that, **the modulus of the complex sum of the edges in the spanning tree**, is **maximized**.

The complex sum is defined for (x1, y1) and (x2, y2) as (x1+x2, y1+y2). The modulus of a complex number (x, y) is square-root(x\*x + y\*y). A spanning tree is defined as a set of edges in the grid such that every vertex has exactly one unique path to any other vertex.

### Input

The first line of input contains the number "n" (without the quotes); followed by 2n lines of 2n-2 integers each. Each line will consist of 2n-2 integers denoting n-1 complex numbers. Each consecutive pair of integers represents a complex number denoting the edge between neighboring vertices. For example, in the first row, 1st and 2nd integers form the complex number denoting the edge between a11 and a12. The 3rd and 4th numbers form the complex number denoting the edge between a12 and a13 and likewise the (2n-3)th and (2n-2)th integers from the complex number denoting the edge between a1(n-1) and a1n. First n lines of input will denote the horizontal edges (like edges between aij and ai(j+1)). Next n lines of input will denote the vertical edges (like edges between aij and a(i+1)j). The 1st and 2nd integer in the (n+1)th line will form the complex number denoting the edge between a11 and a21 and likewise the (2n-3)th and the (2n-2)th integer in the same line will form the complex number denoting the edge between a(n-1)1 and an1.

### Output

Output (n\*n - 1) lines denoting (n\*n - 1) edges in the spanning tree you selected, one on each line - in any order. An edge should be represented as the pair of vertices it joins. So to represent the edge joining aij and auv you should output "i j u v" (each integer separated by a single space, without the quotes). An invalid output, such as joining non-neighboring vertices or selecting an edge more than once, will be reported as Wrong Answer. Outputting too few edges will also be reported as Wrong Answer. Only the first (n\*n - 1) lines of the output will be used so take care of not printing blank lines! Out of range values of i, j, u and v will also be reported as Wrong Answer. If the edges are not a valid spanning tree (by the definition above), the judge will report Wrong Answer.

### Constraints

<pre>n = 20
-100 = weight-x, weight-y = 100

</pre>
### Scoring

The Score for any file / input, would be the modulus of the complex sum of the weights of the edges that you select. The overall score for all files / inputs would be the average of the scores for each test file / input. Your objective is to **maximize** your score!

### Sample Input

*For the sake of space, small value of n is chosen.* ```
3
2 -1 -1 2
1 3 3 -1
0 0 -3 0
3 -2 -2 -1
2 0 4 -3
0 1 1 2

<pre>
### Sample Output

</pre>1 1 2 1
1 2 2 2
1 2 1 3
2 1 2 2
2 2 2 3
3 1 3 2
3 2 2 2
2 3 3 3

<pre>
### Explanation

There are 12 edges to be considered. They are given as follows:

- a11 - a12 = (2, -1)
- a12 - a13 = (-1, 2)
- a21 - a22 = (1, 3)
- a22 - a23 = (3, -1)
- a31 - a32 = (0, 0)
- a32 - a33 = (-3, 0)
- a11 - a21 = (3, -2)
- a21 - a31 = (-2, -1)
- a12 - a22 = (2, 0)
- a22 - a32 = (4, -3)
- a13 - a23 = (0, 1)
- a23 - a33 = (1, 2)

This is also the order in which the complex numbers are given in the input. The score of the given output is sqrt((3+2-1+1+3+0+4+1)^2 + (-2+0+2+3-1+0-3+2)^2) = 13.038405. There may of course be better possible score!
