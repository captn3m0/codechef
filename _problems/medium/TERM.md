---
languages_supported:
    - NA
title: TERM
category: NA
old_version: true
problem_code: TERM
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

When the Chef is not busy with cooking delicious foods, one of his favorite pastime is to solve mathematical problem. But as you know, he is not very good with programming. So when he fails to solve a problem he usually asks John to write a program that will solve it. 
Recently the chef became interested in finding the expansion of (x1+x2+....+xk)n. Specifically he is more interested in number of terms in it. Being unable to solve the problem he asked John for help. The conversation between John and chef goes as 
Chef: Can you write a program that will calculate f(n,k)= number of terms in (x1+x2+....+xk)n ? 
John: That is a very easy problem. 
Chef: Oh, really? Then calculate the sum over (i=0 to n) (f(i,k)) 
John: That is also an easy problem. 
Chef: Then go finish it. And did I mention that I am calculating modulo a prime number p. 
John: What? 
Chef: Say k=2, n=4, p=3. Then (x1+x2)4 %3 = (x14+4 x13 x2+6 x12 x22+ 4 x1 x23 + x24) %3 = (x14+ x13 x2 + x1 x23 + x24) %3. So if p=3 then f(4,2)=4. 
John: OK, I am doing it. 
As John started to solve the problem he realized it is not that easy. Now he asked you, his best friend, for help. 
As the answer can be quite large print the output modulo 1000003.

### Input

Input file starts with a line containing a number T. T lines follow each describing a test case. Each test case consists of a line containing three space separated integers n, k, p.

### Output

Output T lines, each line containing the Sum over (i=0 to n) f(i,k) for the given prime p modulo 1000003.

### Limit:

1<=T<=10000

0<=n<=10^15

1<=k<=10^15

1<=p<=100

p prime number

### Example

<pre>
<b>Input:</b>
7
10 2 2
10 2 3
10 3 2
10 3 3
4 2 3
3 2 3
0 2 2

<b>Output:</b>
37
42
85
112
12
8
1

</pre>