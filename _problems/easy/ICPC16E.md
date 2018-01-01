---
category_name: easy
problem_code: ICPC16E
problem_name: 'Colorful Grids'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.4'
max_timelimit: '1'
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
    current: 1493558154
layout: problem
---
All submissions for this problem are available.You are given five **N** x **N** grids, where each grid consists of **N2** unit squares. These grids have been placed in the form of a plus sign(+). For example, image below shows the figure for **N** = 2.

![](http://i.imgur.com/FObP43z.jpg)

Your aim is to count total distinct ways to color all **5\*N2** unit squares with **C** colors. Two ways are counted as same if one figure can be rotated in the two dimensional plane to obtain the other one.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. Each test case contains two space separated integers **N** and **C**, in one line.

### Output

For each test case, output a single line containing the required answer modulo **109 + 7**.

### Constraints

- **1** ≤ **T** ≤ **10000**
- **1** ≤ **N** ≤ **1018**
- **1** ≤ **C** ≤ **109**

### Example

<pre><b>Input:</b>
2
1 1
1 2

<b>Output:</b>
1
12


</pre>### Explanation
**Example case 1.** The only way is to fill all cells with same color.
**Example case 2.** Assume that the two colors are 1 and 2. The 12 distinct ways are:

<pre>

     2     
  2 2 2  
     2     
_______

     1     
  2 2 2  
     2     
_______

     2     
  2 1 2  
     2     
_______

     2     
  1 2 1  
     2     
_______

     1     
  2 2 1  
     2     
_______

     1     
  2 1 2  
     2     
_______

     1     
  2 1 2  
     1     
_______

     1     
  2 1 1  
     2     
_______

     1     
  2 2 1  
     1     
_______

     1     
  2 1 1  
     1     
_______

     1     
  1 2 1  
     1     
_______

     1     
  1 1 1  
     1     


</pre>