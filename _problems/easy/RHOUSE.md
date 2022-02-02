---
languages_supported:
    - NA
title: RHOUSE
category: NA
old_version: true
problem_code: RHOUSE
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

There is a city where people are fond of visiting restaurants. In fact, any building in this town is either a house or a restaurant. There are N buildings in the city and they are conveniently numerated by integer numbers from 1 to N. To move from some building to others there are M two-way roads. Each road connects two buildings. It is possible that there are several roads that connect the same pair of buildings, but there won't be a road that connects a building to itself. Chef wants to make the ways to his restaurants more interesting. To do that he is going to decorate some roads. Each road has its own integer cost of decorating. Some costs may be negative. If the cost is negative Chef will get some reward for decorating this road. Now Chef doesn't have much money so he wants to decorate roads in such a way that from each house, at least one restaurant is reachable using only decorated roads. The total cost of decorated roads should be minimal. So, your task is to help him to calculate the minimal cost of any satisfactory subset. It might be negative if Chef's rewards for decorating some roads are greater than his spent money.

### Input

There first line of input contains an integer T - the number of test cases.
Then T test cases follow. For each test case there will be integers N and M - the number of buildings and the number of roads.
Then a string of N letter follows. I-th symbol of this string is "R" if the corresponding building is a restaurant and "H" if it is a house.
Then there are M lines. Each line consists of three integers - Xi Yi Zi. They describe a road that connects buildings Xi and Yi with the cost of decorating equal to Zi.

### Output

For each test case output the minimal cost of any satisfactory subset of roads.

### Constraints

2&lt;=N&lt;=100000
1&lt;=M&lt;=400000
-20000&lt;=Zi&lt;=20000
Sum over all N in a single input file will not exceed 200000.
Sum over all M in a single input file will not exceed 400000.
It is guaranteed that you can reach every building from any other building.
There is at least one resturant in the city. ### Example

<pre>
<b>Input:</b>

3
3 5
HHR
1 2 3
1 2 5
1 3 10
3 2 -1
3 1 7
2 2
RR
1 2 1
2 1 2
3 3
HRR
1 2 1
1 3 2
2 3 3

<b>Output:</b>
2
0
1
</pre>