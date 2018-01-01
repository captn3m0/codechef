---
languages_supported:
    - NA
title: TSPAGAIN
category: NA
old_version: true
problem_code: TSPAGAIN
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

There are N cities numbered from 0..N-1. A salesman is located at city 0. He wishes to visit all cities exactly once and return back to city 0. There are K toll booths. Each toll booth has a certain range of functioning. The parameters for toll k are given as x\_k and y\_k. If the salesman travels from city i to j, he has to pay 1 dollar toll fee to each toll p having x\_p >= i and y\_p <= j. Calculate the cheapest way for the salesman to complete his tour.

### Input : 

The first line contains T the number of test cases. T test cases follow. The first line of each test case contains two space seperated integers N and K. Each of the next K lines contains 2 integers, the ith line containing x\_i and y\_i (0 <= x\_i,y\_i < N). A blank line seperates two test cases. ### Output : 

Output T lines, one for each test case, containing the required answer. ### Sample Input :

<pre>
2
3 2
2 0
0 2

3 4
1 0
2 1
0 1
1 2


</pre>### Sample Output :
<pre>
3
6


</pre>### Constraints :
<pre>
1 <= T <= 50
2 <= n <= 1000
1 <= K <= 10000

</pre>