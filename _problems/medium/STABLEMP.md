---
languages_supported:
    - NA
title: STABLEMP
category: NA
old_version: true
problem_code: STABLEMP
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

There are given _n_ men and _n_ women. Each woman ranks all men in order of her preference (her first choice, her second choice, and so on). Similarly, each man sorts all women according to his preference. The goal is to arrange _n_ marriages in such a way that if a man _m_ prefers some woman _w_ more than his wife, and _w_ prefers _m_ more then her husband a new marriage occurs between _w_ and _m_. If _w_ prefers her husband more, then she stays married to him. This problem always has a solution and your task is to find one.

### Input

The first line contains a positive integer _t_<=100 indicating the number of test cases. Each test case is an instance of the stable marriage problem defined above. The first line of each test case is a positive integer _n_<=500 (the number of marriages to find). The next _n_ lines are the woman's preferences: _i_th line contains the number _i_ (which means that this is the list given by the _i_th woman) and the numbers of men (the first choice of _i_th woman, the second choice,...). Then, the men's preferences follow in the same format.

### Output

For each test case print _n_ lines, where each line contains two numbers _m_ and _w_, which means that the man number _m_ and the woman number _w_ should get married.

### Example

<pre><b>Input:</b>
2
4
1 4 3 1 2
2 2 1 3 4
3 1 3 4 2
4 4 3 1 2
1 3 2 4 1
2 2 3 1 4
3 3 1 2 4
4 3 2 4 1
7
1 3 4 2 1 6 7 5
2 6 4 2 3 5 1 7
3 6 3 5 7 2 4 1
4 1 6 3 2 4 7 5
5 1 6 5 3 4 7 2
6 1 7 3 4 5 6 2
7 5 6 2 4 3 7 1
1 4 5 3 7 2 6 1
2 5 6 4 7 3 2 1
3 1 6 5 4 3 7 2
4 3 5 6 7 2 4 1
5 1 7 6 4 3 5 2
6 6 3 7 5 2 4 1
7 1 7 4 2 6 5 3



<b>Output:</b>
1 3
2 2
3 1
4 4
1 4
2 5
3 1
4 3
5 7
6 6
7 2


</pre>**Warning: large Input/Output data, be careful with certain languages**