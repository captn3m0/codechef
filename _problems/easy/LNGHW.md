---
category_name: easy
problem_code: LNGHW
problem_name: 'Long Homework'
languages_supported:
    - C
    - 'CPP 4.3.2'
    - 'CPP 6.3'
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
max_timelimit: '1 - 2'
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
    current: 1514816307
layout: problem
---
All submissions for this problem are available.Your teacher is very evil and gives you a lot of homework. In fact, the homework she gives you takes so much time that you get barely anytime to sleep. Today, she gave an extra-long homework: The teacher has given you a list **A** of **N distinct** integers, **Q** queries and an integer **M**. Each query will have two integers, **i** and **R**. You have to find j, such that a\[j\] is the ith smallest element for which **a\[j\]%M = R**. .

### Input

The first line of each test case contains three integer **N**, **Q** and **M** denoting the number of elements in the array, number of queries and the modulus respectively The second line contains **N** space-separated integers **A1**, **A2**, ..., **AN** denoting the elements in the array. The next **Q** contains two integers: **i** and **R**. ### Output

For each query output one integer, **j**(1-indexed), which is the index such that a\[j\] is the ith smallest element for which **a\[j\]%M = R**. If it doesn't exist then print **-1**### Constraints

35. **1** ≤ **N, Q, M** ≤ **2\*105**
36. ≤ **R** ≤ **M**
37. **1** ≤ **A\[i\]** ≤ **2\*108**
### Subtasks

39. **Subtask 1**(20 points): **N\*Q ≤ 106,**
40. **Subtask 2**(80 points): Original constraints ### Example
  
  ```
  <b>Input:</b>
  8 5 4
  1 5 7 3 9 11 0 4
  1 1
  2 1
  3 1
  1 3
  5 3
  
  <b>Output:</b>
  1
  2
  5
  4
  -1
  
  ```### Explanation
  
  **Example case 1.** For the first query the answer is 1 because a\[1\] is 1, which is the smallest element in the array with remainder 1.
