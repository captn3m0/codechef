---
languages_supported:
    - NA
title: SNCK03
category: NA
old_version: true
problem_code: SNCK03
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

`<br></br><b>[Problem Idea : Varun Jalan]</b>`You are given K indices, A\[1\], A\[2\], ... , A\[K\].

A\[1\] < A\[2\] < ... < A\[K\].

A\[1\] = 1 and A\[K\] = N.

A permutation of the numbers between 1 and N is called valid if :

The numbers in the permutation between indices A\[1\] and A\[2\] (inclusive) form an increasing sequence, the numbers in the permutation between indices A\[2\] and A\[3\] (inclusive) form a decreasing sequence, those between A\[3\] and A\[4\] (inclusive) form an increasing sequence and so on.

Count the number of valid permutations.

### Input:

There will be multiple test cases. The first line contains the number of test cases T. There follow 2\*T lines, 2 lines for each test case. The first line for each test case contains the numbers N and K. The second line contains K space seperated numbers, ie. A\[1\] to A\[K\].

### Output:

Output T lines, one for each test case. All answers should be output modulo 1000000007.

### Constraints :

T <= 111

2 <= N <= 20000

2 <= K <= 22

K <= N

A\[1\] < A\[2\] < ... < A\[K\].

A\[1\] = 1 and A\[K\] = N.

Time Limit : 20 seconds.

### Sample Input :

<pre>3
3 3
1 2 3
4 3
1 3 4
10 6
1 2 5 7 8 10
</pre>### Sample Output :

<pre>2
3
6166
</pre>### Note :

For the first test case,

(1 3 2) and (2 3 1) are the valid permutations.

For the second test case,

(1 2 4 3), (1 3 4 2) and (2 3 4 1) are the valid permutations.
