---
category_name: hard
problem_code: CHEFTREE
problem_name: 'Chef and Tree'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.4'
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: mgch
problem_tester: null
date_added: 9-12-2015
tags:
    - cook65
    - data
    - hard
    - heavy
    - mgch
    - segment
editorial_url: 'http://discuss.codechef.com/problems/CHEFTREE'
time:
    view_start_date: 1450636200
    submit_start_date: 1450636200
    visible_start_date: 1450636200
    end_date: 1735669800
    current: 1493556640
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK65/mandarin/CHEFTREE.pdf), [Russian](http://www.codechef.com/download/translated/COOK65/russian/CHEFTREE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK65/vietnamese/CHEFTREE.pdf) as well.

Chef has a tree on **N** nodes. Each node **v** has an integer label **Cv** attached to it. Chef also has two other integers, **A** and **B**. He needs to run **Q** queries on the tree, each of which can be one of the following two types:

4. 1 **u** **v** **w** — add **w** to the labels of all vertices which lie on a simple path between nodes **u** and **v**.
5. 2 **u** **v** — find the number of vertices **x** on a simple path between **u** and **v** for which **A**\***Cx** + **B** ≥ 0.
Please help Chef run these queries.

### Input

The first line of input contains an integer **T** denoting the number of test cases. 11. The first line of each test case contains two positive numbers: **N** and **Q**.
12. The second line of each test case contains two positive numbers **A** and **B**.
13. The third line of each test case contains **N** integers — **C1**, **C2**, ... , **CN** — labels of the nodes.
14. The next **N - 1** lines contain two integers **u**, **v** each, denoting a pair vertices connected by an edge.
15. The following **Q** lines contains queries.
### Output

For each query of the second type, output a single line containing a single integer — its result. ### Constraints

- 1 ≤ **T** ≤ 105
- 1 ≤ **N, Q** ≤ 105
- 1 ≤ **u, v** ≤ **N**
- 0 ≤ **A**, |**B**|, |**Ci**| ≤ 109
- 1 ≤ **w** ≤ 104
- Sum of **N** over all test cases cannot be greater than 105.
- Sum of **Q** over all test cases cannot be greater than 105.
- All numbers in the input are integers.

### Example

<pre>
<b>Input:</b>
<tt>1
5 6
1 0
-1 2 -3 4 -5
1 2
1 3
2 4
2 5
1 4 3 1
2 4 3
1 3 3 1
2 3 3
1 3 3 2
2 4 3
</tt>
<b>Output:</b>
<tt>3
0
4
</tt>

</pre>