---
languages_supported:
    - NA
title: LIGHTING
category: NA
old_version: true
problem_code: LIGHTING
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

The exciting World Cup 2010's summer is coming! And Johnny's family shop is busy preparing a colorful lighting board for the summer.

The board has a rectangular shape of size M x N. There are certain positions on the board which Johnny wants to put in light bulbs.

Johnny wants to decorate the board by colorful light bulbs. To make the board look attractive, he wants the bulbs in the same column or row to have different colors! On the other hand, to preserve the harmony look, Johnny doesn't want the bulbs to have many different colors.

Write a program to help Johnny decorate the boards in such a way that the number of color used is minimum.

### Input

The first line contains a number t (about 15), the number of test cases. Each test case has the following form.

The first line contains two numbers m, n (1 &lt;= m, n &lt;= 700). Each line in the next m lines contains n characters '0' or '1' representing the board, in which '1' denotes a place which Johnny wants to put in a light bulb.

Each test case's input is separated by a blank line.

### Output

For each test case, print the output in the following format.

The first line contains a number p which is the minimum number of used colors.

The ith line in the next m lines contain n integers, in which the jth number is the color index of the light bulb in the corresponding place, or 0 if the place does not need a light bulb. The colors are numbered from 1 to p. Your program can print any correct solution.

Print a blank line after each test case's output.

### Example

<pre><b>Input</b>
1

4 4
1001
1101 
1011
1001

<b>Output</b>
4
1 0 0 2 
2 1 0 3 
3 0 1 4 
4 0 0 1 
</pre>