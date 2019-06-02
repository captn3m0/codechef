---
languages_supported:
    - NA
title: ADDFRAC
category: NA
old_version: true
problem_code: ADDFRAC
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

You have discovered a new way to add fractions ! Now, the result of adding fractions a/b and c/d is (a + c)/(b + d). Similarly the result of adding 3 fractions a/b, c/d, e/f is (a + c + e)/(b + d + f), and so on. You are given a list of N fractions a\_1/b\_1, a\_2/b\_2,...,a\_N/b\_N. You wonder what for each fraction i is the maximum fraction that you can obtain by adding together some continuous fractions in the list (possibly 1) starting at i ?

For example, let N = 4 and the fractions be 1/1, 4/3, 10/1 and 5/4. The maximum fraction you can obtain by starting at index 1 is 3/1 (1/1 + 4/3 + 10/1). Similarly, the maximum fraction you can obtain by starting at index 2 is 7/2 (4/3 + 10/1). By starting at index 3, the maximum sum you can obtain is 10/1 itself, and by starting at index 4, you can obtain sum 5/4.

### Input : 

The first line contains T the number of test cases. T test cases follow. The first line of each test case contains N. Each of the next N lines contains a fraction given in the form "a\_i/b\_i". A blank line seperates two test cases. ### Output : 

For each test case, output N lines. The ith line contains the maximum fraction you can obtain by adding continuous fractions in the list starting at index i. The numerator and denominator of any fraction you output should have gcd 1. Output a blank line after each test case. ### Sample Input :

<pre>
2
4
1/1
4/3
10/1
5/4

5
1/3
3/1
2/5
5/6
6/5
</pre>
### Sample Output :

<pre>
3/1
7/2
10/1
5/4

1/1
3/1
13/16
1/1
6/5
</pre>
### Constraints : 

<pre>
1 <= T <= 5
1 <= n <= 100000
1 <= a_k,b_k <= 100000
</pre>