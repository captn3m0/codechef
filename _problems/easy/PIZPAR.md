---
category_name: easy
problem_code: PIZPAR
problem_name: 'Pizza Party'
languages_supported:
    - C
    - 'CPP 4.3.2'
    - 'CPP 6.3'
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: yogesh01
problem_tester: null
date_added: 9-11-2017
tags:
    - yogesh01
time:
    view_start_date: 1510331400
    submit_start_date: 1510331400
    visible_start_date: 1510331400
    end_date: 1735669800
    current: 1514816576
layout: problem
---
All submissions for this problem are available.Chef is planning a huge party for all of you and has ordered **M** pizzas. He wants to invite as many people to the party. However, he knows that everyone will have exactly one slice of a pizza (regardless of the size) and he wants to make sure that he has enough pizza slices.

Chef is very lazy and will only make a total of **N** straight cuts among all the pizzas. Each pizza is also of different size and to avoid the slices getting too small the chef can only make a max of Ai cuts to the ith pizza. He wants to maximize the number of slices of pizza. Since chef is busy with preparing other aspects of the party he wants you to find out the maximum number of slices he can get following the constraints.

If a pizza is not cut at all then it is considered as 1 slice.

### Input

First line contains two integers M and N. The second line of input contains the array A.

### Output

Output a single integer - the maximum number of slices chef can get.

### Constraints

- **1** ≤ **M** ≤ **2\*105**
- **1** ≤ **N,Ai** ≤ **2\*105**

### Subtasks

- **Subtask 1: 1** ≤ **M,N** ≤ **100** - 10 points
- **Subtask 2: 1** ≤ **N** ≤ **100**, **1** ≤ **M** ≤ **105** - 20 points
- **Subtask 3:** Original Constraints - 70 points

### Example

<pre><b>Input:</b>
5 10
1 2 3 4 5
<b>Output:</b>
31
</pre>
### Explanation

**Example case 1. One of the optimal way to cut would be to do {0, 1, 0, 4, 5} cuts.**
