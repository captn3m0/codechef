---
languages_supported:
    - NA
title: TRAVELER
category: NA
old_version: true
problem_code: TRAVELER
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Chef likes to travel very much. He plans some travel routes and wants to know their lengths. He hired you to make these calculations. But be careful, some of the routes are incorrect. There may be some misspelling in city names or there will be no road between some two consecutive cities in the route. Also note that Chef hates to visit the same city twice during his travel. Even the last city should differ from the first. Two consecutive cities in the route should also be different. So you need to check these conditions for the given routes too. 

 You will be given the list of all cities and all roads between them with their lengths. All roads are one-way. Also you will be given the list of all travel routes that Chef plans. For each route you should check whether it is correct and find its length in this case.

### Input

The first line contains positive integer **N**, the number of cities. The second line contains space separated list of **N** strings, city names. All city names are distinct. 

 The third line contains non-negative integer **M**, the number of available roads. Each of the next **M** lines describes one road and contains names **C1** and **C2** of two cities followed by the positive integer **D**, the length of the one-way road that connects **C1** with **C2**. It is guaranteed that **C1** and **C2** will be correct names of two different cities from the list of **N** cities given in the second line of the input file. For each pair of different cities there is at most one road in each direction and each road will be described exactly once in the input file. 

 Next line contains positive integer **T**, the number of travel routes planned by the Chef. Each of the next **T** lines contains positive integer **K** followed by **K** strings, names of cities of the current route. Cities are given in order in which Chef will visit them during his travel. 

 All strings in the input file composed only of lowercase, uppercase letters of the English alphabet and hyphens. Each string is non-empty and has length at most 20. If some line of the input file contains more then one element than consecutive elements of this line are separated by exactly one space. Each line of the input file has no leading or trailing spaces.

### Output

For each travel route from the input file output a single line containing word **ERROR** if the route is incorrect and its length otherwise.

### Constraints

 **1 &lt;= N &lt;= 50 
 0 &lt;= M &lt;= N \* (N - 1) 
 1 &lt;= D &lt;= 20000 
 1 &lt;= T &lt;= 50 
 1 &lt;= K &lt;= 50 
 1 &lt;= length of each string &lt;= 20**

### Example

<pre><b>Input:</b>
5
Donetsk Kiev New-York Miami Hollywood
9
Donetsk Kiev 560
Kiev New-York 7507
New-York Miami 1764
Miami Hollywood 28
Hollywood Miami 30
Miami New-York 1764
Kiev Donetsk 550
Hollywood New-York 1736
New-York Hollywood 1738
13
5 Donetsk Kiev New-York Miami Hollywood
5 Hollywood Miami New-York Kiev Donetsk
3 Donetsk Kiev Donetsk
2 Kyiv New-York
3 New-York Hollywood Miami
2 New-York Miami
3 Hollywood New-York Miami
4 Donetsk Kiev Miami Hollywood
2 Donetsk Hollywood
1 Donetsk
2 Mumbai Deli
6 Donetsk Kiev New-York Miami Hollywood New-York
2 Miami Miami

<b>Output:</b>
9859
ERROR
ERROR
ERROR
1768
1764
3500
ERROR
ERROR
0
ERROR
ERROR
ERROR
</pre>
### Explanation

The 2nd route is incorrect since there is no road from **New-York** to **Kiev**. Note however that inverse road from **Kiev** to **New-York** exists. 
 The 3rd route is incorrect since the first city coincides with the last one. 
 The 4th route is incorrect since there is no city with name **Kyiv** (Probably Chef means **Kiev** but he misspells this word). 
 The 8th route is incorrect since there is no road from **Miami** to **Kiev**. 
 The 9th route is incorrect since there is no road from **Donetsk** to  **Hollywood**. 
 The 10th route is correct. Note that a route composed of exactly one city is always correct provided that city name is written correctly. 
 The 11th route is incorrect since there is no cities with names **Mumbai** and **Deli**. (Probably Chef is not so good in geography :)) 
 The 12th route is incorrect since city **New-York** is visited twice.



Finally the 13th route is incorrect since we have equal consecutive cities.
