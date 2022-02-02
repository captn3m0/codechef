---
category_name: hard
problem_code: DEG3MAXT
problem_name: 'Three-Degree-Bounded Maximum Cost Subtree'
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
max_timelimit: '7.5'
source_sizelimit: '50000'
problem_author: mugurelionut
problem_tester: shangjingbo
date_added: 24-07-2013
tags:
    - dynamic
    - hard
    - mugurelionut
    - oct13
editorial_url: 'http://discuss.codechef.com/problems/DEG3MAXT'
time:
    view_start_date: 1381743000
    submit_start_date: 1381743000
    visible_start_date: 1381743000
    end_date: 1735669800
    current: 1493556683
layout: problem
---
All submissions for this problem are available.###  Read problems statements in Mandarin Chinese [here](http://www.codechef.com/download/translated/OCT13/mandarin/DEG3MAXT.pdf)

### Problem Statement

Chef has become a rich man and now owns the entire road network in the country, which consists of **N** cities (numbered from **1** to **N**) and **M** bidirectional roads. Each road connects two different cities **i** and **j** and has a cost **C(i,j)** - this is the cost paid by the drivers which use this road (and, thus, it is Chef's profit). The road network has the following properties:

- it is possible to reach any city from any other city using the existing roads
- any subset **S** of **10** or more cities contains at least two different cities **A** and **B** such that all the paths between **A** and **B** have at least one city **X** (**X≠A** and **X≠B**) in common (note that **X** does not necessarily belong to **S**) - note that this implies that if the city **X** were to be removed from the network, then no path would exist anymore between the cities **A** and **B**

However, the anti-monopoly committee decided that Chef is making too much money and that some restrictions should be imposed. Chef will be allowed to keep a part **P** of the road network that he chooses, provided that:

- there exists exactly one path from any city in **P** to any other city in **P** using only the roads from **P** (this means that the sets of cities and roads from **P** form a tree)
- every city from **P** has **at most 3** roads from **P** adjacent to it

Note that **P** may consist of any subset of the **N** cities and any subset of roads connecting these cities, as long as the two restrictions are satisfied. However, Chef doesn't want to simply pick any part **P** of the road network which satisfies the restrictions. He would like to choose a part **P** for which the total cost of the roads which belong to **P** is **maximum**. Moreover, he would also like to know how many such parts **P** of maximum total cost exist. Two parts **P1** and **P2** are considered different if their subsets of cities are different or if their subsets of roads are different.

### Input

The first line contains the integer number **T** denoting the number of test cases. The description of the **T** test cases follows. The first line of each test case contains the integer numbers **N** and **M**. Each of the next **M** lines contains three space-separated integers: **i, j** and **C(i,j)**, meaning that there is a road between the cities **i** and **j** having cost **C(i,j)**.

### Output

For each test case print a line containing two numbers: **CMAX** and **CNT32**. **CMAX** is the maximum cost of any part **P** which satisfies the restrictions imposed by the anti-monopoly committee. Let **CNT** be the total number of different parts **P** which have maximum cost and satisfy the restrictions. **CNT32** is equal to **CNT modulo 232** (i.e. we are only interested in the remainder of **CNT** when divided by **232**).

### Constraints

- **1** ≤ **T** ≤ **6**
- **1** ≤ **N** ≤ **100**
- **N-1** ≤ **M** ≤ **min(N×(N-1)/2, 450)**
- **1** ≤ **i, j** ≤ **N** (**i≠j**)
- **-10000** ≤ **C(i,j)** ≤ **10000**
- There exists at most one road connecting each pair of different cities.

### Example

<pre><b>Input:</b>
6
6 7
1 3 1
3 5 2
5 1 3
5 2 1
2 4 2
4 6 3
6 5 1
4 4
1 2 0
2 3 0
3 4 0
2 4 0
4 4
1 2 -1
2 3 -2
3 4 -3
2 4 -4
8 7
1 2 1
2 3 1
3 4 1
4 5 -2
5 6 1
6 7 1
7 8 1
8 7
1 2 1
2 3 1
3 4 1
4 5 -3
5 6 1
6 7 1
7 8 1
8 7
1 2 1
1 3 2
1 4 3
1 5 4
1 6 5
1 7 6
1 8 7

<b>Output:</b>
11 2
0 17
0 5
4 1
3 3
18 1
</pre>
### Explanation

**Example case 1.** The maximum cost of a part P which satisfies the restrictions is 11. There are two such maximum cost parts, both of them containing all the cities and the following roads:

- **(1,5), (2,5), (2,4), (3,5), (4,6)**
- **(1,5), (2,4), (3,5), (4,6), (5,6)**

**Example case 2.** All the roads have cost 0, thus the maximum cost of any part P satisfying the restrictions is 0. The 17 different parts are as follows:

- 1 part containing 0 cities
- 4 parts containing 1 city (1 part for each of the 4 cities)
- 4 parts containing 2 cities and the road between them: {1,2}, {2, 3}, {2,4} and {3,4}
- 5 parts containing 3 cities: 
    - cities 1, 2, 3 and the roads (1,2) and (2,3)
    - cities 1, 2, 4 and the roads (1,2) and (2,4)
    - cities 2, 3, 4 and the roads (2,3) and (3,4)
    - cities 2, 3, 4 and the roads (2,3) and (2,4)
    - cities 2, 3, 4 and the roads (2,4) and (3,4)
- 3 parts containing all the 4 cities and the following roads: 
    - (1,2), (2,3), (3,4)
    - (1,2), (2,3), (2,4)
    - (1,2), (2,4), (3,4)

**Example case 3.** The maximum cost part P which satisfies the restrictions does not contain any of the roads. Thus, there are 5 possible ways of choosing P, consisting of the following sets of cities: **{1}, {2}, {3}, {4}, {}**.

**Example case 4.** Chef decides to keep the entire road network, because it satisfies the restrictions and has the maximum total cost among all of its parts.

**Example case 5.** Chef has 3 choices for the maximum cost part (whose cost is 3):

- it can choose the entire road network
- it can choose the cities 1, 2, 3, 4 and the roads (1,2), (2,3), (3,4)
- it can choose the cities 5, 6, 7, 8 and the roads (5,6), (6,7), (7,8)

**Example case 6.** Chef chooses the cities 1, 6, 7, 8 and the roads (1,6), (1,7), (1,8).
