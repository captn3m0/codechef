---
category_name: hard
problem_code: AMPUZZLE
problem_name: 'Sliding Puzzle'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: balajiganapath
problem_tester: null
date_added: 23-12-2017
tags:
    - balajiganapath
time:
    view_start_date: 1517693400
    submit_start_date: 1517693400
    visible_start_date: 1517693400
    end_date: 1735669800
    current: 1525454404
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Famous company Strange Puzzles Inc. has designed a brand new series of puzzles aimed at students who are fond of competitive programming. In this problem we are going to consider one of them named "Sliding Windows".

The puzzle consists of an infinite two-dimensional plane and **n** rectangles located in it. Each of the rectangles has its sides parallel to the coordinate axes. The puzzle is considered to be solved if for any two rectangles it is true that at least one of them is _covered_ by the other one. Formally, rectangle i _covers_ rectangle j if and only if for any point of the plane (x, y) which lies inside rectangle j, it also lies inside rectangle i.

The only action that you are allowed to perform is to shift the rectangles up, down, left or right. In one unit of time you can take one of the rectangles and shift it exactly by 1 unit in one of these four directions.

As a true competitive programmer you wonder what the minimum number of time units required to solve the puzzle is (if it can be solved at all).

### Input

- The first line of the input contains a single integer **T** — the number of test cases in the given input. Then follow **T** descriptions of individual tests.
- The first line of teach testcase contains a single integer, **n** — the number of rectangles.
- The ith of the next **n** lines contains four integers **li**, **bi**, **ri** and **ui** — this signifies that (**li**, **bi**) is the lower left corner and (**ri**, **ui**) is the upper right corner of the ith rectangle.

### Output

- If the puzzle can not be solved for the given set of rectangles print -1 in the only line of the output. Otherwise print a single integer equal to the minimum number of time units required to solve the puzzle.

### Constraints

- 1 ≤ **T** ≤ 200000
- 1 ≤ **n** ≤ 200000
- - 109 ≤ **li** < **ri** ≤ 109
- - 109 ≤ **bi** < **ui** ≤ 109
- It's guaranteed that the sum of **n** over all test cases in one test file won't exceed 1000000.

### Example

<pre>
<b>Input:</b>
2
2
0 -1 1 2
-1 0 2 1
3
0 0 4 1
-1 1 1 2
2 1 5 2

<b>Output:</b>
-1
4
</pre>### Explanation

**Testase 1:** No matter how we move the rectangles, one rectangle cannot cover the other rectangle. Hence the answer is -1.

**Testcase 2:** One of the optimal solutions is to shift the first rectangle up by 1 unit, second rectangle right by 1 unit and third rectangle left by 2 units. This takes a total of 4 time units and hence that is the answer.
