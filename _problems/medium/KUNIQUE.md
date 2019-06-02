---
languages_supported:
    - NA
title: KUNIQUE
category: NA
old_version: true
problem_code: KUNIQUE
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

A sequence of N integers is called K-unique if, when it is split into N/K subsequences of K contiguous elements, each subsequence consists of K distinct integers.

For example, consider this sequence of 6 integers.
(2, 10, 2, 8, 3, 6)

This sequence is 2-unique, because when you split it into 3 subsequences each of 2 contiguous elements as below,
(2, 10), (2, 8), (3, 6),

each subsequence consists of 2 distinct integers.

You are given a sequence of N integers, and a positive integer K. Find a permutation of the sequence that is K-unique.

### Input

The first line contains a single integer T, the number of test cases. T test cases follow. The first line of each test case contains two integers N and K. The next line contains a sequence of N integers ai, where ai is the i-th element of the sequence.

### Output

For each test case, output a single line containing a permutation of the sequence that is K-unique. The elements of the sequence should be separated by a single space. If there are several solutions, output the lexicographically smallest one. If there is no solution, output -1.

### Constraints

- 1 <= T <= 5
- 1 <= N <= 50000
- 1<= K<= N
- N will be divisible by K
- 0 <= ai <= 1000000000

### Example

**Input:**```

3
1 1
42
4 2
4 7 7 7
6 2
2 10 2 8 3 6
<pre>

**Output:**```

42
-1
2 3 2 6 8 10
</pre>