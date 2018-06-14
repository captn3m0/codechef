---
category_name: hard
problem_code: ZUBSECRT
problem_name: 'I - Secrets'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: zubaerkh
problem_tester: null
date_added: 19-11-2017
tags:
    - zubaerkh
time:
    view_start_date: 1517085000
    submit_start_date: 1517085000
    visible_start_date: 1517085000
    end_date: 1735669800
    current: 1525454409
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.There are **n** people who call themselves _friends_. However, you can't trust people blindly these days! Not each of these people trusts all the other people. The good thing is, still there are some pairs of people who trust each other and consider each other as _true friend_s. Also, each person has a _best friend_. Note that a _best friend_ is also a _true friend_.

These relations are symmetric. Formally, person **A** has several _true friend_s who also consider **A** as a _true friend_. Person **A** has exactly one _best friend_, **B**, and **A** is also the _best friend_ of **B**.

Each person has a secret. Those **n** secrets are written on **n** pieces of papers. Those papers are sealed inside **n** envelopes. The name of the person, whose secret is written on the paper inside an envelop, is written on the envelope. These **n** envelopes are distributed among the **n** people. At each step, one person exchanges the envelope (without opening it) he/she is holding with one of his/her _true friend_s. Your job is to determine the minimum number of steps (exchanges) required to end up at an arrangement where secret about each person reaches the hand of that person or the best friend of that person, i.e. finally after these exchanges when the envelopes are opened, the secrets of a particular person is either seen by himself or his best friend.

### Input

- The first line of the input is the number of test cases, **T**. Description of each test case is given below.
- The first line of each test case will contain the number of people **n**.
- The second line will contain **n** space-separated numbers **e1, e2, ... , en** which is a permutation of **1, 2, ... , n**. Initially, the **ith** person will hold the secret for **eith** person.
- The third line will contain **n** space-separated numbers **f1, f2, ... , fn** which is a permutation of **1, 2, ... , n**. The **fith** person is the best friend of the **ith** person.
- The fourth line will contain a number **m**.
- Each of next **m** lines will contain two space-separated integers **ai** and **bi** denoting that **ai** and **bi** are _true friend_s. Note that _best friend_s are _true friend_s by definition. They will not be explicitly listed as _true friend_s.
- An empty line will be printed after each test case.

### Output

For each test case, print "Case i: ", and then the answer, where i is the testcase number, 1-indexed. The answer should be the required number of steps. If it's not possible to make all the secrets (envelopes) reach in safe hands, the answer should be **"IMPOSSIBLE"** (without quotes)

### Constraints

- 1 ≤ **T** ≤ 10
- 1 ≤ **n** ≤ 10
- **n** will be even
- 0 ≤ **m** ≤ 10
- 1 ≤ **ei**, **fi**, **ai**, **bi** ≤ **n**
- The answer, if it exists, will be less than or equal to 18.

### Example

<pre><b>Input:</b>
2
4
2 3 4 1
3 4 1 2
1
2 3

4
2 1 4 3
3 4 1 2
0

<b>Output:</b>
Case 1: 4
Case 2: IMPOSSIBLE
</pre>