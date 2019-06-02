---
category_name: hard
problem_code: KOL15D
problem_name: Seats
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: balajiganapath
problem_tester: null
date_added: 11-10-2015
tags:
    - acmkol15
    - balajiganapath
    - maps
    - medium
    - tree
    - tree
editorial_url: 'http://discuss.codechef.com/problems/KOL15D'
time:
    view_start_date: 1446296400
    submit_start_date: 1446296400
    visible_start_date: 1446296400
    end_date: 1735669800
    current: 1525198968
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.There are **N** seats in a theatre, all of them in a single row. The seats are numbered from 1 to **N**. You are given two types of events:

- **1** — A person arrives. Persons are numbered from 1 in order of their arrival.
- **2 i** — Person **i** leaves the theatre.

A person arriving in the theatre chooses a seat according to the following algorithm:
If the entire theatre is empty, the person will occupy seat 1.
Otherwise, he will occupy the seat which is farthest possible from any nearest seated persons. In other words, in the seat which maximizes the minimum distance to any other person currently seated. If there are many such seats, the person will occupy the leftmost of them.

### Input

The first line of input contains 2 space-separated integers: the first is **N**, denoting the number of seats, and the second is **Q**, denoting the number of events. Then **Q** events follow in the format described above. ### Output

For each person arriving, output the seat number that he occupies. ### Constraints

- 1 ≤ N ≤ 1018
- 1 ≤ Q ≤ 2 \* 105
- Each query is valid.

### Example

<pre><b>Input:</b>
2 7
1
1
2 1
1
2 2
2 3
1

<b>Output:</b>
1
2
1
1
</pre>

**Explanation:**
Initially both seats are empty (x denotes empty seat and number denotes id of person occupying it):
xx

Query 1: Person #1 arrives and takes seat 1 (so output 1):
1x

Query 2: Person #2 arrives and takes seat 2 (so output 2):
12

Query 3: Person #1 leaves:
x2

Query 4: Person #3 arrives and takes seat 1 (so output 1):
32

Query 5: Person #2 leaves:
3x

Query 6 Person #3 leaves:
xx

Query 7: Person #4 arrives and takes seat 1 (so output 1):
4x
