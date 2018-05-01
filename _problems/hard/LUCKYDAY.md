---
languages_supported:
    - NA
title: LUCKYDAY
category: NA
old_version: true
problem_code: LUCKYDAY
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Chef Ciel defined a sequence **S** as follows:
 **S**\[1\] = **A**
 **S**\[2\] = **B**
 **S**\[**i**\] = (**X**\***S**\[**i**-1\] + **Y**\***S**\[**i**-2\] + **Z**) mod **P**, for **i** >= 3

Ciel considers **C** is a lucky number, and the **i**-th day is a lucky day if and only if **S**\[**i**\] = **C**. Ciel's restaurant may have special events in a lucky day.

By the way, your work is calculating the numbers of lucky days in intervals. That is, for each **Q** intervals \[**L**\[**i**\], **R**\[**i**\]\], you should calculate the number of the integers **k** which satisfy **L**\[**i**\] <= **k** <= **R**\[**i**\] and **S**\[**k**\] = **C**.

### Input

The first line contains an integer **T**, the number of test cases. Then **T** test cases follow. The first line for each test case has 8 integers **A**, **B**, **X**, **Y**, **Z**, **P**, **C** and **Q**. The next **Q** lines have 2 integers **L**\[**i**\] and **R**\[**i**\].

### Output

For each interval, print the number of lucky days in the interval.

### Constraints

1 <= **T** <= 2
 2 <= **P** <= 10007
 **P** is a prime.
 0 <= **A**, **B**, **X**, **Y**, **Z**, **C** < **P**
 1 <= **Q** <= 20000 (2\*10^4)
 1 <= **L**\[**i**\] <= **R**\[**i**\] <= 1000000000000000000 (10^18)

### Sample Input

<pre>2
1 1 1 1 0 2 0 6
1 1
2 2
3 3
4 4
5 5
6 6
1 2 4 5 3 17 4 3
5 8
5 58
58 5858
</pre>### Sample Output

<pre>0
0
1
0
0
1
0
4
362
</pre>### Output details

In the first case:
 **S**\[1\] = **A** = 1
 **S**\[2\] = **B** = 1
 **S**\[3\] = (**S**\[2\] + **S**\[1\]) mod 2 = (1 + 1) mod 2 = 0
 **S**\[4\] = (**S**\[3\] + **S**\[2\]) mod 2 = (0 + 1) mod 2 = 1
 **S**\[5\] = (**S**\[4\] + **S**\[3\]) mod 2 = (1 + 0) mod 2 = 1
 **S**\[6\] = (**S**\[5\] + **S**\[4\]) mod 2 = (1 + 1) mod 2 = 0
 **S**\[7\] = (**S**\[6\] + **S**\[5\]) mod 2 = (0 + 1) mod 2 = 1
