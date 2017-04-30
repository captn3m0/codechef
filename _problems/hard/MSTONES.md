---
languages_supported:
    - NA
title: MSTONES
category: NA
old_version: true
problem_code: MSTONES
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Once upon a time, there was a Kingdom of Seven Roads. Besides a fancy name, it actually had exactly 7 straight roads. Its residents wanted to keep track of the distances they traveled so they placed milestones along some roads. The roads slowly deteriorated and disappeared but some milestones remained. Archeologists documented remaining milestones and want to reconstruct the kingdom, starting with its main road. Help them by finding the maximum number of collinear milestones.

### Input

The first line contains a single integer T, the number of test cases. The first line of each testcase contains the number of documented milestones N. Following lines give the coordinates (Xi, Yi) of those milestones. Coordinates of all milestones will be different.

### Output

For each test case, output the maximum number of collinear milestones.

### Constraints

- T <= 30
- 1 <= N <= 10 000
- -15 000 <= Xi, Yi <= 15 000

### Example

```

<b>Input:</b>
2

5
0 0
1 0
2 0
1 1
3 1

2
1 1
10 10

<b>Output:</b>
3
2

```