---
languages_supported:
    - NA
title: RESN01
category: NA
old_version: true
problem_code: RESN01
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

**Problem statement updated.**

You are given a cyclic array A having N numbers. In an AND round, each element of the array A is replaced by the bitwise AND of itself, the previous element, and the next element in the array. All operations take place simultaneously. Can you calculate A after K such AND rounds ?

### Input

The first line contains the number of test cases T (T <= 50). There follow 2T lines, 2 per test case. The first line contains two space seperated integers N (3 <= N <= 20000) and K (1 <= K <= 1000000000). The next line contains N space seperated integers Ai (0 <= Ai <= 1000000000), which are the initial values of the elements in array A.

### Output

Output T lines, one per test case. For each test case, output a space seperated list of N integers, specifying the contents of array A after K AND rounds.

### Example

<pre><b>Input:</b>
2
3 1
1 2 3
5 100
1 11 111 1111 11111
<b>Output:</b>
0 0 0
1 1 1 1 1
</pre>