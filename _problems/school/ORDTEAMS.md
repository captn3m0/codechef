---
category_name: school
problem_code: ORDTEAMS
problem_name: 'Ordering teams'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 30-10-2017
tags:
    - acmind17
    - admin2
    - simple
    - sorting
time:
    view_start_date: 1509900600
    submit_start_date: 1509900600
    visible_start_date: 1509900600
    end_date: 1735669800
    current: 1525454444
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.In ACM-ICPC contests, there are usually three people in a team. For each person in the team, you know their scores in three skills - hard work, intelligence and persistence.

You want to check whether it is possible to order these people (assign them numbers from 1 to 3) in such a way that for each **1 ≤ i ≤ 2**, **i+1**-th person is stricly *better* than the **i**-th person.

A person **x** is said to be *better* than another person **y** if **x** doesn't score less than **y** in any of the skills and scores more than **y** in at least one skill.

Determine whether such an ordering exists.

### Input

The first line fo the input contains an integer **T** denoting the number of test cases.

Each test consists of three lines. Each of these lines contains three space separated integers **s1, s2** and **s3** denoting the scores of one member of the team in each of the three skills, in the given order.

### Output

For each test case, output a single line containing "yes" if such an ordering exists or "no" if doesn't exist (without quotes).

### Constraints

- **1 ≤ T ≤ 1000**
- **1 ≤ s1, s2, s3 ≤ 100**

### Example

<pre>
<b>Input</b>
3
1 2 3
2 3 4
2 3 5
1 2 3
2 3 4
2 3 4
5 6 5
1 2 3
2 3 4

<b>Output</b>
yes
no
yes
</pre>
### Explanation

**Test Case 1**: We can order them as (3, 2, 1). Person 3 is *better* than Person 2 because his scores in the first two skills are not lesser than Person 2's. And in skill 3, Person 3 scores higher. Similarly, Person 2 is *better* than Person 1. He scores more than Person 1 in every skill, in fact.
