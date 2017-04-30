---
languages_supported:
    - NA
title: ACMKANPB
category: NA
old_version: true
problem_code: ACMKANPB
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

  <a id="x1-3r2" name="x1-3r2"></a> B  Bonus  Input file: stdin Output file: stdout  

  

    

Kinku is a project manager in his company. Recently, the executives decided to give bonus to everyone in his team, so Kinku was asked to give a list to them how much bonus each should get.

To do this, he selected some pairs of members, and analyzed who should get more bonus, and how more much he should get (at least). That is, if employee Tom is better than Jerry, and Tom should get at least 300$ more than Jerry, then, if Jerry gets 650$ bonus, Tom has to get atleast 950$ bonus. It should also be noted that, every one will get at least a minimum, no one will go empty handed.

Given all the comparisons, you have to find the minimum total bonus to be divided among the employees.

Input

First line contains T, the number of test cases.

Each test case starts with three integers N(1 ≤ N ≤ 100), M(0 ≤ M ≤![N-×(N−1) 2](/download/problemset0x.png)) and L(1 ≤ L ≤ 10000), the number of employees, number of comparisons and minimum bonus. Next M lines each contains three integers, i, j(1 ≤ i, j ≤ N and c(0 ≤ c ≤ 1000), referring that employeei should get at least c$ more than employeej .

Output

For each test case, output the minimum total bonus on the first line, and the bonus given to each employee in the next line.

If comparisons are inconsistent, and it’s not possible distribute bonus among them, output “Inconsistent analysis.”(without quotes).

Sample input and output

 - - - - - -

 - - - - - -

  stdin 

   stdout 

  - - - - - -

 - - - - - -

 2

4 4 100

1 2 10

2 3 20

1 3 40

2 4 5

3 3 100

1 2 10

2 3 10

3 1 10

 

  460

140 120 100 100

Inconsistent analysis.

 

  - - - - - -

 - - - - - -