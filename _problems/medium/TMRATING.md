---
category_name: medium
problem_code: TMRATING
problem_name: 'Best Buggy Ratings'
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
max_timelimit: '6 - 9'
source_sizelimit: '50000'
problem_author: flying_ant
problem_tester: maksflow
date_added: 11-04-2012
tags:
    - cook21
    - flying_ant
    - medium
editorial_url: 'http://discuss.codechef.com/problems/TMRATING'
time:
    view_start_date: 1335119152
    submit_start_date: 1335119152
    visible_start_date: 1335119400
    end_date: 1735669800
    current: 1493557947
layout: problem
---
All submissions for this problem are available.A rating system for cricket players is built by Mr.Bugs Bunny and as expected, it has lot of bugs. The initial ratings of N players ( numbered 0 to N-1 ) are given and we refer it as array V0. The system is expected to answer simple queries of the form, find the top-2 maximum ratings among players from i to j ( inclusive ). Top-2 maximum means the first two elements of the ratings sorted in non-increasing order. Due to bugs in the system, an unexpected update occurs after output of each query and this creates a new version of the ratings array V. We refer the Kth version of the ratings arrays as VK. Also, for a query, the system queries on some previous version of V. Mr. Bunny gave the exact details of the bugs as follows,

Given Q queries numbered 1 to Q in order and values of A B C D M,

- For a query number K, the query is made on the array Vt , where t = ( A \* R1 + D ) % K, and R1 is the maximum rating in the query range of the previous query. For the first query, consider R1 = 0.

- For a query number K, let R1 and R2 be the top-2 maximum ratings ( R1 ≥ R2 ). After it outputs this answer, the system changes the rating of a player. Specifically, the rating of player number ( B \* R1 + D ) % N is changed to ( C \* R2 + D ) % M. This update is on the array V(K-1) and a new version VK is created.


You can not fix these bugs, but can you guess the output produced by this system. For more clarity, check the pseudo code below.

<pre>
read array V<sub>0</sub>;
R1 = 0, R2 = 0;
for K = 1 to Q
     t = ( A * R1 + D ) % K
     read qi qj
     R1, R2 = top-2 Maximum ratings in range [qi..qj] in the array V<sub>t</sub>
     Output R1 R2
     V<sub>K</sub> = Update array V<sub>(K-1)</sub> by changing V<sub>(K-1)</sub> [ ( B * R1 + D ) % N ] = ( C * R2 + D ) % M
end-for
</pre>

Note: Take care of potential overflows in intermediate calculations in the equations mentioned above. The authors algorithm doesn't depend on the values of A B C D M, they are just used to generate some values. 
### Input

First line contains 6 integers N M A B C D and the second line contains N integers, the initial ratings of N players in order ( 2 ≤ N, A, B, C, D ≤ 100,000 ; 0 ≤ V0\[i\] , M < 1,000,000,000 ; M ≥ 2 ). Next line contains Q ( number of queries 1 ≤ Q ≤ 100,000 ), followed by Q lines. The Kth line in this has the query number K, and has two integers qi qj ( 0 ≤ qi < qj < N ).

### Output

For each query, output the top-2 maximum ratings R1 R2 ( R1 ≥ R2 ) in a new line.

### Example

<pre>
<b>Input:</b>
6 1000 2 2 2 2
1 2 3 4 5 6
4
0 5
0 3
1 3
2 5

<b>Output:</b>
6 5
4 3
12 4
12 8
</pre>

**Explanation:**

V0 = { 1, 2, 3, 4, 5, 6 }

1.) t = 0 --> top-2 max of V0\[0..5\] = 6 , 5
Updating V0\[2\] with 12
V1 = { 1, 2, 12, 4, 5, 6 }

2.) t = ( A(=2) \* R1(=6) + D(=2) ) % 2 = 0 --> top-2 max of V0\[0..3\] = 4 , 3
R1 = 4, R2 = 3
Updating index = ( B(=2) \* R1(=4) + D(=2) ) % N(=6) = 4 with value = ( C(=2) \* R2(=3) + D(=2) ) % M(=1000) = 8
V2 = { 1, 2, 12, 4, 8, 6 }

3.) t = 1 --> top-2 max of V1\[1..3\] = 12 , 4
Updating V2\[2\] = 10
V3 = { 1, 2, 10, 4, 8, 6 }

4.) t = 2 --> top-2 max of V2\[2..5\] = 12 , 8
Updating V3\[2\] = 18
V4 = { 1, 2, 18, 4, 8, 6 }
