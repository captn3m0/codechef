---
languages_supported:
    - NA
title: FLIPCOIN
category: NA
old_version: true
problem_code: FLIPCOIN
tags:
    - NA
layout: problem
---
There are N coins kept on the table, numbered from 0 to N - 1. Initally, each coin is kept tails up. You have to perform two types of operations :

1\) Flip all coins numbered between A and B. This is represented by the command "0 A B"

2\) Answer how many coins numbered between A and B are heads up. This is represented by the command "1 A B".

Input :

The first line contains two integers, N and Q. Each of the next Q lines are either of the form "0 A B" or "1 A B" as mentioned above.

Output :

Output 1 line for each of the queries of the form "1 A B" containing the required answer for the corresponding query.

`Sample Input :<br></br>4 7<br></br>1 0 3<br></br>0 1 2<br></br>1 0 1<br></br>1 0 0<br></br>0 0 3<br></br>1 0 3 <br></br>1 3 3<br></br><br></br>``Sample Output :<br></br>0<br></br>1<br></br>0<br></br>2<br></br>1<br></br><br></br>``Constraints :<br></br>1 <= N <= 100000<br></br>1 <= Q <= 100000<br></br>0 <= A <= B <= N - 1<br></br>`
