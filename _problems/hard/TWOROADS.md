---
category_name: hard
problem_code: TWOROADS
problem_name: 'Two Roads'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: tuananh93
problem_tester: xcwgf666
date_added: 1-08-2013
tags:
    - discretization
    - geometry
    - hard
    - sept13
    - tuananh93
editorial_url: 'http://discuss.codechef.com/problems/TWOROADS'
time:
    view_start_date: 1379323800
    submit_start_date: 1379323800
    visible_start_date: 1379323800
    end_date: 1735669800
    current: 1493556895
layout: problem
---
All submissions for this problem are available.Byteland is notorious for its poor transportation system. There are **N** villages located far away from each other. So the only way of going from one village to another is using the narrow pathways. But now it's time to make some changes. People in Byteland are going to improve the transportation system in their own way. They have planned to build two straight roads. These roads will not necessary connect any cities but they should decrease the time of traveling between some cities. People can use a pathway to go from one city to the nearest point on the road. Then they can move \[along the road\] to the point of the road that is the nearest to their destination. And finally, they can use another pathway to move from that point to the destination.

Let **d** be the distance from the city to the closest point that belongs to one of the roads, then the sadness of that city will be equal to **d2**. The sadness of the whole country is the average of the sadness of all cities. Can you help Byteland to find the plan that will minimize the sadness of the country? You can assume that:

- The cities are considered to be points on the plane and the roads are considered to be line segments.
- A road can have arbitrary length if that reduces the sadness of the country.
- The two roads may have a common point.
- A road can go through some cities (so the distance from these cities to the road is 0).
- No 3 or more cities lie on the same line.

### Input

The first line contains an integer **N**. The next **N** lines give co-ordinates of the **N** cities. The **i**-th line contains two real numbers **xi** and **yi** that give co-ordinates of the **i**-th city.

### Output

Print out the minimum sadness of the country with absolute error less than **10-6**.

### Constraints

- **3** ≤ **N** ≤ **100**
- **0.0** ≤ **x i** , **y i**  ≤ **1000.0**

### Example

<pre><b>Input:</b>
4
1 1
2 2
10 0
20 0

<b>Output:</b>
0

</pre>### Explanation
The first road goes through the first two cities and the second road goes through the last two cities.
