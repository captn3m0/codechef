---
category_name: medium
problem_code: TEAMSIZE
problem_name: 'Team Formation'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: vamsi_kavala
problem_tester: null
date_added: 6-10-2011
tags:
    - deque
    - medium
    - oct12
    - vamsi_kavala
time:
    view_start_date: 1350293400
    submit_start_date: 1350293400
    visible_start_date: 1350293400
    end_date: 1735669800
    current: 1493557946
layout: problem
---
All submissions for this problem are available.Battle of the Chefs is coming up! It's a contest where different teams of different Chefs compete against each other. Our Chef wants to send one of the best teams from his entire staff. Selecting a good team is not about having the best people, but it is about having members who can cooperate and work well with each other. Chef is very aware of this fact. So he chooses the following strategy to decide a team. He lines up all his **N** cooks in a line. Each of these cooks has a skill level associated with him. Denote the level of the **i**-th cook as **skill\[i\]** for **1** ≤ **i** ≤ **N**. Let us make a few points on a team formation.

- A team can have any number of cooks.
- Each team should consist of consecutive cooks. So, for example, cooks with positions 3, 4, 5 can form a team, but cooks with positions 4, 5, 7, 8 can not.
- A team is a _candidate team_ if the difference between the maximum skill and the minimum skill of the cooks in the team does not exceed the threshold **C**.
- A cook can be in 0 or more _candidate teams_. Which means that _candidate teams_ can intersect.
- Two _candidate teams_ are considered to be different if there exists at least one cook who is in one team but not in the other.

Chef has not yet decided the team of what size he is going to send to the battle. To be precise we note, that the team size is the total number of cooks in it. For the given team size Chef wants to consider all candidate teams of this size according to the rules described above, evaluate them for himself and choose the best one. Denote the total number of candidate teams for the given size **K** as **cand\[K\]**. To increase the chances of choosing better team he wants the number of candidate teams to be as large as possible. But Chef is a human and can't evaluate too many teams. The maximal number of teams he can evaluate depends on many factors such as his mood or fatigue. We call it the Chef's limit. Denote the current Chef's limit as **M**. Since Chef still wants the total number of candidate teams to be as large as possible you need to find the team size **K** such that **cand\[K\] ≤ M**, among all such **K** find the value for which **cand\[K\]** is maximal and if such **K** is not unique find the minimal **K** among them. Since Chef's limit always changes according to his mood or fatigue you should find the required team size for several values of **M**. Chef also wants to know the total number of candidate teams for the size you will find. There will be **Q** values of **M** in all.

In order to keep the input small the skills of the cooks will be given in the following way.

- Skills of the first **X** cooks are given in the input, where **X = min(10000, N).**
- If **N** > **10000** skills of the remaining cooks for **10000** < **i** ≤ **N** are calculated as **skill\[i\]** = (**A** \* **skill\[i-1\]** + **B** \* **skill\[i-2\]** + **D**) **mod 230**, where **A**, **B** and **D** are given in the input. Here **mod** denotes the modulo operation, that is, **Y mod Z** is the remainder of division of **Y** by **Z**.

### Input

The first line of the input contains a single integer **T**, the number of test cases to follow. Each test case consists of 3 lines. The first line contains 6 space-separated integers **N, C, Q, A, B** and **D**. The second line contains **X = min(N, 10000)** space-separated integers, **i**-th integer among them represents the skill of the **i**-th cook, that is, the number **skill\[i\]**. The third line contains **Q** space-separated integers, the values of **M** for which you need to find the optimal team size and the number of candidate teams of this size.

### Output

For each test case, output **Q** lines containing the optimal team size for the corresponding value of **M** and the number of candidate teams corresponding to this team size separated by a space.

### Constraints

**1** ≤ **T** ≤ **5****1** ≤ **N** ≤ **500000** ≤ **C** < **230****1** ≤ **Q** ≤ **1000**
 ≤ **A**, **B**, **D** < **230** ≤ **skill\[i\]** < **230** for **1** ≤ **i** ≤ **X****1** ≤ **M** ≤ **N**

### Example

<pre>
<b>Input:</b>
2
6 3 3 1 1 1
6 2 4 5 6 3
4 3 6
6 10 1 2 2 2
1 1000 1 1000 1 1000
4

<b>Output:</b>
2 4
3 3
1 6
2 0

</pre>### Explanation
**Case 1.**
With team size 2, we have 4 candidate teams: {2, 4}, {4, 5}, {5, 6}, and {6, 3}. Here numbers denote the cooks' skills. With any other team size, the number of candidate teams is either less than 4 or greater than 4. Similarly, with team size 3, we have 3 candidate teams, which are {2, 4, 5}, {4, 5, 6} and {5, 6, 3}.
With team size 1, we have 6 candidate teams with one member in each team.

**Case 2.**
With team size 1, we have 6 possible candidate teams. But 6 > 4. For all other team sizes, the total number of candidate teams is 0. Thus, the answer is the smallest size among them, i.e., 2.
