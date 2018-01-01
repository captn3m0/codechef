---
category_name: hard
problem_code: MATCH
problem_name: 'Expected Maximum Matching'
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
    - hard
    - june12
    - matching
    - probability
    - shangjingbo
editorial_url: 'http://discuss.codechef.com/problems/MATCH'
time:
    view_start_date: 1339403792
    submit_start_date: 1339403792
    visible_start_date: 1339407000
    end_date: 1735669800
    current: 1493556766
layout: problem
---
All submissions for this problem are available.You are given two sets of vertexes **U = {U\[1\], U\[2\], ..., U\[N\]}** and **V = {V\[1\], V\[2\], ..., V\[M\]}**. All **N + M** vertexes here are different. You are also given the matrix **P** of size **N x M** composed of real numbers from the segment **\[0, 1\]**. The number that stands at the intersection of the **i**th row and the **j**th column of this matrix is denoted by **P\[i\]\[j\]** and means the probability that the vertexes **U\[i\]** and **V\[j\]** are connected by the bidirected edge. In other words, you are given a [complete bipartite graph](http://en.wikipedia.org/wiki/Complete_bipartite_graph) where each edge occurs with some probability. Your task is to find **the expected size of the maximum matching** of this graph.

What exactly does it mean?

Let's call our complete bipartite graph with random edges as _random bipartite graph_.
Consider some arbitrary [bipartite graph](http://en.wikipedia.org/wiki/Bipartite_graph) **G = (U, V, E)**. Denote by **P(G)** the probability that our random bipartite graph is equal to **G**. How to calculate **P(G)**? Consider some pair of vertexes **(U\[i\], V\[j\])**. If these vertexes are connected by the edge in **G** then put **PG\[i\]\[j\] = P\[i\]\[j\]** otherwise put **PG\[i\]\[j\] = 1 – P\[i\]\[j\]**. Then **P(G)** is equal to the product of **PG\[i\]\[j\]** for all **N ∙ M** pairs of **(i, j)**, where **1 ≤ i ≤ N** and **1 ≤ j ≤ M**.

Next, denote by **MM(G)** the size of the [maximum matching](http://en.wikipedia.org/wiki/Maximum_matching#Definition) in the graph **G**. In other words, **MM(G)** is the size of the largest set of edges of **G** such that no two edges share a common vertex.

Finally, **the expected size of the maximum matching** is the sum of products **P(G) ∙ MM(G)** for all possible bipartite graphs **G** with parts **U** and **V**. Note that there are **2 N ∙ M**  such graphs in all. So don't try to calculate the answer directly by definition if you do not want to get verdict **Time Limit Exceeded** ;)

### Input

The first line of the input file contains two integers **N** and **M**. Each of the following **N** lines contains **M** real numbers. **j**th number in the **i**th line of these **N** lines denotes **P\[i\]\[j\]**, the probability that the vertexes **U\[i\]** and **V\[j\]** are connected by the direct edge. Each pair of consecutive numbers in every line is separated by exactly one space.

### Output

In the only line of the output file print the expected size of the maximum matching. Your answer will be considered as correct if it has an absolute error less than **10-6**.

### Constraints

**1** ≤ **N** ≤ **5**

**1** ≤ **M** ≤ **100**

 ≤ **P\[i\]\[j\]** ≤ **1**

**P\[i\]\[j\]** will have exactly **5** digits after the decimal point

### Example

<pre>
<b>Input 1:</b>
3 3
0.38064 0.30000 0.29486
0.41715 0.90000 0.67837
0.53316 1.00000 1.00000

<b>Output 1:</b>
2.575940


<b>Input 2:</b>
2 2
0.40000 1.00000
0.10000 1.00000

<b>Output 2:</b>
1.46

</pre>### Explanation
In the second example we have four different graphs with non-zero value of **P(G)**. Their adjacent matrices with marked maximum matching as well as the values of **MM(G)** and **P(G)** are listed in the table below.

**Adjacent matrix****MM(G)****P(G)**0101**1**(1 – 0.4) ∙ (1 – 0.1) = 0.6 ∙ 0.9 = **0.54**1101**2**0.4 ∙ (1 – 0.1) = 0.4 ∙ 0.9 = **0.36**0111**2**(1 – 0.4) ∙ 0.1 = 0.6 ∙ 0.1 = **0.06**1111**2**0.4 ∙ 0.1 = **0.04**So the answer is **0.54 ∙ 1 + 0.36 ∙ 2 + 0.06 ∙ 2 + 0.04 ∙ 2 = 1.46**.
