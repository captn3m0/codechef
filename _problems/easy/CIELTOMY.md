---
category_name: easy
problem_code: CIELTOMY
problem_name: 'Ciel and Tomya'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: laycurse
problem_tester: null
date_added: 4-07-2012
tags:
    - backtracking
    - cook24
    - laycurse
    - simple
editorial_url: 'http://discuss.codechef.com/problems/CIELTOMY'
time:
    view_start_date: 1342982953
    submit_start_date: 1342982953
    visible_start_date: 1342982428
    end_date: 1735669800
    current: 1493558130
layout: problem
---
All submissions for this problem are available.Tomya is a girl. She loves Chef Ciel very much.

Today, too, Tomya is going to Ciel's restaurant. Of course, Tomya would like to go to Ciel's restaurant as soon as possible. Therefore Tomya uses one of the shortest paths from Tomya's house to Ciel's restaurant. On the other hand, Tomya is boring now to use the same path many times. So Tomya wants to know the number of shortest paths from Tomya's house to Ciel's restaurant. Your task is to calculate the number under the following assumptions.

This town has **N** intersections and **M** two way roads. The **i**-th road connects from the **Ai**-th intersection to the **Bi**-th intersection, and its length is **Ci**. Tomya's house is in the 1st intersection, and Ciel's restaurant is in the **N**-th intersection.

### Input

The first line contains an integer **T**, the number of test cases. Then **T** test cases follow. The first line of each test case contains 2 integers **N**, **M**. Then next **M** lines contains 3 integers denoting **Ai**, **Bi** and **Ci**.

### Output

For each test case, print the number of shortest paths from Tomya's house to Ciel's restaurant.

### Constraints

1 ≤ **T** ≤ 10
2 ≤ **N** ≤ 10
1 ≤ **M** ≤ **N ∙ (N – 1) / 2**
1 ≤ **Ai**, **Bi** ≤ **N**
1 ≤ **Ci** ≤ 10
**Ai** ≠ **Bi**
If **i** ≠ **j** and **Ai** = **Aj**, then **Bi** ≠ **Bj**
There is at least one path from Tomya's house to Ciel's restaurant.

### Sample Input

<pre>2
3 3
1 2 3
2 3 6
1 3 7
3 3
1 2 3
2 3 6
1 3 9
</pre>### Sample Output
<pre>1
2
</pre>### Explanations
In the first sample, only one shortest path exists, which is 1-3.

In the second sample, both paths 1-2-3 and 1-3 are the shortest paths.
