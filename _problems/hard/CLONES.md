---
languages_supported:
    - NA
title: CLONES
category: NA
old_version: true
problem_code: CLONES
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

A boolean function is a function of the form f: Bn -&gt; B, where B = {0, 1} and n is a non-negative integer called the arity of the function. Some Boolean functions are projections: pnk(x1, ..., xn) = xk. And given an m-ary function f, and n-ary functions g1, ..., gm, we can construct another n-ary function: h(x1, ..., xn) = f(g1(x1, ..., xn), ..., gm(x1, ..., xn)), called their composition. A set of functions closed under composition and containing all projections is called a clone. One trivial clone is a set of all boolean functions. Some of the special clones are:

- Z is a set of 0-preserving functions: f(0, ..., 0) = 0;
- P is a set of 1-preserving functions: f(1, ..., 1) = 1;
- D is a set of self-dual functions: !f(x1, ..., xn) = f(!x1, ..., !xn);
- A is a set of affine functions: the functions satisfying that if f(a1, ..., c, ..., an) = f(a1, ..., d, ..., an) then f(b1, ..., c, ..., bn) = f(b1, ..., d, ..., bn), where c and d are at some position i. This should hold for every valid i, a1, ..., an, b1, ... bn, c and d.

Now we are interested how many n-ary functions are there in some combinations of mentioned above sets. For example, for n = 2, there are exactly 8 functions in Z, 4 functions in the intersection of Z and P, 8 function in the complement of A and so on.

### Input

The first line of the input file contains n - the arity of the boolean functions we are looking at. The second line contains the q - number of queries. Each of the next q lines will describe a query. The query is a set expression. The expression will contain the following characters: 'Z', 'P', 'D', 'A' denoting the sets, described above; 'v' - which is set union; '^' - which is set intersection; '!' which is complement; '\\' which is set difference; and also '(' and ')' to define operations priority. Operations in brackets have higher priority. Otherwise the '!' operation has the higher priority and 'v', '^' and '\\' are of the same priority. It is guaranteed that the expression will be correct. See samples for some examples of set expressions.

### Constraints

1 &lt;= n &lt;= 100
1 &lt;= q &lt;= 100
The length of each expression won't exceed 100 characters.

### Output

For each query in the input print how many n-ary function are in the set described by the according set expression modulo 1000003.

### Example

<pre>
<b>Input:</b>
2
6
Z
Z^P
!A
!(AvP)^D
AvZvP\A
!A^(Z\(Dv!P))

<b>Output:</b>
8
4
8
0
6
2

</pre>