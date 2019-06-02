---
languages_supported:
    - NA
title: VOTING
category: NA
old_version: true
problem_code: VOTING
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

You have just begun his job with Educated Guessing Pollsters. An election is only weeks away and the company would like to get a general idea of how the voters feel about the candidates. They asked a (probably not) random subset of N voters to submit a ranking of the M candidates. Say the candidates are numbered from 1 to M. A ranking is then a permutation of the set {1,2,...,M} listed as:

c\_1 c\_2 ... c\_M

The list is such that the voter prefers candidate c\_i to candidate c\_j if i > j. Your task is to determine a ranking R = r\_1, r\_2, ..., r\_M such that the total number of disagreements with all voters who were polled is minimized.

More precisely, for a voter V we say the distance d(V,R) between voter V and ranking R is precisely the number of pairs (i,j) with 1 <= i < j <= M such that V actually prefers candidate r\_i over candidate r\_j. Say there are N voters labeled V\_1, V\_2, ..., V\_n. The task is then to find a ranking R such that the sum

d(V\_1, R) + d(V\_2, R) + ... + d(V\_n, R)

is minimized.

### Input:

The first line of input consists of a single integer T 25 indicating the number of test cases to follow. Each test case begins with two integers N and M on a single line where N represents the number of voters and M represents the number of candidates. The following N lines contain th e rankings of the voters, one per line.

Each ranking is given as a permutation c\_1, c\_2, ..., c\_M of the numbers 1,2,...,M where consecutive numbers are separated by a space. In this ranking, c\_i is preferred over c\_j by precisely when i > j.

A blank line appears between test cases (including a blank line just before the first test case).

The bounds are 1 <= N <= 1000 and 1 <= M <= 15.

### Output:

Each test case has a single line of output of the following form: D: r\_1 r\_2 ... r\_M

Where D is the sum of the distances between the optimum ranking and the input rankings and r\_1, r\_2, ..., r\_M is a ranking of the same form as the input rankings that achieves this minimum distance. If there are multiple such orderings, then output the one that minimizes r\_M. Among those that minimize r\_M, you should output the one that minimizes r\_{M-1} and so on.

### Example:

### Input:

<pre>
2

2 3
1 2 3
1 2 3

4 3
1 2 3
2 1 3
1 2 3
3 2 1
</pre>
### Output:

<pre>
0: 1 2 3
4: 2 1 3
</pre>
(note that in the second case that the ranking 1 2 3 also has total distance 4, but 2 1 3 is output based on the rules outlined in the output specification)
