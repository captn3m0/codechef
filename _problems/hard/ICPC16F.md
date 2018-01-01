---
contest_code: ACMIND16
contest_name: 'ACM-ICPC India Regionals, Online Preliminary Round 2016'
problem_code: ICPC16F
problem_name: 'Chef and Bipartite Graphs'
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
    view_start_date: 1477143000
    submit_start_date: 1477143000
    visible_start_date: 1788139521
    end_date: 1477153800
    current: 1493557217
layout: problem
---
Chef is very interested in studying biparite graphs. Today he wants to construct a bipartite graph with **n** vertices each, on the two parts, and with total number of edges equal to **m**. The vertices on the left are numbered from **1** to **n**. And the vertices on the right are also numbered from **1** to **n**. He also wants the degree of every vertex to be greater than or equal to **d**, and to be lesser than or equal to **D**. ie. for all **v**, **d** ≤ **deg(v)** ≤ **D**

Given four integers, **n, m, d, D**, you have to help Chef in constructing some bipartite graph satisfying this property. If there does not exist any such graph, output -1

. ### Input

First line of the input contains an integer **T** denoting the number of test cases. **T** test cases follow.

The only line of each test case contains four space separated integers **n, m, d, D**.

### Output

For each test case, output **-1** if there is no bipartite graph satisfying this property. Otherwise output **m** lines, each of the lines should contain two integers **u, v** denoting that there is an edge between vertex **u** on the left part and vertex **v** on the right part. If there can be multiple possible answers, you can print any. Note that the bipartite graph should not have multi-edges.

### Constraints

- **1 ≤ T, n ≤ 100**
- **1 ≤ d ≤ D ≤ n**
- **0 ≤ m ≤ n \* n**

### Example

<pre><b>Input</b>
2
2 3 1 2
2 3 1 1    

<b>Output:</b>
1 1
2 2
1 2
-1

</pre>