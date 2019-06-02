---
languages_supported:
    - NA
title: RESTEXP
category: NA
old_version: true
problem_code: RESTEXP
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

You own a large local restaurant. Because now it is very popular, you want to expand your restaurant in a neighboring country.

The country consists N cities numbered 1 to N. There are N-1 roads connecting the cities. The country is efficiently organized, so there is exactly one path between every pairs of cities. No road will connect a city to itself.

You want to build new restaurants in some cities. From an amateur survey, for each city i you know its profit index Si, that is the profit you will get if you build a new restaurant in city i.

Initially, you have C chefs in city 1. You have D days to accomplish your expansion. On each day, you may perform exactly one of these options:

- Do nothing.
- Transfer any number of chefs from a city to another city, provided that the two cities are connected by a road.
- Build a new restaurant in a city, provided that there is at least one chef in the city. After that, all chefs in the city cannot be transferred again. You can only build one restaurant per city.


After D days has passed, you get the profit associated with a city if the city has a restaurant. Of course, you want the maximum possible total profit. Arrange your expansion plan in order to maximize your total profit.

### Input

The first line contains three integers N, C, and D. The next line contains a sequence of N integers Si. The next N-1 lines contains two integers ui and vi, where ui and vi are the two cities connected by the i-th road.

### Output

In the first line, output the maximum possible total profit. The next D lines contain your expansion plan. In each of the next D lines, output exactly one of the following (quotes for clarity).

- "**nothing**", if you plan to do nothing on that day.
- "**transfer** a b c", if you plan to transfer c chefs from city a to city b on that day.
- "**build** a", if you plan to build a new restaurant in city a on that day.


If there are several expansion plans that lead to the same maximum profit, you may output any.

### Example

**Input**```

4 2 5
-10 5 2 6
1 2
2 3
2 4
<pre>

**Output**```

11
transfer 1 2 2
transfer 2 4 1
nothing
build 4
build 2
</pre>
### Constraints

- 1 <= N <= 30
- 1 <= C <= 30
- 1 <= D <= 30
- -1000 <= Si <= 1000
- 1 <= ui <= N
- 1 <= vi <= N
- ui != vi
- There is exactly one path between every pair of cities
