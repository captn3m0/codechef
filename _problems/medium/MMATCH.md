---
languages_supported:
    - NA
title: MMATCH
category: NA
old_version: true
problem_code: MMATCH
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

There is a school trip being organized for kids. The hotel the group is staying in can offer them one big room with enough beds to suit any group of visitors, and several smaller rooms with B beds alltogether. The children have heard many strange and frightening stories about the big room. That's why not even one of them wants to sleep in the big room. Furthermore not every kid would like to sleep in any bed. 

Your goal is to assign B beds from the smaller rooms in such a way that the maximal number of children are happy (a child is happy when it gets to sleep in one of the beds it has selected).

### Input

The first line contains a positive integer t<=1000 indicating the number of test cases. Each test case is an instance of the problem defined above. The first line of each test case is a pair of positive integers L and B (the number of children L<=100 and beds B<=100). The next lines contain a sequence of (c,b) pairs ending with two zeros. (c,b) means that the child c will be happy if it gets to sleep in bed b.

### Output

For each test case print the maximal number of happy children.

### Example

```

<b>Input:</b>
3
3 3
1 1
2 1
2 2
3 2
3 3
0 0
4 3
1 1
1 3
2 1
3 1
3 2
4 2
0 0
4 2
1 1
1 2
2 1
2 2
3 1
3 2
4 1
4 2
0 0


<b>Output:</b>
3
3
2

```