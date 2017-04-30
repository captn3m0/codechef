---
languages_supported:
    - NA
title: FCTRL
category: NA
old_version: true
problem_code: FCTRL
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

The most important part of a GSM network is so called _Base Transceiver Station_ (_BTS_). These transceivers form the areas called _cells_ (this term gave the name to the cellular phone) and every phone connects to the BTS with the strongest signal (in a little simplified view). Of course, BTSes need some attention and technicians need to check their function periodically.

The technicians faced a very interesting problem recently. Given a set of BTSes to visit, they needed to find the shortest path to visit all of the given points and return back to the central company building. Programmers have spent several months studying this problem but with no results. They were unable to find the solution fast enough. After a long time, one of the programmers found this problem in a conference article. Unfortunately, he found that the problem is so called "Traveling Salesman Problem" and it is very hard to solve. If we have N BTSes to be visited, we can visit them in any order, giving us N! possibilities to examine. The function expressing that number is called factorial and can be computed as a product 1.2.3.4....N. The number is very high even for a relatively small N.

The programmers understood they had no chance to solve the problem. But because they have already received the research grant from the government, they needed to continue with their studies and produce at least _some_ results. So they started to study behavior of the factorial function.

For example, they defined the function Z. For any positive integer N, Z(N) is the number of zeros at the end of the decimal form of number N!. They noticed that this function never decreases. If we have two numbers N1<N2, then Z(N1) <= Z(N2). It is because we can never "lose" any trailing zero by multiplying by any positive number. We can only get new and new zeros. The function Z is very interesting, so we need a computer program that can determine its value efficiently.

### Input

There is a single positive integer T on the first line of input (equal to about 100000). It stands for the number of numbers to follow. Then there are T lines, each containing exactly one positive integer number N, 1 <= N <= 1000000000.

### Output

For every number N, output a single line containing the single non-negative integer Z(N).

### Example

Sample Input:

`<tt>6<br></br>3<br></br>60<br></br>100<br></br>1024<br></br>23456<br></br>8735373<br></br></tt>`Sample Output:

`<tt>0<br></br>14<br></br>24<br></br>253<br></br>5861<br></br>2183837<br></br></tt>`