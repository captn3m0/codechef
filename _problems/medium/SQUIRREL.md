---
languages_supported:
    - NA
title: SQUIRREL
category: NA
old_version: true
problem_code: SQUIRREL
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

There are n squirrel(s) waiting below the feet of m chestnut tree(s). The first chestnut of the i-th tree will fall right after Ti second(s), and one more every Pi second(s) after that. The “big mama” of squirrels wants them to bring their nest no less than k chestnuts to avoid the big storm coming, as fast as possible! So they are discussing to wait below which trees to take enough chestnuts in the shortest time. Time to move to the positions is zero, and the squirrels move nowhere after that.

### Request

Calculate the shortest time (how many seconds more) the squirrels can take enough chestnuts.

### Input

- The first line contains an integer t, the number of test cases, for each: 
  - The first line contains the integers m,n,k, respectively.
  - The second line contains the integers Ti (i=1..m), respectively.
  - The third line contains the integers Pi (i=1..m), respectively.
**_(Each integer on a same line is separated by at least one space character, there is no added line between test cases)_**
### Output

For each test cases, output in a single line an integer which is the shortest time calculated.

### Example

**Input:**

```
2
3 2 5
5 1 2
1 2 1
3 2 5
5 1 2
1 1 1

```
**Output:**

```
4
3

```
_\* Explain (case #1): 2 squirrels waiting below the trees 2 and 3._

### Limitations

- 0<t≤20
- 0<m,n≤10,000
- 0<k≤107
- 0<Ti,Pi≤100