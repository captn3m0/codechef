---
category_name: medium
problem_code: SUBTREE
problem_name: Festivals
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - 'C99 strict'
    - CAML
    - CLOJ
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 4.9.2'
    - CPP14
    - CS2
    - D
    - ERL
    - FORT
    - FS
    - GO
    - HASK
    - ICK
    - ICON
    - JAVA
    - JS
    - 'LISP clisp'
    - 'LISP sbcl'
    - LUA
    - NEM
    - NICE
    - NODEJS
    - 'PAS fpc'
    - 'PAS gpc'
    - PERL
    - PERL6
    - PHP
    - PIKE
    - PRLG
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: tuananh93
problem_tester: anton_lunyov
date_added: 25-12-2012
tags:
    - lca
    - march13
    - medium
    - tree
    - tuananh93
editorial_url: 'http://discuss.codechef.com/problems/SUBTREE'
time:
    view_start_date: 1363000423
    submit_start_date: 1363000423
    visible_start_date: 1363000281
    end_date: 1735669800
    current: 1493557936
layout: problem
---
All submissions for this problem are available.The Chef is enjoying his vacation at the Tree city. As the name of it says, in this city, **N** locations, numbered from **1** to **N**, are connected by **N − 1** bidirectional roads. Each road connects two cities and you can travel between any pair of cities through this roads system. Each road has the length, which is some positive integer. For any two locations the distance between them is the sum of the roads lengths for the path that connects them.

Some festivals are regularly held in each location. Someday, several festivals (at least 2) take place at different locations. On that day people often participate in two festivals such that the distance between their locations is as large as possible. They move between these two locations to enjoy the festivals. Note that there may be more than one pair of locations satisfying this condition. The path connecting two such locations is called _an ideal path_.

Knowing this, the Chef wants to find an optimal road where he will open temporary fast-food restaurant to earn as much money as possible from hungry festival participants that move by this road. In his honest opinion the best such road is **the shortest road belonging to each ideal path**.

More formally he is asking you two questions as follows. Suppose in day **X**, there are **K** festivals that take place at **K** locations **F1**, **F2**, ..., **FK** respectively.

- Find the distance between two furthest locations among the **K** locations listed above. Denote this value as **A**.
- Find the road with the minimal length belonging to each ideal path. That is, each path of length **A**, that connects **Fi** and **Fj** for some **i** and **j**, should contain this road. Denote the length of this road as **B**. If there is no such road than **B** is set to **-1**.
- Of course, Chef wants to know values **A** and **B**.

### Input

The first line of the input contains a single integer **N**, denoting the overall number of locations in the Tree city. Each of the following **N − 1**  lines describes a road and contains three space-separated integers **U**, **V** and **C**, which means that the road of length **C** connects locations **U** and **V**.
 The next line contains a single integer **Q**, denoting the number of questions Chef is asking you. Each of the following **Q** lines describes a question and contains an integer **K** followed by **K** space separated integers **F1**, **F2**, ..., **FK**, denoting the locations where the festivals take place./>

### Output

For each question, output on a separate line two space-separated integers **A** and **B**. Their meaning is described above.

### Constraints

- **1** ≤ **N** ≤ **100000** (**105**)
- **1** ≤ **U**, **V** ≤ **N**
- **U** ≠ **V**
- **1** ≤ **C** ≤ **10000** (**104**)
- It is guaranteed that the roads in the input describe a tree of **N** vertexes
- **1** ≤ **Q** ≤ **100000** (**105**)
- **2** ≤ **K** ≤ **N**
- **1** ≤ **F1**, **F2**, ..., **FK** ≤ **N**
- **F1**, **F2**, ..., **FK** are different
- The sum of **K** over the input does not exceed **200000** (**2 \* 105**)

### Example

```

<b>Input:</b>
6
1 2 3
1 4 2
1 5 2
2 3 3
2 6 3
2
2 2 5
4 3 4 5 6

<b>Output:</b>
5 2
8 3

```
### Explanation

**Example question 1.** The only ideal path is between 2 and 5. This path contains two roads: (5, 1) and (1, 2); and (5, 1) is the shortest road among them.

**Example question 2.** The ideal paths are between the following pairs: (3 and 4), (4 and 6), (5 and 3), and (5 and 6). Only road (1, 2) belongs to each ideal path.