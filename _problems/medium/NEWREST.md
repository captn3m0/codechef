---
languages_supported:
    - NA
title: NEWREST
category: NA
old_version: true
problem_code: NEWREST
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Chef Dengklek will open a new restaurant in the city. The restaurant will be open for N days. He can cook M different types of dish. He would like to cook a single dish every day, such that for the entire N days, he only cook at most K distinct types of dishes.

In how many ways can he do that?

### Input

The first line contains a single integer T, the number of test cases. T test cases follow. Each test case consists of a single line consisting of three integers N, M, K.

### Output

For each test case, output a single line consisting the number of different ways he can cook for the entire N days, modulo 1000000007.

### Constraints

- 1 ≤ T ≤ 100
- 1 ≤ N ≤ 1000
- 1 ≤ M ≤ 1000000
- 1 ≤ K ≤ 1000

### Example

**Input:**

```
4
1 1 1
2 2 2
4 3 2
5 7 3
```
**Output:**

```
1
4
45
5887
```