---
category_name: hard
problem_code: LIGHTARE
problem_name: 'Find Lighted Area'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
max_timelimit: '3.5'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 18-12-2017
tags:
    - admin2
    - geometry
    - gwr17rol
    - med
time:
    view_start_date: 1516482000
    submit_start_date: 1516482000
    visible_start_date: 1516482000
    end_date: 1735669800
    current: 1525454407
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.You are given a square with side length 2\***L**. The coordinates of its vertices are at (-**L**, -**L**), (**L**, -**L**), (**L**, **L**) and (-**L**, **L**). You are also given **N** disks (each disk is opaque, and light rays cannot pass through them) each of radius **R**. The centers of each of the disks are at a fixed distance **D** from origin (0, 0). This distance **D** is strictly greater than **R**. It is guaranteed that all the disks lie entirely inside the square.

Suppose, there is a light source at the origin. Find the area of the region of the square that will be lit by this light source. A point inside the square will be lit if the line segment between the origin and the point don't intersect or touch any of the discs.

All distances mentioned are Euclidean distances.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains four integers: **N**, **R, D, L**.

Each of the next **N** lines contain two space separated real numbers denoting the x and y coordinates of the center of the i-th disk. Each real number may contain up to 16 digits after the decimal point. These coordinates will satisfy all the conditions mentioned in the statement, i.e. they will be at distance exactly **D** from the origin.

### Output

For each test case, output a real number representing the illuminated area. Your answer will be considered correct if the absolute or relative error of the answer doesn't exceed 10-6.

### Constraints

- 1 ≤ **T** ≤ 105
- 1 ≤ **N** ≤ 105
- 2 ≤ **D** ≤ 105
- 1 ≤ **R** D
- R + D L ≤ 3 \* 105
- -106 ≤ **x**, **y** ≤ 106
- Sum of **N** over all the test cases in a single file would be at most 4 \* 105
- For any two centers of disks, it is guaranteed that the distance between them is ≥ 10-6.

### Example

<pre>
<b>Input</b>
4
1 1 2 4
2 0
2 1 2 4
2 0
-2 0
3 1 2 4
2 0
-2 0
0 2
4 1 2 4
2 0
-2 0
0 2
0 -2

<b>Output</b>
55.4472489493382673
46.8944978986765346
38.3417468480148019
29.7889957973530693
</pre>
### Explanation

More examples are given in the webpage, but not printed here. Please check them as well.

The image below shows the scenario for testcase 1:

![](https://codechef_shared.s3.amazonaws.com/download/upload/ACM17GWR/LIGHTARE.png)

ABCD represents the square, which has coordinates according to **L** = 4. The only circle is at coordinates (2, 0). Notice that the distance of the center from the origin is 2, which is **L**. Its radius is **R** = 1. The light source is at (0, 0).

The grayed area along with the circle represents the area which is not lit by the light source. The area of the whole square with this area subtracted is the answer.
