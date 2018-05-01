---
category_name: medium
problem_code: KOL15C
problem_name: 'Just Update and Print the array'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: devuy11
problem_tester: null
date_added: 11-10-2015
tags:
    - acmkol15
    - devuy11
    - medium
    - offline
    - range
    - sqrt
editorial_url: 'http://discuss.codechef.com/problems/KOL15C'
time:
    view_start_date: 1446296400
    submit_start_date: 1446296400
    visible_start_date: 1446296400
    end_date: 1735669800
    current: 1525198956
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.You are given a 1-indexed array of size **N**. Initially, all elements of the array are zeros. You need to perform **U** updates to the array.

Each Update asks you to add **1** to the elements of the array at the indices specified by '**a**x+**b**' for all non-negative integers x, where **a** and **b** are positive integers which specify an update query.

After performing all the updates to the array, print the array with every entry separated by space.

### Input

First Line of the input contains 2 space separated integers **N, U**.

Each of the next **U** lines contains 2 space-separated integers: **a** and **b**, specifying an update.

### Output

Output the array in a single line after all updates.

### Constraints

- **1** ≤ **N** ≤ **105**
- **1** ≤ **a, b** ≤ **N**
- **1** ≤ **U** ≤ **2\*105**

### Example

<pre><b>Input:</b>
7 4
1 3
7 7
7 3
2 2

<b>Output:</b>
0 1 2 2 1 2 2
</pre>### Explanation

Array after first update : \[0,0,1,1,1,1,1\]
Array after second update : \[0,0,1,1,1,1,2\]
Array after third update : \[0,0,2,1,1,1,2\]
Array after fourth update : \[0,1,2,2,1,2,2\]
