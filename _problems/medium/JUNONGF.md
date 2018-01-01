---
category_name: medium
problem_code: JUNONGF
problem_name: 'Juno Puzzle for May'
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
    - WSPC
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: mischievous_me
problem_tester: pieguy
date_added: 21-03-2013
tags:
    - exponentiation
    - may13
    - medium
    - mischievous_me
    - number
    - simple
editorial_url: 'http://discuss.codechef.com/problems/JUNONGF'
time:
    view_start_date: 1368441000
    submit_start_date: 1368441000
    visible_start_date: 1368441000
    end_date: 1735669800
    current: 1493557702
layout: problem
---
All submissions for this problem are available.### **Problem description**

Chef Juno's girlfriend, May, is a programmer and a mathematician, and she loves solving problems. Everyday Chef Juno comes up with new problems for her to solve, otherwise she gets bored and depressed. He doesn't want her to feel so, but he has run out of all problems. He consults his Chef friends, who came up with a new problem.

The Chef City is an **N**-dimensional city of dimensions L\[0\]\*..\*L\[N-1\] and each of the (L\[0\]\*..\*L\[N-1\]) cells may have 0 to **V**-1 restaurants. They want to know the number of ways they can open restaurants in each cell of the city such that the sum of the number of restaurants in every sub-block(see details) in Chef City is divisible by **V**.

Chef Juno realizes that this number could be very huge given the size of Chef City, so to make this problem a little easier for his girlfriend (and for himself, as he should himself know the solution ;)), he wants the answer modulo 1000000007. But before asking her this problem, he wants to know the answer himself. So he turns to you for help. Please help him :)

**Details**

A sub-block of an N-dimensional hyperrectangle can be defined as an N-dimensional hyperrectangle of
1\*1\*..L\[i\]..\*1\*1 dimensions for i ranging from 0 to N-1, where the ith dimension is L\[i\].
For example, in a 2\*3\*2 cuboid, we can have sub-blocks of
2\*1\*1, 1\*3\*1 and 1\*1\*2 dimensions and each of the 12 cells can have
0 to V-1 restaurants in such a way that the sum of the number of restaurants in every sub-block is divisible by V.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of T test cases follows.

The first line of each test case contains two space-separated integers **V** and **N**.

Since the input file size may go large, we ask you to generate the input using the following scheme.

You have two lines of 6 integers each.

The first line consists of the integers **P\[0\], P\[1\], A0, B0, C0, M0**.

The second line consists of the integers **Q\[0\], Q\[1\], A1, B1, C1, M1**.

Using the above, you can generate arrays P\[\] and Q\[\] as follows:

P\[i\] = A0 \* A0 \* P\[i-1\] + B0 \* P\[i-2\] + C0 modulo (M0)

Q\[i\] = A1 \* A1 \* Q\[i-1\] + B1 \* Q\[i-2\] + C1 modulo (M1)

for i>=2 and i < N

From this, the ith dimension can be calculated as follows: 

The ith dimension, L\[i\] = P\[i\]\*(M1)+Q\[i\]+1 for i>=0 and i < N

### Output

For each test case, output a single line containing the answer. As was mentioned above, you should print this number modulo 1000000007.

### Constraints

1 <= T <= 100000

2 <= N <= 100

1 <= V <= 2^63 - 1

0<=A\[0\],A\[1\],B\[0\],B\[1\],C\[0\],C\[1\]<=100000

0 <= P\[0\], P\[1\] < max(10^5+1, M0)
and

0 <= Q\[0\], Q\[1\] < max(10^5+1, M1)

1<=M0 and M1<=2^31-1

All N dimensions after calculation will be between 1 and 2^63 – 1.

### Example

<pre><b>Input:</b>
<p></p>
3
1 2
1 1 1 1 1 1
1 1 1 1 1 1
3 2
1 1 1 1 1 2
2 1 1 1 1 1
3 3
1 1 1 1 1 2
1 1 0 0 0 2
<b>Output:</b>
1
729
387420489

</pre>### Explanation
**Test case 1**: Since V is equal to 1, there is only way to open restaurants in the 2 dimensional city of dimensions 3\*3:

| 0 0 0 |

| 0 0 0 |

| 0 0 0 |

Here the sum of the number of restaurants opened in every sub-block of dimensions 1\*3 and 3\*1
 is divisible by 1.

**Test case 2**: Here the dimensions of the city are 4\*3 and V=3.
So one of the ways to open restaurants in each cell of the
city is:

|1 0 2|

|2 1 0|

|1 2 0|

|2 0 1|

Here the sum of the number of restaurants opened in every sub-block of dimensions 1\*3 and 4\*1
is divisible by V=3.

**Test case 3**: Here we are given a 3-dimensional hyperrectangle
of dimensions 4\*4\*3 and V is 3.
So in each of the 48 cells, we can open 0 to 2 restaurants, but we have to ensure that sum of the number of restaurants in every 4\*1\*1 sub-block, 1\*4\*1 sub-block and 1\*1\*3 sub-block is divisible by 3.
