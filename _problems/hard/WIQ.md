---
category_name: hard
problem_code: WIQ
problem_name: 'Waiting in a Queue'
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
    - PYPY
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: fudail
problem_tester: null
date_added: 31-05-2017
tags:
    - fudail
time:
    view_start_date: 1496516400
    submit_start_date: 1496516400
    visible_start_date: 1496516400
    end_date: 1735669800
    current: 1497589517
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKEL17/mandarin/WIQ.pdf), [Russian](http://www.codechef.com/download/translated/SNCKEL17/russian/WIQ.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKEL17/vietnamese/WIQ.pdf) as well.

You have **n** requests in a queue, and each request has distinct owner. That is, there are **n** owners, and each of them own exactly one of the requests. The requests are numbered from 1 to **n**, and they are initially in order in the queue. That is, Request 1 is at the head (beginning) of the queue, and Request **n** is at the tail (end). The process starts at time = 1, ie. the first minute. But not all the owners are ready from the beginning. The owner of Request i has a **bi** associated with him, which is the minute from which he will be ready.

Each time you pick the first request in the queue. Suppose that is Request i. If its owner isn't ready (that is, **bi** is strictly greater than the current time), you put the request at the end of the queue. Otherwise, you do the request, which takes **ai** minutes. But the process of checking whether an owner is ready or not takes one minute by itself. Assume that other operations are done instantaneously.

Note that we check if the owner is ready at that exact minute, even though the job does not start at this minute. That is, if we are checking at time = 5, we know that the job won't start until time = 6, but we still check if the owner is ready at time = 5. Please look at the Example and Explanation given below for a better understanding of the process.

For every request, output the minute in which it is completed. That is, Request i has duration **ai** minutes, and so it has to run from time = x, for some x, till time = (x + **ai** - 1). And the answer for this would be (x + **ai** - 1).

### Input

- The first line of input contains a single integer **T**, denoting the number of test cases.
- Each test case contains three lines. The first line contains one integer **n**, denoting the number of requests.
- The second line contains **n** space-separated integers where the i-th integer denotes **ai**.
- The third line contains **n** space-separated integers where the i-th integer denotes **bi**.

### Output

For each testcase, output a single line containing **n** integers, the i-th integer being the minute when the Request i is done.

### Constraints

- 1 ≤ **T** ≤ 150
- The sum of **n** in all test cases won't exceed 106
- 1 ≤ **ai** , **bi** ≤ 1012

### Example

<pre><b>Input:</b>
1
2
3 2
2 2

<b>Output:</b>
8 4
</pre>
### Explanation

We will see what happens at every minute:

- time = 1: The queue is (1, 2), and so the owner of Request 1 is checked as to whether he is ready or not. This checking process takes up this entire minute. He is not ready, because **b1** > time (2 > 1). So the queue now becomes (2, 1).
- time = 2: The owner of Request 2 is checked as to whether he is ready or not. This checking process takes up this entire minute. He is ready, because **b2** ≤ time (2 ≤ 2).
- time = 3, and 4: These two (**a2**) minutes are taken to finish Request 2. So Request 2 is completed in minute 4.
- time = 5: The queue is now (1). The owner of Request 1 is checked as to whether he is ready or not. This checking process takes up this entire minute. He is ready, because **b1** ≤ time (2 ≤ 5).
- time = 6, 7 and 8: These three (**a1**) minutes are taken to finish Request 1. So Request 1 is completed in minute 8.
