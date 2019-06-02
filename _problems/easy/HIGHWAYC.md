---
category_name: easy
problem_code: HIGHWAYC
problem_name: 'Highway Crossing'
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
    - ERL
    - TCL
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: vidyut_1
problem_tester: null
date_added: 18-03-2018
tags:
    - april18
    - easy
    - epsilon
    - geometry
    - math
    - vidyut_1
editorial_url: 'https://discuss.codechef.com/problems/HIGHWAYC'
time:
    view_start_date: 1523957400
    submit_start_date: 1523957400
    visible_start_date: 1523957400
    end_date: 1735669800
    current: 1525198935
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/APRIL18/mandarin/HIGHWAYC.pdf), [Russian](http://www.codechef.com/download/translated/APRIL18/russian/HIGHWAYC.pdf) and [Vietnamese](http://www.codechef.com/download/translated/APRIL18/vietnamese/HIGHWAYC.pdf) as well.

Chef has to cross a highway with infinite length consisting of $N$ parallel lanes. The width of each lane is $Y$. Between each pair of adjacent lanes, there is a divider with negligible width; at each divider and the side of the highway, Chef can wait for an arbitrarily long time to allow the cars to pass by and then continue crossing the highway. Since Chef is lazy, he wants to cross the highway while walking the minimum possible distance; therefore, he will only move in a straight line perpendicular to the highway. Chef walks with a constant velocity $S$. There is exactly one car in each lane. Each car is as wide as a whole lane (so it covers the entire width of its lane), has a known \*length\* and travels with fixed \*velocity\* in either direction along the highway. For each $i$ ($1 \\le i \\le N$), the car in the $i$-th lane has velocity $V\_i$ and length $C\_i$. Let's measure distances along the highway, i.e. all points which lie on the same line perpendicular to the highway have the same coordinate $x$. Chef's position is $x=0$; for each $i$ ($1 \\le i \\le N$), the initial position of the car in the $i$-th lane is $P\_i$ and the direction in which it's moving is $D\_i$. If $D\_i = 1$, the car is moving in the positive direction (its position is increasing) and if $D\_i = 0$, the car is moving in the negative direction (its position is decreasing). The drivers on a highway don't expect anyone to be crossing it, so they drive carelessly and won't be able to apply brakes at any point in time. Find the minimum time Chef needs to cross the highway without getting hit by a car. Chef does not get hit by a car if the minimum distance between him and any car remains greater than $10^{-6}$ at all times. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains three space-separated integers $N$, $S$ and $Y$ denoting the number of lanes, Chef's walking speed and the width of a lane. - The second line contains $N$ space-separated integers $V\_1, V\_2, \\dots, V\_N$ denoting the absolute velocities of the cars. - The third line contains $N$ space-separated integers $D\_1, D\_2, \\dots, D\_N$ denoting the directions in which the cars are moving. - The fourth line contains $N$ space-separated integers $P\_1, P\_2, \\dots, P\_N$ denoting the initial positions of the cars. The position of a car is the $x$-coordinate of its front side, i.e. for a car moving in the positive direction, it is the largest coordinate of any point of the car, and for a car moving in the negative direction, it is the smallest coordinate of any point of the car. - The fifth line contains $N$ space-separated integers $C\_1, C\_2, \\dots, C\_N$ denoting the lengths of the cars. ### Output For each test case, print a single line containing one real number — the minimum time needed to cross the highway. Your answer will be considered correct if its absolute error does not exceed $10^{-3}$. ### Constraints - $1 \\le T \\le 100,000$ - $1 \\le N \\le 10$ - $1 \\le S \\le 10$ - $1 \\le Y \\le 1,000$ - $1 \\le V\_i \\le 200$ for each valid $i$ - $0 \\le D\_i \\le 1$ for each valid $i$ - $|P\_i| \\le 10^9$ for each valid $i$ - $1 \\le C\_i \\le 1,000$ for each valid $i$ ### Subtasks \*\*Subtask #1 (25 points):\*\* $N = 1$ \*\*Subtask #2 (75 points):\*\* original constraints ### Example Input ```
<tt>
3
2 6 6
5 10
1 0
-1 23
4 7
1 8 177
190
0
4201
21
1 1 1000
100
1
-100000
10
</tt>
<pre>
\### Example Output ```
<tt>
4.000000
44.346053
2000.100000
</tt>
</pre>
\### Explanation \*\*Example case 1:\*\* Chef has to wait at the side of the highway and allow the first car to pass. As soon as the car passes by, he can reach the first divider. At this divider, he has to wait again for the second car to pass. Chef's situation is drawn in the image. ![](https://codechef_shared.s3.amazonaws.com/download/APRIL18/HIGHWAY/HIGHWAYC/highwayc.jpg)\*\*Example case 2:\*\* We see that Chef needs time at least $\\frac{177}{8} = 22.125$ to cross the highway, but the car would arrive at Chef's position at an earlier time $22.1105$. Hence, Chef must wait for the car to pass. Also, since Chef must wait until the car passes completely, he will wait for $\\frac{4222}{190}=22.221053$ before starting to cross the lane. Hence, the total time taken to cross the highway is $44.346053$. \*\*Example case 3:\*\* Chef can cross the road in time $1000$, but at that time, the car will reach $x=0$. Hence, at that moment, the distance between Chef and the car will be $0$, which is less than $10^{-6}$. Therefore, Chef has to wait for the car to pass before crossing.
