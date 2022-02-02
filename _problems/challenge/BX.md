---
category_name: challenge
problem_code: BX
problem_name: Bubbles
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
    - kotlin
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '0.117647'
source_sizelimit: '50000'
problem_author: admin
problem_tester: null
date_added: 22-03-2009
tags:
    - admin
time:
    view_start_date: 1240484339
    submit_start_date: 1240484339
    visible_start_date: 1240484210
    end_date: 1735669800
    current: 1525454453
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.**This problem was part of the [CodeChef April Challenge](http://www.codechef.com/APRIL09/). All user submissions for this contest problem are publicly available [here](http://www.codechef.com/APRIL09/status/BX/).**

**The following a tie breaker problem. The best solution will receive one point. All other successful answers will be scored on a curve and receive a fraction of a point based on how close they come to the best answer.**

Let's have some fun with soap bubbles... We drive several sticks vertically into a flat surface (so that they look like points from above), and spread a thin film of soap over all of them. The soap film tends to minimize the area of its surface, and eventually becomes very thin, with surfaces turning into lines spread over all points. When everything has settled down, we can assume that the "bubble" we have is in fact a set of line segments, which connect all of our sticks into one network (possibly via some intermediate points which can also be the endpoints of lines).

### Input

First, 1nn pairs of numbers follow, representing the coordinates of sticks which the soap film will connect.

### Output

First, you should output the number m of intermediate points you create. Then, the next m pairs of numbers are coordinates of intermediate points. Then, you should output e, the number of soap-bubble lines you create. Then, the next 2\*e numbers represent the indexes of points which are connected by the given line. Each index i should be a number 0i n+m. If i i-th input point (stick). If i&gt;=n, then it corresponds to the (i-n)-th intermediate point.

### Scoring

Your goal is to minimize the score obtained in this problem.

As longer lines tends to get thinner, for each line segment of length t, you will receive t / max(1, ln(t)) penalty points, where "ln" is the logarithm in the natural base. You will additionally receive ln(m+1) penalty points if your solution uses m intermediate points.

If the soap film given at output does not span all the input points (connecting them into a network), your solution will be judged as incorrect.

### Example

<pre>
<b>Input:</b>
3
0.0 0.0
0.0 3.0
4.0 0.0

<b>Output:</b>
1
1.0 1.0
3
0 3
1 3
2 3

<b>Score:</b>
7.090148
</pre>