---
languages_supported:
    - NA
title: FLYDIST
category: NA
old_version: true
problem_code: FLYDIST
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

The chef is stuck at the airport since all flights are grounded because of a blizzard. He is trying to pass the time by analyzing a chart of distances between cities where the Spaghetti airline is flying and he noticed something strange about it. Sometimes the distance of a direct flight from city A to city B is longer than a flight with intermediate stops in some other cities. This should be impossible under assumption that the flights always take the shortest path from start to destination. The chef is determined to fix this.

There are N cities numbered from 0 to N-1 and M flights between these cities. Each flight is characterized by its two destination points (it is always possible to fly in both directions) and the distance of the flight. The chef will change (increase or decrease) the distance of the flight i by di (di can be any rational number provided that the distance covered by this flight remains positive). After he makes all the changes, there should not exist a pair of cities A and B such that it is possible to fly through intermediate cities and reach the destination by covering less distance than with a direct flight. He is looking for a valid set of changes with minimum sum.

### Input

The number of cities N and the number of flights M are given on the first line of the input. The following M lines describe the flights with endpoints Ai, Bi and the distance Di covered by this flight. No flight will connect a city to itself and there will be at most one flight between any pair of cities.

### Output

Output the minimum sum of modifications as a reduced fraction "X/Y" - greatest common divisor of X and Y must be 1.

### Constraints

- 2 <= N <= 10
- 1 <= M <= 45
- 1 <= Di <= 20

### Example

```

<b>Input:</b>
4 4
0 1 1
1 2 1
2 3 1
0 3 8

<b>Output:</b>
5/1


```
### Explanation

One possible scenario is to decrease the length of flight (0,3) by 1, increase (0,1) by 3 and (1,2) by 1.