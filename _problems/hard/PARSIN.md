---
languages_supported:
    - NA
title: PARSIN
category: NA
old_version: true
problem_code: PARSIN
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Chef Ciel is participating an arithmetic contest now. Why? Because of the top prize for the contest, a limited edition toaster oven.

She must calculate the values **f**(**M**, **N**, **X**) of function named *sine partition function* to be the first place. The sine partition function **f**(**M**, **N**, **X**) is defined by

![](http://www.codechef.com/download/PARSIN.png)Examples are following:

 **f**(1, 3, **X**) = sin(3**X**)

 **f**(2, 3, **X**) = sin(0) sin(3**X**) + sin(**X**) sin(2**X**) + sin(2**X**) sin(**X**) + sin(3**X**) sin(0) = 2 sin(**X**) sin(2**X**)

 **f**(3, 1, **X**) = sin(0) sin(0) sin(**X**) + sin(0) sin(**X**) sin(0) + sin(**X**) sin(0) sin(0) = 0

Ciel is a great chef, however she is not good at arithmetic. For given **M**, **N** and **X**, your work is calculating the value of **f**(**M**, **N**, **X**).

### Input

The first line contains an integer **T**, the number of test cases. Then **T** test cases follow. Each test case has 2 integers **M**, **N** and a real number **X**. **X** has at most two digits after the decimal point.

### Output

For each test case, print the value of **f**(**M**, **N**, **X**). This value must have an absolute or relative error no more than 10^-1. You can safely assume the magnitude of the answer is at most 10^300.

### Constraints

1 <= **T** <= 10
1 <= **M** <= 30
1 <= **N** <= 1000000000 (10^9)
0 <= **X** <= 6.28 < 2\*PI

### Sample Input

<pre>5
1 3 1.57
2 3 0
3 1 2.12
1 1 5
1 30 0.3
</pre>
### Sample Output

<pre>-0.99999714638
0
0
-0.959
0.412
</pre>