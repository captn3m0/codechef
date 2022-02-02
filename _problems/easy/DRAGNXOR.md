---
languages_supported:
    - NA
title: DRAGNXOR
category: NA
old_version: true
problem_code: DRAGNXOR
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Did you ever hear about 'Dragon Food' ? Its used to refer to the chocolates bought for your loved ones :). Po offers dragon food to master Shifu, who is a famous cook in the valley of food. In return, Shifu hands over the dragon scroll to Po, which is said to hold the ingredients of the secret recipe. To open the dragon scroll, one has to solve the following puzzle. 

 1. Consider a N-bit integer A. We call an integer A' as shuffle-A, if A' can be obtained by shuffling the bits of A in its binary representation. For eg. if N = 5 and A = 6 = (00110)2, A' can be any 5-bit integer having exactly two 1s in it i.e., any of (00011)2, (00101)2, (00110)2, (01010)2, ...., (11000)2.

 2. Given two N-bit integers A and B, find the maximum possible value of (A' xor B') where A' is a shuffle-A, B' is a shuffle-B and xor is the bit-wise xor operator.

 Given N, A and B, please help Po in opening the dragon scroll.

 **Notes**
 1. xor operator takes two bit strings of equal length and performs the logical XOR operation on each pair of corresponding bits. The result in each position is 1 if only the first bit is 1 OR only the second bit is 1, but will be 0 if both are 1 or both are 0. For eg: 5 (0101) xor 3(0011) = 6(0110). In most languages it is represented using ^ symbol. 5 ^ 3 = 6.
 2. If the integer actually needs less than N bits to represent in binary, append sufficient number of leading 0 bits. For eg. as shown in the problem statement for N = 5, A = 6 = (00110)2

### Input

First line contains an integer T ( number of test cases, around 100 ). T cases follow, each having N A B in a single line, separated by a space. ( 1 &lt;= N &lt;= 30, 0 &lt;= A,B &lt; 2N )

### Output

For each case, output the maximum possible value of (shuffle-A xor shuffle-B) in a separate line.

### Example

<pre><b>Input:</b>
3
3 5 4
5 0 1
4 3 7


<b>Output:</b>
7
16
14
</pre>

 **Explanation:**

Case 1: 5 and 4 as 3-bit binary strings are (101)2 and (100)2 respectively. After shuffling, xor can be maximum for (110)2 ^ (001)2 = (111)2 = 7
 Case 2: Maximum Possible result can be for (00000)2 ^ (10000)2 = (10000)2 = 16
 Case 3: Maximum Possible result can be for (0011)2 ^ (1101)2 = (1110)2 = 14
