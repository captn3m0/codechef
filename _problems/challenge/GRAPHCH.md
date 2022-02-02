---
category_name: challenge
problem_code: GRAPHCH
problem_name: 'Graph Challenge'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - rust
    - SCALA
    - swift
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '1.27'
source_sizelimit: '50000'
problem_author: anshuman_singh
problem_tester: pieguy
date_added: 1-09-2010
tags:
    - anshuman_singh
    - challenge
    - nov10
editorial_url: 'http://discuss.codechef.com/problems/GRAPHCH'
time:
    view_start_date: 1420050600
    submit_start_date: 1420050600
    visible_start_date: 1420050600
    end_date: 1735669800
    current: 1525199663
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.###  Statement 

 You are given a modified graph with N vertices and M edges. Each vertex is a rectangle \[ dimension of each vertex may be different \] . Your task is to place these vertices in 2-d space such that :

- No two vertices overlap \[ remember, they are rectangles \]
- All rectangles have their sides parallel to the axis.
- Rectangles cannot be rotated.


 For every edge in the graph, add the manhattan distance between the centres of the vertex for each edge as the cost of a solution ( C ). 
Now, there might be multiple ways to achieve this. So, you have to strive to keep C as low as possible.

###  Input 

 First line contains t ( ≤ 100 ) equal to the number of test cases. For each test case, the first line contains 2 space separated integers ( N and M respectively ). Then M lines follow, each line containing 2 integers x and y ( 0 ≤ x,y &lt; N , x ≠ y ) denoting an edge between vertex x and y. Then follow N lines, where line number i contains 2 integers a and b denoting the dimension of the ith vertex \[ Here, a denotes the length parallel to x-axis and b denotes the length parallel to y-axis \]

(  **Note**  : If the same pair x,y appears multiple times, it denotes multiple edges and hence, each pair contributes to the cost ). 

 **NOTE :**  Please note that all solutions will be tested on another set of test data  **after the contest**  which will follow the same pattern for test case generation ( as mentioned in 'Test Case Generation' section ). **The final score for a solution will be the score of solution on latter test data.**  
###  Output 

For each test case, print N lines , each containing 2 floating point numbers X and Y, denoting the co-ordinates of the centre of vertex i. 
  **Note**  : -109 ≤ X,Y ≤ 109 . Solutions not following the mentioned constraints will be adjudged as wrong answer. 
 **Please note that the answers may not be optimal**

###  Scoring 

 The Score for a solution = (C+1). 
Your total score is the sum of your score for all the test cases. 
You have to keep the score as low as possible.

###  Constraints 

2 ≤ N ≤ 50 
1 ≤ M ≤ 200 \[ The edges are randomly generated \] 
1 ≤ a,b ≤ 100000 
There can be multiple edges between a pair of vertices.
Additionally for 50% of the cases 2 ≤ N ≤ 20. Also, for about 50% of cases, all vertices are squares \[ a = b \] of same size.

###  Test Case Generation 

There are about 100 cases in total. For first 50 cases, the number of vertex ( n ) is chosen as a random number in the interval \[3,20\]. The number of edges (m) is chosen as a random number in the range \[2, n\*(n-1)/2\]. Then all edges are chosen as random pair of integers. All vertex are given the same dimension with the probability 0.5 else they are given a random dimension in \[1,100000\] \* \[1,100000\]. 
For other 50 cases, n is chosen as a random integer in the interval \[3,50\]. m is chosen randomly from \[2, min( n\*(n-1)/2, 200) \]. Rest of the procedure remains the same.

###  Sample Input 

 
<pre>
1
2 1
0 1
2 2
2 2
</pre>
###  Sample Output 

 
<pre>
2 2
10 3
</pre>

**Score for sample output** : 10.0 ( Better answers may be possible )
