---
languages_supported:
    - NA
title: NETWORK
category: NA
old_version: true
problem_code: NETWORK
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

A wireless network has been built consisting of many wireless access points for computers. Each access point can support a certain number of computers, and the network will perform better when computers are close to the access points supporting them. Specifically, the greatest distance between any computer and its access point determines the strength of the network. A network has recently been designed that will automatically reconfigure itself every time a computer is added so that the greatest distance will be as small as possible. Your task is to compute, as each computer is added to the network, this distance.

Consider the following example:
 There are 2 access points, at (5,5) and (6,9), each of which can support 2 computers. The first computer to be added to the wireless network is at (3,5). This computer connects to the access point at (5,5), which is only a distance of 2 away. The next computer to be added is at (5,2). This computer also connects to the access point at (5,5), and the greatest distance is now 3. A third computer is added at (4,2). This computer cannot connect to the (5,5) access point because it has already reached its limit. But connecting to (6,9) is not a good choice either because its so far away. Instead, the network reassigns the (3,5) computer to the (6,9) access point so that the new computer can connect to the (5,5) access point. The greatest distance is now from the (3,5) computer to the (6,9) access point, which is 5. (Note: in the picture below, the top-left corner is (0,0)).

![](/download/july11-network.gif)

### Input

Input begins with an integer T, the number of test cases to follow. Each test case begins with a line containing 2 integers, S (the number of access points) and C (the number of computers). S+C lines follow. The first S lines contain 3 integers each, giving the coordinates of an access point, followed by the number of connections it can support. The next C lines contain 2 integers each, giving the coordinates of a computer. There is a blank line before each test case.

### Output

For each test case, output C lines, where the i'th line contains the greatest distance in the network after the first i computers have been added to the network, rounded to 3 decimal places. Output a blank line after each test case.

### Sample Input

<pre>3

2 3
5 5 2
6 9 2
3 5
5 2
4 2

2 4
3 6 2
10 9 2
2 5
3 8
4 3
6 4

2 1
10 5 1
6 8 1
3 3
</pre>### Sample Output
<pre>2.000
3.000
5.000

1.414
2.000
7.071
7.071

5.831
</pre>### Constraints
T is between 1 and 15, inclusive.
 S is between 1 and 30, inclusive.
 Each access point supports between 1 and 30 connections, inclusive.
 C is between 1 and the total number of supported connections, inclusive.
 All coordinates comprise integers between 0 and 10000, inclusive.
 All coordinates are distinct.
