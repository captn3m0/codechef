---
category_name: medium
problem_code: TABUS
problem_name: 'Traveling Plan'
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
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: tuananh93
problem_tester: anton_lunyov
date_added: 26-01-2013
tags:
    - binary
    - cook32
    - dynamic
    - easy
    - graph
    - tuananh93
editorial_url: 'http://discuss.codechef.com/problems/TABUS'
time:
    view_start_date: 1364150220
    submit_start_date: 1364150220
    visible_start_date: 1364150220
    end_date: 1735669800
    current: 1493557941
layout: problem
---
All submissions for this problem are available.According to many researches, people can stand on a bus for several hours, but waiting for a bus for more than 30 minutes at a bus station can make us exhausted. The Chef is a perfect example for this fact. He always tries to reduce the longest period of time of waiting for a bus. Therefore, optimizing the traveling plan for him is far from an easy task.

Let's consider the bus system with **N** bus stations (numbered from **1** to **N**) and **M** buses (numbered from **1** to **M**). Each bus is represented by 4 integer numbers **U, V, S, E** which means it will start at the bus station **U** at the time **S** and arrive at the bus station **V** at the time **E** with no intermediate bus stations. If passenger arrives at the bus station **U** at the time **X** ≤ **S**, he has to wait for **S − X** units of time to catch this bus. Note, that if he arrives at the bus station **U** exactly at time **S** he can catch this bus with no waiting time.

The Chef starts at the time 0 in the bus station **1**, and he wants to arrive at the bus station **N** in a way that the longest period that he spends for waiting for a bus is as small as possible. Besides, he must be at the bus station **N** before or at the time **T** for a specially important meeting. Note, that he may wait for a meeting if he arrives at the bus station **N** early but that period is not our concern here, since he doesn't wait for any bus at that time.

### Input

The first line of the input contains three space-separated integers **N**, **T** and **M**, denoting the number of bus stations, the deadline for coming to bus station **N** and the number of buses, respectively. Each of the following **M** lines contains four space-separated integers **U**, **V**, **S**, **E**, the parameters of the current bus as described in the problem statement.

### Output

If Chef cannot arrive at the bus station **N** before or at the time **T**, output **-1**. Otherwise, output the maximum period of time he has to wait for a bus in the optimal traveling plan.

### Constraints

- **2** ≤ **N** ≤ **50000**
- **1** ≤ **T** ≤ **109**
- **1** ≤ **M** ≤ **100000** (**105**)
- **1** ≤ **U** ≤ **N**
- **1** ≤ **V** ≤ **N**
- **U** ≠ **V**
- 0 ≤ **S** &lt; **E** ≤ **109**

### Example

<pre>
<b>Input:</b>
5 10 5
1 2 1 2
1 5 3 4
2 4 4 5
2 5 5 6
4 5 6 7

<b>Output:</b>
2
</pre>
### Explanation

There are three different traveling plans:

- **bus 1 → bus 3 → bus 5**. His waiting time for each bus is 1, 2, 1, respectively.
- **bus 2**. His waiting time is 3.
- **bus 1 → bus 4**. His waiting time for each bus is 1, 3, respectively.

For each traveling plan Chef arrives at the bus station **N = 5** before the time **T = 10**. But only the first traveling plan is optimal, since the longest period of time his has to wait is 2.
