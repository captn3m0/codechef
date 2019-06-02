---
category_name: easy
problem_code: TALESQUA
problem_name: 'A Tale of Three Squares'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 19-12-2017
tags:
    - admin2
    - gwr17rol
    - simple
time:
    view_start_date: 1516482000
    submit_start_date: 1516482000
    visible_start_date: 1516482000
    end_date: 1735669800
    current: 1525198941
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.There are three squares, each with side length **a** placed on the x-axis. The coordinates of centers of these squares are (**x1**, **a**/2), (**x2**, **a**/2) and (**x3**, **a**/2) respectively. All of them are placed with one of their sides resting on the x-axis.

You are allowed to move the centers of each of these squares along the x-axis (either to the left or to the right) by a distance of at most **K**. Find the maximum possible area of intersections of all these three squares that you can achieve. That is, the maximum area of the region which is part of all the three squares in the final configuration.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains two space-separated integers **a, K** denoting side length of the squares, and the maximum distance that you can move the center of any square.
- The second line contains three space separated integers **x1**, **x2**, **x3**

### Output

For each test case, output a real number corresponding to the maximum area of the intersection of the three squares that you can obtain. Your answer will be considered correct if it has an absolute error of less than or equal to 10-2.

### Constraints

- 1 ≤ **T** ≤ 105
- 1 ≤ **a** ≤ 105
- 0 ≤ **K** ≤ 106
- -106 ≤ **x1**, **x2**, **x3** ≤ 106

### Example

<pre>
<b>Input</b>
3
1 0
1 2 3
1 1
1 2 3
1 1
1 4 6

<b>Output</b>
0.000000
1.0000
0.0
</pre>
### Explanation

**Testcase 1**: The figure below shows the three squares:

![](https://codechef_shared.s3.amazonaws.com/download/upload/ACM17GWR/TALESQUA.png)

Since **K** = 0, they cannot be moved, and since there is no region which belongs to all three squares, the answer is 0.

**Testcase 2**: The starting configuration is the same as above, but now each of the squares can move 1 unit. So we can move the first square 1 unit to the right and the third square one unit to the left, and have all the three squares at x-coordinate = 2. Thus the entire square is part of all three squares, and the answer is 1.
