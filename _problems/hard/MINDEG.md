---
category_name: hard
problem_code: MINDEG
problem_name: 'Minimum of Degrees'
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
    - 'CPP 6.3'
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
    - 'PYTH 3.5'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1.75'
source_sizelimit: '50000'
problem_author: errichto
problem_tester: null
date_added: 21-06-2017
tags:
    - errichto
time:
    view_start_date: 1498908900
    submit_start_date: 1498908900
    visible_start_date: 1498908900
    end_date: 1735669800
    current: 1514816843
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKFL17/mandarin/MINDEG.pdf), [Russian](http://www.codechef.com/download/translated/SNCKFL17/russian/MINDEG.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKFL17/vietnamese/MINDEG.pdf) as well.

There is a graph with **N** vertices and no edges. Chef is going to add all **N**\*(**N**-1)/2 possible undirected edges to the graph, in a random order. The cost of adding an edge between vertices x and y is equal to min(degree(x), degree(y)). Here, degree(x) denotes the number of edges incident on x before adding the new edge (between x and y).

Find the expected total cost of adding all the edges and print it modulo 998244353. See more details in the output section below.

### Input

The input contains a single integer **N**, denoting the number of vertices.

### Output

For the constraints given below, it can be proved that the answer (the expected value of the total cost) can be expressed as a rational P/Q for some integers P and Q, where Q isn't divisible by 998244353. Print one integer: P\*Q-1 modulo 998244353. Here, Q-1 denotes the modular inverse with respect to 998244353.

### Constraints

- 2 ≤ **N** ≤ 300,000

### Example

<pre><b>Input1:</b>
3

<b>Output1:</b>
1

<b>Input2:</b>
4

<b>Output2:</b>
199648875

</pre>### Explanation

**Example #1.** The graph contains 3 vertices and Chef will add 3 edges. No matter what the order of adding edges is, the cost of adding the first edge is 0 because degrees of vertices are 0 initially. Similarly, the cost of adding the second edge is 0 because at least one of two vertices connected with a new edge has degree 0. Finally, the third edge connects vertices that both have degree 1 after adding first two edges, so the cost is min(1, 1) = 1. The total cost is always 1, so its expected value is 1 as well.

**Example #2.** There are 4 vertices and Chef will add 6 edges. The answer is 22/5, so you should print 22 \* 5-1 = 22 \* 598946612 = 13176825464 = 199648875 (modulo 998244353). Let's analyze one possible scenario:

1. Initially, all degrees are equal to 0. Add the edge 2-3 (an edge between vertices 2 and 3) with cost min(0, 0) = 0.
2. Degrees of vertices 1, 2, 3, 4 are 0, 1, 1, 0 respectively. Add the edge 1-3 with cost min(0, 1) = 0.
3. Degrees are 1, 1, 2, 0. Add the edge 1-4 with cost min(1, 0) = 0.
4. Degrees are 2, 1, 2, 1. Add the edge 1-2 with cost min(2, 1) = 1.
5. Degrees are 3, 2, 2, 1. Add the edge 2-4 with cost min(2, 1) = 1.
6. Degrees are 3, 3, 2, 2. Add the edge 3-4 with cost min(2, 2) = 2.

The total cost in the analyzed scenario is 1 + 1 + 2 = 4.
