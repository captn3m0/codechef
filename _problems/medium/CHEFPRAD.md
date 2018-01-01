---
category_name: medium
problem_code: CHEFPRAD
problem_name: 'Chef and Pairs'
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
problem_author: mgch
problem_tester: null
date_added: 1-06-2017
tags:
    - mgch
time:
    view_start_date: 1496516400
    submit_start_date: 1496516400
    visible_start_date: 1496516400
    end_date: 1735669800
    current: 1497284431
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKEL17/mandarin/CHEFPRAD.pdf), [Russian](http://www.codechef.com/download/translated/SNCKEL17/russian/CHEFPRAD.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKEL17/vietnamese/CHEFPRAD.pdf) as well.

We define a function maxMatching(A, B, y), which takes two arrays of integers, A and B, an integer y, and returns an integer. The function is described as follows:

Let N be the size of array A, and M be the size of array B. Consider a bipartite graph with one side having the vertices {a1, a2, ..., aN}, and the other side having the vertices {b1, b2, ..., bM}. There is an edge between ai and bj if abs(Ai - Bj) ≤ y. The function returns the size of a [maximum matching](https://en.wikipedia.org/wiki/Matching_(graph_theory)#Definition) in this graph.

 Now, you are given two arrays, **C** and **D**, an integer **e**, and asked to output the result of this procedure:

 ```

ans = maxMatching(C, D, e)
FOR x = -2*10^9..2*10^9
	 FOR i = 1..N
	 	 F[i] = C[i] + x
	 ans = max(ans, maxMatching(F, D, e))
output ans

<pre>### Input
- The first line contains one integer **T**, denoting the number of tests. **T** test cases follows.
- The first line of each test case contains three integers: **N** - number of elements of array **C**, **M** - number of elements of array **D** and **e**.
- The second line contains **N** space-separated integers denoting elements of array **C**.
- The third line contains **M** space-separated integers denoting elements of array **D**.

### Output

 For each test case output the final value of "ans" as produced by the given procedure, in a new line.

### Constraints

- 1 ≤ **T** ≤ 10
- 1 ≤ **N, M** ≤ 250
- 1 ≤ **Ci, Di**, **e** ≤ 109

### Example

</pre><b>Input:</b>
1
5 7 1
8 9 18 13 19
1 3 7 20 17 18 11

<b>Output:</b>
4

<pre>