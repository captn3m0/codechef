---
category_name: easy
problem_code: IPCTRAIN
problem_name: 'IPC Trainers'
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
    - 'CPP 6.3'
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
    - PYPY
    - PYTH
    - 'PYTH 3.5'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 5-07-2017
tags:
    - admin2
    - easy
    - greedy
    - heap
    - july17
    - stl
editorial_url: 'https://discuss.codechef.com/problems/IPCTRAIN'
time:
    view_start_date: 1500283800
    submit_start_date: 1500283800
    visible_start_date: 1500283800
    end_date: 1735669800
    current: 1514816003
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JULY17/mandarin/IPCTRAIN.pdf), [Russian](http://www.codechef.com/download/translated/JULY17/russian/IPCTRAIN.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JULY17/vietnamese/IPCTRAIN.pdf) as well.

During the Indian Programming Camp (IPC), there are **N** trainers. The camp runs for **D** days. Each day, there can be at most one lecture. The i-th trainer arrives on day **D**i and then stays till the end of the camp. He also wants to teach exactly **T**i lectures. For each lecture that a trainer was not able to teach, he will feel sad and his sadness level will be increased by **Si**.

You are the main organizer of the contest. You want to find minimum total sadness of the trainers.

### Input

The first line of the input contains an integer **T**, denoting the number of testcases.

For each test case, the first line contains two space separated integers, **N, D**.

The i-th of the next **N** lines will contain three space separated integers: **D**i, **T**i, **S**i respectively.

### Output

For each test case, output a single integer corresponding to the minimum total sadness of the trainers achievable.

### Constraints

- 1 ≤ **T** ≤ 10
- 1 ≤ **N, D** ≤ 105
- 1 ≤ **D**i, **T**i ≤ D
- 1 ≤ **S**i ≤ 105

### Subtasks

**Subtask #1 (40 points)**

- 1 ≤ **T** ≤ 10
- 1 ≤ **N, D** ≤ 103
- 1 ≤ **D**i, **T**i ≤ D
- 1 ≤ **S**i ≤ 103

**Subtask #2 (60 points)**

- Original constraints

### Example

<pre>
<b>Input</b>
3
2 3
1 2 300
2 2 100
2 3
1 1 100
2 2 300
2 3
3 2 150
1 1 200

<b>Output</b>
100
0
150

</pre>### Explanation
**Example case 1**. Both the first and second trainer want to take exactly two lectures. The first trainer arrives on the 1st day and the second trainer arrives on the 2nd day. Consider a schedule where the first trainer takes the first two lectures, and the second trainer takes the last lecture on the day 3. This way the second trainer will take only one lecture but wanted to take two. Thus, his sadness will be 100. The first trainer took all the lectures that he wanted to take (ie. two lectures). Thus the total sadness is 100 + 0 = 100. You can check that no other way of assigning trainers to the days will give a better answer than this.

**Example case 2**. In this case, the trainers can all take all their ideal number of lectures.

**Example case 3**. In this case, the first trainer arrives on day 3 and wants to take two lectures. This is not possible as he can take at most one lecture on day 3 and the camp ends on day 3. The second trainer wants to take only one lecture which he can take on any one of the 1st or 2nd days. You can see that in one of the first or second days, no lecture will be held.
