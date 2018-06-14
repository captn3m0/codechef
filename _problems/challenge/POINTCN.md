---
category_name: challenge
problem_code: POINTCN
problem_name: '(Challenge) Connecting computers'
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
    - TCL
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: kingofnumbers
problem_tester: null
date_added: 1-10-2017
tags:
    - challenge
    - hill
    - kingofnumbers
    - mst
    - oct17
editorial_url: 'https://discuss.codechef.com/problems/POINTCN'
time:
    view_start_date: 1508146200
    submit_start_date: 1508146200
    visible_start_date: 1508146200
    end_date: 1735669800
    current: 1525454454
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Chef has decided to start a new software company, the company's building has **N** offices numbered from 0 to **N**-1 and there's a computer in each office.

All offices' computers should be connected within a single network, so it's required to buy some ethernet cables and hubs. a cable connecting i-th office with j-th office has cost **Ci,j** also if the i-th office is connected with **j** other offices then it's required to buy a hub with capacity **j** and this will cost **Hi,j**, note that even if the hub with higher capacity is cheaper than the hub with capacity **j** the company will still buy the hub with capacity **j**. Each office should have exactly one hub.

Find a way for building the network so that all offices are connected to each other directly or indirectly while minimizing the total cost, it's not allowed to connect same pair of offices with more than one cable and it's not allowed to connect an office with itself.

Your solution is not required to find the most optimal solution. However, the less cost your solution will provide the more points you will get.

### Input

Since the input is large you will not be given it directly. Instead, you will be given some parameters and the generator used to generate the input.

The first line contains a single integer **T** denoting the number of test-cases

The first line of each test-case contains the integers **N**, **Cmax**, **Hmax**

The following 2\***N** lines, each contain two integers **Seedi,1**, **Seedi,2** the seeds required for generating the input.

Using one of the generators, [C++ generator](https://codechef_shared.s3.amazonaws.com/download/upload/OCT17/cppgen.cpp), [java generator](https://www.codechef.com/viewplaintext/15648975), [python 2 generator](https://codechef_shared.s3.amazonaws.com/download/upload/OCT17/pygen.py) you will get **C** and **H** arrays.

### Output

For each test-case output **N** lines, each line contains a string of **N** characters. if you want to connect i-th office and j-th office with a cable then i-th character of j-th line and j-th character of i-th line both should be '1' otherwise they should be '0'. Note that i-th character of i-th line should always be '0' because you can't connect an office with itself.

Note that cables information is enough to uniquely determine what hub should be bought for each office.

### Constraints

- **T** = **5**
- **N** = **1000**
- 0 ≤ **Ci,j** ≤ **1,000,000**
- 0 ≤ **Hi,j** ≤ **1,000,000**
- **Ci,j** = **Cj,i**
- **Ci,i** = 0
- 0 Seedi,1, **Seedi,2** 1018

### Test Generation

There will be 10 test-files.

The cost of a cable is chosen uniformly at random between 0 and **Cmax** and the cost of a hub is chosen uniformly at random between 0 and **Hmax**.

In each of the 10 test-files there are 5 test-cases, the values of **Cmax** and **Hmax** are:

- **First test-case:** **Cmax** = 40,000 and **Hmax** = 1,000,000
- **Second test-case:** **Cmax** = 100,000 and **Hmax** = 1,000,000
- **Third test-case:** **Cmax** = 200,000 and **Hmax** = 1,000,000
- **Fourth test-case:** **Cmax** = 500,000 and **Hmax** = 1,000,000
- **Fifth test-case:** **Cmax** = 1,000,000 and **Hmax** = 1,000,000

All seeds in input are randomly generated.

### Scoring

You will receive a WA if you didn't follow output format or there is a pair of offices which are not connected.

 Your score in a single test-case is equal to the cost of the network outputed in that test-case, your overall score is the sum of scores of all test-cases in all test-files.

During contest you will be able to get your score on first 2 test-files. After contest there will be rejudge on full tests set.

### Example

<pre><b>Input:</b>
1
4 10 20
123456789012 4567890123456
11111111111111 2222222222222
101010101010 2323232323232
112358132134 1928374655647
999999555555 5555559999999
234123124155 1241352352345
234213515123 1231245551223
523432523332 1234124515123

<b>Output:</b>
0111
1000
1000
1000
</pre>### Explanation

**Example case 1.** note that the example doesn't follow constraints on **T** and **N** and also seeds are set by hand in this sample.

In this example we have the array C:

<pre>
0 0 7 6
0 0 2 7
7 2 0 7
6 7 7 0
</pre>and the array H

<pre>
9 10 2 0
7 9 0 7
9 3 15 18
10 3 20 5
</pre>In the output, first office is connected all other offices and that will make the cost of the network equal to **S** = 0 + 7 + 6 + 0 + 9 + 3 + 3 = 28, so the score on this test-case is 28.
