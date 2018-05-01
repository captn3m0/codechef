---
languages_supported:
    - NA
title: DIGITS2
category: NA
old_version: true
problem_code: DIGITS2
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Chef has called on you many times in the past to solve unusual tasks that seem irrelevant to cooking, and today is no different. Today Chef demands that you find integers whose product of digits is equal to a given integer, but in bases besides 10. Given a string S, you are to determine the smallest positive integer I such that there exists a base B>1 for which the product of the digits of I gives the integer represented by S. For example, if S="11", then the smallest I is 8, because the base 3 representation of I is 22, and in base 3 2\*2=11.

Formally, your task is this: find the smallest integer I such that there exists an integer B>1 and integers Ai for which:

- An\*Bn+An-1\*Bn-1+...+A1\*B+A0 = I
- 0≤Ai<B for all i
- An≠0
- An\*An-1\*...\*A1\*A0 = Sm\*Bm+Sm-1\*Bm-1+...+S1\*B1+S0, where Sm is the leftmost character of S, and S0 is the rightmost character of S.
- 0≤Si<B for all i

### Input

Input begins with an integer T, the number of test cases (at most 50). Each test case consists of a single line containing a string S comprised of 0-9 and A-Z characters. Characters A-Z represent the decimal values 10-35, respectively. S will have between 1 and 4 characters, and the first character will not be 0.

### Output

For each test case, output a single integer on a line, giving the minimum value of I (printed in decimal). It is guaranteed that I will fit in a 64-bit integer.

### Sample Input

<pre>4
9
11
7Q2
PIES
</pre>### Sample Output

<pre>9
8
15227
7845414
</pre>