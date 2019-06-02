---
category_name: challenge
problem_code: EX
problem_name: 'Lights Off, Revisited!'
languages_supported:
    - C
    - JAVA
max_timelimit: '6'
source_sizelimit: '50000'
problem_author: admin
problem_tester: null
date_added: 15-06-2009
tags:
    - admin
time:
    view_start_date: 1247658097
    submit_start_date: 1247658097
    visible_start_date: 1247657796
    end_date: 1735669800
    current: 1525454418
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Johnny is, by now, a little bored of the original Lights Off game, and he has proposed his own variant. This time, the task which awaits him is much, much harder... Imagine we have a large square board, containing an n x n grid (matrix) of lightbulbs. Initially, some of them are on, and the rest are off. We can perform some special operations on the whole matrix, and we would like to switch off as many lightbulbs as possible. At each step, the only operation we can perform is defined as follows: we choose one particular lightbulb, one direction (North, East, West, or South), and starting from this lightbulb and going in the specified direction, till the end of matrix, one by one, we toggle the states of the lightbulbs - from on to off, or from off to on.

### Input

First, 1≤n≤1000, the size of the board. Then n rows of n numbers follow, representing the initial state of the lightbulbs, where the j-th number in the i-th row represents the state of the lightbulb at coordinates (i,j): 0 if it is off, 1 if it is on. All coordinates are 0-based, i.e., the bulb in the top left hand corner has coordinates (0,0).

### Output

First, you should output k, the number of operations you perform. The following k rows should describe a sequence of operations to be performed on the board, in the order in which they should be applied. Each operation is described by three space separated numbers i,j,c, where 0≤i,j<n are 0-based coordinates of the lightbulb at the starting point (i stands for the row number, j stands for the column number), and c is one character from the set {N,E,W,S}, N meaning moving to smaller row coordinates, S to larger row coordinates, W to smaller column coordinates, and E to larger column coordinates.

### Scoring

For each lightbulb than remains on after all the operations, you will receive one penalty point. For each operation performed you will receive one penalty point.

The total score is averaged over 9 data sets.

### Example

<pre><strong>Input:</strong><br></br>3<br></br>1 1 1<br></br>1 1 1<br></br>1 1 1<br></br><br></br><strong>Output:</strong><br></br>2<br></br>0 0 E<br></br>0 0 S<br></br><strong><br></br>Score:</strong><br></br>7<br></br>
</pre>