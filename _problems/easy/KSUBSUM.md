---
languages_supported:
    - NA
title: KSUBSUM
category: NA
old_version: true
problem_code: KSUBSUM
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Did you know that the Hindus believe there are 330 million deities ? Lets discuss about them in long contests. The three main forces of god Brahma, Vishnu and Mahesh, also called Trimurti ( 3 forms ), want to decide when to end the world. Given an array A, which contains the 'Good' ( or 'Evil' ) score of each place on earth, they can easily find the maximum sum of the scores of a (contiguous) sub-array of places. But this is not much useful to them. So, *each* of them gives a value K and want to know the Kth maximum sum of scores of a contiguous sub-array. In other words, find the value of S\[K\] (1-based index), where the array S contains the sums of all possible contiguous sub-arrays in non-increasing order.

### Input

First line contains T, number of test cases. T cases follow. In each test case, first line contains N K1 K2 K3. Next line contains N space separated integers.

### Output

For each test case, output the K1th, K2th and K3th maximum sum in a single line, separated by a single space. See sample cases and explanation for more clarity.

### Constraints

1 ≤ T ≤ 3
2 ≤ N ≤ 10000
1 ≤ K1 < K2 < K3 ≤ 2012
K3 ≤ N\*(N+1)/2
-10000 ≤ A\[i\] ≤ 10000

### Example

<pre>
<b>Input:</b>
3
3 1 2 3
10 20 30
3 3 4 6
10 20 30
4 2 6 10
20 -15 10 -15

<b>Output:</b>
60 50 30
30 30 10
15 -5 -20
</pre>

**Explanation:**
Case 1 & 2 : A = { 10, 20, 30 }. All possible sums of sub-arrays in non-increasing order, S\[1..6\] = { 60, 50, 30, 30, 20, 10 }


***Warning :** "Large input / output. Be careful with certain languages. Eg: Prefer using scanf/printf to cin/cout for C++"*

***Note :** There are multiple test sets, and the judge shows the sum of the time taken over all test sets of your submission, if Accepted.*
