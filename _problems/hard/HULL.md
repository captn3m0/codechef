---
category_name: hard
problem_code: HULL
problem_name: 'Magic Hull'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: shangjingbo
problem_tester: anton_lunyov
date_added: 29-03-2012
tags:
    - june12
    - medium
    - polygons
    - shangjingbo
    - vectors
editorial_url: 'http://discuss.codechef.com/problems/HULL'
time:
    view_start_date: 1339403837
    submit_start_date: 1339403837
    visible_start_date: 1339407000
    end_date: 1735669800
    current: 1493556731
layout: problem
---
All submissions for this problem are available.You are given a set of **N** two-dimensional non-zero vectors (**X1**, **Y1**), (**X2**, **Y2**), ..., (**XN**, **YN**) with integer coordinates. You can choose no more than **6** vectors from this set to form a **non-strictly convex polygon** that have sides equal to these vectors (see paragraph below for more detailed explanation). Non-strictly convex polygon is the polygon that can have flat angles (angles of **180** degrees). You can select each vector several times if needed. Your goal is to maximize the area of this polygon. It is guaranteed that at least one such convex polygon can be constructed.

How exactly we construct a polygon from the given sequence of vectors? Suppose you've chosen the sequence of vectors (**U1**, **V1**), (**U2**, **V2**), ..., (**UK**, **VK**), where **3** ≤ **K** ≤ **6**. Each vector here should be equal to one of the given **N** vectors but some vectors in this sequence can coincide. At first, you take some point (**A1**, **B1**) at the plane as the first vertex of your polygon. Then you put your first vector (**U1**, **V1**) to this point to obtain the second vertex (**A2**, **B2**) = (**A1** + **U1**, **B1** + **V1**). Next you take the second vector and put it to the second vertex to obtain the third vertex and so on. Finally, at the last step you put vector (**UK**, **VK**) to the **K**th vertex (**AK**, **BK**) to obtain the point (**AK + 1**, **BK + 1**) = (**AK** + **UK**, **BK** + **VK**) that should coincide with the first vertex (**A1**, **B1**), otherwise we should reject this sequence of vectors. Hence in the end we obtain a polygon with vertexes (**A1**, **B1**), (**A2**, **B2**), ..., (**AK**, **BK**). If this polygon is simple (without self-intersections) and non-strictly convex, we should consider its area as the candidate for the answer. By self-intersection we mean that either some non-consecutive sides (considered with their ends) have common point or two consecutive sides have more than one common point.

### Input

The first line of the input file contains an integer **N**, the number of the given vectors. Each of the following **N** lines contains two space separated integers **Xi**, **Yi**, coordinates of the corresponding vector.

### Output

In the only line of the output file print the maximal possible area of the convex polygon that can be constructed by the rules described in the problem statement with exactly one digit after the decimal point.

### Constraints

**3** ≤ **N** ≤ **150**

**|Xi|**, **|Yi|** ≤ **1000000**

All vectors are non-zero: **|Xi|** + **|Yi|** > 0

There exists at least one sequence of at most **6** vectors from this set that forms a convex polygon.

### Example

<pre>
<b>Input:</b>
4
3 0
-1 1
-1 0
-1 -1

<b>Output:</b>
2.0
</pre>
### Explanation

The only non-strictly convex polygon you can construct from these vectors by the rules described in the problem statement is the [isosceles trapezoid](http://en.wikipedia.org/wiki/Isosceles_trapezoid) that has height of length **1** and bases of length **1** and **3**. It has area **2.0**.
