---
category_name: hard
problem_code: MONOPLOY
problem_name: 'Gangsters of Treeland'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: utkarsh_lath
problem_tester: null
date_added: 26-06-2013
tags:
    - medium
    - nov13
    - utkarsh_lath
editorial_url: 'http://discuss.codechef.com/problems/MONOPLOY'
time:
    view_start_date: 1384162200
    submit_start_date: 1384162200
    visible_start_date: 1384162200
    end_date: 1735669800
    current: 1493556780
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [ Mandarin Chinese ](http://www.codechef.com/download/translated/NOV13/mandarin/MONOPLOY.pdf) and [ Russian](http://www.codechef.com/download/translated/NOV13/russian/MONOPLOY.PDF).

Treeland is a kingdom consisting of **N** cities labelled 0, **1**, **2**, ... **N-1**. There are **N-1** roads connecting these cities such that each pair of cities is connected by a unique path(forming a tree structure). Needless to say, city 0 is the **capital** of Treeland. Initially, each city is controlled by a different gangster. The citizens are allowed to move from any city to any of its adjacent city. However, if the two cities are controlled by different gangsters, they need to pay unit cost in order to move. The distance between any pair u, v of cities denoted by **dist(u,v)** is defined as the minimum cost a person has to pay to go from **u** to **v**(or v to u).

Every year, a new gangster emerges in the capital. As always, the gangster will wish to expand his territory. To do so, he will choose a city **u**, and march with his gangster army from the **capital** to **u**(along the tree path). All the cities they encounter(including **capital** and **u**) will be forciby occupied by this gangster. Because of this, distance between many cities can potentially change, which makes the people mad. Therefore, they will come to you for help.

Given a city u, they will ask you evaluate

 **f(u) = avgx in subtree rooted at u(including u) dist(capital, x)**

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains a single integer **N** denoting the number of cities in Treeland. The next **N-1** lines contain two space-separated integers **Ai**, **Bi** denoting the **ith** road is between cities Ai and .Bi.

The next line contains **Q**, the number of queries. The next **Q** lines each contain a character **t** and an integer  **u** .

If **t='O'**, it means a new gangster has marched from capital to u, Occupying all cities along the path.

If **t='q'**, it means you have to report **f(u)**

### Output

12. For each test case, for each query of type 'q', output a single line containing the value of  **f(u)** . Answers correct upto 6 places after decimal are acceptable.
### Constraints

- **1** ≤ **T** ≤  **15**
- **1** ≤ **N** ≤  **100000**
- **1** ≤ **Q** ≤  **100000**
- The sum of value of N over all test cases will be no more than 200000.
- The sum of value of Q over all test cases will be no more than 200000.

### Example

<pre><b>Input:</b>
1
13
0 1
0 2
1 11
1 10
1 9
9 12
2 5
5 8
2 4
2 3
4 6
4 7
7
q 0
O 4
q 6
q 2
O 9
q 9
q 2

<b>Output:</b>
2.0000000000
1.0000000000
0.8571428571
0.5000000000
1.8571428571

</pre>
### Explanation

 Initially, distance of each city from capital is equal to the number of edges on the shortest path, because each city is controlled by a different gangster.
Therefore, value of f(0) is (0+1+1+2+2+2+3+2+2+3+2+3+3)/13 = 2.
After performing 'O 4', cost of the edges (0,2) and (2,4) become 0. The cost of all other edges remains same. Therefore, f(6) becomes 1.
