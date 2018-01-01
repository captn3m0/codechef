---
category_name: easy
problem_code: RAINBOW
problem_name: 'Rainbow Graph'
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
problem_author: lg5293
problem_tester: errichto
date_added: 13-03-2017
tags:
    - cook80
    - easy
    - graph
    - greedy
    - lg5293
editorial_url: 'https://discuss.codechef.com/problems/RAINBOW'
time:
    view_start_date: 1489949100
    submit_start_date: 1489949100
    visible_start_date: 1489949100
    end_date: 1735669800
    current: 1493558178
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK80/mandarin/RAINBOW.pdf), [Russian](http://www.codechef.com/download/translated/COOK80/russian/RAINBOW.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK80/vietnamese/RAINBOW.pdf) as well.

You are given an undirected [compete graph](http://mathworld.wolfram.com/CompleteGraph.html) with **n** nodes. Each edge can be one of **n**\*(**n**-1)/2 +1 different colors. These colors are labeled from 0 to **n**\*(**n**-1)/2, inclusive. But not all these **n**\*(**n**-1)/2 +1 colors need to be used. ie. it is possible that two different edges could have the same color. Formally, let **c**i,j denote the color between the i-th and j-th nodes. (Note that these edges are undirected, so **c**i,j = **c**j,i). We will define **c**i,i to be zero, although there is no such edge present. i.e. the graph does not contain self-loops.

A subset of nodes is called _interesting_ if every node in the subset has at least two edges of different colors, connecting it to vertices in the subset.

Your task is to determine the maximum possible size of an interesting subset of nodes.

Note that, by definition, the empty subset of nodes is an interesting subset, and so the answer is always at least zero.

### Input

The first line of input will contain an integer **T**, the number of test cases.

Each test case will be formatted as follows:

The first line will contain a single integer **n**.

The next **n** lines will contain **n** integers each. The j-th integer on the i-th line will denote **c**i,j.

### Output

For each test case, output the maximum possible size of an interesting subset, in a new line.

### Constraints

- 1 ≤ **T** ≤ 100
- 1 ≤ **n** ≤ 50
- 0 ≤ **c**i,j ≤ **n**\*(**n**-1)/2
- if i = j then **c**i,j = 0
- **c**i,j = **c**j,i

### Example

<pre>
<b>Input:</b>
4
3
0 1 2
1 0 3
2 3 0
3
0 1 1
1 0 3
1 3 0
2
0 1
1 0
6
0 9 2 4 7 8
9 0 9 9 7 9
2 9 0 3 7 6
4 9 3 0 7 1
7 7 7 7 0 7
8 9 6 1 7 0
<b>Output:</b>
3
0
0
4

</pre>### Explanation
In the first case, the set of all nodes is an interesting subset.

In the second and third cases, no non-empty subset of nodes is interesting.

In the last case, an interesting subset of nodes is {1,3,4,6}. There is no larger interesting subset.
