---
category_name: medium
problem_code: BRKTREE
problem_name: 'Breaking the Tree'
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
problem_author: adhyyan1252
problem_tester: null
date_added: 10-11-2017
tags:
    - adhyyan1252
time:
    view_start_date: 1510331400
    submit_start_date: 1510331400
    visible_start_date: 1510331400
    end_date: 1735669800
    current: 1514816320
layout: problem
---
All submissions for this problem are available.You are given a tree with N vertices where each vertex has an associated weight **A\[i\]**. Let’s call the sum of all weights in a tree **W**. Removing any edge from the tree will result in two trees, with the sums of each tree being, W1 and W2. You will be given **Q** queries. Each query will have an integer **D**-short for difference. You should output whether it is possible to remove an edge from the tree, breaking it into two different trees so that**|W1 - W2| = D** where |x| is the absolute value of x. If this is possible then output “Yes”, otherwise “No”. All queries are independent of each other. .

### Input

The first line of each test case contains two integer **N**, **Q** denoting the number of vertices in the trees and number of queries respectively. The next line has **N** integers, **A**, the values associated to the node.The next **N-1** lines each contain 2 integers **u** and **v** denoting an edge between vertex u and v. The next **Q** lines have 1 integer **D**. ### Output

For each query output "Yes" or "No" in a new line(without quotes). ### Constraints

26. **1** ≤ **N** ≤ **2\*105**
27. **1** ≤ **Q** ≤ **2\*105**
28. **1** ≤ **A\[i\]** ≤ **2\*109**
29. **1** ≤ **D** ≤ **2\*1018**
### Subtasks

31. **Subtask 1**(20 points): **N ≤ 2\*103, Q ≤ 2\*103**
32. **Subtask 2**(20 points): Sum of all **A\[i\]** is less than **2\*106**.
33. **Subtask 2**(60 points): Original constraints ### Example
    
    ```
    <b>Input:</b>
    6 4
    1 5 7 3 9 2
    1 2
    1 3
    3 4
    3 5
    5 6
    5
    27
    40
    21
    <b>Output:</b>
    Yes
    No
    No
    Yes
    ```
    
    ### Explanation
    
    **Example case 1.** For the first query the answer is "Yes" because the edge between 5 and 6 can be removed. For the second query, it is not possible to remove an edge and get a difference of 27.
