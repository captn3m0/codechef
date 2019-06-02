---
category_name: medium
problem_code: KOL16L
problem_name: 'Optimal BST Revisited'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.4'
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 26-12-2016
tags:
    - admin2
time:
    view_start_date: 1482831600
    submit_start_date: 1482831600
    visible_start_date: 1482831600
    end_date: 1735669800
    current: 1493557732
layout: problem
---
All submissions for this problem are available.A rooted binary tree is a rooted tree such that each node has atmost 2 children. A Binary Search Tree (BST) is a rooted binary tree, which has values stored in each of its nodes. We are interested only in distinct values. A BST has to satisfy the property that, for every node, its value must be greater than the value of every node on its left sub-tree, if it exists. Also, for every node, its value must be lesser than the value of every node on its right sub-tree, if it exists.

Thunk is bored with the classical problem of finding an optimal BST. He decides to spice it up, and changes the cost function. The problem he is considering is as follows: Given a BST with **N** nodes, called **T**, which store the values **{1,2,..,N}**, and a sequence of Searches **S = (s1, s2, ..., sm)**, he puts his finger on the root of **T**, and then traces the path to the node containing **s1**, and then from there, to the node containing **s2**, ..., and he finally traces the path from **sm-1** to **sm**. Note that during this process, he might have passed through, or even searched for the same element/node multiple times, if the Search sequence was so given. And he defines the **Cost** to be the total distance (or the number of edges) that he has passed through.

Formally, **Cost(T,S) = Depth(s1) + Distance(s1, s2) + Distance(s2, s3) + ... + Distance(sm-1, sm)**.

**Depth(u)** is defined to be the number of edges on the unique path from the root of the BST to the node conatining the value **u**. **Distance(u,v)** is defined to be the number of edges on the unique path from the node containing the value **u** to the node containing the value **v**.

Thunk has to hurry to finish his The Art of Competitive Programming series of books, and so doesn't want to waste too much time on this. So, given the sequence of Searches, **S = (s1, s2, ..., sm)**, help him find the minimum **Cost**, over all valid BSTs on **{1,2,..,N}**. That is, find the minimum of **Cost(T,S)**, over all valid **T**s.

### Input

The first line contains two integers **N, M**, denoting the number of nodes to be present in the BST, and the length of the search sequence **S**.

The next line contains **M** integers ,separated by single spaces: **s1, s2, .., sM**, denoting search sequence **S**.

### Output

Output a single line containing the answer, which is the minimum Cost over all valid BSTs.

### Constraints

- **1 ≤ N ≤ 500**
- **1 ≤ M ≤ 106**
- **1 ≤ Si ≤ N**

### Example

<pre><b>Input:</b>
<tt>3 5
1 3 2 1 2</tt>
<b>Output:</b>
<tt>5</tt>
</pre>
### Explanation

For **N** = 3, there are 5 valid BSTs possible: ```

<b>T<sub>1</sub></b>:
       2
      /  \
    1    3



<b>T<sub>2</sub></b>:
    1
      \
       2
         \
          3



<b>T<sub>3</sub></b>:
        3
       /
    2
   /
 1


<b>T<sub>4</sub></b>:
       1
         \
          3
         /
       2   



<b>T<sub>5</sub></b>:
        3
       /
     1
       \
         2

<b>S = (1, 3, 2, 1, 2)</b>

<b>Cost(T<sub>1</sub>, S) = Depth(1) + Distance(1, 3) + Distance(3, 2) + Distance(2, 1) + Distance(1, 2)
                     = 1 + 2 + 1 + 1 + 1 = 6

Cost(T<sub>2</sub>, S) = Depth(1) + Distance(1, 3) + Distance(3, 2) + Distance(2, 1) + Distance(1, 2)
                     = 0 + 2 + 1 + 1 + 1 = 5

Cost(T<sub>3</sub>, S) = Depth(1) + Distance(1, 3) + Distance(3, 2) + Distance(2, 1) + Distance(1, 2)
                     = 2 + 2 + 1 + 1 + 1 = 7

Cost(T<sub>4</sub>, S) = Depth(1) + Distance(1, 3) + Distance(3, 2) + Distance(2, 1) + Distance(1, 2)
                     = 0 + 1 + 1 + 2 + 2 = 6

Cost(T<sub>5</sub>, S) = Depth(1) + Distance(1, 3) + Distance(3, 2) + Distance(2, 1) + Distance(1, 2)
                     = 1 + 1 + 2 + 1 + 1 = 6</b>
<pre>
We see that the minimum **Cost** is attained by **T2**, and it is **5**. Hence the answer is **5**.
