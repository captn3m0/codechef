---
languages_supported:
    - NA
title: COLCHAIN
category: NA
old_version: true
problem_code: COLCHAIN
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

A chain is a series of connected links. David has been presented a chain for his birthday consisting of **N** links and would like to color each of the links into one of **M** colors. He would like the coloring to be pretty uniform, so that no color is used too often or too seldom. Finally, David came with the following restriction: he wants to color the links in such a way that every color is used at least once in every **M**+1 consecutive links. 

Two colorings are considered different if there exists at least one **i** between 1 and **N** such that link **i** is colored differently in these colorings. (The links are numbered, and the chain can not be rotated.) How many ways are there for David to color the chain?

### Input

The first line of the input file contains one integer **T** -- the number of test cases (no more than 10). Each of the next **T** lines contains two integers **N** and **M** -- the length of the chain presented to David and the number of colors (1 ≤ **M** < **N** ≤ 105).

### Output

For each test case output the number of ways for David to color the chain modulo 1 000 000 007 (109 + 7).

### Example

```

<b>Input:</b>
3
2 1
4 2
6 3

<b>Output:</b>
1
10
132

```