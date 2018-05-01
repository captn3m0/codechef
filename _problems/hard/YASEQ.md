---
languages_supported:
    - NA
title: YASEQ
category: NA
old_version: true
problem_code: YASEQ
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

You are given the first N terms of a sequence. The remaining terms of the sequence are defined as follows:

> A \[ i \] = number of j such that 0 ≤ j < i and A\[ j \] ≥ i - j

The sequence is indexed starting at 0. The first N terms of the sequence will each be equal to N-1, N, or N+1. In addition to the first terms of the sequence, you will be given a number of queries. For each query you are to calculate the value of the sequence at that index.

### Input

Input will begin with an integer T, the number of test cases. Each test case begins with 2 integers N and Q on a line, followed by a line with N integers (each equal to N-1, N, or N+1), then a line with Q non-negative integers.

### Output

For each test case, output Q integers on a line, one per query, indicating the respective element of the sequence.

### Sample Input

<pre>3

3 4
3 3 3
100 1000 1000000 1

4 11
3 4 4 5
0 1 2 3 4 5 6 7 8 9 10

5 4
5 6 5 6 5
6 14 22 29
</pre>### Sample Output

<pre>3 3 3 3
3 4 4 5 3 4 4 4 4 4 4
5 5 5 5
</pre>### Constraints

- T≤100
- 0<N≤100000
- 0<Q≤100000
- Each query will be between 0 and 10^15, inclusive
- The sum of N+Q over all test cases will not exceed 500000

_Warning: Large input/output._
