---
category_name: hard
problem_code: ALLPOLY
problem_name: 'Defend the Recipe'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: kevinsogo
problem_tester: mugurelionut
date_added: 22-06-2016
tags:
    - hard
    - july16
    - kernel
    - kevinsogo
editorial_url: 'http://discuss.codechef.com/problems/ALLPOLY'
time:
    view_start_date: 1468402200
    submit_start_date: 1468402200
    visible_start_date: 1468402200
    end_date: 1735669800
    current: 1493556606
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JULY16/mandarin/ALLPOLY.pdf), [Russian](http://www.codechef.com/download/translated/JULY16/russian/ALLPOLY.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JULY16/vietnamese/ALLPOLY.pdf) as well.

Chef holds all his secret recipes inside his house. For this reason, Chef's house is closed off by walls, thus it is very secure. You can think of the walls as a **simple polygon** in the 2D plane, and you can consider the thickness of the walls to be negligible, i.e., 0.

Unfortunately, bad guys plan to steal his recipes. To do so, they plan to send a single agent to parachute in a uniformly-chosen random point in the region **\[-107,107\] × \[-107,107\]**. (This point need not be a lattice point.) Once the agent parachutes down that point, he then deploys in his exact location a special weapon called the **pulverizer**, which is designed to destroy walls. The pulverizer works by firing a laser that rotates 360 degrees clockwise, initially pointing north. This laser beam completely destroys the part of the wall it hits.

Once the walls are destroyed, the rest of the bad guys can now attack the house more easily.

Unfortunately, it's not guaranteed that the pulverizer will be able to destroy every bit of the wall. This is because the laser can only hit (and destroy) the first wall it hits, so if there's another part of the wall behind it, that part cannot be destroyed.

We will call the plan **successful** if all parts of the wall are destroyed. The following image illustrates it more clearly:

![](https://s3.amazonaws.com/codechef_shared/download/upload/JULY16/allpoly.png)

In this example, only the first image demonstrates a successful plan.

As head of security of Chef's house, can you determine the probability of a successful plan?

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains a single integer **N**. The next **N** lines describe the wall. More precisely, the **ith** line contains two integers **xi** and **yi** denoting that **(xi, yi)** is the **ith** vertex of the polygon. The points are given in clockwise order around the boundary.

### Output

For each test case, output a single real number denoting the probability of a successful plan by the bad guys. Your answer is considered correct if it is within an absolute error of **10-6**.

### Constraints

- **|xi|**, **|yi|** ≤ **107**
- The points are given in clockwise order.
- The polygon is simple and has positive area, though some angles may be 180 degrees.

### Subtasks

**Subtask #1: (30 points)**

20. **1** ≤ **T** ≤ **40000**
21. **3** ≤ **N** ≤ **12**
22. The sum of the **N**s in a single test file is ≤ **100000**
**Subtask #2: (70 points)**

24. **1** ≤ **T** ≤ **200**
25. **3** ≤ **N** ≤ **100000**
26. The sum of the **N**s in a single test file is ≤ **520000**
### Example

<pre><b>Input:</b>
<tt>2
5
10000000 -10000000
-10000000 -10000000
-10000000 10000000
10000000 10000000
0 0
6
700000 400000
300000 0
700000 -400000
-700000 -400000
-300000 0
-700000 400000
</tt>

<b>Output:</b>
<tt>0.25
0.00045</tt>
</pre>
### Explanation

The second example is depicted by the image above.
