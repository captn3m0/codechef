---
languages_supported:
    - NA
title: SEEDS
category: NA
old_version: true
problem_code: SEEDS
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

The Chef has decided to take a break from the restaurant. Rather than sitting on some boring tropical beach for hours on end, he has decided to join an archaeological dig. His latest discovery is an ancient tablet containing a list of numbers that seem to fit some pattern. At the top of the list are d numbers a0, ..., ad-1, each of which is either 0 or 1. The rest of the list is only partially readable, but it seems to contain an extremely long list of 0/1 numbers x0, x1, ...

Only some of the xi values are readable and the rest are too damaged to make out. The Chef conjectures that these numbers fit the following pattern. For any number n ≥ 0, the Chef conjectures that xn+d = a0xn + ... + ad-1xn+d-1. Because of the nature of this pattern, he is calling the first d integers x0, ..., xd-1 the "seeds". Finally, this ancient civilization appears to be only concerned about whether a number is odd or even. Because of this, his conjecture is that the numbers fit the previous pattern when all results are reduced modulo 2.

Your job is to help the Chef determine the validitiy of his conjecture. Specifically, you are to determine if there is a way to assign either a 0 or a 1 to all unreadable xi entries so that the pattern holds. If so, you must determine if there is more than one way to do this or if there is exactly one way to do this. If there is exactly one way, you must specify the values of the "seeds".

### Input

The first line contains a single integer indicating the number of test cases to follow (at most 50). Each test case begins with two integers d and k. The next line contains the d values a0, ..., ad-1 that are written at the top of the tablet. Finally, k lines follow where the j'th line contains two integers i(j) and x(j). This specifies the value of the readable number xi(j). The ij values will appear in strictly increasing order.

Bounds: Both d and k are between 1 and 20. All values ai and xi(j) are either 0 or 1. Finally, each index i(j) is between 0 and 231-1.

### Output

The output for each test case is a single line containing one of three messages. If there is no way to fill in the missing values xi so that the pattern holds, then you should output "no solutions". If there are multiple ways to assign values to the missing xi so that the pattern holds, then output "multiple solutions".

Finally, if there is only one way to assign values to the missing xi values, then you should output a line containing the d values x0, ..., xd-1 with a single space between consecutive numbers. Since these values are calculated modulo 2, then they are either 0 or 1.

### Example

```
<b>Input:</b>
3
2 2
1 1
0 0
2 1
2 2
1 1
0 0
3 0
2 2
1 0
0 0
2 1

<b>Output:</b>
0 1
multiple solutions
no solution


```