---
category_name: school
problem_code: ICPC16A
problem_name: 'Help Lost Robot!'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.4'
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: admin3
problem_tester: null
date_added: 18-10-2016
tags:
    - admin3
time:
    view_start_date: 1477153800
    submit_start_date: 1477153800
    visible_start_date: 1477153800
    end_date: 1735669800
    current: 1492506692
layout: problem
---
All submissions for this problem are available.Robot Bunny is lost. It wants to reach its home as soon as possible. Currently it is standing at coordinates **(x1, y1)** in 2-D plane. Its home is at coordinates **(x2, y2)**. Bunny is extremely worried. Please help it by giving a command by telling the direction in which it should to go so as to reach its home. If you give it a direction, it will keep moving in that direction till it reaches its home. There are four possible directions you can give as command - **"left", "right", "up", "down"**. It might be possible that you can't instruct the robot in such a way that it reaches its home. In that case, output **"sad"**.

### Input

First line of the input contains an integer **T** denoting the number of test cases. **T** test cases follow.

First line of each test case contains four space separated integers **x1, y1, x2, y2**.

### Output

For each test case, output a single line containing **"left"** or **"right"** or **"up"** or **"down"** or **"sad"** (without quotes).

### Constraints

- **1 ≤ T ≤ 5000**
- ≤ **x1, y1, x2, y2**. ≤ **100**
- It's guaranteed that the initial position of robot is not his home.

### Example

```
<b>Input</b>
3
0 0 1 0
0 0 0 1
0 0 1 1

<b>Output:</b>
right
up
sad

```
### Explanation

**Test case 1.** If you give Bunny the command to move to the right, it will reach its home.