---
languages_supported:
    - NA
title: TRIP
category: NA
old_version: true
problem_code: TRIP
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

You are starting out on a long (really long) trip. On the way, there are N gas stations, the locations of which are given as a\_1,a\_2,...,a\_N. Initially you are located at the gas station at a\_1, and your destination is at location a\_N. Your car can only store enough fuel to travel atmost M units without refilling. You can stop at any station and refill the car by any amount. Now you wish to plan your trip such that the number of intermediate stops needed to reach the destination is minimum, and also how many ways are there to plan your trip accordingly.

### Input : 

The first line two space seperated integers N and M. N lines follow, and the ith line has the value a\_i (0 &lt;= a\_i &lt;= 1000000000). The input will be such that a solution will always exist. ### Output : 

Output two space seperated integers : The least number of stops, and the number of ways to plan the trip which uses the least number of stops. Output this value modulo 1000000007. ### Sample Input :

<pre>
6 3
0
1
3
4
7
10
</pre>
### Sample Output :

<pre>
3 2
</pre>
### Constraints :

<pre>
2 <= N <= 1000000
1 <= M <= 1000
a_1 < a_2 < .. < a_N

</pre>