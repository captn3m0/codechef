---
category_name: easy
problem_code: UNIVERSE
problem_name: 'Year 3017'
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
max_timelimit: '7'
source_sizelimit: '50000'
problem_author: kingofnumbers
problem_tester: null
date_added: 25-06-2017
tags:
    - kingofnumbers
time:
    view_start_date: 1498908900
    submit_start_date: 1498908900
    visible_start_date: 1498908900
    end_date: 1735669800
    current: 1514816576
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKFL17/mandarin/UNIVERSE.pdf), [Russian](http://www.codechef.com/download/translated/SNCKFL17/russian/UNIVERSE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKFL17/vietnamese/UNIVERSE.pdf) as well.

Welcome to the year 3017! Things have changed a lot in the last thousand years. Now people don't live only on the Earth. They live in many planets. And even more amazingly, they also live in many parallel universes which were discovered!

There is an infinite number of parallel universes, each of which has **N** planets. The planets inside a single universe are numbered from 1 to **N**. The planets inside a single universe are connected with each other by **N-1** bi-directional tunnels in such a way that there's a path between any pair of planets within a single universe. The network of tunnels in every universe is the same. That is, if there is a tunnel between planets q1 and q2 in some universe, then there is a tunnel between planets q1 and q2 in every universe.

The universes are numbered starting from 1, while the planets in a single universe are numbered from 1 to **N**. Therefore a particular planet can be uniquely determined by its planet number inside the particular universe, and the number of the universe that it belongs to.

There are also **M** special bi-directional teleports that let you travel from one planet to another, and these could even be across different universes. Each teleport is defined by 4 numbers, **p1, u1, p2, u2**. This means that it can teleport you from the **p1**-th planet in **u1**-th universe to the **p2**-th planet in **u2**-th universe and also vice-versa.

All tunnels and special teleports take 1 unit of time to pass through.

Chef wants to find the shortest distance between two places. He has **Q** such queries that need to be answered. Try to help him with these.

### Input

The first line contains three integers, **N**, **M** and **Q**, which denote the number of planets in a single universe, the number of special teleports, and the number of queries, respectively.

The next **N** - 1 lines describe the tunnels which connect planets inside a universe. Each line has two integers denoting the labels of the planets connected by the tunnel.

The next **M** lines describe the special teleports, with each line containing 4 integers: **p1, u1, p2, u2** as described above.

The next **Q** lines describe the queries. Each line contains four integers **p1, u1, p2, u2**, and this means that you have to find the length of a shortest path between the **p1**-th planet in **u1**-th universe and the **p2**-th planet in **u2**-th universe.

### Output

For each query output its answer in a new line. If it's possible to reach one planet from the other, then output the shortest distance between them. Otherwise, output "impossible". (without quotes)

### Constraints

- 1 ≤ **N** ≤ 300,000
- 1 ≤ **M** ≤ 100,000
- 1 ≤ **Q** ≤ 10
- 1 ≤ **p1**, **p2** ≤ **N**
- 1 ≤ **u1**, **u2** ≤ 200,000
- The whole graph (including both tunnels and special teleports) has no multi-edges or loops. That is, for every four valid integers a, b, c, d, there is **at most** one direct connection (ie. a tunnel or a special teleport) between the a-th planet in the b-th universe and the c-th planet in the d-th universe. Also, if there is a direct connection then a ≠ c or b ≠ d.

### Example

<pre><b>Input1:</b>
3 3 3
1 2
2 3
1 1 1 2
3 3 3 2
1 2 3 3
2 1 2 2
2 1 2 3
1 2 3 2

<b>Output1:</b>
3
4
2

</pre>
**Explanation 1**: There are **N** = 3 planets in each universe. And they are connected by the edges (1, 2) and (2, 3) in each universe, as described by the 2nd and 3rd lines of the input. There are **M** = 3 special teleports, which are described by the 4th, 5th and 6th lines of the input. For example, the fourth line is "1 1 1 2", which means that there is a special teleport between the first planet of the first universe and the first planet of the second universe. The next **Q** = 3 lines denote the queries. For example, the 7th line is "2 1 2 2", which asks for the shortest distance between the second planet of the first universe and the second planet of the second universe.

The map of the multi-verse would look like this:

![](https://codechef_shared.s3.amazonaws.com/download/upload/SNCKFL17/universe.png)The solid lines correspond to tunnels, and the dotted lines correspond to the special teleports.

In the first query, we need to find the length of a shortest path between the second planet in the first universe and the second planet in the second universe. If we are starting from the second planet in the first universe, we can go to the first planet in the first universe in 1 unit of time using the tunnel. Then we can use the special teleport to go to the first planet in the second universe, and this will take another 1 unit of time. Finally, we can use a tunnel to go to the second planet in the second universe, in another 1 unit of time. The total time needed was 3, and we cannot do better than this. Hence, the answer is 3.

In the second query, we need to find the length of a shortest path between the second planet in the first universe and the second planet in the third universe. The answer is 4.

In the third query, we need to find the length of a shortest path between the first planet in the second universe and the third planet in the second universe. The answer is 2.

<pre><b>Input2:</b>
4 1 8
1 2
1 3
3 4
1 30 4 30
1 30 3 30
1 30 4 30
1 53 3 30
1 53 4 30
1 13 2 30
1 30 3 14
2 14 4 14
2 30 4 30

<b>Output2:</b>
1
1
impossible
impossible
impossible
impossible
3
2

</pre>
**Explanation 2**: Note that there can be teleports between two planets of the same universe. As example, the only teleport in this testcase is between the first and fourth planets of the 30th universe.
