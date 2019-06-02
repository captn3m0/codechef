---
category_name: medium
problem_code: VRTXCOVR
problem_name: 'Vertex Cover'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
    - kotlin
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: triveni
problem_tester: null
date_added: 20-11-2017
tags:
    - '2'
    - acm17chn
    - chn17rol
    - graphs
    - medium
    - triveni
editorial_url: 'https://discuss.codechef.com/problems/VRTXCOVR'
time:
    view_start_date: 1515357000
    submit_start_date: 1515357000
    visible_start_date: 1515357000
    end_date: 1735669800
    current: 1525454403
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.You are given an undirected graph **G = (V, E)** containing **N** nodes and **M** edges. The nodes are numbered from 1 to **N**. A subset **C** of **V** is a *vertex cover* if for every edge (**u**, **v**) ∈ **E**, at least one of **u** and **v** belong to **C**. Note that **C = V** is always a vertex cover.

Consider a partition of **V** into two sets **A** and **B**. It is said to be a *valid* partition, if the following two conditions are satisfied: **A** should be a vertex cover. And for each **i** such that 1 ≤ **i** ≤ **n/2**, nodes **2\*i** and **2\*i - 1** don't belong to the same set (i.e. one belongs to set **A** and the other to set **B**).

Determine if a *valid* partition exists. If it exists, provide an example of one *valid* partition.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains two space-separated integers **N** and **M** denoting the number of nodes and number of edges in the graph respectively.
- Each of the following **M** lines contains two space-separated integers **u** and **v** denoting an edge between nodes **u** and **v**.

### Output

- For each test case, print a line containing the string **"possible"** (without quotes) if a solution exists or **"impossible"** otherwise.
- If a solution exists, print a second line containing a binary string. The **i**-th character of this string should be '0' if vertex **i** is in set **B** or '1' if it is in set **A**.

### Constraints

- 1 ≤ **T** ≤ 105
- 1 ≤ **N** ≤ 2 · 105
- 0 ≤ **M** ≤ 2 · 105
- 1 ≤ **u**, **v** ≤ **N**
- 1 ≤ sum of **N** over all test cases ≤ 106
- 1 ≤ sum of **M** over all test cases ≤ 106

### Example

<pre><b>Input:</b>

2
3 2
1 2
2 3
4 5
1 3
2 4
1 4 
1 2
2 3

<b>Output:</b>

possible
011
impossible
</pre>
### Explanation

**Example case 1:** We can put nodes numbered 2 and 3 in set A and node 1 in set B. Note that this is a *valid* partition because set A is a vertex cover; also, nodes numbered 1 and 2 belong to different sets.

**Example case 2:** There exists no partition which satisfies the conditions.
