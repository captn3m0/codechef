---
category_name: hard
problem_code: CAPTCITI
problem_name: 'Snakes capturing the Mongoose Cities'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: admin3
problem_tester: kingofnumbers
date_added: 30-05-2017
tags:
    - admin3
    - medium
    - snckpb17
    - sorting
    - tree
time:
    view_start_date: 1496331000
    submit_start_date: 1496331000
    visible_start_date: 1496331000
    end_date: 1735669800
    current: 1497589508
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKPB17/mandarin/CAPTCITI.pdf), [Russian](http://www.codechef.com/download/translated/SNCKPB17/russian/CAPTCITI.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKPB17/vietnamese/CAPTCITI.pdf) as well.

The Mongoose Land consists of **N** cities and they are connected by **N** - 1 bidirectional roads in such a manner that you can travel from one city to another city in exactly one path. In other words, the map looks like a tree. The cities are numbered from 1 to **N**.

King Cobra has decided that he wants to eliminate the mongooses, and is hence preparing to wage a war. The snakes have recently procured airplanes, and thus they can parachute their soldiers onto some of the Mongoose Land cities. Suppose on Day 0, these soldiers are parachuted. You know that to capture City i, you need to parachute in **Pi** soldiers. By end of Day 0, they would have captured their respective cities.

Each city depends on its neighbors for some of its supplies, and so, if a certain number of its neighbors are captured, then this city will fall as well. In particular, for every City i, you know that if City i was uncaptured on Day d, and at least **Ci** of its neighbors are captured on Day d, then this city will be captured on Day d+1, where d ≥ 0. A city which has been captured will forever remain captured.

King Cobra doesn't mind waiting for however long it takes to capture the entire Mongoose kingdom, but he wants to do it with the least number of soldiers. Help him find the least number of soldiers he should send so that the entire Mongoose kingdom can be captured eventually.

Formally, you need to find a subset of cities, S, such that the sum of **Pi** over these cities is minimized, and the entire kingdom will be captured eventually, if soldiers are parachuted into exactly these cities. You need to output this minimum sum.

### Input

- The first line contains a single integer, **T**, denoting the number of testcases. The description of each testcase follows.
- The first line of each testcase contains a single integer, **N**, the number of cities in Mongoose Land,
- The i-th of the next **N** - 1 lines contain two integers each, **ui** and **vi**, which denote that there is an edge between Cities **ui** and **vi**.
- The next line contains **N** integers, **P1, P2**, ..., **PN**. **Pi** denotes the number of soldiers which have to parachuted in, so as to capture City i on Day 0.
- The next line contains **N** integers, **C1, C2**, ..., **CN**. **Ci** denotes the number of neighbors of City i that have to be captured for City i to be captured on the next day.

### Output

- For each testcase, output a single integer which is the minimum total number of soldiers who have to be parachuted in, on Day 0.

### Constraints

- 1 ≤ **T** ≤ 5
- 1 ≤ **N** ≤ 5 \* 104
- 1 ≤ **ui, vi** ≤ **N**
- 1 ≤ **Pi** ≤ 109
- 1 ≤ **Ci** ≤ degree of City i

### Example

<pre><b>Input:</b>
1
8
1 2
1 3
4 2
6 5
2 5
7 5
5 8
2 8 10 5 200 4 100 1
2 1 1 1 3 1 1 1

<b>Output:</b>
7
</pre>
### Explanation

One of the optimal solutions is to parachute into Cities 1, 6 and 8 on Day 0. So the total number of soldiers needed = **P1** + **P6** + **P8** = 2 + 4 + 1 = 7.

Now, we will show that this is indeed a valid solution. For that, we need to show that eventually all the cities will be captured. We will show the cities captured on every day in sequence:

- **Day 0**: The cities captured are the ones parachuted into, and they are {1, 6, 8}.
- **Day 1**: City 2 has one of its neighbors (City 1) captured. And since **C2** = 1, this is enough for City 2 to be captured. Similarly, since **C3** = 1, and City 1 is a neighbor of City 3, City 3 is also captured. So, cities captured on day 1 = {1, 2, 3, 6, 8}.
- **Day 2**: City 4 has **C4** = 1, and one of its neighbors is captured (City 2). Hence it is captured now. City 5 has **C5** = 3, and three of its neighbors, Cities 2, 6 and 8, have been captured. Hence it is also captured. Therefore the cities captured at the end of Day 2 are {1, 2, 3, 4, 5, 6, 8}.
- **Day 3**: City 7 has **C7** = 1 and since City 5 has been captured, it is also captured now. So, by the end of Day 3, all 8 cities have been captured.

This cannot be achieved with fewer soldiers, and hence the answer is 7.
