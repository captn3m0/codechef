---
category_name: hard
problem_code: CHN10
problem_name: 'Animesh does not gift Malvika on her birthday'
languages_supported:
    - C
    - CPP14
    - JAVA
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 17-01-2016
tags:
    - acm15chn
    - admin2
    - combinatorics
    - graph
time:
    view_start_date: 1453546800
    submit_start_date: 1453546800
    visible_start_date: 1453546800
    end_date: 1735669800
    current: 1493556647
hand_edited: true
layout: problem
---
All submissions for this problem are available.Malvika was sad because Animesh, the miser, did not buy her even a chocolate bar on her birthday. Animesh, feeling sorry about his behavior, repented and asked Malvika how he could make up for this catastrophic mistake. Enraged as she was, Malvika gave him an empty graph **H** of **n** vertices and asked him to add edges into it and convert the graph into a graph that she likes.

Malvika always keeps a graph **G** with **n** vertices and **m** edges with her. Malvika likes a graph **H** if, and only if, she can find a permutation **P** of **1, 2, … , N** such that there's an edge between vertices **u** and **v** in **H** if and only if there's an edge between vertices **P\[u\]** and **P\[v\]** in **G**.

Animesh thought for days and days about how he could add edges into the empty graph **H** so that he can get a graph that Malvika likes. After putting in a lot of effort, he found such a graph and said that this is the graph you desired.

Malvika was still really angry with him and asked *little* Animesh to come up as many graphs as possible, such that Malvika likes them. Given his recent track record, you know this is going to take him at least a few years to solve by himself. Can you help Animesh find out how many such graphs he has to come up with? Please output your answer modulo **109 + 7**.

Two ways of adding edges **A, B** are considered different if there is a an edge **(u, v)** which is present in **A** but not in **B**.

You are given the adjacency matrix of the graph **G** as input. The graph has a special property — each row and column of the graph has atleast **n - 3** 1's.

Note that adjacency matrix of a graph **G** containing **n** vertices is a matrix **A** of size **n \* n**. If there is an edge between vertex **i** and **j**, then **A(i, j) = 1**, otherwise **A(i, j) = 0**. In our case, as the graph is undirected, the matrix will be a symmetric matrix. Also, the entries on the diagonal will be all zeros.

### Input

- The first line of input contains a single integer **T** denoting the number of test cases.
- For each test case:
- First line contains an integer **n** denoting the number of vertices in graph **G**.
- Each of the next **n** lines contains **n** characters, each of them will be either '0' or '1'. The **j**th character in the **i**th line denotes **A\[i\]\[j\]**, where **A** is the adjacency matrix.


### Output

- For each test case, output your answer in a separate line.

### Constraints

- **1 ≤ T, n ≤ 50**

### Example

<pre><b>Input:</b>
2
2
01
10
3
001
001
110

<b>Output:</b>
1
3
</pre>
### Explanation

**In the first example**, the graph **G** has an edge between 1 and 2. Animesh has to add only one edge in the graph **H** between vertices 1 and 2 to please her. This is the only graph he has to come up with.

**In the second example**, the graph **G** has edges {1, 3} and {2, 3}. Animesh can come up with the following graphs `({1, 3}, {2, 3}), ({2, 1}, {3, 1}), ({1, 2}, {3, 2})`. Malvika likes all of these graphs. In this representation, `({1, 3}, {2, 3})` means that a graph has 3 vertices and two edges — between 1 and 3, and between 2 and 3.
